<x-layout>
    <x-settings heading="Create New Shift">
        <form method="POST" action="{{ route('shifts.store') }}" enctype="multipart/form-data">
            @csrf
            <x-form.input name="name" type="text" autocomplete="name"/>
            <x-form.field>
                <label for="user_id" class="block text-sm font-medium text-gray-700">User</label>
                <select id="user_id" name="user_id" class="border border-gray-200 p-2 w-full rounded">
                    <option selected disabled>Select an user</option>
                    @foreach($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
                <x-form.error name="name"/>
            </x-form.field>
            <x-form.input name="date" type="date" autocomplete="date"/>
            <x-form.input name="start_time" type="time" autocomplete="start_time"/>
            <x-form.input name="end_time" type="time" autocomplete="end_time"/>
            <div class="flex justify-between items-center">
                <x-form.button>Create Shift</x-form.button>
                <a href="{{ route('shifts.index') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded">
                    Back
                </a>
            </div>
        </form>
    </x-settings>
</x-layout>
