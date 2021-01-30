@extends('AdminArea.Layouts.auth')
@section('content')

<div class="nk-split nk-split-page nk-split-md">
    <div class="nk-split-content nk-block-area nk-block-area-column nk-auth-container bg-white">
        <div class="absolute-top-right d-lg-none p-3 p-sm-5">
            <a href="#" class="toggle btn-white btn btn-icon btn-light" data-target="athPromo"><em class="icon ni ni-info"></em></a>
        </div>
        <div class="nk-block nk-block-middle nk-auth-body">
            <div class="brand-logo pb-5">
                <a href="/" class="logo-link">
                    <img class="logo-light logo-img logo-img-lg" src="{{ asset('AdminArea/images/logo.png')}}" srcset="./images/logo2x.png 2x" alt="logo">
                    <img class="logo-dark logo-img logo-img-lg" src="{{ asset('AdminArea/images/logo-dark.png')}}" srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
                </a>
            </div>
            <div class="nk-block-head">
                <div class="nk-block-head-content">
                    <h5 class="nk-block-title">Sign-In</h5>
                    <div class="nk-block-des">
                        <p>Access the DashLite panel using your email and passcode.</p>
                    </div>
                </div>
            </div><!-- .nk-block-head -->
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <div class="form-label-group">
                        <label class="form-label" for="default-01">Email</label>
                        <a class="link link-primary link-sm" tabindex="-1" href="#">Need Help?</a>
                    </div>
                    <input type="email" class="form-control  @error('email') is-invalid @enderror" id="default-01" placeholder="Enter your email address or username"  id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div><!-- .foem-group -->
                <div class="form-group">
                    <div class="form-label-group">
                        <label class="form-label" for="password">Passcode</label>
                        <a class="link link-primary link-sm" tabindex="-1"  href="{{ route('password.request') }}">Forgot Code?</a>
                    </div>
                    <div class="form-control-wrap">
                        <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch" data-target="password">
                            <em class="passcode-icon icon-show icon ni ni-eye"></em>
                            <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                        </a>

                        <input id="password" type="password"class="form-control @error('password') is-invalid @enderror"  id="password" placeholder="Enter your passcode" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div><!-- .foem-group -->
                <div class="form-group">
                    <button class="btn btn-primary btn-block">Sign in</button>
                </div>
            </form><!-- form -->
            <div class="form-note-s2 pt-4"> New on our platform? <a href="{{ route('register')}}">Create an account</a>
            </div>
          
         
        </div><!-- .nk-block -->
   <!-- .nk-block -->
    </div><!-- .nk-split-content -->
    <div class="nk-split-content nk-split-stretch bg-lighter d-flex toggle-break-lg toggle-slide toggle-slide-right" data-content="athPromo" data-toggle-screen="lg" data-toggle-overlay="true">
        <div class="slider-wrap w-100 w-max-550px p-3 p-sm-5 m-auto">
            <div class="slider-init" data-slick='{"dots":true, "arrows":false}'>
                <div class="slider-item">
                    <div class="nk-feature nk-feature-center">
                        <div class="nk-feature-img">
                            <img class="round" src="{{ asset('AdminArea/images/slides/promo-a.png')}}" srcset="./images/slides/promo-a2x.png 2x" alt="">
                        </div>
                        <div class="nk-feature-content py-4 p-sm-5">
                            <h4>Dashlite</h4>
                            <p>You can start to create your products easily with its user-friendly design & most completed responsive layout.</p>
                        </div>
                    </div>
                </div><!-- .slider-item -->
                <div class="slider-item">
                    <div class="nk-feature nk-feature-center">
                        <div class="nk-feature-img">
                            <img class="round" src="{{ asset('AdminArea/images/slides/promo-b.png')}}" srcset="./images/slides/promo-b2x.png 2x" alt="">
                        </div>
                        <div class="nk-feature-content py-4 p-sm-5">
                            <h4>Dashlite</h4>
                            <p>You can start to create your products easily with its user-friendly design & most completed responsive layout.</p>
                        </div>
                    </div>
                </div><!-- .slider-item -->
                <div class="slider-item">
                    <div class="nk-feature nk-feature-center">
                        <div class="nk-feature-img">
                            <img class="round" src="{{ asset('AdminArea/images/slides/promo-c.png')}}" srcset="./images/slides/promo-c2x.png 2x" alt="">
                        </div>
                        <div class="nk-feature-content py-4 p-sm-5">
                            <h4>Dashlite</h4>
                            <p>You can start to create your products easily with its user-friendly design & most completed responsive layout.</p>
                        </div>
                    </div>
                </div><!-- .slider-item -->
            </div><!-- .slider-init -->
            <div class="slider-dots"></div>
            <div class="slider-arrows"></div>
        </div><!-- .slider-wrap -->
    </div><!-- .nk-split-content -->
</div>

@endsection


