<x-layout>
    <x-settings heading="Manage Employees">
        <div class="flex flex-col">
            <div class="my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <tbody class="bg-white divide-y divide-gray-200">
                                @if (count($users))
                                    @foreach ($users as $user)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        <a href="/admin/employees/{{ $user->id }}">{{ $user->name }}</a>
                                                    </div>
                                                </div>
                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                <a href="/admin/employees/{{ $user->id }}/edit"
                                                   class="text-blue-500 hover:text-blue-600">Edit</a>
                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                <form method="POST" action="/admin/employees/{{ $user->id }}">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button class="text-red-500 hover:text-red-600">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <x-panel>
                                        <p class="text-center">No users, safe delete not implemented.</p>
                                    </x-panel>
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <a href="/admin/register"><button class="mt-2 transition-colors duration-300 bg-blue-500 hover:bg-blue-600 rounded-full text-xs font-semibold text-white uppercase py-2 px-10">Create User</button></a>
                </div>
            </div>
        </div>
    </x-settings>
</x-layout>
