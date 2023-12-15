

<div class="image_settings">
    <a href="<?php echo e($settings->image_path); ?>">
        <img src="<?php echo e($settings->image_path); ?>" class="img-fluid image" style="width: 100px;" alt="">
    </a>

</div>
<script>
    $(function () {

        $('.image_settings').magnificPopup({
            delegate: 'a', // the selector for gallery item
            type: 'image',
            gallery: {
                enabled: true
            }
        });

    });//end of document ready
</script>
<?php /**PATH D:\project new\Project\resources\views/dashboard/settings/data_table/image.blade.php ENDPATH**/ ?>