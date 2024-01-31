<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function apotek()
    {
        return view('apotek.index');
    }

    public function peta()
    {
        return view('peta.index');
    }

    public function detail()
    {
        return view('detail.index');
    }


    // Data apotek
    public function detailApotekAisyah2()
    {
        return view('detail.apotekaisyah2');
    }
    public function detailapotekbertuahhangtuah()
    {
        return view('detail.apotekbertuahhangtuah');
    }
    public function detailcendanafarma()
    {
        return view('detail.cendanafarma');
    }
    public function detailseptika()
    {
        return view('detail.septika');
    }
    public function detailfachri()
    {
        return view('detail.fachri');
    }
    public function detailinsanfarma()
    {
        return view('detail.insanfarma');
    }
    public function detailkasuarifarma()
    {
        return view('detail.kasuarifarma');
    }
    public function detailkeluargacabang3()
    {
        return view('detail.keluargacabang3');
    }
    public function detailkeluargacabang9()
    {
        return view('detail.keluargacabang9');
    }
    public function detailkeluargahangtuah()
    {
        return view('detail.keluargahangtuah');
    }
    public function detailrahman()
    {
        return view('detail.rahman');
    }
    public function detailstifarmandiri()
    {
        return view('detail.stifarmandiri');
    }
    public function detailzhafira()
    {
        return view('detail.zhafira');
    }
    public function detailkimiafarmahangtuah()
    {
        return view('detail.kimiafarmahangtuah');
    }
    public function detailkulimfarma()
    {
        return view('detail.kulimfarma');
    }
    public function detailalita()
    {
        return view('detail.alita');
    }
    public function detailsekuntum()
    {
        return view('detail.sekuntum');
    }
    public function detailkeluarga24()
    {
        return view('detail.keluarga24');
    }
    public function detailkimiafarma614()
    {
        return view('detail.kimiafarma614');
    }
    public function detailneofarma()
    {
        return view('detail.neofarma');
    }
    public function detailtamansari()
    {
        return view('detail.tamansari');
    }
    // end Data Apotek
    
    public function dokumentasi(){
        return view('dokumentasi.index');
    }
}
