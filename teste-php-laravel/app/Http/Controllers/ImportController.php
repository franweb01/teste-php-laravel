<?php

namespace App\Http\Controllers;

use App\Http\Controllers;

class ImportController extends Controller
{
    public function index()
    {
        return view('import');
    }

    public function store()
    {
        $file = request()->file('file');

        $documents = json_decode($file->getContent(), true);

        foreach ($documents as $document) {
            // Add a importação à fila.
        }

        return redirect()->route('import.index');
    }
}

