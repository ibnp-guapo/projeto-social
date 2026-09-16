<?php

declare(strict_types=1);

namespace App\Tests\Unit;

use PHPUnit\Framework\TestCase;

final class TeoriaDaMudancaTest extends TestCase
{
    private string $docPath;

    protected function setUp(): void
    {
        $this->docPath = dirname(__DIR__, 2) . '/docs/teoria_da_mudanca.md';
    }

    public function testArquivoTeoriaDaMudancaExiste(): void
    {
        $this->assertFileExists($this->docPath, 'O arquivo docs/teoria_da_mudanca.md deve existir.');
    }

    public function testEstruturaDeSecoesObrigatoriasEstaPresente(): void
    {
        $this->assertFileExists($this->docPath);
        $content = (string) file_get_contents($this->docPath);

        $secoesObrigatorias = [
            '# Teoria da Mudança e Matriz Lógica — Programa de Educação Integral',
            '## 1. Contexto e Diagnóstico Territorial (Guapó-GO)',
            '## 2. Cadeia de Valor do Impacto Social',
            '## 3. Diagrama Visual da Teoria da Mudança',
            '## 4. Matriz Lógica do Projeto (Quadro Lógico)',
            '## 5. Plano de Metas Trienal (Anos 1, 2 e 3)',
            '## 6. Alinhamento com os Objetivos de Desenvolvimento Sustentável (ODS - ONU)',
            '## 7. Governança, Monitoramento e Avaliação (M&A)',
        ];

        foreach ($secoesObrigatorias as $secao) {
            $this->assertStringContainsString($secao, $content, "A seção '{$secao}' é obrigatória na documentação.");
        }
    }

    public function testCadeiaDeImpactoPossuiOsSeisElosFundamentais(): void
    {
        $this->assertFileExists($this->docPath);
        $content = (string) file_get_contents($this->docPath);

        $elos = [
            'Problema Central' => ['892', '16,4%', '2.669', 'vulnerabilidade'],
            'Insumos' => ['Fase 3', 'auditório multiuso', 'equipe pedagógica', 'merenda'],
            'Atividades' => ['estimulação precoce', 'contraturno', 'oficinas formativas'],
            'Produtos' => ['vagas', 'refeições', 'reuniões'],
            'Resultados Intermediários' => ['marcos de desenvolvimento', 'segurança alimentar', 'mercado de trabalho'],
            'Impacto Sistêmico' => ['ciclo intergeracional de pobreza', 'ODS 4', 'ODS 1'],
        ];

        foreach ($elos as $elo => $termosEsperados) {
            $this->assertStringContainsString($elo, $content, "O elo '{$elo}' deve estar explicitado na cadeia de impacto.");
            foreach ($termosEsperados as $termo) {
                $this->assertStringContainsString(
                    $termo,
                    $content,
                    "O elo '{$elo}' deve referenciar o termo ou indicador chave '{$termo}'."
                );
            }
        }
    }

    public function testDiagramaMermaidPresenteESintaticamenteValido(): void
    {
        $this->assertFileExists($this->docPath);
        $content = (string) file_get_contents($this->docPath);

        $this->assertMatchesRegularExpression(
            '/```mermaid\s+(flowchart|graph)\s+(TD|TB|LR)/',
            $content,
            'O documento deve conter um diagrama Mermaid (flowchart/graph).'
        );

        $this->assertStringContainsString('subgraph', $content, 'O diagrama Mermaid deve estruturar os elos em subgraphs.');
        $this->assertStringContainsString('Insumos', $content);
        $this->assertStringContainsString('Atividades', $content);
        $this->assertStringContainsString('Produtos', $content);
        $this->assertStringContainsString('Resultados', $content);
        $this->assertStringContainsString('Impacto', $content);
    }

    public function testMatrizLogicaPossuiColunasENiveisCompletos(): void
    {
        $this->assertFileExists($this->docPath);
        $content = (string) file_get_contents($this->docPath);

        $cabecalhosMatriz = [
            'Nível',
            'Objetivo',
            'Indicadores Objetivamente Verificáveis',
            'Fontes de Verificação',
            'Premissas e Riscos',
        ];

        foreach ($cabecalhosMatriz as $cabecalho) {
            $this->assertStringContainsString($cabecalho, $content, "A Matriz Lógica deve conter a coluna '{$cabecalho}'.");
        }

        $niveis = ['Impacto', 'Resultados Intermediários', 'Produtos', 'Atividades', 'Insumos'];
        foreach ($niveis as $nivel) {
            $this->assertStringContainsString($nivel, $content, "A Matriz Lógica deve cobrir o nível '{$nivel}'.");
        }
    }

    public function testPlanoDeMetasTrienalApresentaProjecaoQuantitativa(): void
    {
        $this->assertFileExists($this->docPath);
        $content = (string) file_get_contents($this->docPath);

        $this->assertStringContainsString('Ano 1', $content);
        $this->assertStringContainsString('Ano 2', $content);
        $this->assertStringContainsString('Ano 3', $content);

        $indicadoresMetas = [
            'Vagas Ativas',
            'Educação Infantil',
            'Contraturno',
            'Refeições Balanceadas',
            'Mães / Famílias Acompanhadas',
        ];

        foreach ($indicadoresMetas as $indicador) {
            $this->assertStringContainsString($indicador, $content, "O Plano de Metas deve projetar '{$indicador}'.");
        }
    }

    public function testAlinhamentoComODSPossuiMetasOficiais(): void
    {
        $this->assertFileExists($this->docPath);
        $content = (string) file_get_contents($this->docPath);

        $this->assertStringContainsString('ODS 1', $content);
        $this->assertStringContainsString('ODS 4', $content);
        $this->assertStringContainsString('ODS 2', $content);
        $this->assertStringContainsString('ODS 8', $content);

        $this->assertStringContainsString('4.2', $content, 'Deve referenciar a Meta 4.2 do ODS 4 (desenvolvimento na primeira infância).');
        $this->assertStringContainsString('1.2', $content, 'Deve referenciar a Meta 1.2 do ODS 1 (redução da pobreza em todas as dimensões).');
    }
}
