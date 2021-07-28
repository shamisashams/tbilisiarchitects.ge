<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Certificate;
use Illuminate\Http\Request;

class CertificateController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $certificates = Certificate::where(['status' => true,'type' => 1])->get();

        $fireCertificates = Certificate::where(['status' => true,'type' => 2])->get();
        return view('client.pages.certificate.index', [
            'certificates' => $certificates,
            'fireCertificates' => $fireCertificates
        ]);
    }

    public function video()
    {
        return view('client.pages.video.index', []);

    }
}
