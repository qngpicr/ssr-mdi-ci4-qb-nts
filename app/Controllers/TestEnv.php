<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class TestEnv extends Controller
{
    public function index()
    {
        // .env에서 읽은 값 출력
        echo env('database.mysql.hostname');
    }
}
