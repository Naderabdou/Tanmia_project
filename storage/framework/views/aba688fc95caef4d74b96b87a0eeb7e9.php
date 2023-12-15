
 <div class="category_btn_del" style="display: inline-block">
     <form  action="<?php echo e(route('admin.messages.destroy', $messages->id)); ?>" class="my-1 my-xl-0  " id="form_delete_messages" method="post" data-id="<?php echo e($messages->id); ?>" >
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
     data-url="<?php echo e(route('admin.messages.reply')); ?>" data-id="<?php echo e($messages->id); ?>"
     data-message="<?php echo e($messages->message); ?>}}"
     data-name="<?php echo e($messages->name); ?>}}"


 >
    <span class="material-symbols-outlined">
reply
</span>
 </button>




 <div  class="modal fade" id="edit_messages_show" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

     <div class="modal-dialog  modal-dialog-centered ">

         <div class="modal-content">
             <div class="modal-header">

                 <h5 class="modal-title" id="exampleModalLabel"> <?php echo app('translator')->get('general.reply_name'); ?> <?php echo e($messages->name); ?></h5>





             </div>
             <form action="<?php echo e(route('admin.messages.reply')); ?>" method="post" id="form_update_messages" data-id="" >
                 <?php echo csrf_field(); ?>
                 <input type="hidden" name="_method" value="POST" id="method">
                    <input type="hidden" name="id" value="" id="id">
                 <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                 <input type="hidden" name="name" value='' id="name">
                 <div class="modal-body">
                     <div class="container">
                         <div class="row">



                                 <div style="text-align: <?php if(app()->getLocale() === 'ar' ): ?> right <?php elseif(app()->getLocale() === "he"): ?> right <?php else: ?> left <?php endif; ?>" class="form-input col-md-12 message-replay">
                                     <label class="col-form-label" for="exampleFormControlTextarea1"><?php echo app('translator')->get('general.message'); ?></label>
                                     <textarea  style="border: #c3a962 2px solid;border-radius: 20px" name="replay"  class="form-control"  rows="3"></textarea>




                                    </div>
                             <div class="form-group col-md-12" id="message-loading"></div>

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








        <!-- Button trigger modal -->




<script>



</script>

<?php /**PATH D:\project new\Project\resources\views/dashboard/messages/data_table/actions.blade.php ENDPATH**/ ?>