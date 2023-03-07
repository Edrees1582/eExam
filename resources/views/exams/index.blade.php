<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Exams - index</title>
    </head>
    <body>
        @foreach ($exams as $exam)
            {{ $exam->title }}
        @endforeach
    </body>
</html>
