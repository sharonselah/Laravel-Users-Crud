<html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

   
     
    <h1>Create User</h1>

    <form action="{{ route ('users.store')}}" method="POST">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" value="{{ old('name')}}" required> <br>
            @error('name')
                <span>{{$message}}</span>
            @enderror
            <br><br>
        </div>

        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="{{ old ('email') }}" required><br>
            @error('email')
                <span>{{$message}}</span>
            @enderror
            <br><br>
            
        </div>

        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required><br>
            @error('password')
                <span>{{$message}}</span>
            @enderror
            <br>
        </div>


        <div>
            <button type="submit">Create user</button>
        </div>
    </form>


</body>
</html>