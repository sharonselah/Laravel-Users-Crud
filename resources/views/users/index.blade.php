


<h1>List of users</h1>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td><a href="{{ route('users.edit', $user->id) }}">Edit</a></td>
            <td><a href="{{ route ('users.destroy', $user->id)}}">Delete</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
