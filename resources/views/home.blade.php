@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">This is your page</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if(Auth::check())

                    @if (Auth::user()->admin)
                    <form action="/ticketsTable" class="form-inline my-2 my-lg-0">
                      <button class="btn btn-primary btn-lg" >List of all tickets by the users</button>
                    </form>

                  
                    @endif
                    @endif

                    <br>
                    <br><br><br>
                <h1>   Welcome to the NZevents  {{ Auth::user()->name }}</h1>


                  <br><br>
                @if(Auth::user()->is_admin)

                       <p>
                           See all <a href="{{ url('admin/tickets') }}">tickets</a>
                       </p>
                   @else

                       <p>
                           See all your <a href="{{ url('my_tickets') }}">tickets</a> or <a href="{{ url('new-ticket') }}">open new ticket</a>
                       </p>

                   @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
