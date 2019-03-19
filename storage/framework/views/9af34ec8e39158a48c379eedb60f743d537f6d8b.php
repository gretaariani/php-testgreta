<?php /* C:\xampp\htdocs\CrudResource\resources\views/posts/form_master.blade.php */ ?>
<div class="row">
  <div class="col-sm-2">
    <?php echo form::label('title','Title'); ?>

  </div>
  <div class="col-sm-10">
    <div class="form-group <?php echo e($errors->has('title') ? 'has-error' : ""); ?>">
      <?php echo e(Form::text('title',NULL, ['class'=>'form-control', 'id'=>'title', 'placeholder'=>'Title Post...'])); ?>

      <?php echo e($errors->first('title', '<p class="help-block">:message</p>')); ?>

    </div>
  </div>
</div>

<div class="row">
  <div class="col-sm-2">
    <?php echo form::label('bosy','Body'); ?>

  </div>
  <div class="col-sm-10">
    <div class="form-group <?php echo e($errors->has('body') ? 'has-error' : ""); ?>">
      <?php echo e(Form::text('body',NULL, ['class'=>'form-control', 'id'=>'body', 'placeholder'=>'Body Post...'])); ?>

      <?php echo e($errors->first('body', '<p class="help-block">:message</p>')); ?>

    </div>
  </div>
</div>

<div class="form-group">
  <?php echo e(Form::button(isset($model)? 'Update' : 'save' , ['class'=>'btn btn-success', 'type'=>'submit'])); ?>

</div>