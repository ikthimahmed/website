@extends ('layouts.app')

@section('content')
<h1>Messages</h1>

@if(count($messages)> 0)
@foreach($messages as $message)
<div class="centre">
<ul class="list-group">
<li class= "list-group-item">Name: {{$message->name}}</li>
<li class= "list-group-item">Email: {{$message->email}}</li>
<li class= "list-group-item">Message: {{$message->message}}</li>
<p> </p>
</ul>
</div>
@endforeach
@endif

@endsection

