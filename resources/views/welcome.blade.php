@extends('layouts.app')

@section('content')
    <div class="center jumbotron">
        <div class="text-center">
            <h1>Welcome to myTASKLISTS</h1>
            <h3>Manage your tasks, enjoy your works!</h3>
            {!! link_to_route('signup.get', 'SIGN UP Here!', null, ['class' => 'btn btn-lg btn-primary']) !!}
        </div>
    </div>
@endsection