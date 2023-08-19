<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Unipro Software Api Test</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>

<body>
    <table class="table table-dark table-striped-columns">
        <thead>
            <tr>
                <th scope="col" style="color: aqua">Sl.</th>
                <th scope="col" style="color: red">Questions</th>
                <th scope="col" style="color:blue">Answer1</th>
                <th scope="col" style="color:blueviolet">Answer2</th>
                <th scope="col" style="color:green">Answer3</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($questions as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->question }}</td>
                    <td>{{ $item->answer_a }}</td>
                    <td>{{ $item->answer_b }}</td>
                    <td>{{ $item->answer_c }}</td>

                </tr>
            @endforeach

        </tbody>
    </table>
</body>

</html>
