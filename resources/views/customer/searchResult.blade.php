<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Customer Search Detail</h1>
        <ul>
            <li>Name : {{ $customer->name }}</li>
            <li>Email : {{ $customer->email }}</li>
        </ul>
    </div>
</body>
</html>
