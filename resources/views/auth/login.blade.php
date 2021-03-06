@extends('layouts.app')

@section('login&Register')
<div class="flex flex-wrap w-full">
    <div class="flex flex-col w-full md:w-1/2">
        <div class="flex flex-col justify-center px-8 pt-8 my-auto md:justify-start md:pt-0 md:px-24 lg:px-32">
            <p class="text-center text-3xl text-black font-bold">   <svg class="fill-current inline pb-1" width="45" height="45" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10l-2 1m0 0l-2-1m2 1v2.5M20 7l-2 1m2-1l-2-1m2 1v2.5M14 4l-2-1-2 1M4 7l2-1M4 7l2 1M4 7v2.5M12 21l-2-1m2 1l2-1m-2 1v-2.5M6 18l-2-1v-2.5M18 18l2-1v-2.5" />
            </svg> Iniciar sesión</p>

            <form class="flex flex-col pt-3 md:pt-8" method="POST" action="{{ route('login') }}" novalidate>
                @csrf
                <div class="flex flex-col pt-4">
                    <div class="flex relative ">
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
                <div class="flex flex-col pt-4 mb-12">
                    <div class="flex relative ">
                        <span
                            class=" inline-flex  items-center px-3 border-t bg-white border-l border-b  border-gray-300 text-gray-500 shadow-sm text-sm">
                            <svg width="15" height="15" fill="currentColor" viewBox="0 0 1792 1792"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M1376 768q40 0 68 28t28 68v576q0 40-28 68t-68 28h-960q-40 0-68-28t-28-68v-576q0-40 28-68t68-28h32v-320q0-185 131.5-316.5t316.5-131.5 316.5 131.5 131.5 316.5q0 26-19 45t-45 19h-64q-26 0-45-19t-19-45q0-106-75-181t-181-75-181 75-75 181v320h736z">
                                </path>
                            </svg>
                        </span>
                        <input type="password" name="password" value="{{ old('password') }}"
                            class=" flex-1 appearance-none border {{ $errors->has('password') ? 'border-red-500' : 'border-gray-300' }} w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-600 shadow-sm text-base focus:ring focus:border-gray-500"
                            placeholder="Contraseña" />
                    </div>
                    @error('password')
                    <span class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 w-full mt-5 text-sm"
                        role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    @if (Route::has('password.request'))
                    <a class="text-md text-gray-500 mt-5 text-center w-full" href="{{ route('password.request') }}">
                        ¿Ha olvidado su contraseña?
                    </a>
                    @endif
                </div>
                <button type="submit"
                    class="w-full px-4 py-2 text-base font-semibold text-center text-white transform transition hover:scale-105 duration-300 ease-in-out bg-teal-500 shadow-md hover:bg-teal-600 focus:outline-none focus:ring-2">
                    <span class="w-full">
                        Iniciar sesión
                    </span>
                </button>
            </form>
            <div class="pt-12 pb-12 text-center">
                <p>
                    ¿Es reclutador y aún no tiene una cuenta?
                    <a href="{{ route('register') }}" class="font-semibold underline">
                        Regístrese aquí.
                    </a>
                </p>
            </div>
        </div>
    </div>
    <div class="w-1/2 shadow-2xl">
        <img class="object-cover w-full h-screen hidden md:block" src="{{ asset('img/work.jpg') }}" />
    </div>
</div>
@endsection
