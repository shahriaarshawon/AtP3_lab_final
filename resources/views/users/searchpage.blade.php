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
            <a href="{{route('user.index')}}">Home</a><br><br>
<font size="5">{{Auth::user()->name}}</font>
<hr>

SEarch Result <br><br>

@if (count($results)>0)
<table class="table">
        <thead>
            <tr>
                <td>Place Name</td>
                <td>Place Route</td>
                <td>Place Description</td>
                <td>COmment</td>
                <td>ADD comment</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($results as $scout)
                <tr>
                    <td>{{$scout->place_name}}</td>
                    <td>{{$scout->place_route}}</td>
                    <td>{{$scout->place_descripttion}}</td>
                    <td><a href="{{route('seeComment')}}">click to see comment</a></td>
                    {{-- <td>
                        @foreach ($scout->comment as $item)
                            
                        @endforeach
                    </td> --}}
                    <td>
                        <form action="{{route('user.addComment')}}" method="post">
                            @csrf
                            <input type="hidden" name="scout_id" value="{{$scout->id}}">
                            <textarea name="comment" id="" cols="30" rows="10"></textarea>
                            <input type="submit" value="Submit">
                        </form>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@else
    no result found
@endif


<hr>