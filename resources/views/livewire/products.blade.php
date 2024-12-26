
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Products') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <form wire:submit="save" class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                @if ($messageText)
                    <div class="px-4 py-3 mb-4 leading-normal text-blue-700 bg-blue-100 rounded-lg" role="alert">
                        {{ $messageText }}
                    </div>
                @endif

                <div class="mt-10 sm:mt-0">
                    <label class="block font-medium text-sm text-gray-700" for="name">
                        Product name
                    </label>
                    <input wire:model.live.debounce="name" type="text" id="name"
                        class="mt-2 text-sm sm:text-base pl-2 pr-4 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400" />
                    @error('name')
                        <div class="text-sm text-red-500 mt-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mt-10 sm:mt-0">
                    <label class="block font-medium text-sm text-gray-700" for="name">
                        Product Price
                    </label>
                    <input wire:model.live.debounce="price" type="text" id="price"
                        class="mt-2 text-sm sm:text-base pl-2 pr-4 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400" />
                    @error('price')
                        <div class="text-sm text-red-500 mt-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mt-10 sm:mt-0">
                    <label class="block font-medium text-sm text-gray-700" for="description">
                        Product description
                    </label>
                    <textarea wire:model.live.debounce="description" id="description"
                            class="mt-2 mb-0 text-sm sm:text-base pl-2 pr-4 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400"></textarea>
                    @error('description')
                        <div class="text-sm text-red-500 mt-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="flex items-center mt-4">
                    <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                        Add Product
                    </button>
                </div>
            </form>
        </div>
    </div>
