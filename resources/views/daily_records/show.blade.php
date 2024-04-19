<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-black-800 leading-tight">
         Dashboard
        </h2>
    </x-slot>

    <!-- Page Content -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-alert-success>
                {{ session('success')}}
            </x-alert-success>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                    <table class="table table-hover">
                        <tbody>

                            <tr>
                                <td class="font-bold ">Date </td>
                                <td>{{ $dailyRecord->date }}</td>
                            </tr>

                            <tr>
                                <td class="font-bold">Amount smoked </td>
                                <td>{{ $dailyRecord->amount_smoke }}</td>
                            </tr>

                            <tr>
                                <td class="font-bold">Daily spent </td>
                                <td>{{ $dailyRecord->daily_spent }}</td>
                            </tr>

                        </tbody>
                    </table>


                    <div class="flex">
                        <x-primary-button><a href="{{ route('wish.edit', $wish)}}">Edit</a> </x-primary-button>

                        <form action="{{ route('wish.destroy', $wish) }}" method="post">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger ml-4" onclick="return confirm('Are you sure you want to delete?')">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
