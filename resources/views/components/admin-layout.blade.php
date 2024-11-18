<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-white scroll-smooth">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>OLM Web | Admin</title>
  <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
  @vite('resources/css/app.css')
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="h-full">
  <div class="flex h-full min-h-full">
    <x-sidebar></x-sidebar>
    <main>
      {{ $slot }}
    </main>
  </div>
</body>

</html>
