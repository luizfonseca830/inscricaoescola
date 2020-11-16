<?php

declare(strict_types = 1);

namespace App\Charts;

use App\Models\Pessoa;
use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;

class AvaliacoesChart extends BaseChart
{
    public ?string $name = 'chart_avaliacao';
    public ?string $routeName = 'chart_avaliacao';
    public ?string $prefix = 'some_prefix';
    public ?array $middlewares = ['auth'];
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {
        $avaliados = Pessoa::whereNotNull('status')->get()->count();
        $nao_avaliados = Pessoa::whereNull('status')->whereNull('anexo_id')->get()->count();
        $aprovados = Pessoa::where('status_aprovado', '1')->get()->count();
        $reprovados = Pessoa::where('status_aprovado', '0')->get()->count();
        return Chartisan::build()
            ->labels(['Avaliados', 'Não Avaliados', 'Aprovados', 'Reprovados'])
            ->dataset('Avaliação', [$avaliados, $nao_avaliados, 0, 0])
            ->dataset('Aprovações', [0, 0, $aprovados, $reprovados]);
    }
}
