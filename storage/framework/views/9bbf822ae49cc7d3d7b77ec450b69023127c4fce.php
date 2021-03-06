<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> message admin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="home.css">

    <link href="https://fonts.googleapis.com/css?family=Courgette&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>
  </head>
  <body>

    <br><br>
  <center><h1>Tickets Booked</h1></center>

  <br><br><br><br><br>
<div class="container">


    <table class="table table-stripped table table-bordered" >
      <thead class="thead-light">
        <tr>

            <th scope="col"> User ID</th>
          <th scope="col">Events ID</th>
          <th scope="col">Ticket ID</th>
          <th scope="col">Title</th>
          <th scope="col">Priority</th>
          <th scope="col">Message</th>
        </tr>
      </thead>
      <tbody>

        <?php $__currentLoopData = $tickets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ticket): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>

          <td><?php echo e($ticket->user_id); ?></td>
          <td><?php echo e($ticket->events_id); ?></td>
          <td><?php echo e($ticket->ticket_id); ?></td>
          <td><?php echo e($ticket->title); ?></td>
          <td><?php echo e($ticket->priority); ?></td>
          <td><?php echo e($ticket->message); ?></td>


        </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </tr>
      </tbody>
    </table>
    <form  action="/admin" >


          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Go Back</button>

          </form>
</div>
  </body>
</html>
<?php /**PATH /Users/krishnabhandari/.composer/vendor/bin/Events/resources/views/ticketsTable.blade.php ENDPATH**/ ?>