<div class="table-responsive">
    <table class="table" id="tables-table">
        <thead>
        <tr>
            <th>Capacity</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $tables; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tables): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($tables->capacity); ?></td>
                <td width="120">
                    <?php echo Form::open(['route' => ['tables.destroy', $tables->id], 'method' => 'delete']); ?>

                    <div class='btn-group'>
                        <a href="<?php echo e(route('tables.show', [$tables->id])); ?>"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="<?php echo e(route('tables.edit', [$tables->id])); ?>"
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
<?php /**PATH C:\Users\alexj\laravel\BarDatabaseProject\resources\views/tables/table.blade.php ENDPATH**/ ?>