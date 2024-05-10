<?php

namespace App\Http\Controllers;

use App\Mail\OrderEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class kirimEmailController extends Controller
{
    public function index()
    {
        // Ganti dengan alamat email perusahaan Anda
        $companyEmail = ['sarababisa.mjb@gmail.com', 'khaedir09star@gmail.com'];

        Mail::to($companyEmail)->send(new OrderEmail());
        return '<h1>Pendaftaran anda sudah berhasil 👏🏻 <br> Silahkan tunggu admin kami menghubungi lewat Whatsapp ke nomor yang anda daftarkan.</h1>';
    }
}
