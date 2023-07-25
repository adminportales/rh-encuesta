<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Questions;
use Illuminate\Support\Str;
use App\Models\Answers;

class PromolifeController extends Controller
{
    
    public function index()
        {
            $preguntas = Questions::all()->where('company','PROMO LIFE');
            return view('promolife.promo',compact('preguntas'));
        }
        
        public function store(Request $request)
        {          
            $uuid =  Str::uuid();
            
            $respuestas = $request->input('question_id');
            foreach ($respuestas as $preguntaId => $respuesta) 
            {            
                $respuestaString = implode(',', $respuesta);            
                $respuestaModel = new Answers();
                $respuestaModel->uuid =$uuid;
                $respuestaModel->question_id = $preguntaId;
                $respuestaModel->answer = $respuestaString; 
                $respuestaModel->company='PROMO LIFE';
                $respuestaModel->save();
            }                
            return redirect()->route('encuesta.fin');
        }

    }
