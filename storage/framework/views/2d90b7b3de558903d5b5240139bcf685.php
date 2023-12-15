
 <div class="category_btn_del" style="display: inline-block">
     <form  action="<?php echo e(route('admin.sliders.destroy', $slider->id)); ?>" class="my-1 my-xl-0  " id="form_delete_slider" method="post" data-id="<?php echo e($slider->id); ?>" >
         <?php echo csrf_field(); ?>
         <?php echo method_field('delete'); ?>
         <button type="submit" class="mdc-button mdc-button--raised icon-button filled-button--secondary delete">
             <i class="material-icons mdc-button__icon">delete</i>
         </button>
     </form>
 </div>



 <?php if($slider->type === "image"): ?>
     <button
         class="mdc-button mdc-button--raised icon-button filled-button--success" data-toggle="modal"  id="edit_model_slider_image" data-url="<?php echo e(route('admin.sliders.update',$slider->id)); ?>" data-id="<?php echo e($slider->id); ?>" data-image="<?php echo e($slider->image_path); ?>" >
         <i class="material-icons mdc-button__icon">colorize</i>
     </button>

     <div class="modal fade" id="edit_slider_show_image" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

         <div class="modal-dialog">

             <div class="modal-content">
                 <div class="modal-header">

                     <h5 class="modal-title" id="exampleModalLabel"><?php echo app('translator')->get('general.update'); ?></h5>





                 </div>
                 <form action="<?php echo e(route('admin.sliders.update',$slider->id)); ?>" method="post" id="form_update_slider_image" data-id="">
                     <input type="hidden" name="type" value="image" >

                     <input type="hidden" name="_method" value="PUT" id="method">
                     <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                     <div class="modal-body">
                         <div class="container">
                             <div class="row">
                                 <div class="form-group col-md-12 image-edit"  style="text-align: <?php if(app()->getLocale() === 'ar' ): ?> right <?php elseif(app()->getLocale() === "he"): ?> right <?php else: ?> left <?php endif; ?>">

                                     <label for="Image" class="floating-label"><?php echo app('translator')->get('general.image'); ?></label>
                                     <input type="file" class="form-control image" id="image" name="image"  >


                                 </div>

                                 <div class="form-group col-md-12 image-edit">
                                     <div class="form-group">
                                         <img src=""  style="width: 100px" class="img-thumbnail image-preview" alt="">
                                     </div>


                                 </div>

                                 <div class="form-group col-md-12" id="image-loading-edit"></div>
                             </div>
                             <div  style="display: none;margin-top: 10px;border: 2px solid saddlebrown; border-radius: 20px" class="alert alert-danger print-error-msg_edit <?php if(app()->getLocale() === "ar"): ?> text-right <?php elseif(app()->getLocale() === "he"): ?>  text-right <?php else: ?> text-left <?php endif; ?>"> <ul></ul></div>
                         </div>


                     </div>
                     <div class="modal-footer">
                         <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo app('translator')->get('general.close'); ?></button>
                         <button id="submit_slider_update" type="submit" style="background-color: #c3a962" class="btn"><?php echo app('translator')->get('general.update'); ?></button>
                     </div>
                 </form>
             </div>
         </div>
     </div>


 <?php else: ?>
     <button
         class="mdc-button mdc-button--raised icon-button filled-button--success" data-toggle="modal"  id="edit_model_slider_video" data-url="<?php echo e(route('admin.sliders.update',$slider->id)); ?>" data-id="<?php echo e($slider->id); ?>" data-video="<?php echo e($slider->video_path); ?>" >
         <i class="material-icons mdc-button__icon">colorize</i>
     </button>


     <div class="modal fade" id="edit_slider_show_video" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

         <div class="modal-dialog">

             <div class="modal-content">
                 <div class="modal-header">

                     <h5 class="modal-title" id="exampleModalLabel"><?php echo app('translator')->get('general.update'); ?></h5>





                 </div>
                 <form action="<?php echo e(route('admin.sliders.update',$slider->id)); ?>" method="post" id="form_update_slider_video" data-id="">

                     <input type="hidden" name="_method" value="PUT" id="method">
                     <input type="hidden" name="type" value="video" >
                     <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                     <div class="modal-body">
                         <div class="container">
                             <div class="row">
                                 <div class="form-group col-md-12"  style="text-align: <?php if(app()->getLocale() === 'ar' ): ?> right <?php elseif(app()->getLocale() === "he"): ?> right <?php else: ?> left <?php endif; ?>">

                                     <label for="video" class="floating-label"><?php echo app('translator')->get('general.video'); ?></label>
                                     <input type="file" class="form-control " id="video" name="video"  >


                                 </div>
                                 <div class="form-group col-md-12" id="video-loading-edit"></div>

                             </div>
                             <div  style="display: none;margin-top: 10px;border: 2px solid saddlebrown; border-radius: 20px" class="alert alert-danger print-error-msg_edit <?php if(app()->getLocale() === "ar"): ?> text-right <?php elseif(app()->getLocale() === "he"): ?>  text-right <?php else: ?> text-left <?php endif; ?>"> <ul></ul></div>
                         </div>


                     </div>
                     <div class="modal-footer">
                         <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo app('translator')->get('general.close'); ?></button>
                         <button id="submit_slider_update" type="submit" style="background-color: #c3a962" class="btn"><?php echo app('translator')->get('general.update'); ?></button>
                     </div>
                 </form>
             </div>
         </div>
     </div>

 <?php endif; ?>















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

<?php /**PATH D:\project new\Project\resources\views/dashboard/sliders/data_table/actions.blade.php ENDPATH**/ ?>