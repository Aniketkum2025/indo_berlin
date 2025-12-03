@extends('layouts.app')
@section('title', 'About Kazumi Japanese Language School | Powered by Henry Harvin')
@section('meta_description', 'Kazumi Japanese & Culture School by Henry Harvin® helps students master the Japanese language and culture through immersive instruction by experts.')
@section('content')



<div class="text-center text-white py-4 shadow-xl bg-[#fbad18] mb-6" role="alert">
    To request your course completion certificate, do fill the below form
</div>
<div class="w-full mx-auto grid md:grid-cols-2 place-items-center my-6 place-content-between gap-6">
    <div>
        <div class="flex gap-3 items-center justify-center mb-2">
            <p class="px-4 py-1 flex items-center text-[13px] justify-center text-white rounded-lg bg-green-600 border border-green-600 rounded-full">Option 1</p> 
            <p class="text-"> (Recommended) </p>
            <div class="relative flex items-center justify-center w-8 h-8 border-2 border-green-600 rounded-full">
                <div class="animate-bounce">
                    <svg class="w-4 h-4 text-green-800 font-[600]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 13l-7 7m0 0l-7-7m7 7V4"/>
                    </svg>
                </div>
            </div>
        </div>
        <div class="w-full h-full text-[14px] rounded-md px-4 py-2 bg-orange-600 hover:bg-[#fbad18] focus:ring-2 focus:ring-purple ">
            <button onclick="certificateForm('hard-copy')"
                class="text-[13px] text-center text-white">Apply
                for Physical Certificate in Leather Folder via Courier (Recommended) + Soft Copy
            </button>
        </div>
    </div>
    <div class="mt-4 md:mt-0">
        <div class="flex gap-3 items-center mb-2 justify-center">
            <p class="px-4 py-1 flex items-center text-[13px] justify-center text-white rounded-lg bg-green-600 border border-green-600 rounded-full">Option 2</p> 
            <p class="text-">(Less Popular) </p>
            <div class="relative flex items-center justify-center w-8 h-8 border-2 border-green-600 rounded-full">
                <div class="animate-bounce">
                    <svg class="w-4 h-4 text-green-800 font-[600]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 13l-7 7m0 0l-7-7m7 7V4"/>
                    </svg>
                </div>
            </div>
        </div>
        <div class="relative group w-full h-full text-[14px] rounded-md px-4 py-2 bg-orange-600 hover:bg-[#fbad18] focus:ring-2 focus:ring-purple ">
            <button onclick="certificateForm('soft-copy')"
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



