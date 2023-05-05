<!-- Firstname Field -->
<div class="col-sm-12">
    <?php echo Form::label('firstname', 'Firstname:'); ?>

    <p><?php echo e($employee->firstname); ?></p>
</div>

<!-- Surname Field -->
<div class="col-sm-12">
    <?php echo Form::label('surname', 'Surname:'); ?>

    <p><?php echo e($employee->surname); ?></p>
</div>

<!-- Employeetype Field -->
<div class="col-sm-12">
    <?php echo Form::label('employeetype', 'Employeetype:'); ?>

    <p><?php echo e($employee->employeetype); ?></p>
</div>

<!-- Dateofbirth Field -->
<div class="col-sm-12">
    <?php echo Form::label('dateofbirth', 'Dateofbirth:'); ?>

    <p><?php echo e($employee->dateofbirth); ?></p>
</div>

<?php /**PATH C:\Users\alexj\laravel\BarDatabaseProject\resources\views/employees/show_fields.blade.php ENDPATH**/ ?>