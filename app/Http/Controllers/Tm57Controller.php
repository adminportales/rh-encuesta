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
        $preguntas = Questions::all()->where('company','Trade Market 57');
        return view('tm57.tm57',compact('preguntas'));
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
            $respuestaModel->company='Trade Market 57';
            $respuestaModel->save();
        }                
        return redirect()->route('encuesta.fin');
    }
    

}