<div id="vueApp3" class="md:w-11/12 mx-auto grid md:grid-cols-3 grid-cols-1 gap-8">
    



    
    <div class="md:col-span-2 w-full open-form hidden certificate-form">
        <div class="pa-0">
            <form v-on:submit.prevent="submit" name="myForm" method="POST" enctype="multipart/form-data"
                class="">
                <input name="_token" type="hidden" class="_token" />
                <span id="abc"></span>
                <div class="grid md:grid-cols-3 grid-cols-1 gap-4 mb-6 shadow-xl p-4">
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="text" id="fullname" name="name"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            v-model="form.fullname" placeholder=" " required=""
                            onkeypress="return /[0-9a-z A-Z]/i.test(event.key)" />
                        <label for="name"
                            class="peer-focus:font-medium absolute text-[14px] text-gray-500 dark:text-gray-400 duration-500 transform -translate-y-6 scale-75 top-2 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-100 peer-focus:-translate-y-6">
                            Your Full Name (On Certificate)*</label>
                    </div>
                    <div class="relative z-0 w-full mb-5 group">

                        <input type="email" name="email" placeholder=" "
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            v-model="form.email" id="email" required="" />
                        <label
                            class="peer-focus:font-medium absolute text-[14px] text-gray-500 dark:text-gray-400 duration-500 transform -translate-y-6 scale-75 top-2 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-100 peer-focus:-translate-y-6"
                            for="email">Your Registered
                            Email
                            Id *</label>

                        <span class="error email-error"
                            onkeypress="return /[0-9a-zA-Z@.$&]/i.test(event.key)"></span>

                    </div>
                    <div class="relative z-0 w-full mb-5 group">

                        <input type="tel" name="mobile" id="sendTo" placeholder=" "
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            id="mobile" minlength="10" maxlength="12" v-model="form.mobile"
                            required="" />
                        <label
                            class="peer-focus:font-medium absolute text-[14px] text-gray-500 dark:text-gray-400 duration-500 transform -translate-y-6 scale-75 top-2 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-100 peer-focus:-translate-y-6"
                            for="mobile">Your Registered
                            Mobile No *</label>
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="text" id="house" placeholder=" "
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            id="mobile" v-model="form.house_no" required
                            onkeypress="return /[0-9a-z A-Z,.]/i.test(event.key)" />
                        <label
                            class="peer-focus:font-medium absolute text-[14px] text-gray-500 dark:text-gray-400 duration-500 transform -translate-y-6 scale-75 top-2 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-100 peer-focus:-translate-y-6"
                            for="house">House No *</label>
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="text" id="street" placeholder=" "
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            id="mobile" v-model="form.street"
                            onkeypress="return /[0-9a-z A-Z,.-]/i.test(event.key)" required />
                        <label
                            class="peer-focus:font-medium absolute text-[14px] text-gray-500 dark:text-gray-400 duration-500 transform -translate-y-6 scale-75 top-2 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-100 peer-focus:-translate-y-6"
                            for="street">Street/Area *</label>
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="text" placeholder=" "
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            id="mobile" v-model="form.landmark"
                            onkeypress="return /[0-9a-z A-Z,.()-]/i.test(event.key)" required />
                        <label
                            class="peer-focus:font-medium absolute text-[14px] text-gray-500 dark:text-gray-400 duration-500 transform -translate-y-6 scale-75 top-2 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-100 peer-focus:-translate-y-6"
                            for="landmark"> Landmark *</label>
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="text" id="city" placeholder=" "
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            id="mobile" v-model="form.landmark"
                            onkeypress="return /[0-9a-z A-Z,.()-]/i.test(event.key)" v-model="form.city"
                            onkeypress="return /[0-9a-z A-Z,.()-]/i.test(event.key)" required />
                        <label
                            class="peer-focus:font-medium absolute text-[14px] text-gray-500 dark:text-gray-400 duration-500 transform -translate-y-6 scale-75 top-2 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-100 peer-focus:-translate-y-6"
                            for="city"> City * </label>
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="text" id="state" placeholder=" "
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            id="mobile" v-model="form.state"
                            onkeypress="return /[0-9a-z A-Z,.()-]/i.test(event.key)" required />
                        <label
                            class="peer-focus:font-medium absolute text-[14px] text-gray-500 dark:text-gray-400 duration-500 transform -translate-y-6 scale-75 top-2 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-100 peer-focus:-translate-y-6"
                            for="state"> State *</label>
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="number" id="pin" placeholder=" "
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            id="mobile" v-model="form.pin" maxlength="6" min="6" required />
                        <label
                            class="peer-focus:font-medium absolute text-[14px] text-gray-500 dark:text-gray-400 duration-500 transform -translate-y-6 scale-75 top-2 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-100 peer-focus:-translate-y-6"
                            for="pin"> Pin * </label>
                    </div>
                </div>

                <div class="bg-gray-200">
                    <div class="max-w-2xl w-full p-4 mx-auto">
                        <p class="control-label mb-10 text-center">Which certificate are you applying for? *</p>
                        <div class="flex items-center justify-between py-2" style="color:#989494;">
                            <div class="tst"> <input type="radio" v-model="form.certificate"
                                    name="certificate" value="course" /> Course
                            </div>
                            <div class="tst"> <input type="radio" name="certificate" value="internship"
                                    v-model="form.certificate" /> Internship
                            </div>
                            <div class="tst projectRadio"> <input type="radio" name="certificate" value="project"
                                    v-model="form.certificate" /> Project
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-fl1" v-if="form.certificate == 'course' " style="display: block;">
                    <div id="course" class="desc my-4">
                        <div class="grid md:grid-cols-3 grid-cols-1 gap-6 mb-6 p-4">
                            <div>
                                <label class="control-label mb-10">
                                    Course Name * </label>
                                <select class="w-full text-black p-2 border-b-2 border-gray-300"
                                    v-model="form.course_c" name="course_c" id="course-cour" required>
                                    <option class="text-black" value="1">Select Course</option>
                                    
                                    <option value="Introduction to Blockchain">Introduction to Blockchain</option>
                                    <option value="Others">Others</option>

                                </select>
                            </div>

                            <div class="g-form">
                                <p>Start date</p>
                                <input
                                    class="i-put block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    type="date" id="start-date" v-model="form.sdate" required />
                            </div>
                            <div class="g-form">
                                <p>End date</p>
                                <input
                                    class="i-put block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    type="date" id="end-date" v-model="form.edate" required />
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
                                </p>
                                <input
                                    class="i-put block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    type="text" v-model="form.rmanager"
                                    placeholder="Relationship Manager Name"
                                    onkeypress="return /[0-9a-z A-Z,.()-]/i.test(event.key)" />
                            </div>
                            <div class="g-form">
                                <p>
                                    Exam Score (If applicable) *
                                </p>
                                <p>
                                    Write NA if not applicable for your
                                    course
                                </p>
                                <input
                                    class="i-put block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    type="text" v-model="form.exmam_scores" placeholder="your answer"
                                    onkeypress="return /[0-9a-z A-Z,.-]/i.test(event.key)" />
                            </div>
                            <div class="g-form">
                                <p>
                                    How many classes did you miss? *
                                </p>
                                <p>
                                    Write NA if you attempted self paced
                                    course
                                </p>
                                <input
                                    class="i-put block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    type="text" v-model="form.classes_missed" placeholder="your answer"
                                    onkeypress="return /[0-9a-z A-Z,.]/i.test(event.key)" />
                            </div>
                            <div class="g-form">
                                <p>
                                    Comments *
                                </p>

                                <input
                                    class="i-put block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    type="text" v-model="form.Comments" placeholder="your answer"
                                    onkeypress="return /[0-9a-zA-Z,.()-]/i.test(event.key)" />
                            </div>
                        </div>
                    </div>
                </div>
                <!-- start section intern -->
                <div class="intern-1" id="internship" v-if="form.certificate == 'internship' ">
                    <div class="grid md:grid-cols-2 grid-cols-1 gap-6 mb-6 p-4">
                        <div>
                            <label class="control-label mb-10">
                                Course Name *</label>

                            <select
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                v-model="form.course" name="course" id="course-int" required>
                                <option value="Select Course">Select</option>
                               
                                <option value="campus ambassador">Campus Ambassador</option>
                                <option value="business developement intern">Business Developement Intern</option>
                                <option value="Others">Others</option>

                            </select>
                        </div>
                        <div class="d-fl2">
                            <div class="g-form">
                                <p>
                                    Gender *
                                </p>
                                <select
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    v-model="form.gender" required>
                                    <option value="Select Gender">Select</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                        </div>

                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2  gap-6 mb-6 p-4">
                        <div class="g-form">
                            <p>Start date</p>
                            <input
                                class="i-put block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                type="date" id="start-date-inter" v-model="form.start_d_inter" required />
                        </div>
                        <div class="g-form">
                            <p>End date</p>
                            <input
                                class="i-put block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                type="date" id="end-date-inter" v-model="form.end_d_inter" required />
                        </div>

                        <div class="d-fl2">
                            <div class="g-form">
                                <p>
                                    Your Mentor from Henry Harvin *
                                </p>
                                <p>
                                    Write NA if you do not know.Advisableto
                                    mention
                                    name to speed up delivery
                                </p>
                                <input
                                    class="i-put block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    type="text" v-model="form.mentor_inter" id="mentor_inter"
                                    placeholder="your answer"
                                    onkeypress="return /[0-9a-z A-Z,.()-]/i.test(event.key)" />
                            </div>
                        </div>
                        <div class="g-form">
                            <p>
                                Project Name *
                            </p>
                            <p>
                                Write NA if not applicable for your
                                internship
                            </p>
                            <input
                                class="i-put block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                type="text" v-model="form.project_inter" id="project_inter"
                                placeholder="your answer"
                                onkeypress="return /[0-9a-z A-Z,.()-]/i.test(event.key)" />
                        </div>
                    </div>
                </div>
                <!-- end section intern -->
                <!-- start project section -->
                <div class="project" v-if="form.certificate == 'project'">
                    <div class="d-fl1">
                        <div class="my-4">
                            <p class="control-label my-4">Live Project Domain *</p>
                            <div class="">
                                <p>
                                    <input type="radio" v-model="form.Domain"
                                        value="Analytics / Data Science / Machine Learning">
                                    <span>Analytics / Data Science /
                                        Machine
                                        Learning</span>
                                </p>
                                <p>
                                    <input type="radio" v-model="form.Domain" value="Content Writing"
                                        required />
                                    <span>Content Writing</span>
                                </p>
                                <p>
                                    <input type="radio" v-model="form.Domain" value="Medical Writing" />
                                    <span>Medical Writing</span>
                                </p>
                                <p>
                                    <input type="radio" v-model="form.Domain" value="Digital Marketing" />
                                    <span>Digital Marketing</span>
                                </p>
                                <p>
                                    <input type="radio" v-model="form.Domain" value="Lean Six Sigma" />
                                    <span>Lean Six Sigma</span>
                                </p>
                                <p>
                                    <input type="radio" v-model="form.Domain" value="Research Writing" />
                                    <span>Research Writing</span>
                                </p>
                                <p>
                                    <input type="radio" v-model="form.Domain" value="Project Management" />
                                    <span>Project Management</span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="d-fl2">
                        <div class="g-form">
                            <p>
                                Project Title (This will get publish on
                                your
                                certificate) *
                            </p>

                            <input
                                class="i-put block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                type="text" v-model="form.ProjectTitle" placeholder="your answer"
                                onkeypress="return /[0-9a-z A-Z,.()-]/i.test(event.key)" required />
                        </div>
                    </div>
                    <input type="hidden" v-if="form.buy_certificate" name="buy_certificate" value="1" />

                    <div class="my-4">
                        <p>
                            Upload Your Project Report *
                        </p>

                        <input class="i-put" class="b-border" type="file" v-on:change="selectFile"
                            placeholder="your answer" required />
                    </div>
                </div>
                <div class="flex items-center justify-center my-4 btn-hard-copy hidden">
                    <button type="submit" id="razorpayBtn" v-if="form.certificate != 'project'"
                        v-on:click="form.buy_certificate = true" class="px-4 py-2 bg-orange-600 text-white">Apply for
                        Soft
                        Copy + Hard Copy</button>
                </div>
                <div class="flex items-center justify-center my-4 btn-soft-copy hidden">
                    <button type="submit" :disabled="processing" name="add_issue"
                        v-on:click="form.buy_certificate = false" class="px-4 py-2 bg-orange-600 text-white">Apply for
                        Soft Copy</button>
                </div>
                <!--  end section project -->
            </form>
        </div>
    </div>

    <div class="section-hard-copy hidden">
        <div class="sticky top-[100px] py-4">
            <div class="relative">
                <video class="w-full h-96 object-cover rounded-lg" controls>
                    <source src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1741178128product_video_short_size.mp4"
                        type="video/mp4">
                </video>
            </div>
        </div>
    </div>
    <div class="section-soft-copy hidden">
        <div class="sticky top-[100px] py-4">
            <div class="relative">
                <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1741415454soft-copy.PNG" alt="certificate">
            </div>
        </div>
    </div>
