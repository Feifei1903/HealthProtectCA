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

    <div class="center">
        @forelse ($wishes as $wish)
            <div class="card">
                <div class="my-6 p-6 bg-white border border-gray-200 shadow-sm sm:rounded-lg">
                    <h2 class="font-bold text-2x1">
                        <a href="{{ route('wish.show', $wish) }}">{{ $wish->name }}</a>
                    </h2>
                </div>
            </div>
        @empty
            <p>NO Wishes</p>
        @endforelse
    </div>

    <x-primary-button><a href="{{ route('wish.create') }}" class="btn-link btn-lg body-bg">Add a wish</a></x-primary-button>

    <style>
        .center {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            margin-top: 20px;
        }

        .card {
            background-color: #FED8BB;
            border-radius: 10px;
            border: 2px solid #6A599D; /* Thin border */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 10px;
            max-width: 400px;
            width: calc(100% - 20px);
        }
    </style>
</x-app-layout>
