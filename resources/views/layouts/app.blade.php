<!DOCTYPE html>
<html lang="en">
<script src="https://cdn.tailwindcss.com"></script>

<head>
 <title>
        @if(isset($course))
            {{ $course->course_meta_title }}
        @else
            @yield('title', 'Best Japanese Language Institute – Learn Japanese with Experts | Kazumi')
        @endif
    </title>

    <meta name="title" content="
        @if(isset($course))
            {{ $course->course_meta_title }}
        @else
            @yield('title', 'Best Japanese Language Institute – Learn Japanese with Experts | Kazumi')
        @endif
    ">

    <meta name="description" content="
        @if(isset($course))
            {{ $course->course_meta_description }}
        @else
            @yield('meta_description', 'Kazumi is the best Japanese language institute, offering JLPT, Business Japanese, Cross-Cultural Training & Crash Courses. Learn from certified experts!')
        @endif
    ">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('schema')
    <meta name="google-site-verification" content="gUS8qh-3S2RnKzni6tbYkW5TQBA2CP3drX_05Id_IZA" />
   
   <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="{{ $course->og_title ?? 'Kazumi School - India’s Leading Japanese Language Institute' }}">
    <meta property="og:description" content="{{ $course->og_description ?? 'Kazumi, India’s leading Japanese language institute, offers expert-led courses from beginner (N5) to advanced (N1) levels. Start learning Japanese today!' }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ $course->og_image ?? 'https://d1d5cy0fmpy9m8.cloudfront.net/images/1755407733logo.webp' }}">
    <meta property="og:site_name" content="Kazumi School">
    <!-- Standard favicon (Google prefers this) -->
   <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <!-- PNG favicons -->
    <link rel="icon" type="image/png" sizes="16x16" href="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753077423favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://d1d5cy0fmpy9m8.cloudfront.net/images/1756187139i-favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="48x48" href="https://d1d5cy0fmpy9m8.cloudfront.net/images/1756186965favicon-48x48.png">
    <link rel="icon" type="image/png" sizes="192x192"
        href="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753077667android-chrome-192x192.png">
    <link rel="icon" type="image/png" sizes="512x512"
        href="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753077574android-chrome-512x512.png">
    <!-- Apple Touch Icon -->
    <link rel="apple-touch-icon" sizes="180x180"
        href="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753077494apple-touch-icon.png">

    @yield('canonical')

    <!-- Manifest (optional, for PWA support) -->
    <link rel="manifest" href="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753077533site.webmanifest">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,900;1,100;1,200;1,300;1,400;1,500;1,600&display=swap"
        rel="stylesheet">

    @if(isset($course) && count($faqs) > 0)
    <!-- FAQ Schema-->
    <script  async  type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "FAQPage",
            "mainEntity": [
                @foreach($faqs as $faq) {
                    "@type": "Question",
                    "name": "{{$faq->faq_question}}",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "{{strip_tags(str_replace('"
                        ', "'
                        ", $faq->faq_answer))}}"
                    }
                }
                @if(!$loop->last), @endif
                @endforeach
            ]
        }
    </script>
    @endif

    <!-- Google tag (gtag.js) -->
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-957633606"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-957633606');
</script>

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-MZK8H8ZT');
    </script>
    <!-- End Google Tag Manager -->
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MZK8H8ZT" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!-- Include the header -->
    @include('layouts.header')
    <!-- Main content -->
    <div class="">
        @yield('content')
    </div>
    <!-- Optional footer -->
    @include('layouts.footer')
</body>

</html>
