<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Index Page</title>
</head>

<body>

    <div class="container-fluid">

        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-2">
                <div class="container">
                    <a class="navbar-brand" style="font-weight: 700" href="">INDEX PAGE</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            {{--  <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Dropdown
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>  --}}
                        </ul>

                        <form class="d-flex">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">

                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <button class="btn btn-success" type="submit">LOGIN / REGISTER</button>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="{{ route('login_get') }}">LOGIN</a></li>
                                        <li><a class="dropdown-item" href="{{ route('register_get') }}">REGISTER</a></li>
                                    </ul>
                                </li>
                            </ul>

                            {{-- <button class="btn btn-success" type="submit">LOGIN</button> --}}
                        </form>

                    </div>
                </div>
            </nav>
        </div>


        <div class="container">

            <h3 class="card-title p-3">USER LIST</h3>

            <table id="example" class="table table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">User Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php  $count = 1; ?>
                    @foreach (App\Models\User::all() as $item)
                        <tr>
                            <th scope="row">{{ $count++ }}</th>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->user_name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>
                                <a href="{{ route('delete_user', $item->id) }}" class=""><button class="btn btn-outline-danger">Delete</button></a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>


    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>

</html>
