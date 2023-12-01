<x-admin-app-layout>
    <div class="detail__transaksi max-w-7xl mx-auto px-2 pt-20">
        <div class="flex justify-center">
            <a href="{{ route('admin.transaksi.list') }}">
                <x-secondary-button class="bg-yellow-500 border-none py-3">Back To List</x-secondary-button>
            </a>
        </div>
    
        <div class="max-w-4xl mx-auto p-10">
            <table class="min-w-full bg-white rounded-lg overflow-hidden">
                <thead class="bg-gray-100 text-gray-700">
                    <tr>
                        <th class="py-2 px-4">Detail</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <tr>
                        <td class="py-2 px-4 text-center">Name : {{$transaksi->user->name}}</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 text-center">Email : {{$transaksi->user->email}}</td>
                    </tr>   
                    <tr>
                        <td class="py-2 px-4 text-center">Plan : {{$transaksi->plan->name}}</td>
                    </tr>  
                    <tr>
                        <td class="py-2 px-4 text-center">Price : {{$transaksi->total_price}}</td>
                    </tr>    
                    <tr>
                        <td class="py-2 px-4 text-center">Status : {{$transaksi->status->name}}</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 text-center">Created At : {{$transaksi->created_at}}</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 text-center">Updated At : {{$transaksi->updated_at}}</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 text-center">
                            <div class="flex justify-center items-center">
                                <div class="mr-2 text-center">Bukti Pembayaran : </div>
                                <img src="{{ asset($transaksi->image_url) }}" class="max-w-full h-auto" style="max-height: 200px;">
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <div class="pb-5 pt-10">
            <h1 class="text-center pt-6 pb-3 text-4xl font-semibold text-black">Data Checks</h1>
        </div>
    
        <div class="p-24">
            <form method="POST" action="{{ route('admin.transaksi.change-status', ['id' => $transaksi->id]) }}">
                @csrf
                @method('PATCH')
    
                <!-- status -->
                <div>
                    <x-input-label for="status" :value="__('Status')" />
                    <select id="status_id" class="block mt-1 w-full" name="status_id" required autofocus autocomplete="status">
                        @foreach ($statuses as $status)
                            <option @if ($status->id == $transaksi->status_id) selected @endif value="{{ $status->id }}">{{ $status->name }}</option>
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('status_id')" class="mt-2" />
                </div>
    
                <br>
    
                <!-- report -->
                <div>
                    <x-input-label for="report" :value="__('Report')" />
                    <x-text-input id="report" class="block mt-1 w-full" type="text" name="report" value="{{$transaksi->report}}" required autofocus autocomplete="report" />
                    <x-input-error :messages="$errors->get('report')" class="mt-2" />
                </div>
    
                <br>
    
                <div class="flex items-center justify-end mt-4">
                    <x-primary-button class="ml-4">
                        {{ __('Edit') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>

</x-admin-app-layout>