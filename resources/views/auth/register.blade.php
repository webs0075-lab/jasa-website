<x-guest-layout>
    <div class="auth-card-title">
        <div class="auth-divider">
            <span></span>
            <strong>Register</strong>
            <span></span>
        </div>
    </div>

    <form method="POST" action="{{ route('register') }}" class="space-y-4">
        @csrf

        <x-auth-validation-errors class="auth-errors" :errors="$errors" />

        <div class="auth-input-group">
            <span class="auth-input-icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                </svg>
            </span>
            <input id="name" name="name" type="text" placeholder="Name" value="{{ old('name') }}" required autofocus autocomplete="name" class="auth-input" />
        </div>

        <div class="auth-input-group">
            <span class="auth-input-icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="2" y="4" width="20" height="16" rx="2"></rect>
                    <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                </svg>
            </span>
            <input id="email" name="email" type="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="username" class="auth-input" />
        </div>

        <div class="auth-input-group">
            <span class="auth-input-icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="3" y="11" width="18" height="11" rx="2"></rect>
                    <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                </svg>
            </span>
            <input id="password" name="password" type="password" placeholder="Password" required autocomplete="new-password" class="auth-input" />
        </div>

        <div class="auth-input-group">
            <span class="auth-input-icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="3" y="11" width="18" height="11" rx="2"></rect>
                    <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                </svg>
            </span>
            <input id="password_confirmation" name="password_confirmation" type="password" placeholder="Confirm Password" required autocomplete="new-password" class="auth-input" />
        </div>

        <button type="submit" class="auth-button">Register</button>

        <p class="auth-footer">Sudah punya akun? <a href="{{ route('login') }}">Login</a></p>
    </form>
</x-guest-layout>
