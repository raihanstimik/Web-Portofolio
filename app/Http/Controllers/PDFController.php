<?php

namespace App\Http\Controllers;

use App\Models\data_table;
use App\Models\form;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function showIdentitas()
    {
        $identitas = form::all();
        $item = form::all(); // Mengambil semua data dari model Identitas
        return view('hasil.index', compact('identitas','item'));
    }
    public function unduhPDF()
    {
        $identitas = form::all();
        $item = form::all(); // Mengambil semua data dari model Identitas
        $pdf = Pdf::loadView('dashboard/hasil/index', compact('item','identitas'));

        return $pdf->download('portofolio.pdf');
    }
}
