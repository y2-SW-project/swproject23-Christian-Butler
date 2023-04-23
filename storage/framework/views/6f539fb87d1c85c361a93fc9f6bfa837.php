<?php $__env->startSection('content'); ?>

<div class="container-xxl py-2">
    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <p><?php echo e($error); ?></p>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <form action=" <?php echo e(route('admin.events.store')); ?>" method="PUT" enctype="multipart/form-data">
        
            <?php echo csrf_field(); ?>

            <select name="event_name_id" class="form-select" aria-label="Default select example" class="py-2 my-2">
                <option selected>Event Types</option>
                <?php $__currentLoopData = $event_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event_type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($event_type->id); ?>" <?php echo e((old('event_type_id') == $event_type->id) ? "selected" : ""); ?>><?php echo e($event_type->event_name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </select>

              

              <div>
                <label for="exampleFormControlInput1" class="form-label">Start time</label>
    <input name="start_time" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Time" value="" ></div>

           


            <select name="artist_id" class="form-select form-select-sm" aria-label=".form-select-sm example">
                <option selected = "artist_id" >Artists</option>
                <?php $__currentLoopData = $artist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $artist): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($artist->id); ?>" <?php echo e((old('artist_id') == $artist->id) ? "selected" : ""); ?>><?php echo e($artist->first_name); ?>

                    
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </select>

             

              <select name="venues_id" class="form-select form-select-sm" aria-label=".form-select-sm example">
                <option selected = "artist_id" >Venues</option>
                <?php $__currentLoopData = $venue; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $venues): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($venues->id); ?>" <?php echo e((old('venue_id') == $venues->id) ? "selected" : ""); ?>><?php echo e($venues->name); ?>

                
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </select>

              <button type="submit" class="btn btn-primary py-2">Edit Event</button>
            </form>
</div>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/admin/events/edit.blade.php ENDPATH**/ ?>