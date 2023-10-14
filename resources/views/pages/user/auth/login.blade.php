@extends('layouts.appLogReg')

@section('Login')
    <section class="h-100 gradient-form" style="background-color: rgb(201, 197, 197)">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4">
                                    <div class="text-center">
                                        <div class="logo-circle">
                                            <img src="images/LogoNetCity.png" alt="logo">
                                        </div>
                                        <h4 class="mt-4 pb-1">Net<span style="color: rgba(206, 245, 61, 0.8)">Insight</span>
                                        </h4>
                                        <p class="small mb-3" style="text-align: center;">
                                            <b>Part of <a href="https://www.instagram.com/netcitysurabaya/"
                                                    style="color: rgba(206, 245, 61, 0.8);">NetCity</a></b>
                                        </p>
                                    </div>

                                    <form action="" method="POST">
                                        @csrf
                                        <p class="font-weight-bold">Please login to your account</p>

                                        @if (session('success') == 'Registrasi berhasil!')
                                            <div class="alert alert-success"> Registrasi Berhasil!</div>
                                            <script>
                                                // Menampilkan pesan selama 5 detik
                                                document.addEventListener('DOMContentLoaded', function () {
                                                    var successMessage = document.getElementById('successMessage');

                                                    if (successMessage) {
                                                        successMessage.style.display = 'block'; // Menampilkan pesan
                                                        setTimeout(function () {
                                                            successMessage.style.display = 'none'; // Menghilangkan pesan setelah 5 detik
                                                        }, 10000); // 5000 milidetik = 5 detik
                                                    }
                                                });
                                            </script>
                                        @endif

                                        @if ($errors->any())
                                            @foreach ($errors->all() as $items)
                                                <div class="alert alert-danger">{{ $items }}</div>
                                            @endforeach
                                            <script>
                                                setTimeout(function() {
                                                    var errorMessages = document.querySelectorAll('.alert.alert-danger');
                                                    errorMessages.forEach(function(message) {
                                                        message.style.display = 'none';
                                                    });
                                                }, 10000); // 5000 milidetik atau 5 detik
                                            </script>
                                        @endif

                                        <div class="form-outline mb-4">
                                            <input type="email" name="email" id="form2Example11" class="form-control"
                                                placeholder=" Email address" />

                                        </div>
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif

                                        <div class="form-outline mb-4">
                                            <input type="password" name="password" id="form2Example22" class="form-control"
                                                placeholder="Password" />
                                        </div>

                                        <div class="text-center pt-1 mb-5 pb-1">
                                            <button class="btn btn-primary btn-block fa-lg mb-3"
                                                type="submit">Login</button>
                                            {{-- <a class="text-muted" href="#!">Forgot password?</a> --}}
                                        </div>
                                        <hr>
                                        <div class="d-flex align-items-center justify-content-center pb-4">
                                            <p class="mb-0 me-2">Don't have an account?</p>
                                            <a href="{{ route('register') }}"><button type="button"
                                                    class="btn btn-outline-danger ms-2 ">Create Account</button></a>
                                        </div>

                                    </form>

                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                    <h4 class="mb-4">What is NetCity 2.0</h4>
                                    <p class="small mb-0">Networking With Creative Industry is a series of event consisting
                                        of internationl seminars or workshops that invite mentors form the creative
                                        industries as wll as creative exhibitions that aim to introduce the potential of the
                                        creative industries</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
