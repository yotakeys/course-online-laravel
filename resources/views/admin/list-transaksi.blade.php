<x-admin-app-layout>
    <div class="transaksi__containe max-w-7xl mx-auto px-2 pt-20">
        <div class="">
            <form method="GET" action="{{ route('admin.transaksi.list') }}">
                <div class="flex justify-center ">
                    <x-text-input id="search" class="block w-full" type="text" name="search" placeholder="Search Here" value="{{ isset($search) ? $search : null }}" autofocus autocomplete="search" />
                    <div class="flex items-center justify-end ">
                            <x-primary-button class="ml-4">
                                {{ __('Search') }}
                            </x-primary-button>
                        </div>
                </div>
            </form>
        </div>
    
         <div class="transaksi__table pt-2">
            <table class="min-w-full bg-white rounded-lg overflow-hidden">
                <thead class="bg-gray-100 text-gray-700">
                    <tr>
                        <th class="py-2 px-4">Name</th>
                        <th class="py-2 px-4">Email</th>
                        <th class="py-2 px-4">Status</th>
                        <th class="py-2 px-4">Action</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach ($transaksis as $transaksi)
                        <tr>
                        <td class="py-2 px-4 text-center">{{$transaksi->user->name}}</td>
                        <td class="py-2 px-4 text-center">{{$transaksi->user->email}}</td>
                        <td class="py-2 px-4 text-center">{{$transaksi->status->name}}</td>
                        <td class ="py-2 px-4 text-center">
                            <a href="{{ route('admin.transaksi.detail', ['id' => $transaksi->id])}}">
                                <x-secondary-button class="border-blue-500 py-3">Detail</x-secondary-button>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-admin-app-layout>