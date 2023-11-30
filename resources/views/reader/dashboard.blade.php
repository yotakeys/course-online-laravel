<x-reader-app-layout>
    <div class="dashboard__container max-w-7xl mx-auto sm:px-2 md:px-6 lg:px-8 lg:py-10 grid grid-cols-3">
        <div class="dashboard__banner col-span-2 w-full h-full relative group flex bg-tertiary rounded-2xl" id="dashboard-banner">
            <div class="justify-end md:pr-5 lg:pr-2 hidden sm:block p-5">
                <img class="md:w-[150px] lg:w-[250px] h-auto" src="{{ asset('images/dashboard-img.png') }}" alt="image">
            </div>
            <div class="pt-7 pb-5 pl-5 lg:pr-10 sm:pr-5 text-white">
                <h1 class="text-3xl font-extrabold pt-2 pb-2">Welcome to your dashboard</h1>
                <div>We've added some recommendations based on your goals and interests. Try out a course or path now - you can always start a new one later.</div>
            </div>
            <div class="p-2">
                <button onclick="document.getElementById('dashboard-banner').style.display='none'" class="text-white border border-white hover:bg-white hover:text-tertiary px-2 rounded-lg h-7">
                        &times;
                </button>
            </div>
        </div>
        <div class="dashboard__todo col-span-1 pl-10 w-full h-full">
            <h1 class="text-2xl font-extrabold pt-2 pb-2">To do list</h1>
            <div class="w-full h-full relative group bg-white rounded-2xl">
                <div class="bg-tertiary rounded-2xl">
                    <h2 class="text-sm text-left py-2 pl-5 text-white">Drop your todo here!</h2>
                </div>
            </div>
        </div>
    </div>
</x-reader-app-layout>