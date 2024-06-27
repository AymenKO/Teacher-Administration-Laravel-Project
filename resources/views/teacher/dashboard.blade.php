<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Teacher Dashboard') }}
        </h2>
    </x-slot>

    <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 3000)" class="fixed top-0 left-0 right-0 bg-green-500 text-white text-center p-4">
        {{ __("You're logged in as a teacher!") }}
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Welcome to Teacher Dashboard!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
