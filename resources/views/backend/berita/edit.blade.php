<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Update Berita') }}
        </h2>
    </x-slot>
    
    {{-- <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('beritas.update',$berita->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="mb-6">
                            <label class="block">
                                <span class="text-gray-700 @error('title') text-red-500 @enderror">Title</span>
                                <input type="text" name="title"
                                    class="block @error('title') border-red-500 bg-red-100 text-red-900 @enderror w-full mt-1 rounded-md"
                                    placeholder="" value="{{old('title',$blog->title)}}" />
                            </label>
                            @error('title')
                            <div class="flex items-center text-sm text-red-600">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label class="block">
                                <span class="text-gray-700 @error('content') text-red-500 @enderror">Content</span>
                                <textarea
                                    class="block @error('content') border-red-500  bg-red-100 text-red-900 @enderror w-full mt-1 rounded-md"
                                    name="content" rows="3">{{old('content',$blog->content)}}</textarea>
                            </label>
                            @error('content')
                            <div class="flex items-center text-sm text-red-600">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label class="block">
                                <span class="sr-only">Choose File</span>
                                <input type="file" name="image"
                                    class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" />
                            </label>
                            @error('image')
                            <div class="flex items-center text-sm text-red-600">
                                {{ $message }}

                            </div>
                            @enderror
                            <img src="{{ asset($blog->image) }}" class="w-12 h-12" alt="{{ asset($blog->image) }}">
                        </div>
                        <button type="Update"
                            class="text-white bg-blue-600  rounded text-sm px-5 py-2.5">Update</button>

                    </form>
                </div>
            </div>
        </div>
    </div> --}}

    <div  class="items-center justify-center w-full max-h-full ">
        <div class="relative w-full max-h-full p-4">
            <!-- Modal content -->
            <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                <!-- Modal header -->
                <div class="flex items-center justify-start pb-4 mb-4 border-b rounded-t sm:mb-5 dark:border-gray-600">
                    <x-button href="{{ route('beritas.index') }}" variant="secondary" >
                        {{-- <x-heroicon-o-login class="w-6 h-6 mr-1 -ml-1" aria-hidden="true" /> --}}
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M12.707 17.293 8.414 13H18v-2H8.414l4.293-4.293-1.414-1.414L4.586 12l6.707 6.707z"></path></svg>
                    </x-button>
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Update News</h3>
                </div>
                <!-- Modal body -->
                <form method="POST" action="{{ route('beritas.update',$berita->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="grid gap-4 mb-4 sm:grid-cols-2">
                        <div>
                            <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                            <input type="text" name="title" id="title" value="{{old('title',$berita->title)}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="" >
                        </div>
                        <div>
                            <label for="thumbnail" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tumbnail</label>
                            <input type="file" name="thumbnail" id="thumbnail" value="{{old('title',$berita->thumbnail)}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="" >
                        </div>
                        <div>
                            <label for="date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date</label>
                            <input type="date" name="date" id="date" value="{{old('title',$berita->date)}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="" >
                        </div>
                        <div><label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                            <select name="category" id="category" value="{{old('title',$berita->category)}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"><option  selected="">{{old('content',$berita->category)}}</option><option value="Berita">Berita</option>
                                <option value="Kegiatan">Kegiatan</option>
                                <option value="Lomba">Lomba</option>
                                <option value="Magang">Magang</option>
                                <option value="Prestasi">Prestasi</option>
                                <option value="Konten">Konten</option></select></div>
                        <div class="sm:col-span-2"><label for="content" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Content</label>
                            <textarea name="content" id="content"  rows="4" class="summernote block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="">{{old('content',$berita->content)}}</textarea></div>
                    </div>
                    <div class="flex justify-end">
                        <x-button type="Update" variant="success" >
                            Update
                        </x-button>
                    </div>
    
                </form>
            </div>
        </div>
    
     
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
          $('.summernote').summernote();
        });
    </script>
</x-app-layout>