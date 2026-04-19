<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
            body {
                min-height: 100vh;
                background-image: 
                    url('/vektor-cendrawasih.png'),
                    linear-gradient(135deg, rgba(250,95,123,0.7) 0%, rgba(163,63,154,0.7) 35%, rgba(24,52,116,0.7) 100%);
                background-size: 70%, cover;
                background-position: center, center;
                background-attachment: fixed, fixed;
                background-repeat: no-repeat, repeat;
            }
            .auth-page {
                min-height: 100vh;
                display: flex;
                align-items: center;
                justify-content: center;
                padding: 2rem 1rem;
            }
            .auth-card {
                position: relative;
                width: 100%;
                max-width: 380px;
                background: rgba(255,255,255,0.13);
                border: 1px solid rgba(255,255,255,0.22);
                border-radius: 2rem;
                backdrop-filter: blur(20px);
                box-shadow: 0 40px 100px rgba(15,23,42,0.35);
                overflow: hidden;
            }
            .auth-card::before {
                content: '';
                position: absolute;
                inset: 0;
                background: linear-gradient(180deg, rgba(255,255,255,0.14), rgba(255,255,255,0));
                pointer-events: none;
            }
            .auth-card-inner {
                position: relative;
                padding: 2rem 2rem 2.5rem;
                color: #f8fafc;
            }
            .auth-card-title {
                margin-bottom: 1.75rem;
                display: flex;
                flex-direction: column;
                align-items: center;
                gap: 1rem;
            }
            .auth-card-title span {
                display: inline-block;
                width: 1.5rem;
                height: 1.5rem;
                border-radius: 9999px;
                border: 1px solid rgba(255,255,255,0.4);
                display: grid;
                place-items: center;
                color: #fff;
                background: rgba(255,255,255,0.08);
            }
            .auth-card-title h1 {
                font-size: 1rem;
                text-transform: uppercase;
                letter-spacing: 0.35em;
                color: rgba(255,255,255,0.72);
            }
            .auth-logo-wrapper {
                width: 5rem;
                height: 5rem;
                margin: 0 auto;
                border-radius: 9999px;
                background: rgba(255,255,255,0.16);
                border: 1px solid rgba(255,255,255,0.24);
                display: grid;
                place-items: center;
                padding: 0.5rem;
            }
            .auth-logo-wrapper img {
                border-radius: 9999px;
                width: 100%;
                height: 100%;
                object-fit: cover;
            }
            .auth-divider {
                display: flex;
                align-items: center;
                gap: 0.75rem;
                margin-top: 0.65rem;
            }
            .auth-divider span {
                flex: 1;
                height: 1px;
                background: rgba(255,255,255,0.25);
            }
            .auth-divider strong {
                font-size: 0.75rem;
                letter-spacing: 0.3em;
                color: rgba(255,255,255,0.75);
            }
            .auth-input-group {
                position: relative;
                margin-bottom: 1rem;
                padding: 2px;
                border-radius: 1rem;
                background: linear-gradient(135deg, #3b82f6 0%, #ec4899 50%, #f97316 100%);
                display: flex;
                align-items: center;
            }
            .auth-input-icon {
                position: absolute;
                left: 1rem;
                display: grid;
                place-items: center;
                color: rgba(255,255,255,0.72);
                width: 2rem;
                height: 2rem;
                line-height: 0;
                pointer-events: none;
            }
            .auth-input {
                flex: 1;
                padding: 1rem 1rem 1rem 4rem;
                border-radius: 0.95rem;
                border: none;
                background: rgba(255,255,255,0.1);
                color: #f8fafc;
                outline: none;
                transition: background 0.2s ease;
                width: 100%;
            }
            .auth-input::placeholder {
                color: rgba(255,255,255,0.6);
            }
            .auth-input:focus {
                background: rgba(255,255,255,0.15);
            }
            .auth-button {
                width: 100%;
                border: none;
                border-radius: 9999px;
                padding: 1rem 1.15rem;
                background: linear-gradient(135deg, #f97316 0%, #fb7185 100%);
                color: white;
                font-weight: 700;
                letter-spacing: 0.08em;
                text-transform: uppercase;
                box-shadow: 0 20px 40px rgba(249,115,22,0.24);
                transition: transform 0.2s ease, box-shadow 0.2s ease;
            }
            .auth-button:hover {
                transform: translateY(-1px);
                box-shadow: 0 25px 45px rgba(249,115,22,0.28);
            }
            .auth-footer {
                margin-top: 1.25rem;
                font-size: 0.9rem;
                color: rgba(255,255,255,0.72);
                text-align: center;
            }
            .auth-footer a {
                color: #fff;
                text-decoration: underline;
            }
            .auth-help {
                display: flex;
                justify-content: space-between;
                align-items: center;
                gap: 1rem;
                margin: 0.8rem 0 0.4rem;
                color: rgba(255,255,255,0.75);
                font-size: 0.92rem;
            }
            .auth-help input[type="checkbox"] {
                accent-color: #fb7185;
            }
            .auth-errors {
                margin-bottom: 1rem;
                color: #fee2e2;
                font-size: 0.92rem;
            }
            .auth-top-banner {
                position: relative;
                width: 100%;
                min-height: 8rem;
                overflow: hidden;
                margin-bottom: 1.5rem;
                border-radius: 1.5rem;
                background: rgba(255,255,255,0.08);
                border: 1px solid rgba(255,255,255,0.18);
                box-shadow: inset 0 0 0 1px rgba(255,255,255,0.02);
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                gap: 0.75rem;
                padding: 1rem 1rem 0.7rem;
            }
            .auth-banner-text-wrap {
                position: relative;
                width: 100%;
                display: flex;
                align-items: center;
                overflow: hidden;
                padding-top: 0.5rem;
            }
            .auth-top-banner-logo {
                width: 4rem;
                height: 4rem;
                border-radius: 9999px;
                object-fit: cover;
                border: 2px solid rgba(255,255,255,0.65);
                background: rgba(255,255,255,0.12);
                box-shadow: 0 0 20px rgba(0,0,0,0.25);
                z-index: 2;
            }
            .auth-top-banner-text {
                display: inline-block;
                font-size: clamp(1rem, 3vw, 1.5rem);
                font-weight: 800;
                white-space: nowrap;
                text-transform: uppercase;
                letter-spacing: 0.2em;
                color: rgba(255,255,255,0.95);
                text-shadow: 0 8px 20px rgba(0,0,0,0.3);
                animation: scrollBanner 18s linear infinite;
                padding-left: 100%;
            }
            @keyframes scrollBanner {
                0% {
                    transform: translateX(0%);
                }
                100% {
                    transform: translateX(-100%);
                }
            }
            .auth-page {
                position: relative;
                z-index: 10;
            }
        </style>
    </head>
    <body class="font-sans antialiased">
        <div class="auth-page">
            <div class="auth-card">
                <div class="auth-card-inner">
                    <div class="auth-top-banner">
                        <img src="{{ asset('logo.png') }}" alt="Logo" class="auth-top-banner-logo" />
                        <div class="auth-banner-text-wrap">
                            <div class="auth-top-banner-text">Menerima Jasa Website & Aplikasi</div>
                            <div class="auth-top-banner-text">Menerima Jasa Website & Aplikasi</div>
                        </div>
                    </div>
                    {{ $slot }}
                </div>
            </div>
        </div>
    </body>
</html>
