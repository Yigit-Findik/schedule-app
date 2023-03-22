<x-layout>
    @include('schedule._header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        {{-- here is the schedule calendar with the employees --}}
        @auth
            <x-calendar />
{{--            <div class="text-center pb-72 pt-20"> Schedule Calendar Soon </div>--}}
        @else
            <div class="text-center pb-72 pt-24"> Login to see the schedule! </div>
        @endguest
    </main>
</x-layout>
