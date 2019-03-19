<?php /* C:\xampp\htdocs\CrudResource\resources\views/posts/index.blade.php */ ?>
<?php $__env->startSection('content'); ?>
  <div class="row">
  <div class="col-sm-12">
    <div class="full-right">
      <h2>CRUD Resource</h2>
    </div>
  </div>
  </div>

  <?php if($message = Session::get('success')): ?>
      <div class="alert alert-success">
          <p><?php echo e($message); ?></p>
      </div>
  <?php endif; ?>

  <table class="table table-bordered">
    <tr>
      <th with="80px">No</th>
      <th>Title</th>
      <th>Body</th>
      <th with="140px" class="text-center">
        <a href="<?php echo e(route('posts.create')); ?>" class="btn btn-success btn-sm" style="background-color:red">
          <i class="glyphicon glyphicon-plus">Tambah</i>
        </a>
      </th>
    </tr>
    <?php $no=1; ?>
    <?php $__currentLoopData = $post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <!--value $post diambil dari postcontroller-->
      <tr>
        <td><?php echo e($no++); ?></td>
        <td><?php echo e($value->title); ?></td>
        <td><?php echo e($value->body); ?></td>
        <td>
          <a class="btn btn-info btn-sm" href="<?php echo e(route('posts.show',$value->id)); ?>" style="background-color:red">
              <i class="glyphicon glyphicon-th-large">lihat</i></a>
          <a class="btn btn-primary btn-sm" href="<?php echo e(route('posts.edit',$value->id)); ?>" style="background-color:red">
              <i class="glyphicon glyphicon-pencil">edit</i></a>
            <?php echo Form::open(['method' => 'DELETE','route' => ['posts.destroy', $value->id],'style'=>'display:inline']); ?>

              <button type="submit" style="display: inline;" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash">Hapuss</i></button>
            <?php echo Form::close(); ?>

        </td>
      </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>