<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel React App</title>

    <!-- Include Vite or Mix styles if needed -->
    @vite(['resources/css/app.css', 'resources/js/app.jsx']) <!-- For Vite -->
    {{-- <link rel="stylesheet" href="{{ mix('css/app.css') }}"> <!-- For Mix (if applicable) --> --}}
</head>
<body>
    <div id="app"></div> <!-- React renders into this div -->

    <!-- Include Vite or Mix scripts -->
    @vite('resources/js/app.jsx') <!-- For Vite -->
    {{-- <script src="{{ mix('js/app.js') }}"></script> <!-- For Mix (if applicable) --> --}}
</body>
</html>
