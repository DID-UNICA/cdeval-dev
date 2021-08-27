<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class DatosPrueba extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Primer archivo: 1_RespuestasEvalCursosTodasAreas_2020-1s_1
        //Insertando coordinacion
        DB::table('coordinacions')->insert([
            'id' => 201,
            'nombre_coordinacion' => 'Área Didáctico pedagógica',
            'abreviatura' => 'DA',
            'coordinador' => 'Daniel Morales',
            'grado' => 'M.E.M.',
            'usuario' => 'daniel',
            'password' => Hash::make('1234'),
            'comentarios' => '-'
        ]);
        DB::table('catalogo_cursos')->insert([
            'id'=> 201,
            'nombre_curso'=>'Aprendizaje a través de dispositivos móviles',
            'duracion_curso' => '20',
            'coordinacion_id' => 201,
            'tipo' => 'C',
            'institucion' => 'DGAPA',
            'fecha_disenio'=>'2012-12-12',
            'coordinacion_id'=>2,
            'clave_curso'=>'ADMDGAPA'
        ]);
        
        DB::table('cursos')->insert([
            'id'=>201,
            'semestre_anio'=>2020,
            'semestre_pi'=>'1',
            'semestre_si'=>'s',
            'fecha_inicio' => '2018-05-20',
            'fecha_fin' => '2018-05-30',
            'hora_inicio' => '14:00',
            'hora_fin' => '16:00',
            'dias_semana' => 'Lunes,Miércoles',
            'numero_sesiones' => 10,
            'texto_diploma' => 'Texto diploma',
            'costo' => 2000,
            'cupo_maximo' => 20,
            'cupo_minimo' => 5,
            'catalogo_id' => 201,
            'salon_id' => 1
        ]);
        
        //Insertando profesores
        //Instructores
        DB::table('profesors')->insert([
            'id'=>201,
            'nombres' => 'Gabriela',
            'apellido_paterno' => 'Camacho',
            'apellido_materno' => 'Villaseñor',
            'rfc' => 'CAVG010101KDA',
            'curp' =>'CAVG010101MDFMLB05',
            'numero_trabajador' => '12345670',
            'categoria_nivel_id'=>1,
            'fecha_nacimiento' => '1901-01-01',
            'telefono' => '55664487',
            'grado' => 'Maestría',
            'email' => 'carosiim.sdco@gmail.com',
            'semblanza_corta'=> 'Doctorado en Inteligencia Artificial,
                             su carrera es respaldada por 25 años de 
                             ejercer la doctrina de profesor. Ganó el premio
                             S@T por el código más pequeño del mundo',
            'genero' => 'femenino',
            'comentarios' => 'Comentarios',
            'facebook' => 'Gabriela C. V.',
            'unam' => true,
            'facultad_id' =>1,
            'carrera_id' =>1,
        ]);
        DB::table('profesors')->insert([
            'id'=>202,
            'nombres' => 'Arely',
            'apellido_paterno' => 'Hernández',
            'apellido_materno' => 'Valverde',
            'rfc' => 'HEVA010101AK6',
            'curp' =>'HEVA010101MDFRLR06',
            'numero_trabajador' => '12345671',
            'categoria_nivel_id'=>1,
            'fecha_nacimiento' => '1901-01-01',
            'telefono' => '55664487',
            'grado' => 'Maestría',
            'email' => 'carosiim.sdco@gmail.com',
            'semblanza_corta'=> 'Doctorado en Inteligencia Artificial,
                             su carrera es respaldada por 25 años de 
                             ejercer la doctrina de profesor. Ganó el premio
                             S@T por el código más pequeño del mundo',
            'genero' => 'femenino',
            'comentarios' => 'Comentarios',
            'facebook' => 'Arely H. V.',
            'unam' => true,
            'facultad_id' =>1,
            'carrera_id' =>1,
        ]);
        //Participantes
        DB::table('profesors')->insert([
            'id'=>203,
            'nombres'=>'Maria Elena',
            'apellido_paterno'=>'Cano',
            'apellido_materno'=>'Salazar',
            'rfc'=>'CASE0101015J8',
            'curp' =>'CASE010101MDFNLL08',
            'numero_trabajador' => '12345672',
            'fecha_nacimiento'=>'1901-02-01'
        ]);
        
        DB::table('participante_curso')->insert([
            'id'=>201,
            'curso_id'=>201,
            'profesor_id'=>203,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
            'p1_1'=>'100',
            'p1_2'=>'100',
            'p1_3'=>'100',
            'p1_4'=>'100',
            'p1_5'=>'100',
            'p2_1'=>'95',
            'p2_2'=>'95',
            'p2_3'=>'100',
            'p2_4'=>'100',
            'p3_1'=>'100',
            'p3_2'=>'100',
            'p3_3'=>'100',
            'p3_4'=>'100',
            'p7'=>1,
            'p8'=>'["2"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'El uso del celular',
            'sug'=>'Gracias',
            'p4_1'=>'95',
            'p4_2'=>'100',
            'p4_3'=>'100',
            'p4_4'=>'100',
            'p4_5'=>'100',
            'p4_6'=>'100',
            'p4_7'=>'100',
            'p4_8'=>'100',
            'p4_9'=>'100',
            'p4_10'=>'100',
            'p4_11'=>'100',
            'p5_1'=>'95',
            'p5_2'=>'100',
            'p5_3'=>'100',
            'p5_4'=>'100',
            'p5_5'=>'100',
            'p5_6'=>'100',
            'p5_7'=>'100',
            'p5_8'=>'100',
            'p5_9'=>'100',
            'p5_10'=>'100',
            'p5_11'=>'100',
            'otros'=>'Otros',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>201,
            'participante_curso_id'=>201
        ]);

        DB::table('profesors')->insert([
            'id'=>204,
            'nombres'=>'Juan Carlos',
            'apellido_paterno'=>'Cedeño',
            'apellido_materno'=>'Vazquez',
            'rfc'=>'CEVJ010101651',
            'curp' =>'CEVJ010101HDFDZN01',
            'numero_trabajador' => '12345673',
            'fecha_nacimiento'=>'1901-02-01'
        ]);
        
        DB::table('participante_curso')->insert([
            'id'=>202,
            'curso_id'=>201,
            'profesor_id'=>204,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
            'p1_1'=>'100',
            'p1_2'=>'100',
            'p1_3'=>'100',
            'p1_4'=>'100',
            'p1_5'=>'100',
            'p2_1'=>'100',
            'p2_2'=>'100',
            'p2_3'=>'100',
            'p2_4'=>'100',
            'p3_1'=>'100',
            'p3_2'=>'100',
            'p3_3'=>'100',
            'p3_4'=>'100',
            'p7'=>1,
            'p8'=>'["2"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'Conocer nuevas aplicaciones que facilitarán mis actividades docentes',
            'sug'=>'Que se sigan impartiendo este tipo de cursos pero con más horas',
            'p4_1'=>'100',
            'p4_2'=>'100',
            'p4_3'=>'100',
            'p4_4'=>'100',
            'p4_5'=>'100',
            'p4_6'=>'100',
            'p4_7'=>'100',
            'p4_8'=>'100',
            'p4_9'=>'100',
            'p4_10'=>'100',
            'p4_11'=>'100',
            'otros'=>'Otros',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>201,
            'participante_curso_id'=>202
        ]);
        DB::table('profesors')->insert([
            'id'=>205,
            'nombres'=>'Salvador',
            'apellido_paterno'=>'Centeno',
            'apellido_materno'=>'Estrada',
            'rfc'=>'CEES010101ER7',
            'curp' =>'CEES010101HDFNSL03',
            'numero_trabajador' => '12345674',
            'fecha_nacimiento'=>'1901-02-01'
        ]);
        
        DB::table('participante_curso')->insert([
            'id'=>203,
            'curso_id'=>201,
            'profesor_id'=>205,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
            'p1_1'=>'100',
            'p1_2'=>'100',
            'p1_3'=>'100',
            'p1_4'=>'100',
            'p1_5'=>'100',
            'p2_1'=>'80',
            'p2_2'=>'100',
            'p2_3'=>'100',
            'p2_4'=>'100',
            'p3_1'=>'100',
            'p3_2'=>'100',
            'p3_3'=>'100',
            'p3_4'=>'100',
            'p7'=>1,
            'p8'=>'["2"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'Todas las aplicaciones nuevas que conocí',
            'sug'=>'Reducir el curso a unas cuantas aplicaciones para tener un mejor manejo dde éstas',
            'p4_1'=>'100',
            'p4_2'=>'100',
            'p4_3'=>'100',
            'p4_4'=>'100',
            'p4_5'=>'100',
            'p4_6'=>'100',
            'p4_7'=>'100',
            'p4_8'=>'100',
            'p4_9'=>'100',
            'p4_10'=>'100',
            'p4_11'=>'100',
            'p5_1'=>'100',
            'p5_2'=>'100',
            'p5_3'=>'100',
            'p5_4'=>'100',
            'p5_5'=>'100',
            'p5_6'=>'100',
            'p5_7'=>'100',
            'p5_8'=>'100',
            'p5_9'=>'100',
            'p5_10'=>'100',
            'p5_11'=>'100',
            'otros'=>'Otros',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>201,
            'participante_curso_id'=>203
        ]);
        DB::table('profesors')->insert([
            'id'=>206,
            'nombres'=>'Abraham',
            'apellido_paterno'=>'Cortes',
            'apellido_materno'=>'Ochoa',
            'rfc'=>'COOA010101114',
            'curp' =>'COOA010101HDFRCB08',
            'numero_trabajador' => '12345675',
            'fecha_nacimiento'=>'1901-02-01'
        ]);
        
        DB::table('participante_curso')->insert([
            'id'=>204,
            'curso_id'=>201,
            'profesor_id'=>206,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
            'p1_1'=>'100',
            'p1_2'=>'100',
            'p1_3'=>'100',
            'p1_4'=>'100',
            'p1_5'=>'100',
            'p2_1'=>'100',
            'p2_2'=>'100',
            'p2_3'=>'100',
            'p2_4'=>'100',
            'p3_1'=>'100',
            'p3_2'=>'100',
            'p3_3'=>'100',
            'p3_4'=>'100',
            'p7'=>1,
            'p8'=>'["2"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'Uso de Plataformas para Evaluaciones',
            'sug'=>'Todo excelente',
            'p4_1'=>'100',
            'p4_2'=>'100',
            'p4_3'=>'100',
            'p4_4'=>'100',
            'p4_5'=>'100',
            'p4_6'=>'100',
            'p4_7'=>'100',
            'p4_8'=>'100',
            'p4_9'=>'100',
            'p4_10'=>'100',
            'p4_11'=>'100',
            'p5_1'=>'100',
            'p5_2'=>'100',
            'p5_3'=>'100',
            'p5_4'=>'100',
            'p5_5'=>'100',
            'p5_6'=>'100',
            'p5_7'=>'100',
            'p5_8'=>'100',
            'p5_9'=>'100',
            'p5_10'=>'100',
            'p5_11'=>'100',
            'otros'=>'Otros',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>201,
            'participante_curso_id'=>204
        ]);

        DB::table('profesors')->insert([
            'id'=>207,
            'nombres'=>'Jesus Javier',
            'apellido_paterno'=>'Cortes',
            'apellido_materno'=>'Rosas',
            'rfc'=>'CORJ0101013P1',
            'curp' =>'CORJ010101HDFRSS03',
            'numero_trabajador' => '12345676',
            'fecha_nacimiento'=>'1901-02-01'
        ]);
        
        DB::table('participante_curso')->insert([
            'id'=>205,
            'curso_id'=>201,
            'profesor_id'=>207,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);

        DB::table('profesors')->insert([
            'id'=>208,
            'nombres'=>'Carlos',
            'apellido_paterno'=>'Chavez',
            'apellido_materno'=>'Mercado',
            'rfc'=>'CAMC010101A58',
            'curp' =>'CAMC010101HDFHRR01',
            'numero_trabajador' => '12345677',
            'fecha_nacimiento'=>'1901-02-01'
        ]);
        
        DB::table('participante_curso')->insert([
            'id'=>206,
            'curso_id'=>201,
            'profesor_id'=>208,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
            'p1_1'=>'95',
            'p1_2'=>'95',
            'p1_3'=>'100',
            'p1_4'=>'100',
            'p1_5'=>'100',
            'p2_1'=>'80',
            'p2_2'=>'95',
            'p2_3'=>'95',
            'p2_4'=>'100',
            'p3_1'=>'95',
            'p3_2'=>'100',
            'p3_3'=>'100',
            'p3_4'=>'95',
            'p7'=>1,
            'p8'=>'["1"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'El interés y responsabilidad de las instructoras',
            'sug'=>'Más horas de curso',
            'p4_1'=>'100',
            'p4_2'=>'100',
            'p4_3'=>'100',
            'p4_4'=>'100',
            'p4_5'=>'100',
            'p4_6'=>'100',
            'p4_7'=>'100',
            'p4_8'=>'100',
            'p4_9'=>'100',
            'p4_10'=>'100',
            'p4_11'=>'100',
            'p5_1'=>'100',
            'p5_2'=>'100',
            'p5_3'=>'100',
            'p5_4'=>'100',
            'p5_5'=>'100',
            'p5_6'=>'100',
            'p5_7'=>'100',
            'p5_8'=>'100',
            'p5_9'=>'100',
            'p5_10'=>'100',
            'p5_11'=>'100',
            'otros'=>'Otros',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>201,
            'participante_curso_id'=>206
        ]);
        
        DB::table('profesors')->insert([
            'id'=>209,
            'nombres'=>'Victor Manuel',
            'apellido_paterno'=>'Duran',
            'apellido_materno'=>'Campos',
            'rfc'=>'DUCV010101613',
            'curp' =>'DUCV010101HDFRMC03',
            'numero_trabajador' => '12345678',
            'fecha_nacimiento'=>'1901-02-01'
        ]);
        
        DB::table('participante_curso')->insert([
            'id'=>207,
            'curso_id'=>201,
            'profesor_id'=>209,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
            'p1_1'=>'100',
            'p1_2'=>'100',
            'p1_3'=>'100',
            'p1_4'=>'100',
            'p1_5'=>'100',
            'p2_1'=>'100',
            'p2_2'=>'100',
            'p2_3'=>'100',
            'p2_4'=>'100',
            'p3_1'=>'100',
            'p3_2'=>'100',
            'p3_3'=>'100',
            'p3_4'=>'100',
            'p7'=>1,
            'p8'=>'["1"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'Todo',
            'sug'=>'Todos los temas los aplicaré en mis clases',
            'p4_1'=>'100',
            'p4_2'=>'100',
            'p4_3'=>'100',
            'p4_4'=>'100',
            'p4_5'=>'100',
            'p4_6'=>'100',
            'p4_7'=>'100',
            'p4_8'=>'100',
            'p4_9'=>'100',
            'p4_10'=>'100',
            'p4_11'=>'100',
            'otros'=>'Otros',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>201,
            'participante_curso_id'=>207
        ]);

        DB::table('profesors')->insert([
            'id'=>210,
            'nombres'=>'Miguel',
            'apellido_paterno'=>'Figueroa',
            'apellido_materno'=>'Bustos',
            'rfc'=>'FIBM0101011I5',
            'curp' =>'FIBM010101HDFGSG04',
            'numero_trabajador' => '12345679',
            'fecha_nacimiento'=>'1901-01-01'
        ]);
        
        DB::table('participante_curso')->insert([
            'id'=>208,
            'curso_id'=>201,
            'profesor_id'=>210,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
            'p1_1'=>'100',
            'p1_2'=>'100',
            'p1_3'=>'100',
            'p1_4'=>'100',
            'p1_5'=>'100',
            'p2_1'=>'100',
            'p2_2'=>'100',
            'p2_3'=>'100',
            'p2_4'=>'100',
            'p3_1'=>'100',
            'p3_2'=>'100',
            'p3_3'=>'100',
            'p3_4'=>'100',
            'p7'=>1,
            'p8'=>'["2"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'Las apps revisadas',
            'sug'=>'Ninguna',
            'p4_1'=>'100',
            'p4_2'=>'100',
            'p4_3'=>'100',
            'p4_4'=>'100',
            'p4_5'=>'100',
            'p4_6'=>'100',
            'p4_7'=>'100',
            'p4_8'=>'100',
            'p4_9'=>'100',
            'p4_10'=>'100',
            'p4_11'=>'100',
            'p5_1'=>'100',
            'p5_2'=>'100',
            'p5_3'=>'100',
            'p5_4'=>'100',
            'p5_5'=>'100',
            'p5_6'=>'100',
            'p5_7'=>'100',
            'p5_8'=>'100',
            'p5_9'=>'100',
            'p5_10'=>'100',
            'p5_11'=>'100',
            'otros'=>'Otros',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>201,
            'participante_curso_id'=>208
        ]);

        DB::table('profesors')->insert([
            'id'=>211,
            'nombres'=>'Emilia Isabel',
            'apellido_paterno'=>'Garcia',
            'apellido_materno'=>'Martinez',
            'rfc'=>'GAME010101NX4',
            'curp' =>'GAME010101MDFRRM02',
            'numero_trabajador' => '12345680',
            'fecha_nacimiento'=>'1901-01-01'
        ]);
        
        DB::table('participante_curso')->insert([
            'id'=>209,
            'curso_id'=>201,
            'profesor_id'=>211,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
            'p1_1'=>'100',
            'p1_2'=>'100',
            'p1_3'=>'100',
            'p1_4'=>'100',
            'p1_5'=>'100',
            'p2_1'=>'80',
            'p2_2'=>'100',
            'p2_3'=>'100',
            'p2_4'=>'100',
            'p3_1'=>'100',
            'p3_2'=>'100',
            'p3_3'=>'100',
            'p3_4'=>'100',
            'p7'=>1,
            'p8'=>'["2"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'Todo',
            'sug'=>'Es muy útil para la docencia, pero es muy extenso, sugiero repartirlo en varios cursos',
            'p4_1'=>'100',
            'p4_2'=>'100',
            'p4_3'=>'100',
            'p4_4'=>'100',
            'p4_5'=>'100',
            'p4_6'=>'100',
            'p4_7'=>'100',
            'p4_8'=>'100',
            'p4_9'=>'100',
            'p4_10'=>'100',
            'p4_11'=>'100',
            'p5_1'=>'100',
            'p5_2'=>'100',
            'p5_3'=>'100',
            'p5_4'=>'100',
            'p5_5'=>'100',
            'p5_6'=>'100',
            'p5_7'=>'100',
            'p5_8'=>'100',
            'p5_9'=>'100',
            'p5_10'=>'100',
            'p5_11'=>'100',
            'otros'=>'Otros',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>201,
            'participante_curso_id'=>209
        ]);

        DB::table('profesors')->insert([
            'id'=>212,
            'nombres'=>'Javier',
            'apellido_paterno'=>'Gomez',
            'apellido_materno'=>'Rodriguez',
            'rfc'=>'GORJ010101PJ4',
            'curp' =>'GORJ010101MDFMDV06',
            'numero_trabajador' => '12345681',
            'fecha_nacimiento'=>'1901-01-01'
        ]);
        
        DB::table('participante_curso')->insert([
            'id'=>210,
            'curso_id'=>201,
            'profesor_id'=>212,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);


        DB::table('profesors')->insert([
            'id'=>213,
            'nombres'=>'Miguel Eduardo',
            'apellido_paterno'=>'Gonzalez',
            'apellido_materno'=>'Cardenas',
            'rfc'=>'GOCM010101BD9',
            'curp' =>'GOCM010101HDFNRG00',
            'numero_trabajador' => '12345682',
            'fecha_nacimiento'=>'1901-01-01'
        ]);
        
        DB::table('participante_curso')->insert([
            'id'=>211,
            'curso_id'=>201,
            'profesor_id'=>213,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);
        DB::table('profesors')->insert([
            'id'=>214,
            'nombres'=>'Efren Marcelino',
            'apellido_paterno'=>'Gutierrez ',
            'apellido_materno'=>'Lopez',
            'rfc'=>'GULE010101DX2',
            'curp' =>'GULE010101HDFTPF00',
            'numero_trabajador' => '12345683',
            'fecha_nacimiento'=>'1901-01-01'
        ]);
        
        DB::table('participante_curso')->insert([
            'id'=>212,
            'curso_id'=>201,
            'profesor_id'=>214,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);

        DB::table('profesors')->insert([
            'id'=>215,
            'nombres'=>'Eduardo',
            'apellido_paterno'=>'Meza ',
            'apellido_materno'=>'Medina',
            'rfc'=>'MEME010101SN3',
            'curp' =>'MEME010101HDFZDD03',
            'numero_trabajador' => '12345684',
            'fecha_nacimiento'=>'1901-01-01'
        ]);
        
        DB::table('participante_curso')->insert([
            'id'=>213,
            'curso_id'=>201,
            'profesor_id'=>215,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);

        DB::table('profesors')->insert([
            'id'=>216,
            'nombres'=>'Cecilia Hideko',
            'apellido_paterno'=>'Nakagaki ',
            'apellido_materno'=>'Aoki',
            'rfc'=>'NAAC010101AD3',
            'curp' =>'NAAC010101MDFKKC00',
            'numero_trabajador' => '12345685',
            'fecha_nacimiento'=>'1901-01-01'
        ]);
        
        DB::table('participante_curso')->insert([
            'id'=>214,
            'curso_id'=>201,
            'profesor_id'=>216,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);

        DB::table('profesors')->insert([
            'id'=>217,
            'nombres'=>'Francisco Miguel',
            'apellido_paterno'=>'Perez',
            'apellido_materno'=>'Ramirez',
            'rfc'=>'RAPF0101011F8',
            'curp' =>'RAPF010101MDFMRR09',
            'numero_trabajador' => '12345686',
            'fecha_nacimiento'=>'1901-01-01'
        ]);
        
        DB::table('participante_curso')->insert([
            'id'=>215,
            'curso_id'=>201,
            'profesor_id'=>217,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
            'p1_1'=>'100',
            'p1_2'=>'100',
            'p1_3'=>'100',
            'p1_4'=>'100',
            'p1_5'=>'100',
            'p2_1'=>'100',
            'p2_2'=>'100',
            'p2_3'=>'100',
            'p2_4'=>'100',
            'p3_1'=>'100',
            'p3_2'=>'100',
            'p3_3'=>'100',
            'p3_4'=>'100',
            'p7'=>1,
            'p8'=>'["2"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'Los recursos y aplicaciones presentadas por las instructoras',
            'sug'=>'iTodo muy bien',
            'p4_1'=>'100',
            'p4_2'=>'100',
            'p4_3'=>'100',
            'p4_4'=>'100',
            'p4_5'=>'100',
            'p4_6'=>'100',
            'p4_7'=>'100',
            'p4_8'=>'100',
            'p4_9'=>'100',
            'p4_10'=>'100',
            'p4_11'=>'100',
            'p5_1'=>'100',
            'p5_2'=>'100',
            'p5_3'=>'100',
            'p5_4'=>'100',
            'p5_5'=>'100',
            'p5_6'=>'100',
            'p5_7'=>'100',
            'p5_8'=>'100',
            'p5_9'=>'100',
            'p5_10'=>'100',
            'p5_11'=>'100',
            'otros'=>'Otros',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>201,
            'participante_curso_id'=>215
        ]);

        DB::table('profesors')->insert([
            'id'=>218,
            'nombres'=>'Raymundo Hugo',
            'apellido_paterno'=>'Rangel',
            'apellido_materno'=>'Gutierrez',
            'rfc'=>'RAGR010101B42',
            'curp' =>'	RAGR010101HDFNTY00',
            'numero_trabajador' => '12345687',
            'fecha_nacimiento'=>'1901-01-01'
        ]);
        
        DB::table('participante_curso')->insert([
            'id'=>216,
            'curso_id'=>201,
            'profesor_id'=>218,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);

        DB::table('profesors')->insert([
            'id'=>219,
            'nombres'=>'Aurelio',
            'apellido_paterno'=>'Sanchez',
            'apellido_materno'=>'Vaca',
            'rfc'=>'RASV010101GJ5',
            'curp' =>'RASV010101HDFNNC09',
            'numero_trabajador' => '12345686',
            'fecha_nacimiento'=>'1901-01-01'
        ]);
        
        DB::table('participante_curso')->insert([
            'id'=>217,
            'curso_id'=>201,
            'profesor_id'=>219,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
            'p1_1'=>'100',
            'p1_2'=>'100',
            'p1_3'=>'100',
            'p1_4'=>'100',
            'p1_5'=>'100',
            'p2_1'=>'95',
            'p2_2'=>'100',
            'p2_3'=>'100',
            'p2_4'=>'100',
            'p3_1'=>'100',
            'p3_2'=>'100',
            'p3_3'=>'100',
            'p3_4'=>'100',
            'p7'=>1,
            'p8'=>'["2"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'Las nuevas aplicaciones',
            'sug'=>'',
            'p4_1'=>'100',
            'p4_2'=>'100',
            'p4_3'=>'100',
            'p4_4'=>'100',
            'p4_5'=>'100',
            'p4_6'=>'100',
            'p4_7'=>'100',
            'p4_8'=>'100',
            'p4_9'=>'100',
            'p4_10'=>'100',
            'p4_11'=>'100',
            'p5_1'=>'100',
            'p5_2'=>'100',
            'p5_3'=>'100',
            'p5_4'=>'100',
            'p5_5'=>'100',
            'p5_6'=>'100',
            'p5_7'=>'100',
            'p5_8'=>'100',
            'p5_9'=>'100',
            'p5_10'=>'100',
            'p5_11'=>'100',
            'otros'=>'Otros',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>201,
            'participante_curso_id'=>217
        ]);


        DB::table('profesors')->insert([
            'id'=>220,
            'nombres'=>'Edgar',
            'apellido_paterno'=>'Tello',
            'apellido_materno'=>'Paleta',
            'rfc'=>'TEPE0101017L2',
            'curp' =>'TEPE010101HDFLLD08',
            'numero_trabajador' => '12345687',
            'fecha_nacimiento'=>'1901-01-01'
        ]);
        
        DB::table('participante_curso')->insert([
            'id'=>218,
            'curso_id'=>201,
            'profesor_id'=>220,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
            'p1_1'=>'100',
            'p1_2'=>'100',
            'p1_3'=>'100',
            'p1_4'=>'100',
            'p1_5'=>'100',
            'p2_1'=>'100',
            'p2_2'=>'95',
            'p2_3'=>'95',
            'p2_4'=>'95',
            'p3_1'=>'100',
            'p3_2'=>'100',
            'p3_3'=>'100',
            'p3_4'=>'100',
            'p7'=>1,
            'p8'=>'["2"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'Los temas expuestos',
            'sug'=>'Más cursos en el mismo horario que este',
            'p4_1'=>'100',
            'p4_2'=>'100',
            'p4_3'=>'100',
            'p4_4'=>'100',
            'p4_5'=>'100',
            'p4_6'=>'100',
            'p4_7'=>'100',
            'p4_8'=>'100',
            'p4_9'=>'100',
            'p4_10'=>'100',
            'p4_11'=>'100',
            'p5_1'=>'100',
            'p5_2'=>'100',
            'p5_3'=>'100',
            'p5_4'=>'100',
            'p5_5'=>'100',
            'p5_6'=>'100',
            'p5_7'=>'100',
            'p5_8'=>'100',
            'p5_9'=>'100',
            'p5_10'=>'100',
            'p5_11'=>'100',
            'otros'=>'Otros',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>201,
            'participante_curso_id'=>218
        ]);

        
        DB::table('profesors')->insert([
            'id'=>221,
            'nombres'=>'Hector Manuel',
            'apellido_paterno'=>'Torres',
            'apellido_materno'=>'Dominguez',
            'rfc'=>'TODH010101PZ6',
            'curp' =>'TODH010101HDFRMC08',
            'numero_trabajador' => '12345688',
            'fecha_nacimiento'=>'1901-01-01'
        ]);
        
        DB::table('participante_curso')->insert([
            'id'=>219,
            'curso_id'=>201,
            'profesor_id'=>221,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);

        DB::table('profesors')->insert([
            'id'=>222,
            'nombres'=>'Maria',
            'apellido_paterno'=>'Hernandez',
            'apellido_materno'=>'Torres',
            'rfc'=>'HETM0101018V0',
            'curp' =>'HETM010101MDFRRR00',
            'numero_trabajador' => '12345689',
            'fecha_nacimiento'=>'1901-01-01'
        ]);
        
        DB::table('participante_curso')->insert([
            'id'=>220,
            'curso_id'=>201,
            'profesor_id'=>222,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
            'p1_1'=>'100',
            'p1_2'=>'100',
            'p1_3'=>'100',
            'p1_4'=>'100',
            'p1_5'=>'100',
            'p2_1'=>'95',
            'p2_2'=>'100',
            'p2_3'=>'100',
            'p2_4'=>'100',
            'p3_1'=>'100',
            'p3_2'=>'100',
            'p3_3'=>'95',
            'p3_4'=>'80',
            'p7'=>1,
            'p8'=>'["2"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'Toddas las herramientas mostradas',
            'sug'=>'Mejora la conexión de internet',
            'p4_1'=>'100',
            'p4_2'=>'100',
            'p4_3'=>'95',
            'p4_4'=>'100',
            'p4_5'=>'100',
            'p4_6'=>'100',
            'p4_7'=>'100',
            'p4_8'=>'100',
            'p4_9'=>'100',
            'p4_10'=>'100',
            'p4_11'=>'100',
            'p5_1'=>'100',
            'p5_2'=>'100',
            'p5_3'=>'100',
            'p5_4'=>'100',
            'p5_5'=>'100',
            'p5_6'=>'100',
            'p5_7'=>'100',
            'p5_8'=>'100',
            'p5_9'=>'100',
            'p5_10'=>'100',
            'p5_11'=>'100',
            'otros'=>'Otros',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>201,
            'participante_curso_id'=>220
        ]);

        DB::table('profesors')->insert([
            'id'=>223,
            'nombres'=>'Victor Hugo',
            'apellido_paterno'=>'Tovar',
            'apellido_materno'=>'Perez',
            'rfc'=>'TOPV010101N11',
            'curp' =>'TOPV010101HDFVRC01',
            'numero_trabajador' => '12345690',
            'fecha_nacimiento'=>'1901-01-01'
        ]);
        
        DB::table('participante_curso')->insert([
            'id'=>221,
            'curso_id'=>201,
            'profesor_id'=>223,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
            'p1_1'=>'95',
            'p1_2'=>'95',
            'p1_3'=>'95',
            'p1_4'=>'95',
            'p1_5'=>'95',
            'p2_1'=>'95',
            'p2_2'=>'95',
            'p2_3'=>'95',
            'p2_4'=>'95',
            'p3_1'=>'95',
            'p3_2'=>'95',
            'p3_3'=>'95',
            'p3_4'=>'95',
            'p7'=>1,
            'p8'=>'["2"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'Conocer nuevas herramientas',
            'sug'=>'No dejar proyecto',
            'p4_1'=>'95',
            'p4_2'=>'95',
            'p4_3'=>'95',
            'p4_4'=>'95',
            'p4_5'=>'95',
            'p4_6'=>'95',
            'p4_7'=>'95',
            'p4_8'=>'95',
            'p4_9'=>'95',
            'p4_10'=>'95',
            'p4_11'=>'95',
            'p5_1'=>'95',
            'p5_2'=>'95',
            'p5_3'=>'95',
            'p5_4'=>'95',
            'p5_5'=>'95',
            'p5_6'=>'95',
            'p5_7'=>'95',
            'p5_8'=>'95',
            'p5_9'=>'95',
            'p5_10'=>'95',
            'p5_11'=>'95',
            'otros'=>'Otros',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>201,
            'participante_curso_id'=>221
        ]);

        DB::table('profesors')->insert([
            'id'=>224,
            'nombres'=>'Martin Carlos',
            'apellido_paterno'=>'Vidal',
            'apellido_materno'=>'Garcia',
            'rfc'=>'VIGM010101255',
            'curp' =>'VIGM010101HDFDRR01',
            'numero_trabajador' => '12345691',
            'fecha_nacimiento'=>'1901-01-01'
        ]);
        
        DB::table('participante_curso')->insert([
            'id'=>222,
            'curso_id'=>201,
            'profesor_id'=>224,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);

        DB::table('profesors')->insert([
            'id'=>225,
            'nombres'=>'Arturo',
            'apellido_paterno'=>'Zapata',
            'apellido_materno'=>'Y Rosales',
            'rfc'=>'ZARA010101QU9',
            'curp' =>'ZARA010101HDFPSR04',
            'numero_trabajador' => '12345692',
            'fecha_nacimiento'=>'1901-01-01'
        ]);
        
        DB::table('participante_curso')->insert([
            'id'=>223,
            'curso_id'=>201,
            'profesor_id'=>225,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
            'p1_1'=>'100',
            'p1_2'=>'100',
            'p1_3'=>'100',
            'p1_4'=>'100',
            'p1_5'=>'100',
            'p2_1'=>'100',
            'p2_2'=>'95',
            'p2_3'=>'100',
            'p2_4'=>'95',
            'p3_1'=>'100',
            'p3_2'=>'100',
            'p3_3'=>'100',
            'p3_4'=>'100',
            'p7'=>1,
            'p8'=>'["2"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'El nuevo conocimiento para mi sobre las redes sociales y sus aplicaciones, todo fue nuevo',
            'sug'=>'Al final dar un resumen de las aplicaciones mencionadas',
            'p4_1'=>'100',
            'p4_2'=>'100',
            'p4_3'=>'100',
            'p4_4'=>'100',
            'p4_5'=>'100',
            'p4_6'=>'100',
            'p4_7'=>'100',
            'p4_8'=>'100',
            'p4_9'=>'100',
            'p4_10'=>'100',
            'p4_11'=>'100',
            'p5_1'=>'100',
            'p5_2'=>'100',
            'p5_3'=>'100',
            'p5_4'=>'100',
            'p5_5'=>'100',
            'p5_6'=>'100',
            'p5_7'=>'100',
            'p5_8'=>'100',
            'p5_9'=>'100',
            'p5_10'=>'100',
            'p5_11'=>'100',
            'otros'=>'Otros',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>201,
            'participante_curso_id'=>223
        ]);
        DB::table('profesors')->insert([
            'id'=>226,
            'nombres'=>'Hugo',
            'apellido_paterno'=>'Zuñiga',
            'apellido_materno'=>'Barragan',
            'rfc'=>'ZUBH010101HMA',
            'curp' =>'ZUBH010101HDF&RG04',
            'numero_trabajador' => '12345693',
            'fecha_nacimiento'=>'1901-01-01'
        ]);
        
        DB::table('participante_curso')->insert([
            'id'=>224,
            'curso_id'=>201,
            'profesor_id'=>226,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);
        
        //Segundo curso

        DB::table('coordinacions')->insert([
            'id' => 202,
            'nombre_coordinacion' => 'Área de Desarrollo Humano',
            'abreviatura' => 'DH',
            'coordinador' => 'Jacob Hernandez',
            'grado' => 'M.E.M.',
            'usuario' => 'jacob',
            'password' => Hash::make('1234'),
            'comentarios' => '-'
        ]);
        DB::table('catalogo_cursos')->insert([
            'id'=> 202,
            'nombre_curso'=>'Comunicación asertiva en el aula. Parte 2',
            'duracion_curso' => '20',
            'coordinacion_id' => 202,
            'tipo' => 'C',
            'institucion' => 'DGAPA',
            'fecha_disenio'=>'2012-12-12',
            'clave_curso'=>'CAADGAPA'
        ]);
        
        DB::table('cursos')->insert([
            'id'=>202,
            'semestre_anio'=>2020,
            'semestre_pi'=>'1',
            'semestre_si'=>'s',
            'fecha_inicio' => '2018-05-20',
            'fecha_fin' => '2018-05-30',
            'hora_inicio' => '14:00',
            'hora_fin' => '16:00',
            'dias_semana' => 'Lunes,Miércoles',
            'numero_sesiones' => 10,
            'texto_diploma' => 'Texto diploma',
            'costo' => 2000,
            'cupo_maximo' => 20,
            'cupo_minimo' => 5,
            'catalogo_id' => 202,
            'salon_id' => 1
        ]);
        //Instructor
        DB::table('profesors')->insert([
            'id'=>227,
            'nombres'=>'Juan',
            'apellido_paterno'=>'Varela',
            'apellido_materno'=>'Juarez',
            'rfc'=>'VAJJ010101GHA',
            'curp' =>'VAJJ010101HDFRRN04',
            'numero_trabajador' => '12345694',
            'fecha_nacimiento'=>'1901-01-01'
        ]);
        //Participantes
        DB::table('profesors')->insert([
            'id'=>228,
            'nombres'=>'Ivonne',
            'apellido_paterno'=>'Alvarado',
            'apellido_materno'=>'Beatriz',
            'rfc'=>'AABI0101018NA',
            'curp' =>'ABI010101HDFLTV03',
            'numero_trabajador' => '12345695',
            'fecha_nacimiento'=>'1901-01-01'
        ]);
        
        DB::table('participante_curso')->insert([
            'id'=>224,
            'curso_id'=>202,
            'profesor_id'=>228,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
            'p1_1'=>'95',
            'p1_2'=>'95',
            'p1_3'=>'95',
            'p1_4'=>'100',
            'p1_5'=>'100',
            'p2_1'=>'95',
            'p2_2'=>'95',
            'p2_3'=>'95',
            'p2_4'=>'95',
            'p3_1'=>'95',
            'p3_2'=>'95',
            'p3_3'=>'95',
            'p3_4'=>'95',
            'p7'=>1,
            'p8'=>'["2","4","Correo electrónico"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'Las historias y experiencias compartidas',
            'sug'=>'Seguir con este tipo dde cursos para desempeñarnos mejor cada día',
            'p4_1'=>'100',
            'p4_2'=>'95',
            'p4_3'=>'100',
            'p4_4'=>'95',
            'p4_5'=>'100',
            'p4_6'=>'95',
            'p4_7'=>'100',
            'p4_8'=>'100',
            'p4_9'=>'100',
            'p4_10'=>'100',
            'p4_11'=>'100',
            'otros'=>'Otros',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>202,
            'participante_curso_id'=>224
        ]);

        DB::table('profesors')->insert([
            'id'=>229,
            'nombres'=>'Nadia de la Luz',
            'apellido_paterno'=>'Briseño',
            'apellido_materno'=>'Aguirre',
            'rfc'=>'BIAN010101LL3',
            'curp' =>'BIAN010101HDFRGD08',
            'numero_trabajador' => '12345696',
            'fecha_nacimiento'=>'1901-01-01'
        ]);
        
        DB::table('participante_curso')->insert([
            'id'=>225,
            'curso_id'=>202,
            'profesor_id'=>229,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
            'p1_1'=>'100',
            'p1_2'=>'100',
            'p1_3'=>'100',
            'p1_4'=>'100',
            'p1_5'=>'100',
            'p2_1'=>'60',
            'p2_2'=>'95',
            'p2_3'=>'95',
            'p2_4'=>'95',
            'p3_1'=>'100',
            'p3_2'=>'100',
            'p3_3'=>'100',
            'p3_4'=>'100',
            'p7'=>1,
            'p8'=>'["4","Un curso previo"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'Los ejemplos proporcionados por la experiencia del instructor',
            'sug'=>'Me gustó bastante, fue muy didáctico y será de mucha utilidad para mis clases',
            'p4_1'=>'100',
            'p4_2'=>'100',
            'p4_3'=>'100',
            'p4_4'=>'100',
            'p4_5'=>'100',
            'p4_6'=>'100',
            'p4_7'=>'100',
            'p4_8'=>'100',
            'p4_9'=>'100',
            'p4_10'=>'100',
            'p4_11'=>'100',
            'otros'=>'Otros',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>202,
            'participante_curso_id'=>225
        ]);

        DB::table('profesors')->insert([
            'id'=>230,
            'nombres'=>'Abraham',
            'apellido_paterno'=>'Cortes',
            'apellido_materno'=>'Ochoa',
            'rfc'=>'COOA010101114',
            'curp' =>'COOA010101HDFRCB08',
            'numero_trabajador' => '12345697',
            'fecha_nacimiento'=>'1901-01-01'
        ]);
        
        DB::table('participante_curso')->insert([
            'id'=>226,
            'curso_id'=>202,
            'profesor_id'=>230,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
            'p1_1'=>'100',
            'p1_2'=>'100',
            'p1_3'=>'100',
            'p1_4'=>'100',
            'p1_5'=>'80',
            'p2_1'=>'80',
            'p2_2'=>'80',
            'p2_3'=>'80',
            'p2_4'=>'100',
            'p3_1'=>'100',
            'p3_2'=>'100',
            'p3_3'=>'100',
            'p3_4'=>'100',
            'p7'=>1,
            'p8'=>'["2"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'Los ejercicios realizados',
            'sug'=>'-',
            'p4_1'=>'100',
            'p4_2'=>'100',
            'p4_3'=>'100',
            'p4_4'=>'100',
            'p4_5'=>'100',
            'p4_6'=>'100',
            'p4_7'=>'100',
            'p4_8'=>'100',
            'p4_9'=>'100',
            'p4_10'=>'100',
            'p4_11'=>'100',
            'otros'=>'Otros',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>202,
            'participante_curso_id'=>226
        ]);

        DB::table('profesors')->insert([
            'id'=>231,
            'nombres'=>'Sylvia',
            'apellido_paterno'=>'Avila',
            'apellido_materno'=>'Hernandez',
            'rfc'=>'AIHS010101TM4',
            'curp' =>'AIHS010101MDFVRY00',
            'numero_trabajador' => '12345698',
            'fecha_nacimiento'=>'1901-01-01'
        ]);
        
        DB::table('participante_curso')->insert([
            'id'=>227,
            'curso_id'=>202,
            'profesor_id'=>231,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
            'p1_1'=>'100',
            'p1_2'=>'100',
            'p1_3'=>'100',
            'p1_4'=>'100',
            'p1_5'=>'100',
            'p2_1'=>'95',
            'p2_2'=>'95',
            'p2_3'=>'95',
            'p2_4'=>'95',
            'p3_1'=>'100',
            'p3_2'=>'100',
            'p3_3'=>'100',
            'p3_4'=>'100',
            'p7'=>1,
            'p8'=>'["2"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'La perspectiva psicológica sobre personalidad, temperamento y carácter como lingüística',
            'sug'=>'Tratar más el tema de la comunicación asertiva en la parte verbal',
            'p4_1'=>'100',
            'p4_2'=>'100',
            'p4_3'=>'100',
            'p4_4'=>'100',
            'p4_5'=>'100',
            'p4_6'=>'100',
            'p4_7'=>'100',
            'p4_8'=>'100',
            'p4_9'=>'100',
            'p4_10'=>'100',
            'p4_11'=>'100',
            'otros'=>'Otros',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>202,
            'participante_curso_id'=>227
        ]);

        DB::table('profesors')->insert([
            'id'=>232,
            'nombres'=>'Guadalupe',
            'apellido_paterno'=>'Contreras',
            'apellido_materno'=>'Ordaz',
            'rfc'=>'COOG010101BG5',
            'curp' =>'COOG010101MDFNRD03',
            'numero_trabajador' => '12345699',
            'fecha_nacimiento'=>'1901-01-01'
        ]);
        
        DB::table('participante_curso')->insert([
            'id'=>228,
            'curso_id'=>202,
            'profesor_id'=>232,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
            'p1_1'=>'100',
            'p1_2'=>'100',
            'p1_3'=>'100',
            'p1_4'=>'100',
            'p1_5'=>'100',
            'p2_1'=>'95',
            'p2_2'=>'80',
            'p2_3'=>'80',
            'p2_4'=>'100',
            'p3_1'=>'100',
            'p3_2'=>'100',
            'p3_3'=>'100',
            'p3_4'=>'100',
            'p7'=>1,
            'p8'=>'["2"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'Que me permitió reflexionar a tiempo en mi grupo, debido a los intenso del trabajo, había ddejado de lado el grupo, pero afortunaddamente pude retormarlo',
            'sug'=>'-',
            'p4_1'=>'100',
            'p4_2'=>'100',
            'p4_3'=>'100',
            'p4_4'=>'100',
            'p4_5'=>'100',
            'p4_6'=>'100',
            'p4_7'=>'100',
            'p4_8'=>'100',
            'p4_9'=>'100',
            'p4_10'=>'100',
            'p4_11'=>'100',
            'otros'=>'Otros',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>202,
            'participante_curso_id'=>228
        ]);

        DB::table('profesors')->insert([
            'id'=>233,
            'nombres'=>'Claudia',
            'apellido_paterno'=>'Espinosa',
            'apellido_materno'=>'Villagran',
            'rfc'=>'EIVC0101012G9',
            'curp' =>'EIVC010101MDFSLL08',
            'numero_trabajador' => '12345600',
            'fecha_nacimiento'=>'1901-01-01'
        ]);
        
        DB::table('participante_curso')->insert([
            'id'=>229,
            'curso_id'=>202,
            'profesor_id'=>233,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
            'p1_1'=>'100',
            'p1_2'=>'95',
            'p1_3'=>'100',
            'p1_4'=>'95',
            'p1_5'=>'100',
            'p2_1'=>'95',
            'p2_2'=>'95',
            'p2_3'=>'95',
            'p2_4'=>'95',
            'p3_1'=>'100',
            'p3_2'=>'100',
            'p3_3'=>'100',
            'p3_4'=>'100',
            'p7'=>1,
            'p8'=>'["2"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'Las dinámicas grupales',
            'sug'=>'-',
            'p4_1'=>'100',
            'p4_2'=>'100',
            'p4_3'=>'100',
            'p4_4'=>'100',
            'p4_5'=>'100',
            'p4_6'=>'100',
            'p4_7'=>'100',
            'p4_8'=>'100',
            'p4_9'=>'100',
            'p4_10'=>'100',
            'p4_11'=>'100',
            'otros'=>'Otros',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>202,
            'participante_curso_id'=>229
        ]);
        
        DB::table('profesors')->insert([
            'id'=>234,
            'nombres'=>'Nidia',
            'apellido_paterno'=>'Garcia',
            'apellido_materno'=>'Arroyo',
            'rfc'=>'GAAN010101JH4',
            'curp' =>'GAAN010101MDFRRD06',
            'numero_trabajador' => '12345601',
            'fecha_nacimiento'=>'1901-01-01'
        ]);
        
        DB::table('participante_curso')->insert([
            'id'=>230,
            'curso_id'=>202,
            'profesor_id'=>234,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
            'p1_1'=>'100',
            'p1_2'=>'100',
            'p1_3'=>'100',
            'p1_4'=>'100',
            'p1_5'=>'95',
            'p2_1'=>'95',
            'p2_2'=>'95',
            'p2_3'=>'100',
            'p2_4'=>'95',
            'p3_1'=>'100',
            'p3_2'=>'100',
            'p3_3'=>'100',
            'p3_4'=>'95',
            'p7'=>1,
            'p8'=>'["2","4","Correo electrónico"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'El enfoque al tema de la asertividad y de la comunicación asertiva',
            'sug'=>'Seguir siempre atentos y amables',
            'p4_1'=>'100',
            'p4_2'=>'95',
            'p4_3'=>'100',
            'p4_4'=>'100',
            'p4_5'=>'100',
            'p4_6'=>'100',
            'p4_7'=>'100',
            'p4_8'=>'100',
            'p4_9'=>'100',
            'p4_10'=>'100',
            'p4_11'=>'100',
            'otros'=>'Otros',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>202,
            'participante_curso_id'=>230
        ]);

        DB::table('profesors')->insert([
            'id'=>235,
            'nombres'=>'María de la Paz Esperanza',
            'apellido_paterno'=>'Gonzalez',
            'apellido_materno'=>'Anaya',
            'rfc'=>'GOAD010101FX1',
            'curp' =>'GOAD010101MDFNN04',
            'numero_trabajador' => '12345602',
            'fecha_nacimiento'=>'1901-01-01'
        ]);
        
        DB::table('participante_curso')->insert([
            'id'=>231,
            'curso_id'=>202,
            'profesor_id'=>235,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);

        DB::table('profesors')->insert([
            'id'=>236,
            'nombres'=>'María de los Angeles',
            'apellido_paterno'=>'Mena',
            'apellido_materno'=>'Trigueros',
            'rfc'=>'METD010101GV1',
            'curp' =>'METD010101MDFNR03',
            'numero_trabajador' => '12345603',
            'fecha_nacimiento'=>'1901-01-01'
        ]);
        
        DB::table('participante_curso')->insert([
            'id'=>232,
            'curso_id'=>202,
            'profesor_id'=>236,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);

        DB::table('profesors')->insert([
            'id'=>237,
            'nombres'=>'Daniel',
            'apellido_paterno'=>'Peña',
            'apellido_materno'=>'Maciel',
            'rfc'=>'PEMD0101011A5',
            'curp' =>'PEMD010101HDF&CN00',
            'numero_trabajador' => '12345604',
            'fecha_nacimiento'=>'1901-01-01'
        ]);
        
        DB::table('participante_curso')->insert([
            'id'=>233,
            'curso_id'=>202,
            'profesor_id'=>237,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
            'p1_1'=>'100',
            'p1_2'=>'100',
            'p1_3'=>'100',
            'p1_4'=>'100',
            'p1_5'=>'95',
            'p2_1'=>'95',
            'p2_2'=>'95',
            'p2_3'=>'100',
            'p2_4'=>'95',
            'p3_1'=>'95',
            'p3_2'=>'100',
            'p3_3'=>'100',
            'p3_4'=>'100',
            'p7'=>1,
            'p8'=>'["4","Correo electrónico"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'La interacción del grupo y el instructor',
            'sug'=>'-',
            'p4_1'=>'100',
            'p4_2'=>'100',
            'p4_3'=>'100',
            'p4_4'=>'100',
            'p4_5'=>'100',
            'p4_6'=>'100',
            'p4_7'=>'100',
            'p4_8'=>'100',
            'p4_9'=>'100',
            'p4_10'=>'100',
            'p4_11'=>'100',
            'otros'=>'Otros',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>202,
            'participante_curso_id'=>233
        ]);

        DB::table('profesors')->insert([
            'id'=>238,
            'nombres'=>'Jesus Alejandro',
            'apellido_paterno'=>'Plata',
            'apellido_materno'=>'Martinez',
            'rfc'=>'PAMJ010101JA5',
            'curp' =>'PAMJ010101HDFLRS01',
            'numero_trabajador' => '12345605',
            'fecha_nacimiento'=>'1901-01-01'
        ]);
        
        DB::table('participante_curso')->insert([
            'id'=>234,
            'curso_id'=>202,
            'profesor_id'=>238,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
            'p1_1'=>'100',
            'p1_2'=>'80',
            'p1_3'=>'100',
            'p1_4'=>'80',
            'p1_5'=>'100',
            'p2_1'=>'95',
            'p2_2'=>'95',
            'p2_3'=>'95',
            'p2_4'=>'95',
            'p3_1'=>'100',
            'p3_2'=>'100',
            'p3_3'=>'95',
            'p3_4'=>'100',
            'p7'=>1,
            'p8'=>'["2"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'Los temas abordados y las actividades dinámicas para mantener el interés',
            'sug'=>'Gracias por el tiempo que nos brindó y compartir sus conocimientos de estos temas con nosotros',
            'p4_1'=>'100',
            'p4_2'=>'100',
            'p4_3'=>'100',
            'p4_4'=>'100',
            'p4_5'=>'100',
            'p4_6'=>'100',
            'p4_7'=>'100',
            'p4_8'=>'100',
            'p4_9'=>'100',
            'p4_10'=>'100',
            'p4_11'=>'100',
            'otros'=>'Otros',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>202,
            'participante_curso_id'=>234
        ]);

        DB::table('profesors')->insert([
            'id'=>239,
            'nombres'=>'Eric Adrian',
            'apellido_paterno'=>'Tejada',
            'apellido_materno'=>'Malpica',
            'rfc'=>'TEME0101015S3',
            'curp' =>'TEME010101HDFJLR07',
            'numero_trabajador' => '12345606',
            'fecha_nacimiento'=>'1901-01-01'
        ]);
        
        DB::table('participante_curso')->insert([
            'id'=>235,
            'curso_id'=>202,
            'profesor_id'=>239,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
            'p1_1'=>'100',
            'p1_2'=>'100',
            'p1_3'=>'100',
            'p1_4'=>'100',
            'p1_5'=>'100',
            'p2_1'=>'100',
            'p2_2'=>'100',
            'p2_3'=>'100',
            'p2_4'=>'100',
            'p3_1'=>'95',
            'p3_2'=>'100',
            'p3_3'=>'100',
            'p3_4'=>'100',
            'p7'=>1,
            'p8'=>'["2"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'Las técnicas planteadas para el manejo de las conductas disruptivas',
            'sug'=>'-',
            'p4_1'=>'100',
            'p4_2'=>'100',
            'p4_3'=>'100',
            'p4_4'=>'100',
            'p4_5'=>'100',
            'p4_6'=>'100',
            'p4_7'=>'100',
            'p4_8'=>'100',
            'p4_9'=>'100',
            'p4_10'=>'100',
            'p4_11'=>'100',
            'otros'=>'Otros',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>202,
            'participante_curso_id'=>234
        ]);

        //Tercer curso

        DB::table('catalogo_cursos')->insert([
            'id'=> 203,
            'nombre_curso'=>'La gimnasia cerebral para el fortalecimiento ddel aprendizaje',
            'duracion_curso' => '20',
            'coordinacion_id' => 201,
            'tipo' => 'C',
            'institucion' => 'DGAPA',
            'fecha_disenio'=>'2012-12-12',
            'clave_curso'=>'CAADGAPA'
        ]);
        
        DB::table('cursos')->insert([
            'id'=>203,
            'semestre_anio'=>2020,
            'semestre_pi'=>'1',
            'semestre_si'=>'s',
            'fecha_inicio' => '2018-05-20',
            'fecha_fin' => '2018-05-30',
            'hora_inicio' => '14:00',
            'hora_fin' => '16:00',
            'dias_semana' => 'Lunes,Miércoles',
            'numero_sesiones' => 10,
            'texto_diploma' => 'Texto diploma',
            'costo' => 2000,
            'cupo_maximo' => 20,
            'cupo_minimo' => 5,
            'catalogo_id' => 202,
            'salon_id' => 1
        ]);
        //Instructor
        DB::table('profesors')->insert([
            'id'=>227,
            'nombres'=>'Maria Estela',
            'apellido_paterno'=>'Romero',
            'apellido_materno'=>'Garcia',
            'rfc'=>'ROGE010101BG4',
            'curp' =>'ROGE010101MDFMRS06',
            'numero_trabajador' => '12345607',
            'fecha_nacimiento'=>'1901-01-01'
        ]);
        //Participantes

        DB::table('profesors')->insert([
            'id'=>240,
            'nombres'=>'Beatriz',
            'apellido_paterno'=>'Barrera',
            'apellido_materno'=>'Hernandez',
            'rfc'=>'BAHB010101RT4',
            'curp' =>'BAHB010101MDFRRT03',
            'numero_trabajador' => '12345608',
            'fecha_nacimiento'=>'1901-01-01'
        ]);
        
        DB::table('participante_curso')->insert([
            'id'=>236,
            'curso_id'=>203,
            'profesor_id'=>240,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);

        DB::table('profesors')->insert([
            'id'=>241,
            'nombres'=>'Beatriz',
            'apellido_paterno'=>'Cervantes',
            'apellido_materno'=>'Garcia',
            'rfc'=>'CEGB0101017J6',
            'curp' =>'CEGB010101MDFRRT03',
            'numero_trabajador' => '12345609',
            'fecha_nacimiento'=>'1901-01-01'
        ]);
        
        DB::table('participante_curso')->insert([
            'id'=>237,
            'curso_id'=>203,
            'profesor_id'=>241,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
            'p1_1'=>'100',
            'p1_2'=>'100',
            'p1_3'=>'100',
            'p1_4'=>'100',
            'p1_5'=>'100',
            'p2_1'=>'95',
            'p2_2'=>'100',
            'p2_3'=>'100',
            'p2_4'=>'100',
            'p3_1'=>'95',
            'p3_2'=>'100',
            'p3_3'=>'100',
            'p3_4'=>'60',
            'p7'=>1,
            'p8'=>'["4","Correo"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'Todas las dinámicas y convivencia del grupo',
            'sug'=>'-',
            'p4_1'=>'100',
            'p4_2'=>'100',
            'p4_3'=>'100',
            'p4_4'=>'100',
            'p4_5'=>'100',
            'p4_6'=>'100',
            'p4_7'=>'100',
            'p4_8'=>'100',
            'p4_9'=>'100',
            'p4_10'=>'100',
            'p4_11'=>'100',
            'otros'=>'Otros',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>203,
            'participante_curso_id'=>237
        ]);

        DB::table('profesors')->insert([
            'id'=>242,
            'nombres'=>'Adriana Eugenia',
            'apellido_paterno'=>'Chavira',
            'apellido_materno'=>'Diaz',
            'rfc'=>'CADA010101991',
            'curp' =>'CADA010101MDFHZD08',
            'numero_trabajador' => '12345610',
            'fecha_nacimiento'=>'1901-01-01'
        ]);
        
        DB::table('participante_curso')->insert([
            'id'=>238,
            'curso_id'=>203,
            'profesor_id'=>242,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
            'p1_1'=>'95',
            'p1_2'=>'95',
            'p1_3'=>'95',
            'p1_4'=>'95',
            'p1_5'=>'95',
            'p2_1'=>'60',
            'p2_2'=>'80',
            'p2_3'=>'80',
            'p2_4'=>'95',
            'p3_1'=>'95',
            'p3_2'=>'95',
            'p3_3'=>'95',
            'p3_4'=>'95',
            'p7'=>1,
            'p8'=>'["4","Correo"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'Todas las dinámicas y convivencia del grupo',
            'sug'=>'-',
            'p4_1'=>'95',
            'p4_2'=>'95',
            'p4_3'=>'95',
            'p4_4'=>'95',
            'p4_5'=>'95',
            'p4_6'=>'95',
            'p4_7'=>'95',
            'p4_8'=>'95',
            'p4_9'=>'95',
            'p4_10'=>'95',
            'p4_11'=>'95',
            'otros'=>'Otros',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>203,
            'participante_curso_id'=>238
        ]);
        DB::table('profesors')->insert([
            'id'=>243,
            'nombres'=>'Silvia Guadalupe',
            'apellido_paterno'=>'Del Valle',
            'apellido_materno'=>'Hernandez',
            'rfc'=>'VAHS010101178',
            'curp' =>'VAHS010101MDFLRL07',
            'numero_trabajador' => '12345611',
            'fecha_nacimiento'=>'1901-01-01'
        ]);
        
        DB::table('participante_curso')->insert([
            'id'=>239,
            'curso_id'=>203,
            'profesor_id'=>243,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
            'p1_1'=>'100',
            'p1_2'=>'100',
            'p1_3'=>'100',
            'p1_4'=>'100',
            'p1_5'=>'100',
            'p2_1'=>'100',
            'p2_2'=>'100',
            'p2_3'=>'100',
            'p2_4'=>'100',
            'p3_1'=>'100',
            'p3_2'=>'100',
            'p3_3'=>'100',
            'p3_4'=>'100',
            'p7'=>1,
            'p8'=>'[""]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'Ejercicios para el cuerpo y cerebro',
            'sug'=>'Seguir programando',
            'p4_1'=>'100',
            'p4_2'=>'100',
            'p4_3'=>'100',
            'p4_4'=>'100',
            'p4_5'=>'100',
            'p4_6'=>'100',
            'p4_7'=>'100',
            'p4_8'=>'100',
            'p4_9'=>'100',
            'p4_10'=>'100',
            'p4_11'=>'100',
            'otros'=>'Otros',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>203,
            'participante_curso_id'=>239
        ]);

        DB::table('profesors')->insert([
            'id'=>244,
            'nombres'=>'Patricia Eugenia',
            'apellido_paterno'=>'Garcia',
            'apellido_materno'=>'Naranjo',
            'rfc'=>'GANP010101J67',
            'curp' =>'GANP010101MDFRRT02',
            'numero_trabajador' => '12345612',
            'fecha_nacimiento'=>'1901-01-01'
        ]);
        
        DB::table('participante_curso')->insert([
            'id'=>240,
            'curso_id'=>203,
            'profesor_id'=>244,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
            'p1_1'=>'100',
            'p1_2'=>'100',
            'p1_3'=>'100',
            'p1_4'=>'95',
            'p1_5'=>'100',
            'p2_1'=>'100',
            'p2_2'=>'95',
            'p2_3'=>'100',
            'p2_4'=>'100',
            'p3_1'=>'100',
            'p3_2'=>'100',
            'p3_3'=>'100',
            'p3_4'=>'100',
            'p7'=>1,
            'p8'=>'["2"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'La participación grupal amena y divertida propiciada por las dinámicas indicadas por la instructora',
            'sug'=>'-',
            'p4_1'=>'100',
            'p4_2'=>'100',
            'p4_3'=>'100',
            'p4_4'=>'100',
            'p4_5'=>'100',
            'p4_6'=>'100',
            'p4_7'=>'100',
            'p4_8'=>'100',
            'p4_9'=>'100',
            'p4_10'=>'100',
            'p4_11'=>'100',
            'otros'=>'Otros',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>203,
            'participante_curso_id'=>240
        ]);

        DB::table('profesors')->insert([
            'id'=>245,
            'nombres'=>'Mario',
            'apellido_paterno'=>'Guevara',
            'apellido_materno'=>'Salazar',
            'rfc'=>'GUSM010101HW0',
            'curp' =>'GUSM010101HDFVLR03',
            'numero_trabajador' => '12345613',
            'fecha_nacimiento'=>'1901-01-01'
        ]);
        
        DB::table('participante_curso')->insert([
            'id'=>241,
            'curso_id'=>203,
            'profesor_id'=>245,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
            'p1_1'=>'100',
            'p1_2'=>'100',
            'p1_3'=>'100',
            'p1_4'=>'100',
            'p1_5'=>'100',
            'p2_1'=>'95',
            'p2_2'=>'100',
            'p2_3'=>'95',
            'p2_4'=>'100',
            'p3_1'=>'100',
            'p3_2'=>'100',
            'p3_3'=>'100',
            'p3_4'=>'100',
            'p7'=>1,
            'p8'=>'[""]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'-',
            'sug'=>'-',
            'p4_1'=>'100',
            'p4_2'=>'100',
            'p4_3'=>'100',
            'p4_4'=>'100',
            'p4_5'=>'100',
            'p4_6'=>'100',
            'p4_7'=>'100',
            'p4_8'=>'100',
            'p4_9'=>'100',
            'p4_10'=>'100',
            'p4_11'=>'100',
            'otros'=>'Otros',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>203,
            'participante_curso_id'=>241
        ]);

        DB::table('profesors')->insert([
            'id'=>246,
            'nombres'=>'Mariel Elena',
            'apellido_paterno'=>'Hernandez',
            'apellido_materno'=>'Lopez',
            'rfc'=>'HELM010101RG5',
            'curp' =>'HELM010101MDFRPR02',
            'numero_trabajador' => '12345614',
            'fecha_nacimiento'=>'1901-01-01'
        ]);
        
        DB::table('participante_curso')->insert([
            'id'=>242,
            'curso_id'=>203,
            'profesor_id'=>246,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
            'p1_1'=>'100',
            'p1_2'=>'100',
            'p1_3'=>'100',
            'p1_4'=>'100',
            'p1_5'=>'100',
            'p2_1'=>'95',
            'p2_2'=>'95',
            'p2_3'=>'95',
            'p2_4'=>'100',
            'p3_1'=>'100',
            'p3_2'=>'100',
            'p3_3'=>'100',
            'p3_4'=>'100',
            'p7'=>1,
            'p8'=>'["2"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'-',
            'sug'=>'-',
            'p4_1'=>'100',
            'p4_2'=>'100',
            'p4_3'=>'100',
            'p4_4'=>'100',
            'p4_5'=>'100',
            'p4_6'=>'100',
            'p4_7'=>'100',
            'p4_8'=>'100',
            'p4_9'=>'100',
            'p4_10'=>'100',
            'p4_11'=>'100',
            'otros'=>'Otros',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>203,
            'participante_curso_id'=>242
        ]);

        DB::table('profesors')->insert([
            'id'=>247,
            'nombres'=>'Aurora',
            'apellido_paterno'=>'Isicahua',
            'apellido_materno'=>'Becerril',
            'rfc'=>'IIBA010101EW6',
            'curp' =>'IIBA010101MDFSCR07',
            'numero_trabajador' => '12345615',
            'fecha_nacimiento'=>'1901-01-01'
        ]);
        
        DB::table('participante_curso')->insert([
            'id'=>243,
            'curso_id'=>203,
            'profesor_id'=>247,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
            'p1_1'=>'100',
            'p1_2'=>'100',
            'p1_3'=>'100',
            'p1_4'=>'100',
            'p1_5'=>'100',
            'p2_1'=>'95',
            'p2_2'=>'95',
            'p2_3'=>'95',
            'p2_4'=>'95',
            'p3_1'=>'100',
            'p3_2'=>'100',
            'p3_3'=>'100',
            'p3_4'=>'100',
            'p7'=>1,
            'p8'=>'["4","Gaceta"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'Aprendi nuevas formas de trabajar con mis alumnos',
            'sug'=>'-',
            'p4_1'=>'100',
            'p4_2'=>'100',
            'p4_3'=>'100',
            'p4_4'=>'100',
            'p4_5'=>'100',
            'p4_6'=>'100',
            'p4_7'=>'100',
            'p4_8'=>'100',
            'p4_9'=>'100',
            'p4_10'=>'100',
            'p4_11'=>'100',
            'otros'=>'Otros',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>203,
            'participante_curso_id'=>243
        ]);

        DB::table('profesors')->insert([
            'id'=>248,
            'nombres'=>'Julieta',
            'apellido_paterno'=>'Mares',
            'apellido_materno'=>'Lopez',
            'rfc'=>'MALJ010101487',
            'curp' =>'MALJ010101MDFRPL06',
            'numero_trabajador' => '12345616',
            'fecha_nacimiento'=>'1901-01-01'
        ]);
        
        DB::table('participante_curso')->insert([
            'id'=>244,
            'curso_id'=>203,
            'profesor_id'=>248,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
            'p1_1'=>'100',
            'p1_2'=>'100',
            'p1_3'=>'95',
            'p1_4'=>'100',
            'p1_5'=>'100',
            'p2_1'=>'100',
            'p2_2'=>'95',
            'p2_3'=>'95',
            'p2_4'=>'100',
            'p3_1'=>'100',
            'p3_2'=>'100',
            'p3_3'=>'95',
            'p3_4'=>'100',
            'p7'=>1,
            'p8'=>'["4","Gaceta"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'Los ejercicios de gimnasia cerebral que puedo realizar día a día y compartir con mis estudiantes y seres queridos, además de la participación con mis demás',
            'sug'=>'Se podría dar este curso al inicio del semestre, cuando aún no hay muchas actividades o tensiones del final de semestre y así se puedde aplicar el que está [...]',
            'p4_1'=>'100',
            'p4_2'=>'100',
            'p4_3'=>'100',
            'p4_4'=>'100',
            'p4_5'=>'100',
            'p4_6'=>'100',
            'p4_7'=>'100',
            'p4_8'=>'100',
            'p4_9'=>'100',
            'p4_10'=>'100',
            'p4_11'=>'100',
            'otros'=>'Otros',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>203,
            'participante_curso_id'=>244
        ]);
        
        DB::table('profesors')->insert([
            'id'=>249,
            'nombres'=>'Cynthia',
            'apellido_paterno'=>'Miranda',
            'apellido_materno'=>'Trejo',
            'rfc'=>'MITC010101ID6',
            'curp' =>'MITC010101MDFRRY01',
            'numero_trabajador' => '12345617',
            'fecha_nacimiento'=>'1901-01-01'
        ]);
        
        DB::table('participante_curso')->insert([
            'id'=>245,
            'curso_id'=>203,
            'profesor_id'=>249,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
            'p1_1'=>'100',
            'p1_2'=>'100',
            'p1_3'=>'100',
            'p1_4'=>'100',
            'p1_5'=>'100',
            'p2_1'=>'80',
            'p2_2'=>'95',
            'p2_3'=>'100',
            'p2_4'=>'100',
            'p3_1'=>'100',
            'p3_2'=>'100',
            'p3_3'=>'100',
            'p3_4'=>'100',
            'p7'=>1,
            'p8'=>'["2"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'Conceptos nuevos adquiridos para fortalecer mis prácticas docentes',
            'sug'=>'-',
            'p4_1'=>'100',
            'p4_2'=>'100',
            'p4_3'=>'100',
            'p4_4'=>'100',
            'p4_5'=>'100',
            'p4_6'=>'100',
            'p4_7'=>'100',
            'p4_8'=>'100',
            'p4_9'=>'100',
            'p4_10'=>'100',
            'p4_11'=>'100',
            'otros'=>'Otros',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>203,
            'participante_curso_id'=>245
        ]);

        DB::table('profesors')->insert([
            'id'=>250,
            'nombres'=>'Diana Paulina',
            'apellido_paterno'=>'Perez',
            'apellido_materno'=>'Palacios',
            'rfc'=>'PEPD010101CK7',
            'curp' =>'PEPD010101MDFRLN00',
            'numero_trabajador' => '12345618',
            'fecha_nacimiento'=>'1901-01-01'
        ]);
        
        DB::table('participante_curso')->insert([
            'id'=>246,
            'curso_id'=>203,
            'profesor_id'=>250,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);

        DB::table('profesors')->insert([
            'id'=>251,
            'nombres'=>'Adolfo',
            'apellido_paterno'=>'Reyes',
            'apellido_materno'=>'Pizano',
            'rfc'=>'REPA010101NL9',
            'curp' =>'REPA010101HDFYZD04',
            'numero_trabajador' => '12345619',
            'fecha_nacimiento'=>'1901-01-01'
        ]);
        
        DB::table('participante_curso')->insert([
            'id'=>247,
            'curso_id'=>203,
            'profesor_id'=>251,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
            'p1_1'=>'100',
            'p1_2'=>'100',
            'p1_3'=>'100',
            'p1_4'=>'100',
            'p1_5'=>'100',
            'p2_1'=>'95',
            'p2_2'=>'100',
            'p2_3'=>'100',
            'p2_4'=>'100',
            'p3_1'=>'100',
            'p3_2'=>'100',
            'p3_3'=>'95',
            'p3_4'=>'100',
            'p7'=>1,
            'p8'=>'["4","Profesores"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'Los ejercicios realizados en el curso',
            'sug'=>'Un poco más de ventilación',
            'p4_1'=>'100',
            'p4_2'=>'100',
            'p4_3'=>'100',
            'p4_4'=>'100',
            'p4_5'=>'100',
            'p4_6'=>'100',
            'p4_7'=>'100',
            'p4_8'=>'100',
            'p4_9'=>'100',
            'p4_10'=>'100',
            'p4_11'=>'100',
            'otros'=>'Otros',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>203,
            'participante_curso_id'=>247
        ]);

        DB::table('profesors')->insert([
            'id'=>252,
            'nombres'=>'Fernando',
            'apellido_paterno'=>'Rosique',
            'apellido_materno'=>'Naranjo',
            'rfc'=>'RONF010101EF9',
            'curp' =>'RONF010101HDFSRR07',
            'numero_trabajador' => '12345620',
            'fecha_nacimiento'=>'1901-01-01'
        ]);
        
        DB::table('participante_curso')->insert([
            'id'=>248,
            'curso_id'=>203,
            'profesor_id'=>252,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
            'p1_1'=>'100',
            'p1_2'=>'100',
            'p1_3'=>'100',
            'p1_4'=>'100',
            'p1_5'=>'100',
            'p2_1'=>'95',
            'p2_2'=>'100',
            'p2_3'=>'100',
            'p2_4'=>'95',
            'p3_1'=>'100',
            'p3_2'=>'100',
            'p3_3'=>'100',
            'p3_4'=>'100',
            'p7'=>1,
            'p8'=>'[""]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'Las dinámicas',
            'sug'=>'Otro curso con más ejercicios',
            'p4_1'=>'95',
            'p4_2'=>'100',
            'p4_3'=>'95',
            'p4_4'=>'100',
            'p4_5'=>'100',
            'p4_6'=>'95',
            'p4_7'=>'95',
            'p4_8'=>'100',
            'p4_9'=>'100',
            'p4_10'=>'100',
            'p4_11'=>'100',
            'otros'=>'Otros',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>203,
            'participante_curso_id'=>248
        ]);

        DB::table('profesors')->insert([
            'id'=>253,
            'nombres'=>'Ana Lilia',
            'apellido_paterno'=>'Salas',
            'apellido_materno'=>'Alvarado',
            'rfc'=>'SAAA010101GP0',
            'curp' =>'SAAA010101MDFLLN00',
            'numero_trabajador' => '12345621',
            'fecha_nacimiento'=>'1901-01-01'
        ]);
        
        DB::table('participante_curso')->insert([
            'id'=>249,
            'curso_id'=>203,
            'profesor_id'=>253,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
            'p1_1'=>'100',
            'p1_2'=>'100',
            'p1_3'=>'100',
            'p1_4'=>'100',
            'p1_5'=>'100',
            'p2_1'=>'60',
            'p2_2'=>'95',
            'p2_3'=>'100',
            'p2_4'=>'100',
            'p3_1'=>'100',
            'p3_2'=>'100',
            'p3_3'=>'100',
            'p3_4'=>'100',
            'p7'=>1,
            'p8'=>'["1","2"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'Las dinámicas',
            'sug'=>'-',
            'p4_1'=>'100',
            'p4_2'=>'100',
            'p4_3'=>'100',
            'p4_4'=>'100',
            'p4_5'=>'100',
            'p4_6'=>'100',
            'p4_7'=>'100',
            'p4_8'=>'100',
            'p4_9'=>'100',
            'p4_10'=>'100',
            'p4_11'=>'100',
            'otros'=>'Otros',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>203,
            'participante_curso_id'=>249
        ]);

        DB::table('profesors')->insert([
            'id'=>254,
            'nombres'=>'Jose Alejandro',
            'apellido_paterno'=>'Sanchez',
            'apellido_materno'=>'Perez',
            'rfc'=>'SAPA010101RF8',
            'curp' =>'SAPA010101HDFNRL02',
            'numero_trabajador' => '12345622',
            'fecha_nacimiento'=>'1901-01-01'
        ]);
        
        DB::table('participante_curso')->insert([
            'id'=>250,
            'curso_id'=>203,
            'profesor_id'=>254,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
            'p1_1'=>'95',
            'p1_2'=>'95',
            'p1_3'=>'100',
            'p1_4'=>'100',
            'p1_5'=>'95',
            'p2_1'=>'80',
            'p2_2'=>'100',
            'p2_3'=>'100',
            'p2_4'=>'100',
            'p3_1'=>'100',
            'p3_2'=>'100',
            'p3_3'=>'100',
            'p3_4'=>'100',
            'p7'=>1,
            'p8'=>'[""]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'La práctica de los ejercicios para conexión cerebral y las técnicas dde aprendizaje',
            'sug'=>'El curso fue precipitado en la última sesión dejando una sensación de temas inconclusos o vistos con poco detalle',
            'p4_1'=>'95',
            'p4_2'=>'95',
            'p4_3'=>'100',
            'p4_4'=>'100',
            'p4_5'=>'100',
            'p4_6'=>'100',
            'p4_7'=>'95',
            'p4_8'=>'100',
            'p4_9'=>'100',
            'p4_10'=>'100',
            'p4_11'=>'100',
            'otros'=>'Otros',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>203,
            'participante_curso_id'=>250
        ]);

        DB::table('profesors')->insert([
            'id'=>255,
            'nombres'=>'Hector Manuel',
            'apellido_paterno'=>'Torres',
            'apellido_materno'=>'Dominguez',
            'rfc'=>'TODH010101PZ6',
            'curp' =>'TODH010101HDFRMC08',
            'numero_trabajador' => '12345623',
            'fecha_nacimiento'=>'1901-01-01'
        ]);
        
        DB::table('participante_curso')->insert([
            'id'=>251,
            'curso_id'=>203,
            'profesor_id'=>255,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);

        DB::table('profesors')->insert([
            'id'=>256,
            'nombres'=>'Bertha Lucila',
            'apellido_paterno'=>'Velazquez',
            'apellido_materno'=>'Camacho',
            'rfc'=>'VECB0101015E4',
            'curp' =>'VECB010101MDFLMR02',
            'numero_trabajador' => '12345623',
            'fecha_nacimiento'=>'1901-01-01'
        ]);
        
        DB::table('participante_curso')->insert([
            'id'=>252,
            'curso_id'=>203,
            'profesor_id'=>256,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
            'p1_1'=>'100',
            'p1_2'=>'100',
            'p1_3'=>'100',
            'p1_4'=>'100',
            'p1_5'=>'100',
            'p2_1'=>'100',
            'p2_2'=>'100',
            'p2_3'=>'100',
            'p2_4'=>'100',
            'p3_1'=>'100',
            'p3_2'=>'100',
            'p3_3'=>'100',
            'p3_4'=>'100',
            'p7'=>1,
            'p8'=>'["2"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'Los ejercicios, trabajo en equipo, conocer personas nuevas y contenidos del curso',
            'sug'=>'Más cursos de este tipo',
            'p4_1'=>'100',
            'p4_2'=>'100',
            'p4_3'=>'100',
            'p4_4'=>'100',
            'p4_5'=>'100',
            'p4_6'=>'100',
            'p4_7'=>'100',
            'p4_8'=>'100',
            'p4_9'=>'100',
            'p4_10'=>'100',
            'p4_11'=>'100',
            'otros'=>'Otros',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>203,
            'participante_curso_id'=>252
        ]);
        //Cuarto curso
        DB::table('catalogo_cursos')->insert([
            'id'=> 204,
            'nombre_curso'=>'La violencia no visible en el aula: Detección e intervención',
            'duracion_curso' => '20',
            'coordinacion_id' => 202,
            'tipo' => 'C',
            'institucion' => 'DGAPA',
            'fecha_disenio'=>'2012-12-12',
            'clave_curso'=>'CAADGAPA'
        ]);
        
        DB::table('cursos')->insert([
            'id'=>204,
            'semestre_anio'=>2020,
            'semestre_pi'=>'1',
            'semestre_si'=>'s',
            'fecha_inicio' => '2018-05-20',
            'fecha_fin' => '2018-05-30',
            'hora_inicio' => '14:00',
            'hora_fin' => '16:00',
            'dias_semana' => 'Lunes,Miércoles',
            'numero_sesiones' => 10,
            'texto_diploma' => 'Texto diploma',
            'costo' => 2000,
            'cupo_maximo' => 20,
            'cupo_minimo' => 5,
            'catalogo_id' => 204,
            'salon_id' => 1
        ]);
        //Instructor
        DB::table('profesors')->insert([
            'id'=>257,
            'nombres'=>'Alba Esperanza',
            'apellido_paterno'=>'Garcia',
            'apellido_materno'=>'Lopez',
            'rfc'=>'GALA0101019A2',
            'curp' =>'GALA010101MDFRPL09',
            'numero_trabajador' => '12345624',
            'fecha_nacimiento'=>'1901-01-01'
        ]);
        //Participantes
        DB::table('profesors')->insert([
            'id'=>258,
            'nombres'=>'Gustavo',
            'apellido_paterno'=>'Balmori',
            'apellido_materno'=>'Negrete',
            'rfc'=>'BANG010101SRA',
            'curp' =>'BANG010101HDFLGS08',
            'numero_trabajador' => '12345625',
            'fecha_nacimiento'=>'1901-01-01'
        ]);
        
        DB::table('participante_curso')->insert([
            'id'=>253,
            'curso_id'=>204,
            'profesor_id'=>258,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
            'p1_1'=>'100',
            'p1_2'=>'100',
            'p1_3'=>'100',
            'p1_4'=>'100',
            'p1_5'=>'100',
            'p2_1'=>'100',
            'p2_2'=>'100',
            'p2_3'=>'100',
            'p2_4'=>'100',
            'p3_1'=>'100',
            'p3_2'=>'100',
            'p3_3'=>'95',
            'p3_4'=>'100',
            'p7'=>1,
            'p8'=>'["4","Centro de Docencia"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'Las diversas definiciones de violencia',
            'sug'=>'-',
            'p4_1'=>'100',
            'p4_2'=>'100',
            'p4_3'=>'100',
            'p4_4'=>'100',
            'p4_5'=>'100',
            'p4_6'=>'100',
            'p4_7'=>'100',
            'p4_8'=>'100',
            'p4_9'=>'100',
            'p4_10'=>'100',
            'p4_11'=>'100',
            'otros'=>'Otros',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>204,
            'participante_curso_id'=>253
        ]);
        DB::table('profesors')->insert([
            'id'=>259,
            'nombres'=>'Jose Javier',
            'apellido_paterno'=>'Cervantes',
            'apellido_materno'=>'Cabello',
            'rfc'=>'CECJ010101G70',
            'curp' =>'CECJ010101HDFRBV09',
            'numero_trabajador' => '12345626',
            'fecha_nacimiento'=>'1901-01-01'
        ]);
        
        DB::table('participante_curso')->insert([
            'id'=>254,
            'curso_id'=>204,
            'profesor_id'=>259,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
            'p1_1'=>'95',
            'p1_2'=>'95',
            'p1_3'=>'95',
            'p1_4'=>'95',
            'p1_5'=>'95',
            'p2_1'=>'95',
            'p2_2'=>'95',
            'p2_3'=>'95',
            'p2_4'=>'95',
            'p3_1'=>'95',
            'p3_2'=>'95',
            'p3_3'=>'95',
            'p3_4'=>'95',
            'p7'=>1,
            'p8'=>'["1"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'El material y los comentarios sobre el tema por parte de todos los asistentes',
            'sug'=>'Ninguna',
            'p4_1'=>'100',
            'p4_2'=>'100',
            'p4_3'=>'100',
            'p4_4'=>'95',
            'p4_5'=>'95',
            'p4_6'=>'95',
            'p4_7'=>'95',
            'p4_8'=>'100',
            'p4_9'=>'100',
            'p4_10'=>'100',
            'p4_11'=>'100',
            'otros'=>'Otros',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>204,
            'participante_curso_id'=>254
        ]);

        DB::table('profesors')->insert([
            'id'=>260,
            'nombres'=>'Ana Georgina',
            'apellido_paterno'=>'Garcia',
            'apellido_materno'=>'Y Colome',
            'rfc'=>'GACA010101S49',
            'curp' =>'GACA010101MDFRLN07',
            'numero_trabajador' => '12345627',
            'fecha_nacimiento'=>'1901-01-01'
        ]);
        
        DB::table('participante_curso')->insert([
            'id'=>255,
            'curso_id'=>204,
            'profesor_id'=>260,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
            'p1_1'=>'100',
            'p1_2'=>'100',
            'p1_3'=>'100',
            'p1_4'=>'100',
            'p1_5'=>'100',
            'p2_1'=>'100',
            'p2_2'=>'100',
            'p2_3'=>'100',
            'p2_4'=>'100',
            'p3_1'=>'100',
            'p3_2'=>'100',
            'p3_3'=>'100',
            'p3_4'=>'100',
            'p7'=>1,
            'p8'=>'[""]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'Todo',
            'sug'=>'-',
            'p4_1'=>'100',
            'p4_2'=>'100',
            'p4_3'=>'100',
            'p4_4'=>'100',
            'p4_5'=>'100',
            'p4_6'=>'100',
            'p4_7'=>'100',
            'p4_8'=>'100',
            'p4_9'=>'100',
            'p4_10'=>'100',
            'p4_11'=>'100',
            'otros'=>'Otros',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>204,
            'participante_curso_id'=>255
        ]);

        DB::table('profesors')->insert([
            'id'=>261,
            'nombres'=>'Rosa Maria',
            'apellido_paterno'=>'Juarez',
            'apellido_materno'=>'Cisneros',
            'rfc'=>'JUCR010101MU0',
            'curp' =>'JUCR010101MDFRSS06',
            'numero_trabajador' => '12345628',
            'fecha_nacimiento'=>'1901-01-01'
        ]);
        
        DB::table('participante_curso')->insert([
            'id'=>256,
            'curso_id'=>204,
            'profesor_id'=>261,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
            'p1_1'=>'100',
            'p1_2'=>'100',
            'p1_3'=>'100',
            'p1_4'=>'100',
            'p1_5'=>'100',
            'p2_1'=>'100',
            'p2_2'=>'95',
            'p2_3'=>'100',
            'p2_4'=>'100',
            'p3_1'=>'100',
            'p3_2'=>'100',
            'p3_3'=>'100',
            'p3_4'=>'100',
            'p7'=>1,
            'p8'=>'["2"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'El respeto que impero en los participantes y el manejo del grupo por parte de la instructora',
            'sug'=>'Estos cursos son muy provechosos porque siempre dejan experiencias positivas. Dejar horarios fijos en los cursos',
            'p4_1'=>'100',
            'p4_2'=>'100',
            'p4_3'=>'100',
            'p4_4'=>'100',
            'p4_5'=>'100',
            'p4_6'=>'100',
            'p4_7'=>'100',
            'p4_8'=>'100',
            'p4_9'=>'100',
            'p4_10'=>'100',
            'p4_11'=>'100',
            'otros'=>'Otros',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>204,
            'participante_curso_id'=>256
        ]);

        DB::table('profesors')->insert([
            'id'=>262,
            'nombres'=>'Victor Manuel',
            'apellido_paterno'=>'Lopez',
            'apellido_materno'=>'Aburto',
            'rfc'=>'LOAV010101L21',
            'curp' =>'LOAV010101HDFPBC07',
            'numero_trabajador' => '12345629',
            'fecha_nacimiento'=>'1901-01-01'
        ]);
        
        DB::table('participante_curso')->insert([
            'id'=>257,
            'curso_id'=>204,
            'profesor_id'=>262,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
            'p1_1'=>'95',
            'p1_2'=>'95',
            'p1_3'=>'80',
            'p1_4'=>'95',
            'p1_5'=>'95',
            'p2_1'=>'100',
            'p2_2'=>'95',
            'p2_3'=>'95',
            'p2_4'=>'95',
            'p3_1'=>'95',
            'p3_2'=>'95',
            'p3_3'=>'100',
            'p3_4'=>'100',
            'p7'=>1,
            'p8'=>'["2"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'Las experiencias de los participantes',
            'sug'=>'Programar la segunda parte de este curso',
            'p4_1'=>'100',
            'p4_2'=>'95',
            'p4_3'=>'100',
            'p4_4'=>'95',
            'p4_5'=>'95',
            'p4_6'=>'100',
            'p4_7'=>'95',
            'p4_8'=>'100',
            'p4_9'=>'100',
            'p4_10'=>'100',
            'p4_11'=>'95',
            'otros'=>'Otros',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>204,
            'participante_curso_id'=>257
        ]);

        DB::table('profesors')->insert([
            'id'=>263,
            'nombres'=>'Martha',
            'apellido_paterno'=>'Mancilla',
            'apellido_materno'=>'Urrea',
            'rfc'=>'MAUM0101018U7',
            'curp' =>'MAUM010101MDFNRR07',
            'numero_trabajador' => '12345630',
            'fecha_nacimiento'=>'1901-01-01'
        ]);
        
        DB::table('participante_curso')->insert([
            'id'=>258,
            'curso_id'=>204,
            'profesor_id'=>263,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
            'p1_1'=>'95',
            'p1_2'=>'95',
            'p1_3'=>'95',
            'p1_4'=>'95',
            'p1_5'=>'95',
            'p2_1'=>'80',
            'p2_2'=>'80',
            'p2_3'=>'95',
            'p2_4'=>'95',
            'p3_1'=>'100',
            'p3_2'=>'100',
            'p3_3'=>'80',
            'p3_4'=>'100',
            'p7'=>1,
            'p8'=>'["4","Correo electrónico"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'Los videos, las tareas y compartir experiencias',
            'sug'=>'En el aula hace mucho calor. La última sesión pudo haber sido más dinámica y seguir con el tema de la violencia',
            'p4_1'=>'100',
            'p4_2'=>'95',
            'p4_3'=>'100',
            'p4_4'=>'95',
            'p4_5'=>'95',
            'p4_6'=>'95',
            'p4_7'=>'95',
            'p4_8'=>'100',
            'p4_9'=>'95',
            'p4_10'=>'95',
            'p4_11'=>'95',
            'otros'=>'Otros',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>204,
            'participante_curso_id'=>258
        ]);

        DB::table('profesors')->insert([
            'id'=>264,
            'nombres'=>'Jose Miguel',
            'apellido_paterno'=>'Martinez',
            'apellido_materno'=>'Alcaraz',
            'rfc'=>'MAAM0101014L6',
            'curp' =>'MAAM010101HDFRLG02',
            'numero_trabajador' => '12345631',
            'fecha_nacimiento'=>'1901-01-01'
        ]);
        
        DB::table('participante_curso')->insert([
            'id'=>259,
            'curso_id'=>204,
            'profesor_id'=>264,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
            'p1_1'=>'100',
            'p1_2'=>'100',
            'p1_3'=>'100',
            'p1_4'=>'100',
            'p1_5'=>'100',
            'p2_1'=>'100',
            'p2_2'=>'100',
            'p2_3'=>'100',
            'p2_4'=>'100',
            'p3_1'=>'100',
            'p3_2'=>'100',
            'p3_3'=>'100',
            'p3_4'=>'100',
            'p7'=>1,
            'p8'=>'["4","Coordinacion del Centro"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'Las presentaciones en el aula y la exposición del tema. La secuencia del conocimiento y los conceptos.',
            'sug'=>'-',
            'p4_1'=>'100',
            'p4_2'=>'100',
            'p4_3'=>'100',
            'p4_4'=>'100',
            'p4_5'=>'100',
            'p4_6'=>'100',
            'p4_7'=>'100',
            'p4_8'=>'100',
            'p4_9'=>'100',
            'p4_10'=>'100',
            'p4_11'=>'100',
            'otros'=>'Otros',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>204,
            'participante_curso_id'=>259
        ]);

        DB::table('profesors')->insert([
            'id'=>265,
            'nombres'=>'Erika',
            'apellido_paterno'=>'Martinez',
            'apellido_materno'=>'Lopez',
            'rfc'=>'MALE0101016I9',
            'curp' =>'MALE010101MDFRPR00',
            'numero_trabajador' => '12345632',
            'fecha_nacimiento'=>'1901-01-01'
        ]);
        
        DB::table('participante_curso')->insert([
            'id'=>260,
            'curso_id'=>204,
            'profesor_id'=>265,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
            'p1_1'=>'100',
            'p1_2'=>'95',
            'p1_3'=>'100',
            'p1_4'=>'100',
            'p1_5'=>'100',
            'p2_1'=>'80',
            'p2_2'=>'80',
            'p2_3'=>'80',
            'p2_4'=>'80',
            'p3_1'=>'95',
            'p3_2'=>'95',
            'p3_3'=>'95',
            'p3_4'=>'95',
            'p7'=>1,
            'p8'=>'["4","Correo"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'Todo',
            'sug'=>'Ninguna, excelente curso',
            'p4_1'=>'100',
            'p4_2'=>'100',
            'p4_3'=>'100',
            'p4_4'=>'100',
            'p4_5'=>'100',
            'p4_6'=>'100',
            'p4_7'=>'100',
            'p4_8'=>'100',
            'p4_9'=>'100',
            'p4_10'=>'100',
            'p4_11'=>'100',
            'otros'=>'Otros',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>204,
            'participante_curso_id'=>260
        ]);

        DB::table('profesors')->insert([
            'id'=>266,
            'nombres'=>'Erika',
            'apellido_paterno'=>'Martinez',
            'apellido_materno'=>'Lopez',
            'rfc'=>'MALE0101016I9',
            'curp' =>'MALE010101MDFRPR00',
            'numero_trabajador' => '12345632',
            'fecha_nacimiento'=>'1901-01-01'
        ]);
        
        DB::table('participante_curso')->insert([
            'id'=>261,
            'curso_id'=>204,
            'profesor_id'=>266,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
            'p1_1'=>'100',
            'p1_2'=>'95',
            'p1_3'=>'100',
            'p1_4'=>'100',
            'p1_5'=>'100',
            'p2_1'=>'80',
            'p2_2'=>'80',
            'p2_3'=>'80',
            'p2_4'=>'80',
            'p3_1'=>'95',
            'p3_2'=>'95',
            'p3_3'=>'95',
            'p3_4'=>'95',
            'p7'=>1,
            'p8'=>'["4","Correo"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'Todo',
            'sug'=>'Ninguna, excelente curso',
            'p4_1'=>'100',
            'p4_2'=>'100',
            'p4_3'=>'100',
            'p4_4'=>'100',
            'p4_5'=>'100',
            'p4_6'=>'100',
            'p4_7'=>'100',
            'p4_8'=>'100',
            'p4_9'=>'100',
            'p4_10'=>'100',
            'p4_11'=>'100',
            'otros'=>'Otros',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>204,
            'participante_curso_id'=>261
        ]);

        DB::table('profesors')->insert([
            'id'=>267,
            'nombres'=>'Georgina',
            'apellido_paterno'=>'Nieto',
            'apellido_materno'=>'Castañeda',
            'rfc'=>'NICG010101D80',
            'curp' =>'NICG010101MDFTSR08',
            'numero_trabajador' => '12345633',
            'fecha_nacimiento'=>'1901-01-01'
        ]);
        
        DB::table('participante_curso')->insert([
            'id'=>262,
            'curso_id'=>204,
            'profesor_id'=>267,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
            'p1_1'=>'95',
            'p1_2'=>'100',
            'p1_3'=>'100',
            'p1_4'=>'95',
            'p1_5'=>'95',
            'p2_1'=>'95',
            'p2_2'=>'100',
            'p2_3'=>'100',
            'p2_4'=>'100',
            'p3_1'=>'100',
            'p3_2'=>'100',
            'p3_3'=>'100',
            'p3_4'=>'100',
            'p7'=>1,
            'p8'=>'["2"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'Aunque el curso me gustó, creo que hace falta una mayor reflexión sobre muchos tipos de agresión que se comenten en el aula y la manera de [...]',
            'sug'=>'Tal vez un listado más completo de cada tipo de violencia y todas las posibles soluciones. También me parece importante entender que cuando uno no está [...]',
            'p4_1'=>'100',
            'p4_2'=>'100',
            'p4_3'=>'100',
            'p4_4'=>'100',
            'p4_5'=>'100',
            'p4_6'=>'100',
            'p4_7'=>'100',
            'p4_8'=>'100',
            'p4_9'=>'100',
            'p4_10'=>'100',
            'p4_11'=>'100',
            'otros'=>'Otros',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>204,
            'participante_curso_id'=>262
        ]);

        DB::table('profesors')->insert([
            'id'=>268,
            'nombres'=>'Agustin',
            'apellido_paterno'=>'Nieves',
            'apellido_materno'=>'Saavedra',
            'rfc'=>'NISA010101ID2',
            'curp' =>'NISA010101MDFVVG00',
            'numero_trabajador' => '12345634',
            'fecha_nacimiento'=>'1901-01-01'
        ]);
        
        DB::table('participante_curso')->insert([
            'id'=>263,
            'curso_id'=>204,
            'profesor_id'=>268,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
            'p1_1'=>'95',
            'p1_2'=>'95',
            'p1_3'=>'100',
            'p1_4'=>'95',
            'p1_5'=>'80',
            'p2_1'=>'100',
            'p2_2'=>'60',
            'p2_3'=>'80',
            'p2_4'=>'95',
            'p3_1'=>'100',
            'p3_2'=>'100',
            'p3_3'=>'100',
            'p3_4'=>'100',
            'p7'=>1,
            'p8'=>'["2"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'La integración del grupo, en la discusión de los contenidos dedl mismo',
            'sug'=>'Que se de un segundo curso',
            'p4_1'=>'100',
            'p4_2'=>'100',
            'p4_3'=>'100',
            'p4_4'=>'100',
            'p4_5'=>'100',
            'p4_6'=>'100',
            'p4_7'=>'95',
            'p4_8'=>'100',
            'p4_9'=>'100',
            'p4_10'=>'100',
            'p4_11'=>'100',
            'otros'=>'Otros',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>204,
            'participante_curso_id'=>263
        ]);

        DB::table('profesors')->insert([
            'id'=>269,
            'nombres'=>'Maria Elena',
            'apellido_paterno'=>'Osorio',
            'apellido_materno'=>'Tai',
            'rfc'=>'OOTE010101I18',
            'curp' =>'OOTE010101MDFSL06',
            'numero_trabajador' => '12345635',
            'fecha_nacimiento'=>'1901-01-01'
        ]);
        
        DB::table('participante_curso')->insert([
            'id'=>264,
            'curso_id'=>204,
            'profesor_id'=>269,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
            'p1_1'=>'100',
            'p1_2'=>'95',
            'p1_3'=>'95',
            'p1_4'=>'100',
            'p1_5'=>'100',
            'p2_1'=>'95',
            'p2_2'=>'95',
            'p2_3'=>'100',
            'p2_4'=>'100',
            'p3_1'=>'100',
            'p3_2'=>'100',
            'p3_3'=>'100',
            'p3_4'=>'100',
            'p7'=>1,
            'p8'=>'["2"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'Los ejemplos mostraddos por la maestra en cada tema visto',
            'sug'=>'En ocasiones, dentro de las participaciones de los participantes, algunos comentarios estaban fuera de lugar y hacían que se perdiera el hilo dedl tem [...]',
            'p4_1'=>'95',
            'p4_2'=>'95',
            'p4_3'=>'100',
            'p4_4'=>'95',
            'p4_5'=>'100',
            'p4_6'=>'80',
            'p4_7'=>'95',
            'p4_8'=>'100',
            'p4_9'=>'95',
            'p4_10'=>'100',
            'p4_11'=>'100',
            'otros'=>'Otros',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>204,
            'participante_curso_id'=>264
        ]);

        //Segundo documento: 1_RespuestasEvalCursosTodasAreas_2020-1s_2
        //Primer curso
        DB::table('catalogo_cursos')->insert([
            'id'=> 205,
            'nombre_curso'=>'Las rubricas como instrumento de evaluación',
            'duracion_curso' => '20',
            'coordinacion_id' => 201,
            'tipo' => 'C',
            'institucion' => 'DGAPA',
            'fecha_disenio'=>'2012-12-12',
            'clave_curso'=>'RIEDGAPA'
        ]);
        
        DB::table('cursos')->insert([
            'id'=>205,
            'semestre_anio'=>2020,
            'semestre_pi'=>'1',
            'semestre_si'=>'s',
            'fecha_inicio' => '2018-05-20',
            'fecha_fin' => '2018-05-30',
            'hora_inicio' => '14:00',
            'hora_fin' => '16:00',
            'dias_semana' => 'Lunes,Miércoles',
            'numero_sesiones' => 10,
            'texto_diploma' => 'Texto diploma',
            'costo' => 2000,
            'cupo_maximo' => 20,
            'cupo_minimo' => 5,
            'catalogo_id' => 205,
            'salon_id' => 1
        ]);
        //Instructores
        DB::table('profesors')->insert([
            'id'=>270,
            'nombres'=>'Claudia',
            'apellido_paterno'=>'Loreto',
            'apellido_materno'=>'Miranda',
            'rfc'=>'LOMC0101019J5',
            'curp' =>'LOMC010101MDFRRL00',
            'numero_trabajador' => '12345636',
            'fecha_nacimiento'=>'1901-01-01'
        ]);
        DB::table('profesors')->insert([
            'id'=>271,
            'nombres'=>'Juan',
            'apellido_paterno'=>'Varela',
            'apellido_materno'=>'Juarez',
            'rfc'=>'VAJJ010101GHA',
            'curp' =>'VAJJ010101HDFRRN04',
            'numero_trabajador' => '12345637',
            'fecha_nacimiento'=>'1901-01-01'
        ]);
        //Participantes
        DB::table('profesors')->insert([
            'id'=>272,
            'nombres'=>'Juan Mauricio',
            'apellido_paterno'=>'Angeles',
            'apellido_materno'=>'Cervantes',
            'rfc'=>'AECJ010101N24',
            'curp' =>'AECJ010101HDFNRN09',
            'numero_trabajador' => '12345638',
            'fecha_nacimiento'=>'1901-01-01'
        ]);
        
        DB::table('participante_curso')->insert([
            'id'=>266,
            'curso_id'=>205,
            'profesor_id'=>272,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
            'p1_1'=>'95',
            'p1_2'=>'95',
            'p1_3'=>'100',
            'p1_4'=>'100',
            'p1_5'=>'100',
            'p2_1'=>'80',
            'p2_2'=>'100',
            'p2_3'=>'100',
            'p2_4'=>'100',
            'p3_1'=>'95',
            'p3_2'=>'95',
            'p3_3'=>'80',
            'p3_4'=>'100',
            'p7'=>1,
            'p8'=>'["1"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'La practiciddadd de la rúbricas en la evaluación',
            'sug'=>'Un taller con más días',
            'p4_1'=>'100',
            'p4_2'=>'95',
            'p4_3'=>'100',
            'p4_4'=>'95',
            'p4_5'=>'100',
            'p4_6'=>'100',
            'p4_7'=>'100',
            'p4_8'=>'100',
            'p4_9'=>'100',
            'p4_10'=>'100',
            'p4_11'=>'100',
            'p5_1'=>'95',
            'p5_2'=>'95',
            'p5_3'=>'100',
            'p5_4'=>'100',
            'p5_5'=>'100',
            'p5_6'=>'95',
            'p5_7'=>'95',
            'p5_8'=>'100',
            'p5_9'=>'100',
            'p5_10'=>'100',
            'p5_11'=>'100',
            'otros'=>'Otros',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>204,
            'participante_curso_id'=>266
        ]);
        
        DB::table('participante_curso')->insert([
            'id'=>267,
            'curso_id'=>205,
            'profesor_id'=>258,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
            'p1_1'=>'100',
            'p1_2'=>'100',
            'p1_3'=>'100',
            'p1_4'=>'100',
            'p1_5'=>'100',
            'p2_1'=>'100',
            'p2_2'=>'100',
            'p2_3'=>'100',
            'p2_4'=>'100',
            'p3_1'=>'100',
            'p3_2'=>'100',
            'p3_3'=>'95',
            'p3_4'=>'100',
            'p7'=>1,
            'p8'=>'["2"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'Saber que es una rúbrica y cómo se usa',
            'sug'=>'Todo muy bien',
            'p4_1'=>'100',
            'p4_2'=>'100',
            'p4_3'=>'100',
            'p4_4'=>'100',
            'p4_5'=>'100',
            'p4_6'=>'100',
            'p4_7'=>'100',
            'p4_8'=>'100',
            'p4_9'=>'100',
            'p4_10'=>'100',
            'p4_11'=>'100',
            'p5_1'=>'100',
            'p5_2'=>'100',
            'p5_3'=>'100',
            'p5_4'=>'100',
            'p5_5'=>'100',
            'p5_6'=>'100',
            'p5_7'=>'100',
            'p5_8'=>'100',
            'p5_9'=>'100',
            'p5_10'=>'100',
            'p5_11'=>'100',
            'otros'=>'Otros',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>204,
            'participante_curso_id'=>267
        ]);

        DB::table('profesors')->insert([
            'id'=>273,
            'nombres'=>'Juventino',
            'apellido_paterno'=>'Cuellar',
            'apellido_materno'=>'Gonzalez',
            'rfc'=>'CUGJ010101SJ8',
            'curp' =>'CUGJ010101HDFLNV03',
            'numero_trabajador' => '12345640',
            'fecha_nacimiento'=>'1901-01-01'
        ]);
        
        DB::table('participante_curso')->insert([
            'id'=>268,
            'curso_id'=>205,
            'profesor_id'=>273,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
            'p1_1'=>'100',
            'p1_2'=>'100',
            'p1_3'=>'100',
            'p1_4'=>'100',
            'p1_5'=>'100',
            'p2_1'=>'100',
            'p2_2'=>'80',
            'p2_3'=>'100',
            'p2_4'=>'100',
            'p3_1'=>'100',
            'p3_2'=>'100',
            'p3_3'=>'100',
            'p3_4'=>'100',
            'p7'=>1,
            'p8'=>'["1","2"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'Todo',
            'sug'=>'Todo bien',
            'p4_1'=>'100',
            'p4_2'=>'100',
            'p4_3'=>'100',
            'p4_4'=>'100',
            'p4_5'=>'100',
            'p4_6'=>'100',
            'p4_7'=>'100',
            'p4_8'=>'100',
            'p4_9'=>'100',
            'p4_10'=>'100',
            'p4_11'=>'100',
            'p5_1'=>'100',
            'p5_2'=>'100',
            'p5_3'=>'100',
            'p5_4'=>'100',
            'p5_5'=>'100',
            'p5_6'=>'100',
            'p5_7'=>'100',
            'p5_8'=>'100',
            'p5_9'=>'100',
            'p5_10'=>'100',
            'p5_11'=>'100',
            'otros'=>'Otros',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>204,
            'participante_curso_id'=>268
        ]);

        DB::table('profesors')->insert([
            'id'=>274,
            'nombres'=>'Miguel',
            'apellido_paterno'=>'Bustos',
            'apellido_materno'=>'Figueroa',
            'rfc'=>'BUFM0101011I0',
            'curp' =>'BUFM010101HDFSGG08',
            'numero_trabajador' => '12345641',
            'fecha_nacimiento'=>'1901-01-01'
        ]);
        
        DB::table('participante_curso')->insert([
            'id'=>269,
            'curso_id'=>205,
            'profesor_id'=>274,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);

        DB::table('profesors')->insert([
            'id'=>275,
            'nombres'=>'Xochitl',
            'apellido_paterno'=>'Flores',
            'apellido_materno'=>'Soto',
            'rfc'=>'FOSX010101KRA',
            'curp' =>'FOSX010101MDFLTC00',
            'numero_trabajador' => '12345642',
            'fecha_nacimiento'=>'1901-01-01'
        ]);
        
        DB::table('participante_curso')->insert([
            'id'=>270,
            'curso_id'=>205,
            'profesor_id'=>275,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
            'p1_1'=>'100',
            'p1_2'=>'100',
            'p1_3'=>'100',
            'p1_4'=>'100',
            'p1_5'=>'100',
            'p2_1'=>'100',
            'p2_2'=>'100',
            'p2_3'=>'100',
            'p2_4'=>'100',
            'p3_1'=>'100',
            'p3_2'=>'100',
            'p3_3'=>'95',
            'p3_4'=>'100',
            'p7'=>1,
            'p8'=>'["2"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'La exposición de los diferentes ejemplos de rúbricas de los participantes',
            'sug'=>'Realizar más actividades grupales para retroalimentación de ideas de las diferentes áreas',
            'p4_1'=>'100',
            'p4_2'=>'95',
            'p4_3'=>'100',
            'p4_4'=>'95',
            'p4_5'=>'100',
            'p4_6'=>'95',
            'p4_7'=>'100',
            'p4_8'=>'100',
            'p4_9'=>'100',
            'p4_10'=>'100',
            'p4_11'=>'100',
            'p5_1'=>'95',
            'p5_2'=>'95',
            'p5_3'=>'100',
            'p5_4'=>'95',
            'p5_5'=>'95',
            'p5_6'=>'95',
            'p5_7'=>'95',
            'p5_8'=>'100',
            'p5_9'=>'100',
            'p5_10'=>'100',
            'p5_11'=>'100',
            'otros'=>'Otros',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>204,
            'participante_curso_id'=>270
        ]);

        DB::table('profesors')->insert([
            'id'=>276,
            'nombres'=>'Luis Antonio',
            'apellido_paterno'=>'Garcia',
            'apellido_materno'=>'Villanueva',
            'rfc'=>'GAVL0101011Q3',
            'curp' =>'GAVL010101HDFRLS04',
            'numero_trabajador' => '12345643',
            'fecha_nacimiento'=>'1901-01-01'
        ]);
        
        DB::table('participante_curso')->insert([
            'id'=>271,
            'curso_id'=>205,
            'profesor_id'=>276,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);

        DB::table('profesors')->insert([
            'id'=>277,
            'nombres'=>'Patricia',
            'apellido_paterno'=>'Guerrero',
            'apellido_materno'=>'DDiaz',
            'rfc'=>'GUDP010101ER1',
            'curp' =>'GUDP010101MDFRZT03',
            'numero_trabajador' => '12345644',
            'fecha_nacimiento'=>'1901-01-01'
        ]);
        
        DB::table('participante_curso')->insert([
            'id'=>272,
            'curso_id'=>205,
            'profesor_id'=>277,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
            'p1_1'=>'100',
            'p1_2'=>'100',
            'p1_3'=>'100',
            'p1_4'=>'100',
            'p1_5'=>'100',
            'p2_1'=>'100',
            'p2_2'=>'95',
            'p2_3'=>'100',
            'p2_4'=>'100',
            'p3_1'=>'100',
            'p3_2'=>'100',
            'p3_3'=>'95',
            'p3_4'=>'100',
            'p7'=>1,
            'p8'=>'["3"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'Que me llevo las rúbricas como un nuevo mecanismo de evaluación. No tenía una iddea definida de cómo se utilizaban, sin embargo ahora ya me queda claro.',
            'sug'=>'Ninguna',
            'p4_1'=>'100',
            'p4_2'=>'95',
            'p4_3'=>'100',
            'p4_4'=>'95',
            'p4_5'=>'100',
            'p4_6'=>'95',
            'p4_7'=>'100',
            'p4_8'=>'100',
            'p4_9'=>'100',
            'p4_10'=>'100',
            'p4_11'=>'100',
            'p5_1'=>'95',
            'p5_2'=>'100',
            'p5_3'=>'100',
            'p5_4'=>'100',
            'p5_5'=>'95',
            'p5_6'=>'95',
            'p5_7'=>'100',
            'p5_8'=>'100',
            'p5_9'=>'95',
            'p5_10'=>'100',
            'p5_11'=>'100',
            'otros'=>'Otros',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>204,
            'participante_curso_id'=>272
        ]);

        DB::table('profesors')->insert([
            'id'=>278,
            'nombres'=>'Miguel Angel',
            'apellido_paterno'=>'Hofmann',
            'apellido_materno'=>'Aguirre',
            'rfc'=>'HOAM010101R47',
            'curp' =>'HOAM010101HDFFGG02',
            'numero_trabajador' => '12345645',
            'fecha_nacimiento'=>'1901-01-01'
        ]);
        
        DB::table('participante_curso')->insert([
            'id'=>273,
            'curso_id'=>205,
            'profesor_id'=>278,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
            'p1_1'=>'100',
            'p1_2'=>'100',
            'p1_3'=>'100',
            'p1_4'=>'100',
            'p1_5'=>'100',
            'p2_1'=>'95',
            'p2_2'=>'100',
            'p2_3'=>'100',
            'p2_4'=>'100',
            'p3_1'=>'100',
            'p3_2'=>'100',
            'p3_3'=>'100',
            'p3_4'=>'100',
            'p7'=>1,
            'p8'=>'["2"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'La fundamentación de las rúbricas de evaluación',
            'sug'=>'Todo bien',
            'p4_1'=>'100',
            'p4_2'=>'100',
            'p4_3'=>'100',
            'p4_4'=>'100',
            'p4_5'=>'100',
            'p4_6'=>'100',
            'p4_7'=>'100',
            'p4_8'=>'100',
            'p4_9'=>'100',
            'p4_10'=>'100',
            'p4_11'=>'100',
            'p5_1'=>'100',
            'p5_2'=>'100',
            'p5_3'=>'100',
            'p5_4'=>'100',
            'p5_5'=>'100',
            'p5_6'=>'100',
            'p5_7'=>'100',
            'p5_8'=>'100',
            'p5_9'=>'100',
            'p5_10'=>'100',
            'p5_11'=>'100',
            'otros'=>'Otros',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>204,
            'participante_curso_id'=>273
        ]);

        DB::table('profesors')->insert([
            'id'=>279,
            'nombres'=>'Rafael Alejandro',
            'apellido_paterno'=>'Marin',
            'apellido_materno'=>'Acosta',
            'rfc'=>'MAAR010101R8A',
            'curp' =>'MAAR010101HDFRCF01',
            'numero_trabajador' => '12345646',
            'fecha_nacimiento'=>'1901-01-01'
        ]);
        
        DB::table('participante_curso')->insert([
            'id'=>274,
            'curso_id'=>205,
            'profesor_id'=>279,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
            'p1_1'=>'100',
            'p1_2'=>'100',
            'p1_3'=>'100',
            'p1_4'=>'100',
            'p1_5'=>'100',
            'p2_1'=>'80',
            'p2_2'=>'80',
            'p2_3'=>'80',
            'p2_4'=>'95',
            'p3_1'=>'100',
            'p3_2'=>'100',
            'p3_3'=>'100',
            'p3_4'=>'100',
            'p7'=>1,
            'p8'=>'[""]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'-',
            'sug'=>'-',
            'p4_1'=>'100',
            'p4_2'=>'100',
            'p4_3'=>'100',
            'p4_4'=>'100',
            'p4_5'=>'100',
            'p4_6'=>'100',
            'p4_7'=>'100',
            'p4_8'=>'95',
            'p4_9'=>'100',
            'p4_10'=>'100',
            'p4_11'=>'100',
            'p5_1'=>'100',
            'p5_2'=>'100',
            'p5_3'=>'100',
            'p5_4'=>'100',
            'p5_5'=>'100',
            'p5_6'=>'95',
            'p5_7'=>'100',
            'p5_8'=>'100',
            'p5_9'=>'100',
            'p5_10'=>'95',
            'p5_11'=>'100',
            'otros'=>'Otros',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>205,
            'participante_curso_id'=>274
        ]);
        DB::table('profesors')->insert([
            'id'=>280,
            'nombres'=>'Gloria',
            'apellido_paterno'=>'Mata',
            'apellido_materno'=>'Hernandedz',
            'rfc'=>'MAHG010101HA5',
            'curp' =>'MAHG010101MDFTRL07',
            'numero_trabajador' => '12345647',
            'fecha_nacimiento'=>'1901-01-01'
        ]);
        
        DB::table('participante_curso')->insert([
            'id'=>275,
            'curso_id'=>205,
            'profesor_id'=>280,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
            'p1_1'=>'95',
            'p1_2'=>'95',
            'p1_3'=>'95',
            'p1_4'=>'95',
            'p1_5'=>'100',
            'p2_1'=>'95',
            'p2_2'=>'95',
            'p2_3'=>'100',
            'p2_4'=>'100',
            'p3_1'=>'100',
            'p3_2'=>'100',
            'p3_3'=>'100',
            'p3_4'=>'100',
            'p7'=>1,
            'p8'=>'["2"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'El material proporcionaddo y el trabajo realizado aplicado a nuestras ddisciplinas',
            'sug'=>'Que se puedan compartir las rúbricas realizaddas por todos los participantes',
            'p4_1'=>'100',
            'p4_2'=>'100',
            'p4_3'=>'100',
            'p4_4'=>'100',
            'p4_5'=>'100',
            'p4_6'=>'100',
            'p4_7'=>'100',
            'p4_8'=>'100',
            'p4_9'=>'100',
            'p4_10'=>'100',
            'p4_11'=>'100',
            'p5_1'=>'100',
            'p5_2'=>'100',
            'p5_3'=>'100',
            'p5_4'=>'100',
            'p5_5'=>'100',
            'p5_6'=>'100',
            'p5_7'=>'100',
            'p5_8'=>'100',
            'p5_9'=>'100',
            'p5_10'=>'100',
            'p5_11'=>'100',
            'otros'=>'Otros',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>205,
            'participante_curso_id'=>275
        ]);

        DB::table('profesors')->insert([
            'id'=>281,
            'nombres'=>'Francisco Javier',
            'apellido_paterno'=>'Montoya',
            'apellido_materno'=>'Cervantes',
            'rfc'=>'MOCF0101013A9',
            'curp' =>'MOCF010101HDFNRR01',
            'numero_trabajador' => '12345648',
            'fecha_nacimiento'=>'1901-01-01'
        ]);
        
        DB::table('participante_curso')->insert([
            'id'=>276,
            'curso_id'=>205,
            'profesor_id'=>281,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
            'p1_1'=>'100',
            'p1_2'=>'100',
            'p1_3'=>'100',
            'p1_4'=>'100',
            'p1_5'=>'100',
            'p2_1'=>'95',
            'p2_2'=>'100',
            'p2_3'=>'100',
            'p2_4'=>'100',
            'p3_1'=>'100',
            'p3_2'=>'100',
            'p3_3'=>'100',
            'p3_4'=>'100',
            'p7'=>1,
            'p8'=>'["2"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'Hacer evidente el hecho de una herramienta más para valorar el aprenddizaje de los alumnos',
            'sug'=>'Ninguna excelente el curso',
            'p4_1'=>'100',
            'p4_2'=>'100',
            'p4_3'=>'100',
            'p4_4'=>'100',
            'p4_5'=>'100',
            'p4_6'=>'100',
            'p4_7'=>'100',
            'p4_8'=>'100',
            'p4_9'=>'100',
            'p4_10'=>'100',
            'p4_11'=>'100',
            'p5_1'=>'100',
            'p5_2'=>'100',
            'p5_3'=>'100',
            'p5_4'=>'100',
            'p5_5'=>'100',
            'p5_6'=>'100',
            'p5_7'=>'100',
            'p5_8'=>'100',
            'p5_9'=>'100',
            'p5_10'=>'100',
            'p5_11'=>'100',
            'otros'=>'Otros',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>205,
            'participante_curso_id'=>276
        ]);
        
        DB::table('participante_curso')->insert([
            'id'=>277,
            'curso_id'=>205,
            'profesor_id'=>267,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);

        DB::table('profesors')->insert([
            'id'=>282,
            'nombres'=>'Margarita',
            'apellido_paterno'=>'Ramirez',
            'apellido_materno'=>'Galindo',
            'rfc'=>'RAGM010101KP2',
            'curp' =>'RAGM010101MDFMLR02',
            'numero_trabajador' => '12345649',
            'fecha_nacimiento'=>'1901-01-01'
        ]);
        
        DB::table('participante_curso')->insert([
            'id'=>278,
            'curso_id'=>205,
            'profesor_id'=>282,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
            'p1_1'=>'100',
            'p1_2'=>'100',
            'p1_3'=>'100',
            'p1_4'=>'95',
            'p1_5'=>'95',
            'p2_1'=>'80',
            'p2_2'=>'95',
            'p2_3'=>'100',
            'p2_4'=>'95',
            'p3_1'=>'100',
            'p3_2'=>'100',
            'p3_3'=>'100',
            'p3_4'=>'100',
            'p7'=>1,
            'p8'=>'["2"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'Los ejemplos presentados, son propios de las asignaturas que se imparten en la Facultad.',
            'sug'=>'Que el curso tenga mayor duración',
            'p4_1'=>'100',
            'p4_2'=>'100',
            'p4_3'=>'100',
            'p4_4'=>'100',
            'p4_5'=>'100',
            'p4_6'=>'100',
            'p4_7'=>'100',
            'p4_8'=>'100',
            'p4_9'=>'100',
            'p4_10'=>'100',
            'p4_11'=>'100',
            'p5_1'=>'95',
            'p5_2'=>'95',
            'p5_3'=>'100',
            'p5_4'=>'95',
            'p5_5'=>'100',
            'p5_6'=>'95',
            'p5_7'=>'95',
            'p5_8'=>'100',
            'p5_9'=>'100',
            'p5_10'=>'100',
            'p5_11'=>'100',
            'otros'=>'Otros',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>205,
            'participante_curso_id'=>278
        ]);

        DB::table('profesors')->insert([
            'id'=>283,
            'nombres'=>'Juan Angel',
            'apellido_paterno'=>'Rodriguez',
            'apellido_materno'=>'Gomez',
            'rfc'=>'ROGJ010101QM4',
            'curp' =>'ROGJ010101HDFDMN08',
            'numero_trabajador' => '12345650',
            'fecha_nacimiento'=>'1901-01-01'
        ]);
        
        DB::table('participante_curso')->insert([
            'id'=>279,
            'curso_id'=>205,
            'profesor_id'=>283,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
            'p1_1'=>'100',
            'p1_2'=>'100',
            'p1_3'=>'100',
            'p1_4'=>'100',
            'p1_5'=>'100',
            'p2_1'=>'100',
            'p2_2'=>'100',
            'p2_3'=>'100',
            'p2_4'=>'100',
            'p3_1'=>'100',
            'p3_2'=>'100',
            'p3_3'=>'100',
            'p3_4'=>'100',
            'p7'=>1,
            'p8'=>'["1"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'Tema, expositores',
            'sug'=>'Ejemplos de ingeniería',
            'p4_1'=>'100',
            'p4_2'=>'100',
            'p4_3'=>'100',
            'p4_4'=>'100',
            'p4_5'=>'100',
            'p4_6'=>'100',
            'p4_7'=>'100',
            'p4_8'=>'100',
            'p4_9'=>'100',
            'p4_10'=>'100',
            'p4_11'=>'100',
            'p5_1'=>'100',
            'p5_2'=>'100',
            'p5_3'=>'100',
            'p5_4'=>'100',
            'p5_5'=>'100',
            'p5_6'=>'100',
            'p5_7'=>'100',
            'p5_8'=>'100',
            'p5_9'=>'100',
            'p5_10'=>'100',
            'p5_11'=>'100',
            'otros'=>'Otros',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>205,
            'participante_curso_id'=>279
        ]);

        DB::table('profesors')->insert([
            'id'=>284,
            'nombres'=>'Gabriel',
            'apellido_paterno'=>'Salinas',
            'apellido_materno'=>'Calleros',
            'rfc'=>'SACG010101CG5',
            'curp' =>'SACG010101HDFLLB04',
            'numero_trabajador' => '12345651',
            'fecha_nacimiento'=>'1901-01-01'
        ]);
        
        DB::table('participante_curso')->insert([
            'id'=>280,
            'curso_id'=>205,
            'profesor_id'=>284,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
            'p1_1'=>'95',
            'p1_2'=>'95',
            'p1_3'=>'95',
            'p1_4'=>'95',
            'p1_5'=>'95',
            'p2_1'=>'95',
            'p2_2'=>'95',
            'p2_3'=>'95',
            'p2_4'=>'95',
            'p3_1'=>'95',
            'p3_2'=>'95',
            'p3_3'=>'95',
            'p3_4'=>'95',
            'p7'=>1,
            'p8'=>'["2"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'El programa de cómputo presentado para poder iniciar la realización de una rúbrica',
            'sug'=>'Seguir en contacto con los instructores para retroalimentación en la realización de ríbricas',
            'p4_1'=>'100',
            'p4_2'=>'100',
            'p4_3'=>'100',
            'p4_4'=>'100',
            'p4_5'=>'100',
            'p4_6'=>'100',
            'p4_7'=>'100',
            'p4_8'=>'100',
            'p4_9'=>'100',
            'p4_10'=>'100',
            'p4_11'=>'100',
            'p5_1'=>'100',
            'p5_2'=>'100',
            'p5_3'=>'100',
            'p5_4'=>'100',
            'p5_5'=>'100',
            'p5_6'=>'100',
            'p5_7'=>'100',
            'p5_8'=>'100',
            'p5_9'=>'100',
            'p5_10'=>'100',
            'p5_11'=>'100',
            'otros'=>'Otros',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>205,
            'participante_curso_id'=>280
        ]);
        DB::table('profesors')->insert([
            'id'=>285,
            'nombres'=>'Eduardo Valentin',
            'apellido_paterno'=>'Talavera',
            'apellido_materno'=>'Moctezuma',
            'rfc'=>'TAME010101IW4',
            'curp' =>'TAME010101HDFLCD06',
            'numero_trabajador' => '12345652',
            'fecha_nacimiento'=>'1901-01-01'
        ]);
        
        DB::table('participante_curso')->insert([
            'id'=>281,
            'curso_id'=>205,
            'profesor_id'=>285,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);


        DB::table('profesors')->insert([
            'id'=>286,
            'nombres'=>'Manuel de Jesus',
            'apellido_paterno'=>'Vacio',
            'apellido_materno'=>'Gonzalez',
            'rfc'=>'VAGM010101J72',
            'curp' =>'VAGM010101HDFCNN07',
            'numero_trabajador' => '12345653',
            'fecha_nacimiento'=>'1901-01-01'
        ]);
        
        DB::table('participante_curso')->insert([
            'id'=>282,
            'curso_id'=>205,
            'profesor_id'=>286,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
            'p1_1'=>'100',
            'p1_2'=>'100',
            'p1_3'=>'100',
            'p1_4'=>'95',
            'p1_5'=>'100',
            'p2_1'=>'100',
            'p2_2'=>'95',
            'p2_3'=>'100',
            'p2_4'=>'100',
            'p3_1'=>'100',
            'p3_2'=>'100',
            'p3_3'=>'100',
            'p3_4'=>'100',
            'p7'=>1,
            'p8'=>'["2"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'El desarrollo de una rúbrica',
            'sug'=>'Ninguna',
            'p4_1'=>'100',
            'p4_2'=>'100',
            'p4_3'=>'100',
            'p4_4'=>'100',
            'p4_5'=>'100',
            'p4_6'=>'100',
            'p4_7'=>'100',
            'p4_8'=>'100',
            'p4_9'=>'100',
            'p4_10'=>'100',
            'p4_11'=>'100',
            'p5_1'=>'100',
            'p5_2'=>'100',
            'p5_3'=>'100',
            'p5_4'=>'100',
            'p5_5'=>'100',
            'p5_6'=>'100',
            'p5_7'=>'100',
            'p5_8'=>'100',
            'p5_9'=>'100',
            'p5_10'=>'100',
            'p5_11'=>'100',
            'otros'=>'Otros',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>205,
            'participante_curso_id'=>282
        ]);

        DB::table('profesors')->insert([
            'id'=>287,
            'nombres'=>'Salvador Enrique',
            'apellido_paterno'=>'Villalobos',
            'apellido_materno'=>'Perez',
            'rfc'=>'VIPS0101014W5',
            'curp' =>'VIPS010101HDFLRL07',
            'numero_trabajador' => '12345654',
            'fecha_nacimiento'=>'1901-01-01'
        ]);
        
        DB::table('participante_curso')->insert([
            'id'=>283,
            'curso_id'=>205,
            'profesor_id'=>287,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
            'p1_1'=>'100',
            'p1_2'=>'100',
            'p1_3'=>'100',
            'p1_4'=>'100',
            'p1_5'=>'100',
            'p2_1'=>'100',
            'p2_2'=>'100',
            'p2_3'=>'100',
            'p2_4'=>'100',
            'p3_1'=>'100',
            'p3_2'=>'100',
            'p3_3'=>'100',
            'p3_4'=>'100',
            'p7'=>1,
            'p8'=>'["2"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'La forma de trabajo',
            'sug'=>'Felicitar a los expositores',
            'p4_1'=>'100',
            'p4_2'=>'100',
            'p4_3'=>'100',
            'p4_4'=>'100',
            'p4_5'=>'100',
            'p4_6'=>'100',
            'p4_7'=>'100',
            'p4_8'=>'100',
            'p4_9'=>'100',
            'p4_10'=>'100',
            'p4_11'=>'100',
            'p5_1'=>'100',
            'p5_2'=>'100',
            'p5_3'=>'100',
            'p5_4'=>'100',
            'p5_5'=>'100',
            'p5_6'=>'100',
            'p5_7'=>'100',
            'p5_8'=>'100',
            'p5_9'=>'100',
            'p5_10'=>'100',
            'p5_11'=>'100',
            'otros'=>'Otros',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>205,
            'participante_curso_id'=>283
        ]);

        DB::table('profesors')->insert([
            'id'=>288,
            'nombres'=>'Arturo',
            'apellido_paterno'=>'Zapata',
            'apellido_materno'=>'Y Rosales',
            'rfc'=>'ZARA010101QU9',
            'curp' =>'ZARA010101HDFPSR04',
            'numero_trabajador' => '12345655',
            'fecha_nacimiento'=>'1901-01-01'
        ]);
        
        DB::table('participante_curso')->insert([
            'id'=>284,
            'curso_id'=>205,
            'profesor_id'=>288,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
            'p1_1'=>'100',
            'p1_2'=>'100',
            'p1_3'=>'100',
            'p1_4'=>'100',
            'p1_5'=>'100',
            'p2_1'=>'95',
            'p2_2'=>'95',
            'p2_3'=>'95',
            'p2_4'=>'95',
            'p3_1'=>'100',
            'p3_2'=>'100',
            'p3_3'=>'100',
            'p3_4'=>'100',
            'p7'=>1,
            'p8'=>'["2"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'La calidad y experiencia de los instructores',
            'sug'=>'Más tiempo',
            'p4_1'=>'100',
            'p4_2'=>'100',
            'p4_3'=>'100',
            'p4_4'=>'100',
            'p4_5'=>'100',
            'p4_6'=>'100',
            'p4_7'=>'100',
            'p4_8'=>'100',
            'p4_9'=>'100',
            'p4_10'=>'100',
            'p4_11'=>'100',
            'p5_1'=>'100',
            'p5_2'=>'100',
            'p5_3'=>'100',
            'p5_4'=>'100',
            'p5_5'=>'100',
            'p5_6'=>'100',
            'p5_7'=>'100',
            'p5_8'=>'100',
            'p5_9'=>'100',
            'p5_10'=>'100',
            'p5_11'=>'100',
            'otros'=>'Otros',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>205,
            'participante_curso_id'=>284
        ]);

        DB::table('profesors')->insert([
            'id'=>289,
            'nombres'=>'Hugo',
            'apellido_paterno'=>'Zuñiga',
            'apellido_materno'=>'Barragan',
            'rfc'=>'ZUBH010101HMA',
            'curp' =>'ZUBH010101HDF&RG04',
            'numero_trabajador' => '12345656',
            'fecha_nacimiento'=>'1901-01-01'
        ]);
        
        DB::table('participante_curso')->insert([
            'id'=>285,
            'curso_id'=>205,
            'profesor_id'=>289,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
            'p1_1'=>'95',
            'p1_2'=>'95',
            'p1_3'=>'95',
            'p1_4'=>'100',
            'p1_5'=>'100',
            'p2_1'=>'95',
            'p2_2'=>'80',
            'p2_3'=>'80',
            'p2_4'=>'100',
            'p3_1'=>'95',
            'p3_2'=>'100',
            'p3_3'=>'95',
            'p3_4'=>'100',
            'p7'=>1,
            'p8'=>'["1","2"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'Los ejercicios prácticos',
            'sug'=>'Ampliar el tiempo del taller para realizar un rúbrica completa',
            'p4_1'=>'100',
            'p4_2'=>'100',
            'p4_3'=>'100',
            'p4_4'=>'100',
            'p4_5'=>'100',
            'p4_6'=>'100',
            'p4_7'=>'100',
            'p4_8'=>'100',
            'p4_9'=>'100',
            'p4_10'=>'100',
            'p4_11'=>'100',
            'p5_1'=>'100',
            'p5_2'=>'100',
            'p5_3'=>'100',
            'p5_4'=>'100',
            'p5_5'=>'100',
            'p5_6'=>'100',
            'p5_7'=>'100',
            'p5_8'=>'100',
            'p5_9'=>'100',
            'p5_10'=>'100',
            'p5_11'=>'100',
            'otros'=>'Otros',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>205,
            'participante_curso_id'=>285
        ]);
        //Segundo curso
        //insertar coordinacion y continuar editando los datos
        DB::table('coordinacions')->insert([
                'id' => 203,
                'nombre_coordinacion' => 'Área de Cómputo',
                'abreviatura' => 'AC',
                'coordinador' => 'Daniela Galvan',
                'grado' => 'M.E.M.',
                'usuario' => 'daniela',
                'password' => Hash::make('1234'),
                'comentarios' => '-'
            ]);
        
        DB::table('catalogo_cursos')->insert([
            'id'=> 206,
            'nombre_curso'=>'Manejo básico de R aplicado a la enseñanza de las matemáticas',
            'duracion_curso' => '20',
            'coordinacion_id' => 203,
            'tipo' => 'C',
            'institucion' => 'DGAPA',
            'fecha_disenio'=>'2012-12-12',
            'clave_curso'=>'MBRAEMDGAPA'
        ]);
        
        DB::table('cursos')->insert([
            'id'=>206,
            'semestre_anio'=>2020,
            'semestre_pi'=>'1',
            'semestre_si'=>'s',
            'fecha_inicio' => '2018-05-20',
            'fecha_fin' => '2018-05-30',
            'hora_inicio' => '14:00',
            'hora_fin' => '16:00',
            'dias_semana' => 'Lunes,Miércoles',
            'numero_sesiones' => 10,
            'texto_diploma' => 'Texto diploma',
            'costo' => 2000,
            'cupo_maximo' => 20,
            'cupo_minimo' => 5,
            'catalogo_id' => 206,
            'salon_id' => 1
        ]);
        //Instructor
        DB::table('profesors')->insert([
            'id'=>290,
            'nombres'=>'Alejandro',
            'apellido_paterno'=>'Vargas',
            'apellido_materno'=>'Espinoza de los Monteros',
            'rfc'=>'VAEA010101MX4',
            'curp' =>'VAEA010101HDFRSL01',
            'numero_trabajador' => '12345657',
            'fecha_nacimiento'=>'1901-01-01'
        ]);
        //Participantes
        DB::table('participante_curso')->insert([
            'id'=>286,
            'curso_id'=>206,
            'profesor_id'=>207,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
            'p1_1'=>'100',
            'p1_2'=>'100',
            'p1_3'=>'100',
            'p1_4'=>'100',
            'p1_5'=>'100',
            'p2_1'=>'100',
            'p2_2'=>'100',
            'p2_3'=>'100',
            'p2_4'=>'100',
            'p3_1'=>'80',
            'p3_2'=>'80',
            'p3_3'=>'60',
            'p3_4'=>'95',
            'p7'=>1,
            'p8'=>'["2"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'El desarrollo',
            'sug'=>'Que tengan los equipos con los programas ya instalados',
            'p4_1'=>'100',
            'p4_2'=>'100',
            'p4_3'=>'100',
            'p4_4'=>'100',
            'p4_5'=>'100',
            'p4_6'=>'100',
            'p4_7'=>'100',
            'p4_8'=>'100',
            'p4_9'=>'100',
            'p4_10'=>'100',
            'p4_11'=>'100',
            'otros'=>'Otros',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>206,
            'participante_curso_id'=>286
        ]);

        DB::table('profesors')->insert([
            'id'=>291,
            'nombres'=>'Ignacio',
            'apellido_paterno'=>'Cueva',
            'apellido_materno'=>'Guitron',
            'rfc'=>'CUGI010101345',
            'curp' =>'CUGI010101HDFVTG03',
            'numero_trabajador' => '12345658',
            'fecha_nacimiento'=>'1901-01-01'
        ]);

        DB::table('participante_curso')->insert([
            'id'=>287,
            'curso_id'=>206,
            'profesor_id'=>291,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
            'p1_1'=>'100',
            'p1_2'=>'100',
            'p1_3'=>'100',
            'p1_4'=>'100',
            'p1_5'=>'100',
            'p2_1'=>'100',
            'p2_2'=>'100',
            'p2_3'=>'100',
            'p2_4'=>'100',
            'p3_1'=>'100',
            'p3_2'=>'100',
            'p3_3'=>'100',
            'p3_4'=>'100',
            'p7'=>1,
            'p8'=>'["1"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'Todo el curso se desarrolló de manera clara y en realidad la maestra Alejandra explicó de manera muy clara y muy atenta a cualquier duda',
            'sug'=>'Me gustaría que se pudiera continuar con una segunda parte del curso y claro inscribirme para seguir practicando y aprendiendo el lenguaje de programación',
            'p4_1'=>'100',
            'p4_2'=>'100',
            'p4_3'=>'100',
            'p4_4'=>'100',
            'p4_5'=>'100',
            'p4_6'=>'100',
            'p4_7'=>'100',
            'p4_8'=>'100',
            'p4_9'=>'100',
            'p4_10'=>'100',
            'p4_11'=>'100',
            'otros'=>'Otros',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>206,
            'participante_curso_id'=>287
        ]);

        DB::table('profesors')->insert([
            'id'=>292,
            'nombres'=>'Luis Humberto',
            'apellido_paterno'=>'Diaz',
            'apellido_materno'=>'Trueba',
            'rfc'=>'DITL010101GK3',
            'curp' =>'DITL010101HDFZRS06',
            'numero_trabajador' => '12345659',
            'fecha_nacimiento'=>'1901-01-01'
        ]);

        DB::table('participante_curso')->insert([
            'id'=>288,
            'curso_id'=>206,
            'profesor_id'=>292,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
            'p1_1'=>'100',
            'p1_2'=>'100',
            'p1_3'=>'100',
            'p1_4'=>'100',
            'p1_5'=>'100',
            'p2_1'=>'100',
            'p2_2'=>'100',
            'p2_3'=>'100',
            'p2_4'=>'100',
            'p3_1'=>'100',
            'p3_2'=>'100',
            'p3_3'=>'100',
            'p3_4'=>'100',
            'p7'=>1,
            'p8'=>'[""]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'Todo, a pesar de ser un curso corto, fue muy bien planeado',
            'sug'=>'Curso intermedio',
            'p4_1'=>'100',
            'p4_2'=>'100',
            'p4_3'=>'100',
            'p4_4'=>'100',
            'p4_5'=>'100',
            'p4_6'=>'100',
            'p4_7'=>'100',
            'p4_8'=>'100',
            'p4_9'=>'100',
            'p4_10'=>'100',
            'p4_11'=>'100',
            'otros'=>'Otros',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>206,
            'participante_curso_id'=>288
        ]);

        DB::table('profesors')->insert([
            'id'=>293,
            'nombres'=>'Wulfrano',
            'apellido_paterno'=>'Gomez',
            'apellido_materno'=>'Gallardo',
            'rfc'=>'GOGW0101014Y8',
            'curp' =>'GOGW010101HDFMLL09',
            'numero_trabajador' => '12345660',
            'fecha_nacimiento'=>'1901-01-01'
        ]);

        DB::table('participante_curso')->insert([
            'id'=>289,
            'curso_id'=>206,
            'profesor_id'=>293,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
            'p1_1'=>'100',
            'p1_2'=>'100',
            'p1_3'=>'100',
            'p1_4'=>'100',
            'p1_5'=>'100',
            'p2_1'=>'100',
            'p2_2'=>'100',
            'p2_3'=>'100',
            'p2_4'=>'100',
            'p3_1'=>'100',
            'p3_2'=>'100',
            'p3_3'=>'100',
            'p3_4'=>'100',
            'p7'=>1,
            'p8'=>'["2"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'Los hints',
            'sug'=>'Curso bien estructurado',
            'p4_1'=>'100',
            'p4_2'=>'100',
            'p4_3'=>'100',
            'p4_4'=>'100',
            'p4_5'=>'100',
            'p4_6'=>'100',
            'p4_7'=>'100',
            'p4_8'=>'100',
            'p4_9'=>'100',
            'p4_10'=>'100',
            'p4_11'=>'100',
            'otros'=>'Otros',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>206,
            'participante_curso_id'=>289
        ]);

        DB::table('profesors')->insert([
            'id'=>294,
            'nombres'=>'Miguel Eduardo',
            'apellido_paterno'=>'Gonzalez',
            'apellido_materno'=>'Cardenas',
            'rfc'=>'GOCM010101BD9',
            'curp' =>'GOCM010101HDFNRG00',
            'numero_trabajador' => '12345661',
            'fecha_nacimiento'=>'1901-01-01'
        ]);

        DB::table('participante_curso')->insert([
            'id'=>290,
            'curso_id'=>206,
            'profesor_id'=>294,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
            'p1_1'=>'100',
            'p1_2'=>'100',
            'p1_3'=>'100',
            'p1_4'=>'100',
            'p1_5'=>'0',
            'p2_1'=>'100',
            'p2_2'=>'100',
            'p2_3'=>'100',
            'p2_4'=>'100',
            'p3_1'=>'100',
            'p3_2'=>'100',
            'p3_3'=>'60',
            'p3_4'=>'100',
            'p7'=>1,
            'p8'=>'["1"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'Todo',
            'sug'=>'Aumentar el número de horas',
            'p4_1'=>'100',
            'p4_2'=>'100',
            'p4_3'=>'100',
            'p4_4'=>'100',
            'p4_5'=>'100',
            'p4_6'=>'100',
            'p4_7'=>'100',
            'p4_8'=>'100',
            'p4_9'=>'100',
            'p4_10'=>'100',
            'p4_11'=>'100',
            'otros'=>'Otros',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>206,
            'participante_curso_id'=>290
        ]);

        DB::table('profesors')->insert([
            'id'=>295,
            'nombres'=>'Gabriela Betzabe',
            'apellido_paterno'=>'Lizarraga',
            'apellido_materno'=>'Ramirez',
            'rfc'=>'LIRG0101014H2',
            'curp' =>'LIRG010101MDFZMB07',
            'numero_trabajador' => '12345662',
            'fecha_nacimiento'=>'1901-01-01'
        ]);

        DB::table('participante_curso')->insert([
            'id'=>291,
            'curso_id'=>206,
            'profesor_id'=>295,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
            'p1_1'=>'100',
            'p1_2'=>'100',
            'p1_3'=>'100',
            'p1_4'=>'100',
            'p1_5'=>'100',
            'p2_1'=>'100',
            'p2_2'=>'100',
            'p2_3'=>'100',
            'p2_4'=>'95',
            'p3_1'=>'100',
            'p3_2'=>'100',
            'p3_3'=>'100',
            'p3_4'=>'100',
            'p7'=>1,
            'p8'=>'["2"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'La coordinación del Profesor Gabriel, el video de seguridad, la Instrucción de la Profesora Ale (excelente)',
            'sug'=>'Sugiero que a los instructores les soliciten terminar 5 minutos antes del curso, para la foto',
            'p4_1'=>'100',
            'p4_2'=>'100',
            'p4_3'=>'100',
            'p4_4'=>'100',
            'p4_5'=>'100',
            'p4_6'=>'100',
            'p4_7'=>'100',
            'p4_8'=>'100',
            'p4_9'=>'100',
            'p4_10'=>'100',
            'p4_11'=>'100',
            'otros'=>'Otros',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>206,
            'participante_curso_id'=>291
        ]);

        DB::table('profesors')->insert([
            'id'=>296,
            'nombres'=>'Jacquelyn',
            'apellido_paterno'=>'Martinez',
            'apellido_materno'=>'Alavez',
            'rfc'=>'MAAJ010101LW5',
            'curp' =>'MAAJ010101MDFRLC09',
            'numero_trabajador' => '12345663',
            'fecha_nacimiento'=>'1901-01-01'
        ]);

        DB::table('participante_curso')->insert([
            'id'=>292,
            'curso_id'=>206,
            'profesor_id'=>296,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
            'p1_1'=>'100',
            'p1_2'=>'100',
            'p1_3'=>'100',
            'p1_4'=>'100',
            'p1_5'=>'100',
            'p2_1'=>'80',
            'p2_2'=>'100',
            'p2_3'=>'100',
            'p2_4'=>'100',
            'p3_1'=>'100',
            'p3_2'=>'100',
            'p3_3'=>'100',
            'p3_4'=>'95',
            'p7'=>1,
            'p8'=>'["2"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'La explicación detallada sobre el código a desarrollar',
            'sug'=>'Gracias por las explicaciones detalladas sobre el contenido del curso',
            'p4_1'=>'100',
            'p4_2'=>'100',
            'p4_3'=>'100',
            'p4_4'=>'100',
            'p4_5'=>'100',
            'p4_6'=>'100',
            'p4_7'=>'100',
            'p4_8'=>'100',
            'p4_9'=>'100',
            'p4_10'=>'100',
            'p4_11'=>'100',
            'otros'=>'Otros',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>206,
            'participante_curso_id'=>292
        ]);

        DB::table('profesors')->insert([
            'id'=>297,
            'nombres'=>'Lazaro',
            'apellido_paterno'=>'Morales',
            'apellido_materno'=>'Acosta',
            'rfc'=>'MOAL0101017NA',
            'curp' =>'MOAL010101HDFRCZ08',
            'numero_trabajador' => '12345664',
            'fecha_nacimiento'=>'1901-01-01'
        ]);

        DB::table('participante_curso')->insert([
            'id'=>293,
            'curso_id'=>206,
            'profesor_id'=>297,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
            'p1_1'=>'95',
            'p1_2'=>'100',
            'p1_3'=>'100',
            'p1_4'=>'95',
            'p1_5'=>'100',
            'p2_1'=>'95',
            'p2_2'=>'100',
            'p2_3'=>'100',
            'p2_4'=>'100',
            'p3_1'=>'95',
            'p3_2'=>'95',
            'p3_3'=>'95',
            'p3_4'=>'95',
            'p7'=>1,
            'p8'=>'["2"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'El material proporcionado esta acorde al contenido',
            'sug'=>'Cuidar que los equipo de cómputo estén preparados',
            'p4_1'=>'95',
            'p4_2'=>'95',
            'p4_3'=>'100',
            'p4_4'=>'100',
            'p4_5'=>'95',
            'p4_6'=>'100',
            'p4_7'=>'100',
            'p4_8'=>'100',
            'p4_9'=>'100',
            'p4_10'=>'100',
            'p4_11'=>'100',
            'otros'=>'Otros',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>206,
            'participante_curso_id'=>293
        ]);

        DB::table('profesors')->insert([
            'id'=>298,
            'nombres'=>'Genaro',
            'apellido_paterno'=>'Muñoz',
            'apellido_materno'=>'Hernandez',
            'rfc'=>'MUHG0101018F1',
            'curp' =>'MUHG010101HDF&RN04',
            'numero_trabajador' => '12345665',
            'fecha_nacimiento'=>'1901-01-01'
        ]);

        DB::table('participante_curso')->insert([
            'id'=>294,
            'curso_id'=>206,
            'profesor_id'=>298,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
            'p1_1'=>'100',
            'p1_2'=>'100',
            'p1_3'=>'100',
            'p1_4'=>'100',
            'p1_5'=>'100',
            'p2_1'=>'95',
            'p2_2'=>'95',
            'p2_3'=>'100',
            'p2_4'=>'100',
            'p3_1'=>'100',
            'p3_2'=>'100',
            'p3_3'=>'95',
            'p3_4'=>'95',
            'p7'=>1,
            'p8'=>'["2"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'Todo excelente',
            'sug'=>'Todo bien',
            'p4_1'=>'100',
            'p4_2'=>'100',
            'p4_3'=>'100',
            'p4_4'=>'100',
            'p4_5'=>'100',
            'p4_6'=>'100',
            'p4_7'=>'100',
            'p4_8'=>'100',
            'p4_9'=>'100',
            'p4_10'=>'100',
            'p4_11'=>'100',
            'otros'=>'Otros',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>206,
            'participante_curso_id'=>294
        ]);

        DB::table('profesors')->insert([
            'id'=>299,
            'nombres'=>'Nikte Norma',
            'apellido_paterno'=>'Ocampo',
            'apellido_materno'=>'Guerrero',
            'rfc'=>'OAGN0101017NA',
            'curp' =>'OAGN010101MDFCRK07',
            'numero_trabajador' => '12345666',
            'fecha_nacimiento'=>'1901-01-01'
        ]);

        DB::table('participante_curso')->insert([
            'id'=>295,
            'curso_id'=>206,
            'profesor_id'=>299,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
            'p1_1'=>'100',
            'p1_2'=>'100',
            'p1_3'=>'100',
            'p1_4'=>'100',
            'p1_5'=>'100',
            'p2_1'=>'95',
            'p2_2'=>'95',
            'p2_3'=>'100',
            'p2_4'=>'100',
            'p3_1'=>'100',
            'p3_2'=>'100',
            'p3_3'=>'95',
            'p3_4'=>'95',
            'p7'=>1,
            'p8'=>'["2"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'El abordaje de los temas paso a paso',
            'sug'=>'-',
            'p4_1'=>'100',
            'p4_2'=>'100',
            'p4_3'=>'100',
            'p4_4'=>'100',
            'p4_5'=>'100',
            'p4_6'=>'100',
            'p4_7'=>'100',
            'p4_8'=>'100',
            'p4_9'=>'100',
            'p4_10'=>'100',
            'p4_11'=>'100',
            'otros'=>'Otros',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>206,
            'participante_curso_id'=>295
        ]);

        DB::table('profesors')->insert([
            'id'=>300,
            'nombres'=>'David',
            'apellido_paterno'=>'Palomino',
            'apellido_materno'=>'Merino',
            'rfc'=>'PAMD010101LE7',
            'curp' =>'PAMD010101HDFLRV02',
            'numero_trabajador' => '12345667',
            'fecha_nacimiento'=>'1901-01-01'
        ]);

        DB::table('participante_curso')->insert([
            'id'=>296,
            'curso_id'=>206,
            'profesor_id'=>300,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);

        DB::table('profesors')->insert([
            'id'=>301,
            'nombres'=>'Francisco Javier',
            'apellido_paterno'=>'Reyes',
            'apellido_materno'=>'Zarate',
            'rfc'=>'REZF0101011U5',
            'curp' =>'REZF010101HDFYRR06',
            'numero_trabajador' => '12345668',
            'fecha_nacimiento'=>'1901-01-01'
        ]);

        DB::table('participante_curso')->insert([
            'id'=>297,
            'curso_id'=>206,
            'profesor_id'=>301,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);

        DB::table('profesors')->insert([
            'id'=>302,
            'nombres'=>'Esther',
            'apellido_paterno'=>'Segura',
            'apellido_materno'=>'Perez',
            'rfc'=>'SEPE010101L55',
            'curp' =>'	SEPE010101MDFGRS05',
            'numero_trabajador' => '12345669',
            'fecha_nacimiento'=>'1901-01-01'
        ]);

        DB::table('participante_curso')->insert([
            'id'=>298,
            'curso_id'=>206,
            'profesor_id'=>302,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
                    'p1_1'=>'100',
                    'p1_2'=>'100',
                    'p1_3'=>'100',
                    'p1_4'=>'100',
                    'p1_5'=>'100',
                    'p2_1'=>'95',
                    'p2_2'=>'95',
                    'p2_3'=>'100',
                    'p2_4'=>'100',
                    'p3_1'=>'80',
                    'p3_2'=>'80',
                    'p3_3'=>'95',
                    'p3_4'=>'100',
                    'p7'=>1,
                    'p8'=>'["2"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
                    'mejor'=>'El aprendizaje obteniddo, da pie a cursos más especializados de R',
                    'sug'=>'Enviar todo el material del curso a utilizar a principios y de ser posible con un día o ddos dde anticipación',
                    'p4_1'=>'95',
                    'p4_2'=>'100',
                    'p4_3'=>'100',
                    'p4_4'=>'95',
                    'p4_5'=>'100',
                    'p4_6'=>'100',
                    'p4_7'=>'100',
                    'p4_8'=>'100',
                    'p4_9'=>'100',
                    'p4_10'=>'100',
                    'p4_11'=>'100',
                    'otros'=>'Otros',
                    'conocimiento'=>'["1"]',
                    'tematica'=>'tematica',
                    'horarios'=>'9:00-13:00',
                    'horarioi'=>'13:00-15:00',
                    'curso_id'=>206,
                    'participante_curso_id'=>298
                ]);

        DB::table('participante_curso')->insert([
                    'id'=>299,
                    'curso_id'=>206,
                    'profesor_id'=>286,
                    'asistencia'=>true,
                    'acreditacion'=>true
                ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
                            'p1_1'=>'100',
                            'p1_2'=>'100',
                            'p1_3'=>'100',
                            'p1_4'=>'100',
                            'p1_5'=>'100',
                            'p2_1'=>'100',
                            'p2_2'=>'80',
                            'p2_3'=>'95',
                            'p2_4'=>'100',
                            'p3_1'=>'100',
                            'p3_2'=>'100',
                            'p3_3'=>'100',
                            'p3_4'=>'100',
                            'p7'=>1,
                            'p8'=>'["2"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
                            'mejor'=>'Todos los temas',
                            'sug'=>'Impartir la segunda parte',
                            'p4_1'=>'100',
                            'p4_2'=>'100',
                            'p4_3'=>'100',
                            'p4_4'=>'100',
                            'p4_5'=>'100',
                            'p4_6'=>'100',
                            'p4_7'=>'100',
                            'p4_8'=>'100',
                            'p4_9'=>'100',
                            'p4_10'=>'100',
                            'p4_11'=>'100',
                            'otros'=>'Otros',
                            'conocimiento'=>'["1"]',
                            'tematica'=>'tematica',
                            'horarios'=>'9:00-13:00',
                            'horarioi'=>'13:00-15:00',
                            'curso_id'=>206,
                            'participante_curso_id'=>299
                        ]);

        DB::table('participante_curso')->insert([
                            'id'=>300,
                            'curso_id'=>206,
                            'profesor_id'=>226,
                            'asistencia'=>true,
                            'acreditacion'=>true
                        ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
                                    'p1_1'=>'100',
                                    'p1_2'=>'100',
                                    'p1_3'=>'100',
                                    'p1_4'=>'100',
                                    'p1_5'=>'100',
                                    'p2_1'=>'95',
                                    'p2_2'=>'100',
                                    'p2_3'=>'100',
                                    'p2_4'=>'100',
                                    'p3_1'=>'100',
                                    'p3_2'=>'100',
                                    'p3_3'=>'100',
                                    'p3_4'=>'100',
                                    'p7'=>1,
                                    'p8'=>'["1"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
                                    'mejor'=>'La forma en que organizó el curso la profesora para ir comprenddienddo los conceptos paso a paso',
                                    'sug'=>'Ninguna, felicidades',
                                    'p4_1'=>'100',
                                    'p4_2'=>'100',
                                    'p4_3'=>'100',
                                    'p4_4'=>'100',
                                    'p4_5'=>'100',
                                    'p4_6'=>'100',
                                    'p4_7'=>'100',
                                    'p4_8'=>'100',
                                    'p4_9'=>'100',
                                    'p4_10'=>'100',
                                    'p4_11'=>'100',
                                    'otros'=>'Otros',
                                    'conocimiento'=>'["1"]',
                                    'tematica'=>'tematica',
                                    'horarios'=>'9:00-13:00',
                                    'horarioi'=>'13:00-15:00',
                                    'curso_id'=>206,
                                    'participante_curso_id'=>300
                                ]);

        //Modulos de diplomados
        //coordinacion: 202

        DB::table('catalogo_cursos')->insert([
            'id'=> 207,
            'nombre_curso'=>'Módulo 1. La educación como fundamento del desarrollo humano',
            'duracion_curso' => '20',
            'coordinacion_id' => 202,
            'tipo' => 'C',
            'institucion' => 'DGAPA',
            'fecha_disenio'=>'2012-12-12',
            'coordinacion_id'=>2,
            'clave_curso'=>'MLEFDHDGAPA'
        ]);
        
        DB::table('cursos')->insert([
            'id'=>207,
            'semestre_anio'=>2020,
            'semestre_pi'=>'1',
            'semestre_si'=>'s',
            'fecha_inicio' => '2018-05-20',
            'fecha_fin' => '2018-05-30',
            'hora_inicio' => '14:00',
            'hora_fin' => '16:00',
            'dias_semana' => 'Lunes,Miércoles',
            'numero_sesiones' => 10,
            'texto_diploma' => 'Texto diploma',
            'costo' => 2000,
            'cupo_maximo' => 20,
            'cupo_minimo' => 5,
            'catalogo_id' => 207,
            'salon_id' => 1
        ]);

        //Instructor
        DB::table('profesors')->insert([
            'id'=>303,
            'nombres'=>'Marcos Evencio',
            'apellido_paterno'=>'Verdejo',
            'apellido_materno'=>'Manzano',
            'rfc'=>'VEMM010101135',
            'curp' =>'VEMM010101HDFRNR08',
            'numero_trabajador' => '12345700',
            'fecha_nacimiento'=>'1901-01-01'
        ]);
        //Participantes
        DB::table('profesors')->insert([
            'id'=>304,
            'nombres'=>'Anayantzin',
            'apellido_paterno'=>'Almanza',
            'apellido_materno'=>'Valdez',
            'rfc'=>'AAVA0101017D3',
            'curp' =>'AAVA010101MDFLLN00',
            'numero_trabajador' => '12345701',
            'fecha_nacimiento'=>'1901-01-01'
        ]);
        DB::table('participante_curso')->insert([
            'id'=>301,
            'curso_id'=>207,
            'profesor_id'=>304,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
                    'p1_1'=>'95',
                    'p1_2'=>'95',
                    'p1_3'=>'95',
                    'p1_4'=>'95',
                    'p1_5'=>'95',
                    'p2_1'=>'95',
                    'p2_2'=>'95',
                    'p2_3'=>'95',
                    'p2_4'=>'95',
                    'p3_1'=>'95',
                    'p3_2'=>'95',
                    'p3_3'=>'95',
                    'p3_4'=>'95',
                    'p7'=>1,
                    'p8'=>'["4","Otro profesor"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
                    'mejor'=>'Aprendí cosas nuevas que aunque en un principio me costaban trabajo, perserveré y con la práctica en la siguiente sesión, comentándolo con los [...]',
                    'sug'=>'-',
                    'p4_1'=>'95',
                    'p4_2'=>'95',
                    'p4_3'=>'95',
                    'p4_4'=>'95',
                    'p4_5'=>'95',
                    'p4_6'=>'95',
                    'p4_7'=>'95',
                    'p4_8'=>'95',
                    'p4_9'=>'95',
                    'p4_10'=>'95',
                    'p4_11'=>'95',
                    'otros'=>'Otros',
                    'conocimiento'=>'["1"]',
                    'tematica'=>'tematica',
                    'horarios'=>'9:00-13:00',
                    'horarioi'=>'13:00-15:00',
                    'curso_id'=>207,
                    'participante_curso_id'=>301
                ]);

        DB::table('profesors')->insert([
                    'id'=>305,
                    'nombres'=>'Angel Francisco',
                    'apellido_paterno'=>'Alvarez',
                    'apellido_materno'=>'Herrera',
                    'rfc'=>'AAHA010101E32',
                    'curp' =>'AAHA010101HDFLRN02',
                    'numero_trabajador' => '12345702',
                    'fecha_nacimiento'=>'1901-01-01'
                ]);
        DB::table('participante_curso')->insert([
                    'id'=>302,
                    'curso_id'=>207,
                    'profesor_id'=>305,
                    'asistencia'=>true,
                    'acreditacion'=>true
                ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
                            'p1_1'=>'100',
                            'p1_2'=>'100',
                            'p1_3'=>'100',
                            'p1_4'=>'100',
                            'p1_5'=>'100',
                            'p2_1'=>'100',
                            'p2_2'=>'95',
                            'p2_3'=>'100',
                            'p2_4'=>'100',
                            'p3_1'=>'100',
                            'p3_2'=>'100',
                            'p3_3'=>'100',
                            'p3_4'=>'100',
                            'p7'=>1,
                            'p8'=>'["4","Gaceta UNAM"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
                            'mejor'=>'La experiencia que me llevo sobre los temas abordados',
                            'sug'=>'-',
                            'p4_1'=>'100',
                            'p4_2'=>'100',
                            'p4_3'=>'100',
                            'p4_4'=>'100',
                            'p4_5'=>'100',
                            'p4_6'=>'100',
                            'p4_7'=>'100',
                            'p4_8'=>'100',
                            'p4_9'=>'100',
                            'p4_10'=>'100',
                            'p4_11'=>'100',
                            'otros'=>'Otros',
                            'conocimiento'=>'["1"]',
                            'tematica'=>'tematica',
                            'horarios'=>'9:00-13:00',
                            'horarioi'=>'13:00-15:00',
                            'curso_id'=>207,
                            'participante_curso_id'=>302
                        ]);
        DB::table('profesors')->insert([
                            'id'=>306,
                            'nombres'=>'German Ramon',
                            'apellido_paterno'=>'Arconada',
                            'apellido_materno'=>'Rey',
                            'rfc'=>'AORG0101012R1',
                            'curp' =>'AORG010101HDFRYR03',
                            'numero_trabajador' => '12345703',
                            'fecha_nacimiento'=>'1901-01-01'
                        ]);
        DB::table('participante_curso')->insert([
                            'id'=>303,
                            'curso_id'=>207,
                            'profesor_id'=>306,
                            'asistencia'=>true,
                            'acreditacion'=>true
                        ]);
        DB::table('profesors')->insert([
                            'id'=>307,
                            'nombres'=>'Neftali',
                            'apellido_paterno'=>'Elorza',
                            'apellido_materno'=>'Lopez',
                            'rfc'=>'EOLN010101RRA',
                            'curp' =>'EOLN010101HDFLPF08',
                            'numero_trabajador' => '12345704',
                            'fecha_nacimiento'=>'1901-01-01'
                        ]);
        DB::table('participante_curso')->insert([
                            'id'=>304,
                            'curso_id'=>207,
                            'profesor_id'=>307,
                            'asistencia'=>true,
                            'acreditacion'=>true
                        ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
                                    'p1_1'=>'100',
                                    'p1_2'=>'100',
                                    'p1_3'=>'100',
                                    'p1_4'=>'100',
                                    'p1_5'=>'100',
                                    'p2_1'=>'100',
                                    'p2_2'=>'100',
                                    'p2_3'=>'100',
                                    'p2_4'=>'100',
                                    'p3_1'=>'100',
                                    'p3_2'=>'100',
                                    'p3_3'=>'100',
                                    'p3_4'=>'100',
                                    'p7'=>1,
                                    'p8'=>'[""]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
                                    'mejor'=>'La forma de tratar el humanismo en la perspectiva del docente',
                                    'sug'=>'Todo excelente',
                                    'p4_1'=>'100',
                                    'p4_2'=>'100',
                                    'p4_3'=>'100',
                                    'p4_4'=>'100',
                                    'p4_5'=>'100',
                                    'p4_6'=>'100',
                                    'p4_7'=>'100',
                                    'p4_8'=>'100',
                                    'p4_9'=>'100',
                                    'p4_10'=>'100',
                                    'p4_11'=>'100',
                                    'otros'=>'Otros',
                                    'conocimiento'=>'["1"]',
                                    'tematica'=>'tematica',
                                    'horarios'=>'9:00-13:00',
                                    'horarioi'=>'13:00-15:00',
                                    'curso_id'=>207,
                                    'participante_curso_id'=>304
                                ]);
        DB::table('profesors')->insert([
                                    'id'=>308,
                                    'nombres'=>'Gaspar',
                                    'apellido_paterno'=>'Franco',
                                    'apellido_materno'=>'Hernandez',
                                    'rfc'=>'FAHG010101RI3',
                                    'curp' =>'FAHG010101HDFRRS09',
                                    'numero_trabajador' => '12345705',
                                    'fecha_nacimiento'=>'1901-01-01'
                                ]);
        DB::table('participante_curso')->insert([
                                    'id'=>305,
                                    'curso_id'=>207,
                                    'profesor_id'=>308,
                                    'asistencia'=>true,
                                    'acreditacion'=>true
                                ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
                                            'p1_1'=>'100',
                                            'p1_2'=>'100',
                                            'p1_3'=>'95',
                                            'p1_4'=>'100',
                                            'p1_5'=>'100',
                                            'p2_1'=>'100',
                                            'p2_2'=>'95',
                                            'p2_3'=>'100',
                                            'p2_4'=>'95',
                                            'p3_1'=>'100',
                                            'p3_2'=>'100',
                                            'p3_3'=>'100',
                                            'p3_4'=>'100',
                                            'p7'=>1,
                                            'p8'=>'["2"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
                                            'mejor'=>'Le puse nombre y apellido a mi forma de enseñar',
                                            'sug'=>'-',
                                            'p4_1'=>'100',
                                            'p4_2'=>'95',
                                            'p4_3'=>'95',
                                            'p4_4'=>'100',
                                            'p4_5'=>'100',
                                            'p4_6'=>'100',
                                            'p4_7'=>'100',
                                            'p4_8'=>'100',
                                            'p4_9'=>'100',
                                            'p4_10'=>'100',
                                            'p4_11'=>'100',
                                            'otros'=>'Otros',
                                            'conocimiento'=>'["1"]',
                                            'tematica'=>'tematica',
                                            'horarios'=>'9:00-13:00',
                                            'horarioi'=>'13:00-15:00',
                                            'curso_id'=>207,
                                            'participante_curso_id'=>305
                                        ]);
        DB::table('profesors')->insert([
    'id'=>309,
    'nombres'=>'Mario',
    'apellido_paterno'=>'Galvan',
    'apellido_materno'=>'Tapia',
    'rfc'=>'GATM010101GH1',
    'curp' =>'GATM010101HDFLPR09',
    'numero_trabajador' => '12345706',
    'fecha_nacimiento'=>'1901-01-01'
    ]);
        DB::table('participante_curso')->insert([
    'id'=>306,
    'curso_id'=>207,
    'profesor_id'=>309,
    'asistencia'=>true,
    'acreditacion'=>true
    ]);
        DB::table('participante_curso')->insert([
    'id'=>307,
    'curso_id'=>207,
    'profesor_id'=>276,
    'asistencia'=>true,
    'acreditacion'=>true
    ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
        'p1_1'=>'95',
        'p1_2'=>'95',
        'p1_3'=>'95',
        'p1_4'=>'95',
        'p1_5'=>'95',
        'p2_1'=>'95',
        'p2_2'=>'80',
        'p2_3'=>'95',
        'p2_4'=>'95',
        'p3_1'=>'100',
        'p3_2'=>'100',
        'p3_3'=>'100',
        'p3_4'=>'100',
        'p7'=>1,
        'p8'=>'["2"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
        'mejor'=>'Conocer e identificar las deferentes teorías del desarrollo humano',
        'sug'=>'-',
        'p4_1'=>'95',
        'p4_2'=>'95',
        'p4_3'=>'95',
        'p4_4'=>'95',
        'p4_5'=>'95',
        'p4_6'=>'95',
        'p4_7'=>'95',
        'p4_8'=>'95',
        'p4_9'=>'95',
        'p4_10'=>'95',
        'p4_11'=>'95',
        'otros'=>'Otros',
        'conocimiento'=>'["1"]',
        'tematica'=>'tematica',
        'horarios'=>'9:00-13:00',
        'horarioi'=>'13:00-15:00',
        'curso_id'=>207,
        'participante_curso_id'=>307
    ]);

        DB::table('profesors')->insert([
        'id'=>310,
        'nombres'=>'Griselda Berenice',
        'apellido_paterno'=>'Hernandez',
        'apellido_materno'=>'Cruz',
        'rfc'=>'HECG0101012N8',
        'curp' =>'HECG010101MDFRRR08',
        'numero_trabajador' => '12345707',
        'fecha_nacimiento'=>'1901-01-01'
        ]);
        DB::table('participante_curso')->insert([
    'id'=>308,
    'curso_id'=>207,
    'profesor_id'=>310,
    'asistencia'=>true,
    'acreditacion'=>true
    ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
    'p1_1'=>'95',
    'p1_2'=>'95',
    'p1_3'=>'100',
    'p1_4'=>'95',
    'p1_5'=>'100',
    'p2_1'=>'100',
    'p2_2'=>'95',
    'p2_3'=>'95',
    'p2_4'=>'100',
    'p3_1'=>'100',
    'p3_2'=>'100',
    'p3_3'=>'100',
    'p3_4'=>'100',
    'p7'=>1,
    'p8'=>'["2"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
    'mejor'=>'El marco conceptual del humanismo',
    'sug'=>'-',
    'p4_1'=>'95',
    'p4_2'=>'95',
    'p4_3'=>'100',
    'p4_4'=>'80',
    'p4_5'=>'80',
    'p4_6'=>'80',
    'p4_7'=>'95',
    'p4_8'=>'100',
    'p4_9'=>'95',
    'p4_10'=>'100',
    'p4_11'=>'95',
    'otros'=>'Otros',
    'conocimiento'=>'["1"]',
    'tematica'=>'tematica',
    'horarios'=>'9:00-13:00',
    'horarioi'=>'13:00-15:00',
    'curso_id'=>207,
    'participante_curso_id'=>308
    ]);

        DB::table('participante_curso')->insert([
        'id'=>309,
        'curso_id'=>207,
        'profesor_id'=>278,
        'asistencia'=>true,
        'acreditacion'=>true
        ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
        'p1_1'=>'100',
        'p1_2'=>'100',
        'p1_3'=>'100',
        'p1_4'=>'100',
        'p1_5'=>'100',
        'p2_1'=>'100',
        'p2_2'=>'100',
        'p2_3'=>'100',
        'p2_4'=>'100',
        'p3_1'=>'100',
        'p3_2'=>'100',
        'p3_3'=>'95',
        'p3_4'=>'100',
        'p7'=>1,
        'p8'=>'["2"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
        'mejor'=>'La aplicación dde las Teorías de Psicología del Aprendizaje',
        'sug'=>'-',
        'p4_1'=>'100',
        'p4_2'=>'100',
        'p4_3'=>'100',
        'p4_4'=>'100',
        'p4_5'=>'100',
        'p4_6'=>'100',
        'p4_7'=>'100',
        'p4_8'=>'100',
        'p4_9'=>'100',
        'p4_10'=>'100',
        'p4_11'=>'100',
        'otros'=>'Otros',
        'conocimiento'=>'["1"]',
        'tematica'=>'tematica',
        'horarios'=>'9:00-13:00',
        'horarioi'=>'13:00-15:00',
        'curso_id'=>207,
        'participante_curso_id'=>309
        ]);

        DB::table('profesors')->insert([
            'id'=>311,
            'nombres'=>'Lucia Yazmin',
            'apellido_paterno'=>'Juarez',
            'apellido_materno'=>'De la Mora',
            'rfc'=>'JUML010101AN1',
            'curp' =>'JUML010101MDFRRC06',
            'numero_trabajador' => '12345708',
            'fecha_nacimiento'=>'1901-01-01'
            ]);
        DB::table('participante_curso')->insert([
        'id'=>310,
        'curso_id'=>207,
        'profesor_id'=>311,
        'asistencia'=>true,
        'acreditacion'=>true
        ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
        'p1_1'=>'100',
        'p1_2'=>'100',
        'p1_3'=>'100',
        'p1_4'=>'100',
        'p1_5'=>'100',
        'p2_1'=>'100',
        'p2_2'=>'100',
        'p2_3'=>'100',
        'p2_4'=>'100',
        'p3_1'=>'100',
        'p3_2'=>'100',
        'p3_3'=>'100',
        'p3_4'=>'100',
        'p7'=>1,
        'p8'=>'["2"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
        'mejor'=>'-',
        'sug'=>'-',
        'p4_1'=>'100',
        'p4_2'=>'100',
        'p4_3'=>'100',
        'p4_4'=>'100',
        'p4_5'=>'100',
        'p4_6'=>'100',
        'p4_7'=>'100',
        'p4_8'=>'100',
        'p4_9'=>'100',
        'p4_10'=>'100',
        'p4_11'=>'100',
        'otros'=>'Otros',
        'conocimiento'=>'["1"]',
        'tematica'=>'tematica',
        'horarios'=>'9:00-13:00',
        'horarioi'=>'13:00-15:00',
        'curso_id'=>207,
        'participante_curso_id'=>310
        ]);

        DB::table('participante_curso')->insert([
        'id'=>311,
        'curso_id'=>207,
        'profesor_id'=>264,
        'asistencia'=>true,
        'acreditacion'=>true
        ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
        'p1_1'=>'100',
        'p1_2'=>'100',
        'p1_3'=>'100',
        'p1_4'=>'100',
        'p1_5'=>'100',
        'p2_1'=>'100',
        'p2_2'=>'100',
        'p2_3'=>'100',
        'p2_4'=>'100',
        'p3_1'=>'100',
        'p3_2'=>'100',
        'p3_3'=>'100',
        'p3_4'=>'100',
        'p7'=>1,
        'p8'=>'["2"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
        'mejor'=>'La presencia del proceso de enseñanza aprendizaje',
        'sug'=>'-',
        'p4_1'=>'100',
        'p4_2'=>'100',
        'p4_3'=>'100',
        'p4_4'=>'100',
        'p4_5'=>'100',
        'p4_6'=>'100',
        'p4_7'=>'100',
        'p4_8'=>'100',
        'p4_9'=>'100',
        'p4_10'=>'100',
        'p4_11'=>'100',
        'otros'=>'Otros',
        'conocimiento'=>'["1"]',
        'tematica'=>'tematica',
        'horarios'=>'9:00-13:00',
        'horarioi'=>'13:00-15:00',
        'curso_id'=>207,
        'participante_curso_id'=>311
        ]);
        DB::table('profesors')->insert([
            'id'=>312,
            'nombres'=>'Miriam Graciela',
            'apellido_paterno'=>'Mendoza',
            'apellido_materno'=>'Cano',
            'rfc'=>'MECM010101DJ1',
            'curp' =>'MECM010101MDFNNR03',
            'numero_trabajador' => '12345709',
            'fecha_nacimiento'=>'1901-01-01'
            ]);
        DB::table('participante_curso')->insert([
            'id'=>312,
            'curso_id'=>207,
            'profesor_id'=>312,
            'asistencia'=>true,
            'acreditacion'=>true
            ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
            'p1_1'=>'100',
            'p1_2'=>'100',
            'p1_3'=>'100',
            'p1_4'=>'100',
            'p1_5'=>'100',
            'p2_1'=>'60',
            'p2_2'=>'80',
            'p2_3'=>'95',
            'p2_4'=>'100',
            'p3_1'=>'100',
            'p3_2'=>'100',
            'p3_3'=>'100',
            'p3_4'=>'100',
            'p7'=>1,
            'p8'=>'["3"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'Conocer qué es la edducación y el ddesarrollo humano en la formación universitaria',
            'sug'=>'-',
            'p4_1'=>'100',
            'p4_2'=>'100',
            'p4_3'=>'100',
            'p4_4'=>'100',
            'p4_5'=>'100',
            'p4_6'=>'100',
            'p4_7'=>'100',
            'p4_8'=>'100',
            'p4_9'=>'100',
            'p4_10'=>'100',
            'p4_11'=>'100',
            'otros'=>'Otros',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>207,
            'participante_curso_id'=>312
            ]);

        DB::table('profesors')->insert([
                'id'=>313,
                'nombres'=>'Brenda Iveth',
                'apellido_paterno'=>'Moreno',
                'apellido_materno'=>'Hurtado',
                'rfc'=>'MOHB0101012I3',
                'curp' =>'MOHB010101MDFRRR06',
                'numero_trabajador' => '12345710',
                'fecha_nacimiento'=>'1901-01-01'
                ]);
        DB::table('participante_curso')->insert([
                'id'=>313,
                'curso_id'=>207,
                'profesor_id'=>313,
                'asistencia'=>true,
                'acreditacion'=>true
                ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
                'p1_1'=>'100',
                'p1_2'=>'100',
                'p1_3'=>'100',
                'p1_4'=>'95',
                'p1_5'=>'95',
                'p2_1'=>'95',
                'p2_2'=>'100',
                'p2_3'=>'100',
                'p2_4'=>'100',
                'p3_1'=>'100',
                'p3_2'=>'100',
                'p3_3'=>'100',
                'p3_4'=>'100',
                'p7'=>1,
                'p8'=>'["3"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
                'mejor'=>'Hacer consciente la aplicación del desarrollo humano',
                'sug'=>'Usar el pizarrón',
                'p4_1'=>'100',
                'p4_2'=>'95',
                'p4_3'=>'100',
                'p4_4'=>'100',
                'p4_5'=>'100',
                'p4_6'=>'100',
                'p4_7'=>'100',
                'p4_8'=>'100',
                'p4_9'=>'100',
                'p4_10'=>'100',
                'p4_11'=>'100',
                'otros'=>'Otros',
                'conocimiento'=>'["1"]',
                'tematica'=>'tematica',
                'horarios'=>'9:00-13:00',
                'horarioi'=>'13:00-15:00',
                'curso_id'=>207,
                'participante_curso_id'=>313
                ]);

        DB::table('participante_curso')->insert([
                    'id'=>314,
                    'curso_id'=>207,
                    'profesor_id'=>267,
                    'asistencia'=>true,
                    'acreditacion'=>true
                    ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
                    'p1_1'=>'100',
                    'p1_2'=>'100',
                    'p1_3'=>'100',
                    'p1_4'=>'100',
                    'p1_5'=>'100',
                    'p2_1'=>'100',
                    'p2_2'=>'100',
                    'p2_3'=>'100',
                    'p2_4'=>'100',
                    'p3_1'=>'100',
                    'p3_2'=>'100',
                    'p3_3'=>'100',
                    'p3_4'=>'100',
                    'p7'=>1,
                    'p8'=>'["2"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
                    'mejor'=>'Actualizarme en el desarrollo humano desde la perspectiva educativa. Me gustó mucho, conocer las experiencias docentes de maestros dde otras [...]',
                    'sug'=>'Ninguna',
                    'p4_1'=>'100',
                    'p4_2'=>'100',
                    'p4_3'=>'100',
                    'p4_4'=>'100',
                    'p4_5'=>'100',
                    'p4_6'=>'100',
                    'p4_7'=>'100',
                    'p4_8'=>'100',
                    'p4_9'=>'100',
                    'p4_10'=>'100',
                    'p4_11'=>'100',
                    'otros'=>'Otros',
                    'conocimiento'=>'["1"]',
                    'tematica'=>'tematica',
                    'horarios'=>'9:00-13:00',
                    'horarioi'=>'13:00-15:00',
                    'curso_id'=>207,
                    'participante_curso_id'=>314
                    ]);
        DB::table('profesors')->insert([
                        'id'=>314,
                        'nombres'=>'Maria Teresa',
                        'apellido_paterno'=>'Peñuñuri',
                        'apellido_materno'=>'Santoyo',
                        'rfc'=>'PEST010101UC5',
                        'curp' =>'PEST010101MDF&NR04',
                        'numero_trabajador' => '12345711',
                        'fecha_nacimiento'=>'1901-01-01'
                        ]);
        DB::table('participante_curso')->insert([
                        'id'=>315,
                        'curso_id'=>207,
                        'profesor_id'=>314,
                        'asistencia'=>true,
                        'acreditacion'=>true
                        ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
                        'p1_1'=>'95',
                        'p1_2'=>'95',
                        'p1_3'=>'95',
                        'p1_4'=>'100',
                        'p1_5'=>'100',
                        'p2_1'=>'100',
                        'p2_2'=>'95',
                        'p2_3'=>'100',
                        'p2_4'=>'95',
                        'p3_1'=>'100',
                        'p3_2'=>'100',
                        'p3_3'=>'100',
                        'p3_4'=>'100',
                        'p7'=>1,
                        'p8'=>'["1"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
                        'mejor'=>'El trabajo colaborativo durante las sesiones',
                        'sug'=>'Dejar los materiales en la plataforma y no bajarlas antes del cierre de cada módulo. También dejar la rúbrica de evaluación',
                        'p4_1'=>'95',
                        'p4_2'=>'100',
                        'p4_3'=>'100',
                        'p4_4'=>'100',
                        'p4_5'=>'95',
                        'p4_6'=>'95',
                        'p4_7'=>'100',
                        'p4_8'=>'100',
                        'p4_9'=>'100',
                        'p4_10'=>'100',
                        'p4_11'=>'100',
                        'otros'=>'Otros',
                        'conocimiento'=>'["1"]',
                        'tematica'=>'tematica',
                        'horarios'=>'9:00-13:00',
                        'horarioi'=>'13:00-15:00',
                        'curso_id'=>207,
                        'participante_curso_id'=>315
                        ]);

        DB::table('profesors')->insert([
                            'id'=>315,
                            'nombres'=>'Soledad Alicia',
                            'apellido_paterno'=>'Rivera',
                            'apellido_materno'=>'Rosales',
                            'rfc'=>'RIRS010101DI5',
                            'curp' =>'RIRS010101MDFVSL08',
                            'numero_trabajador' => '12345712',
                            'fecha_nacimiento'=>'1901-01-01'
                            ]);
        DB::table('participante_curso')->insert([
                            'id'=>316,
                            'curso_id'=>207,
                            'profesor_id'=>315,
                            'asistencia'=>true,
                            'acreditacion'=>true
                            ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
                            'p1_1'=>'100',
                            'p1_2'=>'100',
                            'p1_3'=>'95',
                            'p1_4'=>'100',
                            'p1_5'=>'95',
                            'p2_1'=>'95',
                            'p2_2'=>'95',
                            'p2_3'=>'95',
                            'p2_4'=>'95',
                            'p3_1'=>'100',
                            'p3_2'=>'100',
                            'p3_3'=>'100',
                            'p3_4'=>'100',
                            'p7'=>1,
                            'p8'=>'["4","Publicidad en la FCA"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
                            'mejor'=>'La seguridad de que el trabajo docente ha estado por buen camino',
                            'sug'=>'-',
                            'p4_1'=>'100',
                            'p4_2'=>'95',
                            'p4_3'=>'100',
                            'p4_4'=>'100',
                            'p4_5'=>'100',
                            'p4_6'=>'95',
                            'p4_7'=>'100',
                            'p4_8'=>'95',
                            'p4_9'=>'100',
                            'p4_10'=>'100',
                            'p4_11'=>'100',
                            'otros'=>'Otros',
                            'conocimiento'=>'["1"]',
                            'tematica'=>'tematica',
                            'horarios'=>'9:00-13:00',
                            'horarioi'=>'13:00-15:00',
                            'curso_id'=>207,
                            'participante_curso_id'=>316
                            ]);

        DB::table('profesors')->insert([
                                'id'=>316,
                                'nombres'=>'Luis Antonio',
                                'apellido_paterno'=>'Rodriguez',
                                'apellido_materno'=>'Tellez',
                                'rfc'=>'ROTL010101UI2',
                                'curp' =>'ROTL010101HDFDLS00',
                                'numero_trabajador' => '12345713',
                                'fecha_nacimiento'=>'1901-01-01'
                                ]);
        DB::table('participante_curso')->insert([
                                'id'=>317,
                                'curso_id'=>207,
                                'profesor_id'=>316,
                                'asistencia'=>true,
                                'acreditacion'=>true
                                ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
                                'p1_1'=>'100',
                                'p1_2'=>'100',
                                'p1_3'=>'100',
                                'p1_4'=>'100',
                                'p1_5'=>'100',
                                'p2_1'=>'80',
                                'p2_2'=>'80',
                                'p2_3'=>'95',
                                'p2_4'=>'100',
                                'p3_1'=>'95',
                                'p3_2'=>'100',
                                'p3_3'=>'100',
                                'p3_4'=>'100',
                                'p7'=>1,
                                'p8'=>'["3"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
                                'mejor'=>'Mi entendimiento y aceptación de las teorías de educación, así como todas las bases dedl humanismo y la tendencia dde aplicarlo',
                                'sug'=>'Excelente curso, abre mentes y da lugar a la autocrítica y a la actualización como docente',
                                'p4_1'=>'100',
                                'p4_2'=>'100',
                                'p4_3'=>'100',
                                'p4_4'=>'100',
                                'p4_5'=>'100',
                                'p4_6'=>'100',
                                'p4_7'=>'100',
                                'p4_8'=>'100',
                                'p4_9'=>'100',
                                'p4_10'=>'100',
                                'p4_11'=>'100',
                                'otros'=>'Otros',
                                'conocimiento'=>'["1"]',
                                'tematica'=>'tematica',
                                'horarios'=>'9:00-13:00',
                                'horarioi'=>'13:00-15:00',
                                'curso_id'=>207,
                                'participante_curso_id'=>317
                                ]);
        DB::table('participante_curso')->insert([
                                    'id'=>318,
                                    'curso_id'=>207,
                                    'profesor_id'=>253,
                                    'asistencia'=>true,
                                    'acreditacion'=>true
                                ]);

        DB::table('profesors')->insert([
                                    'id'=>317,
                                    'nombres'=>'Mario Sinuhe',
                                    'apellido_paterno'=>'Sanchez',
                                    'apellido_materno'=>'Dominguez',
                                    'rfc'=>'SADM010101JC9',
                                    'curp' =>'SADM010101HDFNMR03',
                                    'numero_trabajador' => '12345714',
                                    'fecha_nacimiento'=>'1901-01-01'
                                    ]);
        DB::table('participante_curso')->insert([
                                    'id'=>319,
                                    'curso_id'=>207,
                                    'profesor_id'=>317,
                                    'asistencia'=>true,
                                    'acreditacion'=>true
                                    ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
                                    'p1_1'=>'95',
                                    'p1_2'=>'80',
                                    'p1_3'=>'80',
                                    'p1_4'=>'80',
                                    'p1_5'=>'80',
                                    'p2_1'=>'95',
                                    'p2_2'=>'80',
                                    'p2_3'=>'80',
                                    'p2_4'=>'80',
                                    'p3_1'=>'80',
                                    'p3_2'=>'80',
                                    'p3_3'=>'95',
                                    'p3_4'=>'95',
                                    'p7'=>1,
                                    'p8'=>'["2"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
                                    'mejor'=>'El trabajo',
                                    'sug'=>'-',
                                    'p4_1'=>'95',
                                    'p4_2'=>'95',
                                    'p4_3'=>'80',
                                    'p4_4'=>'95',
                                    'p4_5'=>'80',
                                    'p4_6'=>'80',
                                    'p4_7'=>'80',
                                    'p4_8'=>'95',
                                    'p4_9'=>'95',
                                    'p4_10'=>'95',
                                    'p4_11'=>'95',
                                    'otros'=>'Otros',
                                    'conocimiento'=>'["1"]',
                                    'tematica'=>'tematica',
                                    'horarios'=>'9:00-13:00',
                                    'horarioi'=>'13:00-15:00',
                                    'curso_id'=>207,
                                    'participante_curso_id'=>319
                                    ]);
        //Módulo 2
        DB::table('catalogo_cursos')->insert([
                                        'id'=> 208,
                                        'nombre_curso'=>'Módulo 2. La personaliddad e imagen del profesor como piedra angular en la formación del estudiante',
                                        'duracion_curso' => '20',
                                        'coordinacion_id' => 202,
                                        'tipo' => 'C',
                                        'institucion' => 'DGAPA',
                                        'fecha_disenio'=>'2012-12-12',
                                        'clave_curso'=>'PIPPAFEGAPA'
                                    ]);
                                    
        DB::table('cursos')->insert([
                                        'id'=>208,
                                        'semestre_anio'=>2020,
                                        'semestre_pi'=>'1',
                                        'semestre_si'=>'s',
                                        'fecha_inicio' => '2018-05-20',
                                        'fecha_fin' => '2018-05-30',
                                        'hora_inicio' => '14:00',
                                        'hora_fin' => '16:00',
                                        'dias_semana' => 'Lunes,Miércoles',
                                        'numero_sesiones' => 10,
                                        'texto_diploma' => 'Texto diploma',
                                        'costo' => 2000,
                                        'cupo_maximo' => 20,
                                        'cupo_minimo' => 5,
                                        'catalogo_id' => 208,
                                        'salon_id' => 1
                                    ]);
        //Instructor
        DB::table('profesors')->insert([
                                        'id'=>318,
                                        'nombres'=>'Maria Alejandra',
                                        'apellido_paterno'=>'Zavala',
                                        'apellido_materno'=>'Ojeda',
                                        'rfc'=>'ZAOA010101F91',
                                        'curp' =>'ZAOA010101MDFVJL03',
                                        'numero_trabajador' => '12345715',
                                        'fecha_nacimiento'=>'1901-01-01'
                                        ]);
        //Participantes
    
        DB::table('participante_curso')->insert([
            'id'=>320,
            'curso_id'=>208,
            'profesor_id'=>304,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
                    'p1_1'=>'95',
                    'p1_2'=>'95',
                    'p1_3'=>'95',
                    'p1_4'=>'95',
                    'p1_5'=>'95',
                    'p2_1'=>'100',
                    'p2_2'=>'100',
                    'p2_3'=>'100',
                    'p2_4'=>'100',
                    'p3_1'=>'100',
                    'p3_2'=>'100',
                    'p3_3'=>'100',
                    'p3_4'=>'100',
                    'p7'=>1,
                    'p8'=>'["4","Por otro profesor"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
                    'mejor'=>'Interacción entre el grupo, el aprendizaje de conceptos nuevos y experiencia en lo vivido por los demás profesores',
                    'sug'=>'Ninguna',
                    'p4_1'=>'95',
                    'p4_2'=>'95',
                    'p4_3'=>'95',
                    'p4_4'=>'95',
                    'p4_5'=>'95',
                    'p4_6'=>'95',
                    'p4_7'=>'95',
                    'p4_8'=>'95',
                    'p4_9'=>'95',
                    'p4_10'=>'95',
                    'p4_11'=>'95',
                    'otros'=>'Otros',
                    'conocimiento'=>'["1"]',
                    'tematica'=>'tematica',
                    'horarios'=>'9:00-13:00',
                    'horarioi'=>'13:00-15:00',
                    'curso_id'=>208,
                    'participante_curso_id'=>320
                ]);

        DB::table('participante_curso')->insert([
                    'id'=>321,
                    'curso_id'=>208,
                    'profesor_id'=>305,
                    'asistencia'=>true,
                    'acreditacion'=>true
                ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
                            'p1_1'=>'100',
                            'p1_2'=>'100',
                            'p1_3'=>'100',
                            'p1_4'=>'100',
                            'p1_5'=>'100',
                            'p2_1'=>'100',
                            'p2_2'=>'95',
                            'p2_3'=>'95',
                            'p2_4'=>'100',
                            'p3_1'=>'100',
                            'p3_2'=>'100',
                            'p3_3'=>'95',
                            'p3_4'=>'100',
                            'p7'=>1,
                            'p8'=>'["4","En el Centro de Docencia"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
                            'mejor'=>'La reflexión de nuestra personalidad como docentes.',
                            'sug'=>'Todo muy bien',
                            'p4_1'=>'100',
                            'p4_2'=>'95',
                            'p4_3'=>'100',
                            'p4_4'=>'100',
                            'p4_5'=>'100',
                            'p4_6'=>'95',
                            'p4_7'=>'100',
                            'p4_8'=>'100',
                            'p4_9'=>'100',
                            'p4_10'=>'100',
                            'p4_11'=>'100',
                            'otros'=>'Otros',
                            'conocimiento'=>'["1"]',
                            'tematica'=>'tematica',
                            'horarios'=>'9:00-13:00',
                            'horarioi'=>'13:00-15:00',
                            'curso_id'=>208,
                            'participante_curso_id'=>321
                        ]);

        DB::table('participante_curso')->insert([
                            'id'=>322,
                            'curso_id'=>208,
                            'profesor_id'=>307,
                            'asistencia'=>true,
                            'acreditacion'=>true
                        ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
                                    'p1_1'=>'100',
                                    'p1_2'=>'100',
                                    'p1_3'=>'100',
                                    'p1_4'=>'100',
                                    'p1_5'=>'100',
                                    'p2_1'=>'60',
                                    'p2_2'=>'80',
                                    'p2_3'=>'95',
                                    'p2_4'=>'100',
                                    'p3_1'=>'100',
                                    'p3_2'=>'100',
                                    'p3_3'=>'100',
                                    'p3_4'=>'100',
                                    'p7'=>1,
                                    'p8'=>'["2"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
                                    'mejor'=>'El manejo de las experiencias de los participantes como ejemplo para entender mejor las temáticas que se tocaron',
                                    'sug'=>'El horario que sea un poco mas tarde debido a que durante la mañana se puedde volver difícil el arribo a la Facultad',
                                    'p4_1'=>'100',
                                    'p4_2'=>'100',
                                    'p4_3'=>'100',
                                    'p4_4'=>'100',
                                    'p4_5'=>'100',
                                    'p4_6'=>'100',
                                    'p4_7'=>'100',
                                    'p4_8'=>'100',
                                    'p4_9'=>'100',
                                    'p4_10'=>'100',
                                    'p4_11'=>'100',
                                    'otros'=>'Otros',
                                    'conocimiento'=>'["1"]',
                                    'tematica'=>'tematica',
                                    'horarios'=>'9:00-13:00',
                                    'horarioi'=>'13:00-15:00',
                                    'curso_id'=>208,
                                    'participante_curso_id'=>322
                                ]);
        DB::table('participante_curso')->insert([
                                    'id'=>323,
                                    'curso_id'=>208,
                                    'profesor_id'=>308,
                                    'asistencia'=>true,
                                    'acreditacion'=>true
                                ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
                                            'p1_1'=>'100',
                                            'p1_2'=>'100',
                                            'p1_3'=>'95',
                                            'p1_4'=>'100',
                                            'p1_5'=>'100',
                                            'p2_1'=>'95',
                                            'p2_2'=>'100',
                                            'p2_3'=>'100',
                                            'p2_4'=>'100',
                                            'p3_1'=>'100',
                                            'p3_2'=>'100',
                                            'p3_3'=>'100',
                                            'p3_4'=>'100',
                                            'p7'=>1,
                                            'p8'=>'["4","Recomendación"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
                                            'mejor'=>'Ambiente',
                                            'sug'=>'Ninguna',
                                            'p4_1'=>'100',
                                            'p4_2'=>'100',
                                            'p4_3'=>'100',
                                            'p4_4'=>'100',
                                            'p4_5'=>'100',
                                            'p4_6'=>'100',
                                            'p4_7'=>'100',
                                            'p4_8'=>'100',
                                            'p4_9'=>'100',
                                            'p4_10'=>'100',
                                            'p4_11'=>'100',
                                            'otros'=>'Otros',
                                            'conocimiento'=>'["1"]',
                                            'tematica'=>'tematica',
                                            'horarios'=>'9:00-13:00',
                                            'horarioi'=>'13:00-15:00',
                                            'curso_id'=>208,
                                            'participante_curso_id'=>323
                                        ]);

        DB::table('participante_curso')->insert([
                                            'id'=>324,
                                            'curso_id'=>208,
                                            'profesor_id'=>276,
                                            'asistencia'=>true,
                                            'acreditacion'=>true
                                        ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
                                                    'p1_1'=>'100',
                                                    'p1_2'=>'100',
                                                    'p1_3'=>'100',
                                                    'p1_4'=>'100',
                                                    'p1_5'=>'100',
                                                    'p2_1'=>'95',
                                                    'p2_2'=>'95',
                                                    'p2_3'=>'95',
                                                    'p2_4'=>'95',
                                                    'p3_1'=>'100',
                                                    'p3_2'=>'100',
                                                    'p3_3'=>'100',
                                                    'p3_4'=>'100',
                                                    'p7'=>1,
                                                    'p8'=>'["2"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
                                                    'mejor'=>'El conocerme a mi mismo en aspectos que desconocía',
                                                    'sug'=>'Ampliar las técnicas para seguir descubriendo rasgos de personalidad',
                                                    'p4_1'=>'100',
                                                    'p4_2'=>'100',
                                                    'p4_3'=>'100',
                                                    'p4_4'=>'100',
                                                    'p4_5'=>'100',
                                                    'p4_6'=>'100',
                                                    'p4_7'=>'100',
                                                    'p4_8'=>'100',
                                                    'p4_9'=>'100',
                                                    'p4_10'=>'100',
                                                    'p4_11'=>'100',
                                                    'otros'=>'Otros',
                                                    'conocimiento'=>'["1"]',
                                                    'tematica'=>'tematica',
                                                    'horarios'=>'9:00-13:00',
                                                    'horarioi'=>'13:00-15:00',
                                                    'curso_id'=>208,
                                                    'participante_curso_id'=>324
                                                ]);
        DB::table('participante_curso')->insert([
                                                    'id'=>325,
                                                    'curso_id'=>208,
                                                    'profesor_id'=>310,
                                                    'asistencia'=>true,
                                                    'acreditacion'=>true
                                                ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
                                                            'p1_1'=>'80',
                                                            'p1_2'=>'95',
                                                            'p1_3'=>'100',
                                                            'p1_4'=>'80',
                                                            'p1_5'=>'100',
                                                            'p2_1'=>'60',
                                                            'p2_2'=>'95',
                                                            'p2_3'=>'100',
                                                            'p2_4'=>'100',
                                                            'p3_1'=>'100',
                                                            'p3_2'=>'100',
                                                            'p3_3'=>'100',
                                                            'p3_4'=>'100',
                                                            'p7'=>1,
                                                            'p8'=>'["2"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
                                                            'mejor'=>'Aprender las etapas del ddesarrollo humano y los tipos de personalidad',
                                                            'sug'=>'Se podrían realizar cursos intersemesstrales con temáticas de la personaliddad docente',
                                                            'p4_1'=>'95',
                                                            'p4_2'=>'80',
                                                            'p4_3'=>'100',
                                                            'p4_4'=>'95',
                                                            'p4_5'=>'95',
                                                            'p4_6'=>'95',
                                                            'p4_7'=>'100',
                                                            'p4_8'=>'100',
                                                            'p4_9'=>'100',
                                                            'p4_10'=>'95',
                                                            'p4_11'=>'95',
                                                            'otros'=>'Otros',
                                                            'conocimiento'=>'["1"]',
                                                            'tematica'=>'tematica',
                                                            'horarios'=>'9:00-13:00',
                                                            'horarioi'=>'13:00-15:00',
                                                            'curso_id'=>208,
                                                            'participante_curso_id'=>325
                                                        ]);
        DB::table('participante_curso')->insert([
                                                            'id'=>326,
                                                            'curso_id'=>208,
                                                            'profesor_id'=>278,
                                                            'asistencia'=>true,
                                                            'acreditacion'=>true
                                                        ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
                                                                    'p1_1'=>'100',
                                                                    'p1_2'=>'100',
                                                                    'p1_3'=>'100',
                                                                    'p1_4'=>'100',
                                                                    'p1_5'=>'100',
                                                                    'p2_1'=>'95',
                                                                    'p2_2'=>'100',
                                                                    'p2_3'=>'100',
                                                                    'p2_4'=>'100',
                                                                    'p3_1'=>'100',
                                                                    'p3_2'=>'100',
                                                                    'p3_3'=>'95',
                                                                    'p3_4'=>'100',
                                                                    'p7'=>1,
                                                                    'p8'=>'["2"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
                                                                    'mejor'=>'La instructora y sus dinámicas',
                                                                    'sug'=>'Todo estuvo excelente',
                                                                    'p4_1'=>'100',
                                                                    'p4_2'=>'100',
                                                                    'p4_3'=>'100',
                                                                    'p4_4'=>'100',
                                                                    'p4_5'=>'100',
                                                                    'p4_6'=>'100',
                                                                    'p4_7'=>'100',
                                                                    'p4_8'=>'100',
                                                                    'p4_9'=>'100',
                                                                    'p4_10'=>'100',
                                                                    'p4_11'=>'100',
                                                                    'otros'=>'Otros',
                                                                    'conocimiento'=>'["1"]',
                                                                    'tematica'=>'tematica',
                                                                    'horarios'=>'9:00-13:00',
                                                                    'horarioi'=>'13:00-15:00',
                                                                    'curso_id'=>208,
                                                                    'participante_curso_id'=>326
                                                                ]);
        DB::table('participante_curso')->insert([
                                                                    'id'=>327,
                                                                    'curso_id'=>208,
                                                                    'profesor_id'=>311,
                                                                    'asistencia'=>true,
                                                                    'acreditacion'=>true
                                                                ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
                                                                            'p1_1'=>'100',
                                                                            'p1_2'=>'100',
                                                                            'p1_3'=>'100',
                                                                            'p1_4'=>'100',
                                                                            'p1_5'=>'100',
                                                                            'p2_1'=>'100',
                                                                            'p2_2'=>'100',
                                                                            'p2_3'=>'100',
                                                                            'p2_4'=>'100',
                                                                            'p3_1'=>'100',
                                                                            'p3_2'=>'100',
                                                                            'p3_3'=>'100',
                                                                            'p3_4'=>'100',
                                                                            'p7'=>1,
                                                                            'p8'=>'["2"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
                                                                            'mejor'=>'Todos los temas vistos',
                                                                            'sug'=>'Más tiempo para reflexionar en nuestro desempeño docente',
                                                                            'p4_1'=>'100',
                                                                            'p4_2'=>'100',
                                                                            'p4_3'=>'100',
                                                                            'p4_4'=>'100',
                                                                            'p4_5'=>'100',
                                                                            'p4_6'=>'100',
                                                                            'p4_7'=>'100',
                                                                            'p4_8'=>'100',
                                                                            'p4_9'=>'100',
                                                                            'p4_10'=>'100',
                                                                            'p4_11'=>'100',
                                                                            'otros'=>'Otros',
                                                                            'conocimiento'=>'["1"]',
                                                                            'tematica'=>'tematica',
                                                                            'horarios'=>'9:00-13:00',
                                                                            'horarioi'=>'13:00-15:00',
                                                                            'curso_id'=>208,
                                                                            'participante_curso_id'=>327
                                                                        ]);
        DB::table('participante_curso')->insert([
                                                                            'id'=>328,
                                                                            'curso_id'=>208,
                                                                            'profesor_id'=>264,
                                                                            'asistencia'=>true,
                                                                            'acreditacion'=>true
                                                                        ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
                                                                                    'p1_1'=>'100',
                                                                                    'p1_2'=>'100',
                                                                                    'p1_3'=>'100',
                                                                                    'p1_4'=>'100',
                                                                                    'p1_5'=>'100',
                                                                                    'p2_1'=>'100',
                                                                                    'p2_2'=>'100',
                                                                                    'p2_3'=>'100',
                                                                                    'p2_4'=>'100',
                                                                                    'p3_1'=>'100',
                                                                                    'p3_2'=>'100',
                                                                                    'p3_3'=>'100',
                                                                                    'p3_4'=>'100',
                                                                                    'p7'=>1,
                                                                                    'p8'=>'["2"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
                                                                                    'mejor'=>'La caliddad de la exposición dde la instructora excelente y la secuencia del curso muy bien estructuraddo peddagógicamente',
                                                                                    'sug'=>'Que las clases se realicen mas temprano',
                                                                                    'p4_1'=>'100',
                                                                                    'p4_2'=>'100',
                                                                                    'p4_3'=>'100',
                                                                                    'p4_4'=>'100',
                                                                                    'p4_5'=>'100',
                                                                                    'p4_6'=>'100',
                                                                                    'p4_7'=>'100',
                                                                                    'p4_8'=>'100',
                                                                                    'p4_9'=>'100',
                                                                                    'p4_10'=>'100',
                                                                                    'p4_11'=>'100',
                                                                                    'otros'=>'Otros',
                                                                                    'conocimiento'=>'["1"]',
                                                                                    'tematica'=>'tematica',
                                                                                    'horarios'=>'9:00-13:00',
                                                                                    'horarioi'=>'13:00-15:00',
                                                                                    'curso_id'=>208,
                                                                                    'participante_curso_id'=>328
                                                                                ]);
        DB::table('participante_curso')->insert([
                                                                                    'id'=>329,
                                                                                    'curso_id'=>208,
                                                                                    'profesor_id'=>313,
                                                                                    'asistencia'=>true,
                                                                                    'acreditacion'=>true
                                                                                ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
                                                                                            'p1_1'=>'100',
                                                                                            'p1_2'=>'100',
                                                                                            'p1_3'=>'100',
                                                                                            'p1_4'=>'100',
                                                                                            'p1_5'=>'100',
                                                                                            'p2_1'=>'95',
                                                                                            'p2_2'=>'100',
                                                                                            'p2_3'=>'100',
                                                                                            'p2_4'=>'100',
                                                                                            'p3_1'=>'100',
                                                                                            'p3_2'=>'100',
                                                                                            'p3_3'=>'95',
                                                                                            'p3_4'=>'95',
                                                                                            'p7'=>1,
                                                                                            'p8'=>'["3"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
                                                                                            'mejor'=>'Conocerme a mi misma',
                                                                                            'sug'=>'El aire acondicionado molesta a veces',
                                                                                            'p4_1'=>'100',
                                                                                            'p4_2'=>'95',
                                                                                            'p4_3'=>'100',
                                                                                            'p4_4'=>'100',
                                                                                            'p4_5'=>'100',
                                                                                            'p4_6'=>'100',
                                                                                            'p4_7'=>'100',
                                                                                            'p4_8'=>'100',
                                                                                            'p4_9'=>'100',
                                                                                            'p4_10'=>'100',
                                                                                            'p4_11'=>'100',
                                                                                            'otros'=>'Otros',
                                                                                            'conocimiento'=>'["1"]',
                                                                                            'tematica'=>'tematica',
                                                                                            'horarios'=>'9:00-13:00',
                                                                                            'horarioi'=>'13:00-15:00',
                                                                                            'curso_id'=>208,
                                                                                            'participante_curso_id'=>329
                                                                                        ]);
        DB::table('participante_curso')->insert([
                                                                                            'id'=>330,
                                                                                            'curso_id'=>208,
                                                                                            'profesor_id'=>267,
                                                                                            'asistencia'=>true,
                                                                                            'acreditacion'=>true
                                                                                        ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
                                                                                                    'p1_1'=>'100',
                                                                                                    'p1_2'=>'100',
                                                                                                    'p1_3'=>'100',
                                                                                                    'p1_4'=>'100',
                                                                                                    'p1_5'=>'100',
                                                                                                    'p2_1'=>'100',
                                                                                                    'p2_2'=>'100',
                                                                                                    'p2_3'=>'100',
                                                                                                    'p2_4'=>'100',
                                                                                                    'p3_1'=>'100',
                                                                                                    'p3_2'=>'100',
                                                                                                    'p3_3'=>'100',
                                                                                                    'p3_4'=>'100',
                                                                                                    'p7'=>1,
                                                                                                    'p8'=>'["2"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
                                                                                                    'mejor'=>'La reflexión sobre mis fortalezas y áreas de oportuniddad en mi personaliddad',
                                                                                                    'sug'=>'¡Excelente módulo! considero que lo aprendido en este módulo es insipensable para cualquier docente.',
                                                                                                    'p4_1'=>'100',
                                                                                                    'p4_2'=>'100',
                                                                                                    'p4_3'=>'100',
                                                                                                    'p4_4'=>'100',
                                                                                                    'p4_5'=>'100',
                                                                                                    'p4_6'=>'100',
                                                                                                    'p4_7'=>'100',
                                                                                                    'p4_8'=>'100',
                                                                                                    'p4_9'=>'100',
                                                                                                    'p4_10'=>'100',
                                                                                                    'p4_11'=>'100',
                                                                                                    'otros'=>'Otros',
                                                                                                    'conocimiento'=>'["1"]',
                                                                                                    'tematica'=>'tematica',
                                                                                                    'horarios'=>'9:00-13:00',
                                                                                                    'horarioi'=>'13:00-15:00',
                                                                                                    'curso_id'=>208,
                                                                                                    'participante_curso_id'=>330
                                                                                                ]);
        DB::table('participante_curso')->insert([
                                                                                                    'id'=>331,
                                                                                                    'curso_id'=>208,
                                                                                                    'profesor_id'=>314,
                                                                                                    'asistencia'=>true,
                                                                                                    'acreditacion'=>true
                                                                                                ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
                                                                                                            'p1_1'=>'100',
                                                                                                            'p1_2'=>'100',
                                                                                                            'p1_3'=>'100',
                                                                                                            'p1_4'=>'100',
                                                                                                            'p1_5'=>'100',
                                                                                                            'p2_1'=>'100',
                                                                                                            'p2_2'=>'95',
                                                                                                            'p2_3'=>'100',
                                                                                                            'p2_4'=>'100',
                                                                                                            'p3_1'=>'100',
                                                                                                            'p3_2'=>'100',
                                                                                                            'p3_3'=>'95',
                                                                                                            'p3_4'=>'95',
                                                                                                            'p7'=>1,
                                                                                                            'p8'=>'["1"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
                                                                                                            'mejor'=>'Las actividades en equipo (ejercicio Socrático)',
                                                                                                            'sug'=>'Dejar los materiales disponibles dos días después del cierre del módulo.',
                                                                                                            'p4_1'=>'100',
                                                                                                            'p4_2'=>'100',
                                                                                                            'p4_3'=>'100',
                                                                                                            'p4_4'=>'100',
                                                                                                            'p4_5'=>'100',
                                                                                                            'p4_6'=>'100',
                                                                                                            'p4_7'=>'100',
                                                                                                            'p4_8'=>'100',
                                                                                                            'p4_9'=>'95',
                                                                                                            'p4_10'=>'100',
                                                                                                            'p4_11'=>'100',
                                                                                                            'otros'=>'Otros',
                                                                                                            'conocimiento'=>'["1"]',
                                                                                                            'tematica'=>'tematica',
                                                                                                            'horarios'=>'9:00-13:00',
                                                                                                            'horarioi'=>'13:00-15:00',
                                                                                                            'curso_id'=>208,
                                                                                                            'participante_curso_id'=>331
                                                                                                        ]);
        DB::table('participante_curso')->insert([
                                                                                                            'id'=>332,
                                                                                                            'curso_id'=>208,
                                                                                                            'profesor_id'=>315,
                                                                                                            'asistencia'=>true,
                                                                                                            'acreditacion'=>true
                                                                                                        ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
                                                                                                                    'p1_1'=>'100',
                                                                                                                    'p1_2'=>'100',
                                                                                                                    'p1_3'=>'100',
                                                                                                                    'p1_4'=>'100',
                                                                                                                    'p1_5'=>'100',
                                                                                                                    'p2_1'=>'95',
                                                                                                                    'p2_2'=>'80',
                                                                                                                    'p2_3'=>'95',
                                                                                                                    'p2_4'=>'95',
                                                                                                                    'p3_1'=>'100',
                                                                                                                    'p3_2'=>'100',
                                                                                                                    'p3_3'=>'100',
                                                                                                                    'p3_4'=>'100',
                                                                                                                    'p7'=>1,
                                                                                                                    'p8'=>'["4","Póster en FCA"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
                                                                                                                    'mejor'=>'La autorreflexión',
                                                                                                                    'sug'=>'Este curso debe ser obligatorio',
                                                                                                                    'p4_1'=>'100',
                                                                                                                    'p4_2'=>'100',
                                                                                                                    'p4_3'=>'100',
                                                                                                                    'p4_4'=>'100',
                                                                                                                    'p4_5'=>'100',
                                                                                                                    'p4_6'=>'100',
                                                                                                                    'p4_7'=>'100',
                                                                                                                    'p4_8'=>'100',
                                                                                                                    'p4_9'=>'100',
                                                                                                                    'p4_10'=>'100',
                                                                                                                    'p4_11'=>'100',
                                                                                                                    'otros'=>'Otros',
                                                                                                                    'conocimiento'=>'["1"]',
                                                                                                                    'tematica'=>'tematica',
                                                                                                                    'horarios'=>'9:00-13:00',
                                                                                                                    'horarioi'=>'13:00-15:00',
                                                                                                                    'curso_id'=>208,
                                                                                                                    'participante_curso_id'=>332
                                                                                                                ]);
                                                                                                                DB::table('participante_curso')->insert([
                                                                                                                    'id'=>333,
                                                                                                                    'curso_id'=>208,
                                                                                                                    'profesor_id'=>316,
                                                                                                                    'asistencia'=>true,
                                                                                                                    'acreditacion'=>true
                                                                                                                ]);
                                                                                                                DB::table('participante_curso')->insert([
                                                                                                                    'id'=>334,
                                                                                                                    'curso_id'=>208,
                                                                                                                    'profesor_id'=>253,
                                                                                                                    'asistencia'=>true,
                                                                                                                    'acreditacion'=>true
                                                                                                                ]);
                                                                                                                DB::table('participante_curso')->insert([
                                                                                                                    'id'=>335,
                                                                                                                    'curso_id'=>208,
                                                                                                                    'profesor_id'=>317,
                                                                                                                    'asistencia'=>true,
                                                                                                                    'acreditacion'=>true
                                                                                                                ]);
                                                                                                                //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
            'p1_1'=>'95',
            'p1_2'=>'80',
            'p1_3'=>'95',
            'p1_4'=>'80',
            'p1_5'=>'80',
            'p2_1'=>'80',
            'p2_2'=>'80',
            'p2_3'=>'80',
            'p2_4'=>'80',
            'p3_1'=>'80',
            'p3_2'=>'95',
            'p3_3'=>'95',
            'p3_4'=>'95',
            'p7'=>1,
            'p8'=>'["2"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'El compartir experiencias docentes relacionadas con el conocimiento, control y desarrollo de las diferentes personalidaddes, incluida la propia.',
            'sug'=>'-',
            'p4_1'=>'95',
            'p4_2'=>'80',
            'p4_3'=>'80',
            'p4_4'=>'80',
            'p4_5'=>'95',
            'p4_6'=>'80',
            'p4_7'=>'80',
            'p4_8'=>'80',
            'p4_9'=>'95',
            'p4_10'=>'95',
            'p4_11'=>'80',
            'otros'=>'Otros',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>208,
            'participante_curso_id'=>335
        ]);
//Modulo 3
        DB::table('catalogo_cursos')->insert([
            'id'=> 209,
            'nombre_curso'=>'Módulo 3. Habiliddades para la comunicación interpersonal en el proceso docente',
            'duracion_curso' => '20',
            'coordinacion_id' => 202,
            'tipo' => 'C',
            'institucion' => 'DGAPA',
            'fecha_disenio'=>'2012-12-12',
            'clave_curso'=>'HCIPCDGAPA'
        ]);
        
        DB::table('cursos')->insert([
            'id'=>209,
            'semestre_anio'=>2020,
            'semestre_pi'=>'1',
            'semestre_si'=>'s',
            'fecha_inicio' => '2018-05-20',
            'fecha_fin' => '2018-05-30',
            'hora_inicio' => '14:00',
            'hora_fin' => '16:00',
            'dias_semana' => 'Lunes,Miércoles',
            'numero_sesiones' => 10,
            'texto_diploma' => 'Texto diploma',
            'costo' => 2000,
            'cupo_maximo' => 20,
            'cupo_minimo' => 5,
            'catalogo_id' => 209,
            'salon_id' => 1
        ]);

        DB::table('participante_curso')->insert([
            'id'=>336,
            'curso_id'=>209,
            'profesor_id'=>304,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);

        DB::table('_evaluacion_final_curso')->insert([
            'p1_1'=>'100',
            'p1_2'=>'100',
            'p1_3'=>'100',
            'p1_4'=>'100',
            'p1_5'=>'100',
            'p2_1'=>'100',
            'p2_2'=>'100',
            'p2_3'=>'100',
            'p2_4'=>'100',
            'p3_1'=>'100',
            'p3_2'=>'100',
            'p3_3'=>'100',
            'p3_4'=>'100',
            'p7'=>1,
            'p8'=>'["4","Por otro profesor"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'Temas a abordar y la participación continúa',
            'sug'=>'Considero que se abrieran más grupos para que más profesores de acuerdo a su carga de trabajo puedan escoger el horario en la mañana o en la tarde',
            'p4_1'=>'100',
            'p4_2'=>'100',
            'p4_3'=>'100',
            'p4_4'=>'100',
            'p4_5'=>'100',
            'p4_6'=>'100',
            'p4_7'=>'100',
            'p4_8'=>'100',
            'p4_9'=>'100',
            'p4_10'=>'100',
            'p4_11'=>'100',
            'otros'=>'Otros',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>209,
            'participante_curso_id'=>336
        ]);
        DB::table('participante_curso')->insert([
            'id'=>337,
            'curso_id'=>209,
            'profesor_id'=>305,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);

        DB::table('_evaluacion_final_curso')->insert([
            'p1_1'=>'100',
            'p1_2'=>'100',
            'p1_3'=>'100',
            'p1_4'=>'100',
            'p1_5'=>'100',
            'p2_1'=>'100',
            'p2_2'=>'100',
            'p2_3'=>'100',
            'p2_4'=>'100',
            'p3_1'=>'100',
            'p3_2'=>'100',
            'p3_3'=>'100',
            'p3_4'=>'100',
            'p7'=>1,
            'p8'=>'["4","CDD"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'Sus contenidos',
            'sug'=>'Mayor tiempo para practicar más las redes sociales',
            'p4_1'=>'100',
            'p4_2'=>'100',
            'p4_3'=>'100',
            'p4_4'=>'100',
            'p4_5'=>'100',
            'p4_6'=>'100',
            'p4_7'=>'100',
            'p4_8'=>'100',
            'p4_9'=>'100',
            'p4_10'=>'100',
            'p4_11'=>'100',
            'otros'=>'Otros',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>209,
            'participante_curso_id'=>337
        ]);
        DB::table('participante_curso')->insert([
            'id'=>338,
            'curso_id'=>209,
            'profesor_id'=>308,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);

        DB::table('_evaluacion_final_curso')->insert([
            'p1_1'=>'95',
            'p1_2'=>'95',
            'p1_3'=>'95',
            'p1_4'=>'100',
            'p1_5'=>'100',
            'p2_1'=>'95',
            'p2_2'=>'100',
            'p2_3'=>'100',
            'p2_4'=>'100',
            'p3_1'=>'100',
            'p3_2'=>'100',
            'p3_3'=>'100',
            'p3_4'=>'100',
            'p7'=>1,
            'p8'=>'["2"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'Diversidad',
            'sug'=>'Mejorar el material de apoyo',
            'p4_1'=>'100',
            'p4_2'=>'100',
            'p4_3'=>'100',
            'p4_4'=>'95',
            'p4_5'=>'100',
            'p4_6'=>'95',
            'p4_7'=>'100',
            'p4_8'=>'100',
            'p4_9'=>'100',
            'p4_10'=>'100',
            'p4_11'=>'100',
            'otros'=>'Otros',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>209,
            'participante_curso_id'=>338
        ]);
        DB::table('participante_curso')->insert([
            'id'=>339,
            'curso_id'=>209,
            'profesor_id'=>276,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);

        DB::table('_evaluacion_final_curso')->insert([
            'p1_1'=>'95',
            'p1_2'=>'95',
            'p1_3'=>'95',
            'p1_4'=>'95',
            'p1_5'=>'95',
            'p2_1'=>'80',
            'p2_2'=>'95',
            'p2_3'=>'95',
            'p2_4'=>'100',
            'p3_1'=>'100',
            'p3_2'=>'100',
            'p3_3'=>'100',
            'p3_4'=>'100',
            'p7'=>1,
            'p8'=>'["2"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'La dinámica con que se llevó acabo el módulo',
            'sug'=>'Ampliar los temas',
            'p4_1'=>'100',
            'p4_2'=>'100',
            'p4_3'=>'100',
            'p4_4'=>'100',
            'p4_5'=>'100',
            'p4_6'=>'100',
            'p4_7'=>'100',
            'p4_8'=>'100',
            'p4_9'=>'100',
            'p4_10'=>'100',
            'p4_11'=>'100',
            'otros'=>'Otros',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>209,
            'participante_curso_id'=>339
        ]);
        DB::table('participante_curso')->insert([
            'id'=>340,
            'curso_id'=>209,
            'profesor_id'=>310,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);

        DB::table('_evaluacion_final_curso')->insert([
            'p1_1'=>'80',
            'p1_2'=>'95',
            'p1_3'=>'80',
            'p1_4'=>'80',
            'p1_5'=>'100',
            'p2_1'=>'60',
            'p2_2'=>'95',
            'p2_3'=>'100',
            'p2_4'=>'100',
            'p3_1'=>'100',
            'p3_2'=>'100',
            'p3_3'=>'100',
            'p3_4'=>'100',
            'p7'=>1,
            'p8'=>'["1"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'Los contenidos enfocados a la comunicación',
            'sug'=>'Sería apropiado ddirigir las participaciones ded los profesores para no invertir tiempo en comentarios que no están enfocados al tema plateado',
            'p4_1'=>'100',
            'p4_2'=>'80',
            'p4_3'=>'95',
            'p4_4'=>'80',
            'p4_5'=>'95',
            'p4_6'=>'95',
            'p4_7'=>'95',
            'p4_8'=>'100',
            'p4_9'=>'100',
            'p4_10'=>'100',
            'p4_11'=>'60',
            'otros'=>'Otros',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>209,
            'participante_curso_id'=>340
        ]);
        DB::table('participante_curso')->insert([
            'id'=>341,
            'curso_id'=>209,
            'profesor_id'=>278,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);

        DB::table('_evaluacion_final_curso')->insert([
            'p1_1'=>'100',
            'p1_2'=>'100',
            'p1_3'=>'100',
            'p1_4'=>'100',
            'p1_5'=>'100',
            'p2_1'=>'100',
            'p2_2'=>'100',
            'p2_3'=>'100',
            'p2_4'=>'100',
            'p3_1'=>'100',
            'p3_2'=>'100',
            'p3_3'=>'100',
            'p3_4'=>'100',
            'p7'=>1,
            'p8'=>'["2"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'Saber acerca de más redes sociales educativas',
            'sug'=>'Ninguna',
            'p4_1'=>'95',
            'p4_2'=>'95',
            'p4_3'=>'100',
            'p4_4'=>'100',
            'p4_5'=>'100',
            'p4_6'=>'100',
            'p4_7'=>'100',
            'p4_8'=>'100',
            'p4_9'=>'95',
            'p4_10'=>'100',
            'p4_11'=>'100',
            'otros'=>'Otros',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>209,
            'participante_curso_id'=>341
        ]);
        DB::table('participante_curso')->insert([
            'id'=>342,
            'curso_id'=>209,
            'profesor_id'=>311,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);
        DB::table('_evaluacion_final_curso')->insert([
            'p1_1'=>'100',
            'p1_2'=>'100',
            'p1_3'=>'100',
            'p1_4'=>'100',
            'p1_5'=>'100',
            'p2_1'=>'95',
            'p2_2'=>'80',
            'p2_3'=>'100',
            'p2_4'=>'100',
            'p3_1'=>'100',
            'p3_2'=>'100',
            'p3_3'=>'100',
            'p3_4'=>'100',
            'p7'=>1,
            'p8'=>'["2"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'La reflexión que realicé sobre mi forma de comunicar y escucha en el aula',
            'sug'=>'La última lectura',
            'p4_1'=>'100',
            'p4_2'=>'100',
            'p4_3'=>'100',
            'p4_4'=>'100',
            'p4_5'=>'100',
            'p4_6'=>'100',
            'p4_7'=>'100',
            'p4_8'=>'100',
            'p4_9'=>'100',
            'p4_10'=>'100',
            'p4_11'=>'100',
            'otros'=>'Otros',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>209,
            'participante_curso_id'=>342
        ]);
        DB::table('participante_curso')->insert([
            'id'=>343,
            'curso_id'=>209,
            'profesor_id'=>264,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);
        DB::table('_evaluacion_final_curso')->insert([
            'p1_1'=>'100',
            'p1_2'=>'100',
            'p1_3'=>'100',
            'p1_4'=>'100',
            'p1_5'=>'100',
            'p2_1'=>'60',
            'p2_2'=>'100',
            'p2_3'=>'100',
            'p2_4'=>'100',
            'p3_1'=>'100',
            'p3_2'=>'100',
            'p3_3'=>'60',
            'p3_4'=>'100',
            'p7'=>1,
            'p8'=>'["4","Por la Coordinación del Centro"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'La exposición',
            'sug'=>'Sugiero que todos los módulos ded este diplomado sean administrados bajo una plataforma educativa establecidda. a fin de contar con la enseñanza de su [...]',
            'p4_1'=>'100',
            'p4_2'=>'100',
            'p4_3'=>'100',
            'p4_4'=>'80',
            'p4_5'=>'100',
            'p4_6'=>'100',
            'p4_7'=>'100',
            'p4_8'=>'100',
            'p4_9'=>'100',
            'p4_10'=>'100',
            'p4_11'=>'100',
            'otros'=>'Otros',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>209,
            'participante_curso_id'=>343
        ]);
        DB::table('participante_curso')->insert([
            'id'=>344,
            'curso_id'=>209,
            'profesor_id'=>313,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);
        DB::table('_evaluacion_final_curso')->insert([
            'p1_1'=>'95',
            'p1_2'=>'95',
            'p1_3'=>'95',
            'p1_4'=>'95',
            'p1_5'=>'100',
            'p2_1'=>'60',
            'p2_2'=>'100',
            'p2_3'=>'100',
            'p2_4'=>'100',
            'p3_1'=>'100',
            'p3_2'=>'100',
            'p3_3'=>'100',
            'p3_4'=>'100',
            'p7'=>1,
            'p8'=>'["3"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'Aprendder sobre comunicación y muchas cosas relacionadas a ella',
            'sug'=>'Usa demasiado tiempo en retroalimentación',
            'p4_1'=>'95',
            'p4_2'=>'80',
            'p4_3'=>'100',
            'p4_4'=>'95',
            'p4_5'=>'95',
            'p4_6'=>'60',
            'p4_7'=>'95',
            'p4_8'=>'100',
            'p4_9'=>'100',
            'p4_10'=>'100',
            'p4_11'=>'100',
            'otros'=>'Otros',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>209,
            'participante_curso_id'=>344
        ]);
        DB::table('participante_curso')->insert([
            'id'=>345,
            'curso_id'=>209,
            'profesor_id'=>267,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);
        DB::table('_evaluacion_final_curso')->insert([
            'p1_1'=>'100',
            'p1_2'=>'100',
            'p1_3'=>'100',
            'p1_4'=>'100',
            'p1_5'=>'100',
            'p2_1'=>'100',
            'p2_2'=>'100',
            'p2_3'=>'100',
            'p2_4'=>'100',
            'p3_1'=>'100',
            'p3_2'=>'100',
            'p3_3'=>'100',
            'p3_4'=>'100',
            'p7'=>1,
            'p8'=>'["2"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'La discusión en clase',
            'sug'=>'Ninguna',
            'p4_1'=>'100',
            'p4_2'=>'100',
            'p4_3'=>'100',
            'p4_4'=>'100',
            'p4_5'=>'100',
            'p4_6'=>'100',
            'p4_7'=>'100',
            'p4_8'=>'100',
            'p4_9'=>'100',
            'p4_10'=>'100',
            'p4_11'=>'100',
            'otros'=>'Otros',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>209,
            'participante_curso_id'=>345
        ]);
        DB::table('participante_curso')->insert([
            'id'=>346,
            'curso_id'=>209,
            'profesor_id'=>314,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);
        DB::table('_evaluacion_final_curso')->insert([
            'p1_1'=>'95',
            'p1_2'=>'95',
            'p1_3'=>'100',
            'p1_4'=>'95',
            'p1_5'=>'95',
            'p2_1'=>'100',
            'p2_2'=>'95',
            'p2_3'=>'100',
            'p2_4'=>'100',
            'p3_1'=>'100',
            'p3_2'=>'95',
            'p3_3'=>'95',
            'p3_4'=>'95',
            'p7'=>1,
            'p8'=>'["1"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'Conocer sobre otras redes sociales',
            'sug'=>'Mejorar la conexión a Internet dentro de las instalaciones, evitar dar los avisos durante el tiempo de los módulos (usar el correo) y hacer las [...]',
            'p4_1'=>'100',
            'p4_2'=>'100',
            'p4_3'=>'100',
            'p4_4'=>'95',
            'p4_5'=>'95',
            'p4_6'=>'80',
            'p4_7'=>'95',
            'p4_8'=>'100',
            'p4_9'=>'100',
            'p4_10'=>'100',
            'p4_11'=>'95',
            'otros'=>'Otros',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>209,
            'participante_curso_id'=>346
        ]);
        DB::table('participante_curso')->insert([
            'id'=>347,
            'curso_id'=>209,
            'profesor_id'=>315,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);
        DB::table('_evaluacion_final_curso')->insert([
            'p1_1'=>'100',
            'p1_2'=>'100',
            'p1_3'=>'100',
            'p1_4'=>'100',
            'p1_5'=>'100',
            'p2_1'=>'95',
            'p2_2'=>'95',
            'p2_3'=>'95',
            'p2_4'=>'95',
            'p3_1'=>'100',
            'p3_2'=>'100',
            'p3_3'=>'100',
            'p3_4'=>'100',
            'p7'=>1,
            'p8'=>'["2"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'Descubrir las áreas de oportunidad en middesarrollo docente',
            'sug'=>'Que aparezca el nombre del instructor en el formato de lectura dde tareas de cada módulo',
            'p4_1'=>'100',
            'p4_2'=>'95',
            'p4_3'=>'100',
            'p4_4'=>'100',
            'p4_5'=>'95',
            'p4_6'=>'95',
            'p4_7'=>'95',
            'p4_8'=>'95',
            'p4_9'=>'100',
            'p4_10'=>'100',
            'p4_11'=>'100',
            'otros'=>'Otros',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>209,
            'participante_curso_id'=>347
        ]);
        DB::table('participante_curso')->insert([
            'id'=>348,
            'curso_id'=>209,
            'profesor_id'=>317,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);
        DB::table('_evaluacion_final_curso')->insert([
            'p1_1'=>'80',
            'p1_2'=>'80',
            'p1_3'=>'95',
            'p1_4'=>'80',
            'p1_5'=>'80',
            'p2_1'=>'80',
            'p2_2'=>'80',
            'p2_3'=>'80',
            'p2_4'=>'80',
            'p3_1'=>'95',
            'p3_2'=>'95',
            'p3_3'=>'95',
            'p3_4'=>'80',
            'p7'=>1,
            'p8'=>'["2"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'Intercambio de experiencias sobre los tópicos tratados',
            'sug'=>'Ninguna',
            'p4_1'=>'100',
            'p4_2'=>'80',
            'p4_3'=>'95',
            'p4_4'=>'95',
            'p4_5'=>'95',
            'p4_6'=>'80',
            'p4_7'=>'80',
            'p4_8'=>'95',
            'p4_9'=>'80',
            'p4_10'=>'80',
            'p4_11'=>'80',
            'otros'=>'Otros',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>209,
            'participante_curso_id'=>348
        ]);
    }
}
