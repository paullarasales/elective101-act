<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Maintenane</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,500;1,600&family=Rubik+Broken+Fax&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')


    <style>
        body {
            font-family: 'Poppins';
        }
    </style>
</head>
<body class="flex items-center justify-center h-screen w-screen flex-col">
    <div class="h-10 w-11/12 flex items-start justify-center">
        <h1 class="text-xl font-semibold tracking-wide">sales.cu</h1>
    </div>
    <div class="h-5/6 w-10/12 flex items-center justify-center flex-col">
        <h1 class="text-5xl font-semibold traking-wide">This site is currently</h1>
        <h1 class="text-5xl font-semibold traking-wide">down for maintenane</h1>
        <h1>We apologize for any inconveniences around</h1>
        <h1>We've almost done.</h1>

        <img src="{{ asset('images/maintenance.gif')}}" class="h-72">
    </div>
</body>
</html>