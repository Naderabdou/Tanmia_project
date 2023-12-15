<?php $__env->startSection('subtitle', __('general.about_us')); ?>

<?php $__env->startSection('content'); ?>
    <!-- Button trigger modal -->

    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="create_aboutUs" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

        <div class="modal-dialog modal-lg">

            <div class="modal-content">
                <div class="modal-header">

                    <h5 class="modal-title" id="exampleModalLabel"><?php echo app('translator')->get('general.create'); ?> <?php echo app('translator')->get('general.about_us'); ?></h5>





                </div>
                <form action="<?php echo e(route('admin.aboutUs.store')); ?>" method="post" id="form_create_aboutUs" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <?php $__currentLoopData = config('translatable.locales'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $locale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-md-4 aboutUs-add">

                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop" style="margin-bottom: 22px">
                                    <div class="mdc-text-field mdc-text-field--outlined">
                                        <input class="form-input mdc-text-field__input" id="text-field-hero-input"  name="<?php echo e($locale); ?>[name]" value="<?php echo e(old($locale.'.title')); ?>" required>
                                        <div class="mdc-notched-outline">
                                            <div class="mdc-notched-outline__leading"></div>
                                            <div class="mdc-notched-outline__notch">
                                                <label for="text-field-hero-input" class="mdc-floating-label"><?php echo app('translator')->get('general.'.$locale.'.name'); ?></label>
                                            </div>
                                            <div class="mdc-notched-outline__trailing"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <div class="col-md-8 aboutUs-add">

                                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop" style="margin-bottom: 22px">
                                        <div class="mdc-text-field mdc-text-field--outlined">

                                            <textarea name="<?php echo e($locale); ?>[description]"   class="form-input mdc-text-field__input" id="text-field-hero-input"><?php echo e(old($locale.'.description')); ?></textarea>
                                            <div class="mdc-notched-outline">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label for="text-field-hero-input" class="mdc-floating-label"><?php echo app('translator')->get('general.'.$locale.'.description'); ?></label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>






                                <div class="form-group  col-md-12 aboutUs-add">
                                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop" style="margin-bottom: 22px">
                                        <div class="mdc-text-field mdc-text-field--outlined">
                                            <input type="file" class="form-input mdc-text-field__input image" id="text-field-hero-input"  name="image">
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


            <div class="form-input col-md-12" id="loading-aboutUs-add"></div>

                        </div>

                    </div>







                        <div  style="display: none;margin-top: 10px;border: 2px solid saddlebrown; border-radius: 20px" class="alert alert-danger print-error-msg  <?php if(app()->getLocale() === "ar"): ?> text-right <?php elseif(app()->getLocale() === "he"): ?>  text-right <?php else: ?> text-left <?php endif; ?>"> <ul></ul></div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn_close" data-dismiss="modal"><?php echo app('translator')->get('general.close'); ?></button>
                    <button type="submit" style="background-color: #c3a962" class="btn"><?php echo app('translator')->get('general.create'); ?></button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal -->

    <!-- Button trigger modal -->


    <!-- Modal -->



    <div class="mdc-layout-grid" style="margin-top: 20px;" >
        <div style="text-align: <?php if(app()->getLocale() === 'ar' ): ?> right <?php elseif(app()->getLocale() === "he"): ?> right <?php else: ?> left <?php endif; ?>">
            <button type="button" class="mdc-button mdc-button--raised filled-button--btn" data-toggle="modal" data-target="#create_aboutUs">
                <i class="material-icons mdc-button__icon">add</i>

                <?php echo app('translator')->get('general.create'); ?>
            </button>
            <form method="post" action="<?php echo e(route('admin.aboutUs.bulk_delete')); ?>" style="display: inline-block;" id="bulk_delete_aboutUs">
                <?php echo csrf_field(); ?>
                <?php echo method_field('delete'); ?>
                <input type="hidden" name="record_ids" class="record-ids">
                <button class="mdc-button mdc-button--raised filled-button--btn all_delete"  disabled="true" id="bulk-delete">
                    <i class="material-icons mdc-button__icon">delete</i>

                    <?php echo app('translator')->get('general.bulk_delete'); ?>
                </button>
            </form><!-- end of form -->
            <form method="post" action="<?php echo e(route('admin.aboutUs.status')); ?>" style="display: inline-block;" id="status_aboutUs">
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
                        <table style="width: 100%;" class="table m-0" id="aboutUs-table">
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
                                <th><?php echo app('translator')->get('general.name'); ?></th>
                                <th><?php echo app('translator')->get('general.description'); ?></th>
                                <th><?php echo app('translator')->get('general.image'); ?></th>
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
        let rolesTable = $('#aboutUs-table').DataTable({
            sPaginationType: "full_numbers",
            dom: "tiplr",
            serverSide: true,
            processing: true,
            responsive: true,
            "language": {
                "url": "<?php echo e(asset('admin_assets/datatable-lang/' . app()->getLocale() . '.json')); ?>"
            },
            ajax: {
                url: '<?php echo e(route('admin.aboutUs.data')); ?>',
            },
            columns: [

                {data: 'record_select', name: 'record_select', orderable: false, searchable: false },
                {data: 'id', name: 'id'},
                {data: 'name', name: 'name', searchable: true, sortable: true },
                {data: 'description', name: 'description', searchable: false, sortable: false,orderable: false   },
                {data: 'image', name: 'image', searchable: false, sortable: false  ,orderable: false},
                {data: 'status', name: 'status',  sortable: true , },
                {data: 'created_at', name: 'created_at', searchable: false},
                {data: 'actions', name: 'actions', searchable: false, sortable: false},
            ],
            order: [[6, 'desc']],
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
        $(document).on('submit','#form_create_aboutUs',function (e){
            $(".print-error-msg").find("ul").html('');
            $(".print-error-msg").css('display','none');
            let loader = `
                        <div class="d-flex justify-content-center align-items-center">
                        <div class="loader loader-md"></div>
                        </div>
                            `;
            e.preventDefault();
            let formData = new FormData($('#form_create_aboutUs')[0]);
            $('#loading-aboutUs-add').empty().append(loader);
            $('.aboutUs-add').css('display','none');
            $.ajax({
                type: "post",
                url: "<?php echo e(route('admin.aboutUs.store')); ?>",
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    $("#create_aboutUs").modal("hide");
                    $('#loading-aboutUs-add').empty();
                    $(".print-error-msg").find("ul").html('');
                    $(".print-error-msg").css('display','none');
                    $('.aboutUs-add').css('display','block');
                    // $('#create_category').modal('hide');
                    $('#form_create_aboutUs')[0].reset();
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
                    $('#loading-aboutUs-add').empty();
                    $('.aboutUs-add').css('display','block');

                    $(".print-error-msg").find("ul").html('');
                    $(".print-error-msg").css('display','block');
                    $.each(error.responseJSON.errors, function (key, value) {
                        $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
                    });

                }
            });
        });

        $(document).on('submit','#form_delete_aboutUs',function(e){
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

        $(document).on('click','#edit_model_aboutUs',function (e){
            e.preventDefault();
              let url = $(this).data('url');
            let id = $(this).data('id');
            let name_ar = $(this).data('name_ar');
            let name_en = $(this).data('name_en');
            let name_he = $(this).data('name_he');
            let description_ar = $(this).data('description_ar');
            let description_en = $(this).data('description_en');
            let description_he = $(this).data('description_he');




            $('#edit_aboutUs_show').modal('show');
            $("#edit_aboutUs_show").find('#ar-name').val(name_ar);
            $("#edit_aboutUs_show").find('#en-name').val(name_en);
            $("#edit_aboutUs_show").find('#he-name').val(name_he);
            $("#edit_aboutUs_show").find('#ar-description').val(description_ar);
            $("#edit_aboutUs_show").find('#en-description').val(description_en);
            $("#edit_aboutUs_show").find('#he-description').val(description_he);

            $('#edit_aboutUs_show #form_update_aboutUs').attr('action',url);
            $('#edit_aboutUs_show #form_update_aboutUs').attr('data-id',id);





        });

        $(document).on('submit','#form_update_aboutUs',function (e){
            $(".print-error-msg_edit").find("ul").html('');
            $(".print-error-msg_edit").css('display','none');
            let loader = `
                        <div class="d-flex justify-content-center align-items-center">
                        <div class="loader loader-md"></div>
                        </div>
                            `;
            e.preventDefault();

            let url = $(this).attr('action');
            let formData = new FormData($('#form_update_aboutUs')[0]);
            $('#loading-aboutUs-edit').empty().append(loader);




            $.ajax({
                type: "POST",

                dataType: 'json',
                url: url,
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    $('#loading-aboutUs-edit').empty()
                    $("#edit_aboutUs_show").modal("hide");

                    $(".print-error-msg_edit").find("ul").html('');
                    $(".print-error-msg_edit").css('display','none');
                    $('#form_update_aboutUs')[0].reset();
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

                    $('#loading-aboutUs-edit').empty()
                    $(".print-error-msg_edit").find("ul").html('');
                    $(".print-error-msg_edit").css('display','block');
                    $.each(error.responseJSON.errors, function (key, value) {
                        console.log(value);
                        $(".print-error-msg_edit").find("ul").append('<li>'+value+'</li>');
                    });

                }
            });
        });

       $(document).on('submit','#bulk_delete_aboutUs',function (e){
           e.preventDefault();
           let formData = new FormData($('#bulk_delete_aboutUs')[0]);
           $.ajax({
               type: "post",
               url: "<?php echo e(route('admin.aboutUs.bulk_delete')); ?>",
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

        $(document).on('submit','#status_aboutUs',function (e){
            e.preventDefault();
            let formData = new FormData($('#status_aboutUs')[0]);
            $.ajax({
                type: "post",
                url: "<?php echo e(route('admin.aboutUs.status')); ?>",
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



<?php echo $__env->make('.dashboard.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\project new\Project\resources\views/dashboard/aboutUS/index.blade.php ENDPATH**/ ?>