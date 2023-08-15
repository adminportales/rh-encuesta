<?php

namespace App\Exports;

use App\Models\Answers;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class AnswersExport implements FromView
{
    // /**
    // * @return \Illuminate\Support\Collection
    // */
    // public function collection()
    // {
    //     return Answers::all();

    // }

     /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view('exports.plantillas', [
            'Answers' => Answers::where('company','PROMO LIFE')->get()
        ]);
    }

}
