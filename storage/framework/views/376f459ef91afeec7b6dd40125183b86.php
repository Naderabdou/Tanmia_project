
 <div class="category_btn_del" style="display: inline-block">
     <form  action="<?php echo e(route('admin.categories.destroy', $category->id)); ?>" class="my-1 my-xl-0  " id="form_delete_category" method="post" data-id="<?php echo e($category->id); ?>" >
         <?php echo csrf_field(); ?>
         <?php echo method_field('delete'); ?>
         <button type="submit" class="mdc-button mdc-button--raised icon-button filled-button--secondary delete">
             <i class="material-icons mdc-button__icon">delete</i>
         </button>
     </form>
 </div>




 <button
     class="mdc-button mdc-button--raised icon-button filled-button--success" data-toggle="modal" data-target="#edit_category" id="edit_model_category" data-url="<?php echo e(route('admin.categories.update',$category->id)); ?>" data-id="<?php echo e($category->id); ?>" data-name_en="<?php echo e($category->translate('en')->name); ?>" data-name_he="<?php echo e($category->translate('he')->name); ?>" data-name_ar="<?php echo e($category->translate('ar')->name); ?>">
     <i class="material-icons mdc-button__icon">colorize</i>
 </button>





 <div class="modal fade" id="edit_category_show" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

     <div class="modal-dialog">

         <div class="modal-content">
             <div class="modal-header">

                 <h5 class="modal-title" id="exampleModalLabel"><?php echo app('translator')->get('general.update'); ?></h5>





             </div>
             <form action="<?php echo e(route('admin.categories.update',$category->id)); ?>" method="post" id="form_update_category" data-id="">

                 <input type="hidden" name="_method" value="PUT" id="method">
                 <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                 <div class="modal-body">
                     <?php $__currentLoopData = config('translatable.locales'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $locale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                         <div  style="text-align: <?php if(app()->getLocale() === 'ar' ): ?> right <?php elseif(app()->getLocale() === "he"): ?> right <?php else: ?> left <?php endif; ?>" class="form-group  category-edit">
                             <label for="exampleInputEmail1"><?php echo app('translator')->get('general.'.$locale.'.name'); ?></label>
                             <input type="text" class="form-control" name="<?php echo e($locale); ?>[name]" id="<?php echo e($locale); ?>-name" value="<?php echo e($category->translate($locale)->name); ?>">
                         </div>


                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     <div class="form-group col-md-12" id="loading-category-edit"></div>
                     <div  style="display: none;margin-top: 10px;border: 2px solid saddlebrown; border-radius: 20px" class="alert alert-danger print-error-msg_edit  <?php if(app()->getLocale() === "ar"): ?> text-right <?php elseif(app()->getLocale() === "he"): ?>  text-right <?php else: ?> text-left <?php endif; ?>"> <ul></ul></div>

                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo app('translator')->get('general.close'); ?></button>
                     <button id="submit_category_update" type="submit" style="background-color: #c3a962" class="btn"><?php echo app('translator')->get('general.update'); ?></button>
                 </div>
             </form>
         </div>
     </div>
 </div>








        <!-- Button trigger modal -->




<script>



</script>

<?php /**PATH D:\project new\Project\resources\views/dashboard/categories/data_table/actions.blade.php ENDPATH**/ ?>