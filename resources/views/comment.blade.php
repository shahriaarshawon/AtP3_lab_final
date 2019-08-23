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

See Comment <br><br>

@if (count($comments)>0)
<table class="table">
        <thead>
            <tr>
                <td>COmment</td>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($comments as $comment)
                <tr>
                    <td>{{$comment->comment}}</td>
                    
                </tr>
            @endforeach

        </tbody>
    </table>
@else
    no result found
@endif


<hr>