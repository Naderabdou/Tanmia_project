
<?php if($message->status == 'replied'): ?>
    <h5><span class="badge badge-success"><?php echo app('translator')->get('general.replied'); ?></span></h5>
<?php else: ?>
    <h5><span class="badge badge-danger"><?php echo app('translator')->get('general.waiting'); ?></span></h5>
<?php endif; ?>

<?php /**PATH D:\project new\Project\resources\views/dashboard/messages/data_table/status.blade.php ENDPATH**/ ?>