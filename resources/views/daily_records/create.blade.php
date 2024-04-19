<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create rec') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                <form action="{{ route('dailyRecord.store') }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <x-text-input
                    type="date"
                    name="date"
                    field="date"
                    placeholder="Date"
                    class="w-full"
                    autocomplete="off"
                    :value="@old('date')">
                    </x-text-input>

                    <x-text-input type="integer"
                    name="amount_smoke"
                    field="amount_smoke"
                    placeholder="Amount smoke..."
                    class="w-full mt-6"
                    :value="@old('amount_smoke')">
                </x-text-input>

                    <x-text-input type="float"
                    name="daily_spent"
                    field="daily_spent"
                    placeholder="Daily Spent..."
                    class="w-full mt-6"
                    :value="@old('daily_spent')"></x-text-input>


                    <x-primary-button class="mt-6">Save Record</x-primary-button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
