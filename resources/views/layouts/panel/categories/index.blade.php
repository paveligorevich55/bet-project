<x-app-layout>

        <div class="relative flex flex-col w-full h-sidenav max-h-full min-w-0 mb-0 mt-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="p-6 pb-0 mb-0 bg-white rounded-t-2xl">
                <h6>Categories table</h6>
                <a href="{{route('category.create')}}" type="button" class="inline-block mt-4 px-4 py-2 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-sky-400 to-stone-800 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85 hover:shadow-soft-xs">Create New Link</a>
            </div>
            <div class="flex-auto px-0 pt-0 pb-2">
                <div class="p-0 overflow-x-auto">
                    <table class="items-center px-2 w-full mb-0 align-top border-gray-200 text-slate-500">
                        <thead class="align-bottom">
                        <tr>
                            <th class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Name</th>
                            <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Slug</th>
                            <th class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-gray-200 border-solid shadow-none tracking-none whitespace-nowrap text-slate-400 opacity-70"></th>
                            <th class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-gray-200 border-solid shadow-none tracking-none whitespace-nowrap text-slate-400 opacity-70"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                        <tr>
                            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                <div class="flex px-2 py-1">
                                    <div class="flex flex-col justify-center">
                                        <h6 class="mb-0 leading-normal text-sm">{{$category->name}}</h6>
                                        <p class="mb-0 leading-tight text-xs text-slate-400">john@creative-tim.com</p>
                                    </div>
                                </div>
                            </td>
                            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                <div class="flex px-4 py-1">
                                    <div class="flex flex-col justify-center">
                                        <span class="mb-0 font-semibold leading-normal text-xs">Slug</span>
                                        <span class="mb-0 leading-light text-xs text-slate-400">{{'/' . $category->slug . '/'}}</span>
                                    </div>
                                </div>
                            </td>
                            <td class="p-2 align-middle bg-transparent text-center border-b whitespace-nowrap shadow-transparent">
                                <a href="{{route('category.edit', [$category->id])}}" class="font-semibold leading-tight text-xs text-slate-400"> Edit </a>
                            </td>
                            <td class="p-2 align-middle bg-transparent text-center border-b whitespace-nowrap shadow-transparent">
                                <form action="{{route('category.destroy', [$category->id])}}" method="post" id="deleteForm">
                                    @method('DELETE')
                                    @csrf
                                    <a href="javascript:void(0);" onclick="document.getElementById('deleteForm').submit();" class="font-semibold leading-tight text-xs text-slate-400"> Delete </a>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

</x-app-layout>
