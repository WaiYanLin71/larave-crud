<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}">
  <title>Spa</title>
  <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
</head>
<body>
  @include('components.delete-modal')
  @include('components.edit-modal')
  @yield('content')
  <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('js/helper.js')}}"></script>
  <script src="{{ asset('js/app.js ') }}"></script>
</body>
</html>