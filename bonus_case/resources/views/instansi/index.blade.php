@extends('layout')
@section('content')
    <div class="flex justify-center pt-10">
        <div class="bg-slate-100 p-10">
            <h2 class="text-2xl font-bold">Data instansi</h2>
            <a href="/instansi/create">Create</a>
            <table class="border">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Desc</th>
                        <th></th>
                    </tr>
                    @php $no = 1; @endphp
                    @foreach ($instansis as $instansi)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td class="min-w-[100px]">{{$instansi->nama}}</td>
                            <td class="min-w-[100px]">{{$instansi->desc}}</td>
                            <td>
                                <a href="/instansi/{{ $instansi->id }}/edit">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </thead>
            </table>
        </div>
    </div>
