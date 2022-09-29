<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href={{ asset('css/app.css') }} rel="stylesheet">
</head>
<body>
  <header id="nav" class="sticky top-0 bg-transparent  flex flex-row  px-8 py-3 items-center justify-between transition-all transition-duration-200">
    <div class="h-full pt-2">
      <img class="w-24" src="{{ url('/site-logo.png') }}" alt="site logo">
    </div>
    <nav>
    <ul class="flex flex-row gap-5 text-slate-700 items-center justify-center">
        <li><a class="text-lg  hover:text-primary" href="/listings">Jobs</a></li>
        <li><a class="text-lg  hover:text-primary" href="/about">About</a></li>
       
      </ul>
    </nav>
    <nav>
      <ul class="flex flex-row gap-5 text-slate-700 items-center">
       
        <li><a class="button-primary" href="/register">Register</a></li>
        <li><a class="button-primary" href="/login">Login</a></li>
      </ul>
    
    </nav>
  </header>
  <main class="mt-10 container">
    @yield('content');
  </main>
  <script src="//unpkg.com/alpinejs" defer></script>
  <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>