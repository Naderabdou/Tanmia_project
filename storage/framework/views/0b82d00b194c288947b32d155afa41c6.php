<header class="mdc-top-app-bar">
    <div class="mdc-top-app-bar__row">
        <div class="mdc-top-app-bar__section mdc-top-app-bar__section--align-start">
            <button class="material-icons mdc-top-app-bar__navigation-icon mdc-icon-button sidebar-toggler">menu</button>

        </div>
        <div class="mdc-top-app-bar__section mdc-top-app-bar__section--align-end mdc-top-app-bar__section-right">
            <div class="menu-button-container menu-profile d-none d-md-block">
                <button class="mdc-button mdc-menu-button">
                <span class="d-flex align-items-center">
                  <span class="figure">
                    <img src="<?php echo e(auth()->user()->profile_photo_url); ?>" alt="user" class="user">
                  </span>
                  <span class="user-name"><?php echo e(auth()->user()->name); ?></span>
                </span>
                </button>
                <div class="mdc-menu mdc-menu-surface" tabindex="-1">
                    <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical">
                        <li class="mdc-list-item" role="menuitem">
                            <div class="item-thumbnail item-thumbnail-icon-only">
                                <i class="mdi mdi-account-edit-outline text-primary"></i>
                            </div>
                            <div class="item-content d-flex align-items-start flex-column justify-content-center">
                             <a href="<?php echo e(route('profile.show')); ?>"><h6 class="item-subject font-weight-normal"><?php echo app('translator')->get('general.Edit_profile'); ?></h6></a>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>

            <div class="divider d-none d-md-block"></div>

            <div class="menu-button-container d-none d-md-block">
                <button class="mdc-button mdc-menu-button">
                    <i class="mdi mdi-flag"></i>
                </button>
                <?php if(!request()->is('user/profile')): ?>
                <div class="mdc-menu mdc-menu-surface" tabindex="-1">
                    <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical">

                        <?php $__currentLoopData = LaravelLocalization::getSupportedLocales(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeCode => $properties): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="mdc-list-item" role="menuitem">
                                <a  style="text-align: center" rel="alternate" hreflang="<?php echo e($localeCode); ?>" href="<?php echo e(LaravelLocalization::getLocalizedURL($localeCode, null, [], true)); ?>">
                                    <?php echo e($properties['native']); ?>

                                </a>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
                <?php endif; ?>
            </div>
            <div class="menu-button-container">
                <button class="mdc-button mdc-menu-button">
                    <i class="mdi mdi-email"></i>
                    <span class="count-indicator">
                  <span class="count count_notifications">
                      <?php if(isset($count)): ?>
                                <?php echo e($count); ?>

                    <?php else: ?>
                          <?php echo e(auth()->user()->unreadNotifications->count()); ?>

                      <?php endif; ?>


                  </span>
                </span>
                </button>
                <div class="mdc-menu mdc-menu-surface" tabindex="-1">
                    <h6 class="title <?php if(app()->getLocale() === "ar"): ?> text-right <?php elseif(app()->getLocale() === "he"): ?>  text-right <?php else: ?> text-left <?php endif; ?>"><i class="mdi mdi-email-outline mr-2 tx-16"></i> <?php echo app('translator')->get('general.messages'); ?></h6>
                    <ul class="mdc-list notifications_id" role="menu" aria-hidden="true" aria-orientation="vertical">
          <?php if(auth()->user()->unreadNotifications->count() > 0): ?>
                        <?php $__currentLoopData = auth()->user()->unreadNotifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                                <li class="mdc-list-item" role="menuitem">
                                    <div class="item-thumbnail item-thumbnail-icon">
                                        <i class="mdi mdi-account-outline"></i>
                                    </div>
                                    <div class="item-content d-flex align-items-start flex-column justify-content-center">
                                        <a style=" text-decoration: none;color: black" href="<?php echo e(route('admin.messages.show',$notification->data['id'])); ?>">
                                            <h6 class="item-subject font-weight-normal">
                                                <?php echo e($notification->data['name']); ?> <?php echo app('translator')->get('general.send_message'); ?>


                                            </h6>
                                        </a>
                                        <small class="text-muted"> <?php echo e($notification->created_at->diffForhumans()); ?></small>
                                    </div>
                                </li>





                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>
                            <li  class="mdc-list-item no_messages" role="menuitem">

                                <div class="item-content d-flex align-items-start flex-column justify-content-center">

                                    <h6 class="item-subject font-weight-normal">
                                        <?php echo app('translator')->get('general.no_messages'); ?>


                                    </h6>

                                </div>
                            </li>

                        <?php endif; ?>
                    </ul>
                </div>
            </div>


            <div class="menu-button-container d-none d-md-block">
                <button class="mdc-button mdc-menu-button">
                    <i class="mdi mdi-power"></i>
                </button>
                <div class="mdc-menu mdc-menu-surface" tabindex="-1">
                    <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical">

                        <li class="mdc-list-item" role="menuitem">
                            <div class="item-thumbnail item-thumbnail-icon-only">
                                <i class="mdi mdi-logout-variant text-primary"></i>
                            </div>
                            <div class="item-content d-flex align-items-start flex-column justify-content-center">
                                <form method="POST" action="<?php echo e(route('logout')); ?>">
                                    <?php echo csrf_field(); ?>
                                    <div class="nav-item">
                                        <a class="nav-link" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                        this.closest('form').submit(); " role="button">
                                            <i class="fas fa-sign-out-alt"></i>

                                            <?php echo e(__('general.logout')); ?>

                                        </a>
                                    </div>
                                </form>

                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
<?php /**PATH D:\project new\Project\resources\views/dashboard/layouts/header.blade.php ENDPATH**/ ?>