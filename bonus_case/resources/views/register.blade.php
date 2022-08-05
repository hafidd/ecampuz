@extends('layout')
@section('content')
    <div class="flex justify-center pt-10">
        <div class="bg-slate-100 p-10">
            <form action="/user/register" method="post">
                @csrf
                Username : <br>
                @error('username')
                    <p class="text-xs text-red-400">{{ $message }}</p>
                @enderror
                <input type="text" name="username" class="border px-2"><br>
                Password : <br>
                @error('password')
                    <p class="text-xs text-red-400">{{ $message }}</p>
                @enderror
                <input type="password" name="password" class="border px-2"> <br>
                Konfirmasi Password : <br>
                @error('password_confirmation')
                    <p class="text-xs text-red-400">{{ $message }}</p>
                @enderror
                <input type="password" name="password_confirmation" class="border px-2"> <br>
                <button class="border mt-2 px-1">Register</button>
            </form>
        </div>
    </div>
