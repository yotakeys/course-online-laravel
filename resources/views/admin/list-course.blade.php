<x-admin-app-layout>
    
    <div class="flex justify-center pt-10 py-1">
        <a href="{{ route('admin.course.form-add') }}">
            <x-secondary-button class="bg-yellow-500 border-none py-3">Add Course</x-secondary-button>
        </a>
    </div>

    <br>
    <form method="GET" action="{{ route('admin.course.list') }}">
        <div class="flex justify-center px-24">
            <x-text-input id="search" class="block mt-1 w-full" type="text" name="search" placeholder="Search Here" value="{{ isset($search) ? $search : null }}" autofocus autocomplete="search" />
            <div class="flex items-center justify-end mt-4">
                    <x-primary-button class="ml-4">
                        {{ __('Search') }}
                    </x-primary-button>
                </div>
        </div>
    </form>
    <br>

    <div class="course__content bg-primary overflow-hidden grid grid-cols-3">
            <div class="main__content col-span-4 grid">
                <div class="listing__course pl-2 grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-1">
                    @foreach ($courses as $course)
                        <a href="{{ route('admin.course.detail', ['id' => $course->id])}}">
                        <div class="p-2"> @component('components.course-card', ['plan' => $course->plan->name,'title' => $course->title, 'description' => $course->description,'section_many' => count($course->sections),])@endcomponent</div>
                        </a>
                    @endforeach
                </div>
            </div>
    </div>
</x-admin-app-layout>
