<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>ipersona / {{ trans('second_login.sign_in') }}</title>
  <link rel="stylesheet" href="{{ asset('new_assets/login/style.css ') }}">
  <link rel="stylesheet" href="{{ asset('new_assets/login/font-6/css/all.css ') }}">
  <link rel="stylesheet" type="text/css" href="slide navbar style.css">
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('new_assets/login/bootstrap/bootstrap.min.css ') }}">
  <link rel="shortcut icon" href="{{ asset('new_assets/img/icon.ico') }}">
</head>
<body>
    <style>
        @media (max-width:767px) {
            .select_country {
                margin-left: 79px;
                width: 97px !important;
            }

            .input_45 {
                width: 45% !important;
            }

            .left_45 {
                margin-left: -52px !important;
            }
        }
    </style>

<div class="main">
    <input type="checkbox" id="chk" aria-hidden="true">
    <div class="signup">
        <div class="container">
            <div class="row">
                <form action="{{ $route }}" method="POST">
                    @csrf
                    <label class="chk_two" for="chk"
                        aria-hidden="true">{{ trans('second_login.registration') }}</label>
                    <div class="container">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="name">
                                        @error('name')
                                            <p class="we text-light">{{ $message }}</p>
                                        @enderror
                                    </label>
                                    <input type="text" value="{{ old('name') }}" class="form-control" 
                                        id="name" name="name" placeholder="{{ trans('second_login.name') }}">
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label for="email">
                                        @error('email')
                                        <p class="we text-light">{{ $message }}</p>
                                        @enderror
                                    </label>
                                    <input type="text" class="form-control" value="{{ old('email') }}"
                                        id="email" name="email" placeholder="{{ trans('second_login.email') }}">
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="form-group">
                                    <label for="gender">
                                        @error('gender')
                                        <p class="we text-light">{{ $message }}</p>
                                        @enderror
                                    </label>
                                    <select name="gender" class="form-control" id="gender">
                                        <option selected>{{ trans('second_login.gender') }}</option>
                                        <option value="male"> {{ trans('second_login.male') }}</option>
                                        <option value="female"> {{ trans('second_login.female') }}</option>
                                      </select>
                                </div>
                            </div>


                            <div class="col-4">
                                <div class="form-group">
                                    <label for="phone">
                                        @error('phone')
                                        <p class="we text-light">{{ $message }}</p>
                                        @enderror
                                    </label>
                                    <input type="text" name="phone" class="form-control" value="{{ old('phone') }}"
                                        id="phone"
                                        placeholder="{{ trans('second_login.phone') }}">
                                </div>
                            </div>


                            <div class="col-4">
                                <div class="form-group">
                                    <label for="country">
                                        @error('residence')
                                        <p class="we text-light">{{ $message }}</p>
                                        @enderror
                                    </label>
                                    <select   name="residence" class=" form-control" id="country">
                                        <option selected>{{ trans('second_login.country') }}</option>
                                        <option value="{{ trans('second_login.egypt') }}">
                                            {{ trans('second_login.egypt') }}</option>
                                        <option value="{{ trans('second_login.morocco') }}">
                                            {{ trans('second_login.morocco') }}</option>
                                        <option value="{{ trans('second_login.kuwait') }}">
                                            {{ trans('second_login.kuwait') }}</option>
                                      </select>
                                </div>
                            </div>


                            <div class="col-6">
                                <div class="form-group">
                                    <label for="password">
                                        @error('password')
                                        <p class="we text-light">{{ $message }}</p>
                                        @enderror
                                    </label>
                                    <input name="password" type="password" class="form-control" value=""
                                        id="password"
                                        placeholder="{{ trans('second_login.password') }}">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="password_confirmation">
                                     
                                    </label>
                                    <input type="password" class="form-control" value=""
                                        id="password_confirmation"
                                        name="password_confirmation" placeholder="{{ trans('second_login.confirm_password') }}">
                                </div>
                            </div>


                        </div>
                    </div>

                    <button class="m-auto my-4 rounded" type="submit">{{ trans('second_login.registration') }}</button>
                </form>
            </div>
        </div>
    </div>

    <div class="login">
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <label class="chk_two" for="chk" aria-hidden="true">{{ trans('second_login.sign_in') }}</label>

            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="email">
                                @error('login_email')
                                <p class="we text-danger">{{ $message }}</p>
                                @enderror
                            </label>
                            <input type="email" class="form-control" id="login_email"
                                name="login_email" value="{{old('login_email')}}" placeholder="{{ trans('second_login.email') }}">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="password">
                                @error('login_password')
                                <p class="we text-danger">{{ $message }}</p>
                                @enderror
                            </label>
                            <input type="password" class="form-control" id="password"
                                name="login_password" placeholder="{{ trans('second_login.password') }}">
                        </div>
                    </div>
                </div>
            </div>

            <button class="m-auto my-4 rounded" type="submit">{{ trans('second_login.sign_in') }}</button>

        </form>
    </div>
</div>

    <div class="d-flex justify-content-center">
        <div class="footer">
            <img class="login_icon" src="https://www14.0zz0.com/2023/04/30/10/538462861.png" alt="">


            © Copyright <strong>Ipersona</strong> . All Rights Reserved  .

            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
            <a class="link_lang" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                @if(LaravelLocalization::getCurrentLocale() != $localeCode)
                <img src="/flags/{{$localeCode}}_32.png" alt="">  {{ $properties['native'] }}
                @endif

            </a>
            @endforeach

        </div>
    {{-- <div>

    </div> --}}
</div>

  <script src="{{ asset('new_assets/login/bootstrap/bootstrap.min.js ') }}" ></script>
</body>
</html>
