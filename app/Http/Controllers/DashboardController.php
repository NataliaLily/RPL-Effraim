<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
class DashboardController extends Controller
{
    //
    public function index()
    {
        return view('backend.dashboard');
    }
    public function simpan(request $request ): RedirectResponse
    {
        dd("data yang anda simpan", $request->all());
    }
}
