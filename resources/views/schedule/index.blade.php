<x-layout>
    @include('schedule._header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @auth
            @if ($shifts->isEmpty())
                <div class="text-center pb-72 pt-24"> You have no shifts scheduled. </div>
            @else
                <table>
                    <thead>
                    <tr>
                        <th>Date</th>
                        <th>Start Time</th>
                        <th>End Time</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($shifts as $shift)
                            <tr>
                                <td>{{ $shift->date }}</td>
                                <td>{{ $shift->start_time }}</td>
                                <td>{{ $shift->end_time }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        @else
            <p>Login to see your schedule!</p>
        @endguest
    </main>
</x-layout>
