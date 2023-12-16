@extends('layouts.layout')

@section('content')
    <section id="input-leader">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3 class="text-white text-center text-title" data-aos="fade">Input Leader</h3>
                </div>
            </div>
        </div>
        <div class="container mt-4">
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                    <div class="card shadow-lg" data-aos="fade-right" data-aos-duration="800">
                        <div class="card-body">
                            <h5 class="card-title mb-4">Form Input</h5>
                            <form action="{{ route('inputLeader') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label">Nama Leader :</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Masukkan Nama">
                                </div>
                                <div class="mb-3">
                                    <label for="rationalization" class="form-label">Rasionalisasi :</label>
                                    <textarea class="form-control" name="rationalization" id="rationalization" name="vission_mission" rows="3"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="photo" class="form-label">Foto</label>
                                    <img class="img-preview img-fluid mb-3 " width="30%">
                                    <input type="file" class="form-control" onchange="previewImage()" name="photo"
                                        id="photo" rows="3">
                                </div>
                                <button type="submit" class="btn btn-green fw-bold">Save <i
                                        class="bi bi-download"></i></button>

                                <a href="{{ route('logout') }}" class="btn  btn-danger fw-bold">Logout <i
                                        class="bi bi-box-arrow-right"></i></a>
                            </form>
                            <br>
                            <form action="{{ route('send') }}" method="POST">
                                @csrf
                                <button type="submit" class="btn  btn-primary fw-bold" class="bi bi-box-arrow-right">Send
                                    All Email</button>
                            </form>
                            <div class="row mt-3">
                                <div class="col">
                                    <a href="{{ route('leader') }}" class="btn btn-info text-white d-grid fw-bold">Hasil</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow" data-aos="fade-left" data-aos-duration="800">
                        <div class="card-body">
                            <h5 class="card-title">List Leader</h5>
                            @if ($leader)
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr class="text-center">
                                                <th scope="col">No</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Jumlah</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($leader as $ld)
                                                <tr class="text-center">
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $ld->name }}</td>
                                                    <td>{{ $ld->user_count }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            @else
                                <h6>Leader not Found</h6>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


{{-- <form action="{{ route('inputLeader') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="text" name="name" id="name" placeholder="nama">
    <input type="text" name="vision_mission" id="vision_mission" placeholder="vision_mission">
    <button type="submit"> Insert </button>
</form>

@if ($leader)
<table border=1>
    <tr>
        <th>Nama</th>
        <th>Visi Misi</th>
        <th>Jumlah</th>
    </tr>
    @foreach ($leader as $ld)
        <tr>
            <td>{{$ld->name}}</td>
            <td>{{$ld->vision_mission}}</td>
            <td>{{$ld->user_count}}</td>
        </tr>
    @endforeach
</table>  
@else
leader not found
@endif --}}
