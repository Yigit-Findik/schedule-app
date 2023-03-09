@props(['heading'])

<section class="py-8 max-w-4xl mx-auto">
    <h1 class="text-lg font-bold mb-8 p-2 border-b">
        {{ $heading }}
    </h1>

    <div class="flex">
        <aside class="w-48 flex-shrink-0">
            <h4 class="font-semibold mb-4">Links</h4>
            <ul>
                <li>
                    <a href="/admin/posts"
                       class="{{ request()->is('admin/posts') ? 'text-blue-500' : '' }}">All Employees</a>
                </li>
                <li>
                    <a href="/admin/posts/create"
                       class="{{ request()->is('admin/posts/create') ? 'text-blue-500' : '' }}">New Post</a>
                </li>
            </ul>
        </aside>
    </div>

    <main class="flex-1">
        <x-panel class="max-w-xl mx-auto">
            {{ $slot }}
        </x-panel>
    </main>
</section>
