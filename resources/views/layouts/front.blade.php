
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>HMTI</title>
	<link rel="icon" type="image/x-icon" href="/assets/favicon.png" />
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link
		href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,700&display=swap"
		rel="stylesheet" />
	<script src="https://cdn.tailwindcss.com"></script>

	<script
			src="https://kit.fontawesome.com/c748089771.js"
			crossorigin="anonymous"
		></script>
	<link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.4/dist/flowbite.min.css" />
	<script src="/tailwind.config.js"></script>
	<link rel="stylesheet" href="/asstes/css/icofonts.css" />
	@yield('head')


    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

	<x-front.navbar />

    @yield('main')

    <x-front.footer />

	<script src="./js/homepage.js"></script>
	<script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>
</body>
</html>
