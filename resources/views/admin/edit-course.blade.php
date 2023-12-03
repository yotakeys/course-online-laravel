<x-admin-app-layout>
    <div class="edit__course__container max-w-7xl mx-auto sm:px-2 md:px-6">
        <div class="action__button flex justify-end pt-8 gap-3">
            <a href="{{ route('admin.course.detail', ['id' => $course->id]) }}">
                <x-secondary-button class="border-gray-700 border-2 py-3">Back To Detail</x-secondary-button>
            </a>
        </div>
    
        <div class="">
            <form method="POST" action="{{ route('admin.course.edit', ['id' => $course->id]) }}">
                @csrf
                @method('PATCH')
    
                <!-- Plan -->
                <div>
                    <x-input-label for="plan" :value="__('Plan')" />
                    <select id="plan_id" class="block mt-1 w-full" name="plan_id" required autofocus autocomplete="plan">
                        @foreach ($plans as $plan)
                            <option @if ($plan->id == $course->plan_id) selected @endif value="{{ $plan->id }}">{{ $plan->name }}</option>
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('plan_id')" class="mt-2" />
                </div>
    
                <br>
    
                <!-- title -->
                <div>
                    <x-input-label for="title" :value="__('Title')" />
                    <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" value="{{$course->title}}" required autofocus autocomplete="title" />
                    <x-input-error :messages="$errors->get('title')" class="mt-2" />
                </div>
    
                <br>
    
                <!-- Description -->
                <div>
                    <x-input-label for="description" :value="__('Description')" />
                    <x-text-input id="description" class="block mt-1 w-full" type="text" name="description" value="{{$course->description}}" required autofocus autocomplete="description" />
                    <x-input-error :messages="$errors->get('description')" class="mt-2" />
                </div>
    
                <div class="flex items-center justify-end mt-4">
                    <x-primary-button class="bg-lime-500 ml-4">
                        {{ __('Update') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-admin-app-layout>
