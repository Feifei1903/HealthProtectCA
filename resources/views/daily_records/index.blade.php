<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daily Records') }}
        </h2>
    </x-slot>

    <!-- alert-success is a component I created to display a success message that may be sent from the controller.
            For example, when a publisher is deleted, a message like "Publisher Deleted Successfully" will be displayed -->
    <x-alert-success>
        {{ session('success') }}
    </x-alert-success>

    {{-- <x-primary-button><a href="{{ route('dailyRecord.create') }}" class="btn-link btn-lg">Add a daily record</a></x-primary-button> --}}

    <div class="container">
        @forelse ($dailyRecord as $dailyRecords)
            <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                <h2 class="font-bold text-2x1">
                    {{-- <a href="{{ route('dailyRecord.show', $dailyRecord) }}">{{ $dailyRecord->name }}</a> --}}
                </h2>
            </div>
        @empty
            <p>NO Records</p>
        @endforelse
        <h1>All Records</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Amount Smoked</th>
                    <th>Daily Spent</th>
                <tr>
            </thead>
            <tbody>
                @forelse ($dailyRecords as $dailyRecord)
                    <tr>
                        {{-- <td>{{ $dailyRecord->date }}</td>
                        <td>{{ $dailyRecord->amount_smoke }}</td>
                        <td>{{ $dailyRecord->daily_spent }}</td> --}}

                    </tr>
                @empty
                    <tr>
                        <td>No Record</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

    </div>
</x-app-layout>
