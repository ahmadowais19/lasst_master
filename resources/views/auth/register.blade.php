<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Investa - Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background-image: url('{{ asset('images/bg_3.jpg') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            min-height: 100vh;
        }
        .register-container {
            background-color: rgba(255, 255, 255, 0.3);
            backdrop-filter: blur(5px);
        }
    </style>
</head>
<body class="flex items-center justify-center p-4">
    <div class="w-full max-w-md register-container rounded-xl shadow-2xl overflow-hidden">
        <!-- Header Section -->
        <div class="text-white p-6 text-center" style="background-color: rgba(154, 117, 23, 0.6);">
            <h1 class="text-2xl font-bold">Eatwell </h1>
            <p class="mt-1 text-blue-100"></p>
        </div>

        <!-- Register Form -->
        <form method="POST" action="{{ route('register') }}" class="p-6 space-y-6">
            @csrf

            <!-- Name -->
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                <input id="name" name="name" type="text" required autofocus
                    value="{{ old('name') }}"
                    class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition duration-200"
                    placeholder="John Doe">
                @if($errors->has('name'))
                    <p class="mt-1 text-sm text-red-600">{{ $errors->first('name') }}</p>
                @endif
            </div>

            <!-- Email -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                <input id="email" name="email" type="email" required
                    value="{{ old('email') }}"
                    class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition duration-200"
                    placeholder="your@email.com">
                @if($errors->has('email'))
                    <p class="mt-1 text-sm text-red-600">{{ $errors->first('email') }}</p>
                @endif
            </div>

            <!-- Password -->
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                <input id="password" name="password" type="password" required
                    class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition duration-200"
                    placeholder="••••••••">
                @if($errors->has('password'))
                    <p class="mt-1 text-sm text-red-600">{{ $errors->first('password') }}</p>
                @endif
            </div>

            <!-- Confirm Password -->
            <div>
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-1">Confirm Password</label>
                <input id="password_confirmation" name="password_confirmation" type="password" required
                    class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition duration-200"
                    placeholder="••••••••">
                @if($errors->has('password_confirmation'))
                    <p class="mt-1 text-sm text-red-600">{{ $errors->first('password_confirmation') }}</p>
                @endif
            </div>

            <!-- Submit Button -->
            <div>
                <button type="submit"
                    class="w-full bg-[#FFA500] hover:bg-[#e69500] text-white font-medium py-2 px-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#FFA500] focus:ring-offset-2 transition duration-200">
                    Register
                </button>
            </div>
        </form>

        <!-- Footer -->
        <div class="px-6 py-4 text-center border-t border-gray-200" style="background-color: rgba(249, 250, 251, 0.5);">
            <p class="text-sm text-gray-600">
                Already have an account?
                <a href="{{ route('login') }}" class="font-medium text-white hover:text-blue-800 underline decoration-2">Login</a>
            </p>
        </div>
    </div>
</body>
</html>
