<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Preguntas extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('questions')->insert(
            [
                'question' => '¿A qué rango de edad perteneces?',
                'type'=>'Unica',
                'company'=>'BH TRADE MARKET ',
                'options' => json_encode(['18-25', '26-35', '36-45', '46-55', '56-65', '65+'])
                
            ]
        );

        DB::table('questions')->insert(
            [
                'question' => '¿Cuál es tu genero?',
                'type'=>'Libre',
                'company'=>'BH TRADE MARKET ',
                'options' => 'Respuesta Libre',
                
            ]
        );

        DB::table('questions')->insert(
            [
                'question' => 'Àrea en la que te desenvuelves actualmente:', 
                'options' => json_encode(['Administración', 'Almacén', 'Compras', 'Dirección', 'Diseño', 'Importaciones', 'Logística', 'Marketing', 'Operaciones', ' Recursos Humanos', 'Tecnología', 'Ventas']),
                'type'=>'Unica',
                'company'=>'BH TRADE MARKET ',
            ]
        );

        DB::table('questions')->insert(
            [
                'question' => '¿Cuánto tiempo llevas trabajando en la organización?',
                'type'=>'Unica',
                'options' => json_encode([
                    'Menos de 6 meses',
                    'De 6 meses a 1 año',
                    'De 1 a 2 años',
                    '3 a 4 años',
                    '5 a 6 años', 'Mas de 7 años'
                ]),
                'company'=>'BH TRADE MARKET '

                
            ]
        );

        DB::table('questions')->insert(
            [
                'question' => '¿A qué empresa perteneces?',
                'type'=>'Unica',
                'options' =>json_encode([
                    'BH México',
                    'Bh Cancún '
                ]),
                'company'=>'BH TRADE MARKET '

            ]
        );

      


        DB::table('questions')->insert(
            [
                'question' => 'Al ingresar a trabajar en BH TRADE MARKET o cuando has cambiado de posición ¿Fue difícil adaptarte?',
                'type'=>'Unica',
                'options' =>json_encode( [
                    'Siempre',
                    'Casi siempre',
                    'Algunas veces',
                    'Casi nunca ',
                    'Nunca'
                ]),
                'company'=>'BH TRADE MARKET '
            ]
        );


        DB::table('questions')->insert(
            [
                'question' => '¿Qué es lo que más te gusta de trabajar en BH TRADE MARKET? (Puedes seleccionar dos opciones)',
                'type'=>'Multiple',
                'options'=>json_encode(['Compañeros de trabajo',
                'Instalaciones',
                'Liderazgo',
                'Tareas que realiza',
                'Gratificaciones/ pagos',
            ]),
            'company'=>'BH TRADE MARKET '

            ]
        );


        DB::table('questions')->insert(
            [
                'question' => '¿Qué es lo que menos te gusta de trabajar en la organización?  (puedes seleccionar dos opciones)',
                'type'=>'Multiple',
                'options'=>json_encode(['Compañeros de trabajo',
                'Instalaciones',
                'Liderazgo',
                'Tareas que realiza',
                'Gratificaciones/ pagos']),
                'company'=>'BH TRADE MARKET '
                


                
            ]
        );
        DB::table('questions')->insert(
            [
                'question' => '¿Cómo calificarías tu experiencia trabajando dentro de BH TRADE MARKET? (Tomando en cuenta que en tu trabajo pasas la mayor parte de tu vida, aprendes cosas nuevas y te llevas experiencias para toda la vida)',
                'type'=>'Unica',
                'options'=>json_encode(['Muy buena ',
                'Mala ',
                'Regular ',
                'Buena ',
                'Excelente']),
                'company'=>'BH TRADE MARKET '
            ]
        );
        DB::table('questions')->insert(
            [
                'question' => '¿Alguna vez has sentido que te delegan actividades que no tienen que ver con tus funciones',
                'type'=>'Unica',
                'options' =>json_encode(['Siempre',
                'Casi siempre',
                'Algunas veces',
                'Casi nunca ',
                'Nunca'
            ]),
            'company'=>'BH TRADE MARKET '

            ]
        );
        DB::table('questions')->insert(
            [
                'question' => '¿Las actividades que desempeñas en tu puesto son de tu agrado?',
                'type'=>'Unica',
                'options'=>json_encode(['Casi siempre',
                'Algunas veces',
                'Casi nunca ',
                'Nunca']),
                'company'=>'BH TRADE MARKET '
            ]
        );

        DB::table('questions')->insert(
            [
                'question' => '¿Crees que BH TRADE MARKET te brinda las herramientas necesarias para desenvolver tus actividades con facilidad?',
                'type'=>'Unica',
                'options'=>json_encode(['Nada de acuerdo',
                'Poco de acuerdo ',
                'Moderadamente de acuerdo',
                'Bastante de acuerdo',
                'Totalmente de acuerdo
                ']),
                'company'=>'BH TRADE MARKET '
            ]
        );

        DB::table('questions')->insert(
            [
                'question' => '¿Cómo calificarías las instalaciones de tu organización?',
                'type'=>'Unica',
                'options'=>json_encode(['Muy malas',
                'Malas',
                'Regulares',
                'Buenas ',
                'Excelentes']),
                'company'=>'BH TRADE MARKET '
            ]
        );

        DB::table('questions')->insert(
            [
                'question' => '¿Qué te gustaría mejorar en cuanto a lideres, herramientas e instalaciones de BH TRADE MARKET?',
                'type'=>'Libre',
                'options' => '' ,
                'company'=>'BH TRADE MARKET '             
            ]
        );

        DB::table('questions')->insert(
            [
                'question' => '¿Crees que BH TRADE MARKET te brinda oportunidades de progresar, crecer y desarrollarte profesionalmente',
                'type'=>'Unica',
                'options'=>json_encode(['Siempre',
                'Casi siempre',
                'Algunas veces',
                'Casi nunca ',
                'Nunca']),
                'company'=>'BH TRADE MARKET '
            ]
        );

        DB::table('questions')->insert(
            [
                'question' => '¿Piensas que BH TRADE MARKET considera a cada colaborador un factor clave para el éxito de la organización?',
                'type'=>'Unica',
                'options' =>json_encode(['Siempre',
                'Casi siempre',
                'Algunas veces',
                'Casi nunca ',
                'Nunca'

            ]),
            'company'=>'BH TRADE MARKET '
            ]
        );

        DB::table('questions')->insert(
            [
                'question' => '¿Te sientes comprometido con el éxito de tu empresa?',
                'type'=>'Unica',
                'options'=>json_encode(['Siempre',
                'Casi siempre',
                'Algunas veces',
                'Casi nunca ',
                'Nunca'
            ]),
            'company'=>'BH TRADE MARKET '
            ]
        );

        DB::table('questions')->insert(
            [
                'question' => '¿Se reconocen los logros de los colaboradores en tu empresa?',
                'type'=>'Unica',
                'options'=>json_encode(['Nada de acuerdo',
                'Poco de acuerdo ',
                'Moderadamente de acuerdo',
                'Bastante de acuerdo',
                'Totalmente de acuerdo
                ']),
                'company'=>'BH TRADE MARKET '
            ]
        );

        DB::table('questions')->insert(
            [
                'question' => '¿Sientes que los beneficios/sueldos están a la par con los de otras organizaciones?',
                'type'=>'Unica',
                'options'=>json_encode([
                    'Si',
                'No',
                'No se '
                ]),
                'company'=>'BH TRADE MARKET '
            ]
        );

        DB::table('questions')->insert(
            [
                'question' => '¿Te ves a ti mismo trabajando en BH TRADE MARKET dentro de?',
                'type'=>'Unica',
                'options' =>json_encode(['Menos de 1 año',
                '1 año',
                '2 años ',
                'Mas de 2 años']),
                'company'=>'BH TRADE MARKET '
            ]
        );


       

        DB::table('questions')->insert(
            [
                'question' => '¿Cómo es tu relación con tus compañeros de trabajo?',
                'type'=>'Unica',
                'options'=>json_encode(['Muy mala',
                'Mala',
                'Regular',
                'Buena',
                'Excelente'
            ]),
            'company'=>'BH TRADE MARKET '
            ]
        );

        DB::table('questions')->insert(
            [
                'question' => '¿Cómo sientes que es la integración con tus compañeros a la hora de trabajar en equipo?',
                'type'=>'Unica',
                'options'=>json_encode(['Muy mala',
                'Mala',
                'Regular',
                'Buena',
                'Excelente'
            ]),
            'company'=>'BH TRADE MARKET '
            ]
        );

        DB::table('questions')->insert(
            [
                'question' => '¿Alguna vez te has sentido excluido por parte de tu equipo de trabajo?',
                'type'=>'Unica',
                'options'=>json_encode(['Siempre ',
                'Casi siempre ',
                'Algunas veces ',
                'Casi nunca ',
                'Nunca'
            ]),
            'company'=>'BH TRADE MARKET '
            ]
        );

        DB::table('questions')->insert(
            [
                'question' => 'Para ti, ¿Qué tan motivante es trabajar con tu jefe(a)?',
                'type'=>'Unica',
                'options'=>json_encode(['Nada motivante',
                'Poco motivante ',
                'Moderadamente motivante ',
                'Muy motivante ',
                'Extremadamente motivante
                ']),
                'company'=>'BH TRADE MARKET '

            ]
        );

        DB::table('questions')->insert(
            [
                'question' => '¿Alguna vez te has sentido humillado o amenazado por alguno de tus compañeros?',
                'type'=>'Unica',
                'options'=>json_encode(['Siempre' ,
                'Casi siempre ',
                'Algunas veces ',
                'Casi nunca ',
                'Nunca
                ']),
                'company'=>'BH TRADE MARKET '
            ]
        );

        DB::table('questions')->insert(
            [
                'question' => '¿Sientes que puedes confiar en tus compañeros de trabajo?',
                'type'=>'Unica',
                'options'=>json_encode(['Nunca',
                'Casi Nunca ',
                'Algunas veces',
                'Casi siempre ',
                'Siempre']),
                'company'=>'BH TRADE MARKET '
                
            ]
        );

        DB::table('questions')->insert(
            [
                'question' => '¿Cómo es la relación con tu jefe?',
                'type'=>'Unica',
                'options'=>json_encode(['Muy mala',
                'Mala',
                'Regular',
                'Buena',
                'Excelente'] ),
                'company'=>'BH TRADE MARKET '          
            ]
        );

        DB::table('questions')->insert(
            [
                'question' => '¿Sientes que puedes confiar en tu jefe?',
                'type'=>'Unica',
                'options'=>json_encode(['Nunca',
                'Casi Nunca ',
                'Algunas veces',
                'Casi siempre ',
                'Siempre'
            ]),
            'company'=>'BH TRADE MARKET '
            ]
        );

        DB::table('questions')->insert(
            [
                'question' => '¿Te sientes escuchado por la Dirección de BH TRADE MARKET? ',
                'type'=>'Unica',
                'options'=>json_encode(['Nunca',
                'Casi Nunca ',
                'Algunas veces',
                'Casi siempre ',
                'Siempre'
            ]),
            'company'=>'BH TRADE MARKET '
            ]
        );
        DB::table('questions')->insert(
            [
                'question' => '¿Has tenido algún problema con tus compañeros de trabajo?',
                'type'=>'Unica',
                'options'=>json_encode(['Si', 'No ']),
                'company'=>'BH TRADE MARKET '
            ]
            

        );

      
        DB::table('questions')->insert(
            [
                'question' => '¿Conoces la misión y visión de BH TRADE MARKET?',
                'type'=>'Unica',
                'options' =>json_encode(['Si ',
                'No ',
                'No tenemos']),
                'company'=>'BH TRADE MARKET '
            ]
        );
        DB::table('questions')->insert(
            [
                'question' => '¿Conoces el código de ética de BH TRADE MARKET?',
                'type'=>'Unica',
                'options'=>json_encode(['Si ',
                'No ',
                'No tenemos'
            ]),
            'company'=>'BH TRADE MARKET '
            ]
        );
        DB::table('questions')->insert(
            [
                'question' => '¿Conoces los valores organizacionales de BH TRADE MARKET?',
                'type'=>'Unica',
                'options'=>json_encode(['Si',
                'No ',
                'No tenemos']),
                'company'=>'BH TRADE MARKET '
            ]
        );
        DB::table('questions')->insert(
            [
                'question' => '¿Conoces la línea de denuncias internas de BH TRADE MARKET?',
                'type'=>'Unica',
                'options'=>json_encode(['Si', 
                'No',
                'No tenemos']),
                'company'=>'BH TRADE MARKET '
            ]
        );
        DB::table('questions')->insert(
            [
                'question' => '¿Crees que se comete algún tipo de injusticia en tu trabajo?',
                'type'=>'Unica',
                'options'=>json_encode(['Si', 
                'No' ]),
                'company'=>'BH TRADE MARKET '
            ]
        );
        DB::table('questions')->insert(
            [
                'question' => '¿Has sido testigo de algún acto que atente contra nuestros valores y/o los colaboradores?',
                'type'=>'Unica',
                'options'=>json_encode(['Si',
                'No'
            ]),
            'company'=>'BH TRADE MARKET '
            ]
        );
        DB::table('questions')->insert(
            [
                'question' => '¿Te gustaría compartirnos la situación de la cual fuiste testigo que vayan en contra de nuestros valores o colaboradores?',
                'type'=>'Libre',
                'options'=>'',
                'company'=>'BH TRADE MARKET '
            ]
        );
        DB::table('questions')->insert(
            [
                'question' => '¿Te gustaría darnos algún comentario adicional? ',
                'type'=>'Libre',
                'options'=>'Respuesta abierta ',
                'company'=>'BH TRADE MARKET '
            ]   
        );

        // //PROMO LIFE
        DB::table('questions')->insert(
            [
                'question' => '¿A qué rango de edad perteneces?',
                'type'=>'Unica',
                'options' => json_encode(['18-25', '26-35', '36-45', '46-55', '56-65', '65+']),                
                'company'=>'PROMO LIFE '
            ]
        );

        DB::table('questions')->insert(
            [
                'question' => '¿Cuál es tu genero?',
                'type'=>'Libre',
                'options' => 'Respuesta Libre',
                'company'=>'PROMO LIFE'
            ]
        );

        DB::table('questions')->insert(
            [
                'question' => 'Àrea en la que te desenvuelves actualmente:', 
                'options' => json_encode(['Administración', 'Almacén', 'Compras', 'Dirección', 'Diseño', 'Importaciones', 'Logística', 'Marketing', 'Operaciones', ' Recursos Humanos', 'Tecnología', 'Ventas']),
                'type'=>'Unica',
                'company'=>'PROMO LIFE'
            ]
        );

        DB::table('questions')->insert(
            [
                'question' => '¿Cuánto tiempo llevas trabajando en la organización?',
                'type'=>'Unica',
                'options' => json_encode([
                    'Menos de 6 meses',
                    'De 6 meses a 1 año',
                    'De 1 a 2 años',
                    '3 a 4 años',
                    '5 a 6 años', 'Mas de 7 años
                '
                ]),
                'company'=>'PROMO LIFE'
            ]
        );

        // DB::table('questions')->insert(
        //     [
        //         'question' => '¿A qué empresa perteneces?',
        //         'type'=>'Unica',
        //         'options' =>json_encode([
        //             'BH México',
        //             'Bh Cancún '
        //         ]),
        //         'company'=>'PROMO LIFE'
        //     ]
        // );

      


        DB::table('questions')->insert(
            [
                'question' => 'Al ingresar a trabajar en PROMO LIFE o cuando has cambiado de posición ¿Fue difícil adaptarte?',
                'type'=>'Unica',
                'options' =>json_encode( [
                    'Siempre',
                    'Casi siempre',
                    'Algunas veces',
                    'Casi nunca ',
                    'Nunca'
                ]),
                'company'=>'PROMO LIFE'
            ]
        );


        DB::table('questions')->insert(
            [
                'question' => '¿Qué es lo que más te gusta de trabajar en PROMO LIFE? (Puedes seleccionar dos opciones)',
                'type'=>'Multiple',
                'options'=>json_encode(['Compañeros de trabajo',
                'Instalaciones',
                'Liderazgo',
                'Tareas que realiza',
                'Gratificaciones/ pagos',
            ]),
            'company'=>'PROMO LIFE'

            ]
        );


        DB::table('questions')->insert(
            [
                'question' => '¿Qué es lo que menos te gusta de trabajar en la organización?  (puedes seleccionar dos opciones)',
                'type'=>'Multiple',
                'options'=>json_encode(['Compañeros de trabajo',
                'Instalaciones',
                'Liderazgo',
                'Tareas que realiza',
                'Gratificaciones/ pagos']),
                'company'=>'PROMO LIFE'
                
            ]
        );
        DB::table('questions')->insert(
            [
                'question' => '¿Cómo calificarías tu experiencia trabajando dentro de PROMO LIFE? (Tomando en cuenta que en tu trabajo pasas la mayor parte de tu vida, aprendes cosas nuevas y te llevas experiencias para toda la vida)',
                'type'=>'Unica',
                'options'=>json_encode(['Muy buena ',
                'Mala ',
                'Regular ',
                'Buena ',
                'Excelente']),
                'company'=>'PROMO LIFE'
            ]
        );
        DB::table('questions')->insert(
            [
                'question' => '¿Alguna vez has sentido que te delegan actividades que no tienen que ver con tus funciones',
                'type'=>'Unica',
                'options' =>json_encode(['Siempre',
                'Casi siempre',
                'Algunas veces',
                'Casi nunca ',
                'Nunca'
            ]),
            'company'=>'PROMO LIFE'

            ]
        );
        DB::table('questions')->insert(
            [
                'question' => '¿Las actividades que desempeñas en tu puesto son de tu agrado?',
                'type'=>'Unica',
                'options'=>json_encode(['Casi siempre',
                'Algunas veces',
                'Casi nunca ',
                'Nunca']),
                'company'=>'PROMO LIFE'
            ]
        );

        DB::table('questions')->insert(
            [
                'question' => '¿Crees que PROMO LIFE te brinda las herramientas necesarias para desenvolver tus actividades con facilidad?',
                'type'=>'Unica',
                'options'=>json_encode(['Nada de acuerdo',
                'Poco de acuerdo ',
                'Moderadamente de acuerdo',
                'Bastante de acuerdo',
                'Totalmente de acuerdo
                ']),
                'company'=>'PROMO LIFE'
            ]
        );

        DB::table('questions')->insert(
            [
                'question' => '¿Cómo calificarías las instalaciones de tu organización?',
                'type'=>'Unica',
                'options'=>json_encode(['Muy malas',
                'Malas',
                'Regulares',
                'Buenas ',
                'Excelentes']),
                'company'=>'PROMO LIFE'
            ]
        );

        DB::table('questions')->insert(
            [
                'question' => '¿Qué te gustaría mejorar en cuanto a lideres, herramientas e instalaciones de BH PROMO LIFE?',
                'type'=>'Libre',
                'options' => '',
                'company'=>'PROMO LIFE'               
            ]
        );

        DB::table('questions')->insert(
            [
                'question' => '¿Crees que PROMO LIFE te brinda oportunidades de progresar, crecer y desarrollarte profesionalmente',
                'type'=>'Unica',
                'options'=>json_encode(['Siempre',
                'Casi siempre',
                'Algunas veces',
                'Casi nunca ',
                'Nunca']),
                'company'=>'PROMO LIFE'
            ]
        );

        DB::table('questions')->insert(
            [
                'question' => '¿Piensas que PROMO LIFE considera a cada colaborador un factor clave para el éxito de la organización?',
                'type'=>'Unica',
                'options' =>json_encode(['Siempre',
                'Casi siempre',
                'Algunas veces',
                'Casi nunca ',
                'Nunca'

            ]),'company'=>'PROMO LIFE'
            ]
        );

        DB::table('questions')->insert(
            [
                'question' => '¿Te sientes comprometido con el éxito de tu empresa?',
                'type'=>'Unica',
                'options'=>json_encode(['Siempre',
                'Casi siempre',
                'Algunas veces',
                'Casi nunca ',
                'Nunca'
            ]),'company'=>'PROMO LIFE'
            ]
        );

        DB::table('questions')->insert(
            [
                'question' => '¿Se reconocen los logros de los colaboradores en tu empresa?',
                'type'=>'Unica',
                'options'=>json_encode(['Nada de acuerdo',
                'Poco de acuerdo ',
                'Moderadamente de acuerdo',
                'Bastante de acuerdo',
                'Totalmente de acuerdo
                ']),'company'=>'PROMO LIFE'
            ]
        );

        DB::table('questions')->insert(
            [
                'question' => '¿Sientes que los beneficios/sueldos están a la par con los de otras organizaciones?',
                'type'=>'Unica',
                'options'=>json_encode([
                    'Si',
                'No',
                'No se '
                ]),'company'=>'PROMO LIFE'
            ]
        );

        DB::table('questions')->insert(
            [
                'question' => '¿Te ves a ti mismo trabajando en PROMO LIFE dentro de?',
                'type'=>'Unica',
                'options' =>json_encode(['Menos de 1 año',
                '1 año',
                '2 años ',
                'Mas de 2 años']),'company'=>'PROMO LIFE'
            ]
        );


       

        DB::table('questions')->insert(
            [
                'question' => '¿Cómo es tu relación con tus compañeros de trabajo?',
                'type'=>'Unica',
                'options'=>json_encode(['Muy mala',
                'Mala',
                'Regular',
                'Buena',
                'Excelente'
            ]),
                
            'company'=>'PROMO LIFE'
            ]
        );

        DB::table('questions')->insert(
            [
                'question' => '¿Cómo sientes que es la integración con tus compañeros a la hora de trabajar en equipo?',
                'type'=>'Unica',
                'options'=>json_encode(['Muy mala',
                'Mala',
                'Regular',
                'Buena',
                'Excelente'
            ]), 'company'=>'PROMO LIFE'
            ]
        );

        DB::table('questions')->insert(
            [
                'question' => '¿Alguna vez te has sentido excluido por parte de tu equipo de trabajo?',
                'type'=>'Unica',
                'options'=>json_encode(['Siempre ',
                'Casi siempre ',
                'Algunas veces ',
                'Casi nunca ',
                'Nunca'
            ]), 'company'=>'PROMO LIFE'
            ]
        );

        DB::table('questions')->insert(
            [
                'question' => 'Para ti, ¿Qué tan motivante es trabajar con tu jefe(a)?',
                'type'=>'Unica',
                'options'=>json_encode(['Nada motivante',
                'Poco motivante ',
                'Moderadamente motivante ',
                'Muy motivante ',
                'Extremadamente motivante
                ']), 'company'=>'PROMO LIFE'
            ]
        );

        DB::table('questions')->insert(
            [
                'question' => '¿Alguna vez te has sentido humillado o amenazado por alguno de tus compañeros?',
                'type'=>'Unica',
                'options'=>json_encode(['Siempre' ,
                'Casi siempre ',
                'Algunas veces ',
                'Casi nunca ',
                'Nunca
                ']), 'company'=>'PROMO LIFE'
            ]
        );

        DB::table('questions')->insert(
            [
                'question' => '¿Sientes que puedes confiar en tus compañeros de trabajo?',
                'type'=>'Unica',
                'options'=>json_encode(['Nunca',
                'Casi Nunca ',
                'Algunas veces',
                'Casi siempre ',
                'Siempre']), 'company'=>'PROMO LIFE'
                
            ]
        );

        DB::table('questions')->insert(
            [
                'question' => '¿Cómo es la relación con tu jefe?',
                'type'=>'Unica',
                'options'=>json_encode(['Muy mala',
                'Mala',
                'Regular',
                'Buena',
                'Excelente'] ), 'company'=>'PROMO LIFE'               
            ]
        );

        DB::table('questions')->insert(
            [
                'question' => '¿Sientes que puedes confiar en tu jefe?',
                'type'=>'Unica',
                'options'=>json_encode(['Nunca',
                'Casi Nunca ',
                'Algunas veces',
                'Casi siempre ',
                'Siempre'
            ]), 'company'=>'PROMO LIFE'
            ]
        );

        DB::table('questions')->insert(
            [
                'question' => '¿Te sientes escuchado por la Dirección de PROMO LIFE? ',
                'type'=>'Unica',
                'options'=>json_encode(['Nunca',
                'Casi Nunca ',
                'Algunas veces',
                'Casi siempre ',
                'Siempre'
            ]), 'company'=>'PROMO LIFE'
            ]
        );
        DB::table('questions')->insert(
            [
                'question' => '¿Has tenido algún problema con tus compañeros de trabajo?',
                'type'=>'Unica',
                'options'=>json_encode(['Si', 'No ']), 'company'=>'PROMO LIFE'
            ]
        );

      
        DB::table('questions')->insert(
            [
                'question' => '¿Conoces la misión y visión de PROMO LIFE?',
                'type'=>'Unica',
                'options' =>json_encode(['Si ',
                'No ',
                'No tenemos']), 'company'=>'PROMO LIFE'
            ]
        );
        DB::table('questions')->insert(
            [
                'question' => '¿Conoces el código de ética de PROMO LIFE?',
                'type'=>'Unica',
                'options'=>json_encode(['Si ',
                'No ',
                'No tenemos'
            ]), 'company'=>'PROMO LIFE'
            ]
        );
        DB::table('questions')->insert(
            [
                'question' => '¿Conoces los valores organizacionales de PROMO LIFE?',
                'type'=>'Unica',
                'options'=>json_encode(['Si',
                'No ',
                'No tenemos']), 'company'=>'PROMO LIFE'
            ]
        );
        DB::table('questions')->insert(
            [
                'question' => '¿Conoces la línea de denuncias internas de PROMO LIFE?',
                'type'=>'Unica',
                'options'=>json_encode(['Si', 
                'No',
                'No tenemos']), 'company'=>'PROMO LIFE'
            ]
        );
        DB::table('questions')->insert(
            [
                'question' => '¿Crees que se comete algún tipo de injusticia en tu trabajo?',
                'type'=>'Unica',
                'options'=>json_encode(['Si', 
                'No' ]), 'company'=>'PROMO LIFE'
            ]
        );
        DB::table('questions')->insert(
            [
                'question' => '¿Has sido testigo de algún acto que atente contra nuestros valores y/o los colaboradores?',
                'type'=>'Unica',
                'options'=>json_encode(['Si',
                'No'
            ]), 'company'=>'PROMO LIFE'
            ]
        );
        DB::table('questions')->insert(
            [
                'question' => '¿Te gustaría compartirnos la situación de la cual fuiste testigo que vayan en contra de nuestros valores o colaboradores?',
                'type'=>'Libre',
                'options'=>'', 'company'=>'PROMO LIFE'
            ]
        );
        DB::table('questions')->insert(
            [
                'question' => '¿Te gustaría darnos algún comentario adicional? ',
                'type'=>'Libre',
                'options'=>'Respuesta abierta ', 'company'=>'PROMO LIFE'
            ]   
        );

        // //PROMO SALE

        DB::table('questions')->insert(
            [
                'question' => '¿A qué rango de edad perteneces?',
                'type'=>'Unica',
                'options' => json_encode(['18-25', '26-35', '36-45', '46-55', '56-65', '65+']), 'company'=>'PROMO SALE'
            ]
        );

        DB::table('questions')->insert(
            [
                'question' => '¿Cuál es tu genero?',
                'type'=>'Libre',
                'options' => 'Respuesta Libre',
                'company'=>'PROMO SALE'
            ]
        );

        DB::table('questions')->insert(
            [
                'question' => 'Àrea en la que te desenvuelves actualmente:', 
                'options' => json_encode(['Administración', 'Almacén', 'Compras', 'Dirección', 'Diseño', 'Importaciones', 'Logística', 'Marketing', 'Operaciones', ' Recursos Humanos', 'Tecnología', 'Ventas']),
                'type'=>'Unica',
                'company'=>'PROMO SALE'
            ]
        );

        DB::table('questions')->insert(
            [
                'question' => '¿Cuánto tiempo llevas trabajando en la organización?',
                'type'=>'Unica',
                'options' => json_encode([
                    'Menos de 6 meses',
                    'De 6 meses a 1 año',
                    'De 1 a 2 años',
                    '3 a 4 años',
                    '5 a 6 años', 'Mas de 7 años
                '
                ]),
                'company'=>'PROMO SALE'
            ]
        );

        // DB::table('questions')->insert(
        //     [
        //         'question' => '¿A qué empresa perteneces?',
        //         'type'=>'Unica',
        //         'options' =>json_encode([
        //             'BH México',
        //             'Bh Cancún '
        //         ]),
        //         'company'=>'PROMO SALE'
        //     ]
        // );

      


        DB::table('questions')->insert(
            [
                'question' => 'Al ingresar a trabajar en PROMO ZALE o cuando has cambiado de posición ¿Fue difícil adaptarte?',
                'type'=>'Unica',
                'options' =>json_encode( [
                    'Siempre',
                    'Casi siempre',
                    'Algunas veces',
                    'Casi nunca ',
                    'Nunca'
                ]),
                'company'=>'PROMO SALE'
            ]
        );


        DB::table('questions')->insert(
            [
                'question' => '¿Qué es lo que más te gusta de trabajar en PROMO ZALE? (Puedes seleccionar dos opciones)',
                'type'=>'Multiple',
                'options'=>json_encode(['Compañeros de trabajo',
                'Instalaciones',
                'Liderazgo',
                'Tareas que realiza',
                'Gratificaciones/ pagos',
            ]),
            'company'=>'PROMO SALE'

            ]
        );


        DB::table('questions')->insert(
            [
                'question' => '¿Qué es lo que menos te gusta de trabajar en la organización?  (puedes seleccionar dos opciones)',
                'type'=>'Multiple',
                'options'=>json_encode(['Compañeros de trabajo',
                'Instalaciones',
                'Liderazgo',
                'Tareas que realiza',
                'Gratificaciones/ pagos']),
                'company'=>'PROMO SALE'
                
            ]
        );
        DB::table('questions')->insert(
            [
                'question' => '¿Cómo calificarías tu experiencia trabajando dentro de PROMO ZALE? (Tomando en cuenta que en tu trabajo pasas la mayor parte de tu vida, aprendes cosas nuevas y te llevas experiencias para toda la vida)',
                'type'=>'Unica',
                'options'=>json_encode(['Muy buena ',
                'Mala ',
                'Regular ',
                'Buena ',
                'Excelente']),
                'company'=>'PROMO SALE'
            ]
        );
        DB::table('questions')->insert(
            [
                'question' => '¿Alguna vez has sentido que te delegan actividades que no tienen que ver con tus funciones',
                'type'=>'Unica',
                'options' =>json_encode(['Siempre',
                'Casi siempre',
                'Algunas veces',
                'Casi nunca ',
                'Nunca'
            ]),
            'company'=>'PROMO SALE'

            ]
        );
        DB::table('questions')->insert(
            [
                'question' => '¿Las actividades que desempeñas en tu puesto son de tu agrado?',
                'type'=>'Unica',
                'options'=>json_encode(['Casi siempre',
                'Algunas veces',
                'Casi nunca ',
                'Nunca']),
                'company'=>'PROMO SALE'
            ]
        );

        DB::table('questions')->insert(
            [
                'question' => '¿Crees que PROMO ZALE te brinda las herramientas necesarias para desenvolver tus actividades con facilidad?',
                'type'=>'Unica',
                'options'=>json_encode(['Nada de acuerdo',
                'Poco de acuerdo ',
                'Moderadamente de acuerdo',
                'Bastante de acuerdo',
                'Totalmente de acuerdo
                ']),'company'=>'PROMO SALE'
            ]
        );

        DB::table('questions')->insert(
            [
                'question' => '¿Cómo calificarías las instalaciones de tu organización?',
                'type'=>'Unica',
                'options'=>json_encode(['Muy malas',
                'Malas',
                'Regulares',
                'Buenas ',
                'Excelentes']),'company'=>'PROMO SALE'
            ]
        );

        DB::table('questions')->insert(
            [
                'question' => '¿Qué te gustaría mejorar en cuanto a lideres, herramientas e instalaciones de PROMO ZALE?',
                'type'=>'Libre',
                'options' => '',
                'company'=>'PROMO SALE'               
            ]
        );

        DB::table('questions')->insert(
            [
                'question' => '¿Crees que PROMO ZALE te brinda oportunidades de progresar, crecer y desarrollarte profesionalmente',
                'type'=>'Unica',
                'options'=>json_encode(['Siempre',
                'Casi siempre',
                'Algunas veces',
                'Casi nunca ',
                'Nunca']),'company'=>'PROMO SALE'
            ]
        );

        DB::table('questions')->insert(
            [
                'question' => '¿Piensas que PROMO ZALE considera a cada colaborador un factor clave para el éxito de la organización?',
                'type'=>'Unica',
                'options' =>json_encode(['Siempre',
                'Casi siempre',
                'Algunas veces',
                'Casi nunca ',
                'Nunca'

            ]),'company'=>'PROMO SALE'
            ]
        );

        DB::table('questions')->insert(
            [
                'question' => '¿Te sientes comprometido con el éxito de tu empresa?',
                'type'=>'Unica',
                'options'=>json_encode(['Siempre',
                'Casi siempre',
                'Algunas veces',
                'Casi nunca ',
                'Nunca'
            ]),'company'=>'PROMO SALE'
            ]
        );

        DB::table('questions')->insert(
            [
                'question' => '¿Se reconocen los logros de los colaboradores en tu empresa?',
                'type'=>'Unica',
                'options'=>json_encode(['Nada de acuerdo',
                'Poco de acuerdo ',
                'Moderadamente de acuerdo',
                'Bastante de acuerdo',
                'Totalmente de acuerdo
                ']),'company'=>'PROMO SALE'
            ]
        );

        DB::table('questions')->insert(
            [
                'question' => '¿Sientes que los beneficios/sueldos están a la par con los de otras organizaciones?',
                'type'=>'Unica',
                'options'=>json_encode([
                    'Si',
                'No',
                'No se '
                ]),'company'=>'PROMO SALE'
            ]
        );

        DB::table('questions')->insert(
            [
                'question' => '¿Te ves a ti mismo trabajando en PROMO ZALE dentro de?',
                'type'=>'Unica',
                'options' =>json_encode(['Menos de 1 año',
                '1 año',
                '2 años ',
                'Mas de 2 años']),'company'=>'PROMO SALE'
            ]
        );


       

        DB::table('questions')->insert(
            [
                'question' => '¿Cómo es tu relación con tus compañeros de trabajo?',
                'type'=>'Unica',
                'options'=>json_encode(['Muy mala',
                'Mala',
                'Regular',
                'Buena',
                'Excelente'
            ]),'company'=>'PROMO SALE'
            ]
        );

        DB::table('questions')->insert(
            [
                'question' => '¿Cómo sientes que es la integración con tus compañeros a la hora de trabajar en equipo?',
                'type'=>'Unica',
                'options'=>json_encode(['Muy mala',
                'Mala',
                'Regular',
                'Buena',
                'Excelente'
            ]),'company'=>'PROMO SALE'
            ]
        );

        DB::table('questions')->insert(
            [
                'question' => '¿Alguna vez te has sentido excluido por parte de tu equipo de trabajo?',
                'type'=>'Unica',
                'options'=>json_encode(['Siempre ',
                'Casi siempre ',
                'Algunas veces ',
                'Casi nunca ',
                'Nunca'
            ]),'company'=>'PROMO SALE'
            ]
        );

        DB::table('questions')->insert(
            [
                'question' => 'Para ti, ¿Qué tan motivante es trabajar con tu jefe(a)?',
                'type'=>'Unica',
                'options'=>json_encode(['Nada motivante',
                'Poco motivante ',
                'Moderadamente motivante ',
                'Muy motivante ',
                'Extremadamente motivante
                ']),'company'=>'PROMO SALE'
            ]
        );

        DB::table('questions')->insert(
            [
                'question' => '¿Alguna vez te has sentido humillado o amenazado por alguno de tus compañeros?',
                'type'=>'Unica',
                'options'=>json_encode(['Siempre' ,
                'Casi siempre ',
                'Algunas veces ',
                'Casi nunca ',
                'Nunca
                ']),'company'=>'PROMO SALE'
            ]
        );

        DB::table('questions')->insert(
            [
                'question' => '¿Sientes que puedes confiar en tus compañeros de trabajo?',
                'type'=>'Unica',
                'options'=>json_encode(['Nunca',
                'Casi Nunca ',
                'Algunas veces',
                'Casi siempre ',
                'Siempre']),'company'=>'PROMO SALE'
                
            ]
        );

        DB::table('questions')->insert(
            [
                'question' => '¿Cómo es la relación con tu jefe?',
                'type'=>'Unica',
                'options'=>json_encode(['Muy mala',
                'Mala',
                'Regular',
                'Buena',
                'Excelente'] ),
                'company'=>'PROMO SALE'
            ]
        );

        DB::table('questions')->insert(
            [
                'question' => '¿Sientes que puedes confiar en tu jefe?',
                'type'=>'Unica',
                'options'=>json_encode(['Nunca',
                'Casi Nunca ',
                'Algunas veces',
                'Casi siempre ',
                'Siempre'
            ]),
            'company'=>'PROMO SALE'
            ]
        );

        DB::table('questions')->insert(
            [
                'question' => '¿Te sientes escuchado por la Dirección de PROMO ZALE? ',
                'type'=>'Unica',
                'options'=>json_encode(['Nunca',
                'Casi Nunca ',
                'Algunas veces',
                'Casi siempre ',
                'Siempre'
            ]),
            'company'=>'PROMO SALE'
            ]
        );
        DB::table('questions')->insert(
            [
                'question' => '¿Has tenido algún problema con tus compañeros de trabajo?',
                'type'=>'Unica',
                'options'=>json_encode(['Si', 'No ']),
                'company'=>'PROMO SALE'
            ]
        );

      
        DB::table('questions')->insert(
            [
                'question' => '¿Conoces la misión y visión de PROMO ZALE?',
                'type'=>'Unica',
                'options' =>json_encode(['Si ',
                'No ',
                'No tenemos']),
                'company'=>'PROMO SALE'
            ]
        );
        DB::table('questions')->insert(
            [
                'question' => '¿Conoces el código de ética de PROMO ZALE?',
                'type'=>'Unica',
                'options'=>json_encode(['Si ',
                'No ',
                'No tenemos'
            ]),'company'=>'PROMO SALE'
            ]
        );
        DB::table('questions')->insert(
            [
                'question' => '¿Conoces los valores organizacionales de PROMO ZALE?',
                'type'=>'Unica',
                'options'=>json_encode(['Si',
                'No ',
                'No tenemos']),'company'=>'PROMO SALE'
            ]
        );
        DB::table('questions')->insert(
            [
                'question' => '¿Conoces la línea de denuncias internas de PROMO ZALE?',
                'type'=>'Unica',
                'options'=>json_encode(['Si', 
                'No',
                'No tenemos']),'company'=>'PROMO SALE'
            ]
        );
        DB::table('questions')->insert(
            [
                'question' => '¿Crees que se comete algún tipo de injusticia en tu trabajo?',
                'type'=>'Unica',
                'options'=>json_encode(['Si', 
                'No' ]),'company'=>'PROMO SALE'
            ]
        );
        DB::table('questions')->insert(
            [
                'question' => '¿Has sido testigo de algún acto que atente contra nuestros valores y/o los colaboradores?',
                'type'=>'Unica',
                'options'=>json_encode(['Si',
                'No'
            ]),'company'=>'PROMO SALE'
            ]
        );
        DB::table('questions')->insert(
            [
                'question' => '¿Te gustaría compartirnos la situación de la cual fuiste testigo que vayan en contra de nuestros valores o colaboradores?',
                'type'=>'Libre',
                'options'=>'',
                'company'=>'PROMO SALE'
            ]
        );
        DB::table('questions')->insert(
            [
                'question' => '¿Te gustaría darnos algún comentario adicional? ',
                'type'=>'Libre',
                'options'=>'Respuesta abierta ',
                'company'=>'PROMO SALE'
            ]   
        );

        // //TM57
        DB::table('questions')->insert(
            [
                'question' => '¿A qué rango de edad perteneces?',
                'type'=>'Unica',
                'options' => json_encode(['18-25', '26-35', '36-45', '46-55', '56-65', '65+']),
                'company'=>'TM57'
            ]
        );

        DB::table('questions')->insert(
            [
                'question' => '¿Cuál es tu genero?',
                'type'=>'Libre',
                'options' => 'Respuesta Libre'
                ,'company'=>'TM57'
            ]
        );

        DB::table('questions')->insert(
            [
                'question' => 'Àrea en la que te desenvuelves actualmente:', 
                'options' => json_encode(['Administración', 'Almacén', 'Compras', 'Dirección', 'Diseño', 'Importaciones', 'Logística', 'Marketing', 'Operaciones', ' Recursos Humanos', 'Tecnología', 'Ventas']),
                'type'=>'Unica','company'=>'TM57'
            ]
        );

        DB::table('questions')->insert(
            [
                'question' => '¿Cuánto tiempo llevas trabajando en la organización?',
                'type'=>'Unica',
                'options' => json_encode([
                    'Menos de 6 meses',
                    'De 6 meses a 1 año',
                    'De 1 a 2 años',
                    '3 a 4 años',
                    '5 a 6 años', 'Mas de 7 años
                '
                ])
                ,'company'=>'TM57'
            ]
            
        );

        // DB::table('questions')->insert(
        //     [
        //         'question' => '¿A qué empresa perteneces?',
        //         'type'=>'Unica',
        //         'options' =>json_encode([
        //             'BH México',
        //             'Bh Cancún '
        //         ]),'company'=>'TM57'
        //     ]
        // );

      


        DB::table('questions')->insert(
            [
                'question' => 'Al ingresar a trabajar en TM57 o cuando has cambiado de posición ¿Fue difícil adaptarte?',
                'type'=>'Unica',
                'options' =>json_encode( [
                    'Siempre',
                    'Casi siempre',
                    'Algunas veces',
                    'Casi nunca ',
                    'Nunca'
                ]),'company'=>'TM57'
            ]
        );


        DB::table('questions')->insert(
            [
                'question' => '¿Qué es lo que más te gusta de trabajar en TM57? (Puedes seleccionar dos opciones)',
                'type'=>'Multiple',
                'options'=>json_encode(['Compañeros de trabajo',
                'Instalaciones',
                'Liderazgo',
                'Tareas que realiza',
                'Gratificaciones/ pagos',
                ]),'company'=>'TM57'

            ]
        );


        DB::table('questions')->insert(
            [
                'question' => '¿Qué es lo que menos te gusta de trabajar en la organización?  (puedes seleccionar dos opciones)',
                'type'=>'Multiple',
                'options'=>json_encode(['Compañeros de trabajo',
                'Instalaciones',
                'Liderazgo',
                'Tareas que realiza',
                'Gratificaciones/ pagos']),'company'=>'TM57'
                
            ]
        );
        DB::table('questions')->insert(
            [
                'question' => '¿Cómo calificarías tu experiencia trabajando dentro de TM57? (Tomando en cuenta que en tu trabajo pasas la mayor parte de tu vida, aprendes cosas nuevas y te llevas experiencias para toda la vida)',
                'type'=>'Unica',
                'options'=>json_encode(['Muy buena ',
                'Mala ',
                'Regular ',
                'Buena ',
                'Excelente']),'company'=>'TM57'
            ]
        );
        DB::table('questions')->insert(
            [
                'question' => '¿Alguna vez has sentido que te delegan actividades que no tienen que ver con tus funciones',
                'type'=>'Unica',
                'options' =>json_encode(['Siempre',
                'Casi siempre',
                'Algunas veces',
                'Casi nunca ',
                'Nunca'
                ]),'company'=>'TM57'

            ]
        );
        DB::table('questions')->insert(
            [
                'question' => '¿Las actividades que desempeñas en tu puesto son de tu agrado?',
                'type'=>'Unica',
                'options'=>json_encode(['Casi siempre',
                'Algunas veces',
                'Casi nunca ',
                'Nunca']),'company'=>'TM57'
            ]
        );

        DB::table('questions')->insert(
            [
                'question' => '¿Crees que TM57 te brinda las herramientas necesarias para desenvolver tus actividades con facilidad?',
                'type'=>'Unica',
                'options'=>json_encode(['Nada de acuerdo',
                'Poco de acuerdo ',
                'Moderadamente de acuerdo',
                'Bastante de acuerdo',
                'Totalmente de acuerdo
                ']),'company'=>'TM57'
            ]
        );

        DB::table('questions')->insert(
            [
                'question' => '¿Cómo calificarías las instalaciones de tu organización?',
                'type'=>'Unica',
                'options'=>json_encode(['Muy malas',
                'Malas',
                'Regulares',
                'Buenas ',
                'Excelentes']),'company'=>'TM57'
            ]
        );

        DB::table('questions')->insert(
            [
                'question' => '¿Qué te gustaría mejorar en cuanto a lideres, herramientas e instalaciones de TM57?',
                'type'=>'Libre',
                'options' => '' ,'company'=>'TM57'              
            ]
        );

        DB::table('questions')->insert(
            [
                'question' => '¿Crees queTM57 te brinda oportunidades de progresar, crecer y desarrollarte profesionalmente',
                'type'=>'Unica',
                'options'=>json_encode(['Siempre',
                'Casi siempre',
                'Algunas veces',
                'Casi nunca ',
                'Nunca']),'company'=>'TM57'
            ]
        );

        DB::table('questions')->insert(
            [
                'question' => '¿Piensas que TM57 considera a cada colaborador un factor clave para el éxito de la organización?',
                'type'=>'Unica',
                'options' =>json_encode(['Siempre',
                'Casi siempre',
                'Algunas veces',
                'Casi nunca ',
                'Nunca'

                ]),'company'=>'TM57'
            ]
        );

        DB::table('questions')->insert(
            [
                'question' => '¿Te sientes comprometido con el éxito de tu empresa?',
                'type'=>'Unica',
                'options'=>json_encode(['Siempre',
                'Casi siempre',
                'Algunas veces',
                'Casi nunca ',
                'Nunca'
                ]),'company'=>'TM57'
            ]
        );

        DB::table('questions')->insert(
            [
                'question' => '¿Se reconocen los logros de los colaboradores en tu empresa?',
                'type'=>'Unica',
                'options'=>json_encode(['Nada de acuerdo',
                'Poco de acuerdo ',
                'Moderadamente de acuerdo',
                'Bastante de acuerdo',
                'Totalmente de acuerdo
                ']),'company'=>'TM57'
            ]
        );

        DB::table('questions')->insert(
            [
                'question' => '¿Sientes que los beneficios/sueldos están a la par con los de otras organizaciones?',
                'type'=>'Unica',
                'options'=>json_encode([
                    'Si',
                'No',
                'No se '
                ]),'company'=>'TM57'
            ]
        );

        DB::table('questions')->insert(
            [
                'question' => '¿Te ves a ti mismo trabajando en TM57 dentro de?',
                'type'=>'Unica',
                'options' =>json_encode(['Menos de 1 año',
                '1 año',
                '2 años ',
                'Mas de 2 años']),'company'=>'TM57'
            ]
        );


       

        DB::table('questions')->insert(
            [
                'question' => '¿Cómo es tu relación con tus compañeros de trabajo?',
                'type'=>'Unica',
                'options'=>json_encode(['Muy mala',
                'Mala',
                'Regular',
                'Buena',
                'Excelente'
                ]),'company'=>'TM57'
            ]
        );

        DB::table('questions')->insert(
            [
                'question' => '¿Cómo sientes que es la integración con tus compañeros a la hora de trabajar en equipo?',
                'type'=>'Unica',
                'options'=>json_encode(['Muy mala',
                'Mala',
                'Regular',
                'Buena',
                'Excelente'
                ]),'company'=>'TM57'
            ]
        );

        DB::table('questions')->insert(
            [
                'question' => '¿Alguna vez te has sentido excluido por parte de tu equipo de trabajo?',
                'type'=>'Unica',
                'options'=>json_encode(['Siempre ',
                'Casi siempre ',
                'Algunas veces ',
                'Casi nunca ',
                'Nunca'
                ]),'company'=>'TM57'
            ]
        );

        DB::table('questions')->insert(
            [
                'question' => 'Para ti, ¿Qué tan motivante es trabajar con tu jefe(a)?',
                'type'=>'Unica',
                'options'=>json_encode(['Nada motivante',
                'Poco motivante ',
                'Moderadamente motivante ',
                'Muy motivante ',
                'Extremadamente motivante
                ']),'company'=>'TM57'
            ]
        );

        DB::table('questions')->insert(
            [
                'question' => '¿Alguna vez te has sentido humillado o amenazado por alguno de tus compañeros?',
                'type'=>'Unica',
                'options'=>json_encode(['Siempre' ,
                'Casi siempre ',
                'Algunas veces ',
                'Casi nunca ',
                'Nunca
                ']),'company'=>'TM57'
            ]
        );

        DB::table('questions')->insert(
            [
                'question' => '¿Sientes que puedes confiar en tus compañeros de trabajo?',
                'type'=>'Unica',
                'options'=>json_encode(['Nunca',
                'Casi Nunca ',
                'Algunas veces',
                'Casi siempre ',
                'Siempre']),'company'=>'TM57'
                
            ]
        );

        DB::table('questions')->insert(
            [
                'question' => '¿Cómo es la relación con tu jefe?',
                'type'=>'Unica',
                'options'=>json_encode(['Muy mala',
                'Mala',
                'Regular',
                'Buena',
                'Excelente'] )  ,'company'=>'TM57'             
            ]
        );

        DB::table('questions')->insert(
            [
                'question' => '¿Sientes que puedes confiar en tu jefe?',
                'type'=>'Unica',
                'options'=>json_encode(['Nunca',
                'Casi Nunca ',
                'Algunas veces',
                'Casi siempre ',
                'Siempre'
                ]),'company'=>'TM57'
            ]
        );

        DB::table('questions')->insert(
            [
                'question' => '¿Te sientes escuchado por la Dirección de TM57? ',
                'type'=>'Unica',
                'options'=>json_encode(['Nunca',
                'Casi Nunca ',
                'Algunas veces',
                'Casi siempre ',
                'Siempre'
                ]),'company'=>'TM57'
            ]
        );
        DB::table('questions')->insert(
            [
                'question' => '¿Has tenido algún problema con tus compañeros de trabajo?',
                'type'=>'Unica',
                'options'=>json_encode(['Si', 'No ']),'company'=>'TM57'
            ]
        );

      
        DB::table('questions')->insert(
            [
                'question' => '¿Conoces la misión y visión de TM57?',
                'type'=>'Unica',
                'options' =>json_encode(['Si ',
                'No ',
                'No tenemos']),'company'=>'TM57'
            ]
        );
        DB::table('questions')->insert(
            [
                'question' => '¿Conoces el código de ética de TM57?',
                'type'=>'Unica',
                'options'=>json_encode(['Si ',
                'No ',
                'No tenemos'
                ]),'company'=>'TM57'
            ]
        );
        DB::table('questions')->insert(
            [
                'question' => '¿Conoces los valores organizacionales de TM57?',
                'type'=>'Unica',
                'options'=>json_encode(['Si',
                'No ',
                'No tenemos']),'company'=>'TM57'
            ]
        );
        DB::table('questions')->insert(
            [
                'question' => '¿Conoces la línea de denuncias internas de TM57?',
                'type'=>'Unica',
                'options'=>json_encode(['Si', 
                'No',
                'No tenemos']),'company'=>'TM57'
            ]
        );
        DB::table('questions')->insert(
            [
                'question' => '¿Crees que se comete algún tipo de injusticia en tu trabajo?',
                'type'=>'Unica',
                'options'=>json_encode(['Si', 
                'No' ]),'company'=>'TM57'
            ]
        );
        DB::table('questions')->insert(
            [
                'question' => '¿Has sido testigo de algún acto que atente contra nuestros valores y/o los colaboradores?',
                'type'=>'Unica',
                'options'=>json_encode(['Si',
                'No'
                ]),'company'=>'TM57'
            ]
        );
        DB::table('questions')->insert(
            [
                'question' => '¿Te gustaría compartirnos la situación de la cual fuiste testigo que vayan en contra de nuestros valores o colaboradores?',
                'type'=>'Libre',
                'options'=>'','company'=>'TM57'
            ]
        );
        DB::table('questions')->insert(
            [
                'question' => '¿Te gustaría darnos algún comentario adicional? ',
                'type'=>'Libre',
                'options'=>'Respuesta abierta ','company'=>'TM57'
            ]   
        );
    }
}
