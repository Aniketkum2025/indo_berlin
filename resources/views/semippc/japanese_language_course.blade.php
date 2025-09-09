@extends('semippc.layouts.main')
@section('title')Japanese Language course @endsection
@section('main-section')
{{-- main section --}}
    <section class="text-white" style="background: radial-gradient(circle, #BC002D 20%, #FFFFFF 20%);">
        <div class="px-6 py-10 lg:py-16" style="background-color:#000000b0">
            <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-10 items-start">
                <div class="lg:col-span-2 space-y-4">
                    <h1 class="text-3xl lg:text-4xl font-[600] leading-tight">Japanese Language Course - Job Guarantee Program</h1>
                    <ul class="list-disc ml-5 text-lg space-y-2">
                        <li>160 Hrs (145 Hrs Training+10 Hrs GD+5 Hrs Exam Prep) of Japanese language course</li>
                        <li>Gain Proficiency in 4 writing systems of the Japanese Language: Kaji, Hiragana, katakana, Romaji</li>
                        <li>Prepare for the JLPT, a Japanese Proficiency Exams</li>
                    </ul>
                    <div class="mt-6 text-yellow-400 text-[22px] flex flex-col space-y-2">
                        <p class="">
                            <a data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" type="button">
                                <strong>Forbes</strong> 
                                features Henry Harvin 
                                <span class="text-white font-semibold">4.8 / 5</span> ⭐⭐⭐⭐⭐
                            </a>
                        </p>
                        <p class="text-white"><span class="text-yellow-400">★ 4.9</span> (1583 Ratings) • 2129 Learners</p>
                    </div>
                </div>
                <div>
                    <div class="bg-white text-gray-800 p-6 rounded shadow-md space-y-4">
                        <form class="brochure-form space-y-4" id="brochureForm" action="javascript:void(0);">
                            <h3 class="text-lg font-semibold text-center">Download Course Brochure </h3>
                            @if(isset($_GET['utm_campaign']))
                                <input type="hidden" name="campaign_name" value="<?= $_GET['utm_campaign'] ?>" id="campaign_name">
                            @endif
                            @if(isset($_GET['gclid']))
                                <input type="hidden" name="gclid_field" value="<?= $_GET['gclid'] ?>" id="gclid_field">
                            @endif
                            @if(isset($_GET['msclkid']))
                                <input type="hidden" name="msclkid_field" value="<?= $_GET['msclkid'] ?>" id="msclkid_field">
                            @endif
                            <input type="hidden" name="lead_source_page_url" class="textbox" value="{{url()->full()}}" placeholder="" id="" />
                            <input type="hidden" name="slug" class="textbox" value="japanese-language-course" placeholder="" id="">
                            <input type="hidden" name="source" class="textbox" value="FORM PPC" placeholder="" id="source">
                            <input type="hidden" name="course" class="textbox" value="PG-JAPANESE" placeholder="" id="crm_course_id">
                            <input type="hidden" name="description2" class="textbox" value="Japanese Language Course - Job Guarantee Program PPC" placeholder="" id="description2">
                         
                            <input type="email" name="email" placeholder="Enter email here" class="w-full border border-gray-300 px-3 py-2 rounded focus:outline-none focus:ring-2 focus:ring-red-500" />
                            <div class="flex gap-2">
                                <select name="country_code" class="w-1/3 border border-gray-300 px-2 py-2 rounded focus:outline-none focus:ring-2 focus:ring-red-500">
                                    @include('semippc.component.number')
                                </select>
                                <input type="tel" name="number" placeholder="Enter phone here" class="w-2/3 border border-gray-300 px-3 py-2 rounded focus:outline-none focus:ring-2 focus:ring-red-500" />
                            </div>
                            <button id="form-one-button" class="w-full bg-red-600 hover:bg-red-900 text-white py-3 rounded-md font-semibold submit-btn">Send Me Brochure »</button>
                        </form>
                    </div>
                    @include('semippc.component.nsdc-logo')
                </div>
            </div>
        @include('semippc.component.logo')
         </div>
    </section>

    @include('semippc.component.exclusive-course', [
        'cards' => [
            [
                'title' => 'Native Experienced Trainers',
                'description' => 'Undertake Japanese language course from the Certified Native Japanese Trainers',
                'bgColor' => '#fca5a5',
                'textColor' => '#7f1d1d',
                'imageUrl' => 'https://hh-certificates.sgp1.cdn.digitaloceanspaces.com/images/1689772295in1.webp'
            ],
            [
                'title' => 'Comprehensive Curriculum',
                'description' => 'Enhance Japanese learning from a curriculum designed as per CEFR Standards',
                'bgColor' => '#a5a2a2',
                'textColor' => '#220404',
                'imageUrl' => 'https://hh-certificates.sgp1.cdn.digitaloceanspaces.com/images/1689772412in2.webp'
            ],
            [
                'title' => 'Modules',
                'description' => 'Master all Japanese levels in the most Hybrid Japanese learning modules of the Japanese language course',
                'bgColor' => '#a8edfc',
                'textColor' => '#1c4980',
                'imageUrl' => 'https://hh-certificates.sgp1.cdn.digitaloceanspaces.com/images/1689772479in3.webp'
            ],
            [
                'title' => '100% Guidance',
                'description' => '100% Guidance to ace Japanese Language exams such as DLF, DELF, DALF, DCL, & TCF',
                'bgColor' => '#fef9c3',
                'textColor' => '#854d0e',
                'imageUrl' => 'https://hh-certificates.sgp1.cdn.digitaloceanspaces.com/images/1689772546in4.webp'
            ],
            [
                'title' => 'Gold Membership',
                'description' => 'Get a 1-Year Gold Membership of Language Academy',
                'bgColor' => '#d8b4fe',
                'textColor' => '#581c87',
                'imageUrl' => 'https://hh-certificates.sgp1.cdn.digitaloceanspaces.com/images/1689772601in5.webp'
            ],
            [
                'title' => 'Career Guidance',
                'description' => 'Get a 1 to 1 Career Guidance Post Completing a Japanese Level',
                'bgColor' => '#8cb9cf',
                'textColor' => '#125b7e',
                'imageUrl' => 'https://hh-certificates.sgp1.cdn.digitaloceanspaces.com/images/1689772744in7.webp'
            ]
        ]
    ])
    @include('semippc.component.why-us')

   <!-- About the Course Section -->
<section class="bg-[#f5f5dc]">
  <div class="md:mx-[100px] mx-[1rem] py-4 grid grid-cols-1 gap-x-8 gap-y-10">
    <div x-data="{ selected: null }">
      <button 
        @click="selected !== 1 ? selected = 1 : selected = null"
        class="relative flex w-full rounded-md bg-[#e32626] py-2 px-4 text-base font-semibold text-white transition duration-300 ease-in-out justify-between items-center"
      >
        <div>
          <h3>About the Course</h3>
        </div>
        <div>
          <span class="text-[26px] transition-all block" :class="selected === 1 ? 'rotate-45' : ''">+</span>
        </div>
      </button>

      <div 
        x-show="selected === 1" 
        class="text-sm rounded-xl p-3"
        x-transition:enter="transition ease-out duration-100"
        x-transition:enter-start="transform opacity-0 scale-95"
      >
        <div class="leading-10">
          <h3 class="md:text-[30px] text-[22px] py-2">Japanese Language Course</h3>
<p>
  Learn the most fast-paced spoken language of the world in Henry HarvinⓇ. Japanese language course in Henry HarvinⓇ aims to develop the interpersonal skills of the candidates. The course is designed to gain an excellent knowledge of the Japanese language at 5 different levels. The training program is divided into 5 levels:
</p>

<ul class="list-disc list-inside space-y-2 mt-3 space-y-1">
  <li>
    <strong>Elementary level – N5:</strong> Basics of Japanese — sentence structure, typical expressions, hiragana, katakana, basic kanji, and spoken conversation.
  </li>
  <li>
    <strong>Pre-Intermediate level – N4:</strong> Focus on grammar and vocabulary.
  </li>
  <li>
    <strong>Intermediate level – N3:</strong> Bridging level — develops linguistic skills in reading and writing.
  </li>
  <li>
    <strong>Pre-Advanced level – N2:</strong> Covers reading comprehension, language knowledge, and listening comprehension.
  </li>
  <li>
    <strong>Advanced level – N1:</strong> Highest level — reading kanji, books, magazines, newspapers; complete mastery of the Japanese language.
  </li>
</ul>

<h3 class="text-xl md:text-2xl font-bold mt-6 mb-2">9 in 1 Course</h3>
 <ul>
    <li style="list-style-type:disc"><span style="font-size:10.5pt"><span style="font-family:Arial"><span style="color:#434343"><strong>Training: </strong></span></span></span><span style="font-size:10.5pt"><span style="font-family:Arial"><span style="color:#434343">&nbsp;Two-way Live Online Interactive Session</span></span></span></li>
    </ul>
    <p><span style="font-size:10.5pt"><span style="font-family:Arial"><span style="color:#434343">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;N5: 160 Hours</span></span></span></p>
    <p><span style="font-size:10.5pt"><span style="font-family:Arial"><span style="color:#434343">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;N4: 160 Hours</span></span></span></p>
    <p><span style="font-size:10.5pt"><span style="font-family:Arial"><span style="color:#434343">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;N3: 160 Hours</span></span></span></p>
    <p><span style="font-size:10.5pt"><span style="font-family:Arial"><span style="color:#434343">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;N2: 160 Hours</span></span></span></p>
    <p><span style="font-size:10.5pt"><span style="font-family:Arial"><span style="color:#434343">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;N1: 80 Hours &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span></span></span></p>
</ul>
 <ul>
  <li><strong>Training:</strong> Two-way Live Online Interactive Session</li>
  <li><strong>Projects:</strong> Facility to undergo projects in Japanese Language, implementation and more</li>
  <li><strong>Internship:</strong> To gain practical knowledge in Japanese Language</li>
  <li><strong>Certification:</strong> Govt. of India recognized certification from Henry Harvin®</li>
  <li><strong>Placement:</strong> 100% Placement Support for one-year post successful completion</li>
  <li><strong>E-learning:</strong> Access to abundant tools and techniques, video content, assessment, and more</li>
  <li><strong>Masterclass:</strong> 52+ sessions over the next 12 months</li>
  <li><strong>Hackathons:</strong> Free access to #AskHenry hackathons and competitions</li>
  <li><strong>Membership:</strong> 1-year Gold Membership of Henry Harvin® Language Academy</li>
</ul>

<h3 class="text-xl md:text-2xl font-bold mt-6 mb-2">Trainers at Henry Harvin®</h3>
<ul class="list-disc list-inside space-y-2">
  <li>Most renowned industry trainers with <strong>11+ years of working experience</strong></li>
  <li>Invited for <strong>120+ keynotes</strong> classes</li>
  <li>Delivered <strong>155+ lectures</strong> and currently empaneled as domain experts</li>
</ul>

<h3 class="text-xl md:text-2xl font-bold mt-6 mb-2">Gold Membership Benefits</h3>
<ul class="list-disc list-inside space-y-2">
  <li>1 year Gold Membership with <strong>E-Learning Access</strong></li>
  <li><strong>Masterclass Sessions</strong> for 1 year</li>
  <li>Prestigious <strong>Henry Harvin® Alumni Status</strong> + Guaranteed Internship</li>
  <li>Weekly <strong>10+ job opportunities</strong></li>
  <li><strong>Industry projects</strong> during the training</li>
</ul>

<h3 class="text-xl md:text-2xl font-bold mt-6 mb-2">Learning Benefits</h3>
<ul class="list-disc list-inside space-y-2">
  <li>Develop competence in accomplishing tasks in Japanese</li>
  <li><strong>Broaden your perspective</strong> on Japanese culture</li>
  <li>Learn <strong>Japanese fonts</strong> and script</li>
  <li>Enhance <strong>reading, writing, listening, speaking</strong> skills</li>
  <li><strong>Communicate habitual actions</strong> better</li>
  <li>Improve <strong>language sensitivity</strong></li>
  <li>Stand out by speaking Japanese <strong>fluently</strong></li>
  <li>Advance <strong>cross-cultural skills</strong></li>
</ul>

<h3 class="text-xl md:text-2xl font-bold mt-6 mb-2">Career Benefits</h3>
<ul class="list-disc list-inside space-y-2">
  <li><strong>Better job scope</strong> as Translator, Interpreter, Trainer</li>
  <li><strong>High competitive edge</strong> and <strong>better pay</strong></li>
  <li><strong>Boost</strong> your profile with linguistics & translation skills</li>
  <li><strong>Promotions</strong> and career growth</li>
  <li>Get hired by <strong>Amazon, Google, JP Morgan</strong> etc.</li>
  <li><strong>Stronger CV & LinkedIn</strong> profile</li>
  <li><strong>Job security</strong> with career growth</li>
  <li><strong>Global networking</strong> opportunities</li>
</ul>
        </div>
      </div>
    </div>
  </div>
</section>
 <section class="bg-[#e9ecef]">
        <div class="md:mx-[100px] mx-[1rem] py-4 grid grid-cols-1 gap-x-8 gap-y-10 md:grid-cols-1 lg:grid-cols-1">
            <div x-data="{ selected: null }" class="">
                <div class="">
                    <button @click="selected !== 2 ? selected = 2 : selected = null"
                        class="relative flex w-full rounded-md bg-[#e32626] py-2 px-4 text-base font-semibold text-white transition duration-300 ease-in-out justify-between items-center">
                        <div>
                            <h3 class="">Course Curriculum</h3>
                        </div>
                        <div>
                            <span class="text-[26px] transition-all block"
                                :class="selected === 2 ? 'rotate-45' : ''">+</span>
                        </div>
                    </button>
                   <div x-show="selected === 2" class="text-sm rounded-xl p-3"
    x-transition:enter="transition ease-out duration-100"
    x-transition:enter-start="transform opacity-0 scale-95" style="display: none;">
    <div>
        <div x-data="{ selected: null }" class="">
            <div class="">
                <button @click="selected !== 3 ? selected = 3 : selected = null"
                    class="relative flex justify-between items-center w-full rounded-md py-2 px-4 text-base font-semibold text-white transition duration-300 ease-in-out">
                    <div>
                        <h3 class="text-gray-600 text-left">N5 Level</h3>
                    </div>
                    <div>
                        <span
                            class="text-[14px] bg-[#E32626] p-2 rounded-md text-white transition-all block">Preview</span>
                    </div>
                </button>
                <div x-show="selected === 3" class="text-sm rounded-xl p-3"
                    x-transition:enter="transition ease-out duration-100"
                    x-transition:enter-start="transform opacity-0 scale-95" style="display: none;">
                    <div class="leading-7 space-y-3">

                        <!-- Module 1 -->
                        <p class="font-semibold">Module 1: Introduction</p>
                        <p>Learn Japanese Language, reading and writing basics and special accents</p>
                        <ul class="list-disc pl-5">
                            <li>Ice Breaker- Learning Matrix explanation</li>
                            <li>Introduction to the 3 Scripts</li>
                            <li>Basic Accents in Japanese Language- アクセント</li>
                        </ul>

                        <!-- Module 2 -->
                        <p class="font-semibold">Module 2: Hiragana Syllabary</p>
                        <p>Basic script understanding, word formation, reading and usage</p>
                        <ul class="list-disc pl-5">
                            <li>Phonetics of Hiragana, Stroke Order- ひらがな書き順</li>
                            <li>あ/ か/ さ groups</li>
                            <li>な/ た/ は groups and words</li>
                            <li>ま/ ら/ わ/ ん groups and words</li>
                            <li>Writing and Reading words in Hiragana</li>
                            <li>Derivatives concept　が　ざ　だ　ば　ぱ- Phonetics Jump</li>
                            <li>Stress Sounds- Double sounds</li>
                            <li>Long Sounds</li>
                            <li>Reading/Writing of Hiragana Words- 読み書き練習</li>
                        </ul>

                        <!-- Module 3 -->
                        <p class="font-semibold">Module 3: Katakana Syllabary</p>
                        <p>Learn about second script of Japanese Language</p>
                        <ul class="list-disc pl-5">
                            <li>Significance of Katakana- Phonetics</li>
                            <li>Stroke Order ア　から　ン　まで</li>
                            <li>Long Sounds- いい、えい、うう、おう</li>
                            <li>Derivatives concept　ガ　ザ　ダ　バ　パ</li>
                            <li>Stress Sounds- つ使い</li>
                            <li>Word Formation of Foreign Words</li>
                            <li>Important Katakana Words List and formation</li>
                        </ul>

                        <!-- Module 4 -->
                        <p class="font-semibold">Module 4: Greetings/Expressions</p>
                        <p>Learn about special greetings used in Japanese Language</p>
                        <ul class="list-disc pl-5">
                            <li>挨拶</li>
                            <li>表現</li>
                        </ul>

                        <!-- Module 5 -->
                        <p class="font-semibold">Module 5: Beginners Terminologies</p>
                        <ul class="list-disc pl-5">
                            <li>Days of the Week- 月曜から日曜まで</li>
                            <li>Numbers 1-100</li>
                            <li>30 words vocabulary</li>
                            <li>Months of the Year- 一月から１２月まで</li>
                            <li>Significance of Prefixes and Suffixes- お、語、人</li>
                        </ul>

                        <!-- Module 6 -->
                        <p class="font-semibold">Module 6: Verbs</p>
                        <ul class="list-disc pl-5">
                            <li>Verbs Types and description/ Sentence Syntax- 文章図栗</li>
                            <li>Desu/ Usage/Basic Tenses- です作り方</li>
                            <li>Arimasu/Usage/Basic Tenses- あります作り方</li>
                            <li>Masu/Usage/Basic Tenses- ます形作り方</li>
                            <li>Verb List- 語彙リスト</li>
                            <li>Subject Verb relation</li>
                        </ul>
