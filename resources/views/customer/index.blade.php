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
        <h1>Add Customers</h1>
            <form action="{{ route('customer.save') }}" method="POST">
            @csrf
            <label>Name</label>
            <input type="text" name="name">
            <br>
            <label>Email</label>
            <input type="text" name="email">
            <br>
            <input type="submit">
        </form>
    </div>
</body>
</html>