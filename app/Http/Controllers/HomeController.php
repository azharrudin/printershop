<?php

namespace App\Http\Controllers;

use Carbon\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.home');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function add_item()
    {
        return view('admin.tambah_barang');
    }
    /**
     * Show the application dashboard.
     */
    public function edit_item(): \Illuminate\Contracts\Support\Renderable
    {
        return view('admin.edit_barang');
    }
    /**
     * For controlling API
     * @return \Illuminate\Contracts\Support\Renderable
     * 
     */
    public function api_add_item()
    {
        // Retrieve records from the database using the model
        $imagePath = $request->file('foto')->store('uploads', 'public');
        $x = DB::table("tb_printer")->insert([
            'namaprinter' => 'Printer Name',
            'harga' => 500,
            'spesifikasi' => 'Printer specifications',
            'foto' => getClientOriginalName();,
        ]);
    }
}
