<?php

namespace App\Http\Controllers;

use App\Models\Instansi;
use Illuminate\Http\Request;

class InstansiController extends Controller
{
    public function index()
    {
        $data = Instansi::all();
        return view('instansi.index', ["instansis" => $data]);
    }

    public function create()
    {
        return view('instansi.create');
    }

    public function store()
    {
        request()->validate(['nama' => 'required', 'desc' => 'nullable']);
        Instansi::create(request()->all());
        return redirect("/instansi");
    }

    public function edit(Instansi $instansi)
    {
        return view('instansi.edit', ["instansi" => $instansi]);
    }

    public function update(Instansi $instansi)
    {
        request()->validate(['nama' => 'required', 'desc' => 'nullable']);
        $instansi->update(request()->all());
        return redirect("/instansi");
    }
}
