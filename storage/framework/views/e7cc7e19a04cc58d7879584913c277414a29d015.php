<?php /* C:\xampp\htdocs\CrudResource\resources\views/posts/edit.blade.php */ ?>
<?php $__env->startSection('content'); ?>
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <?php echo e(Form::model($post,['route'=>['posts.update',$post->id],'method'=>'PATCH'])); ?>

      <?php echo $__env->make('posts.form_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php echo e(Form::close()); ?>

    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>