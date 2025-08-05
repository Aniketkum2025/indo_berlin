@extends('layouts.app')
@section('content')

<section>
    <div class="relative w-full h-screen overflow-hidden" style="background-size: cover; background-repeat: no-repeat; background-image: url(https://d1d5cy0fmpy9m8.cloudfront.net/images/1753942717banner.webp); background-position: top;">
        <!-- Video Background -->
        {{-- <video autoplay muted loop class="absolute top-0 left-0 w-full h-full object-cover">
            <source src="https://d1d5cy0fmpy9m8.cloudfront.net/images/175274277337088-413229662_medium.mp4"
                type="video/mp4">
            Your browser does not support the video tag.
        </video> --}}
        <div
            class="relative z-10 flex flex-col justify-center space-y-4 items-center h-full text-center text-white bg-black bg-opacity-30">
            <h1 class="text-3xl md:text-[48px] tracking-widest mb-10 font-[600]" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.35);">Welcome to Kazumi Japanese & Culture School </h1>
            <p class="capitalize text-xl md:text-3xl tracking-widest font-[600]"
                style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.95);" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.35);">新しい日本語教育と文化の基準を体験しましょう</p>
            <p class="capitalize text-xl md:text-3xl tracking-widest mt-4 font-[600]"
                style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.35);" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.35);">Discover a new standard of Japanese Education and Culture</p>
            <div class="flex space-x-4 mb-8 items-center justify-center">
                <a data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" type="button"
                    class="bg-red-500 text-white px-4 py-2 text-sm md:text-base rounded hover:bg-red-600">Apply
                    Now</a>
                <a href="/about-us" class="bg-red-500 text-white px-4 py-2 text-sm md:text-base rounded hover:bg-red-600"> Learn
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
            <h2 class="text-3xl font-bold mb-4">Kazumi - <span class="text-yellow-300">Where Harmony Meets Learning!</span></h2>

            <p>Kazumi Japanese & Culture School, is a <span class="font-semibold">top ranking Japanese language learning institute</span> by <span class="text-yellow-300 font-semibold">Henry Harvin®</span>, one of the largest Multinational Higher EdTech companies present globally.</p>

            <p>With a portfolio of <span class="font-semibold">1200+ courses</span> across <span class="font-semibold">37+ categories</span> and strong presence in the <span class="font-semibold">US, UK, UAE and India</span>, Henry Harvin® offers programs ranging from <span class="italic">Doctorate to Diploma</span>. We have trained <span class="font-semibold">460,000+ individuals</span>, conducted <span class="font-semibold">7,000+ classes per month</span>, and are registered training vendors to <span class="font-semibold">900+ corporate clients</span>.</p>

            <p>Kazumi encapsulates the spirit of <span class="italic">Harmony (和)</span> as our core value. We follow two renowned Japanese educational philosophies: <span class="font-semibold">Zenjin Education (全人教育)</span> and <span class="font-semibold">Kaizen (改善)</span>.</p>

            <p><span class="font-semibold">Zenjin Education</span> advocates nurturing the whole person. Kazumi ensures that our curriculum is designed to target the overall development of our students — not only intellectually, but also <span class="underline">artistically, creatively, and culturally</span>. Students gain mastery over the Japanese language, customs, values, and social norms.</p>

            <p>Kazumi also follows <span class="font-semibold">Kaizen</span>, the philosophy of <span class="underline">continuous improvement</span>. Our students are encouraged to make incremental progress daily, through regular feedback and the celebration of small achievements.</p>
        </div>
    </div>
</section>

