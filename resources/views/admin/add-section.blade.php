<x-admin-app-layout>
    <div class="flex justify-center pt-10 py-1">
        <a href="{{ route('admin.course.detail', ['id' => $courseId]) }}">
            <x-secondary-button class="bg-yellow-500 border-none py-3">Back To Course</x-secondary-button>
        </a>
    </div>

    <br>
    <div class="px-24">
        <form method="POST" action="{{ route('admin.section.add', ['course_id' => $courseId]) }}">
            @csrf

            <div>
                <x-text-input id="course_id" class="block mt-1 w-full" type="hidden" name="course_id" value="{{ $courseId }}" required />
            </div>

            <!-- title -->
            <div>
                <x-input-label for="title" :value="__('Title')" />
                <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required autofocus autocomplete="title" />
                <x-input-error :messages="$errors->get('title')" class="mt-2" />
            </div>

            <br>

            <!-- text -->
            <div>
                <x-input-label for="text" :value="__('Text')" />
                <x-text-input id="text" class="block mt-1 w-full" type="text" name="text" :value="old('text')" required autofocus autocomplete="text" />
                <x-input-error :messages="$errors->get('text')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-primary-button class="ml-4">
                    {{ __('Add') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-admin-app-layout>
