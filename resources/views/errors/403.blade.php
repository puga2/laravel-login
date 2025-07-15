<x-app-layout>
    <div class="flex flex-col items-center justify-center min-h-screen bg-gray-100">
        <h1 class="text-4xl font-bold text-red-600 mb-4">403 Forbidden</h1>
        <p class="text-lg text-gray-700 mb-6">
            Sorry, you don't have permission to access this page.
        </p>
        <a href="{{ route('note.index') }}" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
            Go Home
        </a>
    </div>
</x-app-layout>