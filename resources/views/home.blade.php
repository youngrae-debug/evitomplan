@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<div class="max-w-screen-lg mx-auto flex items-center justify-center h-screen bg-gradient-to-b from-blue-900 to-gray-900 text-white rounded-3xl mx-4 mt-6 shadow-lg">
    <div class="text-center">
        <!-- 큰 제목 -->
        <h1 class="text-5xl font-bold mb-4">The Leading App for a Structured Life</h1>
        <p class="text-lg text-gray-300 mb-6">Set goals, get push notifications, and achieve a more organized lifestyle!</p>
        @if(session('success'))
            <div class="text-green-500 font-semibold mb-4">
                {{ session('success') }}
            </div>
        @endif
        <!-- Email Subscription Form -->
        <div class="mt-8">
            <form action="/subscribe" method="POST" class="flex flex-col md:flex-row justify-center items-center space-y-4 md:space-y-0">
                @csrf <!-- CSRF 토큰 추가 -->
                <input type="email" name="email" placeholder="Enter your email" required
                       class="px-4 py-3 text-gray-900 rounded-lg w-72 md:w-96 focus:outline-none focus:ring-2 focus:ring-blue-500"
                       aria-label="Email Address">
                <button type="submit"
                        class="md:ml-4 px-6 py-3 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition-all">
                    Subscribe
                </button>
            </form>
        </div>

        <!-- 사용자 수와 리뷰 통계 -->
        <div class="flex justify-center space-x-6 mt-8">
            <div class="text-center">
                <p class="text-3xl font-bold">100,000,000+</p>
                <p class="text-gray-300">Target Active users</p>
            </div>
            <div class="text-center">
                <p class="text-3xl font-bold">★★★★★</p>
                <p class="text-gray-300">Target Top reviews</p>
            </div>
        </div>

        <!-- 스마트폰 이미지 (이미지가 있는 경우 추가) -->
        <div class="mt-12 flex justify-center space-x-4">
            <img src="/img/mainApp.png" alt="App Screenshot 1" class="h-64 w-auto">
            <img src="/img/mainApp.png" alt="App Screenshot 2" class="h-64 w-auto">
            <img src="/img/mainApp.png" alt="App Screenshot 3" class="h-64 w-auto">
        </div>
    </div>
</div>

<!-- Feature Section with Image and Text -->
<div class="bg-gray-900 py-16 text-white max-w-screen-lg mx-auto">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
        <!-- Image Section -->
        <div class="relative">
            <img src="/img/evitomplan.jpeg" alt="App Feature Image" class="w-full h-auto rounded-3xl shadow-xl">
        </div>

        <!-- Text Section -->
        <div>
            <span class="text-blue-400 text-lg font-semibold">Goal Management</span>
            <h2 class="text-4xl font-bold mt-4 mb-6">Manage Your Goals in One Place</h2>
            <ul class="space-y-4">
                <li class="text-xl text-gray-400">• Set and track your goals</li>
                <li class="text-xl text-gray-400">• Get reminders and push notifications</li>
                <li class="text-xl text-gray-400">• Analyze your goal achievement over time</li>
            </ul>
            <div class="bg-gray-800 p-4 mt-6 rounded-lg">
                <h4 class="text-lg font-semibold text-white">Detailed Tracking</h4>
                <p class="text-gray-400">Track your progress with historical data and insights.</p>
            </div>
        </div>
    </div>
</div>

<!-- Another Section with Image on Right -->
<div class="bg-gray-900 py-16 text-white max-w-screen-lg mx-auto">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
        <!-- Text Section -->
        <div>
            <span class="text-pink-400 text-lg font-semibold">Community & Support</span>
            <h2 class="text-4xl font-bold mt-4 mb-6">Join a Supportive Community</h2>
            <ul class="space-y-4">
                <li class="text-xl text-gray-400">• Share your achievements</li>
                <li class="text-xl text-gray-400">• Encourage and motivate others</li>
                <li class="text-xl text-gray-400">• Grow together with a dedicated support system</li>
            </ul>
            <div class="bg-gray-800 p-4 mt-6 rounded-lg">
                <h4 class="text-lg font-semibold text-white">Community Engagement</h4>
                <p class="text-gray-400">Participate in discussions and inspire others with your progress.</p>
            </div>
        </div>

        <!-- Image Section -->
        <div class="relative">
            <img src="/img/evitomplan.jpeg" alt="Community Feature Image" class="w-full h-auto rounded-3xl shadow-xl">
        </div>
    </div>
</div>

<!-- Call to Action Section -->
<div id="cta" class="bg-gray-900 py-16 text-white rounded-3xl max-w-screen-lg mx-auto mt-6 shadow-2xl text-center">
    <h2 class="text-5xl font-bold mb-8">Ready to Get Started?</h2>
    <p class="text-xl text-gray-300 mb-6">Take control of your goals and start achieving more today!</p>
    <a href="#" class="px-8 py-4 bg-blue-500 text-white text-lg rounded-lg hover:bg-blue-600 transition-all">Get Started</a>
</div>

@endsection
