<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Promotion</title>
    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>
<body class="bg-gray-900 text-white"> <!-- 어두운 배경과 밝은 텍스트 -->
<nav class="bg-gray-900 text-white sticky top-0 z-50">
    <div class="container max-w-full lg:max-w-screen-lg mx-auto flex items-center justify-between py-4 px-6">
        <!-- Logo Section -->
        <div class="flex items-center space-x-3">
            <img src="/img/evitomplan.jpeg" alt="Logo" class="h-8 w-auto">
            <span class="font-bold text-lg">EVITOM PLAN</span>
        </div>

        <!-- Navigation Links -->
        <div class="hidden md:flex space-x-8">
            <a href="#features" class="hover:text-blue-400">Features</a>
            <a href="#community" class="hover:text-blue-400">Community</a>
            <a href="#goals" class="hover:text-blue-400">Goals</a>
            <a href="#cta" class="hover:text-blue-400">Get Started</a>
        </div>

        <!-- Download Button -->
        <div class="hidden md:block">
            <a href="#" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Download</a>
        </div>
    </div>
</nav>

<!-- Main Content -->
<div class="container max-w-full sm:max-w-screen-sm md:max-w-screen-md lg:max-w-screen-lg mx-auto px-4 sm:px-6 lg:px-8">
    @yield('content')
</div>
</body>
</html>
