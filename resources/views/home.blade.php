@extends('layouts.app')

@section('content')

    <!-- Hero Section -->
    <div class="max-w-full sm:max-w-screen-sm md:max-w-screen-md lg:max-w-screen-lg mx-auto flex items-center justify-center min-h-screen bg-gradient-to-b from-blue-900 to-gray-900 text-white rounded-3xl mx-4 mt-6 shadow-lg">
        <div class="text-center">
            <!-- 큰 제목 -->
            <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold text-white mb-6 sm:mb-8 tracking-tight mt-4 sm:mt-6 md:mt-8 lg:mt-10">
                The Leading App for a Structured Life
            </h1>

            <!-- 설명 텍스트 -->
            <div class="text-center max-w-3xl mx-auto">
                <p class="text-sm sm:text-base md:text-lg lg:text-xl text-gray-300 mb-3 tracking-wide">
                    Ready to <span class="text-blue-400 font-semibold">organize your life</span> like never before?
                </p>
                <p class="text-sm sm:text-base md:text-lg lg:text-xl text-gray-300 mb-3 tracking-wide">
                    <span class="text-blue-400 font-semibold">Set goals, get instant notifications,</span> and transform your routine into a <span class="font-semibold text-blue-400">path to success</span>.
                </p>
                <p class="text-sm sm:text-base md:text-lg lg:text-xl text-gray-300 mb-3 tracking-wide">
                    <span class="text-pink-400 font-semibold">Coming soon!</span> Be the first to experience the <span class="text-pink-400 font-semibold">future of productivity</span>.
                </p>
                <p class="text-sm sm:text-base md:text-lg lg:text-xl text-gray-300 mb-6 tracking-wide">
                    Drop your email below, and we’ll notify you the moment we officially launch.
                </p>
            </div>

            <!-- 성공 메시지 -->
            @if(session('success'))
                <div class="text-green-500 font-semibold mb-4">
                    {{ session('success') }}
                </div>
            @endif

            <!-- 이메일 구독 폼 -->
            <div class="mt-6 sm:mt-8">
                <form action="/subscribe" method="POST" class="flex flex-col sm:flex-row justify-center items-center space-y-4 sm:space-y-0">
                    @csrf <!-- CSRF 토큰 추가 -->
                    <input type="email" name="email" placeholder="Enter your email" required
                        class="px-4 py-3 text-gray-900 rounded-lg w-full sm:w-72 lg:w-96 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        aria-label="Email Address">
                    <button type="submit"
                            class="sm:ml-4 px-6 py-3 bg-gradient-to-r from-blue-500 to-purple-600 text-white rounded-lg hover:bg-blue-600 hover:scale-105 transform transition-all">
                        Subscribe
                    </button>
                </form>
            </div>

            <!-- 사용자 수와 리뷰 통계 -->
            <div class="flex justify-center space-x-4 sm:space-x-6 mt-6 sm:mt-8">
                <div class="text-center">
                    <p class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-bold">100,000,000+</p>
                    <p class="text-gray-300">Target Active users</p>
                </div>
                <div class="text-center">
                    <p class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-bold">★★★★★</p>
                    <p class="text-gray-300">Target Top reviews</p>
                </div>
            </div>

            <!-- 스마트폰 이미지 -->
            <div class="mt-8 flex justify-center space-x-4">
                <img src="/img/mainApp.png" alt="App Screenshot 1" class="h-32 sm:h-48 md:h-64 lg:h-72 w-auto rounded-lg shadow-lg hover:scale-105 transform transition-all duration-300">
                <img src="/img/mainApp.png" alt="App Screenshot 2" class="h-32 sm:h-48 md:h-64 lg:h-72 w-auto rounded-lg shadow-lg hover:scale-105 transform transition-all duration-300">
                <img src="/img/mainApp.png" alt="App Screenshot 3" class="h-32 sm:h-48 md:h-64 lg:h-72 w-auto rounded-lg shadow-lg hover:scale-105 transform transition-all duration-300">
            </div>
        </div>
    </div>

    <!-- Feature Section with Image and Text -->
    <div class="bg-gray-900 py-16 text-white max-w-full sm:max-w-screen-sm md:max-w-screen-md lg:max-w-screen-lg mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <!-- Image Section -->
            <div class="relative">
                <img src="/img/evitomplan.jpeg" alt="App Feature Image" class="w-full h-auto rounded-3xl shadow-xl">
            </div>

            <!-- Text Section -->
            <div>
                <span class="text-blue-400 text-lg font-semibold">Goal Management</span>
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mt-4 mb-6">Manage Your Goals in One Place</h2>
                <ul class="space-y-4">
                    <li class="text-lg sm:text-xl text-gray-400">• Set and track your goals</li>
                    <li class="text-lg sm:text-xl text-gray-400">• Get reminders and push notifications</li>
                    <li class="text-lg sm:text-xl text-gray-400">• Analyze your goal achievement over time</li>
                </ul>
                <div class="bg-gray-800 p-4 mt-6 rounded-lg">
                    <h4 class="text-lg font-semibold text-white">Detailed Tracking</h4>
                    <p class="text-gray-400">Track your progress with historical data and insights.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Another Section with Image on Right -->
    <div class="bg-gray-900 py-16 text-white max-w-full sm:max-w-screen-sm md:max-w-screen-md lg:max-w-screen-lg mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <!-- Text Section -->
            <div>
                <span class="text-pink-400 text-lg font-semibold">Community & Support</span>
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mt-4 mb-6">Join a Supportive Community</h2>
                <ul class="space-y-4">
                    <li class="text-lg sm:text-xl text-gray-400">• Share your achievements</li>
                    <li class="text-lg sm:text-xl text-gray-400">• Encourage and motivate others</li>
                    <li class="text-lg sm:text-xl text-gray-400">• Grow together with a dedicated support system</li>
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
    <div id="cta" class="bg-gray-900 py-16 text-white rounded-3xl max-w-full sm:max-w-screen-sm md:max-w-screen-md lg:max-w-screen-lg mx-auto mt-6 shadow-2xl text-center">
        <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-8">Ready to Get Started?</h2>
        <p class="text-lg sm:text-xl text-gray-300 mb-6">Take control of your goals and start achieving more today!</p>
        <a href="#" class="px-8 py-4 bg-gradient-to-r from-blue-500 to-purple-600 text-white text-lg rounded-lg hover:scale-105 transform transition-all">
            Get Started
        </a>
    </div>

@endsection
