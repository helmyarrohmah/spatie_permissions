<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesController extends Controller
{
    public function show_user()
    {
        $this->authorize('show users');
        dd("Anda berhasil masuk karena memiliki permission 'show users'");
    }

    public function delete_user()
    {
        dd("Anda berhasil masuk karena memiliki permission 'delete users'");
    }
}
