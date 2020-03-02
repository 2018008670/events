<?php

namespace App\Http\Controllers;

use App\Events;

use Illuminate\Http\Request;

class eventscontroller extends Controller
{
  public function index()
    {
  //      $event =Events::latest($eventid);
        $events =Events::all();
        return view('events.index',['events'=> $events]);

  }

    public function show($id)
    {
          $event =Events::find($id);


          return view('events.show',['eventList'=> $event] );

    }

    public function create()
    {
        return view('events.create');
    }


    public function store(Request $request)
    {

      request()->validate([
        'name'=>'required',
        'location'=>'required',
        'noOfPeople'=>'required',
        'description'=>'required',
        'image'=>'required'
      ]);

        $event = new Events();

        $event->name =request('name');
        $event->location =request('location');
        $event->noOfPeople =request('noOfPeople');
        $event->description =request('description');

        if ($request->hasfile('image'))
        {
          $file = $request->file('image');
          $extension = $file ->getClientOriginalExtension();
          $filename = time() . '.'. $extension;
          $file->move('uploads/eventPhoto/',$filename);
          $event->image = $filename;
        }

        else{
          return $request;
          $event->image ='';
        }
        $event->save();

        return redirect('/eventList');
    }

    public function edit($id)
    {

          $event =Events::find($id);

        return view('events.edit',compact('event'));
    }

    public function update(Request $request, $id)
    {
        $event =Events::find($id);

        //$event = new Events();

        $event->name =request('name');
        $event->location =request('location');
        $event->noOfPeople =request('noOfPeople');
        $event->description =request('description');
        if ($request->hasfile('image'))
        {
          $file = $request->file('image');
          $extension = $file ->getClientOriginalExtension();
          $filename = time() . '.'. $extension;
          $file->move('uploads/eventPhoto/',$filename);
          $event->image = $filename;
        }

        // else{
        //   return $request;
        //   $event->image ='';
        // }

        $event->save();


        return redirect('/eventList'.$event->$id)->with('event',$event);
    }

    public function destroy()
    {

    }
    public function display()
    {
      $events = Events::all();
      return view('eventsTable')->with('events',$events);
    }
}
