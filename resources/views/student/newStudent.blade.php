<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- Bootstrap from CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row" style="margin-top: 45px;">
            <div class="col-md-4 offset-md-4">
                <h4>Register</h4>
                <hr>
                <form action="{{ route('auth.save') }}" method="post">
                    <form action="{{ route('auth.save') }}" method="post">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter name"
                                value="{{ old('name') }}">
                        </div>
                        <div class="form-group">
                            <label for="surname">surname</label>
                            <input type="text" class="form-control" name="surname" placeholder="Enter surname"
                                value="{{ old('surname') }}">
                        </div>
                        <div class="form-group">
                            <label for="department">department</label>
                            <input type="text" class="form-control" name="department" placeholder="Enter Department">
                        </div>
                        <button type="submit" class="btn btn-block btn-primary">Sign Up</button>
                        <br>
                    </form>
            </div>
        </div>
    </div>
</body>