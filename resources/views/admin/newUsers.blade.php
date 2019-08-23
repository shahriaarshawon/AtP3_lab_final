
<a href="{{route('admin.index')}}">Home</a><br>
<form action="{{route('admin.addUsers')}}" method="post">
    @csrf
    user type: <select name="type" id="">
        <option value="user">user</option>
        <option value="scout">Scout</option>
    </select><br>
    Name: <input type="text" name="name" id=""><br>
    Email: <input type="text" name="email" id=""><br>
    Password: <input type="text" name="password" id=""><br>
    Confirm Password: <input type="text" name="password_confirmation" id=""><br>
    Address: <input type="text" name="address" id=""><br>
    <input type="submit" value="Add">
</form>