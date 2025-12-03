<section class="bg-red-50 py-10">
    <div class="max-w-6xl mx-auto px-4">
        <h2 class="text-center text-2xl md:text-3xl font-semibold mb-10 text-orange-600 capitalize mt-4 mb-4">
            Join Henry Harvin® Community of 4,60,000+ Professionals
        </h2>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                @foreach ($feedbacks as $feedback)
                    <div
                        class="swiper-slide bg-white rounded-lg shadow-lg border border-orange-200 flex flex-col items-center text-center">
                        <img src="{{ $feedback['image'] }}" alt="{{ $feedback['name'] }}"
                            class="w-32 h-32 rounded-full object-cover mt-4 shadow-md" />

                        <div class="bg-yellow-100 p-4 text-sm text-gray-800">
                            {{ $feedback['text'] }}
                            <p class="text-orange-600 font-medium mt-2">- {{ $feedback['name'] }}</p>
                        </div>

                        <div class="bg-orange-700 text-white font-semibold w-full py-2">
                            {{ $feedback['role'] }}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
