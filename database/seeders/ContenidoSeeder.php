<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Contenido;

class ContenidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*
        protected $fillable = ['id', 'titulo' , 'creacion', 'vigor' , 'texto'] ;
            $table->id();
            $table->string('titulo');
            $table->date('creacion');
            $table->date('vigor');
            $table->text('texto');
            $table->timestamps();
*/

        $entradas = [
            ['id' =>  1, 'titulo' => 'Inicio', 'creacion' => '2020-01-01' , 'vigor' => '2020-01-01', 'texto'=> <<<'EOD'
            Mensaje de Bienvenida
            Vida Cobach
            Se parte del Colegio de Bachilleres de Chiapas Plantel 35
            Somos la mejor opción en el sistema de educación media.                        
            Contamos con la infraestructura para tu educación, además con espacios para practicar deporte, dos canchas de fútbol, una de basquetbol y otra para voleibol, contamos con un sistema de educación de calidad y la posibilidad de obtener tu certificado de bachillerato mediante el examen CENEVAL.
            Mtro. José Fabián Zepeda López, Director
            EOD ],

            ['id' =>  2, 'titulo' => 'Conocenos', 'creacion' => '2020-01-01' , 'vigor' => '2020-01-01', 'texto'=> <<<'EOD'
            Estamos ubicados a un costado de  las oficinas de Seguridad Publica a 200 mts. de SECH rumbo a la Colonia Las Águilas.

            Las rutas de transporte publico que llegan al plantel son: 49, 24, 96 y 100.
            EOD],
                ['id' =>  3, 'titulo' => 'Mision & vision', 'creacion' => '2020-01-01' , 'vigor' => '2020-01-01', 'texto'=> <<<'EOD'
                Mision 
                Formar jóvenes en el nivel medio superior con una educación integral, para contribuir en su proyecto de vida.
                Visión
                Ser una institución que atienda la demanda educativa con calidad y nos identifique como la mejor opción en el nivel medio superior.
                Valores
                * Lealtad
                * Responsabilidad
                * Tolerancia
                EOD ],
                ['id' =>  4, 'titulo' => 'Historia', 'creacion' => '2020-01-01' , 'vigor' => '2020-01-01', 'texto'=> <<<'EOD'
                El Colegio de Bachilleres de Chiapas plantel 35 " Tuxtla Norte", inicio sus servicios educativos en Septiembre de 1995, con un matricula de 313 alumnos, distribuida en seis grupos  y una planta laboral de  18 docentes,3 administrativos y 1 directivo.

                Inicialmente se ubico en las instalaciones de la Escuela Normal de Educación Primaria del Estado, en la cual estuvo por 4 semestres. 
                
                Posteriormente muda sus actividades a la Escuela Secundaria " José Maria Luís Mora " , con una matricula de 400 alumnos, distribuida en nueve grupos y una plantilla de personal comprendida por: 26 docentes, un directivo y  9 administrativos. 
                
                Actualmente cuenta con instalaciones propias ubicadas en la colonia Huajitlan.
                EOD ],
                ['id' =>  5, 'titulo' => 'Estructura Funcional', 'creacion' => '2020-01-01' , 'vigor' => '2020-01-01', 'texto'=> <<<'EOD'
                Director General del Colegio de Bachilleres de Chiapas
                Mtro. Jorge Enrique Hernández Bielma
                Correo: dirgeneral@cobach.mx
                
                Coordinador de la Zona Centro Fraylesca
                C.P.  Aberlay López Rodríguez
                Correo: coorcentrofrailesca@cobach.mx
                
                Director del  Plantel 35 Tuxtla Norte
                Mtro. José Fabián Zepeda López
                Correo: cobach_pl35@hotmail.com

                SubDirectora turno matutino
                Lic. Fabiola Soledad Domínguez Prado
                Correo: Subpl35@hotmail.com

                SubDirectora turno vespertino
                Lic. Beatriz Perez  Luna
                Correo: betyperezluna@hotmail.com

                EOD ],
                ['id' =>  6, 'titulo' => 'Instalaciones', 'creacion' => '2020-01-01' , 'vigor' => '2020-01-01', 'texto'=> <<<'EOD'
                El COBACH 35 Tuxtla - Norte apoya sus actividades escolares en:
                
                18 aulas                
                1 sala audiovisual
                2 laboratorios de cómputo
                1 aula digital
                1 laboratorio de física
                1 laboratorio de química y biología
                1 biblioteca
                1 cancha de fútbol
                1 cancha de basquetboll
                Área de cafetería
                Área administrativa
                Área de Orientación escolar
                EOD ],
                ['id' =>  7, 'titulo' => 'Visitanos', 'creacion' => '2020-01-01' , 'vigor' => '2020-01-01', 'texto'=> <<<'EOD'
                Contactanos
                Horario de atención: 
                7:30 a.m. a 1:30 p.m. y de 2:30 p.m. al 7:30 p.m.

                Dirección:
                Avenida Capricornio s/n  
                esquina con Boulevard Fidel Velázquez
                Fraccionamiento Huajitlan.
                Tuxtla Gutiérrez, Chiapas 
                C.P. 29000
                Teléfono: 961 61 6 68 94
                Correo electrónico: cobach_pl35@hotmail.com
                EOD ],

            ['id' =>  8, 'titulo' => 'Oferta Educativa', 'creacion' => '2020-01-01' , 'vigor' => '2020-01-01', 'texto'=> <<<'EOD'
            El COBACH 35 Tuxtla Norte  brinda sus servicios educativos bajo la modalidad escolarizada y curricularmente aplica el Bachillerato General con enfoque en normas de competencia laboral, se cursa en seis semestres. El plan y los programas de estudio son proporcionados por la Dirección General del Bachillerato dependiente de la Secretaría de Educación Pública.  Se constituye por tres componentes formativos, cuyos contenidos se enfocan en el modelo constructivista centrado en el aprendizaje
            COMPONENTE DE FORMACIÓN BÁSICA: Brinda información sobre conocimientos, habilidades y actitudes que debe poseer el alumno para participar y comprender su medio. Se da en cuatro campos disciplinarios: Matemáticas, Ciencias Naturales, Histórico Social, Lenguaje y Comunicación. Estas asignaturas se cursan del primero al sexto semestre.
            COMPONENTE DE FORMACIÓN PROPEDEÚTICA: Prepara al alumno para continuar sus estudios superiores, aquí se abordan asignaturas que le permiten profundizar en aspectos particulares de las diversas disciplinas con la intención de que adquieran los elementos necesarios que le ayuden a definir sus intereses profesionales. Estas asignaturas se cursan en quinto y sexto semestre.
            COMPONENTE DE FORMACIÓN PARA EL TRABAJO: Aquí el estudiante desarrolla procesos de trabajo específicos, por medio de procedimientos, técnicas e instrumentos, además de generar actitudes de valoración  y responsabilidad ante esta actividad, lo que permite interactuar en forma útil con un entorno laboral. Estas asignaturas se cursan a partir del tercer semestre.
            EOD ],
                ['id' =>  9, 'titulo'  => 'Academias', 'creacion' => '2020-01-01' , 'vigor' => '2020-01-01', 'texto'=> <<<'EOD'
                Con la finalidad de promover y fomentar el análisis y reflexión entorno al proceso de enseñanza aprendizaje y el trabajo en aula, los docentes están organizados por asignaturas en las siguientes academias:
                Lenguaje y Comunicación
                Humanidades
                Ciencias Sociales                        
                Ciencias Experimentales
                Matemáticas
                Paraescolares
                Orientación Escolar
                EOD ],
                ['id' =>  10, 'titulo' => 'Plan de estudios', 'creacion' => '2020-01-01' , 'vigor' => '2020-01-01', 'texto'=> <<<'EOD'
                Para obtener el contenido de cada asignatura por favor de click sobre el titulo
                Programas de Capacitación para el Trabajo

                Módulos con enfoque en competencias:
                Capacitación de Contabilidad
                Capacitación de Informática
                Capacitación de Administración
                Capacitación de Higiene y Salud Comunitaria
                Capacitación de Desarrollo e Implementacion de la Docencia en la Comunidad
                Capacitación de Desarrollo Comunitario
                EOD ],

            ['id' =>  11, 'titulo' => 'Alumnos', 'creacion' => '2020-01-01' , 'vigor' => '2020-01-01', 'texto'=> <<<'EOD'
            Si eres tutor o alumno del COBACH 35, ya eres parte de nuestra comunidad escolar, ¡Siéntete bienvenido! 
            EOD ],

            ['id' =>  12, 'titulo' => 'Vinculacion',  'creacion' => '2020-01-01' , 'vigor' => '2020-01-01', 'texto'=> <<<'EOD'
            El Colegio de Bachilleres de Chiapas plantel 35 Tuxtla Norte con la finalidad de fortalecer el vinculo entre la sociedad y la institución, ofrece los siguientes servicios: 
            Préstamo de Instalaciones para actividades académicas. 
            Presentación  de agrupaciones artísticas, banda de guerra y escolta del plantel.
            Platicas y conferencias por parte de nuestro personal académico    
            EOD ],
                ['id' =>  13, 'titulo' => 'Danza Folklorica', 'creacion' => '2020-01-01' , 'vigor' => '2020-01-01', 'texto'=> <<<'EOD'
                El grupo de danza folklorica Balam, tiene un amplio repertorio danzistico que abarca todas las regiones de Chiapas y algunos estados de la República Mexicana, han participado en numerosos festivales, ferias y encuentro culturales
                EOD ],

            ['id' =>  14, 'titulo' => 'Noticias & Eventos', 'creacion' => '2020-01-01' , 'vigor' => '2020-01-01', 'texto'=> <<<'EOD'
            ULTIMAS NOTICIAS
            EOD ] ,
        ];

        foreach ($entradas as $entrada) {
            Contenido::create($entrada);
        }
    }
}
