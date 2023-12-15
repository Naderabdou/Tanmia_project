
 <div class="category_btn_del" style="display: inline-block">
     <form  action="<?php echo e(route('admin.settings.destroy', $settings->id)); ?>" class="my-1 my-xl-0  " id="form_delete_settings" method="post" data-id="<?php echo e($settings->id); ?>" >
         <?php echo csrf_field(); ?>
         <?php echo method_field('delete'); ?>
         <button type="submit" class="mdc-button mdc-button--raised icon-button filled-button--secondary delete">
             <i class="material-icons mdc-button__icon">delete</i>
         </button>
     </form>
 </div>




 <button
     class="mdc-button mdc-button--raised icon-button filled-button--success" data-toggle="modal" data-target="#edit_category" id="edit_model_settings" data-url="<?php echo e(route('admin.settings.update',$settings->id)); ?>" data-id="<?php echo e($settings->id); ?>"
     data-name_en="<?php echo e($settings->translate('en')->title); ?>"
     data-name_he="<?php echo e($settings->translate('he')->title); ?>"
     data-name_ar="<?php echo e($settings->translate('ar')->title); ?>"


     data-image="<?php echo e($settings->image_path); ?>" >
     <i class="material-icons mdc-button__icon">colorize</i>
 </button>





 <div class="modal fade" id="edit_settings_show" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

     <div class="modal-dialog">

         <div class="modal-content">
             <div class="modal-header">

                 <h5 class="modal-title" id="exampleModalLabel"><?php echo app('translator')->get('general.update'); ?></h5>





             </div>
             <form action="<?php echo e(route('admin.settings.update',$settings->id)); ?>" method="post" id="form_update_settings" data-id="">

                 <input type="hidden" name="_method" value="PUT" id="method">
                 <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                 <div class="modal-body">
                     <div class="container">
                         <div class="row">
                             <?php $__currentLoopData = config('translatable.locales'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $locale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                 <div class=" col-md-12 setting-edit" style="margin-top: 10px;">
                                     <div  style="text-align: <?php if(app()->getLocale() === 'ar' ): ?> right <?php elseif(app()->getLocale() === "he"): ?> right <?php else: ?> left <?php endif; ?>" class="form-group">
                                         <label for="exampleInputEmail1"><?php echo app('translator')->get('general.'.$locale.'.name'); ?></label>
                                         <input style="border: black 2px solid;border-radius: 10px" type="text" class="form-control" name="<?php echo e($locale); ?>[name]" id="<?php echo e($locale); ?>-name" value="<?php echo e($settings->translate($locale)->name); ?>">
                                     </div>
                                 </div>
                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                             <div class="form-group col-md-12 setting-edit "  style="text-align: <?php if(app()->getLocale() === 'ar' ): ?> right <?php elseif(app()->getLocale() === "he"): ?> right <?php else: ?> left <?php endif; ?>">

                                 <label for="Image" class="floating-label"><?php echo app('translator')->get('general.image'); ?></label>
                                 <input type="file" class="form-control image" id="image" name="image"  >


                             </div>

                             <div class="form-group col-md-12 setting-edit">
                                 <div class="form-group">
                                     <img src=""  style="width: 100px" class="img-thumbnail image-preview" alt="">
                                 </div>


                             </div>
                             <div class="form-group col-md-12" id="loading-edit-setting"></div>
                         </div>
                         <div  style="display: none;margin-top: 10px;border: 2px solid saddlebrown; border-radius: 20px" class="alert alert-danger print-error-msg_edit <?php if(app()->getLocale() === "ar"): ?> text-right <?php elseif(app()->getLocale() === "he"): ?>  text-right <?php else: ?> text-left <?php endif; ?>"> <ul></ul></div>
                     </div>


                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo app('translator')->get('general.close'); ?></button>
                     <button id="submit_settings_update" type="submit" style="background-color: #c3a962" class="btn"><?php echo app('translator')->get('general.update'); ?></button>
                 </div>
             </form>
         </div>
     </div>
 </div>








        <!-- Button trigger modal -->




<script>

    $(".image").change(function () {
        console.log(this.files);
        //each loop for multiple file preview

        if (this.files && this.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.image-preview').attr('src', e.target.result);
            }

            reader.readAsDataURL(this.files[0]);
        }

    });


</script>

<?php /**PATH D:\project new\Project\resources\views/dashboard/settings/data_table/actions.blade.php ENDPATH**/ ?>