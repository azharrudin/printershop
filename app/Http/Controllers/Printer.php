<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
class Printer extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function fetch()
    {
        // Retrieve records from the database using the model
        $x = DB::table("tb_printer")->select("*")->get();
        
        return DataTables::of($x)->addColumn("action", function(){
            return "<input class='btn btn-small btn-danger' value='hapus' style='width: 80px;'>&nbsp;<input class='btn btn-small btn-warning' value='edit' style='width: 80px;'>";
        })->make(true);

        // Return a view with the data
    }
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        // Retrieve records from the database using the model
       
        
        // Return a view with the data
        return view("customer.login");
    }
    public function catalog()
    {
        // Retrieve records from the database using the model
       
        
        // Return a view with the data
        return view("catalog");
    }

    public function regist()
    {
        // Retrieve records from the database using the model
       
        
        // Return a view with the data
        return view("customer.regist");
    }

    public function home()
    {
        // Retrieve records from the database using the model
       
        
        // Return a view with the data
        return view("admin.home");
    }

    public function kontrol_barang()
    {
        // Retrieve records from the database using the model
       
        
        // Return a view with the data
        return view("admin.kontrol_barang");
    }

}
