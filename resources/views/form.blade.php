<!doctype html>
<html lang="en">
  <head>
    <title>Form Validation on Php Laravel</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
    <form class="text-center" action="" method="post">
    @csrf 
        <h1>Registration </h1>
      <div class="form-group">
        <label for="">Full Name</label>
        <input type="text" name="name" id="" class="form-control" value="{{old('name')}}" placeholder="" aria-describedby="helpId">
     <span class="text-danger">
        @error('name')
        {{$message}}
        @enderror
     </span>
      </div>
      <div class="form-group">
        <label for="">Email</label>
        <input type="email" name="email" id="" class="form-control" value="{{old('name')}}" placeholder="" aria-describedby="helpId">
     <span class="text-danger">
        @error('email')
        {{$message}}
        @enderror
     </span>
      </div>
      <div class="form-group">
        <label for="">password </label>
        <input type="password" name="password" id="" class="form-control" placeholder="" aria-describedby="helpId">
     <span class="text-danger">
        @error('password')
        {{$message}}
        @enderror
     </span>
      </div>
      <div class="form-group">
        <label for="">Confirm password </label>
        <input type="password" name="password_confirmation" id="" class="form-control" placeholder="" aria-describedby="helpId">
     <span class="text-danger">
        @error('password_confirmation')
        {{$message}}
        @enderror
     </span>
      </div>
      <button class="btn btn-primary">Submit</button>
    </form>
    </div>
  </body>
</html>