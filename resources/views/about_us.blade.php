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
            <p class="uppercase text-2xl md:text-4xl tracking-widest mb-4"
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
            <h2 class="text-3xl font-bold mb-2">Kazumi - <span class="text-yellow-300">Where Harmony Meets
                    Learning!</span></h2>

            <p>Kazumi Japanese & Culture School is a <span class="font-semibold">top ranking Japanese language
                    institute</span>,
                and a proud branch of <span class="font-semibold text-yellow-300">Henry Harvin</span>,
                one of the Largest Global Upskilling Companies in India.</p>

            <p>Kazumi encapsulates the spirit of <span class="italic">Harmony (和)</span> as our core value. We follow
                two renowned Japanese educational philosophies:</p>

            <ul class="list-disc ml-6 space-y-1">
                <li><span class="font-semibold">Zenjin Education (全人教育)</span>: Advocates nurturing the whole person.
                    Our curriculum targets <span class="underline">intellectual, artistic, creative, and cultural
                        growth</span>. Students master the Japanese language, customs, values, and social norms.</li>
                <li><span class="font-semibold">Kaizen (改善)</span>: The philosophy of <span class="underline">continuous
                        improvement</span>. Our students are encouraged to make incremental progress daily, with regular
                    feedback and the celebration of small achievements.</li>
            </ul>

            <p>Join Kazumi and experience a unique journey of learning, self-development, and cultural immersion!</p>
        </div>

    </div>
</section>
<section class="text-white py-12 px-6">
    <div class="max-w-4xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 border border-gray-200 bg-white">

            <!-- Card 1 -->
            <div class="grid gap-4 p-8 border-b border-r border-gray-200">
                <div class="text-3xl mt-1">💪</div>
                <div>
                    <h3 class="font-semibold text-lg text-red-600">Comprehensive Excellence (総合力 - Sōgōryoku)</h3>
                    <p class="text-gray-700 text-sm">At Kazumi, we value <strong>総合力</strong> – strength in more than
                        just language, but also culture and career.</p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="grid gap-4 p-8 border-b border-gray-200">
                <div class="text-3xl mt-1">🎎</div>
                <div>
                    <h3 class="font-semibold text-lg text-red-600">Tradition (伝統 - Dentō)</h3>
                    <p class="text-gray-700 text-sm">Experience <strong>伝統</strong> and innovation blended together —
                        modern learners can experience Kazumi’s traditional Japanese teaching for a contemporary
                        audience.</p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="grid gap-4 p-8 border-r border-gray-200">
                <div class="text-3xl mt-1">📈</div>
                <div>
                    <h3 class="font-semibold text-lg text-red-600">Growth (成長 - Seichō)</h3>
                    <p class="text-gray-700 text-sm">Your <strong>成長</strong> is our mission — Kazumi focuses on helping
                        you improve your language skills while growing as a person.</p>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="grid gap-4 p-8 border-gray-200">
                <div class="text-3xl mt-1">🚀</div>
                <div>
                    <h3 class="font-semibold text-lg text-red-600">Aspiration / Ambition (志 - Kokorozashi)</h3>
                    <p class="text-gray-700 text-sm">At Kazumi, every learner's <strong>志</strong> is supported —
                        fueling ambition with world-class instruction and opportunity.</p>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="grid gap-4 p-8 border-t border-r border-gray-200">
                <div class="text-3xl mt-1">🎯</div>
                <div>
                    <h3 class="font-semibold text-lg text-red-600">Challenge (挑戦 - Chōsen)</h3>
                    <p class="text-gray-700 text-sm">Take on new <strong>挑戦</strong> with Kazumi — learn to effortlessly
                        embrace fluency, confidence, and cultural understanding.</p>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="grid gap-4 p-8 border-t border-gray-200">
                <div class="text-3xl mt-1">🔮</div>
                <div>
                    <h3 class="font-semibold text-lg text-red-600">Future (未来 - Mirai)</h3>
                    <p class="text-gray-700 text-sm">Shape your <strong>未来</strong> with Kazumi — the first step to a
                        Japan-inspired future full of endless potential.</p>
                </div>
            </div>

            <!-- Card 7 -->
            <div class="grid gap-4 p-8 border-t border-gray-200 md:col-span-2">
                <div class="text-3xl mt-1">🌐</div>
                <div>
                    <h3 class="font-semibold text-lg text-red-600">Connection (繋がり - Tsunagari)</h3>
                    <p class="text-gray-700 text-sm">Build true <strong>繋がり</strong> with our global alumni network and
                        immersive community for lifelong learning.</p>
                </div>
            </div>

        </div>


    </div>
