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

                    {{-- Room Creation Form --}}
                    <form action="{{ route('rooms.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        {{-- Room Name --}}
                        <div class="mb-4">
                            <label for="name" class="block text-sm font-medium text-gray-700">Room Name</label>
                            <input type="text" name="name" id="name" value="{{ old('name') }}"
                                class="mt-1 p-2 w-full border rounded-md">
                            @error('name')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Room Description --}}
                        <div class="mb-4">
                            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                            <textarea name="description" id="description"
                                class="mt-1 p-2 w-full border rounded-md">{{ old('description') }}</textarea>
                            @error('description')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Room Password --}}
                        <div class="mb-4">
                            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                            <input type="password" name="password" id="password"
                                class="mt-1 p-2 w-full border rounded-md">
                            @error('password')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Room Image --}}
                        <div class="mb-4">
                            <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                            <input type="file" name="image" accept=".png, .jpg, .jpeg, .svg" id="image"
                                class="mt-1 p-2 w-full border rounded-md">
                            @error('image')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Display Selected Image --}}
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700">Selected Image</label>
                            <img id="previewImage" style="width:200px;height:200px;object-fit:contain;display:none"
                                class="mt-2 w-full rounded-md border" alt="Preview Image">
                        </div>

                        {{-- Submit Button --}}
                        <div class="mb-4">
                            <button type="submit"
                                class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">Create
                                Room</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- JavaScript to Preview Image --}}
    <script>
        document.getElementById('image').addEventListener('change', function (event) {
            const previewImage = document.getElementById('previewImage');
            previewImage.style.display = "block";
            previewImage.src = URL.createObjectURL(event.target.files[0]);
        });
    </script>
</x-app-layout>