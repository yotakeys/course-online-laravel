<x-admin-app-layout>
    <div class="flex justify-center pt-10 py-1">
        <a href="{{ route('admin.course.list') }}">
            <x-secondary-button class="bg-yellow-500 border-none py-3">Back To List</x-secondary-button>
        </a>
    </div>

    <br>
    <div class="px-24">
        <form method="POST" action="{{ route('admin.course.add') }}">
            @csrf

            <!-- Plan -->
            <div>
                <x-input-label for="plan" :value="__('Plan')" />
                <select id="plan_id" class="block mt-1 w-full" name="plan_id" required autofocus autocomplete="plan">
                    <option value="">Select Plan</option>
                    @foreach ($plans as $plan)
                        <option value="{{ $plan->id }}">{{ $plan->name }}</option>
                    @endforeach
                </select>
                <x-input-error :messages="$errors->get('plan_id')" class="mt-2" />
            </div>

            <br>

            <!-- title -->
            <div>
                <x-input-label for="title" :value="__('Title')" />
                <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required autofocus autocomplete="title" />
                <x-input-error :messages="$errors->get('title')" class="mt-2" />
            </div>

            <br>

            <!-- Description -->
            <div>
                <x-input-label for="description" :value="__('Description')" />
                <x-text-input id="description" class="block mt-1 w-full" type="text" name="description" :value="old('description')" required autofocus autocomplete="description" />
                <x-input-error :messages="$errors->get('description')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-primary-button class="ml-4">
                    {{ __('Add') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-admin-app-layout>
