<nav class="flex flex-1 flex-col">
    <ul class="flex flex-1 flex-col gap-y-7">
        <li>
            <ul class="-mx-2 space-y-1">
                @foreach ($this->links as $link)
                    <li>
                        <a href="{{ $link['path'] }}"
                           @class([
                               'group flex gap-x-3 items-center rounded-md p-2 font-medium leading-6',
                               'text-gray-400' => !request()->routeIs(Str::lower($link['name'])),
                               'bg-primary-100 text-primary-500' => request()->routeIs(Str::lower($link['name'])),
                           ])>
                            <x-icon name="{{ $link['icon'] }}"
                                    @class([
                                        'h-5 w-5',
                                        'text-gray-400' => !request()->routeIs(Str::lower($link['name'])),
                                        'text-primary-600' => request()->routeIs(Str::lower($link['name'])),
                                    ]) />
                            {{ $link['name'] }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </li>
        <li>
            <div class="font-medium leading-6 tracking-wide text-gray-500"
                 x-data="{{ json_encode(['name' => auth()->user()->name]) }}"
                 x-text="name"
                 x-on:profile-updated.window="name = $event.detail.name"></div>
            <ul class="-mx-2 mt-2 space-y-1">
                @foreach ($this->accountLinks as $link)
                    <li>
                        <a href="{{ $link['path'] }}"
                           @class([
                               'group flex gap-x-3 items-center rounded-md p-2 font-medium leading-6',
                               'text-gray-400' => !request()->routeIs(Str::lower($link['name'])),
                               'bg-primary-100 text-primary-500' => request()->routeIs(Str::lower($link['name'])),
                           ])>
                            <x-icon name="{{ $link['icon'] }}"
                                    @class([
                                        'h-5 w-5',
                                        'text-gray-400' => !request()->routeIs(Str::lower($link['name'])),
                                        'text-primary-600' => request()->routeIs(Str::lower($link['name'])),
                                    ]) />
                            {{ $link['name'] }}
                        </a>
                    </li>
                @endforeach
                <li>
                    <a class="group flex items-center gap-x-3 rounded-md p-2 font-medium leading-6 text-gray-400"
                       href="#"
                       wire:click="logout">
                        <x-icon class="h-5 w-5 text-gray-400"
                                name="arrow-left-on-rectangle" />
                        Logout
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</nav>
