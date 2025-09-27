@extends('layouts.app')
@section('content')
@php
$slug = request()->path();
$course_ip = substr($slug, strrpos($slug, '-') + 0);

$batchDate = null;
$batchDay = null;
$price_inr = $course->price_inr ? $course->price_inr : 0;
$price_usd = $course->price_usd ? $course->price_usd : 499;
if($course_ip == "-ip"){
$price_inr = $course->price_ip ? $course->price_ip : $price_inr;
}
@endphp
@if($course->batchDate)
@php
$to = \Carbon\Carbon::now();
$from = \Carbon\Carbon::createFromFormat('Y-m-d', $course->batchDate);
$batchDay = $to->diffInDays($from)+1;
$batchDate = \Carbon\Carbon::parse($course->batchDate)->format('d M Y');
@endphp
@endif
    <style>
        .custome h3 {
            color: #dc2626;
        }

        .custome strong {
            color: #4f2d7f;
        }
         .text-container strong {
           color: #dc2626 !important;
         }

        .text-container {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            /* Limit to 3 lines */
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        @keyframes bounceVertical {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(4px);
            }
        }

        @layer utilities {
            .animate-bounceVertical {
                animation: bounceVertical 1s infinite;
            }
        }
    </style>
    

    <section>
        <div class="relative w-full overflow-hidden"
            {{-- style="background-size: cover; background-repeat: no-repeat; background-image: url(https://d1d5cy0fmpy9m8.cloudfront.net/images/1755338858banner1.webp); background-position: top;">
            --}}
            >
            <div class="bg-black bg-opacity-70">
                <div class="relative z-10 grid md:flex py-2 gap-6 justify-center items-center h-full text-center">
                    <div class="md:w-7/12 w-full bg-[#0e0e0ead] p-4 rounded-md space-y-4 text-left">
                        <h1 class="text-[26px] md:text-[32px] font-[500] text-red-600">{{ $course->course_name }}
                        </h1>
                        <div class="flex space-x-4 mb-8 items-center ">
                            <a data-modal-target="course-modal" data-modal-toggle="course-modal" type="button"
                                class="cursor-pointer bg-red-500 text-white px-4 py-2 text-sm md:text-base rounded hover:bg-red-600" onclick="openApplyNowModal()">Apply
                                Now</a>
                            <a data-modal-target="course-modal" data-modal-toggle="course-modal" type="button"
                                class="cursor-pointer bg-red-500 text-white px-4 py-2 text-sm md:text-base rounded hover:bg-red-600" onclick="openDownloadBrochureModal()">DOWNLOAD BROCHURE</a>
                        </div>
                        {{-- <div class="">
                            <p class="text-white text-[16px] font-[400] mb-2"> Henry Harvin® Ranks #1 for Language
                                Courses by <a class="text-blue-600"
                                    href="https://www.educationworld.in/top-french-institutes-in-india/" rel="noopener"
                                    target="_blank">Education World</a></p>
                            <p></p>
                        </div> --}}
                        <div id="countryPrice" class="grid grid-cols-1 mt-4 lg:gap-2 gap-4">
                            <div class="w-full">
                                <span class="text-[16px] font-[600] text-red-600">Starts In {{$batchDay}} day(s)</span>
                                <span class="font-[800] text-[16px] mt-1 text-red-600">{{$batchDate}}</span>
                            </div>
                        </div>
                        <div class="text-red-600 text-[20px] flex flex-col space-y-2">
                            <p class="font-[600]">
                                <a href="https://www.forbesindia.com/article/brand-connect/henry-harvin-reviews-485-across-the-web/94745/1" class="cursor-pointer flex items-center gap-1 text-[14px] md:text-[18px]"
                                    ><span
                                        class="text-white">Forbes</span> featured
                                    Henry Harvin <span class="text-white font-semibold">4.8 / 5</span>
                                <span class="flex justify-center items-center gap-1"> <img class="md:h-4 h-3" src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1733393394str.webp" alt="ds"><img class="md:h-4 h-3" src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1733393394str.webp" alt="ds"><img class="md:h-4 h-3" src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1733393394str.webp" alt="ds"><img class="md:h-4 h-3" src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1733393394str.webp" alt="ds"><img class="md:h-4 h-3" src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1733393679strh.webp" alt="ds"></span>
                                </a></p>
                            <p class="text-white text-[16px]"><span class="text-red-600">★ {{$course->course_rating}}/5</span> • {{$course->course_number_of_reviews}}
                                Learners
                            </p>
                        </div>
                        <div class="font-ad">
                            <p class="text-white text-[15px] font-[600] text-justify">{!!$course->course_description!!}</p>
                        </div>
                    </div>
                    <div class="md:w-4/12 w-full md:px-0 px-4 ">
                        <div class="relative bg-white rounded-lg border-2 border-red-600 shadow mb-2">
                            <!-- Modal header -->
                            <div class="flex items-center justify-between px-4 py-2 border-b rounded-t">
                                <h3 class="text-[20px] font-[600] text-red-600 text-center">
                                    Book a Live Class
                                </h3>

                            </div>

                            <!-- Modal body -->
                            <form class="p-2 md:p-2 space-y-2 text-left" action="{{ route('lead.store') }}" method="POST">
                                @csrf
                                <div>
                                    <label for="name" class="block text-sm mb-1 font-[600] text-red-600">Name</label>
                                    <input type="text" name="name" id="name" placeholder="Name" required=""
                                        class="bg-gray-50 border border-red-300 text-gray-900 text-sm rounded-lg block w-full p-1">
                                    <span id="name_error3" class="text-red-500 text-xs"></span>
                                </div>

                                <div>
                                    <label for="email" class="block text-sm mb-1 font-[600] text-red-600">Email</label>
                                    <input type="email" name="email" id="email" placeholder="Email" required=""
                                        class="bg-gray-50 border border-red-300 text-gray-900 text-sm rounded-lg block w-full p-1">
                                    <span id="email_error3" class="text-red-500 text-xs"></span>
                                </div>

                                <div>
                                    <label for="countryCode" class="block text-sm mb-1 font-[600] text-red-600">Country
                                        Code</label>
                                    <div class="flex gap-2">
                                    <select name="countryCode" class="w-4/12 bg-gray-50 border border-red-300 text-gray-900 text-sm rounded-lg p-1">
                                        <option value="IN" value="+91" selected="">(+91)</option>
                                        <option value="PK" value="+92">Pakistan (+92)</option>
                                        <option value="US" value="+1">USA (+1)</option>
                                        <option value="GB" value="+44">UK (+44)</option>
                                        <option value="LK" value="+94">Sri Lanka (+94)</option>
                                        <option value="BD" value="+880">Bangladesh (+880)</option>
                                        <option value="AE" value="+971">United Arab Emirates (+971)</option>
                                        <option value="AF" value="+93">Afghanistan (+93)</option>
                                        <option value="AL" value="+355">Albania (+355)</option>
                                        <option value="DZ" value="+213">Algeria (+213)</option>
                                        <option value="AS" value="+-683">American Samoa (+-683)</option>
                                        <option value="AD" value="+376">Andorra (+376)</option>
                                        <option value="AO" value="+244">Angola (+244)</option>
                                        <option value="AI" value="+-263">Anguilla (+-263)</option>
                                        <option value="AQ" value="+672">Antarctica (+672)</option>
                                        <option value="AG" value="+-267">Antigua and Barbuda (+-267)</option>
                                        <option value="AR" value="+54">Argentina (+54)</option>
                                        <option value="AM" value="+374">Armenia (+374)</option>
                                        <option value="AW" value="+297">Aruba (+297)</option>
                                        <option value="AU" value="+61">Australia (+61)</option>
                                        <option value="AT" value="+43">Austria (+43)</option>
                                        <option value="AZ" value="+994">Azerbaijan (+994)</option>
                                        <option value="BS" value="+-241">Bahamas (+-241)</option>
                                        <option value="BH" value="+973">Bahrain (+973)</option>
                                        <option value="BB" value="+-245">Barbados (+-245)</option>
                                        <option value="BY" value="+375">Belarus (+375)</option>
                                        <option value="BE" value="+32">Belgium (+32)</option>
                                        <option value="BZ" value="+501">Belize (+501)</option>
                                        <option value="BJ" value="+229">Benin (+229)</option>
                                        <option value="BM" value="+-440">Bermuda (+-440)</option>
                                        <option value="BT" value="+975">Bhutan (+975)</option>
                                        <option value="BO" value="+591">Bolivia (+591)</option>
                                        <option value="BA" value="+387">Bosnia and Herzegovina (+387)</option>
                                        <option value="BW" value="+267">Botswana (+267)</option>
                                        <option value="BR" value="+55">Brazil (+55)</option>
                                        <option value="BN" value="+673">Brunei (+673)</option>
                                        <option value="BG" value="+359">Bulgaria (+359)</option>
                                        <option value="BF" value="+226">Burkina Faso (+226)</option>
                                        <option value="BI" value="+257">Burundi (+257)</option>
                                        <option value="KH" value="+855">Cambodia (+855)</option>
                                        <option value="CM" value="+237">Cameroon (+237)</option>
                                        <option value="CA" value="+1">Canada (+1)</option>
                                        <option value="CV" value="+238">Cape Verde (+238)</option>
                                        <option value="KY" value="+-344">Cayman Islands (+-344)</option>
                                        <option value="CF" value="+236">Central African Republic (+236)</option>
                                        <option value="TD" value="+235">Chad (+235)</option>
                                        <option value="CL" value="+56">Chile (+56)</option>
                                        <option value="CN" value="+86">China (+86)</option>
                                        <option value="CX" value="+53">Christmas Island (+53)</option>
                                        <option value="CC" value="+61">Cocos (Keeling) Islands (+61)</option>
                                        <option value="CO" value="+57">Colombia (+57)</option>
                                        <option value="KM" value="+269">Comoros (+269)</option>
                                        <option value="CD" value="+243">Congo (+243)</option>
                                        <option value="CG" value="+242">Congo (+242)</option>
                                        <option value="CK" value="+682">Cook Islands (+682)</option>
                                        <option value="CR" value="+506">Costa Rica (+506)</option>
                                        <option value="CI" value="+225">Cote D'Ivoire (+225)</option>
                                        <option value="HR" value="+385">Croatia (+385)</option>
                                        <option value="CU" value="+53">Cuba (+53)</option>
                                        <option value="CY" value="+357">Cyprus (+357)</option>
                                        <option value="CZ" value="+420">Czech Republic (+420)</option>
                                        <option value="DK" value="+45">Denmark (+45)</option>
                                        <option value="DJ" value="+253">Djiboutiof the Afars and Issas (+253)</option>
                                        <option value="DM" value="+-766">Dominica (+-766)</option>
                                        <option value="DO" value="+1-829">Dominican Republic (+1-829)</option>
                                        <option value="TP" value="+670">East Timor (+670)</option>
                                        <option value="EC" value="+593">Ecuador (+593)</option>
                                        <option value="EG" value="+20">Egypt (+20)</option>
                                        <option value="SV" value="+503">El Salvador (+503)</option>
                                        <option value="GQ" value="+240">Equatorial Guinea (+240)</option>
                                        <option value="ER" value="+291">Eritrea (+291)</option>
                                        <option value="EE" value="+372">Estonia (+372)</option>
                                        <option value="ET" value="+251">Ethiopia (+251)</option>
                                        <option value="FK" value="+500">Falkland Islands (+500)</option>
                                        <option value="FO" value="+298">Faroe Islands (+298)</option>
                                        <option value="FJ" value="+679">Fiji (+679)</option>
                                        <option value="FI" value="+358">Finland (+358)</option>
                                        <option value="FR" value="+33">France (+33)</option>
                                        <option value="GF" value="+594">French Guiana or French Guyana (+594)</option>
                                        <option value="PF" value="+689">French Polynesia (+689)</option>
                                        <option value="GA" value="+241">Gabon (+241)</option>
                                        <option value="GM" value="+220">Gambia, The (+220)</option>
                                        <option value="GE" value="+995">Georgia (+995)</option>
                                        <option value="DE" value="+49">Germany (+49)</option>
                                        <option value="GH" value="+233">Ghana (+233)</option>
                                        <option value="GI" value="+350">Gibraltar (+350)</option>
                                        <option value="GR" value="+30">Greece (+30)</option>
                                        <option value="GL" value="+299">Greenland (+299)</option>
                                        <option value="GD" value="+-472">Grenada (+-472)</option>
                                        <option value="GP" value="+590">Guadeloupe (+590)</option>
                                        <option value="GU" value="+-670">Guam (+-670)</option>
                                        <option value="GT" value="+502">Guatemala (+502)</option>
                                        <option value="GN" value="+224">Guinea (+224)</option>
                                        <option value="GW" value="+245">Guinea-Bissau (+245)</option>
                                        <option value="GY" value="+592">Guyana (+592)</option>
                                        <option value="HT" value="+509">Haiti (+509)</option>
                                        <option value="HN" value="+504">Honduras (+504)</option>
                                        <option value="HK" value="+852">Hong Kong (+852)</option>
                                        <option value="HU" value="+36">Hungary (+36)</option>
                                        <option value="IS" value="+354">Iceland (+354)</option>
                                        <option value="ID" value="+62">Indonesia (+62)</option>
                                        <option value="IR" value="+98">Iran (+98)</option>
                                        <option value="IQ" value="+964">Iraq (+964)</option>
                                        <option value="IE" value="+353">Ireland (+353)</option>
                                        <option value="IL" value="+972">Israel (+972)</option>
                                        <option value="IT" value="+39">Italy (+39)</option>
                                        <option value="JM" value="+-875">Jamaica (+-875)</option>
                                        <option value="JP" value="+81">Japan (+81)</option>
                                        <option value="JO" value="+962">Jordan (+962)</option>
                                        <option value="KZ" value="+7">Kazakhstan (+7)</option>
                                        <option value="KE" value="+254">Kenya (+254)</option>
                                        <option value="KI" value="+686">Kiribati (+686)</option>
                                        <option value="KP" value="+850">North Korea (+850)</option>
                                        <option value="KR" value="+82">South Korea (+82)</option>
                                        <option value="KW" value="+965">Kuwait (+965)</option>
                                        <option value="KG" value="+996">Kyrgyzstan (+996)</option>
                                        <option value="LA" value="+856">Lao People's Democratic Republic (Laos) (+856)</option>
                                        <option value="LV" value="+371">Latvia (+371)</option>
                                        <option value="LB" value="+961">Lebanon (+961)</option>
                                        <option value="LS" value="+266">Lesotho (+266)</option>
                                        <option value="LR" value="+231">Liberia (+231)</option>
                                        <option value="LY" value="+218">Libya (+218)</option>
                                        <option value="LI" value="+423">Liechtenstein (+423)</option>
                                        <option value="LT" value="+370">Lithuania (+370)</option>
                                        <option value="LU" value="+352">Luxembourg (+352)</option>
                                        <option value="MO" value="+853">Macau (+853)</option>
                                        <option value="MK" value="+389">Macedonia (+389)</option>
                                        <option value="MG" value="+261">Madagascar (+261)</option>
                                        <option value="MW" value="+265">Malawi (+265)</option>
                                        <option value="MY" value="+60">Malaysia (+60)</option>
                                        <option value="MV" value="+960">Maldives (+960)</option>
                                        <option value="ML" value="+223">Mali (+223)</option>
                                        <option value="MT" value="+356">Malta (+356)</option>
                                        <option value="MH" value="+692">Marshall Islands (+692)</option>
                                        <option value="MQ" value="+596">Martinique (+596)</option>
                                        <option value="MR" value="+222">Mauritania (+222)</option>
                                        <option value="MU" value="+230">Mauritius (+230)</option>
                                        <option value="YT" value="+269">Mayotte (+269)</option>
                                        <option value="MX" value="+52">Mexico (+52)</option>
                                        <option value="FM" value="+691">Micronesia (+691)</option>
                                        <option value="MD" value="+373">Moldova (+373)</option>
                                        <option value="MC" value="+377">Monaco (+377)</option>
                                        <option value="MN" value="+976">Mongolia (+976)</option>
                                        <option value="MS" value="+-663">Montserrat (+-663)</option>
                                        <option value="MA" value="+212">Morocco (+212)</option>
                                        <option value="MZ" value="+258">Mozambique (+258)</option>
                                        <option value="MM" value="+95">Myanmar (+95)</option>
                                        <option value="NA" value="+264">Namibia (+264)</option>
                                        <option value="NR" value="+674">Nauru (+674)</option>
                                        <option value="NP" value="+977">Nepal (+977)</option>
                                        <option value="NL" value="+31">Netherlands (+31)</option>
                                        <option value="AN" value="+599">Netherlands Antilles (+599)</option>
                                        <option value="NC" value="+687">New Caledonia (+687)</option>
                                        <option value="NZ" value="+64">New Zealand (+64)</option>
                                        <option value="NI" value="+505">Nicaragua (+505)</option>
                                        <option value="NE" value="+227">Niger (+227)</option>
                                        <option value="NG" value="+234">Nigeria (+234)</option>
                                        <option value="NU" value="+683">Niue (+683)</option>
                                        <option value="NF" value="+672">Norfolk Island (+672)</option>
                                        <option value="MP" value="+-669">Northern Mariana Islands (+-669)</option>
                                        <option value="NO" value="+47">Norway (+47)</option>
                                        <option value="OM" value="+968">Oman (+968)</option>
                                        <option value="PW" value="+680">Palau (+680)</option>
                                        <option value="PS" value="+970">Palestinian State (+970)</option>
                                        <option value="PA" value="+507">Panama (+507)</option>
                                        <option value="PG" value="+675">Papua New Guinea (+675)</option>
                                        <option value="PY" value="+595">Paraguay (+595)</option>
                                        <option value="PE" value="+51">Peru (+51)</option>
                                        <option value="PH" value="+63">Philippines (+63)</option>
                                        <option value="PL" value="+48">Poland (+48)</option>
                                        <option value="PT" value="+351">Portugal (+351)</option>
                                        <option value="PR" value="+1-787">Puerto Rico (+1-787)</option>
                                        <option value="QA" value="+974">Qatar (+974)</option>
                                        <option value="RE" value="+262">Reunion (+262)</option>
                                        <option value="RO" value="+40">Romania (+40)</option>
                                        <option value="RU" value="+7">Russian Federation (+7)</option>
                                        <option value="RW" value="+250">Rwanda (+250)</option>
                                        <option value="SH" value="+290">Saint Helena (+290)</option>
                                        <option value="KN" value="+-868">Saint Kitts and Nevis (+-868)</option>
                                        <option value="LC" value="+-757">Saint Lucia (+-757)</option>
                                        <option value="PM" value="+508">Saint Pierre and Miquelon (+508)</option>
                                        <option value="VC" value="+-783">Saint Vincent and the Grenadines (+-783)</option>
                                        <option value="WS" value="+685">Samoa (+685)</option>
                                        <option value="SM" value="+378">San Marino (+378)</option>
                                        <option value="ST" value="+239">Sao Tome and Principe (+239)</option>
                                        <option value="SA" value="+966">Saudi Arabia (+966)</option>
                                        <option value="SN" value="+221">Senegal (+221)</option>
                                        <option value="SC" value="+248">Seychelles (+248)</option>
                                        <option value="SL" value="+232">Sierra Leone (+232)</option>
                                        <option value="SG" value="+65">Singapore (+65)</option>
                                        <option value="SK" value="+421">Slovakia (+421)</option>
                                        <option value="SI" value="+386">Slovenia (+386)</option>
                                        <option value="SB" value="+677">Solomon Islands (+677)</option>
                                        <option value="SO" value="+252">Somalia (+252)</option>
                                        <option value="ZA" value="+27">South Africa (+27)</option>
                                        <option value="ES" value="+34">Spain (+34)</option>
                                        <option value="SD" value="+249">Sudan (+249)</option>
                                        <option value="SR" value="+597">Suriname (+597)</option>
                                        <option value="SZ" value="+268">Swaziland (+268)</option>
                                        <option value="SE" value="+46">Sweden (+46)</option>
                                        <option value="CH" value="+41">Switzerland (+41)</option>
                                        <option value="SY" value="+963">Syria (+963)</option>
                                        <option value="TW" value="+886">Taiwan (+886)</option>
                                        <option value="TJ" value="+992">Tajikistan (+992)</option>
                                        <option value="TZ" value="+255">Tanzania (+255)</option>
                                        <option value="TH" value="+66">Thailand (+66)</option>
                                        <option value="TK" value="+690">Tokelau (+690)</option>
                                        <option value="TO" value="+676">Tonga (+676)</option>
                                        <option value="TT" value="+-867">Trinidad and Tobago (+-867)</option>
                                        <option value="TN" value="+216">Tunisia (+216)</option>
                                        <option value="TR" value="+90">Turkey (+90)</option>
                                        <option value="TM" value="+993">Turkmenistan (+993)</option>
                                        <option value="TC" value="+-648">Turks and Caicos Islands (+-648)</option>
                                        <option value="TV" value="+688">Tuvalu (+688)</option>
                                        <option value="UG" value="+256">Uganda (+256)</option>
                                        <option value="UA" value="+380">Ukraine (+380)</option>
                                        <option value="UY" value="+598">Uruguay (+598)</option>
                                        <option value="UZ" value="+998">Uzbekistan (+998)</option>
                                        <option value="VU" value="+678">Vanuatu (+678)</option>
                                        <option value="VA" value="+418">Vatican City State (+418)</option>
                                        <option value="VE" value="+58">Venezuela (+58)</option>
                                        <option value="VN" value="+84">Vietnam (+84)</option>
                                        <option value="VI" value="+-283">Virgin Islands, British (+-283)</option>
                                        <option value="VQ" value="+-339">Virgin Islands, United States (+-339)</option>
                                        <option value="WF" value="+681">Wallis and Futuna Islands (+681)</option>
                                        <option value="YE" value="+967">Yemen (+967)</option>
                                        <option value="ZM" value="+260">Zambia (+260)</option>
                                        <option value="ZW" value="+263">Zimbabwe (+263)</option>
                                    </select>
                                        <input type="number" name="sendto" placeholder="Mobile no *"
                                            class="bg-gray-50 border border-red-300 text-gray-900 text-sm rounded-lg block w-full p-1">
                                    </div>
                                    <span id="phone_error3" class="text-red-500 text-xs"></span>
                                </div>

                                <input type="hidden" name="description2" class="textbox" value="{{$course->course_title}}" placeholder="" id="">
                                <input type="hidden" name="academy" class="textbox" value="{{$academy_name->id}}" placeholder="" id="">
                                @if(isset($_GET['source']) && $_GET['source'] =="LNEM")
                                <input type="hidden" name="source" class="textbox" value="LNEM" placeholder="" id="">
                                @elseif(isset($_GET['source']))
                                <input type="hidden" name="source" class="textbox" value="{{$_GET['source']}}" placeholder="" id="">
                                @else
                                <input type="hidden" name="source" class="textbox" value="KAZUMI" placeholder="" id="">
                                @endif
                                <input type="hidden" name="lead_source_page_url" class="textbox" value="{{url()->full()}}" placeholder="" id="">
                                <input type="hidden" name="slug" class="textbox" value="{{$course->slug}}" placeholder="" id="">
                                <input type="hidden" name="crm_course_id" class="textbox" value="{{$course->crm_course_id}}" placeholder="" id="">
                                <input type="hidden" name="course_name" class="textbox" value="{{$course->course_name}}" placeholder="" id="">
                                @if(isset($_GET['gclid']))
                                <input type="hidden" name="gclid_field" value="<?= $_GET['gclid'] ?>" />
                                @endif
                                @if(isset($_GET['utm_campaign']))
                                <input type="hidden" name="campaign_name" value="<?= $_GET['utm_campaign'] ?>" />
                                @endif
                                @if(isset($_GET['msclkid']))
                                <input type="hidden" name="msclkid_field" value="<?= $_GET['msclkid'] ?>" id="msclkid_field">
                                @endif

                                <div class="flex justify-center pt-2">
                                    <button type="submit"
                                        class="bg-red-600 text-white px-2 py-1 text-lg rounded-md">Submit</button>
                                </div>
                            </form>

                        </div>
                        <div class="shadow-lg grid place-content-center bg-white text-center rounded-lg relative mx-auto max-w-full"
                            id="nsdc-logo-div">
                            <img class="img-nsdc" id="nsdc-logo"
                                src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1755607834nsdc-ministry.webp"
                                alt="images3">
                        </div>
                    </div>
                </div>
                <div class="max-w-7xl swiper linearswiper2 py-6 px-4">
                    <div class="swiper-wrapper my-4" style="transition-timing-function: linear !important;">
                        <div class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center">
                            <img class="max-h-[120px] object-contain mx-auto"
                                src="https://hh-certificates.sgp1.cdn.digitaloceanspaces.com/1658990804165899080411.webp"
                                loading="lazy" alt="Image 1">
                        </div>
                        <div class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center">
                            <img class="max-h-[120px] object-contain mx-auto"
                                src="https://hh-certificates.sgp1.cdn.digitaloceanspaces.com/1658990847165899084712.webp"
                                loading="lazy" alt="Image 2">
                        </div>
                        <div class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center">
                            <img class="max-h-[120px] object-contain mx-auto"
                                src="https://hh-certificates.sgp1.cdn.digitaloceanspaces.com/1658990870165899087013.webp"
                                loading="lazy" alt="Image 3">
                        </div>
                        <div class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center">
                            <img class="max-h-[120px] object-contain mx-auto"
                                src="https://hh-certificates.sgp1.cdn.digitaloceanspaces.com/1658990891165899089114.webp"
                                loading="lazy" alt="Image 4">
                        </div>
                        <div class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center">
                            <img class="max-h-[120px] object-contain mx-auto"
                                src="https://hh-certificates.sgp1.cdn.digitaloceanspaces.com/1658991692165899169215.webp"
                                loading="lazy" alt="Image 5">
                        </div>
                        <div class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center">
                            <img class="max-h-[120px] object-contain mx-auto"
                                src="https://hh-certificates.sgp1.cdn.digitaloceanspaces.com/1658991716165899171616.webp"
                                loading="lazy" alt="Image 6">
                        </div>
                        <div class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center">
                            <img class="max-h-[120px] object-contain mx-auto"
                                src="https://hh-certificates.sgp1.cdn.digitaloceanspaces.com/1658991741165899174117.webp"
                                loading="lazy" alt="Image 7">
                        </div>
                        <div class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center">
                            <img class="max-h-[120px] object-contain mx-auto"
                                src="https://hh-certificates.sgp1.cdn.digitaloceanspaces.com/1658991760165899176018.webp"
                                loading="lazy" alt="Image 8">
                        </div>
                        <div class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center">
                            <img class="max-h-[120px] object-contain mx-auto"
                                src="https://hh-certificates.sgp1.cdn.digitaloceanspaces.com/1658991784165899178419.webp"
                                loading="lazy" alt="Image 9">
                        </div>
                        <div class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center">
                            <img class="max-h-[120px] object-contain mx-auto"
                                src="https://hh-certificates.sgp1.cdn.digitaloceanspaces.com/1658991811165899181120.webp"
                                loading="lazy" alt="Image 10">
                        </div>
                        <div class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center">
                            <img class="max-h-[120px] object-contain mx-auto"
                                src="https://hh-certificates.sgp1.cdn.digitaloceanspaces.com/1658991839165899183921.webp"
                                loading="lazy" alt="Image 11">
                        </div>
                        <div class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center">
                            <img class="max-h-[120px] object-contain mx-auto"
                                src="https://hh-certificates.sgp1.cdn.digitaloceanspaces.com/1658991861165899186122.webp"
                                loading="lazy" alt="Image 12">
                        </div>
                        <div class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center">
                            <img class="max-h-[120px] object-contain mx-auto"
                                src="https://hh-certificates.sgp1.cdn.digitaloceanspaces.com/1658991985165899198523.webp"
                                loading="lazy" alt="Image 13">
                        </div>
                        <div class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center">
                            <img class="max-h-[120px] object-contain mx-auto"
                                src="https://hh-certificates.sgp1.cdn.digitaloceanspaces.com/1658992005165899200524.webp"
                                loading="lazy" alt="Image 14">
                        </div>
                        <div class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center">
                            <img class="max-h-[120px] object-contain mx-auto"
                                src="https://hh-certificates.sgp1.cdn.digitaloceanspaces.com/1658992032165899203225.webp"
                                loading="lazy" alt="Image 15">
                        </div>
                        <div class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center">
                            <img class="max-h-[120px] object-contain mx-auto"
                                src="https://hh-certificates.sgp1.cdn.digitaloceanspaces.com/1658992054165899205426.webp"
                                loading="lazy" alt="Image 16">
                        </div>
                        <div class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center">
                            <img class="max-h-[120px] object-contain mx-auto"
                                src="https://hh-certificates.sgp1.cdn.digitaloceanspaces.com/1658992073165899207327.webp"
                                loading="lazy" alt="Image 17">
                        </div>
                        <div class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center">
                            <img class="max-h-[120px] object-contain mx-auto"
                                src="https://hh-certificates.sgp1.cdn.digitaloceanspaces.com/1658992092165899209228.webp"
                                loading="lazy" alt="Image 18">
                        </div>
                        <div class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center">
                            <img class="max-h-[120px] object-contain mx-auto"
                                src="https://hh-certificates.sgp1.cdn.digitaloceanspaces.com/1658992113165899211329.webp"
                                loading="lazy" alt="Image 19">
                        </div>
                        <div class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center">
                            <img class="max-h-[120px] object-contain mx-auto"
                                src="https://hh-certificates.sgp1.cdn.digitaloceanspaces.com/1658992133165899213330.webp"
                                loading="lazy" alt="Image 20">
                        </div>
                        <div class="swiper-slide h-24 w-auto px-1 md:px-6 flex items-center justify-center">
                            <img class="max-h-[120px] object-contain mx-auto"
                                src="https://hh-certificates.sgp1.cdn.digitaloceanspaces.com/1658992158165899215831.webp"
                                loading="lazy" alt="Image 21">
                        </div>
                    </div>
                </div>

            </div>
    </section>
    <section class="py-12 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-center text-2xl md:text-3xl font-semibold mb-10 text-[#da2028] capitalize my-4">Accreditations
                & Affiliations
            </h2>
            <div class="swiper linearswiper">
                <div class="swiper-wrapper my-4" style="transition-timing-function: linear !important;">
                    @foreach ($affiliations as $affiliation)
                    <div class="swiper-slide w-auto px-1 md:px-6 flex items-center justify-center">
                        <img class="max-h-[120px] object-contain mx-auto"
                            src="{{$affiliation->affiliation_logo}}"
                            alt="slide-1" loading="lazy" />
                    </div>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </section>
    @if($userFeedback)
    <div class="bg-[#dce2e9]">
        <div class="md:mx-[100px] mx-[1rem]">
            <p class="md:text-[32px] text-[20px] text-purple md:mx-[2%] mx-[2%] italic py-4 text-center md:leading-[30px] leading-[20px]">There's a reason that 95% of our alumni undertake 3+ courses as a minimum with Kazumi School by Henry Harvin®</p>
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

    {{-- <section class="py-12 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-center text-2xl md:text-3xl font-semibold mb-10 text-[#da2028] capitalize my-4">Hear from our
            learners about their experience
            </h2>
            <div class="relative">
                <div id="videoGrid" class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-2">

                     @foreach($videoReview as $vr)
                    <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto relative">
                        <iframe width="100%" loading="lazy" class="lazy-video"
                                src="{{ $vr->link }}"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen="">
                        </iframe>
                    </div>
                    @endforeach 
                </div>
            </div>
        </div>
    </section>    --}}

    <section id="videoGrid" class="py-12 px-4">
         <h2 class="text-center text-2xl md:text-3xl font-semibold mb-10 text-[#da2028] capitalize my-4">Hear from our
            learners about their experience
        </h2>
        <div class="relative max-w-7xl mx-auto">
            {{-- <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-2">

            @foreach($videoReview as $vr)
                <div class="">
                    <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto">
                        <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto">
                            <iframe width="100%" loading="lazy"
                                src="{{ $vr->link }}"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen="">
                            </iframe>
                        </div>
                    </div>
                </div>
            @endforeach    
            </div> --}}
            <div id="videoGrid" class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-2">

                    <!-- 1 -->
                    <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto relative">
                        <img class="w-full h-auto cursor-pointer lazy-video"
                            data-src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1755500037review-vedeo1.webp"
                            data-video="https://www.youtube.com/embed/HAI_ZAMooLk?list=PL28eq_nhJTOfHpe-729IGXSbgju9wG6Ra"
                            alt="Japanese Language Course Review By Sachet">
                    </div>

                    <!-- 2 -->
                    <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto relative">
                        <img class="w-full h-auto cursor-pointer lazy-video"
                            data-src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1755500240anupam.webp"
                            data-video="https://www.youtube.com/embed/K4NAAHCtbo8?list=PL28eq_nhJTOfHpe-729IGXSbgju9wG6Ra"
                            alt="Japanese Language Course Review By Anupam">
                    </div>

                    <!-- 3 -->
                    <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto relative">
                        <img class="w-full h-auto cursor-pointer lazy-video"
                            data-src="https://img.youtube.com/vi/mZkFP1ZWJv4/hqdefault.jpg"
                            data-video="https://www.youtube.com/embed/mZkFP1ZWJv4?list=PL28eq_nhJTOfHpe-729IGXSbgju9wG6Ra"
                            alt="Japanese Language Course Review">
                    </div>

                    <!-- 4 -->
                    <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto relative">
                        <img class="w-full h-auto cursor-pointer lazy-video"
                            data-src="https://img.youtube.com/vi/YqdggC5M90s/hqdefault.jpg"
                            data-video="https://www.youtube.com/embed/YqdggC5M90s?list=PL28eq_nhJTOfHpe-729IGXSbgju9wG6Ra"
                            alt="Japanese Language Course Review by Khushi Goswami">
                    </div>

                    <!-- 5 -->
                    <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto relative">
                        <img class="w-full h-auto cursor-pointer lazy-video"
                            data-src="https://img.youtube.com/vi/L9QZCK1P5O0/hqdefault.jpg"
                            data-video="https://www.youtube.com/embed/L9QZCK1P5O0?list=PL28eq_nhJTOfHpe-729IGXSbgju9wG6Ra"
                            alt="Japanese Language Course Review by Khushi Jain">
                    </div>

                    <!-- 6 -->
                    <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto relative">
                        <img class="w-full h-auto cursor-pointer lazy-video"
                            data-src="https://img.youtube.com/vi/JYPNfkyyx08/hqdefault.jpg"
                            data-video="https://www.youtube.com/embed/JYPNfkyyx08?list=PL28eq_nhJTOfHpe-729IGXSbgju9wG6Ra"
                            alt="Japanese Language Course Review by Vandana">
                    </div>

                    <!-- 7 -->
                    <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto relative">
                        <img class="w-full h-auto cursor-pointer lazy-video"
                            data-src="https://img.youtube.com/vi/BooTihSy8dA/hqdefault.jpg"
                            data-video="https://www.youtube.com/embed/BooTihSy8dA?list=PL28eq_nhJTOfHpe-729IGXSbgju9wG6Ra"
                            alt="Japanese Course Review by Tarni">
                    </div>

                    <!-- 8 -->
                    <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto relative">
                        <img class="w-full h-auto cursor-pointer lazy-video"
                            data-src="https://img.youtube.com/vi/h2558oOB2GM/hqdefault.jpg"
                            data-video="https://www.youtube.com/embed/h2558oOB2GM?list=PL28eq_nhJTOfHpe-729IGXSbgju9wG6Ra"
                            alt="Japanese Language Course Review by Rayajiri Kumar">
                    </div>

                    <!-- 9 -->
                    <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto relative">
                        <img class="w-full h-auto cursor-pointer lazy-video"
                            data-src="https://img.youtube.com/vi/uggeKrYDD1s/hqdefault.jpg"
                            data-video="https://www.youtube.com/embed/uggeKrYDD1s?list=PL28eq_nhJTOfHpe-729IGXSbgju9wG6Ra"
                            alt="Japanese Language Course Review by Mayuresh">
                    </div>

                    <!-- 10 -->
                    <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto relative">
                        <img class="w-full h-auto cursor-pointer lazy-video"
                            data-src="https://img.youtube.com/vi/RvJ-DSVFVv4/hqdefault.jpg"
                            data-video="https://www.youtube.com/embed/RvJ-DSVFVv4?list=PL28eq_nhJTOfHpe-729IGXSbgju9wG6Ra"
                            alt="Japanese Course Review by Vasundhara">
                    </div>

                    <!-- 11 -->
                    <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto relative">
                        <img class="w-full h-auto cursor-pointer lazy-video"
                            data-src="https://img.youtube.com/vi/2vKgb2MJlzI/hqdefault.jpg"
                            data-video="https://www.youtube.com/embed/2vKgb2MJlzI?list=PL28eq_nhJTOfHpe-729IGXSbgju9wG6Ra"
                            alt="Japanese Course Review by Pravallika">
                    </div>

                    <!-- 12 -->
                    <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto relative">
                        <img class="w-full h-auto cursor-pointer lazy-video"
                            data-src="https://img.youtube.com/vi/LCPhZuc1RqQ/hqdefault.jpg"
                            data-video="https://www.youtube.com/embed/LCPhZuc1RqQ?list=PL28eq_nhJTOfHpe-729IGXSbgju9wG6Ra"
                            alt="Japanese Course Review by Tanisha">
                    </div>

                    <!-- 13 -->
                    <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto relative">
                        <img class="w-full h-auto cursor-pointer lazy-video"
                            data-src="https://img.youtube.com/vi/TQM2QkyQ9eE/hqdefault.jpg"
                            data-video="https://www.youtube.com/embed/TQM2QkyQ9eE?list=PL28eq_nhJTOfHpe-729IGXSbgju9wG6Ra"
                            alt="Japanese Course Review by Vivek Saini">
                    </div>

                    <!-- 14 -->
                    <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto relative">
                        <img class="w-full h-auto cursor-pointer lazy-video"
                            data-src="https://img.youtube.com/vi/_BMlRAi9dK8/hqdefault.jpg"
                            data-video="https://www.youtube.com/embed/_BMlRAi9dK8?list=PL28eq_nhJTOfHpe-729IGXSbgju9wG6Ra"
                            alt="Japanese Course Reviews">
                    </div>

                    <!-- 15 -->
                    <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto relative">
                        <img class="w-full h-auto cursor-pointer lazy-video"
                            data-src="https://img.youtube.com/vi/pfkbInIwD6Q/hqdefault.jpg"
                            data-video="https://www.youtube.com/embed/pfkbInIwD6Q?list=PL28eq_nhJTOfHpe-729IGXSbgju9wG6Ra"
                            alt="Japanese Course Reviews">
                    </div>

                    <!-- 16 -->
                    <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto relative">
                        <img class="w-full h-auto cursor-pointer lazy-video"
                            data-src="https://img.youtube.com/vi/5rIlYy7SO08/hqdefault.jpg"
                            data-video="https://www.youtube.com/embed/5rIlYy7SO08?list=PL28eq_nhJTOfHpe-729IGXSbgju9wG6Ra"
                            alt="Japanese Course Review By Muskan">
                    </div>

                    <!-- 17 -->
                    <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto relative">
                        <img class="w-full h-auto cursor-pointer lazy-video"
                            data-src="https://img.youtube.com/vi/O_yLL2aNXTY/hqdefault.jpg"
                            data-video="https://www.youtube.com/embed/O_yLL2aNXTY?list=PL28eq_nhJTOfHpe-729IGXSbgju9wG6Ra"
                            alt="Japanese Course Reviews">
                    </div>

                    <!-- 18 -->
                    <div class="bg-white rounded-lg shadow-md border overflow-hidden max-w-sm mx-auto relative">
                        <img class="w-full h-auto cursor-pointer lazy-video"
                            data-src="https://img.youtube.com/vi/bsPvt3xJTEc/hqdefault.jpg"
                            data-video="https://www.youtube.com/embed/bsPvt3xJTEc?list=PL28eq_nhJTOfHpe-729IGXSbgju9wG6Ra"
                            alt="Japanese Course Review by Prashub">
                    </div>

                </div>

        </div>
    </section>
    <section class="py-12 px-4">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 mt-2">
            <div class="md:col-span-2">
                @if($feat->count() > 0)
                <div>
                    <h3 class="text-center text-2xl md:text-3xl font-semibold mb-10 text-red-600 capitalize">Key Highlights
                    </h3>
                    <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-2 mx-auto gap-2">
                        @foreach($feat as $item)
                            <div class="shadow box-border relative mt-2 rounded-md bg-white py-2 px-2">
                                <div class="flex items-start gap-2">
                                    <div class="w-2/12">
                                        <img class="w-16 bg-white p-2 border-purple" loading="lazy"
                                            src="{{$item->keyfeatures_image}}"
                                            alt="images">
                                    </div>
                                    <h4 class="w-9/12 text-[14px] font-medium text-red-700 italic">{{$item->keyfeatures_title}}</h4>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                @endif

                <div class="mt-3 mb-4 mx-auto text-center">
                    @if($course->why_us && $course->why_us !='' && $course->why_us != 'null')
                    <a href="{{$course->why_us}}" target="_blank" rel="noopener noreferrer"  class="bg-red-600 block w-fit mx-auto mt-2 hover:bg-white text-white hover:test-red-600 text-sm md:text-lg font-medium text-center border-[1px] border-red-600 py-[12px] px-[45px] rounded-[3px]" style="border: 2px solid red; border-radius: 5px;">Why Henry Harvin?</a>
                    @endif
                </div>

                <div class="md:px-4 p-3 border-2 border-red-700 mt-6">
                    <h2 class="text-center text-2xl md:text-3xl font-semibold mb-10 text-[#da2028] capitalize my-4">About
                        {{ $course->course_name }}
                    </h2>
                    <div class="custome prose prose-sm mt-4 max-w-none mx-auto 
                            prose-strong:text-[13px] prose-strong:font-[500]
                            prose-strong:text-[#da2028] prose-strong:font-[600]
                            prose-h2:text-red-700 prose-h3:text-red-700 prose-h4:text-red-700
                            prose-h2:text-[16px] prose-h3:text-[18px] prose-h4:text-[16px]
                            prose-h2:font-[600] prose-h3:font-bold prose-h4:font-[600]
                            prose-p:text-white prose-p:font-[500] prose-p:text-[16px]
                            prose-li:text-white prose-li:font-[500] prose-li:text-[16px]
                            prose-a:text-white prose-a:font-[500] prose-a:text-[16px] text-container"
                        id="textContainer">
                        @foreach ($aboutcourse as $index => $ac)
                        <h3>{{$ac->aboutcourse_title}}</h3>
                        {!!$ac->aboutcourse_content!!}
                        @endforeach
                    </div>
                    <button class="relative  mx-auto flex items-center text-white mt-4">
                        <span class="rounded-md bg-red-700 px-4 py-2" style="width: 142px; padding: 11px 29px 11px 0px;"
                            id="toggleButton" onclick="toggleText()">Show More</span>
                        <span class="mx-auto rounded-md h-full am-am animate-bounceVertical pl-2 absolute right-2 z-20"
                            style="pointer-events: none; right:10px; top:6px;">
                            <i class="fa fa-angle-down text-[#ffc107] text-[24px] " id="arrowIcon"></i>
                        </span>
                    </button>
                </div>
                
                <div class="text-center py-10">
                    <h2 class="text-center text-2xl md:text-3xl font-semibold mb-10 text-[#da2028] capitalize my-4">Our
                        Placement Stats </h2>
                    <div class="grid md:grid-cols-3 grid-cols-1 gap-4 mt-4 mb-4">
                        <div class="shadow-md rounded-md py-4">
                            <div class="mx-4">
                                <span class="flex items-center gap-2 py-[10px] h-14">
                                    <span class="text-[28px] font-[600]  text-red-600">{{$course->avg_salary_hike}}</span>
                                    <img class="h-4"
                                        src="https://hh-certificates.sgp1.cdn.digitaloceanspaces.com/images/1706523530progressnew.svg"
                                        alt="images38" loading="lazy">
                                </span>
                                <p class="text-sm font-semibold mt-2 text-[#51565e]">Average salary hike</p>
                            </div>
                        </div>
                        <div class="shadow-md rounded-md py-4">
                            <div class="mx-8">
                                <span class="flex items-center gap-2 py-[10px] h-14">
                                    <span class="text-[28px] font-[600] text-red-600">{{$course->hiring_partners}}</span>
                                </span>
                                <p class="text-sm font-semibold mt-2 text-[#51565e]">Access the best jobs in industry</p>
                            </div>
                        </div>
                        <div class="shadow-md rounded-md py-4">
                            <div class="mx-8">
                                <span class="flex items-center gap-2 py-[10px] h-14">
                                    <span class="text-[28px] font-[600] text-red-600">{{$course->max_salary_hike}}</span>
                                    <img class="h-6"
                                        src="https://hh-certificates.sgp1.cdn.digitaloceanspaces.com/images/1706523530progressnew.svg"
                                        alt="images39" loading="lazy">
                                </span>
                                <p class="text-sm font-semibold mt-2 text-[#51565e]">Maximum salary hike</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="">
                    <h2 class="text-center text-2xl md:text-3xl font-semibold mb-10 text-red-600 capitalize">{{ $course->course_name }} Curriculum</h2>

                    <ul class="flex flex-col max-w-5xl mx-auto space-y-3">

                        @foreach ($module as $mod)
                            <li class="bg-red-600 shadow-lg rounded" x-data="{ open: false }">
                                <h3 @click="open = !open"
                                    class="flex text-white justify-between items-center font-semibold px-4 py-4 cursor-pointer">
                                    <div class="flex gap-2 items-center">
                                        @if(!$mod->module_logo)
                                        <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1719481027ezgif.com-resize%20(14).webp"
                                            class="w-8" alt="N5 Level Icon">
                                            {{$mod->module_title}}
                                        @else    
                                            <img src="{{$mod->module_logo}}"
                                                class="w-8" alt="N5 Level Icon">
                                                {{$mod->module_title}}
                                        @endif

                                    </div>
                                    <svg :class="{ 'rotate-180': open }"
                                        class="h-5 w-5 transform transition-transform duration-300" fill="none"
                                        stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </h3>
                                <div x-show="open" x-transition class="bg-white text-black p-4 text-sm space-y-4">
                                    <div class="mx-6 pl-6">
                                       {!!$mod->module_parent_id!!}
                                    </div>
                                </div>
                            </li>
                        @endforeach
                       
                    </ul>
                </div>
            </div>
            <div class="relative">
                <div class="lg:w-12/12 sticky top-4 md:top-[70px]">
                    <div class="relative bg-white rounded-lg border-2 border-red-600 shadow mb-2">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between px-4 py-2 border-b rounded-t">
                            <h3 class="text-[20px] font-[600] text-red-600 text-center">
                                Book a Live Class
                            </h3>

                        </div>

                        <!-- Modal body -->
                        <form class="p-2 md:p-2 space-y-2" action="{{ route('lead.store') }}" method="POST">
                            @csrf
                            <div>
                                <label for="name" class="block text-sm mb-1 font-[600] text-red-600">Name</label>
                                <input type="text" name="name" id="name" placeholder="Name"
                                    required=""
                                    class="bg-gray-50 border border-red-300 text-gray-900 text-sm rounded-lg block w-full p-1">
                                <span id="name_error3" class="text-red-500 text-xs"></span>
                            </div>

                            <div>
                                <label for="email" class="block text-sm mb-1 font-[600] text-red-600">Email</label>
                                <input type="email" name="email" id="email" placeholder="Email"
                                    required=""
                                    class="bg-gray-50 border border-red-300 text-gray-900 text-sm rounded-lg block w-full p-1">
                                <span id="email_error3" class="text-red-500 text-xs"></span>
                            </div>

                            <div>
                                <label for="countryCode" class="block text-sm mb-1 font-[600] text-red-600">Country
                                    Code</label>
                                <div class="flex gap-2">
                                    <select name="countryCode" class="w-4/12 bg-gray-50 border border-red-300 text-gray-900 text-sm rounded-lg p-1">
                                        <option value="IN" value="+91" selected="">(+91)</option>
                                        <option value="PK" value="+92">Pakistan (+92)</option>
                                        <option value="US" value="+1">USA (+1)</option>
                                        <option value="GB" value="+44">UK (+44)</option>
                                        <option value="LK" value="+94">Sri Lanka (+94)</option>
                                        <option value="BD" value="+880">Bangladesh (+880)</option>
                                        <option value="AE" value="+971">United Arab Emirates (+971)</option>
                                        <option value="AF" value="+93">Afghanistan (+93)</option>
                                        <option value="AL" value="+355">Albania (+355)</option>
                                        <option value="DZ" value="+213">Algeria (+213)</option>
                                        <option value="AS" value="+-683">American Samoa (+-683)</option>
                                        <option value="AD" value="+376">Andorra (+376)</option>
                                        <option value="AO" value="+244">Angola (+244)</option>
                                        <option value="AI" value="+-263">Anguilla (+-263)</option>
                                        <option value="AQ" value="+672">Antarctica (+672)</option>
                                        <option value="AG" value="+-267">Antigua and Barbuda (+-267)</option>
                                        <option value="AR" value="+54">Argentina (+54)</option>
                                        <option value="AM" value="+374">Armenia (+374)</option>
                                        <option value="AW" value="+297">Aruba (+297)</option>
                                        <option value="AU" value="+61">Australia (+61)</option>
                                        <option value="AT" value="+43">Austria (+43)</option>
                                        <option value="AZ" value="+994">Azerbaijan (+994)</option>
                                        <option value="BS" value="+-241">Bahamas (+-241)</option>
                                        <option value="BH" value="+973">Bahrain (+973)</option>
                                        <option value="BB" value="+-245">Barbados (+-245)</option>
                                        <option value="BY" value="+375">Belarus (+375)</option>
                                        <option value="BE" value="+32">Belgium (+32)</option>
                                        <option value="BZ" value="+501">Belize (+501)</option>
                                        <option value="BJ" value="+229">Benin (+229)</option>
                                        <option value="BM" value="+-440">Bermuda (+-440)</option>
                                        <option value="BT" value="+975">Bhutan (+975)</option>
                                        <option value="BO" value="+591">Bolivia (+591)</option>
                                        <option value="BA" value="+387">Bosnia and Herzegovina (+387)</option>
                                        <option value="BW" value="+267">Botswana (+267)</option>
                                        <option value="BR" value="+55">Brazil (+55)</option>
                                        <option value="BN" value="+673">Brunei (+673)</option>
                                        <option value="BG" value="+359">Bulgaria (+359)</option>
                                        <option value="BF" value="+226">Burkina Faso (+226)</option>
                                        <option value="BI" value="+257">Burundi (+257)</option>
                                        <option value="KH" value="+855">Cambodia (+855)</option>
                                        <option value="CM" value="+237">Cameroon (+237)</option>
                                        <option value="CA" value="+1">Canada (+1)</option>
                                        <option value="CV" value="+238">Cape Verde (+238)</option>
                                        <option value="KY" value="+-344">Cayman Islands (+-344)</option>
                                        <option value="CF" value="+236">Central African Republic (+236)</option>
                                        <option value="TD" value="+235">Chad (+235)</option>
                                        <option value="CL" value="+56">Chile (+56)</option>
                                        <option value="CN" value="+86">China (+86)</option>
                                        <option value="CX" value="+53">Christmas Island (+53)</option>
                                        <option value="CC" value="+61">Cocos (Keeling) Islands (+61)</option>
                                        <option value="CO" value="+57">Colombia (+57)</option>
                                        <option value="KM" value="+269">Comoros (+269)</option>
                                        <option value="CD" value="+243">Congo (+243)</option>
                                        <option value="CG" value="+242">Congo (+242)</option>
                                        <option value="CK" value="+682">Cook Islands (+682)</option>
                                        <option value="CR" value="+506">Costa Rica (+506)</option>
                                        <option value="CI" value="+225">Cote D'Ivoire (+225)</option>
                                        <option value="HR" value="+385">Croatia (+385)</option>
                                        <option value="CU" value="+53">Cuba (+53)</option>
                                        <option value="CY" value="+357">Cyprus (+357)</option>
                                        <option value="CZ" value="+420">Czech Republic (+420)</option>
                                        <option value="DK" value="+45">Denmark (+45)</option>
                                        <option value="DJ" value="+253">Djiboutiof the Afars and Issas (+253)</option>
                                        <option value="DM" value="+-766">Dominica (+-766)</option>
                                        <option value="DO" value="+1-829">Dominican Republic (+1-829)</option>
                                        <option value="TP" value="+670">East Timor (+670)</option>
                                        <option value="EC" value="+593">Ecuador (+593)</option>
                                        <option value="EG" value="+20">Egypt (+20)</option>
                                        <option value="SV" value="+503">El Salvador (+503)</option>
                                        <option value="GQ" value="+240">Equatorial Guinea (+240)</option>
                                        <option value="ER" value="+291">Eritrea (+291)</option>
                                        <option value="EE" value="+372">Estonia (+372)</option>
                                        <option value="ET" value="+251">Ethiopia (+251)</option>
                                        <option value="FK" value="+500">Falkland Islands (+500)</option>
                                        <option value="FO" value="+298">Faroe Islands (+298)</option>
                                        <option value="FJ" value="+679">Fiji (+679)</option>
                                        <option value="FI" value="+358">Finland (+358)</option>
                                        <option value="FR" value="+33">France (+33)</option>
                                        <option value="GF" value="+594">French Guiana or French Guyana (+594)</option>
                                        <option value="PF" value="+689">French Polynesia (+689)</option>
                                        <option value="GA" value="+241">Gabon (+241)</option>
                                        <option value="GM" value="+220">Gambia, The (+220)</option>
                                        <option value="GE" value="+995">Georgia (+995)</option>
                                        <option value="DE" value="+49">Germany (+49)</option>
                                        <option value="GH" value="+233">Ghana (+233)</option>
                                        <option value="GI" value="+350">Gibraltar (+350)</option>
                                        <option value="GR" value="+30">Greece (+30)</option>
                                        <option value="GL" value="+299">Greenland (+299)</option>
                                        <option value="GD" value="+-472">Grenada (+-472)</option>
                                        <option value="GP" value="+590">Guadeloupe (+590)</option>
                                        <option value="GU" value="+-670">Guam (+-670)</option>
                                        <option value="GT" value="+502">Guatemala (+502)</option>
                                        <option value="GN" value="+224">Guinea (+224)</option>
                                        <option value="GW" value="+245">Guinea-Bissau (+245)</option>
                                        <option value="GY" value="+592">Guyana (+592)</option>
                                        <option value="HT" value="+509">Haiti (+509)</option>
                                        <option value="HN" value="+504">Honduras (+504)</option>
                                        <option value="HK" value="+852">Hong Kong (+852)</option>
                                        <option value="HU" value="+36">Hungary (+36)</option>
                                        <option value="IS" value="+354">Iceland (+354)</option>
                                        <option value="ID" value="+62">Indonesia (+62)</option>
                                        <option value="IR" value="+98">Iran (+98)</option>
                                        <option value="IQ" value="+964">Iraq (+964)</option>
                                        <option value="IE" value="+353">Ireland (+353)</option>
                                        <option value="IL" value="+972">Israel (+972)</option>
                                        <option value="IT" value="+39">Italy (+39)</option>
                                        <option value="JM" value="+-875">Jamaica (+-875)</option>
                                        <option value="JP" value="+81">Japan (+81)</option>
                                        <option value="JO" value="+962">Jordan (+962)</option>
                                        <option value="KZ" value="+7">Kazakhstan (+7)</option>
                                        <option value="KE" value="+254">Kenya (+254)</option>
                                        <option value="KI" value="+686">Kiribati (+686)</option>
                                        <option value="KP" value="+850">North Korea (+850)</option>
                                        <option value="KR" value="+82">South Korea (+82)</option>
                                        <option value="KW" value="+965">Kuwait (+965)</option>
                                        <option value="KG" value="+996">Kyrgyzstan (+996)</option>
                                        <option value="LA" value="+856">Lao People's Democratic Republic (Laos) (+856)</option>
                                        <option value="LV" value="+371">Latvia (+371)</option>
                                        <option value="LB" value="+961">Lebanon (+961)</option>
                                        <option value="LS" value="+266">Lesotho (+266)</option>
                                        <option value="LR" value="+231">Liberia (+231)</option>
                                        <option value="LY" value="+218">Libya (+218)</option>
                                        <option value="LI" value="+423">Liechtenstein (+423)</option>
                                        <option value="LT" value="+370">Lithuania (+370)</option>
                                        <option value="LU" value="+352">Luxembourg (+352)</option>
                                        <option value="MO" value="+853">Macau (+853)</option>
                                        <option value="MK" value="+389">Macedonia (+389)</option>
                                        <option value="MG" value="+261">Madagascar (+261)</option>
                                        <option value="MW" value="+265">Malawi (+265)</option>
                                        <option value="MY" value="+60">Malaysia (+60)</option>
                                        <option value="MV" value="+960">Maldives (+960)</option>
                                        <option value="ML" value="+223">Mali (+223)</option>
                                        <option value="MT" value="+356">Malta (+356)</option>
                                        <option value="MH" value="+692">Marshall Islands (+692)</option>
                                        <option value="MQ" value="+596">Martinique (+596)</option>
                                        <option value="MR" value="+222">Mauritania (+222)</option>
                                        <option value="MU" value="+230">Mauritius (+230)</option>
                                        <option value="YT" value="+269">Mayotte (+269)</option>
                                        <option value="MX" value="+52">Mexico (+52)</option>
                                        <option value="FM" value="+691">Micronesia (+691)</option>
                                        <option value="MD" value="+373">Moldova (+373)</option>
                                        <option value="MC" value="+377">Monaco (+377)</option>
                                        <option value="MN" value="+976">Mongolia (+976)</option>
                                        <option value="MS" value="+-663">Montserrat (+-663)</option>
                                        <option value="MA" value="+212">Morocco (+212)</option>
                                        <option value="MZ" value="+258">Mozambique (+258)</option>
                                        <option value="MM" value="+95">Myanmar (+95)</option>
                                        <option value="NA" value="+264">Namibia (+264)</option>
                                        <option value="NR" value="+674">Nauru (+674)</option>
                                        <option value="NP" value="+977">Nepal (+977)</option>
                                        <option value="NL" value="+31">Netherlands (+31)</option>
                                        <option value="AN" value="+599">Netherlands Antilles (+599)</option>
                                        <option value="NC" value="+687">New Caledonia (+687)</option>
                                        <option value="NZ" value="+64">New Zealand (+64)</option>
                                        <option value="NI" value="+505">Nicaragua (+505)</option>
                                        <option value="NE" value="+227">Niger (+227)</option>
                                        <option value="NG" value="+234">Nigeria (+234)</option>
                                        <option value="NU" value="+683">Niue (+683)</option>
                                        <option value="NF" value="+672">Norfolk Island (+672)</option>
                                        <option value="MP" value="+-669">Northern Mariana Islands (+-669)</option>
                                        <option value="NO" value="+47">Norway (+47)</option>
                                        <option value="OM" value="+968">Oman (+968)</option>
                                        <option value="PW" value="+680">Palau (+680)</option>
                                        <option value="PS" value="+970">Palestinian State (+970)</option>
                                        <option value="PA" value="+507">Panama (+507)</option>
                                        <option value="PG" value="+675">Papua New Guinea (+675)</option>
                                        <option value="PY" value="+595">Paraguay (+595)</option>
                                        <option value="PE" value="+51">Peru (+51)</option>
                                        <option value="PH" value="+63">Philippines (+63)</option>
                                        <option value="PL" value="+48">Poland (+48)</option>
                                        <option value="PT" value="+351">Portugal (+351)</option>
                                        <option value="PR" value="+1-787">Puerto Rico (+1-787)</option>
                                        <option value="QA" value="+974">Qatar (+974)</option>
                                        <option value="RE" value="+262">Reunion (+262)</option>
                                        <option value="RO" value="+40">Romania (+40)</option>
                                        <option value="RU" value="+7">Russian Federation (+7)</option>
                                        <option value="RW" value="+250">Rwanda (+250)</option>
                                        <option value="SH" value="+290">Saint Helena (+290)</option>
                                        <option value="KN" value="+-868">Saint Kitts and Nevis (+-868)</option>
                                        <option value="LC" value="+-757">Saint Lucia (+-757)</option>
                                        <option value="PM" value="+508">Saint Pierre and Miquelon (+508)</option>
                                        <option value="VC" value="+-783">Saint Vincent and the Grenadines (+-783)</option>
                                        <option value="WS" value="+685">Samoa (+685)</option>
                                        <option value="SM" value="+378">San Marino (+378)</option>
                                        <option value="ST" value="+239">Sao Tome and Principe (+239)</option>
                                        <option value="SA" value="+966">Saudi Arabia (+966)</option>
                                        <option value="SN" value="+221">Senegal (+221)</option>
                                        <option value="SC" value="+248">Seychelles (+248)</option>
                                        <option value="SL" value="+232">Sierra Leone (+232)</option>
                                        <option value="SG" value="+65">Singapore (+65)</option>
                                        <option value="SK" value="+421">Slovakia (+421)</option>
                                        <option value="SI" value="+386">Slovenia (+386)</option>
                                        <option value="SB" value="+677">Solomon Islands (+677)</option>
                                        <option value="SO" value="+252">Somalia (+252)</option>
                                        <option value="ZA" value="+27">South Africa (+27)</option>
                                        <option value="ES" value="+34">Spain (+34)</option>
                                        <option value="SD" value="+249">Sudan (+249)</option>
                                        <option value="SR" value="+597">Suriname (+597)</option>
                                        <option value="SZ" value="+268">Swaziland (+268)</option>
                                        <option value="SE" value="+46">Sweden (+46)</option>
                                        <option value="CH" value="+41">Switzerland (+41)</option>
                                        <option value="SY" value="+963">Syria (+963)</option>
                                        <option value="TW" value="+886">Taiwan (+886)</option>
                                        <option value="TJ" value="+992">Tajikistan (+992)</option>
                                        <option value="TZ" value="+255">Tanzania (+255)</option>
                                        <option value="TH" value="+66">Thailand (+66)</option>
                                        <option value="TK" value="+690">Tokelau (+690)</option>
                                        <option value="TO" value="+676">Tonga (+676)</option>
                                        <option value="TT" value="+-867">Trinidad and Tobago (+-867)</option>
                                        <option value="TN" value="+216">Tunisia (+216)</option>
                                        <option value="TR" value="+90">Turkey (+90)</option>
                                        <option value="TM" value="+993">Turkmenistan (+993)</option>
                                        <option value="TC" value="+-648">Turks and Caicos Islands (+-648)</option>
                                        <option value="TV" value="+688">Tuvalu (+688)</option>
                                        <option value="UG" value="+256">Uganda (+256)</option>
                                        <option value="UA" value="+380">Ukraine (+380)</option>
                                        <option value="UY" value="+598">Uruguay (+598)</option>
                                        <option value="UZ" value="+998">Uzbekistan (+998)</option>
                                        <option value="VU" value="+678">Vanuatu (+678)</option>
                                        <option value="VA" value="+418">Vatican City State (+418)</option>
                                        <option value="VE" value="+58">Venezuela (+58)</option>
                                        <option value="VN" value="+84">Vietnam (+84)</option>
                                        <option value="VI" value="+-283">Virgin Islands, British (+-283)</option>
                                        <option value="VQ" value="+-339">Virgin Islands, United States (+-339)</option>
                                        <option value="WF" value="+681">Wallis and Futuna Islands (+681)</option>
                                        <option value="YE" value="+967">Yemen (+967)</option>
                                        <option value="ZM" value="+260">Zambia (+260)</option>
                                        <option value="ZW" value="+263">Zimbabwe (+263)</option>
                                    </select>
                                    <input type="number" name="sendto" placeholder="Mobile no *"
                                        class="bg-gray-50 border border-red-300 text-gray-900 text-sm rounded-lg block w-full p-1">
                                </div>
                                <span id="phone_error3" class="text-red-500 text-xs"></span>
                            </div>

                            <input type="hidden" name="description2" class="textbox" value="{{$course->course_title}}" placeholder="" id="">
                            <input type="hidden" name="academy" class="textbox" value="{{$academy_name->id}}" placeholder="" id="">
                            @if(isset($_GET['source']) && $_GET['source'] =="LNEM")
                            <input type="hidden" name="source" class="textbox" value="LNEM" placeholder="" id="">
                            @elseif(isset($_GET['source']))
                            <input type="hidden" name="source" class="textbox" value="{{$_GET['source']}}" placeholder="" id="">
                            @else
                            <input type="hidden" name="source" class="textbox" value="KAZUMI" placeholder="" id="">
                            @endif
                            <input type="hidden" name="lead_source_page_url" class="textbox" value="{{url()->full()}}" placeholder="" id="">
                            <input type="hidden" name="slug" class="textbox" value="{{$course->slug}}" placeholder="" id="">
                            <input type="hidden" name="crm_course_id" class="textbox" value="{{$course->crm_course_id}}" placeholder="" id="">
                            <input type="hidden" name="course_name" class="textbox" value="{{$course->course_name}}" placeholder="" id="">
                            @if(isset($_GET['gclid']))
                            <input type="hidden" name="gclid_field" value="<?= $_GET['gclid'] ?>" />
                            @endif
                            @if(isset($_GET['utm_campaign']))
                            <input type="hidden" name="campaign_name" value="<?= $_GET['utm_campaign'] ?>" />
                            @endif
                            @if(isset($_GET['msclkid']))
                            <input type="hidden" name="msclkid_field" value="<?= $_GET['msclkid'] ?>" id="msclkid_field">
                            @endif

                            <div class="flex justify-center pt-2">
                                <button type="submit"
                                    class="bg-red-600 text-white px-2 py-1 text-lg rounded-md">Submit</button>
                            </div>
                        </form>

                    </div>
                    <div class="w-full flex items-center justify-center relative">
                        <a target="_blank" href="{{$course->course_video_url}}"
                            class="relative w-full max-w-2xl">
                            <img src="{{$course->course_video_thumbnail}}"
                                class="w-full object-cover rounded-lg" style="height:220px;">

                            <svg version="1.1" viewBox="0 0 68 48" width="68"
                                class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                <path d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55
                                                                                            C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19
                                                                                            C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24
                                                                                            S67.94,13.05,66.52,7.74z"
                                    fill="#f00">
                                </path>
                                <path d="M 45,24 27,14 27,34" fill="#fff"></path>
                            </svg>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="py-12">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-center text-2xl md:text-3xl font-semibold mb-10 text-red-600 capitalize">Certifications</h2>

            <h3 class="md:text-[24px] text-[20px] text-[#212529] font-[600] pb-4 mt-2">Get Ahead with Henry Harvin® {{$course->course_name}} {{ $tested_slug_city ?? '' }} @if($course->slug =='lean-six-sigma-green-belt-certification' || $course->slug =='lean-six-sigma-black-belt-certification') Training @else Certification @endif</h3>
            <div class="mb-2">
                <ul style="overflow: auto;" class="flex no-wrap overflow-auto text-sm font-medium text-center" id="default-styled-tab" data-tabs-toggle="#default-styled-tab-content" data-tabs-active-classes="text-white bg-purple border-purple-600" data-tabs-inactive-classes="border-2 text-purple hover:text-white border-purple hover:bg:purple" role="tablist">

                    @foreach($newcertificateCourse as $cer)
                    <li class="me-2">
                        <button style="width: max-content;" class="w-max focus:bg-purple p-2 border-2 hover:bg-purple hover:text-white rounded-t-lg flex justify-between items-center" id="profile-styled-tab" data-tabs-target="#cerificate{{$cer->id}}" type="button" role="tab" aria-controls="profile" aria-selected="false"><img class="w-auto h-10 mx-4 bg-white rounded-full" alt="icons-carri35" src="{{$cer->logo_link}}">{{$cer->logo_name}}</button>
                    </li>
                    @endforeach
                </ul>
            </div>
           <style>
            #text-spn p{
                color: gray !important;
            }
             #text-spn p span{
                color: gray !important;
            }
            </style>
            <div id="default-styled-tab-content">
                <div class="grid md:grid-cols-2 grid-cols-1 gap-4">
                    <div id="text-spn" class="space-y-2" style="color:red !important;">
                        <h4 class="md:text-[18px] text-[16px] text-[#212529] font-[500]">What you'll Learn in this course</4>
                        @foreach ($certificate as $certi)
                        <h4 class="font-[500] text-[16px] text-[#212529]"><i class="fa fa-check text-[10px] text-[#4f2d7f] rounded-full border border-[#4f2d7f] p-0.5 mr-2" aria-hidden="true"></i>{{$certi->certi_title}}</h4>
                        <p class="font-[400] text-[14px]">{!! $certi->certi_content !!}</p>
                        @endforeach
                    </div>
                    @foreach($newcertificateCourse as $index => $cer)
                    <div class="hidden p-4 rounded-lg bg-gray-50" id="cerificate{{$cer->id}}" aria-labelledby="profile-tab">
                        <div class="grid grid-cols-1 gap-4">
                            <div>
                                @php
                                $extension = '';
                                if($cer->image_link && strtolower($cer->image_link) !='null'){
                                $last_dot_position = strrpos($cer->image_link, '.');
                                if($last_dot_position !== false) {
                                $extension = substr($cer->image_link, $last_dot_position + 1);
                                }
                                }
                                @endphp
                                @if($cer->image_link && strtolower($cer->image_link) !='null' && $extension != 'svg')
                                <img style="margin: auto; max-height: 500px;" loading="lazy" src="{{$cer->image_link}}" alt="certificate1">
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    @if($skills->count() > 0)
    <section class="py-12">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-center text-2xl md:text-3xl font-semibold mb-10 text-red-600 capitalize">Skills Covered</h2>
            <div class="grid md:grid-cols-3 gap-4">
                @foreach ($skills as $sk)
                <div class="flex items-start space-x-3">
                    <i
                        class="fa fa-check text-lg text-red-600 border border-red-600 flex justify-center items-center rounded-full py-1 w-8 h-8"></i>
                    <p class="text-gray-700 font-medium">{{$sk->skill}}</p>
                </div>
               @endforeach
            </div>
        </div>
    </section>
    @endif
    @if(isset($jobprofiles) && $jobprofiles->count() > 0)
    <section class="py-12">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-center text-2xl md:text-3xl font-semibold mb-10 text-red-600 capitalize">Job Profiles</h2>
            <div class="grid md:grid-cols-3 gap-4">
                @foreach ($jobprofiles as $jp)
                <div class="flex items-start space-x-3">
                    <i
                        class="fa fa-check text-lg text-red-600 border border-red-600 flex justify-center items-center rounded-full py-1 w-8 h-8"></i>
                    <p class="text-gray-700 font-medium">{{$jp->jobprofile}}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif
    <section class="py-12 bg-gray-50">
        <div class="max-w-6xl mx-auto px-4">
            <h3 class="text-center text-2xl md:text-3xl font-semibold mb-10 text-red-600 capitalize">Frequently Asked Questions</h3>
            <div class="my-6">
                <ul class="flex flex-col border-2 shadow-lg" x-data="{ selected: null }">
                    <!-- FAQ Item 1 -->

                    @php $sfq = 0 @endphp
                    @foreach ($faqs as $index => $faq)
                        @if($index < 5) 
                        <li class="bg-white border-b">
                            <h4 @click="selected !== {{$faq->id}} ? selected = {{$faq->id}} : selected = null"
                                class="flex flex-row justify-between items-center font-semibold px-4 py-4 cursor-pointer bg-red-700 text-white">
                                <span>{{$faq->faq_question}}</span>
                                <svg :class="selected === {{$faq->id}} ? 'rotate-180' : ''"
                                    class="fill-current text-white h-6 w-6 transform transition-transform duration-500"
                                    viewBox="0 0 20 20">
                                    <path d="M5.23 7.21l4.77 4.77 4.77-4.77"></path>
                                </svg>
                            </h4>
                            <div x-show="selected === {{$faq->id}}" x-transition class="border-l-2 ml-3 pl-3 border-red-700 bg-white">
                                <p class="p-3 text-gray-900">
                                    {!!$faq->faq_answer!!}    
                                </p>
                            </div>
                        </li>
                        @else
                        @php ++$sfq; @endphp
                        <div class="hidden collapseFaq">
                            <li class="bg-white border-b">
                                <h4 @click="selected !== {{$faq->id}} ? selected = {{$faq->id}} : selected = null"
                                    class="flex flex-row justify-between items-center font-semibold px-4 py-4 cursor-pointer bg-red-700 text-white">
                                    <span>{{$faq->faq_question}}</span>
                                    <svg :class="selected === {{$faq->id}} ? 'rotate-180' : ''"
                                        class="fill-current text-white h-6 w-6 transform transition-transform duration-500"
                                        viewBox="0 0 20 20">
                                        <path d="M5.23 7.21l4.77 4.77 4.77-4.77"></path>
                                    </svg>
                                </h4>
                                <div x-show="selected === {{$faq->id}}" x-transition class="border-l-2 ml-3 pl-3 border-red-700 bg-white">
                                    <p class="p-3 text-gray-900">
                                        {!!$faq->faq_answer!!}    
                                    </p>
                                </div>
                            </li>
                        </div>
                        @endif
                    @endforeach
                    
                </ul>
                @if($sfq)
            <div class="items-center justify-center flex btn_faq">
                <button class="py-3 px-8 text-[16px] text-gray-900 font-[600] border border-gray-800 my-6" onclick="toggleFaq()">See {{$sfq}} More FAQs</button>
            </div>
            @endif
            </div>
        </div>

