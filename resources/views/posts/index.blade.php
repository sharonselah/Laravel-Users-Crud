
<h1>List of users</h1>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>User Name</th>
            <th>Content</th>
            
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
        <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->user->name}}</td>
            <td>{{$post->content}}</td>      
        </tr>
        @endforeach
    </tbody>
</table>
