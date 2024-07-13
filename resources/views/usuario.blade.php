<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuario</title>
</head>
<body>
    <form action="{{ route('usuario') }}" method="POST">
        @csrf
        <div>
            <input type="text" name="name" id="name" value="{{ old('name') }}">
            @error('name')
            <div class="alert alert-danger">{{ old('name') }}</div>
            @enderror

        </div>

        <div>
            <input type="text" name="email" id="email" value="{{ old('email') }}">
            @error('email')
                <div class="alert alert-danger">{{ old('email') }}</div>
            @enderror
        </div>
        <div>
            <input type="text" name="email_confirmation" id="email_confirmation" value="{{ old('email_confirmation') }}">
        </div>


        <div>
            <input type="password" name="password" id="password" value="{{ old('password') }}">
            @error('password')
                <div class="alert alert-danger">{{ old('password') }}</div>
            @enderror
        </div>
        <div>
            <input type="password" name="password_confirmation" id="password_confirmation" value="{{ old('password_confirmation') }}">
        </div>

        <button type="submit">Enviar</button>
    </form>



    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif


    
        
</body>
</html>