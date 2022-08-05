@extends('layout')
@section('content')
    <div class="flex justify-center pt-10">
        <div class="bg-slate-100 p-10">
            <form action="/instansi/{{ $instansi->id }}" method="post">
                @method('PUT')
                @csrf
                Nama : <br>
                @error('nama')
                    <p class="text-xs text-red-400">{{ $message }}</p>
                @enderror
                <input type="text" name="nama" class="border px-2" value="{{ $instansi->nama }}"><br>
                Deskripsi : <br>
                @error('desc')
                    <p class="text-xs text-red-400">{{ $message }}</p>
                @enderror
                <input type="text" name="desc" class="border px-2" value="{{ $instansi->desc }}"> <br>

                <button class="border mt-2 px-1">Simpan</button>
            </form>
        </div>
    </div>
