@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-6/12 bg-white p-6 rounded-lg">
            <form action="{{ route('register') }}" method="post">
                @csrf    
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-2">
                        <label for="name" class="block text-sm font-medium leading-6 text-gray-900"></label>
                            <div class="mt-2">
                                <input type="text" name="name" id="name" placeholder="Your Name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 px-2 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{ old('name') }}">
                            
                                @error('name')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{ $message }}
                                </div>
                                @enderror

                            </div>
                    </div>

                    <div class="sm:col-span-2">
                        <label for="username" class="block text-sm font-medium leading-6 text-gray-900"></label>
                            <div class="mt-2">
                                <input type="text" name="username" id="username" placeholder="Username" class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{ old('username') }}">
                               
                                @error('username')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                    </div>

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
                        <label for="password_confirmation" class="block text-sm font-medium leading-6 text-gray-900"></label>
                            <div class="mt-2">
                                <input id="password_confirmation" name="password_confirmation" type="password" placeholder="Repeat Password" class="block w-full rounded-md border-0 py-1.5 text-gray-900 px-2 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                @error('password')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{ $message }}
                                </div>
                            @enderror
                            
                            </div>
                    

                            <div>
                                <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 mt-6 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Register</button>
                            </div>

            </form>
        </div>
    </div>
@endsection