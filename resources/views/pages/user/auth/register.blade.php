@extends('layouts.appLogReg')

@section('Register')
    <section class="h-100 gradient-form" style=" background-color: rgb(201, 197, 197)">
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
                                        <h4 class="mt-4 pb-1">Net<span style="color: rgba(206, 245, 61, 0.8)">Insight</span></h4>
                                        <p class="small mb-3" style="text-align: center;">
                                            <b>Part of <a href="https://www.instagram.com/netcitysurabaya/"
                                                    style="color: rgba(206, 245, 61, 0.8);">NetCity</a></b>
                                        </p>
                                    </div>

                                    <form action="" method="POST">
                                        @csrf
                                        <p>Please registration to your account</p>
                                        @if ($errors->has('name'))
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                        <div class="form-outline mb-4">
                                            <input type="text" name="name" id="form2Example22" class="form-control"
                                                placeholder="Full Name" />
                                        </div>
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                        <div class="form-outline mb-4">
                                            <input type="email" name="email"id="form2Example11" class="form-control"
                                                placeholder="Email" />
                                        </div>
                                        @if ($errors->has('no_telp'))
                                            <span class="text-danger">{{ $errors->first('no_telp') }}</span>
                                        @endif
                                        <div class="form-outline mb-4">
                                            <input type="text" name="no_telp" id="form2Example22" class="form-control"
                                                placeholder="Phone Number" />
                                            {{-- <label class="form-label" for="form2Example22">No telp</label> --}}
                                        </div>
                                        @if ($errors->has('password'))
                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                        @endif
                                        <div class="form-outline mb-4">
                                            <input type="password" name="password" id="form2Example22" class="form-control"
                                                placeholder="Password" />
                                        </div>
                                        @if ($errors->has('password_confirmation'))
                                            <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                                        @endif
                                        <div class="form-outline mb-4">
                                            <input type="password" name=" password_confirmation"id="form2Example22"
                                                class="form-control" placeholder="Password Confirmation" />
                                        </div>

                                        <div class="text-center pt-1 pb-1">
                                            <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3"
                                                type="submit">Register</button>
                                        </div>
                                    </form>
                                    <hr>
                                    <div class="text-center pt-1 mb-5 pb-1">
                                        <a href="{{ route('login') }}" class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3"
                                            type="submit">Back</a>
                                    </div>
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
