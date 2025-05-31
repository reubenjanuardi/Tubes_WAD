<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','Dashboard UKM')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen font-sans">

    <!-- Navbar -->
    <nav class="bg-white shadow px-6 py-4 flex justify-between items-center">
        <a href="{{ url('/dashboard') }}">
            <h1 class="text-xl font-semibold text-gray-800">UKM Dashboard</h1>
        </a>
        <div class="flex items-center gap-4">
            <span class="text-gray-700 text-sm">👤 {{ Auth::user()->name }}</span>
            <form method="POST" action="/logout">
                @csrf
                <button class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 text-sm">Logout</button>
            </form>
        </div>
    </nav>

    <!-- Flash Message -->
    @if (session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 m-4 rounded">
        {{ session('success') }}
    </div>
    @elseif (session('error'))
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 m-4 rounded">
        {{ session('error') }}
    </div>
    @endif

    <!-- Content -->
    <main class="p-6">
        @yield('content')
    </main>

</body>

</html>