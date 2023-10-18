@extends('layouts.app')

@section('content')
<body style=" background-image: url('/img/background.jpg'); /* Specify the path to your background image */
            background-size: cover; /* Scale the image to cover the entire body */
            background-repeat: no-repeat; /* Prevent image repetition */
            background-attachment: fixed; /* Fix the image in place */">
    <form action="/" method="get">
        <div class="">
            <section class="mulai_regist vh-100">
                <div class="container py-5 h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                            <div class="card shadow-2-strong">
                                <div class="card_form card-body text-center">
                                    <h3 class="mb-0">Register</h3>
                                    <h5 class="mb-3 text-muted">Printershop customer account</h5>
                                    <div class="regist">
                                        <div class="form-outline mb-4">
                                            <input type="username" id="typePasswordX-2" class="form-control form-control-lg" placeholder="Your Username" required />
                                        </div>
                                        <div class="form-outline mb-4">
                                            <input type="email" id="typeEmailX-2" class="form-control form-control-lg" placeholder="Email" required />
                                        </div>
                                        <div class="form-outline mb-4">
                                            <input type="password" id="typePasswordX-2" class="form-control form-control-lg" placeholder="Password" required />
                                        </div>
                                        <button class="btn btn-primary btn-lg btn-block w-100" type="submit">Regist</button> <br>
                                        <div class="btn_link blockquote-footer">
                                            <a href="login"> Kembali ke halaman login</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </form>
    <!--   
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
-->
</body>

@endsection