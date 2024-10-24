<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Room') }}
        </h2>
    </x-slot>

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

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <form action="{{ route('rooms.mail.invetation',['room'=>$room->id]) }}" method="POST">
                        @csrf

                        <div class="mb-4">
                            <label for="emails" class="block text-sm font-medium text-gray-700">List Emails</label>
                            <textarea name="emails" id="emails" placeholder="Enter list of emails sepreate with ;
Email1;
Email2;
Email3; ...ect" class="mt-1 p-2 w-full border rounded-md " style="min-height: 150px;">{{ old('name') }}</textarea>
                            @error('name')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>



                        {{-- Submit Button --}}
                        <div class="mb-4">
                            <button type="submit"
                                class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">Invite</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>