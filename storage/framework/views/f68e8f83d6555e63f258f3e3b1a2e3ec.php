<?php $__env->startSection('content'); ?>
    <div class="container px-4 mx-auto lg:px-12">
        <div class="pl-2 my-6 border-l-4 border-yellow-500">
            <h1 class=" lg:text-3xl text-xl font-bold text-[#000000]"><?php echo e($category->name); ?> Products</h1>
        </div>


        <!-- Filter Section -->
        <!-- Filter Section -->
     

                

                <div class="flex items-center w-full lg:w-auto">
                    <label for="brand" class="mr-2 text-sm font-semibold text-gray-700">Brand:</label>
                    <select name="brand" id="brand"
                        class="w-full lg:w-48 p-2  text-gray-700 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-[#80a359]">
                        <option value="">Select Brand</option>
                        <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($brand); ?>" <?php echo e(request('brand') == $brand ? 'selected' : ''); ?>>
                                <?php echo e($brand); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>


                <div class="flex items-center w-full lg:w-auto">
                    <label for="rating" class="mr-2 text-sm font-semibold text-gray-700">Rating:</label>
                    <select name="rating" id="rating"
                        class="w-full lg:w-48 p-2 text-gray-700 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-[#80a359]">
                        <option value="">Select Rating</option>
                        <?php $__currentLoopData = $ratings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rating): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($rating); ?>" <?php echo e(request('rating') == $rating ? 'selected' : ''); ?>>Above
                                <?php echo e($rating); ?> ★
                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>

                <div class="flex items-center w-full lg:w-auto">
                    <label for="product_type" class="mr-2 text-sm font-semibold text-gray-700">Type:</label>
                    <select name="product_type" id="product_type"
                        class="w-full lg:w-48 p-2 text-gray-700 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-[#80a359]">
                        <option value="">Select Type</option>
                        <?php $__currentLoopData = $productTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productType): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($productType); ?>"
                                <?php echo e(request('product_type') == $productType ? 'selected' : ''); ?>><?php echo e($productType); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>






                <div class="flex items-center w-full lg:w-auto">
                    <button type="submit"
                        class="w-full px-4 py-2 mt-2 text-white transition-all duration-200 bg-[#9a031fdd] rounded-lg shadow lg:w-auto lg:mt-0 hover:bg-yellow-600">
                        Filter
                    </button>
                </div>
            </form>
        </div>


        <!-- Product Grid -->
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rproduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <a href="<?php echo e(route('viewproduct', $rproduct->id)); ?>" class="flex-shrink-0">
                    <!-- Product card with fixed min-width for small/medium devices -->
                    <div class="overflow-hidden  border rounded-lg shadow-lg min-w-[16rem]">
                        <img src="<?php echo e(asset('images/products/' . $rproduct->photopath)); ?>" alt="<?php echo e($rproduct->name); ?>"
                            class="object-cover w-full h-64">
                        
                            <div class="mt-2">
                                <span class="text-lg font-bold text-gray-900">Rs. <?php echo e($rproduct->price); ?></span>
                                <?php if($rproduct->discounted_price): ?>
                                    <span class="text-sm text-gray-400 line-through">Rs.
                                        <?php echo e($rproduct->discounted_price); ?></span>
                                    <span
                                        class="text-sm font-bold text-red-500">(<?php echo e(round((($rproduct->discounted_price - $rproduct->price) / $rproduct->discounted_price) * 100)); ?>%
                                        OFF)</span>
                                <?php endif; ?>
                            </div>
                            
                            <div class="flex items-center mt-2">
                                <div class="flex items-center">
                                    <?php
                                        // Use the average rating calculated from the model
                                        $averageRating = $rproduct->reviews_avg_rating ?? 0; // Use 0 if no reviews
                                        $fullStars = floor($averageRating);
                                        $halfStars = $averageRating - $fullStars >= 0.5 ? 1 : 0;
                                        $emptyStars = 5 - ($fullStars + $halfStars);
                                    ?>

                                    
                                    <?php for($i = 0; $i < $fullStars; $i++): ?>
                                        <i class='text-yellow-500 bx bxs-star'></i>
                                    <?php endfor; ?>

                                    
                                    <?php if($halfStars): ?>
                                        <i class='text-yellow-500 bx bxs-star-half'></i>
                                    <?php endif; ?>

                                    
                                    <?php for($i = 0; $i < $emptyStars; $i++): ?>
                                        <i class='text-yellow-500 bx bx-star'></i>
                                    <?php endfor; ?>
                                </div>

                                
                                <span class="ml-2 text-sm text-yellow-500"><?php echo e(number_format($averageRating, 1)); ?></span>
                                <span class="ml-2 text-sm text-gray-400"><?php echo e($rproduct->reviews->count()); ?> reviews</span>
                            </div>

                        </div>
                    </div>
                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class="flex flex-col items-center justify-center h-full py-20 -mt-8">
                    <img src="<?php echo e(asset('images/noproduct.webp')); ?>" alt="No Products Found" class="w-40 h-40 mb-4">
                    <h1 class="text-2xl font-bold text-gray-900">No Products Found</h1>
                    <p class="text-gray-500">Try adjusting your search or filter to find what you're looking for.</p>
                    <a href="<?php echo e(route('home')); ?>"
                        class="px-4 py-2 mt-4 text-white bg-yellow-500 rounded hover:bg-yellow-600">Go Back to Home</a>
                </div>
            <?php endif; ?>
        </div>


        
        <div class="mt-10">
            <?php echo e($products->links()); ?>


        </div>



    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ecommerce\resources\views/categoryproduct.blade.php ENDPATH**/ ?>