<div id="course-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg border-2 border-red-600 shadow">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                <h5 class="text-[24px] font-[600] text-red-600" id="change-modal-text"></h5>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center" data-modal-hide="course-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1l12 12M1 13L13 1"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>

            <!-- Modal body -->
            <form class="p-4 md:p-5 space-y-4" action="{{ route('lead.store') }}" method="POST">
                @csrf
                <div>
                    <label for="name" class="block text-sm mb-1 font-[600] text-red-600">Name</label>
                    <input type="text" name="name" id="name" placeholder="Name" required class="bg-gray-50 border border-red-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                    <span id="name_error3" class="text-red-500 text-xs"></span>
                </div>

                <div>
                    <label for="email" class="block text-sm mb-1 font-[600] text-red-600">Email</label>
                    <input type="email" name="email" id="email" placeholder="Email" required class="bg-gray-50 border border-red-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                    <span id="email_error3" class="text-red-500 text-xs"></span>
                </div>

                <div>
                    <label for="countryCode" class="block text-sm mb-1 font-[600] text-red-600">Country Code</label>
                    <div class="flex gap-2">
                        <select name="countryCode" class="w-4/12 bg-gray-50 border border-red-300 text-gray-900 text-sm rounded-lg p-2.5">
                            <option value="IN" value="+91" selected="">(+91)</option>
                            <option value="PK" value="+92">Pakistan (+92)</option>
                            <option value="US" value="+1">USA (+1)</option>
                            <option value="GB" value="+44">UK (+44)</option>
                            <option value="LK" value="+94">Sri Lanka (+94)</option>
                            <option value="BD" value="+880">Bangladesh (+880)</option>
                            <option value="AE" value="+971">United Arab Emirates (+971)</option>
                                <option value="AF" value="+93">Afghanistan (+93)</option>
                                <option value="AL" value="+355">Albania (+355)</option>
                                <option value="DZ" value="+213">Algeria (+213)</option>
                                <option value="AS" value="+-683">American Samoa (+-683)</option>
                                <option value="AD" value="+376">Andorra (+376)</option>
                                <option value="AO" value="+244">Angola (+244)</option>
                                <option value="AI" value="+-263">Anguilla (+-263)</option>
                                <option value="AQ" value="+672">Antarctica (+672)</option>
                                <option value="AG" value="+-267">Antigua and Barbuda (+-267)</option>
                                <option value="AR" value="+54">Argentina (+54)</option>
                                <option value="AM" value="+374">Armenia (+374)</option>
                                <option value="AW" value="+297">Aruba (+297)</option>
                                <option value="AU" value="+61">Australia (+61)</option>
                                <option value="AT" value="+43">Austria (+43)</option>
                                <option value="AZ" value="+994">Azerbaijan (+994)</option>
                                <option value="BS" value="+-241">Bahamas (+-241)</option>
                                <option value="BH" value="+973">Bahrain (+973)</option>
                                <option value="BB" value="+-245">Barbados (+-245)</option>
                                <option value="BY" value="+375">Belarus (+375)</option>
                                <option value="BE" value="+32">Belgium (+32)</option>
                                <option value="BZ" value="+501">Belize (+501)</option>
                                <option value="BJ" value="+229">Benin (+229)</option>
                                <option value="BM" value="+-440">Bermuda (+-440)</option>
                                <option value="BT" value="+975">Bhutan (+975)</option>
                                <option value="BO" value="+591">Bolivia (+591)</option>
                                <option value="BA" value="+387">Bosnia and Herzegovina (+387)</option>
                                <option value="BW" value="+267">Botswana (+267)</option>
                                <option value="BR" value="+55">Brazil (+55)</option>
                                <option value="BN" value="+673">Brunei (+673)</option>
                                <option value="BG" value="+359">Bulgaria (+359)</option>
                                <option value="BF" value="+226">Burkina Faso (+226)</option>
                                <option value="BI" value="+257">Burundi (+257)</option>
                                <option value="KH" value="+855">Cambodia (+855)</option>
                                <option value="CM" value="+237">Cameroon (+237)</option>
                                <option value="CA" value="+1">Canada (+1)</option>
                                <option value="CV" value="+238">Cape Verde (+238)</option>
                                <option value="KY" value="+-344">Cayman Islands (+-344)</option>
                                <option value="CF" value="+236">Central African Republic (+236)</option>
                                <option value="TD" value="+235">Chad (+235)</option>
                                <option value="CL" value="+56">Chile (+56)</option>
                                <option value="CN" value="+86">China (+86)</option>
                                <option value="CX" value="+53">Christmas Island (+53)</option>
                                <option value="CC" value="+61">Cocos (Keeling) Islands (+61)</option>
                                <option value="CO" value="+57">Colombia (+57)</option>
                                <option value="KM" value="+269">Comoros (+269)</option>
                                <option value="CD" value="+243">Congo (+243)</option>
                                <option value="CG" value="+242">Congo (+242)</option>
                                <option value="CK" value="+682">Cook Islands (+682)</option>
                                <option value="CR" value="+506">Costa Rica (+506)</option>
                                <option value="CI" value="+225">Cote D'Ivoire (+225)</option>
                                <option value="HR" value="+385">Croatia (+385)</option>
                                <option value="CU" value="+53">Cuba (+53)</option>
                                <option value="CY" value="+357">Cyprus (+357)</option>
                                <option value="CZ" value="+420">Czech Republic (+420)</option>
                                <option value="DK" value="+45">Denmark (+45)</option>
                                <option value="DJ" value="+253">Djiboutiof the Afars and Issas (+253)</option>
                                <option value="DM" value="+-766">Dominica (+-766)</option>
                                <option value="DO" value="+1-829">Dominican Republic (+1-829)</option>
                                <option value="TP" value="+670">East Timor (+670)</option>
                                <option value="EC" value="+593">Ecuador (+593)</option>
                                <option value="EG" value="+20">Egypt (+20)</option>
                                <option value="SV" value="+503">El Salvador (+503)</option>
                                <option value="GQ" value="+240">Equatorial Guinea (+240)</option>
                                <option value="ER" value="+291">Eritrea (+291)</option>
                                <option value="EE" value="+372">Estonia (+372)</option>
                                <option value="ET" value="+251">Ethiopia (+251)</option>
                                <option value="FK" value="+500">Falkland Islands (+500)</option>
                                <option value="FO" value="+298">Faroe Islands (+298)</option>
                                <option value="FJ" value="+679">Fiji (+679)</option>
                                <option value="FI" value="+358">Finland (+358)</option>
                                <option value="FR" value="+33">France (+33)</option>
                                <option value="GF" value="+594">French Guiana or French Guyana (+594)</option>
                                <option value="PF" value="+689">French Polynesia (+689)</option>
                                <option value="GA" value="+241">Gabon (+241)</option>
                                <option value="GM" value="+220">Gambia, The (+220)</option>
                                <option value="GE" value="+995">Georgia (+995)</option>
                                <option value="DE" value="+49">Germany (+49)</option>
                                <option value="GH" value="+233">Ghana (+233)</option>
                                <option value="GI" value="+350">Gibraltar (+350)</option>
                                <option value="GR" value="+30">Greece (+30)</option>
                                <option value="GL" value="+299">Greenland (+299)</option>
                                <option value="GD" value="+-472">Grenada (+-472)</option>
                                <option value="GP" value="+590">Guadeloupe (+590)</option>
                                <option value="GU" value="+-670">Guam (+-670)</option>
                                <option value="GT" value="+502">Guatemala (+502)</option>
                                <option value="GN" value="+224">Guinea (+224)</option>
                                <option value="GW" value="+245">Guinea-Bissau (+245)</option>
                                <option value="GY" value="+592">Guyana (+592)</option>
                                <option value="HT" value="+509">Haiti (+509)</option>
                                <option value="HN" value="+504">Honduras (+504)</option>
                                <option value="HK" value="+852">Hong Kong (+852)</option>
                                <option value="HU" value="+36">Hungary (+36)</option>
                                <option value="IS" value="+354">Iceland (+354)</option>
                                <option value="ID" value="+62">Indonesia (+62)</option>
                                <option value="IR" value="+98">Iran (+98)</option>
                                <option value="IQ" value="+964">Iraq (+964)</option>
                                <option value="IE" value="+353">Ireland (+353)</option>
                                <option value="IL" value="+972">Israel (+972)</option>
                                <option value="IT" value="+39">Italy (+39)</option>
                                <option value="JM" value="+-875">Jamaica (+-875)</option>
                                <option value="JP" value="+81">Japan (+81)</option>
                                <option value="JO" value="+962">Jordan (+962)</option>
                                <option value="KZ" value="+7">Kazakhstan (+7)</option>
                                <option value="KE" value="+254">Kenya (+254)</option>
                                <option value="KI" value="+686">Kiribati (+686)</option>
                                <option value="KP" value="+850">North Korea (+850)</option>
                                <option value="KR" value="+82">South Korea (+82)</option>
                                <option value="KW" value="+965">Kuwait (+965)</option>
                                <option value="KG" value="+996">Kyrgyzstan (+996)</option>
                                <option value="LA" value="+856">Lao People's Democratic Republic (Laos) (+856)</option>
                                <option value="LV" value="+371">Latvia (+371)</option>
                                <option value="LB" value="+961">Lebanon (+961)</option>
                                <option value="LS" value="+266">Lesotho (+266)</option>
                                <option value="LR" value="+231">Liberia (+231)</option>
                                <option value="LY" value="+218">Libya (+218)</option>
                                <option value="LI" value="+423">Liechtenstein (+423)</option>
                                <option value="LT" value="+370">Lithuania (+370)</option>
                                <option value="LU" value="+352">Luxembourg (+352)</option>
                                <option value="MO" value="+853">Macau (+853)</option>
                                <option value="MK" value="+389">Macedonia (+389)</option>
                                <option value="MG" value="+261">Madagascar (+261)</option>
                                <option value="MW" value="+265">Malawi (+265)</option>
                                <option value="MY" value="+60">Malaysia (+60)</option>
                                <option value="MV" value="+960">Maldives (+960)</option>
                                <option value="ML" value="+223">Mali (+223)</option>
                                <option value="MT" value="+356">Malta (+356)</option>
                                <option value="MH" value="+692">Marshall Islands (+692)</option>
                                <option value="MQ" value="+596">Martinique (+596)</option>
                                <option value="MR" value="+222">Mauritania (+222)</option>
                                <option value="MU" value="+230">Mauritius (+230)</option>
                                <option value="YT" value="+269">Mayotte (+269)</option>
                                <option value="MX" value="+52">Mexico (+52)</option>
                                <option value="FM" value="+691">Micronesia (+691)</option>
                                <option value="MD" value="+373">Moldova (+373)</option>
                                <option value="MC" value="+377">Monaco (+377)</option>
                                <option value="MN" value="+976">Mongolia (+976)</option>
                                <option value="MS" value="+-663">Montserrat (+-663)</option>
                                <option value="MA" value="+212">Morocco (+212)</option>
                                <option value="MZ" value="+258">Mozambique (+258)</option>
                                <option value="MM" value="+95">Myanmar (+95)</option>
                                <option value="NA" value="+264">Namibia (+264)</option>
                                <option value="NR" value="+674">Nauru (+674)</option>
                                <option value="NP" value="+977">Nepal (+977)</option>
                                <option value="NL" value="+31">Netherlands (+31)</option>
                                <option value="AN" value="+599">Netherlands Antilles (+599)</option>
                                <option value="NC" value="+687">New Caledonia (+687)</option>
                                <option value="NZ" value="+64">New Zealand (+64)</option>
                                <option value="NI" value="+505">Nicaragua (+505)</option>
                                <option value="NE" value="+227">Niger (+227)</option>
                                <option value="NG" value="+234">Nigeria (+234)</option>
                                <option value="NU" value="+683">Niue (+683)</option>
                                <option value="NF" value="+672">Norfolk Island (+672)</option>
                                <option value="MP" value="+-669">Northern Mariana Islands (+-669)</option>
                                <option value="NO" value="+47">Norway (+47)</option>
                                <option value="OM" value="+968">Oman (+968)</option>
                                <option value="PW" value="+680">Palau (+680)</option>
                                <option value="PS" value="+970">Palestinian State (+970)</option>
                                <option value="PA" value="+507">Panama (+507)</option>
                                <option value="PG" value="+675">Papua New Guinea (+675)</option>
                                <option value="PY" value="+595">Paraguay (+595)</option>
                                <option value="PE" value="+51">Peru (+51)</option>
                                <option value="PH" value="+63">Philippines (+63)</option>
                                <option value="PL" value="+48">Poland (+48)</option>
                                <option value="PT" value="+351">Portugal (+351)</option>
                                <option value="PR" value="+1-787">Puerto Rico (+1-787)</option>
                                <option value="QA" value="+974">Qatar (+974)</option>
                                <option value="RE" value="+262">Reunion (+262)</option>
                                <option value="RO" value="+40">Romania (+40)</option>
                                <option value="RU" value="+7">Russian Federation (+7)</option>
                                <option value="RW" value="+250">Rwanda (+250)</option>
                                <option value="SH" value="+290">Saint Helena (+290)</option>
                                <option value="KN" value="+-868">Saint Kitts and Nevis (+-868)</option>
                                <option value="LC" value="+-757">Saint Lucia (+-757)</option>
                                <option value="PM" value="+508">Saint Pierre and Miquelon (+508)</option>
                                <option value="VC" value="+-783">Saint Vincent and the Grenadines (+-783)</option>
                                <option value="WS" value="+685">Samoa (+685)</option>
                                <option value="SM" value="+378">San Marino (+378)</option>
                                <option value="ST" value="+239">Sao Tome and Principe (+239)</option>
                                <option value="SA" value="+966">Saudi Arabia (+966)</option>
                                <option value="SN" value="+221">Senegal (+221)</option>
                                <option value="SC" value="+248">Seychelles (+248)</option>
                                <option value="SL" value="+232">Sierra Leone (+232)</option>
                                <option value="SG" value="+65">Singapore (+65)</option>
                                <option value="SK" value="+421">Slovakia (+421)</option>
                                <option value="SI" value="+386">Slovenia (+386)</option>
                                <option value="SB" value="+677">Solomon Islands (+677)</option>
                                <option value="SO" value="+252">Somalia (+252)</option>
                                <option value="ZA" value="+27">South Africa (+27)</option>
                                <option value="ES" value="+34">Spain (+34)</option>
                                <option value="SD" value="+249">Sudan (+249)</option>
                                <option value="SR" value="+597">Suriname (+597)</option>
                                <option value="SZ" value="+268">Swaziland (+268)</option>
                                <option value="SE" value="+46">Sweden (+46)</option>
                                <option value="CH" value="+41">Switzerland (+41)</option>
                                <option value="SY" value="+963">Syria (+963)</option>
                                <option value="TW" value="+886">Taiwan (+886)</option>
                                <option value="TJ" value="+992">Tajikistan (+992)</option>
                                <option value="TZ" value="+255">Tanzania (+255)</option>
                                <option value="TH" value="+66">Thailand (+66)</option>
                                <option value="TK" value="+690">Tokelau (+690)</option>
                                <option value="TO" value="+676">Tonga (+676)</option>
                                <option value="TT" value="+-867">Trinidad and Tobago (+-867)</option>
                                <option value="TN" value="+216">Tunisia (+216)</option>
                                <option value="TR" value="+90">Turkey (+90)</option>
                                <option value="TM" value="+993">Turkmenistan (+993)</option>
                                <option value="TC" value="+-648">Turks and Caicos Islands (+-648)</option>
                                <option value="TV" value="+688">Tuvalu (+688)</option>
                                <option value="UG" value="+256">Uganda (+256)</option>
                                <option value="UA" value="+380">Ukraine (+380)</option>
                                <option value="UY" value="+598">Uruguay (+598)</option>
                                <option value="UZ" value="+998">Uzbekistan (+998)</option>
                                <option value="VU" value="+678">Vanuatu (+678)</option>
                                <option value="VA" value="+418">Vatican City State (+418)</option>
                                <option value="VE" value="+58">Venezuela (+58)</option>
                                <option value="VN" value="+84">Vietnam (+84)</option>
                                <option value="VI" value="+-283">Virgin Islands, British (+-283)</option>
                                <option value="VQ" value="+-339">Virgin Islands, United States (+-339)</option>
                                <option value="WF" value="+681">Wallis and Futuna Islands (+681)</option>
                                <option value="YE" value="+967">Yemen (+967)</option>
                                <option value="ZM" value="+260">Zambia (+260)</option>
                                <option value="ZW" value="+263">Zimbabwe (+263)</option>
                        </select>
                        <input type="number" name="sendto" placeholder="Mobile no *" class="bg-gray-50 border border-red-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                    </div>
                    <span id="phone_error3" class="text-red-500 text-xs"></span>
                </div>

                <!-- Hidden Inputs -->
                <input type="hidden" name="description2" class="textbox" value="{{$course->course_title}}" placeholder="" id="">
                <input type="hidden" name="academy" class="textbox" value="{{$academy_name->id}}" placeholder="" id="">
                @if(isset($_GET['source']) && $_GET['source'] =="LNEM")
                <input type="hidden" name="source" class="textbox" value="LNEM" placeholder="" id="">
                @elseif(isset($_GET['source']))
                <input type="hidden" name="source" class="textbox" value="{{$_GET['source']}}" placeholder="" id="">
                @else
                <input type="hidden" name="source" class="textbox" value="KAZUMI" placeholder="" id="">
                @endif
                <input type="hidden" name="lead_source_page_url" class="textbox" value="{{url()->full()}}" placeholder="" id="">
                <input type="hidden" name="slug" class="textbox" value="{{$course->slug}}" placeholder="" id="">
                <input type="hidden" name="crm_course_id" class="textbox" value="{{$course->crm_course_id}}" placeholder="" id="">
                <input type="hidden" name="course_name" class="textbox" value="{{$course->course_name}}" placeholder="" id="">
                @if(isset($_GET['gclid']))
                <input type="hidden" name="gclid_field" value="<?= $_GET['gclid'] ?>" />
                @endif
                @if(isset($_GET['utm_campaign']))
                <input type="hidden" name="campaign_name" value="<?= $_GET['utm_campaign'] ?>" />
                @endif
                @if(isset($_GET['msclkid']))
                <input type="hidden" name="msclkid_field" value="<?= $_GET['msclkid'] ?>" id="msclkid_field">
                @endif

                <div class="flex justify-center pt-3">
                    <button type="submit" class="bg-red-600 text-white py-2 px-4 text-lg rounded-md">Submit</button>
                </div>
            </form>

        </div>
    </div>
