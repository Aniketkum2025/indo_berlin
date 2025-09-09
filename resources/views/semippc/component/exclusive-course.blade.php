    <section class="bg-gray-50 py-12 px-4">
        <div class="max-w-5xl mx-auto">
            <h2 class="text-center text-3xl font-[600] text-red-600 mb-10">
                Henry Harvin® Exclusive Course Offerings
            </h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($cards as $card)
                    <div class="relative p-6 rounded-lg shadow overflow-hidden"
                        style="background-color: {{ $card['bgColor'] ?? '#fff' }}; color: {{ $card['textColor'] ?? '#000' }};">
                        <h3 class="text-lg font-bold mb-2">{{ $card['title'] }}</h3>
                        <p class="text-sm pr-12">{{ $card['description'] }}</p>
                        
                        <div class="absolute bottom-0 right-0 w-20 h-20 bg-no-repeat bg-contain bg-bottom opacity-90"style="background-image: url('{{ $card['imageUrl'] }}');"></div>
                    </div>
                @endforeach
            </div>

            <!-- CTA Button -->
            <div class="text-center mt-10">
                <a href="#brochureForm"
                    class="inline-flex items-center px-6 py-3 bg-red-600 text-white rounded-md shadow hover:bg-red-800 transition">
                    Get Brochure <i class="fa fa-book ml-2"></i>
                </a>
            </div>
        </div>
    </section>