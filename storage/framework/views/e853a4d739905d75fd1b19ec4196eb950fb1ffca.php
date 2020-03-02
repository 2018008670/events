<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> message admin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>
  </head>
  <body>
  <h1>Table of Messages Sent by Customers</h1>

    <table class="table table-stripped table table-bordered" >
      <thead class="thead-light">
        <tr>
          <th scope="col">  </th>
            <th scope="col">ID</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Subject</th>
          <th scope="col">Message</th>
        </tr>
      </thead>
      <tbody>

        <?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <th scope="row">-></th>
          <td><?php echo e($message->id); ?></td>
          <td><?php echo e($message->name); ?></td>
          <td><?php echo e($message->email); ?></td>
          <td><?php echo e($message->subject); ?></td>
          <td><?php echo e($message->message); ?></td>

        </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </tr>
      </tbody>
    </table>
  </body>
</html>
<?php /**PATH /Users/krishnabhandari/.composer/vendor/bin/Events/resources/views//messageTable.blade.php ENDPATH**/ ?>