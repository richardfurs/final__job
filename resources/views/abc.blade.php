<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <ul>


       @foreach ($uzdevumi as $uzdevums)

        <li>{{ $uzdevums->description }}</li>

      @endforeach

    </ul>

  </body>
</html>
