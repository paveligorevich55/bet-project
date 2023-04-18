<x-panel.app-layout>
    <div class="flex mt-6 flex-wrap -mx-3 my-2">
        <div class="w-full max-w-full px-3 flex-0">
            <div class="relative flex flex-col min-w-0 break-words bg-white border-0 dark:bg-gray-950 dark:shadow-soft-dark-xl shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-6">
                    <h5 class="mb-6 dark:text-white">Product Details</h5>
                    <div class="flex flex-wrap -mx-3">
                        <div class="w-full max-w-full px-3 text-center shrink-0 lg:flex-0 lg:w-6/12 xl:w-5/12">
                            <img class="w-full mx-auto rounded-xl shadow-soft-3xl" src="{{asset('storage')}}/{{$post->featured_image}}" alt="{{$post->title}}">
                        </div>
                        <div class="w-full max-w-full px-3 mx-auto shrink-0 lg:flex-0 lg:w-5/12">
                            <h3 class="mt-6 dark:text-white lg:mt-0">{{$post->title}}</h3>
                            <div class="float-left border-0">
                                <i class="fas fa-star" aria-hidden="true"></i>
                                <i class="fas fa-star" aria-hidden="true"></i>
                                <i class="fas fa-star" aria-hidden="true"></i>
                                <i class="fas fa-star" aria-hidden="true"></i>
                                <i class="fas fa-star-half-alt" aria-hidden="true"></i>
                            </div>
                            <br>
                            <h6 class="mt-4 mb-0 dark:text-white">Category</h6>
                            <h5 class="dark:text-white">{{$post->category->name}}</h5>
                            <span class="py-2.2 px-3.6 text-xs rounded-1.8 inline-block whitespace-nowrap bg-lime-200 text-center align-baseline font-bold uppercase leading-none text-lime-600">Published</span>
                            <br>
                            <label class="inline-block mt-6 mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Description</label>
                            <div class="ml-1 mt-0 mb-4 list-disc">
                                <p>{{$post->description}}</p>
                            </div>

                            <div class="flex flex-wrap mt-6 -mx-3">
                                <div class="w-full max-w-full px-3 shrink-0 lg:flex-0 lg:w-5/12">
                                    <a href="{{route('post.edit', [$post->id])}}" class="inline-block w-full px-6 py-3 mb-0 font-bold text-center text-white uppercase align-middle transition-all border-0 rounded-lg cursor-pointer lg:mt-auto hover:scale-102 active:opacity-85 hover:shadow-soft-xs bg-gradient-to-tl from-purple-700 to-pink-500 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25">Edit Post</a>
                                </div>
                            </div>
                        </div>
                        <div class="w-full max-w-full px-3 mt-6 md:mt-16  text-center align-middle">
                            <div class="w-full max-w-full px-3 mx-auto text-center lg:flex-0 lg:w-10/12">
                                {!! $post->content !!}
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-panel.app-layout>
