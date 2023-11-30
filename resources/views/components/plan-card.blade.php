<div class="relative group h-full w-full flex flex-col">
    <div class="relative z-10 w-full h-full rounded-lg border border-black bg-white flex flex-col transform translate-x-2 translate-y-0">
        <div class="rounded-lg p-2 text-left font-extrabold {{ $title == 'Basic' ? 'bg-yellow-500' : 'bg-[#EAFCC9]' }}">{{ $title }}</div>
        <div class="py-4 flex text-center justify-center border-b-2 border-dotted">
            <span class="font-extrabold">Rp</span>
            <h1 class="text-left pb-2 font-semibold text-5xl ">{{ $price }}</h1>
        </div>
        <div class="p-2 flex justify-center w-[280px] h-[100px]">
            <div class="text-black text-sm text-center">{{ $description }}</div>
        </div>
        @if($title == "Basic")
        <div class="button__try flex justify-center py-5">
            <a href="{{ route('login') }}">
                <x-secondary-button class="bg-yellow-500 border-none py-3">Try Basic</x-secondary-button>
            </a>
        </div>
        @endif
    </div>
    <div class="absolute z-0 top-0 w-full h-full rounded-lg border-dotted border-black border-[1.6px] transform translate-x-0 translate-y-2"></div>
</div>