</div>



<!-- <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script> -->
<script src="https://unpkg.com/vue@3/dist/vue.global.prod.js"></script>

<!-- Axios (latest version) -->
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
    new Vue({
        el: '#vueApp3',
        data() {
            return {
                processing: false,
                availableCourses: null,
                courseName: null,
                slug: null,
                available: true,
                form: {
                    buy_certificate: false,
                    certificate: 'course',
                    course: null,
                    course_c: null,
                    fullname: null,
                    email: null,
                    mobile: null,
                    house_no: null,
                    street: null,
                    gender: null,
                    address: null,
                    landmark: null,
                    city: null,
                    state: null,
                    pin: null,
                    sdate: null,
                    edate: null,
                    rmanager: null,
                    exmam_scores: null,
                    classes_missed: null,
                    Comments: null,
                    start_d_inter: null,
                    end_d_inter: null,
                    mentor_inter: null,
                    project_inter: null,
                    Domain: null,
                    ProjectTitle: null,
                    image: null,

                },
                options: {
                    key: "",
                    amount: "",
                    currency: "INR",
                    name: "Henry Harvin Education",
                    order_id: "",
                    callback_url: null,
                    prefill: {
                        name: "",
                        email: "",
                        contact: "",
                    },
                    theme: {
                        color: "#800080",
                    },
                    modal: {
                        escape: false,
                        ondismiss: function() {
                            document.getElementById("razorpayBtn").disabled = false;
                        },
                    }
                },

            }
        },

        methods: {
            submit() {
                if (this.form.buy_certificate) {
                    this.processing = true;
                    axios.post('/pay/certificate/razorpay', this.form).then((resp) => {
                        console.log(resp.data);
                        if (resp.data) {
                            this.options.callback_url = "/pay/razorpay/verify?buy_certificate=" + true +
                                '&certificate=' + this.form.certificate + '&course=' + this.form
                                .course + '&course_c=' + this.form.course_c + '&fullname=' + this.form
                                .fullname + '&email=' + this.form.email + '&mobile=' + this.form
                                .mobile + '&house_no=' + this.form.house_no + '&street=' + this.form
                                .street + '&landmark=' + this.form.landmark + '&city=' + this.form
                                .city + '&state=' + this.form.state + '&pin=' + this.form.pin +
                                '&sdate=' + this.form.sdate + '&edate=' + this.form.edate +
                                '&rmanager=' + this.form.rmanager + '&exmam_scores=' + this.form
                                .exmam_scores + '&classes_missed=' + this.form.classes_missed +
                                '&Comments=' + this.form.Comments + '&start_d_inter=' + this.form
                                .start_d_inter + '&end_d_inter=' + this.form.end_d_inter +
                                '&mentor_inter=' + this.form.mentor_inter + '&project_inter=' + this
                                .form.project_inter + '&Domain=' + this.form.Domain + '&ProjectTitle=' +
                                this.form.ProjectTitle + '&image=' + this.form.image + '&certificate_type=Hard Copy';
                            this.options.key = resp.data.key;
                            this.options.amount = resp.data.amount;
                            this.options.order_id = resp.data.order_id;
                            this.options.prefill.name = resp.data.name;
                            this.options.prefill.email = resp.data.email;
                            var rzp = new Razorpay(this.options);
                            this.processing = false;
                            document.getElementById("razorpayBtn").disabled = true;
                            rzp.open();
                        }
                    })
                } else {
                    this.processing = true;
                    axios.post('/request-certificate', this.form).then((resp) => {
                        this.processing = false;
                        document.querySelector('body').innerHTML = resp.data;
                    })
                }
            },
            selectFile(event) {
                this.form.image = event.target.files[0];
            }
        },
        mounted() {
            let razorpay = document.createElement("script");
            razorpay.setAttribute(
                "src",
                "https://checkout.razorpay.com/v1/checkout.js"
            );
            document.head.appendChild(razorpay);
        },
    });
