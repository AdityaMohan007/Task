<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>User Register Page</title>
</head>

<style>
    .one {
        margin-top: 20px;
        border-radius: 0.45rem;
        padding: 40px;
    }

    .heading {
        text-align: center;
        padding-bottom: 20px;
        font-weight: 700;
    }

    .form-container {
        {{-- display: flex;
        justify-content: center; --}}
    }

    form {
        width: 500px;
        margin-left: auto;
        margin-right: auto;
    }

    .proceed-btn {
        margin-top: 20px;
    }



</style>

<body>
    <div class="container-fluid">


        <div class="form-main">

            {{-- Start of form --}}
            <div class="container form-container">

                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf

                    {{-- Form  5 - Set Password --}}
                    <div class="one">
                        <h5 class="heading">USER REGISTER FORM</h5>

                        <div class="row">

                            <div class="form-floating col-sm-12 mb-2">
                                <input type="text" name="name" class="form-control" id="floatingInputValue" placeholder="" value="">
                                <label for="floatingInputValue" style="margin-left: 12px">Name</label>
                            </div>

                            <div class="form-floating col-sm-12 mb-2">
                                <input type="text" name="user_name" class="form-control" id="floatingInputValue" placeholder="" value="">
                                <label for="floatingInputValue" style="margin-left: 12px">User Name</label>
                            </div>

                            <div class="form-floating mb-2">
                                <input type="email" name="email" class="form-control" id="floatingInput" placeholder="">
                                <label style="margin-left: 12px" for="floatingInput">Email address</label>
                            </div>
                            <div class="form-floating mb-2">
                                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="">
                                <label style="margin-left: 12px" for="floatingPassword">Password</label>
                            </div>
                            <div class="mb-2">
                                <input type="file" name="filename[]" class="form-control" id="customFile" multiple>
                            </div>

                            <div class="proceed-btn">
                                <a href="">
                                    <button class="btn btn-dark w-100" type="submit">Register</button>
                                </a>
                            </div>
                        </div>
                        @if (count($errors) > 0)
                            <div class="alert alert-danger mt-3">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                                </ul>
                            </div>
                        @endif
                        @if(session('success'))
                            <div class="alert alert-success mt-3">
                                {{ session('success') }}
                            </div>
                        @endif
                    </div>
                </form>




            </div>


        </div>




    </div>

    <script type="text/javascript">

        $(document).ready(function() {

          $(".btn-success").click(function(){
              var html = $(".clone").html();
              $(".increment").after(html);
          });

          $("body").on("click",".btn-danger",function(){
              $(this).parents(".control-group").remove();
          });

        });

    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>
