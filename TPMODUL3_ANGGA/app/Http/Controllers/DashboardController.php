<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        date_default_timezone_set('Asia/Jakarta');

        $nama = 'Feriangga Arkaan Prayetno';
        $jam = date('H:i:s');
        $tanggal = $this->getTanggal();

        $hour = date('H');
        if ($hour >= 5 && $hour < 12) {
            $salam = 'Selamat Pagi';
        } elseif ($hour >= 12 && $hour < 15) {
            $salam = 'Selamat Siang';
        } elseif ($hour >= 15 && $hour < 18) {
            $salam = 'Selamat Sore';
        } else {
            $salam = 'Selamat Malam';
        }

        return view('dashboard', [
            'salam' => $salam,
            'nama' => $nama,
            'jam' => $jam,
            'tanggal' => $tanggal
        ]);
    }

    private function getTanggal()
    {
        return date('d-m-Y');
    }
}
