
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="{{ asset('image/hg-removebg-preview.png')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css"  rel="stylesheet" />  --}}
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
     
            
       

     
      @vite(['resources/css/app.css','resources/js/app.js'])
  
    
            <script src="https://cdn.tailwindcss.com"></script>
            <script src="//unpkg.com/alpinejs" defer></script>
    <title>Theme 4</title>
</head>
{{-- @livewireStyles --}}
<body>
    @include('header')

    @yield('content')
    
    @include('footer')

    {{-- @livewireScripts --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>  --}}
</body>

</html>