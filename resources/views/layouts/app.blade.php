<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ 'CoachCodoiu'}} - {{ auth()->user()?->name ?? 'Antrenor personal' }}</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;600;900&family=Playfair+Display:ital,wght@1,700&display=swap" rel="stylesheet">
  @stack('styles')
  <style>
    body { font-family: 'Inter', system-ui, sans-serif; }
    .playfair { font-family: 'Playfair Display', serif; }

    input:-webkit-autofill, input:-webkit-autofill:hover, input:-webkit-autofill:focus, input:-webkit-autofill:active, textarea:-webkit-autofill { -webkit-box-shadow: 0 0 0 30px #1f2937 inset !important; -webkit-text-fill-color: #ffffff !important; transition: background-color 5000s ease-in-out 0s; }
  </style>
</head>
<body class="bg-gray-950 text-gray-100 min-h-screen flex flex-col">
  @include('partials.header')
  <main class="flex-1 pt-28 md:pt-30">
    {{ $slot }}
  </main>
  @include('partials.footer')
  @stack('scripts')
</body>
</html>
