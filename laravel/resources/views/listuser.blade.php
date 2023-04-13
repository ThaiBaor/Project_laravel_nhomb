@extends('dashboard')
@section('content')
    <div class="div">
    <table class="table">
	      <thead>
	        <tr>
	          <th scope="col">Name</th>
	          <th scope="col">Email</th>
	          <th scope="col">Password</th>
              <th scope="col">Phone</th>
              <!-- <th scope="col">Image</th> -->
              
	        </tr>
	      </thead>
	      <tbody>
	        @foreach($users as $user)
	        <tr>
	          <td>{{$user->name}}</td>
	          <td>{{$user->email}}</td>
	          <td>{{$user->password}}</td>
              <td>{{$user->phone}}</td>
              <!-- <td><img src="{{url('public/storage/photo/'.$user->photo)}}" style="height: 100px; width: 150px"></td> -->
	        </tr>
	        @endforeach
	      </tbody>
	    </table>
        {{ $users->links() }}
    </div>
</body>
@endsection
