<!DOCTYPE html>
<html lang="en">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'VetCare | Veterinary Clinic')</title>
    
</head>
<body 

    class="bg-gray-100 text-gray-800 font-[Poppins]">
    @include('partials.navbar')

    <main class="container">
        @yield('content')
    </main>

</body>
</html>
