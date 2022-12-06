@extends('layouts.base')

@section('content')
    <div class="flex min-h-full flex-col justify-center py-12 sm:px-6 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <img class="mx-auto h-12 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">

            <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">
                {{ __('Hello, :name!', ['name' => 'Max']) }}
            </h2>

            <p class="mt-2 text-center text-sm text-gray-600">
                <a href="{{ route('auth.registration') }}" class="font-medium text-indigo-600 hover:text-indigo-500">
                    {{ __('Sign Out') }}
                </a>
            </p>
        </div>
    </div>
@endsection
