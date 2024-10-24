<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Podcast') }}
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

                    {{-- Podcast Edit Form --}}
                    <form action="{{ route('podcasts.update', $podcast->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        {{-- Podcast Title --}}
                        <div class="mb-4">
                            <label for="title" class="block text-sm font-medium text-gray-700">Podcast Title</label>
                            <input type="text" name="title" id="title" value="{{ old('title', $podcast->title) }}"
                                class="mt-1 p-2 w-full border rounded-md">
                            @error('title')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Podcast Link --}}
                        <div class="mb-4">
                            <label for="link" class="block text-sm font-medium text-gray-700">Podcast Link</label>
                            <input type="url" name="link" id="link" value="{{ old('link', $podcast->link) }}"
                                class="mt-1 p-2 w-full border rounded-md">
                            @error('link')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Podcast Thumbnail --}}
                        <div class="mb-4">
                            <label for="thumbnail" class="block text-sm font-medium text-gray-700">Thumbnail</label>
                            <input type="file" name="thumbnail" accept=".png, .jpg, .jpeg, .svg" id="thumbnail"
                                class="mt-1 p-2 w-full border rounded-md">
                            @error('thumbnail')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Display Current or Selected Thumbnail --}}
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700">Current Thumbnail</label>
                            <img id="previewImage" src="{{ $podcast->thumbnail_url ?? '' }}"
                                style="width:200px;height:200px;object-fit:contain"
                                class="mt-2 w-full rounded-md border" alt="Podcast Thumbnail">
                        </div>

                        {{-- Submit Button --}}
                        <div class="mb-4">
                            <button type="submit"
                                class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">Update Podcast</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- JavaScript to Preview Thumbnail --}}
    <script>
        document.getElementById('thumbnail').addEventListener('change', function(event) {
            const previewImage = document.getElementById('previewImage');
            previewImage.src = URL.createObjectURL(event.target.files[0]);
        });
    </script>
</x-app-layout>