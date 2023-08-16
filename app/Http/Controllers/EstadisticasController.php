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
        $areas = ['Administración', 'Almacén', 'Compras', 'Dirección', 'Diseño', 'Importaciones', 'Logística', 'Marketing', 'Operaciones', ' Recursos Humanos', 'Tecnología', 'Ventas'];
        $edades = ['18-25', '26-35', '36-45', '46-55', '56-65', '65+'];
        $tiempos = ['Menos de 6 meses', 'De 6 meses a 1 año', 'De 1 a 2 años', '3 a 4 años', '5 a 6 años', 'Mas de 7 años'];
        $bh = ['BH México', 'Bh Cancún '];
        $adaptacion = ['Siempre', 'Casi siempre', 'Algunas veces', 'Casi nunca ', 'Nunca'];
        $experiencias = ['Muy buena ', 'Mala ', 'Regular ', 'Buena ', 'Excelente'];
        $opciones_12 = ['Nada de acuerdo', 'Poco de acuerdo ', 'Moderadamente de acuerdo', 'Bastante de acuerdo', 'Totalmente de acuerdo'];
        $actividades = ['Siempre', 'Casi siempre', 'Algunas veces', 'Casi nunca ', 'Nunca'];
        $opciones_13_1 = ['Muy malas', 'Malas', 'Regulares', 'Buenas ', 'Excelentes'];
        $opciones_21 = ['Muy mala', 'Mala', 'Regular', 'Buena', 'Excelente'];
        $tiempos_trabajando = ['Menos de 1 año', '1 año', '2 años ', 'Mas de 2 años'];
        $opciones_24 = ['Nada motivante', 'Poco motivante ', 'Moderadamente motivante ', 'Muy motivante ', 'Extremadamente motivante'];
        $opciones_13 = ['Si', 'No', 'No se '];
        $opciones_sn = ['Si', 'No '];
        $opciones_3 = ['Si ', 'No ', 'No tenemos'];
        
        //pregunta 1  

        foreach ($edades as $edad) {
            $pregunta_1 = Answers::where('question_id', 1)->where('answer', $edad)->count();
            $Resultado[] = $pregunta_1;
        }

        //pregunta 2 

        //pregunta 3 

        foreach ($areas as $area) {
            $pregunta_3 = Answers::where('question_id', 3)->where('answer', $area)->count();
            $Resultado3[] = $pregunta_3;
        }
        //pregunta 4

        foreach ($tiempos as $tiempo) {
            $pregunta_4 = Answers::where('question_id', 4)->where('answer', $tiempo)->count();
            $Resultado4[] = $pregunta_4;
        }

        //pregunta 5
        foreach ($bh as $empresa) {
            $pregunta_5 = Answers::where('question_id', 5)->where('answer', $empresa)->count();
            $Resultado5[] = $pregunta_5;
        }

        //pregunta 6
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
        foreach ($experiencias as $experiencia) {
            $pregunta_9 = Answers::where('question_id', 9)->where('answer', $experiencia)->count();
            $Resultado9[] = $pregunta_9;
        }

        //pregunta 10
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

        foreach ($opciones_12  as $opciones) {
            $pregunta_12 = Answers::where('question_id', 12)->where('answer', $opciones)->count();
            $Resultado12[] = $pregunta_12;
        }

        //pregunta 13
        foreach ($opciones_13_1 as $opcion) {
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
        foreach ($opciones_13 as $opciones) {
            $pregunta_19 = Answers::where('question_id', 19)->where('answer', $opciones)->count();
            $Resultado19[] = $pregunta_19;
        }
        //20
        foreach ($tiempos_trabajando as $opciones) {
            # code...
            $pregunta_20 = Answers::where('question_id', 20)->where('answer', $opciones)->count();
            $Resultado20[] = $pregunta_20;
        }

        //21
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

        foreach ($opciones_sn as $opciones) {
            $pregunta_30 = Answers::where('question_id', 30)->where('answer', $opciones)->count();
            $Resultado30[] = $pregunta_30;
        }

        //31
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
                

        return view('Estadisticas.estadisticas', compact(
            'edades',
            'Resultado',
            'areas',
            'Resultado3',
            'tiempos',
            'Resultado4',
            'bh',
            'opciones_13_1',
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
            'Resultado36',));
    }


    public function PromolifeEstadisticas()
    {
        $areas = ['Administración', 'Almacén', 'Compras', 'Dirección', 'Diseño', 'Importaciones', 'Logística', 'Marketing', 'Operaciones', ' Recursos Humanos', 'Tecnología', 'Ventas'];
        $edades = ['18-25', '26-35', '36-45', '46-55', '56-65', '65+'];
        $tiempos = ['Menos de 6 meses', 'De 6 meses a 1 año', 'De 1 a 2 años', '3 a 4 años', '5 a 6 años', 'Mas de 7 años'];
        $adaptacion = ['Siempre', 'Casi siempre', 'Algunas veces', 'Casi nunca ', 'Nunca'];
        $experiencias = ['Muy buena ', 'Mala ', 'Regular ', 'Buena ', 'Excelente'];
        $opciones_12 = ['Nada de acuerdo', 'Poco de acuerdo ', 'Moderadamente de acuerdo', 'Bastante de acuerdo', 'Totalmente de acuerdo'];
        $actividades = ['Siempre', 'Casi siempre', 'Algunas veces', 'Casi nunca ', 'Nunca'];
        $opciones_13_1 = ['Muy malas', 'Malas', 'Regulares', 'Buenas ', 'Excelentes'];
        $opciones_21 = ['Muy mala', 'Mala', 'Regular', 'Buena', 'Excelente'];
        $tiempos_trabajando = ['Menos de 1 año', '1 año', '2 años ', 'Mas de 2 años'];
        $opciones_24 = ['Nada motivante', 'Poco motivante ', 'Moderadamente motivante ', 'Muy motivante ', 'Extremadamente motivante'];
        $opciones_13 = ['Si', 'No', 'No se '];
        $opciones_sn = ['Si', 'No '];
        $opciones_3 = ['Si ', 'No ', 'No tenemos'];
        

        //PROMO LIFE
       
        
        foreach ($edades as $edad) {
            $pregunta_39 = Answers::where('question_id', 39)->where('answer', $edad)->count();
            $Resultado39[] = $pregunta_39;
        }

        // //pregunta 40

        // //pregunta 41        
        foreach ($areas as $area) {
            $pregunta_41 = Answers::where('question_id', 41)->where('answer', $area)->count();
            $Resultado41[] = $pregunta_41;
        }
        // //pregunta 42
       ;
        foreach ($tiempos as $tiempo) {
            $pregunta_42 = Answers::where('question_id', 42)->where('answer', $tiempo)->count();
            $Resultado42[] = $pregunta_42;
        }
    


        //pregunta 43        
        foreach ($adaptacion as $opciones) {
            $pregunta_43 = Answers::where('question_id', 43)->where('answer', $opciones)->count();
            $Resultado43[] = $pregunta_43;
        }
        

        // //pregunta 44

        // foreach ($experiencias as $experiencia) {
        //     $pregunta_44 = Answers::where('question_id',44)->where('answer', $experiencia)->count();
        //     $Resultado44[] = $pregunta_44;
        // }

        // //pregunta 45
        // $actividades = ['Siempre', 'Casi siempre', 'Algunas veces', 'Casi nunca ', 'Nunca'];
        // foreach ($actividades as $opciones) {
        //     $pregunta_44 = Answers::where('question_id', 44)->where('answer', $opciones)->count();
        //     $Resultado44[] = $pregunta_44;
        // }
      


        foreach ($experiencias as $opciones) {
            $pregunta_46 = Answers::where('question_id', 46)->where('answer', $opciones)->count();
            $Resultado46[] = $pregunta_46;
        }
      
       

        foreach ($actividades  as $opciones) {
            $pregunta_47 = Answers::where('question_id', 47)->where('answer', $opciones)->count();
            $Resultado47[] = $pregunta_47;
        }

        foreach ($actividades as $opciones) {

            $pregunta_48 = Answers::where('question_id', 48)->where('answer', $opciones)->count();
            $Resultado48[] = $pregunta_48;
        }
        //pregunta12
       

        foreach ($opciones_12  as $opciones) {
            $pregunta_49 = Answers::where('question_id', 49)->where('answer', $opciones)->count();
            $Resultado49[] = $pregunta_49;
        }

        //pregunta 13
        
        foreach ($opciones_13_1 as $opcion) {
            $pregunta_50 = Answers::where('question_id', 50)->where('answer', $opcion)->count();
            $Resultado50[] = $pregunta_50;
        }

        //pregunta14

        //pregunta15
        foreach ($actividades as $opciones) {
            $pregunta_52 = Answers::where('question_id', 52)->where('answer', $opciones)->count();
            $Resultado52[] = $pregunta_52;
        }
        
        
        //17
        foreach ($actividades as $opciones) {
            $pregunta_53 = Answers::where('question_id', 53)->where('answer', $opciones)->count();
            $Resultado53[] = $pregunta_53;
        }

        //18
        foreach ($actividades as $opciones) {
            $pregunta_54 = Answers::where('question_id', 54)->where('answer', $opciones)->count();
            $Resultado54[] = $pregunta_54;
        }

        //19
    
        foreach ($opciones_12 as $opciones) {
            $pregunta_55 = Answers::where('question_id',55)->where('answer', $opciones)->count();
            $Resultado55[] = $pregunta_55;
        }
        //20
        
        foreach ($opciones_13 as $opciones) {
            # code...
            $pregunta_56 = Answers::where('question_id', 56)->where('answer', $opciones)->count();
            $Resultado56[] = $pregunta_56;
        }

        //21
  
        foreach ($tiempos_trabajando as $opciones) {
            $pregunta_57 = Answers::where('question_id', 57)->where('answer', $opciones)->count();
            $Resultado57[] = $pregunta_57;
        }

        //22
        foreach ($opciones_21 as $opciones) {
            $pregunta_58=Answers::where('question_id', 58)->where('answer', $opciones)->count();
            $Resultado58[]=$pregunta_58;
        }

        //23
        foreach ($opciones_21 as $opciones) {
            $pregunta_59=Answers::where('question_id', 59)->where('answer', $opciones)->count();
            $Resultado59[]=$pregunta_59;
        }
        //24
        
        foreach ($opciones_21 as $opciones) {
            $pregunta_60=Answers::where('question_id', 60)->where('answer', $opciones)->count();
            $Resultado60[]=$pregunta_60;
        }

        foreach ($opciones_24 as $opciones) {
            $pregunta_61=Answers::where('question_id', 61)->where('answer', $opciones)->count();
            $Resultado61[]=$pregunta_61;
        }

        //25
        foreach ($actividades as $opciones) {
            $pregunta_62 = Answers::where('question_id', 62)->where('answer', $opciones)->count();
            $Resultado62[] = $pregunta_62;
        }
        //26
        foreach ($actividades as $opciones) {
            $pregunta_63 = Answers::where('question_id', 63)->where('answer', $opciones)->count();
            $Resultado63[] = $pregunta_63;
        }
        //27

        foreach ($opciones_21 as $opciones) {
            $pregunta_64 = Answers::where('question_id', 64)->where('answer', $opciones)->count();
            $Resultado64[] = $pregunta_64;
        }

        //28
        foreach ($actividades as $opciones) {
            $pregunta_65 = Answers::where('question_id', 65)->where('answer', $opciones)->count();
            $Resultado65[] = $pregunta_65;
        }

        //29
        foreach ($actividades  as $opciones) {
            $pregunta_66 = Answers::where('question_id', 66)->where('answer', $opciones)->count();
            $Resultado66[] = $pregunta_66;
        }

        //30

        
        foreach ($opciones_sn as $opciones) {
            $pregunta_67 = Answers::where('question_id', 67)->where('answer', $opciones)->count();
            $Resultado67[] = $pregunta_67;
        }

        //31
        
        foreach ($opciones_3 as $opciones) {
            $pregunta_68 = Answers::where('question_id', 68)->where('answer', $opciones)->count();
            $Resultado68[] = $pregunta_68;
        }

        //32
        foreach ($opciones_3 as $opciones) {
            $pregunta_69 = Answers::where('question_id', 69)->where('answer', $opciones)->count();
            $Resultado69[] = $pregunta_69;
        }

        //33
        foreach ($opciones_3 as $opciones) {
            $pregunta_70 = Answers::where('question_id', 70)->where('answer', $opciones)->count();
            $Resultado70[] = $pregunta_70;
        }

        //34
        foreach ($opciones_3 as $opciones) {
            $pregunta_71 = Answers::where('question_id', 71)->where('answer', $opciones)->count();
            $Resultado71[] = $pregunta_71;
        }

        //35
        foreach ($opciones_sn as $opciones) {
            $pregunta_72 = Answers::where('question_id', 72)->where('answer', $opciones)->count();
            $Resultado72[] = $pregunta_72;
        }

        //36
        foreach ($opciones_sn as $opciones) {
            $pregunta_73 = Answers::where('question_id', 73)->where('answer', $opciones)->count();
            $Resultado73[] = $pregunta_73;
        }



        return view('Estadisticas.estadisticasPromolife',compact( 
        'edades', 
        'areas'  ,
        'tiempos',
        'adaptacion',
        'experiencias',
        'opciones_12',
        'actividades',
        'opciones_13_1',
        'opciones_21',
        'tiempos_trabajando',
        'opciones_sn',
        'opciones_24',
        'opciones_13',
        'opciones_3',
        'Resultado39',
        'Resultado41',
        'Resultado42',
        'Resultado43',
        'Resultado46',
        'Resultado47',
        'Resultado48',
        'Resultado49',
        'Resultado50',
        'Resultado52',
        'Resultado53',
        'Resultado54',
        'Resultado55',
        'Resultado56',
        'Resultado57',
        'Resultado58',
        'Resultado59',
        'Resultado60',       
        'Resultado62',
        'Resultado63',
        'Resultado64',
        'Resultado65',
        'Resultado66',
        'Resultado67',
        'Resultado68',
        'Resultado69',
        'Resultado70',
        'Resultado71',
        'Resultado72',
        'Resultado73',));
    }


    public function promosaleEstadisticas()
    {

        $areas = ['Administración', 'Almacén', 'Compras', 'Dirección', 'Diseño', 'Importaciones', 'Logística', 'Marketing', 'Operaciones', ' Recursos Humanos', 'Tecnología', 'Ventas'];
        $edades = ['18-25', '26-35', '36-45', '46-55', '56-65', '65+'];
        $tiempos = ['Menos de 6 meses', 'De 6 meses a 1 año', 'De 1 a 2 años', '3 a 4 años', '5 a 6 años', 'Mas de 7 años'];
        $bh = ['BH México', 'Bh Cancún '];
        $adaptacion = ['Siempre', 'Casi siempre', 'Algunas veces', 'Casi nunca ', 'Nunca'];
        $experiencias = ['Muy buena ', 'Mala ', 'Regular ', 'Buena ', 'Excelente'];
        $opciones_12 = ['Nada de acuerdo', 'Poco de acuerdo ', 'Moderadamente de acuerdo', 'Bastante de acuerdo', 'Totalmente de acuerdo'];
        $actividades = ['Siempre', 'Casi siempre', 'Algunas veces', 'Casi nunca ', 'Nunca'];
        $opciones_13_1 = ['Muy malas', 'Malas', 'Regulares', 'Buenas ', 'Excelentes'];
        $opciones_21 = ['Muy mala', 'Mala', 'Regular', 'Buena', 'Excelente'];
        $tiempos_trabajando = ['Menos de 1 año', '1 año', '2 años ', 'Mas de 2 años'];
        $opciones_24 = ['Nada motivante', 'Poco motivante ', 'Moderadamente motivante ', 'Muy motivante ', 'Extremadamente motivante'];
        $opciones_13 = ['Si', 'No', 'No se '];
        $opciones_sn = ['Si', 'No '];
        $opciones_3 = ['Si ', 'No ', 'No tenemos'];

        foreach ($edades as $edad) {
            $pregunta_76 = Answers::where('question_id',76 )->where('answer', $edad)->count();
            $Resultado76[] = $pregunta_76;
        }

        // //pregunta 40

        // //pregunta 41        
        foreach ($areas as $area) {
            $pregunta_78 = Answers::where('question_id', 78)->where('answer', $area)->count();
            $Resultado78[] = $pregunta_78;
        }
        // //pregunta 42
       ;
        foreach ($tiempos as $tiempo) {
            $pregunta_79 = Answers::where('question_id', 79)->where('answer', $tiempo)->count();
            $Resultado79[] = $pregunta_79;
        }
    


        //pregunta 43        
        foreach ($adaptacion as $opciones) {
            $pregunta_80 = Answers::where('question_id', 80     )->where('answer', $opciones)->count();
            $Resultado80[] = $pregunta_80;
        }
        

        // //pregunta 44

        // foreach ($experiencias as $experiencia) {
        //     $pregunta_44 = Answers::where('question_id',44)->where('answer', $experiencia)->count();
        //     $Resultado44[] = $pregunta_44;
        // }

        // //pregunta 45
        // $actividades = ['Siempre', 'Casi siempre', 'Algunas veces', 'Casi nunca ', 'Nunca'];
        // foreach ($actividades as $opciones) {
        //     $pregunta_44 = Answers::where('question_id', 44)->where('answer', $opciones)->count();
        //     $Resultado44[] = $pregunta_44;
        // }
      


        foreach ($experiencias as $opciones) {
            $pregunta_83 = Answers::where('question_id', 83)->where('answer', $opciones)->count();
            $Resultado83[] = $pregunta_83;
        }
      
       

        foreach ($actividades  as $opciones) {
            $pregunta_84 = Answers::where('question_id', 84)->where('answer', $opciones)->count();
            $Resultado84[] = $pregunta_84;
        }

        foreach ($actividades as $opciones) {

            $pregunta_85 = Answers::where('question_id', 85)->where('answer', $opciones)->count();
            $Resultado85[] = $pregunta_85;
        }
        //pregunta12
       

        foreach ($opciones_12  as $opciones) {
            $pregunta_86 = Answers::where('question_id', 86)->where('answer', $opciones)->count();
            $Resultado86[] = $pregunta_86;
        }

        //pregunta 13
        
        foreach ($opciones_13_1 as $opcion) {
            $pregunta_87 = Answers::where('question_id', 87)->where('answer', $opcion)->count();
            $Resultado87[] = $pregunta_87;
        }

        //pregunta14

        //pregunta15
        foreach ($actividades as $opciones) {
            $pregunta_89 = Answers::where('question_id', 89)->where('answer', $opciones)->count();
            $Resultado89[] = $pregunta_89;
        }
        
        
        //17
        foreach ($actividades as $opciones) {
            $pregunta_90 = Answers::where('question_id', 90)->where('answer', $opciones)->count();
            $Resultado90[] = $pregunta_90;
        }

        //18
        foreach ($actividades as $opciones) {
            $pregunta_91 = Answers::where('question_id', 91)->where('answer', $opciones)->count();
            $Resultado91[] = $pregunta_91;
        }

        //19
    
        foreach ($opciones_12 as $opciones) {
            $pregunta_92 = Answers::where('question_id',92)->where('answer', $opciones)->count();
            $Resultado92[] = $pregunta_92;
        }
        //20
        
        foreach ($opciones_13 as $opciones) {
            # code...
            $pregunta_93 = Answers::where('question_id', 93)->where('answer', $opciones)->count();
            $Resultado93[] = $pregunta_93;
        }

        //21
  
        foreach ($tiempos_trabajando as $opciones) {
            $pregunta_94 = Answers::where('question_id', 94)->where('answer', $opciones)->count();
            $Resultado94[] = $pregunta_94;
        }

        //22
        foreach ($opciones_21 as $opciones) {
            $pregunta_95=Answers::where('question_id', 95)->where('answer', $opciones)->count();
            $Resultado95[]=$pregunta_95;
        }

        //23
        foreach ($opciones_21 as $opciones) {
            $pregunta_96=Answers::where('question_id', 96)->where('answer', $opciones)->count();
            $Resultado96[]=$pregunta_96;
        }
        //24
        
        foreach ($actividades as $opciones) {
            $pregunta_97=Answers::where('question_id', 97)->where('answer', $opciones)->count();
            $Resultado97[]=$pregunta_97;
        }
        //25
        foreach ($opciones_24 as $opciones) {
            $pregunta_98 = Answers::where('question_id', 98)->where('answer', $opciones)->count();
            $Resultado98[] = $pregunta_98;
        }
        
        

        foreach ($actividades as $opciones) {
            $pregunta_99 = Answers::where('question_id', 99)->where('answer', $opciones)->count();
            $Resultado99[] = $pregunta_99;
        }
        //27

        foreach ($actividades as $opciones) {
            $pregunta_100 = Answers::where('question_id',100)->where('answer', $opciones)->count();
            $Resultado100[] = $pregunta_100;
        }

        //28
        foreach ($actividades as $opciones) {
            $pregunta_101 = Answers::where('question_id', 101)->where('answer', $opciones)->count();
            $Resultado101[] = $pregunta_101;
        }

        //29
        foreach ($actividades  as $opciones) {
            $pregunta_102 = Answers::where('question_id', 102)->where('answer', $opciones)->count();
            $Resultado102[] = $pregunta_102;
        }

        //30

        
        foreach ($opciones_sn as $opciones) {
            $pregunta_103 = Answers::where('question_id', 103)->where('answer', $opciones)->count();
            $Resultado103[] = $pregunta_103;
        }

        //31
       
        foreach ($opciones_3 as $opciones) {
            $pregunta_104 = Answers::where('question_id', 104)->where('answer', $opciones)->count();
            $Resultado104[] = $pregunta_104;
        }

        //32
        foreach ($opciones_3 as $opciones) {
            $pregunta_105 = Answers::where('question_id', 105)->where('answer', $opciones)->count();
            $Resultado105[] = $pregunta_105;
        }

        //33
        foreach ($opciones_3 as $opciones) {
            $pregunta_106 = Answers::where('question_id', 106)->where('answer', $opciones)->count();
            $Resultado106[] = $pregunta_106;
        }

        //34
        foreach ($opciones_3 as $opciones) {
            $pregunta_107 = Answers::where('question_id', 107)->where('answer', $opciones)->count();
            $Resultado107[] = $pregunta_107;
        }

        //35
        foreach ($opciones_3 as $opciones) {
            $pregunta_108 = Answers::where('question_id', 108)->where('answer', $opciones)->count();
            $Resultado108[] = $pregunta_108;
        }

        //36
        foreach ($opciones_sn as $opciones) {
            $pregunta_109 = Answers::where('question_id', 109)->where('answer', $opciones)->count();
            $Resultado109[] = $pregunta_109;
        }

        foreach ($opciones_sn as $opciones) {
            $pregunta_110 = Answers::where('question_id', 110)->where('answer', $opciones)->count();
            $Resultado110[] = $pregunta_110;
        }

        return view('Estadisticas.estadisticasPromosale',compact(
        'edades', 
        'areas'  ,
        'tiempos',
        'adaptacion',
        'experiencias',
        'opciones_12',
        'actividades',
        'opciones_13_1',
        'opciones_21',
        'tiempos_trabajando',
        'opciones_sn',
        'opciones_24',
        'opciones_13',
        'opciones_3',
        'Resultado76',
        'Resultado78',
        'Resultado79',
        'Resultado80',          
        'Resultado83',
        'Resultado84',            
        'Resultado85',
        'Resultado86',
        'Resultado87',
        'Resultado89',
        'Resultado90',
        'Resultado91',
        'Resultado92',
        'Resultado93',
        'Resultado94',
        'Resultado95',
        'Resultado96',
        'Resultado97',
        'Resultado98',
        'Resultado99',
        'Resultado100',
        'Resultado101',
        'Resultado102',
        'Resultado103',
        'Resultado104',
        'Resultado105',
        'Resultado106',
        'Resultado107',
        'Resultado108',
        'Resultado109',
        'Resultado110',));
    }

    public function tradeMarket57Estadisticas()
    {
        
        $areas = ['Administración', 'Almacén', 'Compras', 'Dirección', 'Diseño', 'Importaciones', 'Logística', 'Marketing', 'Operaciones', ' Recursos Humanos', 'Tecnología', 'Ventas'];
        $edades = ['18-25', '26-35', '36-45', '46-55', '56-65', '65+'];
        $tiempos = ['Menos de 6 meses', 'De 6 meses a 1 año', 'De 1 a 2 años', '3 a 4 años', '5 a 6 años', 'Mas de 7 años'];
        $bh = ['BH México', 'Bh Cancún '];
        $adaptacion = ['Siempre', 'Casi siempre', 'Algunas veces', 'Casi nunca ', 'Nunca'];
        $experiencias = ['Muy buena ', 'Mala ', 'Regular ', 'Buena ', 'Excelente'];
        $opciones_12 = ['Nada de acuerdo', 'Poco de acuerdo ', 'Moderadamente de acuerdo', 'Bastante de acuerdo', 'Totalmente de acuerdo'];
        $actividades = ['Siempre', 'Casi siempre', 'Algunas veces', 'Casi nunca ', 'Nunca'];
        $opciones_13_1 = ['Muy malas', 'Malas', 'Regulares', 'Buenas ', 'Excelentes'];
        $opciones_21 = ['Muy mala', 'Mala', 'Regular', 'Buena', 'Excelente'];
        $tiempos_trabajando = ['Menos de 1 año', '1 año', '2 años ', 'Mas de 2 años'];
        $opciones_24 = ['Nada motivante', 'Poco motivante ', 'Moderadamente motivante ', 'Muy motivante ', 'Extremadamente motivante'];
        $opciones_13 = ['Si', 'No', 'No se '];
        $opciones_sn = ['Si', 'No '];
        $opciones_3 = ['Si ', 'No ', 'No tenemos'];

        foreach ($edades as $edad) {
            $pregunta_113 = Answers::where('question_id',113 )->where('answer', $edad)->count();
            $Resultado113[] = $pregunta_113;
        }


             
        foreach ($areas as $area) {
            $pregunta_115 = Answers::where('question_id', 115)->where('answer', $area)->count();
            $Resultado115[] = $pregunta_115;
        }
      
       
        foreach ($tiempos as $tiempo) {
            $pregunta_116= Answers::where('question_id', 116)->where('answer', $tiempo)->count();
            $Resultado116[] = $pregunta_116;
        }
    


              
        foreach ($adaptacion as $opciones) {
            $pregunta_117 = Answers::where('question_id', 117)->where('answer', $opciones)->count();
            $Resultado117[] = $pregunta_117;
        }
        

      

        // foreach ($experiencias as $experiencia) {
        //     $pregunta_44 = Answers::where('question_id',44)->where('answer', $experiencia)->count();
        //     $Resultado44[] = $pregunta_44;
        // }

        // //pregunta 45
        // $actividades = ['Siempre', 'Casi siempre', 'Algunas veces', 'Casi nunca ', 'Nunca'];
        // foreach ($actividades as $opciones) {
        //     $pregunta_44 = Answers::where('question_id', 44)->where('answer', $opciones)->count();
        //     $Resultado44[] = $pregunta_44;
        // }
      


        foreach ($experiencias as $opciones) {
            $pregunta_120= Answers::where('question_id', 120)->where('answer', $opciones)->count();
            $Resultado120[] = $pregunta_120;
        }
      
       

        foreach ($actividades  as $opciones) {
            $pregunta_121 = Answers::where('question_id', 121)->where('answer', $opciones)->count();
            $Resultado121[] = $pregunta_121;
        }

        foreach ($actividades as $opciones) {

            $pregunta_122 = Answers::where('question_id', 122)->where('answer', $opciones)->count();
            $Resultado122[] = $pregunta_122;
        }
        
       

        foreach ($opciones_12  as $opciones) {
            $pregunta_123 = Answers::where('question_id', 123)->where('answer', $opciones)->count();
            $Resultado123[] = $pregunta_123;
        }

        
        
        foreach ($opciones_13_1 as $opcion) {
            $pregunta_124 = Answers::where('question_id', 124)->where('answer', $opcion)->count();
            $Resultado124[] = $pregunta_124;
        }

        
        foreach ($actividades as $opciones) {
            $pregunta_126 = Answers::where('question_id', 126)->where('answer', $opciones)->count();
            $Resultado126[] = $pregunta_126;
        }
        
        
      
        foreach ($actividades as $opciones) {
            $pregunta_127 = Answers::where('question_id', 127)->where('answer', $opciones)->count();
            $Resultado127[] = $pregunta_127;
        }

      
        foreach ($actividades as $opciones) {
            $pregunta_128 = Answers::where('question_id', 128)->where('answer', $opciones)->count();
            $Resultado128[] = $pregunta_128;
        }

        
    
        foreach ($opciones_12 as $opciones) {
            $pregunta_129 = Answers::where('question_id',129)->where('answer', $opciones)->count();
            $Resultado129[] = $pregunta_129;
        }
       
        foreach ($opciones_13 as $opciones) {
            # code...
            $pregunta_130 = Answers::where('question_id', 130)->where('answer', $opciones)->count();
            $Resultado130[] = $pregunta_130;
        }

        
  
        foreach ($tiempos_trabajando as $opciones) {
            $pregunta_131 = Answers::where('question_id', 131)->where('answer', $opciones)->count();
            $Resultado131[] = $pregunta_131;
        }

        foreach ($opciones_21 as $opciones) {
            $pregunta_132=Answers::where('question_id', 132)->where('answer', $opciones)->count();
            $Resultado132[]=$pregunta_132;
        }

       
        foreach ($opciones_21 as $opciones) {
            $pregunta_133=Answers::where('question_id', 133)->where('answer', $opciones)->count();
            $Resultado133[]=$pregunta_133;
        }
        
        
        foreach ($actividades as $opciones) {
            $pregunta_134=Answers::where('question_id', 134)->where('answer', $opciones)->count();
            $Resultado134[]=$pregunta_134;
        }
        

        foreach ($opciones_24 as $opciones) {
            $pregunta_135 = Answers::where('question_id', 135)->where('answer', $opciones)->count();
            $Resultado135[] = $pregunta_135;
        }
        
        

        foreach ($actividades as $opciones) {
            $pregunta_136 = Answers::where('question_id', 136)->where('answer', $opciones)->count();
            $Resultado136[] = $pregunta_136;
        }
        

        foreach ($actividades as $opciones) {
            $pregunta_137 = Answers::where('question_id',137)->where('answer', $opciones)->count();
            $Resultado137[] = $pregunta_137;
        }

        
        foreach ($actividades as $opciones) {
            $pregunta_138 = Answers::where('question_id', 138)->where('answer', $opciones)->count();
            $Resultado138[] = $pregunta_138;
        }

        
        foreach ($actividades  as $opciones) {
            $pregunta_139 = Answers::where('question_id', 139)->where('answer', $opciones)->count();
            $Resultado139[] = $pregunta_139;
        }

        
        foreach ($opciones_sn as $opciones) {
            $pregunta_140 = Answers::where('question_id', 140)->where('answer', $opciones)->count();
            $Resultado140[] = $pregunta_140;
        }

       
       
        foreach ($opciones_3 as $opciones) {
            $pregunta_141 = Answers::where('question_id', 141)->where('answer', $opciones)->count();
            $Resultado141[] = $pregunta_141;
        }

        
        foreach ($opciones_3 as $opciones) {
            $pregunta_142 = Answers::where('question_id', 142)->where('answer', $opciones)->count();
            $Resultado142[] = $pregunta_142;
        }

        
        foreach ($opciones_3 as $opciones) {
            $pregunta_143 = Answers::where('question_id', 143)->where('answer', $opciones)->count();
            $Resultado143[] = $pregunta_143;
        }

       
        foreach ($opciones_3 as $opciones) {
            $pregunta_144 = Answers::where('question_id', 144)->where('answer', $opciones)->count();
            $Resultado144[] = $pregunta_144;
        }

        
        foreach ($opciones_3 as $opciones) {
            $pregunta_145 = Answers::where('question_id', 145)->where('answer', $opciones)->count();
            $Resultado145[] = $pregunta_145;
        }

        
        foreach ($opciones_sn as $opciones) {
            $pregunta_146 = Answers::where('question_id', 146)->where('answer', $opciones)->count();
            $Resultado146[] = $pregunta_146;
        }

        foreach ($opciones_sn as $opciones) {
            $pregunta_147 = Answers::where('question_id', 147)->where('answer', $opciones)->count();
            $Resultado147[] = $pregunta_147;
        }



        return view('Estadisticas.estadisticasTradeMarket57',compact(
        'edades', 
        'areas'  ,
        'tiempos',
        'adaptacion',
        'experiencias',
        'opciones_12',
        'actividades',
        'opciones_13_1',
        'opciones_21',
        'tiempos_trabajando',
        'opciones_sn',
        'opciones_24',
        'opciones_13',
        'opciones_3',
        'Resultado113',
        'Resultado115',
        'Resultado116',
        'Resultado117',          
        'Resultado120',
        'Resultado121',            
        'Resultado122',
        'Resultado123',
        'Resultado124',
        'Resultado126',
        'Resultado127',
        'Resultado128',
        'Resultado129',
        'Resultado130',
        'Resultado131',
        'Resultado132',
        'Resultado133',
        'Resultado134',
        'Resultado135',
        'Resultado136',
        'Resultado137',
        'Resultado138',
        'Resultado139',
        'Resultado140',
        'Resultado141',
        'Resultado142',
        'Resultado143',
        'Resultado144',
        'Resultado145',
        'Resultado146',
        'Resultado147',
    ));
    }

}