<section class="text-white py-12 px-6">
    <div class="max-w-4xl mx-auto">
        <h2 class="text-center text-2xl md:text-3xl font-semibold mb-10 text-[#da2028] capitalize">Ideas Behind Kazumi’s 教育的 (kyōikuteki) Framework</h2>
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
{{-- <section class="bg-gray-100 py-12 px-6">
    <div class="max-w-4xl mx-auto text-center">
        <h2 class="text-3xl font-bold text-red-600 capitalize mb-8">Kazumi Advisory Board Members</h2>

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
</section> --}}
<section class="py-8">
    <div class="max-w-7xl mx-auto px-4">
        <!-- Advisory Board -->
        <h2 class="text-center text-2xl md:text-3xl font-semibold mb-4 text-[#da2028] capitalize mb-6">Kazumi Advisory Board Members</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-2 place-items-center">
            <!-- Mr. Kounal Gupta -->
            <div class="group bg-black border border-red-500 rounded-2xl shadow-lg p-4 w-full max-w-xs transition duration-300 hover:bg-red-600 hover:shadow-xl">
                <div class="rounded-2xl">
                    <img class="h-full w-full object-cover rounded-2xl"
                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753961762KounalGupta.jpg" alt="">
                </div>
                <div class="px-2">
                    <h2 class="text-white text-center text-[16px] pb-2">Mr. Kounal Gupta</h2>
                    <p class="text-white text-[14px] text-center font-[500]">CEO & Founder of Kazumi Japanese & Culture School</p>
                    <p class="text-white text-[14px] text-center">Board Advisor</p>
                </div>
            </div>
            <div class="group bg-black border border-red-500 rounded-2xl shadow-lg p-4 w-full max-w-xs transition duration-300 hover:bg-red-600 hover:shadow-xl">
                <div class="rounded-2xl">
                    <img class="h-full w-full object-cover rounded-2xl"
                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753961907IshuJain.jpg" alt="">
                </div>
                <div class="px-2">
                    <h2 class="text-white text-center text-[16px] pb-2">Mrs. Ishu Jain</h2>
                    <p class="text-white text-[14px] text-center font-[500]">Head of Academics</p>
                    <p class="text-white text-[14px] text-center">Board Advisor</p>
                </div>
            </div>
            <div class="group bg-black border border-red-500 rounded-2xl shadow-lg p-4 w-full max-w-xs transition duration-300 hover:bg-red-600 hover:shadow-xl">
                <div class="rounded-2xl">
                    <img class="h-full w-full object-cover rounded-2xl"
                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753961856seemarampal.jpg" alt="">
                </div>
                <div class="px-2">
                    <h2 class="text-white text-center text-[16px] pb-2">Mrs. Seema Rampal</h2>
                    <p class="text-white text-[14px] text-center font-[500]">Head of Faculty</p>
                    <p class="text-white text-[14px] text-center">Board Advisor</p>
                </div>
            </div>
            <div class="group bg-black border border-red-500 rounded-2xl shadow-lg p-4 w-full max-w-xs transition duration-300 hover:bg-red-600 hover:shadow-xl">
                <div class="rounded-2xl">
                    <img class="h-full w-full object-cover rounded-2xl"
                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1754287214a.jpg" alt="">
                </div>
                <div class="px-2">
                    <h2 class="text-white text-center text-[16px] pb-2">Toshiyuki Takayasu</h2>
                    {{-- <p class="text-white text-[14px] text-center font-[500]">Head of Faculty</p> --}}
                    <p class="text-white text-[14px] text-center">Board Advisor</p>
                </div>
            </div>
            <div class="group bg-black border border-red-500 rounded-2xl shadow-lg p-4 w-full max-w-xs transition duration-300 hover:bg-red-600 hover:shadow-xl">
                <div class="rounded-2xl">
                    <img class="h-full w-full object-cover rounded-2xl"
                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1754310784qsd.jpg" alt="">
                </div>
                <div class="px-2">
                    <h2 class="text-white text-center text-[16px] pb-2">Chinami Yamamoto</h2>
                    {{-- <p class="text-white text-[14px] text-center font-[500]">Head of Faculty</p> --}}
                    <p class="text-white text-[14px] text-center">Board Advisor</p>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="py-12 px-4 bg-gray-50">
    <div class="max-w-4xl mx-auto">
        <h2 class="text-2xl md:text-3xl font-bold text-red-600 mb-6 text-center">
            Kazumi 違い (chigai): What Sets Us Apart?
        </h2>

        <div class="overflow-x-auto">
            <table class="w-full text-left border border-gray-300 bg-white shadow-md text-sm md:text-base">
                <thead class="bg-red-600 text-white">
                    <tr>
                        <th class="p-3">Feature <br>特徴 (Tokuchō)</th>
                        <th class="p-3">Kazumi Japanese & Culture<br> (文化) School</th>
                        <th class="p-3">Other Japanese School <br>他の日本語学校 (hoka no nihongo gakkō)</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    <tr class="border-t">
                        <td class="p-3">Occupational & Cross Cultural Course</td>
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
                        <td class="p-3 text-center">✔</td>
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
                        <td class="p-3">Unique 10 in 1 Program</td>
                        <td class="p-3 text-center">✔</td>
                        <td class="p-3 text-center">✖</td>
                    </tr>
                    <tr class="border-t">
                        <td class="p-3">Occupational & Cross Cultural Course</td>
                        <td class="p-3 text-center">✔</td>
                        <td class="p-3 text-center">✔</td>
                    </tr>
                    <tr class="border-t bg-gray-50">
                        <td class="p-3">JLPT Exam Preparation</td>
                        <td class="p-3 text-center">✔</td>
                        <td class="p-3 text-center">✔</td>
                    </tr>
                    <tr class="border-t">
                        <td class="p-3">Japanese Culture Training</td>
                        <td class="p-3 text-center">✔</td>
                        <td class="p-3 text-center">✖</td>
                    </tr>
                    <tr class="border-t bg-gray-50">
                        <td class="p-3">International Networking/ Alumni</td>
                        <td class="p-3 text-center">✔</td>
                        <td class="p-3 text-center">✔</td>
                    </tr>
                    <tr class="border-t">
                        <td class="p-3">Highly rated and Certified by external organizations</td>
                        <td class="p-3 text-center">✔</td>
                        <td class="p-3 text-center">✔</td>
                    </tr>
                    <tr class="border-t bg-gray-50">
                        <td class="p-3">Internship Support</td>
                        <td class="p-3 text-center">✔</td>
                        <td class="p-3 text-center">✖</td>
                    </tr>
                    <tr class="border-t">
                        <td class="p-3">Recruitment Opportunities</td>
                        <td class="p-3 text-center">✔</td>
                        <td class="p-3 text-center">✖</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

@endsection