
 <div class="category_btn_del" style="display: inline-block">
     <form  action="<?php echo e(route('admin.aboutUs.destroy', $aboutUs->id)); ?>" class="my-1 my-xl-0  " id="form_delete_aboutUs" method="post" data-id="<?php echo e($aboutUs->id); ?>" >
         <?php echo csrf_field(); ?>
         <?php echo method_field('delete'); ?>
         <button type="submit" class="mdc-button mdc-button--raised icon-button filled-button--secondary delete">
             <i class="material-icons mdc-button__icon">delete</i>
         </button>
     </form>
 </div>




 <button
     class="mdc-button mdc-button--raised icon-button filled-button--success"
     data-toggle="modal" data-target="#edit_aboutUs" id="edit_model_aboutUs"
     data-url="<?php echo e(route('admin.aboutUs.update',$aboutUs->id)); ?>" data-id="<?php echo e($aboutUs->id); ?>"
     data-name_en="<?php echo e($aboutUs->translate('en')->name); ?>"
     data-name_he="<?php echo e($aboutUs->translate('he')->name); ?>"
     data-name_ar="<?php echo e($aboutUs->translate('ar')->name); ?>"

     data-description_en="<?php echo e($aboutUs->translate('en')->description); ?>"
     data-description_he="<?php echo e($aboutUs->translate('he')->description); ?>"
     data-description_ar="<?php echo e($aboutUs->translate('ar')->description); ?>"
        data-image="<?php echo e($aboutUs->image); ?>"
 >
     <i class="material-icons mdc-button__icon">colorize</i>
 </button>




 <div  class="modal fade" id="edit_aboutUs_show" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

     <div class="modal-dialog  modal-dialog-centered modal-lg">

         <div class="modal-content">
             <div class="modal-header">

                 <h5 class="modal-title" id="exampleModalLabel"><?php echo app('translator')->get('general.update'); ?> <?php echo app('translator')->get('general.about_us'); ?></h5>





             </div>
             <form action="<?php echo e(route('admin.aboutUs.update',$aboutUs->id)); ?>" method="post" id="form_update_aboutUs" data-id="" enctype="multipart/form-data">
                 <?php echo csrf_field(); ?>
                 <input type="hidden" name="_method" value="PUT" id="method">
                 <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                 <div class="modal-body">
                     <div class="container">
                         <div class="row">
                             <?php $__currentLoopData = config('translatable.locales'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $locale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                 <div class="col-md-4 aboutUs-edit" style="margin-top: 10px;">
                                     <div  style="text-align: <?php if(app()->getLocale() === 'ar' ): ?> right <?php elseif(app()->getLocale() === "he"): ?> right <?php else: ?> left <?php endif; ?>" class="form-group">
                                         <label for="exampleInputEmail1"><?php echo app('translator')->get('general.'.$locale.'.name'); ?></label>
                                         <input type="text" class="form-control" name="<?php echo e($locale); ?>[name]" id="<?php echo e($locale); ?>-name" value="<?php echo e($aboutUs->translate($locale)->name); ?>">
                                     </div>
                                 </div>
                                 <div class="col-md-8 aboutUs-edit">

                                     <div style="text-align: <?php if(app()->getLocale() === 'ar' ): ?> right <?php elseif(app()->getLocale() === "he"): ?> right <?php else: ?> left <?php endif; ?>" class="form-input aboutUs-edit">
                                         <label class="col-form-label" for="exampleFormControlTextarea1"><?php echo app('translator')->get('general.'.$locale.'.description'); ?></label>
                                         <textarea   name="<?php echo e($locale); ?>[description]"  class="form-control" id="<?php echo e($locale); ?>-description" rows="3"></textarea>
                                     </div>
                                 </div>

                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                 <div class="form-group col-md-12"  style="text-align: <?php if(app()->getLocale() === 'ar' ): ?> right <?php elseif(app()->getLocale() === "he"): ?> right <?php else: ?> left <?php endif; ?>">

                                     <label for="Image" class="floating-label"><?php echo app('translator')->get('general.image'); ?></label>
                                     <input type="file" class="form-control image" id="image" name="image"  >


                                 </div>

                                 <div  class="form-group col-md-12" id="loading-aboutUs-edit"></div>


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

<?php /**PATH D:\project new\Project\resources\views/dashboard/aboutUs/data_table/actions.blade.php ENDPATH**/ ?>