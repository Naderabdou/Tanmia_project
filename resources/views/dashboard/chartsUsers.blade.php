<div id="user-chart"></div>
<script>
    // line chart
    var data =[
                @foreach ($users as $data)
            {

                ym: "{{ $data->day }}-{{ $data->month }}-{{$data->year}}", b: "{{ $data->count }}"
            },
            @endforeach
        ],

        config = {

            data: data,
            xkey: 'ym',
            ykeys: 'b',
            labels: ['@lang('general.total_users')'],
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

               {label: "@lang('general.friday')", value: 20},
            {label: "@lang('general.thursday')", value: 10},
            {label: "@lang('general.wednesday')", value: 10},
            {label: "@lang('general.tuesday')", value: 20},
            {label: "@lang('general.monday')", value: 10},
            {label: "@lang('general.sunday')", value: 10},
            {label: "@lang('general.saturday')", value: 30},
        ]
    });*/
</script>


