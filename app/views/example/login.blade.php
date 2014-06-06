Please log in

{{ Form::open(['url' => 'example/login']) }}
<div>
{{ Form::label('username', "Username") }}
{{ Form::text('username') }}
</div>

<div>
{{ Form::label('password', "Password") }}

{{ Form::text('password') }}
</div>

{{ Form::submit('Submit') }}


{{ Form::close() }}
