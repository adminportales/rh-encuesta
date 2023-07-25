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

        //5ta pregunta
        $empresa=[
          'BH México',
          'Bh Cancún '
        ];
        foreach($empresa as $empresas){
          $conteo=Answers::where('answer',$empresas)->count();
          $Resultado_empresa[]=$conteo;
        }

        //6ta pregunta
        $opciones= [
          'Siempre',
          'Casi siempre',
          'Algunas veces',
          'Casi nunca ',
          'Nunca'
        ];
        foreach($opciones as $opcion){
          $conteo=Answers::where('question_id',6)->where('answer',$opcion)->count();
          $Resultado_opcion[]=$conteo;
        }

        //7ta pregunta
        $gustar=['Compañeros de trabajo',
        'Instalaciones',
        'Liderazgo',
        'Tareas que realiza',
        'Gratificaciones/ pagos',
      ];
      foreach($gustar as $gustar){
        $conteo=Answers::where('answer',$gustar)->count();
        $Resultado_gustar[]=$conteo;
      }

        return view('Estadisticas.estadisticas',compact(
          'Resultado','edades','areas','Resultado_area','tiempo','Resultado_tiempo','empresa','Resultado_empresa'
        ,'opciones','Resultado_opcion','gustar','Resultado_gustar'));
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