@extends('layouts.app')
@section('content')

<section>
    <div class="relative w-full h-screen overflow-hidden">
        <!-- Video Background -->
        <video autoplay muted loop class="absolute top-0 left-0 w-full h-full object-cover">
            <source src="https://d1d5cy0fmpy9m8.cloudfront.net/images/175274277337088-413229662_medium.mp4"
                type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <!-- Content Overlay -->
        <div
            class="relative z-10 flex flex-col justify-center items-center h-full text-center text-white bg-black bg-opacity-30">
            <p class="capitalize text-2xl md:text-4xl tracking-widest mb-4"
                style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.35);">Welcome to Kazumi Japanese & Culture School.</p>
            <h1 class="text-xl md:text-2xl tracking-widest mb-6">Discover a new standard of Japanese Education and
                Culture.</h1>
            <div class="flex space-x-4 mb-8">
                <a data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" type="button"
                    class="bg-red-500 text-white px-4 py-2 text-sm md:text-base rounded hover:bg-red-600">Apply
                    Now</a>
                <a href="#" class="bg-red-500 text-white px-4 py-2 text-sm md:text-base rounded hover:bg-red-600"> Learn
                    More</a>
            </div>
            <div>
                <style>
                @keyframes bounceY {

                    0%,
                    100% {
                        transform: translateY(0);
                    }

                    50% {
                        transform: translateY(10px);
                    }
                }

                .animate-bounceY {
                    animation: bounceY 1s infinite;
                }
                </style>

                <button class="bg-white bg-opacity-50 text-red-800 p-4 rounded-full hover:bg-opacity-40 shadow-md"
                    onclick="document.getElementById('course_section').scrollIntoView({ behavior: 'smooth' });">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 animate-bounceY" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 9l-7 7-7-7M19 5l-7 7-7-7" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</section>

<section class="py-12 px-4 max-w-7xl mx-auto">
    <div>
        <div class="bg-red-600 text-white max-w-4xl mx-auto p-8 rounded-xl shadow-xl space-y-4">
              <h2 class="text-3xl font-bold mb-2">Message from the President</h2>

                <p>Kazumi Japanese & Culture School has built a foundation in education, culture training and pursuit of new knowledge.</p>

                <p>_________ president of Kazumi, believes that to strengthen Japanese language education, innovative methods and commitment towards immersive culture training should be prioritized.</p>

                <p>Our goal is not simply to educate but to harmoniously bring together the ideas of “Zenjin Education” and “Kaizen” for overall growth and global progress. With continuous refining of our educational schemes, updating academic material, and conducting in-depth analyses for every individual, we are rooted in building new value through Japanese Language and Culture programs.</p>

                <p>This spirit has made us the powerhouse of innovation, creativity and Asian hub for learning and education.</p>

                <p class="mt-4 font-semibold">— President, Kazumi Japanese & Culture School</p>

            </div>

        </div>
    </div>
</section>

@endsection