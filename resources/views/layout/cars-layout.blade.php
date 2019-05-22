<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <script src="{{ mix('js/app.js') }}"></script>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>Laravel</title>
</head>
  <body>
    <div class="header">
      <h1>
         <a href="{{ URL::route('cars.index') }}">HelloWord</a>
      </h1>
    </div>
      @yield('content')

    <div class="footer">
        <h1>Hello World</h1>
    </div>
  </body>
</html>
