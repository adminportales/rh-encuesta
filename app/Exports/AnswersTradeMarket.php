<?php

namespace App\Exports;

use App\Models\Answers;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;


class AnswersTradeMarket implements FromView
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
        return view('exports.trademarket', [
            'Answers' => Answers::where('company','Trade Market 57')->get()
        ]);
    }


}
