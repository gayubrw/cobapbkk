<x-app-layout>
    <div class="flex flex-col min-h-screen bg-gray-900">
        <!-- Navbar -->
        <x-navbar />

        <!-- Main Content -->
        <div class="flex flex-1">
            <!-- Sidebar -->
            <x-sidebar />

            <!-- Content -->
            <main class="flex-1 p-8">
                <h2 class="text-2xl font-semibold mb-4 text-white">{{ __('Dashboard') }}</h2>
                <div class="bg-gray-800 rounded-lg shadow-lg p-6 text-white">
                    {{ __("You're logged in!") }}
                </div>
            </main>
        </div>

        <!-- Footer -->
        <x-footer />
    </div>
</x-app-layout>