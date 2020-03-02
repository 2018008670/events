@extends('layouts.app')

@section('title', $ticket->title)

@section('content')

<div class="ticketsinfo">


    <div class="row">
        <div class="col-md-10 col-md-offset-1">

          <div class="info">


            <div class="panel panel-default">
                <div class="panel-heading">

                    <h2> Ticket name:{{ $ticket->title }}</h2>
                    Ticket ID:{{ $ticket->ticket_id }}
                </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="ticket-info">
                        <p> Ticket message:{{ $ticket->message }}</p>
                        <p>Event: {{ $ticket->events->name }}</p>
                        <p>
                            @if ($ticket->status === 'Open')
                                Status: <span class="label label-success">{{ $ticket->status }}</span>
                            @else
                                Status: <span class="label label-danger">{{ $ticket->status }}</span>
                            @endif
                        </p>
                        <p>Created on: {{ $ticket->created_at->diffForHumans() }}</p>
                    </div>

                </div>
            </div>

            <hr>

            @include('tickets.comments')

            <hr>

            @include('tickets.reply')

        </div>
    </div>


@endsection

  </div>

</div>