<!-- Module 7 -->
                        <p class="font-semibold">Module 7: Counter Suffixes</p>
                        <ul class="list-disc pl-5">
                            <li>Suffixes as per the category e.g., だい、まい、人- 台，まい、人、かい、がい、はい</li>
                        </ul>

                        <!-- Module 8 -->
                        <p class="font-semibold">Module 8: Introduction to Particles</p>
                        <ul class="list-disc pl-5">
                            <li>Significance of Particles in a sentence</li>
                            <li>は　で　に　を　と　も　から　まで　- 上司使い方</li>
                            <li>Sentence Formation- 文章作り方</li>
                            <li>復習</li>
                        </ul>

                        <!-- Module 9 -->
                        <p class="font-semibold">Module 9: Introduction to Adverbs</p>
                        <ul class="list-disc pl-5">
                            <li>とても　あまり　だんだん、ますますなど</li>
                        </ul>

                        <!-- Module 10 -->
                        <p class="font-semibold">Module 10: Introduction to Adjectives</p>
                        <ul class="list-disc pl-5">
                            <li>Types of Adjectives and its Mechanism- 形容詞類</li>
                            <li>いAdjectives & Tenses of I Adjectives- い形容詞</li>
                            <li>Na Adjectives & Tenses of Na- Adjectives- な形容詞</li>
                        </ul>

                        <!-- Module 11 -->
                        <p class="font-semibold">Module 11: Introduction to Kanjis</p>
                        <ul class="list-disc pl-5">
                            <li>Understanding the Origin and its geometry</li>
                            <li>Stroke Order and its significance</li>
                            <li>Kanjis and its readings- 音読み及び訓読み</li>
                            <li>Usage of Kanjis in a sentence- 文章付き漢字</li>
                        </ul>

                        <!-- Module 12 -->
                        <p class="font-semibold">Module 12: Conversation Ethics</p>
                        <ul class="list-disc pl-5">
                            <li>Kaiwa as per Japanese Culture- 会話表現</li>
                            <li>Jiko Shoukai- 自己紹介</li>
                            <li>Asking Questions- どうして、どれ、どの、どこ</li>
                        </ul>

                        <!-- Module 13 -->
                        <p class="font-semibold">Module 13: Introduction to N5 Advance</p>
                        <ul class="list-disc pl-5">
                            <li>JLPT N5- Learning Matrix explanation</li>
                            <li>Kanji of Number and time- 数字漢字, 時間漢字</li>
                            <li>Readings and Stroke order- 漢字意味及び読み書き</li>
                        </ul>

                        <!-- Module 14 -->
                        <p class="font-semibold">Module 14: Verbs</p>
                        <ul class="list-disc pl-5">
                            <li>V ましょう- 文章作り</li>
                            <li>V た- 文章作り</li>
                            <li>形- 文章作り</li>
                            <li>V辞書形-文章作り</li>
                            <li>Ｖ普通形- Ｖ普通形作り方</li>
                            <li>文章翻訳及び意味わかり- 読み書き練習</li>
                        </ul>

                        <!-- Module 15 -->
                        <p class="font-semibold">Module 15: Phrases</p>
                        <ul class="list-disc pl-5">
                            <li>ことができる, ことがある- 文章作り, 会話表現</li>
                            <li>や　や　など</li>
                            <li>とか　とか　Ｖ</li>
                        </ul>

                        <!-- Module 16 -->
                        <p class="font-semibold">Module 16: Conversation Cont</p>
                        <ul class="list-disc pl-5">
                            <li>そうですね, そうですか, ええと- 会話表現</li>
                            <li>すきです</li>
                            <li>嫌いです- 文章作り方</li>
                        </ul>

                        <!-- Module 17 -->
                        <p class="font-semibold">Module 17: Special Adjectives</p>
                        <ul class="list-disc pl-5">
                            <li>が　欲しい　です- 得意形容詞</li>
                        </ul>

                        <!-- Module 18 -->
                        <p class="font-semibold">Module 18: Telling Time</p>
                        <ul class="list-disc pl-5">
                            <li>何時, 何時間, 午前, 午後, ごろ, ぐらい- 会話表現</li>
                            <li>形容詞付き, 副詞形容詞付き- 文章作り練習及び説明</li>
                            <li>Comprehensions solving- 読解問題</li>
                        </ul>

                        <!-- Module 19 -->
                        <p class="font-semibold">Module 19: Verbs Cont..</p>
                        <ul class="list-disc pl-5">
                            <li>たけい, たりたりする- 文章付き</li>
                            <li>たりたりする, たけいあとで, 辞書形前に</li>
                        </ul>

                        <!-- Module 20 -->
                        <p class="font-semibold">Module 20: Kanjis Cont..</p>
                        <ul class="list-disc pl-5">
                            <li>Meaning Stroke order and Readings</li>
                            <li>訓読み付き言葉- 練習</li>
                            <li>復習</li>
                        </ul>

                        <!-- Module 21 -->
                        <p class="font-semibold">Module 21: Adverbs Cont..</p>
                        <ul class="list-disc pl-5">
                            <li>どんどん, もともと, 時々, 色々, わざわざ, だいたい, ずいぶん- 意味付き文章作り方</li>
                        </ul>

                        <!-- Module 22 -->
                        <p class="font-semibold">Module 22: Adjectives Cont..</p>
                        <ul class="list-disc pl-5">
                            <li>Complex Adjectives with its correct usage- 形容詞類, 文章付き, 注意すること</li>
                            <li>素敵ですね, へたです, 上手です, 嫌いです, ほしいです</li>
                        </ul>

                        <!-- Module 23 -->
                        <p class="font-semibold">Module 23: Verbs Forms Cont..</p>
                        <ul class="list-disc pl-5">
                            <li>てけい- て形作り方, 文法付き, 文章付き</li>
                            <li>Ｖ手てから</li>
                            <li>Ｖて　います</li>
                            <li>置いておいてください。</li>
                        </ul>

                        <!-- Module 24 -->
                        <p class="font-semibold">Module 24: Listening Practice Cont..</p>
                        <ul class="list-disc pl-5">
                            <li>聴解会話</li>
                        </ul>

                        <!-- Module 25 -->
                        <p class="font-semibold">Module 25: JLPT Paper Practice</p>
                        <ul class="list-disc pl-5">
                            <li>Reading and Grammar section- 読解と文法</li>
                            <li>Kanji Section- 漢字と語彙</li>
                            <li>Listening Section- 聴解</li>
                        </ul>
                        <!-- ... Continue for all remaining modules (7–25) in the same pattern -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 <div x-show="selected === 2" class="text-sm rounded-xl p-3"
    x-transition:enter="transition ease-out duration-100"
    x-transition:enter-start="transform opacity-0 scale-95" style="display: none;">

    <div x-data="{ selected: null }" class="">
        <div class="">
            <button @click="selected !== 4 ? selected = 4 : selected = null"
                class="relative flex justify-between items-center w-full rounded-md py-2 px-4 text-base font-semibold text-white transition duration-300 ease-in-out">
                <div>
                    <h3 class="text-gray-600 text-left">N4 Level</h3>
                </div>
                <div>
                    <span class="text-[14px] bg-[#E32626] p-2 rounded-md text-white transition-all block">Preview</span>
                </div>
            </button>

            <div x-show="selected === 4" class="text-sm rounded-xl p-3"
                x-transition:enter="transition ease-out duration-100"
                x-transition:enter-start="transform opacity-0 scale-95" style="display: none;">
                
                <div class="leading-8">
                    <!-- Module 1 -->
                    <p class="font-semibold">Module 1</p>
                    <ul class="list-disc pl-5">
                        <li>Revision (Phrases and Connecting, Kanjis learnt in Basic, JLPT N4 20 Kanji)</li>
                        <li>Phrases and Connecting, Revision of Kanjis learnt in Basic, JLPT N4 20 Kanji</li>
                        <li>Vたりたりする, ができる, ことができる, じしょけいまえに, ことがある, ほど, ほうがいいです, なければならない, てもいいです, ませんか, ていただきませんか, たらいいですか</li>
                        <li>Reading and Comprehension</li>
                        <li>Readings and Stroke order</li>
                        <li>Combination Words</li>
                        <li>Kanji Reading drill</li>
                    </ul>

                    <!-- Module 2 -->
                    <p class="font-semibold mt-4">Module 2</p>
                    <ul class="list-disc pl-5">
                        <li>Grammar</li>
                        <ul class="list-disc pl-12">
                            <li>かのうけ</li>
                            <li>みえる</li>
                            <li>みられる</li>
                            <li>きける</li>
                            <li>きこえる</li>
                        </ul>
                        <li>Vocabulary - 語彙</li>
                        <li>Kanji - 読み方及び接続</li>
                        <li>Speed Reading drill - 読み練習</li>
                    </ul>

                    <!-- Module 3 -->
                    <p class="font-semibold mt-4">Module 3</p>
                    <ul class="list-disc pl-5">
                        <li>Grammar: Verb forms, Conjunctions, Sentence Joiners</li>
                        <ul class="list-disc pl-12">
                            <li>ながら</li>
                            <li>なにか、なにが</li>
                            <li>どこか、どこが</li>
                            <li>だれか、だれが</li>
                            <li>それに、それで</li>
                            <li>つまり</li>
                            <li>でも、しかし、けど、が</li>
                            <li>し、し</li>
                        </ul>
                        <li>Vocabulary - 語彙</li>
                        <li>Kanji - 読み方及び接続</li>
                        <li>Reading and translation - 読み練習</li>
                    </ul>

                    <!-- Module 4 -->
                    <p class="font-semibold mt-4">Module 4</p>
                    <ul class="list-disc pl-5">
                        <li>Grammar - ている, てある, しまう, てしまいました</li>
                        <li>Vocabulary - 語彙</li>
                        <li>Kanji - 読み方及び接続</li>
                        <li>Reading and translation - 読み練習</li>
                    </ul>

                    <!-- Module 5 -->
                    <p class="font-semibold mt-4">Module 5</p>
                    <ul class="list-disc pl-5">
                        <li>Grammar: 自動詞 Intransitive verbs, 他動詞 Transitive verbs</li>
                        <li>Vocabulary - Specific Terminology</li>
                        <li>Kanji - 読み方及び接続</li>
                        <li>Reading and translation - 読み練習</li>
                    </ul>

                    <!-- Module 6 -->
                    <p class="font-semibold mt-4">Module 6</p>
                    <ul class="list-disc pl-5">
                        <li>Grammar- Patterns using Transitive and Intransitive verbs & Adverbs</li>
                        <ul class="list-disc pl-12">
                            <li>他動詞てある</li>
                            <li>自動詞ている</li>
                            <li>まだ、あまり、だんだん、どんどん</li>
                        </ul>
                        <li>Vocabulary - 語彙</li>
                        <li>Kanji - 読み方及び接続</li>
                        <li>Reading and translation - 読み練習</li>
                    </ul>

                    <!-- Module 7 -->
                    <p class="font-semibold mt-4">Module 7</p>
                    <ul class="list-disc pl-5">
                        <li>Grammar - Revision with Practice sheets</li>
                        <li>Vocabulary - Cooking/conversation drill; terminology used</li>
                        <li>Kanji - 書きおよび読み練習</li>
                        <li>Reading and translation - 読み練習</li>
                    </ul>

                    <!-- Module 8 -->
                    <p class="font-semibold mt-4">Module 8</p>
                    <ul class="list-disc pl-5">
                        <li>Grammar- Verb forms & ending verb forms</li>
                        <ul class="list-disc pl-12">
                            <li>Volitional form</li>
                            <li>Volitional form とおもう</li>
                            <li>のつもりです, 辞書形つもりです</li>
                            <li>のよていです, 辞書形よていです</li>
                        </ul>
                        <li>Vocabulary - 語彙</li>
                        <li>Kanji - 書き順及び読み練習</li>
                        <li>Reading and translation - 総読</li>
                    </ul>

                    <!-- Module 9 -->
                    <p class="font-semibold mt-4">Module 9</p>
                    <ul class="list-disc pl-5">
                        <li>Grammar</li>
                        <ul class="list-disc pl-12">
                            <li>ほうがいいです</li>
                            <li>でしょう</li>
                            <li>かもしりません</li>
                            <li>かもしれない</li>
                            <li>もしかしたら</li>
                            <li>Quantifierで</li>
                        </ul>
                        <li>Vocabulary - 語彙</li>
                        <li>Kanji - 漢字音読み付き言葉</li>
                        <li>Writing skills - 普通な読解書き練習及び説明</li>
                        <li>Communication drill - 駅、ホテル、空港での会話</li>
                    </ul>

                    <!-- Module 10 -->
                    <p class="font-semibold mt-4">Module 10</p>
                    <ul class="list-disc pl-5">
                        <li>Grammar: Sentence end patterns</li>
                        <ul class="list-disc pl-12">
                            <li>という意味です</li>
                            <li>といっていました</li>
                            <li>とつたえてください</li>
                            <li>ていただきませんか</li>
                            <li>ていただけませんか</li>
                        </ul>
                        <li>Vocabulary - 語彙及び使い方</li>
                        <li>Kanji - 漢字で日本式名前</li>
                        <li>Reading and translation - 読解翻訳および説明</li>
                    </ul>

                    <!-- Module 11 -->
                    <p class="font-semibold mt-4">Module 11</p>
                    <ul class="list-disc pl-5">
                        <li>Grammar - Connecting Phrases</li>
                        <ul class="list-disc pl-12">
                            <li>とおりに</li>
                            <li>たあとで</li>
                            <li>自所形まえに</li>
                            <li>ておきます</li>
                            <li>ままにおいておいてください</li>
                        </ul>
                        <li>Vocabulary - ことわざ</li>
                        <li>Reading and translation - 練習</li>
                    </ul>

                    <!-- Module 12 -->
                    <p class="font-semibold mt-4">Module 12</p>
                    <ul class="list-disc pl-5">
                        <li>Grammar - Adjectives Connection</li>
                        <ul class="list-disc pl-12">
                            <li>い形容詞接続</li>
                            <li>な形容詞接続</li>
                        </ul>
                        <li>Vocabulary - 語彙</li>
                        <li>Kanji - 読み方及び接続</li>
                    </ul>

                    <!-- Module 13 -->
                    <p class="font-semibold mt-4">Module 13</p>
                    <ul class="list-disc pl-5">
                        <li>Grammar - Pattern of facts and rumors</li>
                        <ul class="list-disc pl-12">
                            <li>ようです</li>
                            <li>らしいです</li>
                        </ul>
                        <li>Vocabulary - 語彙</li>
                        <li>Kanji - 読み方及び接続</li>
                        <li>Reading and translation - 読み練習</li>
                    </ul>

                    <!-- Module 14 -->
                    <p class="font-semibold mt-4">Module 14</p>
                    <ul class="list-disc pl-5">
                        <li>Grammar - Patterns using Likewise with Verbs</li>
                        <ul class="list-disc pl-12">
                            <li>ようにする</li>
                            <li>ようになる</li>
                        </ul>
                        <li>Vocabulary - 語彙</li>
                        <li>Kanji - 読み方及び接続</li>
                        <li>Reading and translation - 読み練習</li>
                    </ul>

                    <!-- Module 15 -->
                    <p class="font-semibold mt-4">Module 15</p>
                    <ul class="list-disc pl-5">
                        <li>Grammar - Passive Sound: 受身形</li>
                        <li>Vocabulary - 練習</li>
                        <li>Kanji - 読み方及び接続</li>
                        <li>Reading and translation - 読み練習</li>
                    </ul>

                    <!-- Module 16 -->
                    <p class="font-semibold mt-4">Module 16</p>
                    <ul class="list-disc pl-5">
                        <li>Grammar - Patterns using Passive sound</li>
                        <ul class="list-disc pl-12">
                            <li>Nによって</li>
                            <li>から作られる</li>
                            <li>で作られる</li>
                        </ul>
                        <li>Vocabulary - 語彙 (Minna no nihongo chapter 44)</li>
                        <li>Kanji - 読み方及び接続</li>
                        <li>Reading and translation - 読み練習</li>
                    </ul>

                    <!-- Module 17 -->
                    <p class="font-semibold mt-4">Module 17</p>
                    <ul class="list-disc pl-5">
                        <li>Grammar - Revision with Practice sheets</li>
                        <li>Vocabulary - 祭り、行事用語</li>
                        <li>Kanji - 書きおよび読み練習</li>
                        <li>Reading and translation - 読み練習</li>
                    </ul>

                    <!-- Module 18 -->
                    <p class="font-semibold mt-4">Module 18</p>
                    <ul class="list-disc pl-5">
                        <li>Grammar - Verb and noun Qualifiers: のは, のが, のを</li>
                        <li>Vocabulary - 語彙 (Minna no nihongo Chapter 45,46)</li>
                        <li>Kanji - 書き順及び読み練習</li>
                        <li>Reading and translation - 総読</li>
                    </ul>
                    <p class="font-semibold mt-4">Module 19</p>
<ul class="list-disc pl-5">
    <li>Grammar - Revision (練習)</li>
    <li>Vocabulary - 語彙</li>
    <li>Kanji - 漢字音読み付き言葉</li>
    <li>Writing & Communication - 普通な読解書き練習及び説明, 注文、面接</li>
