<?php

namespace App\Http\Controllers;

use App\Http\Controllers;

class ProcessingController extends Controller
{
    public function index()
    {
        // Obtém a fila de importação.
        $queue = \Illuminate\Support\Facades\Queue::get('import');

        // Processa a fila.
        foreach ($queue as $job) {
            $job->fire();
        }

        return view('processing');
    }
}
