<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">	


<a class="" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                    <span class="fa fa-sign-out">logout</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>

<br>
            <a href="{{route('scout.index')}}">Home</a><br><br>
<font size="5">{{Auth::user()->name}}</font>
<hr>

Edit post <br><br>
<form action="{{route('scout.PostrequestToAdmin')}}" method="post">
    @csrf
    <input type="hidden" name="scout_id" value="{{$scout->id}}">
    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
    place Name: <input type="text" name="place_name" id="" value="{{$scout->place_name}}"><br>
    place Route: <input type="text" name="place_route" id="" value="{{$scout->place_route}}"><br>
    place Description: <br> <textarea name="place_description" id="" cols="30" rows="10">{{$scout->place_descripttion}}</textarea>
    <br><br>
    <input type="submit" id="" value="submit">
    
</form>
<hr>