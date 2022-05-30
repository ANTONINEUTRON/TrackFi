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
                    <x-button type="button" class="m-5" data-modal-toggle="authentication-modal">
                        {{ __('Add New Advert') }}
                    </x-button>
                    @if (!empty($actionResponse))
                        <span class="text-green-500 block text-center text-xl m-8">
                            {{$actionResponse}}
                        </span>
                    @endif
                    <div class="container mx-auto">
                        @if (count($data)>0)
                            @foreach ($data as $item)
                                <hr>
                                <div class="grid grid-cols-1 sm:grid-cols-3 ">
                                    <div class="md:col-span-1"> 
                                        <span id="email"><b>Landing Page: </b><a target="_blank" class="text-blue-500 hover:text-blue-800" href="{{$item->url}}">{{$item->url}}</a></span>
                                        <br><br>
                                        {{-- <x-button class="m-3">
                                            {{ __('Edit') }}
                                        </x-button> --}}
                                        <form action="{{route('delete.ads')}}" method="POST">
                                            @csrf
                                            <input type="hidden" value="{{$item->id}}" name="id"/>
                                            <input type="hidden" value="{{'public/images/ads/'.$item->large_banner_url}}" name="big_filepath"/>
                                            <input type="hidden" value="{{'public/images/ads/'.$item->small_banner1_url}}" name="small_filepath1"/>
                                            <input type="hidden" value="{{'public/images/ads/'.$item->small_banner2_url}}" name="small_filepath2"/>
                                            <x-button class="m-3 bg-red-500">
                                                {{ __('Delete') }}
                                            </x-button>
                                        </form>
                                    </div>
                                    @if (!empty($item->large_banner_url))
                                        <div class="md:col-span-1">
                                            <b>Large Banner</b><br>
                                            <img id="big_banner" style="width: 350px; height:500px;" class="p-2 inline" src="{{url('public/images/ads/'.$item->large_banner_url)}}"/>
                                        </div>
                                    @endif
                                    <div class="md:col-span-1">
                                        @if (!empty($item->small_banner1_url))
                                            <b>Top Banner</b><br>
                                            <img id="small_banner1" style="width: 350px; height:100px;" class="p-2 inline" src="{{url('public/images/ads/'.$item->small_banner1_url)}}" />
                                        @endif
                                        
                                        @if (!empty($item->small_banner2_url))
                                            <b>Bottom Banner</b><br>
                                            <img id="small_banner2" style="width: 350px; height:100px;" class="p-2 inline" src="{{url('public/images/ads/'.$item->small_banner2_url)}}" />
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <p class="text-center text-2xl">No Adverts has been set yet!</p>
                        @endif
                        
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="authentication-modal" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-5 right-0 left-0 z-50 w-full md:inset-0 h-modal h-full pt-0 md:pt-55 justify-center items-center">
    {{-- sm:h-full justify-center items-center  flex --}}
        <div class="relative p-4 w-full max-w-md h-full md:h-auto">

            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button"
                    class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                    data-modal-toggle="authentication-modal">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div class="py-6 px-6 lg:px-8">
                    <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Add New Advert</h3>
                    <form class="space-y-6" action="{{route('add.advert')}}" method="post" 
                        enctype="multipart/form-data">
                        @csrf

                        <div>
                            <label for="url" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                Link to landing page</label>
                            <input type="url" name="url" id="url"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="https://" required="">
                        </div>
                       
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="big_banner">Upload Large Banner (350 width x 600 height)</label>
                        <input
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                            aria-describedby="big_banner" id="big_banner" name="big_banner" type="file">
                        <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="big_banner_help">Ensure the banner fit the specified resolution in order to avoid issues</div>
                        
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="small_banner1">Upload Small Banner - Top (350 width x 100 height)</label>
                        <input
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                            aria-describedby="small_banner1" id="small_banner1" name="small_banner1" type="file">
                        
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="small_banner2">Upload Small Banner - Bottom (350 width x 100 height)</label>
                        <input
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                            aria-describedby="small_banner2" id="small_banner2" name="small_banner2" type="file">
                        <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="small_banner_help">Ensure the banner fit the specified resolution in order to avoid issues</div>
                        
                        <button type="submit"
                            class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/flowbite@1.4.5/dist/flowbite.js"></script>
</x-app-layout>
