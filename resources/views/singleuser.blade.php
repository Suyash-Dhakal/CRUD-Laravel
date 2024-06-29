<h1>User Details</h1>
@foreach ($data as $user)
<h2>ID: {{$user->id}}</h2>
<h2>Name: {{$user->name}}</h2>
<h2>Email: {{$user->email}}</h2>
<h2>Age: {{$user->age}}</h2>
<h2>City: {{$user->city}}</h2>


@endforeach