<?php $__env->startSection('content'); ?>
    <div class="flex flex-col w-full max-h-screen overflow-y-auto ">

        <div class="flex items-center justify-around w-full mt-2 lg:justify-between">
            <span class="text-3xl font-semibold ml-5 text-[#000000] lg:font-bold lg:text-4xl">Banner</span>
            <a href="<?php echo e(route('banner.create')); ?>" class="px-3 py-1 text-white bg-yellow-500 rounded-lg ">Add</a>
        </div>
        <hr class="my-2 border-b-2 border-yellow-500">

        <div class="container px-2 py-5 text-white sm:px-5">
            <div class="overflow-x-auto bg-white rounded shadow-md">
                <table class="min-w-full text-gray-800 table-auto">
                    <thead>
                        <tr class="text-white bg-gray-400">
                            <th
                                class="px-4 py-2 text-xs font-medium text-left sm:px-6 sm:py-4 sm:text-sm md:text-base lg:text-base">
                                Priority</th>
                            <th
                                class="px-4 py-2 text-xs font-medium text-left sm:px-6 sm:py-4 sm:text-sm md:text-base lg:text-base">
                                Name</th>
                            <th
                                class="px-4 py-2 text-xs font-medium text-left sm:px-6 sm:py-4 sm:text-sm md:text-base lg:text-base">
                                Photo</th>
                            <th
                                class="px-4 py-2 text-xs font-medium text-left sm:px-6 sm:py-4 sm:text-sm md:text-base lg:text-base">
                                Description</th>
                            <th
                                class="px-4 py-2 text-xs font-medium text-left sm:px-6 sm:py-4 sm:text-sm md:text-base lg:text-base">
                                Category</th>
                            <th
                                class="px-4 py-2 text-xs font-medium text-left sm:px-6 sm:py-4 sm:text-sm md:text-base lg:text-base">
                                Button_Action</th>
                            <th
                                class="px-4 py-2 text-xs font-medium text-left sm:px-6 sm:py-4 sm:text-sm md:text-base lg:text-base">
                                Status</th>
                            <th
                                class="px-4 py-2 text-xs font-medium text-left sm:px-6 sm:py-4 sm:text-sm md:text-base lg:text-base">
                                Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="transition duration-300 border-b bg-gray-50 hover:bg-blue-100">
                                <td class="px-4 py-2 text-xs sm:px-6 sm:py-4 sm:text-sm md:text-base">
                                    <?php echo e($banner->priority); ?></td>
                                <td class="px-4 py-2 text-xs sm:px-6 sm:py-4 sm:text-sm md:text-base"><?php echo e($banner->name); ?>

                                </td>
                                <td class="px-4 py-2 text-xs sm:px-6 sm:py-4 sm:text-sm md:text-base">
                                    <img src="<?php echo e(asset('images/iphone.png' . $banner->photopath)); ?>" alt="<?php echo e($banner->name); ?>"
                                        class="object-cover w-10 h-10">
                                </td>
                                <td class="px-4 py-2 text-xs sm:px-6 sm:py-4 sm:text-sm md:text-base">
                                    <?php echo e($banner->description); ?></td>
                                <td class="px-4 py-2 text-xs sm:px-6 sm:py-4 sm:text-sm md:text-base">
                                    <?php echo e($banner->category ? $banner->category->name : 'No Category'); ?>

                                </td>
                                <td class="px-4 py-2 text-xs sm:px-6 sm:py-4 sm:text-sm md:text-base">
                                    <?php echo e($banner->buttonaction); ?></td>
                                <td class="px-4 py-2 text-xs sm:px-6 sm:py-4 sm:text-sm md:text-base"><?php echo e($banner->status); ?>

                                </td>
                                <td class="px-4 py-2">
                                    <div class="flex flex-col space-y-2 sm:flex-row sm:space-y-0 sm:space-x-2">
                                        <a href="<?php echo e(route('banner.edit', $banner->id)); ?>"
                                            class="w-full px-4 py-2 text-xs font-bold text-white bg-yellow-500 rounded sm:w-auto sm:text-sm md:text-base lg:text-sm">Edit</a>
                                        <a class="w-full px-4 py-2 text-xs font-bold text-white bg-[#9a031f] rounded cursor-pointer sm:w-auto sm:text-sm md:text-base lg:text-sm"
                                            onclick="showpopup">Delete</a>
                                    </div>
                                </td>
                            </tr>

                    </tbody>
                </table>
            </div>
        </div>

        
        <div class="fixed inset-0 items-center justify-center hidden bg-gray-600 bg-opacity-50 backdrop-blur-sm"
            id="popup">
            <form action="<?php echo e(route('banner.destroy', $banner->id)); ?>"
                class="px-8 py-6 text-center bg-white rounded-lg shadow-lg" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <h1 class="mb-4 text-2xl font-semibold text-gray-800">Confirm Deletion</h1>
                <p class="mb-6 text-gray-600">Are you sure you want to delete this category? <br> <span
                        class="text-red-500">This action cannot be undone.</span></p>
                <input type="hidden" name="dataid" id="banner_id">
                <div class="flex justify-center space-x-4">
                    <button type="submit"
                        class="px-6 py-2 text-white bg-red-600 rounded-lg hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50">Yes,
                        Delete</button>
                    <button type="button" onclick="hidepopup()"
                        class="px-6 py-2 text-white bg-gray-600 rounded-lg hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-opacity-50">Cancel</button>
                </div>
            </form>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
    <?php $__env->stopSection(); ?>

    <script>
        function showpopup(banner_id) {
            document.getElementById('popup').classList.remove('hidden');
            document.getElementById('popup').classList.add('flex');
            document.getElementById('banner_id').value = banner_id;
        }

        function hidepopup() {
            document.getElementById('popup').classList.remove('flex');
            document.getElementById('popup').classList.add('hidden');
        }
    </script>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ecommerce\resources\views/banner/index.blade.php ENDPATH**/ ?>