</ul>

<p class="font-semibold mt-4">Module 20</p>
<ul class="list-disc pl-5">
    <li>Grammar - Particle patterns (で, せいで, おかげで)</li>
    <li>Vocabulary - 語彙及び使い方 (Revision till chapter 50)</li>
    <li>Kanji - 書き順及び読み練習</li>
    <li>Reading and translation - 読解翻訳および説明</li>
</ul>

<p class="font-semibold mt-4">Module 21</p>
<ul class="list-disc pl-5">
    <li>Grammar - Giving/Receiving Verbs (やる, もらう, くれる, さしあげる, くださる, いただく, Vてみます, かどうか)</li>
    <li>Vocabulary - 用語</li>
    <li>Kanji - 書き順及び読み練習</li>
    <li>Reading and translation - 読解翻訳および説明</li>
</ul>

<p class="font-semibold mt-4">Module 22</p>
<ul class="list-disc pl-5">
    <li>Grammar - Purpose pattern (Nのために, V辞書形ために, のに, も)</li>
    <li>Vocabulary - Tools/furniture</li>
    <li>Kanji - 書き順及び読み練習</li>
    <li>Reading and translation - 読解翻訳および説明</li>
</ul>

<p class="font-semibold mt-4">Module 23</p>
<ul class="list-disc pl-5">
    <li>Grammar - Patterns (辞書形そうです, いきそうです)</li>
    <li>Vocabulary - 語彙及び使い方</li>
    <li>Kanji - 書き順及び読み練習</li>
    <li>Reading and translation - 読解翻訳および説明</li>
</ul>

<p class="font-semibold mt-4">Module 24</p>
<ul class="list-disc pl-5">
    <li>Grammar - Patterns (rootverbやすいです, rootverbにくいです, たべすぎる)</li>
    <li>Vocabulary - 語彙及び使い方</li>
    <li>Kanji - 書き順及び読み練習</li>
    <li>Reading and translation - 読解翻訳および説明</li>
</ul>

<p class="font-semibold mt-4">Module 25</p>
<ul class="list-disc pl-5">
    <li>Grammar - Patterns on situation (Pl form場合, のに)</li>
    <li>Vocabulary - 語彙及び使い方</li>
    <li>Kanji - 書き順及び読み練習</li>
    <li>Reading and translation - 読解翻訳および説明</li>
</ul>

<p class="font-semibold mt-4">Module 26</p>
<ul class="list-disc pl-5">
    <li>Grammar - Patterns (ところです, 辞書形ところです, ているところです, たばかりです)</li>
    <li>Vocabulary - Verbal Practice</li>
    <li>Kanji - 書き順及び読み練習</li>
    <li>Reading and translation - 読解翻訳および説明</li>
</ul>

<p class="font-semibold mt-4">Module 27</p>
<ul class="list-disc pl-5">
    <li>Grammar - Revision (練習)</li>
    <li>Vocabulary - Situational Sounds</li>
    <li>Kanji - 書き順及び読み練習</li>
    <li>Reading and translation - 読解翻訳および説明</li>
</ul>

<p class="font-semibold mt-4">Module 28</p>
<ul class="list-disc pl-5">
    <li>Grammar - Causative form (使役系, 味がする, においがする, Nのようです)</li>
    <li>Vocabulary - Situational Sounds</li>
    <li>Kanji - 書き順及び読み練習</li>
    <li>Reading and translation - 読解翻訳および説明</li>
</ul>

<p class="font-semibold mt-4">Module 29</p>
<ul class="list-disc pl-5">
    <li>Grammar - More patterns (になる)</li>
    <li>Vocabulary - Telecon Communication (にする, おはいりください)</li>
    <li>Kanji - 書き順及び読み練習</li>
    <li>Reading and translation - 読解翻訳および説明</li>
</ul>

                </div>

            </div>
        </div>
    </div>
</div>
                <div x-show="selected === 2" class="text-sm rounded-xl p-3"
    x-transition:enter="transition ease-out duration-100"
    x-transition:enter-start="transform opacity-0 scale-95" style="display: none;">

    <div x-data="{ selected: null }" class="">
        <div class="">
            <button @click="selected !== 6 ? selected = 6 : selected = null"
                class="relative flex justify-between items-center w-full rounded-md py-2 px-4 text-base font-semibold text-white transition duration-300 ease-in-out">
                <div>
                    <h3 class="text-gray-600 text-left">N3 Level</h3>
                </div>
                <div>
                    <span class="text-[14px] bg-[#E32626] p-2 rounded-md text-white transition-all block">Preview</span>
                </div>
            </button>

            <div x-show="selected === 6" class="text-sm rounded-xl p-3"
                x-transition:enter="transition ease-out duration-100"
                x-transition:enter-start="transform opacity-0 scale-95" style="display: none;">

                <div class="leading-10">
                    <!-- Module 1 -->
                    <p class="font-semibold">Module 1</p>
                    <p>Grammar, vocabulary, Reading and translation - Patterns, Minna no nihongo chapter 1, 説読</p>
                    <ul class="list-disc pl-5">
                        <li>Vてももらえませんか, Vていただけませんか, Vてももらえないでしょうか, Vていただけないでしょうか, Vていただけないだろうか</li>
                        <li>語彙</li>
                        <li>練習</li>
                    </ul>

                    <!-- Module 2 -->
                    <p class="font-semibold mt-4">Module 2</p>
                    <p>Grammar, vocabulary, kanji - Patterns, Minna no nihongo chapter 2, 漢字</p>
                    <ul class="list-disc pl-5">
                        <li>のようだ, のような, のように, ことは/が/を</li>
                        <li>語彙</li>
                        <li>読み方及び接続</li>
                    </ul>

                    <!-- Module 3 -->
                    <p class="font-semibold mt-4">Module 3</p>
                    <p>Grammar, vocabulary, Kanji, Reading and translation - Patterns, Minna no nihongo chapter 2 contd.., 漢字, 読解</p>
                    <ul class="list-disc pl-5">
                        <li>という, いつ/ どこ/ なに/ だれ/ どんなに　でも</li>
                        <li>語彙</li>
                        <li>読み方及び接続</li>
                        <li>読み練習</li>
                    </ul>

                    <!-- Module 4 -->
                    <p class="font-semibold mt-4">Module 4</p>
                    <p>Grammar, vocabulary, Kanji, Reading and translation - Patterns, Minna no nihongo chapter 3, 練習, 読解</p>
                    <ul class="list-disc pl-5">
                        <li>じゃなくて, のだ。、のではない, なん人も、何回も、何枚も</li>
                        <li>語彙</li>
                        <li>読み方及び接続</li>
                        <li>読み練習</li>
                    </ul>

                    <!-- Module 5 -->
                    <p class="font-semibold mt-4">Module 5</p>
                    <p>Grammar, vocabulary, Kanji, Reading and translation - Patterns, Revision, 練習, 読解</p>
                    <ul class="list-disc pl-5">
                        <li>たら、ば、と、なら, というのは、ということは, ようにいう , ように注意する , ように伝える, ように頼む</li>
                        <li>練習</li>
                        <li>読み方及び接続</li>
                        <li>読み練習</li>
                    </ul>

                    <!-- Module 6 -->
                    <p class="font-semibold mt-4">Module 6</p>
                    <p>Grammar, vocabulary, Kanji, Reading and translation - Patterns, Minna no nihongo chapter 3 contd.., 10漢字, 読解</p>
                    <ul class="list-disc pl-5">
                        <li>語彙</li>
                        <li>読み方及び接続</li>
                        <li>読み練習</li>
                    </ul>

                    <!-- Module 7 -->
                    <p class="font-semibold mt-4">Module 7</p>
                    <p>Grammar, vocabulary, Kanji, Reading and translation - Patterns, Minna no nihongo chapter 4, writing Kanji, 読解</p>
                    <ul class="list-disc pl-5">
                        <li>ことにしている, ことになる, ことになっている, Vてほしい, Vないでほしい</li>
                        <li>祭り、行事用語</li>
                        <li>書きおよび読み練習</li>
                        <li>読み練習</li>
                    </ul>
  <!-- Module 8 -->
        <p class="font-semibold mt-4">Module 8</p>
        <p>Grammar, vocabulary, Kanji, Reading and translation - Patterns, Minna no nihongo chapter 4 contd.., 漢字, 読解</p>
        <ul class="list-disc pl-5">
            <li>そうな, そうに, なさそう, そうもない</li>
            <li>語彙</li>
            <li>書き順及び読み練習</li>
            <li>総読</li>
        </ul>

        <!-- Module 9 -->
        <p class="font-semibold mt-4">Module 9</p>
        <p>Grammar, vocabulary, Kanji, Reading and translation - Patterns, Minna no nihongo chapter 5, Combination Words, Essay writing, General Conversation</p>
        <ul class="list-disc pl-5">
            <li>ちゃう, とく, させられる, である, たがる, たがっている, ましたら, まして</li>
            <li>語彙</li>
            <li>漢字音読み付き言葉, 普通な読解書き練習及び説明</li>
            <li>注文、面接</li>
        </ul>

        <!-- Module 10 -->
        <p class="font-semibold mt-4">Module 10</p>
        <p>Grammar, vocabulary, Kanji, Reading and translation - Patterns, Minna no nihongo chapter 5 contd.., 漢字, 読解</p>
        <ul class="list-disc pl-5">
            <li>じゃないん？, Vたところに, Vたところで, のだろうか, との/ での/ からの/ までの/ への, だろうと思う</li>
            <li>語彙及び使い方</li>
            <li>書き順及び読み練習</li>
            <li>読解翻訳および説明</li>
        </ul>

        <!-- Module 11 -->
        <p class="font-semibold mt-4">Module 11</p>
        <p>Grammar, vocabulary, Kanji, Reading and translation - Patterns, Minna no nihongo chapter 6, 漢字, 読解</p>
        <ul class="list-disc pl-5">
            <li>て、って, つもりはない, つもりだった, Vたつもり, Vているつもり</li>
            <li>語彙</li>
            <li>書き順及び読み練習</li>
            <li>読解翻訳および説明</li>
        </ul>

        <!-- Module 12 -->
        <p class="font-semibold mt-4">Module 12</p>
        <p>Grammar, vocabulary, Kanji, Reading and translation - Patterns, Minna no nihongo chapter 6 contd.., 漢字, 読解</p>
        <ul class="list-disc pl-5">
            <li>Vてばかりいる, とか, Vてくる, Vていく</li>
            <li>語彙</li>
            <li>書き順及び読み練習</li>
            <li>読解翻訳および説明</li>
        </ul>

        <!-- Module 13 -->
        <p class="font-semibold mt-4">Module 13</p>
        <p>Grammar, vocabulary, Reading and translation - Patterns, Minna no nihongo chapter 7, 説読</p>
        <ul class="list-disc pl-5">
            <li>Vなくてはならない, Vなくてはいけない, だけだ, ただ, だけでいい</li>
            <li>語彙</li>
            <li>練習</li>
        </ul>

        <!-- Module 14 -->
        <p class="font-semibold mt-4">Module 14</p>
        <p>Grammar, vocabulary, Kanji - Patterns, Minna no nihongo chapter 7 contd, 漢字</p>
        <ul class="list-disc pl-5">
            <li>なんか, なんて, なくちゃ, なきゃ</li>
            <li>語彙</li>
            <li>読み方及び接続</li>
        </ul>

        <!-- Module 15 -->
        <p class="font-semibold mt-4">Module 15</p>
        <p>Grammar, vocabulary, Kanji, Reading and translation - Patterns, Revision, 漢字, 読解</p>
        <ul class="list-disc pl-5">
            <li>Vたままに, Nのままに, からだ</li>
            <li>語彙</li>
            <li>読み方及び接続</li>
            <li>読み練習</li>
        </ul>
         <!-- Module 8 -->
 
        <p class="font-semibold mt-4">Module 16</p>
      <p>Grammar, vocabulary, Kanji, Reading and translation- Patterns, Minna no nihongo chapter 8, 練習, 読解</p>
      <ul class="list-disc list-inside">
        <li>そうな, そうに, なさそう, そうもない</li>
        <li>語彙</li>
        <li>書き順及び読み練習</li>
        <li>総読</li>
      </ul>

  <!-- Module 9 -->

        <p class="font-semibold mt-4">Module 17</p>
      <p>Grammar, vocabulary, Kanji, Reading and translation- Patterns, Minna no nihongo chapter 8 contd.., 練習, 読解</p>
      <ul class="list-disc list-inside">
        <li>ために, ためだ, Ｖてもかまわない</li>
        <li>語彙</li>
        <li>読み方及び接続</li>
        <li>読み練習</li>
      </ul>
  

  <!-- Module 10 -->

        <p class="font-semibold mt-4">Module 18</p>
      <p>Grammar, vocabulary, Kanji, Reading and translation- Patterns, Minna no nihongo chapter 9, 10漢字, 読解</p>
      <ul class="list-disc list-inside">
        <li>ほど, ほとはない, ほどではない</li>
        <li>語彙</li>
        <li>読み方及び接続</li>
        <li>読み練習</li>
      </ul>
 

  <!-- Module 19 -->
<p class="font-semibold mt-4">Module 19</p>
<p>Grammar, vocabulary, Kanji, Reading and translation- Patterns, Minna no nihongo chapter 9 contd.., writing Kanji, 読解</p>
<ul class="list-disc list-inside">
  <li>忘れる, 合う, かえる, ということになる, はずだ, はずが, はずはない, はずだった, ことが, ことも</li>
  <li>祭り、行事用語</li>
  <li>書きおよび読み練習</li>
  <li>読み練習</li>
</ul>

<!-- Module 20 -->
<p class="font-semibold mt-4">Module 20</p>
<p>Grammar, vocabulary, Kanji, Reading and translation- Patterns, Minna no nihongo chapter 10, 漢字, 読解</p>
<ul class="list-disc list-inside">
  <li>Ｖた結果、, の結果, 出す, 始める, 終わる</li>
  <li>語彙</li>
  <li>書き順及び読み練習</li>
  <li>総読</li>
</ul>

<!-- Module 21 -->
<p class="font-semibold mt-4">Module 21</p>
<p>Grammar, vocabulary, Kanji, Writing skills, Communication drill- Patterns, Minna no nihongo chapter 10 contd.., Combination Words, Essay writing, General Conversation</p>
<ul class="list-disc list-inside">
  <li>Ｖたら　どう？, より　ほうが</li>
  <li>語彙</li>
  <li>漢字音読み付き言葉, 普通な読解書き練習及び説明</li>
  <li>注文、面接</li>
</ul>

<!-- Module 22 -->
<p class="font-semibold mt-4">Module 22</p>
<p>Grammar, vocabulary, Kanji, Reading and translation- Patterns, Minna no nihongo chapter 11, 漢字, 読解</p>
<ul class="list-disc list-inside">
  <li>らしい, として, ずに, ず</li>
  <li>語彙及び使い方</li>
  <li>書き順及び読み練習</li>
  <li>読解翻訳および説明</li>
</ul>

<!-- Module 23 -->
<p class="font-semibold mt-4">Module 23</p>
<p>Grammar, vocabulary, Kanji, Reading and translation- Patterns, Minna no nihongo chapter 12, 漢字, 読解</p>
<ul class="list-disc list-inside">
  <li>もの, もんだから, Ｖられる, っぱなし</li>
  <li>語彙</li>
  <li>書き順及び読み練習</li>
  <li>読解翻訳および説明</li>
</ul>

<!-- Module 24 -->
<p class="font-semibold mt-4">Module 24</p>
<p>Grammar, vocabulary, Kanji, Reading and translation- Patterns, Full Revision, 漢字, 読解</p>
<ul class="list-disc list-inside">
  <li>おかげで, おかげだ, せいで, せいだ, みたいだ, どちらかと言えば, ほうだ, Vますように, Vませんように</li>
  <li>語彙, 書き順及び読み練習</li>
  <li>読解翻訳および説明</li>
</ul>
              </div>

            </div>
        </div>
    </div>
</div>

                  <div x-show="selected === 2" class="text-sm rounded-xl p-3"
    x-transition:enter="transition ease-out duration-100"
    x-transition:enter-start="transform opacity-0 scale-95" style="display: none;">
    
    <div x-data="{ selected: null }" class="">
        <div class="">
            <button @click="selected !== 4 ? selected = 4 : selected = null"
                class="relative flex justify-between items-center w-full rounded-md py-2 px-4 text-base font-semibold text-white transition duration-300 ease-in-out">
                <div>
                    <h3 class="text-gray-600 text-left">N2 Level</h3>
                </div>
                <div>
                    <span class="text-[14px] bg-[#E32626] p-2 rounded-md text-white transition-all block">Preview</span>
                </div>
            </button>

            <div x-show="selected === 4" class="text-sm rounded-xl p-3"
                x-transition:enter="transition ease-out duration-100"
                x-transition:enter-start="transform opacity-0 scale-95" style="display: none;">
                
                <div class="leading-10">
                    <!-- Module 1 -->
                    <p class="font-semibold">Module 1: 文字 語彙</p>
                    <ul class="list-disc pl-5">
                        <li>Vocabulary</li>
                    </ul>
                    <ul class="list-disc pl-12">
                        <li>Phrases</li>
                        <li>Phrases contd</li>
                        <li>Reading and translation comprehension</li>
                        <li>Vocabulary discussion of comprehension</li>
                    </ul>
                    <ul class="list-disc pl-5">
                        <li>Combination words</li>
                    </ul>
                    <ul class="list-disc pl-12">
                        <li>100 kanjis</li>
                    </ul>

                    <!-- Module 2 -->
                    <p class="font-semibold mt-4">Module 2: 文法 読解</p>
                    <ul class="list-disc pl-5">
                        <li>Vocabulary</li>
                    </ul>
                    <ul class="list-disc pl-12">
                        <li>Patterns</li>
                        <li>Noun Clauses</li>
                        <li>Correct usage of Clauses</li>
                        <li>Usage of compound words</li>
                    </ul>

                    <!-- Module 3 -->
                    <p class="font-semibold mt-4">Module 3: 日本文化</p>
                    <ul class="list-disc pl-5">
                        <li>Japan Work Culture</li>
                    </ul>
                    <ul class="list-disc pl-12">
                        <li>Events in Japan</li>
                        <li>Vocabulary of customs</li>
                        <li>Speed Reading</li>
                        <li>Reading discussion</li>
                        <li>Editorial Writing</li>
                        <li>Japanese work culture 労働環境</li>
                        <li>Art and customs 伝統芸</li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>
