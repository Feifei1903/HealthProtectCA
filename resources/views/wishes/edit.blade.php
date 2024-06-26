 <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Wish') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                <form action="{{ route('wish.update', $wish) }}" method="post" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <x-text-input
                        type="text"
                        name="name"
                        field="name"
                        placeholder="Name"
                        class="w-full"
                        autocomplete="off"
                        :value="@old('name', $wish->name)"></x-text-input>

                    <x-text-input
                        type="float"
                        name="price"
                        field="price"
                        placeholder="Price..."
                        class="w-full mt-6"
                        :value="@old('price', $wish->price)"></x-text-input>





                    <x-primary-button class="mt-6">Save Wish</x-primary-button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
