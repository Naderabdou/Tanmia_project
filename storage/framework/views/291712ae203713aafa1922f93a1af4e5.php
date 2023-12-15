<?php $__env->startSection('subtitle', __('general.admins')); ?>

<?php $__env->startSection('content'); ?>
    <!-- Button trigger modal -->

    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="create_users" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

        <div class="modal-dialog">

            <div class="modal-content">
                <div class="modal-header">

                    <h5 class="modal-title" id="exampleModalLabel"><?php echo app('translator')->get('general.create'); ?> <?php echo app('translator')->get('general.admin'); ?> </h5>





                </div>
                <form action="<?php echo e(route('admin.users.store')); ?>" method="post" id="form_create_users" >
                    <?php echo csrf_field(); ?>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">

                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop" style="margin-bottom: 22px">
                                    <div class="mdc-text-field mdc-text-field--outlined">
                                        <input class="form-input mdc-text-field__input" id="text-field-hero-input_name"  type="text" name="name" value="<?php echo e(old('name')); ?>" required>
                                        <div class="mdc-notched-outline">
                                            <div class="mdc-notched-outline__leading"></div>
                                            <div class="mdc-notched-outline__notch">
                                                <label for="text-field-hero-input_name" class="mdc-floating-label"><?php echo app('translator')->get('general.name'); ?></label>
                                            </div>
                                            <div class="mdc-notched-outline__trailing"></div>

                                        </div>
                                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">

                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop" style="margin-bottom: 22px">
                                    <div class="mdc-text-field mdc-text-field--outlined">
                                        <input class="form-input mdc-text-field__input" id="text-field-hero-input_email"  type="email" name="email" value="<?php echo e(old('email')); ?>" required>
                                        <div class="mdc-notched-outline">
                                            <div class="mdc-notched-outline__leading"></div>
                                            <div class="mdc-notched-outline__notch">
                                                <label for="text-field-hero-input_email" class="mdc-floating-label"><?php echo app('translator')->get('general.email'); ?></label>
                                            </div>
                                            <div class="mdc-notched-outline__trailing"></div>
                                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">

                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop" style="margin-bottom: 22px">
                                    <div class="mdc-text-field mdc-text-field--outlined">
                                        <input class="form-input mdc-text-field__input" id="text-field-hero-input_password"  type="password" name="password"  required>
                                        <div class="mdc-notched-outline">
                                            <div class="mdc-notched-outline__leading"></div>
                                            <div class="mdc-notched-outline__notch">
                                                <label for="text-field-hero-input_password" class="mdc-floating-label"><?php echo app('translator')->get('general.password'); ?></label>
                                            </div>
                                            <div class="mdc-notched-outline__trailing"></div>
                                        </div>
                                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">

                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop" style="margin-bottom: 22px">
                                    <div class="mdc-text-field mdc-text-field--outlined">
                                        <input class="form-input mdc-text-field__input" id="text-field-hero-input_password_confirmation"  type="password" name="password_confirmation" value="" required>
                                        <div class="mdc-notched-outline">
                                            <div class="mdc-notched-outline__leading"></div>
                                            <div class="mdc-notched-outline__notch">
                                                <label for="text-field-hero-input_password_confirmation" class="mdc-floating-label"><?php echo app('translator')->get('general.password_confirmation'); ?></label>
                                            </div>
                                            <div class="mdc-notched-outline__trailing"></div>
                                        </div>
                                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div  style="display: none;margin-top: 10px;border: 2px solid saddlebrown; border-radius: 20px" class="alert alert-danger print-error-msg  <?php if(app()->getLocale() === "ar"): ?> text-right <?php elseif(app()->getLocale() === "he"): ?>  text-right <?php else: ?> text-left <?php endif; ?>"> <ul></ul></div>
                    </div>



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
            <button type="button" class="mdc-button mdc-button--raised filled-button--btn" data-toggle="modal" data-target="#create_users">
                <i class="material-icons mdc-button__icon">add</i>

                <?php echo app('translator')->get('general.create'); ?>
            </button>
            <form method="post" action="<?php echo e(route('admin.users.bulk_delete')); ?>" style="display: inline-block;" id="bulk_delete_users">
                <?php echo csrf_field(); ?>
                <?php echo method_field('delete'); ?>
                <input type="hidden" name="record_ids" class="record-ids">
                <button class="mdc-button mdc-button--raised filled-button--btn all_delete"  disabled="true" id="bulk-delete">
                    <i class="material-icons mdc-button__icon">delete</i>

                    <?php echo app('translator')->get('general.bulk_delete'); ?>
                </button>
            </form><!-- end of form -->
            <form method="post" action="<?php echo e(route('admin.users.status')); ?>" style="display: inline-block;" id="status_users">
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
                        <table style="width: 100%;" class="table m-0" id="users-table">
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

                             <th  class="<?php if(app()->getLocale() === "ar"): ?> text-right <?php elseif(app()->getLocale() === "he"): ?>  text-right <?php else: ?> text-left <?php endif; ?>"><?php echo app('translator')->get('general.id'); ?></th>
                                <th class="<?php if(app()->getLocale() === "ar"): ?> text-right <?php elseif(app()->getLocale() === "he"): ?>  text-right <?php else: ?> text-left <?php endif; ?>"><?php echo app('translator')->get('general.name'); ?></th>
                                <th class="<?php if(app()->getLocale() === "ar"): ?> text-right <?php elseif(app()->getLocale() === "he"): ?>  text-right <?php else: ?> text-left <?php endif; ?>"><?php echo app('translator')->get('general.email'); ?></th>
                                <th class="<?php if(app()->getLocale() === "ar"): ?> text-right <?php elseif(app()->getLocale() === "he"): ?>  text-right <?php else: ?> text-left <?php endif; ?>"><?php echo app('translator')->get('general.status'); ?></th>
                               <th class="<?php if(app()->getLocale() === "ar"): ?> text-right <?php elseif(app()->getLocale() === "he"): ?>  text-right <?php else: ?> text-left <?php endif; ?>"><?php echo app('translator')->get('general.created_at'); ?></th>

                                <th class="<?php if(app()->getLocale() === "ar"): ?> text-right <?php elseif(app()->getLocale() === "he"): ?>  text-right <?php else: ?> text-left <?php endif; ?>"><?php echo app('translator')->get('general.actions'); ?></th>

                            </tr>
                            </thead>

                            <tbody id="tbody">
                            <?php $__empty_1 = true; $__currentLoopData = $admins; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $admin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr id="tr_body_users">
                                    <td>
                                        <div class="animated-checkbox">
                                            <label class="m-0">
                                                <input type="checkbox" class="record__select" value="<?php echo e($admin->id); ?>">
                                                <span class="label-text"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td id="last_id" class="<?php if(app()->getLocale() === "ar"): ?> text-right <?php elseif(app()->getLocale() === "he"): ?>  text-right <?php else: ?> text-left <?php endif; ?>"><?php echo e($loop->iteration); ?></td>
                                    <td class="<?php if(app()->getLocale() === "ar"): ?> text-right <?php elseif(app()->getLocale() === "he"): ?>  text-right <?php else: ?> text-left <?php endif; ?>"><?php echo e($admin->name); ?></td>
                                    <td class="<?php if(app()->getLocale() === "ar"): ?> text-right <?php elseif(app()->getLocale() === "he"): ?>  text-right <?php else: ?> text-left <?php endif; ?>"><?php echo e($admin->email); ?></td>
                                    <td class="<?php if(app()->getLocale() === "ar"): ?> text-right <?php elseif(app()->getLocale() === "he"): ?>  text-right <?php else: ?> text-left <?php endif; ?>">
                                        <?php if($admin->status == 'active'): ?>
                                            <h5><span class="badge badge-success"><?php echo app('translator')->get('general.active'); ?></span></h5>
                                        <?php else: ?>
                                            <h5><span class="badge badge-danger"><?php echo app('translator')->get('general.inactive'); ?></span></h5>
                                        <?php endif; ?>



                                    </td>
                                    <td class="<?php if(app()->getLocale() === "ar"): ?> text-right <?php elseif(app()->getLocale() === "he"): ?>  text-right <?php else: ?> text-left <?php endif; ?>"><?php echo e($admin->created_at->format('Y-m-d')); ?></td>
                                    <td class="<?php if(app()->getLocale() === "ar"): ?> text-right <?php elseif(app()->getLocale() === "he"): ?>  text-right <?php else: ?> text-left <?php endif; ?>">

                                        <div class="category_btn_del" style="display: inline-block">
                                            <form  action="<?php echo e(route('admin.users.destroy', $admin->id)); ?>" class="my-1 my-xl-0  " id="form_delete_users" method="post" data-id="<?php echo e($admin->id); ?>" >
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('delete'); ?>
                                                <button type="submit" class="mdc-button mdc-button--raised icon-button filled-button--secondary delete">
                                                    <i class="material-icons mdc-button__icon">delete</i>
                                                </button>
                                            </form>
                                        </div>




                                        <button class="mdc-button mdc-button--raised icon-button filled-button--success" data-toggle="modal" data-target="#edit_category_<?php echo e($admin->id); ?>" id="edit_model_users">
                                            <i class="material-icons mdc-button__icon">colorize</i>
                                        </button>
                                        <div class="modal fade" id="edit_category_<?php echo e($admin->id); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

                                            <div class="modal-dialog">

                                                <div class="modal-content">
                                                    <div class="modal-header">

                                                        <h5 class="modal-title" id="exampleModalLabel"><?php echo app('translator')->get('general.update'); ?></h5>

                                                    </div>
                                                    <form action="<?php echo e(route('admin.users.update',$admin->id)); ?>" method="post" >
                                                            <?php echo csrf_field(); ?>

                                                        <?php echo method_field('PUT'); ?>
                                                        <div class="modal-body">
                                                            <div class="container">
                                                                <div class="row">
                                                                    <div class="col-md-12" style="margin-top: 10px;">
                                                                        <div  style="text-align: <?php if(app()->getLocale() === 'ar' ): ?> right <?php elseif(app()->getLocale() === "he"): ?> right <?php else: ?> left <?php endif; ?>" class="form-group">
                                                                            <label for="exampleInputEmail1"><?php echo app('translator')->get('general.name'); ?></label>
                                                                            <input style="border: black 2px solid;border-radius: 10px" type="text" class="form-control" name="name" id="name_user" value="<?php echo e($admin->name); ?>" >
                                                                            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                            <span class="invalid-feedback" role="alert">
                                                                                                        <strong><?php echo e($message); ?></strong>
                                                                                                    </span>
                                                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12" style="margin-top: 10px;">
                                                                        <div  style="text-align: <?php if(app()->getLocale() === 'ar' ): ?> right <?php elseif(app()->getLocale() === "he"): ?> right <?php else: ?> left <?php endif; ?>" class="form-group">
                                                                            <label for="exampleInputEmail1"><?php echo app('translator')->get('general.email'); ?></label>
                                                                            <input style="border: black 2px solid;border-radius: 10px" type="email" class="form-control" name="email" id="email_user" value="<?php echo e($admin->email); ?>">
                                                                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                            <span class="invalid-feedback" role="alert">
                                                                                                        <strong><?php echo e($message); ?></strong>
                                                                                                    </span>
                                                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div  style="display: none;margin-top: 10px;border: 2px solid saddlebrown; border-radius: 20px" class="alert alert-danger print-error-msg_edit <?php if(app()->getLocale() === "ar"): ?> text-right <?php elseif(app()->getLocale() === "he"): ?>  text-right <?php else: ?> text-left <?php endif; ?>"> <ul></ul></div>
                                                            </div>


                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-secondary" data-dismiss="modal"><?php echo app('translator')->get('general.close'); ?></button>
                                                            <button  type="submit" style="background-color: #c3a962" class="btn"><?php echo app('translator')->get('general.update'); ?></button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>



                                    </td>

                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <div class="alert alert-dark" role="alert" style="text-align: center">
                                    <strong><?php echo app('translator')->get('site.no_data_found'); ?></strong>
                                </div>
                            <?php endif; ?>


                            </tbody>


                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>



<?php $__env->stopSection(); ?>



<?php echo $__env->make('.dashboard.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\project new\Project\resources\views/dashboard/users/index.blade.php ENDPATH**/ ?>