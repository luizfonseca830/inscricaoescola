<?php

declare(strict_types = 1);

namespace App\Charts;

use App\Models\Pessoa;
use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;

class InscricoesChart extends BaseChart
{
    public ?string $name = 'chart_inscricao';
    public ?string $routeName = 'chart_inscricao';
    public ?string $prefix = 'some_prefix';
    public ?array $middlewares = ['auth'];

    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {

        $auxiliar_topografia = Pessoa::where('cargo_id', '1')->whereNotNull('anexo_id')->get()->count();
        $encarregado_campo = Pessoa::where('cargo_id', '2')->whereNotNull('anexo_id')->get()->count();
        $tecnico_agrimensura = Pessoa::where('cargo_id', '3')->whereNotNull('anexo_id')->get()->count();
        $topografo_partico = Pessoa::where('cargo_id', '4')->whereNotNull('anexo_id')->get()->count();
        $arquiteto = Pessoa::where('cargo_id', '5')->get()->whereNotNull('anexo_id')->count();
        $engenheiro_civil = Pessoa::where('cargo_id', '6')->whereNotNull('anexo_id')->get()->count();
        $engenheiro_eletrico = Pessoa::where('cargo_id', '7')->whereNotNull('anexo_id')->get()->count();
        return Chartisan::build()
            ->labels(['Auxiliar de Topografia', 'Encarregado de Campo', 'Técnico em Agrimensura ou equivalente', 'Topógrafo Prático', 'Arquiteto e Urbanista',
                'Engenheiro Civil', 'Engenheiro Eletricista'])
            ->dataset('Nivel Fundamental', [$auxiliar_topografia, $encarregado_campo, 0, 0, 0, 0, 0])
            ->dataset('Nível Médio', [0, 0, $tecnico_agrimensura, $topografo_partico, 0, 0, 0])
            ->dataset('Nível Superior', [0, 0, 0, 0, $arquiteto, $engenheiro_civil, $engenheiro_eletrico]);
    }
}
