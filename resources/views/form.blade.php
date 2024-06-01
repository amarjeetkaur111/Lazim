<!-- resources/views/form.blade.php -->
<!DOCTYPE html>
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
</html>
