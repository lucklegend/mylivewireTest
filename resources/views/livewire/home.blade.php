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

<body>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">
            <h2>Laravel 8 Livewire Crud - laratutorials.com</h2>
          </div>
          <div class="card-body">
            @livewire('posts')
          </div>
        </div>
      </div>
    </div>
  </div>
  @livewireScripts
</body>

</html>