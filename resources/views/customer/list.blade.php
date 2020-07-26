<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        }
        th, td {
        padding: 5px;
        text-align: left;
        }
    </style>
</head>
<body>
    <table style="width:50%; margin:0 auto;">
        <tr>
        <th colspan="3">
            <form action="{{ route('customer.search') }}" method="post">
                @csrf
                <input type="text" name="id" placeholder="Enter Customer Name">
                <input type="submit">
            </form>
        </th>
        </tr>
        @if(session('error'))
        <tr>
            <th colspan="3" style="background: #f56666">{{ session('error') }}</th>
        </tr>
        @endif
        <tr>
        <th colspan="3">Customers Amount : {{ count($customers) }}</th>
        </tr>
        <tr>
          <th>No</th>
          <th>Name</th>
          <th>Email</th>
        </tr>
        @foreach ($customers as $customer)
        <tr>
          <td>{{$loop->iteration}}</td>
          <td>{{$customer->name}}</td>
          <td>{{$customer->email}}</td>
        </tr>
        @endforeach
      </table>
</body>
</html>
