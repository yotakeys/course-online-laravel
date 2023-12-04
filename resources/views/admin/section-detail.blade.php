<x-admin-app-layout>
    <div class="section__detail__container max-w-7xl mx-auto sm:px-2 md:px-6 lg:px-8 pt-5">
        <div class="action__button flex justify-end gap-3">
            <a href="{{ route('admin.course.detail', ['id' => $courseId]) }}">
                <x-secondary-button class="border-gray-700 border-2 py-3">Back To Course</x-secondary-button>
            </a>
            <a href="{{ route('admin.section.form-edit', ['section_id' => $section->id, 'course_id' => $courseId]) }}">
                <x-secondary-button class="border-yellow-500 border-2 py-3">Edit section</x-secondary-button>
            </a>
            <form method="POST" action="{{ route('admin.section.delete',  ['section_id' => $section->id, 'course_id' => $courseId]) }}">
                @csrf
                @method('DELETE')
                <x-primary-button class="border-red-500 border-2 py-3">Delete section</x-primary-button>
            </form>
        </div>
        <div class="pb-5">
            <h1 class="text-center pt-6 pb-3 text-3xl font-semibold text-black">{{$section->title}}</h1>
            <p class="text-justify text-lg text-black">{{$section->text}}</p>
        </div>
    </div>
</x-admin-app-layout>