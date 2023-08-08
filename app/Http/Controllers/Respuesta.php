<?php

namespace App\Http\Controllers;

use App\Models\Answers;
use App\Models\Questions;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class Respuesta extends Controller
{
   
    //vistas de las encuestas
    public function index()
    {
        
        $preguntas = Questions::all()->where('company', 'BH TRADE MARKET ');
        return view('welcome', compact('preguntas'));
    }


    public function finish()
    {

        return view('finish');
    }


    public function store(Request $request)
    {
       
        $respuestas = $request->input('question_id'); 
        $preguntas=Questions::all();

        $rules = [];
        foreach ($preguntas as $pregunta) {
            $rules["question_id.{$pregunta->id}.*"] = 'required|max:255';
        }
    
        $request->validate($rules);       

        $uuid =  Str::uuid();
        foreach ($respuestas as $preguntaId => $respuesta) {
            $respuestaString = implode(',', $respuesta);
            $respuestaModel = new Answers();
            $respuestaModel->uuid = $uuid;
            $respuestaModel->question_id = $preguntaId;
            $respuestaModel->answer = $respuestaString;
            $respuestaModel->company = 'BH-BH TRADE MARKET';
            $respuestaModel->save();
        }
        return redirect()->route('encuesta.fin');
    }
}
