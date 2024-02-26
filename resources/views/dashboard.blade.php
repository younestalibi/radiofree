<x-app-layout>
    @if(session('success'))
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        Swal.fire({
            title: 'Success!',
            text: @json(session('success')),
            icon: 'success',
            confirmButtonText: 'OK'
        });
    </script>
    @endif
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg flex justify-between items-center">
                <div class="p-6 text-gray-900">
                    {{ __("Welcome ✨") }}
                </div>
                <div>
                    <a href="{{ route('rooms.create') }}"
                        class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                        Create new room
                    </a>
                </div>
            </div>



            <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-8">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Room name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Description
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Image
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Password
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Created at
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($rooms as $room)
                        <tr
                            class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $room->name }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $room->description }}
                            </td>
                            <td class="px-6 py-4">

                                <img src="{{ asset('storage/' . $room->image) }}"
                                    style="width:100px;height:100px;object-fit:contain" alt="Uploaded Image">

                            </td>
                            <td class="px-6 py-4">
                                {{ $room->password }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $room->created_at }}
                            </td>
                            <td class="px-6 py-4">
                                <a href="{{route('rooms.edit',['room'=>$room->id])}}"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                    <i class="bi bi-pencil-square"></i>
                                </a>

                                <a href="{{route('rooms.invite',['room'=>$room->id])}}"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                    <i class="bi bi-envelope-at-fill"></i>
                                </a>
                                <form method="post" action="{{route('rooms.delete',['room'=>$room->id])}}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                        <i class="bi bi-trash3-fill"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>


    </div>
</x-app-layout>