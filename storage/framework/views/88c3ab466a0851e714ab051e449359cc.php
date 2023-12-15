
 <div class="category_btn_del" style="display: inline-block">
     <form  action="<?php echo e(route('admin.news.destroy', $news->id)); ?>" class="my-1 my-xl-0  " id="form_delete_news" method="post" data-id="<?php echo e($news->id); ?>" >
         <?php echo csrf_field(); ?>
         <?php echo method_field('delete'); ?>
         <button type="submit" class="mdc-button mdc-button--raised icon-button filled-button--secondary delete">
             <i class="material-icons mdc-button__icon">delete</i>
         </button>
     </form>
 </div>




 <button
     class="mdc-button mdc-button--raised icon-button filled-button--success"
     data-toggle="modal" data-target="#edit_category" id="edit_model_news"
     data-url="<?php echo e(route('admin.news.update',$news->id)); ?>" data-id="<?php echo e($news->id); ?>"
     data-name_en="<?php echo e($news->translate('en')->title); ?>"
     data-name_he="<?php echo e($news->translate('he')->title); ?>"
     data-name_ar="<?php echo e($news->translate('ar')->title); ?>"

     data-short_name_en="<?php echo e($news->translate('en')->short_name); ?>"
     data-short_name_he="<?php echo e($news->translate('he')->short_name); ?>"
     data-short_name_ar="<?php echo e($news->translate('ar')->short_name); ?>"


     data-description_en="<?php echo e($news->translate('en')->description); ?>"
     data-description_he="<?php echo e($news->translate('he')->description); ?>"
     data-description_ar="<?php echo e($news->translate('ar')->description); ?>"

        data-category_name=" <?php if(app()->getLocale() === 'ar' ): ?> <?php echo e($news->category->translate('ar')->name); ?> <?php elseif(app()->getLocale() === "he"): ?> <?php echo e($news->category->translate('he')->name); ?> <?php else: ?> <?php echo e($news->category->translate('en')->name); ?> <?php endif; ?>"
        data-category_id="<?php echo e($news->category->id); ?>"
        data-image="<?php echo e($news->image); ?>"
 >
     <i class="material-icons mdc-button__icon">colorize</i>
 </button>




 <div  class="modal fade" id="edit_news_show" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

     <div class="modal-dialog  modal-dialog-centered modal-lg">

         <div class="modal-content">
             <div class="modal-header">

                 <h5 class="modal-title" id="exampleModalLabel"><?php echo app('translator')->get('general.update'); ?> <?php echo app('translator')->get('general.new'); ?></h5>





             </div>
             <form action="<?php echo e(route('admin.news.update',$news->id)); ?>" method="post" id="form_update_news" data-id="" enctype="multipart/form-data">
                 <?php echo csrf_field(); ?>
                 <input type="hidden" name="_method" value="PUT" id="method">
                 <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                 <div class="modal-body">
                     <div class="container">
                         <div class="row">
                             <?php $__currentLoopData = config('translatable.locales'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $locale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                 <div class="col-md-4 news-edit" style="margin-top: 10px;">
                                     <div  style="text-align: <?php if(app()->getLocale() === 'ar' ): ?> right <?php elseif(app()->getLocale() === "he"): ?> right <?php else: ?> left <?php endif; ?>" class="form-group">
                                         <label for="exampleInputEmail1"><?php echo app('translator')->get('general.'.$locale.'.title'); ?></label>
                                         <input style="border: black 2px solid;border-radius: 10px" type="text" class="form-control" name="<?php echo e($locale); ?>[title]" id="<?php echo e($locale); ?>-title" value="<?php echo e($news->translate($locale)->title); ?>">
                                     </div>
                                 </div>
                                 <div class="col-md-8 news-edit">

                                     <div style="text-align: <?php if(app()->getLocale() === 'ar' ): ?> right <?php elseif(app()->getLocale() === "he"): ?> right <?php else: ?> left <?php endif; ?>" class="form-input">
                                         <label class="col-form-label " for="exampleFormControlTextarea1"><?php echo app('translator')->get('general.'.$locale.'.description'); ?></label>
                                         <textarea   name="<?php echo e($locale); ?>[description]"  class="form-control ckeditor" id="<?php echo e($locale); ?>-description" rows="3"></textarea>
                                     </div>
                                 </div>

                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                 <?php $__currentLoopData = config('translatable.locales'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $locale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                 <div class="col-md-4 news-edit" style="margin-top: 10px;">
                                     <div  style="text-align: <?php if(app()->getLocale() === 'ar' ): ?> right <?php elseif(app()->getLocale() === "he"): ?> right <?php else: ?> left <?php endif; ?>" class="form-group">
                                         <label for="exampleInputEmail1"><?php echo app('translator')->get('general.'.$locale.'.short_name'); ?></label>
                                         <input  type="text" class="form-control" name="<?php echo e($locale); ?>[short_name]" id="<?php echo e($locale); ?>-short_name" value="<?php echo e($news->translate($locale)->short_name); ?>">
                                     </div>
                                 </div>
                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                             <div class="form-group col-md-12 news-edit"  style="text-align: <?php if(app()->getLocale() === 'ar' ): ?> right <?php elseif(app()->getLocale() === "he"): ?> right <?php else: ?> left <?php endif; ?>">
                                 <div class="form-group floating-label-container ">

                                     <label  class="col-form-label" for="exampleFormControlTextarea1"><?php echo app('translator')->get('general.category'); ?></label>

                                     <select id="category_id" class="form-control "  name="category_id">
                                         <option id="category_option_id"  ></option>
                                         <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                             <option   value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                     </select>


                                 </div>

                             </div>





                                 <div class="form-group col-md-12 news-edit"  style="text-align: <?php if(app()->getLocale() === 'ar' ): ?> right <?php elseif(app()->getLocale() === "he"): ?> right <?php else: ?> left <?php endif; ?>">

                                     <label for="Image" class="floating-label"><?php echo app('translator')->get('general.image'); ?></label>
                                     <input type="file" class="form-control image" id="image" name="image"  >


                                 </div>


                             <div class="form-group col-md-12" id="loading-news-edit" ></div>





                         </div>

                     </div>







                     <div  style="display: none;margin-top: 10px;border: 2px solid saddlebrown; border-radius: 20px" class="alert alert-danger print-error-msg_edit  <?php if(app()->getLocale() === "ar"): ?> text-right <?php elseif(app()->getLocale() === "he"): ?>  text-right <?php else: ?> text-left <?php endif; ?>"> <ul></ul></div>

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

<?php /**PATH D:\project new\Project\resources\views/dashboard/news/data_table/actions.blade.php ENDPATH**/ ?>