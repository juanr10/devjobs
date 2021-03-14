@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <div class="flex flex-wrap justify-center">
        <div class="w-full max-w-sm">
            <p class="text-center text-2xl text-black font-bold mt-20">   <svg class="fill-current inline pb-1" width="45" height="45" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10l-2 1m0 0l-2-1m2 1v2.5M20 7l-2 1m2-1l-2-1m2 1v2.5M14 4l-2-1-2 1M4 7l2-1M4 7l2 1M4 7v2.5M12 21l-2-1m2 1l2-1m-2 1v-2.5M6 18l-2-1v-2.5M18 18l2-1v-2.5" />
            </svg>  {{ __('Reset Password') }}</p>
            <div class="flex flex-col break-words bg-white border-2 shadow-md mt-4">
                <form class="py-3 px-5" method="POST" action="{{ route('password.email') }}" novalidate>
                    @csrf
                    @if(session('status'))
                        <span class="bg-teal-100 border-l-4 border-green-500 p-4 w-full my-5 block text-sm text-gray-700" role="alert">
                            <strong>{{ session('status')}}</strong>
                        </span>
                    @endif
                    <div class="flex flex-col mb-4">
                        <div class="flex relative">
                            <span
                                class=" inline-flex  items-center px-3 border-t bg-white border-l border-b  border-gray-300 text-gray-500 shadow-sm text-sm">
                                <svg width="15" height="15" fill="currentColor" viewBox="0 0 1792 1792"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M1792 710v794q0 66-47 113t-113 47h-1472q-66 0-113-47t-47-113v-794q44 49 101 87 362 246 497 345 57 42 92.5 65.5t94.5 48 110 24.5h2q51 0 110-24.5t94.5-48 92.5-65.5q170-123 498-345 57-39 100-87zm0-294q0 79-49 151t-122 123q-376 261-468 325-10 7-42.5 30.5t-54 38-52 32.5-57.5 27-50 9h-2q-23 0-50-9t-57.5-27-52-32.5-54-38-42.5-30.5q-91-64-262-182.5t-205-142.5q-62-42-117-115.5t-55-136.5q0-78 41.5-130t118.5-52h1472q65 0 112.5 47t47.5 113z">
                                    </path>
                                </svg>
                            </span>
                            <input type="email" name="email" value="{{ old('email') }}"
                                class="flex-1 appearance-none border {{ $errors->has('email') ? 'border-red-500' : 'border-gray-300' }} w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-600 shadow-sm text-base focus:ring focus:border-gray-500"
                                placeholder="Email" />
                        </div>
                        @error('email')
                            <span class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 w-full mt-5 text-sm"
                                role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <button type="submit"
                        class="w-full px-4 py-2 text-base font-semibold text-center text-white transform transition hover:scale-105 duration-300 ease-in-out bg-teal-500 shadow-md hover:bg-teal-600 focus:outline-none focus:ring-2">
                        Solicitar
                    </button>

                    <p class="text-sm text-gray-600 italic mt-3">*Le enviaremos un enlace desde el cual podrá restablecer su contraseña.</p>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
