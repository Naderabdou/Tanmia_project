@extends('.dashboard.layouts.app')
@section('subtitle', __('general.videos'))

@section('content')
    <!-- Button trigger modal -->

    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="create_video" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

        <div class="modal-dialog">

            <div class="modal-content">
                <div class="modal-header">

                    <h5 class="modal-title" id="exampleModalLabel">@lang('general.create') @lang('general.video') </h5>





                </div>
                <form action="{{route('admin.video.store')}}" method="post" id="form_create_video" enctype="multipart/form-data">
                    @csrf
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div id="add-video-loading" class="form-group  col-md-12">
                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop" style="margin-bottom: 22px">
                                    <div class="mdc-text-field mdc-text-field--outlined">
                                        <input type="file" class="form-input mdc-text-field__input video" id="text-field-hero-input"  name="video"  required >
                                        <div class="mdc-notched-outline">
                                            <div class="mdc-notched-outline__leading"></div>
                                            <div class="mdc-notched-outline__notch">
                                                <label for="text-field-hero-input" class="mdc-floating-label">@lang('general.video')</label>
                                            </div>
                                            <div class="mdc-notched-outline__trailing"></div>
                                        </div>

                                    </div>
                                </div>


                            </div>
                            <div class="form-group col-md-12" id="loading">

                            </div>

                        </div>
                        <div  style="display: none;margin-top: 10px;border: 2px solid saddlebrown; border-radius: 20px" class="alert alert-danger print-error-msg  @if(app()->getLocale() === "ar") text-right @elseif(app()->getLocale() === "he")  text-right @else text-left @endif"> <ul></ul></div>
                    </div>



                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn_close" data-dismiss="modal">@lang('general.close')</button>
                    <button type="submit" style="background-color: #c3a962" class="btn">@lang('general.create')</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal -->

    <!-- Button trigger modal -->


    <!-- Modal -->



    <div class="mdc-layout-grid" style="margin-top: 20px;" >
        <div style="text-align: @if(app()->getLocale() === 'ar' ) right @elseif(app()->getLocale() === "he") right @else left @endif">
            <button type="button" class="mdc-button mdc-button--raised filled-button--btn" data-toggle="modal" data-target="#create_video">
                <i class="material-icons mdc-button__icon">add</i>

                @lang('general.create')
            </button>
            <form method="post" action="{{ route('admin.video.bulk_delete') }}" style="display: inline-block;" id="bulk_delete_video">
                @csrf
                @method('delete')
                <input type="hidden" name="record_ids" class="record-ids">
                <button class="mdc-button mdc-button--raised filled-button--btn all_delete"  disabled="true" id="bulk-delete">
                    <i class="material-icons mdc-button__icon">delete</i>

                    @lang('general.bulk_delete')
                </button>
            </form><!-- end of form -->
            <form method="post" action="{{route('admin.video.status')}}" style="display: inline-block;" id="status_video">
                @csrf
                @method('POST')
                <input type="hidden" name="record_ids" class="record-ids">
                <button type="submit" id="status_id" class="mdc-button mdc-button--raised filled-button--btn all_status"  disabled="disabled">
                    <i class="material-icons mdc-button__icon">colorize</i>

                    @lang('general.Change_Status')</button>
            </form><!-- end of form -->

            <div class="mdc-top-app-bar__section mdc-top-app-bar__section--align-start" style="color: black">
                <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--with-leading-icon search-text-field d-none d-md-flex" style="background-color: white;border-radius: 20px" >
                    <i class="material-icons mdc-text-field__icon">search</i>
                    <input class="mdc-text-field__input  data-table-search" id="text-field-hero-input">
                    <div class="mdc-notched-outline">
                        <div class="mdc-notched-outline__leading"></div>
                        <div class="mdc-notched-outline__notch">
                            <label for="text-field-hero-input" class="mdc-floating-label">@lang('general.search')</label>
                        </div>
                        <div class="mdc-notched-outline__trailing"></div>
                    </div>
                </div>
            </div>


        </div>

        <div class="mdc-layout-grid__inner" style="margin-top: 1px">

            <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">

                <div class="mdc-card p-0">


                    <div class="table-responsive">
                        <table style="width: 100%;" class="table m-0" id="video-table">
                            <thead >
                            <tr >
                                <th  class= "@if(app()->getLocale() === "ar") text-right @elseif(app()->getLocale() === "he")  text-right @else text-left @endif">

                                    <div class="animated-checkbox">
                                        <label class="m-0">
                                            <input type="checkbox" id="record__select-all">
                                            <span class="label-text"></span>
                                        </label>
                                    </div>
                                </th>

                             <th>@lang('general.id')</th>
                                <th>@lang('general.video')</th>
                                <th>@lang('general.status')</th>
                               <th>@lang('general.created_at')</th>

                                <th>@lang('general.actions')</th>

                            </tr>
                            </thead>

                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>

