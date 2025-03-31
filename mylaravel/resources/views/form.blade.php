<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center">Multiplication Table Generator</h1>
    <form action="{{ url('/generate-table') }}" method="POST" class="mt-4">
        @csrf
        <div class="mb-3">
            <label for="number" class="form-label">Enter a Number:</label>
            <input type="number" class="form-control" id="number" name="number" required>
        </div>
        <button type="submit" class="btn btn-primary">Generate Table</button>
    </form>

    @if (isset($table))
        <div class="mt-5">
            <h2 class="text-center">Multiplication Table for {{ $number }}</h2>
            <table class="table table-bordered mt-4">
                <thead>
                    <tr>
                        <th>Expression</th>
                        <th>Result</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($table as $row)
                        <tr>
                            <td>{{ explode('=', $row)[0] }}</td>
                            <td>{{ explode('=', $row)[1] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>
</body>
</html>
