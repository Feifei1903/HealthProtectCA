<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Wishes') }}
        </h2>
    </x-slot>

    <!-- alert-success is a component I created to display a success message that may be sent from the controller.
            For example, when a publisher is deleted, a message like "Publisher Deleted Successfully" will be displayed -->
    <x-alert-success>
        {{ session('success') }}
    </x-alert-success>

    <x-primary-button><a href="{{ route('wish.create') }}" class="btn-link btn-lg">Add a wish</a></x-primary-button>

    <div class="container">
        @forelse ($wishes as $wish)
            <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                <h2 class="font-bold text-2x1">
                    <a href="{{ route('wish.show', $wish) }}">{{ $wish->name }}</a>
                </h2>
            </div>
        @empty
            <p>NO Wishes</p>
        @endforelse
        <h1>All Wishes</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                <tr>
            </thead>
            <tbody>
                @forelse ($wishes as $wish)
                    <tr>
                        <td><a href="{{ route('wish.show', $wish) }}"
                                class="font-bold text-2xl">{{ $wish->name }}</a></td>
                        <td>{{ $wish->price }}</td>

                    </tr>
                @empty
                    <tr>
                        <td>No Wish</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

    </div>
</x-app-layout>
