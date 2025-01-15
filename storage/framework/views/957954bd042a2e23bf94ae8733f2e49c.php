<?php $__env->startSection('content'); ?>
    <div class="flex flex-col w-full max-h-screen overflow-y-auto ">


        <div class="flex items-center justify-around w-full mt-2 lg:justify-between">
            <span class="text-3xl font-semibold ml-5  text-[#000000] lg:font-bold lg:text-4xl">Banners
            </span>

        </div>
        <hr class="my-2 border-b-2 border-yellow-500">


        <div class="mx-5">
            <form action="<?php echo e(route('banner.update', $banner->id)); ?>" method="POST" enctype="multipart/form-data"
                class="mt-5">
                <?php echo csrf_field(); ?>

                <label for="priority" class="block text-sm font-medium text-gray-700">Priority</label>

                <input type="text" placeholder="Enter Priority" name="priority" class="w-full p-2 my-2 "
                    value="<?php echo e(old('priority', $banner->priority)); ?>">
                <?php $__errorArgs = ['priority'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="-mt-2 text-red-500"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                <label for="name" class="block text-sm font-medium text-gray-700">banner Name</label>

                <input type="text" placeholder="Enter banner Name" name="name" class="w-full p-2 my-2 "
                    value="<?php echo e(old('name', $banner->name)); ?>">
                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="-mt-2 text-red-500"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>

                <input type="text" placeholder="Enter banner description" name="description" class="w-full p-2 my-2 "
                    value="<?php echo e(old('description', $banner->description)); ?>">
                <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="-mt-2 text-red-500"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>


                

                <label for="category_id" class="block text-sm font-medium text-gray-700">Category</label>
                <select name="category_id" id="category_id" class="w-full p-2 mt-1 border-gray-300 ">
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($category->id); ?>" <?php if($category->id == $banner->category_id): ?> selected <?php endif; ?>>
                            <?php echo e($category->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>




                <label for="banneraction" class="block text-sm font-medium text-gray-700">Banner_Action</label>

                <input type="text" placeholder="Enter banner Button_Action" name="buttonaction" class="w-full p-2 my-2 "
                    value="<?php echo e(old('buttonaction', $banner->buttonaction)); ?>">
                <?php $__errorArgs = ['buttonaction'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="-mt-2 text-red-500"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                <label for="photopath" class="block text-sm font-medium text-gray-700">Photo</label>
                <input type="file" name="photopath" class="w-full p-2 my-2">
                <?php $__errorArgs = ['photopath'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="-mt-2 text-red-500"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                <p>Current photo:</p>
                <img src="<?php echo e(asset('images/iphone.png' . $banner->photopath)); ?>" alt=""
                    class="object-cover w-16 h-16">

                
                <div>
                    <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                    <select name="status" id="status" class="w-full p-2 my-2 border-gray-300 ">
                        <option value="show" <?php if($banner->status == 'show'): ?> selected <?php endif; ?>>Show</option>
                        <option value="hidden" <?php if($banner->status == 'hidden'): ?> selected <?php endif; ?>>Hide</option>
                    </select>
                </div>



                <div class="flex justify-center gap-4 mt-4">
                    <input type="submit" value="Update banner"
                        class="px-5 py-3 text-white bg-blue-600 rounded-lg cursor-pointer">
                    <a href="<?php echo e(route('banner.index')); ?>" class="px-10 py-3 text-white bg-red-600 rounded-lg">Exit</a>
                </div>
            </form>
        </div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ecommerce\resources\views/banner/edit.blade.php ENDPATH**/ ?>