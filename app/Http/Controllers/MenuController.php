<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function __construct()
    {
        $this->modelMenu = new Menu();
    }

    public function index()
    {
        $stmtDataMenu = $this->modelMenu->getDataProfile();
        // return $stmtData;
        return view('admin.content.menu')
            ->with('stmtDataMenu', $stmtDataMenu);
    }

    public function menuPost(Request $request)
    {
        dd($request);
        // Menghapus titik dari input harga
        $harga = str_replace('.', '', $request->input('harga'));

        $stmtDataMenuInput = [
            'id_user' => $request->id_user,
            'harga' => $harga,
        ];

        $stmtDataMenuInput = $this->modelMenu->insertDataMenu($stmtDataMenuInput);

        session()->flash('success', 'Data berhasil disimpan!');
        return redirect()->back();
    }
}
