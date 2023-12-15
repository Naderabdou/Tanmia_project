<div id="news-chart"></div>
<script>
    // line chart
    var data =[
                <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            {

                ym: "<?php echo e($data->year); ?>-<?php echo e($data->month); ?>", b: "<?php echo e($data->total_news); ?>"
            },
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        ],

        config = {

            data: data,
            xkey: 'ym',
            ykeys: 'b',
            labels: ['<?php echo app('translator')->get('general.total_news'); ?>'],
            fillOpacity: 0.4,
            hideHover: 'auto',
            behaveLikeLine: true,
            resize: true,
            pointFillColors:['#ffffff'],
            pointStrokeColors: ['white'],
            //lineColors:['red','red'],
            lineWidth:4,
            gridStrokeWidth: 0.4,
            pointSize: 1,
            gridTextFamily: 'Open Sans',
            gridTextSize: 10,
            barColors: ['blueberry','white'],
        };

    config.element = 'news-chart';
    Morris.Bar(config);
    config.stacked = true;

</script>


<?php /**PATH D:\project new\Project\resources\views/dashboard/charts.blade.php ENDPATH**/ ?>