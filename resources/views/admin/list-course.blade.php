<x-admin-app-layout>
    <div class="course__content bg-primary overflow-hidden grid grid-cols-3">
            <div class="main__content col-span-4 grid">
                <div class="listing__course pl-2 grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-1">
                    @foreach ($courses as $course)
                        <div class="p-2"> @component('components.course-card', ['plan' => $course->plan->name,'title' => $course->title, 'description' => $course->description,'section_many' => count($course->sections),])@endcomponent</div>
                    @endforeach
                </div>
            </div>
        </div>
</x-admin-app-layout>
