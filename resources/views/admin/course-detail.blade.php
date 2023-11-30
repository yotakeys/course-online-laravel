<x-admin-app-layout>
    <div class="course__content bg-primary overflow-hidden grid grid-cols-3">
            <div class="main__content col-span-4 grid">
                <div class="listing__course pl-2 grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-1">
                    <div class="flex justify-center pt-10 py-1">
                        <a href="{{ route('admin.course.list') }}">
                            <x-secondary-button class="bg-yellow-500 border-none py-3" >Back To List</x-secondary-button>
                        </a>
                    </div>

                    <div class="flex justify-center pt-10 py-1">
                        <a href="{{ route('admin.course.form-edit', ['id' => $course->id])}}">
                            <x-secondary-button class="bg-blue-500 border-none py-3">Edit Course</x-secondary-button>
                        </a>
                    </div>

                    <div class="flex justify-center pt-10 py-1">
                        <form method="POST" route="{{ route('admin.course.list') }}">
                            @csrf 
                            @method('DELETE')
                            <x-primary-button class="bg-red-700 border-none py-3">Delete Course</x-primary-button>
                        </form>
                    </div>
                </div>
            </div>
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
        <a href="{{ route('admin.section.detail', ['section_id' => $section->id, 'course_id' => $course->id]) }}">
            <div class="section__header border-gray-400 border-b flex flex-col sm:flex-row pt-2 pb-2">
                <div class="course__header flex items-center pr-2 pb-2 pt-2 align-middle">
                    <h1 class="section__title text-left pr-2 font-bold text-xl">{{$section->title}}</h1>
                </div>
            </div>
        </a>
        @endforeach
    </div>
    <div class="flex justify-center pt-10 py-1">
        <a href="{{ route('admin.section.form-add', ['course_id' => $course->id]) }}">
            <x-secondary-button class="bg-lime-700 border-none py-3">Add Lesson</x-secondary-button>
        </a>
    </div>


</x-admin-app-layout>