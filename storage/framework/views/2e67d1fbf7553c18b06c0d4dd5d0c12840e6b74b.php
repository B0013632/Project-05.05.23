<div class="table-responsive">
    <table class="table" id="employees-table">
        <thead>
        <tr>
            <th>Firstname</th>
        <th>Surname</th>
        <th>Employeetype</th>
        <th>Dateofbirth</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($employee->firstname); ?></td>
            <td><?php echo e($employee->surname); ?></td>
            <td><?php echo e($employee->employeetype); ?></td>
            <td><?php echo e($employee->dateofbirth); ?></td>
                <td width="120">
                    <?php echo Form::open(['route' => ['employees.destroy', $employee->id], 'method' => 'delete']); ?>

                    <div class='btn-group'>
                        <a href="<?php echo e(route('employees.show', [$employee->id])); ?>"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="<?php echo e(route('employees.edit', [$employee->id])); ?>"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        <?php echo Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                    </div>
                    <?php echo Form::close(); ?>

                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php /**PATH C:\Users\alexj\laravel\BarDatabaseProject\resources\views/employees/table.blade.php ENDPATH**/ ?>