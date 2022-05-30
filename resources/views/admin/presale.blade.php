<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Presales') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-x-auto shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                        @if (count($data) < 1)
                            No presales has been recorded yet! <br>
                        @else
                            <table style="width: 100%" class="min-w-full shadow-lg bg-grey-800 border-collapse">
                                <tr>
                                    <th class="bg-blue-100 border text-left px-8 py-4">Transaction Address</th>
                                    <th class="bg-blue-100 border text-left px-8 py-4">Algorand Paid</th>
                                    <th class="bg-blue-100 border text-left px-8 py-4">Trackfi Received</th>
                                </tr>
                                @for($i=0; $i < count($data); $i++)
                                    <tr>
                                        <td class="border px-8 py-4">{{$data[$i]->transaction_addr}}</td>
                                        <td class="border px-8 py-4">{{$data[$i]->algo_amount}}</td>
                                        <td class="border px-8 py-4">{{$data[$i]->toolx_amount_received}}</td>
                                    </tr>
                                @endfor
                            </table>
                        @endif

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
