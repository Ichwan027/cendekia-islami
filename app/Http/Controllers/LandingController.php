<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $title = 'PP Cendekia Islami | Beranda';
        
        return view('landing.index', ['title' => $title]);
    }
    
    public function ttg()
    {
        $title = 'PP Cendekia Islami | Tentang Kami';
        
        return view('landing.tentang', ['title' => $title]);
    }
    
    public function profil()
    {
        $title = 'PP Cendekia Islami | Profil';
        
        return view('landing.profil', ['title' => $title]);
    }
    
    public function kontak()
    {
        $title = 'PP Cendekia Islami | Kontak';
        
        return view('landing.kontak', ['title' => $title]);
    }
}
