<x-app-layout>

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('sass/_variables.css') }}" rel="stylesheet">

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


    <div class="container body-bg">
        @forelse ($wishes as $wish)
            <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                <h2 class="font-bold text-2x1">
                    <a href="{{ route('wish.show', $wish) }}">{{ $wish->name }}</a>
                </h2>
            </div>
        @empty
            <p>NO Wishes</p>
        @endforelse

        <x-primary-button><a href="{{ route('wish.create') }}" class="btn-link btn-lg body-bg">Add a wish</a></x-primary-button>

    </div>
</x-app-layout>
