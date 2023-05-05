<div class="table-responsive">
    <table class="table" id="customers-table">
        <thead>
        <tr>
            <th>Firstname</th>
        <th>Surname</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Vip</th>
        <th>Comments</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($customer->firstname); ?></td>
            <td><?php echo e($customer->surname); ?></td>
            <td><?php echo e($customer->email); ?></td>
            <td><?php echo e($customer->phone); ?></td>
            <td><?php echo e($customer->vip); ?></td>
            <td><?php echo e($customer->comments); ?></td>
                <td width="120">
                    <?php echo Form::open(['route' => ['customers.destroy', $customer->id], 'method' => 'delete']); ?>

                    <div class='btn-group'>
                        <a href="<?php echo e(route('customers.show', [$customer->id])); ?>"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="<?php echo e(route('customers.edit', [$customer->id])); ?>"
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
<?php /**PATH C:\Users\alexj\laravel\BarDatabaseProject\resources\views/customers/table.blade.php ENDPATH**/ ?>