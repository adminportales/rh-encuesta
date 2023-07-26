<?php

namespace App\Http\Controllers;

use App\Models\Answers;
use App\Models\Questions;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class Respuesta extends Controller
{
    //vistas de las encuestas
    function index()
    {
       
        $preguntas = Questions::all()->where('company','BH TRADE MARKET ');
        return view('welcome', compact('preguntas'));
    }


    function finish()
     {
        
        return view('finish');
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
            $respuestaModel->company='BH-BH TRADE MARKET';
            $respuestaModel->save();
        }                
        return redirect()->route('encuesta.fin');
    }

}