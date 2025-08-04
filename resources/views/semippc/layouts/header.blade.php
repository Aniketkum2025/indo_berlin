 <!DOCTYPE html>
<html lang="en">
<script src="https://cdn.tailwindcss.com"></script>
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753077494apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753077423favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753077423favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="192x192" href="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753077667android-chrome-192x192.png">
    <link rel="icon" type="image/png" sizes="512x512" href="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753077574android-chrome-512x512.png">
    <link rel="manifest" href="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753077533site.webmanifest">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,900;1,100;1,200;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">
</head>
<body>
 <header class="bg-white border-b shadow-sm md:px-6 px-2 py-1 flex flex-row justify-between items-center gap-2">
    <div class="flex items-center space-x-3">
        <a href="/">
            <img class="md:h-[65px] h-[55px] w-auto" src="https://d1d5cy0fmpy9m8.cloudfront.net/images/1753872845ezgif.com-crop.webp" alt="Kazumi Logo">
        </a>
    </div>
    <div class="text-red-600 text-sm text-center lg:text-left md:block hidden">
      <p>460,000+ Trained | 6,700+ Reviews | 7,000+ Live Classes Every Month</p>
      <p>210+ Corporate Partners | 180+ College Partners | 93% Reported Career Benefits</p>
    </div>
    <div class="flex gap-2">
      <button class="bg-red-600 text-white md:px-4 px-2 py-2 rounded-md text-[10px] md:text-sm hover:bg-red-800">Book Free Demo</button>
      <button  data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" type="button" class="bg-red-600 md:block hidden text-white px-4 py-2 rounded-md text-sm hover:bg-red-800">Get Quick Call Back</button>
    </div>
  </header>
