<?php

namespace Database\Seeders;

use App\Models\Auth\TokenByApp;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TokensByAppTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TokenByApp::create([
            'slug' => 'react-app',
            'nombre' => 'REACT APPCLIENT - KANTO',
            'token' => 'WWnkA6pAeNEY4Bc4gqfEJwqMTmbFmY9Q',//Str::random(32),
            'secret' => Str::random(128),
        ]);
    }
}
