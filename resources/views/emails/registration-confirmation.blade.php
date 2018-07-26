Hi {{$user->name}}

You need to confirm you registration by clocking on the following link <a href = "{{url('/verify/'. $user->id)}}"> link</a>.