
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
              rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="/css/bootstrap.min.css"> <!---  css file  --->
        <script type="text/javascript" src="/js/jquery.min.js"></script>

        <link rel="stylesheet" href="{{asset('user.css')}}">

    </head>
    <body>

        <h1> Users </h1>

        <table class="table table-striped ">

            <div class="box" >
                <div class="container-4">
                    <a href="/users/form" class="btn btn-primary">Create</a>

                    <form method="GET" action="{{route('user.name')}}">
                        <input type="text"  name="name" class=" search-input" placeholder="Search by name..." />
                        <button type="submit" ><i class="fa fa-search"></i></button>
                    </form>

                </div>
            </div>

            @if(Session::has('user_deleted'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('user_deleted')}}
                </div>
            @endif
            <thead class="table-dark ">
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col" >Action</th>
            </thead>
            <tbody>
            @foreach($userList as $user)
                <tr>
                    <td>{{ $user->id}}</td>
                    <td>{{ $user->name}}</td>
                    <td>{{ $user->email}}</td>
                    <td>
                        <a href="/users/view/{{$user->id}}" class="btn btn-secondary">View</a>
                        <a href="/users/edit/{{$user->id}}" class="btn btn-success">Edit</a>
                        <a href="/users/delete/{{$user->id}}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    </body>
</html>

