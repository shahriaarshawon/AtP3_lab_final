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
<font size="5">{{Auth::user()->name}}</font>
<hr>

Add new post <br><br>
<form action="{{route('scout.addpost')}}" method="post">
    @csrf
    place Name: <input type="text" name="place_name" id=""><br>
    place Route: <input type="text" name="place_route" id=""><br>
    place Description: <br> <textarea name="place_description" id="" cols="30" rows="10"></textarea>
    {{-- place Description: <input type="text" name="place_description" id=""> --}}
    <br><br>
    <input type="submit" id="" value="submit">
</form>
<hr>
Own post
<br>
    <table class="table">
        <thead>
            <tr>
                <td>Place Name</td>
                <td>Place Route</td>
                <td>Place Description</td>
                <td>Status</td>
                <td>Edit</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($myscouts as $scout)
                <tr>
                    <td>{{$scout->place_name}}</td>
                    <td>{{$scout->place_route}}</td>
                    <td>{{$scout->place_descripttion}}</td>
                    <td>{{$scout->status}}</td>
                    <td><a href="{{route('scoute.requestToAdmin',$scout->id)}}">edit</a></td>

                </tr>
            @endforeach

        </tbody>
    </table>

    <hr>

ALL post
<br>
    <table class="table">
        <thead>
            <tr>
                <td>Place Name</td>
                <td>Place Route</td>
                <td>Place Description</td>
                <td>Status</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($scouts as $scout)
                <tr>
                    <td>{{$scout->place_name}}</td>
                    <td>{{$scout->place_route}}</td>
                    <td>{{$scout->place_descripttion}}</td>
                    <td>{{$scout->status}}</td>
                </tr>
            @endforeach

        </tbody>
    </table>

    <hr>