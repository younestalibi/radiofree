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
            {{ __('Podcasts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg flex justify-between items-center">
                <div class="p-6 text-gray-900">
                    {{ __("Welcome to the Podcast Dashboard ✨") }}
                </div>
                <div>
                    <a href="{{ route('podcasts.create') }}"
                        class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                        Create new podcast
                    </a>
                </div>
            </div>

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-8">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Podcast Title
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Thumbnail
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Link
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Created at
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($podcasts as $podcast)
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $podcast->title }}
                            </th>
                            <td class="px-6 py-4">
                                <img src="{{ asset('storage/' . $podcast->thumbnail) }}" style="width:100px;height:100px;object-fit:contain" alt="Thumbnail Image">
                            </td>
                            <td class="px-6 py-4">
                                <a href="{{ $podcast->link }}" target="_blank" class="text-blue-600 dark:text-blue-500 hover:underline">Link</a>
                            </td>
                            <td class="px-6 py-4">
                                {{ $podcast->created_at }}
                            </td>
                            <td class="px-6 py-4">
                                <a href="{{ route('podcasts.edit', ['podcast' => $podcast->id]) }}"
                                    class="font-medium text-green-600 dark:text-green-500 hover:text-green-700 hover:underline">
                                    <i class="bi bi-pencil-square"></i>
                                </a>

                                <form class="inline" method="post" action="{{ route('podcasts.destroy', ['podcast' => $podcast->id]) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="font-medium text-red-600 dark:text-red-500 hover:text-red-700 hover:underline">
                                        <i class="bi bi-trash3-fill"></i>
                                    </button>
                                </form>
                                <a href="https://wa.me/?text=Check%20out%20this%20podcast%20%22{{ urlencode($podcast->title) }}%22.%20Listen%20here%3A%20{{ urlencode($podcast->link) }}"
                                    target="_blank"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:text-blue-700 hover:underline">
                                    <i class="bi bi-whatsapp"></i>
                                </a>
                                <a href="https://web.skype.com/share?url={{ urlencode($podcast->link) }}"
                                    target="_blank"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:text-blue-700 hover:underline">
                                    <i class="bi bi-skype"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>