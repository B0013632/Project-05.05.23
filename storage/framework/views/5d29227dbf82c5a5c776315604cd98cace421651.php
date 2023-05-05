<!-- Firstname Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('firstname', 'Firstname:'); ?>

    <?php echo Form::text('firstname', null, ['class' => 'form-control','maxlength' => 30,'maxlength' => 30]); ?>

</div>

<!-- Surname Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('surname', 'Surname:'); ?>

    <?php echo Form::text('surname', null, ['class' => 'form-control','maxlength' => 30,'maxlength' => 30]); ?>

</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('email', 'Email:'); ?>

    <?php echo Form::email('email', null, ['class' => 'form-control','maxlength' => 50,'maxlength' => 50]); ?>

</div>

<!-- Phone Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('phone', 'Phone:'); ?>

    <?php echo Form::text('phone', null, ['class' => 'form-control','maxlength' => 20,'maxlength' => 20]); ?>

</div>

<!-- Vip Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        <?php echo Form::hidden('vip', 0, ['class' => 'form-check-input']); ?>

        <?php echo Form::checkbox('vip', '1', null, ['class' => 'form-check-input']); ?>

        <?php echo Form::label('vip', 'Vip', ['class' => 'form-check-label']); ?>

    </div>
</div>


<!-- Comments Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('comments', 'Comments:'); ?>

    <?php echo Form::text('comments', null, ['class' => 'form-control','maxlength' => 100,'maxlength' => 100]); ?>

</div><?php /**PATH C:\Users\alexj\laravel\BarDatabaseProject\resources\views/customers/fields.blade.php ENDPATH**/ ?>