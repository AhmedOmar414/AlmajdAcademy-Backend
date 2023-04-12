<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Billings Report</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>

    <style>
        table, td, th {
            border: 1px solid #ddd;
            text-align: left;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 15px;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center">Elmajd Academy</h1>
    <h3 style="text-align: center">Family Monthly Report</h3>
<table style="margin-right: 500px">
    <thead>
    <tr>
        <th>Tutor</th>
        <th>Currency</th>
        <th>Hourly</th>
        <th>day</th>
        <th>Month</th>
        <th>Year</th>
        <th>Duration</th>
        <th>Total</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($billings as $billing)
        <tr>
            <td style="font-family: 'Arabic Typesetting'">{{ $billing->tutor->email ?? '' }}</td>
            <td>{{ $billing->currency->symbol }}</td>
            <td>{{ $billing->hour_rate}}</td>
            <td>{{ \Carbon\Carbon::parse($billing->created_at)->format('d/m/Y') }}</td>
            <td>{{ $billing->month }}</td>
            <td>{{ $billing->year }}</td>
            <td>{{ $billing->lecture_duration }} hour</td>
            <td>{{ $billing->amount }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
