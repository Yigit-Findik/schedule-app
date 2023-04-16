<!--CODE COMMENT: This is an edit page of a shift-->
<x-layout>
    <x-settings heading="Edit Shift">
        <form method="POST" action="/admin/shifts/{{ $shift->id }}">
            @csrf
            @method('PATCH')
            <div class="mb-6">
                <label for="user_id" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                    User
                </label>
                <select name="user_id" id="user_id" class="border border-gray-400 p-2 w-full" required>
                    <option value="{{ $shift->user->id }}">{{ $shift->user->name }}</option>
                    @foreach ($users as $user)
                        @if ($user->id !== $shift->user->id)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-6">
                <label for="name" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                    Name
                </label>
                <input type="text" class="border border-gray-400 p-2 w-full" name="name" id="name" value="{{ $shift->name }}" required>
                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="date" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                    Date
                </label>
                <input type="date" class="border border-gray-400 p-2 w-full" name="date" id="date" value="{{ $shift->date }}" required>
                @error('date')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="start_time" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                    Start Time
                </label>
                <input type="time" class="border border-gray-400 p-2 w-full" name="start_time" id="start_time" value="{{ $shift->start_time }}" required>
                @error('start_time')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="end_time" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                    End Time
                </label>
                <input type="time" class="border border-gray-400 p-2 w-full" name="end_time" id="end_time" value="{{ $shift->end_time }}" required>
                @error('end_time')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <x-form.button>Update</x-form.button>
        </form>
    </x-settings>
</x-layout>
