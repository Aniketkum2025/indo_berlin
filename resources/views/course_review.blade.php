@extends('layouts.app')
@section('content')

<!-- Video Reviews Section hweee -->
<section id="video_review_course_section" class="bg-white shadow-lg rounded-3xl p-8 md:p-10 border border-gray-100 mx-8">
    <h2 class="md:text-[32px] text-[20px] text-red-600 md:mx-[2%] mx-[2%] italic py-6 text-center md:leading-[30px] leading-[20px]">
        {{-- View Learner's Experience on YouTube --}}
        Checkout Kazumi School {{ $course->course_name }} Reviews on YouTube
    </h2>
    <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-6 gap-8">
        @foreach ($videoReview as $vr)
            <div
                class="bg-gray-100 rounded-xl shadow-md hover:shadow-xl overflow-hidden transition-transform duration-300 hover:scale-105">
                <iframe width="100%" height="220" loading="lazy" src="{{ $vr->link }}" title="Video Review"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
        @endforeach
    </div>
</section>
<!-- WhatsApp Reviews Section -->
<section class="bg-white shadow-lg rounded-3xl p-8 md:p-10 border border-gray-100 my-4 mx-8">
    <h2 class="md:text-[32px] text-[20px] text-red-600 md:mx-[2%] mx-[2%] italic py-6 text-center md:leading-[30px] leading-[20px]">
        {{-- Read Learner's Experience on WhatsApp --}}
        Checkout Kazumi School {{ $course->course_name }} Reviews on WhatsApp
    </h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-10">
        @foreach ($reviewLeads as $rl)
            <div
                class="bg-white border border-gray-100 rounded-2xl shadow-lg hover:shadow-2xl overflow-hidden transition-transform duration-300 hover:-translate-y-2 group">
                <div class="relative">
                    <img src="{{ $rl->file }}" alt="Review Proof"
                        class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-30 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center">
                        <a href="{{ $rl->file }}" target="_blank" rel="noopener noreferrer"
                            class="px-4 py-2 bg-indigo-600 hover:bg-red text-white text-sm rounded-lg shadow-md transition">
                            View Proof
                        </a>
                    </div>
                </div>
                <div class="p-4 text-center border-t border-amber-500">
                    <h3 class="text-base md:text-lg font-semibold text-purple">
                        {{ $rl->name }}
                    </h3>
                </div>
            </div>
        @endforeach
    </div>
</section>

{{-- <section class="pb-2">
    @if($academy_name->academy_url != 'fellowship-courses')
        <div class="bg-[#dce2e9] pb-6" id="reviews">
            <div class="md:mx-[100px] mx-[1rem]" style="display: none;" id="linkedin_review_course_section">
                <p class="md:text-[32px] text-[20px] text-red md:mx-[2%] mx-[2%] italic py-4 text-center md:leading-[30px] leading-[20px]"> --}}
                    {{-- Checkout Learner's Experiences on LinkedIn --}}
                    {{-- Check out Kazumischool {{ $course->course_name }} alumna on LinkedIn
                </p> --}}
                {{-- LinkedIn Reviews Section --}}
                {{-- @if(isset($linkdinData) && $linkdinData->isNotEmpty())
                    <div class="max-w-full m-auto border-red my-2 py-2">
                        <div class="swiper swiper-slider-linked mt-4">
                            <div class="swiper-wrapper">
                                @foreach ($linkdinData as $item)
                                    <div class="rounded swiper-slide bg-white shadow-2xl">
                                        <div class="h-30 w-full relative flex items-center justify-center">
                                            <img style="height: 200px;" class="w-full" src="{{ $item->image }}" alt="LinkedIn Review Image">
                                            <a aria-label="linkedin" 
                                               class="absolute bottom-6 right-4 text-white bg-[#0e76a8] shadow-lg font-normal h-10 w-10 flex items-center justify-center rounded-full" 
                                               href="{{ $item->linkedin_url }}" 
                                               target="_blank" 
                                               rel="noopener noreferrer">
                                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                        <div class="p-2">
                                            <p class="text-[20px] font-[500] text-center">{{ $item->name }}</p>
                                        </div>
                                        <div class="flex p-2 border-t-2 items-center gap-2 justify-center">
                                            <img class="object-scale-down w-full h-14 p-2 overflow-hidden" src="{{ $item->company_logo }}" alt="Company Logo">
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endif --}}

                {{-- User Feedback Section --}}
                {{-- @if(isset($userFeedback) && $userFeedback->isNotEmpty())
                    @php
                        $count = $userFeedback->slice(0, 9)->count();
                        $chunks = $count > 0 
                            ? $userFeedback->slice(0, 20)->split(ceil($count / 3)) 
                            : $userFeedback->slice(0, 20)->split(1);
                    @endphp

                    @foreach($chunks as $chunk)
                        <div class="courseSwiper swiper-course-all mx-[1rem] overflow-hidden">
                            <div class="swiper-wrapper">
                                @foreach ($chunk as $rev)
                                    <div class="mt-4 swiper-slide">
                                        <div class="shadow-lg bg-white py-2 px-2 md:px-4 rounded-md border-b-2 border-b-purple-800">
                                            <div class="flex justify-between items-center">
                                                 <div>
                                                    <img class="h-14 w-14 rounded-full" 
                                                         src="{{ urldecode($rev->image) }}" 
                                                         onerror='this.src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1719480745ded3d.webp"' 
                                                         alt="User Image" 
                                                         loading="lazy" />
                                                </div> 

                                                <div> --}}
                                                    {{-- <span>{{ $rev->first_name }}</span><br>
                                                    <span class="text-[#F5AB40] text-xl">★ ★ ★ ★ ★</span>
                                                </div>
                                                <div class="text-blue-500">
                                                    <a href="{{ $rev->linkedin_url }}" target="_blank" rel="noopener noreferrer">
                                                        <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/17194808473rrf3rf3f.webp" alt="LinkedIn Icon" width="30px">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                @else --}}
                    {{-- @php
                        $count = $review->slice(0, 9)->count();
                        $divisionResult = $count > 0 ? ceil($count / 3) : 1;
                        $rowsss = $review->slice(0, 20)->split($divisionResult);
                    @endphp

                    @foreach($rowsss as $rowss)
                        <div class="courseSwiper swiper-course-all mx-[1rem] overflow-hidden">
                            <div class="swiper-wrapper">
                                @foreach ($rowss as $rev)
                                    <div class="mt-4 swiper-slide">
                                        <div class="shadow-lg bg-white py-2 px-2 md:px-4 rounded-md border-b-2 border-b-purple-800">
                                            <div class="flex justify-between items-center">
                                                <div>
                                                    <img class="h-14 w-14 rounded-full" 
                                                         src="{{ $rev->review_image }}" 
                                                         onerror='this.src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1719480745ded3d.webp"' 
                                                         alt="Reviewer Image" 
                                                         loading="lazy" />
                                                </div>
                                                <div>
                                                    <span>{{ $rev->review_name }}</span><br>
                                                    <span class="text-[#F5AB40] text-xl">★ ★ ★ ★ ★</span>
                                                </div>
                                                <div class="text-blue-500">
                                                    <a href="{{ $rev->review_link ? $rev->review_link : 'https://www.henryharvin.com/reviews/' }}" 
                                                       target="_blank" 
                                                       rel="noopener noreferrer">
                                                        {{ $rev->review_link ? 'Check Proof' : 'See Proof' }}
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    @endif
</section> --}}
<section class="bg-white shadow-lg rounded-3xl p-8 md:p-10 border border-gray-100 my-4 mx-8">
     @if($userFeedback)
    <div class="bg-[#dce2e9]">
        <div class="md:mx-[100px] mx-[1rem]">
            <p class="md:text-[32px] text-[20px] text-red-600 md:mx-[2%] mx-[2%] italic py-6 text-center md:leading-[30px] leading-[20px]">Checkout Kazumi School {{$course->course_name}} Alumni on Linkdin</p>
            @if(isset($userFeedback) && $userFeedback->isNotEmpty())
            @php
            $count = $userFeedback->slice(0, 9)->count();

            // Ensure the count is positive before dividing, otherwise default to 1
            $chunks = $count > 0 ? $userFeedback->slice(0, 20)->split(ceil($count / 3)) : $userFeedback->slice(0, 20)->split(1);
            @endphp
            @foreach($chunks as $chunk)
            <div class="courseSwiper swiper-course-all mx-[1rem] overflow-hidden">
                <div class="swiper-wrapper">
                    @foreach ($chunk as $rev)
                    <div class="mt-4 swiper-slide">
                        <div class="shadow-lg bg-white py-2 px-2 md:px-4 rounded-md border-b-2 border-b-red-600">
                            <div class="flex justify-between items-center">
                                <div>
                                    <img loading="lazy" class="h-14 w-14 rounded-full" src="{{urldecode($rev->image)}}" onerror='this.src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1719480745ded3d.webp"' alt="images78" loading="lazy" />
                                </div>
                                <div class="">
                                    <span>{{$rev->first_name}}</span> <br />
                                    <span class="text-[#F5AB40] text-xl">★ ★ ★ ★ ★</span>
                                </div>
                                <div class="text-blue-500">
                                    <a href="{{$rev->linkedin_url}}" target="_blank" rel="noopener noreferrer" ><img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/17194808473rrf3rf3f.webp" alt="link-img" width="30px"></a>
                                    {{-- <i class="fa fa-check-square-o" aria-hidden="true"></i> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endforeach
            @endif
        </div>
        <div class="text-center mt-6 py-6">
        </div>
    </div>
    @endif
</section>
<section
    class="max-w-5xl mx-auto bg-white my-8 shadow-2xl rounded-3xl border border-gray-100 p-8 md:p-12 hover:shadow-3xl transition duration-300">
    <!-- Title Section -->
    <div class="text-center mb-10">
        <h1 class="md:text-[24px] text-[20px] text-center text-red font-[600]">
            <span class="text-red-600">Kazumischool</span>
            <span class="text-red-500"> {{ $course->course_name }} </span>
            <span class="text-red-600">Reviews</span>
        </h1>
        {{-- <div class="flex justify-center">
            <img class="h-4" src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1732611036ezgif.com-crop_(3).webp" alt="">
        </div> --}}
        <div class="mt-3 mx-auto h-1 w-20 bg-gradient-to-r from-red-700 via-amber-400 to-red-700 rounded-full">
        </div>
    </div>

    <!-- Content Paragraph -->
    <p class="text-gray-600 text-[15px] leading-relaxed text-justify tracking-wide space-y-6">
       Kazumi Japanese & Cultural School is a leading global EdTech company dedicated to delivering world-class training and certification programs that empower learners with industry-relevant skills. Founded in 2013, Kazumi Japanese & Cultural School has emerged as a trusted name in professional education, transforming over 4,60,000 careers worldwide through its innovative and practical learning approach.
    </p>
     <p class="text-gray-600 text-[15px] leading-relaxed text-justify tracking-wide space-y-6 py-4">
      With a portfolio of 1200+ certification courses, Kazumi Japanese & Cultural School offers programs across diverse domains such as Data Science, Digital Marketing, Finance, Project Management, Teaching, IT, and Healthcare. Each course is designed by industry experts to meet evolving market needs, ensuring learners gain hands-on experience and job-ready skills that drive career growth.
     </p>
      <p class="text-gray-600 text-[15px] leading-relaxed text-justify tracking-wide space-y-6">
     Kazumi Japanese & Cultural School’s exclusive Gold Membership provides lifetime access to e-learning resources, bootcamps, internships, and placement support. Collaborating with 900+ corporates and 250+ universities, Kazumi Japanese & Cultural School ensures global exposure and real-world learning opportunities. Recognized among the Top 500 EdTech companies globally and the Top 100 EdTech leaders in India, Kazumi Japanese & Cultural School continues to redefine excellence in education by enabling learners to upskill, earn global certifications, and achieve professional success.
    </p>
</section>

{{-- <section class="max-w-[1500px] mx-auto  px-2 py-10"> --}}
    {{-- @if($academy_name->academy_url != 'fellowship-courses') --}}
        {{-- <div class="bg-[#dce2e9] pb-6 pt-4" id="reviews">
            <div class="md:mx-[100px] mx-[1rem]" style="" id="linkedin_review_course_section">
                <p class="text-center text-2xl md:text-3xl font-semibold mb-10 text-[#da2028] capitalize my-4]">
                    Checkout Learner's Experiences on LinkedIn --}}
                    {{-- Check out Kazumischool {{ $course->course_name }} alumna on LinkedIn --}}
                {{-- </p> --}}
                {{-- LinkedIn Reviews Section --}}
                {{-- @if(isset($linkdinData) && $linkdinData->isNotEmpty())
                    <div class="max-w-full m-auto border-red my-2 py-2">
                        <div class="swiper swiper-slider-linked mt-4">
                            <div class="swiper-wrapper">
                                @foreach ($linkdinData as $item)
                                    <div class="rounded swiper-slide bg-white shadow-2xl">
                                        <div class="h-30 w-full relative flex items-center justify-center">
                                            <img style="height: 200px;" class="w-full" src="{{ $item->image }}" alt="LinkedIn Review Image">
                                            <a aria-label="linkedin" 
                                               class="absolute bottom-6 right-4 text-white bg-[#0e76a8] shadow-lg font-normal h-10 w-10 flex items-center justify-center rounded-full" 
                                               href="{{ $item->linkedin_url }}" 
                                               target="_blank" 
                                               rel="noopener noreferrer">
                                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                        <div class="p-2">
                                            <p class="text-[20px] font-[500] text-center">{{ $item->name }}</p>
                                        </div>
                                        <div class="flex p-2 border-t-2 items-center gap-2 justify-center">
                                            <img class="object-scale-down w-full h-14 p-2 overflow-hidden" src="{{ $item->company_logo }}" alt="Company Logo">
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endif --}}

                {{-- User Feedback Section --}}
                {{-- @if(isset($userFeedback) && $userFeedback->isNotEmpty())
                    @php
                        $count = $userFeedback->slice(0, 9)->count();
                        $chunks = $count > 0 
                            ? $userFeedback->slice(0, 20)->split(ceil($count / 3)) 
                            : $userFeedback->slice(0, 20)->split(1);
                    @endphp --}}

                    {{-- @foreach($chunks as $chunk)
                        <div class="courseSwiper swiper-course-all mx-[1rem] overflow-hidden">
                            <div class="swiper-wrapper">
                                @foreach ($chunk as $rev)
                                    <div class="mt-4 swiper-slide">
                                        <div class="shadow-lg bg-white py-2 px-2 md:px-4 rounded-md border-b-2 border-b-purple-800">
                                            <div class="flex justify-between items-center">
                                                 <div>
                                                    <img class="h-14 w-14 rounded-full" 
                                                         src="{{ urldecode($rev->image) }}" 
                                                         onerror='this.src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1719480745ded3d.webp"' 
                                                         alt="User Image" 
                                                         loading="lazy" />
                                                </div>  --}}
{{-- 
                                                <div>
                                                    <span>{{ $rev->first_name }}</span><br>
                                                    <span class="text-[#F5AB40] text-xl">★ ★ ★ ★ ★</span>
                                                </div>
                                                <div class="text-blue-500">
                                                    <a href="{{ $rev->linkedin_url }}" target="_blank" rel="noopener noreferrer">
                                                        <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/17194808473rrf3rf3f.webp" alt="LinkedIn Icon" width="30px">
                                                    </a>
                                                </div> --}}
                                            {{-- </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                @else --}}
                    {{-- @php
                        $count = $review->slice(0, 9)->count();
                        $divisionResult = $count > 0 ? ceil($count / 3) : 1;
                        $rowsss = $review->slice(0, 20)->split($divisionResult);
                    @endphp --}}
{{-- 
                    @foreach($rowsss as $rowss)
                        <div class="courseSwiper swiper-course-all mx-[1rem] overflow-hidden">
                            <div class="swiper-wrapper">
                                @foreach ($rowss as $rev)
                                    <div class="mt-4 swiper-slide">
                                        <div class="shadow-lg bg-white py-2 px-2 md:px-4 rounded-md border-b-2 border-b-purple-800">
                                            <div class="flex justify-between items-center">
                                                <div>
                                                    <img class="h-14 w-14 rounded-full" 
                                                         src="{{ $rev->review_image }}" 
                                                         onerror='this.src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1719480745ded3d.webp"' 
                                                         alt="Reviewer Image" 
                                                         loading="lazy" />
                                                </div>
                                                <div> --}}
                                                    {{-- <span>{{ $rev->review_name }}</span><br>
                                                    <span class="text-[#F5AB40] text-xl">★ ★ ★ ★ ★</span>
                                                </div>
                                                <div class="text-blue-500">
                                                    <a href="{{ $rev->review_link ? $rev->review_link : 'https://www.henryharvin.com/reviews/' }}" 
                                                       target="_blank" 
                                                       rel="noopener noreferrer">
                                                        {{ $rev->review_link ? 'Check Proof' : 'See Proof' }}
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div> --}}
                        {{-- </div>
                    @endforeach
                @endif
            </div>
        </div> --}}
    {{-- @endif --}}
{{-- </section>

{{-- @endsection --}}

@endsection