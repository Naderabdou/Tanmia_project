

<div class="image_aboutUs">
    <a href="<?php echo e($aboutUs->image_path); ?>">
        <img src="<?php echo e($aboutUs->image_path); ?>" class="img-fluid image" style="width: 100px;" alt="">
    </a>

</div>
<script>
    $(function () {

        $('.image_aboutUs').magnificPopup({
            delegate: 'a', // the selector for gallery item
            type: 'image',
            gallery: {
                enabled: true
            }
        });

    });//end of document ready
</script>
<?php /**PATH D:\project new\Project\resources\views/dashboard/aboutUs/data_table/image.blade.php ENDPATH**/ ?>