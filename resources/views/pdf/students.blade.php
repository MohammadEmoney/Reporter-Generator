<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>



    <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css" integrity="sha384-vus3nQHTD+5mpDiZ4rkEPlnkcyTP+49BhJ4wJeJunw06ZAp+wzzeBPUXr42fi8If" crossorigin="anonymous">


</head>
<body>

    <style type="text/css">

        body {
            direction: center;
        }
        table td, table th{

            border:1px solid black;

        }

    </style>

    <div class="container">


        <h1 class="text-center text-muted">Students Information</h1>
        <table class="table table-striped text-center">
            <thead class="thead-dark">
                <tr>

                    <th scope="col">No</th>
                    <th scope="col">Student</th>
                    <th scope="col">Country</th>
                    <th scope="col">Detail</th>

                </tr>
            </thead>
            @foreach ($items as $key => $item)

            <tr>

                <td>{{ $item->id }}</td>
                <td>{{ $item->fullname }}</td>
                <td>{{ $item->country }}</td>
                <td>{{ $item->detail }}</td>

            </tr>

            @endforeach

        </table>

    </div>

</body>
</html>
