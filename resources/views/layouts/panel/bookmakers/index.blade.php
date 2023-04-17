<x-app-layout>

        <div class="relative flex flex-col w-full h-sidenav max-h-full min-w-0 mb-0 mt-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="p-6 pb-0 mb-0 bg-white rounded-t-2xl">
                <h6>Bookmakers table</h6>
                <a href="{{route('bookmaker.create')}}" type="button" class="inline-block mt-4 px-4 py-2 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-sky-400 to-stone-800 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85 hover:shadow-soft-xs">Create New Bookmaker</a>
            </div>
            <div class="flex-auto px-0 pt-0 pb-2">
                <div class="p-0 overflow-x-auto">
                    <table class="items-center px-2 w-full mb-0 align-top border-gray-200 text-slate-500">
                        <thead class="align-bottom">
                        <tr>
                            <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Bookmaker</th>
                            <th class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Status</th>
                            <th class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Link</th>
                            <th class="px-6 py-3 font-bold uppercase text-xxs align-middle bg-transparent border-b border-gray-200 border-solid shadow-none tracking-none whitespace-nowrap text-slate-400 opacity-70">Edit</th>
                            <th class="px-6 py-3 font-bold uppercase text-xxs align-middle bg-transparent border-b border-gray-200 border-solid shadow-none tracking-none whitespace-nowrap text-slate-400 opacity-70">Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($bookmakers as $bookmaker)
                            @foreach($links as $link)
                        <tr>

                            <td class="border-grey-200 p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                <div class="flex flex-wrap px-2 py-1">
                                    <a class="flex flex-wrap" href="{{route('bookmaker.show', [$bookmaker->id])}}">
                                        <div>
                                            <img src="{{asset('storage/'.$bookmaker->image)}}" class="inline-flex items-center justify-center mr-4 text-white transition-all duration-200 ease-in-out text-sm h-9 w-9 rounded-xl" alt="user1"></div>
                                        <div class="flex flex-col justify-center">
                                            <h6 class="mb-0 leading-normal text-sm text-gray-700 tracking-none normal-case font-bold">{{$bookmaker->name}}</h6>
                                        </div>
                                    </a>
                                </div>
                            </td>
                            <td class="border-grey-200 p-2 leading-normal text-left align-middle bg-transparent border-b text-sm whitespace-nowrap shadow-transparent">
                                <span class="py-2 px-3 text-xxs rounded-4 inline-block whitespace-nowrap text-left bg-gradient-to-tl from-green-500 to-green-900 align-baseline font-bold uppercase leading-none text-white">Online</span>
                            </td>
                            <td class="border-grey-200 p-2 text-left align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                <span class="font-semibold leading-tight text-sm text-grey-400">
                                    @if($link->bookmaker_id == $bookmaker->id)
                                        {{$link->link}}
                                    @endif
                                </span>
                            </td>
                            <td class="p-2 align-middle bg-transparent text-center border-b whitespace-nowrap shadow-transparent">
                                <a href="{{ route('bookmaker.edit', [$bookmaker->id]) }}" class="font-semibold leading-tight text-xs text-slate-400"> Edit </a>
                            </td>
                            <td class="p-2 align-middle bg-transparent text-center border-b whitespace-nowrap shadow-transparent">
                                <form action="{{ route('bookmaker.destroy', [$bookmaker->id]) }}" method="POST" id="deleteForm">
                                    @method('DELETE')
                                    @csrf
                                    <a href="javascript:void(0);" onclick="document.getElementById('deleteForm').submit()" class="font-semibold leading-tight text-xs text-slate-400"> Delete </a>
                                </form>
                            </td>
                        </tr>
                            @endforeach
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

</x-app-layout>
