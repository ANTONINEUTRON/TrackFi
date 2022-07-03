<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Airdrops Optins') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if (count($data) < 1)
                        No Airdrop Request Has Been Recorded yet!
                    @else
                        <table style="width: 100%" class="min-w-full shadow-lg bg-grey-800 border-collapse">
                            <tr>
                                <th class="bg-blue-100 border text-left px-8 py-4">Address</th>
                                <th class="bg-blue-100 border text-left px-8 py-4">Handles</th>
                                <th class="bg-blue-100 border text-left px-8 py-4">Transaction ID</th>
                            </tr>
                            
                            @foreach ($data as $item)
                                <tr>
                                    <td class="border px-8 py-4">
                                        <span id="address" style="display: none">
                                            {{$item->address}}
                                        </span>
                                        
                                        <span id="address">
                                            {{substr($item->address,0,15).".........."}}
                                        </span>

                                        <span class="btn" style="position: relative;" onclick="copyAddr()">
                                            <span class="popuptext" style="display: none" id="cPopup">Copied</span>
                                            <i style=" font-size: small;" class="far fa-copy text-light"></i>
                                        </span>
                                    </td>
                                    <td class="border px-8 py-4">
                                        {{$item->handles}}
                                    </td>
                                    <td class="border py-4 pl-4">
                                        {{substr($item->transactionId,0,15)."........."}}
                                        <form class="inline" action="/delete_airdrop" method="post">
                                            @csrf
                                            <input type="hidden" name="address" value="{{$item->address}}"/>
                                            <x-button class="bg-blue-500 hover:bg-blue-700 ml-3 mr-0">
                                                {{ __('Delete') }}
                                            </x-button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <script>
        @if (!empty($message))
            alert("{{$message}}");
        @endif
        function copyAddr(){
            var copyText = document.getElementById("address").innerHTML;
        
            /* Copy the text inside the text field */
            navigator.clipboard.writeText(copyText);
        
            /* Alert the copied text */
            document.getElementById("cPopup").style.display = "inline";
            setTimeout(myFunc, 3000);
            function myFunc() {
                document.getElementById("cPopup").style.display = "none";
            }
        }
    </script>
</x-app-layout>
