<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDo</title>
</head>
<body>
    <h1>ToDo</h1>
    <ul>
    @foreach ($entries as $entry)
        <li>{{$entry->title}}</li>
    @endforeach
    </ul>
</body>
</html>
