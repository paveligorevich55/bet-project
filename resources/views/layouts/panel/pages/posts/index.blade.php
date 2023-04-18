<x-panel.app-layout>

    <div class="w-full p-6 mx-auto">
        <section class="py-4">
            <div class="flex flex-wrap -mx-3">
                <div class="w-full max-w-full px-3 mr-auto md:flex-0 shrink-0 md:w-8/12">
                    <h5 class="dark:text-white">Some of Our Awesome Posts</h5>
                    <p>This is the paragraph where you can write more details about your projects. Keep you user engaged by providing meaningful information.</p>
                </div>
            </div>
            <div class="flex flex-wrap mt-2 -mx-3 lg:mt-6">

                @foreach($posts as $post)
                <div class="w-full max-w-full px-3 mb-6 md:flex-0 shrink-0 md:w-6/12 lg:w-4/12">
                    <div class="relative flex flex-col min-w-0 break-words bg-white border-0 dark:bg-gray-950 dark:shadow-soft-dark-xl shadow-soft-xl rounded-2xl bg-clip-border">
                        <div class="flex-auto p-4">
                            <div class="flex">
                                <div class="w-19 h-19 text-base ease-soft-in-out bg-gradient-to-tl from-gray-900 to-slate-800 dark:bg-gradient-to-tl dark:from-slate-850 dark:to-gray-850 inline-flex items-center justify-center rounded-lg p-2 text-white transition-all duration-200">
                                    <img class="w-full" src="{{asset('storage/'.$post->featured_image)}}" alt="{{$post->title}}" />
                                </div>
                                <div class="my-auto ml-4">
                                    <h6 class="dark:text-white">{{$post->title}}</h6>
                                    <div>
                                        <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 text-white transition-all duration-200 border-2 border-white border-solid ease-soft-in-out text-xs rounded-circle hover:z-30" data-target="tooltip_trigger">
                                            <img class="w-full rounded-circle" alt="Image placeholder" src="{{'../storage/'.$post->user->userProfile->image}}" />
                                        </a>
                                        <div class="hidden px-2 py-1 text-white bg-black rounded-lg text-sm" id="tooltip" role="tooltip" data-popper-placement="bottom">
                                            {{$post->user->name . ' ' . $post->user->surname}}
                                            <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ml-auto">
                                    <div class="relative">
                                        <button dropdown-trigger class="inline-block py-3 pl-0 pr-2 mb-4 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in tracking-tight-soft bg-150 bg-x-25 text-slate-400 dark:text-white" aria-expanded="false">
                                            <i class="fa fa-ellipsis-v text-lg" aria-hidden="true"></i>
                                        </button>
                                        <p class="hidden transform-dropdown-show"></p>
                                        <div dropdown-menu class="dark:shadow-soft-dark-xl z-100 dark:bg-gray-950 text-sm lg:shadow-soft-3xl duration-250 before:duration-350 before:font-awesome before:ease-soft min-w-44 before:text-5.5 transform-dropdown pointer-events-none absolute right-0 left-auto top-0 m-0 -mr-4 mt-2 list-none rounded-lg border-0 border-solid border-transparent bg-white bg-clip-padding px-0 py-2 text-left text-slate-500 opacity-0 transition-all before:absolute before:top-0 before:right-7 before:left-auto before:z-40 before:text-white before:transition-all before:content-['\f0d8'] sm:-mr-6">
                                            <a class="py-1.2 lg:ease-soft clear-both block w-full whitespace-nowrap border-0 bg-transparent px-4 text-left font-normal text-slate-500 hover:bg-gray-200 hover:text-slate-700 dark:text-white dark:hover:bg-gray-200/80 dark:hover:text-slate-700 lg:transition-colors lg:duration-300" href="{{route('post.show', $post->id)}}">View</a>
                                            <a class="py-1.2 lg:ease-soft clear-both block w-full whitespace-nowrap border-0 bg-transparent px-4 text-left font-normal text-slate-500 hover:bg-gray-200 hover:text-slate-700 dark:text-white dark:hover:bg-gray-200/80 dark:hover:text-slate-700 lg:transition-colors lg:duration-300" href="{{route('post.edit', $post->id)}}">Edit</a>
                                            <form action="{{route('post.destroy', $post->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <a class="py-1.2 lg:ease-soft clear-both block w-full whitespace-nowrap border-0 bg-gradient-to-tl from-red-600 to-rose-400 px-4 text-left font-normal text-white hover:bg-gray-200 hover:text-white dark:text-white dark:hover:bg-gray-200/80 dark:hover:text-slate-700 lg:transition-colors lg:duration-300" href="javascript:void(0);" onclick="event.preventDefault();this.closest('form').submit()">Delete</a>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="mt-4 leading-normal text-sm">If everything I did failed - which it doesn't, I think that it actually succeeds.</p>
                            <hr class="h-px mx-0 my-4 bg-transparent border-0 opacity-25 bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent" />
                            <div class="flex flex-wrap -mx-3">
                                <div class="w-6/12 max-w-full px-3 flex-0">
                                    <h6 class="mb-0 leading-normal text-sm">{{$post->category->name}}</h6>
                                    <p class="mb-0 font-semibold leading-normal text-sm text-slate-400">Category</p>
                                </div>
                                <div class="w-6/12 max-w-full px-3 text-right flex-0">
                                    <h6 class="mb-0 leading-normal text-sm">{{$post->updated_at, 'Not Updated'}}</h6>
                                    <p class="mb-0 font-semibold leading-normal text-sm text-slate-400">Updated At</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="w-full max-w-full px-3 mb-6 md:flex-0 shrink-0 md:w-6/12 lg:w-4/12">
                    <div class="relative flex flex-col h-full min-w-0 break-words bg-white border-0 dark:bg-gray-950 dark:shadow-soft-dark-xl shadow-soft-xl rounded-2xl bg-clip-border">
                        <div class="flex flex-col justify-center flex-auto p-6 text-center">
                            <a href="{{route('post.create')}}">
                                <i class="mb-4 fa fa-plus text-slate-400"></i>
                                <h5 class="text-slate-400">New project</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>



</x-panel.app-layout>
