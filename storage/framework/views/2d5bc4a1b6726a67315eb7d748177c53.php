<?php if (isset($component)) { $__componentOriginal69dc84650370d1d4dc1b42d016d7226b = $component; } ?>
<?php $component = App\View\Components\GuestLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('guest-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\GuestLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    

    <div class="login_form_container">
        <div class="login_form">
            <center><img src="<?php echo e(asset('assets')); ?>/login/image/logo.png" alt="Italian Trulli" width="150"
                    height="60"></center>

            <form id="login_form" action="<?php echo e(route('login')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <div class="input_group">
                    <i class="fa fa-envelope"></i>
                    <input type="text" placeholder="Email" name="email" class="input_text" required :value="old('email')" autocomplete="off" />
                </div>
                <div class="input_group">
                    <i class="fa fa-unlock-alt"></i>
                    <input type="password" name="password" placeholder="Password" required class="input_text" autocomplete="off" />
                </div>
                <div class="button_group" id="login_button">
                    
                    <button type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal69dc84650370d1d4dc1b42d016d7226b)): ?>
<?php $component = $__componentOriginal69dc84650370d1d4dc1b42d016d7226b; ?>
<?php unset($__componentOriginal69dc84650370d1d4dc1b42d016d7226b); ?>
<?php endif; ?>
<?php /**PATH E:\laragon\www\hrms\resources\views/auth/login.blade.php ENDPATH**/ ?>