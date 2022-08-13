<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>User Login Page</title>
    </head>

    <style>

        .container-fluid {
            padding: 0;
        }

        .one {
            margin-top: 20px;
            {{--  border: 3px solid rgb(0, 0, 0);  --}}
            border-radius: 0.45rem;
            {{--  background-color: #ededfd;  --}}
            padding: 40px;
        }
        .heading {
            text-align: center;
            padding-bottom: 20px;
            font-weight: 700;
        }

        .form-container  {
            display: flex;
            justify-content: center;
        }
        .form-container form {
            width: 500px;
        }




    </style>

<body>

<div class="container-fluid">

    <div class="container form-container">
        <form action="" method="POST">
            @csrf

            <div class="one">

                <h5 class="heading">LOGIN FORM</h5>

                <div class="form-outline mb-4">
                    <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email address">
                    @if ($errors->has('email'))
                        <p style="color: red">{{$errors->first('email')}}</p>
                    @endif
                </div>

                <div class="form-outline mb-4">
                    <input type="password" name="password"  class="form-control" placeholder="password">
                    @if ($errors->has('password'))
                        <p style="color: red">{{$errors->first('password')}}</p>
                    @endif
                </div>


                {{--  @if(session('error'))
                    <div class="alert alert-danger mx-auto text-center w-100" role="alert">
                        {{session('error')}}
                    </div>
                @endif  --}}

                <div class="row"><button type="submit" class="btn btn-dark btn-block">Login</button></div>

            </div>

        </form>
    </div>




</div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>
