<?php

namespace App\Controllers;

class Pages extends BaseController
{
  public function index()
  {
    $data = [
      'title' => "Viky Kurniawan/Home Page."
    ];
    return view('pages/home', $data);
  }
  public function about($nama = 'Viky Kurniawan', $umur = 20)
  {
    $data = [
      'title' => "Viky Kurniawan/About",
      'nama' => $nama,
      'umur' => $umur
    ];
    return view('pages/about', $data);
  }
  public function contact()
  {
    $data = [
      'title' => "Viky Kurniawan/Contact",
      'alamat' => [
        [
          'tipe' => 'Rumah',
          'alamat' => 'Jl. Manalagi Ardipura II',
          'kota' => 'Jayapura'
        ],
        [
          'tipe' => 'Universitas Pasundan',
          'alamat' => 'Jl. Dr Setiabudi No.193',
          'kota' => 'Bandung'
        ]
      ]
    ];
    return view('pages/contact', $data);
  }
}