<div x-show="selected === 2" class="text-sm rounded-xl p-3"
    x-transition:enter="transition ease-out duration-100"
    x-transition:enter-start="transform opacity-0 scale-95" style="display: none;">

    <div x-data="{ selected: null }" class="">
        <div class="">
            <button @click="selected !== 5 ? selected = 5 : selected = null"
                class="relative flex justify-between items-center w-full rounded-md py-2 px-4 text-base font-semibold text-white transition duration-300 ease-in-out">
                <div>
                    <h3 class="text-gray-600 text-left">N1 Level</h3>
                </div>
                <div>
                    <span class="text-[14px] bg-[#E32626] p-2 rounded-md text-white transition-all block">Preview</span>
                </div>
            </button>

            <div x-show="selected === 5" class="text-sm rounded-xl p-3"
                x-transition:enter="transition ease-out duration-100"
                x-transition:enter-start="transform opacity-0 scale-95" style="display: none;">

                <div class="leading-10">
                    <!-- Module 1 -->
                    <p class="font-semibold">Module 1: 文字 語彙</p>
                    <ul class="list-disc pl-5">
                        <li>Vocabulary</li>
                    </ul>
                    <ol class="list-decimal pl-12">
                        <li>Phrases</li>
                        <li>Phrases contd</li>
                        <li>Reading and translation comprehension</li>
                        <li>Vocabulary discussion of comprehension</li>
                    </ol>
                    <ul class="list-disc pl-12">
                        <li>Combination words - 100 kanjis</li>
                    </ul>

                    <!-- Module 2 -->
                    <p class="font-semibold mt-4">Module 2: 文法 読解</p>
                    <ul class="list-disc pl-5">
                        <li>Vocabulary</li>
                    </ul>
                    <ol class="list-decimal pl-12">
                        <li>Adverbs</li>
                        <li>Adjectives usage</li>
                        <li>Correct usage of Adverbs</li>
                        <li>Usage of compound words</li>
                    </ol>

                    <!-- Module 3 -->
                    <p class="font-semibold mt-4">Module 3: 日本文化</p>
                    <ul class="list-disc pl-5">
                        <li>Japan Work Culture</li>
                    </ul>
                    <ol class="list-decimal pl-12">
                        <li>Kanjis contd</li>
                        <li>Reading comprehension using idioms</li>
                        <li>Understanding of idioms and usage in a sentence</li>
                        <li>Speed Reading</li>
                        <li>Reading discussion</li>
                        <li>Editorial Writing</li>
                        <li>Japanese work culture 労働環境</li>
                        <li>Art and customs 伝統芸</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
