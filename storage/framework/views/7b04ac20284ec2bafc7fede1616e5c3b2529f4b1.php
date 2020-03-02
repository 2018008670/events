<style media="screen">
  .create{
    background-color: white;
    margin-left: 500px;
    margin-right: 350px;
  }
  h1{
    margin-left: 400px;
  }

  input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}

form{

  background-color: lightgrey;

}
.formelement{
  margin-left: 30px;
}
h1{font-size: 25px;}
</style>




<?php $__env->startSection('title', 'Open Ticket'); ?>

<?php $__env->startSection('content'); ?>





    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <h1>Open New Ticket</h1>

                <div class="panel-body">


                    <?php if(session('status')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                    <div class="create">
                    <form  role="form" method="POST">
                        <?php echo csrf_field(); ?>

                        <div class="formelement">


                        <div class="form-group<?php echo e($errors->has('title') ? ' has-error' : ''); ?>">
                            <label for="title" class="col-md-4 control-label">Title</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="title" value="<?php echo e(old('title')); ?>">

                                <?php if($errors->has('title')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('title')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('events') ? ' has-error' : ''); ?>">
                            <label for="events" class="col-md-4 control-label">Event</label>

                            <div class="col-md-6">
                                <select id="events" type="events" class="form-control" name="events">
                                    <option value="">Select Event</option>
                                    <?php $__currentLoopData = $event; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($event->id); ?>"><?php echo e($event->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>

                                <?php if($errors->has('events')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('events')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('priority') ? ' has-error' : ''); ?>">
                            <label for="priority" class="col-md-4 control-label">Priority</label>

                            <div class="col-md-6">
                                <select id="priority" type="" class="form-control" name="priority">
                                    <option value="">Select Priority</option>
                                    <option value="low">Low</option>
                                    <option value="medium">Medium</option>
                                    <option value="high">High</option>
                                </select>

                                <?php if($errors->has('priority')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('priority')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('message') ? ' has-error' : ''); ?>">
                            <label for="message" class="col-md-4 control-label">Message</label>

                            <div class="col-md-6">
                                <textarea rows="10" id="message" class="form-control" name="message"></textarea>

                                <?php if($errors->has('message')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('message')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-ticket"></i> Book Ticket
                                </button>
                            </div>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>
</div>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/krishnabhandari/.composer/vendor/bin/Events/resources/views/tickets/create.blade.php ENDPATH**/ ?>