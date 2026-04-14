@extends('template')

@section('main')

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Inter:wght@400;500;600;700&display=swap');
        
        .font-heritage { font-family: 'Playfair Display', serif; }
        .font-body { font-family: 'Inter', sans-serif; }
        
        .bg-cream-page { background-color: #FFFCF5; }
        .bg-beige-input { background-color: #F5F5DC; }
        .bg-brown-dark { background-color: #4A3627; }
        .bg-red-heritage { background-color: #9D3838; }

        .login-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #4A3627 0%, #6B4C39 100%);
        }

        .login-card {
            backdrop-filter: blur(10px);
            background: rgba(255, 252, 245, 0.95);
        }

        .input-focus {
            transition: all 0.3s ease;
        }

        .input-focus:focus {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(74, 54, 39, 0.2);
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-slide-in {
            animation: slideIn 0.6s ease-out;
        }
    </style>

    <main class="login-container">
        
        <div class="w-full max-w-sm sm:max-w-md mx-4 px-4 sm:px-0 animate-slide-in">
            
            <!-- Login Card -->
            <div class="login-card rounded-xl shadow-2xl p-6 sm:p-8">
                
                <!-- Header -->
                <div class="text-center mb-6 sm:mb-8">
                    <div class="flex justify-center mb-4">
                        <div class="bg-gradient-to-br from-amber-900 to-amber-800 w-16 h-16 sm:w-20 sm:h-20 rounded-full flex items-center justify-center shadow-lg">
                            <i class="fas fa-lock text-white text-3xl sm:text-4xl"></i>
                        </div>
                    </div>
                    
                    <h1 class="text-2xl sm:text-3xl font-heritage font-bold text-black mb-2">
                        Admin Login
                    </h1>
                    <p class="text-gray-600 text-xs sm:text-sm">
                        Dashboard Kampung Kajoetangan Heritage
                    </p>
                </div>

                

                    <!-- Email Input -->
                    <div>
                        <label class="block text-xs sm:text-sm font-semibold text-gray-800 mb-2">
                            <i class="fas fa-envelope mr-2 text-amber-900"></i>Email Admin
                        </label>
                        <input type="email" 
                               name="email" 
                               required 
                               placeholder="admin@kajoetangan.com"
                               class="input-focus w-full px-4 sm:px-5 py-3 sm:py-4 bg-beige-input border-2 border-transparent rounded-lg text-gray-700 focus:border-amber-900 focus:outline-none text-sm sm:text-base placeholder-gray-400">
                    </div>

                    <!-- Password Input -->
                    <div>
                        <label class="block text-xs sm:text-sm font-semibold text-gray-800 mb-2">
                            <i class="fas fa-lock mr-2 text-amber-900"></i>Password
                        </label>
                        <div class="relative">
                            <input type="password" 
                                   name="password" 
                                   id="passwordInput"
                                   required 
                                   placeholder="••••••••"
                                   class="input-focus w-full px-4 sm:px-5 py-3 sm:py-4 bg-beige-input border-2 border-transparent rounded-lg text-gray-700 focus:border-amber-900 focus:outline-none text-sm sm:text-base placeholder-gray-400 pr-12">
                            <button type="button" 
                                    class="absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-600 hover:text-amber-900 transition-colors"
                                    onclick="togglePassword()">
                                <i class="fas fa-eye" id="eyeIcon"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Remember Me -->
                    <div class="flex items-center">
                        <input type="checkbox" 
                               name="remember" 
                               id="remember"
                               class="w-4 h-4 accent-amber-900 rounded cursor-pointer">
                        <label for="remember" class="ml-2 text-xs sm:text-sm text-gray-700 cursor-pointer">
                            Ingat saya
                        </label>
                    </div>

                    <!-- Error Alert (jika ada) -->
                    @if ($errors->any())
                        <div class="bg-red-100 border-l-4 border-red-heritage rounded-lg p-4 sm:p-5">
                            <div class="flex items-start">
                                <i class="fas fa-exclamation-circle text-red-heritage mt-1 mr-3 flex-shrink-0"></i>
                                <div>
                                    <p class="text-sm font-semibold text-red-heritage mb-1">Login Gagal</p>
                                    <ul class="text-xs text-red-700 space-y-1">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endif

                    <!-- Success Alert (jika ada) -->
                    @if (session('success'))
                        <div class="bg-green-100 border-l-4 border-green-600 rounded-lg p-4 sm:p-5">
                            <div class="flex items-center">
                                <i class="fas fa-check-circle text-green-600 mr-3"></i>
                                <span class="text-sm font-semibold text-green-700">{{ session('success') }}</span>
                            </div>
                        </div>
                    @endif

                    <!-- Submit Button -->
                    <button type="submit" 
                            class="w-full bg-gradient-to-r from-amber-900 to-amber-800 hover:from-amber-800 hover:to-amber-700 active:from-amber-900 active:to-amber-900 text-white font-semibold py-3 sm:py-4 rounded-lg transition-all duration-300 text-sm sm:text-base flex items-center justify-center gap-2 mt-6 sm:mt-8 shadow-lg hover:shadow-xl">
                        <i class="fas fa-sign-in-alt"></i> Masuk ke Dashboard
                    </button>
                </form>

                <!-- Footer Info -->
                <div class="mt-6 sm:mt-8 pt-6 sm:pt-8 border-t border-gray-300">
                    <p class="text-center text-xs text-gray-600">
                        <i class="fas fa-lock-open mr-1"></i>
                        Halaman ini hanya untuk admin
                    </p>
                </div>

                <!-- Demo Credentials (development only) -->
                <div class="mt-4 p-3 sm:p-4 bg-blue-50 rounded-lg border border-blue-200">
                    <p class="text-xs font-semibold text-blue-900 mb-2">
                        <i class="fas fa-info-circle mr-1"></i> Demo Credentials:
                    </p>
                    <div class="text-xs text-blue-800 space-y-1">
                        <p><strong>Email:</strong> admin@kajoetangan.com</p>
                        <p><strong>Password:</strong> admin123</p>
                    </div>
                </div>
            </div>

            <!-- Back to Home Link -->
            <div class="mt-6 sm:mt-8 text-center">
                <a href="/" class="text-white hover:text-amber-200 text-sm sm:text-base transition-colors duration-200 flex items-center justify-center gap-2">
                    <i class="fas fa-arrow-left"></i> Kembali ke Beranda
                </a>
            </div>
        </div>
    </main>

    <script>
        function togglePassword() {
            const input = document.getElementById('passwordInput');
            const icon = document.getElementById('eyeIcon');
            
            if (input.type === 'password') {
                input.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                input.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        }
    </script>

@endsection
