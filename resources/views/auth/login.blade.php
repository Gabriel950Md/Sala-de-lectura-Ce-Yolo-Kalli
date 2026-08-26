<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - Ce Yolo Kalli</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #8B4513;
            --secondary-color: #D2B48C;
            --accent-color: #A52A2A;
            --light-color: #F5F5DC;
            --dark-color: #3E2723;
        }
        
        body {
            font-family: 'Georgia', serif;
            background: linear-gradient(135deg, var(--light-color) 0%, #f8f9fa 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        
        .login-container {
            background: white;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            max-width: 1000px;
            width: 100%;
        }
        
        .login-left {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--accent-color) 100%);
            color: white;
            padding: 60px 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }
        
        .login-left::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 100%;
            height: 200%;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" fill="rgba(255,255,255,0.05)"><path d="M30,30 Q50,10 70,30 T90,30 T70,70 T30,70 T10,30 T30,30 Z"/></svg>');
            animation: float 20s infinite linear;
        }
        
        @keyframes float {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        
        .login-right {
            padding: 60px 40px;
        }
        
        .logo-container {
            text-align: center;
            margin-bottom: 40px;
        }
        
        .logo {
            width: 150px;
            height: 140px;
            border-radius: 48%;
            border: 4px solid var(--secondary-color);
            margin: 0 auto 50px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }
        
        .welcome-text h2 {
            color: var(--primary-color);
            font-weight: bold;
            margin-bottom: 10px;
        }
        
        .welcome-text p {
            color: #666;
            margin-bottom: 30px;
        }
        
        .form-group-custom {
            margin-bottom: 25px;
            position: relative;
        }
        
        .form-label-custom {
            color: var(--dark-color);
            font-weight: 600;
            margin-bottom: 8px;
            display: block;
        }
        
        .form-control-custom {
            border: 2px solid #e9ecef;
            border-radius: 12px;
            padding: 12px 20px;
            font-size: 16px;
            transition: all 0.3s ease;
            background-color: #f8f9fa;
        }
        
        .form-control-custom:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.2rem rgba(139, 69, 19, 0.25);
            background-color: white;
        }
        
        .input-with-icon {
            position: relative;
        }
        
        .input-icon {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--primary-color);
            font-size: 18px;
        }
        
        .input-with-icon .form-control-custom {
            padding-left: 50px;
        }
        
        .btn-login {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--accent-color) 100%);
            color: white;
            border: none;
            border-radius: 12px;
            padding: 12px 30px;
            font-size: 16px;
            font-weight: 600;
            width: 100%;
            transition: all 0.3s ease;
            margin-top: 10px;
        }
        
        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(139, 69, 19, 0.3);
        }
        
        .remember-forgot {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }
        
        .remember-me {
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        .remember-me input[type="checkbox"] {
            width: 18px;
            height: 18px;
            accent-color: var(--primary-color);
        }
        
        .remember-me label {
            color: var(--dark-color);
            margin-bottom: 0;
            cursor: pointer;
        }
        
        .forgot-password {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }
        
        .forgot-password:hover {
            color: var(--accent-color);
        }
        
        .error-message {
            color: #dc3545;
            font-size: 14px;
            margin-top: 5px;
            display: block;
        }
        
        .session-status {
            background-color: #d4edda;
            color: #155724;
            padding: 12px 20px;
            border-radius: 8px;
            margin-bottom: 25px;
            border: 1px solid #c3e6cb;
        }
        
        .features-list {
            list-style: none;
            padding: 0;
            margin-top: 40px;
        }
        
        .features-list li {
            padding: 12px 0;
            border-bottom: 1px solid rgba(255,255,255,0.1);
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        .features-list li:last-child {
            border-bottom: none;
        }
        
        .feature-icon {
            background: rgba(255,255,255,0.2);
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
        }
        
        @media (max-width: 768px) {
            .login-left {
                padding: 40px 20px;
            }
            
            .login-right {
                padding: 40px 20px;
            }
            
            .remember-forgot {
                flex-direction: column;
                gap: 15px;
                align-items: flex-start;
            }
        }
        
        .back-to-home {
            text-align: center;
            margin-top: 30px;
        }
        
        .back-link {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }
        
        .back-link:hover {
            color: var(--accent-color);
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="row g-0">
            <div class="col-lg-6 login-left">
                <div class="logo-container">
                    <img src="{{ asset('img/yolo.jpeg') }}" 
                         alt="Ce Yolo Kalli" class="logo">
                    <h2 class="mt-3">Ce Yolo Kalli</h2>
                    <p class="mb-0">Sala de Lectura</p>
                </div>
                
                <div class="mt-4">
                    <h3>Panel de Administración</h3>
                    <p>Accede para gestionar la sala de lectura y sus actividades.</p>
                </div>
                
                <ul class="features-list">
                    <li>
                        <div class="feature-icon">
                            <i class="fas fa-book"></i>
                        </div>
                        <span>Gestión de libros y préstamos</span>
                    </li>
                    <li>
                        <div class="feature-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <span>Administración de voluntarios</span>
                    </li>
                    <li>
                        <div class="feature-icon">
                            <i class="fas fa-calendar-alt"></i>
                        </div>
                        <span>Control de actividades</span>
                    </li>
                    <li>
                        <div class="feature-icon">
                            <i class="fas fa-chart-bar"></i>
                        </div>
                        <span>Reportes y estadísticas</span>
                    </li>
                </ul>
            </div>
            
            <div class="col-lg-6 login-right">
                <x-guest-layout>
                    <div class="welcome-text">
                        <h2>Bienvenido de vuelta</h2>
                        <p>Ingresa tus credenciales para acceder al sistema</p>
                    </div>

                    <x-auth-session-status class="session-status" :status="session('status')" />

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group-custom">
                            <label class="form-label-custom" for="email">
                                <i class="fas fa-envelope me-2"></i>Correo Electrónico
                            </label>
                            <div class="input-with-icon">
                                <i class="input-icon fas fa-envelope"></i>
                                <input id="email" 
                                       class="form-control-custom" 
                                       type="email" 
                                       name="email" 
                                       value="{{ old('email') }}" 
                                       required 
                                       autofocus 
                                       autocomplete="username"
                                       placeholder="tu@email.com">
                            </div>
                            <x-input-error :messages="$errors->get('email')" class="error-message" />
                        </div>

                        <div class="form-group-custom">
                            <label class="form-label-custom" for="password">
                                <i class="fas fa-lock me-2"></i>Contraseña
                            </label>
                            <div class="input-with-icon">
                                <i class="input-icon fas fa-lock"></i>
                                <input id="password" 
                                       class="form-control-custom"
                                       type="password"
                                       name="password"
                                       required 
                                       autocomplete="current-password"
                                       placeholder="••••••••">
                            </div>
                            <x-input-error :messages="$errors->get('password')" class="error-message" />
                        </div>

                        <div class="remember-forgot">
                            <div class="remember-me">
                                <input id="remember_me" 
                                       type="checkbox" 
                                       name="remember">
                                <label for="remember_me">{{ __('Recordar contraseña') }}</label>
                            </div>

                            @if (Route::has('password.request'))
                                <a class="forgot-password" href="{{ route('password.request') }}">
                                    {{ __('¿Olvidaste tu contraseña?') }}
                                </a>
                            @endif
                        </div>

                        <button type="submit" class="btn-login">
                            <i class="fas fa-sign-in-alt me-2"></i>
                            {{ __('Iniciar Sesión') }}
                        </button>
                    </form>

                    <div class="back-to-home">
                        <a href="{{ route('home') }}" class="back-link">
                            <i class="fas fa-arrow-left me-2"></i>Volver al sitio principal
                        </a>
                    </div>
                </x-guest-layout>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>
</body>
</html>