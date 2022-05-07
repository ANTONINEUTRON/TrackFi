<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Configure Wallet') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{-- if the response is not empty show here --}}
                    @if(!empty($message))
                        <script>
                            alert("{{$message}}");
                        </script>
                    @endif

                    <form method="POST" action="{{ route('set_wallet') }}">
                        @csrf

                        <div>
                            <x-label for="wallet" :value="__('Receiver Wallet')" />

                            <x-input id="wallet" class="block mt-1 w-full" type="text" name="wallet" placeholder="{{$wallet}}"  autofocus required/>
                        </div>
                        
                        <x-button class="bg-blue-500 hover:bg-blue-700 mt-3">
                            {{ __('Submit') }}
                        </x-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
