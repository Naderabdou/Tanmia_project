<?php if(session('success')): ?>

    <script>
        new Noty({
            type: 'success',
            <?php if(app()->getLocale() == 'ar'): ?>
            layout: 'topLeft',
            <?php else: ?>
            layout: 'topRight',
            <?php endif; ?>
            text: "<?php echo e(session('success')); ?>",
            timeout: 2000,
            killer: true
        }).show();
    </script>

<?php elseif(session('error')): ?>

        <script>
            new Noty({
                type: 'error',
                layout: 'topLeft',
                text: "<?php echo e(session('error')); ?>",
                timeout: 2000,
                killer: true
            }).show();
        </script>

<?php endif; ?>
<?php /**PATH D:\project new\Project\resources\views/dashboard/layouts/partials/_session.blade.php ENDPATH**/ ?>