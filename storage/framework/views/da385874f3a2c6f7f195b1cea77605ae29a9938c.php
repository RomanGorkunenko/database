<style>
    TABLE {
        border-collapse: collapse;
    }

    TH,
    TD {
        border: 1px solid black;
        text-align: center;
        padding: 4px;
    }

    TH {
        background: #fc0;
        height: 20px;
        vertical-align: bottom;
        padding: 0;
    }

</style>
<span>Количество записей в таблице = </span><?php echo e($count); ?><br><br>
<span>Получение одной записи по id = <?php echo e($id); ?></span><br>
<table>
    <tr>
        <th>#</th>
        <th>login</th>
        <th>email</th>
        <th>password</th>
    </tr>
    <?php $number=1;?> <?php $__currentLoopData = $gid; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($number++); ?></td>
        <td><?php echo e($user->login); ?></td>
        <td><?php echo e($user->email); ?></td>
        <td><?php echo e($user->password); ?></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table><br>
<span>Все записи в таблице =</span><br>
<table>
    <tr>
        <th>#</th>
        <th>login</th>
        <th>email</th>
        <th>password</th>
    </tr>
    <?php $number=1;?> <?php $__currentLoopData = $all; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($number++); ?></td>
        <td><?php echo e($user->login); ?></td>
        <td><?php echo e($user->email); ?></td>
        <td><?php echo e($user->password); ?></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
