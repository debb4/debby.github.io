<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('/')}}assets/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="{{ asset('/')}}assets\plugins\fontawesome\css\all.min.css" rel="stylesheet">
    <title>Add User</title>
</head>
<body>
    <div class="container p-5">
        <div class="container-header ">
            <h1 class="mb-4 d-flex justify-content-center">Edit User</h1>
        </div>
        <form  action="{{ Route('user.update', $user->id) }}"method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
              <label for="Username" style="fs-3" class="form-label">Username</label>
              <input type="text" class="form-control" name="username" value="{{ $user->username }}" >
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" value="{{ $user->email }}"> 
              </div>
            <button type="submit" class="btn btn-primary">Simpan Edit</button>
            <span><a href="/dashboard">Back</a></span>
          </form>
    </div>
      <script src="{{ asset('/')}}assets/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>