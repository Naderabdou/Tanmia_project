

<?php if($slider->type == "image"): ?>
    <div class="image_slider">
        <a href="<?php echo e($slider->image_path); ?>">
            <img src="<?php echo e($slider->image_path); ?>" class="img-fluid image" style="width: 100px;" alt="">
        </a>

    </div>

<?php else: ?>
    <div class="video_view">

        <video controls preload="auto" src="<?php echo e($slider->video_path); ?>" width="70%"></video>'





    </div>
<?php endif; ?>








<script>
    $(function () {

        $('.image_slider').magnificPopup({
            delegate: 'a', // the selector for gallery item
            type: 'image',
            gallery: {
                enabled: true
            }
        });

    });//end of document ready
</script>
<?php /**PATH D:\project new\Project\resources\views/dashboard/sliders/data_table/image.blade.php ENDPATH**/ ?>