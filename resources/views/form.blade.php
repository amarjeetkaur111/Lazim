<!-- resources/views/form.blade.php -->
<!-- <!DOCTYPE html>
<html>
<head>
    <title>Form with Numeric Password</title>
</head>
<body>
@if(\Illuminate\Support\Facades\Session::has('msg'))
    <div
        class="alert alert-{{ \Illuminate\Support\Facades\Session::has('class') ? \Illuminate\Support\Facades\Session::get('class') : 'default' }}">
        <strong>{{ \Illuminate\Support\Facades\Session::get('msg') }}</strong>
    </div>
@endif
    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <label for="name">name:</label>
        <input type="name" id="name" name="name" required>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <button type="submit">Submit</button>
    </form>
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</body>
</html> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lazim Task</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f5f5f5;
        }
        .container {
            max-width: 400px;
            margin-top: 100px;
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ddd;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center">Form with Numeric Password</h2>
        @if(\Illuminate\Support\Facades\Session::has('msg'))
            <div
                class="alert alert-{{ \Illuminate\Support\Facades\Session::has('class') ? \Illuminate\Support\Facades\Session::get('class') : 'default' }}">
                <strong>{{ \Illuminate\Support\Facades\Session::get('msg') }}</strong>
            </div>
        @endif
        <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="name" class="form-control" id="name" name="name" placeholder="Enter Name" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Submit</button>
        </form>
        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li style="color:red">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif    
        </div>
    </body>
</html>
