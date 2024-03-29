@props(['heading'])

<section class="py-8 max-w-4xl mx-auto">
    <h1 class="text-lg font-bold mb-8 p-2 border-b">
        {{ $heading }}
    </h1>

    <div class="flex">
        <div class="flex">
            <aside class="w-48 flex-shrink-0">
                <h4 class="font-semibold mb-4">Links</h4>
                <ul>
                    <li>
                        <!-- TODO: add another request to edit route of admin -->
                        <a href="/admin/employees"
                           class="{{ request()->is('admin/employees') || request()->is('admin/register') ? 'text-blue-500' : '' }}">Employees</a>
                    </li>
                    <li>
                        <a href="/admin/shifts"
                           class="{{ request()->is('admin/shifts') || request()->is('admin/shifts/create') ? 'text-blue-500' : '' }}">All Shifts </a>
                    </li>
                </ul>
            </aside>
        </div>

        <main class="flex-1">
            <x-panel class="max-w-xl mx-auto">
                {{ $slot }}
            </x-panel>
        </main>
    </div>
</section>
