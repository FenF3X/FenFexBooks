<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Login; 
class LoginUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usuario = new Login();
        $usuario->usuario = 'admin';
        $usuario->password = bcrypt('admin');
        $usuario->save();
    }
}
