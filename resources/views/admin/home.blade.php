<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">	

<a class="" href="{{ route('logout') }}"
    onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
    <span class="fa fa-sign-out">logout</span>
</a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>


<h1>{{Auth::user()->type}}</h1>
 <br>

 <a href="{{ route('admin.newUsers') }}">Insert Users</a><hr>

 <font size="5">All users</font>

 <table class="table">
     <thead>
         <tr>
             <td>Name</td>
             <td>Email</td>
             <td>Password</td>
             <td>Address</td>
             <td>type</td>
             <td>profile</td>
             <td>Add</td>
             <td>Block</td>
         </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->password}}</td>
                <td>{{$user->address}}</td>
                <td>{{$user->type}}</td>
                <td><a href="{{route('profile',$user->id)}}">Got to profile</a></td>                
                @if ($user->status=='active')
                    <td>-</td>
                @else
                    <td><a href="{{route('admin.statusActive',$user->id)}}">Add</a></td>
                @endif
                @if ($user->status=='block')
                    <td>-</td>                                    
                @else
                <td><a href="{{route('admin.statusBlock',$user->id)}}">Block</a></td>                                    
                @endif
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
                <td>publish</td>
                <td>Edit</td>
                <td>Delete</td>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($scouts as $scout)
                <tr>
                    <td>{{$scout->place_name}}</td>
                    <td>{{$scout->place_route}}</td>
                    <td>{{$scout->place_descripttion}}</td>
                    <td>{{$scout->status}}</td>
                    <td><a href="{{route('admin.postPublishByadmin',$scout->id)}}">publish</a></td>
                    <td><a href="{{route('admin.postEditByadmin',$scout->id)}}">edit</a></td>
                    <td><a href="{{route('admin.postDeleteByadmin',$scout->id)}}">Delete</a></td>
                </tr>
            @endforeach

        </tbody>
    </table>

    <hr>

   Edit Requested post
<br>
    <table class="table">
        <thead>
            <tr>
                <td>Place Name</td>
                <td>Place Route</td>
                <td>Place Description</td>
                <td>Change Accept</td>
                <td>Change Reject</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($scoutsRequest as $s)
                <tr>
                    <td>{{$s->place_name}}</td>
                    <td>{{$s->place_route}}</td>
                    <td>{{$s->place_descripttion}}</td>
                    <td><a href="{{route('admin.postEditAcceptByadmin',$s->id)}}">Accept</a></td>
                    <td><a href="{{route('admin.postEditRejectByadmin',$s->id)}}">Reject</a></td>
                </tr>
            @endforeach

        </tbody>
    </table>

    <hr>