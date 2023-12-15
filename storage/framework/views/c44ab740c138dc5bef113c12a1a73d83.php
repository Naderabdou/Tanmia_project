
<?php if($category->status == 'active'): ?>
    <h5><span class="badge badge-success"><?php echo app('translator')->get('general.active'); ?></span></h5>
<?php else: ?>
    <h5><span class="badge badge-danger"><?php echo app('translator')->get('general.inactive'); ?></span></h5>
<?php endif; ?>

<?php /**PATH D:\project new\Project\resources\views/dashboard/categories/data_table/status.blade.php ENDPATH**/ ?>