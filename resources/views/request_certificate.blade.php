@extends('layouts.app')
@section('content')
    <div class="md:w-11/12 w-full mx-auto grid md:grid-cols-2 place-items-center my-6 place-content-between gap-6">
        <div>
            <div class="flex gap-3 items-center justify-center mb-2">
                <p
                    class="px-4 py-1 flex items-center text-[13px] justify-center text-white rounded-lg bg-green-600 border border-green-600 rounded-full">
                    Option 1</p>
                <p class="text-"> (Recommended) </p>
                <div class="relative flex items-center justify-center w-8 h-8 border-2 border-green-600 rounded-full">
                    <div class="animate-bounce">
                        <svg class="w-4 h-4 text-green-800 font-[600]" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 13l-7 7m0 0l-7-7m7 7V4"></path>
                        </svg>
                    </div>
                </div>
            </div>
            <div
                class="w-full h-full text-[14px] rounded-md px-4 py-2 bg-red-600 hover:bg-red-900 focus:ring-2 focus:ring-purple ">
                <button onclick="if (!window.__cfRLUnblockHandlers) return false; certificateForm('hard-copy')"
                    class="text-[13px] text-center text-white">Apply
                    for Physical Certificate in Leather Folder via Courier (Recommended) + Soft Copy
                </button>
            </div>
        </div>
        <div class="mt-4 md:mt-0">
            <div class="flex gap-3 items-center mb-2 justify-center">
                <p
                    class="px-4 py-1 flex items-center text-[13px] justify-center text-white rounded-lg bg-green-600 border border-green-600 rounded-full">
                    Option 2</p>
                <p class="text-">(Less Popular) </p>
                <div class="relative flex items-center justify-center w-8 h-8 border-2 border-green-600 rounded-full">
                    <div class="animate-bounce">
                        <svg class="w-4 h-4 text-green-800 font-[600]" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 13l-7 7m0 0l-7-7m7 7V4"></path>
                        </svg>
                    </div>
                </div>
            </div>
            <div
                class="relative group w-full h-full text-[14px] rounded-md px-4 py-2 bg-red-600 hover:bg-red-900 focus:ring-2 focus:ring-purple ">
                <button onclick="if (!window.__cfRLUnblockHandlers) return false; certificateForm('soft-copy')"
                    class="text-[13px] text-center text-white">
                    Apply for Certificate Soft Copy via Email
                </button>
                <!-- <span
                    class="absolute hidden md:block left-1/2 transform -translate-x-1/2 top-full mb-2 w-max px-3 py-1 text-[12px] text-white bg-gray-700 rounded opacity-0 group-hover:opacity-100 transition-opacity">
                    Are you sure you don't want a hard copy <br> of the certificate in a leather folder?
                </span> -->
            </div>
        </div>
    </div>
     <div id="vueApp3" class="md:w-11/12 mx-auto grid md:grid-cols-3 grid-cols-1 gap-8"><!---->
            <div class="md:col-span-2 w-full open-form certificate-form">
                <div class="pa-0">
                    <form name="myForm" method="POST" enctype="multipart/form-data"><input name="_token" type="hidden"
                            class="_token" value="Ryz7TW4OB84fDcIdQhd2bCcTC3d3MPN7TsQJ3OI4"> <span id="abc"></span>
                        <div class="grid md:grid-cols-3 grid-cols-1 gap-4 mb-6 shadow-xl p-4">
                            <div class="relative z-0 w-full mb-5 group"><label for="name"
                                    class="peer-focus:font-medium text-[14px] text-gray-500 scale-75 top-2">
                                    Your Full Name (On Certificate)*</label> <input type="text" id="fullname"
                                    name="name" placeholder=" " required="required"
                                    onkeypress="if (!window.__cfRLUnblockHandlers) return false; return /[0-9a-z A-Z]/i.test(event.key)"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 focus:outline-none focus:ring-0 focus:border-blue-600">
                            </div>
                            <div class="relative z-0 w-full mb-5 group"><label for="email"
                                    class="peer-focus:font-medium text-[14px] text-gray-500 scale-75 top-2">Your Registered
                                    Email
                                    Id *</label> <input type="email" name="email" placeholder=" " id="email"
                                    required="required"
                                    onblur="if (!window.__cfRLUnblockHandlers) return false; checkEmail(this)"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 focus:outline-none focus:ring-0 focus:border-blue-600">
                                <span
                                    onkeypress="if (!window.__cfRLUnblockHandlers) return false; return /[0-9a-zA-Z@.$&amp;]/i.test(event.key)"
                                    class="error email-error"></span></div>
                            <div class="relative z-0 w-full mb-5 group"><label for="mobile"
                                    class="peer-focus:font-medium text-[14px] text-gray-500 scale-75 top-2">Your Registered
                                    Mobile No *</label> <input type="tel" name="mobile" id="sendTo" placeholder=" "
                                    minlength="10" maxlength="12" required="required"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 focus:outline-none focus:ring-0 focus:border-blue-600">
                            </div>
                            <div class="relative z-0 w-full mb-5 group"><label for="house"
                                    class="peer-focus:font-medium text-[14px] text-gray-500 scale-75 top-2">House No
                                    *</label> <input type="text" id="house" placeholder=" " required="required"
                                    onkeypress="if (!window.__cfRLUnblockHandlers) return false; return /[0-9a-z A-Z,.]/i.test(event.key)"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 focus:outline-none focus:ring-0 focus:border-blue-600">
                            </div>
                            <div class="relative z-0 w-full mb-5 group"><label for="street"
                                    class="peer-focus:font-medium text-[14px] text-gray-500 scale-75 top-2">Street/Area
                                    *</label> <input type="text" id="street" placeholder=" "
                                    onkeypress="if (!window.__cfRLUnblockHandlers) return false; return /[0-9a-z A-Z,.-]/i.test(event.key)"
                                    required="required"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 focus:outline-none focus:ring-0 focus:border-blue-600">
                            </div>
                            <div class="relative z-0 w-full mb-5 group"><label for="landmark"
                                    class="peer-focus:font-medium text-[14px] text-gray-500 scale-75 top-2"> Landmark
                                    *</label> <input type="text" placeholder=" " id="mobile"
                                    onkeypress="if (!window.__cfRLUnblockHandlers) return false; return /[0-9a-z A-Z,.()-]/i.test(event.key)"
                                    required="required"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 focus:outline-none focus:ring-0 focus:border-blue-600">
                            </div>
                            <div class="relative z-0 w-full mb-5 group"><label for="city"
                                    class="peer-focus:font-medium text-[14px] text-gray-500 scale-75 top-2"> City *
                                </label> <input type="text" id="city" placeholder=" "
                                    onkeypress="if (!window.__cfRLUnblockHandlers) return false; return /[0-9a-z A-Z,.()-]/i.test(event.key)"
                                    required="required"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 focus:outline-none focus:ring-0 focus:border-blue-600">
                            </div>
                            <div class="relative z-0 w-full mb-5 group"><label for="state"
                                    class="peer-focus:font-medium text-[14px] text-gray-500 scale-75 top-2"> State
                                    *</label> <input type="text" id="state" placeholder=" "
                                    onkeypress="if (!window.__cfRLUnblockHandlers) return false; return /[0-9a-z A-Z,.()-]/i.test(event.key)"
                                    required="required"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 focus:outline-none focus:ring-0 focus:border-blue-600">
                            </div>
                            <div class="relative z-0 w-full mb-5 group"><label for="pin"
                                    class="peer-focus:font-medium text-[14px] text-gray-500 scale-75 top-2"> Pin * </label>
                                <input type="number" id="pin" placeholder=" " maxlength="6" min="6"
                                    required="required"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 focus:outline-none focus:ring-0 focus:border-blue-600">
                            </div>
                        </div>
                        <div class="bg-gray-200">
                            <div class="max-w-2xl w-full p-4 mx-auto">
                                <p class="control-label mb-10 text-center">Which certificate are you applying for? *</p>
                                <div class="flex items-center justify-between py-2" style="color: rgb(152, 148, 148);">
                                    <div class="tst"><input type="radio" name="certificate" value="course"> Course
                                    </div>
                                    <div class="tst"><input type="radio" name="certificate" value="internship">
                                        Internship
                                    </div>
                                    <div class="tst projectRadio hidden"><input type="radio" name="certificate"
                                            value="project"> Project
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-fl1" style="display: block;">
                            <div id="course" class="desc my-4">
                                <div class="grid md:grid-cols-3 grid-cols-1 gap-6 mb-6 p-4">
                                    <div><label class="control-label mb-10">
                                            Course Name * </label> <select name="course_c" id="course-cour"
                                            required="required"
                                            class="w-full text-black p-2 border-b-2 border-gray-300 select2-hidden-accessible"
                                            data-select2-id="select2-data-course-cour" tabindex="-1"
                                            aria-hidden="true"></select><span
                                            class="select2 select2-container select2-container--default" dir="ltr"
                                            data-select2-id="select2-data-1-fr8s" style="width: 100%;"><span
                                                class="selection"><span
                                                    class="select2-selection select2-selection--single" role="combobox"
                                                    aria-haspopup="true" aria-expanded="false" tabindex="0"
                                                    aria-disabled="false" aria-labelledby="select2-course-cour-container"
                                                    aria-controls="select2-course-cour-container"><span
                                                        class="select2-selection__rendered"
                                                        id="select2-course-cour-container" role="textbox"
                                                        aria-readonly="true" title="Select Course"><span
                                                            class="select2-selection__placeholder">Select
                                                            Course</span></span><span class="select2-selection__arrow"
                                                        role="presentation"><b
                                                            role="presentation"></b></span></span></span><span
                                                class="dropdown-wrapper" aria-hidden="true"></span></span> <span
                                            id="enroll_course" style="color: red;">Please enter your registered email ID
                                            to view the available courses.</span></div>
                                    <div class="g-form">
                                        <p>Start date</p> <input type="date" id="start-date" required="required"
                                            class="i-put block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 focus:outline-none focus:ring-0 focus:border-blue-600">
                                    </div>
                                    <div class="g-form">
                                        <p>End date</p> <input type="date" id="end-date" required="required"
                                            class="i-put block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 focus:outline-none focus:ring-0 focus:border-blue-600">
                                    </div>
                                </div>
                                <div class="grid grid-cols-1 gap-12 my-4 p-4">
                                    <div class="g-form">
                                        <p>
                                            Counsellor Name / Your Relationship
                                            Manager
                                            from
                                            Henry Harvin *
                                        </p>
                                        <p>
                                            Write NA if you do not know. Advisable to
                                            mention
                                            name to speed up delivery.
                                        </p> <input type="text" placeholder="Relationship Manager Name"
                                            onkeypress="if (!window.__cfRLUnblockHandlers) return false; return /[0-9a-z A-Z,.()-]/i.test(event.key)"
                                            class="i-put block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 focus:outline-none focus:ring-0 focus:border-blue-600">
                                    </div>
                                    <div class="g-form">
                                        <p>
                                            Exam Score (If applicable) *
                                        </p>
                                        <p>
                                            Write NA if not applicable for your
                                            course
                                        </p> <input type="text" placeholder="your answer"
                                            onkeypress="if (!window.__cfRLUnblockHandlers) return false; return /[0-9a-z A-Z,.-]/i.test(event.key)"
                                            class="i-put block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 focus:outline-none focus:ring-0 focus:border-blue-600">
                                    </div>
                                    <div class="g-form">
                                        <p>
                                            How many classes did you miss? *
                                        </p>
                                        <p>
                                            Write NA if you attempted self paced
                                            course
                                        </p> <input type="text" placeholder="your answer"
                                            onkeypress="if (!window.__cfRLUnblockHandlers) return false; return /[0-9a-z A-Z,.]/i.test(event.key)"
                                            class="i-put block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 focus:outline-none focus:ring-0 focus:border-blue-600">
                                    </div>
                                    <div class="g-form">
                                        <p>
                                            Comments *
                                        </p> <input type="text" placeholder="your answer"
                                            onkeypress="if (!window.__cfRLUnblockHandlers) return false; return /[0-9a-zA-Z,.()\- ]/i.test(event.key)"
                                            class="i-put block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 focus:outline-none focus:ring-0 focus:border-blue-600">
                                    </div>
                                </div>
                            </div>
                        </div> <!----> <!---->
                        <div class="flex items-center justify-center my-4 btn-hard-copy"><button type="submit"
                                id="razorpayBtn" class="px-4 py-2 bg-purple text-white">Apply for
                                Soft
                                Copy + Hard Copy</button></div>
                        <div class="flex items-center justify-center my-4 btn-soft-copy hidden"><button type="submit"
                                name="add_issue" class="px-4 py-2 bg-purple text-white">Apply for
                                Soft Copy</button></div>
                    </form>
                </div>
            </div>
            <div class="section-hard-copy">
                <div class="sticky top-[100px] py-4">
                    <div class="relative"><video controls="controls" class="w-full h-96 object-cover rounded-lg">
                            <source
                                src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1741178128product_video_short_size.mp4"
                                type="video/mp4">
                        </video></div>
                </div>
            </div>
            <div class="section-soft-copy hidden">
                <div class="sticky top-[100px] py-4">
                    <div class="relative"><img
                            src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1713261539PostGraduatePrograminCyberSecurity%20(2).png"
                            alt="certificate"></div>
                </div>
            </div>
        </div>
@endsection
