<aside class="mdc-drawer mdc-drawer--dismissible mdc-drawer--open" style="background-color: white">
    <div class="mdc-drawer__header">
        <div href="index.html" class="brand-logo" style="margin-top: -40px;" >
            <img src="<?php echo e(asset('imagl.png')); ?>" width="100%" alt="logo" >
            <hr class="hr_sidebar" style="margin-top: -30px ; background-color: #c3a962" >
        </div>

    </div>

    <div class="mdc-drawer__content" style="margin-top: -4px">

        <div class="mdc-list-group">
            <nav class="mdc-list mdc-drawer-menu">
                <div class="mdc-list-item mdc-drawer-item ">
                    <a class="mdc-drawer-link <?php echo e(request()->is('*dashboard*') ? 'active' : ''); ?>" href="<?php echo e(route('admin.dashboard')); ?>">


                        <span class="material-symbols-outlined  <?php echo e(request()->is('*dashboard*') ? 'active_icon' : ''); ?>">
                        house
                     </span>
                        <?php echo app('translator')->get('general.dashboard'); ?>
                    </a>
                </div>

            </nav>
            <hr class="hr_sidebar" >
        </div>
        <div class="mdc-list-group">
            <nav class="mdc-list mdc-drawer-menu">
                <div class="mdc-list-item mdc-drawer-item ">
                    <a class="mdc-drawer-link <?php echo e(request()->is('*users*') ? 'active' : ''); ?>" href="<?php echo e(route('admin.users.index')); ?>">


                       <span  class="material-symbols-outlined <?php echo e(request()->is('*users*') ? 'active_icon' : ''); ?>">
shield_person
</span>
                        <?php echo app('translator')->get('general.admin'); ?>
                    </a>
                </div>

            </nav>
            <hr class="hr_sidebar" >
        </div>



        <div class="mdc-list-group">
            <nav class="mdc-list mdc-drawer-menu">
                <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link <?php echo e(request()->is('*categories*') ? 'active' : ''); ?>" href="<?php echo e(route('admin.categories.index')); ?>">
                        <span class="material-symbols-outlined mdc-list-item__start-detail <?php echo e(request()->is('*categories*') ? 'active_icon' : ''); ?>"  >
                     category
                     </span>

                        <?php echo app('translator')->get('general.categories'); ?>
                    </a>
                </div>

            </nav>
            <hr class="hr_sidebar"  >
        </div>
        <div class="mdc-list-group">
            <nav class="mdc-list mdc-drawer-menu">
                <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link <?php echo e(request()->is('*news*') ? 'active' : ''); ?>" href="<?php echo e(route('admin.news.index')); ?>">
                      <span class="material-symbols-outlined <?php echo e(request()->is('*news*') ? 'active_icon' : ''); ?>">
                      feed
                    </span>

                        <?php echo app('translator')->get('general.news'); ?>
                    </a>
                </div>

            </nav>
            <hr class="hr_sidebar"  >
        </div>

        <div class="mdc-list-group">
            <nav class="mdc-list mdc-drawer-menu">
                <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link <?php echo e(request()->is('*sliders*') ? 'active' : ''); ?>" href="<?php echo e(route('admin.sliders.index')); ?>">
                     <span class="material-symbols-outlined <?php echo e(request()->is('*sliders*') ? 'active_icon' : ''); ?>">
                    sliders
                    </span>

                        <?php echo app('translator')->get('general.sliders'); ?>
                    </a>
                </div>

            </nav>
            <hr  class="hr_sidebar" >
        </div>
        <div class="mdc-list-group">
            <nav class="mdc-list mdc-drawer-menu">
                <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link <?php echo e(request()->is('*aboutUs*') ? 'active' : ''); ?>" href="<?php echo e(route('admin.aboutUs.index')); ?>">
                   <span class="material-symbols-outlined <?php echo e(request()->is('*aboutUs*') ? 'active_icon' : ''); ?>">
contact_page
</span>

                        <?php echo app('translator')->get('general.about_us'); ?>
                    </a>
                </div>

            </nav>
            <hr  class="hr_sidebar" >
        </div>

        <div class="mdc-list-group">
            <nav class="mdc-list mdc-drawer-menu">
                <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link <?php echo e(request()->is('*contactUs*') ? 'active' : ''); ?>" href="<?php echo e(route('admin.contactUs.index')); ?>">
<span class="material-symbols-outlined <?php echo e(request()->is('*contactUs*') ? 'active_icon' : ''); ?>">
phone_enabled
</span>

                        <?php echo app('translator')->get('general.contactUs'); ?>
                    </a>
                </div>

            </nav>
            <hr  class="hr_sidebar">
        </div>
        <div class="mdc-list-group">
            <nav class="mdc-list mdc-drawer-menu">
                <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link <?php echo e(request()->is('messages') ? 'active' : ''); ?> " href="<?php echo e(route('admin.messages.index')); ?>">
                        <span class="material-symbols-outlined <?php echo e(request()->is('*messages*') ? 'active_icon' : ''); ?>">
mail
</span>

                        <?php echo app('translator')->get('general.messages'); ?>
                    </a>
                </div>

            </nav>
            <hr  class="hr_sidebar" >
        </div>

        <div class="mdc-list-group">
            <nav class="mdc-list mdc-drawer-menu">
                <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link <?php echo e(request()->is('*settings*') ? 'active' : ''); ?>" href="<?php echo e(route('admin.settings.index')); ?>">
           <span class="material-symbols-outlined <?php echo e(request()->is('*settings*') ? 'active_icon' : ''); ?>">
              settings
            </span>

                        <?php echo app('translator')->get('general.settings'); ?>
                    </a>
                </div>

            </nav>
            <hr  class="hr_sidebar" >
        </div>
        <div class="mdc-list-group">
            <nav class="mdc-list mdc-drawer-menu">
                <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link <?php echo e(request()->is('*video*') ? 'active' : ''); ?>" href="<?php echo e(route('admin.video.index')); ?>">
          <span class="material-symbols-outlined">
play_circle
</span>
                        <?php echo app('translator')->get('general.video'); ?>
                    </a>
                </div>

            </nav>
            <hr  class="hr_sidebar" >
        </div>



    </div>
</aside>
<?php /**PATH D:\project new\Project\resources\views/dashboard/layouts/sidebar.blade.php ENDPATH**/ ?>