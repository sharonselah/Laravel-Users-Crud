<form action="{{route('posts.store')}}" method="POST">
@csrf

<div>
    <label for="content">Name:</label>  
    <textarea name="content" id="content" cols="30" rows="10" required></textarea><br>
    @error('content')
        <span>{{$message}}</span>
    @enderror
    <br><br>
</div>


<div>
    <button type="submit">Create Content</button>
</div>


</form>