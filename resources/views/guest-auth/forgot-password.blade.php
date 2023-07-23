<x-auth.auth>

    @section('title', 'Forgot Password')

    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner">
                <div class="card">
                    <div class="card-body">
                        <div class = "app-brand justify-content-center">
                            <a href="{{route('welcome')}}" class="app-brand-link gap-2">
                                <span class = "app-brand-text demo text-body fw-bolder">
                                    <img src="/custom/frontend/images/logo.png" alt="petReunite" height = "80">
                                </span>
                            </a>
                        </div>

                        <h4 class="mb-2" style = "color: #595BD9">Forgot Password? 🤦‍♂️</h4>
                        <p class="mb-4">No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</p>
                        <x-auth-session-status class="mb-4" :status="session('status')" />

                        <form id="formAuthentication" class="mb-3" action="{{ route('password.email') }}" method="POST">
                            @csrf
                            <div class="mb-3">

                                <label for="email" class="form-label">Email:</label>
                                <input type="email" name="email" id="email" class="form-control" :value="old('email')"  autofocus>
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />

                            </div>


                            <div class="mb-3">
                                <button style = "background: #595BD9; color: #FFF" class="btn btn-primary d-grid w-100" type="submit">Send Reset Link</button>
                            </div>

                        </form>

                        <div class="text-center">

                        </div>

                        <p class="text-center">
                            <span>Remember Password?</span>
                            @if (Route::has('login'))
                                <a href="{{ route('login') }}" style = "color: #595BD9">
                                    <i class="bx bx-chevron-left scaleX-n1-rtl bx-sm"></i>
                                    Back to login
                                </a>
                            @endif
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-auth.auth>