<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Laudryin</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 text-gray-800">
    <nav class="bg-blue-700 text-white px-8 py-4">
        <h1 class="text-xl font-bold">Laudryin</h1>
    </nav>
    <main class="max-w-6xl mx-auto p-8"> @yield('content') </main>
</body>

</html>