<x-guest-layout>
    <div class="auth-card-title">
        <div class="auth-divider">
            <span></span>
            <strong>Login</strong>
            <span></span>
        </div>
    </div>

    <form method="POST" action="{{ route('login') }}" class="space-y-4">
        @csrf

        <x-auth-session-status class="auth-errors" :status="session('status')" />
        <x-auth-validation-errors class="auth-errors" :errors="$errors" />

        <div class="auth-input-group">
            <span class="auth-input-icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="2" y="4" width="20" height="16" rx="2"></rect>
                    <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                </svg>
            </span>
            <input id="email" name="email" type="email" placeholder="Email" value="{{ old('email') }}" required autofocus autocomplete="username" class="auth-input" />
        </div>

        <div class="auth-input-group">
            <span class="auth-input-icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="3" y="11" width="18" height="11" rx="2"></rect>
                    <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                </svg>
            </span>
            <input id="password" name="password" type="password" placeholder="Password" required autocomplete="current-password" class="auth-input" />
        </div>

        <div class="auth-help">
            <label class="inline-flex items-center gap-2 text-sm text-white/80">
                <input id="remember_me" type="checkbox" name="remember" class="rounded border-white/30 text-pink-400 focus:ring-pink-400" />
                Remember me
            </label>

            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="text-white/80 hover:text-white">Forgot password?</a>
            @endif
        </div>

        <button type="submit" class="auth-button">Login</button>

        <p class="auth-footer">Belum punya akun? <a href="{{ route('register') }}">Daftar sekarang</a></p>
    </form>
</x-guest-layout>
