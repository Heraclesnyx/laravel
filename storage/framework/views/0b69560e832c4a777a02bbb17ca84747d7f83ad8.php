<!-- edit.blade.php -->


<?php $__env->startSection('content'); ?>
<div class="container">
  <form method="post" action="<?php echo e(action('CustomerController@update', $id)); ?>">
    <div class="form-group row">
      <?php echo e(csrf_field()); ?>

       <input name="_method" type="hidden" value="PATCH">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Nom</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="name" name="name" value="<?php echo e($customer->name); ?>">
      </div>
    </div>

    <div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Prénom</label>
      <div class="col-sm-10">
        <textarea name="firstname" rows="8" cols="80"><?php echo e($customer->firstname); ?></textarea>
      </div>
    </div>

    <div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Adresse</label>
      <div class="col-sm-10">
        <textarea name="adress" rows="8" cols="80"><?php echo e($customer->adress); ?></textarea>
      </div>
    </div>

    <div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Téléphone</label>
      <div class="col-sm-10">
        <textarea name="phone" rows="8" cols="80"><?php echo e($customer->phone); ?></textarea>
      </div>
    </div>

    <div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Email</label>
      <div class="col-sm-10">
        <textarea name="email" rows="8" cols="80"><?php echo e($customer->email); ?></textarea>
      </div>
    </div>

    <div class="form-group row">
      <div class="col-md-2"></div>
      <button type="submit" class="btn btn-primary">Update</button>
    </div>
  </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>