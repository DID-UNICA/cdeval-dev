<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class StartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //USUARIOS DE PRUEBA
        DB::table('users')->insert([
            'nombres'=> 'Mauricio',
            'apellido_paterno' => 'Ramos',
            'apellido_materno' => 'Villaseñor',
            'email' => 'mauri334455@gmail.com',
            'usuario' => 'mauri334455',
            'password' => Hash::make('amores334455')
        ]);

        //SALONES DE PRUEBA COMO SEDES DE CURSOS
        DB::table('salons')->insert([
            'sede'=> 'Salon 213',
            'capacidad' => 50,
            'ubicacion' => 'FI',
        ]);
        DB::table('salons')->insert([
            'sede'=> 'Salon 321',
            'capacidad' => 50,
            'ubicacion' => 'FI',
        ]);
        DB::table('salons')->insert([
            'sede'=> 'Salon J102',
            'capacidad' => 50,
            'ubicacion' => 'FI',
        ]);
        DB::table('salons')->insert([
            'sede'=> 'Salon Y001',
            'capacidad' => 50,
            'ubicacion' => 'FI',
        ]);
        
        DB::table('salons')->insert([
          'sede'=> 'Zoom',
          'capacidad' => 50,
          'ubicacion' => 'www.zoom.com/invite/7uYvhdf',
        ]);

        DB::table('salons')->insert([
          'sede'=> 'Google Meet',
          'capacidad' => 50
        ]);
        //TABLA DE DIVISIONES DE LA FACULTAD DE INGENIERÍA
        DB::table('divisions')->insert([
            'nombre' => 'División de Ciencias Básicas',
            'abreviatura' => 'DCB'
        ]);
        
        DB::table('divisions')->insert([
          'nombre' => 'División de Ingeniería Civil y Geomática',
          'abreviatura' => 'DICyG'
        ]);

        DB::table('divisions')->insert([
            'nombre' => 'División de Ingeniería Eléctrica',
            'abreviatura' => 'DIE'
        ]);

        DB::table('divisions')->insert([
          'nombre' => 'División de Ingeniería en Ciencias de la Tierra',
          'abreviatura' => 'DICT'
        ]);

        DB::table('divisions')->insert([
          'nombre' => 'División de Ingeniería Mecánica e Industrial',
          'abreviatura' => 'DIMEI'
        ]);

        DB::table('divisions')->insert([
            'nombre' => 'División de Ciencias Sociales y Humanidades',
            'abreviatura' => 'DCSyH'
        ]);

        DB::table('divisions')->insert([
          'nombre' => 'División de Educación Continua y a Distancia',
          'abreviatura' => 'DECD'
        ]);

        DB::table('divisions')->insert([
          'nombre' => 'Becarios',
          'abreviatura' => 'Becarios'
        ]);

        DB::table('divisions')->insert([
          'nombre' => 'Servicio social',
          'abreviatura' => 'Servicio social'
        ]);

        DB::table('divisions')->insert([
          'nombre' => 'Externo',
          'abreviatura' => 'Externo',
        ]);

        DB::table('divisions')->insert([
            'nombre' => 'Secretarías',
            'abreviatura' => 'Secretarías'
          ]);

        //TABLA DE FACULTADES DE LA UNAM
        DB:: table('facultads')->insert([
            'nombre' =>'Facultad de Arquitectura'
        ]);
        DB:: table('facultads')->insert([
            'nombre' =>'Facultad de Artes y Diseño'
        ]);
        DB:: table('facultads')->insert([
            'nombre' =>'Facultad de Ciencias'
        ]);
        DB:: table('facultads')->insert([
            'nombre' =>'Facultad de Ciencias Políticas y Sociales'
        ]);
        DB:: table('facultads')->insert([
            'nombre' =>'Facultad de Contaduría y Administración'
        ]);
        DB:: table('facultads')->insert([
            'nombre' =>'Facultad de Derecho'
        ]);
        DB:: table('facultads')->insert([
            'nombre' =>'Facultad de Economía'
        ]);
        DB:: table('facultads')->insert([
            'nombre' =>'Facultad de Estudios Superiores (FES) Acatlán'
        ]);
        DB:: table('facultads')->insert([
            'nombre' =>'Facultad de Estudios Superiores (FES) Aragón'
        ]);
        DB:: table('facultads')->insert([
            'nombre' =>'Facultad de Estudios Superiores (FES) Cuautitlán'
        ]);
        DB:: table('facultads')->insert([
            'nombre' =>'Facultad de Estudios Superiores (FES) Iztacala'
        ]);
        DB:: table('facultads')->insert([
            'nombre' =>'Facultad de Estudios Superiores (FES) Zaragoza'
        ]);
        DB:: table('facultads')->insert([
            'nombre' =>'Facultad de Filosofía y Letras'
        ]);
        DB:: table('facultads')->insert([
            'nombre' =>'Facultad de Ingeniería'
        ]);
        DB:: table('facultads')->insert([
            'nombre' =>'Facultad de Medicina'
        ]);
        DB:: table('facultads')->insert([
            'nombre' =>'Facultad de Medicina Veterinaria y Zootecnia'
        ]);
        DB:: table('facultads')->insert([
            'nombre' =>'Facultad de Música'
        ]);
        DB:: table('facultads')->insert([
            'nombre' =>'Facultad de Odontología'
        ]);
        DB:: table('facultads')->insert([
            'nombre' =>'Facultad de Psicología'
        ]);
        DB:: table('facultads')->insert([
            'nombre' =>'Facultad de Química'
        ]);
        DB:: table('facultads')->insert([
            'nombre' =>'Centro de Física Aplicada y Tecnología Avanzada'
        ]);
        DB:: table('facultads')->insert([
            'nombre' =>'Instituo de Energías Renovables'
        ]);
        DB:: table('facultads')->insert([
            'nombre' =>'Centro de Nanociencias y Nanotecnología'
        ]);
        DB:: table('facultads')->insert([
            'nombre' =>'Escuela Nacional de Estudios Superiores,Unidad Mérida'
        ]);
        DB:: table('facultads')->insert([
            'nombre' =>'Escuela Nacional de Estudios Superiores,Unidad Morelia'
        ]);
        DB:: table('facultads')->insert([
            'nombre' =>'Instituto de Investigaciones en Matemáticas y en Sistemas'
        ]);
        DB:: table('facultads')->insert([
            'nombre' =>'Escuela Nacional de Enfermería y Obstetricia'
        ]);
        DB:: table('facultads')->insert([
            'nombre' =>'Escuela Nacional de Estudios Superiores, Unidad León'
        ]);
        DB:: table('facultads')->insert([
            'nombre' =>'Centro de Ciencias Genómicas'
        ]);
        DB:: table('facultads')->insert([
            'nombre' =>'Escuela Nacional de Estudios Superiores, Unidad Juriquilla'
        ]);
        DB:: table('facultads')->insert([
            'nombre' =>'Escuela Nacional de Trabajo Social'
        ]);
        DB:: table('facultads')->insert([
            'nombre' =>'Centro Universitarios de Estudios Cinematográficos'
        ]);
        DB:: table('facultads')->insert([
            'nombre' =>'Centro Universitario de Teatro'
        ]);
        DB:: table('facultads')->insert([
            'nombre' =>'Escuela Nacional de Lenguas, Lingúistica y Traducción'
        ]);

        //TABLA DE CARRERAS DE LA FACULTAD DE INGENIERÍA
        DB::table('carreras')->insert([
          'nombre' => 'Ingeniería Aeroespacial',
          'clave' => 107
        ]);

        DB::table('carreras')->insert([
            'nombre' => 'Ingeniería Civil',
            'clave' => 107
        ]);

        DB::table('carreras')->insert([
          'nombre' => 'Ingeniería Geomática',
          'clave' => 107
        ]);

        DB::table('carreras')->insert([
          'nombre' => 'Ingeniería Ambiental',
          'clave' => 107
        ]);

        DB::table('carreras')->insert([
          'nombre' => 'Ingeniería Eléctrica y Eletrónica',
          'clave' => 109
        ]);

        DB::table('carreras')->insert([
          'nombre' => 'Ingeniería de Minas y Metalurgía',
          'clave' => 108
        ]);

        DB::table('carreras')->insert([
          'nombre' => 'Ingeniería en Computación',
          'clave' => 110
        ]);
        
        DB::table('carreras')->insert([
          'nombre' => 'Ingeniería en Telecomunicaciones',
          'clave' => 111
        ]);
        
        DB::table('carreras')->insert([
          'nombre' => 'Ingeniería Geofísica',
          'clave' => 112
        ]);
        
        DB::table('carreras')->insert([
          'nombre' => 'Ingeniería Geológica',
          'clave' => 113
        ]);
        
        DB::table('carreras')->insert([
          'nombre' => 'Ingeniería Industrial',
          'clave' => 114
        ]);
        
        DB::table('carreras')->insert([
          'nombre' => 'Ingeniería Mecánica',
          'clave' => 115
        ]);
      
        DB::table('carreras')->insert([
          'nombre' => 'Ingeniería Mecatrónica',
          'clave' => 116
        ]);
        
        DB::table('carreras')->insert([
          'nombre' => 'Ingeniería Petrolera',
          'clave' => 117
        ]);

        DB::table('carreras')->insert([
          'nombre' => 'Ingenieria en Sistemas Biomédicos',
          'clave' => 1231
        ]);

        //TABLA DE CATEGORÍAS Y NIVELES DEL PROFESOR
        DB::table('categoria_nivel')->insert([
          'categoria' => 'Ninguna', 'abreviatura' => ''
        ]);
        
        DB::table('categoria_nivel')->insert([
          'categoria' => 'Administrativo', 'abreviatura' => 'Adm'
        ]);
        DB::table('categoria_nivel')->insert([
          'categoria' => 'Ayudante de profesor A', 'abreviatura' => 'AYTE PROF A'
        ]);
        DB::table('categoria_nivel')->insert([
          'categoria' => 'Ayudante de profesor B', 'abreviatura' => 'AYTE PROF B'
        ]);
        DB::table('categoria_nivel')->insert([
          'categoria' => 'Funcionario', 'abreviatura' => 'FUNC'
        ]);
        DB::table('categoria_nivel')->insert([
          'categoria' => 'Investigador Asociado B TC', 'abreviatura' => 'INV ASOC B TC'
        ]);
        DB::table('categoria_nivel')->insert([
          'categoria' => 'Investigador titular A TC', 'abreviatura' => 'INV TIT A T C'
        ]);
        DB::table('categoria_nivel')->insert([
          'categoria' => 'Investigador titular B MT', 'abreviatura' => 'INV TIT B M  T'
        ]);
        DB::table('categoria_nivel')->insert([
          'categoria' => 'Investigador titular B TC', 'abreviatura' => 'INV TIT B T  C'
        ]);
        DB::table('categoria_nivel')->insert([
          'categoria' => 'Investigador titular C MT', 'abreviatura' => 'INV TIT C M  T'
        ]);
        DB::table('categoria_nivel')->insert([
          'categoria' => 'Investigador titular C TC', 'abreviatura' => 'INV TIT C T  C'
        ]);
        DB::table('categoria_nivel')->insert([
          'categoria' => 'Profesor Emérito', 'abreviatura' => 'PROF EMERITO'
        ]);
        DB::table('categoria_nivel')->insert([
          'categoria' => 'Profesor de Asignatura A', 'abreviatura' => 'PROF ASG A'
        ]);
        DB::table('categoria_nivel')->insert([
          'categoria' => 'Profesor de Asignatura B', 'abreviatura' => 'PROF ASG B'
        ]);
        DB::table('categoria_nivel')->insert([
          'categoria' => 'Profesor Titular A TC', 'abreviatura' => 'PROF TIT A T C'
        ]);
        DB::table('categoria_nivel')->insert([
          'categoria' => 'Profesor Titular B TC', 'abreviatura' => 'PROF TIT B T C'
        ]);
        DB::table('categoria_nivel')->insert([
          'categoria' => 'Profesor Titular C TC', 'abreviatura' => 'PROF TIT C T C'
        ]);
        DB::table('categoria_nivel')->insert([
          'categoria' => 'Técnico Asociado A TC', 'abreviatura' => 'TEC ASOC A T C'
        ]);
        DB::table('categoria_nivel')->insert([
          'categoria' => 'Técnico Asociado B TC', 'abreviatura' => 'TEC ASOC B T C'
        ]);
        DB::table('categoria_nivel')->insert([
          'categoria' => 'Técnico Asociado C TC', 'abreviatura' => 'TEC ASOC C T C'
        ]);
        DB::table('categoria_nivel')->insert([
          'categoria' => 'Técnico Auxiliar A TC', 'abreviatura' => 'TEC AUX A T C'
        ]);
        DB::table('categoria_nivel')->insert([
          'categoria' => 'Técnico Auxiliar B MT', 'abreviatura' => 'TEC AUX B M T'
        ]);
        DB::table('categoria_nivel')->insert([
          'categoria' => 'Técnico Auxiliar B TC', 'abreviatura' => 'TEC AUX B T C'
        ]);
        DB::table('categoria_nivel')->insert([
          'categoria' => 'Técnico Auxiliar C TC', 'abreviatura' => 'TEC AUX C T C'
        ]);
        DB::table('categoria_nivel')->insert([
          'categoria' => 'Técnico Titular A TC', 'abreviatura' => 'TEC TIT A T C'
        ]);
        DB::table('categoria_nivel')->insert([
          'categoria' => 'Técnico Titular B TC', 'abreviatura' => 'TEC TIT B T C'
        ]);
        DB::table('categoria_nivel')->insert([
          'categoria' => 'Técnico Titular C TC', 'abreviatura' => 'TEC TIT C T C'
        ]);
				DB::table('categoria_nivel')->insert([
          'categoria' => 'Secretarias', 'abreviatura' => 'Secretarias'
        ]);
				DB::table('categoria_nivel')->insert([
          'categoria' => 'Becarios', 'abreviatura' => 'Becarios'
        ]);
				DB::table('categoria_nivel')->insert([
          'categoria' => 'Externos', 'abreviatura' => 'Externos'
        ]);
        

        //TABLA DE PROFESORES DE PRUEBA
        DB::table('profesors')->insert([
            'nombres' => 'Juan',
            'apellido_paterno' => 'Ramirez',
            'apellido_materno' => 'Gonzales',
            'rfc' => 'RAGJ720101T72',
            'numero_trabajador' => '12143231',
            'categoria_nivel_id'=>1,
            'fecha_nacimiento' => '1972-01-01',
            'telefono' => '55664487',
            'grado' => 'Maestría',
            'abreviatura_grado' => 'Mtro.',
            'email' => 'carosiim.sdco@gmail.com',
            'semblanza_corta'=> 'Arquitecto con especialidad en paisajismo. Actualmente está creando su propia consultura.
Sus grados profesionales son:
  - Doctora en Ciencias de la Educación por el Colegio de Posgrado de la Ciudad de México.
  - Maestra en Educación Superior por la Facultad de Filosofía y Letras de la UNAM.
  - Licenciada en Pedagogía por la Universidad Pedagógica Nacional.
Está Diplomada en: 
  - Aplicaciones de las TIC para la Enseñanza por la Facultad de Ingeniería y la 
  Dirección General de Cómputo y Tecnologías de la Información y la Comunicació
  de la UNAM. Docencia por la División de Educación Continua de la Facultad de 
  Filosofía y Letras de la UNAM.
  - Producción y Comprensión Lingüística por la Casa de las Humanidades de la UNAM.
Está Certificada en:
  - La Impartición de Cursos Presenciales por el Organismo Gubernamental CONOCER de SEP.
    - Como Auditora Interna Nivel 2 en los Sistemas de Gestión de la Calidad, sobre la
    base de la NORMA ISO 9001;2000 y bajo las directrices de ISO 9011;2002 por el
  Organismo de Enlace Liasion INLAC a ISOITC176.
    - Como Auditora Interna por la Coordinación de la Investigación Científica de la UNAM.
    Ha cursado: 68 cursos, talleres y seminarios en temas de formación docente, didáctica,
    evaluación y comunicación.
    Ha impartido 102 cursos, talleres y seminarios para profesores. En temas de formación
    docente y área didáctico pedagógica. Es profesora de asignatura desde 1994 en las
    asignaturas de "Técnicas para el estudio" en el semestre propedéutico y en "Cultura
    y comunicación" de primer semestre. Es asesora psicopedagógica en COPADI Tutora y 
    sinodal del Posgrado de MADEMS-UNAM. A participado como ponente en Congresos 
    Nacionales e Internacionales de Educación, Enseñanza de la Ingeniería, Formación 
    Docente y pedagogía desde el nivel educativo inicial. Medio superior y superior. 
    Publicaciones en Colaboración: Programas y Manuales Psicopedagógicos para la atención
    de niños de O a 6 años en los Centros de Desarrollo Infantil Derechos Reservados. 
    SEP. Registro Derechos de Autor 14091981 222/81 Agosto 1981. 
Está Diplomada en: 
  - Aplicaciones de las TIC para la Enseñanza por la Facultad de Ingeniería y la 
  Dirección General de Cómputo y Tecnologías de la Información y la Comunicación de la 
  UNAM. Docencia por la División de Educación Continua de la Facultad de Filosofía y 
  Letras de la UNAM.
  - Producción y Comprensión Lingüística por la Casa de las Humanidades de la UNAM. 
Está Certificada en:
  - La Impartición de Cursos Presenciales por el Organismo Gubernamental CONOCER de SEP. 
    - Como Auditora Interna Nivel 2 en los Sistemas de Gestión de la Calidad, sobre la
    base de la NORMA ISO 9001;2000 y bajo las directrices de ISO 9011;2002 por el 
    Organismo de Enlace Liasion INLAC a ISOITC176.',
            'genero' => 'masculino',
            'facebook' => 'Juan Ramirez',
            'unam' => false,
            'procedencia'=> 'Universidad Miskatonic'

        ]);
        DB::table('profesors')->insert([
            'nombres' => 'Marta',
            'apellido_paterno' => 'Suarez',
            'apellido_materno' => 'Prados',
            'rfc' => 'SUPM720101D11',
            'numero_trabajador' => '12143232',
            'categoria_nivel_id'=>1,
            'fecha_nacimiento' => '1972-01-01',
            'telefono' => '557458963',
            'grado' => 'Licenciatura',
            'abreviatura_grado' => 'Lic.',
            'email' => 'MSP@gmail.com',
            'semblanza_corta' => 'Profesora de la facultad de ingeniería, fundó la asociación de mujeres programadoras con
el fin de impulsar los derechos y la presencia de la mujer en el ámbito profesional de
las Tecnologías de la Información. Es egresada de la Facultad de Ciencias. Doctora en
análisis de datos.',
            'genero' => 'femenino',
            'facebook' => 'Martha Suarez',
            'unam' => true,
            'facultad_id' =>1

        ]);
        DB::table('profesors')->insert([
            'nombres' => 'Santiago',
            'apellido_paterno' => 'Hernández',
            'apellido_materno' => 'Gonzales',
            'rfc' => 'HEGS720517RJ3',
            'numero_trabajador' => '12143233',
            'categoria_nivel_id'=>1,
            'fecha_nacimiento' => '1972-05-17',
            'telefono' => '55664487',
            'grado' => 'Ingeniería',
            'abreviatura_grado' => 'Ing.',
            'email' => 'prof2@gmail.com',
            'semblanza_corta' => 'Ingeniero geofisico, con especilidad en volcanes y terremotos y maestria en rocas.',
            'genero' => 'masculino',
            'facebook' => 'face',
            'unam' => true,
            'facultad_id' =>14

        ]);
        DB::table('profesors')->insert([
            'nombres' => 'Melina',
            'apellido_paterno' => 'Pelcastre',
            'apellido_materno' => 'Prados',
            'rfc' => 'PEPM720517IW2',
            'numero_trabajador' => '12143234',
            'categoria_nivel_id'=>1,
            'fecha_nacimiento' => '1972-05-017',
            'telefono' => '557458963',
            'grado' => 'Licenciatura',
            'abreviatura_grado' => 'Lic.',
            'email' => 'MSP2@gmail.com',
            'semblanza_corta' => 'Licenciada en administracion egresada de la FCyA de la UNAM con honores.',
            'genero' => 'femenino',
            'facebook' => 'MyFace',
            'unam' => true,
            'facultad_id' =>5

        ]);
        DB::table('profesors')->insert([
            'nombres' => 'Mateo',
            'apellido_paterno' => 'Juarez',
            'apellido_materno' => 'Fernández',
            'rfc' => 'JUFM720101M74',
            'numero_trabajador' => '12143235',
            'categoria_nivel_id'=>5,
            'fecha_nacimiento' => '1972-01-01',
            'telefono' => '55664487',
            'grado' => 'Licenciatura',
            'abreviatura_grado' => 'Lic.',
            'email' => 'prof3@gmail.com',
            'semblanza_corta' => 'Ingeniero mecanico con especialidad en diseño mecanico egresado de la unam y con
maestria en Alemania.',
            'genero' => 'masculino',
            'facebook' => 'Mateo Juarez',
            'unam' => true,
            'facultad_id' =>14

        ]);
        DB::table('profesors')->insert([
            'nombres' => 'Gabriela',
            'apellido_paterno' => 'González',
            'apellido_materno' => 'Velázquez',
            'rfc' => 'GOVG720101FZ6',
            'numero_trabajador' => '12143236',
            'categoria_nivel_id'=>1,
            'fecha_nacimiento' => '1972-01-01',
            'telefono' => '557458963',
            'grado' => 'Doctorado',
            'abreviatura_grado' => 'Dra.',
            'email' => 'MSP3@gmail.com',
            'semblanza_corta' => 'Ingeniera industrial, con un MBA en inglaterra y tambien trabaja en Coca Cola.',
            'genero' => 'femenino',
            'facebook' => 'Gaby Gonzalez',
            'unam' => true,
            'facultad_id' =>14
        ]);
        DB::table('profesors')->insert([
            'nombres' => 'Luis Daniel',
            'apellido_paterno' => 'Velásquez',
            'apellido_materno' => 'Velázquez',
            'rfc' => 'VEVL720101T65',
            'numero_trabajador' => '12143237',
            'categoria_nivel_id'=>7,
            'fecha_nacimiento' => '1972-01-01',
            'telefono' => '55664487',
            'grado' => 'Maestría',
            'abreviatura_grado' => 'Mtro.',
            'email' => 'prof4@gmail.com',
            'semblanza_corta' => 'Ingeniero en telecomunicaciones y estudia actualmente su segunda carrera, en economia.',
            'genero' => 'masculino',
            'facebook' => 'Dani Velásquez',
            'unam' => true,
            'facultad_id' =>14
        ]);
        DB::table('profesors')->insert([
            'nombres' => 'Fernanda',
            'apellido_paterno' => 'Núñez',
            'apellido_materno' => 'Sandoval',
            'rfc' => 'NUSF720101I63',
            'numero_trabajador' => '12143238',
            'categoria_nivel_id'=>1,
            'fecha_nacimiento' => '1972-01-01',
            'telefono' => '557458963',
            'grado' => 'Maestría',
            'abreviatura_grado' => 'Mtra.',
            'email' => 'MSP4@gmail.com',
            'semblanza_corta' => 'Ingeniera civil, maestria en puentes y con especialidad en puentes muy grandes.',
            'genero' => 'femenino',
            'facebook' => 'Fer Sandoval',
            'unam' => true,
            'facultad_id' =>14

        ]);
        DB::table('profesors')->insert([
            'nombres' => 'Ángel',
            'apellido_paterno' => 'García',
            'apellido_materno' => 'Casares',
            'rfc' => 'GACA720101EL4',
            'numero_trabajador' => '12143239',
            'categoria_nivel_id'=>11,
            'fecha_nacimiento' => '1972-01-01',
            'telefono' => '55664487',
            'grado' => 'Maestría',
            'abreviatura_grado' => 'Mtro.',
            'email' => 'prof5@gmail.com',
            'semblanza_corta' => 'Ingeniero petrolero, actualmente se desempeña tambien en cargos altos en PEMEX',
            'genero' => 'masculino',
            'facebook' => 'Angel García Caseres',
            'unam' => true,
            'facultad_id' =>14
        ]);
        DB::table('profesors')->insert([
            'nombres' => 'Vivian',
            'apellido_paterno' => 'Salcedo',
            'apellido_materno' => 'Víquez',
            'rfc' => 'SAVV720101RV2',
            'numero_trabajador' => '12143240',
            'categoria_nivel_id'=>4,
            'fecha_nacimiento' => '1972-01-01',
            'telefono' => '557458963',
            'grado' => 'Maestría',
            'abreviatura_grado' => 'Mtra.',
            'email' => 'MSP5@gmail.com',
            'semblanza_corta' => 'Licenciada en contaduria, con maestria en impuestos empresariales y doctorado en 
contaduria para Macroempresas.',
            'genero' => 'femenino',
            'facebook' => 'Vivi Salcedo',
            'unam' => true,
            'facultad_id' =>5
        ]);


        DB::table('profesors')->insert([
            'nombres' => 'Arturo',
            'apellido_paterno' => 'Galván',
            'apellido_materno' => 'Argote',
            'rfc' => 'GAAA720101HY0',
            'numero_trabajador' => '12143241',
            'categoria_nivel_id'=>5,
            'fecha_nacimiento' => '1972-01-01',
            'telefono' => '55664487',
            'grado' => 'Maestría',
            'abreviatura_grado' => 'Mtro.',
            'email' => 'prof6@gmail.com',
            'semblanza_corta' => 'Arquitecto con especialidad en paisajismo. Actualmente está creando su propia consultura',
            'genero' => 'masculino',
            'facebook' => 'Arturo Galvan',
            'unam' => true,
            'facultad_id' =>1

        ]);
        DB::table('profesors')->insert([
            'nombres' => 'Melissa',
            'apellido_paterno' => 'Valles',
            'apellido_materno' => 'Hernández',
            'rfc' => 'VAHM720101Q41',
            'numero_trabajador' => '12143242',
            'categoria_nivel_id'=>1,
            'fecha_nacimiento' => '1972-01-01',
            'telefono' => '557458963',
            'grado' => 'Maestría',
            'abreviatura_grado' => 'Mtra.',
            'email' => 'MSP6@gmail.com',
            'semblanza_corta' => 'Licenciada en arquitectura con maestria en diseño de interiores ',
            'genero' => 'femenino',
            'facebook' => 'Melissaa Valles',
            'unam' => true,
            'facultad_id' =>1

        ]);
        DB::table('profesors')->insert([
            'nombres' => 'Roberto',
            'apellido_paterno' => 'Sánchez',
            'apellido_materno' => 'Gonzales',
            'rfc' => 'SAGR720101JR0',
            'numero_trabajador' => '12143243',
            'categoria_nivel_id'=>1,
            'fecha_nacimiento' => '1972-01-01',
            'telefono' => '55664487',
            'grado' => 'Maestría',
            'abreviatura_grado' => 'Mtro.',
            'email' => 'prof7@gmail.com',
            'semblanza_corta' => 'Ingeniero en Minas, con especialidad en minas de carbon y diamante.',
            'genero' => 'masculino',
            'facebook' => 'Roberto Sanchez',
            'unam' => true,
            'facultad_id' =>14

        ]);
        DB::table('profesors')->insert([
            'nombres' => 'Daniela',
            'apellido_paterno' => 'Arjona',
            'apellido_materno' => 'Valle',
            'rfc' => 'AOVD720101DQ6',
            'numero_trabajador' => '12143244',
            'categoria_nivel_id'=>1,
            'fecha_nacimiento' => '1972-05-017',
            'telefono' => '557458963',
            'grado' => 'Maestría',
            'abreviatura_grado' => 'Mtra.',
            'email' => 'MSP7@gmail.com',
            'semblanza_corta' => 'Ingeniera en Sistemas Biómedicos, egresada del ITAM',
            'genero' => 'femenino',
            'facebook' => 'Dani Arjona',
            'unam' => true,
            'facultad_id' =>5

        ]);
        DB::table('profesors')->insert([
            'nombres' => 'Alejandro',
            'apellido_paterno' => 'López',
            'apellido_materno' => 'Mateos',
            'rfc' => 'LOMA720101EU3',
            'numero_trabajador' => '12143245',
            'categoria_nivel_id'=>5,
            'fecha_nacimiento' => '1972-01-01',
            'telefono' => '55664487',
            'grado' => 'Maestría',
            'abreviatura_grado' => 'Mtro.',
            'email' => 'prof8@gmail.com',
            'semblanza_corta' => 'Ingeniero mecanico con especialidad en termofluidos actualmente trabaja para Ferrari.',
            'genero' => 'masculino',
            'facebook' => 'Alex López Mateos',
            'unam' => true,
            'facultad_id' =>14

        ]);
        DB::table('profesors')->insert([
            'nombres' => 'Julia',
            'apellido_paterno' => 'Domínguez',
            'apellido_materno' => 'Méndez',
            'rfc' => 'DOMJ7201011Q9',
            'numero_trabajador' => '12143246',
            'categoria_nivel_id'=>1,
            'fecha_nacimiento' => '1972-01-01',
            'telefono' => '557458963',
            'grado' => 'Maestría',
            'abreviatura_grado' => 'Mtra.',
            'email' => 'MSP8@gmail.com',
            'semblanza_corta' => 'Ingeniera insdustrial enfocada al area de logistica con maestry en cadena de suministros
en Canada.',
            'genero' => 'femenino',
            'facebook' => 'Julia Dominguez',
            'unam' => true,
            'facultad_id' =>14
        ]);
        DB::table('profesors')->insert([
            'nombres' => 'Luis Fernando',
            'apellido_paterno' => 'Méndez',
            'apellido_materno' => 'Vallesteros',
            'rfc' => 'MEVL720101GV4',
            'numero_trabajador' => '12143247',
            'categoria_nivel_id'=>7,
            'fecha_nacimiento' => '1972-01-01',
            'telefono' => '55664487',
            'grado' => 'Maestría',
            'abreviatura_grado' => 'Mtro.',
            'email' => 'prof9@gmail.com',
            'semblanza_corta' => 'Ingeniero en telecomunicaciones que trabaja con la super computadora de la UNAM',
            'genero' => 'masculino',
            'facebook' => 'Luis Méndez',
            'unam' => true,
            'facultad_id' =>14
        ]);
        DB::table('profesors')->insert([
            'nombres' => 'Hilda',
            'apellido_paterno' => 'Ramírez',
            'apellido_materno' => 'Ramírez',
            'rfc' => 'RARH720101DMA',
            'numero_trabajador' => '12143248',
            'categoria_nivel_id'=>1,
            'fecha_nacimiento' => '1972-01-01',
            'telefono' => '557458963',
            'grado' => 'Maestría',
            'abreviatura_grado' => 'Mtra.',
            'email' => 'MSP9@gmail.com',
            'semblanza_corta' => 'Ingeniera civil, socia de Carlos Slim y con maestria en carreteras',
            'genero' => 'femenino',
            'facebook' => 'Hilda Ramirez',
            'unam' => true,
            'facultad_id' =>14

        ]);
        DB::table('profesors')->insert([
            'nombres' => 'Juan',
            'apellido_paterno' => 'Macedo',
            'apellido_materno' => 'Jiménez',
            'rfc' => 'MAJJ720101GF7',
            'numero_trabajador' => '12143249',
            'categoria_nivel_id'=>11,
            'fecha_nacimiento' => '1972-01-01',
            'telefono' => '55664487',
            'grado' => 'Maestría',
            'abreviatura_grado' => 'Mtro.',
            'email' => 'prof10@gmail.com',
            'semblanza_corta' => 'Ingeniero petrolero, trabaja en paises arabes y es de los hombres más ricos del mundo',
            'genero' => 'masculino',
            'facebook' => 'Juan Macedo',
            'unam' => true,
            'facultad_id' =>14
        ]);
        DB::table('profesors')->insert([
            'nombres' => 'Viridiana',
            'apellido_paterno' => 'Valencia',
            'apellido_materno' => 'Manso',
            'rfc' => 'VAMV720101HZA',
            'numero_trabajador' => '12143250',
            'categoria_nivel_id'=>4,
            'fecha_nacimiento' => '1972-01-01',
            'telefono' => '557458963',
            'grado' => 'Maestría',
            'abreviatura_grado' => 'Mtra.',
            'email' => 'MSP10@gmail.com',
            'semblanza_corta' => 'Licenciada en contaduria, ella calcula los imppuestos de la unam y tiene maestría
en impuestos universitarios.',
            'genero' => 'femenino',
            'facebook' => 'Viridiana Valencia',
            'unam' => true,
            'facultad_id' =>5
        ]);

        DB::table('profesors')->insert([ //id=21
          'nombres'=>'Gabriel',
          'apellido_paterno'=>'Lopez',
          'apellido_materno'=>'Dominguez',
          'rfc'=>'LODG720202LODG',
          'numero_trabajador' => '121432492',
          'fecha_nacimiento'=>'1972-02-02'
        ]);

        DB::table('profesors')->insert([ //id=22
          'nombres'=>'Guillermo Adolfo',
          'apellido_paterno'=>'Vignau',
          'apellido_materno'=>'Esteva',
          'rfc'=>'VIEG720203VIEG',
          'numero_trabajador' => '121432493',
          'fecha_nacimiento'=>'1972-02-03'
        ]);

        DB::table('profesors')->insert([ //id=23
          'nombres'=>'Guillermo Gabriel',
          'apellido_paterno'=>'Aguilar',
          'apellido_materno'=>'Lacavex',
          'rfc'=>'AGLG740101AGLG',
          'numero_trabajador' => '1214324500',
          'fecha_nacimiento'=>'1974-01-01'
        ]);

        DB::table('profesors')->insert([ //id=24
          'nombres'=>'Victorino',
          'apellido_paterno'=>'Garcia',
          'apellido_materno'=>'Ramos',
          'rfc'=>'GARV740102GARV',
          'numero_trabajador' => '1214324501',
          'fecha_nacimiento'=>'1974-01-02'
        ]);

        DB::table('profesors')->insert([ //id=25
          'nombres'=>'Luis Bruno',
          'apellido_paterno'=>'Garduño',
          'apellido_materno'=>'Castro',
          'rfc'=>'GACL740103GACL',
          'numero_trabajador' => '1214324502',
          'fecha_nacimiento'=>'1974-01-03'
        ]);

        DB::table('profesors')->insert([ //id=26
          'nombres'=>'Manuel',
          'apellido_paterno'=>'Hernandez',
          'apellido_materno'=>'Gonzalez',
          'rfc'=>'HEGM740105HEGM',
          'numero_trabajador' => '1214324504',
          'fecha_nacimiento'=>'1974-01-05'
        ]);

        DB::table('profesors')->insert([ //id=27
          'nombres'=>'Julieta',
          'apellido_paterno'=>'Mares',
          'apellido_materno'=>'Lopez',
          'rfc'=>'MALJ740106MALJ',
          'numero_trabajador' => '1214324505',
          'fecha_nacimiento'=>'1974-01-06'
        ]);

        DB::table('profesors')->insert([ //id=28
          'nombres'=>'Jacquelyn',
          'apellido_paterno'=>'Martinez',
          'apellido_materno'=>'Alvarez',
          'rfc'=>'MAAJ740107MAAJ',
          'numero_trabajador' => '1214324506',
          'fecha_nacimiento'=>'1974-01-07'
        ]);

        DB::table('profesors')->insert([ //id=29
          'nombres'=>'Luis Enrique',
          'apellido_paterno'=>'Quintanar',
          'apellido_materno'=>'Cortes',
          'rfc'=>'QUCL740108QUCL',
          'numero_trabajador' => '1214324507',
          'fecha_nacimiento'=>'1974-01-08'
        ]);

        DB::table('profesors')->insert([ //id=30
          'nombres'=>'Israel',
          'apellido_paterno'=>'Rios',
          'apellido_materno'=>'Mora',
          'rfc'=>'RIMI740109RIMI',
          'numero_trabajador' => '1214324508',
          'fecha_nacimiento'=>'1974-01-09'
        ]);

        DB::table('profesors')->insert([ //id=31
          'nombres'=>'Servando',
          'apellido_paterno'=>'Ruiz',
          'apellido_materno'=>'Rodriguez',
          'rfc'=>'RURS740109RURS',
          'numero_trabajador' => '1214324509',
          'fecha_nacimiento'=>'1974-01-09'
        ]);

        DB::table('profesors')->insert([ //id=32
          'nombres'=>'Norma Isela',
          'apellido_paterno'=>'Vega',
          'apellido_materno'=>'Deloya',
          'rfc'=>'VEDM740110VEDM',
          'numero_trabajador' => '1214324510',
          'fecha_nacimiento'=>'1974-01-10'
        ]);

        DB::table('profesors')->insert([
          'nombres'=>'Voileta Erendira', //id=33
          'apellido_paterno'=>'Escalante',
          'apellido_materno'=>'Estrada',
          'rfc'=>'EEEV720102EEE',
          'numero_trabajador' => '121432450',
          'fecha_nacimiento'=>'1972-01-02'
        ]);

        DB::table('profesors')->insert([ //id=34
          'nombres'=>'Jose',
          'apellido_paterno'=>'Gonzalez',
          'apellido_materno'=>'Suarez',
          'rfc'=>'GOSJ720103GOSJ',
          'numero_trabajador' => '121432451',
          'fecha_nacimiento'=>'1972-01-03'
        ]);

        DB::table('profesors')->insert([ //id=35
          'nombres'=>'Patricia',
          'apellido_paterno'=>'Gonzalez',
          'apellido_materno'=>'Vega',
          'rfc'=>'GOPV720104GOPV',
          'numero_trabajador' => '121432452',
          'fecha_nacimiento'=>'1972-01-04'
        ]);

        DB::table('profesors')->insert([ //id=36
          'nombres'=>'Gudelia',
          'apellido_paterno'=>'Hernandez',
          'apellido_materno'=>'Molina',
          'rfc'=>'HEMG720105HEMG',
          'numero_trabajador' => '121432453',
          'fecha_nacimiento'=>'1972-01-05'
        ]);

        DB::table('profesors')->insert([ //id=37
          'nombres'=>'Jose Gerardo',
          'apellido_paterno'=>'Lopez',
          'apellido_materno'=>'Bonifacio',
          'rfc'=>'LOBJ720106LOBJ',
          'numero_trabajador' => '121432454',
          'fecha_nacimiento'=>'1972-01-06'
        ]);

        DB::table('profesors')->insert([ //id=38
          'nombres'=>'Martin',
          'apellido_paterno'=>'Mejia',
          'apellido_materno'=>'Ramos',
          'rfc'=>'MERM720107MERM',
          'numero_trabajador' => '121432455',
          'fecha_nacimiento'=>'1972-01-07'
        ]);

        DB::table('profesors')->insert([ //id=39
          'nombres'=>'Javier',
          'apellido_paterno'=>'Millan',
          'apellido_materno'=>'Martinez',
          'rfc'=>'MIMJ720108MIMJ',
          'numero_trabajador' => '121432456',
          'fecha_nacimiento'=>'1972-01-08'
        ]);

        DB::table('profesors')->insert([ //id=40
          'nombres'=>'Eduardo',
          'apellido_paterno'=>'Rosas',
          'apellido_materno'=>'Lira',
          'rfc'=>'ROLE720109ROLE',
          'numero_trabajador' => '121432457',
          'fecha_nacimiento'=>'1972-01-09'
        ]);

        DB::table('profesors')->insert([ //id=41
          'nombres'=>'Agustin Gerardo',
          'apellido_paterno'=>'Ruiz',
          'apellido_materno'=>'Tamayo',
          'rfc'=>'RUTA720111RUTA',
          'numero_trabajador' => '121432458',
          'fecha_nacimiento'=>'1972-01-11'
        ]);

        DB::table('profesors')->insert([ //id=42
          'nombres'=>'Jaime Juan',
          'apellido_paterno'=>'Zarza y',
          'apellido_materno'=>'Teran',
          'rfc'=>'ZATJ720112ZATJ',
          'numero_trabajador' => '121432459',
          'fecha_nacimiento'=>'1972-01-12'
        ]);

        //Instructores
        DB::table('profesors')->insert([ //id=43
          'nombres'=>'Claudia',
          'apellido_paterno'=>'Loreto',
          'apellido_materno'=>'Miranda',
          'rfc'=>'LOMC720204LOMC',
          'numero_trabajador' => '121432494',
          'fecha_nacimiento'=>'1972-02-04'
        ]);

        DB::table('profesors')->insert([ //id=44
          'nombres'=>'Anayantzin',
          'apellido_paterno'=>'Almanza',
          'apellido_materno'=>'Valdez',
          'rfc'=>'ALVA720112ALVA',
          'numero_trabajador' => '121432460',
          'fecha_nacimiento'=>'1972-01-13'
        ]);

        DB::table('profesors')->insert([ //id=45
          'nombres'=>'Angel Francisco',
          'apellido_paterno'=>'Alvarez',
          'apellido_materno'=>'Herrera',
          'rfc'=>'ALHA720114ALHA',
          'numero_trabajador' => '121432461',
          'fecha_nacimiento'=>'1972-01-14'
        ]);

        DB::table('profesors')->insert([ //id=46
          'nombres'=>'Gaspar',
          'apellido_paterno'=>'Franco',
          'apellido_materno'=>'Hernandez',
          'rfc'=>'FAHG720115FAHG',
          'numero_trabajador' => '121432462',
          'fecha_nacimiento'=>'1972-01-15'
        ]);

        DB::table('profesors')->insert([ //id=47
          'nombres'=>'Luis Antonio',
          'apellido_paterno'=>'Garcia',
          'apellido_materno'=>'Villanueva',
          'rfc'=>'GAVL720116GAVL',
          'numero_trabajador' => '121432463',
          'fecha_nacimiento'=>'1972-01-16'
        ]);

        DB::table('profesors')->insert([ //id=48
          'nombres'=>'Griselda Berenice',
          'apellido_paterno'=>'Hernandez',
          'apellido_materno'=>'Cruz',
          'rfc'=>'HERC720117HERCV',
          'numero_trabajador' => '121432464',
          'fecha_nacimiento'=>'1972-01-17'
        ]);

        DB::table('profesors')->insert([ //id=49
          'nombres'=>'Miguel Angel',
          'apellido_paterno'=>'Hofmann',
          'apellido_materno'=>'Aguirre',
          'rfc'=>'HOAM720118HOAM',
          'numero_trabajador' => '121432465',
          'fecha_nacimiento'=>'1972-01-18'
        ]);

        DB::table('profesors')->insert([ //id=50
          'nombres'=>'Lucia Yazmin',
          'apellido_paterno'=>'Juarez',
          'apellido_materno'=>'De la Mora',
          'rfc'=>'JUDL720119JUDL',
          'numero_trabajador' => '121432466',
          'fecha_nacimiento'=>'1972-01-19'
        ]);

        DB::table('profesors')->insert([ //id=51
          'nombres'=>'Jose Miguel',
          'apellido_paterno'=>'Martinez',
          'apellido_materno'=>'Alcazar',
          'rfc'=>'MAAJ720120MAAJ',
          'numero_trabajador' => '121432467',
          'fecha_nacimiento'=>'1972-01-20'
        ]);

        DB::table('profesors')->insert([ //id=52
          'nombres'=>'Brenda Iveth',
          'apellido_paterno'=>'Moreno',
          'apellido_materno'=>'Hurtado',
          'rfc'=>'MOHB720121MOHB',
          'numero_trabajador' => '121432468',
          'fecha_nacimiento'=>'1972-01-21'
        ]);

        DB::table('profesors')->insert([ //id=53
          'nombres'=>'Georgina',
          'apellido_paterno'=>'Nieto',
          'apellido_materno'=>'Castañeda',
          'rfc'=>'NICG720122NICG',
          'numero_trabajador' => '121432469',
          'fecha_nacimiento'=>'1972-01-22'
        ]);

        DB::table('profesors')->insert([ //id=54
          'nombres'=>'Maria Teresa',
          'apellido_paterno'=>'Peñuñuri',
          'apellido_materno'=>'Santoyo',
          'rfc'=>'PESM720123PESM',
          'numero_trabajador' => '121432470',
          'fecha_nacimiento'=>'1972-01-23'
        ]);

        DB::table('profesors')->insert([ //id=55
          'nombres'=>'Soledad Alicia',
          'apellido_paterno'=>'Rivera',
          'apellido_materno'=>'Rosales',
          'rfc'=>'RIRS720124RIRS',
          'numero_trabajador' => '121432471',
          'fecha_nacimiento'=>'1972-01-24'
        ]);

        DB::table('profesors')->insert([ //id=56
          'nombres'=>'Mario Sinuhe',
          'apellido_paterno'=>'Sanchez',
          'apellido_materno'=>'Dominguez',
          'rfc'=>'SADM720125SADM',
          'numero_trabajador' => '121432472',
          'fecha_nacimiento'=>'1972-01-25'
        ]);

        DB::table('profesors')->insert([ //id=57
          'nombres'=>'Juan',
          'apellido_paterno'=>'Varela',
          'apellido_materno'=>'Juarez',
          'rfc'=>'VAJJ720205VAJJ',
          'numero_trabajador' => '121432496',
          'fecha_nacimiento'=>'1972-02-05'
      ]);

      DB::table('profesors')->insert([ //id=58
        'nombres'=>'Juan',
        'apellido_paterno'=>'Tapia',
        'apellido_materno'=>'Gonzalez',
        'rfc'=>'TAGJ720206TAGL',
        'numero_trabajador' => '121432497',
        'fecha_nacimiento'=>'1972-02-06'
      ]);

      DB::table('profesors')->insert([ //id=59
        'nombres'=>'Jose Javier',
        'apellido_paterno'=>'Cervantes',
        'apellido_materno'=>'Cabello',
        'rfc'=>'CECJ720207CECJ',
        'numero_trabajador' => '121432498',
        'fecha_nacimiento'=>'1972-02-07'
      ]);

      DB::table('profesors')->insert([ //id=60
        'nombres'=>'Francisco Javier',
        'apellido_paterno'=>'Marquez',
        'apellido_materno'=>'Correo',
        'rfc'=>'MACF740112MACF',
        'numero_trabajador' => '1214324512',
        'fecha_nacimiento'=>'1974-01-12'
      ]);

      DB::table('profesors')->insert([ //id=61
        'nombres'=>'David Abraham',
        'apellido_paterno'=>'Santoyo',
        'apellido_materno'=>'Garcia',
        'rfc'=>'SAGD740113SAGD',
        'numero_trabajador' => '1214324513',
        'fecha_nacimiento'=>'1974-01-13'
      ]);
  
      DB::table('profesors')->insert([ //id=62
        'nombres'=>'Estefania',
        'apellido_paterno'=>'Abarca',
        'apellido_materno'=>'Rodriguez',
        'rfc'=>'ABRE73102ABRE',
        'numero_trabajador' => '121432473',
        'fecha_nacimiento'=>'1973-01-02'
      ]);

      DB::table('profesors')->insert([ //id=63
        'nombres'=>'German Ramon',
        'apellido_paterno'=>'Arconada',
        'apellido_materno'=>'Rey',
        'rfc'=>'AORG0101012R1',
        'curp' =>'AORG010101HDFRYR03',
        'numero_trabajador' => '12345703',
        'fecha_nacimiento'=>'1901-01-01'
    ]);

		DB::table('profesors')->insert([ //id=64
			'nombres'=>'Salvador',
			'apellido_paterno'=>'Centeno',
			'apellido_materno'=>'Estrada',
			'rfc'=>'CEES73103CEES',
			'numero_trabajador' => '121432474',
			'fecha_nacimiento'=>'1973-01-03'
		]);

    DB::table('profesors')->insert([ //id=65
			'nombres'=>'Jesus Javier',
			'apellido_paterno'=>'Cortes',
			'apellido_materno'=>'Rosas',
			'rfc'=>'CORJ73104CORJ',
			'numero_trabajador' => '121432475',
			'fecha_nacimiento'=>'1973-01-04'
		]);

		DB::table('profesors')->insert([ //id=66
			'nombres'=>'Miguel Eduardo',
			'apellido_paterno'=>'Gonzalez',
			'apellido_materno'=>'Cardenas',
			'rfc'=>'GOCM73105GOCM',
			'numero_trabajador' => '121432476',
			'fecha_nacimiento'=>'1973-01-05'
		]);

    DB::table('profesors')->insert([ //id=67
			'nombres'=>'Jose Luis',
			'apellido_paterno'=>'Ramirez',
			'apellido_materno'=>'Cruz',
			'rfc'=>'RACJ73106RACJ',
			'numero_trabajador' => '121432477',
			'fecha_nacimiento'=>'1973-01-06'
		]);

    DB::table('profesors')->insert([ //id=68
			'nombres'=>'Rodrigo Alberto',
			'apellido_paterno'=>'Rincon',
			'apellido_materno'=>'Gomez',
			'rfc'=>'RIGR73107RIGR',
			'numero_trabajador' => '121432478',
			'fecha_nacimiento'=>'1973-01-07'
		]);

    DB::table('profesors')->insert([ //id=69
			'nombres'=>'Jesus',
			'apellido_paterno'=>'Castro',
			'apellido_materno'=>'Rodriguez',
			'rfc'=>'CARJ73108CARJ',
			'numero_trabajador' => '121432479',
			'fecha_nacimiento'=>'1973-01-08'
		]);

    DB::table('profesors')->insert([ //id=70
      'nombres'=>'Juan Angel',
      'apellido_paterno'=>'Rodriguez',
      'apellido_materno'=>'Gomez',
      'rfc'=>'ROGJ010101QM4',
      'curp' =>'ROGJ010101HDFDMN08',
      'numero_trabajador' => '12345650',
      'fecha_nacimiento'=>'1901-01-01'
    ]);    

    //Instructores
    DB::table('profesors')->insert([ //id=71
      'nombres'=>'Martin',
      'apellido_paterno'=>'Barcenas',
      'apellido_materno'=>'Escobar',
      'rfc'=>'BAEM720208BAEM',
      'numero_trabajador' => '121432499',
      'fecha_nacimiento'=>'1972-02-08'
    ]);

    //Instructores
    DB::table('profesors')->insert([ ///id=72
      'nombres'=>'Rigel',
      'apellido_paterno'=>'Gamez',
      'apellido_materno'=>'Lael',
      'rfc'=>'GALR720209GALR',
      'numero_trabajador' => '1214324100',
      'fecha_nacimiento'=>'1972-02-09'
    ]);

    //Instructores
    DB::table('profesors')->insert([ //id=73
      'nombres'=>'Juan Manuel',
      'apellido_paterno'=>'Gil',
      'apellido_materno'=>'Perez',
      'rfc'=>'GIPJ720210GIPJ',
      'numero_trabajador' => '1214324101',
      'fecha_nacimiento'=>'1972-02-10'
    ]);

    DB::table('profesors')->insert([ //id=74
			'nombres'=>'Eli Israel',
			'apellido_paterno'=>'Hernandez',
			'apellido_materno'=>'Garcia',
			'rfc'=>'HEGE740201HEGE',
			'numero_trabajador' => '1214324514',
			'fecha_nacimiento'=>'1974-02-01'
		]);

    DB::table('profesors')->insert([ //id=75
			'nombres'=>'M. Del Carmen',
			'apellido_paterno'=>'Maldonado',
			'apellido_materno'=>'Susano',
			'rfc'=>'MASM740202MASM',
			'numero_trabajador' => '1214324515',
			'fecha_nacimiento'=>'1974-02-02'
		]);

    DB::table('profesors')->insert([ //id=76
			'nombres'=>'Luis Edgardo',
			'apellido_paterno'=>'Vigueras',
			'apellido_materno'=>'Rueda',
			'rfc'=>'VIRL740203VIRL',
			'numero_trabajador' => '1214324516',
			'fecha_nacimiento'=>'1974-02-03'
		]);

    DB::table('profesors')->insert([ //id=77
			'nombres'=>'Eduardo',
			'apellido_paterno'=>'Bernal',
			'apellido_materno'=>'Vargas',
			'rfc'=>'BEVE74102BEVE',
			'numero_trabajador' => '121432480',
			'fecha_nacimiento'=>'1973-01-04'
		]);
  
    DB::table('profesors')->insert([ //id=78
			'nombres'=>'Juan Carlos',
			'apellido_paterno'=>'Cedeño',
			'apellido_materno'=>'Vazquez',
			'rfc'=>'CEVJ740403CEVJ',
			'numero_trabajador' => '121432481',
			'fecha_nacimiento'=>'1973-04-03'
		]);

    DB::table('profesors')->insert([ //id=79
			'nombres'=>'Martha Rosa',
			'apellido_paterno'=>'Del Moral',
			'apellido_materno'=>'Nieto',
			'rfc'=>'DENM740404DENM',
			'numero_trabajador' => '121432482',
			'fecha_nacimiento'=>'1973-04-04'
		]);

    DB::table('profesors')->insert([ //id=80
			'nombres'=>'Vianey',
			'apellido_paterno'=>'Franco',
			'apellido_materno'=>'Garcia',
			'rfc'=>'FAGV740405FAGV',
			'numero_trabajador' => '121432483',
			'fecha_nacimiento'=>'1973-04-05'
		]);

    DB::table('profesors')->insert([ //id=81
			'nombres'=>'Raymundo',
			'apellido_paterno'=>'Gaytan',
			'apellido_materno'=>'Perez',
			'rfc'=>'GAPR740406GAPR',
			'numero_trabajador' => '121432484',
			'fecha_nacimiento'=>'1973-04-06'
		]);

    DB::table('profesors')->insert([ //id=82
			'nombres'=>'Arnulfo',
			'apellido_paterno'=>'Ortiz',
			'apellido_materno'=>'Gomez',
			'rfc'=>'ORGA740407ORGA',
			'numero_trabajador' => '121432485',
			'fecha_nacimiento'=>'1973-04-07'
		]);

    DB::table('profesors')->insert([ //id=83
			'nombres'=>'Antonia del Carmen',
			'apellido_paterno'=>'Perez',
			'apellido_materno'=>'Leon',
			'rfc'=>'PELA740408PELA',
			'numero_trabajador' => '121432486',
			'fecha_nacimiento'=>'1973-04-08'
		]);

    DB::table('profesors')->insert([ //id=84
			'nombres'=>'Jose Luis',
			'apellido_paterno'=>'Salas',
			'apellido_materno'=>'Corrales',
			'rfc'=>'SACOJ740410SACOJ',
			'numero_trabajador' => '121432487',
			'fecha_nacimiento'=>'1973-04-10'
		]);

    DB::table('profesors')->insert([ //id=85
			'nombres'=>'Victor Manuel',
			'apellido_paterno'=>'Sanchez',
			'apellido_materno'=>'Ezquivel',
			'rfc'=>'SAEV740411SAEV',
			'numero_trabajador' => '121432488',
			'fecha_nacimiento'=>'1973-04-11'
		]);

    DB::table('profesors')->insert([ //id=86
			'nombres'=>'Jose Alejandor',
			'apellido_paterno'=>'Sanchez',
			'apellido_materno'=>'Perez',
			'rfc'=>'SAPJ40412SAPJ',
			'numero_trabajador' => '121432489',
			'fecha_nacimiento'=>'1973-04-12'
		]);

    DB::table('profesors')->insert([ //id=87
			'nombres'=>'Enrique',
			'apellido_paterno'=>'Villalobos',
			'apellido_materno'=>'Perez',
			'rfc'=>'VIPE40413VIPE',
			'numero_trabajador' => '121432490',
			'fecha_nacimiento'=>'1973-04-13'
		]);
  
    DB::table('profesors')->insert([ //id=88
			'nombres'=>'Ricardo',
			'apellido_paterno'=>'Yañez',
			'apellido_materno'=>'Valdez',
			'rfc'=>'YAVR40414YAVR',
			'numero_trabajador' => '121432491',
			'fecha_nacimiento'=>'1973-04-14'
		]);

        //COORDINACIONES DEL CENTRO DE DOCENCIA, COORDINADORES DE PRUEBA
        DB::table('coordinacions')->insert([
          'abreviatura'=>'CO',
          'nombre_coordinacion'=>'Área de Cómputo',
          'coordinador'=>'Daniela Lopez Gomez',
          'genero' => 'F',
          'grado'=>'M.C.C',
          'usuario'=>'daniela',
          'password'=> Hash::make('1234')
        ]);
    
        DB::table('coordinacions')->insert([
          'abreviatura'=>'DI',
          'nombre_coordinacion'=>'Área Disciplinar e Investigación Educativa',
          'coordinador'=>'Roman Dominguez Perez',
          'genero' => 'M',
          'grado'=>'M.E.M.',
          'usuario'=>'roman',
          'password'=> Hash::make('1234')
        ]);
        
        DB::table('coordinacions')->insert([
          'nombre_coordinacion' => 'Área Didáctico Pedagógica',
          'abreviatura' => 'DP',
          'coordinador' => 'Daniel Morales',
          'genero' => 'M',
          'grado' => 'M.E.M.',
          'usuario' => 'daniel',
          'password' => Hash::make('1234'),
        ]);
    
        DB::table('coordinacions')->insert([
          'nombre_coordinacion' => 'Área de Desarrollo Humano',
          'abreviatura' => 'DH',
          'coordinador' => 'Jacob Hernandez',
          'genero' => 'M',
          'grado' => 'M.E.M.',
          'usuario' => 'jacob',
          'password' => Hash::make('1234'),
      ]);
			
			DB::table('coordinacions')->insert([
				'nombre_coordinacion' => 'Área de Gestión y Vinculación',
				'abreviatura' => 'GV',
				'coordinador' => 'Jorge Luis Morales',
        'genero' => 'M',
				'grado' => 'M.E.M.',
				'usuario' => 'jorge',
				'password' => Hash::make('1234'),
		]);

      //CATÁLOGO DE CURSOS DE PRUEBA
        DB::table('catalogo_cursos')->insert([
            'nombre_curso' =>'Programacion Estructurada',
            'duracion_curso' => '10',
            'coordinacion_id' => 1,
            'tipo' => 'CT',
            'institucion' => 'CDD',
            'dirigido' => 'Personas interesadas en el área de la programación, desarrollo de software
y tecnologías de la información',
            'objetivo' => 'Enseñar las bases de todos los paradigmas de la programación y mostrar la ventana
de oportunidades que libera',
            'contenido' => '1. ¿Qué es la programación?
2. Paradigmas de programación
  2.1 ¿En qué consisten los paradigmas de programación?
   2.11 Historia
3. Lenguajes de programación
4. Ejercicios
5. Ejemplos en la vida diaria
6. Temas avanzados',
            'antecedentes' => 'Conocimientos básicos de informática y tecnologías de información: 
Qué es una computadora y cómo funciona',
            'fecha_disenio' => '2018-05-18',
            'clave_curso' => 'ADFVJ0911598'

        ]);
        DB::table('catalogo_cursos')->insert([
            'nombre_curso' =>'Administración',
            'duracion_curso' => '20',
            'coordinacion_id' => 2,
            'tipo' => 'E',
            'institucion' => 'DGAPA',
            'dirigido' => 'Administradores',
            'objetivo' => 'Que los que tomen el curso refuerzen sus conocimientos administrativos',
            'contenido' => 'Que es la administracion y sus derivados',
            'fecha_disenio' => '2018-05-18',
            'clave_curso' => 'FJHCZC'

        ]);
        DB::table('catalogo_cursos')->insert([
            'nombre_curso' =>'Ecuaciones Diferenciales',
            'duracion_curso' => '20',
            'coordinacion_id' => 3,
            'tipo' => 'S',
            'institucion' => 'DGAPA',
            'dirigido' => 'Ingenieros',
            'objetivo' => 'Aprender sobre ecuaciones diferenciales',
            'contenido' => 'Lo basico de ecuaciones diferenciales',
            'fecha_disenio' => '2018-05-18',
            'clave_curso' => 'ED1HCZ12'

        ]);
        DB::table('catalogo_cursos')->insert([
            'nombre_curso' =>'Cálculo Integral',
            'duracion_curso' => '20',
            'coordinacion_id' => 3,
            'tipo' => 'D',
            'institucion' => 'CDD',
            'dirigido' => 'Alumnos de ingenieria',
            'objetivo' => 'Aprender a integrar',
            'contenido' => 'Metodos de integracion',
            'fecha_disenio' => '2018-05-18',
            'clave_curso' => 'CI2HCZA'

        ]);
        DB::table('catalogo_cursos')->insert([
            'nombre_curso' =>'Álgebra Lineal',
            'duracion_curso' => '20',
            'coordinacion_id' => 3,
            'tipo' => 'C',
            'institucion' => 'CDD',
            'dirigido' => 'Alumno que ya acabaron Algebra',
            'objetivo' => 'Que la gente aprenda algebra lineal',
            'contenido' => 'Transformaciones lineales y espacios vectoriales',
            'fecha_disenio' => '2018-05-18',
            'clave_curso' => 'ALA3HCZ'

        ]);
        DB::table('catalogo_cursos')->insert([
            'nombre_curso' =>'Álgebra',
            'duracion_curso' => '20',
            'coordinacion_id' => 4,
            'tipo' => 'C',
            'institucion' => 'CDD',
            'dirigido' => 'Todo el publico',
            'objetivo' => 'Que los que tomen el curso aprendan lo basico de Algebra',
            'contenido' => 'Matrices y polinomios',
						'fecha_disenio' => '2018-05-18',
            'clave_curso' => 'A1A27HCZ'

        ]);
        DB::table('catalogo_cursos')->insert([
            'nombre_curso' =>'Análisis Numérico',
            'duracion_curso' => '20',
            'coordinacion_id' => 1,
            'tipo' => 'C',
            'institucion' => 'CDD',
            'dirigido' => 'Alumno que ya cursaron ecuaciones diferenciales',
            'objetivo' => 'Aprender sobre analisis numerico',
            'contenido' => 'Temas de Análisis Numérico',
            'fecha_disenio' => '2018-05-18',
            'clave_curso' => 'AN412HCZ'

        ]);
        DB::table('catalogo_cursos')->insert([
            'nombre_curso' =>'Programación Estructurada',
            'duracion_curso' => '10',
            'coordinacion_id' => 1,
            'tipo' => 'CT',
            'institucion' => 'CDD',
            'dirigido' => 'Alumnos de la carrera de ingenieria en computación',
            'objetivo' => 'Aprender temas avanzados de programacion ',
            'contenido' => 'Temas Avanzados de programacion',
            'fecha_disenio' => '2018-05-18',
            'clave_curso' => 'ADFVJ080578451'

        ]);
        DB::table('catalogo_cursos')->insert([
            'nombre_curso' =>'Administración Básica',
            'duracion_curso' => '20',
            'coordinacion_id' => 1,
            'tipo' => 'C',
            'institucion' => 'DGAPA',
            'dirigido' => 'Administradores expertos',
            'objetivo' => 'Aprender todo sobre administracion',
            'contenido' => 'Temas avanzados de aministracion',
            'fecha_disenio' => '2018-05-18',
            'clave_curso' => 'FJHCZA'
        ]);

        DB::table('catalogo_cursos')->insert([ //id=10
          'nombre_curso'=>'Tecnologías de la Información y la Comunicación (TIC). Parte 1',
          'duracion_curso' => '20',
                'coordinacion_id' => 50,
                'tipo' => 'C',
                'institucion' => 'DGAPA',
          'fecha_disenio'=>'2012-12-12',
          'coordinacion_id'=>50,
          'clave_curso'=>'TICDGAPA'
        ]);

        DB::table('catalogo_cursos')->insert([ //id=11
          'nombre_curso'=>'Módulo 4. Tendencias y estrategias de comunicación para la docencia',
          'duracion_curso' => '20',
                'tipo' => 'C',
                'institucion' => 'DGAPA',
          'fecha_disenio'=>'2012-12-12',
          'coordinacion_id'=>202,
          'clave_curso'=>'TECDDGAPA'
        ]);

        DB::table('catalogo_cursos')->insert([ //id=12
          'nombre_curso'=>'Módulo 5. La importancia de la inteligencia emocional en la práctica docente',
          'duracion_curso' => '20',
                'tipo' => 'C',
                'institucion' => 'DGAPA',
          'fecha_disenio'=>'2012-12-12',
          'coordinacion_id'=>202,
          'clave_curso'=>'TECDDGAPA5'
        ]);

        //TEMAS DE SEMINARIO PARA CURSO ECUACIONES DIFERENCIALES
        DB::table('temas_seminarios')->insert([
          'nombre' =>'Ecuaciones Básicas',
          'duracion' => 5,
          'catalogo_id' => 3
        ]);

        DB::table('temas_seminarios')->insert([
          'nombre' =>'Ecuaciones Avanzadas',
          'duracion' => 5,
          'catalogo_id' => 3
        ]);

        //CURSOS DE PRUEBA
        DB::table('cursos')->insert([
            'semestre_anio' => 2020,
            'semestre_pi'=>"2",
            'semestre_si' => "i",
            'fecha_inicio' => '2020-01-01',
            'fecha_fin' => '2020-05-30',
            'hora_inicio' => '14:00',
            'hora_fin' => '16:00',
            'dias_semana' => 'Lunes,Martes',
            'numero_sesiones' => 10,
            'costo' => 2000,
            'cupo_maximo' => 32,
            'cupo_minimo' => 1,
            'catalogo_id' => 1,
            'salon_id' => 1
        ]);

        DB::table('cursos')->insert([
            'semestre_anio' => 2020,
            'semestre_pi'=>"2",
            'semestre_si' => "i",
            'fecha_inicio' => '2020-12-01',
            'fecha_fin' => '2020-12-30',
            'hora_inicio' => '14:00',
            'hora_fin' => '16:00',
            'dias_semana' => 'Lunes,Martes',
            'numero_sesiones' => 10,
            'costo' => 2000,
            'cupo_maximo' => 5,
            'cupo_minimo' => 1,
            'catalogo_id' => 2,
            'salon_id' => 1
        ]);
        DB::table('cursos')->insert([
            'semestre_anio' => 2020,
            'semestre_pi'=>"2",
            'semestre_si' => "s",
            'fecha_inicio' => '2020-01-03',
            'fecha_fin' => '2020-05-30',
            'hora_inicio' => '14:00',
            'hora_fin' => '16:00',
            'dias_semana' => 'Lunes,Martes',
            'numero_sesiones' => 10,
            'costo' => 2000,
            'cupo_maximo' => 20,
            'cupo_minimo' => 5,
            'catalogo_id' => 3,
            'salon_id' => 1
        ]);

        DB::table('cursos')->insert([
            'semestre_anio' => 2020,
            'semestre_pi'=>"2",
            'semestre_si' => "i",
            'fecha_inicio' => '2020-12-01',
            'fecha_fin' => '2020-12-14',
            'hora_inicio' => '14:00',
            'hora_fin' => '16:00',
            'dias_semana' => 'Lunes,Martes',
            'numero_sesiones' => 10,
            'costo' => 2000,
            'cupo_maximo' => 20,
            'cupo_minimo' => 5,
            'catalogo_id' => 4,
            'salon_id' => 2
        ]);
        DB::table('cursos')->insert([
            'semestre_anio' => 2020,
            'semestre_pi'=>"2",
            'semestre_si' => "i",
            'fecha_inicio' => '2020-12-20',
            'fecha_fin' => '2020-12-30',
            'hora_inicio' => '14:00',
            'hora_fin' => '16:00',
            'dias_semana' => 'Lunes,Miércoles',
            'numero_sesiones' => 10,
            'costo' => 2000,
            'cupo_maximo' => 20,
            'cupo_minimo' => 5,
            'catalogo_id' => 6,
            'salon_id' => 3
        ]);
        DB::table('cursos')->insert([
            'semestre_anio' => 2015,
            'semestre_pi'=>"1",
            'semestre_si' => "s",
            'fecha_inicio' => '2015-12-20',
            'fecha_fin' => '2015-12-30',
            'hora_inicio' => '14:00',
            'hora_fin' => '16:00',
            'dias_semana' => 'Lunes,Miércoles',
            'numero_sesiones' => 10,
            'costo' => 2000,
            'cupo_maximo' => 20,
            'cupo_minimo' => 5,
            'catalogo_id' => 7,
            'salon_id' => 3
        ]);
        DB::table('cursos')->insert([
            'semestre_anio' => 2018,
            'semestre_pi'=>"2",
            'semestre_si' => "s",
            'fecha_inicio' => '2018-05-20',
            'fecha_fin' => '2018-05-30',
            'hora_inicio' => '14:00',
            'hora_fin' => '16:00',
            'dias_semana' => 'Lunes,Miércoles',
            'numero_sesiones' => 10,
            'costo' => 2000,
            'cupo_maximo' => 20,
            'cupo_minimo' => 5,
            'catalogo_id' => 3,
            'salon_id' => 2
        ]);
        DB::table('cursos')->insert([
            'semestre_anio' => 2018,
            'semestre_pi'=>"2",
            'semestre_si' => "i",
            'fecha_inicio' => '2018-05-20',
            'fecha_fin' => '2018-05-30',
            'hora_inicio' => '14:00',
            'hora_fin' => '16:00',
            'dias_semana' => 'Lunes,Miércoles',
            'numero_sesiones' => 10,
            'costo' => 2000,
            'cupo_maximo' => 20,
            'cupo_minimo' => 5,
            'catalogo_id' => 7,
            'salon_id' => 1
        ]);
        DB::table('cursos')->insert([
            'semestre_anio' => 2014,
            'semestre_pi'=>"2",
            'semestre_si' => "s",
            'fecha_inicio' => '2014-02-03',
            'fecha_fin' => '2014-05-30',
            'hora_inicio' => '14:00',
            'hora_fin' => '16:00',
            'dias_semana' => 'Lunes,Martes',
            'numero_sesiones' => 10,
            'costo' => 2000,
            'cupo_maximo' => 20,
            'cupo_minimo' => 5,
            'catalogo_id' => 5,
            'salon_id' => 1
        ]);
        
        DB::table('cursos')->insert([ //id=10
          'id'=>50,
          'semestre_anio'=>2020,
          'semestre_pi'=>'1',
          'semestre_si'=>'s',
          'fecha_inicio' => '2019-08-20',
                'fecha_fin' => '2019-09-30',
                'hora_inicio' => '10:00',
                'hora_fin' => '14:00',
                'dias_semana' => 'Lunes,Miércoles',
                'numero_sesiones' => 5,
                'texto_diploma' => 'Texto diploma',
                'costo' => 2000,
                'cupo_maximo' => 16,
                'cupo_minimo' => 8,
                'catalogo_id' => 10,
                'salon_id' => 1
          
        ]);

        DB::table('cursos')->insert([ //id=11
          'id'=>51,
          'semestre_anio'=>2020,
          'semestre_pi'=>'1',
          'semestre_si'=>'s',
          'fecha_inicio' => '2019-09-30',
                'fecha_fin' => '2019-10-14',
                'hora_inicio' => '08:00',
                'hora_fin' => '12:00',
                'dias_semana' => 'Lunes,Miércoles',
                'numero_sesiones' => 5,
                'texto_diploma' => 'Texto diploma',
                'costo' => 2000,
                'cupo_maximo' => 19,
                'cupo_minimo' => 15,
                'catalogo_id' => 11,
                'salon_id' => 2
        ]);


        DB::table('cursos')->insert([ //id=12
          'semestre_anio'=>2020,
          'semestre_pi'=>'1',
          'semestre_si'=>'s',
          'fecha_inicio' => '2019-10-16',
                'fecha_fin' => '2019-10-30',
                'hora_inicio' => '08:00',
                'hora_fin' => '12:00',
                'dias_semana' => 'Lunes,Miércoles',
                'numero_sesiones' => 10,
                'texto_diploma' => 'Texto diploma',
                'costo' => 2000,
                'cupo_maximo' => 19,
                'cupo_minimo' => 15,
                'catalogo_id' => 12,
                'salon_id' => 2
          
        ]);

        //PROFESORES CON SU TEMA Y SU CURSO DE SEMINARIO
        DB::table('temas_seminario_profesor')->insert([
          'tema_id' => 1,
          'profesor_id' => 10,
          'curso_id' => 3
        ]);

        DB::table('temas_seminario_profesor')->insert([
          'tema_id' => 2,
          'profesor_id' => 10,
          'curso_id' => 3
        ]);

        //SECRETARIO DE APOYO A LA DOCENCIA
        DB::table('secretario_apoyo')->insert([
            'secretario' => "Claudia Loreto Miranda",
            'grado' => "Mtra.",
            'genero' => 'F'
        ]);

        //DIRECCIÓN DEL CENTRO DE DOCENCIA (DATO DE PRUEBA)
        DB::table('direccion')->insert([
            'director' => "Gabriel Aguilar Luna",
            'comentarios' => 'Ingeniero en computacion egresado de la UNAM, trabajo mucho tiempo en cargos administraticos en la FI',
            'grado' => "M.E.M.",
            'genero' => 'M'

        ]);

        //COORDINADOR GENERAL DEL CENTRO DE DOCENCIA
        DB::table('coordinador_general')->insert([
            'coordinador' => "Margarita Ramírez Galindo",
            'grado' => "M.E.M.",
            'genero' => "F"

        ]);

        //ASIGNACIÓN DE INSTRUCTORES
        DB::table('profesor_curso')->insert([
          'curso_id' => "1",
          'profesor_id' => '1',
        ]);

        DB::table('profesor_curso')->insert([
          'curso_id' => "1",
          'profesor_id' => '2',
        ]);

        DB::table('profesor_curso')->insert([
          'curso_id' => "2",
          'profesor_id' => '5',
        ]);

        DB::table('profesor_curso')->insert([
          'curso_id' => "2",
          'profesor_id' => '6',
        ]);

        DB::table('profesor_curso')->insert([
          'curso_id' => "3",
          'profesor_id' => '10',
        ]);

        DB::table('profesor_curso')->insert([
          'curso_id' => "4",
          'profesor_id' => '9',
        ]);

        DB::table('profesor_curso')->insert([
          'curso_id' => "4",
          'profesor_id' => '10',
        ]);

        DB::table('profesor_curso')->insert([
          'curso_id' => "5",
          'profesor_id' => '11',
        ]);

        DB::table('profesor_curso')->insert([
          'curso_id' => "6",
          'profesor_id' => '12',
        ]);

        DB::table('profesor_curso')->insert([
          'curso_id' => "7",
          'profesor_id' => '13',
        ]);

        DB::table('profesor_curso')->insert([
          'curso_id' => "8",
          'profesor_id' => '14',
        ]);

        DB::table('profesor_curso')->insert([
          'curso_id' => "9",
          'profesor_id' => '15',
        ]);

        DB::table('profesor_curso')->insert([
          'curso_id' => "9",
          'profesor_id' => '16',
        ]);

        DB::table('profesor_curso')->insert([ //id=17
          'curso_id'=>10,
          'profesor_id'=>21,
        ]);

        DB::table('profesor_curso')->insert([ //id=18
          'curso_id'=>10,
          'profesor_id'=>22,
        ]);

        DB::table('profesor_curso')->insert([ //id=19
          'curso_id'=>11,
          'profesor_id'=>43,
        ]);

        DB::table('profesor_curso')->insert([ //id=20
          'curso_id'=>12,
          'profesor_id'=>57,
        ]);

        //PARTICIPANTES DE LOS CURSOS
        DB::table('participante_curso')->insert([
          'curso_id'=>1,
          'profesor_id'=>35,
          'asistencia'=>true,
          'acreditacion'=>false,
          'calificacion'=>5,
					'espera'=>0
        ]);

        DB::table('participante_curso')->insert([
          'curso_id'=>1,
          'profesor_id'=>34,
          'asistencia'=>true,
          'acreditacion'=>false,
          'calificacion'=>5,
					'espera'=>0
        ]);

        DB::table('participante_curso')->insert([
          'curso_id'=>1,
          'profesor_id'=>33,
          'asistencia'=>true,
          'acreditacion'=>false,
          'calificacion'=>5,
					'espera'=>0
        ]);

        DB::table('participante_curso')->insert([
          'curso_id'=>1,
          'profesor_id'=>32,
          'asistencia'=>true,
          'acreditacion'=>false,
          'calificacion'=>5,
					'espera'=>0
        ]);

        DB::table('participante_curso')->insert([
          'curso_id'=>1,
          'profesor_id'=>31,
          'asistencia'=>true,
          'acreditacion'=>false,
          'calificacion'=>5,
					'espera'=>0
        ]);

        DB::table('participante_curso')->insert([
          'curso_id'=>1,
          'profesor_id'=>30,
          'asistencia'=>true,
          'acreditacion'=>false,
          'calificacion'=>5,
					'espera'=>0
        ]);

        DB::table('participante_curso')->insert([
          'curso_id'=>1,
          'profesor_id'=>29,
          'asistencia'=>true,
          'acreditacion'=>false,
          'calificacion'=>5,
					'espera'=>0
        ]);

        DB::table('participante_curso')->insert([
          'curso_id'=>1,
          'profesor_id'=>28,
          'asistencia'=>true,
          'acreditacion'=>false,
          'calificacion'=>5,
					'espera'=>0
        ]);

        DB::table('participante_curso')->insert([
          'curso_id'=>1,
          'profesor_id'=>27,
          'asistencia'=>true,
          'acreditacion'=>false,
          'calificacion'=>5,
					'espera'=>0
        ]);

        DB::table('participante_curso')->insert([
          'curso_id'=>1,
          'profesor_id'=>26,
          'asistencia'=>true,
          'acreditacion'=>false,
          'calificacion'=>5,
					'espera'=>0
        ]);

        DB::table('participante_curso')->insert([
          'curso_id'=>1,
          'profesor_id'=>25,
          'asistencia'=>true,
          'acreditacion'=>false,
          'calificacion'=>5,
					'espera'=>0
        ]);

        DB::table('participante_curso')->insert([
          'curso_id'=>1,
          'profesor_id'=>24,
          'asistencia'=>true,
          'acreditacion'=>false,
          'calificacion'=>5,
					'espera'=>0
        ]);

        DB::table('participante_curso')->insert([
          'curso_id'=>1,
          'profesor_id'=>23,
          'asistencia'=>true,
          'acreditacion'=>false,
          'calificacion'=>5,
					'espera'=>0
        ]);

        DB::table('participante_curso')->insert([
          'curso_id'=>1,
          'profesor_id'=>22,
          'asistencia'=>true,
          'acreditacion'=>false,
          'calificacion'=>5,
					'espera'=>0
        ]);

        DB::table('participante_curso')->insert([
          'curso_id'=>1,
          'profesor_id'=>21,
          'asistencia'=>true,
          'acreditacion'=>false,
          'calificacion'=>5,
					'espera'=>0
        ]);

        DB::table('participante_curso')->insert([
          'curso_id'=>1,
          'profesor_id'=>20,
          'asistencia'=>true,
          'acreditacion'=>false,
          'calificacion'=>5,
					'espera'=>0
        ]);

        DB::table('participante_curso')->insert([
          'curso_id'=>1,
          'profesor_id'=>19,
          'asistencia'=>true,
          'acreditacion'=>false,
          'calificacion'=>5,
					'espera'=>0
        ]);

        DB::table('participante_curso')->insert([
          'curso_id'=>1,
          'profesor_id'=>18,
          'asistencia'=>true,
          'acreditacion'=>false,
          'calificacion'=>5,
					'espera'=>0
        ]);

        DB::table('participante_curso')->insert([
          'curso_id'=>1,
          'profesor_id'=>17,
          'asistencia'=>true,
          'acreditacion'=>false,
          'calificacion'=>5,
					'espera'=>0
        ]);

        DB::table('participante_curso')->insert([
          'curso_id'=>1,
          'profesor_id'=>16,
          'asistencia'=>true,
          'acreditacion'=>false,
          'calificacion'=>5,
					'espera'=>0
        ]);

        DB::table('participante_curso')->insert([
          'curso_id'=>1,
          'profesor_id'=>15,
          'asistencia'=>true,
          'acreditacion'=>false,
          'calificacion'=>5,
					'espera'=>0
        ]);

        DB::table('participante_curso')->insert([
          'curso_id'=>1,
          'profesor_id'=>14,
          'asistencia'=>true,
          'acreditacion'=>false,
          'calificacion'=>5,
					'espera'=>0
        ]);

        DB::table('participante_curso')->insert([
          'curso_id'=>1,
          'profesor_id'=>13,
          'asistencia'=>true,
          'acreditacion'=>false,
          'calificacion'=>5,
					'espera'=>0
        ]);

        DB::table('participante_curso')->insert([
          'curso_id'=>1,
          'profesor_id'=>12,
          'asistencia'=>true,
          'acreditacion'=>false,
          'calificacion'=>5,
					'espera'=>0
        ]);

        DB::table('participante_curso')->insert([
          'curso_id'=>1,
          'profesor_id'=>11,
          'asistencia'=>true,
          'acreditacion'=>false,
          'calificacion'=>5,
					'espera'=>0
        ]);

        DB::table('participante_curso')->insert([
          'curso_id'=>1,
          'profesor_id'=>10,
          'asistencia'=>true,
          'acreditacion'=>false,
          'calificacion'=>5,
					'espera'=>0
        ]);

        DB::table('participante_curso')->insert([
          'curso_id'=>1,
          'profesor_id'=>9,
          'asistencia'=>true,
          'acreditacion'=>false,
          'calificacion'=>5,
					'espera'=>0
        ]);

        DB::table('participante_curso')->insert([
          'curso_id'=>1,
          'profesor_id'=>8,
          'asistencia'=>true,
          'acreditacion'=>false,
          'calificacion'=>5,
					'espera'=>0
        ]);

        DB::table('participante_curso')->insert([
          'curso_id'=>1,
          'profesor_id'=>7,
          'asistencia'=>true,
          'acreditacion'=>true,
          'calificacion'=>10,
					'espera'=>0
        ]);

        DB::table('participante_curso')->insert([
          'curso_id'=>1,
          'profesor_id'=>6,
          'asistencia'=>true,
          'acreditacion'=>true,
          'calificacion'=>9,
					'espera'=>0
        ]);

        DB::table('participante_curso')->insert([
          'curso_id'=>1,
          'profesor_id'=>5,
          'asistencia'=>true,
          'acreditacion'=>true,
          'calificacion'=>10,
					'espera'=>0
        ]);

        DB::table('participante_curso')->insert([
          'curso_id'=>2,
          'profesor_id'=>15,
          'asistencia'=>true,
          'acreditacion'=>true,
          'calificacion'=>9,
					'espera'=>0
        ]);

        DB::table('participante_curso')->insert([
          'curso_id'=>2,
          'profesor_id'=>16,
          'asistencia'=>true,
          'acreditacion'=>true,
          'calificacion'=>8,
					'espera'=>0
        ]);

        DB::table('participante_curso')->insert([
          'curso_id'=>2,
          'profesor_id'=>17,
          'asistencia'=>true,
          'acreditacion'=>true,
          'calificacion'=>9,
					'espera'=>0
        ]);

        DB::table('participante_curso')->insert([
          'curso_id'=>2,
          'profesor_id'=>18,
          'asistencia'=>true,
          'acreditacion'=>true,
          'calificacion'=>9,
					'espera'=>0
        ]);

        DB::table('participante_curso')->insert([
          'curso_id'=>2,
          'profesor_id'=>19,
          'asistencia'=>true,
          'acreditacion'=>true,
          'calificacion'=>9,
					'espera'=>0
        ]);

        DB::table('participante_curso')->insert([
          'curso_id'=>5,
          'profesor_id'=>17,
          'asistencia'=>true,
          'acreditacion'=>true,
          'calificacion'=>9,
					'espera'=>0
        ]);

        DB::table('participante_curso')->insert([
          'curso_id'=>5,
          'profesor_id'=>2,
          'asistencia'=>true,
          'acreditacion'=>true,
          'calificacion'=>10,
					'espera'=>0
        ]);

        DB::table('participante_curso')->insert([
          'curso_id'=>4,
          'profesor_id'=>21,
          'asistencia'=>true,
          'acreditacion'=>true,
          'calificacion'=>10,
					'espera'=>0
        ]);

        DB::table('participante_curso')->insert([ //id=40
          'profesor_id'=>23,
          'curso_id'=>10
      ]);

      DB::table('participante_curso')->insert([ //id=41
        'profesor_id'=>24,
        'curso_id'=>10
      ]);

      DB::table('participante_curso')->insert([ //id=42
        'profesor_id'=>25,
        'curso_id'=>10
      ]);

        DB::table('participante_curso')->insert([ //id=43
          'profesor_id'=>30,
          'curso_id'=>10
        ]);

        DB::table('participante_curso')->insert([ //id=44
          'profesor_id'=>31,
          'curso_id'=>10
      ]);

      DB::table('participante_curso')->insert([ //id=45
        'curso_id'=>10,
        'profesor_id'=>33,
        'asistencia'=>true,
        'acreditacion'=>true
      ]);

      DB::table('participante_curso')->insert([ //id=46
        'curso_id'=>10,
        'profesor_id'=>34,
        'asistencia'=>true,
        'acreditacion'=>true
      ]);

      DB::table('participante_curso')->insert([ //id=47
        'curso_id'=>10,
        'profesor_id'=>35,
        'asistencia'=>true,
        'acreditacion'=>true
      ]);

      DB::table('participante_curso')->insert([ //id=48
        'curso_id'=>10,
        'profesor_id'=>36,
        'asistencia'=>true,
        'acreditacion'=>true
      ]);

      DB::table('participante_curso')->insert([ //id=49
        'curso_id'=>10,
        'profesor_id'=>37,
        'asistencia'=>true,
        'acreditacion'=>true
      ]);

      DB::table('participante_curso')->insert([ //id=50
        'curso_id'=>10,
        'profesor_id'=>38,
        'asistencia'=>true,
        'acreditacion'=>true
      ]);

      DB::table('participante_curso')->insert([ //id=51
        'curso_id'=>10,
        'profesor_id'=>39,
        'asistencia'=>true,
        'acreditacion'=>true
      ]);

      DB::table('participante_curso')->insert([ //id=52
        'curso_id'=>10,
        'profesor_id'=>40,
        'asistencia'=>true,
        'acreditacion'=>true
      ]);

      DB::table('participante_curso')->insert([ //id=53
        'curso_id'=>10,
        'profesor_id'=>41,
        'asistencia'=>true,
        'acreditacion'=>true
      ]);

      B::table('participante_curso')->insert([ //id=54
        'curso_id'=>10,
        'profesor_id'=>42,
        'asistencia'=>true,
        'acreditacion'=>true
      ]);

      DB::table('participante_curso')->insert([ //id=55
        'curso_id'=>11,
        'profesor_id'=>44,
        'asistencia'=>true,
        'acreditacion'=>true
      ]);

      DB::table('participante_curso')->insert([ //id=56
        'curso_id'=>11,
        'profesor_id'=>45,
        'asistencia'=>true,
        'acreditacion'=>true
      ]);
  
      DB::table('participante_curso')->insert([ //id=57
        'curso_id'=>11,
        'profesor_id'=>46,
        'asistencia'=>true,
        'acreditacion'=>true
      ]);

      DB::table('participante_curso')->insert([ //id=58
        'curso_id'=>11,
        'profesor_id'=>47,
        'asistencia'=>true,
        'acreditacion'=>true
      ]);

      DB::table('participante_curso')->insert([ //id=59
        'curso_id'=>11,
        'profesor_id'=>48,
        'asistencia'=>true,
        'acreditacion'=>true
      ]);

      DB::table('participante_curso')->insert([ //id=60
        'curso_id'=>11,
        'profesor_id'=>49,
        'asistencia'=>true,
        'acreditacion'=>true
      ]);

      DB::table('participante_curso')->insert([ //id=61
        'curso_id'=>11,
        'profesor_id'=>50,
        'asistencia'=>true,
        'acreditacion'=>true
      ]);

      DB::table('participante_curso')->insert([ //id=62
        'curso_id'=>11,
        'profesor_id'=>51,
        'asistencia'=>true,
        'acreditacion'=>true
      ]);
    
      DB::table('participante_curso')->insert([ //id=63
        'curso_id'=>11,
        'profesor_id'=>52,
        'asistencia'=>true,
        'acreditacion'=>true
      ]);

      DB::table('participante_curso')->insert([ //id=64
        'curso_id'=>11,
        'profesor_id'=>53,
        'asistencia'=>true,
        'acreditacion'=>true
      ]);

      DB::table('participante_curso')->insert([ //id=65
        'id'=>70,
        'curso_id'=>11,
        'profesor_id'=>54,
        'asistencia'=>true,
        'acreditacion'=>true
      ]);

      DB::table('participante_curso')->insert([ //id=66
        'curso_id'=>11,
        'profesor_id'=>55,
        'asistencia'=>true,
        'acreditacion'=>true
      ]);

      DB::table('participante_curso')->insert([ //id=67
        'curso_id'=>11,
        'profesor_id'=>56,
        'asistencia'=>true,
        'acreditacion'=>true
      ]);

      DB::table('participante_curso')->insert([ //id=68
        'curso_id'=>12,
        'profesor_id'=>44,
        'asistencia'=>true,
        'acreditacion'=>true
      ]);

        //ENCUESTAS PARA REPORTE DE COMENTARIOS Y SUGERENCIAS
        DB::table('_evaluacion_final_curso')->insert([
          'p1_1'=>'80',
          'p1_2'=>'80',
          'p1_3'=>'80',
          'p1_4'=>'80',
          'p1_5'=>'80',
          'p2_1'=>'80',
          'p2_2'=>'80',
          'p2_3'=>'100',
          'p2_4'=>'80',
          'p3_1'=>'100',
          'p3_2'=>'100',
          'p3_3'=>'100',
          'p3_4'=>'100',
          'p7'=>true,
          'p8'=>'["1","null"]',
          'mejor'=>'El conocimiento de nuevas herramientas',
          'sug'=>'Todo bien, aunque en muchas ocasiones el salón olía a atún',
          'p4_1'=>'100',
          'p4_2'=>'100',
          'p4_3'=>'100',
          'p4_4'=>'100',
          'p4_5'=>'100',
          'p4_6'=>'100',
          'p4_7'=>'100',
          'p4_8'=>'100',
          'p4_9'=>'80',
          'p4_10'=>'100',
          'p4_11'=>'80',
          'p5_1'=>'100',
          'p5_2'=>'100',
          'p5_3'=>'100',
          'p5_4'=>'100',
          'p5_5'=>'100',
          'p5_6'=>'100',
          'p5_7'=>'100',
          'p5_8'=>'100',
          'p5_9'=>'80',
          'p5_10'=>'100',
          'p5_11'=>'80',
          'otros'=>'programacion',
          'conocimiento'=>'["2"]',
          'tematica'=>'tematica',
          'horarios'=>'9:00-13:00',
          'horarioi'=>'13:00-15:00',
          'curso_id'=>1,
          'participante_curso_id'=>1
        ]);

        DB::table('_evaluacion_final_curso')->insert([
          'p1_1'=>'80',
          'p1_2'=>'80',
          'p1_3'=>'80',
          'p1_4'=>'80',
          'p1_5'=>'80',
          'p2_1'=>'80',
          'p2_2'=>'80',
          'p2_3'=>'100',
          'p2_4'=>'80',
          'p3_1'=>'100',
          'p3_2'=>'100',
          'p3_3'=>'100',
          'p3_4'=>'100',
          'p7'=>true,
          'p8'=>'["1","null"]',
          'mejor'=>'El conocimiento de nuevas herramientas',
          'sug'=>'Agradable ambiente, todo perfecto. Pero los instructores un poco impuntuales',
          'p4_1'=>'100',
          'p4_2'=>'100',
          'p4_3'=>'100',
          'p4_4'=>'100',
          'p4_5'=>'100',
          'p4_6'=>'100',
          'p4_7'=>'100',
          'p4_8'=>'100',
          'p4_9'=>'80',
          'p4_10'=>'100',
          'p4_11'=>'80',
          'p5_1'=>'100',
          'p5_2'=>'100',
          'p5_3'=>'100',
          'p5_4'=>'100',
          'p5_5'=>'100',
          'p5_6'=>'100',
          'p5_7'=>'100',
          'p5_8'=>'100',
          'p5_9'=>'80',
          'p5_10'=>'100',
          'p5_11'=>'80',
          'otros'=>'programacion',
          'conocimiento'=>'["2"]',
          'tematica'=>'tematica',
          'horarios'=>'9:00-13:00',
          'horarioi'=>'13:00-15:00',
          'curso_id'=>1,
          'participante_curso_id'=>2
        ]);

        DB::table('_evaluacion_final_curso')->insert([
          'p1_1'=>'80',
          'p1_2'=>'80',
          'p1_3'=>'80',
          'p1_4'=>'80',
          'p1_5'=>'80',
          'p2_1'=>'80',
          'p2_2'=>'80',
          'p2_3'=>'100',
          'p2_4'=>'80',
          'p3_1'=>'100',
          'p3_2'=>'100',
          'p3_3'=>'100',
          'p3_4'=>'100',
          'p7'=>true,
          'p8'=>'["1","null"]',
          'mejor'=>'El conocimiento de nuevas herramientas',
          'sug'=>'Hay que mejorar mucho, la ponencia fue muy aburrida',
          'p4_1'=>'100',
          'p4_2'=>'100',
          'p4_3'=>'100',
          'p4_4'=>'100',
          'p4_5'=>'100',
          'p4_6'=>'100',
          'p4_7'=>'100',
          'p4_8'=>'100',
          'p4_9'=>'80',
          'p4_10'=>'100',
          'p4_11'=>'80',
          'p5_1'=>'100',
          'p5_2'=>'100',
          'p5_3'=>'100',
          'p5_4'=>'100',
          'p5_5'=>'100',
          'p5_6'=>'100',
          'p5_7'=>'100',
          'p5_8'=>'100',
          'p5_9'=>'80',
          'p5_10'=>'100',
          'p5_11'=>'80',
          'otros'=>'programacion',
          'conocimiento'=>'["2"]',
          'tematica'=>'tematica',
          'horarios'=>'9:00-13:00',
          'horarioi'=>'13:00-15:00',
          'curso_id'=>1,
          'participante_curso_id'=>3
        ]);

        DB::table('_evaluacion_final_curso')->insert([
          'p1_1'=>'80',
          'p1_2'=>'80',
          'p1_3'=>'80',
          'p1_4'=>'80',
          'p1_5'=>'80',
          'p2_1'=>'80',
          'p2_2'=>'80',
          'p2_3'=>'100',
          'p2_4'=>'80',
          'p3_1'=>'100',
          'p3_2'=>'100',
          'p3_3'=>'100',
          'p3_4'=>'100',
          'p7'=>true,
          'p8'=>'["1","null"]',
          'mejor'=>'El conocimiento de nuevas herramientas',
          'sug'=>'Se necesitan nuevas sillas',
          'p4_1'=>'100',
          'p4_2'=>'100',
          'p4_3'=>'100',
          'p4_4'=>'100',
          'p4_5'=>'100',
          'p4_6'=>'100',
          'p4_7'=>'100',
          'p4_8'=>'100',
          'p4_9'=>'80',
          'p4_10'=>'100',
          'p4_11'=>'80',
          'p5_1'=>'100',
          'p5_2'=>'100',
          'p5_3'=>'100',
          'p5_4'=>'100',
          'p5_5'=>'100',
          'p5_6'=>'100',
          'p5_7'=>'100',
          'p5_8'=>'100',
          'p5_9'=>'80',
          'p5_10'=>'100',
          'p5_11'=>'80',
          'otros'=>'programacion',
          'conocimiento'=>'["2"]',
          'tematica'=>'tematica',
          'horarios'=>'9:00-13:00',
          'horarioi'=>'13:00-15:00',
          'curso_id'=>1,
          'participante_curso_id'=>4
        ]);

        DB::table('_evaluacion_final_curso')->insert([
          'p1_1'=>'80',
          'p1_2'=>'80',
          'p1_3'=>'80',
          'p1_4'=>'80',
          'p1_5'=>'80',
          'p2_1'=>'80',
          'p2_2'=>'80',
          'p2_3'=>'100',
          'p2_4'=>'80',
          'p3_1'=>'100',
          'p3_2'=>'100',
          'p3_3'=>'100',
          'p3_4'=>'100',
          'p7'=>true,
          'p8'=>'["1","null"]',
          'mejor'=>'El conocimiento de nuevas herramientas',
          'sug'=>'Incomodo, más aire acondicionado',
          'p4_1'=>'100',
          'p4_2'=>'100',
          'p4_3'=>'100',
          'p4_4'=>'100',
          'p4_5'=>'100',
          'p4_6'=>'100',
          'p4_7'=>'100',
          'p4_8'=>'100',
          'p4_9'=>'80',
          'p4_10'=>'100',
          'p4_11'=>'80',
          'p5_1'=>'100',
          'p5_2'=>'100',
          'p5_3'=>'100',
          'p5_4'=>'100',
          'p5_5'=>'100',
          'p5_6'=>'100',
          'p5_7'=>'100',
          'p5_8'=>'100',
          'p5_9'=>'80',
          'p5_10'=>'100',
          'p5_11'=>'80',
          'otros'=>'programacion',
          'conocimiento'=>'["2"]',
          'tematica'=>'tematica',
          'horarios'=>'9:00-13:00',
          'horarioi'=>'13:00-15:00',
          'curso_id'=>1,
          'participante_curso_id'=>5
        ]);

        DB::table('_evaluacion_final_curso')->insert([
          'p1_1'=>'80',
          'p1_2'=>'80',
          'p1_3'=>'80',
          'p1_4'=>'80',
          'p1_5'=>'80',
          'p2_1'=>'80',
          'p2_2'=>'80',
          'p2_3'=>'100',
          'p2_4'=>'80',
          'p3_1'=>'100',
          'p3_2'=>'100',
          'p3_3'=>'100',
          'p3_4'=>'100',
          'p7'=>true,
          'p8'=>'["1","null"]',
          'mejor'=>'El conocimiento de nuevas herramientas',
          'sug'=>'El proyector no funcionaba',
          'p4_1'=>'100',
          'p4_2'=>'100',
          'p4_3'=>'100',
          'p4_4'=>'100',
          'p4_5'=>'100',
          'p4_6'=>'100',
          'p4_7'=>'100',
          'p4_8'=>'100',
          'p4_9'=>'80',
          'p4_10'=>'100',
          'p4_11'=>'80',
          'p5_1'=>'100',
          'p5_2'=>'100',
          'p5_3'=>'100',
          'p5_4'=>'100',
          'p5_5'=>'100',
          'p5_6'=>'100',
          'p5_7'=>'100',
          'p5_8'=>'100',
          'p5_9'=>'80',
          'p5_10'=>'100',
          'p5_11'=>'80',
          'otros'=>'programacion',
          'conocimiento'=>'["2"]',
          'tematica'=>'tematica',
          'horarios'=>'9:00-13:00',
          'horarioi'=>'13:00-15:00',
          'curso_id'=>1,
          'participante_curso_id'=>6
        ]);

        DB::table('_evaluacion_final_curso')->insert([
          'p1_1'=>'80',
          'p1_2'=>'80',
          'p1_3'=>'80',
          'p1_4'=>'80',
          'p1_5'=>'80',
          'p2_1'=>'80',
          'p2_2'=>'80',
          'p2_3'=>'100',
          'p2_4'=>'80',
          'p3_1'=>'100',
          'p3_2'=>'100',
          'p3_3'=>'100',
          'p3_4'=>'100',
          'p7'=>true,
          'p8'=>'["1","null"]',
          'mejor'=>'El conocimiento de nuevas herramientas',
          'sug'=>'Felicitaciones a los instructores, todo perfecto',
          'p4_1'=>'100',
          'p4_2'=>'100',
          'p4_3'=>'100',
          'p4_4'=>'100',
          'p4_5'=>'100',
          'p4_6'=>'100',
          'p4_7'=>'100',
          'p4_8'=>'100',
          'p4_9'=>'80',
          'p4_10'=>'100',
          'p4_11'=>'80',
          'p5_1'=>'100',
          'p5_2'=>'100',
          'p5_3'=>'100',
          'p5_4'=>'100',
          'p5_5'=>'100',
          'p5_6'=>'100',
          'p5_7'=>'100',
          'p5_8'=>'100',
          'p5_9'=>'80',
          'p5_10'=>'100',
          'p5_11'=>'80',
          'otros'=>'programacion',
          'conocimiento'=>'["2"]',
          'tematica'=>'tematica',
          'horarios'=>'9:00-13:00',
          'horarioi'=>'13:00-15:00',
          'curso_id'=>1,
          'participante_curso_id'=>7
        ]);

        DB::table('_evaluacion_final_curso')->insert([
          'p1_1'=>'80',
          'p1_2'=>'80',
          'p1_3'=>'80',
          'p1_4'=>'80',
          'p1_5'=>'80',
          'p2_1'=>'80',
          'p2_2'=>'80',
          'p2_3'=>'100',
          'p2_4'=>'80',
          'p3_1'=>'100',
          'p3_2'=>'100',
          'p3_3'=>'100',
          'p3_4'=>'100',
          'p7'=>true,
          'p8'=>'["1","null"]',
          'mejor'=>'El conocimiento de nuevas herramientas',
          'sug'=>'ninguna',
          'p4_1'=>'100',
          'p4_2'=>'100',
          'p4_3'=>'100',
          'p4_4'=>'100',
          'p4_5'=>'100',
          'p4_6'=>'100',
          'p4_7'=>'100',
          'p4_8'=>'100',
          'p4_9'=>'80',
          'p4_10'=>'100',
          'p4_11'=>'80',
          'p5_1'=>'100',
          'p5_2'=>'100',
          'p5_3'=>'100',
          'p5_4'=>'100',
          'p5_5'=>'100',
          'p5_6'=>'100',
          'p5_7'=>'100',
          'p5_8'=>'100',
          'p5_9'=>'80',
          'p5_10'=>'100',
          'p5_11'=>'80',
          'otros'=>'programacion',
          'conocimiento'=>'["2"]',
          'tematica'=>'tematica',
          'horarios'=>'9:00-13:00',
          'horarioi'=>'13:00-15:00',
          'curso_id'=>1,
          'participante_curso_id'=>8
        ]);

        DB::table('_evaluacion_final_curso')->insert([
          'p1_1'=>'80',
          'p1_2'=>'80',
          'p1_3'=>'80',
          'p1_4'=>'80',
          'p1_5'=>'80',
          'p2_1'=>'80',
          'p2_2'=>'80',
          'p2_3'=>'100',
          'p2_4'=>'80',
          'p3_1'=>'100',
          'p3_2'=>'100',
          'p3_3'=>'100',
          'p3_4'=>'100',
          'p7'=>true,
          'p8'=>'["1","null"]',
          'mejor'=>'El conocimiento de nuevas herramientas',
          'sug'=>'Se necesitan muchos ajustes en el contenido del curso',
          'p4_1'=>'100',
          'p4_2'=>'100',
          'p4_3'=>'100',
          'p4_4'=>'100',
          'p4_5'=>'100',
          'p4_6'=>'100',
          'p4_7'=>'100',
          'p4_8'=>'100',
          'p4_9'=>'80',
          'p4_10'=>'100',
          'p4_11'=>'80',
          'p5_1'=>'100',
          'p5_2'=>'100',
          'p5_3'=>'100',
          'p5_4'=>'100',
          'p5_5'=>'100',
          'p5_6'=>'100',
          'p5_7'=>'100',
          'p5_8'=>'100',
          'p5_9'=>'80',
          'p5_10'=>'100',
          'p5_11'=>'80',
          'otros'=>'programacion',
          'conocimiento'=>'["2"]',
          'tematica'=>'tematica',
          'horarios'=>'9:00-13:00',
          'horarioi'=>'13:00-15:00',
          'curso_id'=>1,
          'participante_curso_id'=>9
        ]);

        DB::table('_evaluacion_final_curso')->insert([
          'p1_1'=>'80',
          'p1_2'=>'80',
          'p1_3'=>'80',
          'p1_4'=>'80',
          'p1_5'=>'80',
          'p2_1'=>'80',
          'p2_2'=>'80',
          'p2_3'=>'100',
          'p2_4'=>'80',
          'p3_1'=>'100',
          'p3_2'=>'100',
          'p3_3'=>'100',
          'p3_4'=>'100',
          'p7'=>true,
          'p8'=>'["1","null"]',
          'mejor'=>'El conocimiento de nuevas herramientas',
          'sug'=>'Mejorar la limpieza del aula',
          'p4_1'=>'100',
          'p4_2'=>'100',
          'p4_3'=>'100',
          'p4_4'=>'100',
          'p4_5'=>'100',
          'p4_6'=>'100',
          'p4_7'=>'100',
          'p4_8'=>'100',
          'p4_9'=>'80',
          'p4_10'=>'100',
          'p4_11'=>'80',
          'p5_1'=>'100',
          'p5_2'=>'100',
          'p5_3'=>'100',
          'p5_4'=>'100',
          'p5_5'=>'100',
          'p5_6'=>'100',
          'p5_7'=>'100',
          'p5_8'=>'100',
          'p5_9'=>'80',
          'p5_10'=>'100',
          'p5_11'=>'80',
          'otros'=>'programacion',
          'conocimiento'=>'["2"]',
          'tematica'=>'tematica',
          'horarios'=>'9:00-13:00',
          'horarioi'=>'13:00-15:00',
          'curso_id'=>1,
          'participante_curso_id'=>10
        ]);

        DB::table('_evaluacion_final_curso')->insert([
          'p1_1'=>'80',
          'p1_2'=>'80',
          'p1_3'=>'80',
          'p1_4'=>'80',
          'p1_5'=>'80',
          'p2_1'=>'80',
          'p2_2'=>'80',
          'p2_3'=>'100',
          'p2_4'=>'80',
          'p3_1'=>'100',
          'p3_2'=>'100',
          'p3_3'=>'100',
          'p3_4'=>'100',
          'p7'=>true,
          'p8'=>'["1","null"]',
          'mejor'=>'El conocimiento de nuevas herramientas',
          'sug'=>'A pesar de los pocos días, todo fue muy biene ejecutado',
          'p4_1'=>'100',
          'p4_2'=>'100',
          'p4_3'=>'100',
          'p4_4'=>'100',
          'p4_5'=>'100',
          'p4_6'=>'100',
          'p4_7'=>'100',
          'p4_8'=>'100',
          'p4_9'=>'80',
          'p4_10'=>'100',
          'p4_11'=>'80',
          'p5_1'=>'100',
          'p5_2'=>'100',
          'p5_3'=>'100',
          'p5_4'=>'100',
          'p5_5'=>'100',
          'p5_6'=>'100',
          'p5_7'=>'100',
          'p5_8'=>'100',
          'p5_9'=>'80',
          'p5_10'=>'100',
          'p5_11'=>'80',
          'otros'=>'programacion',
          'conocimiento'=>'["2"]',
          'tematica'=>'tematica',
          'horarios'=>'9:00-13:00',
          'horarioi'=>'13:00-15:00',
          'curso_id'=>1,
          'participante_curso_id'=>11
        ]);

        DB::table('_evaluacion_final_curso')->insert([
          'p1_1'=>'80',
          'p1_2'=>'80',
          'p1_3'=>'80',
          'p1_4'=>'80',
          'p1_5'=>'80',
          'p2_1'=>'80',
          'p2_2'=>'80',
          'p2_3'=>'100',
          'p2_4'=>'80',
          'p3_1'=>'100',
          'p3_2'=>'100',
          'p3_3'=>'100',
          'p3_4'=>'100',
          'p7'=>true,
          'p8'=>'["1","null"]',
          'mejor'=>'El conocimiento de nuevas herramientas',
          'sug'=>'Mejorar la seguridad del aula',
          'p4_1'=>'100',
          'p4_2'=>'100',
          'p4_3'=>'100',
          'p4_4'=>'100',
          'p4_5'=>'100',
          'p4_6'=>'100',
          'p4_7'=>'100',
          'p4_8'=>'100',
          'p4_9'=>'80',
          'p4_10'=>'100',
          'p4_11'=>'80',
          'p5_1'=>'100',
          'p5_2'=>'100',
          'p5_3'=>'100',
          'p5_4'=>'100',
          'p5_5'=>'100',
          'p5_6'=>'100',
          'p5_7'=>'100',
          'p5_8'=>'100',
          'p5_9'=>'80',
          'p5_10'=>'100',
          'p5_11'=>'80',
          'otros'=>'programacion',
          'conocimiento'=>'["2"]',
          'tematica'=>'tematica',
          'horarios'=>'9:00-13:00',
          'horarioi'=>'13:00-15:00',
          'curso_id'=>1,
          'participante_curso_id'=>12
        ]);

        DB::table('_evaluacion_final_curso')->insert([
          'p1_1'=>'80',
          'p1_2'=>'80',
          'p1_3'=>'80',
          'p1_4'=>'80',
          'p1_5'=>'80',
          'p2_1'=>'80',
          'p2_2'=>'80',
          'p2_3'=>'100',
          'p2_4'=>'80',
          'p3_1'=>'100',
          'p3_2'=>'100',
          'p3_3'=>'100',
          'p3_4'=>'100',
          'p7'=>true,
          'p8'=>'["1","null"]',
          'mejor'=>'El conocimiento de nuevas herramientas',
          'sug'=>'Trabajar en el manejo de la voz al exponer los temas',
          'p4_1'=>'100',
          'p4_2'=>'100',
          'p4_3'=>'100',
          'p4_4'=>'100',
          'p4_5'=>'100',
          'p4_6'=>'100',
          'p4_7'=>'100',
          'p4_8'=>'100',
          'p4_9'=>'80',
          'p4_10'=>'100',
          'p4_11'=>'80',
          'p5_1'=>'100',
          'p5_2'=>'100',
          'p5_3'=>'100',
          'p5_4'=>'100',
          'p5_5'=>'100',
          'p5_6'=>'100',
          'p5_7'=>'100',
          'p5_8'=>'100',
          'p5_9'=>'80',
          'p5_10'=>'100',
          'p5_11'=>'80',
          'otros'=>'programacion',
          'conocimiento'=>'["2"]',
          'tematica'=>'tematica',
          'horarios'=>'9:00-13:00',
          'horarioi'=>'13:00-15:00',
          'curso_id'=>4,
          'participante_curso_id'=>39
        ]);

        DB::table('_evaluacion_final_curso')->insert([
          'p1_1'=>'80',
          'p1_2'=>'80',
          'p1_3'=>'80',
          'p1_4'=>'80',
          'p1_5'=>'80',
          'p2_1'=>'80',
          'p2_2'=>'80',
          'p2_3'=>'100',
          'p2_4'=>'80',
          'p3_1'=>'100',
          'p3_2'=>'100',
          'p3_3'=>'100',
          'p3_4'=>'100',
          'p7'=>true,
          'p8'=>'["1","null"]',
          'mejor'=>'El conocimiento de nuevas herramientas',
          'sug'=>'Ninguno de los temas fue lo que yo esperaba',
          'p4_1'=>'100',
          'p4_2'=>'100',
          'p4_3'=>'100',
          'p4_4'=>'100',
          'p4_5'=>'100',
          'p4_6'=>'100',
          'p4_7'=>'100',
          'p4_8'=>'100',
          'p4_9'=>'80',
          'p4_10'=>'100',
          'p4_11'=>'80',
          'p5_1'=>'100',
          'p5_2'=>'100',
          'p5_3'=>'100',
          'p5_4'=>'100',
          'p5_5'=>'100',
          'p5_6'=>'100',
          'p5_7'=>'100',
          'p5_8'=>'100',
          'p5_9'=>'80',
          'p5_10'=>'100',
          'p5_11'=>'80',
          'otros'=>'programacion',
          'conocimiento'=>'["2"]',
          'tematica'=>'tematica',
          'horarios'=>'9:00-13:00',
          'horarioi'=>'13:00-15:00',
          'curso_id'=>3,
          'participante_curso_id'=>38
        ]);

        DB::table('_evaluacion_final_curso')->insert([
          'p1_1'=>'80',
          'p1_2'=>'80',
          'p1_3'=>'80',
          'p1_4'=>'80',
          'p1_5'=>'80',
          'p2_1'=>'80',
          'p2_2'=>'80',
          'p2_3'=>'100',
          'p2_4'=>'80',
          'p3_1'=>'100',
          'p3_2'=>'100',
          'p3_3'=>'100',
          'p3_4'=>'100',
          'p7'=>true,
          'p8'=>'["1","null"]',
          'mejor'=>'El conocimiento de nuevas herramientas',
          'sug'=>'Preferiría seguir con mis cursos online',
          'p4_1'=>'100',
          'p4_2'=>'100',
          'p4_3'=>'100',
          'p4_4'=>'100',
          'p4_5'=>'100',
          'p4_6'=>'100',
          'p4_7'=>'100',
          'p4_8'=>'100',
          'p4_9'=>'80',
          'p4_10'=>'100',
          'p4_11'=>'80',
          'p5_1'=>'100',
          'p5_2'=>'100',
          'p5_3'=>'100',
          'p5_4'=>'100',
          'p5_5'=>'100',
          'p5_6'=>'100',
          'p5_7'=>'100',
          'p5_8'=>'100',
          'p5_9'=>'80',
          'p5_10'=>'100',
          'p5_11'=>'80',
          'otros'=>'programacion',
          'conocimiento'=>'["2"]',
          'tematica'=>'tematica',
          'horarios'=>'9:00-13:00',
          'horarioi'=>'13:00-15:00',
          'curso_id'=>3,
          'participante_curso_id'=>37
        ]);

        DB::table('_evaluacion_final_curso')->insert([
          'p1_1'=>'80',
          'p1_2'=>'80',
          'p1_3'=>'80',
          'p1_4'=>'80',
          'p1_5'=>'80',
          'p2_1'=>'80',
          'p2_2'=>'80',
          'p2_3'=>'100',
          'p2_4'=>'80',
          'p3_1'=>'100',
          'p3_2'=>'100',
          'p3_3'=>'100',
          'p3_4'=>'100',
          'p7'=>true,
          'p8'=>'["1","null"]',
          'mejor'=>'El conocimiento de nuevas herramientas',
          'sug'=>'Se necesitan mas instructores',
          'p4_1'=>'100',
          'p4_2'=>'100',
          'p4_3'=>'100',
          'p4_4'=>'100',
          'p4_5'=>'100',
          'p4_6'=>'100',
          'p4_7'=>'100',
          'p4_8'=>'100',
          'p4_9'=>'80',
          'p4_10'=>'100',
          'p4_11'=>'80',
          'p5_1'=>'100',
          'p5_2'=>'100',
          'p5_3'=>'100',
          'p5_4'=>'100',
          'p5_5'=>'100',
          'p5_6'=>'100',
          'p5_7'=>'100',
          'p5_8'=>'100',
          'p5_9'=>'80',
          'p5_10'=>'100',
          'p5_11'=>'80',
          'otros'=>'programacion',
          'conocimiento'=>'["2"]',
          'tematica'=>'tematica',
          'horarios'=>'9:00-13:00',
          'horarioi'=>'13:00-15:00',
          'curso_id'=>2,
          'participante_curso_id'=>36
        ]);

        DB::table('_evaluacion_final_curso')->insert([
          'p1_1'=>'80',
          'p1_2'=>'80',
          'p1_3'=>'80',
          'p1_4'=>'80',
          'p1_5'=>'80',
          'p2_1'=>'80',
          'p2_2'=>'80',
          'p2_3'=>'100',
          'p2_4'=>'80',
          'p3_1'=>'100',
          'p3_2'=>'100',
          'p3_3'=>'100',
          'p3_4'=>'100',
          'p7'=>true,
          'p8'=>'["1","null"]',
          'mejor'=>'El conocimiento de nuevas herramientas',
          'sug'=>'No volver atrás por los que se atrasan',
          'p4_1'=>'100',
          'p4_2'=>'100',
          'p4_3'=>'100',
          'p4_4'=>'100',
          'p4_5'=>'100',
          'p4_6'=>'100',
          'p4_7'=>'100',
          'p4_8'=>'100',
          'p4_9'=>'80',
          'p4_10'=>'100',
          'p4_11'=>'80',
          'p5_1'=>'100',
          'p5_2'=>'100',
          'p5_3'=>'100',
          'p5_4'=>'100',
          'p5_5'=>'100',
          'p5_6'=>'100',
          'p5_7'=>'100',
          'p5_8'=>'100',
          'p5_9'=>'80',
          'p5_10'=>'100',
          'p5_11'=>'80',
          'otros'=>'programacion',
          'conocimiento'=>'["2"]',
          'tematica'=>'tematica',
          'horarios'=>'9:00-13:00',
          'horarioi'=>'13:00-15:00',
          'curso_id'=>2,
          'participante_curso_id'=>35
        ]);

        DB::table('_evaluacion_final_curso')->insert([
          'p1_1'=>'80',
          'p1_2'=>'80',
          'p1_3'=>'80',
          'p1_4'=>'80',
          'p1_5'=>'80',
          'p2_1'=>'80',
          'p2_2'=>'80',
          'p2_3'=>'100',
          'p2_4'=>'80',
          'p3_1'=>'100',
          'p3_2'=>'100',
          'p3_3'=>'100',
          'p3_4'=>'100',
          'p7'=>true,
          'p8'=>'["1","null"]',
          'mejor'=>'El conocimiento de nuevas herramientas',
          'sug'=>'Mejorar forma de evaluación',
          'p4_1'=>'100',
          'p4_2'=>'100',
          'p4_3'=>'100',
          'p4_4'=>'100',
          'p4_5'=>'100',
          'p4_6'=>'100',
          'p4_7'=>'100',
          'p4_8'=>'100',
          'p4_9'=>'80',
          'p4_10'=>'100',
          'p4_11'=>'80',
          'p5_1'=>'100',
          'p5_2'=>'100',
          'p5_3'=>'100',
          'p5_4'=>'100',
          'p5_5'=>'100',
          'p5_6'=>'100',
          'p5_7'=>'100',
          'p5_8'=>'100',
          'p5_9'=>'80',
          'p5_10'=>'100',
          'p5_11'=>'80',
          'otros'=>'programacion',
          'conocimiento'=>'["2"]',
          'tematica'=>'tematica',
          'horarios'=>'9:00-13:00',
          'horarioi'=>'13:00-15:00',
          'curso_id'=>2,
          'participante_curso_id'=>34
        ]);

        DB::table('_evaluacion_final_curso')->insert([
          'p1_1'=>'80',
          'p1_2'=>'80',
          'p1_3'=>'80',
          'p1_4'=>'80',
          'p1_5'=>'80',
          'p2_1'=>'80',
          'p2_2'=>'80',
          'p2_3'=>'100',
          'p2_4'=>'80',
          'p3_1'=>'100',
          'p3_2'=>'100',
          'p3_3'=>'100',
          'p3_4'=>'100',
          'p7'=>true,
          'p8'=>'["1","null"]',
          'mejor'=>'El conocimiento de nuevas herramientas',
          'sug'=>'Estoy satisfecho con el desempeño del curso',
          'p4_1'=>'100',
          'p4_2'=>'100',
          'p4_3'=>'100',
          'p4_4'=>'100',
          'p4_5'=>'100',
          'p4_6'=>'100',
          'p4_7'=>'100',
          'p4_8'=>'100',
          'p4_9'=>'80',
          'p4_10'=>'100',
          'p4_11'=>'80',
          'p5_1'=>'100',
          'p5_2'=>'100',
          'p5_3'=>'100',
          'p5_4'=>'100',
          'p5_5'=>'100',
          'p5_6'=>'100',
          'p5_7'=>'100',
          'p5_8'=>'100',
          'p5_9'=>'80',
          'p5_10'=>'100',
          'p5_11'=>'80',
          'otros'=>'programacion',
          'conocimiento'=>'["2"]',
          'tematica'=>'tematica',
          'horarios'=>'9:00-13:00',
          'horarioi'=>'13:00-15:00',
          'curso_id'=>2,
          'participante_curso_id'=>33
        ]);

        DB::table('_evaluacion_final_curso')->insert([
          'p1_1'=>'80',
          'p1_2'=>'80',
          'p1_3'=>'80',
          'p1_4'=>'80',
          'p1_5'=>'80',
          'p2_1'=>'80',
          'p2_2'=>'80',
          'p2_3'=>'100',
          'p2_4'=>'80',
          'p3_1'=>'100',
          'p3_2'=>'100',
          'p3_3'=>'100',
          'p3_4'=>'100',
          'p7'=>true,
          'p8'=>'["1","null"]',
          'mejor'=>'El conocimiento de nuevas herramientas',
          'sug'=>'Se necesita más conocimiento y mejor material didáctico',
          'p4_1'=>'100',
          'p4_2'=>'100',
          'p4_3'=>'100',
          'p4_4'=>'100',
          'p4_5'=>'100',
          'p4_6'=>'100',
          'p4_7'=>'100',
          'p4_8'=>'100',
          'p4_9'=>'80',
          'p4_10'=>'100',
          'p4_11'=>'80',
          'p5_1'=>'100',
          'p5_2'=>'100',
          'p5_3'=>'100',
          'p5_4'=>'100',
          'p5_5'=>'100',
          'p5_6'=>'100',
          'p5_7'=>'100',
          'p5_8'=>'100',
          'p5_9'=>'80',
          'p5_10'=>'100',
          'p5_11'=>'80',
          'otros'=>'programacion',
          'conocimiento'=>'["2"]',
          'tematica'=>'tematica',
          'horarios'=>'9:00-13:00',
          'horarioi'=>'13:00-15:00',
          'curso_id'=>2,
          'participante_curso_id'=>32
        ]);

        DB::table('_evaluacion_final_curso')->insert([ //id=21
          'p1_1'=>'95',
          'p1_2'=>'95',
          'p1_3'=>'95',
          'p1_4'=>'95',
          'p1_5'=>'95',
          'p2_1'=>'95',
          'p2_2'=>'95',
          'p2_3'=>'100',
          'p2_4'=>'95',
          'p3_1'=>'100',
          'p3_2'=>'100',
          'p3_3'=>'100',
          'p3_4'=>'100',
          'p7'=>true,
          'p8'=>'["1","null"]',
          'mejor'=>'El conocimiento de nuevas herramientas',
          'sug'=>'-',
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
          'p4_11'=>'95',
          'p5_1'=>'100',
          'p5_2'=>'100',
          'p5_3'=>'100',
          'p5_4'=>'100',
          'p5_5'=>'100',
          'p5_6'=>'100',
          'p5_7'=>'100',
          'p5_8'=>'100',
          'p5_9'=>'95',
          'p5_10'=>'100',
                'p5_11'=>'95',
                'otros'=>'Otros',
          'conocimiento'=>'["2"]',
          'tematica'=>'tematica',
          'horarios'=>'9:00-13:00',
          'horarioi'=>'13:00-15:00',
          'curso_id'=>10,
          'participante_curso_id'=>45
        ]);

        DB::table('_evaluacion_final_curso')->insert([ //id=22
          'p1_1'=>'100',
          'p1_2'=>'95',
          'p1_3'=>'95',
          'p1_4'=>'100',
          'p1_5'=>'80',
          'p2_1'=>'95',
          'p2_2'=>'80',
          'p2_3'=>'100',
          'p2_4'=>'100',
          'p3_1'=>'100',
          'p3_2'=>'100',
          'p3_3'=>'100',
          'p3_4'=>'100',
          'p7'=>true,
          'p8'=>'["1","null"]',
          'mejor'=>'Todo porque me pareció muy bueno y que lo puedo aplicar en las clases',
          'sug'=>'Me pareció bueno así tal y como se impartió',
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
          'conocimiento'=>'["2"]',
          'tematica'=>'tematica',
          'horarios'=>'9:00-13:00',
          'horarioi'=>'13:00-15:00',
          'curso_id'=>10,
          'participante_curso_id'=>46
        ]);

        DB::table('_evaluacion_final_curso')->insert([ //id=23
          'p1_1'=>'95',
          'p1_2'=>'95',
          'p1_3'=>'95',
          'p1_4'=>'100',
          'p1_5'=>'100',
          'p2_1'=>'100',
          'p2_2'=>'60',
          'p2_3'=>'95',
          'p2_4'=>'100',
          'p3_1'=>'60',
          'p3_2'=>'100',
          'p3_3'=>'80',
          'p3_4'=>'100',
          'p7'=>true,
          'p8'=>'["2","null"]',
          'mejor'=>'Plataformas educativas',
          'sug'=>'Sigan dando esto cursos',
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
          'curso_id'=>10,
          'participante_curso_id'=>47
        ]);

        DB::table('_evaluacion_final_curso')->insert([ //id=24
          'p1_1'=>'100',
          'p1_2'=>'95',
          'p1_3'=>'100',
          'p1_4'=>'95',
          'p1_5'=>'95',
          'p2_1'=>'95',
          'p2_2'=>'100',
          'p2_3'=>'100',
          'p2_4'=>'100',
          'p3_1'=>'95',
          'p3_2'=>'100',
          'p3_3'=>'100',
          'p3_4'=>'95',
          'p7'=>true,
          'p8'=>'["1","null"]',
          'mejor'=>'Todo me gusto porque es nuevo para mí y ayuda a construir un curso desde otra perspectiva',
          'sug'=>'Me ha gustado mucho todo lo visto y creo que me será de utilidad en mis clases',
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
          'curso_id'=>10,
          'participante_curso_id'=>48
        ]);

        DB::table('_evaluacion_final_curso')->insert([ //id=25
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
          'p7'=>true,
          'p8'=>'["1","null"]',
          'mejor'=>'Los temas tratados y la calidad humana por parte de los doscentes',
          'sug'=>'El temario está muy bien de hecho, si acaso dar un día más de clases a manera personal, aunque se abarcaron muy bien los temas, sobre todo para más',
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
          'conocimiento'=>'["3"]',
          'tematica'=>'tematica',
          'horarios'=>'9:00-13:00',
          'horarioi'=>'13:00-15:00',
          'curso_id'=>10,
          'participante_curso_id'=>49
        ]);

        DB::table('_evaluacion_final_curso')->insert([ //id=26
          'p1_1'=>'95',
          'p1_2'=>'95',
          'p1_3'=>'95',
          'p1_4'=>'95',
          'p1_5'=>'100',
          'p2_1'=>'95',
          'p2_2'=>'100',
          'p2_3'=>'100',
          'p2_4'=>'100',
          'p3_1'=>'100',
          'p3_2'=>'100',
          'p3_3'=>'100',
          'p3_4'=>'100',
          'p7'=>true,
          'p8'=>'["4","Gaceta"]',
          'mejor'=>'El trato con los profesores',
          'sug'=>'Que no esté tan cargado porque no se profundiza',
          'p4_1'=>'95',
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
          'p5_1'=>'100',
          'p5_2'=>'100',
          'p5_3'=>'95',
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
          'curso_id'=>10,
          'participante_curso_id'=>50
        ]);

        DB::table('_evaluacion_final_curso')->insert([ //id=27
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
          'p7'=>true,
          'p8'=>'["1","null"]',
          'mejor'=>'La disposición',
          'sug'=>'5mentarios',
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
          'curso_id'=>10,
          'participante_curso_id'=>51
        ]);

        DB::table('_evaluacion_final_curso')->insert([ //id=28
          'p1_1'=>'95',
          'p1_2'=>'95',
          'p1_3'=>'100',
          'p1_4'=>'95',
          'p1_5'=>'95',
          'p2_1'=>'100',
          'p2_2'=>'100',
          'p2_3'=>'100',
          'p2_4'=>'100',
          'p3_1'=>'95',
          'p3_2'=>'100',
          'p3_3'=>'100',
          'p3_4'=>'100',
          'p7'=>true,
          'p8'=>'["2","null"]',
          'mejor'=>'El uso de las TIC para las asignaturas',
          'sug'=>'Debería haber dos sesiones a la semana',
          'p4_1'=>'95',
          'p4_2'=>'100',
          'p4_3'=>'95',
          'p4_4'=>'100',
          'p4_5'=>'95',
          'p4_6'=>'95',
          'p4_7'=>'95',
          'p4_8'=>'95',
          'p4_9'=>'100',
          'p4_10'=>'100',
          'p4_11'=>'95',
          'p5_1'=>'95',
          'p5_2'=>'95',
          'p5_3'=>'100',
          'p5_4'=>'95',
          'p5_5'=>'95',
          'p5_6'=>'95',
          'p5_7'=>'95',
          'p5_8'=>'95',
          'p5_9'=>'95',
          'p5_10'=>'95',
                'p5_11'=>'95',
                'otros'=>'Otros',
          'conocimiento'=>'["3"]',
          'tematica'=>'tematica',
          'horarios'=>'9:00-13:00',
          'horarioi'=>'13:00-15:00',
          'curso_id'=>10,
          'participante_curso_id'=>52
        ]);

        DB::table('_evaluacion_final_curso')->insert([ //id=29
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
          'p7'=>true,
          'p8'=>'["4","DGAPA"]',
          'mejor'=>'Ver herramientas alternas para trabajar con los alumnos',
          'sug'=>'Tal vez, un poco más de tiempo, que sean al menos unas 30 horas el curso',
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
          'conocimiento'=>'["2"]',
          'tematica'=>'tematica',
          'horarios'=>'9:00-13:00',
          'horarioi'=>'13:00-15:00',
          'curso_id'=>10,
          'participante_curso_id'=>53
        ]);

        DB::table('_evaluacion_final_curso')->insert([ //id=30
          'p1_1'=>'100',
          'p1_2'=>'100',
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
          'p7'=>true,
          'p8'=>'["1","null"]',
          'mejor'=>'Conocimiento acerca de nuevas herramientas',
          'sug'=>'Dar continuidad con otros cursos',
          'p4_1'=>'95',
          'p4_2'=>'95',
          'p4_3'=>'100',
          'p4_4'=>'95',
          'p4_5'=>'100',
          'p4_6'=>'80',
          'p4_7'=>'80',
          'p4_8'=>'100',
          'p4_9'=>'95',
          'p4_10'=>'95',
          'p4_11'=>'100',
          'p5_1'=>'100',
          'p5_2'=>'95',
          'p5_3'=>'100',
          'p5_4'=>'100',
          'p5_5'=>'95',
          'p5_6'=>'95',
          'p5_7'=>'100',
          'p5_8'=>'100',
          'p5_9'=>'100',
          'p5_10'=>'100',
                'p5_11'=>'100',
                'otros'=>'Otros',
          'conocimiento'=>'["2"]',
          'tematica'=>'tematica',
          'horarios'=>'9:00-13:00',
          'horarioi'=>'13:00-15:00',
          'curso_id'=>10,
          'participante_curso_id'=>54
            ]);

            DB::table('_evaluacion_final_curso')->insert([ //id=31
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
              'p3_2'=>'80',
              'p3_3'=>'80',
              'p3_4'=>'80',
              'p7'=>true,
              'p8'=>'["4","Profesor"]',
              'mejor'=>'Las técnicas que se nos mostró para mejorar nuestras habilidades de enseñanza',
              'sug'=>'Variedad de cursos',
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
              'curso_id'=>11,
              'participante_curso_id'=>55
                ]);

            DB::table('_evaluacion_final_curso')->insert([ //id=32
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
              'p7'=>true,
              'p8'=>'["1","null"]',
              'mejor'=>'Los contenidos desarrollados y la uinmediata aplicación',
                    'sug'=>'Gracias',
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
              'curso_id'=>11,
              'participante_curso_id'=>56
            ]);
            
            DB::table('_evaluacion_final_curso')->insert([ //id=33
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
              'p3_2'=>'80',
              'p3_3'=>'100',
              'p3_4'=>'100',
              'p7'=>true,
              'p8'=>'["1","null"]',
              'mejor'=>'La forma en que la instructora presentó los temas aterrizados a la realidad',
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
              'conocimiento'=>'["3"]',
              'tematica'=>'Otro',
              'horarios'=>'9:00-13:00',
              'horarioi'=>'13:00-15:00',
              'curso_id'=>11,
              'participante_curso_id'=>57
                ]);
      
        DB::table('_evaluacion_final_curso')->insert([ //id=34
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
          'p7'=>true,
          'p8'=>'["2","null"]',
          'mejor'=>'La estrategia de enseñanza-aprendizaje denominado aula invertida',
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
          'conocimiento'=>'["4"]',
          'tematica'=>'Varias',
          'horarios'=>'9:00-13:00',
          'horarioi'=>'13:00-15:00',
          'curso_id'=>11,
          'participante_curso_id'=>59
            ]);

            DB::table('_evaluacion_final_curso')->insert([ //id=35
              'p1_1'=>'100',
              'p1_2'=>'100',
              'p1_3'=>'95',
              'p1_4'=>'100',
              'p1_5'=>'100',
              'p2_1'=>'60',
              'p2_2'=>'95',
              'p2_3'=>'95',
              'p2_4'=>'100',
              'p3_1'=>'100',
              'p3_2'=>'95',
              'p3_3'=>'100',
              'p3_4'=>'100',
              'p7'=>true,
              'p8'=>'["4","Diplomado"]',
              'mejor'=>'La forma en como se desarrollaron los contenidos',
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
              'conocimiento'=>'["2"]',
              'tematica'=>'tematica',
              'horarios'=>'9:00-13:00',
              'horarioi'=>'13:00-15:00',
              'curso_id'=>11,
              'participante_curso_id'=>59
                ]);
      DB::table('_evaluacion_final_curso')->insert([ //id=36
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
			'p7'=>true,
			'p8'=>'["2","null"]',
			'mejor'=>'Aula invertida',
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
			'conocimiento'=>'["2"]',
			'tematica'=>'tematica',
			'horarios'=>'9:00-13:00',
			'horarioi'=>'13:00-15:00',
			'curso_id'=>11,
			'participante_curso_id'=>60
        ]);

        DB::table('_evaluacion_final_curso')->insert([ //id=37
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
          'p7'=>true,
          'p8'=>'["2","null"]',
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
          'conocimiento'=>'["2"]',
          'tematica'=>'tematica',
          'horarios'=>'9:00-13:00',
          'horarioi'=>'13:00-15:00',
          'curso_id'=>11,
          'participante_curso_id'=>61
            ]);

            DB::table('_evaluacion_final_curso')->insert([ //id=38
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
              'p3_3'=>'80',
              'p3_4'=>'100',
              'p7'=>true,
              'p8'=>'["2","null"]',
              'mejor'=>'La presentación de los temas',
                    'sug'=>'Que se mejore la red de internet',
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
              'curso_id'=>11,
              'participante_curso_id'=>62
                ]);

    DB::table('_evaluacion_final_curso')->insert([ //id=39
      'p1_1'=>'100',
      'p1_2'=>'100',
      'p1_3'=>'100',
      'p1_4'=>'100',
      'p1_5'=>'100',
      'p2_1'=>'95',
      'p2_2'=>'95',
      'p2_3'=>'100',
      'p2_4'=>'100',
      'p3_1'=>'95',
      'p3_2'=>'95',
      'p3_3'=>'95',
      'p3_4'=>'100',
      'p7'=>true,
      'p8'=>'["3","null"]',
      'mejor'=>'Habilidades para la vida y competencias personales y como aplicarlas',
      'sug'=>'Recalcar el tema del cuál se está hablando',
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
      'conocimiento'=>'["4"]',
      'tematica'=>'tematica',
      'horarios'=>'9:00-13:00',
      'horarioi'=>'13:00-15:00',
      'curso_id'=>11,
      'participante_curso_id'=>63
      ]);
            
      DB::table('_evaluacion_final_curso')->insert([ //id=40
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
        'p7'=>true,
        'p8'=>'["2","null"]',
        'mejor'=>'Las relfexiones grupales',
              'sug'=>'Incluir un ejemplo del formato de las tareas',
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
        'conocimiento'=>'["2"]',
        'tematica'=>'tematica',
        'horarios'=>'9:00-13:00',
        'horarioi'=>'13:00-15:00',
        'curso_id'=> 11,
        'participante_curso_id'=>64
      ]);

    DB::table('_evaluacion_final_curso')->insert([ //id = 41
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
        'p7'=>true,
        'p8'=>'["1","null"]',
        'mejor'=>'Aula invertida y competencias',
              'sug'=>'Poner el Diplomado en el sitio de EDUCAFI para tener todos los módulos disponibles a lo largo del diplomado',
        'p4_1'=>'100',
        'p4_2'=>'100',
        'p4_3'=>'100',
        'p4_4'=>'100',
        'p4_5'=>'100',
        'p4_6'=>'95',
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
        'curso_id'=>11,
        'participante_curso_id'=>65
    ]);
  
    DB::table('_evaluacion_final_curso')->insert([ //id=42
			'p1_1'=>'95',
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
			'p3_3'=>'95',
			'p3_4'=>'100',
			'p7'=>true,
			'p8'=>'["4","Póster en FCA"]',
			'mejor'=>'El conocimiento de algunas hailidades que he desarrollado en la práctica docente',
            'sug'=>'-',
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
			'curso_id'=>11,
			'participante_curso_id'=>66
  ]);

  DB::table('_evaluacion_final_curso')->insert([ //id=43
    'p1_1'=>'95',
    'p1_2'=>'95',
    'p1_3'=>'95',
    'p1_4'=>'95',
    'p1_5'=>'95',
    'p2_1'=>'80',
    'p2_2'=>'80',
    'p2_3'=>'80',
    'p2_4'=>'80',
    'p3_1'=>'80',
    'p3_2'=>'80',
    'p3_3'=>'80',
    'p3_4'=>'80',
    'p7'=>true,
    'p8'=>'["2","null"]',
    'mejor'=>'Trabajo y comunicación de trabajo en equipo',
          'sug'=>'-',
    'p4_1'=>'95',
    'p4_2'=>'95',
    'p4_3'=>'80',
    'p4_4'=>'95',
    'p4_5'=>'95',
    'p4_6'=>'95',
    'p4_7'=>'95',
    'p4_8'=>'95',
    'p4_9'=>'95',
    'p4_10'=>'95',
    'p4_11'=>'95',
          'otros'=>'Otros',
    'conocimiento'=>'["2"]',
    'tematica'=>'tematica',
    'horarios'=>'9:00-13:00',
    'horarioi'=>'13:00-15:00',
    'curso_id'=>11,
    'participante_curso_id'=>67
  ]);

  DB::table('_evaluacion_final_curso')->insert([ //id=43
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
    'p3_2'=>'95',
    'p3_3'=>'100',
    'p3_4'=>'100',
    'p7'=>true,
    'p8'=>'["4","Profesor"]',
    'mejor'=>'Respuesta en Blanco',
          'sug'=>'Respuesta en Blanco',
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
          'otros'=>'Liderazgo: Imagen',
    'conocimiento'=>'["1"]',
    'tematica'=>'tematica',
    'horarios'=>'Cualquiera',
    'horarioi'=>'Cualquiera',
    'curso_id'=>12,
    'participante_curso_id'=>68
    ]);


    }
}