<?php

declare(strict_types=1);

namespace App\Tests\Unit;

use App\Services\ConsorcioFase2Service;
use PHPUnit\Framework\TestCase;

final class ConsorcioFase2ServiceTest extends TestCase
{
    public function testCalibracaoAgosto2026Exatamente112Parcelas(): void
    {
        $service = new ConsorcioFase2Service();

        $pagamento = $service->calcularProgresso(new \DateTimeImmutable('2026-08-15'));
        $this->assertSame(112, $pagamento['parcelas_pagas']);

        $vespera = $service->calcularProgresso(new \DateTimeImmutable('2026-08-14'));
        $this->assertSame(111, $vespera['parcelas_pagas']);
    }

    public function testSetembro2026ViraNoDia15(): void
    {
        $service = new ConsorcioFase2Service();

        $antes = $service->calcularProgresso(new \DateTimeImmutable('2026-09-13'));
        $this->assertSame(112, $antes['parcelas_pagas']);
        $this->assertSame('15/09/2026', $antes['proximo_vencimento']);

        $noDia = $service->calcularProgresso(new \DateTimeImmutable('2026-09-15'));
        $this->assertSame(113, $noDia['parcelas_pagas']);
        $this->assertSame('15/10/2026', $noDia['proximo_vencimento']);
    }

    public function testValoresMonetariosEPercentuaisCalculadosCorretamente(): void
    {
        $service = new ConsorcioFase2Service();
        $progresso = $service->calcularProgresso(new \DateTimeImmutable('2026-08-15'));

        $this->assertSame(62.6, $progresso['percentual_pago']);
        $this->assertSame(312849.16, $progresso['valor_amortizado']);
        $this->assertSame(187150.84, $progresso['saldo_devedor']);
        $this->assertSame(2793.30, $progresso['valor_parcela']);
    }

    public function testConsorcioQuitadoLimitaEm179Parcelas(): void
    {
        $service = new ConsorcioFase2Service();
        $progresso = $service->calcularProgresso(new \DateTimeImmutable('2035-06-15'));

        $this->assertSame(179, $progresso['parcelas_pagas']);
        $this->assertSame(0, $progresso['parcelas_restantes']);
        $this->assertSame(100.0, $progresso['percentual_pago']);
        $this->assertSame(0.0, $progresso['saldo_devedor']);
        $this->assertTrue($progresso['quitado']);
        $this->assertSame('Quitado', $progresso['proximo_vencimento']);
    }

    public function testViradaDeAnoLidaComMultiplicacaoDeAnosEMeses(): void
    {
        $service = new ConsorcioFase2Service();

        $dezembro = $service->calcularProgresso(new \DateTimeImmutable('2026-12-31'));
        $this->assertSame(116, $dezembro['parcelas_pagas']);

        $janeiro = $service->calcularProgresso(new \DateTimeImmutable('2027-01-16'));
        $this->assertSame(117, $janeiro['parcelas_pagas']);

        $janeiroVespera = $service->calcularProgresso(new \DateTimeImmutable('2027-01-14'));
        $this->assertSame(116, $janeiroVespera['parcelas_pagas']);
    }
}