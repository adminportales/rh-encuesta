<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Exports\AnswersExport;
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller
{
    public function export()
    {
        return Excel::download(new AnswersExport, 'answers_promolife.xlsx');
    }
    
    

}
