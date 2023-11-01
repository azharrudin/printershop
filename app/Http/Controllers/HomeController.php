<?php

namespace App\Http\Controllers;

use Carbon\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    public function add(Request $request)
    {
        // Retrieve records from the database using the model
        $imagePath = $request->file('foto')->store('uploads', 'public');
        $x = DB::table("tb_printer")->insert([
            'idprinter' => rand(10,100),
            'namaprinter' => $request->namaprinter,
            'spesifikasi' => 'Printer specifications',
            'stok' => $request->stok,
            'harga' => intval($request->harga),
            'foto' => $request->file('foto')->getClientOriginalName(),
        ]);
        return 'yeyi berhasil';
    }


}
