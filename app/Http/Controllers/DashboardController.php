<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
   public function index()
   {
       return "Ini halaman dashboard";
   }

   public function show($nama){
       return "Hello nama saya ".$nama;
   }
}
