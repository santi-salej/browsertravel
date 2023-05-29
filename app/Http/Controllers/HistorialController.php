<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BrowsertravelModel;

class HistorialController extends Controller
{
    public function index()
    {
        $datos = BrowsertravelModel::paginate(10);

        return view('historial', ['datos' => $datos]);
    }
}