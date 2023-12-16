@extends('layouts.layout')

@section('content')
    <section id="leader">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3 class="text-center text-white text-title">Ketua Fosti 2022/2023</h3>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row wrap-voting">
                <div class="card leader-card shadow-lg " data-aos="zoom-in" data-aos-duration="800">
                    <div class="card-body">
                        <div class="d-flex justify-content-center mb-3">
                            <img src="{{ asset('/storage/' . $leader->photo) }}" alt="profile" class="choose-image">
                        </div>
                        <h5 class="card-title text-center">{{ $leader->name }}</h5>
                        <hr>
                        <h5 class="text-center">{{ $leader->user_count }}</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="container list">
            <div class="row">
                <div class="card shadow" data-aos="fade-left" data-aos-duration="800">
                    <div class="card-body">
                        <h5 class="card-title">List Leader</h5>                       
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
                                        @foreach ($leaders as $ld)
                                            <tr class="text-center">
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $ld->name }}</td>
                                                <td>{{ $ld->user_count }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
