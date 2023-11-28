@extends('layouts.catalog.default')

@section('content-section')
    <div class="catalog__container max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="catalog__header border-gray-400 border-b justify-between flex pt-2 pb-2">
            <div class="course__header flex items-center pr-2 pb-2 pt-2 align-middle">
                <h1 class="catalog__title text-left pr-2 font-bold text-xl">Programming Courses</h1>
                <span class="text-center align-middle pt-0.5">20 Result</span>
            </div>
            <!-- drop down: most recent and most popular -->
            <select class="ml-auto text-sm h-9">
                <option value="recent">Most Recent</option>
                <option value="popular">Most Popular</option>
            </select>
        </div>
        <div class="catalog__content bg-primary overflow-hidden grid grid-cols-5">
            <div class="side__content col-span-1">
                <div class="filter__tools pt-3">
                    <i class="ri-filter-3-line"></i>
                    <span><b>Filters</b></span>
                    <button class="clear-filter-button text-sm text-gray-500">Clear Filters</button>
                </div>
                <div class="filter__price border-gray-400 border-b pb-4">
                    <div class="pt-2 pb-2 ">
                        <span>
                            <b>Price</b>
                        </span>
                        <button class="text-sm text-secondary">View Price</button>
                    </div>
                    <div class="price__range">
                        <div>
                            <input type="checkbox" class="free__input bg-primary">
                            <span class="text-sm pl-1">Free</span>
                        </div>
                        <div>
                            <input type="checkbox" class="free__input bg-primary">
                            <span class="text-sm pl-1">Paid</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main__content col-span-4 grid">
                <div class="listing__course pl-2 grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-1">
                    @foreach ($courses as $course)
                        <div class="p-2"> @component('components.course-card', ['plan' => $course->plan->name,'title' => $course->title, 'description' => $course->description,'section_many' => count($course->sections),])@endcomponent</div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection