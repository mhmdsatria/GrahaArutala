<x-app-layout>
    {{-- @dd($content) --}}
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Update Content') }}
        </h2>
    </x-slot>

    <div  class="items-center justify-center w-full max-h-full ">
        <div class="relative w-full max-h-full p-4">
            <!-- Modal content -->
            <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                <!-- Modal header -->
                <div class="flex items-center justify-start pb-4 mb-4 border-b rounded-t sm:mb-5 dark:border-gray-600">
                    <x-button href="{{ route('contents.index') }}" variant="secondary" >
                        {{-- <x-heroicon-o-login class="w-6 h-6 mr-1 -ml-1" aria-hidden="true" /> --}}
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M12.707 17.293 8.414 13H18v-2H8.414l4.293-4.293-1.414-1.414L4.586 12l6.707 6.707z"></path></svg>
                    </x-button>
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Update Konten</h3>
                </div>
                <!-- Modal body -->
                <form method="POST" action="{{ route('contents.update',$content->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="grid gap-4 mb-4 sm:grid-cols-2">
                        <div>
                            <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                            <input type="text" name="title" id="title" value="{{old('title',$content->title)}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="" >
                        </div>
                        <div>
                            <label for="thumbnail" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tumbnail</label>
                            <input type="file" name="thumbnail" id="thumbnail" value="{{old('title',$content->thumbnail)}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="" >
                        </div>
                        <div>
                            <label for="date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date</label>
                            <input type="date" name="date" id="date" value="{{old('title',$content->date)}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="" >
                        </div>
                        <div><label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                            <select name="category" id="category" value="{{old('title',$content->category)}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                <option  selected="">{{old('content',$content->category)}}</option>
                                <option value="Berita">Berita</option>
                                <option value="Kegiatan">Kegiatan</option>
                                <option value="Lomba">Lomba</option>
                                <option value="Magang">Magang</option>
                                <option value="Prestasi">Prestasi</option>
                                <option value="Konten">Konten</option></select></div>
                        <div class="sm:col-span-2"><label for="content" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Content</label>
                            <textarea name="content" id="content"  rows="4" class="summernote block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="">{{old('content',$content->content)}}</textarea></div>
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