<?php $__env->startSection('title', $ticket->title); ?>

<?php $__env->startSection('content'); ?>

<div class="ticketsinfo">


    <div class="row">
        <div class="col-md-10 col-md-offset-1">

          <div class="info">


            <div class="panel panel-default">
                <div class="panel-heading">

                    <h2> Ticket name:<?php echo e($ticket->title); ?></h2>
                    Ticket ID:<?php echo e($ticket->ticket_id); ?>

                </div>

                <div class="panel-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <div class="ticket-info">
                        <p> Ticket message:<?php echo e($ticket->message); ?></p>
                        <p>Event: <?php echo e($ticket->events->name); ?></p>
                        <p>
                            <?php if($ticket->status === 'Open'): ?>
                                Status: <span class="label label-success"><?php echo e($ticket->status); ?></span>
                            <?php else: ?>
                                Status: <span class="label label-danger"><?php echo e($ticket->status); ?></span>
                            <?php endif; ?>
                        </p>
                        <p>Created on: <?php echo e($ticket->created_at->diffForHumans()); ?></p>
                    </div>

                </div>
            </div>

            <hr>

            <?php echo $__env->make('tickets.comments', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <hr>

            <?php echo $__env->make('tickets.reply', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </div>


<?php $__env->stopSection(); ?>

  </div>

</div>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/krishnabhandari/.composer/vendor/bin/Events/resources/views/tickets/show.blade.php ENDPATH**/ ?>