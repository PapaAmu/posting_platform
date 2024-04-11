@extends('layouts.app')

@section('content')
    <div class="flex justify-center min-h-screen">
        <div class="w-6/12 bg-white p-6 rounded-lg">
            <div class="text-red-500 p-2 rounded-lg mb-6 text-center">  
                @if (session('status'))
                    {{ session('status') }}
                @endif
            </div> 
            <form action="{{ route('login') }}" method="post">
                @csrf    
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                     

                    <div class="sm:col-span-4">
                        <label for="email" class="block text-sm font-medium leading-6 text-gray-900"></label>
                            <div class="mt-2">
                                <input id="email" name="email" type="email" placeholder="Your Email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 px-2 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value=" {{ old('email') }}">
                                
                                @error('email')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                    </div>

                    <div class="sm:col-span-4">
                        <label for="password" class="block text-sm font-medium leading-6 text-gray-900"></label>
                            <div class="mt-2">
                                <input id="password" name="password" placeholder="Enter Password" type="password" class="block w-full rounded-md border-0 py-1.5 text-gray-900 px-2 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            
                                @error('password')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{ $message }}
                                </div>
                            @enderror
                            </div>
                    </div>

                   
                    <div class="sm:col-span-4">
                        <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3  py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Login</button>
                    </div>

            </form>
        </div>
    </div>
@endsection