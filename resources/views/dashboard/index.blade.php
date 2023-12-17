@extends('dashboard.layouts.app')
@section('subtitle', __('general.dashboard'))
@section('content')
    <div class="page-wrapper mdc-toolbar-fixed-adjust">
        <main class="content-wrapper">
            <div class="mdc-layout-grid">
                <div class="mdc-layout-grid__inner">

                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4-desktop mdc-layout-grid__cell--span-4-tablet">
                        <div class="mdc-card info-card info-card--success">
                            <div class="card-inner @if(app()->getLocale() === "ar") text-right @elseif(app()->getLocale() === "he")  text-right @else text-left @endif">
                                <h5 class="card-title">@lang('general.users')</h5>
                                <h5 class="font-weight-light pb-2 mb-1 border-bottom">@lang('general.count') :  <span id="count_users"></span> </h5>
                                <div class="card-icon-wrapper text-right">
                                   <span class="material-symbols-outlined ">
group
</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4-desktop mdc-layout-grid__cell--span-4-tablet">
                        <div class="mdc-card info-card info-card--danger">
                            <div class="card-inner @if(app()->getLocale() === "ar") text-right @elseif(app()->getLocale() === "he")  text-right @else text-left @endif">
                                <h5 class="card-title">@lang('general.categories')</h5>
                                <h5 class="font-weight-light pb-2 mb-1 border-bottom">@lang('general.count') : <span id="count_category"></span> </h5>
                                <div class="card-icon-wrapper">
                                   <span class="material-symbols-outlined">
category
</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4-desktop mdc-layout-grid__cell--span-4-tablet">
                        <div class="mdc-card info-card info-card--primary">
                            <div class="card-inner @if(app()->getLocale() === "ar") text-right @elseif(app()->getLocale() === "he")  text-right @else text-left @endif">
                                <h5 class="card-title">@lang('general.news')</h5>
                                <h5 class="font-weight-light pb-2 mb-1 border-bottom">@lang('general.count') : <span id="count_news"></span></h5>
                                <div class="card-icon-wrapper">
                                   <span class="material-symbols-outlined">
newspaper
</span>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="d-flex justify-content-between">
                            <h4>@lang('general.news_chart')</h4>

                            <select id="movies-chart-year" style="width: 100px;">
                                @for ($i = 5; $i >=0 ; $i--)
                                    <option value="{{ now()->subYears($i)->year }}"
                                        {{ now()->subYears($i)->year == now()->year ? 'selected' : '' }}
                                    >
                                        {{ now()->subYears($i)->year }}
                                    </option>
                                @endfor
                            </select>
                        </div>

                        <div id="movies-chart-wrapper">


                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex justify-content-between">
                            <h4>@lang('general.user_chart')</h4>

                            <input type="date" name="week" value="{{ now()->format('Y-m-d')}}">


                        </div>

                        <div id="user-chart-wrapper">


                        </div>
                    </div>

                </div>
            </div>


        </main>
        <!-- partial:partials/_footer.html -->

        <!-- partial -->
    </div>
    @push('scripts')
        <script>
            $(document).ready(function () {

                topStatistics();
                Movieschart("{{ now()->year }}")
                Userschart("{{ now()->format('Y-m-d') }}")



                $('#movies-chart-year').on('change', function () {


                    var year = $(this).val();
                    Movieschart(year);


                });


                $('input[name="week"]').on('change', function () {
                      var date = $(this).val();
                    Userschart(date);
                })






            });//end of document ready


            function topStatistics() {
                $.ajax({
                    url: "{{ route('admin.count') }}",
                    type: "GET",
                    dataType: "json",
                    success: function (data) {

                        $('#count_news').text(data.news_count).show();
                        $('#count_category').text(data.category_count).show();
                        $('#count_users').html(data.user_count).show();
                    //    $('#actors-count').text(data.actors_count).show();
                        $('#top-statistics .loader').hide();
                    }
                });
            }






            function Movieschart(year) {
                let loader = `
                        <div class="d-flex justify-content-center align-items-center">
                        <div class="loader loader-md"></div>
                        </div>
                            `;

                $('#movies-chart-wrapper').empty().append(loader);
                $.ajax({
                    url: "{{ route('admin.news_chart') }}",
                    type: "GET",
                    data: {
                        year: year
                    },
                    cache: false,

                    //dataType: "html",
                    success: function (data) {
                        $('#movies-chart-wrapper').empty().append(data);
                    }
                });
            }

            function Userschart(date) {
                let loader = `
                        <div class="d-flex justify-content-center align-items-center">
                        <div class="loader loader-md"></div>
                        </div>
                            `;

                $('#user-chart-wrapper').empty().append(loader);
                $.ajax({
                    url: "{{ route('admin.users_chart') }}",
                    type: "GET",
                    data: {
                        day: date
                    },
                    cache: false,

                    //dataType: "html",
                    success: function (data) {
                        console.log(data);
                        $('#user-chart-wrapper').empty().append(data);
                    }
                });
            }



        </script>
    @endpush


@endsection
