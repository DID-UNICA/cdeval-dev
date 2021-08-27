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
        
        DB::table('users')->insert([
            'nombres'=> 'Mauricio',
            'apellido_paterno' => 'Ramos',
            'apellido_materno' => 'Villaseñor',
            'rfc' => 'RAVC971212',
            'curp' => 'RAVC971212HDFMLS07',
            'fecha_nacimiento' => '1997-12-12',
            'telefono' => '5656978610',
            'grado' => 'Doctor',
            'email' => 'mauri334455@gmail.com',
            'usuario' => 'mauri334455',
            'password' => Hash::make('amores334455')
        ]);
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
        DB::table('coordinacions')->insert([
            'nombre_coordinacion' => 'Formación de Desarrollo Humano',
            'abreviatura' => 'CA',
            'coordinador' => 'Diego Alberto Gomez',
            'grado' => 'M.E.M.',
            'usuario' => 'd1eg1nEZ',
            'password' => Hash::make('1234'),
            'comentarios' => 'Esta coordinacion está encargada en la parte administrativa de la FI'
        ]);

        DB::table('coordinacions')->insert([
            'nombre_coordinacion' => 'Formación Educativa',
            'abreviatura' => 'CE',
            'coordinador' => 'Alan Rodriguez Ramirez',
            'grado' => 'M.E.',
            'usuario' => 'A1an1nEZ',
            'password' => Hash::make('1234'),
            'comentarios' => 'Esta coordinación se encarga de la parte educativa de la FI'
        ]);
        DB::table('divisions')->insert([
            'nombre' => 'Ciencias Básicas',
        ]);
        DB::table('divisions')->insert([
            'nombre' => 'Geomática',
        ]);
        DB::table('divisions')->insert([
            'nombre' => 'Ingeniería Eléctrica',
        ]);
        DB::table('divisions')->insert([
            'nombre' => 'Ciencias Sociales',
        ]);

        DB:: table('facultads')->insert([
            'id' => 1,
            'nombre' =>'Facultad de Arquitectura'
        ]);
        DB:: table('facultads')->insert([
            'id' => 2,
            'nombre' =>'Facultad de Artes y Diseño'
        ]);
        DB:: table('facultads')->insert([
            'id' => 3,
            'nombre' =>'Facultad de Ciencias'
        ]);
        DB:: table('facultads')->insert([
            'id' => 4,
            'nombre' =>'Facultad de Ciencias Políticas y Sociales'
        ]);
        DB:: table('facultads')->insert([
            'id' => 5,
            'nombre' =>'Facultad de Contaduría y Administración'
        ]);
        DB:: table('facultads')->insert([
            'id' => 6,
            'nombre' =>'Facultad de Derecho'
        ]);
        DB:: table('facultads')->insert([
            'id' => 7,
            'nombre' =>'Facultad de Economía'
        ]);
        DB:: table('facultads')->insert([
            'id' => 8,
            'nombre' =>'Facultad de Estudios Superiores (FES) Acatlán'
        ]);
        DB:: table('facultads')->insert([
            'id' => 9,
            'nombre' =>'Facultad de Estudios Superiores (FES) Aragón'
        ]);
        DB:: table('facultads')->insert([
            'id' => 10,
            'nombre' =>'Facultad de Estudios Superiores (FES) Cuautitlán'
        ]);
        DB:: table('facultads')->insert([
            'id' => 11,
            'nombre' =>'Facultad de Estudios Superiores (FES) Iztacala'
        ]);
        DB:: table('facultads')->insert([
            'id' => 12,
            'nombre' =>'Facultad de Estudios Superiores (FES) Zaragoza'
        ]);
        DB:: table('facultads')->insert([
            'id' => 13,
            'nombre' =>'Facultad de Filosofía y Letras'
        ]);
        DB:: table('facultads')->insert([
            'id' => 14,
            'nombre' =>'Facultad de Ingeniería'
        ]);
        DB:: table('facultads')->insert([
            'id' => 15,
            'nombre' =>'Facultad de Medicina'
        ]);
        DB:: table('facultads')->insert([
            'id' => 16,
            'nombre' =>'Facultad de Medicina Veterinaria y Zootecnia'
        ]);
        DB:: table('facultads')->insert([
            'id' => 17,
            'nombre' =>'Facultad de Música'
        ]);
        DB:: table('facultads')->insert([
            'id' => 18,
            'nombre' =>'Facultad de Odontología'
        ]);
        DB:: table('facultads')->insert([
            'id' => 19,
            'nombre' =>'Facultad de Psicología'
        ]);
        DB:: table('facultads')->insert([
            'id' => 20,
            'nombre' =>'Facultad de Química'
        ]);
        DB:: table('facultads')->insert([
            'id' => 21,
            'nombre' =>'Centro de Física Aplicada y Tecnología Avanzada'
        ]);
        DB:: table('facultads')->insert([
            'id' => 22,
            'nombre' =>'Instituo de Energías Renovables'
        ]);
        DB:: table('facultads')->insert([
            'id' => 23,
            'nombre' =>'Centro de Nanociencias y Nanotecnología'
        ]);
        DB:: table('facultads')->insert([
            'id' => 24,
            'nombre' =>'Escuela Nacional de Estudios Superiores,Unidad Mérida'
        ]);
        DB:: table('facultads')->insert([
            'id' => 25,
            'nombre' =>'Escuela Nacional de Estudios Superiores,Unidad Morelia'
        ]);
        DB:: table('facultads')->insert([
            'id' => 26,
            'nombre' =>'Instituto de Investigaciones en Matemáticas y en Sistemas'
        ]);
        DB:: table('facultads')->insert([
            'id' => 27,
            'nombre' =>'Escuela Nacional de Enfermería y Obstetricia'
        ]);
        DB:: table('facultads')->insert([
            'id' => 28,
            'nombre' =>'Escuela Nacional de Estudios Superiores, Unidad León'
        ]);
        DB:: table('facultads')->insert([
            'id' => 29,
            'nombre' =>'Centro de Ciencias Genómicas'
        ]);
        DB:: table('facultads')->insert([
            'id' => 30,
            'nombre' =>'Escuela Nacional de Estudios Superiores, Unidad Juriquilla'
        ]);
        DB:: table('facultads')->insert([
            'id' => 31,
            'nombre' =>'Escuela Nacional de Trabajo Social'
        ]);
        DB:: table('facultads')->insert([
            'id' => 32,
            'nombre' =>'Centro Universitarios de Estudios Cinematográficos'
        ]);
        DB:: table('facultads')->insert([
            'id' => 33,
            'nombre' =>'Centro Universitario de Teatro'
        ]);
        DB:: table('facultads')->insert([
            'id' => 34,
            'nombre' =>'Escuela Nacional de Lenguas, Lingúistica y Traducción'
        ]);

        DB::table('carreras')->insert([
            'nombre' => 'Actuaría',
            'clave' => 101,
            'id_division' => 1,
            'id_facultad' => 3,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Arquitectura',
            'clave' => 102,
            'id_division' => 1,
            'id_facultad' => 1,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Arquitectura del paisaje',
            'clave' => 103,
            'id_division' => 1,
            'id_facultad' => 1,

        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Ciencias de la Computación',
            'clave' => 104,
            'id_division' => 1,
            'id_facultad' => 3,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Diseño Industrial',
            'clave' => 105,
            'id_division' => 1,
            'id_facultad' => 1,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Física',
            'clave' => 106,
            'id_division' => 1,
            'id_facultad' => 3,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Ingeniería Civil',
            'clave' => 107,
            'id_division' => 1,
            'id_facultad' => 14,

        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Ingeniería de Minas y Metalurgía',
            'clave' => 108,
            'id_division' => 1,
            'id_facultad' => 14,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Ingeniería Eléctrica y Eletrónica',
            'clave' => 109,
            'id_division' => 1,
            'id_facultad' => 14,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Ingeniería en Computación',
            'clave' => 110,
            'id_division' => 1,
            'id_facultad' => 14,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Ingeniería en Telecomunicaciones',
            'clave' => 111,
            'id_division' => 1,
            'id_facultad' => 14,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Ingeniería Geofísica',
            'clave' => 112,
            'id_division' => 1,
            'id_facultad' => 14,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Ingeniería Geológica',
            'clave' => 113,
            'id_division' => 1,
            'id_facultad' => 14,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Ingeniería Industrial',
            'clave' => 114,
            'id_division' => 1,
            'id_facultad' => 14,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Ingeniería Mecánica',
            'clave' => 115,
            'id_division' => 1,
            'id_facultad' => 14,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Ingeniería Mecánica Eléctrica',
            'clave' => 116,
            'id_division' => 1,
            'id_facultad' => 14,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Ingeniería Petrolera',
            'clave' => 117,
            'id_division' => 1,
            'id_facultad' => 14,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Ingeniería Química',
            'clave' => 118,
            'id_division' => 1,
            'id_facultad' => 20,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Ingeniería Química Metalurgia',
            'clave' => 119,
            'id_division' => 1,
            'id_facultad' => 20,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Ingeniería Topográfica y Geodesica',
            'clave' => 120,
            'id_division' => 1,
            'id_facultad' => 14,

        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Ingenieria electrica',
            'clave' => 1231,
            'id_division' => 1,
            'id_facultad' => 14,
        ]);

        DB::table('carreras')->insert([
            'nombre' => 'Matemáticas Aplicadas y Computación',
            'clave' => 121,
            'id_division' => 1,
            'id_facultad' => 8,
        ]);

        DB::table('carreras')->insert([
            'nombre' => 'Matemáticas',
            'clave' => 122,
            'id_division' => 1,
            'id_facultad' => 3,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Urbanismo',
            'clave' => 123,
            'id_division' => 1,
            'id_facultad' =>  1,
        ]);

        DB::table('carreras')->insert([
            'nombre' => 'Ingeniería Mecatrónica',
            'clave' => 124,
            'id_division' => 1,
            'id_facultad' => 14,
        ]);

        DB::table('carreras')->insert([
            'nombre' => 'Ingeniería Geomática',
            'clave' => 125,
            'id_division' => 1,
            'id_facultad' => 14,
        ]);

        DB::table('carreras')->insert([
            'nombre' => 'Tecnología',
            'clave' => 126,
            'id_division' => 1,
            'id_facultad' => 10,
        ]);

        DB::table('carreras')->insert([
            'nombre' => 'Ciencias de la Tierra',
            'clave' => 127,
            'id_division' => 1,
            'id_facultad' => 3,
        ]);

        DB::table('carreras')->insert([
            'nombre' => 'Ingeniería en Energías Renovables',
            'clave' => 128,
            'id_division' => 1,
            'id_facultad' => 22,
        ]);

        DB::table('carreras')->insert([
            'nombre' => 'Nanotecnología',
            'clave' => 129,
            'id_division' => 1,
            'id_facultad' => 23,
        ]);

        DB::table('carreras')->insert([
            'nombre' => 'Ingeniería en Telecomunicaciones, Sistemas y Electrónica',
            'clave' => 130,
            'id_division' => 1,
            'id_facultad' => 10,
        ]);

        DB::table('carreras')->insert([
            'nombre' => 'Geociencias',
            'clave' => 131,
            'id_division' => 1,
            'id_facultad' => 25,
        ]);

        DB::table('carreras')->insert([
            'nombre' => 'Tecnologías para la información en ciencias',
            'clave' => 132,
            'id_division' => 1,
            'id_facultad' => 25,
        ]);

        DB::table('carreras')->insert([
            'nombre' => 'Ciencia de Materiales Sustentables',
            'clave' => 133,
            'id_division' => 1,
            'id_facultad' => 25,
        ]);

        DB::table('carreras')->insert([
            'nombre' => 'Física Biomédica',
            'clave' => 134,
            'id_division' => 1,
            'id_facultad' => 3,
        ]);

        DB::table('carreras')->insert([
            'nombre' => 'Ingeniería en Sistemas Biomédicos',
            'clave' => 135,
            'id_division' => 1,
            'id_facultad' => 14,
        ]);

        DB::table('carreras')->insert([
            'nombre' => 'Matemáticas Aplicadas',
            'clave' => 136,
            'id_division' => 1,
            'id_facultad' => 3,
        ]);

        DB::table('carreras')->insert([
            'nombre' => 'Ingeniería Ambiental',
            'clave' => 137,
            'id_division' => 1,
            'id_facultad' => 14,
        ]);

        DB::table('carreras')->insert([
            'nombre' => 'Ciencia de Datos',
            'clave' => 138,
            'id_division' => 1,
            'id_facultad' => 26,
        ]);

        DB::table('carreras')->insert([
            'nombre' => 'Biología',
            'clave' => 201,
            'id_division' => 2,
            'id_facultad' => 11,
        ]);

        DB::table('carreras')->insert([
            'nombre' => 'Biología',
            'clave' => 201,
            'id_division' => 2,
            'id_facultad' => 3,
        ]);

        DB::table('carreras')->insert([
            'nombre' => 'Cirujano Dentista',
            'clave' => 202,
            'id_division' => 2,
            'id_facultad' => 11,
        ]);

        DB::table('carreras')->insert([
            'nombre' => 'Enfermería y Obstetricia',
            'clave' => 203,
            'id_division' => 2,
            'id_facultad' => 27,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Ingeniería Agrícola',
            'clave' => 204,
            'id_division' => 2,
            'id_facultad' => 10,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Ingeniería en Alimentos',
            'clave' => 205,
            'id_division' => 2,
            'id_facultad' => 10,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Investigación Biomédica Básica',
            'clave' => 206,
            'id_division' => 2,
            'id_facultad' => 15,
        ]);

        DB::table('carreras')->insert([
            'nombre' => 'Medicina Veterinaria y Zootecnia',
            'clave' => 207,
            'id_division' => 2,
            'id_facultad' => 10,
        ]);

        DB::table('carreras')->insert([
            'nombre' => 'Médico Cirujano',
            'clave' => 208,
            'id_division' => 2,
            'id_facultad' => 11,
        ]);

        DB::table('carreras')->insert([
            'nombre' => 'Optometría',
            'clave' => 209,
            'id_division' => 2,
            'id_facultad' => 11,
        ]);

        DB::table('carreras')->insert([
            'nombre' => 'Psicología',
            'clave' => 210,
            'id_division' => 2,
            'id_facultad' => 11,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Psicología',
            'clave' => 441,
            'id_division' => 2,
            'id_facultad' => 19,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Economía',
            'clave' => 442,
            'id_division' => 2,
            'id_facultad' => 7
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Economía',
            'clave' => 443,
            'id_division' => 2,
            'id_facultad' => 7
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Veterinario Zootecnista',
            'clave' => 444,
            'id_division' => 2,
            'id_facultad' => 10,
        ]);

        DB::table('carreras')->insert([
            'nombre' => 'Química de Alimentos',
            'clave' => 212,
            'id_division' => 2,
            'id_facultad' => 20,
        ]);

        DB::table('carreras')->insert([
            'nombre' => 'Química Farmacéutico Biológica',
            'clave' => 213,
            'id_division' => 2,
            'id_facultad' => 20,
        ]);

        DB::table('carreras')->insert([
            'nombre' => 'Química Industrial',
            'clave' => 214,
            'id_division' => 2,
            'id_facultad' => 10,
        ]);

        DB::table('carreras')->insert([
            'nombre' => 'Ciencias Genómicas',
            'clave' => 215,
            'id_division' => 2,
            'id_facultad' => 29,
        ]);

        DB::table('carreras')->insert([
            'nombre' => 'Ciencias Ambientales',
            'clave' => 216,
            'id_division' => 2,
            'id_facultad' => 24,
        ]);

        DB::table('carreras')->insert([
            'nombre' => 'Manejo Sustentable de Zonas Costeras',
            'clave' => 217,
            'id_division' => 2,
            'id_facultad' => 24,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Bioquímica Diagnóstica',
            'clave' => 218,
            'id_division' => 2,
            'id_facultad' => 10,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Farmacia',
            'clave' => 219,
            'id_division' => 2,
            'id_facultad' => 10,
        ]);

        DB::table('carreras')->insert([
            'nombre' => 'Enfermería',
            'clave' => 220,
            'id_division' => 2,
            'id_facultad' => 11,
        ]);

        DB::table('carreras')->insert([
            'nombre' => 'Fisioterapia',
            'clave' => 221,
            'id_division' => 2,
            'id_facultad' => 28,
        ]);

        DB::table('carreras')->insert([
            'nombre' => 'Odontología',
            'clave' => 222,
            'id_division' => 2,
            'id_facultad' => 18,
        ]);

        DB::table('carreras')->insert([
            'nombre' => 'Ciencias Agrogenómicas',
            'clave' => 223,
            'id_division' => 2,
            'id_facultad' => 28,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Ciencia Forense',
            'clave' => 224,
            'id_division' => 2,
            'id_facultad' => 15,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Ecología',
            'clave' => 225,
            'id_division' => 2,
            'id_facultad' => 25,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Neurociencias',
            'clave' => 226,
            'id_division' => 2,
            'id_facultad' => 30,
        ]);

        DB::table('carreras')->insert([
            'nombre' => 'Nutriología',
            'clave' => 227,
            'id_division' => 2,
            'id_facultad' => 12,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Ortesis y Prótesis',
            'clave' => 228,
            'id_division' => 2,
            'id_facultad' => 30,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Química e Ingeniería en Materiales',
            'clave' => 229,
            'id_division' => 2,
            'id_facultad' => 20,
        ]);

        DB::table('carreras')->insert([
            'nombre' => 'Administración',
            'clave' => 301,
            'id_division' => 3,
            'id_facultad' => 10,
        ]);

        DB::table('carreras')->insert([
            'nombre' => 'Ciencias de la Comunicación (Periodismo)',
            'clave' => 302,
            'id_division' => 3,
            'id_facultad' => 4,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Ciencias Políticas y Administración Pública',
            'clave' => 303,
            'id_division' => 3,
            'id_facultad' => 8,
        ]);

        DB::table('carreras')->insert([
            'nombre' => 'Contaduría',
            'clave' => 304,
            'id_division' => 3,
            'id_facultad' => 10,
        ]);

        DB::table('carreras')->insert([
            'nombre' => 'Derecho',
            'clave' => 305,
            'id_division' => 3,
            'id_facultad' => 6,
        ]);

        DB::table('carreras')->insert([
            'nombre' => 'Economía',
            'clave' => 306,
            'id_division' => 3,
            'id_facultad' => 8,
        ]);

        DB::table('carreras')->insert([
            'nombre' => 'Geografía',
            'clave' => 307,
            'id_division' => 3,
            'id_facultad' => 13,
        ]);

        DB::table('carreras')->insert([
            'nombre' => 'Informática',
            'clave' => 308,
            'id_division' => 3,
            'id_facultad' => 10,
        ]);

        DB::table('carreras')->insert([
            'nombre' => 'Planificación para el Desarrollo AGR',
            'clave' => 309,
            'id_division' => 3,
            'id_facultad' => 9,
        ]);

        DB::table('carreras')->insert([
            'nombre' => 'Relaciones Internacionales',
            'clave' => 310,
            'id_division' => 3,
            'id_facultad' => 8,
        ]);

        DB::table('carreras')->insert([
            'nombre' => 'Sociología',
            'clave' => 311,
            'id_division' => 3,
            'id_facultad' => 8,
        ]);

        DB::table('carreras')->insert([
            'nombre' => 'Trabajo Social',
            'clave' => 312,
            'id_division' => 3,
            'id_facultad' => 31,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Economía Industrial',
            'clave' => 313,
            'id_division' => 3,
            'id_facultad' => 28,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Administración Agropecuaria',
            'clave' => 314,
            'id_division' => 3,
            'id_facultad' => 28,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Comunicación',
            'clave' => 315,
            'id_division' => 3,
            'id_facultad' => 28,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Comunicación y Periodismo',
            'clave' => 316,
            'id_division' => 3,
            'id_facultad' => 9,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Estudios Sociales y Gestión Local',
            'clave' => 317,
            'id_division' => 3,
            'id_facultad' => 25,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Desarrollo Comunitario para el Envejecimiento',
            'clave' => 318,
            'id_division' => 3,
            'id_facultad' => 12,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Antropología',
            'clave' => 319,
            'id_division' => 3,
            'id_facultad' => 4,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Desarrollo Territorial',
            'clave' => 320,
            'id_division' => 3,
            'id_facultad' => 28,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Negocios Internacionales',
            'clave' => 321,
            'id_division' => 3,
            'id_facultad' => 30,
        ]);

        DB::table('carreras')->insert([
            'nombre' => 'Geografía Aplicada',
            'clave' => 322,
            'id_division' => 3,
            'id_facultad' => 24,
        ]);

        DB::table('carreras')->insert([
            'nombre' => 'Artes Visuales',
            'clave' => 401,
            'id_division' => 4,
            'id_facultad' => 2,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Bibliotecnología',
            'clave' => 402,
            'id_division' => 4,
            'id_facultad' => 13,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Canto',
            'clave' => 403,
            'id_division' => 4,
            'id_facultad' => 17,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Composición',
            'clave' => 404,
            'id_division' => 4,
            'id_facultad' => 17,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Diseño y Comunicación Visual',
            'clave' => 405,
            'id_division' => 4,
            'id_facultad' => 10,
        ]);

        DB::table('carreras')->insert([
            'nombre' => 'Diseño Gráfico',
            'clave' => 406,
            'id_division' => 4,
            'id_facultad' => 8,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Educación Musical',
            'clave' => 407,
            'id_division' => 4,
            'id_facultad' => 17,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Enseñanza de Inglés',
            'clave' => 408,
            'id_division' => 4,
            'id_facultad' => 8,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Estudios Latinoamericanos',
            'clave' => 409,
            'id_division' => 4,
            'id_facultad' => 13,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Etnomusicología',
            'clave' => 410,
            'id_division' => 4,
            'id_facultad' => 17,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Filosofía',
            'clave' => 411,
            'id_division' => 4,
            'id_facultad' => 8,
        ]);

        DB::table('carreras')->insert([
            'nombre' => 'Historia',
            'clave' => 412,
            'id_division' => 4,
            'id_facultad' => 8,
        ]);

        DB::table('carreras')->insert([
            'nombre' => 'Instrumentista',
            'clave' => 413,
            'id_division' => 4,
            'id_facultad' => 17,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Lengua y Literaturas Hispánicas',
            'clave' => 414,
            'id_division' => 4,
            'id_facultad' => 8,
        ]);

        DB::table('carreras')->insert([
            'nombre' => 'Lengua y Lit. Modernas Alemanas',
            'clave' => 415,
            'id_division' => 1,
            'id_facultad' => 13,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Lengua y Lit. Modernas Francesas',
            'clave' => 416,
            'id_division' => 4,
            'id_facultad' => 13,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Lengua y Lit. Modernas Inglesas',
            'clave' => 417,
            'id_division' => 4,
            'id_facultad' => 13,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Lengua y Lit. Modernas Italianas',
            'clave' => 418,
            'id_division' => 4,
            'id_facultad' => 13,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Letras Clásicas',
            'clave' => 419,
            'id_division' => 4,
            'id_facultad' => 13,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Literatura Dramática y Teatro',
            'clave' => 420,
            'id_division' => 4,
            'id_facultad' => 13,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Pedagogía',
            'clave' => 421,
            'id_division' => 4,
            'id_facultad' => 8,
        ]);

        DB::table('carreras')->insert([
            'nombre' => 'Piano',
            'clave' => 422,
            'id_division' => 4,
            'id_facultad' => 17,
        ]);

        DB::table('carreras')->insert([
            'nombre' => 'Enseñanza de Alemán como Lengua Extranjera',
            'clave' => 424,
            'id_division' => 4,
            'id_facultad' => 8,
        ]);

        DB::table('carreras')->insert([
            'nombre' => 'Enseñanza de Español como Lengua Extranjera',
            'clave' => 425,
            'id_division' => 4,
            'id_facultad' => 8,
        ]);

        DB::table('carreras')->insert([
            'nombre' => 'Enseñanza de Francés como Lengua Extranjera',
            'clave' => 426,
            'id_division' => 4,
            'id_facultad' => 8,
        ]);

        DB::table('carreras')->insert([
            'nombre' => 'Enseñanza de Inglés como Lengua Extranjera',
            'clave' => 427,
            'id_division' => 4,
            'id_facultad' => 8,
        ]);

        DB::table('carreras')->insert([
            'nombre' => 'Enseñanza de Italiano como Lengua Extranjera',
            'clave' => 428,
            'id_division' => 4,
            'id_facultad' => 8,
        ]);

        DB::table('carreras')->insert([
            'nombre' => 'Desarrollo y Gestión Interculturales',
            'clave' => 429,
            'id_division' => 4,
            'id_facultad' => 13,
        ]);

        DB::table('carreras')->insert([
            'nombre' => 'Lengua y Lit. Modernas Portuguesas',
            'clave' => 430,
            'id_division' => 4,
            'id_facultad' => 13,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Geohistoria',
            'clave' => 431,
            'id_division' => 4,
            'id_facultad' => 25,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Literatura Intercultural',
            'clave' => 432,
            'id_division' => 4,
            'id_facultad' => 25,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Historia del Arte',
            'clave' => 433,
            'id_division' => 4,
            'id_facultad' => 25,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Arte y Diseño',
            'clave' => 434,
            'id_division' => 4,
            'id_facultad' => 25,
        ]);

        DB::table('carreras')->insert([
            'nombre' => 'Cinematografía',
            'clave' => 435,
            'id_division' => 4,
            'id_facultad' => 32,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Teatro y Actuación',
            'clave' => 436,
            'id_division' => 4,
            'id_facultad' => 33,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Administración de Archivos y Gestión Documental',
            'clave' => 437,
            'id_division' => 4,
            'id_facultad' => 25,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Música y Tecnología Artística',
            'clave' => 438,
            'id_division' => 4,
            'id_facultad' => 25,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Lingüística Aplicada',
            'clave' => 439,
            'id_division' => 4,
            'id_facultad' => 34,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Traducción',
            'clave' => 440,
            'id_division' => 4,
            'id_facultad' => 1,
        ]);

        DB::table('categoria_nivel')->insert(['categoria' => 'Administrativo', 'abreviatura' => 'Adm']);
        DB::table('categoria_nivel')->insert(['categoria' => 'Ayudante de profesor A', 'abreviatura' => 'AYTE PROF A']);
        DB::table('categoria_nivel')->insert(['categoria' => 'Ayudante de profesor B', 'abreviatura' => 'AYTE PROF B']);
        DB::table('categoria_nivel')->insert(['categoria' => 'Funcionario', 'abreviatura' => 'FUNC']);
        DB::table('categoria_nivel')->insert(['categoria' => 'Investigador Asociado B TC', 'abreviatura' => 'INV ASOC B TC']);
        DB::table('categoria_nivel')->insert(['categoria' => 'Investigador titular A TC', 'abreviatura' => 'INV TIT A T C']);
        DB::table('categoria_nivel')->insert(['categoria' => 'Investigador titular B MT', 'abreviatura' => 'INV TIT B M  T']);
        DB::table('categoria_nivel')->insert(['categoria' => 'Investigador titular B TC', 'abreviatura' => 'INV TIT B T  C']);
        DB::table('categoria_nivel')->insert(['categoria' => 'Investigador titular C MT', 'abreviatura' => 'INV TIT C M  T']);
        DB::table('categoria_nivel')->insert(['categoria' => 'Investigador titular C TC', 'abreviatura' => 'INV TIT C T  C']);
        DB::table('categoria_nivel')->insert(['categoria' => 'Profesor Emérito', 'abreviatura' => 'PROF EMERITO']);
        DB::table('categoria_nivel')->insert(['categoria' => 'Profesor Titular A TC', 'abreviatura' => 'PROF TIT A T C']);
        DB::table('categoria_nivel')->insert(['categoria' => 'Profesor Titular B TC', 'abreviatura' => 'PROF TIT B T C']);
        DB::table('categoria_nivel')->insert(['categoria' => 'Profesor Titular C TC', 'abreviatura' => 'PROF TIT C T C']);
        DB::table('categoria_nivel')->insert(['categoria' => 'Técnico Asociado A TC', 'abreviatura' => 'TEC ASOC A T C']);
        DB::table('categoria_nivel')->insert(['categoria' => 'Técnico Asociado B TC', 'abreviatura' => 'TEC ASOC B T C']);
        DB::table('categoria_nivel')->insert(['categoria' => 'Técnico Asociado C TC', 'abreviatura' => 'TEC ASOC C T C']);
        DB::table('categoria_nivel')->insert(['categoria' => 'Técnico Auxiliar A TC', 'abreviatura' => 'TEC AUX A T C']);
        DB::table('categoria_nivel')->insert(['categoria' => 'Técnico Auxiliar B MT', 'abreviatura' => 'TEC AUX B M T']);
        DB::table('categoria_nivel')->insert(['categoria' => 'Técnico Auxiliar B TC', 'abreviatura' => 'TEC AUX B T C']);
        DB::table('categoria_nivel')->insert(['categoria' => 'Técnico Auxiliar C TC', 'abreviatura' => 'TEC AUX C T C']);
        DB::table('categoria_nivel')->insert(['categoria' => 'Técnico Titular A TC', 'abreviatura' => 'TEC TIT A T C']);
        DB::table('categoria_nivel')->insert(['categoria' => 'Técnico Titular B TC', 'abreviatura' => 'TEC TIT B T C']);
        DB::table('categoria_nivel')->insert(['categoria' => 'Técnico Titular C TC', 'abreviatura' => 'TEC TIT C T C']);

        DB::table('profesors')->insert([
            'nombres' => 'Juan',
            'apellido_paterno' => 'Ramirez',
            'apellido_materno' => 'Gonzales',
            'rfc' => 'RAGJ720101T72',
            'curp' =>'RAGJ720101HMCMNN08',
            'numero_trabajador' => '12143231',
            'categoria_nivel_id'=>1,
            'fecha_nacimiento' => '1972-01-01',
            'telefono' => '55664487',
            'grado' => 'Maestría',
            'email' => 'carosiim.sdco@gmail.com',
            'semblanza_corta'=> 'Doctorado en Inteligencia Artificial,
                             su carrera es respaldada por 25 años de 
                             ejercer la doctrina de profesor. Ganó el premio
                             S@T por el código más pequeño del mundo',
            'genero' => 'masculino',
            'comentarios' => 'hombre alto, de tez blanca, cabello negro y ojos marrones. ',
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
            'curp' =>'SUPM720101MMCRRR03',
            'categoria_nivel_id'=>1,
            'fecha_nacimiento' => '1972-01-01',
            'telefono' => '557458963',
            'grado' => 'Licenciatura',
            'email' => 'MSP@gmail.com',
            'semblanza_corta' => 'Profesora de la facultad de ingeniería,
                             fundó la asociación de mujeres programadoras
                             con el fin de impulsar los derechos y la presencia
                             de la mujer en el ámbito profesional de las Tecnologías
                             de la Información. Es egresada de la Facultad de Ciencias.
                             Doctora en análisis de datos.',
            'genero' => 'femenino',
            'comentarios' => 'Mujer delgada, de tez morena, cabello negro y ojos cafes.',
            'facebook' => 'Martha Suarez',
            'unam' => true,
            'facultad_id' =>1,
            'carrera_id' =>1,

        ]);
        DB::table('profesors')->insert([
            'nombres' => 'Santiago',
            'apellido_paterno' => 'Hernández',
            'apellido_materno' => 'Gonzales',
            'rfc' => 'HEGS720517RJ3',
            'numero_trabajador' => '12143233',
            'curp' =>'HEGS720517HMCRNN00',
            'categoria_nivel_id'=>1,
            'fecha_nacimiento' => '1972-05-17',
            'telefono' => '55664487',
            'grado' => 'Ingeniería',
            'email' => 'prof2@gmail.com',
            'semblanza_corta' => 'Ingeniero geofisico, con especilidad en volcanes y terremotos y maestria en rocas.',
            'genero' => 'masculino',
            'comentarios' => 'Señor alto, edad avanzada, pelo y barba canosas y usa lentes',
            'facebook' => 'face',
            'unam' => true,
            'facultad_id' =>14,
            'carrera_id' =>12,

        ]);
        DB::table('profesors')->insert([
            'nombres' => 'Melina',
            'apellido_paterno' => 'Pelcastre',
            'apellido_materno' => 'Prados',
            'rfc' => 'PEPM720517IW2',
            'numero_trabajador' => '12143234',
            'curp' =>'PEPM720517MMCLRL04',
            'categoria_nivel_id'=>1,
            'fecha_nacimiento' => '1972-05-017',
            'telefono' => '557458963',
            'grado' => 'Licenciatura',
            'email' => 'MSP2@gmail.com',
            'semblanza_corta' => 'Licenciada en administracion egresada de la FCyA de la UNAM con honores.',
            'genero' => 'femenino',
            'comentarios' => 'Mujer bajita, tez obscura, cabello negro.',
            'facebook' => 'MyFace',
            'unam' => true,
            'facultad_id' =>5,
            'carrera_id' =>1,

        ]);
        DB::table('profesors')->insert([
            'nombres' => 'Mateo',
            'apellido_paterno' => 'Juarez',
            'apellido_materno' => 'Fernández',
            'rfc' => 'JUFM720101M74',
            'numero_trabajador' => '12143235',
            'curp' =>'JUFM720101HMCRRT03',
            'categoria_nivel_id'=>5,
            'fecha_nacimiento' => '1972-01-01',
            'telefono' => '55664487',
            'grado' => 'Carrera Tecnica',
            'email' => 'prof3@gmail.com',
            'semblanza_corta' => 'Ingeniero mecanico con especialidad en diseño mecanico egresado de la unam y con maestria en Alemania.',
            'genero' => 'masculino',
            'comentarios' => 'Hombre alto, calvo y con barba muy grande',
            'facebook' => 'Mateo Juarez',
            'unam' => true,
            'facultad_id' =>14,
            'carrera_id' =>7,

        ]);
        DB::table('profesors')->insert([
            'nombres' => 'Gabriela',
            'apellido_paterno' => 'González',
            'apellido_materno' => 'Velázquez',
            'rfc' => 'GOVG720101FZ6',
            'numero_trabajador' => '12143236',
            'curp' =>'GOVG720101MMCNLB07',
            'categoria_nivel_id'=>1,
            'fecha_nacimiento' => '1972-01-01',
            'telefono' => '557458963',
            'grado' => 'Doctorado',
            'email' => 'MSP3@gmail.com',
            'semblanza_corta' => 'Ingeniera industrial, con un MBA en inglaterra y tambien trabaja en Coca Cola.',
            'genero' => 'femenino',
            'comentarios' => 'Mujer de edad avanzada, cabello negro y orejas grandes',
            'facebook' => 'Gaby Gonzalez',
            'unam' => true,
            'facultad_id' =>14,
            'carrera_id' =>13,
        ]);
        DB::table('profesors')->insert([
            'nombres' => 'Luis Daniel',
            'apellido_paterno' => 'Velásquez',
            'apellido_materno' => 'Velázquez',
            'rfc' => 'VEVL720101T65',
            'numero_trabajador' => '12143237',
            'curp' =>'VEVL720101HMCLLS07',
            'categoria_nivel_id'=>7,
            'fecha_nacimiento' => '1972-01-01',
            'telefono' => '55664487',
            'grado' => 'Maestría',
            'email' => 'prof4@gmail.com',
            'semblanza_corta' => 'Ingeniero en telecomunicaciones y estudia actualmente su segunda carrera, en economia.',
            'genero' => 'masculino',
            'comentarios' => 'Hombre de mucho peso, estatura promedio y larga cabellera rubia',
            'facebook' => 'Dani Velásquez',
            'unam' => true,
            'facultad_id' =>14,
            'carrera_id' =>9,
        ]);
        DB::table('profesors')->insert([
            'nombres' => 'Fernanda',
            'apellido_paterno' => 'Núñez',
            'apellido_materno' => 'Sandoval',
            'rfc' => 'NUSF720101I63',
            'numero_trabajador' => '12143238',
            'curp' =>'NUSF720101MMCXNR08',
            'categoria_nivel_id'=>1,
            'fecha_nacimiento' => '1972-01-01',
            'telefono' => '557458963',
            'grado' => 'Maestría',
            'email' => 'MSP4@gmail.com',
            'semblanza_corta' => 'Ingeniera civil, maestria en puentes y con especialidad en puentes muy grandes.',
            'genero' => 'femenino',
            'comentarios' => 'Mujer joven, alta, cabello negro y tez blanca',
            'facebook' => 'Fer Sandoval',
            'unam' => true,
            'facultad_id' =>14,
            'carrera_id' =>11,

        ]);
        DB::table('profesors')->insert([
            'nombres' => 'Ángel',
            'apellido_paterno' => 'García',
            'apellido_materno' => 'Casares',
            'rfc' => 'GACA720101EL4',
            'numero_trabajador' => '12143239',
            'curp' =>'GACA720101HMCRSN09',
            'categoria_nivel_id'=>11,
            'fecha_nacimiento' => '1972-01-01',
            'telefono' => '55664487',
            'grado' => 'Maestría',
            'email' => 'prof5@gmail.com',
            'semblanza_corta' => 'Ingeniero petrolero, actualmente se desempeña tambien en cargos altos en PEMEX',
            'genero' => 'masculino',
            'comentarios' => 'Hombre de mediana edad, cabello negro y barba de candado',
            'facebook' => 'Angel García Caseres',
            'unam' => true,
            'facultad_id' =>14,
            'carrera_id' =>10,
        ]);
        DB::table('profesors')->insert([
            'nombres' => 'Vivian',
            'apellido_paterno' => 'Salcedo',
            'apellido_materno' => 'Víquez',
            'rfc' => 'SAVV720101RV2',
            'numero_trabajador' => '12143240',
            'curp' =>'SAVV720101MMCLQV01',
            'categoria_nivel_id'=>4,
            'fecha_nacimiento' => '1972-01-01',
            'telefono' => '557458963',
            'grado' => 'Maestría',
            'email' => 'MSP5@gmail.com',
            'semblanza_corta' => 'Licenciada en contaduria, con maestria en impuestos empresariales y doctorado en contaduria para Macroempresas.',
            'genero' => 'femenino',
            'comentarios' => 'Mujer de baja estatura, delgada y con ojos cafes.',
            'facebook' => 'Vivi Salcedo',
            'unam' => true,
            'facultad_id' =>5,
            'carrera_id' =>10,
        ]);


        DB::table('profesors')->insert([
            'nombres' => 'Arturo',
            'apellido_paterno' => 'Galván',
            'apellido_materno' => 'Argote',
            'rfc' => 'GAAA720101HY0',
            'numero_trabajador' => '12143241',
            'curp' =>'GAAA720101HMCLRR05',
            'categoria_nivel_id'=>5,
            'fecha_nacimiento' => '1972-01-01',
            'telefono' => '55664487',
            'grado' => 'Maestría',
            'email' => 'prof6@gmail.com',
            'semblanza_corta' => 'Arquitecto con especialidad en paisajismo. Actualmente está creando su propia consultura',
            'genero' => 'masculino',
            'comentarios' => 'Hombre con rascos asiaticos, tez blanca y ojos rasgados.',
            'facebook' => 'Arturo Galvan',
            'unam' => true,
            'facultad_id' =>1,
            'carrera_id' =>11,

        ]);
        DB::table('profesors')->insert([
            'nombres' => 'Melissa',
            'apellido_paterno' => 'Valles',
            'apellido_materno' => 'Hernández',
            'rfc' => 'VAHM720101Q41',
            'numero_trabajador' => '12143242',
            'curp' =>'VAHM720101MMCLRL06',
            'categoria_nivel_id'=>1,
            'fecha_nacimiento' => '1972-01-01',
            'telefono' => '557458963',
            'grado' => 'Maestría',
            'email' => 'MSP6@gmail.com',
            'semblanza_corta' => 'Licenciada en arquitectura con maestria en diseño de interiores ',
            'genero' => 'femenino',
            'comentarios' => 'Mujer afroamericana de alta estatura y cabello cafe.',
            'facebook' => 'Melissaa Valles',
            'unam' => true,
            'facultad_id' =>1,
            'carrera_id' =>1,

        ]);
        DB::table('profesors')->insert([
            'nombres' => 'Roberto',
            'apellido_paterno' => 'Sánchez',
            'apellido_materno' => 'Gonzales',
            'rfc' => 'SAGR720101JR0',
            'numero_trabajador' => '12143243',
            'curp' =>'SAGR720101HMCNNB06',
            'categoria_nivel_id'=>1,
            'fecha_nacimiento' => '1972-01-01',
            'telefono' => '55664487',
            'grado' => 'Maestría',
            'email' => 'prof7@gmail.com',
            'semblanza_corta' => 'Ingeniero en Minas, con especialidad en minas de carbon y diamante.',
            'genero' => 'masculino',
            'comentarios' => 'Hombre alto, afroamericano con cabello negro.',
            'facebook' => 'Roberto Sanchez',
            'unam' => true,
            'facultad_id' =>14,
            'carrera_id' =>12,

        ]);
        DB::table('profesors')->insert([
            'nombres' => 'Daniela',
            'apellido_paterno' => 'Arjona',
            'apellido_materno' => 'Valle',
            'rfc' => 'AOVD720101DQ6',
            'numero_trabajador' => '12143244',
            'curp' =>'AOVD720101MMCRLN09',
            'categoria_nivel_id'=>1,
            'fecha_nacimiento' => '1972-05-017',
            'telefono' => '557458963',
            'grado' => 'Maestría',
            'email' => 'MSP7@gmail.com',
            'semblanza_corta' => 'Ingeniera en Sistemas Biómedicos, egresada del ITAM',
            'genero' => 'femenino',
            'comentarios' => 'Mujer de corta estatura, ojos azules y cabello color cafe',
            'facebook' => 'Dani Arjona',
            'unam' => true,
            'facultad_id' =>5,
            'carrera_id' =>1,

        ]);
        DB::table('profesors')->insert([
            'nombres' => 'Alejandro',
            'apellido_paterno' => 'López',
            'apellido_materno' => 'Mateos',
            'rfc' => 'LOMA720101EU3',
            'numero_trabajador' => '12143245',
            'curp' =>'LOMA720101HMCPTL06',
            'categoria_nivel_id'=>5,
            'fecha_nacimiento' => '1972-01-01',
            'telefono' => '55664487',
            'grado' => 'Maestría',
            'email' => 'prof8@gmail.com',
            'semblanza_corta' => 'Ingeniero mecanico con especialidad en termofluidos actualmente trabaja para Ferrari.',
            'genero' => 'masculino',
            'comentarios' => 'Hombre de baja estatura, sin cabello y utiliza lentes',
            'facebook' => 'Alex López Mateos',
            'unam' => true,
            'facultad_id' =>14,
            'carrera_id' =>7,

        ]);
        DB::table('profesors')->insert([
            'nombres' => 'Julia',
            'apellido_paterno' => 'Domínguez',
            'apellido_materno' => 'Méndez',
            'rfc' => 'DOMJ7201011Q9',
            'numero_trabajador' => '12143246',
            'curp' =>'DOMJ720101MMCMNL03',
            'categoria_nivel_id'=>1,
            'fecha_nacimiento' => '1972-01-01',
            'telefono' => '557458963',
            'grado' => 'Maestría',
            'email' => 'MSP8@gmail.com',
            'semblanza_corta' => 'Ingeniera insdustrial enfocada al area de logistica con maestry en cadena de suministros en Canada.',
            'genero' => 'femenino',
            'comentarios' => 'Mujer de edad avanzada con pelo rubio y orejas grandes.',
            'facebook' => 'Julia Dominguez',
            'unam' => true,
            'facultad_id' =>14,
            'carrera_id' =>13,
        ]);
        DB::table('profesors')->insert([
            'nombres' => 'Luis Fernando',
            'apellido_paterno' => 'Méndez',
            'apellido_materno' => 'Vallesteros',
            'rfc' => 'MEVL720101GV4',
            'numero_trabajador' => '12143247',
            'curp' =>'MEVL720101HMCNLS07',
            'categoria_nivel_id'=>7,
            'fecha_nacimiento' => '1972-01-01',
            'telefono' => '55664487',
            'grado' => 'Maestría',
            'email' => 'prof9@gmail.com',
            'semblanza_corta' => 'Ingeniero en telecomunicaciones que trabaja con la super computadora de la UNAM',
            'genero' => 'masculino',
            'comentarios' => 'Hombre con enanismo, de tez blanca y pelo negro.',
            'facebook' => 'Luis Méndez',
            'unam' => true,
            'facultad_id' =>14,
            'carrera_id' =>9,
        ]);
        DB::table('profesors')->insert([
            'nombres' => 'Hilda',
            'apellido_paterno' => 'Ramírez',
            'apellido_materno' => 'Ramírez',
            'rfc' => 'RARH720101DMA',
            'numero_trabajador' => '12143248',
            'curp' =>'RARH720101MMCMML06',
            'categoria_nivel_id'=>1,
            'fecha_nacimiento' => '1972-01-01',
            'telefono' => '557458963',
            'grado' => 'Maestría',
            'email' => 'MSP9@gmail.com',
            'semblanza_corta' => 'Ingeniera civil, socia de Carlos Slim y con maestria en carreteras',
            'genero' => 'femenino',
            'comentarios' => 'Mujer alta, delgada, con el pelo pintado de azul.',
            'facebook' => 'Hilda Ramirez',
            'unam' => true,
            'facultad_id' =>14,
            'carrera_id' =>11,

        ]);
        DB::table('profesors')->insert([
            'nombres' => 'Juan',
            'apellido_paterno' => 'Macedo',
            'apellido_materno' => 'Jiménez',
            'rfc' => 'MAJJ720101GF7',
            'numero_trabajador' => '12143249',
            'curp' =>'MAJJ720101HMCCMN02',
            'categoria_nivel_id'=>11,
            'fecha_nacimiento' => '1972-01-01',
            'telefono' => '55664487',
            'grado' => 'Maestría',
            'email' => 'prof10@gmail.com',
            'semblanza_corta' => 'Ingeniero petrolero, trabaja en paises arabes y es de los hombres más ricos del mundo',
            'genero' => 'masculino',
            'comentarios' => 'Hombre alto, con mucha musculatura, pelo y barba de color castaño claro.',
            'facebook' => 'Juan Macedo',
            'unam' => true,
            'facultad_id' =>14,
            'carrera_id' =>10,
        ]);
        DB::table('profesors')->insert([
            'nombres' => 'Viridiana',
            'apellido_paterno' => 'Valencia',
            'apellido_materno' => 'Manso',
            'rfc' => 'VAMV720101HZA',
            'numero_trabajador' => '12143250',
            'curp' =>'VAMV720101MMCLNR05',
            'categoria_nivel_id'=>4,
            'fecha_nacimiento' => '1972-01-01',
            'telefono' => '557458963',
            'grado' => 'Maestría',
            'email' => 'MSP10@gmail.com',
            'semblanza_corta' => 'Licencidad en contaduria, ella calcula los imppuestos de la unam y tiene maestria en impuestos universitarios.',
            'genero' => 'femenino',
            'comentarios' => 'Mujer de estatura promedio, de tez morena con nariz grande y pelo negro',
            'facebook' => 'Viridiana Valencia',
            'unam' => true,
            'facultad_id' =>5,
            'carrera_id' =>10,
        ]);

        DB::table('catalogo_cursos')->insert([
            'nombre_curso' =>'Programacion Estructurada',
            'duracion_curso' => '10',
            'coordinacion_id' => 1,
            'tipo' => 'CT',
            'institucion' => 'CD',
            'presentacion' => 'Presentacion',
            'dirigido' => 'Personas interesadas en el área 
                            de la programación, desarrollo de software 
                            y tecnologías de la información',
            'objetivo' => 'Enseñar las bases de todos los paradigmas de la programación
                            y mostrar la ventana de oportunidades que libera',
            'contenido' => '-¿Qué es la programación?
                            -Paradigmas de programación
                            -Lenguajes de programación
                            -Ejercicios
                            -Ejemplos en la vida diaria
                            -Temas avanzados',
            'sintesis' => 'Sintesis',
            'metodologia' => 'Metodologia',
            'acreditacion' => '10% Tareas
            90% Examen',
            'previo' => 'Conocimientos básicos de informática y tecnologías de información: Qué es una computadora y cómo funciona',
            'evaluacion' => 'Examen',
            'bibliografia' => 'www.paginasobreprogramacion.com
            A.J. Tyson, Programacion para dummys. Pearson, 2008.',
            'fecha_disenio' => '2018-05-18',
            'clave_curso' => 'ADFVJ0911598'

        ]);
        DB::table('catalogo_cursos')->insert([
            'nombre_curso' =>'Administración',
            'duracion_curso' => '20',
            'coordinacion_id' => 1,
            'tipo' => 'E',
            'institucion' => 'DGAPA',
            'presentacion' => 'Presentacion',
            'dirigido' => 'Administradores',
            'objetivo' => 'Que los que tomen el curso refuerzen sus conocimientos administrativos',
            'contenido' => 'Que es la administracion y sus derivados',
            'sintesis' => 'Se aprendera sobre la administracion',
            'metodologia' => 'Presencial',
            'acreditacion' => 'Diploma de la FI',
            'evaluacion' => 'Examen',
            'bibliografia' => 'El libro sobre administracion',
            'fecha_disenio' => '2018-05-18',
            'clave_curso' => 'FJHCZC'

        ]);
        DB::table('catalogo_cursos')->insert([
            'nombre_curso' =>'Administración',
            'duracion_curso' => '20',
            'coordinacion_id' => 1,
            'tipo' => 'C',
            'institucion' => 'DGAPA',
            'presentacion' => 'Presentacion',
            'dirigido' => 'Gente sin conocimiento en administracion',
            'objetivo' => 'Aprender lo basico de aministracion',
            'contenido' => 'Bases de administracion',
            'sintesis' => 'Se aprendera lo basico de administracion',
            'metodologia' => 'online',
            'acreditacion' => 'Diploma de la FI',
            'evaluacion' => 'Examen',
            'bibliografia' => 'El libro administratico',
            'fecha_disenio' => '2018-05-18',
            'clave_curso' => 'FJHCZB'
        ]);
        DB::table('catalogo_cursos')->insert([
            'nombre_curso' =>'Ecuaciones Diferenciales',
            'duracion_curso' => '20',
            'coordinacion_id' => 1,
            'tipo' => 'S',
            'institucion' => 'DGAPA',
            'presentacion' => 'Presentacion',
            'dirigido' => 'Ingenieros',
            'objetivo' => 'Aprender sobre ecuaciones diferenciales',
            'contenido' => 'Lo basico de ecuaciones diferenciales',
            'sintesis' => 'Aqui se aprenderan las bases para resolver ecuaciones diferenciales',
            'metodologia' => 'presencial',
            'acreditacion' => 'Diploma de la FI',
            'evaluacion' => 'Examen',
            'bibliografia' => 'Zill',
            'fecha_disenio' => '2018-05-18',
            'clave_curso' => 'ED1HCZ12'

        ]);
        DB::table('catalogo_cursos')->insert([
            'nombre_curso' =>'Cálculo Integral',
            'duracion_curso' => '20',
            'coordinacion_id' => 1,
            'tipo' => 'D',
            'institucion' => 'CD',
            'presentacion' => 'Presentacion',
            'dirigido' => 'Alumnos de ingenieria',
            'objetivo' => 'Aprender a integrar',
            'contenido' => 'Metodos de integracion',
            'sintesis' => 'Se aprendera a integrar mub bien en este curso',
            'metodologia' => 'Presencial',
            'acreditacion' => 'Diploma de la FI',
            'evaluacion' => 'Examen',
            'bibliografia' => 'Libro de Integrales',
            'fecha_disenio' => '2018-05-18',
            'clave_curso' => 'CI2HCZA'

        ]);
        DB::table('catalogo_cursos')->insert([
            'nombre_curso' =>'Álgebra Lineal',
            'duracion_curso' => '20',
            'coordinacion_id' => 1,
            'tipo' => 'C',
            'institucion' => 'CD',
            'presentacion' => 'Presentacion',
            'dirigido' => 'Alumno que ya acabaron Algebra',
            'objetivo' => 'Que la gente aprenda algebra lineal',
            'contenido' => 'Transformaciones lineales y espacios vectoriales',
            'sintesis' => 'Aqui se aprendera algebra vectorial',
            'metodologia' => 'presencial',
            'acreditacion' => 'Diploma de la FI',
            'evaluacion' => 'Examen',
            'bibliografia' => 'Libro de Algebra Lineal',
            'fecha_disenio' => '2018-05-18',
            'clave_curso' => 'ALA3HCZ'

        ]);
        DB::table('catalogo_cursos')->insert([
            'nombre_curso' =>'Álgebra',
            'duracion_curso' => '20',
            'coordinacion_id' => 1,
            'tipo' => 'C',
            'institucion' => 'CD',
            'presentacion' => 'Presentacion',
            'dirigido' => 'Todo el publico',
            'objetivo' => 'Que los que tomen el curso aprendan lo basico de Algebra',
            'contenido' => 'Matrices y polinomios',
            'sintesis' => 'Aquí se aprenderá sobre Álgebra',
            'metodologia' => 'Presencia',
            'acreditacion' => 'Diploma de la FI',
            'evaluacion' => 'Examen',
            'bibliografia' => 'Libro de Álgebra',
            'fecha_disenio' => '2018-05-18',
            'clave_curso' => 'A1A27HCZ'

        ]);
        DB::table('catalogo_cursos')->insert([
            'nombre_curso' =>'Análisis Numérico',
            'duracion_curso' => '20',
            'coordinacion_id' => 1,
            'tipo' => 'C',
            'institucion' => 'CD',
            'presentacion' => 'Presentacion',
            'dirigido' => 'Alumno que ya cursaron ecuaciones diferenciales',
            'objetivo' => 'Aprender sobre analisis numerico',
            'contenido' => 'Temas de Análisis Numérico',
            'sintesis' => 'Aqui se aprenderan los temas básicos de Ánalisis numérico',
            'metodologia' => 'Online',
            'acreditacion' => 'Diploma de la FI',
            'evaluacion' => 'Examen',
            'bibliografia' => 'Libro de Analisis Numerico',
            'fecha_disenio' => '2018-05-18',
            'clave_curso' => 'AN412HCZ'

        ]);
        DB::table('catalogo_cursos')->insert([
            'nombre_curso' =>'Programación Estructurada',
            'duracion_curso' => '10',
            'coordinacion_id' => 1,
            'tipo' => 'CT',
            'institucion' => 'CD',
            'presentacion' => 'Presentacion',
            'dirigido' => 'Alumnos de la carrera de ingenieria en computación',
            'objetivo' => 'Aprender temas avanzados de programacion ',
            'contenido' => 'Temas Avanzados de programacion',
            'sintesis' => 'En este curso los alumnos seran capaces al finalizar de programar cualquier cosa',
            'metodologia' => 'Online',
            'acreditacion' => 'Diploma de la FI',
            'evaluacion' => 'Examen',
            'bibliografia' => 'Libro de super programación',
            'fecha_disenio' => '2018-05-18',
            'clave_curso' => 'ADFVJ080578451'

        ]);
        DB::table('catalogo_cursos')->insert([
            'nombre_curso' =>'Administración Básica',
            'duracion_curso' => '20',
            'coordinacion_id' => 1,
            'tipo' => 'C',
            'institucion' => 'DGAPA',
            'presentacion' => 'Presentacion',
            'dirigido' => 'Administradores expertos',
            'objetivo' => 'Aprender todo sobre administracion',
            'contenido' => 'Temas avanzados de aministracion',
            'sintesis' => 'En este curso se aprenderan los temas más avanzados de administracion',
            'metodologia' => 'Presencial',
            'acreditacion' => 'Diploma de la FI',
            'evaluacion' => 'Examen',
            'bibliografia' => 'Libro super avanzado de Administracion',
            'fecha_disenio' => '2018-05-18',
            'clave_curso' => 'FJHCZA'
        ]);
	 DB::table('temas_seminarios')->insert([
            'nombre' => 'Margaret Parsen',
            'duracion' => 1,
            'catalogo_id' => 4
        ]);
        DB::table('temas_seminarios')->insert([
            'nombre' => 'Margaret Parsen II',
            'duracion' => 2,
            'catalogo_id' => 4
        ]);
        DB::table('temas_seminarios')->insert([
            'nombre' => 'Margaret Parsen III',
            'duracion' => 3,
            'catalogo_id' => 4
        ]);
        DB::table('cursos')->insert([
            'semestre_anio' => 2020,
            'semestre_pi'=>"2",
            'semestre_si' => "i",
            'fecha_inicio' => '2019-12-04',
            'fecha_fin' => '2020-05-30',
            'hora_inicio' => '14:00',
            'hora_fin' => '16:00',
            'dias_semana' => 'Lunes,Martes',
            'numero_sesiones' => 10,
            'texto_diploma' => 'Texto diploma',
            'costo' => 2000,
            'cupo_maximo' => 5,
            'cupo_minimo' => 5,
            'catalogo_id' => 1,
            'salon_id' => 1
        ]);

        DB::table('cursos')->insert([
            'semestre_anio' => 2016,
            'semestre_pi'=>"2",
            'semestre_si' => "i",
            'fecha_inicio' => '2019-12-04',
            'fecha_fin' => '2019-12-30',
            'hora_inicio' => '14:00',
            'hora_fin' => '16:00',
            'dias_semana' => 'Lunes,Martes',
            'numero_sesiones' => 10,
            'texto_diploma' => 'Texto diploma',
            'costo' => 2000,
            'cupo_maximo' => 20,
            'cupo_minimo' => 5,
            'catalogo_id' => 5,
            'salon_id' => 1
        ]);
        DB::table('cursos')->insert([
            'semestre_anio' => 2018,
            'semestre_pi'=>"2",
            'semestre_si' => "s",
            'fecha_inicio' => '2019-12-03',
            'fecha_fin' => '2020-05-30',
            'hora_inicio' => '14:00',
            'hora_fin' => '16:00',
            'dias_semana' => 'Lunes,Martes',
            'numero_sesiones' => 10,
            'texto_diploma' => 'Texto diploma',
            'costo' => 2000,
            'cupo_maximo' => 20,
            'cupo_minimo' => 5,
            'catalogo_id' => 2,
            'salon_id' => 1
        ]);

        DB::table('cursos')->insert([
            'semestre_anio' => 2016,
            'semestre_pi'=>"2",
            'semestre_si' => "s",
            'fecha_inicio' => '2019-12-04',
            'fecha_fin' => '2018-12-07',
            'hora_inicio' => '14:00',
            'hora_fin' => '16:00',
            'dias_semana' => 'Lunes,Martes',
            'numero_sesiones' => 10,
            'texto_diploma' => 'Texto diploma',
            'costo' => 2000,
            'cupo_maximo' => 20,
            'cupo_minimo' => 5,
            'catalogo_id' => 3,
            'salon_id' => 2
        ]);
        DB::table('cursos')->insert([
            'semestre_anio' => 2017,
            'semestre_pi'=>"2",
            'semestre_si' => "s",
            'fecha_inicio' => '2019-12-20',
            'fecha_fin' => '2018-12-30',
            'hora_inicio' => '14:00',
            'hora_fin' => '16:00',
            'dias_semana' => 'Lunes,Miércoles',
            'numero_sesiones' => 10,
            'texto_diploma' => 'Texto diploma',
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
            'fecha_inicio' => '2019-12-20',
            'fecha_fin' => '2019-12-30',
            'hora_inicio' => '14:00',
            'hora_fin' => '16:00',
            'dias_semana' => 'Lunes,Miércoles',
            'numero_sesiones' => 10,
            'texto_diploma' => 'Texto diploma',
            'costo' => 2000,
            'cupo_maximo' => 20,
            'cupo_minimo' => 5,
            'catalogo_id' => 7,
            'salon_id' => 3
        ]);
        DB::table('cursos')->insert([
            'semestre_anio' => 2019,
            'semestre_pi'=>"2",
            'semestre_si' => "s",
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
            'catalogo_id' => 3,
            'salon_id' => 2
        ]);
        DB::table('cursos')->insert([
            'semestre_anio' => 2019,
            'semestre_pi'=>"2",
            'semestre_si' => "i",
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
            'catalogo_id' => 7,
            'salon_id' => 1
        ]);
        DB::table('cursos')->insert([
            'semestre_anio' => 2018,
            'semestre_pi'=>"2",
            'semestre_si' => "s",
            'fecha_inicio' => '2019-12-03',
            'fecha_fin' => '2020-05-30',
            'hora_inicio' => '14:00',
            'hora_fin' => '16:00',
            'dias_semana' => 'Lunes,Martes',
            'numero_sesiones' => 10,
            'texto_diploma' => 'Texto diploma',
            'costo' => 2000,
            'cupo_maximo' => 20,
            'cupo_minimo' => 5,
            'catalogo_id' => 4,
            'salon_id' => 1
        ]);
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
            'profesor_id' => '3',

        ]);
        DB::table('profesor_curso')->insert([
            'curso_id' => "3",
            'profesor_id' => '4',

        ]);
        DB::table('profesor_curso')->insert([
            'curso_id' => "4",
            'profesor_id' => '5',

        ]);
        DB::table('profesor_curso')->insert([
            'curso_id' => "5",
            'profesor_id' => '6',

        ]);
        DB::table('profesor_curso')->insert([
            'curso_id' => "6",
            'profesor_id' => '7',

        ]);
        DB::table('profesor_curso')->insert([
            'curso_id' => "7",
            'profesor_id' => '1',

        ]);
        DB::table('profesor_curso')->insert([
            'curso_id' => "7",
            'profesor_id' => '2',

        ]);
        DB::table('profesor_curso')->insert([
            'curso_id' => "7",
            'profesor_id' => '3',

        ]);
        DB::table('profesor_curso')->insert([
            'curso_id' => "8",
            'profesor_id' => '2',

        ]);
        DB::table('profesor_curso')->insert([
            'curso_id' => "8",
            'profesor_id' => '4',

        ]);
        DB::table('profesor_curso')->insert([
            'curso_id' => "9",
            'profesor_id' => '3',

        ]);
        DB::table('secretario_apoyo')->insert([
            'secretario' => "Javier Arriaga",
            'comentarios' => 'Licenciado en Administracion, muchos años ha estado en cargos administrativos de la universidad y actualmente se desempeña como secretario.',
            'grado' => "M.E.M.",

        ]);

        DB::table('direccion')->insert([
            'director' => "Gabriel Aguilar Luna",
            'comentarios' => 'Ingeniero en computacion egresado de la UNAM, trabajo mucho tiempo en cargos administraticos en la FI',
            'grado' => "M.E.M."

        ]);

        DB::table('coordinador_general')->insert([
            'coordinador' => "Carolina Herrera",
            'comentarios' => 'Licenciada en derecho, actuelmente se desempeña como coordinadora.',
            'grado' => "M.E.M."

        ]);
		
		//1_RespuestasEvalCursosTodasAreas_2020-1s_4.pdf

		DB::table('coordinacions')->insert([
			'id'=>50,
			'abreviatura'=>'AC',
			'nombre_coordinacion'=>'Área de cómputo',
			'coordinador'=>'Gerardo Lopez Gomez',
			'grado'=>'M.C.C',
			'usuario'=>'G3rardo1nEZ',
			'password'=>Hash::make(1234)
		]);
		
		DB::table('catalogo_cursos')->insert([
			'id'=> 50,
			'nombre_curso'=>'Tecnologías de la Información y la Comunicación (TIC). Parte 1',
			'duracion_curso' => '20',
            'coordinacion_id' => 50,
            'tipo' => 'C',
            'institucion' => 'DGAPA',
			'fecha_disenio'=>'2012-12-12',
			'coordinacion_id'=>50,
			'clave_curso'=>'TICDGAPA'
		]);
		
		DB::table('cursos')->insert([
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
            'catalogo_id' => 50,
            'salon_id' => 1
			
		]);
        
        DB::table('profesors')->insert([
            'id'=>92,
			'nombres'=>'Gabriel',
			'apellido_paterno'=>'Lopez',
			'apellido_materno'=>'Dominguez',
			'rfc'=>'LODG720202LODG',
			'numero_trabajador' => '121432492',
			'fecha_nacimiento'=>'1972-02-02'
        ]);

		DB::table('profesor_curso')->insert([
			'id'=>50,
			'curso_id'=>50,
			'profesor_id'=>92,
        ]);
        
        DB::table('profesors')->insert([
            'id'=>93,
			'nombres'=>'Guillermo Adolfo',
			'apellido_paterno'=>'Vignau',
			'apellido_materno'=>'Esteva',
			'rfc'=>'VIEG720203VIEG',
			'numero_trabajador' => '121432493',
			'fecha_nacimiento'=>'1972-02-03'
        ]);

		DB::table('profesor_curso')->insert([
			'id'=>51,
			'curso_id'=>50,
			'profesor_id'=>93,
        ]);

        DB::table('profesors')->insert([
            'id'=>502,
            'nombres'=>'Guillermo Gabriel',
            'apellido_paterno'=>'Aguilar',
            'apellido_materno'=>'Lacavez',
            'rfc'=>'AALG740106AALG',
            'numero_trabajador' => '1214324502',
            'fecha_nacimiento'=>'1974-01-06'
        ]);

        DB::table('participante_curso')->insert([
            'id'=>502,
            'profesor_id'=>502,
            'curso_id'=>50
        ]);

        DB::table('profesors')->insert([
            'id'=>503,
            'nombres'=>'Luis Bruno',
            'apellido_paterno'=>'Garduño',
            'apellido_materno'=>'Castro',
            'rfc'=>'GACL740106AALG',
            'numero_trabajador' => '1214324503',
            'fecha_nacimiento'=>'1974-01-06'
        ]);

        DB::table('participante_curso')->insert([
            'id'=>503,
            'profesor_id'=>503,
            'curso_id'=>50
        ]);

        DB::table('profesors')->insert([
            'id'=>504,
            'nombres'=>'Manuel',
            'apellido_paterno'=>'Hernandez',
            'apellido_materno'=>'Gonzalez',
            'rfc'=>'HEGM740106AALG',
            'numero_trabajador' => '1214324504',
            'fecha_nacimiento'=>'1974-01-06'
        ]);

        DB::table('participante_curso')->insert([
            'id'=>504,
            'profesor_id'=>504,
            'curso_id'=>50
        ]);


        DB::table('profesors')->insert([
            'id'=>505,
            'nombres'=>'Julieta',
            'apellido_paterno'=>'Mares',
            'apellido_materno'=>'Lopez',
            'rfc'=>'MALJ740106MALJ',
            'numero_trabajador' => '1214324505',
            'fecha_nacimiento'=>'1974-01-06'
        ]);

        DB::table('profesors')->insert([
            'id'=>506,
            'nombres'=>'Jacquelyn',
            'apellido_paterno'=>'Martinez',
            'apellido_materno'=>'Alvarez',
            'rfc'=>'MAAJ740107MAAJ',
            'numero_trabajador' => '1214324506',
            'fecha_nacimiento'=>'1974-01-07'
        ]);

        DB::table('profesors')->insert([
            'id'=>507,
            'nombres'=>'Luis Enrique',
            'apellido_paterno'=>'Quintanar',
            'apellido_materno'=>'Cortes',
            'rfc'=>'QUCL740108QUCL',
            'numero_trabajador' => '1214324507',
            'fecha_nacimiento'=>'1974-01-08'
        ]);

        DB::table('profesors')->insert([
            'id'=>508,
            'nombres'=>'Israel',
            'apellido_paterno'=>'Rios',
            'apellido_materno'=>'Mora',
            'rfc'=>'RIMI740109RIMI',
            'numero_trabajador' => '1214324508',
            'fecha_nacimiento'=>'1974-01-09'
        ]);

        DB::table('participante_curso')->insert([
            'id'=>508,
            'profesor_id'=>508,
            'curso_id'=>50
        ]);

        DB::table('profesors')->insert([
            'id'=>509,
            'nombres'=>'Servando',
            'apellido_paterno'=>'Ruiz',
            'apellido_materno'=>'Rodriguez',
            'rfc'=>'RURS740109RURS',
            'numero_trabajador' => '1214324509',
            'fecha_nacimiento'=>'1974-01-09'
        ]);

        DB::table('participante_curso')->insert([
            'id'=>509,
            'profesor_id'=>509,
            'curso_id'=>50
        ]);

        DB::table('profesors')->insert([
            'id'=>510,
            'nombres'=>'Norma Isela',
            'apellido_paterno'=>'Vega',
            'apellido_materno'=>'Deloya',
            'rfc'=>'VEDM740110VEDM',
            'numero_trabajador' => '1214324510',
            'fecha_nacimiento'=>'1974-01-10'
        ]);


		DB::table('profesors')->insert([
			'id'=>50,
			'nombres'=>'Voileta Erendira',
			'apellido_paterno'=>'Escalante',
			'apellido_materno'=>'Estrada',
			'rfc'=>'EEEV720102EEE',
			'numero_trabajador' => '121432450',
			'fecha_nacimiento'=>'1972-01-02'
		]);
		
		DB::table('participante_curso')->insert([
			'id'=>50,
			'curso_id'=>50,
			'profesor_id'=>50,
			'asistencia'=>true,
			'acreditacion'=>true
		]);
		
		DB::table('_evaluacion_final_curso')->insert([
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
			'curso_id'=>50,
			'participante_curso_id'=>50
		]);
		
		DB::table('profesors')->insert([
			'id'=>51,
			'nombres'=>'Jose',
			'apellido_paterno'=>'Gonzalez',
			'apellido_materno'=>'Suarez',
			'rfc'=>'GOSJ720103GOSJ',
			'numero_trabajador' => '121432451',
			'fecha_nacimiento'=>'1972-01-03'
		]);
		
		DB::table('participante_curso')->insert([
			'id'=>51,
			'curso_id'=>50,
			'profesor_id'=>51,
			'asistencia'=>true,
			'acreditacion'=>true
		]);
		
		DB::table('_evaluacion_final_curso')->insert([
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
			'curso_id'=>50,
			'participante_curso_id'=>51
		]);
		
		DB::table('profesors')->insert([
			'id'=>52,
			'nombres'=>'Patricia',
			'apellido_paterno'=>'Gonzalez',
			'apellido_materno'=>'Vega',
			'rfc'=>'GOPV720104GOPV',
			'numero_trabajador' => '121432452',
			'fecha_nacimiento'=>'1972-01-04'
		]);
		
		DB::table('participante_curso')->insert([
			'id'=>52,
			'curso_id'=>50,
			'profesor_id'=>52,
			'asistencia'=>true,
			'acreditacion'=>true
		]);
		
		DB::table('_evaluacion_final_curso')->insert([
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
			'curso_id'=>50,
			'participante_curso_id'=>52
		]);
		
		DB::table('profesors')->insert([
			'id'=>53,
			'nombres'=>'Gudelia',
			'apellido_paterno'=>'Hernandez',
			'apellido_materno'=>'Molina',
			'rfc'=>'HEMG720105HEMG',
			'numero_trabajador' => '121432453',
			'fecha_nacimiento'=>'1972-01-05'
		]);
		
		DB::table('participante_curso')->insert([
			'id'=>53,
			'curso_id'=>50,
			'profesor_id'=>53,
			'asistencia'=>true,
			'acreditacion'=>true
		]);
		
		DB::table('_evaluacion_final_curso')->insert([
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
			'curso_id'=>50,
			'participante_curso_id'=>53
		]);
		
		DB::table('profesors')->insert([
			'id'=>54,
			'nombres'=>'Jose Gerardo',
			'apellido_paterno'=>'Lopez',
			'apellido_materno'=>'Bonifacio',
			'rfc'=>'LOBJ720106LOBJ',
			'numero_trabajador' => '121432454',
			'fecha_nacimiento'=>'1972-01-06'
		]);
		
		DB::table('participante_curso')->insert([
			'id'=>54,
			'curso_id'=>50,
			'profesor_id'=>54,
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
			'curso_id'=>50,
			'participante_curso_id'=>54
		]);
		
		DB::table('profesors')->insert([
			'id'=>55,
			'nombres'=>'Martin',
			'apellido_paterno'=>'Mejia',
			'apellido_materno'=>'Ramos',
			'rfc'=>'MERM720107MERM',
			'numero_trabajador' => '121432455',
			'fecha_nacimiento'=>'1972-01-07'
		]);
		
		DB::table('participante_curso')->insert([
			'id'=>55,
			'curso_id'=>50,
			'profesor_id'=>55,
			'asistencia'=>true,
			'acreditacion'=>true
		]);
		
		DB::table('_evaluacion_final_curso')->insert([
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
			'curso_id'=>50,
			'participante_curso_id'=>55
		]);
		
		DB::table('profesors')->insert([
			'id'=>56,
			'nombres'=>'Javier',
			'apellido_paterno'=>'Millan',
			'apellido_materno'=>'Martinez',
			'rfc'=>'MIMJ720108MIMJ',
			'numero_trabajador' => '121432456',
			'fecha_nacimiento'=>'1972-01-08'
		]);
		
		DB::table('participante_curso')->insert([
			'id'=>56,
			'curso_id'=>50,
			'profesor_id'=>56,
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
			'curso_id'=>50,
			'participante_curso_id'=>56
		]);
		
		DB::table('profesors')->insert([
			'id'=>57,
			'nombres'=>'Eduardo',
			'apellido_paterno'=>'Rosas',
			'apellido_materno'=>'Lira',
			'rfc'=>'ROLE720109ROLE',
			'numero_trabajador' => '121432457',
			'fecha_nacimiento'=>'1972-01-09'
		]);
		
		DB::table('participante_curso')->insert([
			'id'=>57,
			'curso_id'=>50,
			'profesor_id'=>57,
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
			'curso_id'=>50,
			'participante_curso_id'=>57
		]);
		
		DB::table('profesors')->insert([
			'id'=>58,
			'nombres'=>'Agustin Gerardo',
			'apellido_paterno'=>'Ruiz',
			'apellido_materno'=>'Tamayo',
			'rfc'=>'RUTA720111RUTA',
			'numero_trabajador' => '121432458',
			'fecha_nacimiento'=>'1972-01-11'
		]);
		
		DB::table('participante_curso')->insert([
			'id'=>58,
			'curso_id'=>50,
			'profesor_id'=>58,
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
			'curso_id'=>50,
			'participante_curso_id'=>58
		]);
		
		
		DB::table('profesors')->insert([
			'id'=>59,
			'nombres'=>'Jaime Juan',
			'apellido_paterno'=>'Zarza y',
			'apellido_materno'=>'Teran',
			'rfc'=>'ZATJ720112ZATJ',
			'numero_trabajador' => '121432459',
			'fecha_nacimiento'=>'1972-01-12'
		]);
		
		DB::table('participante_curso')->insert([
			'id'=>59,
			'curso_id'=>50,
			'profesor_id'=>59,
			'asistencia'=>true,
			'acreditacion'=>true
		]);
		
		DB::table('_evaluacion_final_curso')->insert([
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
			'curso_id'=>50,
			'participante_curso_id'=>59
        ]);
        
		//1_RespuestasEvalCursosTodasAreas_2020-1s_33.pdf
        
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
			'id'=> 51,
			'nombre_curso'=>'Módulo 4. Tendencias y estrategias de comunicación para la docencia',
			'duracion_curso' => '20',
            'tipo' => 'C',
            'institucion' => 'DGAPA',
			'fecha_disenio'=>'2012-12-12',
			'coordinacion_id'=>202,
			'clave_curso'=>'TECDDGAPA'
		]);
		
		DB::table('cursos')->insert([
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
            'catalogo_id' => 51,
            'salon_id' => 2
			
        ]);
        
        //Instructor
        DB::table('profesors')->insert([
            'id'=>94,
			'nombres'=>'Claudia',
			'apellido_paterno'=>'Loreto',
			'apellido_materno'=>'Miranda',
			'rfc'=>'LOMC720204LOMC',
			'numero_trabajador' => '121432494',
			'fecha_nacimiento'=>'1972-02-04'
        ]);
		
		DB::table('profesor_curso')->insert([
			'id'=>52,
			'curso_id'=>51,
			'profesor_id'=>94,
        ]);
        
        //Participantes
		DB::table('profesors')->insert([
			'id'=>60,
			'nombres'=>'Anayantzin',
			'apellido_paterno'=>'Almanza',
			'apellido_materno'=>'Valdez',
			'rfc'=>'ALVA720112ALVA',
			'numero_trabajador' => '121432460',
			'fecha_nacimiento'=>'1972-01-13'
		]);
		
		DB::table('participante_curso')->insert([
			'id'=>60,
			'curso_id'=>51,
			'profesor_id'=>60,
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
			'curso_id'=>51,
			'participante_curso_id'=>60
        ]);
        
		DB::table('profesors')->insert([
			'id'=>61,
			'nombres'=>'Angel Francisco',
			'apellido_paterno'=>'Alvarez',
			'apellido_materno'=>'Herrera',
			'rfc'=>'ALHA720114ALHA',
			'numero_trabajador' => '121432461',
			'fecha_nacimiento'=>'1972-01-14'
		]);
		
		DB::table('participante_curso')->insert([
			'id'=>61,
			'curso_id'=>51,
			'profesor_id'=>61,
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
			'curso_id'=>51,
			'participante_curso_id'=>61
        ]);

        
		DB::table('profesors')->insert([
			'id'=>62,
			'nombres'=>'Gaspar',
			'apellido_paterno'=>'Franco',
			'apellido_materno'=>'Hernandez',
			'rfc'=>'FAHG720115FAHG',
			'numero_trabajador' => '121432462',
			'fecha_nacimiento'=>'1972-01-15'
		]);
		
		DB::table('participante_curso')->insert([
			'id'=>62,
			'curso_id'=>51,
			'profesor_id'=>62,
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
			'curso_id'=>51,
			'participante_curso_id'=>62
        ]);

        DB::table('profesors')->insert([
			'id'=>63,
			'nombres'=>'Luis Antonio',
			'apellido_paterno'=>'Garcia',
			'apellido_materno'=>'Villanueva',
			'rfc'=>'GAVL720116GAVL',
			'numero_trabajador' => '121432463',
			'fecha_nacimiento'=>'1972-01-16'
		]);
		
		DB::table('participante_curso')->insert([
			'id'=>63,
			'curso_id'=>51,
			'profesor_id'=>63,
			'asistencia'=>true,
			'acreditacion'=>true
		]);
		
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
			'curso_id'=>51,
			'participante_curso_id'=>63
        ]);

        DB::table('profesors')->insert([
			'id'=>64,
			'nombres'=>'Griselda Berenice',
			'apellido_paterno'=>'Hernandez',
			'apellido_materno'=>'Cruz',
			'rfc'=>'HERC720117HERCV',
			'numero_trabajador' => '121432464',
			'fecha_nacimiento'=>'1972-01-17'
		]);
		
		DB::table('participante_curso')->insert([
			'id'=>64,
			'curso_id'=>51,
			'profesor_id'=>64,
			'asistencia'=>true,
			'acreditacion'=>true
		]);
		
		DB::table('_evaluacion_final_curso')->insert([
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
			'curso_id'=>51,
			'participante_curso_id'=>64
        ]);

        DB::table('profesors')->insert([
			'id'=>65,
			'nombres'=>'Miguel Angel',
			'apellido_paterno'=>'Hofmann',
			'apellido_materno'=>'Aguirre',
			'rfc'=>'HOAM720118HOAM',
			'numero_trabajador' => '121432465',
			'fecha_nacimiento'=>'1972-01-18'
		]);
		
		DB::table('participante_curso')->insert([
			'id'=>65,
			'curso_id'=>51,
			'profesor_id'=>65,
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
			'curso_id'=>51,
			'participante_curso_id'=>65
        ]);

        DB::table('profesors')->insert([
			'id'=>66,
			'nombres'=>'Lucia Yazmin',
			'apellido_paterno'=>'Juarez',
			'apellido_materno'=>'De la Mora',
			'rfc'=>'JUDL720119JUDL',
			'numero_trabajador' => '121432466',
			'fecha_nacimiento'=>'1972-01-19'
		]);
		
		DB::table('participante_curso')->insert([
			'id'=>66,
			'curso_id'=>51,
			'profesor_id'=>66,
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
			'curso_id'=>51,
			'participante_curso_id'=>66
        ]);

        DB::table('profesors')->insert([
			'id'=>67,
			'nombres'=>'Jose Miguel',
			'apellido_paterno'=>'Martinez',
			'apellido_materno'=>'Alcazar',
			'rfc'=>'MAAJ720120MAAJ',
			'numero_trabajador' => '121432467',
			'fecha_nacimiento'=>'1972-01-20'
		]);
		
		DB::table('participante_curso')->insert([
			'id'=>67,
			'curso_id'=>51,
			'profesor_id'=>67,
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
			'curso_id'=>51,
			'participante_curso_id'=>67
        ]);

        DB::table('profesors')->insert([
			'id'=>68,
			'nombres'=>'Brenda Iveth',
			'apellido_paterno'=>'Moreno',
			'apellido_materno'=>'Hurtado',
			'rfc'=>'MOHB720121MOHB',
			'numero_trabajador' => '121432468',
			'fecha_nacimiento'=>'1972-01-21'
		]);
		
		DB::table('participante_curso')->insert([
			'id'=>68,
			'curso_id'=>51,
			'profesor_id'=>68,
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
			'curso_id'=>51,
			'participante_curso_id'=>68
        ]);

        DB::table('profesors')->insert([
			'id'=>69,
			'nombres'=>'Georgina',
			'apellido_paterno'=>'Nieto',
			'apellido_materno'=>'Castañeda',
			'rfc'=>'NICG720122NICG',
			'numero_trabajador' => '121432469',
			'fecha_nacimiento'=>'1972-01-22'
		]);
		
		DB::table('participante_curso')->insert([
			'id'=>69,
			'curso_id'=>51,
			'profesor_id'=>69,
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
			'curso_id'=>51,
			'participante_curso_id'=>69
        ]);

        DB::table('profesors')->insert([
			'id'=>70,
			'nombres'=>'Maria Teresa',
			'apellido_paterno'=>'Peñuñuri',
			'apellido_materno'=>'Santoyo',
			'rfc'=>'PESM720123PESM',
			'numero_trabajador' => '121432470',
			'fecha_nacimiento'=>'1972-01-23'
		]);
		
		DB::table('participante_curso')->insert([
			'id'=>70,
			'curso_id'=>51,
			'profesor_id'=>70,
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
			'curso_id'=>51,
			'participante_curso_id'=>70
        ]);
        
        DB::table('profesors')->insert([
			'id'=>71,
			'nombres'=>'Soledad Alicia',
			'apellido_paterno'=>'Rivera',
			'apellido_materno'=>'Rosales',
			'rfc'=>'RIRS720124RIRS',
			'numero_trabajador' => '121432471',
			'fecha_nacimiento'=>'1972-01-24'
		]);
		
		DB::table('participante_curso')->insert([
			'id'=>71,
			'curso_id'=>51,
			'profesor_id'=>71,
			'asistencia'=>true,
			'acreditacion'=>true
		]);
		
		DB::table('_evaluacion_final_curso')->insert([
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
			'curso_id'=>51,
			'participante_curso_id'=>71
        ]);
        
        DB::table('profesors')->insert([
			'id'=>72,
			'nombres'=>'Mario Sinuhe',
			'apellido_paterno'=>'Sanchez',
			'apellido_materno'=>'Dominguez',
			'rfc'=>'SADM720125SADM',
			'numero_trabajador' => '121432472',
			'fecha_nacimiento'=>'1972-01-25'
		]);
		
		DB::table('participante_curso')->insert([
			'id'=>72,
			'curso_id'=>51,
			'profesor_id'=>72,
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
			'curso_id'=>51,
			'participante_curso_id'=>72
        ]);

        //Curso 2
        DB::table('catalogo_cursos')->insert([
			'id'=> 52,
			'nombre_curso'=>'Módulo 5. La importancia de la inteligencia emocional en la práctica docente',
			'duracion_curso' => '20',
            'tipo' => 'C',
            'institucion' => 'DGAPA',
			'fecha_disenio'=>'2012-12-12',
			'coordinacion_id'=>202,
			'clave_curso'=>'TECDDGAPA5'
		]);
		
		DB::table('cursos')->insert([
			'id'=>52,
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
            'catalogo_id' => 52,
            'salon_id' => 2
			
        ]);

        //Instructor
        DB::table('profesors')->insert([
            'id'=>96,
			'nombres'=>'Juan',
			'apellido_paterno'=>'Varela',
			'apellido_materno'=>'Juarez',
			'rfc'=>'VAJJ720205VAJJ',
			'numero_trabajador' => '121432496',
			'fecha_nacimiento'=>'1972-02-05'
        ]);

        DB::table('profesor_curso')->insert([
			'id'=>62,
			'curso_id'=>52,
			'profesor_id'=>96,
        ]);

        //Participantes
        DB::table('participante_curso')->insert([
			'id'=>73,
			'curso_id'=>52,
			'profesor_id'=>60,
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
			'curso_id'=>52,
			'participante_curso_id'=>73
        ]);

        DB::table('participante_curso')->insert([
			'id'=>74,
			'curso_id'=>52,
			'profesor_id'=>61,
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
			'p2_2'=>'95',
			'p2_3'=>'95',
			'p2_4'=>'100',
			'p3_1'=>'100',
			'p3_2'=>'100',
			'p3_3'=>'100',
			'p3_4'=>'100',
			'p7'=>true,
			'p8'=>'["1","null"]',
			'mejor'=>'La relfexion sobre la inteligencia emocional en nuestros alumnos y en forma personal',
            'sug'=>'Ninguna, gracias',
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
			'horarios'=>'Cualquiera',
			'horarioi'=>'Cualquiera',
			'curso_id'=>52,
			'participante_curso_id'=>74
        ]);

        DB::table('participante_curso')->insert([
			'id'=>75,
			'curso_id'=>52,
			'profesor_id'=>62,
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
			'p3_2'=>'95',
			'p3_3'=>'100',
			'p3_4'=>'100',
			'p7'=>true,
			'p8'=>'["1","null"]',
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
			'horarios'=>'Cualquiera',
			'horarioi'=>'Cualquiera',
			'curso_id'=>52,
            'participante_curso_id'=>75
        ]);

        DB::table('participante_curso')->insert([
			'id'=>76,
			'curso_id'=>52,
			'profesor_id'=>63,
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
			'p2_3'=>'100',
			'p2_4'=>'100',
			'p3_1'=>'100',
			'p3_2'=>'100',
			'p3_3'=>'100',
			'p3_4'=>'100',
			'p7'=>true,
			'p8'=>'["2","null"]',
			'mejor'=>'El conocer como se maneja la inteligencia emocional y que puede ser aplicada en el aula. Identificar cada una de las emociones que rige el docente en el aula',
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
			'horarios'=>'Cualquiera',
			'horarioi'=>'Cualquiera',
			'curso_id'=>52,
            'participante_curso_id'=>76
        ]);

        DB::table('participante_curso')->insert([
			'id'=>77,
			'curso_id'=>52,
			'profesor_id'=>64,
			'asistencia'=>true,
			'acreditacion'=>true
		]);

        DB::table('_evaluacion_final_curso')->insert([
			'p1_1'=>'100',
			'p1_2'=>'100',
			'p1_3'=>'95',
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
			'p7'=>true,
			'p8'=>'["2","null"]',
			'mejor'=>'La temática de la inteligencia emocional',
            'sug'=>'Este módulo podría ser útil como un cuirso en intersemestral o semestral',
			'p4_1'=>'100',
			'p4_2'=>'100',
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
			'conocimiento'=>'["3"]',
			'tematica'=>'tematica',
			'horarios'=>'9:00-11:00',
			'horarioi'=>'9:00-13:00',
			'curso_id'=>52,
            'participante_curso_id'=>77
        ]);

        DB::table('participante_curso')->insert([
			'id'=>78,
			'curso_id'=>52,
			'profesor_id'=>65,
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
			'p7'=>true,
			'p8'=>'["2","null"]',
			'mejor'=>'El conocer la utilidad de la inteligencia emocional dentro y fuera del aula',
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
			'horarios'=>'9:00-11:00',
			'horarioi'=>'9:00-13:00',
			'curso_id'=>52,
            'participante_curso_id'=>78
        ]);

        DB::table('participante_curso')->insert([
			'id'=>79,
			'curso_id'=>52,
			'profesor_id'=>66,
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
			'p2_3'=>'100',
			'p2_4'=>'100',
			'p3_1'=>'100',
			'p3_2'=>'100',
			'p3_3'=>'100',
			'p3_4'=>'100',
			'p7'=>true,
			'p8'=>'["null","null"]',
			'mejor'=>'Todo lo que aportó el instructor y mis compañeros en el tema de Inteligencia emocional',
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
			'horarios'=>'9:00-11:00',
			'horarioi'=>'9:00-13:00',
			'curso_id'=>52,
            'participante_curso_id'=>79
        ]);

        DB::table('participante_curso')->insert([
			'id'=>80,
			'curso_id'=>52,
			'profesor_id'=>67,
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
			'p7'=>true,
			'p8'=>'["4","Coordinacion del Centro"]',
			'mejor'=>'La presentación y profundidad de los temas por el instructor',
            'sug'=>'Ninguna, todo excelente. Desde los detalles, la recomendación de los libros y lecturas',
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
			'horarios'=>'9:00-11:00',
			'horarioi'=>'9:00-13:00',
			'curso_id'=>52,
            'participante_curso_id'=>80
        ]);

        DB::table('participante_curso')->insert([
			'id'=>81,
			'curso_id'=>52,
			'profesor_id'=>68,
			'asistencia'=>true,
			'acreditacion'=>true
		]);

        DB::table('_evaluacion_final_curso')->insert([
			'p1_1'=>'100',
			'p1_2'=>'100',
			'p1_3'=>'100',
			'p1_4'=>'95',
			'p1_5'=>'100',
			'p2_1'=>'95',
			'p2_2'=>'100',
			'p2_3'=>'100',
			'p2_4'=>'100',
			'p3_1'=>'95',
			'p3_2'=>'100',
			'p3_3'=>'95',
			'p3_4'=>'95',
			'p7'=>true,
			'p8'=>'["2","null"]',
			'mejor'=>'Conocer como aplicar técnicas de desarollo socio-afectivo',
            'sug'=>'El clima en el salón es muy frío, recomiendo apagarlo en el receso',
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
			'horarios'=>'9:00-11:00',
			'horarioi'=>'9:00-13:00',
			'curso_id'=>52,
            'participante_curso_id'=>81
        ]);

        DB::table('participante_curso')->insert([
			'id'=>82,
			'curso_id'=>52,
			'profesor_id'=>69,
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
			'p7'=>true,
			'p8'=>'["2","null"]',
			'mejor'=>'Las reflexiones, los ejercicios de integración y las pruebas',
            'sug'=>'Es el módulo que más me ha gustaro del Diplomado',
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
			'horarios'=>'9:00-11:00',
			'horarioi'=>'9:00-13:00',
			'curso_id'=>52,
            'participante_curso_id'=>82
        ]);

        DB::table('participante_curso')->insert([
			'id'=>83,
			'curso_id'=>52,
			'profesor_id'=>70,
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
			'p2_3'=>'100',
			'p2_4'=>'100',
			'p3_1'=>'100',
			'p3_2'=>'100',
			'p3_3'=>'95',
			'p3_4'=>'95',
			'p7'=>true,
			'p8'=>'["2","null"]',
			'mejor'=>'La proporción de los materiales en tiempo y forma; así también la bibliografía',
            'sug'=>'Explorar la plataforma de EDUCAFI, uno como docente la administra y tiene espacio para almacenar todo el material de cada módulo. sin problemas de [...]',
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
			'conocimiento'=>'["2"]',
			'tematica'=>'tematica',
			'horarios'=>'9:00-11:00',
			'horarioi'=>'9:00-13:00',
			'curso_id'=>52,
            'participante_curso_id'=>83
        ]);

        DB::table('participante_curso')->insert([
			'id'=>84,
			'curso_id'=>52,
			'profesor_id'=>71,
			'asistencia'=>true,
			'acreditacion'=>true
		]);
        
        DB::table('_evaluacion_final_curso')->insert([
			'p1_1'=>'95',
			'p1_2'=>'100',
			'p1_3'=>'100',
			'p1_4'=>'95',
			'p1_5'=>'95',
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
			'mejor'=>'Conocer mi estilo de pensamiento y las evaluaciones del tipo de pensamiento',
            'sug'=>'Con toda seguridad, no tengo la destreza para la inteprectación de los percentiles. Creo que no lo deberíamos de intentar, es para un experto',
			'p4_1'=>'100',
			'p4_2'=>'100',
			'p4_3'=>'100',
			'p4_4'=>'100',
			'p4_5'=>'95',
			'p4_6'=>'100',
			'p4_7'=>'95',
			'p4_8'=>'100',
			'p4_9'=>'100',
			'p4_10'=>'100',
			'p4_11'=>'100',
            'otros'=>'Otros',
			'conocimiento'=>'["3"]',
			'tematica'=>'tematica',
			'horarios'=>'9:00-11:00',
			'horarioi'=>'9:00-13:00',
			'curso_id'=>52,
            'participante_curso_id'=>84
        ]);

        DB::table('participante_curso')->insert([
			'id'=>85,
			'curso_id'=>52,
			'profesor_id'=>72,
			'asistencia'=>true,
			'acreditacion'=>true
		]);
        
        DB::table('_evaluacion_final_curso')->insert([
			'p1_1'=>'95',
			'p1_2'=>'80',
			'p1_3'=>'80',
			'p1_4'=>'95',
			'p1_5'=>'95',
			'p2_1'=>'80',
			'p2_2'=>'80',
			'p2_3'=>'80',
			'p2_4'=>'80',
			'p3_1'=>'95',
			'p3_2'=>'95',
			'p3_3'=>'95',
			'p3_4'=>'95',
			'p7'=>true,
			'p8'=>'["2","null"]',
			'mejor'=>'-',
            'sug'=>'-',
			'p4_1'=>'100',
			'p4_2'=>'95',
			'p4_3'=>'95',
			'p4_4'=>'95',
			'p4_5'=>'95',
			'p4_6'=>'95',
			'p4_7'=>'95',
			'p4_8'=>'100',
			'p4_9'=>'95',
			'p4_10'=>'95',
			'p4_11'=>'95',
            'otros'=>'Otros',
			'conocimiento'=>'["4"]',
			'tematica'=>'tematica',
			'horarios'=>'9:00-11:00',
			'horarioi'=>'9:00-13:00',
			'curso_id'=>52,
            'participante_curso_id'=>85
        ]);

        //curso 3
        DB::table('catalogo_cursos')->insert([
			'id'=> 53,
			'nombre_curso'=>'Módulo 6. Liderazgo docente en la educación superior del siglo XXI',
			'duracion_curso' => '20',
            'tipo' => 'C',
            'institucion' => 'DGAPA',
			'fecha_disenio'=>'2012-12-12',
			'coordinacion_id'=>202,
			'clave_curso'=>'TECDDGAPA6'
		]);
		
		DB::table('cursos')->insert([
			'id'=>53,
			'semestre_anio'=>2020,
			'semestre_pi'=>'1',
			'semestre_si'=>'s',
			'fecha_inicio' => '2019-11-04',
            'fecha_fin' => '2019-11-20',
            'hora_inicio' => '08:00',
            'hora_fin' => '12:00',
            'dias_semana' => 'Lunes,Miércoles',
            'numero_sesiones' => 5,
            'texto_diploma' => 'Texto diploma',
            'costo' => 2000,
            'cupo_maximo' => 19,
            'cupo_minimo' => 15,
            'catalogo_id' => 53,
            'salon_id' => 2
			
        ]);

        //Instructor
        DB::table('profesors')->insert([
            'id'=>97,
			'nombres'=>'Juan',
			'apellido_paterno'=>'Tapia',
			'apellido_materno'=>'Gonzalez',
			'rfc'=>'TAGJ720206TAGL',
			'numero_trabajador' => '121432497',
			'fecha_nacimiento'=>'1972-02-06'
        ]);

        DB::table('profesor_curso')->insert([
			'id'=>63,
			'curso_id'=>53,
			'profesor_id'=>97,
        ]);

        //Participantes
        DB::table('participante_curso')->insert([
			'id'=>86,
			'curso_id'=>53,
			'profesor_id'=>60,
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
			'p3_2'=>'80',
			'p3_3'=>'100',
			'p3_4'=>'100',
			'p7'=>true,
			'p8'=>'["4","Profesor"]',
			'mejor'=>'Cada clase del método fue única',
            'sug'=>'Qué continúe el instructor motivando a más profesores a desarrollar su liderazgp para que estos impacten de manera positiva en los futuros [...]',
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
			'horarios'=>'9:00-11:00',
			'horarioi'=>'9:00-13:00',
			'curso_id'=>53,
            'participante_curso_id'=>86
        ]);

        DB::table('participante_curso')->insert([
			'id'=>87,
			'curso_id'=>53,
			'profesor_id'=>61,
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
			'p2_2'=>'95',
			'p2_3'=>'100',
			'p2_4'=>'100',
			'p3_1'=>'100',
			'p3_2'=>'100',
			'p3_3'=>'100',
			'p3_4'=>'100',
			'p7'=>true,
			'p8'=>'["2","null"]',
			'mejor'=>'Aprender nuevas estrategias, nuevas metodologías para aplicar en el aula, sin olvidar mi función como líder de mis alumnos',
            'sug'=>'Más tiempo para los ejercicios',
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
			'horarios'=>'9:00-11:00',
			'horarioi'=>'9:00-13:00',
			'curso_id'=>53,
            'participante_curso_id'=>87
        ]);

        DB::table('participante_curso')->insert([
			'id'=>88,
			'curso_id'=>53,
			'profesor_id'=>62,
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
			'p3_2'=>'80',
			'p3_3'=>'100',
			'p3_4'=>'100',
			'p7'=>true,
			'p8'=>'["1","null"]',
			'mejor'=>'Todos los temas de los módulos, y las herramientas de aplicación inmediata',
            'sug'=>'En blanco',
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
			'horarios'=>'9:00-11:00',
			'horarioi'=>'9:00-13:00',
			'curso_id'=>53,
            'participante_curso_id'=>88
        ]);

        DB::table('participante_curso')->insert([
			'id'=>89,
			'curso_id'=>53,
			'profesor_id'=>63,
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
			'p7'=>true,
			'p8'=>'["2","null"]',
			'mejor'=>'Las diferentes estrategias didácticas implementadas',
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
			'tematica'=>'tematica',
			'horarios'=>'9:00-11:00',
			'horarioi'=>'9:00-13:00',
			'curso_id'=>53,
            'participante_curso_id'=>89
        ]);

        DB::table('participante_curso')->insert([
			'id'=>90,
			'curso_id'=>53,
			'profesor_id'=>64,
			'asistencia'=>true,
			'acreditacion'=>true
        ]);
        
        DB::table('_evaluacion_final_curso')->insert([
			'p1_1'=>'100',
			'p1_2'=>'95',
			'p1_3'=>'100',
			'p1_4'=>'100',
			'p1_5'=>'100',
			'p2_1'=>'95',
			'p2_2'=>'100',
			'p2_3'=>'100',
			'p2_4'=>'100',
			'p3_1'=>'100',
			'p3_2'=>'95',
			'p3_3'=>'100',
			'p3_4'=>'100',
			'p7'=>true,
			'p8'=>'["1","null"]',
			'mejor'=>'Las estrategias didácticas novedosas para aplicar en el aula',
            'sug'=>'Que exista un curso de mayor número de horas de esta temática (liderazgo) con este instructor',
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
			'horarios'=>'9:00-11:00',
			'horarioi'=>'9:00-13:00',
			'curso_id'=>53,
            'participante_curso_id'=>90
        ]);

        DB::table('participante_curso')->insert([
			'id'=>91,
			'curso_id'=>53,
			'profesor_id'=>65,
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
			'p2_2'=>'95',
			'p2_3'=>'100',
			'p2_4'=>'100',
			'p3_1'=>'100',
			'p3_2'=>'100',
			'p3_3'=>'100',
			'p3_4'=>'100',
			'p7'=>true,
			'p8'=>'["2","null"]',
			'mejor'=>'Todo, cada sesión fue interesante y productiva',
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
			'horarios'=>'9:00-11:00',
			'horarioi'=>'9:00-13:00',
			'curso_id'=>53,
            'participante_curso_id'=>91
        ]);

        DB::table('participante_curso')->insert([
			'id'=>92,
			'curso_id'=>53,
			'profesor_id'=>66,
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
			'p7'=>true,
			'p8'=>'["4","Otros"]',
			'mejor'=>'Las clases muy dinámicas',
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
			'horarios'=>'9:00-11:00',
			'horarioi'=>'9:00-13:00',
			'curso_id'=>53,
            'participante_curso_id'=>92
        ]);

        DB::table('participante_curso')->insert([
			'id'=>93,
			'curso_id'=>53,
			'profesor_id'=>67,
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
			'p7'=>true,
			'p8'=>'["4","Por la Coordinación"]',
			'mejor'=>'Las exposiciones y los trabajos aplicativos durante la clase que permitieron la aplicación de la teoría',
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
			'horarios'=>'9:00-11:00',
			'horarioi'=>'9:00-13:00',
			'curso_id'=>53,
            'participante_curso_id'=>93
        ]);

        DB::table('participante_curso')->insert([
			'id'=>94,
			'curso_id'=>53,
			'profesor_id'=>68,
			'asistencia'=>true,
			'acreditacion'=>true
        ]);
        
        DB::table('_evaluacion_final_curso')->insert([
			'p1_1'=>'100',
			'p1_2'=>'100',
			'p1_3'=>'100',
			'p1_4'=>'95',
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
			'p8'=>'["3","null"]',
			'mejor'=>'Aprender estrategias',
            'sug'=>'Aterrizar y resaltar el tema del que se habla',
			'p4_1'=>'100',
			'p4_2'=>'100',
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
			'conocimiento'=>'["2"]',
			'tematica'=>'tematica',
			'horarios'=>'9:00-11:00',
			'horarioi'=>'9:00-13:00',
			'curso_id'=>53,
            'participante_curso_id'=>94
        ]);

        DB::table('participante_curso')->insert([
			'id'=>95,
			'curso_id'=>53,
			'profesor_id'=>69,
			'asistencia'=>true,
			'acreditacion'=>true
        ]);
        
        DB::table('_evaluacion_final_curso')->insert([
			'p1_1'=>'80',
			'p1_2'=>'80',
			'p1_3'=>'80',
			'p1_4'=>'60',
			'p1_5'=>'80',
			'p2_1'=>'95',
			'p2_2'=>'100',
			'p2_3'=>'95',
			'p2_4'=>'80',
			'p3_1'=>'100',
			'p3_2'=>'100',
			'p3_3'=>'100',
			'p3_4'=>'100',
			'p7'=>true,
			'p8'=>'["2","null"]',
			'mejor'=>'Las dinámicas eran muy buenas, pero en mi opinión, no acordes al módulo',
            'sug'=>'Este módulo me pareció muy improvisado, el material que nos dejaron leer nunca se discutió en clase y me pareció algo obsoleto',
			'p4_1'=>'80',
			'p4_2'=>'60',
			'p4_3'=>'100',
			'p4_4'=>'100',
			'p4_5'=>'95',
			'p4_6'=>'95',
			'p4_7'=>'95',
			'p4_8'=>'95',
			'p4_9'=>'95',
			'p4_10'=>'95',
			'p4_11'=>'100',
            'otros'=>'Otros',
			'conocimiento'=>'["2"]',
			'tematica'=>'tematica',
			'horarios'=>'9:00-11:00',
			'horarioi'=>'9:00-13:00',
			'curso_id'=>53,
            'participante_curso_id'=>95
        ]);

        DB::table('participante_curso')->insert([
			'id'=>96,
			'curso_id'=>53,
			'profesor_id'=>70,
			'asistencia'=>true,
			'acreditacion'=>true
        ]);

        
        DB::table('_evaluacion_final_curso')->insert([
			'p1_1'=>'100',
			'p1_2'=>'95',
			'p1_3'=>'95',
			'p1_4'=>'100',
			'p1_5'=>'95',
			'p2_1'=>'100',
			'p2_2'=>'95',
			'p2_3'=>'100',
			'p2_4'=>'95',
			'p3_1'=>'95',
			'p3_2'=>'95',
			'p3_3'=>'95',
			'p3_4'=>'100',
			'p7'=>true,
			'p8'=>'["1","null"]',
			'mejor'=>'Las actividades en equipo',
            'sug'=>'Revisar el formato de entrega de tareas, ya que por erro no se plantearon las estrategias de las tareas y el trabajo final. Las fechas de entrega quedo muy [...]',
			'p4_1'=>'100',
			'p4_2'=>'95',
			'p4_3'=>'100',
			'p4_4'=>'100',
			'p4_5'=>'95',
			'p4_6'=>'100',
			'p4_7'=>'95',
			'p4_8'=>'100',
			'p4_9'=>'100',
			'p4_10'=>'100',
			'p4_11'=>'100',
            'otros'=>'Otros',
			'conocimiento'=>'["1"]',
			'tematica'=>'tematica',
			'horarios'=>'9:00-11:00',
			'horarioi'=>'9:00-13:00',
			'curso_id'=>53,
            'participante_curso_id'=>96
        ]);

        DB::table('participante_curso')->insert([
			'id'=>97,
			'curso_id'=>53,
			'profesor_id'=>71,
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
			'p2_2'=>'95',
			'p2_3'=>'100',
			'p2_4'=>'100',
			'p3_1'=>'100',
			'p3_2'=>'100',
			'p3_3'=>'80',
			'p3_4'=>'100',
			'p7'=>true,
			'p8'=>'["4","Póster en FCA"]',
			'mejor'=>'El modo de poder, querer y romper cambiar paradigmas',
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
			'horarios'=>'9:00-11:00',
			'horarioi'=>'9:00-13:00',
			'curso_id'=>53,
            'participante_curso_id'=>97
        ]);

        DB::table('participante_curso')->insert([
			'id'=>98,
			'curso_id'=>53,
			'profesor_id'=>72,
			'asistencia'=>true,
			'acreditacion'=>true
        ]);
        
        DB::table('_evaluacion_final_curso')->insert([
			'p1_1'=>'80',
			'p1_2'=>'80',
			'p1_3'=>'95',
			'p1_4'=>'80',
			'p1_5'=>'95',
			'p2_1'=>'95',
			'p2_2'=>'80',
			'p2_3'=>'80',
			'p2_4'=>'80',
			'p3_1'=>'95',
			'p3_2'=>'95',
			'p3_3'=>'80',
			'p3_4'=>'95',
			'p7'=>true,
			'p8'=>'["2","null"]',
			'mejor'=>'Experiencias profesionales del instructor',
            'sug'=>'-',
			'p4_1'=>'95',
			'p4_2'=>'80',
			'p4_3'=>'95',
			'p4_4'=>'80',
			'p4_5'=>'95',
			'p4_6'=>'80',
			'p4_7'=>'95',
			'p4_8'=>'80',
			'p4_9'=>'80',
			'p4_10'=>'95',
			'p4_11'=>'80',
            'otros'=>'Otros',
			'conocimiento'=>'["1"]',
			'tematica'=>'tematica',
			'horarios'=>'9:00-11:00',
			'horarioi'=>'9:00-13:00',
			'curso_id'=>53,
            'participante_curso_id'=>98
        ]);

        //Curso 4
		DB::table('coordinacions')->insert([
			'id'=>51,
			'abreviatura'=>'ADIE',
			'nombre_coordinacion'=>'Área Disciplinar e Investigación educativa',
			'coordinador'=>'Gonzalo Lopez Juarez',
			'grado'=>'M.E.M.',
			'usuario'=>'G0nz4l0o1nEZ',
			'password'=>Hash::make(1234)
		]);

        DB::table('catalogo_cursos')->insert([
			'id'=> 54,
			'nombre_curso'=>'Programación de máquinas de control numérico (CNC)',
			'duracion_curso' => '20',
            'coordinacion_id' => 51,
            'tipo' => 'C',
            'institucion' => 'DGAPA',
			'fecha_disenio'=>'2012-12-12',
			'coordinacion_id'=>51,
			'clave_curso'=>'PMCCNC'
		]);
		
		DB::table('cursos')->insert([
			'id'=>54,
			'semestre_anio'=>2020,
			'semestre_pi'=>'1',
			'semestre_si'=>'s',
			'fecha_inicio' => '2019-08-15',
            'fecha_fin' => '2019-08-29',
            'hora_inicio' => '10:00',
            'hora_fin' => '14:00',
            'dias_semana' => 'Lunes,Miércoles',
            'numero_sesiones' => 5,
            'texto_diploma' => 'Texto diploma',
            'costo' => 2000,
            'cupo_maximo' => 16,
            'cupo_minimo' => 8,
            'catalogo_id' => 54,
            'salon_id' => 2
			
        ]);
        
        //Instructor
        DB::table('profesors')->insert([
            'id'=>98,
			'nombres'=>'Jose Javier',
			'apellido_paterno'=>'Cervantes',
			'apellido_materno'=>'Cabello',
			'rfc'=>'CECJ720207CECJ',
			'numero_trabajador' => '121432498',
			'fecha_nacimiento'=>'1972-02-07'
        ]);
		
		DB::table('profesor_curso')->insert([
			'id'=>58,
			'curso_id'=>54,
			'profesor_id'=>98,
        ]);
        
        //Participantes
        DB::table('profesors')->insert([
            'id'=>512,
            'nombres'=>'Francisco Javier',
            'apellido_paterno'=>'Marquez',
            'apellido_materno'=>'Correo',
            'rfc'=>'MACF740112MACF',
            'numero_trabajador' => '1214324512',
            'fecha_nacimiento'=>'1974-01-12'
        ]);

        DB::table('participante_curso')->insert([
            'id'=>512,
            'profesor_id'=>512,
            'curso_id'=>54,
            'asistencia'=>false,
            'acreditacion'=>false
        ]);

        DB::table('profesors')->insert([
            'id'=>513,
            'nombres'=>'David Abraham',
            'apellido_paterno'=>'Santoyo',
            'apellido_materno'=>'Garcia',
            'rfc'=>'SAGD740113SAGD',
            'numero_trabajador' => '1214324513',
            'fecha_nacimiento'=>'1974-01-13'
        ]);

        DB::table('participante_curso')->insert([
            'id'=>513,
            'profesor_id'=>513,
            'curso_id'=>54,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);
		
		DB::table('profesors')->insert([
			'id'=>73,
			'nombres'=>'Estefania',
			'apellido_paterno'=>'Abarca',
			'apellido_materno'=>'Rodriguez',
			'rfc'=>'ABRE73102ABRE',
			'numero_trabajador' => '121432473',
			'fecha_nacimiento'=>'1973-01-02'
		]);
		
		DB::table('participante_curso')->insert([
			'id'=>99,
			'curso_id'=>54,
			'profesor_id'=>73,
			'asistencia'=>true,
			'acreditacion'=>true
		]);
		
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
			'p7'=>true,
			'p8'=>'["2","null"]',
			'mejor'=>'Ver el maquineo físicamente',
			'sug'=>'Abrir más cursos de como CAD o CAM',
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
			'tematica'=>'tematica',
			'horarios'=>'9:00-13:00',
			'horarioi'=>'13:00-15:00',
			'curso_id'=>54,
			'participante_curso_id'=>99
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
			'id'=>701,
			'curso_id'=>54,
			'profesor_id'=>306,
			'asistencia'=>false,
			'acreditacion'=>false
		]);
        
		DB::table('profesors')->insert([
			'id'=>74,
			'nombres'=>'Salvador',
			'apellido_paterno'=>'Centeno',
			'apellido_materno'=>'Estrada',
			'rfc'=>'CEES73103CEES',
			'numero_trabajador' => '121432474',
			'fecha_nacimiento'=>'1973-01-03'
		]);
		
		DB::table('participante_curso')->insert([
			'id'=>100,
			'curso_id'=>54,
			'profesor_id'=>74,
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
			'p2_3'=>'100',
			'p2_4'=>'100',
			'p3_1'=>'100',
			'p3_2'=>'100',
			'p3_3'=>'100',
			'p3_4'=>'100',
			'p7'=>true,
			'p8'=>'["1","2","null"]',
			'mejor'=>'El contenido en sí y la simulación',
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
			'curso_id'=>54,
			'participante_curso_id'=>100
        ]);
        
        
		DB::table('profesors')->insert([
			'id'=>75,
			'nombres'=>'Jesus Javier',
			'apellido_paterno'=>'Cortes',
			'apellido_materno'=>'Rosas',
			'rfc'=>'CORJ73104CORJ',
			'numero_trabajador' => '121432475',
			'fecha_nacimiento'=>'1973-01-04'
		]);
		
		DB::table('participante_curso')->insert([
			'id'=>101,
			'curso_id'=>54,
			'profesor_id'=>75,
			'asistencia'=>true,
			'acreditacion'=>true
		]);
		
		DB::table('_evaluacion_final_curso')->insert([
			'p1_1'=>'100',
			'p1_2'=>'100',
			'p1_3'=>'95',
			'p1_4'=>'100',
			'p1_5'=>'95',
			'p2_1'=>'100',
			'p2_2'=>'100',
			'p2_3'=>'100',
			'p2_4'=>'50',
			'p3_1'=>'100',
			'p3_2'=>'100',
			'p3_3'=>'100',
			'p3_4'=>'50',
			'p7'=>true,
			'p8'=>'["2","null"]',
			'mejor'=>'El compañerismo',
			'sug'=>'Todo bien',
			'p4_1'=>'100',
			'p4_2'=>'100',
			'p4_3'=>'95',
			'p4_4'=>'95',
			'p4_5'=>'95',
			'p4_6'=>'95',
			'p4_7'=>'100',
			'p4_8'=>'100',
			'p4_9'=>'100',
			'p4_10'=>'100',
			'p4_11'=>'100',
            'otros'=>'Otros',
			'conocimiento'=>'["3"]',
			'tematica'=>'tematica',
			'horarios'=>'9:00-13:00',
			'horarioi'=>'13:00-15:00',
			'curso_id'=>54,
			'participante_curso_id'=>101
        ]);
        
		DB::table('profesors')->insert([
			'id'=>76,
			'nombres'=>'Miguel Eduardo',
			'apellido_paterno'=>'Gonzalez',
			'apellido_materno'=>'Cardenas',
			'rfc'=>'GOCM73105GOCM',
			'numero_trabajador' => '121432476',
			'fecha_nacimiento'=>'1973-01-05'
		]);
		
		DB::table('participante_curso')->insert([
			'id'=>102,
			'curso_id'=>54,
			'profesor_id'=>76,
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
			'p2_2'=>'80',
			'p2_3'=>'95',
			'p2_4'=>'50',
			'p3_1'=>'100',
			'p3_2'=>'100',
			'p3_3'=>'100',
			'p3_4'=>'100',
			'p7'=>true,
			'p8'=>'["1","2","null"]',
			'mejor'=>'Programación',
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
			'tematica'=>'tematica',
			'horarios'=>'9:00-13:00',
			'horarioi'=>'13:00-15:00',
			'curso_id'=>54,
			'participante_curso_id'=>102
        ]);
        
        DB::table('profesors')->insert([
			'id'=>77,
			'nombres'=>'Jose Luis',
			'apellido_paterno'=>'Ramirez',
			'apellido_materno'=>'Cruz',
			'rfc'=>'RACJ73106RACJ',
			'numero_trabajador' => '121432477',
			'fecha_nacimiento'=>'1973-01-06'
		]);
		
		DB::table('participante_curso')->insert([
			'id'=>103,
			'curso_id'=>54,
			'profesor_id'=>77,
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
			'p3_4'=>'50',
			'p7'=>true,
			'p8'=>'["2","null"]',
			'mejor'=>'La capacidad del instructor',
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
			'curso_id'=>54,
			'participante_curso_id'=>103
        ]);
        
        DB::table('profesors')->insert([
			'id'=>78,
			'nombres'=>'Rodrigo Alberto',
			'apellido_paterno'=>'Rincon',
			'apellido_materno'=>'Gomez',
			'rfc'=>'RIGR73107RIGR',
			'numero_trabajador' => '121432478',
			'fecha_nacimiento'=>'1973-01-07'
		]);
		
		DB::table('participante_curso')->insert([
			'id'=>104,
			'curso_id'=>54,
			'profesor_id'=>78,
			'asistencia'=>true,
			'acreditacion'=>true
		]);
		
		DB::table('_evaluacion_final_curso')->insert([
			'p1_1'=>'100',
			'p1_2'=>'100',
			'p1_3'=>'100',
			'p1_4'=>'100',
			'p1_5'=>'100',
			'p2_1'=>'80',
			'p2_2'=>'95',
			'p2_3'=>'95',
			'p2_4'=>'80',
			'p3_1'=>'95',
			'p3_2'=>'95',
			'p3_3'=>'95',
			'p3_4'=>'95',
			'p7'=>true,
			'p8'=>'["4","aquí mismo"]',
			'mejor'=>'La interacción',
			'sug'=>'Poner más en alto los pizarrones',
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
			'curso_id'=>54,
			'participante_curso_id'=>104
		]);

        DB::table('profesors')->insert([
			'id'=>79,
			'nombres'=>'Jesus',
			'apellido_paterno'=>'Castro',
			'apellido_materno'=>'Rodriguez',
			'rfc'=>'CARJ73108CARJ',
			'numero_trabajador' => '121432479',
			'fecha_nacimiento'=>'1973-01-08'
		]);
		
		DB::table('participante_curso')->insert([
			'id'=>105,
			'curso_id'=>54,
			'profesor_id'=>79,
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
			'p3_1'=>'0',
			'p3_2'=>'0',
			'p3_3'=>'0',
			'p3_4'=>'0',
			'p7'=>true,
			'p8'=>'["1","null"]',
			'mejor'=>'Todo',
			'sug'=>'Sin',
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
			'tematica'=>'tematica',
			'horarios'=>'9:00-13:00',
			'horarioi'=>'13:00-15:00',
			'curso_id'=>54,
			'participante_curso_id'=>105
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
			'id'=>816,
			'curso_id'=>54,
			'profesor_id'=>283,
			'asistencia'=>true,
			'acreditacion'=>false
		]);
        
        //Curso 5
        DB::table('catalogo_cursos')->insert([
			'id'=> 55,
			'nombre_curso'=>'Redescubriendo a la vida de Michael Faraday',
			'duracion_curso' => '20',
            'coordinacion_id' => 51,
            'tipo' => 'C',
            'institucion' => 'DGAPA',
			'fecha_disenio'=>'2012-12-12',
			'clave_curso'=>'RVMFEYMEE'
		]);
		
		DB::table('cursos')->insert([
			'id'=>55,
			'semestre_anio'=>2020,
			'semestre_pi'=>'1',
			'semestre_si'=>'s',
			'fecha_inicio' => '2019-09-04',
            'fecha_fin' => '2019-09-25',
            'hora_inicio' => '16:00',
            'hora_fin' => '19:00',
            'dias_semana' => 'Lunes,Miércoles',
            'numero_sesiones' => 4,
            'texto_diploma' => 'Texto diploma',
            'costo' => 2000,
            'cupo_maximo' => 16,
            'cupo_minimo' => 8,
            'catalogo_id' => 55,
            'salon_id' => 1
			
        ]);
        
        //Instructores
        DB::table('profesors')->insert([
            'id'=>99,
			'nombres'=>'Martin',
			'apellido_paterno'=>'Barcenas',
			'apellido_materno'=>'Escobar',
			'rfc'=>'BAEM720208BAEM',
			'numero_trabajador' => '121432499',
			'fecha_nacimiento'=>'1972-02-08'
        ]);
		
		DB::table('profesor_curso')->insert([
			'id'=>59,
			'curso_id'=>55,
			'profesor_id'=>99,
        ]);

        DB::table('profesors')->insert([
            'id'=>100,
			'nombres'=>'Rigel',
			'apellido_paterno'=>'Gamez',
			'apellido_materno'=>'Lael',
			'rfc'=>'GALR720209GALR',
			'numero_trabajador' => '1214324100',
			'fecha_nacimiento'=>'1972-02-09'
        ]);

        DB::table('profesor_curso')->insert([
			'id'=>60,
			'curso_id'=>55,
			'profesor_id'=>100,
        ]);

        DB::table('profesors')->insert([
            'id'=>101,
			'nombres'=>'Juan Manuel',
			'apellido_paterno'=>'Gil',
			'apellido_materno'=>'Perez',
			'rfc'=>'GIPJ720210GIPJ',
			'numero_trabajador' => '1214324101',
			'fecha_nacimiento'=>'1972-02-10'
        ]);

        DB::table('profesor_curso')->insert([
			'id'=>61,
			'curso_id'=>55,
			'profesor_id'=>101,
        ]);
        
        //Participantes
        DB::table('profesors')->insert([
			'id'=>514,
			'nombres'=>'Eli Israel',
			'apellido_paterno'=>'Hernandez',
			'apellido_materno'=>'Garcia',
			'rfc'=>'HEGE740201HEGE',
			'numero_trabajador' => '1214324514',
			'fecha_nacimiento'=>'1974-02-01'
		]);
		
		DB::table('participante_curso')->insert([
			'id'=>514,
			'curso_id'=>55,
			'profesor_id'=>514,
			'asistencia'=>false,
			'acreditacion'=>false
        ]);
        
        DB::table('profesors')->insert([
			'id'=>515,
			'nombres'=>'M. Del Carmen',
			'apellido_paterno'=>'Maldonado',
			'apellido_materno'=>'Susano',
			'rfc'=>'MASM740202MASM',
			'numero_trabajador' => '1214324515',
			'fecha_nacimiento'=>'1974-02-02'
		]);
		
		DB::table('participante_curso')->insert([
			'id'=>515,
			'curso_id'=>55,
			'profesor_id'=>515,
			'asistencia'=>false,
			'acreditacion'=>false
        ]);
        
        DB::table('profesors')->insert([
			'id'=>516,
			'nombres'=>'Luis Edgardo',
			'apellido_paterno'=>'Vigueras',
			'apellido_materno'=>'Rueda',
			'rfc'=>'VIRL740203VIRL',
			'numero_trabajador' => '1214324516',
			'fecha_nacimiento'=>'1974-02-03'
		]);
		
		DB::table('participante_curso')->insert([
			'id'=>516,
			'curso_id'=>55,
			'profesor_id'=>516,
			'asistencia'=>false,
			'acreditacion'=>false
		]);
		
		DB::table('profesors')->insert([
			'id'=>80,
			'nombres'=>'Eduardo',
			'apellido_paterno'=>'Bernal',
			'apellido_materno'=>'Vargas',
			'rfc'=>'BEVE74102BEVE',
			'numero_trabajador' => '121432480',
			'fecha_nacimiento'=>'1973-01-04'
		]);
		
		DB::table('participante_curso')->insert([
			'id'=>106,
			'curso_id'=>55,
			'profesor_id'=>80,
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
			'p7'=>true,
			'p8'=>'["2","null"]',
			'mejor'=>'INTERES SOBRE LA VIDA DE ESTE CIENTIFICO',
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
            'p6_1'=>'100',
			'p6_2'=>'100',
			'p6_3'=>'100',
			'p6_4'=>'100',
			'p6_5'=>'100',
			'p6_6'=>'100',
			'p6_7'=>'100',
			'p6_8'=>'100',
			'p6_9'=>'100',
			'p6_10'=>'100',
			'p6_11'=>'100',
            'otros'=>'Otros',
			'conocimiento'=>'["1"]',
			'tematica'=>'tematica',
			'horarios'=>'9:00-13:00',
			'horarioi'=>'13:00-15:00',
			'curso_id'=>55,
			'participante_curso_id'=>106
        ]);

        DB::table('profesors')->insert([
			'id'=>81,
			'nombres'=>'Juan Carlos',
			'apellido_paterno'=>'Cedeño',
			'apellido_materno'=>'Vazquez',
			'rfc'=>'CEVJ740403CEVJ',
			'numero_trabajador' => '121432481',
			'fecha_nacimiento'=>'1973-04-03'
		]);
		
		DB::table('participante_curso')->insert([
			'id'=>107,
			'curso_id'=>55,
			'profesor_id'=>81,
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
			'p2_3'=>'100',
			'p2_4'=>'100',
			'p3_1'=>'100',
			'p3_2'=>'100',
			'p3_3'=>'100',
			'p3_4'=>'100',
			'p7'=>true,
			'p8'=>'["2","null"]',
			'mejor'=>'Conocer más de la vida de Michael Faraday y tratar de leer sobre la vida de otros personajes reconocidos',
			'sug'=>'Bien este tipo de seminarios de más, impartirse en más tiempo',
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
            'p6_1'=>'100',
			'p6_2'=>'100',
			'p6_3'=>'100',
			'p6_4'=>'100',
			'p6_5'=>'100',
			'p6_6'=>'100',
			'p6_7'=>'100',
			'p6_8'=>'100',
			'p6_9'=>'100',
			'p6_10'=>'100',
			'p6_11'=>'100',
            'otros'=>'Otros',
			'conocimiento'=>'["1"]',
			'tematica'=>'tematica',
			'horarios'=>'9:00-13:00',
			'horarioi'=>'13:00-15:00',
			'curso_id'=>55,
			'participante_curso_id'=>107
        ]);
        
        DB::table('profesors')->insert([
			'id'=>82,
			'nombres'=>'Martha Rosa',
			'apellido_paterno'=>'Del Moral',
			'apellido_materno'=>'Nieto',
			'rfc'=>'DENM740404DENM',
			'numero_trabajador' => '121432482',
			'fecha_nacimiento'=>'1973-04-04'
		]);
		
		DB::table('participante_curso')->insert([
			'id'=>108,
			'curso_id'=>55,
			'profesor_id'=>82,
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
			'p7'=>true,
			'p8'=>'["2","null"]',
			'mejor'=>'Conocimiento de un cientifico tan importante como lo fue Michael Faraday las aportaciones que dejo a la fisica y el magnetismo',
			'sug'=>'Muchas gracias por compartir sus conocimientos a los tres instructores',
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
            'p6_1'=>'100',
			'p6_2'=>'100',
			'p6_3'=>'100',
			'p6_4'=>'100',
			'p6_5'=>'100',
			'p6_6'=>'100',
			'p6_7'=>'100',
			'p6_8'=>'100',
			'p6_9'=>'100',
			'p6_10'=>'100',
			'p6_11'=>'100',
            'otros'=>'Otros',
			'conocimiento'=>'["1"]',
			'tematica'=>'tematica',
			'horarios'=>'9:00-13:00',
			'horarioi'=>'13:00-15:00',
			'curso_id'=>55,
			'participante_curso_id'=>108
        ]);

        DB::table('profesors')->insert([
			'id'=>83,
			'nombres'=>'Vianey',
			'apellido_paterno'=>'Franco',
			'apellido_materno'=>'Garcia',
			'rfc'=>'FAGV740405FAGV',
			'numero_trabajador' => '121432483',
			'fecha_nacimiento'=>'1973-04-05'
		]);
		
		DB::table('participante_curso')->insert([
			'id'=>109,
			'curso_id'=>55,
			'profesor_id'=>83,
			'asistencia'=>true,
			'acreditacion'=>true
		]);
		
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
			'p7'=>true,
			'p8'=>'["2","null"]',
			'mejor'=>'Conocimiento histórico de la época de los descubrimientos con los experimentos de Faraday. Aportación a la ciencia y aplicación para los [...]',
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
            'p6_1'=>'100',
			'p6_2'=>'100',
			'p6_3'=>'100',
			'p6_4'=>'100',
			'p6_5'=>'100',
			'p6_6'=>'100',
			'p6_7'=>'100',
			'p6_8'=>'100',
			'p6_9'=>'100',
			'p6_10'=>'100',
			'p6_11'=>'100',
            'otros'=>'Otros',
			'conocimiento'=>'["1"]',
			'tematica'=>'tematica',
			'horarios'=>'9:00-13:00',
			'horarioi'=>'13:00-15:00',
			'curso_id'=>55,
			'participante_curso_id'=>109
        ]);

        DB::table('profesors')->insert([
			'id'=>84,
			'nombres'=>'Raymundo',
			'apellido_paterno'=>'Gaytan',
			'apellido_materno'=>'Perez',
			'rfc'=>'GAPR740406GAPR',
			'numero_trabajador' => '121432484',
			'fecha_nacimiento'=>'1973-04-06'
		]);
		
		DB::table('participante_curso')->insert([
			'id'=>110,
			'curso_id'=>55,
			'profesor_id'=>84,
			'asistencia'=>true,
			'acreditacion'=>true
		]);
		
		DB::table('_evaluacion_final_curso')->insert([
			'p1_1'=>'95',
			'p1_2'=>'95',
			'p1_3'=>'100',
			'p1_4'=>'100',
			'p1_5'=>'95',
			'p2_1'=>'80',
			'p2_2'=>'80',
			'p2_3'=>'95',
			'p2_4'=>'95',
			'p3_1'=>'100',
			'p3_2'=>'100',
			'p3_3'=>'100',
			'p3_4'=>'100',
			'p7'=>true,
			'p8'=>'["2","null"]',
			'mejor'=>'Conocer la vida y obre de Michael Faraday y sus aportaciones científicas',
			'sug'=>'Conocer la vida y obra de otros científicos importantes que cambiaron a la humanidad',
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
            'p6_1'=>'100',
			'p6_2'=>'100',
			'p6_3'=>'100',
			'p6_4'=>'100',
			'p6_5'=>'100',
			'p6_6'=>'100',
			'p6_7'=>'100',
			'p6_8'=>'100',
			'p6_9'=>'100',
			'p6_10'=>'100',
			'p6_11'=>'100',
            'otros'=>'Otros',
			'conocimiento'=>'["1"]',
			'tematica'=>'tematica',
			'horarios'=>'9:00-13:00',
			'horarioi'=>'13:00-15:00',
			'curso_id'=>55,
			'participante_curso_id'=>110
        ]);

        DB::table('profesors')->insert([
			'id'=>85,
			'nombres'=>'Arnulfo',
			'apellido_paterno'=>'Ortiz',
			'apellido_materno'=>'Gomez',
			'rfc'=>'ORGA740407ORGA',
			'numero_trabajador' => '121432485',
			'fecha_nacimiento'=>'1973-04-07'
		]);
		
		DB::table('participante_curso')->insert([
			'id'=>111,
			'curso_id'=>55,
			'profesor_id'=>85,
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
			'p2_2'=>'100',
			'p2_3'=>'100',
			'p2_4'=>'100',
			'p3_1'=>'100',
			'p3_2'=>'100',
			'p3_3'=>'100',
			'p3_4'=>'100',
			'p7'=>true,
			'p8'=>'["2","null"]',
			'mejor'=>'La gran capacidad de observación de Faraday',
			'sug'=>'El tiempo para el curso es el adecuado no lo modifiquen; adecuar el horario para salir a las 18',
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
            'p6_1'=>'100',
			'p6_2'=>'100',
			'p6_3'=>'100',
			'p6_4'=>'100',
			'p6_5'=>'100',
			'p6_6'=>'100',
			'p6_7'=>'100',
			'p6_8'=>'100',
			'p6_9'=>'100',
			'p6_10'=>'100',
			'p6_11'=>'100',
            'otros'=>'Otros',
			'conocimiento'=>'["1"]',
			'tematica'=>'tematica',
			'horarios'=>'9:00-13:00',
			'horarioi'=>'13:00-15:00',
			'curso_id'=>55,
			'participante_curso_id'=>111
        ]);

        DB::table('profesors')->insert([
			'id'=>86,
			'nombres'=>'Antonia del Carmen',
			'apellido_paterno'=>'Perez',
			'apellido_materno'=>'Leon',
			'rfc'=>'PELA740408PELA',
			'numero_trabajador' => '121432486',
			'fecha_nacimiento'=>'1973-04-08'
		]);
		
		DB::table('participante_curso')->insert([
			'id'=>112,
			'curso_id'=>55,
			'profesor_id'=>86,
			'asistencia'=>true,
			'acreditacion'=>true
		]);
		
		DB::table('_evaluacion_final_curso')->insert([
			'p1_1'=>'100',
			'p1_2'=>'100',
			'p1_3'=>'100',
			'p1_4'=>'100',
			'p1_5'=>'95',
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
			'mejor'=>'Aprendizaje y curiosidad por seguir preparandome, en temas actuales',
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
            'p6_1'=>'100',
			'p6_2'=>'100',
			'p6_3'=>'100',
			'p6_4'=>'100',
			'p6_5'=>'100',
			'p6_6'=>'100',
			'p6_7'=>'100',
			'p6_8'=>'100',
			'p6_9'=>'100',
			'p6_10'=>'100',
			'p6_11'=>'100',
            'otros'=>'Otros',
			'conocimiento'=>'["1"]',
			'tematica'=>'tematica',
			'horarios'=>'9:00-13:00',
			'horarioi'=>'13:00-15:00',
			'curso_id'=>55,
			'participante_curso_id'=>112
        ]);
        
        DB::table('profesors')->insert([
			'id'=>87,
			'nombres'=>'Jose Luis',
			'apellido_paterno'=>'Salas',
			'apellido_materno'=>'Corrales',
			'rfc'=>'SACOJ740410SACOJ',
			'numero_trabajador' => '121432487',
			'fecha_nacimiento'=>'1973-04-10'
		]);
		
		DB::table('participante_curso')->insert([
			'id'=>113,
			'curso_id'=>55,
			'profesor_id'=>87,
			'asistencia'=>true,
			'acreditacion'=>true
		]);
		
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
			'p3_1'=>'95',
			'p3_2'=>'100',
			'p3_3'=>'100',
			'p3_4'=>'100',
			'p7'=>true,
			'p8'=>'["2","null"]',
			'mejor'=>'Conocimiento sobre Faraday y varias ideas para aplicar en mi labor docente',
			'sug'=>'Realizar un siguiente taller de elaboración de experimentos',
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
            'p6_1'=>'100',
			'p6_2'=>'100',
			'p6_3'=>'100',
			'p6_4'=>'100',
			'p6_5'=>'100',
			'p6_6'=>'100',
			'p6_7'=>'100',
			'p6_8'=>'100',
			'p6_9'=>'100',
			'p6_10'=>'100',
			'p6_11'=>'100',
            'otros'=>'Otros',
			'conocimiento'=>'["1"]',
			'tematica'=>'tematica',
			'horarios'=>'9:00-13:00',
			'horarioi'=>'13:00-15:00',
			'curso_id'=>55,
			'participante_curso_id'=>113
        ]);

        DB::table('profesors')->insert([
			'id'=>88,
			'nombres'=>'Victor Manuel',
			'apellido_paterno'=>'Sanchez',
			'apellido_materno'=>'Ezquivel',
			'rfc'=>'SAEV740411SAEV',
			'numero_trabajador' => '121432488',
			'fecha_nacimiento'=>'1973-04-11'
		]);
		
		DB::table('participante_curso')->insert([
			'id'=>114,
			'curso_id'=>55,
			'profesor_id'=>88,
			'asistencia'=>true,
			'acreditacion'=>true
		]);
		
		DB::table('_evaluacion_final_curso')->insert([
			'p1_1'=>'95',
			'p1_2'=>'95',
			'p1_3'=>'95',
			'p1_4'=>'95',
			'p1_5'=>'100',
			'p2_1'=>'95',
			'p2_2'=>'80',
			'p2_3'=>'80',
			'p2_4'=>'80',
			'p3_1'=>'95',
			'p3_2'=>'100',
			'p3_3'=>'95',
			'p3_4'=>'95',
			'p7'=>true,
			'p8'=>'["2","null"]',
			'mejor'=>'Conocimiento de la vida de M. Faraday las características que que tenía',
			'sug'=>'Realizar al menos un experimento con su teoría de tal manera que ser entendido por todos os asistentes al seminario',
			'p4_1'=>'95',
			'p4_2'=>'95',
			'p4_3'=>'100',
			'p4_4'=>'95',
			'p4_5'=>'95',
			'p4_6'=>'95',
			'p4_7'=>'100',
			'p4_8'=>'100',
			'p4_9'=>'100',
			'p4_10'=>'100',
            'p4_11'=>'95',
            'p5_1'=>'95',
			'p5_2'=>'95',
			'p5_3'=>'95',
			'p5_4'=>'95',
			'p5_5'=>'95',
			'p5_6'=>'95',
			'p5_7'=>'95',
			'p5_8'=>'100',
			'p5_9'=>'100',
			'p5_10'=>'100',
            'p5_11'=>'100',
            'p6_1'=>'95',
			'p6_2'=>'100',
			'p6_3'=>'100',
			'p6_4'=>'100',
			'p6_5'=>'95',
			'p6_6'=>'95',
			'p6_7'=>'100',
			'p6_8'=>'100',
			'p6_9'=>'100',
			'p6_10'=>'100',
			'p6_11'=>'95',
            'otros'=>'Otros',
			'conocimiento'=>'["1"]',
			'tematica'=>'tematica',
			'horarios'=>'9:00-13:00',
			'horarioi'=>'13:00-15:00',
			'curso_id'=>55,
			'participante_curso_id'=>114
        ]);

        DB::table('profesors')->insert([
			'id'=>89,
			'nombres'=>'Jose Alejandor',
			'apellido_paterno'=>'Sanchez',
			'apellido_materno'=>'Perez',
			'rfc'=>'SAPJ40412SAPJ',
			'numero_trabajador' => '121432489',
			'fecha_nacimiento'=>'1973-04-12'
		]);
		
		DB::table('participante_curso')->insert([
			'id'=>115,
			'curso_id'=>55,
			'profesor_id'=>89,
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
			'p2_3'=>'100',
			'p2_4'=>'100',
			'p3_1'=>'95',
			'p3_2'=>'100',
			'p3_3'=>'95',
			'p3_4'=>'100',
			'p7'=>true,
			'p8'=>'["2","null"]',
			'mejor'=>'experiencia historica, claridad en conceptos, experiencias experimental',
			'sug'=>'Hacer uso del clima de forma intermitente para que la temperatura del aula sea más agradable',
			'p4_1'=>'100',
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
            'p6_1'=>'100',
			'p6_2'=>'100',
			'p6_3'=>'100',
			'p6_4'=>'100',
			'p6_5'=>'100',
			'p6_6'=>'100',
			'p6_7'=>'100',
			'p6_8'=>'100',
			'p6_9'=>'100',
			'p6_10'=>'100',
			'p6_11'=>'100',
            'otros'=>'Otros',
			'conocimiento'=>'["1"]',
			'tematica'=>'tematica',
			'horarios'=>'9:00-13:00',
			'horarioi'=>'13:00-15:00',
			'curso_id'=>55,
			'participante_curso_id'=>115
        ]);
        
        DB::table('profesors')->insert([
			'id'=>90,
			'nombres'=>'Enrique',
			'apellido_paterno'=>'Villalobos',
			'apellido_materno'=>'Perez',
			'rfc'=>'VIPE40413VIPE',
			'numero_trabajador' => '121432490',
			'fecha_nacimiento'=>'1973-04-13'
		]);
		
		DB::table('participante_curso')->insert([
			'id'=>116,
			'curso_id'=>55,
			'profesor_id'=>90,
			'asistencia'=>true,
			'acreditacion'=>true
		]);
		
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
			'p7'=>true,
			'p8'=>'["2","null"]',
			'mejor'=>'Conocimiento, experiencia didáctica y trabajo colaborativo',
			'sug'=>'Felicitar a los participantes',
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
            'p6_1'=>'100',
			'p6_2'=>'100',
			'p6_3'=>'100',
			'p6_4'=>'100',
			'p6_5'=>'100',
			'p6_6'=>'100',
			'p6_7'=>'100',
			'p6_8'=>'100',
			'p6_9'=>'100',
			'p6_10'=>'100',
			'p6_11'=>'100',
            'otros'=>'Otros',
			'conocimiento'=>'["1"]',
			'tematica'=>'tematica',
			'horarios'=>'9:00-13:00',
			'horarioi'=>'13:00-15:00',
			'curso_id'=>55,
			'participante_curso_id'=>116
        ]);

        
        DB::table('profesors')->insert([
			'id'=>91,
			'nombres'=>'Ricardo',
			'apellido_paterno'=>'Yañez',
			'apellido_materno'=>'Valdez',
			'rfc'=>'YAVR40414YAVR',
			'numero_trabajador' => '121432491',
			'fecha_nacimiento'=>'1973-04-14'
		]);
		
		DB::table('participante_curso')->insert([
			'id'=>117,
			'curso_id'=>55,
			'profesor_id'=>91,
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
			'p2_2'=>'95',
			'p2_3'=>'100',
			'p2_4'=>'100',
			'p3_1'=>'100',
			'p3_2'=>'100',
			'p3_3'=>'100',
			'p3_4'=>'100',
			'p7'=>true,
			'p8'=>'["4","correo"]',
			'mejor'=>'Conocer la vida de M. Faraday y que continuaré conociendo más sobre él',
			'sug'=>'todo me gustó',
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
            'p6_1'=>'100',
			'p6_2'=>'100',
			'p6_3'=>'100',
			'p6_4'=>'100',
			'p6_5'=>'100',
			'p6_6'=>'100',
			'p6_7'=>'100',
			'p6_8'=>'100',
			'p6_9'=>'100',
			'p6_10'=>'100',
			'p6_11'=>'100',
            'otros'=>'Otros',
			'conocimiento'=>'["1"]',
			'tematica'=>'tematica',
			'horarios'=>'9:00-13:00',
			'horarioi'=>'13:00-15:00',
			'curso_id'=>55,
			'participante_curso_id'=>117
		]);
		
		//Parte Kenny

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
            'duracion_curso' => '10',
            'coordinacion_id' => 201,
            'tipo' => 'Curso',
            'institucion' => 'DGAPA',
            'fecha_disenio'=>'2012-12-12',
            'clave_curso'=>'DPCU157',
            'objetivo'=>'Al finalizar el curso-taller el profesor será capaz de integrar a su práctica docente algunas aplicaciones móviles que le permitan propiciar el aprendizaje y comunicación con sus estudiantes',
            'dirigido'=>'A los profesores de la Facultad de ingeniería, de la UNAM y externos'
        ]);
        
        DB::table('cursos')->insert([
            'id'=>201,
            'semestre_anio'=>2020,
            'semestre_pi'=>'1',
            'semestre_si'=>'s',
            'fecha_inicio' => '2019-10-03',
            'fecha_fin' => '2019-10-31',
            'hora_inicio' => '8:00',
            'hora_fin' => '10:00',
            'dias_semana' => 'Lunes,Miércoles',
            'numero_sesiones' => 5,
            'texto_diploma' => 'Texto diploma',
            'costo' => 2000,
            'cupo_maximo' => 16,
            'cupo_minimo' => 8,
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

        DB::table('profesor_curso')->insert([
            'id'=>201,
            'curso_id'=>201,
            'profesor_id'=>201
        ]);

        DB::table('profesor_curso')->insert([
            'id'=>202,
            'curso_id'=>201,
            'profesor_id'=>202
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

        
        DB::table('participante_curso')->insert([
            'id'=>202,
            'curso_id'=>201,
            'profesor_id'=>81,
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
        
        DB::table('participante_curso')->insert([
            'id'=>203,
            'curso_id'=>201,
            'profesor_id'=>74,
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
        
        DB::table('participante_curso')->insert([
            'id'=>205,
            'curso_id'=>201,
            'profesor_id'=>75,
            'asistencia'=>false,
            'acreditacion'=>false
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
            'asistencia'=>false,
            'acreditacion'=>false
        ]);

        DB::table('participante_curso')->insert([
            'id'=>211,
            'curso_id'=>201,
            'profesor_id'=>76,
            'asistencia'=>false,
            'acreditacion'=>false
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
            'asistencia'=>false,
            'acreditacion'=>false
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
            'asistencia'=>false,
            'acreditacion'=>false
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
            'asistencia'=>false,
            'acreditacion'=>false
        ]);

        DB::table('profesors')->insert([
            'id'=>217,
            'nombres'=>'Francisco Miguel',
            'apellido_paterno'=>'Perez',
            'apellido_materno'=>'Ramirez',
            'rfc'=>'RAPF0101011F8',
            'curp' =>'RAPF010101MDFMRR09',
            'numero_trabajador' => '123456217',
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
            'numero_trabajador' => '123456218',
            'fecha_nacimiento'=>'1901-01-01'
        ]);
        
        DB::table('participante_curso')->insert([
            'id'=>216,
            'curso_id'=>201,
            'profesor_id'=>218,
            'asistencia'=>false,
            'acreditacion'=>false
        ]);

        DB::table('profesors')->insert([
            'id'=>219,
            'nombres'=>'Aurelio',
            'apellido_paterno'=>'Sanchez',
            'apellido_materno'=>'Vaca',
            'rfc'=>'RASV010101GJ5',
            'curp' =>'RASV010101HDFNNC09',
            'numero_trabajador' => '123456219',
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
            'numero_trabajador' => '123456220',
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
            'asistencia'=>false,
            'acreditacion'=>false
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
            'asistencia'=>false,
            'acreditacion'=>false
        ]);
        
        //Segundo curso
        DB::table('catalogo_cursos')->insert([
            'id'=> 202,
            'nombre_curso'=>'Comunicación asertiva en el aula. Parte 2',
            'duracion_curso' => '20',
            'coordinacion_id' => 202,
            'tipo' => 'C',
            'institucion' => 'DGAPA',
            'fecha_disenio'=>'2012-12-12',
            'clave_curso'=>'DHCU157',
            'dirigido'=>'Profesores de la Facultad de ingeniería',
            'objetivo'=>'El docente conocera, analizará y aplicará los conecptos fundamentales de la personalidad y comunicación asertiva para mejorar sus habilidades docentes. El docente indentificará las conductas disruptivas de los estudiantes con la finalidad de generar un clima [...]'
        ]);
        
        DB::table('cursos')->insert([
            'id'=>202,
            'semestre_anio'=>2020,
            'semestre_pi'=>'1',
            'semestre_si'=>'s',
            'fecha_inicio' => '2019-09-10',
            'fecha_fin' => '2019-10-08',
            'hora_inicio' => '16:00',
            'hora_fin' => '20:00',
            'dias_semana' => 'Lunes,Miércoles',
            'numero_sesiones' => 5,
            'texto_diploma' => 'Texto diploma',
            'costo' => 2000,
            'cupo_maximo' => 15,
            'cupo_minimo' => 5,
            'catalogo_id' => 202,
            'salon_id' => 1
        ]);
        //Instructor

        DB::table('profesor_curso')->insert([
            'id'=>204,
            'curso_id'=>202,
            'profesor_id'=>96
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
            'id'=>225,
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
            'participante_curso_id'=>225
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
            'id'=>226,
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
            'participante_curso_id'=>226
        ]);


        
        DB::table('participante_curso')->insert([
            'id'=>227,
            'curso_id'=>202,
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
            'p1_5'=>'80',
            'p2_1'=>'80',
            'p2_2'=>'80',
            'p2_3'=>'80',
            'p2_4'=>'95',
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
            'participante_curso_id'=>227
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
            'id'=>228,
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
            'participante_curso_id'=>228
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
            'id'=>229,
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
            'mejor'=>'Que me permitió reflexionar a tiempo en mi grupo, debido a los intenso del trabajo, había dejado de lado el grupo, pero afortunaddamente pude retormarlo',
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
            'id'=>230,
            'curso_id'=>202,
            'profesor_id'=>233,
            'asistencia'=>true,
            'acreditacion'=>false
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
            'participante_curso_id'=>230
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
            'id'=>231,
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
            'participante_curso_id'=>231
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
            'id'=>232,
            'curso_id'=>202,
            'profesor_id'=>235,
            'asistencia'=>false,
            'acreditacion'=>false
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
            'id'=>420,
            'curso_id'=>202,
            'profesor_id'=>236,
            'asistencia'=>true,
            'acreditacion'=>false
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
            'participante_curso_id'=>235
        ]);

        //Tercer curso

        DB::table('catalogo_cursos')->insert([
            'id'=> 203,
            'nombre_curso'=>'La gimnasia cerebral para el fortalecimiento del aprendizaje',
            'duracion_curso' => '12',
            'coordinacion_id' => 201,
            'tipo' => 'C',
            'institucion' => 'DGAPA',
            'fecha_disenio'=>'2012-12-12',
            'clave_curso'=>'DPCU159'
        ]);
        
        DB::table('cursos')->insert([
            'id'=>203,
            'semestre_anio'=>2020,
            'semestre_pi'=>'1',
            'semestre_si'=>'s',
            'fecha_inicio' => '2019-11-04',
            'fecha_fin' => '2019-11-08',
            'hora_inicio' => '14:00',
            'hora_fin' => '16:00',
            'dias_semana' => 'Lunes,Miércoles',
            'numero_sesiones' => 3,
            'texto_diploma' => 'Texto diploma',
            'costo' => 2000,
            'cupo_maximo' => 20,
            'cupo_minimo' => 15,
            'catalogo_id' => 203,
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

        DB::table('profesor_curso')->insert([
            'id'=>205,
            'curso_id'=>203,
            'profesor_id'=>227
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
            'asistencia'=>false,
            'acreditacion'=>false
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
            'p3_1'=>'100',
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

        DB::table('participante_curso')->insert([
            'id'=>244,
            'curso_id'=>203,
            'profesor_id'=>505,
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
        
        DB::table('participante_curso')->insert([
            'id'=>251,
            'curso_id'=>203,
            'profesor_id'=>221,
            'asistencia'=>false,
            'acreditacion'=>false
        ]);

        DB::table('profesors')->insert([
            'id'=>256,
            'nombres'=>'Bertha Lucila',
            'apellido_paterno'=>'Velazquez',
            'apellido_materno'=>'Camacho',
            'rfc'=>'VECB0101015E4',
            'curp' =>'VECB010101MDFLMR02',
            'numero_trabajador' => '123456256',
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
            'clave_curso'=>'VNADIDGAPA'
        ]);
        
        DB::table('cursos')->insert([
            'id'=>204,
            'semestre_anio'=>2020,
            'semestre_pi'=>'1',
            'semestre_si'=>'s',
            'fecha_inicio' => '2019-10-04',
            'fecha_fin' => '2019-11-08',
            'hora_inicio' => '10:00',
            'hora_fin' => '14:00',
            'dias_semana' => 'Lunes,Miércoles',
            'numero_sesiones' => 5,
            'texto_diploma' => 'Texto diploma',
            'costo' => 2000,
            'cupo_maximo' => 15,
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

        DB::table('profesor_curso')->insert([
            'id'=>207,
            'curso_id'=>204,
            'profesor_id'=>257
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
        
        DB::table('participante_curso')->insert([
            'id'=>254,
            'curso_id'=>204,
            'profesor_id'=>98,
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
            'sug'=>'-',
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
        
        DB::table('participante_curso')->insert([
            'id'=>259,
            'curso_id'=>204,
            'profesor_id'=>67,
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
        
        DB::table('participante_curso')->insert([
            'id'=>262,
            'curso_id'=>204,
            'profesor_id'=>69,
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

        DB::table('profesors')->insert([
            'id'=>605,
            'nombres'=>'Victor Manuel',
            'apellido_paterno'=>'Sanchez',
            'apellido_materno'=>'Ezquivel',
            'rfc'=>'SAEV010101I18',
            'curp' =>'SAEV010101HDFSL06',
            'numero_trabajador' => '123456605',
            'fecha_nacimiento'=>'1901-01-01'
        ]);
        
        DB::table('participante_curso')->insert([
            'id'=>605,
            'curso_id'=>204,
            'profesor_id'=>605,
            'asistencia'=>true,
            'acreditacion'=>true
        ]);
        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
            'p1_1'=>'95',
            'p1_2'=>'80',
            'p1_3'=>'80',
            'p1_4'=>'95',
            'p1_5'=>'95',
            'p2_1'=>'80',
            'p2_2'=>'80',
            'p2_3'=>'80',
            'p2_4'=>'95',
            'p3_1'=>'80',
            'p3_2'=>'95',
            'p3_3'=>'80',
            'p3_4'=>'80',
            'p7'=>1,
            'p8'=>'["2"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'Resaltar conceptos que había olvidad y recuperar la actitud que se debe tener siempre presenta al trabajar con seres humanos',
            'sug'=>'Proporcional el material que se presenta en las sesiones de trabajo antes de sder presentada pasra así cmprender y entender los temas de forma clara',
            'p4_1'=>'95',
            'p4_2'=>'95',
            'p4_3'=>'95',
            'p4_4'=>'80',
            'p4_5'=>'80',
            'p4_6'=>'95',
            'p4_7'=>'80',
            'p4_8'=>'95',
            'p4_9'=>'95',
            'p4_10'=>'100',
            'p4_11'=>'95',
            'otros'=>'Otros',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>204,
            'participante_curso_id'=>605
        ]);

        DB::table('profesors')->insert([
            'id'=>606,
            'nombres'=>'Elvia Angelica',
            'apellido_paterno'=>'Torres',
            'apellido_materno'=>'Rojas',
            'rfc'=>'TORE010101I18',
            'curp' =>'TORE010101MDFSL06',
            'numero_trabajador' => '123456606',
            'fecha_nacimiento'=>'1901-01-01'
        ]);
        
        DB::table('participante_curso')->insert([
            'id'=>606,
            'curso_id'=>204,
            'profesor_id'=>606,
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
            'mejor'=>'La planeación, el manejo del grupo y el contenido del curso',
            'sug'=>'La sesión 5 me pareció que no estaba muy enfocada en el tema del curso recomendaría otro ripo de dinámica',
            'p4_1'=>'100',
            'p4_2'=>'100',
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
            'curso_id'=>204,
            'participante_curso_id'=>606
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
            'fecha_inicio' => '2019-09-17',
            'fecha_fin' => '2019-09-19',
            'hora_inicio' => '10:00',
            'hora_fin' => '13:00',
            'dias_semana' => 'Lunes,Miércoles',
            'numero_sesiones' => 2,
            'texto_diploma' => 'Texto diploma',
            'costo' => 2000,
            'cupo_maximo' => 20,
            'cupo_minimo' => 10,
            'catalogo_id' => 205,
            'salon_id' => 1
        ]);
        //Instructores
        DB::table('profesor_curso')->insert([
            'id'=>208,
            'curso_id'=>205,
            'profesor_id'=>94
        ]);

        DB::table('profesor_curso')->insert([
            'id'=>209,
            'curso_id'=>205,
            'profesor_id'=>96
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
            'curso_id'=>205,
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
            'curso_id'=>205,
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
            'curso_id'=>205,
            'participante_curso_id'=>268
        ]);
        
        DB::table('participante_curso')->insert([
            'id'=>269,
            'curso_id'=>205,
            'profesor_id'=>210,
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
            'curso_id'=>205,
            'participante_curso_id'=>270
        ]);
        
        DB::table('participante_curso')->insert([
            'id'=>271,
            'curso_id'=>205,
            'profesor_id'=>63,
            'asistencia'=>false,
            'acreditacion'=>false
        ]);

        DB::table('profesors')->insert([
            'id'=>277,
            'nombres'=>'Patricia',
            'apellido_paterno'=>'Guerrero',
            'apellido_materno'=>'Diaz',
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
            'p3_3'=>'100',
            'p3_4'=>'100',
            'p7'=>1,
            'p8'=>'["3"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'Que me llevo las rúbricas como un nuevo mecanismo de evaluación. No tenía una iddea definida de cómo se utilizaban, sin embargo ahora ya me queda claro.',
            'sug'=>'-',
            'p4_1'=>'100',
            'p4_2'=>'100',
            'p4_3'=>'100',
            'p4_4'=>'100',
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
            'curso_id'=>205,
            'participante_curso_id'=>272
        ]);
        
        DB::table('participante_curso')->insert([
            'id'=>273,
            'curso_id'=>205,
            'profesor_id'=>65,
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
            'curso_id'=>205,
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
            'acreditacion'=>false
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
            'profesor_id'=>69,
            'asistencia'=>false,
            'acreditacion'=>false
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
        
        DB::table('participante_curso')->insert([
            'id'=>279,
            'curso_id'=>205,
            'profesor_id'=>283,
            'asistencia'=>true,
            'acreditacion'=>false
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
            'asistencia'=>false,
            'acreditacion'=>false
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
        
        DB::table('participante_curso')->insert([
            'id'=>284,
            'curso_id'=>205,
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
        
        DB::table('participante_curso')->insert([
            'id'=>285,
            'curso_id'=>205,
            'profesor_id'=>226,
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
        
        DB::table('catalogo_cursos')->insert([
            'id'=> 206,
            'nombre_curso'=>'Manejo básico de R aplicado a la enseñanza de las matemáticas',
            'duracion_curso' => '20',
            'coordinacion_id' => 50,
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
            'fecha_inicio' => '2019-10-03',
            'fecha_fin' => '2019-10-31',
            'hora_inicio' => '10:00',
            'hora_fin' => '14:00',
            'dias_semana' => 'Lunes,Miércoles',
            'numero_sesiones' => 5,
            'texto_diploma' => 'Texto diploma',
            'costo' => 2000,
            'cupo_maximo' => 16,
            'cupo_minimo' => 8,
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

        DB::table('profesor_curso')->insert([
            'id'=>210,
            'profesor_id'=>290,
            'curso_id'=>206
        ]);

        //Participantes
		DB::table('participante_curso')->insert([
			'id'=>286,
			'curso_id'=>206,
			'profesor_id'=>75,
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

        DB::table('participante_curso')->insert([
            'id'=>290,
            'curso_id'=>206,
            'profesor_id'=>76,
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

        DB::table('participante_curso')->insert([
            'id'=>292,
            'curso_id'=>206,
            'profesor_id'=>506,
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
            'profesor_id'=>300
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
            'profesor_id'=>301
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
                    'p2_1'=>'100',
                    'p2_2'=>'100',
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
            'clave_curso'=>'MLEFDHDGAPA'
        ]);
        
        DB::table('cursos')->insert([
            'id'=>207,
            'semestre_anio'=>2020,
            'semestre_pi'=>'1',
            'semestre_si'=>'s',
            'fecha_inicio' => '2019-08-05',
            'fecha_fin' => '2019-08-19',
            'hora_inicio' => '08:00',
            'hora_fin' => '12:00',
            'dias_semana' => 'Lunes,Miércoles',
            'numero_sesiones' => 5,
            'texto_diploma' => 'Texto diploma',
            'costo' => 2000,
            'cupo_maximo' => 19,
            'cupo_minimo' => 15,
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

        DB::table('profesor_curso')->insert([
            'id'=>211,
            'profesor_id'=>303,
            'curso_id'=>207
        ]);

        //Participante
        DB::table('participante_curso')->insert([
            'id'=>301,
            'curso_id'=>207,
            'profesor_id'=>60,
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

       
        DB::table('participante_curso')->insert([
                    'id'=>302,
                    'curso_id'=>207,
                    'profesor_id'=>61,
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

        DB::table('participante_curso')->insert([
                            'id'=>303,
                            'curso_id'=>207,
                            'profesor_id'=>306,
                            'asistencia'=>false,
                            'acreditacion'=>false
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
                            'acreditacion'=>false
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
        DB::table('participante_curso')->insert([
                                    'id'=>305,
                                    'curso_id'=>207,
                                    'profesor_id'=>62,
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
    'asistencia'=>false,
    'acreditacion'=>false
    ]);
        DB::table('participante_curso')->insert([
    'id'=>307,
    'curso_id'=>207,
    'profesor_id'=>63,
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

        DB::table('participante_curso')->insert([
    'id'=>308,
    'curso_id'=>207,
    'profesor_id'=>64,
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
        'profesor_id'=>65,
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

        DB::table('participante_curso')->insert([
        'id'=>310,
        'curso_id'=>207,
        'profesor_id'=>66,
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
        'profesor_id'=>67,
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
            'acreditacion'=>false
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

        DB::table('participante_curso')->insert([
                'id'=>313,
                'curso_id'=>207,
                'profesor_id'=>68,
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
                    'profesor_id'=>69,
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
                    'participante_curso_id'=>314
                    ]);
        
        DB::table('participante_curso')->insert([
                        'id'=>315,
                        'curso_id'=>207,
                        'profesor_id'=>70,
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

        DB::table('participante_curso')->insert([
                            'id'=>316,
                            'curso_id'=>207,
                            'profesor_id'=>71,
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
                                'acreditacion'=>false
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
                                    'asistencia'=>false,
                                    'acreditacion'=>false
                                ]);

        DB::table('participante_curso')->insert([
                                    'id'=>319,
                                    'curso_id'=>207,
                                    'profesor_id'=>72,
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
                                    'mejor'=>'El trabajo colaborativo',
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
                                        'fecha_inicio' => '2019-08-29',
                                        'fecha_fin' => '2019-09-04',
                                        'hora_inicio' => '08:00',
                                        'hora_fin' => '12:00',
                                        'dias_semana' => 'Lunes,Miércoles',
                                        'numero_sesiones' => 5,
                                        'texto_diploma' => 'Texto diploma',
                                        'costo' => 2000,
                                        'cupo_maximo' => 19,
                                        'cupo_minimo' => 15,
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
        
        DB::table('profesor_curso')->insert([
            'id'=>212,
            'profesor_id'=>318,
            'curso_id'=>208
        ]);
        
        //Participantes
    
        DB::table('participante_curso')->insert([
            'id'=>320,
            'curso_id'=>208,
            'profesor_id'=>60,
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
                    'curso_id'=>208,
                    'participante_curso_id'=>320
                ]);

        DB::table('participante_curso')->insert([
                    'id'=>321,
                    'curso_id'=>208,
                    'profesor_id'=>61,
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
                            'acreditacion'=>false
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
                                    'profesor_id'=>62,
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
                                            'curso_id'=>208,
                                            'participante_curso_id'=>323
                                        ]);

        DB::table('participante_curso')->insert([
                                            'id'=>324,
                                            'curso_id'=>208,
                                            'profesor_id'=>63,
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
                                                    'profesor_id'=>64,
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
                                                            'profesor_id'=>65,
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
                                                                    'profesor_id'=>66,
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
                                                                            'profesor_id'=>67,
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
                                                                                    'profesor_id'=>68,
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
                                                                                            'profesor_id'=>69,
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
                                                                                                    'profesor_id'=>70,
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
                                                                                                            'profesor_id'=>71,
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
                                                                                                                    'acreditacion'=>false
                                                                                                                ]);
                                                                                                                DB::table('participante_curso')->insert([
                                                                                                                    'id'=>334,
                                                                                                                    'curso_id'=>208,
                                                                                                                    'profesor_id'=>253,
                                                                                                                    'asistencia'=>false,
                                                                                                                    'acreditacion'=>false
                                                                                                                ]);
                                                                                                                DB::table('participante_curso')->insert([
                                                                                                                    'id'=>335,
                                                                                                                    'curso_id'=>208,
                                                                                                                    'profesor_id'=>72,
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
            'fecha_inicio' => '2019-09-09',
            'fecha_fin' => '2019-09-25',
            'hora_inicio' => '08:00',
            'hora_fin' => '12:00',
            'dias_semana' => 'Lunes,Miércoles',
            'numero_sesiones' => 5,
            'texto_diploma' => 'Texto diploma',
            'costo' => 2000,
            'cupo_maximo' => 19,
            'cupo_minimo' => 15,
            'catalogo_id' => 209,
            'salon_id' => 1
        ]);

        DB::table('profesors')->insert([
            'id'=>350,
            'nombres'=>'Ingrid Marissa',
            'apellido_paterno'=>'Cabrrera',
            'apellido_materno'=>'Zamora',
            'rfc'=>'CAZI820101CAZI',
            'numero_trabajador' => '12345350',
            'fecha_nacimiento'=>'1982-01-01'
        ]);

        DB::table('profesor_curso')->insert([
            'id'=>220,
            'curso_id'=>209,
            'profesor_id'=>350
        ]);

        DB::table('participante_curso')->insert([
            'id'=>336,
            'curso_id'=>209,
            'profesor_id'=>60,
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
            'p3_1'=>'95',
            'p3_2'=>'95',
            'p3_3'=>'95',
            'p3_4'=>'95',
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
            'profesor_id'=>61,
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
            'participante_curso_id'=>337
        ]);
        DB::table('participante_curso')->insert([
            'id'=>338,
            'curso_id'=>209,
            'profesor_id'=>62,
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
            'profesor_id'=>63,
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
            'profesor_id'=>64,
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
            'p4_11'=>'80',
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
            'profesor_id'=>65,
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
            'sug'=>'-',
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
            'profesor_id'=>66,
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
            'profesor_id'=>67,
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
            'profesor_id'=>68,
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
            'profesor_id'=>69,
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
            'curso_id'=>209,
            'participante_curso_id'=>345
        ]);
        DB::table('participante_curso')->insert([
            'id'=>346,
            'curso_id'=>209,
            'profesor_id'=>70,
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
            'profesor_id'=>71,
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
            'profesor_id'=>72,
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
            'sug'=>'-',
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

        DB::table('participante_curso')->insert([
            'id'=>511,
            'profesor_id'=>306,
            'curso_id'=>54
        ]);

        DB::table('participante_curso')->insert([
            'id'=>517,
            'profesor_id'=>514,
            'curso_id'=>54
        ]);

        //Cuarto documento: 1_RespuestasEvalCursosTodasAreas_2020-1s_2
        //Primer curso

        DB::table('coordinacions')->insert([
            'id' => 302,
            'nombre_coordinacion' => 'Área Ingeniería Civil',
            'abreviatura' => 'DIC',
            'coordinador' => 'Rodrigo Rodriguez',
            'grado' => 'M.E.M.',
            'usuario' => 'rodrigo',
            'password' => Hash::make('1234'),
            'comentarios' => '-'
        ]);

        DB::table('catalogo_cursos')->insert([
            'id'=> 2010,
            'nombre_curso'=>'Tendencias actuales en el diseño y construcción de túneles',
            'duracion_curso' => '20',
            'coordinacion_id' => 302,
            'tipo' => 'C',
            'institucion' => 'DGAPA',
            'fecha_disenio'=>'2012-12-12',
            'clave_curso'=>'TTGAPA'
        ]);
        
        DB::table('cursos')->insert([
            'id'=>300,
            'semestre_anio'=>2020,
            'semestre_pi'=>'1',
            'semestre_si'=>'i',
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
            'catalogo_id' => 2010,
            'salon_id' => 1
        ]);

        //Instructor
        DB::table('profesors')->insert([
            'id'=>607,
            'nombres'=>'Valentin',
            'apellido_paterno'=>'Castellanos',
            'apellido_materno'=>'Pedroza',
            'rfc'=>'CAPV010101I18',
            'curp' =>'CAPV010101HDFSL06',
            'numero_trabajador' => '123456607',
            'fecha_nacimiento'=>'1901-01-01'
        ]);

        DB::table('profesor_curso')->insert([
            'id'=>300,
            'curso_id'=>300,
            'profesor_id'=>607
        ]);
        //Participantes
        DB::table('profesors')->insert([
            'id'=>608,
            'nombres'=>'Eduardo',
            'apellido_paterno'=>'Alvarez',
            'apellido_materno'=>'Cazares',
            'rfc'=>'ALCE010101N24',
            'curp' =>'ALCE010101HDFNRN09',
            'numero_trabajador' => '123456608',
            'fecha_nacimiento'=>'1901-01-01'
        ]);
        
        DB::table('participante_curso')->insert([
            'id'=>800,
            'curso_id'=>300,
            'profesor_id'=>608,
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
            'p8'=>'["1"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'Los temas aportados, la aportación de los especialistas',
            'sug'=>'-',
            'p4_1'=>'100',
            'p4_2'=>'95',
            'p4_3'=>'100',
            'p4_4'=>'95',
            'p4_5'=>'100',
            'p4_6'=>'80',
            'p4_7'=>'80',
            'p4_8'=>'100',
            'p4_9'=>'100',
            'p4_10'=>'100',
            'p4_11'=>'100',
            'otros'=>'Mecánica de suelo',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>300,
            'participante_curso_id'=>800
        ]);

        DB::table('profesors')->insert([
			'id'=>609,
			'nombres'=>'Jorge Luis',
			'apellido_paterno'=>'Caballero',
			'apellido_materno'=>'Aguilar',
			'rfc'=>'CAAJ720103GOSJ',
			'numero_trabajador' => '1214324609',
			'fecha_nacimiento'=>'1972-01-03'
		]);
		
		DB::table('participante_curso')->insert([
			'id'=>801,
			'curso_id'=>300,
			'profesor_id'=>609,
			'asistencia'=>true,
			'acreditacion'=>true
        ]);
		
		DB::table('participante_curso')->insert([
			'id'=>802,
			'curso_id'=>300,
			'profesor_id'=>309,
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
            'mejor'=>'La variedad de especialistas que compartieron sus experiencias en grandes túneles de México',
            'sug'=>'El único riesgo al presentar varios ponentes es darle seguimiento al orden y contenido en las presentaciones en el curso, va que alguinos ponentes en la [...]',
            'p4_1'=>'100',
            'p4_2'=>'95',
            'p4_3'=>'100',
            'p4_4'=>'95',
            'p4_5'=>'100',
            'p4_6'=>'80',
            'p4_7'=>'80',
            'p4_8'=>'100',
            'p4_9'=>'100',
            'p4_10'=>'100',
            'p4_11'=>'100',
            'otros'=>'Civil CAD',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>300,
            'participante_curso_id'=>802
        ]);

        DB::table('profesors')->insert([
			'id'=>610,
			'nombres'=>'Gabriela',
			'apellido_paterno'=>'García',
			'apellido_materno'=>'Juárez',
			'rfc'=>'GAGJ720103GOSJ',
			'numero_trabajador' => '1214324610',
			'fecha_nacimiento'=>'1972-01-03'
		]);
		
		DB::table('participante_curso')->insert([
			'id'=>803,
			'curso_id'=>300,
			'profesor_id'=>610,
			'asistencia'=>true,
			'acreditacion'=>true
        ]);

        DB::table('profesors')->insert([
			'id'=>611,
			'nombres'=>'Elias',
			'apellido_paterno'=>'Granados',
			'apellido_materno'=>'Gonzalez',
			'rfc'=>'GAGE720103GOSJ',
			'numero_trabajador' => '1214324611',
			'fecha_nacimiento'=>'1972-01-03'
		]);
		
		DB::table('participante_curso')->insert([
			'id'=>804,
			'curso_id'=>300,
			'profesor_id'=>611,
			'asistencia'=>true,
			'acreditacion'=>true
        ]);

        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
            'p1_1'=>'95',
            'p1_2'=>'100',
            'p1_3'=>'100',
            'p1_4'=>'100',
            'p1_5'=>'100',
            'p2_1'=>'100',
            'p2_2'=>'95',
            'p2_3'=>'80',
            'p2_4'=>'80',
            'p3_1'=>'95',
            'p3_2'=>'100',
            'p3_3'=>'100',
            'p3_4'=>'100',
            'p7'=>1,
            'p8'=>'["4","AAPAUNAM"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'Tema de construcción de túneles y los casos',
            'sug'=>'Enviar el temario con anticipación a las clases para estudiarlas antes de las sesiones',
            'p4_1'=>'95',
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
            'otros'=>'Minería',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>300,
            'participante_curso_id'=>804
        ]);

        DB::table('profesors')->insert([
			'id'=>612,
			'nombres'=>'Joseph Salvador',
			'apellido_paterno'=>'Guevara',
			'apellido_materno'=>'Flores',
			'rfc'=>'GUF720103GOSJ',
			'numero_trabajador' => '1214324612',
			'fecha_nacimiento'=>'1972-01-03'
		]);
		
		DB::table('participante_curso')->insert([
			'id'=>805,
			'curso_id'=>300,
			'profesor_id'=>612,
			'asistencia'=>true,
			'acreditacion'=>true
        ]);

        DB::table('profesors')->insert([
			'id'=>613,
			'nombres'=>'Efren Marcelino',
			'apellido_paterno'=>'Gutierrez',
			'apellido_materno'=>'Lopez',
			'rfc'=>'GULE720103GULE',
			'numero_trabajador' => '1214324613',
			'fecha_nacimiento'=>'1972-01-03'
		]);
		
		DB::table('participante_curso')->insert([
			'id'=>806,
			'curso_id'=>300,
			'profesor_id'=>613,
			'asistencia'=>true,
			'acreditacion'=>true
        ]);

        //100 (E), 95 (MB), 80 (Bu), 60 (Re), 50 (Ma)
        DB::table('_evaluacion_final_curso')->insert([
            'p1_1'=>'100',
            'p1_2'=>'100',
            'p1_3'=>'95',
            'p1_4'=>'95',
            'p1_5'=>'100',
            'p2_1'=>'80',
            'p2_2'=>'80',
            'p2_3'=>'95',
            'p2_4'=>'100',
            'p3_1'=>'95',
            'p3_2'=>'100',
            'p3_3'=>'95',
            'p3_4'=>'95',
            'p7'=>1,
            'p8'=>'["1","null"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'Todos los temas',
            'sug'=>'-',
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
            'otros'=>'Temas de Ingeniería Ambiental',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>300,
            'participante_curso_id'=>806
        ]);

        DB::table('profesors')->insert([
			'id'=>614,
			'nombres'=>'Hector Alfredo',
			'apellido_paterno'=>'Legorreta',
			'apellido_materno'=>'Cuevas',
			'rfc'=>'LECH20103GOSJ',
			'numero_trabajador' => '1214324614',
			'fecha_nacimiento'=>'1972-01-03'
		]);
		
		DB::table('participante_curso')->insert([
			'id'=>807,
			'curso_id'=>300,
			'profesor_id'=>614,
			'asistencia'=>true,
			'acreditacion'=>true
        ]);

        DB::table('profesors')->insert([
			'id'=>615,
			'nombres'=>'Guillermo',
			'apellido_paterno'=>'Llanos',
			'apellido_materno'=>'Bonilla',
			'rfc'=>'LABG20103GOSJ',
			'numero_trabajador' => '1214324615',
			'fecha_nacimiento'=>'1972-01-03'
		]);
		
		DB::table('participante_curso')->insert([
			'id'=>808,
			'curso_id'=>300,
			'profesor_id'=>615,
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
            'p8'=>'["1","null"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'La experiencia de muy alto nivel de todos los expositores',
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
            'otros'=>'Construccion-Diseño',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>300,
            'participante_curso_id'=>808
        ]);
        
        DB::table('profesors')->insert([
			'id'=>616,
			'nombres'=>'Javier',
			'apellido_paterno'=>'Mancera',
			'apellido_materno'=>'Alejandez',
			'rfc'=>'MAAJ20103MAAJ',
			'numero_trabajador' => '1214324616',
			'fecha_nacimiento'=>'1972-01-03'
		]);
		
		DB::table('participante_curso')->insert([
			'id'=>809,
			'curso_id'=>300,
			'profesor_id'=>616,
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
            'p8'=>'["2","null"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'La experiencia de cada uno de los conferencistas',
            'sug'=>'Ninguna, que se repita el curso o se amplie, fue enriquecedor',
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
            'otros'=>'Programación',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>300,
            'participante_curso_id'=>809
        ]);
        
        DB::table('profesors')->insert([
			'id'=>617,
			'nombres'=>'Jose Manuel',
			'apellido_paterno'=>'Piedras',
			'apellido_materno'=>'Salgado',
			'rfc'=>'PISJ20103PISJ',
			'numero_trabajador' => '1214324617',
			'fecha_nacimiento'=>'1972-01-03'
		]);
		
		DB::table('participante_curso')->insert([
			'id'=>810,
			'curso_id'=>300,
			'profesor_id'=>617,
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
            'p2_3'=>'100',
            'p2_4'=>'100',
            'p3_1'=>'100',
            'p3_2'=>'100',
            'p3_3'=>'100',
            'p3_4'=>'100',
            'p7'=>1,
            'p8'=>'["2","null"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'Las distintas experiencias de los ingenieros expertos',
            'sug'=>'Visita de campo en un túnel para aterrizar conceptos y métodos constructores',
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
            'otros'=>'Geotecnia, Aplicaciones en Ingeniería Civil',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>300,
            'participante_curso_id'=>810
        ]);

        DB::table('profesors')->insert([
			'id'=>618,
			'nombres'=>'Israel',
			'apellido_paterno'=>'Ortega',
			'apellido_materno'=>'Casillas',
			'rfc'=>'OOCIJ20103OOCI',
			'numero_trabajador' => '1214324618',
			'fecha_nacimiento'=>'1972-01-03'
        ]);
        
        DB::table('participante_curso')->insert([
			'id'=>811,
			'curso_id'=>300,
			'profesor_id'=>618,
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
            'p8'=>'["2","null"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'La calidad de conocimientod de cada instrucor fue de gran calidad',
            'sug'=>'Prácticas en campo para eficientar el curso',
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
            'otros'=>'Cursos de explosivos',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>300,
            'participante_curso_id'=>811
        ]);

        DB::table('profesors')->insert([
			'id'=>619,
			'nombres'=>'Felix',
			'apellido_paterno'=>'Serralde',
			'apellido_materno'=>'Gonzalez',
			'rfc'=>'SEGF20103SEGF',
			'numero_trabajador' => '1214324619',
			'fecha_nacimiento'=>'1972-01-03'
        ]);
        
        DB::table('participante_curso')->insert([
			'id'=>812,
			'curso_id'=>300,
			'profesor_id'=>619,
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
            'p3_3'=>'100',
            'p3_4'=>'100',
            'p7'=>1,
            'p8'=>'["2","null"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'En general el curso fue de una excelente calidad',
            'sug'=>'Definitivamente se deben promover mas cursos de este tipo y calidad',
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
            'otros'=>'-',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'9:00-13:00',
            'horarioi'=>'13:00-15:00',
            'curso_id'=>300,
            'participante_curso_id'=>812
        ]);

        DB::table('profesors')->insert([
			'id'=>620,
			'nombres'=>'Miguel Angel',
			'apellido_paterno'=>'Ruiseñor',
			'apellido_materno'=>'Soto',
			'rfc'=>'RUSM20103RUSM',
			'numero_trabajador' => '1214324620',
			'fecha_nacimiento'=>'1972-01-03'
        ]);
        
        DB::table('participante_curso')->insert([
			'id'=>813,
			'curso_id'=>300,
			'profesor_id'=>620,
			'asistencia'=>true,
			'acreditacion'=>true
        ]);

        DB::table('profesors')->insert([
			'id'=>621,
			'nombres'=>'Luis Arturo',
			'apellido_paterno'=>'Tapia',
			'apellido_materno'=>'Crespo',
			'rfc'=>'TACL20103TACL',
			'numero_trabajador' => '1214324621',
			'fecha_nacimiento'=>'1972-01-03'
        ]);
        
        DB::table('participante_curso')->insert([
			'id'=>814,
			'curso_id'=>300,
			'profesor_id'=>621,
			'asistencia'=>true,
			'acreditacion'=>true
        ]);

        DB::table('profesors')->insert([
			'id'=>622,
			'nombres'=>'Juan Luis',
			'apellido_paterno'=>'Umaña',
			'apellido_materno'=>'Romero',
			'rfc'=>'UURJ20103UURK',
			'numero_trabajador' => '1214324622',
			'fecha_nacimiento'=>'1972-01-03'
        ]);
        
        DB::table('participante_curso')->insert([
			'id'=>815,
			'curso_id'=>300,
			'profesor_id'=>622,
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
            'p3_3'=>'100',
            'p3_4'=>'100',
            'p7'=>1,
            'p8'=>'["2","null"]', //Internet 1, Publicidad 2, Jefes 3, Otros 4
            'mejor'=>'Experiencia en la práctica profesional',
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
            'otros'=>'Instrumentos en obras civiles',
            'conocimiento'=>'["1"]',
            'tematica'=>'tematica',
            'horarios'=>'16:00-20:00',
            'horarioi'=>'16:00-20:00',
            'curso_id'=>300,
            'participante_curso_id'=>815
        ]);

    }
}
