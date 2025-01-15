@extends('layouts.master')
@section('content')
<section class=" lg:px-16 bg-gray-50 dark:bg-gray-900">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900\ dark:text-white">
            <img class="w-12 h-12 mr-2" src="{{ asset('images/Hans_Store.png') }}" alt="Hans_Store">
            Hans Store
        </a>

        <div
            class="w-full bg-black rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
            <h1 class="text-xl font-bold leading-tight tracking-tight text-white md:text-2xl dark:text-white">
                    Sign in to your account
                </h1>
                <form action="{{ route('login') }}" method="POST" class="space-y-4 md:space-y-6">

                    @csrf
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-white dark:text-white">Your
                            email</label>
                        <input type="email" name="email" id="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="name@company.com" required="">

                        {{-- errror show --}}
                        @error('email')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror

                    </div>
                    <div>
                        <label for="password"
                            class="block mb-2 text-sm font-medium text-white dark:text-white">Password</label>
                        <input type="password" name="password" id="password" placeholder="••••••••"
                            class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required="">

                        {{-- errror show --}}
                        @error('password')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror

                    </div>
                    <div class="flex flex-col justify-between gap-5">
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="remember" aria-describedby="remember" type="checkbox"
                                    class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800"
                                    required="">


                            </div>
                            <div class="ml-3 text-sm ">
                                <label for="remember" class="text-sm text-white dark:text-gray-300">Remember
                                    me</label>

                            </div>
                        </div>

                        <a href="{{ route('password.request') }}"
                            class="text-sm font-medium text-yellow-500 hover:underline dark:text-primary-500">Forgot
                            password?</a>
                    </div>
                    <button type="submit"
                        class="w-full text-white bg-[#9a031fdd] font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Sign
                        in</button>
                    <p class="text-sm font-light text-white dark:text-white">
                        Don’t have an account yet? <a href="#"
                            class="font-medium text-primary-600 hover:underline dark:text-primary-500">Sign up</a>
                    </p>
                </form>
            </div>
        </div>
    </div>

</section>
@endsection