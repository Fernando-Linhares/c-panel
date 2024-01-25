<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Module;

class ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Module::create([
            'name' => 'Modulos',
            'icon' => 'content_paste',
            'link' => ''//route('module.index')
        ]);

        Module::create([
            'name' => 'Configuração',
            'icon' => 'settings',
            'link' => ''//route('settings.index')
        ]);

        Module::create([
            'name' => 'Posts',
            'icon' => 'library_books',
            'link' => ''//route('posts.index')
        ]);

        Module::create([
            'name' => 'Mozaico',
            'icon' => 'dashboard',
            'link' => ''//route('mozaic.index')
        ]);

        Module::create([
            'name' => 'Carrossel',
            'icon' => 'style',
            'link' => ''//route('carousel.index')
        ]);

        Module::create([
            'name' => 'Usuários',
            'icon' => 'person',
            'link' => ''//route('carousel.index')
        ]);

        Module::create([
            'name' => 'Temas',
            'icon' => 'view_compact',
            'link' => ''//route('carousel.index')
        ]);

        Module::create([
            'name' => 'Arquivos',
            'icon' => 'storage',
            'link' => ''//route('carousel.index')
        ]);
    }
}
