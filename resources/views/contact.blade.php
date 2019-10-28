@extends ('layouts.app')

@section('title', 'Homepage')

@section('content')

<div>
<h1>CONTACT US</h1>
</div>

{!! Form::open(['url' => 'contact/submit']) !!}
    <div class="form-group">
      {{Form::label('name', 'Name')}} 
      {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Enter name'])}} 
    </div>
    <div class="form-group">
      {{Form::label('email', 'Email')}} 
      {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Enter email'])}} 
    </div>
    <div class="form-group">
      {{Form::label('message', 'Message')}} 
      {{Form::textarea('message', '',['class' => 'form-control', 'placeholder' => 'Enter message'])}} 
    </div>

    <div>
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
        <p> </p>
{!! Form::close() !!}

@endsection