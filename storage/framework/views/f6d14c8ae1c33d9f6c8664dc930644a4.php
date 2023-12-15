<?php $__env->startSection('content'); ?>
    <!-- Button trigger modal -->

    <!-- Button trigger modal -->


    <!-- Modal -->
    <!-- Modal -->

    <!-- Button trigger modal -->


    <!-- Modal -->



    <div class="mdc-layout-grid" style="margin-top: 20px;" >

        <div class="mdc-layout-grid__inner" style="margin-top: 1px">

            <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">

                <div class="mdc-card p-0">


                    <div class="table-responsive">
                        <table style="width: 100%;" class="table m-0" id="messagesShow-table">
                            <thead  class="<?php if(app()->getLocale() === "ar"): ?> text-right <?php elseif(app()->getLocale() === "he"): ?>  text-right <?php else: ?> text-left <?php endif; ?>">
                            <tr >


                                <th class="<?php if(app()->getLocale() === "ar"): ?> text-right <?php elseif(app()->getLocale() === "he"): ?>  text-right <?php else: ?> text-left <?php endif; ?>"><?php echo app('translator')->get('general.id'); ?></th>
                                <th class="<?php if(app()->getLocale() === "ar"): ?> text-right <?php elseif(app()->getLocale() === "he"): ?>  text-right <?php else: ?> text-left <?php endif; ?>"><?php echo app('translator')->get('general.name'); ?></th>
                                <th class="<?php if(app()->getLocale() === "ar"): ?> text-right <?php elseif(app()->getLocale() === "he"): ?>  text-right <?php else: ?> text-left <?php endif; ?>"><?php echo app('translator')->get('general.email'); ?></th>
                                <th class="<?php if(app()->getLocale() === "ar"): ?> text-right <?php elseif(app()->getLocale() === "he"): ?>  text-right <?php else: ?> text-left <?php endif; ?>"><?php echo app('translator')->get('general.phone'); ?></th>
                                <th class="<?php if(app()->getLocale() === "ar"): ?> text-right <?php elseif(app()->getLocale() === "he"): ?>  text-right <?php else: ?> text-left <?php endif; ?>"><?php echo app('translator')->get('general.object'); ?></th>
                                <th class="<?php if(app()->getLocale() === "ar"): ?> text-right <?php elseif(app()->getLocale() === "he"): ?>  text-right <?php else: ?> text-left <?php endif; ?>"><?php echo app('translator')->get('general.message'); ?></th>
                                <th class="<?php if(app()->getLocale() === "ar"): ?> text-right <?php elseif(app()->getLocale() === "he"): ?>  text-right <?php else: ?> text-left <?php endif; ?>"><?php echo app('translator')->get('general.status'); ?></th>
                                <th class="<?php if(app()->getLocale() === "ar"): ?> text-right <?php elseif(app()->getLocale() === "he"): ?>  text-right <?php else: ?> text-left <?php endif; ?>"><?php echo app('translator')->get('general.created_at'); ?></th>

                                <th><?php echo app('translator')->get('general.actions'); ?></th>

                            </tr>
                            </thead>
                            <tbody class="<?php if(app()->getLocale() === "ar"): ?> text-right <?php elseif(app()->getLocale() === "he"): ?>  text-right <?php else: ?> text-left <?php endif; ?>">

                                <tr>
                                    <td class="text-capitalize "><?php echo e($message->id); ?></td>
                                    <td class="text-capitalize "><?php echo e($message->name); ?></td>
                                    <td class="text-capitalize "><?php echo e($message->email); ?></td>
                                    <td class="text-capitalize"><?php echo e($message->phone); ?></td>
                                    <td class="text-capitalize"><?php echo e($message->subject); ?></td>
                                    <td class="text-capitalize"><?php echo e($message->message); ?></td>
                                    <?php if($message->status == 'replied'): ?>
                                        <td class="text-capitalize">
                                            <h5><span id="status" class="badge badge-success"><?php echo app('translator')->get('general.replied'); ?></span></h5>
                                        </td>
                                    <?php else: ?>
                                        <td class="text-capitalize">
                                        <h5><span id="status" class="badge badge-danger"><?php echo app('translator')->get('general.waiting'); ?></span></h5>
                                        </td>
                                    <?php endif; ?>

                                    <td class="text-capitalize"><?php echo e($message->created_at); ?></td>

                                    <td class="text-capitalize">
                                        <div class="category_btn_del" style="display: inline-block">
                                            <form  action="<?php echo e(route('admin.messages.destroy', $message->id)); ?>" class="my-1 my-xl-0  " id="form_delete_messages" method="post" data-id="<?php echo e($message->id); ?>" >
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('delete'); ?>
                                                <button type="submit" class="mdc-button mdc-button--raised icon-button filled-button--secondary delete">
                                                    <i class="material-icons mdc-button__icon">delete</i>
                                                </button>
                                            </form>
                                        </div>

                                        <button
                                            class="mdc-button mdc-button--raised icon-button filled-button--success"
                                            data-toggle="modal" data-target="#edit_messages" id="edit_model_messages"
                                            data-url="<?php echo e(route('admin.messages.reply')); ?>" data-id="<?php echo e($message->id); ?>"
                                            data-message="<?php echo e($message->message); ?>}}"


                                        >
                                         <span class="material-symbols-outlined">
                                           reply
                                         </span>
                                        </button>
                                        <div  class="modal fade" id="edit_messages" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

                                            <div class="modal-dialog  modal-dialog-centered ">

                                                <div class="modal-content">
                                                    <div class="modal-header">

                                                        <h5 class="modal-title" id="exampleModalLabel"> <?php echo app('translator')->get('general.reply_name'); ?> <?php echo e($message->name); ?></h5>





                                                    </div>
                                                    <form action="<?php echo e(route('admin.messages.reply')); ?>" method="post" id="form_update_messages" data-id="" >
                                                        <?php echo csrf_field(); ?>
                                                        <input type="hidden" name="_method" value="POST" id="method">
                                                        <input type="hidden" name="id" value="<?php echo e($message->id); ?>" id="id">
                                                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                                        <input type="hidden" name="name" value="<?php echo e($message->name); ?>">
                                                        <div class="modal-body">
                                                            <div class="container">
                                                                <div class="row">



                                                                    <div style="text-align: <?php if(app()->getLocale() === 'ar' ): ?> right <?php elseif(app()->getLocale() === "he"): ?> right <?php else: ?> left <?php endif; ?>" class="form-input col-md-12">
                                                                        <label class="col-form-label" for="exampleFormControlTextarea1"><?php echo app('translator')->get('general.message'); ?></label>
                                                                        <textarea  style="border: #c3a962 2px solid;border-radius: 20px" name="replay"  class="form-control"  rows="3"></textarea>




                                                                    </div>

                                                                </div>







                                                                <div  style="display: none;margin-top: 10px;border: 2px solid saddlebrown; border-radius: 20px" class="alert alert-danger print-error-msg_edit <?php if(app()->getLocale() === "ar"): ?> text-right <?php elseif(app()->getLocale() === "he"): ?>  text-right <?php else: ?> text-left <?php endif; ?>"> <ul></ul></div>

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo app('translator')->get('general.close'); ?></button>
                                                                <button type="submit" style="background-color: #c3a962" class="btn"><?php echo app('translator')->get('general.replay'); ?></button>
                                                            </div>

                                                        </div>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>

                                    </td>
                                </tr>

                            </tbody>

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






            $(document).on('submit','#form_update_messages',function (e){
                e.preventDefault();

                let url = $(this).attr('action');
                let formData = new FormData($('#form_update_messages')[0]);
                console.log(url);




                $.ajax({
                    type: "POST",

                    dataType: 'json',
                    url: url,
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function (response) {
                        $('#status').text('<?php echo app('translator')->get('general.replied'); ?>');
                        $('#status').removeClass('badge-danger');
                        $('#status').addClass('badge-success');

                        $("#edit_messages").modal("hide");
                        // $('#create_category').modal('hide');
                        $('#form_update_messages')[0].reset();

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



<?php echo $__env->make('.dashboard.layouts.app',  ['title' => __('general.messages')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\project new\Project\resources\views/dashboard/messages/show.blade.php ENDPATH**/ ?>