<?php $__env->startSection('subtitle', __('general.messages')); ?>

<?php $__env->startSection('content'); ?>
    <!-- Button trigger modal -->

    <!-- Button trigger modal -->


    <!-- Modal -->
    <!-- Modal -->

    <!-- Button trigger modal -->


    <!-- Modal -->



    <div class="mdc-layout-grid" style="margin-top: 20px;" >
        <div style="text-align: <?php if(app()->getLocale() === 'ar' ): ?> right <?php elseif(app()->getLocale() === "he"): ?> right <?php else: ?> left <?php endif; ?>">
            <form method="post" action="<?php echo e(route('admin.messages.bulk_delete')); ?>" style="display: inline-block;" id="bulk_delete_messages">
                <?php echo csrf_field(); ?>
                <?php echo method_field('delete'); ?>
                <input type="hidden" name="record_ids" class="record-ids">
                <button class="mdc-button mdc-button--raised filled-button--btn all_delete"  disabled="true" id="bulk-delete">
                    <i class="material-icons mdc-button__icon">delete</i>

                    <?php echo app('translator')->get('general.bulk_delete'); ?>
                </button>
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
                        <table style="width: 100%;" class="table m-0" id="messages-table">
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
                                <th><?php echo app('translator')->get('general.email'); ?></th>
                                <th><?php echo app('translator')->get('general.phone'); ?></th>
                                <th><?php echo app('translator')->get('general.object'); ?></th>
                                <th><?php echo app('translator')->get('general.message'); ?></th>
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
        let rolesTable = $('#messages-table').DataTable({
            sPaginationType: "full_numbers",
            dom: "tiplr",
            serverSide: true,
            processing: true,
            responsive: true,
            "language": {
                "url": "<?php echo e(asset('admin_assets/datatable-lang/' . app()->getLocale() . '.json')); ?>"
            },
            ajax: {
                url: '<?php echo e(route('admin.messages.data')); ?>',
            },
            columns: [

                {data: 'record_select', name: 'record_select', orderable: false, searchable: false },
                {data: 'id', name: 'id',orderable: false, searchable: false},
                {data: 'name', name: 'name', searchable: true, sortable: true },
                {data: 'email', name: 'email', searchable: true, sortable: true },
                {data: 'phone', name: 'phone', searchable: true, sortable: true },
                {data: 'subject', name: 'subject', searchable: false, sortable: false,orderable: false },
                {data: 'message', name: 'message', searchable: false, sortable: false,orderable: false },
                {data: 'status', name: 'status',  sortable: true , },
                {data: 'created_at', name: 'created_at', searchable: false},
                {data: 'actions', name: 'actions', searchable: false, sortable: false ,orderable: false},
            ],
            order: [[8, 'desc']],
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

        $(document).on('submit','#form_delete_messages',function(e){
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

        $(document).on('click','#edit_model_messages',function (e){
            e.preventDefault();
            let url = $(this).data('url');
            let id = $(this).data('id');
            let name = $(this).data('name');






            $('#edit_messages_show').modal('show');


            $('#edit_messages_show #name').val(name);
            $('#edit_messages_show #form_update_messages').attr('action',url);
            $('#edit_messages_show #form_update_messages').attr('data-id',id);
            $('#edit_messages_show #form_update_messages').find('#id').val(id);





        });

        $(document).on('submit','#form_update_messages',function (e){
            $(".print-error-msg_edit").find("ul").html('');
            $(".print-error-msg_edit").css('display','none');
            e.preventDefault();
            let loader = `
                        <div class="d-flex justify-content-center align-items-center">
                        <div class="loader loader-md"></div>
                        </div>
                            `;


            let url = $(this).attr('action');
            let formData = new FormData($('#form_update_messages')[0]);
            $('#message-loading').empty().append(loader);
            $('.message-replay').css('display','none');





            $.ajax({
                type: "POST",

                dataType: 'json',
                url: url,
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    $('#message-loading').empty();
                    $('.message-replay').css('display','block');
                    $("#edit_messages_show").modal("hide");
                    // $('#create_category').modal('hide');
                    $(".print-error-msg_edit").find("ul").html('');
                    $(".print-error-msg_edit").css('display','none');
                    $('#form_update_messages')[0].reset();
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
                    $('#message-loading').empty();
                    $('.message-replay').css('display','block');

                    $(".print-error-msg_edit").find("ul").html('');
                    $(".print-error-msg_edit").css('display','block');
                    $.each(error.responseJSON.errors, function (key, value) {
                        console.log(value);
                        $(".print-error-msg_edit").find("ul").append('<li>'+value+'</li>');
                    });

                }
            });
        });


       $(document).on('submit','#bulk_delete_messages',function (e){
           e.preventDefault();
           let formData = new FormData($('#bulk_delete_messages')[0]);
           $.ajax({
               type: "post",
               url: "<?php echo e(route('admin.messages.bulk_delete')); ?>",
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



<?php echo $__env->make('.dashboard.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\project new\Project\resources\views/dashboard/messages/index.blade.php ENDPATH**/ ?>