<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
    <link rel="stylesheet" href="/css/app.css">
    <script src="" defer></script>
</head>
<body class="bg-gray-900">

<header class="border-b border-gray-800">
    <nav class="container mx-auto flex flex-col lg:flex-row items-center justify-between px-4 py-6">
        <div class="flex flex-col lg:flex-row items-center">
            <a href="/">
                <img src="/twitch.jpg" alt="laracasts" class="w-32 flex-none">
            </a>
            <ul class="flex ml-20 lg:ml-16 space-x-8 mt-6 lg:mt-0">
                <li><a href="/our_choice" class="hover:text-gray-400">Our Choice</a></li>
                <li><a href="/my_games" class="hover:text-gray-400">My games</a></li>
            </ul>
        </div>
    </nav>
</header>
<hr>
<div class="container">
    <div class="row">
        @inertia
    </div>
</div>
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
