<div class="row mb-4">
    <div class="col-md-6">
        <h5>Вход</h5>
        @if(oauth_login())
            <a href="{{ route('login') }}" class="btn btn-primary">Войти через OAuth</a>
        @else
            <form method="POST" action="{{ route('login') }}" id="cart-login">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="login-email">Email</label>
                    <input id="login-email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                </div>
                <div class="mb-3">
                    <label class="form-label" for="login-password">Пароль</label>
                    <input id="login-password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                </div>
                <div class="mb-3 form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="login-remember" @checked(old('remember'))>
                    <label class="form-check-label" for="login-remember">Запомнить меня</label>
                </div>
                @includeWhen($captchaLogin, 'elements.captcha', ['center' => true])
                <button type="submit" class="btn btn-primary">Войти</button>
            </form>
        @endif
    </div>
    <div class="col-md-6">
        <h5>Регистрация</h5>
        @if(oauth_login())
            <a href="{{ route('register') }}" class="btn btn-primary">Зарегистрироваться через OAuth</a>
        @else
            <form method="POST" action="{{ route('register') }}" id="cart-register">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="register-name">Имя</label>
                    <input id="register-name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name">
                    @error('name')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                </div>
                <div class="mb-3">
                    <label class="form-label" for="register-email">Email</label>
                    <input id="register-email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                </div>
                <div class="mb-3">
                    <label class="form-label" for="register-password">Пароль</label>
                    <input id="register-password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    @error('password')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                </div>
                <div class="mb-3">
                    <label class="form-label" for="register-password-confirm">Подтверждение пароля</label>
                    <input id="register-password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
                @includeWhen($captchaRegister, 'elements.captcha', ['center' => true])
                <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
            </form>
        @endif
    </div>
</div>
