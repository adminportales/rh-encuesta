<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Questions;
use Illuminate\Support\Str;
use App\Models\Answers;


class PromoSaleController extends Controller
{
    
    public function index()
    {
        $preguntas = Questions::all()->where('company','PROMO SALE');
        return view('promo_sale.promo_sale',compact('preguntas'));
    }

    public function store(Request $request)
    {          
        $uuid =  Str::uuid();
        
        $respuestas = $request->input('question_id');

        $preguntas=Questions::all();

        $rules = [];
        foreach ($preguntas as $pregunta) {

            if($pregunta->type === "Libre"){
                $rules["question_id.{$pregunta->id}.*"] = 'max:255';
            }else{
                $rules["question_id.{$pregunta->id}.*"] = 'required|max:255';
            }

        }
    
        $request->validate($rules); 



        foreach ($respuestas as $preguntaId => $respuesta) 
        {            
            $respuestaString = implode(',', $respuesta);            
            $respuestaModel = new Answers();
            $respuestaModel->uuid =$uuid;
            $respuestaModel->question_id = $preguntaId;
            $respuestaModel->answer = $respuestaString; 
            $respuestaModel->company='PROMO SALE';
            $respuestaModel->save();
        }                
        return redirect()->route('encuesta.fin');
    }
}
