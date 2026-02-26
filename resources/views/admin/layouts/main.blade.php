<!DOCTYPE html>
<html lang="en">

@include('admin.partials.header')

<body>

@include('admin.partials.sidebar')

<main id="main" class="main">

@yield('content')

</main>

@include('admin.partials.footer')

@include('admin.partials.script')

</body>

</html>
