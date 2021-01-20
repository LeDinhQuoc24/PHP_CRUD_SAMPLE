
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/bootstrap.min.css"> <!---  css file  --->
    <script type="text/javascript" src="/js/jquery.min.js"></script>

    <link rel="stylesheet" href="{{asset('user.css')}}">

</head>
<body>

<h1> Create new User </h1>
<a href="/users" class="btn btn-primary">Back</a>
<table class="table table-striped ">
    @if(Session::has('user_created'))
        <div class="alert alert-success" role="alert">
            {{Session::get('user_created')}}
        </div>
    @endif
    <form method="POST" action="{{route('user.create')}}">
        <input type="hidden" name="id" >
        @csrf
        <tr>
            <td>Name</td>
            <td>
                <input type="text" name ="name" class="form-control" placeholder="Enter Name">
            </td>
        </tr>
        <tr>
            <td>Email</td>
            <td>
                <input type="email" name ="email" class="form-control" placeholder="Enter Email">
            </td>
        </tr>
        <tr>
            <td>Password</td>
            <td>
                <input type="email" name ="password" class="form-control" placeholder="Enter Email">
            </td>
        </tr>
        <button type="submit" class="btn btn-success">Create</button>
    </form>


</table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>


