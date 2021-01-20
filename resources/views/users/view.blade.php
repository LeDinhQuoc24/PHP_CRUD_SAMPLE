
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/bootstrap.min.css"> <!---  css file  --->
    <script type="text/javascript" src="/js/jquery.min.js"></script>

    <link rel="stylesheet" href="{{asset('user.css')}}">

</head>
<body>

<h1> Welcome {{$userView->name}} </h1>
<a href="/users" class="btn btn-primary">Back</a>
<table class="table table-striped ">
    <thead class="table-dark ">
    <th scope="col">ID</th>
    <th scope="col">Name</th>
    <th scope="col">Email</th>
    <th scope="col">Password</th>

    </thead>
    <tbody>
        <tr>
            <td>{{ $userView->id}}</td>
            <td>{{ $userView->name}}</td>
            <td>{{ $userView->email}}</td>
            <td>{{ $userView->password}}</td>

        </tr>

    </tbody>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>


