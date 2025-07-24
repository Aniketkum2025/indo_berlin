@extends('layouts.app')
@section('content')

<section class="py-12">
    <div class="max-w-7xl mx-auto px-4 py-12">
        <h2 class="text-center text-2xl md:text-3xl font-semibold mb-10 text-[#da2028] uppercase my-4">Esteemed Faculty
        </h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 p-6 place-items-center">

            <!-- CARD TEMPLATE START -->
            <!-- Repeat this block for each member -->
            <div
                class="group bg-black border border-red-500 rounded-2xl shadow-lg p-4 w-full max-w-xs transition duration-300 hover:bg-red-600 hover:shadow-xl">
                <div class="overflow-hidden rounded-2xl">
                    <img class="w-full h-64 object-cover rounded-2xl"
                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/17532613282nd.webp" alt="">
                </div>
                <div class="mt-4 text-center">
                    <h2
                        class="text-[18px] md:text-[20px] font-semibold text-red-500 group-hover:text-white transition duration-300">
                        Sonali Srivastava</h2>
                    <h3
                        class="text-[16px] md:text-[18px] font-medium text-black group-hover:text-white transition duration-300">
                        3+ Years Of Experience</h3>
                    <!-- <p class="text-[14px] md:text-[16px] text-gray-300 group-hover:text-white transition duration-300">
                        Japanese Language Specialist</p> -->
                </div>
            </div>
            <!-- CARD TEMPLATE END -->

            <!-- COPY BELOW CARDS TO MATCH YOUR DATA -->

            <div
                class="group bg-black border border-red-500 rounded-2xl shadow-lg p-4 w-full max-w-xs transition duration-300 hover:bg-red-600 hover:shadow-xl">
                <div class="overflow-hidden rounded-2xl">
                    <img class="w-full h-64 object-cover rounded-2xl"
                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/17532671153rd.webp" alt="">
                </div>
                <div class="mt-4 text-center">
                    <h2
                        class="text-[18px] md:text-[20px] font-semibold text-red-500 group-hover:text-white transition duration-300">
                        Claire</h2>
                    <h3
                        class="text-[16px] md:text-[18px] font-medium text-black group-hover:text-white transition duration-300">
                        6+ Years Of Experience</h3>
                    <!-- <p class="text-[14px] md:text-[16px] text-gray-300 group-hover:text-white transition duration-300">
                        French Language Expert</p> -->
                </div>
            </div>

            <div
                class="group bg-black border border-red-500 rounded-2xl shadow-lg p-4 w-full max-w-xs transition duration-300 hover:bg-red-600 hover:shadow-xl">
                <div class="overflow-hidden rounded-2xl">
                    <img class="w-full h-64 object-cover rounded-2xl"
                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/17532671964rd.webp" alt="">
                </div>
                <div class="mt-4 text-center">
                    <h2
                        class="text-[18px] md:text-[20px] font-semibold text-red-500 group-hover:text-white transition duration-300">
                        Sucheta Patil</h2>
                    <h3
                        class="text-[16px] md:text-[18px] font-medium text-black group-hover:text-white transition duration-300">
                        9+ Years Of Experience</h3>
                    <!-- <p class="text-[14px] md:text-[16px] text-gray-300 group-hover:text-white transition duration-300">
                        Language Coach</p> -->
                </div>
            </div>

            <div
                class="group bg-black border border-red-500 rounded-2xl shadow-lg p-4 w-full max-w-xs transition duration-300 hover:bg-red-600 hover:shadow-xl">
                <div class="overflow-hidden rounded-2xl">
                    <img class="w-full h-64 object-cover rounded-2xl"
                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/17532672225rd.webp" alt="">
                </div>
                <div class="mt-4 text-center">
                    <h2
                        class="text-[18px] md:text-[20px] font-semibold text-red-500 group-hover:text-white transition duration-300">
                        Swagata</h2>
                    <h3
                        class="text-[16px] md:text-[18px] font-medium text-black group-hover:text-white transition duration-300">
                        3+ Years Of Experience</h3>
                    <!-- <p class="text-[14px] md:text-[16px] text-gray-300 group-hover:text-white transition duration-300">
                        Curriculum Designer</p> -->
                </div>
            </div>

            <div
                class="group bg-black border border-red-500 rounded-2xl shadow-lg p-4 w-full max-w-xs transition duration-300 hover:bg-red-600 hover:shadow-xl">
                <div class="overflow-hidden rounded-2xl">
                    <img class="w-full h-64 object-cover rounded-2xl"
                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/17532672456rd.webp" alt="">
                </div>
                <div class="mt-4 text-center">
                    <h2
                        class="text-[18px] md:text-[20px] font-semibold text-red-500 group-hover:text-white transition duration-300">
                        Siddharth Chopra</h2>
                    <h3
                        class="text-[16px] md:text-[18px] font-medium text-black group-hover:text-white transition duration-300">
                        4+ Years Of Experience</h3>
                    <!-- <p class="text-[14px] md:text-[16px] text-gray-300 group-hover:text-white transition duration-300">
                        Instructor</p> -->
                </div>
            </div>

            <div
                class="group bg-black border border-red-500 rounded-2xl shadow-lg p-4 w-full max-w-xs transition duration-300 hover:bg-red-600 hover:shadow-xl">
                <div class="overflow-hidden rounded-2xl">
                    <img class="w-full h-64 object-cover rounded-2xl"
                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/17532672727rd.webp" alt="">
                </div>
                <div class="mt-4 text-center">
                    <h2
                        class="text-[18px] md:text-[20px] font-semibold text-red-500 group-hover:text-white transition duration-300">
                        Saniya Parchure</h2>
                    <h3
                        class="text-[16px] md:text-[18px] font-medium text-black group-hover:text-white transition duration-300">
                        3+ Years Of Experience</h3>
                    <!-- <p class="text-[14px] md:text-[16px] text-gray-300 group-hover:text-white transition duration-300">
                        Content Developer</p> -->
                </div>
            </div>

            <div
                class="group bg-black border border-red-500 rounded-2xl shadow-lg p-4 w-full max-w-xs transition duration-300 hover:bg-red-600 hover:shadow-xl">
                <div class="overflow-hidden rounded-2xl">
                    <img class="w-full h-64 object-cover rounded-2xl"
                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/17532673008rd.webp" alt="">
                </div>
                <div class="mt-4 text-center">
                    <h2
                        class="text-[18px] md:text-[20px] font-semibold text-red-500 group-hover:text-white transition duration-300">
                        Aditya</h2>
                    <h3
                        class="text-[16px] md:text-[18px] font-medium text-black group-hover:text-white transition duration-300">
                        3+ Years Of Experience</h3>
                    <!-- <p class="text-[14px] md:text-[16px] text-gray-300 group-hover:text-white transition duration-300">
                        Language Trainer</p> -->
                </div>
            </div>

            <div
                class="group bg-black border border-red-500 rounded-2xl shadow-lg p-4 w-full max-w-xs transition duration-300 hover:bg-red-600 hover:shadow-xl">
                <div class="overflow-hidden rounded-2xl">
                    <img class="w-full h-64 object-cover rounded-2xl"
                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/17532673279rd.webp" alt="">
                </div>
                <div class="mt-4 text-center">
                    <h2
                        class="text-[18px] md:text-[20px] font-semibold text-red-500 group-hover:text-white transition duration-300">
                        Apeksha</h2>
                    <h3
                        class="text-[16px] md:text-[18px] font-medium text-black group-hover:text-white transition duration-300">
                        4+ Years Of Experience</h3>
                    <!-- <p class="text-[14px] md:text-[16px] text-gray-300 group-hover:text-white transition duration-300">
                        Japanese Specialist</p> -->
                </div>
            </div>

            <div
                class="group bg-black border border-red-500 rounded-2xl shadow-lg p-4 w-full max-w-xs transition duration-300 hover:bg-red-600 hover:shadow-xl">
                <div class="overflow-hidden rounded-2xl">
                    <img class="w-full h-64 object-cover rounded-2xl"
                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753267852prachi.webp" alt="">
                </div>
                <div class="mt-4 text-center">
                    <h2
                        class="text-[18px] md:text-[20px] font-semibold text-red-500 group-hover:text-white transition duration-300">
                        Prachi</h2>
                    <h3
                        class="text-[16px] md:text-[18px] font-medium text-black group-hover:text-white transition duration-300">
                        3+ Years Of Experience</h3>
                    <!-- <p class="text-[14px] md:text-[16px] text-gray-300 group-hover:text-white transition duration-300">
                        Language Support</p> -->
                </div>
            </div>

            <div
                class="group bg-black border border-red-500 rounded-2xl shadow-lg p-4 w-full max-w-xs transition duration-300 hover:bg-red-600 hover:shadow-xl">
                <div class="overflow-hidden rounded-2xl">
                    <img class="w-full h-64 object-cover rounded-2xl"
                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753268519abha.webp" alt="">
                </div>
                <div class="mt-4 text-center">
                    <h2
                        class="text-[18px] md:text-[20px] font-semibold text-red-500 group-hover:text-white transition duration-300">
                        Abha</h2>
                    <h3
                        class="text-[16px] md:text-[18px] font-medium text-black group-hover:text-white transition duration-300">
                        3+ Years Of Experience</h3>
                    <!-- <p class="text-[14px] md:text-[16px] text-gray-300 group-hover:text-white transition duration-300">
                        Training Specialist</p> -->
                </div>
            </div>

            <div
                class="group bg-black border border-red-500 rounded-2xl shadow-lg p-4 w-full max-w-xs transition duration-300 hover:bg-red-600 hover:shadow-xl">
                <div class="overflow-hidden rounded-2xl">
                    <img class="w-full h-64 object-cover rounded-2xl"
                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753268551malini.webp" alt="">
                </div>
                <div class="mt-4 text-center">
                    <h2
                        class="text-[18px] md:text-[20px] font-semibold text-red-500 group-hover:text-white transition duration-300">
                        Malini</h2>
                    <h3
                        class="text-[16px] md:text-[18px] font-medium text-black group-hover:text-white transition duration-300">
                        3+ Years Of Experience</h3>
                    <!-- <p class="text-[14px] md:text-[16px] text-gray-300 group-hover:text-white transition duration-300">
                        Instructor</p> -->
                </div>
            </div>

            <div
                class="group bg-black border border-red-500 rounded-2xl shadow-lg p-4 w-full max-w-xs transition duration-300 hover:bg-red-600 hover:shadow-xl">
                <div class="overflow-hidden rounded-2xl">
                    <img class="w-full h-64 object-cover rounded-2xl"
                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753268583shivalika.webp" alt="">
                </div>
                <div class="mt-4 text-center">
                    <h2
                        class="text-[18px] md:text-[20px] font-semibold text-red-500 group-hover:text-white transition duration-300">
                        Shivalika</h2>
                    <h3
                        class="text-[16px] md:text-[18px] font-medium text-black group-hover:text-white transition duration-300">
                        3+ Years Of Experience</h3>
                    <!-- <p class="text-[14px] md:text-[16px] text-gray-300 group-hover:text-white transition duration-300">
                        Trainer & Guide</p> -->
                </div>
            </div>

        </div>
    </div>
</section>
@endsection