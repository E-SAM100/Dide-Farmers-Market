<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <style>
    .fade-in {
      opacity: 0;
      transform: translateY(20px);
      animation: fadeInUp 1s forwards;
    }

    @keyframes fadeInUp {
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .scale-up {
      transform: scale(0.9);
      animation: scaleUp 1s forwards;
    }

    @keyframes scaleUp {
      to {
        transform: scale(1);
      }
    }

    .footer {
      background-color: #1a202c;
      color: white;
      padding: 20px;
      text-align: center;
    }

    .footer a {
      color: #38a169;
      text-decoration: none;
    }

    .footer a:hover {
      text-decoration: underline;
    }

    .card {
      border: 1px solid #e2e8f0;
      border-radius: 8px;
      padding: 20px;
      text-align: center;
      transition: transform 0.2s;
    }

    .card:hover {
      transform: translateY(-10px);
    }

    .section-title {
      text-align: center;
      margin-bottom: 20px;
    }
  </style>
</head>
<body>
  <div class="bg-white">
    <header class="absolute inset-x-0 top-0 z-50 fade-in">
      <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
        <div class="flex lg:flex-1">
          <a href="#" class="-m-1.5 p-1.5">
            <span class="sr-only">DiDE</span>
            <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=green&shade=600" alt="DiDE Logo">
          </a>
        </div>
        <div class="flex lg:hidden">
          <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
            <span class="sr-only">Open main menu</span>
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
          </button>
        </div>
        <div class="hidden lg:flex lg:gap-x-12">
          <a href="#product" class="text-sm font-semibold leading-6 text-gray-900">Product</a>
          <a href="#features" class="text-sm font-semibold leading-6 text-gray-900">Features</a>
          <a href="#about" class="text-sm font-semibold leading-6 text-gray-900">About</a>
          <a href="#contact" class="text-sm font-semibold leading-6 text-gray-900">Contact</a>
          <a href="#developers" class="text-sm font-semibold leading-6 text-gray-900">Developers</a>
        </div>
        @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                @endif
            @endauth
        </div>
    @endif

      </nav>
    </header>
  
    <div class="relative isolate px-6 pt-14 lg:px-8 fade-in">
      <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
        <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
      </div>
      <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
        <div class="hidden sm:mb-8 sm:flex sm:justify-center">
          <div class="relative rounded-full px-3 py-1 text-sm leading-6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20 scale-up">
            Jump right in and become a Farmer on DiDE. <a href="#" class="font-semibold text-green-600"><span class="absolute inset-0" aria-hidden="true"></span>Read more <span aria-hidden="true">&rarr;</span></a>
          </div>
        </div>
        <div class="text-center">
          <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl fade-in">Agricultural Revolution</h1>
          <p class="mt-6 text-lg leading-8 text-gray-600 fade-in">Transform the agricultural sector by connecting farmers and buyers seamlessly.</p>
          <div class="mt-10 flex items-center justify-center gap-x-6 fade-in">
            <a href="#" class="rounded-md bg-green-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-green-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-600">Get started</a>
            <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Learn more <span aria-hidden="true">→</span></a>
          </div>
        </div>
      </div>
      <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
        <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
      </div>
    </div>
  </div>

  <div id="about" class="bg-gray-100 py-24 sm:py-32 lg:py-40 fade-in">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <div class="section-title">
        <h2 class="text-lg font-semibold leading-8 text-green-600">About Us</h2>
        <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Our Story</p>
      </div>
      <p class="mt-6 max-w-2xl mx-auto text-lg leading-8 text-gray-600">DiDE was founded to revolutionize the agricultural sector by leveraging technology to create seamless connections between farmers and buyers. Our mission is to empower farmers with the tools and platforms they need to thrive in today's market.</p>
    </div>
  </div>

  <div id="features" class="bg-white py-24 sm:py-32 lg:py-40 fade-in">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <div class="sm:text-center">
        <h2 class="text-lg font-semibold leading-8 text-green-600">Features</h2>
        <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">What We Offer</p>
      </div>
  
      <div class="mt-20 space-y-16">
        <div class="relative flex flex-col gap-6 sm:flex-row md:flex-col lg:flex-row scale-up">
          <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-green-500 text-white sm:shrink-0">
            <svg class="h-8 w-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3 3v18h18V3H3z"></path>
            </svg>
          </div>
          <div class="sm:min-w-0 sm:flex-1">
            <p class="text-lg font-semibold leading-8 text-gray-900">Feature 1</p>
            <p class="mt-2 text-base leading-7 text-gray-600">Detailed description of Feature 1.</p>
          </div>
        </div>
    
        <div class="relative flex flex-col gap-6 sm:flex-row md:flex-col lg:flex-row scale-up">
          <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-green-500 text-white sm:shrink-0">
            <svg class="h-8 w-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6 0h-4.28A6.477 6.477 0 0018 12c0-3.59-2.91-6.5-6.5-6.5S5 8.41 5 12a6.5 6.5 0 0012 3h4m0 0l-3 3m3-3l-3-3"></path>
            </svg>
          </div>
          <div class="sm:min-w-0 sm:flex-1">
            <p class="text-lg font-semibold leading-8 text-gray-900">Feature 2</p>
            <p class="mt-2 text-base leading-7 text-gray-600">Detailed description of Feature 2.</p>
          </div>
        </div>
    
        <div class="relative flex flex-col gap-6 sm:flex-row md:flex-col lg:flex-row scale-up">
          <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-green-500 text-white sm:shrink-0">
            <svg class="h-8 w-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6 0h-4.28A6.477 6.477 0 0018 12c0-3.59-2.91-6.5-6.5-6.5S5 8.41 5 12a6.5 6.5 0 0012 3h4m0 0l-3 3m3-3l-3-3"></path>
            </svg>
          </div>
          <div class="sm:min-w-0 sm:flex-1">
            <p class="text-lg font-semibold leading-8 text-gray-900">Feature 3</p>
            <p class="mt-2 text-base leading-7 text-gray-600">Detailed description of Feature 3.</p>
          </div>
        </div>
    
        <div class="relative flex flex-col gap-6 sm:flex-row md:flex-col lg:flex-row scale-up">
          <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-green-500 text-white sm:shrink-0">
            <svg class="h-8 w-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6 0h-4.28A6.477 6.477 0 0018 12c0-3.59-2.91-6.5-6.5-6.5S5 8.41 5 12a6.5 6.5 0 0012 3h4m0 0l-3 3m3-3l-3-3"></path>
            </svg>
          </div>
          <div class="sm:min-w-0 sm:flex-1">
            <p class="text-lg font-semibold leading-8 text-gray-900">Feature 4</p>
            <p class="mt-2 text-base leading-7 text-gray-600">Detailed description of Feature 4.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div id="contact" class="bg-gray-100 py-24 sm:py-32 lg:py-40 fade-in">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <div class="section-title">
        <h2 class="text-lg font-semibold leading-8 text-green-600">Contact Us</h2>
        <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Get in Touch</p>
      </div>
      <p class="mt-6 max-w-2xl mx-auto text-lg leading-8 text-gray-600">We'd love to hear from you! Whether you have a question about features, trials, pricing, or anything else, our team is ready to answer all your questions.</p>
      <form class="mt-10 max-w-xl mx-auto">
        <div class="grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8">
          <div>
            <label for="first-name" class="block text-sm font-medium text-gray-700">First name</label>
            <div class="mt-1">
              <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="py-3 px-4 block w-full shadow-sm text-gray-900 border-gray-300 rounded-md">
            </div>
          </div>
          <div>
            <label for="last-name" class="block text-sm font-medium text-gray-700">Last name</label>
            <div class="mt-1">
              <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="py-3 px-4 block w-full shadow-sm text-gray-900 border-gray-300 rounded-md">
            </div>
          </div>
          <div>
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <div class="mt-1">
              <input type="email" name="email" id="email" autocomplete="email" class="py-3 px-4 block w-full shadow-sm text-gray-900 border-gray-300 rounded-md">
            </div>
          </div>
          <div>
            <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
            <div class="mt-1">
              <input type="text" name="phone" id="phone" autocomplete="tel" class="py-3 px-4 block w-full shadow-sm text-gray-900 border-gray-300 rounded-md">
            </div>
          </div>
          <div class="sm:col-span-2">
            <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
            <div class="mt-1">
              <textarea id="message" name="message" rows="4" class="py-3 px-4 block w-full shadow-sm text-gray-900 border-gray-300 rounded-md"></textarea>
            </div>
          </div>
        </div>
        <div class="mt-10">
          <button type="submit" class="w-full py-3 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">Send message</button>
        </div>
      </form>
    </div>
  </div>
  
  <div id="developers" class="bg-white py-24 sm:py-32 lg:py-40 fade-in">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <div class="section-title">
        <h2 class="text-lg font-semibold leading-8 text-green-600">Meet the Developers</h2>
        <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Our Talented Team</p>
      </div>
      <div class="mt-10 grid gap-8 lg:grid-cols-2">
        <div class="card">
          <img class="mx-auto h-24 w-24 rounded-full" src="https://via.placeholder.com/100" alt="Developer 1">
          <h3 class="mt-6 text-lg font-medium text-gray-900">Developer 1</h3>
          <p class="text-base text-gray-500">Lead Developer</p>
          <p class="mt-4 text-base text-gray-600">Description of Developer 1.</p>
        </div>
        <div class="card">
          <img class="mx-auto h-24 w-24 rounded-full" src="https://via.placeholder.com/100" alt="Developer 2">
          <h3 class="mt-6 text-lg font-medium text-gray-900">Developer 2</h3>
          <p class="text-base text-gray-500">Senior Developer</p>
          <p class="mt-4 text-base text-gray-600">Description of Developer 2.</p>
        </div>
      </div>
    </div>
  </div>
  
  <footer class="footer">
    <div class="container mx-auto px-6 lg:px-8">
      <p class="text-base">&copy; 2024 DiDE. All rights reserved.</p>
      <p class="text-base mt-2">
        <a href="#product">Product</a> | 
        <a href="#features">Features</a> | 
        <a href="#about">About</a> | 
        <a href="#contact">Contact</a> | 
        <a href="#developers">Developers</a>
      </p>
    </div>
  </footer>
</body>
</html>
