<!DOCTYPE html>
<html>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>

  <div class="event">


  <form  action="/eventList" >


        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Back to Events</button>
  </div>
        </form>
<h3>Edit the event</h3>

<div>
  <form method="POST" action="/eventList/{{$event->id}}">
    @csrf

    @method('PUT')
    <label for="name">Event Name</label>
    <input type="text" id="name" name="name" placeholder="Event name.." value="{{$event->name}}">

    <label for="location">Event Location</label>
    <input type="text" id="location" name="location" placeholder="Location of event" value="{{$event->location}}">

    <label for="noOfpeople">Event Entry Price</label>
    <input type="text" id="noOfPeople" name="noOfPeople" placeholder="no of people" value="{{$event->noOfPeople}}">

    <label for="description">Event Description</label>
    <input type="text" id="description" name="description" placeholder="description" value="{{$event->description}}">

    <div class="input-group">
      <div class="custom-file">
        <input type="file" name="image"class="custom-file-input" value "{{$event->image}}">
        <label class="custom-file-label"> Choose file</label>
      </div>
    </div>

    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>
