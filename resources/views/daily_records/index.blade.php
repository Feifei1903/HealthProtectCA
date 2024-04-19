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

    <div class="center">
        @forelse ($dailyRecord as $dailyRecords)
            <div class="card">
                <div class="my-6 p-6 bg-white border border-gray-200 shadow-sm sm:rounded-lg">
                    <h2 class="font-bold text-2x1">
                        {{-- <a href="{{ route('dailyRecord.show', $dailyRecord) }}">{{ $dailyRecord->name }}</a> --}}
                    </h2>
                </div>
            </div>
        @empty
            <p>NO Records</p>
        @endforelse
    </div>

    <h1 class="text-center">All Records</h1>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Amount Smoked</th>
                    <th>Daily Spent</th>
                </tr>
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
                        <td colspan="3">No Record</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

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
            border: 1px solid #6A599D; /* Thin border */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 10px;
            max-width: 400px;
            width: calc(100% - 20px);
        }
    </style>
</x-app-layout>
