<?php

namespace App\Http\Controllers;

use App\Models\Answers;
use App\Models\Questions;
use Illuminate\Http\Request;

class EstadisticasController extends Controller
{
    public function index()
    {
        //logica estadistcas por empresas

        //BH-TRADE

        //pregunta 1  
        $edades = ['18-25', '26-35', '36-45', '46-55', '56-65', '65+'];

        foreach ($edades as $edad) {
            $pregunta_1 = Answers::where('question_id', 1)->where('answer', $edad)->count();
            $Resultado[] = $pregunta_1;
        }

        //pregunta 2 

        //pregunta 3 
        $areas = ['Administración', 'Almacén', 'Compras', 'Dirección', 'Diseño', 'Importaciones', 'Logística', 'Marketing', 'Operaciones', ' Recursos Humanos', 'Tecnología', 'Ventas'];

        foreach ($areas as $area) {
            $pregunta_3 = Answers::where('question_id', 3)->where('answer', $area)->count();
            $Resultado3[] = $pregunta_3;
        }
        //pregunta 4
        $tiempos = ['Menos de 6 meses', 'De 6 meses a 1 año', 'De 1 a 2 años', '3 a 4 años', '5 a 6 años', 'Mas de 7 años'];

        foreach ($tiempos as $tiempo) {
            $pregunta_4 = Answers::where('question_id', 4)->where('answer', $tiempo)->count();
            $Resultado4[] = $pregunta_4;
        }

        //pregunta 5
        $bh = ['BH México', 'Bh Cancún '];
        foreach ($bh as $empresa) {
            $pregunta_5 = Answers::where('question_id', 5)->where('answer', $empresa)->count();
            $Resultado5[] = $pregunta_5;
        }

        //pregunta 6
        $adaptacion = ['Siempre', 'Casi siempre', 'Algunas veces', 'Casi nunca ', 'Nunca'];
        foreach ($adaptacion as $opciones) {
            $pregunta_6 = Answers::where('question_id', 6)->where('answer', $opciones)->count();
            $Resultado6[] = $pregunta_6;
        }

        //pregunta 7
        // $gustos=['Compañeros de trabajo','Instalaciones','Liderazgo','Tareas que realiza','Gratificaciones/ pagos',];
        // foreach($gustos as $gusto){
        //     $pregunta_7=Answers::where('question_id',7)->where('answer',$gusto)->count();
        //     $Resultado7[]=$pregunta_7;
        // }

        //pregunta 8

        //pregunta 9
        $experiencias = ['Muy buena ', 'Mala ', 'Regular ', 'Buena ', 'Excelente'];
        foreach ($experiencias as $experiencia) {
            $pregunta_9 = Answers::where('question_id', 9)->where('answer', $experiencia)->count();
            $Resultado9[] = $pregunta_9;
        }

        //pregunta 10
        $actividades = ['Siempre', 'Casi siempre', 'Algunas veces', 'Casi nunca ', 'Nunca'];
        foreach ($actividades as $opciones) {
            $pregunta_10 = Answers::where('question_id', 10)->where('answer', $opciones)->count();
            $Resultado10[] = $pregunta_10;
        }
        //11
        foreach ($actividades as $opciones) {

            $pregunta_11 = Answers::where('question_id', 11)->where('answer', $opciones)->count();
            $Resultado11[] = $pregunta_11;
        }
        //pregunta12
        $opciones_12 = ['Nada de acuerdo', 'Poco de acuerdo ', 'Moderadamente de acuerdo', 'Bastante de acuerdo', 'Totalmente de acuerdo'];

        foreach ($opciones_12  as $opciones) {
            $pregunta_12 = Answers::where('question_id', 12)->where('answer', $opciones)->count();
            $Resultado12[] = $pregunta_12;
        }

        //pregunta 13
        $opciones_13 = ['Muy malas', 'Malas', 'Regulares', 'Buenas ', 'Excelentes'];
        foreach ($opciones_13 as $opcion) {
            $pregunta_13 = Answers::where('question_id', 13)->where('answer', $opcion)->count();
            $Resultado13[] = $pregunta_13;
        }

        //pregunta14

        //pregunta15
        foreach ($actividades as $opciones) {
            $pregunta_15 = Answers::where('question_id', 15)->where('answer', $opciones)->count();
            $Resultado15[] = $pregunta_15;
        }
        //pregunta16
        foreach ($actividades as $opcion) {
            $pregunta_16 = Answers::where('question_id', 16)->where('answer', $opcion)->count();
            $Resultado16[] = $pregunta_16;
        }

        //17
        foreach ($actividades as $opciones) {
            $pregunta_17 = Answers::where('question_id', 17)->where('answer', $opciones)->count();
            $Resultado17[] = $pregunta_17;
        }

        //18
        foreach ($opciones_12 as $opciones) {
            $pregunta_18 = Answers::where('question_id', 18)->where('answer', $opciones)->count();
            $Resultado18[] = $pregunta_18;
        }

        //19
        $opciones_13 = ['Si', 'No', 'No se '];
        foreach ($opciones_13 as $opciones) {
            $pregunta_19 = Answers::where('question_id', 19)->where('answer', $opciones)->count();
            $Resultado19[] = $pregunta_19;
        }
        //20
        $tiempos_trabajando = ['Menos de 1 año', '1 año', '2 años ', 'Mas de 2 años'];
        foreach ($tiempos_trabajando as $opciones) {
            # code...
            $pregunta_20 = Answers::where('question_id', 20)->where('answer', $opciones)->count();
            $Resultado20[] = $pregunta_20;
        }

        //21
        $opciones_21 = ['Muy mala', 'Mala', 'Regular', 'Buena', 'Excelente'];
        foreach ($opciones_21 as $opciones) {
            $pregunta_21 = Answers::where('question_id', 21)->where('answer', $opciones)->count();
            $Resultado21[] = $pregunta_21;
        }

        //22
        foreach ($opciones_21 as $opciones) {
            $pregunta_22 = Answers::where('question_id', 22)->where('answer', $opciones)->count();
            $Resultado22[] = $pregunta_22;
        }

        //23
        foreach ($actividades as $opciones) {
            $pregunta_23 = Answers::where('question_id', 23)->where('answer', $opciones)->count();
            $Resultado23[] = $pregunta_23;
        }
        //24
        $opciones_24 = ['Nada motivante', 'Poco motivante ', 'Moderadamente motivante ', 'Muy motivante ', 'Extremadamente motivante'];
        foreach ($opciones_24 as $opciones) {
            $pregunta_24 = Answers::where('question_id', 24)->where('answer', $opciones)->count();
            $Resultado24[] = $pregunta_24;
        }
        //25
        foreach ($actividades as $opciones) {
            $pregunta_25 = Answers::where('question_id', 25)->where('answer', $opciones)->count();
            $Resultado25[] = $pregunta_25;
        }
        //26
        foreach ($actividades as $opciones) {
            $pregunta_26 = Answers::where('question_id', 26)->where('answer', $opciones)->count();
            $Resultado26[] = $pregunta_26;
        }
        //27

        foreach ($opciones_21 as $opciones) {
            $pregunta_27 = Answers::where('question_id', 27)->where('answer', $opciones)->count();
            $Resultado27[] = $pregunta_27;
        }

        //28
        foreach ($actividades as $opciones) {
            $pregunta_28 = Answers::where('question_id', 28)->where('answer', $opciones)->count();
            $Resultado28[] = $pregunta_28;
        }

        //29
        foreach ($actividades  as $opciones) {
            $pregunta_29 = Answers::where('question_id', 29)->where('answer', $opciones)->count();
            $Resultado29[] = $pregunta_29;
        }

        //30

        $opciones_sn = ['Si', 'No '];
        foreach ($opciones_sn as $opciones) {
            $pregunta_30 = Answers::where('question_id', 30)->where('answer', $opciones)->count();
            $Resultado30[] = $pregunta_30;
        }

        //31
        $opciones_3 = ['Si ', 'No ', 'No tenemos'];
        foreach ($opciones_3 as $opciones) {
            $pregunta_31 = Answers::where('question_id', 31)->where('answer', $opciones)->count();
            $Resultado31[] = $pregunta_31;
        }

        //32
        foreach ($opciones_3 as $opciones) {
            $pregunta_32 = Answers::where('question_id', 32)->where('answer', $opciones)->count();
            $Resultado32[] = $pregunta_32;
        }

        //33
        foreach ($opciones_3 as $opciones) {
            $pregunta_33 = Answers::where('question_id', 33)->where('answer', $opciones)->count();
            $Resultado33[] = $pregunta_33;
        }

        //34
        foreach ($opciones_3 as $opciones) {
            $pregunta_34 = Answers::where('question_id', 34)->where('answer', $opciones)->count();
            $Resultado34[] = $pregunta_34;
        }

        //35
        foreach ($opciones_sn as $opciones) {
            $pregunta_35 = Answers::where('question_id', 35)->where('answer', $opciones)->count();
            $Resultado35[] = $pregunta_35;
        }

        //36
        foreach ($opciones_sn as $opciones) {
            $pregunta_36 = Answers::where('question_id', 36)->where('answer', $opciones)->count();
            $Resultado36[] = $pregunta_36;
        }

        //37
        //38


        //PROMO LIFE
        //39
        // $edades = ['18-25', '26-35', '36-45', '46-55', '56-65', '65+'];
        // foreach ($edades as $edad) {
        //     $pregunta_39 = Answers::where('question_id', 39)->where('answer', $edad)->count();
        //     $Resultado39[] = $pregunta_39;
        // }

        // //pregunta 2 

        // //pregunta 3 
        // $areas = ['Administración', 'Almacén', 'Compras', 'Dirección', 'Diseño', 'Importaciones', 'Logística', 'Marketing', 'Operaciones', ' Recursos Humanos', 'Tecnología', 'Ventas'];
        // foreach ($areas as $area) {
        //     $pregunta_40 = Answers::where('question_id', 40)->where('answer', $area)->count();
        //     $Resultado40[] = $pregunta_40;
        // }
        // //pregunta 4
        // $tiempos = ['Menos de 6 meses', 'De 6 meses a 1 año', 'De 1 a 2 años', '3 a 4 años', '5 a 6 años', 'Mas de 7 años'];
        // foreach ($tiempos as $tiempo) {
        //     $pregunta_41 = Answers::where('question_id', 41)->where('answer', $tiempo)->count();
        //     $Resultado41[] = $pregunta_41;
        // }
    

        // //pregunta 6
        // $adaptacion = ['Siempre', 'Casi siempre', 'Algunas veces', 'Casi nunca ', 'Nunca'];
        // foreach ($adaptacion as $opciones) {
        //     $pregunta_42 = Answers::where('question_id', 42)->where('answer', $opciones)->count();
        //     $Resultado42[] = $pregunta_42;
        // }
        

        // //pregunta 9
        // $experiencias = ['Muy buena ', 'Mala ', 'Regular ', 'Buena ', 'Excelente'];
        // foreach ($experiencias as $experiencia) {
        //     $pregunta_43 = Answers::where('question_id',43)->where('answer', $experiencia)->count();
        //     $Resultado43[] = $pregunta_43;
        // }

        // //pregunta 10
        // $actividades = ['Siempre', 'Casi siempre', 'Algunas veces', 'Casi nunca ', 'Nunca'];
        // foreach ($actividades as $opciones) {
        //     $pregunta_44 = Answers::where('question_id', 44)->where('answer', $opciones)->count();
        //     $Resultado44[] = $pregunta_44;
        // }
        // //11
        // foreach ($actividades as $opciones) {

        //     $pregunta_45 = Answers::where('question_id', 45)->where('answer', $opciones)->count();
        //     $Resultado45[] = $pregunta_45;
        // }
        // //pregunta12
        // $opciones_12 = ['Nada de acuerdo', 'Poco de acuerdo ', 'Moderadamente de acuerdo', 'Bastante de acuerdo', 'Totalmente de acuerdo'];

        // foreach ($opciones_12  as $opciones) {
        //     $pregunta_46 = Answers::where('question_id', 46)->where('answer', $opciones)->count();
        //     $Resultado46[] = $pregunta_46;
        // }

        // //pregunta 13
        // $opciones_13 = ['Muy malas', 'Malas', 'Regulares', 'Buenas ', 'Excelentes'];
        // foreach ($opciones_13 as $opcion) {
        //     $pregunta_47 = Answers::where('question_id', 47)->where('answer', $opcion)->count();
        //     $Resultado47[] = $pregunta_47;
        // }

        // //pregunta14

        // //pregunta15
        // foreach ($actividades as $opciones) {
        //     $pregunta_48 = Answers::where('question_id', 48)->where('answer', $opciones)->count();
        //     $Resultado48[] = $pregunta_48;
        // }
        // //pregunta16
        // foreach ($actividades as $opcion) {
        //     $pregunta_49 = Answers::where('question_id', 49)->where('answer', $opcion)->count();
        //     $Resultado49[] = $pregunta_49;
        // }

        // //17
        // foreach ($actividades as $opciones) {
        //     $pregunta_50 = Answers::where('question_id', 50)->where('answer', $opciones)->count();
        //     $Resultado50[] = $pregunta_50;
        // }

        // //18
        // foreach ($opciones_12 as $opciones) {
        //     $pregunta_51 = Answers::where('question_id', 51)->where('answer', $opciones)->count();
        //     $Resultado51[] = $pregunta_51;
        // }

        // //19
        // $opciones_13 = ['Si', 'No', 'No se '];
        // foreach ($opciones_13 as $opciones) {
        //     $pregunta_52 = Answers::where('question_id', 52)->where('answer', $opciones)->count();
        //     $Resultado52[] = $pregunta_52;
        // }
        // //20
        // $tiempos_trabajando = ['Menos de 1 año', '1 año', '2 años ', 'Mas de 2 años'];
        // foreach ($tiempos_trabajando as $opciones) {
        //     # code...
        //     $pregunta_53 = Answers::where('question_id', 53)->where('answer', $opciones)->count();
        //     $Resultado53[] = $pregunta_53;
        // }

        // //21
        // $opciones_21 = ['Muy mala', 'Mala', 'Regular', 'Buena', 'Excelente'];
        // foreach ($opciones_21 as $opciones) {
        //     $pregunta_54 = Answers::where('question_id', 54)->where('answer', $opciones)->count();
        //     $Resultado54[] = $pregunta_54;
        // }

        // //22
        // foreach ($opciones_21 as $opciones) {
        //     $pregunta_55 = Answers::where('question_id', 55)->where('answer', $opciones)->count();
        //     $Resultado55[] = $pregunta_55;
        // }

        // //23
        // foreach ($actividades as $opciones) {
        //     $pregunta_56 = Answers::where('question_id', 56)->where('answer', $opciones)->count();
        //     $Resultado56[] = $pregunta_56;
        // }
        // //24
        // $opciones_24 = ['Nada motivante', 'Poco motivante ', 'Moderadamente motivante ', 'Muy motivante ', 'Extremadamente motivante'];
        // foreach ($opciones_24 as $opciones) {
        //     $pregunta_57 = Answers::where('question_id', 57)->where('answer', $opciones)->count();
        //     $Resultado57[] = $pregunta_57;
        // }
        // //25
        // foreach ($actividades as $opciones) {
        //     $pregunta_58 = Answers::where('question_id', 58)->where('answer', $opciones)->count();
        //     $Resultado58[] = $pregunta_58;
        // }
        // //26
        // foreach ($actividades as $opciones) {
        //     $pregunta_59 = Answers::where('question_id', 59)->where('answer', $opciones)->count();
        //     $Resultado59[] = $pregunta_59;
        // }
        // //27

        // foreach ($opciones_21 as $opciones) {
        //     $pregunta_60 = Answers::where('question_id', 60)->where('answer', $opciones)->count();
        //     $Resultado60[] = $pregunta_60;
        // }

        // //28
        // foreach ($actividades as $opciones) {
        //     $pregunta_61 = Answers::where('question_id',61)->where('answer', $opciones)->count();
        //     $Resultado61[] = $pregunta_61;
        // }

        // //29
        // foreach ($actividades  as $opciones) {
        //     $pregunta_62 = Answers::where('question_id', 62)->where('answer', $opciones)->count();
        //     $Resultado62[] = $pregunta_62;
        // }

        // //30

        // $opciones_sn = ['Si', 'No '];
        // foreach ($opciones_sn as $opciones) {
        //     $pregunta_63= Answers::where('question_id', 63)->where('answer', $opciones)->count();
        //     $Resultado63[] = $pregunta_63;
        // }

        // //31
        // $opciones_3 = ['Si ', 'No ', 'No tenemos'];
        // foreach ($opciones_3 as $opciones) {
        //     $pregunta_64 = Answers::where('question_id', 64)->where('answer', $opciones)->count();
        //     $Resultado64[] = $pregunta_64;
        // }

        // //32
        // foreach ($opciones_3 as $opciones) {
        //     $pregunta_65 = Answers::where('question_id', 65)->where('answer', $opciones)->count();
        //     $Resultado65[] = $pregunta_65;
        // }

        // //33
        // foreach ($opciones_3 as $opciones) {
        //     $pregunta_66 = Answers::where('question_id', 66)->where('answer', $opciones)->count();
        //     $Resultado66[] = $pregunta_66;
        // }

        // //34
        // foreach ($opciones_3 as $opciones) {
        //     $pregunta_67 = Answers::where('question_id', 67)->where('answer', $opciones)->count();
        //     $Resultado67[] = $pregunta_67;
        // }

        // //35
        // foreach ($opciones_sn as $opciones) {
        //     $pregunta_68 = Answers::where('question_id', 68)->where('answer', $opciones)->count();
        //     $Resultado68[] = $pregunta_68;
        // }

        // //36
        // foreach ($opciones_sn as $opciones) {
        //     $pregunta_69 = Answers::where('question_id', 69)->where('answer', $opciones)->count();
        //     $Resultado69[] = $pregunta_69;
        // }

        // //37
        // //38


        // //39-75

      


        return view('Estadisticas.estadisticas', compact(
            'edades',
            'Resultado',
            'areas',
            'Resultado3',
            'tiempos',
            'Resultado4',
            'bh',
            'Resultado5',
            'adaptacion',
            'Resultado6',
            'experiencias',
            'Resultado9',
            'actividades',
            'Resultado10',
            'Resultado11',
            'opciones_12',
            'Resultado12',
            'opciones_13',
            'Resultado13',
            'Resultado15',
            'Resultado16',
            'Resultado17',
            'Resultado18',
            'Resultado19',
            'tiempos_trabajando',
            'Resultado20',
            'opciones_21',
            'Resultado21',
            'Resultado22',
            'Resultado23',
            'Resultado24',
            'Resultado25',
            'Resultado26',
            'Resultado27',
            'Resultado28',
            'Resultado29',
            'Resultado30',
            'opciones_sn',
            'Resultado31',
            'opciones_3',
            'Resultado32',
            'Resultado33',
            'Resultado34',
            'Resultado35',
            'Resultado36'
        ));
    }
}
