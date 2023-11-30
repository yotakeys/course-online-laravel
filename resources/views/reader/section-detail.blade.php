<x-reader-app-layout>
    <div class="flex justify-center pt-10 py-1">
        <a href="{{ route('reader.course.detail', ['id' => $courseId]) }}">
            <x-secondary-button class="bg-yellow-500 border-none py-3" >Back To Course</x-secondary-button>
        </a>
    </div>

    <br>
    <div class="pb-5 pt-10">
        <h1 class="text-center pt-6 pb-3 text-4xl font-semibold text-black">{{$section->title}}</h1>
        <p class="text-center text-xl text-black">{{$section->text}}</p>
    </div>


</x-reader-app-layout>