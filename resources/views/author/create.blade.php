<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add author') }}
        </h2>
    </x-slot>

    <div class="py-14 ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <form class="rounded px-8 pt-6 pb-8 mb-4" action="{{ route('authors.store') }}" method="POST">
                    @csrf

                    @method('POST')

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                            {{ __('Name') }}
                        </label>
                        <input
                            class="w-64 bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 @error('name') border-red-500 @enderror"
                            id="name" name="name" type="text" maxlength="80" value="{{ old('name') }}">
                        @error('name')
                            <x-error-message type="error" :message="$message" />
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="lastname">
                            {{ __('Last name') }}
                        </label>
                        <input
                            class="w-64 bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 @error('lastname') border-red-500 @enderror"
                            id="lastname" name="lastname" type="text" maxlength="80" value="{{ old('lastname') }}">
                        @error('lastname')
                            <x-error-message type="error" :message="$message" />
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="birth_date">
                            {{ __('Birth date') }}
                        </label>
                        <input type="date" id="birth_date" name="birth_date" value="{{ old('birth_date') }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block @error('birth_date') border-red-500 @enderror" />
                        @error('birth_date')
                            <x-error-message type="error" :message="$message" />
                        @enderror
                    </div>


                    <div class="flex items-center justify-between">
                        <button
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                            type="submit">
                            {{ __('Save') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
