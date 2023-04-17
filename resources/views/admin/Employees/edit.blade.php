<x-layout>
    <x-settings heading="Edit Employee">
        <form method="POST" action="/admin/employees/{{ $user->id }}">
            @csrf
            @method('PATCH')

            <x-form.input name="name" :value="$user->name" />
            <x-form.input name="username" :value="$user->username" />
            <!-- TODO: fix this edit for profile thumbnail -->
{{--            <x-form.field>--}}
{{--                <label class="block mb-2 uppercase font-bold text-xs text-gray-700">--}}
{{--                    Profile Thumbnail--}}
{{--                </label>--}}
{{--                <input type="file" name="profile_thumbnail" id="profile_thumbnail" class="block mt-1 w-full">--}}
{{--            </x-form.field>--}}
            <x-form.input name="email" :value="$user->email" />
            <x-form.field>
                <x-form.label name="role_id"/>
                <select name="role_id" class="border border-gray-200 p-2 w-full rounded">
                    <option value="{{ $user->role_id }}">{{ $user->role->name }}</option>
                    @foreach ($roles as $role)
                        @if($user->role_id !== $role->id)
                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                        @endif
                    @endforeach
                </select>
            </x-form.field>
            <x-form.input name="password" type="password" />

            @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="text-red-500 text-xs">{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            <x-form.button>Update</x-form.button>
        </form>
    </x-settings>
</x-layout>
