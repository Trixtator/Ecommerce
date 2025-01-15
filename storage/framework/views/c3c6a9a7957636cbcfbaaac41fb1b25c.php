<?php $__env->startSection('content'); ?>
<div class="py-5 ">
    <div class="container px-6 mx-auto text-center text-white">
        <!-- Hero Section -->
        <div class="relative mb-16">
            <img src="<?php echo e(asset('images/apple.jpg')); ?>" alt="HansStore"
                class="object-cover w-full  shadow-lg h-[500px] transform transition-all hover:scale-105">
            <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-40 ">
                <h2 class="text-5xl font-bold tracking-wide text-white drop-shadow-lg">Why Choose hans store?</h2>
            </div>
        </div>

        <!-- Value Proposition Section -->
        <div class="px-4 mb-12 md:px-8">
            <p class="max-w-full mx-auto text-xl leading-relaxed text-black">
                At <strong class="text-[#]">Hans</strong>, Created to change everything for the better. For everyone

            </p>
        </div>
    </div>
</div>

<!-- Key Reasons Section -->
<div class="py-20 bg-white">
    <div class="container px-6 mx-auto">
        <div class="grid gap-12 md:grid-cols-2 lg:grid-cols-3">
            <!-- Reason 1 -->
            <div class="p-8 transition duration-300 transform bg-gray-200 shadow-lg rounded-3xl hover:scale-105">
                <h3 class="mb-4 text-2xl font-semibold text-[#]">Quality & Safety First</h3>
                <p class="text-lg text-black">
                    We ensure that all our products meet strict safety and quality standards. Each product is carefully tested to ensure the Quality of our Gadgets.
                </p>
            </div>

            <!-- Reason 2 -->
            <div class="p-8 transition duration-300 transform bg-gray-200 shadow-lg rounded-2xl hover:scale-105">
                <h3 class="mb-4 text-2xl font-semibold text-[#]">Affordable Prices</h3>
                <p class="text-lg text-black">
                    We believe in providing the best products at competitive prices. Hans Store offers exceptional value for money without compromising on the quality of the items we offer.
                </p>
            </div>

            <!-- Reason 3 -->
                        <div class="p-8 transition duration-300 transform bg-gray-200 shadow-lg rounded-2xl hover:scale-105">
                <h3 class="mb-4 text-2xl font-semibold text-[#]">Fast & Reliable Delivery</h3>
                <p class="text-lg text-black">
                    for the middle class, we offer a variety of quality products for all Enjoy fast delivery service. At Hans Store, we understand the importance of timely delivery, and we ensure that your order arrives quickly and safely. We ensure that the products we offer are up to standard and do not disappoint.
                </p>
            </div>

            <!-- Reason 5 -->
            <div class="p-8 transition duration-300 transform bg-gray-200 shadow-lg rounded-2xl hover:scale-105">
                <h3 class="mb-4 text-2xl font-semibold text-[#]">Exceptional Customer Support</h3>
                <p class="text-lg text-black">
                    We’re here to assist you! Our friendly customer support team is always ready to help with any
                    questions or concerns you may have, ensuring a hassle-free shopping experience.
                </p>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ecommerce\resources\views/whyHans_Store.blade.php ENDPATH**/ ?>