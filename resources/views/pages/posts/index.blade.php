<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="d-flex justify-content-end align-items-middle mb-4">
     
    </div>
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Name.</th>
                <th>Description.</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $key => $post)
            <tr>
                <td> {{ $key +1 }}</td>
                <td> {{ $post->name }}</td>
                <td> {{ $post->description }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>