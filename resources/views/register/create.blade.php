<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10">
            <x-panel>
                <h1 class="text-center font-bold text-xl">Register</h1>
                <form method="POST" action="/register" class="mt-10">
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
                    <x-form.button>
                        Register
                    </x-form.button>
                </form>
            </x-panel>
        </main>
    </section>
</x-layout>
