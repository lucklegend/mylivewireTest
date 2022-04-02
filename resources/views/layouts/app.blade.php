<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laravel 8 Livewire Crud Test</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  @livewireStyles
</head>

<body class="bg-slate-50">
  <div>
    @livewire('employees')
  </div>
  @livewireScripts
  <script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script> -->
</body>

</html>