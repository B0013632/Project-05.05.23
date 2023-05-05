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

<!-- Employeetype Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('employeetype', 'Employeetype:'); ?>

    <?php echo Form::text('employeetype', null, ['class' => 'form-control','maxlength' => 6,'maxlength' => 6]); ?>

</div>

<!-- Dateofbirth Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('dateofbirth', 'Dateofbirth:'); ?>

    <?php echo Form::text('dateofbirth', null, ['class' => 'form-control','id'=>'dateofbirth']); ?>

</div>

<?php $__env->startPush('page_scripts'); ?>
    <script type="text/javascript">
        $('#dateofbirth').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
<?php $__env->stopPush(); ?><?php /**PATH C:\Users\alexj\laravel\BarDatabaseProject\resources\views/employees/fields.blade.php ENDPATH**/ ?>