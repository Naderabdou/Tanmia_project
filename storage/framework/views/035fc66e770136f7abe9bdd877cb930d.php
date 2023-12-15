

<div class="image_news">
    <a href="<?php echo e($news->image_path); ?>">
        <img src="<?php echo e($news->image_path); ?>" class="img-fluid image" style="width: 100px;" alt="">
    </a>

</div>
<script>
    $(function () {

        $('.image_news').magnificPopup({
            delegate: 'a', // the selector for gallery item
            type: 'image',
            gallery: {
                enabled: true
            }
        });

    });//end of document ready
</script>
<?php /**PATH D:\project new\Project\resources\views/dashboard/news/data_table/image.blade.php ENDPATH**/ ?>