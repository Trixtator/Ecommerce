@extends('layouts.master')

@section('content')
<div class="bg-[#] py-5">
    <div class="container px-4 mx-auto text-center">




        <div>
            <h1 class="text-3xl font-semibold text-[#] mb-6 pl-2">
                <a href="{{ route('home') }}" class="text-[#]">Home</a> / About Us
            </h1>
        </div>

        <!-- Image Section -->

        <img src="{{ asset('images/apple.jpg') }}" alt="About Us Image"
            class="top-0 object-cover w-full rounded-lg h-96">



        <!-- Description Section -->
        <div class="mt-12">
            <p class="max-w-full text-lg leading-relaxed text-justify text-gray-700 ">
                Welcome to <strong class="text-[#]">Hans store</strong>, Created to change everything for the better. For everyone

            </p>
        </div>

        <!-- Mission Section -->
        <div class="mt-16">
            <h3 class="text-3xl font-semibold text-[#] mb-4">Our Mission</h3>
            <p class="max-w-full text-lg leading-relaxed text-justify text-gray-700">
                At <strong class="text-[#]">Hans Store</strong>, Our mission is simple – to provide communication needs in everyday life by providing high-quality, safe, and quality products that everyone can trust. We believe that customers deserve the best, which is why we work with top brands to bring you the latest and greatest gadgets.
            </p>
        </div>

        <!-- Vision Section -->
        <div class="mt-16">
            <h3 class="text-3xl font-semibold text-[#] mb-4">Our Vision</h3>
            <p class="max-w-full text-lg leading-relaxed text-justify text-gray-700">
                Our vision is to be the go-to destination for Millennials looking for high-quality, affordable, and quality products for them. We want to make shopping for gadgets easy and fun.
            </p>

        </div>



    </div>


</div>
@endsection