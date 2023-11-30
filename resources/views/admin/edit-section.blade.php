<x-admin-app-layout>
    <div class="flex justify-center pt-10 py-1">
        <a href="{{ route('admin.section.detail', ['section_id' => $section->id, 'course_id' => $courseId]) }}">
            <x-secondary-button class="bg-yellow-500 border-none py-3">Back To detail</x-secondary-button>
        </a>
    </div>

    <br>
    <div class="px-24">
        <form method="POST" action="{{ route('admin.section.edit', ['section_id' => $section->id, 'course_id' => $courseId]) }}">
            @csrf
            @method('PATCH')

            <div>
                <x-text-input id="course_id" class="block mt-1 w-full" type="hidden" name="course_id" value="{{ $courseId }}" required />
            </div>
            
            <!-- title -->
            <div>
                <x-input-label for="title" :value="__('Title')" />
                <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" value="{{$section->title}}" required autofocus autocomplete="title" />
                <x-input-error :messages="$errors->get('title')" class="mt-2" />
            </div>

            <br>

            <!-- Text -->
            <div>
                <x-input-label for="text" :value="__('Text')" />
                <x-text-input id="text" class="block mt-1 w-full" type="text" name="text" value="{{$section->text}}" required autofocus autocomplete="text" />
                <x-input-error :messages="$errors->get('text')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-primary-button class="ml-4">
                    {{ __('Edit') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-admin-app-layout>
