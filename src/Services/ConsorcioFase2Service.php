<?php

declare(strict_types=1);

namespace App\Services;

use DateTimeImmutable;
use DateTimeInterface;

/**
 * Motor de cálculo temporal determinístico e auditável do consórcio
 * estrutural da Fase 2 da construção (Fundações, Alvenaria Estrutural,
 * Lajes e Cobertura Metálica).
 *
 * Cota de R$ 500.000,00 em 179 parcelas com vencimento fixo no dia 15 de
 * cada mês, assumida integralmente pela mantenedora IBNP Guapó. O cálculo
 * é 100% baseado no contrato (sem integração externa): dado o ponto âncora
 * de 112 parcelas quitadas em agosto de 2026, o progresso avança
 * automaticamente conforme a data corrente.
 */
final class ConsorcioFase2Service
{
    public const VALOR_TOTAL = 500000.0;
    public const TOTAL_PARCELAS = 179;
    public const DIA_VENCIMENTO = 15;

    public const ANO_ANCORA = 2026;
    public const MES_ANCORA = 8;
    public const PARCELAS_ANCORA = 112;

    private const MESES_POR_EXTENSO = [
        1 => 'janeiro',
        2 => 'fevereiro',
        3 => 'março',
        4 => 'abril',
        5 => 'maio',
        6 => 'junho',
        7 => 'julho',
        8 => 'agosto',
        9 => 'setembro',
        10 => 'outubro',
        11 => 'novembro',
        12 => 'dezembro',
    ];

    /**
     * Calcula o progresso de amortização do consórcio até a data informada
     * (ou a data corrente, quando omitida).
     *
     * @return array<string, int|float|string|bool>
     */
    public function calcularProgresso(?DateTimeInterface $dataReferencia = null): array
    {
        $data = $dataReferencia ?? new DateTimeImmutable('now');

        $ano = (int) $data->format('Y');
        $mes = (int) $data->format('m');
        $dia = (int) $data->format('d');

        $diferencaMeses = ($ano - self::ANO_ANCORA) * 12 + ($mes - self::MES_ANCORA);

        if ($dia < self::DIA_VENCIMENTO) {
            $diferencaMeses--;
        }

        $parcelasPagas = (int) max(
            0,
            min(self::TOTAL_PARCELAS, self::PARCELAS_ANCORA + $diferencaMeses)
        );

        $percentualPago = round(($parcelasPagas / self::TOTAL_PARCELAS) * 100, 1);
        $valorAmortizado = round(($parcelasPagas / self::TOTAL_PARCELAS) * self::VALOR_TOTAL, 2);
        $saldoDevedor = round(self::VALOR_TOTAL - $valorAmortizado, 2);
        $valorParcela = round(self::VALOR_TOTAL / self::TOTAL_PARCELAS, 2);
        $quitado = $parcelasPagas >= self::TOTAL_PARCELAS;

        return [
            'valor_total'        => self::VALOR_TOTAL,
            'total_parcelas'     => self::TOTAL_PARCELAS,
            'parcelas_pagas'     => $parcelasPagas,
            'parcelas_restantes' => self::TOTAL_PARCELAS - $parcelasPagas,
            'percentual_pago'    => $percentualPago,
            'valor_amortizado'   => $valorAmortizado,
            'saldo_devedor'      => $saldoDevedor,
            'valor_parcela'      => $valorParcela,
            'dia_vencimento'     => self::DIA_VENCIMENTO,
            'proximo_vencimento' => $this->proximoVencimento($data, $quitado),
            'quitado'            => $quitado,
            'mes_referencia'     => $this->mesReferencia($data),
        ];
    }

    private function proximoVencimento(DateTimeInterface $data, bool $quitado): string
    {
        if ($quitado) {
            return 'Quitado';
        }

        if ((int) $data->format('d') < self::DIA_VENCIMENTO) {
            return $data->format('15/m/Y');
        }

        return DateTimeImmutable::createFromInterface($data)
            ->modify('+1 month')
            ->format('15/m/Y');
    }

    private function mesReferencia(DateTimeInterface $data): string
    {
        return (self::MESES_POR_EXTENSO[(int) $data->format('m')] ?? '')
            . ' de ' . $data->format('Y');
    }
}