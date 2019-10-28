<?php
use Illuminate\Database\Seeder;
class UsuarioAdministradorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuario')->insert([
            'matricula' => '99032894',
            'plaza' => '5876',
            'apellidoP' => 'AGUILAR',
            'apellidoM' => 'HERNÁNDEZ',
            'nombre' => 'FRANCISCO VALENTIN',
            'categoria' => 'AUX UNIV DE OFICINAS 80',
            'horario' => '08:00 A 16:00',
            'descansos' => 'SAB Y DOM',
            'turno' => 'MATUTINO',
            'password' => bcrypt('123')            

        ]);
        DB::table('usuario_rol')->insert([
            'rol_id' => 1,
            'usuario_id' => 1,
            'estado' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}