<x-reader-app-layout>


    <div class="px-24 py-8">
        <form method="GET" action="{{ route('reader.transaksi.list') }}">
            <div class="flex justify-center px-24">
                <x-text-input id="search" class="block mt-1 w-full" type="text" name="search" placeholder="Search Here" value="{{ isset($search) ? $search : null }}" autofocus autocomplete="search" />
                <div class="flex items-center justify-end mt-4">
                        <x-primary-button class="ml-4">
                            {{ __('Search') }}
                        </x-primary-button>
                    </div>
            </div>
        </form>
    </div>

     <div class="max-w-4xl mx-auto p-10">
        <table class="min-w-full bg-white rounded-lg overflow-hidden">
            <thead class="bg-gray-100 text-gray-700">
                <tr>
                    <th class="py-2 px-4">Name</th>
                    <th class="py-2 px-4">Plan</th>
                    <th class="py-2 px-4">Status</th>
                    <th class="py-2 px-4">Detail</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @foreach ($transaksis as $transaksi)
                    <tr>
                    <td class="py-2 px-4 text-center">{{$transaksi->user->name}}</td>
                    <td class="py-2 px-4 text-center">{{$transaksi->plan->name}}</td>
                    <td class="py-2 px-4 text-center">{{$transaksi->status->name}}</td>
                    <td class ="py-2 px-4 text-center">
                        <a href="{{ route('reader.transaksi.form-edit', ['id' => $transaksi->id])}}">
                            <x-secondary-button class="bg-yellow-500 border-none py-3">Edit</x-secondary-button>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-reader-app-layout>