<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <br>
    <br>
    <br>
    <h1 class="text-center">User Form with Vlidation</h1>
    <div class="container mt-2">
        <form action="{{ url('/') }}/form" method="post">
            @csrf
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">user Name:</label>
                    <input type="text" class="form-control" name="userName" id="exampleInputPassword1" value="{{old('sname')}}">
                    <span class="text-danger">
                        @error('userName')
                            {{ $message }}
                        @enderror
                    </span>
                    </div>   
                <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address:</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1"  value="{{old('sname')}}" >
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                <span class="text-danger">
                    @error('email')
                        {{ $message }}
                    @enderror
                </span>
                </div>
                <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password:</label>
                <input type="password" class="form-control" name="password" id="exampleInputPassword1" value="{{old('sname')}}">
                <span class="text-danger">
                    @error('password')
                        {{ $message }}
                    @enderror
                </span>    
            </div>

                <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">confirm Password:</label>
                <input type="password" class="form-control" name="confirmPass" id="exampleInputPassword1" value="{{old('sname')}}" >
                <span class="text-danger">
                    @error('confirmPass')
                    {{ $message }}
                    @enderror
                </span>
                </div>
                {{-- <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div> --}}
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
      </form>
    </div>



   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
</body>
</html>