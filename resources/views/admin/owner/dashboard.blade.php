<x-admin-layout>
    <x-admin.dashboard></x-admin.dashboard>
    <form action="{{ route('logout') }}" method="POST" style="display: inline;">
        @csrf <!-- Token CSRF untuk keamanan -->
        <button type="submit">Logout</button>
    </form>
</x-admin-layout>