</div>


                   
    </section>
    <section class="bg-[#cdefe3]">
        <div class="md:mx-[100px] mx-[1rem] py-4 grid grid-cols-1 gap-x-8 gap-y-10 md:grid-cols-1 lg:grid-cols-1">
            <div x-data="{ selected: null }" class="">
                <div class="">
                    <button @click="selected !== 4 ? selected = 4 : selected = null"
                        class="relative flex w-full rounded-md bg-[#e32626] py-2 px-4 text-base font-semibold text-white transition duration-300 ease-in-out justify-between items-center">
                        <div>
                            <h3 class="">Training Certification Process</h3>
                        </div>
                        <div>
                            <span class="text-[26px] transition-all block"
                                :class="selected === 4 ? 'rotate-45' : ''">+</span>
                        </div>
                    </button>
                    <div x-show="selected === 4" class="text-sm rounded-xl p-3"
                        x-transition:enter="transition ease-out duration-100"
                        x-transition:enter-start="transform opacity-0 scale-95" style="display: none;">
                        <div>
                            <div class="grid grid-cols-1 md:grid-cols-4 gap-4 ">
                                <div class="p-2">
                                    <h3 class="text-[20px] text-gray-800">Consulting and Registration</h3>
                                    <p class="text-gray-500 text-[16px] py-2">Consult with our counselors to check your eligibility and the right batch, and then Register for the Japanese Language Course</p>
                                </div>
                                <div class="p-2">
                                    <h3 class="text-[20px] text-gray-800">Complete the Training</h3>
                                    <p class="text-gray-500 text-[16px] py-2">Attend Training for the Japanese Language, and achieve the certification.</p>
                                </div>
                                <div class="p-2">
                                    <h3 class="text-[20px] text-gray-800">Deliver Assigned Projects</h3>
                                    <p class="text-gray-500 text-[16px] py-2">Gather experience with real-world assignments and practical projects to upgrade your existing Korean Language skills. Deliver these mini-projects to be eligible for Henry Harvin&reg; Japanese Language Certification</p>
                                </div>
                                <div class="p-2">
                                    <h3 class="text-[20px] text-gray-800">Earn the Certification</h3>
                                    <p class="text-gray-500 text-[16px] py-2">Post-successful completion of the Program, earn Henry Harvin&reg; Japanese Language Certification. Post it on social media, get it framed, and increase your value in the industry</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-[#fff9e9]">
        <div class="md:mx-[100px] mx-[1rem] py-4 grid grid-cols-1 gap-x-8 gap-y-10 md:grid-cols-1 lg:grid-cols-1">
            <div x-data="{ selected: null }" class="">
                <div class="">
                    <button @click="selected !== 5 ? selected = 5 : selected = null"
                        class="relative flex w-full rounded-md bg-[#e32626] py-2 px-4 text-base font-semibold text-white transition duration-300 ease-in-out justify-between items-center">
                        <div>
                            <h3 class="">Commonly Asked Questions</h3>
                        </div>
                        <div>
                            <span class="text-[26px] transition-all block"
                                :class="selected === 5 ? 'rotate-45' : ''">+</span>
                        </div>
                    </button>
                    <div x-show="selected === 5" class="text-sm rounded-xl p-3"
                        x-transition:enter="transition ease-out duration-100"
                        x-transition:enter-start="transform opacity-0 scale-95" style="display: none;">
                        <div>
                            <ul class="flex flex-col">
                                <li class="bg-white my-2 shadow-lg" x-data="{ open: false }">
                                    <h2 @click="open = !open"
                                        class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                                        <span>What is japanese course from Henry Harvin®?</span>
                                        <svg :class="open ? 'rotate-180' : ''"
                                            class="fill-current text-purple-700 h-6 w-6 transition-transform duration-500"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                                            </path>
                                        </svg>
                                    </h2>
                                    <div x-show="open" class="content p-3">
                        <p>
                            <span style="font-size:10.5pt"><span style="font-family:Arial"><span style="color:#434343">The japanese course teaches professionals about the basics and advanced Japanese. It is a</span></span></span>
                            <span style="font-size:10.5pt"><span style="font-family:Arial"><span style="color:#434343"><strong> 37-letter long word</strong></span></span></span>
                            <span style="font-size:10.5pt"><span style="font-family:Arial"><span style="color:#434343"> composed of</span></span></span>
                            <span style="font-size:10.5pt"><span style="font-family:Arial"><span style="color:#434343"><strong> 18 syllables</strong></span></span></span>
                            <span style="font-size:10.5pt"><span style="font-family:Arial"><span style="color:#434343">. The term is read as &lsquo;toragahitowokamoutosurutokinounarigoe&rsquo;. This word defines - the growl a tiger makes when it is about to bite someone.</span></span></span>
                        </p>
                    </div>
                 </li>


                              <li class="bg-white my-2 shadow-lg" x-data="{ open: false }">
    <h2 @click="open = !open"
        class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
        <span>Is kanji difficult?</span>
        <svg :class="open ? 'rotate-180' : ''"
             class="fill-current text-purple-700 h-6 w-6 transition-transform duration-500"
             viewBox="0 0 20 20">
            <path
                d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
            </path>
        </svg>
    </h2>
    <div x-show="open"
         class="border-l-2 border-purple-600 overflow-hidden transition-all duration-500"
         style="display: none;">
        <p class="p-3 text-gray-900">
            <span style="font-size:10.5pt"><span style="font-family:Arial"><span style="color:#434343">Kanji is hard to learn when compared with </span></span></span>
            <span style="font-size:10.5pt"><span style="font-family:Arial"><span style="color:#434343"><strong>kana</strong></span></span></span>
            <span style="font-size:10.5pt"><span style="font-family:Arial"><span style="color:#434343"> since it is more complex and the number of characters in this set is more numerous than</span></span></span>
            <span style="font-size:10.5pt"><span style="font-family:Arial"><span style="color:#434343"><strong> hiragana and katakana</strong></span></span></span>
            <span style="font-size:10.5pt"><span style="font-family:Arial"><span style="color:#434343">. However this doesn&rsquo;t mean it&rsquo;s hard to read. Also kanji are very efficient in communication.</span></span></span>
        </p>
    </div>
</li>

                               <li class="bg-white my-2 shadow-lg" x-data="{ open: false }">
    <h2 @click="open = !open"
        class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
        <span>What are the job opportunities after completing a Japanese language course?</span>
        <svg :class="open ? 'rotate-180' : ''"
             class="fill-current text-purple-700 h-6 w-6 transition-transform duration-500"
             viewBox="0 0 20 20">
            <path
                d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
            </path>
        </svg>
    </h2>
    <div x-show="open"
         class="border-l-2 border-purple-600 overflow-hidden transition-all duration-500"
         style="display: none;">
        <ul class="p-3 text-gray-900 list-disc list-inside space-y-1">
            <li><span style="font-size:10.5pt"><span style="font-family:Arial"><span style="color:#434343">Translator</span></span></span></li>
            <li><span style="font-size:10.5pt"><span style="font-family:Arial"><span style="color:#434343">Flight attendant</span></span></span></li>
            <li><span style="font-size:10.5pt"><span style="font-family:Arial"><span style="color:#434343">Journalist</span></span></span></li>
            <li><span style="font-size:10.5pt"><span style="font-family:Arial"><span style="color:#434343">Foreign language teacher</span></span></span></li>
            <li><span style="font-size:10.5pt"><span style="font-family:Arial"><span style="color:#434343">Interpreter</span></span></span></li>
            <li><span style="font-size:10.5pt"><span style="font-family:Arial"><span style="color:#434343">Teacher</span></span></span></li>
            <li><span style="font-size:10.5pt"><span style="font-family:Arial"><span style="color:#434343">Trainer</span></span></span></li>
            <li><span style="font-size:10.5pt"><span style="font-family:Arial"><span style="color:#434343">Purchasing agent</span></span></span></li>
            <li><span style="font-size:10.5pt"><span style="font-family:Arial"><span style="color:#434343">Social worker</span></span></span></li>
        </ul>
    </div>
</li>

                               <ul class="space-y-2">
    <li class="bg-white my-2 shadow-lg" x-data="{ open: false }">
        <h2 @click="open = !open"
            class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
            <span>Which language is most like english?</span>
            <svg :class="open ? 'rotate-180' : ''"
                 class="fill-current text-purple-700 h-6 w-6 transition-transform duration-500"
                 viewBox="0 0 20 20">
                <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
            </svg>
        </h2>
        <div x-show="open" class="border-l-2 border-purple-600 overflow-hidden transition-all duration-500" style="display: none;">
            <p class="p-3 text-gray-900"><strong>Frisian </strong>languages have the greatest percentage of lexical similarity with English. They are spoken in the Netherlands and Germany. The vocabulary of Frisian and English is 60% similar, they aren’t mutually intelligible.</p>
        </div>
    </li>

    <li class="bg-white my-2 shadow-lg" x-data="{ open: false }">
        <h2 @click="open = !open"
            class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
            <span>Which language is closest to Japanese?</span>
            <svg :class="open ? 'rotate-180' : ''"
                 class="fill-current text-purple-700 h-6 w-6 transition-transform duration-500"
                 viewBox="0 0 20 20">
                <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
            </svg>
        </h2>
        <div x-show="open" class="border-l-2 border-purple-600 overflow-hidden transition-all duration-500" style="display: none;">
            <p class="p-3 text-gray-900"><strong>Ryukyuan and Ainu</strong> are the languages closely related to Japanese along with Korean. Less related are other Atlantic languages which are Turkic, Tungusic, Mongolic.</p>
        </div>
    </li>

    <li class="bg-white my-2 shadow-lg" x-data="{ open: false }">
        <h2 @click="open = !open"
            class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
            <span>What is the language of Japan called?</span>
            <svg :class="open ? 'rotate-180' : ''"
                 class="fill-current text-purple-700 h-6 w-6 transition-transform duration-500"
                 viewBox="0 0 20 20">
                <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
            </svg>
        </h2>
        <div x-show="open" class="border-l-2 border-purple-600 overflow-hidden transition-all duration-500" style="display: none;">
            <p class="p-3 text-gray-900">The Japanese language is known as Nihongo (日本語 ). Chinese documents record the existence of Japanese words as early as the 3rd century and texts clearly appear during the 8th century.</p>
        </div>
    </li>

    <li class="bg-white my-2 shadow-lg" x-data="{ open: false }">
        <h2 @click="open = !open"
            class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
            <span>Will Henry Harvin's Japanese language course help me in preparing for the JLPT exam?</span>
            <svg :class="open ? 'rotate-180' : ''"
                 class="fill-current text-purple-700 h-6 w-6 transition-transform duration-500"
                 viewBox="0 0 20 20">
                <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
            </svg>
        </h2>
        <div x-show="open" class="border-l-2 border-purple-600 overflow-hidden transition-all duration-500" style="display: none;">
            <p class="p-3 text-gray-900">Yes, this course is designed to assist you in preparing for the JLPT exam for the level of your choice. For example, if you are preparing for the elementary level JLPT N5 exam, you can choose the N5 level Japanese language course and so on.</p>
        </div>
    </li>
     <li class="bg-white my-2 shadow-lg" x-data="{ open: false }">
        <h2 @click="open = !open"
            class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
            <span>What is e-Learning for the Henry Harvin Japanese language course?</span>
            <svg :class="open ? 'rotate-180' : ''"
                 class="fill-current text-purple-700 h-6 w-6 transition-transform duration-500"
                 viewBox="0 0 20 20">
                <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
            </svg>
        </h2>
        <div x-show="open" class="border-l-2 border-purple-600 overflow-hidden transition-all duration-500" style="display: none;">
            <p class="p-3 text-gray-900">The LMS or the Learning Management System helps you to access the recorded video sessions of the training in addition to the various tools and techniques available. This will help you to revise and practice the topics plus attend any session that you missed.</p>
        </div>
    </li>
      <li class="bg-white my-2 shadow-lg" x-data="{ open: false }">
    <h2 @click="open = !open"
        class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
        <span>Which level should I choose to become a Japanese Game Localizer?</span>
        <svg :class="open ? 'rotate-180' : ''"
             class="fill-current text-purple-700 h-6 w-6 transition-transform duration-500"
             viewBox="0 0 20 20">
            <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
        </svg>
    </h2>
    <div x-show="open" class="border-l-2 border-purple-600 overflow-hidden transition-all duration-500" style="display: none;">
        <p class="p-3 text-gray-900">
          A game Localizer in Japan needs to have at least passed JLPT N2 level. For this, you can choose the N2 level in the Henry Harvin Japanese language course and prepare for the JLPT exam.
        </p>
    </div>
  </li>

  <li class="bg-white my-2 shadow-lg" x-data="{ open: false }">
    <h2 @click="open = !open"
        class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
        <span>What language is used in Manga and Anime?</span>
        <svg :class="open ? 'rotate-180' : ''"
             class="fill-current text-purple-700 h-6 w-6 transition-transform duration-500"
             viewBox="0 0 20 20">
            <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
        </svg>
    </h2>
    <div x-show="open" class="border-l-2 border-purple-600 overflow-hidden transition-all duration-500" style="display: none;">
        <p class="p-3 text-gray-900">
          The casual Japanese Kanji contribute to the language used in Anime and Manga. It is slightly different from the formal Japanese language that is taught on a professional level. But this course will help you understand anime and manga.
        </p>
    </div>
  </li>

  <li class="bg-white my-2 shadow-lg" x-data="{ open: false }">
    <h2 @click="open = !open"
        class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
        <span>What's the difference between the pre-intermediate level (N4) and the Intermediate level (N3)?</span>
        <svg :class="open ? 'rotate-180' : ''"
             class="fill-current text-purple-700 h-6 w-6 transition-transform duration-500"
             viewBox="0 0 20 20">
            <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
        </svg>
    </h2>
    <div x-show="open" class="border-l-2 border-purple-600 overflow-hidden transition-all duration-500" style="display: none;">
        <p class="p-3 text-gray-900">
          The pre-intermediate level (N4) is the second level of the course. This level involves the basics of grammar and vocabulary. The intermediate level (N3) is the bridging level involving linguistic skills like reading, writing, and other language activities.
        </p>
    </div>
  </li>

  <li class="bg-white my-2 shadow-lg" x-data="{ open: false }">
    <h2 @click="open = !open"
        class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
        <span>What are the career options after learning Japanese?</span>
        <svg :class="open ? 'rotate-180' : ''"
             class="fill-current text-purple-700 h-6 w-6 transition-transform duration-500"
             viewBox="0 0 20 20">
            <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
        </svg>
    </h2>
    <div x-show="open" class="border-l-2 border-purple-600 overflow-hidden transition-all duration-500" style="display: none;">
        <p class="p-3 text-gray-900">
          The employment opportunities get enhanced by learning another language. There are jobs such as translator, interpreter, and trainer in Japanese. Get hired in MNCs dealing with Japanese-speaking populations, like Amazon, Google, JP Morgan, etc. You can get hired in the external affairs office of the Indian government or the Japanese embassy in India.
        </p>
    </div>
  </li>

  <li class="bg-white my-2 shadow-lg" x-data="{ open: false }">
    <h2 @click="open = !open"
        class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
        <span>What is the duration of sessions for each level?</span>
        <svg :class="open ? 'rotate-180' : ''"
             class="fill-current text-purple-700 h-6 w-6 transition-transform duration-500"
             viewBox="0 0 20 20">
            <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
        </svg>
    </h2>
    <div x-show="open" class="border-l-2 border-purple-600 overflow-hidden transition-all duration-500" style="display: none;">
        <p class="p-3 text-gray-900">
          The duration of every level, N5, N4, N3, N2, and N1, is 80 hours each. But the level of difficulty is different across all the levels. N5 is the elementary level, N4 is the pre-intermediate level, N3 is the Intermediate level, N2 is the pre-advanced level, and N1 is the advanced level.
        </p>
    </div>
  </li>

  <li class="bg-white my-2 shadow-lg" x-data="{ open: false }">
    <h2 @click="open = !open"
        class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
        <span>What is the qualification of the trainers at Henry Harvin Education?</span>
        <svg :class="open ? 'rotate-180' : ''"
             class="fill-current text-purple-700 h-6 w-6 transition-transform duration-500"
             viewBox="0 0 20 20">
            <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
        </svg>
    </h2>
    <div x-show="open" class="border-l-2 border-purple-600 overflow-hidden transition-all duration-500" style="display: none;">
        <p class="p-3 text-gray-900">
          The organisation uses the most celebrated industry experts with more than 11 years of experience in the field. They have been invited for 120 and more keynote classes for the Japanese language, each having delivered over 155+ lectures, and are now working for Henry Harvin Education.
        </p>
    </div>
  </li>
     <li class="bg-white my-2 shadow-lg" x-data="{ open: false }">
        <h2 @click="open = !open" class="flex justify-between items-center font-semibold p-3 cursor-pointer">
            <span>How can I access the e-learning modules?</span>
            <svg :class="open ? 'rotate-180' : ''" class="fill-current text-purple-700 h-6 w-6 transition-transform duration-500" viewBox="0 0 20 20">
                <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
            </svg>
        </h2>
        <div x-show="open" class="border-l-2 border-purple-600 overflow-hidden transition-all duration-500" style="display: none;">
            <p class="p-3 text-gray-900">The Online Learning Management system (LMS) can be used for accessing the Japanese language course materials anytime and anywhere. The provided credentials can be used to log in using the Moodle app on your smartphone or laptop.</p>
        </div>
    </li>

    <li class="bg-white my-2 shadow-lg" x-data="{ open: false }">
        <h2 @click="open = !open" class="flex justify-between items-center font-semibold p-3 cursor-pointer">
            <span>What is the best Japanese language Course?</span>
            <svg :class="open ? 'rotate-180' : ''" class="fill-current text-purple-700 h-6 w-6 transition-transform duration-500" viewBox="0 0 20 20">
                <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
            </svg>
        </h2>
        <div x-show="open" class="border-l-2 border-purple-600 overflow-hidden transition-all duration-500" style="display: none;">
            <p class="p-3 text-gray-900">The Japanese language course offered by Henry Harvin® is standardized for Japanese Language Education, making it possible for students to study Japanese easily and comfortably. Students learn four writing systems of the Japanese language: Kanji, Hiragana, Katakana, and Romaji, along with five levels: N5, N4, N3, N2, and N1.</p>
        </div>
    </li>

    <li class="bg-white my-2 shadow-lg" x-data="{ open: false }">
        <h2 @click="open = !open" class="flex justify-between items-center font-semibold p-3 cursor-pointer">
            <span>Home learning of Japanese is possible?</span>
            <svg :class="open ? 'rotate-180' : ''" class="fill-current text-purple-700 h-6 w-6 transition-transform duration-500" viewBox="0 0 20 20">
                <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
            </svg>
        </h2>
        <div x-show="open" class="border-l-2 border-purple-600 overflow-hidden transition-all duration-500" style="display: none;">
            <p class="p-3 text-gray-900">Yes! Japanese can be learned and spoken at home. Financial matters and governmental affairs are not discussed among Japanese. However, reading, writing, understanding, and speaking in daily conversations can be easily acquired. But taking an online Japanese language course is highly recommendable!</p>
        </div>
    </li>

    <li class="bg-white my-2 shadow-lg" x-data="{ open: false }">
        <h2 @click="open = !open" class="flex justify-between items-center font-semibold p-3 cursor-pointer">
            <span>Is learning Japanese quickly?</span>
            <svg :class="open ? 'rotate-180' : ''" class="fill-current text-purple-700 h-6 w-6 transition-transform duration-500" viewBox="0 0 20 20">
                <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
            </svg>
        </h2>
        <div x-show="open" class="border-l-2 border-purple-600 overflow-hidden transition-all duration-500" style="display: none;">
            <p class="p-3 text-gray-900">Nothing is impossible. You can enrol in Henry Harvin’s Japanese language course. With our program, you will learn as easily as possible. In this way, you can become fluent in a short amount of time.</p>
        </div>
    </li>
    <ul class="space-y-2">

  <li class="bg-white my-2 shadow-lg rounded" x-data="{ open: false }">
    <h2 @click="open = !open" class="flex justify-between items-center font-semibold p-3 cursor-pointer">
      <span>Would it be beneficial for my career if I learned Japanese?</span>
      <svg :class="open ? 'rotate-180' : ''" class="fill-current text-purple-700 h-6 w-6 transition-transform duration-500" viewBox="0 0 20 20">
        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
      </svg>
    </h2>
    <div x-show="open" class="border-l-2 border-purple-600 overflow-hidden transition-all duration-500" style="display: none;">
      <p class="p-3 text-gray-900">Of course, yes! You can avail yourself of many career opportunities like Embassies, Government Jobs, BPO Jobs, Translation, Sales, Interpretation, Travel, Tourism and more. Also, you can enrol in our Japanese language course to make the path easier!</p>
    </div>
  </li>

  <li class="bg-white my-2 shadow-lg rounded" x-data="{ open: false }">
    <h2 @click="open = !open" class="flex justify-between items-center font-semibold p-3 cursor-pointer">
      <span>Is the Japanese language Course still in demand?</span>
      <svg :class="open ? 'rotate-180' : ''" class="fill-current text-purple-700 h-6 w-6 transition-transform duration-500" viewBox="0 0 20 20">
        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
      </svg>
    </h2>
    <div x-show="open" class="border-l-2 border-purple-600 overflow-hidden transition-all duration-500" style="display: none;">
      <p class="p-3 text-gray-900">Among East Asian languages, Japanese is most prevalent in India. A growing India-Japan relationship and Japanese companies expanding in India contribute to the high demand for Japanese language skills. As like that, the Japanese language Course is also still in higher order.</p>
    </div>
  </li>

  <li class="bg-white my-2 shadow-lg rounded" x-data="{ open: false }">
    <h2 @click="open = !open" class="flex justify-between items-center font-semibold p-3 cursor-pointer">
      <span>What are Kaji, Hiragana, Katakana, and Romaji?</span>
      <svg :class="open ? 'rotate-180' : ''" class="fill-current text-purple-700 h-6 w-6 transition-transform duration-500" viewBox="0 0 20 20">
        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
      </svg>
    </h2>
    <div x-show="open" class="border-l-2 border-purple-600 overflow-hidden transition-all duration-500" style="display: none;">
      <p class="p-3 text-gray-900">Kaji, Hiragana, and Katakana are 3 sets of characters. Hiragana is a phonic set unique to the Japanese language. Katakana is another set of phonics but with words that are borrowed from other languages. On the other hand, Kanji is a set of characters that have been adapted from Chinese. Romaji has a Latin script that is adapted for Japanese speaking and understanding.</p>
    </div>
  </li>

  <li class="bg-white my-2 shadow-lg rounded" x-data="{ open: false }">
    <h2 @click="open = !open" class="flex justify-between items-center font-semibold p-3 cursor-pointer">
      <span>Explain the JLPT exam format.</span>
      <svg :class="open ? 'rotate-180' : ''" class="fill-current text-purple-700 h-6 w-6 transition-transform duration-500" viewBox="0 0 20 20">
        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
      </svg>
    </h2>
    <div x-show="open" class="border-l-2 border-purple-600 overflow-hidden transition-all duration-500" style="display: none;">
      <p class="p-3 text-gray-900">Japanese Language Proficiency Test (JLPT) is conducted for 180 marks at all 5 learning levels. For N1 to N3 levels, the exam is divided into 3 sections namely Listening, Reading, and Vocabulary with Grammar. For levels N4 and N5, there are only 2 sections of listening while Vocabulary with Grammar and reading are clubbed together.</p>
    </div>
  </li>

  <!-- Repeat same structure for remaining items -->
  <li class="bg-white my-2 shadow-lg rounded" x-data="{ open: false }">
    <h2 @click="open = !open" class="flex justify-between items-center font-semibold p-3 cursor-pointer">
      <span>Are the sessions conducted only in Online mode?</span>
      <svg :class="open ? 'rotate-180' : ''" class="fill-current text-purple-700 h-6 w-6 transition-transform duration-500" viewBox="0 0 20 20">
        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
      </svg>
    </h2>
    <div x-show="open" class="border-l-2 border-purple-600 overflow-hidden transition-all duration-500" style="display: none;">
      <p class="p-3 text-gray-900">Yes, all Japanese language courses are held in 2-way online interactive mode only.</p>
    </div>
  </li>

  <li class="bg-white my-2 shadow-lg rounded" x-data="{ open: false }">
    <h2 @click="open = !open" class="flex justify-between items-center font-semibold p-3 cursor-pointer">
      <span>Is the duration of levels the same for all 5 learning levels and what is the duration?</span>
      <svg :class="open ? 'rotate-180' : ''" class="fill-current text-purple-700 h-6 w-6 transition-transform duration-500" viewBox="0 0 20 20">
        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
      </svg>
    </h2>
    <div x-show="open" class="border-l-2 border-purple-600 overflow-hidden transition-all duration-500" style="display: none;">
      <p class="p-3 text-gray-900">Yes, the duration of N1 to N5 levels is the same. Though the module will keep changing with each level, a new learning set is introduced. The duration of each learning level is 80 hours.</p>
    </div>
  </li>

  <li class="bg-white my-2 shadow-lg rounded" x-data="{ open: false }">
    <h2 @click="open = !open" class="flex justify-between items-center font-semibold p-3 cursor-pointer">
      <span>Before enrolling in the Japanese language, how can I attend a session and arrive at a decision?</span>
      <svg :class="open ? 'rotate-180' : ''" class="fill-current text-purple-700 h-6 w-6 transition-transform duration-500" viewBox="0 0 20 20">
        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
      </svg>
    </h2>
    <div x-show="open" class="border-l-2 border-purple-600 overflow-hidden transition-all duration-500" style="display: none;">
      <p class="p-3 text-gray-900">You can book a demo session with us and attend a live session. You can see for yourself and believe the experience and get started with the Japanese language course.</p>
    </div>
  </li>

  <li class="bg-white my-2 shadow-lg rounded" x-data="{ open: false }">
    <h2 @click="open = !open" class="flex justify-between items-center font-semibold p-3 cursor-pointer">
      <span>What is the cost of a Japanese language course in Mahabalipuram, Chennai?</span>
      <svg :class="open ? 'rotate-180' : ''" class="fill-current text-purple-700 h-6 w-6 transition-transform duration-500" viewBox="0 0 20 20">
        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
      </svg>
    </h2>
    <div x-show="open" class="border-l-2 border-purple-600 overflow-hidden transition-all duration-500" style="display: none;">
      <p class="p-3 text-gray-900">Henry Harfin’s Japanese language course in Mahabalipuram, Chennai ranges from INR 19,500 to INR 34,500. This depends on the level of proficiency desired by the learner.</p>
    </div>
  </li>
  <li class="bg-white my-2 shadow-lg rounded" x-data="{ open: false }">
    <h2 @click="open = !open" class="flex justify-between items-center font-semibold p-3 cursor-pointer">
      <span>Do I need to pass N2 before taking the N1 Exam in Japanese?</span>
      <svg :class="open ? 'rotate-180' : ''" class="fill-current text-purple-700 h-6 w-6 transition-transform duration-500" viewBox="0 0 20 20">
        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
      </svg>
    </h2>
    <div x-show="open" class="border-l-2 border-purple-600 overflow-hidden transition-all duration-500" style="display: none;">
      <p class="p-3 text-gray-900">ANS: No, You need not clear the N2 Exam before taking the N1 exam in Japanese. This is because there is a dire need to upgrade the Japanese language skills with each level from N5 to N1, and many candidates find it very hard to reach the Advanced level and quit in between.</p>
    </div>
  </li>

  <li class="bg-white my-2 shadow-lg rounded" x-data="{ open: false }">
    <h2 @click="open = !open" class="flex justify-between items-center font-semibold p-3 cursor-pointer">
      <span>Can I learn Japanese fluently in 3 months?</span>
      <svg :class="open ? 'rotate-180' : ''" class="fill-current text-purple-700 h-6 w-6 transition-transform duration-500" viewBox="0 0 20 20">
        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
      </svg>
    </h2>
    <div x-show="open" class="border-l-2 border-purple-600 overflow-hidden transition-all duration-500" style="display: none;">
      <p class="p-3 text-gray-900">ANS: You can learn Japanese in 3 months, but can only know the primary language skills. If you want to attain a level of proficiency, Henry Harvin provides training for various proficiency levels through strategic and systematic learning through the Japanese language course in Chennai.</p>
    </div>
  </li>

  <li class="bg-white my-2 shadow-lg rounded" x-data="{ open: false }">
    <h2 @click="open = !open" class="flex justify-between items-center font-semibold p-3 cursor-pointer">
      <span>Which Institute is best for learning Japanese near me in T.Nagar, Chennai?</span>
      <svg :class="open ? 'rotate-180' : ''" class="fill-current text-purple-700 h-6 w-6 transition-transform duration-500" viewBox="0 0 20 20">
        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
      </svg>
    </h2>
    <div x-show="open" class="border-l-2 border-purple-600 overflow-hidden transition-all duration-500" style="display: none;">
      <p class="p-3 text-gray-900">ANS: If you want to learn Japanese and master the language effectively, then you have come to the right place. Henry Harvin is one of the best Institutes that provide a Japanese language course in T.Nagar, Chennai. This course is scientifically designed to aid each learner in mastering the Japanese language easily.</p>
    </div>
  </li>

  <li class="bg-white my-2 shadow-lg rounded" x-data="{ open: false }">
    <h2 @click="open = !open" class="flex justify-between items-center font-semibold p-3 cursor-pointer">
      <span>Is Henry Harvin’s Japanese language course available online near me in Anna Nagar, Chennai?</span>
      <svg :class="open ? 'rotate-180' : ''" class="fill-current text-purple-700 h-6 w-6 transition-transform duration-500" viewBox="0 0 20 20">
        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
      </svg>
    </h2>
    <div x-show="open" class="border-l-2 border-purple-600 overflow-hidden transition-all duration-500" style="display: none;">
      <p class="p-3 text-gray-900">ANS: Yes, Henry Harvin’s Japanese language course is available in Anna Nagar, Chennai. Once you get enrolled in the course, you can choose the batch and start learning.</p>
    </div>
  </li>
   <li class="bg-white my-2 shadow-lg rounded" x-data="{ open: false }">
    <h2 @click="open = !open" class="flex justify-between items-center font-semibold p-3 cursor-pointer">
      <span>What is the cost of your services?</span>
      <svg :class="open ? 'rotate-180' : ''" class="fill-current text-purple-700 h-6 w-6 transition-transform duration-500" viewBox="0 0 20 20">
        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
      </svg>
    </h2>
    <div x-show="open" class="border-l-2 border-purple-600 overflow-hidden transition-all duration-500" style="display: none;">
      <p class="p-3 text-gray-900">
        We are a freemium service provider. Your Profile Evaluation, University Recommendation, SOP/LOR Resume Review and Application Assistance is completely free. You can get the help of our Preminum Counseling Experts in University/course Recommendation refinement, SOP storylining and editing support for a service free. Request a call back to know more.
      </p>
    </div>
  </li>

  <li class="bg-white my-2 shadow-lg rounded" x-data="{ open: false }">
    <h2 @click="open = !open" class="flex justify-between items-center font-semibold p-3 cursor-pointer">
      <span>Why should I do a Japanese learning course?</span>
      <svg :class="open ? 'rotate-180' : ''" class="fill-current text-purple-700 h-6 w-6 transition-transform duration-500" viewBox="0 0 20 20">
        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
      </svg>
    </h2>
    <div x-show="open" class="border-l-2 border-purple-600 overflow-hidden transition-all duration-500" style="display: none;">
      <p class="p-3 text-gray-900">
        Japanese helps broaden your understanding of the moral principles, ethical standards, and aesthetics that Japan shares with other Asian countries.
      </p>
    </div>
  </li>

  <li class="bg-white my-2 shadow-lg rounded" x-data="{ open: false }">
    <h2 @click="open = !open" class="flex justify-between items-center font-semibold p-3 cursor-pointer">
      <span>Why should I do a Japanese learning course in India?</span>
      <svg :class="open ? 'rotate-180' : ''" class="fill-current text-purple-700 h-6 w-6 transition-transform duration-500" viewBox="0 0 20 20">
        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
      </svg>
    </h2>
    <div x-show="open" class="border-l-2 border-purple-600 overflow-hidden transition-all duration-500" style="display: none;">
      <p class="p-3 text-gray-900">
        Learning Japanese expands job opportunities in the Indian labour market. There are greater career chances for Indian people who can speak Japanese because Japanese corporations including Honda, Yamaha, Sony, and Toyota have production plants in India.
      </p>
    </div>
  </li>

  <li class="bg-white my-2 shadow-lg rounded" x-data="{ open: false }">
    <h2 @click="open = !open" class="flex justify-between items-center font-semibold p-3 cursor-pointer">
      <span>What aspect of learning Japanese is most crucial?</span>
      <svg :class="open ? 'rotate-180' : ''" class="fill-current text-purple-700 h-6 w-6 transition-transform duration-500" viewBox="0 0 20 20">
        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
      </svg>
    </h2>
    <div x-show="open" class="border-l-2 border-purple-600 overflow-hidden transition-all duration-500" style="display: none;">
      <p class="p-3 text-gray-900">
        Kanji is one of the most crucial components of learning Japanese because it is used in almost everything. When using a textbook, a beginner will spend a lot of time looking for kanji and terminology.
      </p>
    </div>
  </li>
  <ul class="space-y-2">

  <!-- Already added first 5 above -->

  <li class="bg-white my-2 shadow-lg rounded" x-data="{ open: false }">
    <h2 @click="open = !open" class="flex justify-between items-center font-semibold p-3 cursor-pointer">
      <span>Which three Japanese languages are there?</span>
      <svg :class="open ? 'rotate-180' : ''" class="fill-current text-purple-700 h-6 w-6 transition-transform duration-500" viewBox="0 0 20 20">
        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
      </svg>
    </h2>
    <div x-show="open" class="border-l-2 border-purple-600 overflow-hidden transition-all duration-500" style="display: none;">
      <p class="p-3 text-gray-900">
        Hiragana, katakana, and kanji are the three languages. Hiragana and katakana are simple to learn and easy to use if you plan to visit Japan or want to master the fundamentals of the language. Kanji is a bit more difficult.
      </p>
    </div>
  </li>

  <li class="bg-white my-2 shadow-lg rounded" x-data="{ open: false }">
    <h2 @click="open = !open" class="flex justify-between items-center font-semibold p-3 cursor-pointer">
      <span>How reliable is the JLPT?</span>
      <svg :class="open ? 'rotate-180' : ''" class="fill-current text-purple-700 h-6 w-6 transition-transform duration-500" viewBox="0 0 20 20">
        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
      </svg>
    </h2>
    <div x-show="open" class="border-l-2 border-purple-600 overflow-hidden transition-all duration-500" style="display: none;">
      <p class="p-3 text-gray-900">
        The JLPT score has the advantage of never expiring. Tests are administered once a year on the first Sunday in December. You can only administer a test for one level each year. JLPT is accessible to everyone with no age limitations. Occasionally, some businesses might assess employees' proficiency.
      </p>
    </div>
  </li>

  <li class="bg-white my-2 shadow-lg rounded" x-data="{ open: false }">
    <h2 @click="open = !open" class="flex justify-between items-center font-semibold p-3 cursor-pointer">
      <span>I don't know Japanese, can I still study there?</span>
      <svg :class="open ? 'rotate-180' : ''" class="fill-current text-purple-700 h-6 w-6 transition-transform duration-500" viewBox="0 0 20 20">
        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
      </svg>
    </h2>
    <div x-show="open" class="border-l-2 border-purple-600 overflow-hidden transition-all duration-500" style="display: none;">
      <p class="p-3 text-gray-900">
        Yes, it is possible to study in Japan without knowing Japanese, although it is quite challenging. It is advised to become conversant with basic Japanese.
      </p>
    </div>
  </li>

  <li class="bg-white my-2 shadow-lg rounded" x-data="{ open: false }">
    <h2 @click="open = !open" class="flex justify-between items-center font-semibold p-3 cursor-pointer">
      <span>How much does an online Japanese education cost?</span>
      <svg :class="open ? 'rotate-180' : ''" class="fill-current text-purple-700 h-6 w-6 transition-transform duration-500" viewBox="0 0 20 20">
        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
      </svg>
    </h2>
    <div x-show="open" class="border-l-2 border-purple-600 overflow-hidden transition-all duration-500" style="display: none;">
      <p class="p-3 text-gray-900">
        It depends on the institution and the course. Some organizations provide cost-effective or free online Japanese lessons.
      </p>
    </div>
  </li>
  <ul class="space-y-2">

  <li class="bg-white my-2 shadow-lg rounded" x-data="{ open: false }">
    <h2 @click="open = !open" class="flex justify-between items-center font-semibold p-3 cursor-pointer">
      <span>What is the duration of the Japanese language course?</span>
      <svg :class="open ? 'rotate-180' : ''" class="fill-current text-purple-700 h-6 w-6 transition-transform duration-500" viewBox="0 0 20 20">
        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
      </svg>
    </h2>
    <div x-show="open" class="border-l-2 border-purple-600 overflow-hidden transition-all duration-500" style="display: none;">
      <p class="p-3 text-gray-900">It depends on how advanced the Japanese course is and how much time you invest. Basic Japanese language instruction lasts for around six months.</p>
    </div>
  </li>

  <li class="bg-white my-2 shadow-lg rounded" x-data="{ open: false }">
    <h2 @click="open = !open" class="flex justify-between items-center font-semibold p-3 cursor-pointer">
      <span>Define JLPT. Is it applicable everywhere?</span>
      <svg :class="open ? 'rotate-180' : ''" class="fill-current text-purple-700 h-6 w-6 transition-transform duration-500" viewBox="0 0 20 20">
        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
      </svg>
    </h2>
    <div x-show="open" class="border-l-2 border-purple-600 overflow-hidden transition-all duration-500" style="display: none;">
      <p class="p-3 text-gray-900">The Japanese Language Proficiency Test is known as JLPT. The certificate, which is accepted worldwide, attests to your proficiency in Japanese.</p>
    </div>
  </li>

  <li class="bg-white my-2 shadow-lg rounded" x-data="{ open: false }">
    <h2 @click="open = !open" class="flex justify-between items-center font-semibold p-3 cursor-pointer">
      <span>Are JLPT levels different from one another?</span>
      <svg :class="open ? 'rotate-180' : ''" class="fill-current text-purple-700 h-6 w-6 transition-transform duration-500" viewBox="0 0 20 20">
        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
      </svg>
    </h2>
    <div x-show="open" class="border-l-2 border-purple-600 overflow-hidden transition-all duration-500" style="display: none;">
      <p class="p-3 text-gray-900">The JLPT is divided into five levels: N1, N2, N3, N4, and N5. Each focuses on various speaking, writing, and listening steps of the Japanese language learning process.</p>
    </div>
  </li>

  <li class="bg-white my-2 shadow-lg rounded" x-data="{ open: false }">
    <h2 @click="open = !open" class="flex justify-between items-center font-semibold p-3 cursor-pointer">
      <span>What in Japan is the most significant exam?</span>
      <svg :class="open ? 'rotate-180' : ''" class="fill-current text-purple-700 h-6 w-6 transition-transform duration-500" viewBox="0 0 20 20">
        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
      </svg>
    </h2>
    <div x-show="open" class="border-l-2 border-purple-600 overflow-hidden transition-all duration-500" style="display: none;">
      <p class="p-3 text-gray-900">The EJU test results are required for admission to 61% of public universities and 98% of Japan's national institutions. On the other hand, they are necessary at 52% of private universities in Japan.</p>
    </div>
  </li>

  <li class="bg-white my-2 shadow-lg rounded" x-data="{ open: false }">
    <h2 @click="open = !open" class="flex justify-between items-center font-semibold p-3 cursor-pointer">
      <span>Is the Japanese language course appropriate for kids under 10?</span>
      <svg :class="open ? 'rotate-180' : ''" class="fill-current text-purple-700 h-6 w-6 transition-transform duration-500" viewBox="0 0 20 20">
        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
      </svg>
    </h2>
    <div x-show="open" class="border-l-2 border-purple-600 overflow-hidden transition-all duration-500" style="display: none;">
      <p class="p-3 text-gray-900">Our suggestion is to start learning Japanese after the age of 13 or 14.</p>
    </div>
  </li>

  <li class="bg-white my-2 shadow-lg rounded" x-data="{ open: false }">
    <h2 @click="open = !open" class="flex justify-between items-center font-semibold p-3 cursor-pointer">
      <span>To advance to the next level of the JLPT, must each level be passed?</span>
      <svg :class="open ? 'rotate-180' : ''" class="fill-current text-purple-700 h-6 w-6 transition-transform duration-500" viewBox="0 0 20 20">
        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
      </svg>
    </h2>
    <div x-show="open" class="border-l-2 border-purple-600 overflow-hidden transition-all duration-500" style="display: none;">
      <p class="p-3 text-gray-900">No. It is not mandatory.</p>
    </div>
  </li>

  <li class="bg-white my-2 shadow-lg rounded" x-data="{ open: false }">
    <h2 @click="open = !open" class="flex justify-between items-center font-semibold p-3 cursor-pointer">
      <span>Can I study JLPT N4 LEVEL directly or can I study JLPT N5 and N4 at the same time?</span>
      <svg :class="open ? 'rotate-180' : ''" class="fill-current text-purple-700 h-6 w-6 transition-transform duration-500" viewBox="0 0 20 20">
        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
      </svg>
    </h2>
    <div x-show="open" class="border-l-2 border-purple-600 overflow-hidden transition-all duration-500" style="display: none;">
      <p class="p-3 text-gray-900">No. JLPT N5 is the first test to be studied, followed by JLPT N4 in that order. It cannot be studied at the same time.</p>
    </div>
  </li>

  <li class="bg-white my-2 shadow-lg rounded" x-data="{ open: false }">
    <h2 @click="open = !open" class="flex justify-between items-center font-semibold p-3 cursor-pointer">
      <span>How can I learn Japanese vocabulary?</span>
      <svg :class="open ? 'rotate-180' : ''" class="fill-current text-purple-700 h-6 w-6 transition-transform duration-500" viewBox="0 0 20 20">
        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
      </svg>
    </h2>
    <div x-show="open" class="border-l-2 border-purple-600 overflow-hidden transition-all duration-500" style="display: none;">
      <p class="p-3 text-gray-900">You can memorize the Japanese language's vocabulary by:</p>
      <ul class="list-disc pl-6 pb-3 space-y-1 text-gray-900">
        <li>Memory hints</li>
        <li>Japanese Flashcards</li>
        <li>Spaced time repetition method</li>
      </ul>
    </div>
  </li>

  <li class="bg-white my-2 shadow-lg rounded" x-data="{ open: false }">
    <h2 @click="open = !open" class="flex justify-between items-center font-semibold p-3 cursor-pointer">
      <span>What is the cost of an Indian student visa to Japan?</span>
      <svg :class="open ? 'rotate-180' : ''" class="fill-current text-purple-700 h-6 w-6 transition-transform duration-500" viewBox="0 0 20 20">
        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
      </svg>
    </h2>
    <div x-show="open" class="border-l-2 border-purple-600 overflow-hidden transition-all duration-500" style="display: none;">
      <p class="p-3 text-gray-900">The following fees apply to Japanese visas: 3,000 Yen for a single-entry visa. 6,000 Yen for a visa with two or more entries.</p>
    </div>
  </li>
<!-- Q1 -->
  <li class="bg-white my-2 shadow-lg rounded" x-data="{ open: false }">
    <h2 @click="open = !open"
        class="flex justify-between items-center font-semibold p-3 cursor-pointer">
      <span>What are the few expressions of the Japanese language course?</span>
      <svg :class="open ? 'rotate-180' : ''"
           class="fill-current text-purple-700 h-6 w-6 transition-transform duration-500"
           viewBox="0 0 20 20">
        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
      </svg>
    </h2>
    <div x-show="open" class="border-l-2 border-purple-600 overflow-hidden transition-all duration-500" style="display: none;">
      <div class="p-3 text-gray-900">
        <p class="font-semibold">Basic Expressions:</p>
        <ul class="list-disc ml-6">
          <li>Hi / Yes → はい。</li>
          <li>No → いいえ。</li>
          <li>Please → おねがいします。</li>
          <li>Thank you → ありがとう。</li>
        </ul>
      </div>
    </div>
  </li>

  <!-- Q2 -->
  <li class="bg-white my-2 shadow-lg rounded" x-data="{ open: false }">
    <h2 @click="open = !open"
        class="flex justify-between items-center font-semibold p-3 cursor-pointer">
      <span>What is the simplest form of Japanese writing?</span>
      <svg :class="open ? 'rotate-180' : ''"
           class="fill-current text-purple-700 h-6 w-6 transition-transform duration-500"
           viewBox="0 0 20 20">
        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
      </svg>
    </h2>
    <div x-show="open" class="border-l-2 border-purple-600 overflow-hidden transition-all duration-500" style="display: none;">
      <p class="p-3 text-gray-900">
        The Hiragana alphabet is the most fundamental of the three writing systems. 
        It is the first set of characters that children and beginners learn.
      </p>
    </div>
  </li>

  <li class="bg-white my-2 shadow-lg rounded" x-data="{ open: false }">
    <h2 @click="open = !open" class="flex justify-between items-center font-semibold p-3 cursor-pointer">
      <span>Is Korean harder than Japanese?</span>
      <svg :class="open ? 'rotate-180' : ''" class="fill-current text-purple-700 h-6 w-6 transition-transform duration-500" viewBox="0 0 20 20">
        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885"></path>
      </svg>
    </h2>
    <div x-show="open" class="border-l-2 border-purple-600 overflow-hidden transition-all duration-500" style="display: none;">
      <p class="p-3 text-gray-900">Korean isn’t tonal, unlike other East Asian languages. This means the meaning of a word doesn’t change with your accent. Therefore, Korean is simpler than Japanese.</p>
    </div>
  </li>

  <li class="bg-white my-2 shadow-lg rounded" x-data="{ open: false }">
    <h2 @click="open = !open" class="flex justify-between items-center font-semibold p-3 cursor-pointer">
      <span>How frequently will the JLPT be given?</span>
      <svg :class="open ? 'rotate-180' : ''" class="fill-current text-purple-700 h-6 w-6 transition-transform duration-500" viewBox="0 0 20 20">
        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885"></path>
      </svg>
    </h2>
    <div x-show="open" class="border-l-2 border-purple-600 overflow-hidden transition-all duration-500" style="display: none;">
      <p class="p-3 text-gray-900">Twice a year, in July and December. Outside Japan, the test may only be administered in certain cities during these months.</p>
    </div>
  </li>

  <li class="bg-white my-2 shadow-lg rounded" x-data="{ open: false }">
    <h2 @click="open = !open" class="flex justify-between items-center font-semibold p-3 cursor-pointer">
      <span>When will the 2023 JLPT take place?</span>
      <svg :class="open ? 'rotate-180' : ''" class="fill-current text-purple-700 h-6 w-6 transition-transform duration-500" viewBox="0 0 20 20">
        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885"></path>
      </svg>
    </h2>
    <div x-show="open" class="border-l-2 border-purple-600 overflow-hidden transition-all duration-500" style="display: none;">
      <p class="p-3 text-gray-900">The tests were held on Sundays, July 2 and December 3, 2023.</p>
    </div>
  </li>

  <li class="bg-white my-2 shadow-lg rounded" x-data="{ open: false }">
    <h2 @click="open = !open" class="flex justify-between items-center font-semibold p-3 cursor-pointer">
      <span>Who administers the JLPT?</span>
      <svg :class="open ? 'rotate-180' : ''" class="fill-current text-purple-700 h-6 w-6 transition-transform duration-500" viewBox="0 0 20 20">
        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885"></path>
      </svg>
    </h2>
    <div x-show="open" class="border-l-2 border-purple-600 overflow-hidden transition-all duration-500" style="display: none;">
      <p class="p-3 text-gray-900">The test is administered by Japan Educational Exchanges and Services. The Japan Foundation also administers it with local host institutions. In Taiwan, it is co-hosted with the Japan-Taiwan Exchange Association.</p>
    </div>
  </li>

  <li class="bg-white my-2 shadow-lg rounded" x-data="{ open: false }">
    <h2 @click="open = !open" class="flex justify-between items-center font-semibold p-3 cursor-pointer">
      <span>Do all students take the same exam, with levels being determined by the results?</span>
      <svg :class="open ? 'rotate-180' : ''" class="fill-current text-purple-700 h-6 w-6 transition-transform duration-500" viewBox="0 0 20 20">
        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885"></path>
      </svg>
    </h2>
    <div x-show="open" class="border-l-2 border-purple-600 overflow-hidden transition-all duration-500" style="display: none;">
      <p class="p-3 text-gray-900">No. The test questions vary based on difficulty. Many questions are offered to accurately test the examinees’ Japanese proficiency. Please select an appropriate level when taking the test.</p>
    </div>
  </li>

  <li class="bg-white my-2 shadow-lg rounded" x-data="{ open: false }">
    <h2 @click="open = !open" class="flex justify-between items-center font-semibold p-3 cursor-pointer">
      <span>Are all JLPT responses scored using computers?</span>
      <svg :class="open ? 'rotate-180' : ''" class="fill-current text-purple-700 h-6 w-6 transition-transform duration-500" viewBox="0 0 20 20">
        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885"></path>
      </svg>
    </h2>
    <div x-show="open" class="border-l-2 border-purple-600 overflow-hidden transition-all duration-500" style="display: none;">
      <p class="p-3 text-gray-900">Yes. JLPT uses multiple-choice computer scoring. Questions generally have four options, though some listening questions only have three.</p>
    </div>
  </li>

  <li class="bg-white my-2 shadow-lg rounded" x-data="{ open: false }">
    <h2 @click="open = !open" class="flex justify-between items-center font-semibold p-3 cursor-pointer">
      <span>Are there questions on the JLPT which ask for understanding Japanese culture?</span>
      <svg :class="open ? 'rotate-180' : ''" class="fill-current text-purple-700 h-6 w-6 transition-transform duration-500" viewBox="0 0 20 20">
        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885"></path>
      </svg>
    </h2>
    <div x-show="open" class="border-l-2 border-purple-600 overflow-hidden transition-all duration-500" style="display: none;">
      <p class="p-3 text-gray-900">No. JLPT does not specifically test Japanese culture. While some questions may reference culture, any question can be answered without cultural knowledge.</p>
    </div>
  </li>
<ul class="space-y-2">

  <li class="bg-white my-2 shadow-lg rounded" x-data="{ open: false }">
    <h2 @click="open = !open" class="flex justify-between items-center font-semibold p-3 cursor-pointer">
      <span>What features does the Online JLPT Mock Test Series - 2023 offer?</span>
      <svg :class="open ? 'rotate-180' : ''" class="fill-current text-purple-700 h-6 w-6 transition-transform duration-500" viewBox="0 0 20 20">
        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885"></path>
      </svg>
    </h2>
    <div x-show="open" class="border-l-2 border-purple-600 overflow-hidden transition-all duration-500" style="display: none;">
      <p class="p-3 text-gray-900">
        The features are:<br>
        - Online practice tests with objective questions from previous JLPT exams.<br>
        - Free online practice exams using the latest syllabus.<br>
        - Practice exams based on actual JLPT formats.
      </p>
    </div>
  </li>

  <li class="bg-white my-2 shadow-lg rounded" x-data="{ open: false }">
    <h2 @click="open = !open" class="flex justify-between items-center font-semibold p-3 cursor-pointer">
      <span>Why is Japanese different from other languages?</span>
      <svg :class="open ? 'rotate-180' : ''" class="fill-current text-purple-700 h-6 w-6 transition-transform duration-500" viewBox="0 0 20 20">
        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885"></path>
      </svg>
    </h2>
    <div x-show="open" class="border-l-2 border-purple-600 overflow-hidden transition-all duration-500" style="display: none;">
      <p class="p-3 text-gray-900">
        Japanese is unique because every word ends with a vowel, making it a vowel-salient language. Each word is composed of syllables ending in vowels, except for the “n”-ending sounds.
      </p>
    </div>
  </li>

  <li class="bg-white my-2 shadow-lg rounded" x-data="{ open: false }">
    <h2 @click="open = !open" class="flex justify-between items-center font-semibold p-3 cursor-pointer">
      <span>How much does a Japanese teacher earn in India?</span>
      <svg :class="open ? 'rotate-180' : ''" class="fill-current text-purple-700 h-6 w-6 transition-transform duration-500" viewBox="0 0 20 20">
        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885"></path>
      </svg>
    </h2>
    <div x-show="open" class="border-l-2 border-purple-600 overflow-hidden transition-all duration-500" style="display: none;">
      <p class="p-3 text-gray-900">
        A Japanese language trainer’s monthly salary in India ranges from 0.5 lakhs to 10.8 lakhs, based on 25 salaries from Japanese Language Trainers.
      </p>
    </div>
  </li>

  <li class="bg-white my-2 shadow-lg rounded" x-data="{ open: false }">
    <h2 @click="open = !open" class="flex justify-between items-center font-semibold p-3 cursor-pointer">
      <span>After learning Japanese, am I able to join the Indian Embassy in Japan?</span>
      <svg :class="open ? 'rotate-180' : ''" class="fill-current text-purple-700 h-6 w-6 transition-transform duration-500" viewBox="0 0 20 20">
        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885"></path>
      </svg>
    </h2>
    <div x-show="open" class="border-l-2 border-purple-600 overflow-hidden transition-all duration-500" style="display: none;">
      <p class="p-3 text-gray-900">
        Since it is a government position, you must pass the UPSC exams. Speaking Japanese will give you an advantage over other candidates.
      </p>
    </div>
  </li>

  <li class="bg-white my-2 shadow-lg rounded" x-data="{ open: false }">
    <h2 @click="open = !open" class="flex justify-between items-center font-semibold p-3 cursor-pointer">
      <span>What drawbacks are there to studying Japanese?</span>
      <svg :class="open ? 'rotate-180' : ''" class="fill-current text-purple-700 h-6 w-6 transition-transform duration-500" viewBox="0 0 20 20">
        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885"></path>
      </svg>
    </h2>
    <div x-show="open" class="border-l-2 border-purple-600 overflow-hidden transition-all duration-500" style="display: none;">
      <p class="p-3 text-gray-900">
        Learning Japanese requires commitment and effort. It is not easy, and learners must dedicate time and attention to master it.
      </p>
    </div>
  </li>

  <li class="bg-white my-2 shadow-lg rounded" x-data="{ open: false }">
    <h2 @click="open = !open" class="flex justify-between items-center font-semibold p-3 cursor-pointer">
      <span>If I enrol in a Japanese language course, will it be simple for me to relocate to Japan?</span>
      <svg :class="open ? 'rotate-180' : ''" class="fill-current text-purple-700 h-6 w-6 transition-transform duration-500" viewBox="0 0 20 20">
        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885"></path>
      </svg>
    </h2>
    <div x-show="open" class="border-l-2 border-purple-600 overflow-hidden transition-all duration-500" style="display: none;">
      <p class="p-3 text-gray-900">
        Although each country has its own immigration regulations, learning Japanese will undoubtedly help if you plan to relocate.
      </p>
    </div>
  </li>

  <li class="bg-white my-2 shadow-lg rounded" x-data="{ open: false }">
    <h2 @click="open = !open" class="flex justify-between items-center font-semibold p-3 cursor-pointer">
      <span>What local name does the Japanese have in Japan?</span>
      <svg :class="open ? 'rotate-180' : ''" class="fill-current text-purple-700 h-6 w-6 transition-transform duration-500" viewBox="0 0 20 20">
        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885"></path>
      </svg>
    </h2>
    <div x-show="open" class="border-l-2 border-purple-600 overflow-hidden transition-all duration-500" style="display: none;">
      <p class="p-3 text-gray-900">
        Native speakers call it "Nihongo" even though most people outside Japan call it "Japanese." The country name "Japan" is called "Nihon" or "Nippon" in the local language.
      </p>
    </div>
  </li>
  <ul class="space-y-2">

  <li class="bg-white my-2 shadow-lg rounded" x-data="{ open: false }">
    <h2 @click="open = !open" class="flex justify-between items-center font-semibold p-3 cursor-pointer">
      <span>What features does the Online JLPT Mock Test Series - 2023 offer?</span>
      <svg :class="open ? 'rotate-180' : ''" class="fill-current text-purple-700 h-6 w-6 transition-transform duration-500" viewBox="0 0 20 20">
        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885"></path>
      </svg>
    </h2>
    <div x-show="open" class="border-l-2 border-purple-600 overflow-hidden transition-all duration-500" style="display: none;">
      <p class="p-3 text-gray-900">
        The features are:<br>
        - Online practice tests with objective questions from previous JLPT exams.<br>
        - Free online practice exams using the latest syllabus.<br>
        - Practice exams based on actual JLPT formats.
      </p>
    </div>
  </li>

  <li class="bg-white my-2 shadow-lg rounded" x-data="{ open: false }">
    <h2 @click="open = !open" class="flex justify-between items-center font-semibold p-3 cursor-pointer">
      <span>Why is Japanese different from other languages?</span>
      <svg :class="open ? 'rotate-180' : ''" class="fill-current text-purple-700 h-6 w-6 transition-transform duration-500" viewBox="0 0 20 20">
        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885"></path>
      </svg>
    </h2>
    <div x-show="open" class="border-l-2 border-purple-600 overflow-hidden transition-all duration-500" style="display: none;">
      <p class="p-3 text-gray-900">
        Japanese is unique because every word ends with a vowel, making it a vowel-salient language. Each word is composed of syllables ending in vowels, except for the “n”-ending sounds.
      </p>
    </div>
  </li>

  <li class="bg-white my-2 shadow-lg rounded" x-data="{ open: false }">
    <h2 @click="open = !open" class="flex justify-between items-center font-semibold p-3 cursor-pointer">
      <span>How much does a Japanese teacher earn in India?</span>
      <svg :class="open ? 'rotate-180' : ''" class="fill-current text-purple-700 h-6 w-6 transition-transform duration-500" viewBox="0 0 20 20">
        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885"></path>
      </svg>
    </h2>
    <div x-show="open" class="border-l-2 border-purple-600 overflow-hidden transition-all duration-500" style="display: none;">
      <p class="p-3 text-gray-900">
        A Japanese language trainer’s monthly salary in India ranges from 0.5 lakhs to 10.8 lakhs, based on 25 salaries from Japanese Language Trainers.
      </p>
    </div>
  </li>

  <li class="bg-white my-2 shadow-lg rounded" x-data="{ open: false }">
    <h2 @click="open = !open" class="flex justify-between items-center font-semibold p-3 cursor-pointer">
      <span>After learning Japanese, am I able to join the Indian Embassy in Japan?</span>
      <svg :class="open ? 'rotate-180' : ''" class="fill-current text-purple-700 h-6 w-6 transition-transform duration-500" viewBox="0 0 20 20">
        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885"></path>
      </svg>
    </h2>
    <div x-show="open" class="border-l-2 border-purple-600 overflow-hidden transition-all duration-500" style="display: none;">
      <p class="p-3 text-gray-900">
        Since it is a government position, you must pass the UPSC exams. Speaking Japanese will give you an advantage over other candidates.
      </p>
    </div>
  </li>

  <li class="bg-white my-2 shadow-lg rounded" x-data="{ open: false }">
    <h2 @click="open = !open" class="flex justify-between items-center font-semibold p-3 cursor-pointer">
      <span>What drawbacks are there to studying Japanese?</span>
      <svg :class="open ? 'rotate-180' : ''" class="fill-current text-purple-700 h-6 w-6 transition-transform duration-500" viewBox="0 0 20 20">
        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885"></path>
      </svg>
    </h2>
    <div x-show="open" class="border-l-2 border-purple-600 overflow-hidden transition-all duration-500" style="display: none;">
      <p class="p-3 text-gray-900">
        Learning Japanese requires commitment and effort. It is not easy, and learners must dedicate time and attention to master it.
      </p>
    </div>
  </li>

  <li class="bg-white my-2 shadow-lg rounded" x-data="{ open: false }">
    <h2 @click="open = !open" class="flex justify-between items-center font-semibold p-3 cursor-pointer">
      <span>If I enrol in a Japanese language course, will it be simple for me to relocate to Japan?</span>
      <svg :class="open ? 'rotate-180' : ''" class="fill-current text-purple-700 h-6 w-6 transition-transform duration-500" viewBox="0 0 20 20">
        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885"></path>
      </svg>
    </h2>
    <div x-show="open" class="border-l-2 border-purple-600 overflow-hidden transition-all duration-500" style="display: none;">
      <p class="p-3 text-gray-900">
        Although each country has its own immigration regulations, learning Japanese will undoubtedly help if you plan to relocate.
      </p>
    </div>
  </li>

  <li class="bg-white my-2 shadow-lg rounded" x-data="{ open: false }">
    <h2 @click="open = !open" class="flex justify-between items-center font-semibold p-3 cursor-pointer">
      <span>What local name does the Japanese have in Japan?</span>
      <svg :class="open ? 'rotate-180' : ''" class="fill-current text-purple-700 h-6 w-6 transition-transform duration-500" viewBox="0 0 20 20">
        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885"></path>
      </svg>
    </h2>
    <div x-show="open" class="border-l-2 border-purple-600 overflow-hidden transition-all duration-500" style="display: none;">
      <p class="p-3 text-gray-900">
        Native speakers call it "Nihongo" even though most people outside Japan call it "Japanese." The country name "Japan" is called "Nihon" or "Nippon" in the local language.
      </p>
    </div>
  </li>

  <li class="bg-white my-2 shadow-lg rounded" x-data="{ open: false }">
    <h2 @click="open = !open" class="flex justify-between items-center font-semibold p-3 cursor-pointer">
      <span>How can learning Japanese more quickly benefit from listening to an actual speech?</span>
      <svg :class="open ? 'rotate-180' : ''" class="fill-current text-purple-700 h-6 w-6 transition-transform duration-500" viewBox="0 0 20 20">
        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885"></path>
      </svg>
    </h2>
    <div x-show="open" class="border-l-2 border-purple-600 overflow-hidden transition-all duration-500" style="display: none;">
      <p class="p-3 text-gray-900">
        Japanese has no tones, but it has a rhythm and cadence. Listening to real conversations helps learners acquire natural pronunciation and flow more quickly.
      </p>
    </div>
  </li>
<ul class="space-y-2">

  <li class="bg-white my-2 shadow-lg rounded" x-data="{ open: false }">
    <h2 @click="open = !open" class="flex justify-between items-center font-semibold p-3 cursor-pointer">
      <span>How many levels are needed to work as a professional in Japanese?</span>
      <svg :class="open ? 'rotate-180' : ''" class="fill-current text-purple-700 h-6 w-6 transition-transform duration-500" viewBox="0 0 20 20">
        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885"></path>
      </svg>
    </h2>
    <div x-show="open" class="border-l-2 border-purple-600 overflow-hidden transition-all duration-500" style="display: none;">
      <p class="p-3 text-gray-900">
        It depends on the industry. N3 or N4 may suffice in India, but some Japanese companies require N2. IT professionals can often manage with N4.
      </p>
    </div>
  </li>

  <li class="bg-white my-2 shadow-lg rounded" x-data="{ open: false }">
    <h2 @click="open = !open" class="flex justify-between items-center font-semibold p-3 cursor-pointer">
      <span>How much more must we pay in order to sign up for the JLPT exam?</span>
      <svg :class="open ? 'rotate-180' : ''" class="fill-current text-purple-700 h-6 w-6 transition-transform duration-500" viewBox="0 0 20 20">
        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885"></path>
      </svg>
    </h2>
    <div x-show="open" class="border-l-2 border-purple-600 overflow-hidden transition-all duration-500" style="display: none;">
      <p class="p-3 text-gray-900">
        Exam fees are paid directly to the Japan Foundation and range from INR 500 to INR 800 depending on the level.
      </p>
    </div>
  </li>

  <li class="bg-white my-2 shadow-lg rounded" x-data="{ open: false }">
    <h2 @click="open = !open" class="flex justify-between items-center font-semibold p-3 cursor-pointer">
      <span>Is it true that the Japanese language has more opportunities in the IT industry?</span>
      <svg :class="open ? 'rotate-180' : ''" class="fill-current text-purple-700 h-6 w-6 transition-transform duration-500" viewBox="0 0 20 20">
        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885"></path>
      </svg>
    </h2>
    <div x-show="open" class="border-l-2 border-purple-600 overflow-hidden transition-all duration-500" style="display: none;">
      <p class="p-3 text-gray-900">
        Yes, IT has strong opportunities due to Japanese and Indian multinational companies. Other growing sectors include infrastructure, biotech, and pharmaceuticals.
      </p>
    </div>
  </li>

  <li class="bg-white my-2 shadow-lg rounded" x-data="{ open: false }">
    <h2 @click="open = !open" class="flex justify-between items-center font-semibold p-3 cursor-pointer">
      <span>Are there certain software requirements for Japanese scripts?</span>
      <svg :class="open ? 'rotate-180' : ''" class="fill-current text-purple-700 h-6 w-6 transition-transform duration-500" viewBox="0 0 20 20">
        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885"></path>
      </svg>
    </h2>
    <div x-show="open" class="border-l-2 border-purple-600 overflow-hidden transition-all duration-500" style="display: none;">
      <p class="p-3 text-gray-900">
        English OS makes it easy to read/write Japanese. You may need to install Japanese fonts via Windows CD or use software like NJ Star to type in Japanese.
      </p>
    </div>
  </li>

  <li class="bg-white my-2 shadow-lg rounded" x-data="{ open: false }">
    <h2 @click="open = !open" class="flex justify-between items-center font-semibold p-3 cursor-pointer">
      <span>What will I be capable of doing once I’ve completed the Japanese language course?</span>
      <svg :class="open ? 'rotate-180' : ''" class="fill-current text-purple-700 h-6 w-6 transition-transform duration-500" viewBox="0 0 20 20">
        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885"></path>
      </svg>
    </h2>
    <div x-show="open" class="border-l-2 border-purple-600 overflow-hidden transition-all duration-500" style="display: none;">
      <p class="p-3 text-gray-900">
        By the end of the course, you’ll be able to read, write, and communicate in Japanese according to your JLPT level. You can also obtain JLPT certification for levels N5–N1.
      </p>
    </div>
  </li>

  <li class="bg-white my-2 shadow-lg rounded" x-data="{ open: false }">
    <h2 @click="open = !open" class="flex justify-between items-center font-semibold p-3 cursor-pointer">
      <span>What are the various Japanese Learning levels offered by Henry Harvin?</span>
      <svg :class="open ? 'rotate-180' : ''" class="fill-current text-purple-700 h-6 w-6 transition-transform duration-500" viewBox="0 0 20 20">
        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885"></path>
      </svg>
    </h2>
    <div x-show="open" class="border-l-2 border-purple-600 overflow-hidden transition-all duration-500" style="display: none;">
      <p class="p-3 text-gray-900">
        The course teaches Japanese at five levels (N5–N1) and covers Romaji, Katakana, Hiragana, and Kanji writing systems.
      </p>
    </div>
  </li>

  <li class="bg-white my-2 shadow-lg rounded" x-data="{ open: false }">
    <h2 @click="open = !open" class="flex justify-between items-center font-semibold p-3 cursor-pointer">
      <span>Does Henry Harvin's Japanese Learning course offer guidance for the JLPT and NAT exams?</span>
      <svg :class="open ? 'rotate-180' : ''" class="fill-current text-purple-700 h-6 w-6 transition-transform duration-500" viewBox="0 0 20 20">
        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885"></path>
      </svg>
    </h2>
    <div x-show="open" class="border-l-2 border-purple-600 overflow-hidden transition-all duration-500" style="display: none;">
      <p class="p-3 text-gray-900">
        Yes, the course provides full guidance for JLPT (N5–N1) and NAT exams, helping assess overall proficiency.
      </p>
    </div>
  </li>

  <li class="bg-white my-2 shadow-lg rounded" x-data="{ open: false }">
    <h2 @click="open = !open" class="flex justify-between items-center font-semibold p-3 cursor-pointer">
      <span>What is the training method of Japanese Learning courses at Henry Harvin?</span>
      <svg :class="open ? 'rotate-180' : ''" class="fill-current text-purple-700 h-6 w-6 transition-transform duration-500" viewBox="0 0 20 20">
        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885"></path>
      </svg>
    </h2>
    <div x-show="open" class="border-l-2 border-purple-600 overflow-hidden transition-all duration-500" style="display: none;">
      <p class="p-3 text-gray-900">
        Training includes two-way Live Online Interactive Sessions for 160 minutes each across all five modules.
      </p>
    </div>
  </li>

  <li class="bg-white my-2 shadow-lg rounded" x-data="{ open: false }">
    <h2 @click="open = !open" class="flex justify-between items-center font-semibold p-3 cursor-pointer">
      <span>What qualifications are required to study Japanese?</span>
      <svg :class="open ? 'rotate-180' : ''" class="fill-current text-purple-700 h-6 w-6 transition-transform duration-500" viewBox="0 0 20 20">
        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885"></path>
      </svg>
    </h2>
    <div x-show="open" class="border-l-2 border-purple-600 overflow-hidden transition-all duration-500" style="display: none;">
      <p class="p-3 text-gray-900">
        Minimum qualification: 10+2 or diploma with at least 40% average.
      </p>
    </div>
  </li>
 
  <li class="bg-white my-2 shadow-lg rounded" x-data="{ open: false }">
    <h2 @click="open = !open" class="flex justify-between items-center font-semibold p-3 cursor-pointer">
      <span>In addition to the Japanese Language course, what other languages are offered at Henry Harvin?</span>
      <svg :class="open ? 'rotate-180' : ''" class="fill-current text-purple-700 h-6 w-6 transition-transform duration-500" viewBox="0 0 20 20">
        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885"></path>
      </svg>
    </h2>
    <div x-show="open" class="border-l-2 border-purple-600 overflow-hidden transition-all duration-500" style="display: none;">
      <p class="p-3 text-gray-900">
        Henry Harvin also offers courses in Korean, German, and Spanish.
      </p>
    </div>
  </li>

  <li class="bg-white my-2 shadow-lg rounded" x-data="{ open: false }">
    <h2 @click="open = !open" class="flex justify-between items-center font-semibold p-3 cursor-pointer">
      <span>Are working professionals able to enrol in the Japanese language course?</span>
      <svg :class="open ? 'rotate-180' : ''" class="fill-current text-purple-700 h-6 w-6 transition-transform duration-500" viewBox="0 0 20 20">
        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885"></path>
      </svg>
    </h2>
    <div x-show="open" class="border-l-2 border-purple-600 overflow-hidden transition-all duration-500" style="display: none;">
      <p class="p-3 text-gray-900">
        Yes, working professionals can join to enhance their international competitiveness and upgrade their profile.
      </p>
    </div>
  </li>
<ul class="space-y-2">

  <li class="bg-white my-2 shadow-lg rounded" x-data="{ open: false }">
    <h2 @click="open = !open" class="flex justify-between items-center font-semibold p-3 cursor-pointer">
      <span>When may I become a Japanese speaker after taking Henry Harvin's Japanese language course?</span>
      <svg :class="open ? 'rotate-180' : ''" class="fill-current text-purple-700 h-6 w-6 transition-transform duration-500" viewBox="0 0 20 20">
        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885"></path>
      </svg>
    </h2>
    <div x-show="open" class="border-l-2 border-purple-600 overflow-hidden transition-all duration-500" style="display: none;">
      <p class="p-3 text-gray-900">
        The course has five levels (N5 to N1). By reaching level N3, you will become a Japanese speaker.
      </p>
    </div>
  </li>

  <li class="bg-white my-2 shadow-lg rounded" x-data="{ open: false }">
    <h2 @click="open = !open" class="flex justify-between items-center font-semibold p-3 cursor-pointer">
      <span>If I participate in a Japanese language course at Henry Harvin, will my rural upbringing stop me from succeeding?</span>
      <svg :class="open ? 'rotate-180' : ''" class="fill-current text-purple-700 h-6 w-6 transition-transform duration-500" viewBox="0 0 20 20">
        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885"></path>
      </svg>
    </h2>
    <div x-show="open" class="border-l-2 border-purple-600 overflow-hidden transition-all duration-500" style="display: none;">
      <p class="p-3 text-gray-900">
        No, your rural background won’t stop you. Japanese shares similarities with Indian languages, making it easier to learn. Students from rural areas can confidently take this course.
      </p>
    </div>
  </li>

  <li class="bg-white my-2 shadow-lg rounded" x-data="{ open: false }">
    <h2 @click="open = !open" class="flex justify-between items-center font-semibold p-3 cursor-pointer">
      <span>Do Japanese institutes hire a native Japanese instructor for the Japanese language course?</span>
      <svg :class="open ? 'rotate-180' : ''" class="fill-current text-purple-700 h-6 w-6 transition-transform duration-500" viewBox="0 0 20 20">
        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885"></path>
      </svg>
    </h2>
    <div x-show="open" class="border-l-2 border-purple-600 overflow-hidden transition-all duration-500" style="display: none;">
      <p class="p-3 text-gray-900">
        Yes, most institutes hire native Japanese instructors, which enhances the learning experience.
      </p>
    </div>
  </li>

  <li class="bg-white my-2 shadow-lg rounded" x-data="{ open: false }">
    <h2 @click="open = !open" class="flex justify-between items-center font-semibold p-3 cursor-pointer">
      <span>Is studying Japanese beneficial to your brain?</span>
      <svg :class="open ? 'rotate-180' : ''" class="fill-current text-purple-700 h-6 w-6 transition-transform duration-500" viewBox="0 0 20 20">
        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885"></path>
      </svg>
    </h2>
    <div x-show="open" class="border-l-2 border-purple-600 overflow-hidden transition-all duration-500" style="display: none;">
      <p class="p-3 text-gray-900">
        Yes, learning Japanese stimulates more brain activity than other languages. It improves memory, focus, multitasking ability, and mental clarity.
      </p>
    </div>
  </li>

  <li class="bg-white my-2 shadow-lg rounded" x-data="{ open: false }">
    <h2 @click="open = !open" class="flex justify-between items-center font-semibold p-3 cursor-pointer">
      <span>What are a few of the best Japanese language programmes offered in India?</span>
      <svg :class="open ? 'rotate-180' : ''" class="fill-current text-purple-700 h-6 w-6 transition-transform duration-500" viewBox="0 0 20 20">
        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885"></path>
      </svg>
    </h2>
    <div x-show="open" class="border-l-2 border-purple-600 overflow-hidden transition-all duration-500" style="display: none;">
      <p class="p-3 text-gray-900">
        Top programs include Henry Harvin Education's Japanese Language Course, Nec Japanese Language Academy (NJLA), and NIHONKAI - Japanese Training Institute.
      </p>
    </div>
  </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        
    @include('semippc.component.feedback', [
    'feedbacks' => [
        [
            'name' => 'Nadeem Ansari',
            'text' => 'Never thought I will find solace in pursuing the course under the best industry experts',
            'role' => 'Japanese Language Trainer',
            'image' => 'https://cdn.henryharvin.com/images/1695471218nadeem.jpg'
        ],
        [
            'name' => 'Jigyasa Kumari',
            'text' => 'Universally accepted training certification from Henry Harvin® upon course completion. It helped me a lot',
            'role' => 'Travel Agent',
            'image' => 'https://cdn.henryharvin.com/images/1700910153lkdjg.jpg'
        ],
        [
            'name' => 'Dev Bhanushali',
            'text' => 'Very well crafted and designed curriculum by the industry experts. They teaches every basic details to the students',
            'role' => 'Flight Attendant',
            'image' => 'https://cdn.henryharvin.com/images/1695471830bhatat.jpg'
        ],
        [
            'name' => 'Bhanumati',
            'text' => 'They teaches every basic details to the students. Very well crafted and designed curriculum by the industry experts.',
            'role' => 'Flight Attendant',
            'image' => 'https://cdn.henryharvin.com/images/170108232516682433291668243329shakti.jpg'
        ]
    ]
])

    @include('semippc.component.agota-frame')
    <section class="py-12 mx-auto px-4">
        <div class="max-w-6xl mx-auto" bis_skin_checked="1">
            <div class="flex items-center justify-center flex-wrap gap-2 text-[30px] font-semibold text-red-700">
                <span>Still have questions?</span>
                <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" type="button"
                    class="bg-red-600 text-white px-5 py-2 rounded-full text-[24px] shadow-md hover:bg-red-700 transition duration-300">
                    Get Quick Call Back
                </button>
                <span>for answers</span>
            </div>
        </div>
    </section>
    <div class="bg-gradient-to-r from-slate-800 via-red-800 to-red-500 text-white p-6">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-6 items-center">

            <div class="text-white font-bold md:text-[40px] text-[30px] leading-tight">
                <p>Henry Harvin® Ranks #1 for Japanese Language Training Institute in India by The Tribune</p>
            </div>

            <div class="bg-white text-black rounded-xl p-6 shadow-md border-2 border-purple-800">
                <h3 class="text-center font-semibold mb-4">
                    Book A Demo Class, <span class="text-red-600 font-bold">For 99$ Free !</span>
                </h3>
                <form class="space-y-3 brochure-form">
                    @if(isset($_GET['utm_campaign']))
                        <input type="hidden" name="campaign_name" value="<?= $_GET['utm_campaign'] ?>" id="campaign_name">
                    @endif
                    @if(isset($_GET['gclid']))
                        <input type="hidden" name="gclid_field" value="<?= $_GET['gclid'] ?>" id="gclid_field">
                    @endif
                    @if(isset($_GET['msclkid']))
                        <input type="hidden" name="msclkid_field" value="<?= $_GET['msclkid'] ?>" id="msclkid_field">
                    @endif
                    <input type="hidden" name="lead_source_page_url" class="textbox" value="{{url()->full()}}" placeholder="" id="" />
                    <input type="hidden" name="slug" class="textbox" value="japanese-language-course" placeholder="" id="">
                    <input type="hidden" name="source" class="textbox" value="FORM PPC" placeholder="" id="source">
                    <input type="hidden" name="course" class="textbox" value="PG-JAPANESE" placeholder="" id="crm_course_id">
                    <input type="hidden" name="description2" class="textbox" value="Japanese Language Course - Job Guarantee Program PPC" placeholder="" id="description2">

                    <input type="email" name="email" id="email" placeholder="Email" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-600" />
                    <div class="flex gap-2">
                        <select name = "country_code" class="w-1/2 px-4 py-2 border border-gray-300 rounded-md">
                            @include('semippc.component.number')
                        </select>
                        <input type="number" name="number"placeholder="Phone"class="w-1/2 px-4 py-2 border border-gray-300 rounded-md" />
                    </div>
                    <button type="submit" class="bg-red-600 text-white w-full py-2 rounded-md shadow hover:bg-red-900 transition submit-btn">
                        SUBMIT »
                    </button>
                </form>
            </div>
            <div>
                <img src="https://cdn.henryharvin.com/images/1694671240French%20B1.webp" alt="Certificate" class="rounded-lg shadow-xl w-full max-w-md mx-auto">
            </div>
        </div>
    </div>
    <!-- Modal  -->
    <div id="authentication-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-lg border-2 border-red-600 shadow">
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                    <h3 class="text-[24px] font-[600] text-red-600">
                        Apply Now
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center" data-modal-hide="authentication-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1l12 12M1 13L13 1" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <form class="p-4 md:p-5 space-y-4 brochureForm brochure-form" id="brochureForm3">

                      @if(isset($_GET['utm_campaign']))
                                <input type="hidden" name="campaign_name" value="<?= $_GET['utm_campaign'] ?>" id="campaign_name">
                            @endif
                            @if(isset($_GET['gclid']))
                                <input type="hidden" name="gclid_field" value="<?= $_GET['gclid'] ?>" id="gclid_field">
                            @endif
                            @if(isset($_GET['msclkid']))
                                <input type="hidden" name="msclkid_field" value="<?= $_GET['msclkid'] ?>" id="msclkid_field">
                            @endif
                            <input type="hidden" name="lead_source_page_url" class="textbox" value="{{url()->full()}}" placeholder="" id="" />
                            <input type="hidden" name="slug" class="textbox" value="japanese-language-course" placeholder="" id="">
                            <input type="hidden" name="source" class="textbox" value="FORM PPC" placeholder="" id="source">
                            <input type="hidden" name="course" class="textbox" value="PG-JAPANESE" placeholder="" id="crm_course_id">
                            <input type="hidden" name="description2" class="textbox" value="Japanese Language Course - Job Guarantee Program PPC" placeholder="" id="description2">
                            <div>
                                <label for="email" class="block text-sm mb-1 font-[600] text-red-600">Email</label>
                                <input type="email" name="email" id="email" placeholder="Email" required class="bg-gray-50 border border-red-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                                <span id="email_error3" class="text-red-500 text-xs"></span>
                            </div>
                    <div>
                        <label for="countryCode" class="block text-sm mb-1 font-[600] text-red-600">Country Code</label>
                        <div class="flex gap-2">
                            <select name="country_code"class="w-4/12 bg-gray-50 border border-red-300 text-gray-900 text-sm rounded-lg p-2.5">
                                @include('semippc.component.number')
                            </select>
                            <input type="number" name="number" placeholder="Mobile no *"class="bg-gray-50 border border-red-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                        </div>
                        <span id="phone_error3" class="text-red-500 text-xs"></span>
                    </div>
                    <!-- Hidden Inputs -->
                    {{-- <input type="hidden" name="source" class="textbox" value="KAZUMI WEBSITE" placeholder="" /> --}}
                    {{-- <input type="hidden" name="lead_source_page_url" class="textbox" value="{{ url()->full() }}" placeholder="" id=""> --}}
                    {{-- <input type="hidden" name="slug" value="contact-us"> --}}
                    <div class="flex justify-center pt-3">
                        <button type="submit" class="bg-red-600 text-white py-2 px-4 text-lg rounded-md submit-btn">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        // const form = document.getElementById('brochureForm');
        // const btn = document.getElementById('form-one-button')


        document.querySelectorAll('.brochure-form').forEach((form) => {

            const btn = form.querySelector('.submit-btn');

            form.addEventListener('submit', function (e) {
            e.preventDefault();
            
            // console.log('Specific form submitted'+form);

            btn.disabled = true;
            btn.innerText = 'Processing...';
            const formData = new FormData(form);
            fetch('https://www.henryharvin.com/api/kazumi-leadstore', {
                method: 'POST',
                body: formData,
            })
            .then(res => res.json())
            .then(data => {
                if (data.success && data.slug) {
                    window.location.href = data.slug;
                } else {
                    alert('Brochure request submitted, but redirect URL not found.');
                }
            })
            .catch(err => {
                console.error('Error:', err);
                alert('Something went wrong.');
            })
            .finally(() => {
                btn.disabled = false;
                btn.innerText = 'Send Me Brochure »';
            });
            });
        });
    });

</script>

@endsection
