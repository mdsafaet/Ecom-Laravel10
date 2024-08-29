<!DOCTYPE html>
<html lang="en" data-theme="light">

@include('frontend.component.header')

<body class="font-poppins">

 <header class="md:container mx-auto ">

@include('frontend.component.navbar')

 
    </header>

<main class="md:container mx-auto ">
    @yield('content')
    </main>

    <!-- Footer Section -->
 @include('frontend.component.footer')
 
    
</body>   
</html>