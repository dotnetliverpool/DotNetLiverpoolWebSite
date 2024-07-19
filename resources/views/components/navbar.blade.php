<nav class="bg-white-800">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="relative flex h-16 items-center justify-between">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <!-- Mobile menu button-->
                <button type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="absolute -inset-0.5"></span>
                    <span class="sr-only">Open main menu</span>
                    <!--
                      Icon when menu is closed.

                      Menu open: "hidden", Menu closed: "block"
                    -->
                    <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <!--
                      Icon when menu is open.

                      Menu open: "block", Menu closed: "hidden"
                    -->
                    <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            {{--     Logo       --}}
            <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                <div class="flex flex-shrink-0 items-center">
                    <a
                        href="/"
                        class="rounded-md px-3 py-2 text-sm font-medium text-gray-900"
                        aria-current="{{request()->is('/')? 'page' : 'false'}}"
                    >
                        .NET LIVERPOOL
                    </a>
                </div>
            </div>

            {{--        Menu Items        --}}
            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                <x-navlink href="about" :active="request()->is('/about')">About</x-navlink>
                <x-navlink href="project" :active="request()->is('/project')">Projects</x-navlink>
                <x-navlink href="support" :active="request()->is('/support')">Support</x-navlink>
                <x-navlink href="contact" :active="request()->is('/contact')">Contact</x-navlink>
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="sm:hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pb-3 pt-2">
            <x-navlink
                href="about"
                :active="request()->is('/about')"
                :is_mobile="true"
            >
                About
            </x-navlink>
            <x-navlink
                href="project"
                :active="request()->is('/project')"
                :is_mobile="true"
            >
                Projects
            </x-navlink>
            <x-navlink
                href="project"
                :active="request()->is('/project')"
                :is_mobile="true">
                Support
            </x-navlink>
            <x-navlink
                href="project"
                :active="request()->is('/project')"
                :is_mobile="true"
            >
                Contact
            </x-navlink>
        </div>
    </div>
</nav>
