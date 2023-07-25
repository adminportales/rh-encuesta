<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Answers;
use App\Models\Questions;


class Tm57Controller extends Controller
{
    public function index()
    {   
        $preguntas = Questions::all();
        return view('tm57.tm57',compact('preguntas'));
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
            $respuestaModel->company='TM57';
            $respuestaModel->save();
        }                
        return redirect()->route('encuesta.fin');
    }
    

}