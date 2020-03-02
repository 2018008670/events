<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">This is your page</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                    <?php if(Auth::check()): ?>

                    <?php if(Auth::user()->admin): ?>
                    <form action="/ticketsTable" class="form-inline my-2 my-lg-0">
                      <button class="btn btn-primary btn-lg" >List of all tickets by the users</button>
                    </form>

                  
                    <?php endif; ?>
                    <?php endif; ?>

                    <br>
                    <br><br><br>
                <h1>   Welcome to the NZevents  <?php echo e(Auth::user()->name); ?></h1>


                  <br><br>
                <?php if(Auth::user()->is_admin): ?>

                       <p>
                           See all <a href="<?php echo e(url('admin/tickets')); ?>">tickets</a>
                       </p>
                   <?php else: ?>

                       <p>
                           See all your <a href="<?php echo e(url('my_tickets')); ?>">tickets</a> or <a href="<?php echo e(url('new-ticket')); ?>">open new ticket</a>
                       </p>

                   <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/krishnabhandari/.composer/vendor/bin/Events/resources/views/home.blade.php ENDPATH**/ ?>