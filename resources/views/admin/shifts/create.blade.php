<x-layout>
    <x-settings heading="Create New Shift">
        <form method="POST" action="/admin/register" enctype="multipart/form-data">
            @csrf
            <x-form.input name="name" type="text" autocomplete="name"/>
            <x-form.field>
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <input class="border border-gray-200 p-2 w-full rounded"
                       name="name"
                       id="name"
                       type="text"
                       autocomplete="name"
                       value="{{ old('name') }}">
                <x-form.error name="name"/>
            </x-form.field>
        </form>
    </x-settings>
</x-layout>
