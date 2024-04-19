<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Wish') }}
        </h2>
    </x-slot>

    <style>
        .center {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #FED8BB;
        }

        .card {
            background-color: #6A599D;
            border-radius: 10px;
            border: 1px solid #6A599D; /* Thin border */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 10px;
            max-width: 400px;
            width: 100%;
        }

        body {
            margin: 0;
            padding: 0;
        }
    </style>

    <div class="center">
        <div class="card">
            <div class="py-3">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="my-6 p-6 border border-gray-200 shadow-sm sm:rounded-lg">
                        <form action="{{ route('wish.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <!-- Static Text "Make a Wish" -->
                            <div class="text-white mb-4">Make a wish</div>

                            <!-- Name Input -->
                            <x-text-input
                                type="text"
                                name="name"
                                field="name"
                                placeholder="Name"
                                class="w-full"
                                autocomplete="off"
                                :value="@old('name')"
                            ></x-text-input>

                            <!-- Price Input -->
                            <x-text-input
                                type="float"
                                name="price"
                                field="price"
                                placeholder="Price..."
                                class="w-full mt-6"
                                :value="@old('price')"
                            ></x-text-input>

                            <!-- Save Button -->
                            <x-primary-button class="mt-6">Save Wish</x-primary-button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