</div>

        <script>
            function toggleFaq() {
                // Show all elements with class 'collapseFaq'
                document.querySelectorAll('.collapseFaq').forEach(function(element) {
                    element.style.display = 'block';
                });

                // Hide all elements with class 'btn_faq'
                document.querySelectorAll('.btn_faq').forEach(function(element) {
                    element.style.display = 'none';
                });
            }

        </script>
    </section>
    <section class="py-12 mx-auto px-4">
        <div class="max-w-6xl mx-auto" bis_skin_checked="1">
            <h2 class="text-center text-2xl md:text-3xl font-semibold mb-2 text-[#da2028] capitalize my-4">Agota™
                Framework
            </h2>
            <p class="text-[16px] text-gray-800 font-[600] text-center">AGOTA™ Framework is a trajectory that offers
                complete growth of an individual incorporating the two most significant focus areas of contemporary
                learning:<span class="font-bold text-gray-900"> The 能力 (Nōryoku) development and キャリア (Kyaria)
                    development. </span></p>
            <p class="text-[16px] text-gray-800 font-[600] text-center mt-4"><span class="font-bold text-gray-900">能力
                    (Nōryoku) development </span> is about building capabilities that not only meet current job demands but
                also anticipates the future needs. It includes:</p>
            <div class="relative grid md:grid-cols-2 gap-2 my-2" bis_skin_checked="1">
                <div bis_skin_checked="1">
                    <ul class="disk mt-2">
                        <li class="grid md:grid-cols-2 grid-cols-1 gap-4 justify-between">
                            <div class="text-[15px] py-2 text-left font-[600] grid grid-cols-3 gap-2 border-b border-purple"
                                bis_skin_checked="1">
                                <p class="col-span-2 text-red-600">1: Training
                                    <span class="block text-[12px] text-gray-800 font-[600]">144 Hours of Two-Way Live
                                        Online Interactive Sessions</span>
                                </p>
                                <div class="relative h-fit mx-auto mb-4 mt-2 " bis_skin_checked="1">
                                    <a target="_blank" href="https://youtu.be/lMkxmdUnAPc"
                                        bis_size="{&quot;x&quot;:258,&quot;y&quot;:1734,&quot;w&quot;:96,&quot;h&quot;:68,&quot;abs_x&quot;:258,&quot;abs_y&quot;:1734}">
                                        <img id="videoThumbnail"
                                            src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1719487194ezgif.com-resize (32).webp"
                                            loading="lazy " alt="Video Thumbnail"
                                            class="object-cover rounded-lg border-4 border-gray-300 shadow-lg"
                                            bis_size="{&quot;x&quot;:258,&quot;y&quot;:1734,&quot;w&quot;:96,&quot;h&quot;:68,&quot;abs_x&quot;:258,&quot;abs_y&quot;:1734}"
                                            bis_id="bn_k6nxes1kgls9urroq3b79m">
                                        <div id="playButton" class="absolute inset-0 flex items-center justify-center"
                                            bis_skin_checked="1">
                                            <button class="flex items-center justify-center bg-white rounded-full p-1"
                                                style="padding: 6px 7px;">
                                                <i class="fa fa-play text-center text-[14px] text-orange-700"></i>
                                            </button>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="text-[15px] py-2 text-left font-[600] grid grid-cols-3 gap-2 border-b border-purple"
                                bis_skin_checked="1">
                                <p class="col-span-2 text-red-600">2: Projects
                                    <span class="block text-[12px] text-gray-800 font-[600]"> Facility to undergo projects
                                        along with the course</span>
                                </p>
                                <div class="relative h-fit mx-auto mb-4 mt-2  " bis_skin_checked="1">
                                    <a target="_blank" href="https://youtu.be/p86YBsCkb0A"
                                        bis_size="{&quot;x&quot;:580,&quot;y&quot;:1734,&quot;w&quot;:96,&quot;h&quot;:72,&quot;abs_x&quot;:580,&quot;abs_y&quot;:1734}">
                                        <img id="videoThumbnail"
                                            src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1719575893ezgif.com-resize - 2024-06-28T172803.379.webp"
                                            loading="lazy " alt="Video ThumbnailRE"
                                            class="object-cover rounded-lg border-4 border-gray-300 shadow-lg"
                                            bis_size="{&quot;x&quot;:580,&quot;y&quot;:1734,&quot;w&quot;:96,&quot;h&quot;:72,&quot;abs_x&quot;:580,&quot;abs_y&quot;:1734}"
                                            bis_id="bn_r7y6rulp4482rexmqhjbp6">
                                        <div id="playButton" class="absolute inset-0 flex items-center justify-center"
                                            bis_skin_checked="1">
                                            <button class="flex items-center justify-center bg-white rounded-full p-1"
                                                style="padding: 6px 7px;">
                                                <i class="fa fa-play text-center text-[14px] text-orange-700"></i>
                                            </button>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="grid md:grid-cols-2 grid-cols-1 gap-4 justify-between">
                            <div class="text-[15px] py-2 text-left font-[600] grid grid-cols-3 gap-2 border-b border-purple"
                                bis_skin_checked="1">
                                <p class="col-span-2 text-red-600">3: Student Engagement &amp; Events
                                    <span class="block text-[12px] text-gray-800 font-[600]"> Free Access to #AskHenry
                                        Hackathons and Competitions &amp; many other facilities from Henry Harvin®</span>
                                </p>
                                <div class="relative h-fit mx-auto mb-4 mt-2 " bis_skin_checked="1">
                                    <a target="_blank" href="https://youtu.be/K7HdNdMwOuE"
                                        bis_size="{&quot;x&quot;:258,&quot;y&quot;:1847,&quot;w&quot;:96,&quot;h&quot;:72,&quot;abs_x&quot;:258,&quot;abs_y&quot;:1847}">
                                        <img id="videoThumbnail"
                                            src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1719576156sxw (2).webp"
                                            loading="lazy " alt="Video ThumbnaiERl"
                                            class="object-cover rounded-lg border-4 border-gray-300 shadow-lg"
                                            bis_size="{&quot;x&quot;:258,&quot;y&quot;:1847,&quot;w&quot;:96,&quot;h&quot;:72,&quot;abs_x&quot;:258,&quot;abs_y&quot;:1847}"
                                            bis_id="bn_76rdo306qf4u6okmbjp8xc">
                                        <div id="playButton" class="absolute inset-0 flex items-center justify-center"
                                            bis_skin_checked="1">
                                            <button class="flex items-center justify-center bg-white rounded-full p-1"
                                                style="padding: 6px 7px;">
                                                <i class="fa fa-play text-center text-[14px] text-orange-700"></i>
                                            </button>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="text-[15px] py-2 text-left font-[600] grid grid-cols-3 gap-2 border-b border-purple"
                                bis_skin_checked="1">
                                <p class="col-span-2 text-red-600">4: Masterclass
                                    <span class="block text-[12px] text-gray-800 font-[600]">Access to 52+ Masterclass
                                        Sessions for essential soft スキル (Sukiru) development</span>
                                </p>
                                <div class="relative h-fit mx-auto mb-4 mt-2  " bis_skin_checked="1">
                                    <a target="_blank" href="https://youtu.be/Gk3t1W3LVZ8"
                                        bis_size="{&quot;x&quot;:580,&quot;y&quot;:1847,&quot;w&quot;:96,&quot;h&quot;:68,&quot;abs_x&quot;:580,&quot;abs_y&quot;:1847}">
                                        <img id="videoThumbnail"
                                            src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1719577083dcwcw.webp"
                                            loading="lazy " alt="Video ThumREbnail"
                                            class="object-cover rounded-lg border-4 border-gray-300 shadow-lg"
                                            bis_size="{&quot;x&quot;:580,&quot;y&quot;:1847,&quot;w&quot;:96,&quot;h&quot;:68,&quot;abs_x&quot;:580,&quot;abs_y&quot;:1847}"
                                            bis_id="bn_d8rrolf3o360b2tlne44wh">
                                        <div id="playButton" class="absolute inset-0 flex items-center justify-center"
                                            bis_skin_checked="1">
                                            <button class="flex items-center justify-center bg-white rounded-full p-1"
                                                style="padding: 6px 7px;">
                                                <i class="fa fa-play text-center text-[14px] text-orange-700"></i>
                                            </button>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="grid md:grid-cols-2 grid-cols-1 gap-4 justify-between">
                            <div class="text-[15px] py-2 text-left font-[600] grid grid-cols-3 gap-2 border-b border-purple"
                                bis_skin_checked="1">
                                <p class="col-span-2 text-red-600">5: Membership
                                    <span class="block text-[12px] text-gray-800 font-[600]"> 30 Months Gold Membership of
                                        Henry Harvin® School of Languages</span>
                                </p>
                                <div class="relative h-fit mx-auto mb-4 mt-2  " bis_skin_checked="1">
                                    <a target="_blank" href="https://www.youtube.com/watch?v=bzJOMiJu_QA">
                                        <img id="videoThumbnail"
                                            src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1728970566Membership_Card_Collage_(1).png"
                                            loading="lazy " alt="Video ThumbnailTTT"
                                            class="object-cover rounded-lg border-4 border-gray-300 shadow-lg">
                                        <div id="playButton" class="absolute inset-0 flex items-center justify-center"
                                            bis_skin_checked="1">
                                            <button class="flex items-center justify-center bg-white rounded-full p-1"
                                                style="padding: 6px 7px;">
                                                <i class="fa fa-play text-center text-[14px] text-orange-700"></i>
                                            </button>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="text-[15px] py-2 text-left font-[600] grid grid-cols-3 gap-2 border-b border-purple"
                                bis_skin_checked="1">
                                <p class="col-span-2 text-red-600">6: E-Learning Access
                                    <span class="block text-[12px] text-gray-800 font-[600]">Get free access to the LMS
                                        having PPTs, projects, self-paced video-based learning, library, quizzes, question
                                        bank, practice tests, final assessments, and a forum, powered by
                                        <a href="https://examopedia.com/"
                                            class="inline-flex text-[12px] font-bold text-orange-500 items-center gap-1"><img
                                                src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1734598082examopedia_logo.webp"
                                                loading="lazy " alt="Examopedia Logo"
                                                class="h-3">Examopedia</a></span><a href="https://examopedia.com/"
                                        class="inline-flex text-[12px] font-bold text-orange-500 items-center gap-1"> </a>


                                </p>
                                <div class="relative h-fit mx-auto mb-4 mt-2  " bis_skin_checked="1">
                                    <a target="_blank" href="https://www.youtube.com/watch?v=XUQm0ecT6ts">
                                        <img id="videoThumbnail"
                                            src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1719487342ezgif.com-resize (35).webp"
                                            loading="lazy " alt="Video ThumbnailQWTRT"
                                            class="object-cover rounded-lg border-4 border-gray-300 shadow-lg">
                                        <div id="playButton" class="absolute inset-0 flex items-center justify-center"
                                            bis_skin_checked="1">
                                            <button class="flex items-center justify-center bg-white rounded-full p-1"
                                                style="padding: 6px 7px;">
                                                <i class="fa fa-play text-center text-[14px] text-orange-700"></i>
                                            </button>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <p class="text-[15px] text-left my-8"><span class="font-bold text-gray-900">ア (Kyaria) development
                        </span> lays focus on the essentials for acquiring a good career or diving into a highly competent
                        one. It includes:</p>
                    <ul class="disk">
                        <li class="grid md:grid-cols-2 grid-cols-1 gap-4 justify-between">
                            <div class="text-[15px] py-2 text-left font-[600] grid grid-cols-3 gap-2 border-b border-purple"
                                bis_skin_checked="1">
                                <p class="col-span-2 text-red-600">7: 特徴 (Tokuchō) Certification + License
                                    <span class="block text-[12px] text-gray-800 font-[600]">Distinguish your profile with
                                        global credentials and showcase expertise with our 特徴 (Tokuchō) Completion
                                        certificate with Professional License</span>
                                </p>
                                <div class="relative h-fit mx-auto mb-4 mt-2  " bis_skin_checked="1">
                                    <a target="_blank" href="https://youtu.be/LJH79vKhyXc"
                                        bis_size="{&quot;x&quot;:258,&quot;y&quot;:2242,&quot;w&quot;:96,&quot;h&quot;:68,&quot;abs_x&quot;:258,&quot;abs_y&quot;:2242}">
                                        <img id="videoThumbnail"
                                            src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1719487248ezgif.com-resize (33).webp"
                                            loading="lazy " alt="Video ThumbnailWERWG"
                                            class="object-cover rounded-lg border-4 border-gray-300 shadow-lg"
                                            bis_size="{&quot;x&quot;:258,&quot;y&quot;:2242,&quot;w&quot;:96,&quot;h&quot;:68,&quot;abs_x&quot;:258,&quot;abs_y&quot;:2242}"
                                            bis_id="bn_0196ld4v20caat8svgsg34">
                                        <div id="playButton" class="absolute inset-0 flex items-center justify-center"
                                            bis_skin_checked="1">
                                            <button class="flex items-center justify-center bg-white rounded-full p-1"
                                                style="padding: 6px 7px;">
                                                <i class="fa fa-play text-center text-[14px] text-orange-700"></i>
                                            </button>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="text-[15px] py-2 text-left font-[600] grid grid-cols-3 gap-2 border-b border-purple"
                                bis_skin_checked="1">
                                <p class="col-span-2 text-red-600">8: Internship Support
                                    <span class="block text-[12px] text-gray-800 font-[600]">Get Internship Support with
                                        Henry Harvin® and in top MNCs like J.P. Morgan, Accenture &amp; many more via 100X
                                        Suite and
                                        <a href="https://yuvaintern.com//"
                                            class="inline-flex text-[12px] font-bold text-orange-500 items-center gap-1"><img
                                                src="https://yuvaintern.com/assets/img/logo.png" loading="lazy "
                                                alt="YUVA Logo" class="h-3">Yuva Intern</a></span><a
                                        href="https://yuvaintern.com//"
                                        class="inline-flex text-[12px] font-bold text-orange-500 items-center gap-1">
                                    </a>.
                                </p>
                                <div class="relative h-fit mx-auto mb-4 mt-2  " bis_skin_checked="1">
                                    <a target="_blank" href="https://www.youtube.com/shorts/2od0SMHat-A">
                                        <img id="videoThumbnail"
                                            src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1719575988d233dd23d.webp"
                                            loading="lazy " alt="Video DSSDDThumbnail"
                                            class="object-cover rounded-lg border-4 border-gray-300 shadow-lg">
                                        <div id="playButton" class="absolute inset-0 flex items-center justify-center"
                                            bis_skin_checked="1">
                                            <button class="flex items-center justify-center bg-white rounded-full p-1"
                                                style="padding: 6px 7px;">
                                                <i class="fa fa-play text-center text-[14px] text-orange-700"></i>
                                            </button>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="grid md:grid-cols-2 grid-cols-1 gap-4 justify-between">
                            <div class="text-[15px] py-2 text-left font-[600] grid grid-cols-3 gap-2 border-b border-purple"
                                bis_skin_checked="1">
                                <p class="col-span-2 text-red-600">9: Entrepreneurship Mentorship
                                    <span class="block text-[12px] text-gray-800 font-[600]">Mentorship from Young
                                        Successful Entrepreneurs to set up a sustainable &amp; scalable Business from
                                        scratch at both Freelance &amp; Entrepreneur level</span>
                                </p>
                                <div class="relative h-fit mx-auto mb-4 mt-2  " bis_skin_checked="1">
                                    <a target="_blank"
                                        href="https://www.youtube.com/watch?v=pdffXkaWqVg&amp;feature=youtu.be">
                                        <img id="videoThumbnail"
                                            src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1719487388ezgif.com-resize (36).webp"
                                            loading="lazy " alt="Videodfvdfv Thumbnail"
                                            class="object-cover rounded-lg border-4 border-gray-300 shadow-lg">
                                        <div id="playButton" class="absolute inset-0 flex items-center justify-center"
                                            bis_skin_checked="1">
                                            <button class="flex items-center justify-center bg-white rounded-full p-1"
                                                style="padding: 6px 7px;">
                                                <i class="fa fa-play text-center text-[14px] text-orange-700"></i>
                                            </button>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="text-[15px] py-2 text-left font-[600] grid grid-cols-3 gap-2 border-b border-purple"
                                bis_skin_checked="1">
                                <p class="col-span-2 text-red-600">10: Placement Support
                                    <span class="block text-[12px] text-gray-800 font-[600]">Get 3 in 1 Placement support
                                        through Placement Drives, Premium access to the Job portal &amp; Personalized Job
                                        Consulting</span>
                                </p>
                                <div class="relative h-fit mx-auto mb-4 mt-2  " bis_skin_checked="1">
                                    <a target="_blank" href="https://www.youtube.com/shorts/KTb2gD30FNw">
                                        <img id="videoThumbnail"
                                            src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1719487296ezgif.com-resize (34).webp"
                                            loading="lazy " alt="Videodvdffvdf Thumbnail"
                                            class="object-cover rounded-lg border-4 border-gray-300 shadow-lg">
                                        <div id="playButton" class="absolute inset-0 flex items-center justify-center"
                                            bis_skin_checked="1">
                                            <button class="flex items-center justify-center bg-white rounded-full p-1"
                                                style="padding: 6px 7px;">
                                                <i class="fa fa-play text-center text-[14px] text-orange-700"></i>
                                            </button>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="mt-4 relative" bis_skin_checked="1">
                    <img class="agota_image sticky" loading="lazy " alt="agota ddd frame"
                        style="width:100%; max-width:500px; top:80px; margin: auto;"
                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753941681ezgif.com-resize.webp">
                </div>
            </div>
        </div>
    </section>
    <section class="py-12 bg-gray-100 mx-auto px-4">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-center text-2xl md:text-3xl font-semibold mb-10 text-[#da2028] capitalize mt-4 mb-4"> Why
                Kazumi Japanese &amp; Culture 文化 School?
            </h2>
            <div class="py-8">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4 text-center">
                    <div
                        class="bg-white shadow-md rounded-lg p-4 flex flex-col items-center col-span-1 sm:col-span-1 md:col-span-1">
                        <div class="flex items-center justify-center mb-2">
                            <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753789102Trainerteaching.jpg"
                                loading="lazy " alt="wwww">
                        </div>
                        <h3 class="text-xl font-[600] text-red-600 mt-4">Native Japanese Trainers</h3>
                        <p class="text-gray-700 text-[14px] mt-2">Learn from certified, highly 経験豊富 (keiken hōfu) and 情熱的な
                            (jōnetsu-teki na) faculties.</p>
                    </div>
                    <div class="bg-white shadow-md rounded-lg p-4 flex flex-col items-center">
                        <div class="flex items-center justify-center mb-2">
                            <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753789154examsheet.jpg"
                                loading="lazy " alt="course">
                        </div>
                        <h3 class="text-xl font-[600] text-red-600 mt-4">JLPT Intensive Course</h3>
                        <p class="text-gray-700 text-[14px] mt-2">Excel in the JLPT with our 専門的な (Senmon-teki na)
                            modules, mock tests, personalized coaching, and JLPT-focused materials sourced directly from
                            Japan.</p>
                    </div>
                    <div class="bg-white shadow-md rounded-lg p-4 flex flex-col items-center">
                        <div class="flex items-center justify-center mb-2">
                            <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753881317elearning.jpg"
                                loading="lazy " alt="access">
                        </div>
                        <h3 class="text-xl font-[600] text-red-600 mt-4">Access to E-learning Portal</h3>
                        <p class="text-gray-700 text-[14px] mt-2">Kazumi partners with <span>
                                <a href="https://examopedia.com/"
                                    class="inline-flex text-[12px] font-bold text-orange-500 items-center gap-1"><img
                                        src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1734598082examopedia_logo.webp"
                                        loading="lazy " alt="Examopedia Logo" class="h-4">Examopedia</a></span><a
                                href="https://examopedia.com/"
                                class="inline-flex text-[12px] font-bold text-orange-500 items-center gap-1"> </a>
                            , a comprehensive E-learning portal that provides future updates, PPTs, projects, quizzes, 模擬試験
                            (Mogi Shiken), question banks, assessments and interactive forums.</p>
                    </div>
                    <div class="bg-white shadow-md rounded-lg p-4 flex flex-col items-center">
                        <div class="flex items-center justify-center mb-2">
                            <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753789196OccupationalPrograms.jpg"
                                loading="lazy " alt="offer">
                        </div>
                        <h3 class="text-xl font-[600] text-red-600 mt-4">Japanese Occupational Courses</h3>
                        <p class="text-gray-700 text-[14px] mt-2">At Kazumi, we offer programs that will help you build
                            corporate, business and 職場 (shokuba) skills required to secure good 仕事 (shigoto)
                            internationally.</p>
                    </div>
                    <div class="bg-white shadow-md rounded-lg p-4 flex flex-col items-center">
                        <div class="flex items-center justify-center mb-2">
                            <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753774339talking.jpg"
                                loading="lazy " alt="">
                        </div>
                        <h3 class="text-xl font-[600] text-red-600 mt-4">Internship for Japanese Language</h3>
                        <p class="text-gray-700 text-[14px] mt-2">Kazumi provides Internship Support via
                            <span><a href="https://yuvaintern.com//"
                                    class="inline-flex text-[12px] font-bold text-orange-500 items-center gap-1"><img
                                        src="https://yuvaintern.com/assets/img/logo.png" loading="lazy "
                                        alt="Yuva Intern Logo" class="h-4">Yuva Intern</a></span><a
                                href="https://yuvaintern.com//"
                                class="inline-flex text-[12px] font-bold text-orange-500 items-center gap-1"> </a>
                            , India’s first バーチャル (bācharu) internship platform where you get to select from the best
                            curated internships that match your skills and interests.
                        </p>
                    </div>
                    <div class="bg-white shadow-md rounded-lg p-4 flex flex-col items-center">
                        <div class="flex items-center justify-center mb-2">
                            <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753881283study.jpg" loading="lazy "
                                alt="study">
                        </div>
                        <h3 class="text-xl font-[600] text-red-600 mt-4">Study Abroad &amp; Recruitment Services</h3>
                        <p class="text-gray-700 text-[14px] mt-2">Kazumi offers study abroad and 就職支援 (Shūshoku Shien) via
                            <a href="https://leochase.com/"
                                class="inline-flex text-[12px] font-bold text-orange-500 items-center gap-1"><img
                                    src="https://leochase.com/wp-content/uploads/2025/04/Logo_Leo-Chase_F.png"
                                    loading="lazy " alt="Leo &amp; Chase Logo" class="h-3">Leo &amp; Chase </a>
                            , no. 1 recruitment provider, assisting from visa application to settling abroad.
                        </p>
                    </div>
                    <div class="bg-white shadow-md rounded-lg p-4 flex flex-col items-center">
                        <div class="flex items-center justify-center mb-2">
                            <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753881176agota2.jpg" loading="lazy "
                                alt="Unique">
                        </div>
                        <h3 class="text-xl font-[600] text-red-600 mt-4">Unique 10 in 1 Program: Agota™ Framework</h3>
                        <p class="text-gray-700 text-[14px] mt-2">Learn through innovative teaching methods that make
                            learning easy and 実践的 (Jissen-teki). This framework essentially promotes the 能力 (Nōryoku)
                            development and キャリア (Kyaria) development.</p>
                    </div>
                    <div class="bg-white shadow-md rounded-lg p-4 flex flex-col items-center">
                        <div class="flex items-center justify-center mb-2">
                            <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753789015orconnections.jpg"
                                loading="lazy " alt="globle">
                        </div>
                        <h3 class="text-xl font-[600] text-red-600 mt-4">Global Presence</h3>
                        <p class="text-gray-700 text-[14px] mt-2">With offices in 4+ countries, UK, USA, Middle East, and
                            India, Kazumi is a global brand, offering a global learning 環境 (kankyō), with around 1200+
                            international 学生 (gakusei).</p>
                    </div>
                    <div class="bg-white shadow-md rounded-lg p-4 flex flex-col items-center">
                        <div class="flex items-center justify-center mb-2">
                            <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753774903Network.jpg"
                                loading="lazy " alt="international">
                        </div>
                        <h3 class="text-xl font-[600] text-red-600 mt-4">International Alumni Network</h3>
                        <p class="text-gray-700 text-[14px] mt-2">Join a diverse コミュニティ(Komyuniti) of learners and
                            professionals from around the world.</p>
                    </div>
                    <div class="bg-white shadow-md rounded-lg p-4 flex flex-col items-center">
                        <div class="flex items-center justify-center mb-2">
                            <img src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753774206culture.jpg"
                                loading="lazy " alt="culture two">
                        </div>
                        <h3 class="text-xl font-[600] text-red-600 mt-4">Cultural Training</h3>
                        <p class="text-gray-700 text-[14px] mt-2">Explore 伝統 (Dentō), etiquettes, festivals, and practices
                            used in an authentic environment.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        let isExpanded = false;

        function toggleText() {
            const textContainer = document.getElementById("textContainer");
            const toggleButton = document.getElementById("toggleButton");
            const arrowIcon = document.getElementById("arrowIcon");

            if (isExpanded) {
                // Show truncated text (3 lines)
                textContainer.style.display = "-webkit-box";
                toggleButton.innerText = "Show more";
                arrowIcon.classList.remove("rotate-180"); // Arrow points down
            } else {
                // Show full text
                textContainer.style.display = "block";
                toggleButton.innerText = "Show less";
                arrowIcon.classList.add("rotate-180"); // Arrow points up
            }

            isExpanded = !isExpanded;
        }

    function openDownloadBrochureModal() {
        document.getElementById("change-modal-text").innerHTML = "REQUEST DOWNLOAD BROCHURE";
    }

    function openApplyNowModal() {
        document.getElementById("change-modal-text").innerHTML = "REQUEST APPLY NOW";
    }
    </script>
@endsection
