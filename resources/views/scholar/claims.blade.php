<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Claims') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Upload Claims
					<div>
						<!--livewire:upload-csv /-->						
						<!--livewire:news-create /-->

					</div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
