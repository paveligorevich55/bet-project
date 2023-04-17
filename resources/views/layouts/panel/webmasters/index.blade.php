<x-app-layout>

    <section class="bg-white mt-6 dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Edit Webmaster Code</h2>
            @if($webmaster !== null)
            <form action="{{route('webmaster.update', [$webmaster->id])}}" method="POST">
                @method('PUT')
                @csrf
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">

                    <div class="sm:col-span-2">
                        <label for="code" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Code</label>
                        <textarea name="code" id="code" rows="8" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Your code here">{!! $webmaster->code !!}</textarea>
                    </div>

                </div>
                <button type="submit" class="inline-block mt-4 px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-purple-700 to-pink-500 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85 hover:shadow-soft-xs">Update</button>
            </form>
            @else
                <form action="{{route('webmaster.store')}}" method="POST">
                    @csrf
                    <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">

                        <div class="sm:col-span-2">
                            <label for="code" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Code</label>
                            <textarea name="code" id="code" rows="8" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Your code here"></textarea>
                        </div>

                    </div>
                    <button type="submit" class="inline-block mt-4 px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-purple-700 to-pink-500 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85 hover:shadow-soft-xs">Store</button>
                </form>
            @endif
        </div>
    </section>

</x-app-layout>
