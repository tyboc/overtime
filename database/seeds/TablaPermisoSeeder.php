<?php

//use App\Models\Permiso;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class TablaPermisoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permisos= [
            ['Crear editor','crear_editor'],
            ['Crear capturista','crear_capturista'],
            ['Crear invitado','crear_invitado']
        ];
        foreach($permisos as list($nombre, $slug)){
            DB::table('permiso')->insert([
                'nombre' => $nombre,
                'slug' => $slug,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }unset($valor);
        
        
    }
}
