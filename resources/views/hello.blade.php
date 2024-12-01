<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://matcha.mizu.sh/matcha.css">
    <title>Document</title>
</head>
<body>
        <div>
            <!-- The best way to take care of the future is to take care of the present moment. - Thich Nhat Hanh -->
        <h2> Hello World </h2>
        @include('partial.header')
        @foreach ($tasks as $task )
        <div>
            <p>{{  $task  ['id']}} - {{  $task  ['name']}}</p>
            <p>{{  $task ['description']}}</p>
            </div>
        @endforeach
        </div>

</body>
</html>