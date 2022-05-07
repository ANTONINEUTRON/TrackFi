<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Advertisement') }}
        </h2>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-button class="m-5">
                        {{ __('Add New Advert') }}
                    </x-button>
                    <div class="container mx-auto">
                        <hr>
                        <div class="grid grid-cols-1 sm:grid-cols-3 ">
                            <div class="md:col-span-1"> 
                                <span id="organization" class="font-semibold font-serif text-3xl">Organization</span><br>
                                <span id="views">Views</span><br>
                                <span id="clicks">Clicks</span><br>
                                <span id="email">Email address of organization</span>
                                <hr>
                                <x-button class="m-3">
                                    {{ __('Edit') }}
                                </x-button>
                                <x-button class="m-3 bg-red-500">
                                    {{ __('Delete') }}
                                </x-button>
                            </div>
                            <div class="md:col-span-1">
                              <img id="big_banner" class="p-2 inline" src="https://picsum.photos/200" />
                            </div>
                            <div class="md:col-span-1">
                              <img id="small_banner" class="p-2 inline" src="https://picsum.photos/200" />
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
