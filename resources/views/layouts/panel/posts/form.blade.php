<x-app-layout>


        @if(Route::is('post.create'))
            <div class="flex flex-wrap -mx-3">
            <div class="w-full max-w-full px-3 mx-auto flex-0 lg:w-9/12">
                <div class="relative flex flex-col flex-auto min-w-0 p-4 mt-6 break-words bg-white border-0 dark:bg-gray-950 dark:shadow-soft-dark-xl shadow-soft-xl rounded-2xl bg-clip-border">
                    <h6 class="mb-0 dark:text-white">New Post</h6>
                    <p class="mb-0 leading-normal text-sm">Create new post</p>
                    <hr class="h-px mx-0 my-2 bg-transparent border-0 opacity-25 bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent" />
                    <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <x-panel.text-input class="hidden"
                                            hidden type="text"
                                            name="user_id"
                                            :value="Auth::user()->id"
                        />
                        <x-panel.input-label class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80"
                                             for="projectName"
                                             :value="__('Post Title')"
                        />
                        <x-panel.text-input type="text"
                                            name="title"
                                            placeholder="{{__('Title')}}"
                                            class="focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none"
                        />


                        <x-panel.input-label class="inline-block mt-6 mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80"
                                             for="content"
                                             :value="__('Post Content')"
                        />
                        <div>
                            <textarea id="content" class="content" name="content"></textarea>
                        </div>

                        <x-panel.input-label class="inline-block mt-6 mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80"
                                             for="Starting Files"
                                             :value="__('Starting Files')"
                        />
                        <div class="dropzone focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-border px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none" id="dropzone">
                            <div class="fallback">
                                <input name="featured_image" type="file" multiple />
                            </div>
                        </div>
                        <div class="flex justify-end mt-6">
                            <button type="button" class="inline-block px-6 py-3 m-0 font-bold text-center uppercase align-middle transition-all bg-gray-200 border-0 rounded-lg cursor-pointer hover:scale-102 active:opacity-85 hover:shadow-soft-xs leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 text-slate-800">Cancel</button>
                            <button type="button" class="inline-block px-6 py-3 m-0 ml-2 text-xs font-bold text-center text-white uppercase align-middle transition-all border-0 rounded-lg cursor-pointer ease-soft-in leading-pro tracking-tight-soft bg-gradient-to-tl from-purple-700 to-pink-500 shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85">Create Project</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @elseif(Route::is('post.edit'))
            <div class="flex flex-wrap -mx-3">
                <div class="w-full max-w-full px-3 mx-auto flex-0 lg:w-9/12">
                    <div class="relative flex flex-col flex-auto min-w-0 p-4 mt-6 break-words bg-white border-0 dark:bg-gray-950 dark:shadow-soft-dark-xl shadow-soft-xl rounded-2xl bg-clip-border">
                        <h6 class="mb-0 dark:text-white">Edit Post "{{$post->title}}"</h6>
                        <p class="mb-0 leading-normal text-sm">Edit post</p>
                        <hr class="h-px mx-0 my-2 bg-transparent border-0 opacity-25 bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent" />
                        <form action="{{route('post.update', [$post->id])}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <x-panel.input-label class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80"
                                                 for="projectName"
                                                 :value="__('Post Title')"
                            />
                            <x-panel.text-input type="text"
                                                name="title"
                                                :value="$post->title"
                                                placeholder="{{__('Title')}}"
                                                class="focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none"
                            />


                            <x-panel.input-label class="inline-block mt-6 mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80"
                                                 for="content"
                                                 :value="__('Post Content')"
                            />
                            <div>
                                <textarea id="content" class="content" name="content">{{$post->content}}</textarea>
                            </div>

                            <x-panel.input-label class="inline-block mt-6 mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80"
                                                 for="Starting Files"
                                                 :value="__('Starting Files')"
                            />
                            <div class="mb-4 px-2">
                                <img src="{{'../storage/'.$post->featured_image}}" alt="{{$post->title}}">
                            </div>
                            <div class="dropzone focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-border px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none" id="dropzone">
                                <div class="fallback">
                                    <input name="featured_image" type="file" multiple />
                                </div>
                            </div>
                            <div class="flex justify-end mt-6">
                                <button type="button" class="inline-block px-6 py-3 m-0 font-bold text-center uppercase align-middle transition-all bg-gray-200 border-0 rounded-lg cursor-pointer hover:scale-102 active:opacity-85 hover:shadow-soft-xs leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 text-slate-800">Cancel</button>
                                <button type="button" class="inline-block px-6 py-3 m-0 ml-2 text-xs font-bold text-center text-white uppercase align-middle transition-all border-0 rounded-lg cursor-pointer ease-soft-in leading-pro tracking-tight-soft bg-gradient-to-tl from-purple-700 to-pink-500 shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85">Create Project</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endif

    @push('scripts')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.4.1/tinymce.min.js"></script>
        <script>
            tinymce.init({
                selector:'textarea.content',
                height: 300,
                plugins: [
                    'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',
                    'anchor', 'searchreplace', 'visualblocks', 'code', 'fullscreen',
                    'insertdatetime', 'media', 'table', 'help', 'wordcount'
                ],
            });
        </script>
    @endpush

</x-app-layout>

