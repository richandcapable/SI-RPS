<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SI RPS | Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<style>
    .main{
        height: 100vh;
        box-sizing: border-box;     
    }

    .login-box{
        width: 500px;
        padding: 30px;
    }

    form div{
        margin-bottom: 15px;
    }
</style>

<body>
    <div class="main d-flex justify-content-center align-items-center">
        <div class="login-box card shadow">
            <div class="logo text-center">
                <span class="db"><img src="assets/img/LogoPoliban.png" style="width: 70px;" alt="logo" /></span>                        
                <h4 class="box-title mt-3">POLITEKNIK NEGERI BANJARMASIN</h4>
                <h6 class="box-title">Login ke akun anda</h6>
            </div>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form action="" method="POST">
                @csrf
                <div>
                    <label for="email" class="form-label">Email</label>
                    <input type="text" name="email" id="email" class="form-control" value="{{ old('email') }}">
                </div>
                <div>
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>
                <div>
                    <button type="submit" class="btn btn-primary form-control">Login</button>
                </div>
            </form>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>