<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use App\Events;
use App\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Mailers\AppMailer;

class TicketsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tickets = Ticket::paginate(10);

        return view('tickets.index', compact('tickets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $event = Events::all();

        return view('tickets.create', compact('event'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'events' => 'required',
            'priority' => 'required',
            'message' => 'required'
        ]);



        $ticket = new Ticket([
            'title' => $request->input('title'),
            'user_id' => Auth::user()->id,
            'ticket_id' => bin2hex(random_bytes(5)),
            'events_id' => $request->input('events'),
            'priority' => $request->input('priority'),
            'message' => $request->input('message'),
            'status' => "Open"
        ]);

        $ticket->save();



        return redirect()->back()->with("status", "A ticket with ID: #$ticket->ticket_id has been booked.");
    }

    public function userTickets()
    {

      $tickets = Ticket::where('user_id', Auth::user()->id)->paginate(10);

      return view('tickets.user_tickets', compact('tickets'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($ticket_id)
    {
        $ticket = Ticket::where('ticket_id', $ticket_id)->firstOrFail();

        return view('tickets.show', compact('ticket'));
    }
    public function close($ticket_id)
    {
        $ticket = Ticket::where('ticket_id', $ticket_id)->firstOrFail();

        $ticket->status = "Closed";

        $ticket->save();

        // $ticketOwner = $ticket->user;
        //
        // $mailer->sendTicketStatusNotification($ticketOwner, $ticket);

        return redirect()->back()->with("status", "The ticket has been closed.");
    }
    public function display()
    {
      $tickets = Ticket::all();
      return view('ticketsTable')->with('tickets',$tickets);
    }


}
