
 <div class="category_btn_del" style="display: inline-block">
     <form  action="<?php echo e(route('admin.contactUs.destroy', $contactUs->id)); ?>" class="my-1 my-xl-0  " id="form_delete_contactUs" method="post" data-id="<?php echo e($contactUs->id); ?>" >
         <?php echo csrf_field(); ?>
         <?php echo method_field('delete'); ?>
         <button type="submit" class="mdc-button mdc-button--raised icon-button filled-button--secondary delete">
             <i class="material-icons mdc-button__icon">delete</i>
         </button>
     </form>
 </div>




 <button
     class="mdc-button mdc-button--raised icon-button filled-button--success"
     data-toggle="modal" data-target="#edit_contactUs" id="edit_model_contactUs"
     data-url="<?php echo e(route('admin.contactUs.update',$contactUs->id)); ?>" data-id="<?php echo e($contactUs->id); ?>"
    data-email="<?php echo e($contactUs->email); ?>"
     data-phone="<?php echo e($contactUs->phone); ?>"
     data-Fax="<?php echo e($contactUs->Fax); ?>"
     data-POBox="<?php echo e($contactUs->POBox); ?>"
     data-Box_no="<?php echo e($contactUs->Box_no); ?>"
     data-zip_code="<?php echo e($contactUs->zip_code); ?>"

 >
     <i class="material-icons mdc-button__icon">colorize</i>
 </button>




 <div  class="modal fade" id="edit_contactUs_show" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

     <div class="modal-dialog  modal-dialog-centered modal-lg">

         <div class="modal-content">
             <div class="modal-header">

                 <h5 class="modal-title" id="exampleModalLabel"><?php echo app('translator')->get('general.update'); ?> <?php echo app('translator')->get('general.contact_us'); ?></h5>





             </div>
             <form action="<?php echo e(route('admin.contactUs.update',$contactUs->id)); ?>" method="post" id="form_update_contactUs" data-id="" enctype="multipart/form-data">
                 <?php echo csrf_field(); ?>
                 <input type="hidden" name="_method" value="PUT" id="method">
                 <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                 <div class="modal-body">
                     <div class="container">
                         <div class="row">

                                 <div class="col-md-12 contact-edit">
                                     <div  style="text-align: <?php if(app()->getLocale() === 'ar' ): ?> right <?php elseif(app()->getLocale() === "he"): ?> right <?php else: ?> left <?php endif; ?>" class="form-group">
                                         <label for="exampleInputEmail1"><?php echo app('translator')->get('general.email'); ?></label>
                                         <input type="email" class="form-control" name="email" id="email" value="<?php echo e($contactUs->email); ?>">
                                     </div>
                                 </div>

                             <div class="col-md-12 contact-edit">
                                 <div  style="text-align: <?php if(app()->getLocale() === 'ar' ): ?> right <?php elseif(app()->getLocale() === "he"): ?> right <?php else: ?> left <?php endif; ?>" class="form-group">
                                     <label for="exampleInputEmail1"><?php echo app('translator')->get('general.phone'); ?></label>
                                     <input style="" type="tel" class="form-control text-right <?php if(app()->getLocale() === "ar"): ?> text-right <?php elseif(app()->getLocale() === "he"): ?>  text-right <?php else: ?> text-left <?php endif; ?>" name="phone" id="phone" value="<?php echo e($contactUs->phone); ?>">
                                 </div>
                             </div>
                             <div class="col-md-12 contact-edit">
                                 <div  style="text-align: <?php if(app()->getLocale() === 'ar' ): ?> right <?php elseif(app()->getLocale() === "he"): ?> right <?php else: ?> left <?php endif; ?>" class="form-group">
                                     <label for="exampleInputEmail1"><?php echo app('translator')->get('general.fax'); ?></label>
                                     <input type="tel" class="form-control  <?php if(app()->getLocale() === "ar"): ?> text-right <?php elseif(app()->getLocale() === "he"): ?>  text-right <?php else: ?> text-left <?php endif; ?>" name="Fax" id="Fax" value="<?php echo e($contactUs->Fax); ?>">
                                 </div>
                             </div>

                             <div class="col-md-4 contact-edit">
                                 <div  style="text-align: <?php if(app()->getLocale() === 'ar' ): ?> right <?php elseif(app()->getLocale() === "he"): ?> right <?php else: ?> left <?php endif; ?>" class="form-group">
                                     <label for="exampleInputEmail1"><?php echo app('translator')->get('general.POBox'); ?></label>
                                     <input type="text" class="form-control" name="POBox" id="POBox" value="<?php echo e($contactUs->POBox); ?>">
                                 </div>
                             </div>
                             <div class="col-md-4 contact-edit">
                                 <div  style="text-align: <?php if(app()->getLocale() === 'ar' ): ?> right <?php elseif(app()->getLocale() === "he"): ?> right <?php else: ?> left <?php endif; ?>" class="form-group">
                                     <label for="exampleInputEmail1"><?php echo app('translator')->get('general.Box_no'); ?></label>
                                     <input  type="text" class="form-control" name="Box_no" id="Box_no" value="<?php echo e($contactUs->Box_no); ?>">
                                 </div>
                             </div>
                             <div class="col-md-4 contact-edit">
                                 <div  style="text-align: <?php if(app()->getLocale() === 'ar' ): ?> right <?php elseif(app()->getLocale() === "he"): ?> right <?php else: ?> left <?php endif; ?>" class="form-group">
                                     <label for="exampleInputEmail1"><?php echo app('translator')->get('general.zip_code'); ?></label>
                                     <input type="text" class="form-control" name="zip_code" id="zip_code" value="<?php echo e($contactUs->zip_code); ?>">
                                 </div>
                             </div>

                             <div class="form-group col-md-12" id="loading-contact-edit"></div>

                         </div>

                     </div>







                     <div  style="display: none;margin-top: 10px;border: 2px solid saddlebrown; border-radius: 20px" class="alert alert-danger print-error-msg_edit <?php if(app()->getLocale() === "ar"): ?> text-right <?php elseif(app()->getLocale() === "he"): ?>  text-right <?php else: ?> text-left <?php endif; ?>"> <ul></ul></div>

                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo app('translator')->get('general.close'); ?></button>
                     <button type="submit" style="background-color: #c3a962" class="btn"><?php echo app('translator')->get('general.update'); ?></button>
                 </div>
             </form>
         </div>
     </div>
 </div>








        <!-- Button trigger modal -->




<script>



</script>

<?php /**PATH D:\project new\Project\resources\views/dashboard/contactUs/data_table/actions.blade.php ENDPATH**/ ?>