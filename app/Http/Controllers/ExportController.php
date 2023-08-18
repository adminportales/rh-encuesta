<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Exports\AnswersExport;
use App\Exports\AnswersPromolifeExport;
use App\Exports\AnswersTradeMarket;
use App\Exports\AnswersPromozale;
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller
{
    public function export()
    {
        return Excel::download(new AnswersExport, 'answers_bh.xlsx');
    }

    public function exportPromolife()
    {
        return Excel::download(new AnswersPromolifeExport, 'answers_promolife.xlsx');
    }

    public function exportPromozale()
    {
        return Excel::download(new AnswersPromozale, 'answers_promozale.xlsx');
    }

    public function exportTradeMarket()
    {
        return Excel::download(new AnswersTradeMarket, 'answers_trade.xlsx');
    }

    
}
