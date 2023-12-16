@if (session(''))
@endif
@extends('layouts.layout')

@section('content')
    <section id="login">
        <div class="container">
            <div class="row wrap-login">
                <div class="col d-flex justify-content-center">
                    <div class="card shadow-lg" data-aos="fade-up" data-aos-duration="1000">
                        <div class="card-body">
                            <div class="d-flex justify-content-center my-4">
                                <img src="{{ asset('image/logo.png') }}" alt="logo" class="image-login">
                            </div>
                            <form action="{{ route('loginAuth') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email address :</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Masukkan Email">
                                </div>
                                <label for="password" class="form-label">Password :</label>
                                <div class="input-group mb-3">
                                    <input type="password" class="form-control" id="password" name="password"
                                        placeholder="Masukkan Password">
                                    <i class="bi bi-eye d-none see input-group-text" onclick="myFunction()"></i>
                                    <i class="bi bi-eye-slash dont-see input-group-text" onclick="myFunction()"></i>
                                </div>
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-green fw-bold">
                                        Login <i class="bi bi-box-arrow-in-right"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        function myFunction() {
            var x = document.getElementById("password");
            const see = document.querySelector('.see');
            const dont = document.querySelector('.dont-see');
            if (x.type === "password") {
                x.type = "text";
                dont.classList.toggle('d-none');
                see.classList.toggle('d-none');
            } else {
                x.type = "password";
                dont.classList.toggle('d-none');
                see.classList.toggle('d-none');
            }
        }
    </script>
@endsection
