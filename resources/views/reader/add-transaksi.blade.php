<x-reader-app-layout>
    <div class="flex justify-center pt-10 py-1">
        <a href="{{ route('reader.transaksi.list') }}">
            <x-secondary-button class="bg-yellow-500 border-none py-3">Back To List</x-secondary-button>
        </a>
    </div>

    <br>
    <div class="px-24">
        <form method="POST" action="{{ route('reader.transaksi.add') }}" enctype="multipart/form-data">
            @csrf

            <!-- Plan -->
            <div>
                <x-text-input id="plan_id" class="block mt-1 w-full" type="hidden" name="plan_id" value="{{ $plan->id }}" required />
                <x-text-input disabled="true" id="plan" class="block mt-1 w-full" type="text" name="plan" value="{{ $plan->name }}" required />
            </div>

            <br>

            <!-- price -->
            <div>
                <x-input-label for="total_price" :value="__('Price')" />
                <x-text-input id="total_price" disabled="true" class="block mt-1 w-full" type="text" name="total_price" value="{{$plan->price}}" required />
                <x-text-input id="total_price" class="block mt-1 w-full" type="hidden" name="total_price" value="{{$plan->price}}" required />
                <x-input-error :messages="$errors->get('price')" class="mt-2" />
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
                    {{ __('Buy') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-reader-app-layout>
