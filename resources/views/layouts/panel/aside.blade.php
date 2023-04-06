<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
        <ul class="space-y-2 font-medium">
            <x-panel.aside-links :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                <span class="ml-3">{{ __('Dashboard') }}</span>
            </x-panel.aside-links>
            <x-panel.aside-links >
                <span class="ml-3">{{ __('Links') }}</span>
            </x-panel.aside-links>
            <x-panel.aside-links >
                <span class="ml-3">{{ __('Posts') }}</span>
            </x-panel.aside-links>
            <x-panel.aside-links >
                <span class="ml-3">{{ __('Codes') }}</span>
            </x-panel.aside-links>
        </ul>
    </div>
</aside>
