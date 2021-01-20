
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/bootstrap.min.css"> <!---  css file  --->
    <script type="text/javascript" src="/js/jquery.min.js"></script>

    <link rel="stylesheet" href="{{asset('user.css')}}">

</head>
<body>

<h1> Edit information {{$userEdit->name}} </h1>
<a href="/users" class="btn btn-primary">Back</a>
<table class="table table-striped ">
    @if(Session::has('user_updated'))
        <div class="alert alert-success" role="alert">
            {{Session::get('user_updated')}}
        </div>
    @endif
    <form method="POST" action="{{route('user.update')}}">
        <input type="hidden" name="id" value="{{$userEdit->id}}">
    @csrf
        <tr>
            <td>Name</td>
            <td>
                <input type="text" name ="name" value="{{ $userEdit->name}}">
            </td>
        </tr>
        <tr>
            <td>Email</td>
            <td>
                <input type="text" name ="email" value="{{ $userEdit->email}}">
            </td>
        </tr>
        <tr>
            <td>Password</td>
            <td>
                <input type="text" name ="password" value="{{ $userEdit->password}}">
            </td>
        </tr>
        <button type="submit" class="btn btn-success">Edit</button>
    </form>


</table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>


