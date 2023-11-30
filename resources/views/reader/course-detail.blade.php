<x-reader-app-layout>
    <div class="flex justify-center pt-10 py-1">
        <a href="{{ route('reader.catalog') }}">
            <x-secondary-button class="bg-yellow-500 border-none py-3" >Back To List</x-secondary-button>
        </a>
    </div>
    <br>

    <div class="pb-5 pt-10">
        <h1 class="text-center pt-6 pb-3 text-4xl font-semibold text-black">{{$course->title}}</h1>
        <p class="text-center text-xl text-black">{{$course->description}}</p>
    </div>

    <br>

    <div class="pb-5 pt-10">
        <p class="text-center text-xl text-black">{{count($course->sections)}} Sections</p>
    </div>

    <div class="px-24">
        @foreach ($course->sections as $section)
        <a href="{{ route('reader.section.detail', ['section_id' => $section->id, 'course_id' => $course->id]) }}">
            <div class="section__header border-gray-400 border-b flex flex-col sm:flex-row pt-2 pb-2">
                <div class="course__header flex items-center pr-2 pb-2 pt-2 align-middle">
                    <h1 class="section__title text-left pr-2 font-bold text-xl">{{$section->title}}</h1>
                </div>
            </div>
        </a>
        @endforeach
    </div>
</x-reader-app-layout>