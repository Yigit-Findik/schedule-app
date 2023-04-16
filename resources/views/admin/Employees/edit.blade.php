<x-layout>
    <x-settings heading="Edit Employee">
        <form method="POST" action="/admin/employees/{{ $user->id }}">
            @csrf
            @method('PATCH')

            <x-form.input name="name" :value="$user->name" />
            <x-form.input name="username" :value="$user->username" />
            <x-form.input name="email" :value="$user->email" />
            <x-form.input name="password" type="password" />

            <x-form.button>Update</x-form.button>
        </form>
    </x-settings>
</x-layout>
