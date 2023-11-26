<div class="relative group">
    <div class="relative p-3 z-10 w-full h-full rounded-3xl border-2 border-black p-1 bg-white transition-transform duration-200 ease-in-out transform group-hover:translate-x-2 group-hover:-translate-y-2">
        <div class="rounded-2xl p-2 bg-[#EAFCC9] text-center">{{$plan}}</div>
        <div class="text-center pt-4 pb-4">
            <h1 class="text-center pb-2 text-2xl font-semibold ">{{$title}}</h1>
            <div class="w-64">{{$description}}</div>
        </div>
        <div class="rounded-2xl p-2 bg-[#EAFCC9] flex justify-between">
            <div class="text-gray-500">{{$section_many}} Lessons</div>
        </div>
    </div>
    <div class="absolute z-0 top-0 w-full h-full rounded-3xl bg-yellow-500 transition-transform duration-200 ease-in-out transform group-hover:-translate-x-2 group-hover:translate-y-2"></div>
</div>