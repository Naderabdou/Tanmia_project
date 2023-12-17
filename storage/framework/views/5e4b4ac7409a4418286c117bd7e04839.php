<div id="user-chart"></div>
<script>
    // line chart
    var data =[
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            {

                ym: "<?php echo e($data->day); ?>-<?php echo e($data->month); ?>-<?php echo e($data->year); ?>", b: "<?php echo e($data->count); ?>"
            },
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        ],

        config = {

            data: data,
            xkey: 'ym',
            ykeys: 'b',
            labels: ['<?php echo app('translator')->get('general.total_users'); ?>'],
            fillOpacity: 0.4,
            hideHover: 'auto',
            behaveLikeLine: true,
            resize: true,
            pointFillColors:['#ffffff'],
            pointStrokeColors: ['white'],
            //lineColors:['red','red'],
            lineWidth:4,
            gridStrokeWidth: 0.4,
            pointSize: 10,
            gridTextFamily: 'Open Sans',
            gridTextSize: 10,
            barColors: ['blueberry','white'],
        };

    config.element = 'user-chart';
    Morris.Bar(config);
    config.stacked = true;
    /*Morris.Donut({
           element: 'user-chart',
           data: [
               //day start sunday 0

               {label: "<?php echo app('translator')->get('general.friday'); ?>", value: 20},
            {label: "<?php echo app('translator')->get('general.thursday'); ?>", value: 10},
            {label: "<?php echo app('translator')->get('general.wednesday'); ?>", value: 10},
            {label: "<?php echo app('translator')->get('general.tuesday'); ?>", value: 20},
            {label: "<?php echo app('translator')->get('general.monday'); ?>", value: 10},
            {label: "<?php echo app('translator')->get('general.sunday'); ?>", value: 10},
            {label: "<?php echo app('translator')->get('general.saturday'); ?>", value: 30},
        ]
    });*/
</script>


<?php /**PATH D:\project new\Project\resources\views/dashboard/chartsUsers.blade.php ENDPATH**/ ?>