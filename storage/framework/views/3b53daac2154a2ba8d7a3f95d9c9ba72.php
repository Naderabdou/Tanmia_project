<?php $__env->startSection('subtitle', __('general.sliders')); ?>

<?php $__env->startSection('content'); ?>
    <!-- Button trigger modal -->

    <!-- Button trigger modal -->


    <!-- Modal image -->
    <div class="modal fade" id="create_slider_image" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

        <div class="modal-dialog">

            <div class="modal-content">
                <div class="modal-header">

                    <h5 class="modal-title" id="exampleModalLabel"><?php echo app('translator')->get('general.create'); ?> <?php echo app('translator')->get('general.slider'); ?> </h5>





                </div>
                <form action="<?php echo e(route('admin.sliders.store')); ?>" method="post" id="form_create_slider">
                    <input type="hidden" name="type" value="image">
                    <?php echo csrf_field(); ?>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">

                                <div class="form-group  col-md-12 slider-loading-add-image" >
                                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop" style="margin-bottom: 22px">
                                        <div class="mdc-text-field mdc-text-field--outlined">
                                            <input type="file" class="form-input mdc-text-field__input image_Slider" id="text-field-hero-input"  name="image[]" multiple required>
                                            <div class="mdc-notched-outline">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label for="text-field-hero-input" class="mdc-floating-label"><?php echo app('translator')->get('general.image'); ?></label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                            </div>

                                        </div>
                                    </div>


                                </div>
                                <div class="form-group col-md-12 slider-loading-add-image">
                                    <div class="form-group upload-img">
                                        <img src=""  style="width: 100px" class="img-thumbnail image-preview" alt="">
                                    </div>

                                </div>
                            <div class="form-group col-md-12" id="slider-loading-image"></div>


                        </div>
                        <div  style="display: none;margin-top: 10px;border: 2px solid saddlebrown; border-radius: 20px" class="alert alert-danger print-error-msg  <?php if(app()->getLocale() === "ar"): ?> text-right <?php elseif(app()->getLocale() === "he"): ?>  text-right <?php else: ?> text-left <?php endif; ?>"> <ul></ul></div>
                    </div>



                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn_close" data-dismiss="modal"><?php echo app('translator')->get('general.close'); ?></button>
                    <button type="submit" style="background-color: #c3a962" class="btn"><?php echo app('translator')->get('general.create'); ?></button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal video-->
    <div class="modal fade" id="create_slider_video" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

        <div class="modal-dialog">

            <div class="modal-content">
                <div class="modal-header">

                    <h5 class="modal-title" id="exampleModalLabel"><?php echo app('translator')->get('general.create'); ?> <?php echo app('translator')->get('general.slider'); ?> </h5>





                </div>
                <form action="<?php echo e(route('admin.sliders.store')); ?>" method="post" id="form_create_slider_video">
                    <input name="type" value="video" type="hidden">
                    <?php echo csrf_field(); ?>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="form-group  col-md-12" id="slider-add-video">
                                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop" style="margin-bottom: 22px">
                                        <div class="mdc-text-field mdc-text-field--outlined">
                                            <input type="file" class="form-input mdc-text-field__input " id="text-field-hero-input"  name="video[]" multiple required>
                                            <div class="mdc-notched-outline">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label for="text-field-hero-input" class="mdc-floating-label"><?php echo app('translator')->get('general.video'); ?></label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                            </div>

                                        </div>
                                    </div>


                                </div>

                                <div class="form-group col-md-12" id="slider-loading-video"></div>

                            </div>
                            <div  style="display: none;margin-top: 10px;border: 2px solid saddlebrown; border-radius: 20px" class="alert alert-danger print-error-msg-video  <?php if(app()->getLocale() === "ar"): ?> text-right <?php elseif(app()->getLocale() === "he"): ?>  text-right <?php else: ?> text-left <?php endif; ?>"> <ul></ul></div>
                        </div>



                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn_close" data-dismiss="modal"><?php echo app('translator')->get('general.close'); ?></button>
                        <button type="submit" style="background-color: #c3a962" class="btn"><?php echo app('translator')->get('general.create'); ?></button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Button trigger modal -->


    <!-- Modal -->



    <div class="mdc-layout-grid" style="margin-top: 20px;" >
        <div style="text-align: <?php if(app()->getLocale() === 'ar' ): ?> right <?php elseif(app()->getLocale() === "he"): ?> right <?php else: ?> left <?php endif; ?>">
            <button type="button" class="mdc-button mdc-button--raised filled-button--btn" data-toggle="modal" data-target="#create_slider_image">
                <i class="material-icons mdc-button__icon">add</i>

                <?php echo app('translator')->get('general.create'); ?>  <?php echo app('translator')->get('general.image'); ?>
            </button>
            <button type="button" class="mdc-button mdc-button--raised filled-button--btn" data-toggle="modal" data-target="#create_slider_video">
                <i class="material-icons mdc-button__icon">add</i>

                <?php echo app('translator')->get('general.create'); ?> <?php echo app('translator')->get('general.video'); ?>
            </button>
            <form method="post" action="<?php echo e(route('admin.sliders.bulk_delete')); ?>" style="display: inline-block;" id="bulk_delete_sliders">
                <?php echo csrf_field(); ?>
                <?php echo method_field('delete'); ?>
                <input type="hidden" name="record_ids" class="record-ids">
                <button class="mdc-button mdc-button--raised filled-button--btn all_delete"  disabled="true" id="bulk-delete">
                    <i class="material-icons mdc-button__icon">delete</i>

                    <?php echo app('translator')->get('general.bulk_delete'); ?>
                </button>
            </form><!-- end of form -->
            <form method="post" action="<?php echo e(route('admin.sliders.status')); ?>" style="display: inline-block;" id="status_sliders">
                <?php echo csrf_field(); ?>
                <?php echo method_field('POST'); ?>
                <input type="hidden" name="record_ids" class="record-ids">
                <button type="submit" id="status_id" class="mdc-button mdc-button--raised filled-button--btn all_status"  disabled="disabled">
                    <i class="material-icons mdc-button__icon">colorize</i>

                    <?php echo app('translator')->get('general.Change_Status'); ?></button>
            </form><!-- end of form -->

            <div class="mdc-top-app-bar__section mdc-top-app-bar__section--align-start" style="color: black">
                <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--with-leading-icon search-text-field d-none d-md-flex" style="background-color: white;border-radius: 20px" >
                    <i class="material-icons mdc-text-field__icon">search</i>
                    <input class="mdc-text-field__input  data-table-search" id="text-field-hero-input">
                    <div class="mdc-notched-outline">
                        <div class="mdc-notched-outline__leading"></div>
                        <div class="mdc-notched-outline__notch">
                            <label for="text-field-hero-input" class="mdc-floating-label"><?php echo app('translator')->get('general.search'); ?></label>
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
                        <table style="width: 100%;" class="table m-0" id="slider-table">
                            <thead >
                            <tr >
                                <th  class= "<?php if(app()->getLocale() === "ar"): ?> text-right <?php elseif(app()->getLocale() === "he"): ?>  text-right <?php else: ?> text-left <?php endif; ?>">

                                    <div class="animated-checkbox">
                                        <label class="m-0">
                                            <input type="checkbox" id="record__select-all">
                                            <span class="label-text"></span>
                                        </label>
                                    </div>
                                </th>

                             <th><?php echo app('translator')->get('general.id'); ?></th>
                                <th><?php echo app('translator')->get('general.image_or_video'); ?></th>
                                <th><?php echo app('translator')->get('general.status'); ?></th>
                               <th><?php echo app('translator')->get('general.created_at'); ?></th>

                                <th><?php echo app('translator')->get('general.actions'); ?></th>

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
        let rolesTable = $('#slider-table').DataTable({
            sPaginationType: "full_numbers",
            dom: "tiplr",
            serverSide: true,
            processing: true,
            responsive: true,
            "language": {
                "url": "<?php echo e(asset('admin_assets/datatable-lang/' . app()->getLocale() . '.json')); ?>"
            },
            ajax: {
                url: '<?php echo e(route('admin.sliders.data')); ?>',
            },
            columns: [
                {data: 'record_select', name: 'record_select', orderable: false, searchable: false },
                {data: 'id', name: 'id' ,orderable: false, searchable: false},
                {data: 'image', name: 'image',orderable: false, searchable: false },
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
        $(document).on('submit','#form_create_slider_video',function (e){
            let loader = `
                        <div class="d-flex justify-content-center align-items-center">
                        <div class="loader loader-md"></div>
                        </div>
                            `;

            e.preventDefault();
            let formData = new FormData($('#form_create_slider_video')[0]);
            $('#slider-loading-video').empty().append(loader);
            $('#slider-add-video').css('display','none');
            $.ajax({
                type: "post",
                url: "<?php echo e(route('admin.sliders.store')); ?>",
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    $('#slider-loading-video').empty()
                    $('#slider-add-video').css('display','block');

                    $("#create_slider_video").modal("hide");
                    $(".print-error-msg-video").find("ul").html('');
                    $(".print-error-msg-video").css('display','none');
                    // $('#create_slider').modal('hide');
                    $('#form_create_slider_video')[0].reset();

                    rolesTable.draw();
                    new Noty({
                        text: response.message,
                        type: "success",
                        <?php if(app()->getLocale() == 'ar'): ?>
                        layout:'topLeft',
                        <?php else: ?>
                        layout:'topRight',
                        <?php endif; ?>
                        timeout: 3000,
                        killer: true,
                    }).show();
                },
                error: function (error) {

                    $(".print-error-msg-video").find("ul").html('');
                    $(".print-error-msg-video").css('display','block');
                    $.each(error.responseJSON.errors, function (key, value) {
                        $(".print-error-msg-video").find("ul").append('<li>'+value+'</li>');
                    });

                }
            });
        });



        $(document).on('submit','#form_create_slider',function (e){
            let loader = `
                        <div class="d-flex justify-content-center align-items-center">
                        <div class="loader loader-md"></div>
                        </div>
                            `;
            e.preventDefault();
            let formData = new FormData($('#form_create_slider')[0]);
            $('#slider-loading-image').empty().append(loader);
           $('.slider-loading-add-image').css('display','none');
            $.ajax({
                type: "post",
                url: "<?php echo e(route('admin.sliders.store')); ?>",
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    $('#slider-loading-image').empty()
                    $('.slider-loading-add-image').css('display','block');
                    $("#create_slider_image").modal("hide");
                    $(".print-error-msg").find("ul").html('');
                    $(".print-error-msg").css('display','none');
                    // $('#create_slider').modal('hide');
                    $('#form_create_slider')[0].reset();
                    $('.image-preview').attr('src','');
                    rolesTable.draw();
                    new Noty({
                        text: response.message,
                        type: "success",
                        <?php if(app()->getLocale() == 'ar'): ?>
                        layout:'topLeft',
                        <?php else: ?>
                        layout:'topRight',
                        <?php endif; ?>
                        timeout: 3000,
                        killer: true,
                    }).show();
                },
                error: function (error) {
                    $('#slider-loading-image').empty()
                    $('.slider-loading-add-image').css('display','block');
                    $(".print-error-msg").find("ul").html('');
                    $(".print-error-msg").css('display','block');
                    $.each(error.responseJSON.errors, function (key, value) {
                        $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
                    });

                }
            });
        });
        $(document).on('submit','#form_delete_slider',function(e){
            let id = $(this).data('id');
            let url = $(this).attr('action');

            e.preventDefault();
            var n = new Noty(
                {
                    text: "<?php echo app('translator')->get('general.confirm_delete_msg'); ?>",
                    type: "warning",
                    <?php if(app()->getLocale() == 'ar'): ?>
                    layout:'topLeft',
                    <?php elseif(app()->getLocale() == 'he'): ?>
                    layout:'topLeft',
                    <?php else: ?>
                    layout:'topRight',
                    <?php endif; ?>
                    timeout: 3000,
                    killer: true,
                    id:id,
                    url:url,
                    buttons: [
                        Noty.button("<?php echo app('translator')->get('general.yes'); ?>", 'btn btn-success mr-2', function ()
                            {
                                $.ajax({
                                    type: "DELETE",
                                    url: url,
                                    data: {
                                        '_token': "<?php echo e(csrf_token()); ?>",
                                        'id': id,
                                    },
                                    success: function (response) {

                                        rolesTable.draw();
                                        new Noty({
                                            text: response.message,
                                            type: "success",
                                            <?php if(app()->getLocale() == 'ar'): ?>
                                            layout:'topLeft',
                                            <?php elseif(app()->getLocale() == 'he'): ?>
                                            layout:'topLeft',
                                            <?php else: ?>
                                            layout:'topRight',
                                            <?php endif; ?>
                                            timeout: 3000,
                                            killer: true,
                                        }).show();
                                    },
                                    error: function (error) {
                                        new Noty({
                                            text: error.message,
                                            type: "error",
                                            <?php if(app()->getLocale() == 'ar'): ?>
                                            layout:'topLeft',
                                            <?php elseif(app()->getLocale() == 'he'): ?>
                                            layout:'topLeft',
                                            <?php else: ?>
                                            layout:'topRight',
                                            <?php endif; ?>
                                            timeout: 3000,
                                            killer: true,
                                        }).show();
                                    }
                                });
                            }



                        ),

                        Noty.button("<?php echo app('translator')->get('general.no'); ?>", 'btn btn-primary mr-2', function () {

                            n.close();

                        })
                    ]
                }
            );

            n.show();


        })




        $(document).on('click','#edit_model_slider_image',function (e){
            e.preventDefault();
              let url = $(this).data('url');
            let id = $(this).data('id');
            let image = $(this).data('image');
            console.log(image)

            $('#edit_slider_show_image').modal('show');

            $("#edit_slider_show_image").find('.image-preview').attr('src',image);

            $('#edit_slider_show_image #form_update_slider_image').attr('action',url);
            $('#edit_slider_show_image #form_update_slider_image').attr('data-id',id);

           // $('#edit_slider_show #form_update_slider #ar-name').val(name_ar);
            //$('#edit_slider_show #form_update_slider #en-name').attr('value',name_en);
           // $('#edit_slider_show #form_update_slider #he-name').val(name_he);


        });
        $(document).on('submit','#form_update_slider_image',function (e){
            let loader = `
                        <div class="d-flex justify-content-center align-items-center">
                        <div class="loader loader-md"></div>
                        </div>
                            `;
            e.preventDefault();


            let url = $(this).attr('action');
            let formData = new FormData($('#form_update_slider_image')[0]);
            $('#image-loading-edit').empty().append(loader);



            $.ajax({
                type: "POST",

                dataType: 'json',
                url: url,
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    $("#edit_slider_show_image").modal("hide");
                    $('#image-loading-edit').empty()
                    $(".print-error-msg_edit").find("ul").html('');
                    $(".print-error-msg_edit").css('display','none');
                    // $('#create_slider').modal('hide');
                    $('#form_update_slider_image')[0].reset();
                    rolesTable.draw();
                    new Noty({
                        text: response.message,
                        type: "success",
                        <?php if(app()->getLocale() == 'ar'): ?>
                        layout:'topLeft',
                        <?php elseif(app()->getLocale() == 'he'): ?>
                        layout:'topLeft',
                        <?php else: ?>
                        layout:'topRight',
                        <?php endif; ?>
                        timeout: 3000,
                        killer: true,
                    }).show();
                },
                error: function (error) {
                    console.log(error.responseJSON)
                    $('#image-loading-edit').empty()

                    $(".print-error-msg_edit").find("ul").html('');
                    $(".print-error-msg_edit").css('display','block');
                    $.each(error.responseJSON.errors, function (key, value) {
                        console.log(value);
                        $(".print-error-msg_edit").find("ul").append('<li>'+value+'</li>');
                    });

                }
            });
        });





        $(document).on('click','#edit_model_slider_video',function (e){
            e.preventDefault();
            let url = $(this).data('url');
            let id = $(this).data('id');
            let video = $(this).data('video');
            console.log(url,id,video)
            //how to app parameter to url
            url = url + '?type=video';
            console.log(url)



            $('#edit_slider_show_video').modal('show');



            $('#edit_slider_show_video #form_update_slider').attr('action',url);
            $('#edit_slider_show_video #form_update_slider').attr('data-id',id);

            // $('#edit_slider_show #form_update_slider #ar-name').val(name_ar);
            //$('#edit_slider_show #form_update_slider #en-name').attr('value',name_en);
            // $('#edit_slider_show #form_update_slider #he-name').val(name_he);


        });

        $(document).on('submit','#form_update_slider_video',function (e){
            let loader = `
                        <div class="d-flex justify-content-center align-items-center">
                        <div class="loader loader-md"></div>
                        </div>
                            `;
            e.preventDefault();

            let url = $(this).attr('action');
            let formData = new FormData($('#form_update_slider_video')[0]);

            $('#video-loading-edit').empty().append(loader);


            $.ajax({
                type: "POST",

                dataType: 'json',
                url: url,
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    $('#video-loading-edit').empty()
                    $(".print-error-msg_edit").find("ul").html('');
                    $(".print-error-msg_edit").css('display','none');
                    $("#edit_slider_show_video").modal("hide");
                    // $('#create_slider').modal('hide');
                    $('#form_update_slider_video')[0].reset();
                    rolesTable.draw();
                    new Noty({
                        text: response.message,
                        type: "success",
                        <?php if(app()->getLocale() == 'ar'): ?>
                        layout:'topLeft',
                        <?php elseif(app()->getLocale() == 'he'): ?>
                        layout:'topLeft',
                        <?php else: ?>
                        layout:'topRight',
                        <?php endif; ?>
                        timeout: 3000,
                        killer: true,
                    }).show();
                },
                error: function (error) {

                    $('#video-loading-edit').empty()

                    $(".print-error-msg_edit").find("ul").html('');
                    $(".print-error-msg_edit").css('display','block');
                    $.each(error.responseJSON.errors, function (key, value) {
                        console.log(value);
                        $(".print-error-msg_edit").find("ul").append('<li>'+value+'</li>');
                    });

                }
            });
        });




       $(document).on('submit','#bulk_delete_sliders',function (e){
           e.preventDefault();
           let formData = new FormData($('#bulk_delete_sliders')[0]);
           $.ajax({
               type: "post",
               url: "<?php echo e(route('admin.sliders.bulk_delete')); ?>",
               data: formData,
               processData: false,
               contentType: false,
               success: function (response) {
                   rolesTable.draw();
                   new Noty({
                       text: response.message,
                       type: "success",
                       <?php if(app()->getLocale() == 'ar'): ?>
                       layout:'topLeft',
                       <?php elseif(app()->getLocale() == 'he'): ?>
                       layout:'topLeft',
                       <?php else: ?>
                       layout:'topRight',
                       <?php endif; ?>
                       timeout: 3000,
                       killer: true,
                   }).show();
               },
               error: function (error) {
                   new Noty({
                       text: error.message,
                       type: "error",
                       <?php if(app()->getLocale() == 'ar'): ?>
                       layout:'topLeft',
                       <?php elseif(app()->getLocale() == 'he'): ?>
                       layout:'topLeft',
                       <?php else: ?>
                       layout:'topRight',
                       <?php endif; ?>
                       timeout: 3000,
                       killer: true,
                   }).show();
               }
           });
       });

        $(document).on('submit','#status_sliders',function (e){
            e.preventDefault();
            let formData = new FormData($('#status_sliders')[0]);
            $.ajax({
                type: "post",
                url: "<?php echo e(route('admin.sliders.status')); ?>",
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    rolesTable.draw();
                    new Noty({
                        text: response.message,
                        type: "success",
                        <?php if(app()->getLocale() == 'ar'): ?>
                        layout:'topLeft',
                        <?php elseif(app()->getLocale() == 'he'): ?>
                        layout:'topLeft',
                        <?php else: ?>
                        layout:'topRight',
                        <?php endif; ?>
                        timeout: 3000,
                        killer: true,
                    }).show();
                },
                error: function (error) {
                    new Noty({
                        text: error.message,
                        type: "error",
                        <?php if(app()->getLocale() == 'ar'): ?>
                        layout:'topLeft',
                        <?php elseif(app()->getLocale() == 'he'): ?>
                        layout:'topLeft',
                        <?php else: ?>
                        layout:'topRight',
                        <?php endif; ?>
                        timeout: 3000,
                        killer: true,
                    }).show();
    }
            });
        });
    });



</script>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('.dashboard.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\project new\Project\resources\views/dashboard/sliders/index.blade.php ENDPATH**/ ?>