</section>
<section class="bg-gray-100 py-12 px-6">
    <div class="max-w-4xl mx-auto text-center">
        <h2 class="text-3xl font-bold text-red-600 uppercase mb-8">Kazumi Advisory Board Members</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

            <!-- Member 1 -->
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1752923457college-students-cramming-outdoor.jpg" alt="Kazumi Member" class="w-full h-40 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold text-gray-800">Mr. Kounal Gupta</h3>
                </div>
            </div>

            <!-- Member 2 -->
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1752923457college-students-cramming-outdoor.jpg" alt="Kazumi Member" class="w-full h-40 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold text-gray-800">Ms. Ishu Jain</h3>
                </div>
            </div>

            <!-- Member 3 -->
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1752923457college-students-cramming-outdoor.jpg" alt="Kazumi Member" class="w-full h-40 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold text-gray-800">Ms. Seema</h3>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="py-12 px-4 bg-gray-50">
    <div class="max-w-6xl mx-auto">
        <h2 class="text-2xl md:text-3xl font-bold text-red-600 mb-6 text-center">Kazumi Difference: What Sets Us Apart?</h2>

        <div class="overflow-x-auto">
            <table class="w-full text-left border border-gray-200 bg-white shadow-md">
                <thead class="bg-red-600 text-white">
                    <tr>
                        <th class="p-3 text-sm md:text-base">Feature</th>
                        <th class="p-3 text-sm md:text-base">Kazumi Japanese & Culture School</th>
                        <th class="p-3 text-sm md:text-base">Other Japanese School</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    <tr class="border-t">
                        <td class="p-3">Live Online Classes</td>
                        <td class="p-3 text-center">✔</td>
                        <td class="p-3 text-center">✔</td>
                    </tr>
                    <tr class="border-t bg-gray-50">
                        <td class="p-3">Personalized Learning</td>
                        <td class="p-3 text-center">✔</td>
                        <td class="p-3 text-center">✖</td>
                    </tr>
                    <tr class="border-t">
                        <td class="p-3">Job-Oriented Curriculum</td>
                        <td class="p-3 text-center">✔</td>
                        <td class="p-3 text-center">✖</td>
                    </tr>
                    <tr class="border-t bg-gray-50">
                        <td class="p-3">Mobile App for Learning</td>
                        <td class="p-3 text-center">✔</td>
                        <td class="p-3 text-center">✖</td>
                    </tr>
                    <tr class="border-t">
                        <td class="p-3">In-House Publications/Books & Goods</td>
                        <td class="p-3 text-center">✔</td>
                        <td class="p-3 text-center">✖</td>
                    </tr>
                    <tr class="border-t bg-gray-50">
                        <td class="p-3">Japanese Culture Training</td>
                        <td class="p-3 text-center">✔</td>
                        <td class="p-3 text-center">✖</td>
                    </tr>
                    <tr class="border-t">
                        <td class="p-3">International Networking/ Alumni</td>
                        <td class="p-3 text-center">✔</td>
                        <td class="p-3 text-center">✖</td>
                    </tr>
                    <tr class="border-t bg-gray-50">
                        <td class="p-3">Highly rated and Certified by external organizations</td>
                        <td class="p-3 text-center">✔</td>
                        <td class="p-3 text-center">✖</td>
                    </tr>
                    <tr class="border-t">
                        <td class="p-3">Internship Support</td>
                        <td class="p-3 text-center">✔</td>
                        <td class="p-3 text-center">✖</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection