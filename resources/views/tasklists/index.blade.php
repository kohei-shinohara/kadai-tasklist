@extends('layouts.app')

@section('content')
    <h1>ALL TASKS </h1>
   @if (count($tasklists) > 0)
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>STATUS</th>
                    <th>TASK</th>
                    <th>CHANGE</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasklists as $tasklist)
                    <tr>
                        <td>{{ $tasklist->status }}</td>
                        <td>{{ $tasklist->content }}</td>
                        <td>{!! link_to_route('tasklists.show', 'EDIT / DELETE', ['id' => $tasklist->id], ['class' => 'btn btn-warning btn-xs']) !!}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    {!! link_to_route('tasklists.create', 'ADD A NEW TASK', null, ['class' => '
Class designation	Example image
btn btn-default	btn-default
btn btn-primary']) !!}
    
    <p><br>[STATUS] <br> C: Completed<br> P: Processing <br> U: Unprocessed</p>
@endsection