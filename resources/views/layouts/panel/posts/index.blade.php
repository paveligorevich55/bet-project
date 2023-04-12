<x-app-layout>


    <div class="flex-none w-full max-w-full px-3 mt-6">
        <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="p-4 pb-0 mb-0 bg-white rounded-t-2xl">
                <h6 class="mb-1">{{ __('Posts') }}</h6>
                <p class="leading-normal text-sm">All Posts in Blog Area</p>
            </div>
            <div class="flex-auto p-4">
                <div class="flex flex-wrap -mx-3">
                    @foreach($posts as $post)
                    <div class="w-full max-w-full px-3 mt-6 mb-6 md:w-6/12 md:flex-none xl:mb-0 xl:w-3/12">
                        <div class="relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border">
                            <div class="relative">
                                <a class="block shadow-xl rounded-2xl">
                                    <img src="{{asset('storage/'.$post->featured_image)}}" alt="{{$post->name}}" class="max-w-full shadow-soft-2xl rounded-2xl">
                                </a>
                            </div>
                            <div class="flex-auto px-1 pt-6">
                                <a href="javascript:;">
                                    <h5>{{$post->title}}</h5>
                                </a>
                                <p class="mb-6 leading-normal text-sm">{{\Illuminate\Support\Str::limit($post->content, 110, $end = ' ...')}}</p>
                                <div class="flex items-center justify-between">
                                    <button type="button" class="inline-block px-8 py-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-xs hover:scale-102 active:shadow-soft-xs tracking-tight-soft border-fuchsia-500 text-fuchsia-500 hover:border-fuchsia-500 hover:bg-transparent hover:text-fuchsia-500 hover:opacity-75 hover:shadow-none active:bg-fuchsia-500 active:text-white active:hover:bg-transparent active:hover:text-fuchsia-500">View Project</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="w-full max-w-full px-3 mt-6 mb-6 md:w-6/12 md:flex-none xl:mb-0 xl:w-3/12">
                        <div class="relative flex flex-col h-full min-w-0 break-words bg-transparent border border-solid shadow-none rounded-2xl border-slate-100 bg-clip-border">
                            <div class="flex flex-col justify-center flex-auto p-6 text-center">
                                <a href="{{route('post.create')}}">
                                    <i class="mb-4 fa fa-plus text-slate-400" aria-hidden="true"></i>
                                    <h5 class="text-slate-400">New post</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
