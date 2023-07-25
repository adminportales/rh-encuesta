<?php

namespace App\Http\Controllers;

use App\Models\Answers;
use App\Models\Questions;
use Illuminate\Http\Request;
use Illuminate\Support\Str;



class Respuesta extends Controller
{
    //
    function index()
    {
       
        $preguntas = Questions::all();
      
        return view('welcome', compact('preguntas'));
    }

    function finish()
     {
        
        return view('finish');
      }

      public function estadisticas()
      {
        //1er pregunta
        $edades=['18-25', '26-35', '36-45', '46-55', '56-65', '65+'];
        $Resultado=[];
        foreach($edades as $edad)
        {
         $conteo=Answers::where('answer',$edad)->count();
         $Resultado[]=$conteo;
        }     

        //2da pregunta

        //3ra pregunta
        $areas=['Administración', 'Almacén', 'Compras', 'Dirección', 'Diseño', 'Importaciones', 'Logística', 'Marketing', 'Operaciones', ' Recursos Humanos', 'Tecnología', 'Ventas'];
        foreach($areas as $area){
          $conteo=Answers::where('answer',$area)->count();
          $Resultado_area[]=$conteo;
        }

        //4ta pregunta
        $tiempo=[
          'Menos de 6 meses',
          'De 6 meses a 1 año',
          'De 1 a 2 años',
          '3 a 4 años',
          '5 a 6 años', 'Mas de 7 años '
        ];

        foreach($tiempo as $tiempos){
          $conteo=Answers::where('answer',$tiempos)->count();
          $Resultado_tiempo[]=$conteo;
        }

        return view('Estadisticas.estadisticas',compact('Resultado','edades','areas','Resultado_area','tiempo','Resultado_tiempo'));
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
            $respuestaModel->save();
        }                
        return redirect()->route('encuesta.fin');
    }

}