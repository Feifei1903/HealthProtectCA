<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 body-bg leading-tight">
            {{ __('Records') }}
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
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="my-6 p-6 border border-gray-200 shadow-sm sm:rounded-lg">
                        <form action="{{ route('dailyRecord.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <!-- Date Input -->
                            <x-text-input
                                type="date"
                                name="date"
                                field="date"
                                placeholder="Date"
                                class="w-full"
                                autocomplete="off"
                                :value="@old('date')"
                            ></x-text-input>

                            <!-- Amount Smoke Input -->
                            <x-text-input
                                type="integer"
                                name="amount_smoke"
                                field="amount_smoke"
                                placeholder="Amount smoke..."
                                class="w-full mt-6"
                                :value="@old('amount_smoke')"
                            ></x-text-input>

                            <!-- Daily Spent Input -->
                            <x-text-input
                                type="float"
                                name="daily_spent"
                                field="daily_spent"
                                placeholder="Daily Spent..."
                                class="w-full mt-6"
                                :value="@old('daily_spent')"
                            ></x-text-input>

                            <!-- Save Button -->
                            <x-primary-button class="mt-6">Save Record</x-primary-button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