</script>

<script>
    setInputFilter(document.getElementById("sendTo"), function(value) {
        return /^-?\d*$/.test(value);
    }, "Must be an integer");
</script>


<script>
    function certificateForm(val) {

        var projectRadio = document.querySelector(".projectRadio");

        var hardCopy = document.querySelector(".section-hard-copy");
        var softCopy = document.querySelector(".section-soft-copy");

        var hardBtn = document.querySelector(".btn-hard-copy");
        var softBtn = document.querySelector(".btn-soft-copy");

        var form = document.querySelector(".certificate-form");
        if (val == 'hard-copy') {
            projectRadio.classList.add("hidden");

            hardCopy.classList.remove("hidden");
            softCopy.classList.add("hidden");

            hardBtn.classList.remove("hidden");
            softBtn.classList.add("hidden");

            form.classList.remove("hidden");
        }
        if (val == 'soft-copy') {
            if(confirm('Are you sure you don\'t want a hard copy of the certificate in a leather folder?')){

                projectRadio.classList.remove("hidden");
    
                softCopy.classList.remove("hidden");
                hardCopy.classList.add("hidden");
    
                softBtn.classList.remove("hidden");
                hardBtn.classList.add("hidden");
    
                form.classList.remove("hidden");
            }
        }
    }
</script>
@endsection