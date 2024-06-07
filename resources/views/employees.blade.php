<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/style.css"/>
    <title>Employees</title>
</head>
<body>

    <header>
        <i><h1>Employees</h1></i>
        <p>Listing all employees of Enterprise.SA</p>
    </header>

    <section>
        @foreach($employees as $e)
        <div class="myBox">
            <p> <i>{{$e->first_name}}  {{$e->last_name}}</i></p>
            <p>Born in: <i>{{$e->birth_date}}</i></p>
            <p><i>{{$e->gender}}</i></p>
            <p>${{$e->salary}},00</p>
            <p>Role: <i>{{$e->dept_name}}</i></p>
        </div>
        @endforeach
    </section>

</body>
</html>