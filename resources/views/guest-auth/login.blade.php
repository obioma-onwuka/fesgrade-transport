<x-auth_layout>

    @section('title', 'Login')

    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner">
                <div class="card">
                    <div class="card-body">
                        <div class = "app-brand justify-content-center">
                            <a href="{{route('guest.welcome')}}" class="app-brand-link gap-2">
                                <span class = "app-brand-text demo text-body fw-bolder">
                                    <img src="{{ asset('/front/assets/img/logo/ficon.png') }}" alt="FesGrade" height = "30">
                                    FesGrade
                                </span>
                            </a>
                        </div>
                        @if(session()->has('success'))

                            <p class="mb-4 text-center" style = "color: rgba(16, 188, 16, 0.858)">
                                {{session('success')}}
                            </p>

                        @else
                        
                            <h4 class="mb-2 text-center" style = "color: #595BD9">Welcome To FesGrade 🤝</h4>
                            <p class="mb-4 text-center">Please sign-in to your account and start the adventure</p>
                            

                        @endif

                        <form id="formAuthentication" class="mb-3" action="{{ route('auth.login.try') }}" method="POST">
                            @csrf
                            <div class="mb-3">

                                <label for="email" class="form-label">Email:</label>
                                <input type="email" name="email" id="email" class="form-control"  autofocus value = {{old('email')}}>
                                
                                @error('email')
                                    <div class="text-danger" role="alert">
                                        <small>
                                            {{ $message }}
                                        </small>
                                    </div>
                                @enderror

                            </div>

                            <div class="mb-3 form-password-toggle">
                                
                                <div class = "d-flex justify-content-between">
                                    <label for="password" class="form-label">Password:</label>
                                    <a href="#" style = "color: #595BD9">
                                        <small>
                                            Forgot Password?
                                        </small>
                                    </a>
                                </div>
                               

                                <div class = "input-group input-group-merge">
                                    <input type="password" name="password" id="password" class="form-control"  autocomplete = "current-password">
                                    <span class="input-group-text cursor-pointer">
                                        <i class="bx bx-hide" style = "color: #595BD9"></i>
                                    </span>

                                    @error('password')
                                        <div class="text-danger" role="alert">
                                            <small>
                                                {{ $message }}
                                            </small>
                                        </div>
                                    @enderror

                                </div>
                                

                            </div>

                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="remember-me" />
                                    <label class="form-check-label" for="remember-me"> Remember Me </label>
                                </div>
                            </div>

                            <div class="mb-3">
                                <button style = "background: #595BD9; color: #FFF" class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
                            </div>

                        </form>

                        <p class="text-center">
                            <span>New on our platform?</span>
                           
                            <a href="{{ route('auth.register.show') }}" style = "color: #595BD9">
                                <i class="bx bx-chevron-left scaleX-n1-rtl bx-sm"></i>
                                <span>Create an account</span>
                            </a>
                         
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-auth_layout>