<x-reader-app-layout>
    <div class="flex justify-center pt-10 py-1">
        <a href="{{ route('reader.transaksi.list') }}">
            <x-secondary-button class="bg-yellow-500 border-none py-3">Back To List</x-secondary-button>
        </a>
    </div>

    <br>
    <div class="px-24">
        <form method="POST" action="{{ route('reader.transaksi.edit', ['id' => $transaksi->id]) }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <!-- Plan -->
            <div>
                <x-text-input disabled="true" id="plan" class="block mt-1 w-full" type="text" name="plan" value="{{ $transaksi->plan->name }}" required />
            </div>

            <br>

            <!-- price -->
            <div>
                <x-input-label for="total_price" :value="__('Price')" />
                <x-text-input id="total_price" class="block mt-1 w-full" disabled="true" name="total_price" value="{{$transaksi->total_price}}" required />
                <x-input-error :messages="$errors->get('price')" class="mt-2" />
            </div>

            <br>

             <!-- status -->
            <div>
                <x-input-label for="status" :value="__('Status')" />
                <x-text-input id="status" class="block mt-1 w-full" disabled="true" name="status" value="{{$transaksi->status->name}}" required />
                <x-input-error :messages="$errors->get('status')" class="mt-2" />
            </div>

            <br>

            <!-- report -->
            <div>
                <x-input-label for="report" :value="__('report')" />
                <x-text-input id="report" class="block mt-1 w-full" disabled="true" name="report" value="{{$transaksi->report}}" required />
                <x-input-error :messages="$errors->get('report')" class="mt-2" />
            </div>
            
            <br>

            <!-- Bukti Pembayaran -->
            <div>
                <x-input-label for="image" :value="__('Bukti Pembayaran')" />
                <x-text-input id="image" class="block mt-1 w-full" type="file" name="image" :value="old('image')" required autofocus autocomplete="image" />
                <x-input-error :messages="$errors->get('image')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-primary-button class="ml-4">
                    {{ __('Edit') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-reader-app-layout>
