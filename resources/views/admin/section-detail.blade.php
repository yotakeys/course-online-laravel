<x-admin-app-layout>
    <div class="section__content bg-primary overflow-hidden grid grid-cols-3">
            <div class="main__content col-span-4 grid">
                <div class="listing__section pl-2 grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-1">
                    <div class="flex justify-center pt-10 py-1">
                        <a href="{{ route('admin.course.detail', ['id' => $courseId]) }}">
                            <x-secondary-button class="bg-yellow-500 border-none py-3" >Back To List</x-secondary-button>
                        </a>
                    </div>

                    <div class="flex justify-center pt-10 py-1">
                        <a href="{{ route('admin.section.form-edit', ['section_id' => $section->id, 'course_id' => $courseId]) }}">
                            <x-secondary-button class="bg-blue-500 border-none py-3">Edit section</x-secondary-button>
                        </a>
                    </div>

                    <div class="flex justify-center pt-10 py-1">
                        <form method="POST" route="{{ route('admin.section.delete',  ['section_id' => $section->id, 'course_id' => $courseId]) }}">
                            @csrf 
                            @method('DELETE')
                            <x-primary-button class="bg-red-700 border-none py-3">Delete section</x-primary-button>
                        </form>
                    </div>
                </div>
            </div>
    </div>

    <br>
    <div class="pb-5 pt-10">
        <h1 class="text-center pt-6 pb-3 text-4xl font-semibold text-black">{{$section->title}}</h1>
        <p class="text-center text-xl text-black">{{$section->text}}</p>
    </div>


</x-admin-app-layout>