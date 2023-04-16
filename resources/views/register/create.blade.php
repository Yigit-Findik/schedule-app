<x-layout>
    <x-settings heading="Register New Employee">
        <form method="POST" action="/admin/register" enctype="multipart/form-data">
            @csrf
            <x-form.input name="name" type="text" autocomplete="name"/>
            <x-form.input name="username" type="text" autocomplete="username"/>
            <x-form.input name="email" type="email" autocomplete="email"/>
            <x-form.input name="profile_thumbnail" type="file"/>
            <x-form.field>
                <x-form.label name="role_id"/>
                <select name="role_id" class="border border-gray-200 p-2 w-full rounded">
                    @foreach ($roles as $role)
                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                    @endforeach
                </select>
            </x-form.field>
            <x-form.input name="password" type="password" autocomplete="new-password"/>
            <div class="flex justify-between items-center">
                <x-form.button class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded">
                    Register
                </x-form.button>
                <a href="employees" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded">
                    Back
                </a>
            </div>
        </form>
    </x-settings>
</x-layout>
