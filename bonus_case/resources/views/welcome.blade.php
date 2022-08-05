@extends('layout')
@section('content')
    <div class="flex justify-center pt-10">
        <div class="bg-slate-100 p-10">
            <h2 class="text-2xl font-bold">Selamat datang</h2>
            @auth
                <a href="/instansi">Data instansi</a>
                <a href="/logout">Logout</a>
            @else
                <a href="/login">Login</a>
                <a href="/register">Register</a>
            @endauth
        </div>
    </div>
