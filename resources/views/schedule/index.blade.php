<x-layout>
    @include('schedule._header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @auth
            @if ($shifts->isEmpty())
                <div class="text-center pb-72 pt-24"> You have no shifts scheduled. </div>
            @else
                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Date
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Start Time
                            </th>
                            <th scope="col" class="px-6 py-3">
                                End Time
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($shifts as $shift)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $shift->date }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $shift->start_time }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $shift->end_time }}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

            @endif
        @else
            <p>Login to see your schedule!</p>
        @endguest
    </main>
</x-layout>
