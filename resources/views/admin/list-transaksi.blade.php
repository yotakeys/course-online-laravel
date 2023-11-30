<x-admin-app-layout>
     <div class="max-w-4xl mx-auto p-10">
        <table class="min-w-full bg-white rounded-lg overflow-hidden">
            <thead class="bg-gray-100 text-gray-700">
                <tr>
                    <th class="py-2 px-4">Name</th>
                    <th class="py-2 px-4">Email</th>
                    <th class="py-2 px-4">Status</th>
                    <th class="py-2 px-4">Detail</th>
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
                            <x-secondary-button class="bg-yellow-500 border-none py-3">Detail</x-secondary-button>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-admin-app-layout>