<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        let rolesTable = $('#video-table').DataTable({
            sPaginationType: "full_numbers",
            dom: "tiplr",
            serverSide: true,
            processing: true,
            responsive: true,
            "language": {
                "url": "{{ asset('admin_assets/datatable-lang/' . app()->getLocale() . '.json') }}"
            },
            ajax: {
                url: '{{ route('admin.video.data') }}',
            },
            columns: [
                {data: 'record_select', name: 'record_select', orderable: false, searchable: false },
                {data: 'id', name: 'id' ,orderable: false, searchable: false},
                {data: 'video', name: 'video',orderable: false, searchable: false },
                {data: 'status', name: 'status',  sortable: true , },
                {data: 'created_at', name: 'created_at', searchable: false,sortable: true },
                {data: 'actions', name: 'actions', searchable: false, sortable: false , orderable: false},
            ],
            order: [[4, 'desc']],
            drawCallback: function (settings) {
                $('.record__select').prop('checked', false);
                $('#record__select-all').prop('checked', false);
                $('#record-ids').val();
                $('#bulk-delete').attr('disabled', true);
                $('#status_id').attr('disabled', true);

            }

        });
        $('.data-table-search').keyup(function () {
            rolesTable.search(this.value).draw();
        })
        $(document).on('submit','#form_create_video',function (e){
            $(".print-error-msg").find("ul").html('');
            $(".print-error-msg").css('display','none');
            let loader = `
                        <div class="d-flex justify-content-center align-items-center">
                        <div class="loader loader-md"></div>
                        </div>
                            `;


            e.preventDefault();
            let formData = new FormData($('#form_create_video')[0]);

            $('#loading').empty().append(loader);
            $('#add-video-loading').css('display','none');
            $.ajax({
                type: "post",
                url: "{{route('admin.video.store')}}",
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    $('#loading').empty();
                    $('#add-video-loading').css('display','block');
                    $("#create_video").modal("hide");
                    $(".print-error-msg").find("ul").html('');
                    $(".print-error-msg").css('display','none');
                    // $('#create_video').modal('hide');
                    $('#form_create_video')[0].reset();
                    rolesTable.draw();
                    new Noty({
                        text: response.message,
                        type: "success",
                        @if(app()->getLocale() == 'ar')
                        layout:'topLeft',
                        @else
                        layout:'topRight',
                        @endif
                        timeout: 3000,
                        killer: true,
                    }).show();
                },
                error: function (error) {
                    $('#loading').empty();
                    $('#add-video-loading').css('display','block');
                    $(".print-error-msg").find("ul").html('');
                    $(".print-error-msg").css('display','block');
                    $.each(error.responseJSON.errors, function (key, value) {
                        $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
                    });

                }
            });
        });

        $(document).on('submit','#form_delete_video',function(e){
            let id = $(this).data('id');
            let url = $(this).attr('action');

            e.preventDefault();
            var n = new Noty(
                {
                    text: "@lang('general.confirm_delete_msg')",
                    type: "warning",
                    @if(app()->getLocale() == 'ar')
                    layout:'topLeft',
                    @elseif(app()->getLocale() == 'he')
                    layout:'topLeft',
                    @else
                    layout:'topRight',
                    @endif
                    timeout: 3000,
                    killer: true,
                    id:id,
                    url:url,
                    buttons: [
                        Noty.button("@lang('general.yes')", 'btn btn-success mr-2', function ()
                            {
                                $.ajax({
                                    type: "DELETE",
                                    url: url,
                                    data: {
                                        '_token': "{{csrf_token()}}",
                                        'id': id,
                                    },
                                    success: function (response) {

                                        rolesTable.draw();
                                        new Noty({
                                            text: response.message,
                                            type: "success",
                                            @if(app()->getLocale() == 'ar')
                                            layout:'topLeft',
                                            @elseif(app()->getLocale() == 'he')
                                            layout:'topLeft',
                                            @else
                                            layout:'topRight',
                                            @endif
                                            timeout: 3000,
                                            killer: true,
                                        }).show();
                                    },
                                    error: function (error) {
                                        new Noty({
                                            text: error.message,
                                            type: "error",
                                            @if(app()->getLocale() == 'ar')
                                            layout:'topLeft',
                                            @elseif(app()->getLocale() == 'he')
                                            layout:'topLeft',
                                            @else
                                            layout:'topRight',
                                            @endif
                                            timeout: 3000,
                                            killer: true,
                                        }).show();
                                    }
                                });
                            }



                        ),

                        Noty.button("@lang('general.no')", 'btn btn-primary mr-2', function () {

                            n.close();

                        })
                    ]
                }
            );

            n.show();


        })

        $(document).on('click','#edit_model_video',function (e){

            e.preventDefault();
              let url = $(this).data('url');
            let id = $(this).data('id');
            let image = $(this).data('image');
            console.log(image)

            $('#edit_video_show').modal('show');

            $("#edit_video_show").find('.image-preview').attr('src',image);

            $('#edit_video_show #form_update_video').attr('action',url);
            $('#edit_video_show #form_update_video').attr('data-id',id);

           // $('#edit_video_show #form_update_video #ar-name').val(name_ar);
            //$('#edit_video_show #form_update_video #en-name').attr('value',name_en);
           // $('#edit_video_show #form_update_video #he-name').val(name_he);


        });

        $(document).on('submit','#form_update_video',function (e){
            $(".print-error-msg_edit").find("ul").html('');
            $(".print-error-msg_edit").css('display','none');
            let loader = `
                        <div class="d-flex justify-content-center align-items-center">
                        <div class="loader loader-md"></div>
                        </div>
                            `;


            e.preventDefault();

            let url = $(this).attr('action');
            let formData = new FormData($('#form_update_video')[0]);
            $('#video-loading-edit').empty().append(loader);




            $.ajax({
                type: "POST",

                dataType: 'json',
                url: url,
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    $('#video-loading-edit').empty();
                    $(".print-error-msg_edit").find("ul").html('');
                    $(".print-error-msg_edit").css('display','none');
                    $("#edit_video_show").modal("hide");
                    // $('#create_video').modal('hide');
                    $('#form_update_video')[0].reset();
                    rolesTable.draw();
                    new Noty({
                        text: response.message,
                        type: "success",
                        @if(app()->getLocale() == 'ar')
                        layout:'topLeft',
                        @elseif(app()->getLocale() == 'he')
                        layout:'topLeft',
                        @else
                        layout:'topRight',
                        @endif
                        timeout: 3000,
                        killer: true,
                    }).show();
                },
                error: function (error) {
                    console.log(error.responseJSON)
                    $('#video-loading-edit').empty();
                    $(".print-error-msg_edit").find("ul").html('');
                    $(".print-error-msg_edit").css('display','block');
                    $.each(error.responseJSON.errors, function (key, value) {
                        console.log(value);
                        $(".print-error-msg_edit").find("ul").append('<li>'+value+'</li>');
                    });

                }
            });
        });

       $(document).on('submit','#bulk_delete_video',function (e){
           e.preventDefault();
           let formData = new FormData($('#bulk_delete_video')[0]);
           $.ajax({
               type: "post",
               url: "{{route('admin.video.bulk_delete')}}",
               data: formData,
               processData: false,
               contentType: false,
               success: function (response) {
                   rolesTable.draw();
                   new Noty({
                       text: response.message,
                       type: "success",
                       @if(app()->getLocale() == 'ar')
                       layout:'topLeft',
                       @elseif(app()->getLocale() == 'he')
                       layout:'topLeft',
                       @else
                       layout:'topRight',
                       @endif
                       timeout: 3000,
                       killer: true,
                   }).show();
               },
               error: function (error) {
                   new Noty({
                       text: error.message,
                       type: "error",
                       @if(app()->getLocale() == 'ar')
                       layout:'topLeft',
                       @elseif(app()->getLocale() == 'he')
                       layout:'topLeft',
                       @else
                       layout:'topRight',
                       @endif
                       timeout: 3000,
                       killer: true,
                   }).show();
               }
           });
       });

        $(document).on('submit','#status_video',function (e){
            e.preventDefault();
            let formData = new FormData($('#status_video')[0]);
            $.ajax({
                type: "post",
                url: "{{route('admin.video.status')}}",
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    rolesTable.draw();
                    new Noty({
                        text: response.message,
                        type: "success",
                        @if(app()->getLocale() == 'ar')
                        layout:'topLeft',
                        @elseif(app()->getLocale() == 'he')
                        layout:'topLeft',
                        @else
                        layout:'topRight',
                        @endif
                        timeout: 3000,
                        killer: true,
                    }).show();
                },
                error: function (error) {
                    new Noty({
                        text: error.message,
                        type: "error",
                        @if(app()->getLocale() == 'ar')
                        layout:'topLeft',
                        @elseif(app()->getLocale() == 'he')
                        layout:'topLeft',
                        @else
                        layout:'topRight',
                        @endif
                        timeout: 3000,
                        killer: true,
                    }).show();
    }
            });
        });
    });



</script>

@endsection


