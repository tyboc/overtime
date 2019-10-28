<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class TablaMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menus= [
            ['0','Administrador', '#', '0', 'fa-gear'],
            ['0','Menu', 'admin/menu', '1', 'fa-navicon'],
            ['0','Menu-Rol', 'admin/menu/rol', '2', 'fa-server'],
            ['0','Usuario', '#', '3', 'fa-users']
        ];
        
        foreach($menus as list($menu_id, $nombre, $url, $orden, $icono)){
            DB::table('menu')->insert([
                'menu_id' => $menu_id,
                'nombre' => $nombre,
                'url' => $url,
                'orden' => $orden,
                'icono' => $icono,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }unset($valor);
        
        $mars= [
            ['1','1'],
            ['1','4'],
            ['1','3'],
            ['1','2']
        ];

        foreach($mars as list($rol_id, $menu_id)){
            DB::table('menu_rol')->insert([
                'menu_id' => $menu_id,
                'rol_id' => $rol_id,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }unset($valor);
    }
}
