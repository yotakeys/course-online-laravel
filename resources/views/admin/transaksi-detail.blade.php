<x-admin-app-layout>
    <div class="detail__transaction__container max-w-7xl mx-auto sm:px-2 md:px-6 lg:px-8">
        <div class="detail__trasaction__banner">
            <h1 class="text-left text-3xl font-extrabold py-5">Edit Transaction</h1>
        </div>
        <div class="transaction__container grid grid-cols-3 pt-2">
            <div class="left__contaienr col-span-2">
                <div class="payment__report_container bg-white border-2 border-black pb-10">
                    <h1 class="text-left text-2xl font-extrabold bg-gray-100 px-5 py-3 border-b-2 border-black">Payment Report</h1>
                    <div class="mx-5 mt-2">
                        <table class="min-w-full bg-white rounded-lg overflow-hidden">
                            <thead class="bg-gray-100 text-gray-700">
                                <tr>
                                    <th class="py-2 px-4">Detail</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                <tr>
                                    <td class="py-2 px-4">Name : {{$transaksi->user->name}}</td>
                                </tr>
                                <tr>
                                    <td class="py-2 px-4">Email : {{$transaksi->user->email}}</td>
                                </tr>
                                <tr>
                                    <td class="py-2 px-4">Plan : {{$transaksi->plan->name}}</td>
                                </tr>
                                <tr>
                                    <td class="py-2 px-4">Price : {{$transaksi->total_price}}</td>
                                </tr>
                                <tr>
                                    <td class="py-2 px-4">Status : {{$transaksi->status->name}}</td>
                                </tr>
                                <tr>
                                    <td class="py-2 px-4">Created At : {{$transaksi->created_at}}</td>
                                </tr>
                                <tr>
                                    <td class="py-2 px-4">Updated At : {{$transaksi->updated_at}}</td>
                                </tr>
                                <tr>
                                    <td class="py-2 px-4">
                                        <div class="flex justify-center items-center">
                                            <div class="mr-2">Bukti Pembayaran : </div>
                                            <img src="{{ asset($transaksi->image_url) }}" class="max-w-full h-auto" style="max-height: 200px;">
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="right__container col-span-1 bg-white border-2 border-black ml-5 p-4">
                <div class="form__container">
                <form method="POST" action="{{ route('admin.transaksi.change-status', ['id' => $transaksi->id]) }}">
                @csrf
                @method('PATCH')

                <!-- status -->
                <div class="">
                    <x-input-label for="status" :value="__('Status')" class=""/>
                    <select id="status_id" class="block mt-1 w-full rounded-lg" name="status_id" required autofocus autocomplete="status">
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
                    <x-text-input id="report" class="block mt-1 w-full border-gray-700" type="text" name="report" value="{{$transaksi->report}}" required autofocus autocomplete="report" />
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
        </div>
    </div>

</x-admin-app-layout>