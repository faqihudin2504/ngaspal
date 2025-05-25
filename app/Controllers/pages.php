<?php
namespace App\Controllers;

class Pages extends BaseController
{
    public function dashboard()      { return view('dashboard/index'); }
    public function profile()        { return view('pages/profile'); }
    public function gallery()        { return view('pages/gallery'); }
    public function hubungiKami()    { return view('pages/hubungi_kami'); }
    public function artikel()        { return view('pages/artikel'); }
    public function pemesanan()      { return view('pages/pemesanan'); }
    public function bantuan()        { return view('pages/bantuan'); }
    public function keranjang()      { return view('pages/keranjang'); }
}
