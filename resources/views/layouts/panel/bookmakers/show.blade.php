<x-app-layout>

    <section class="bg-white mt-6 dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Add a new Bookmaker</h2>
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    <div class="sm:col-span-2">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bookmaker Name</label>
                        <input disabled type="text" value="{{$bookmaker->name}}" name="name" id="name" class="disabled:opacity-75 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" required="">
                    </div>
                    <div class="w-full">
                        <label for="bonus" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bonus</label>
                        <input disabled type="text" value="{{$bookmaker->bonus}}" name="bonus" id="brand" class="disabled:opacity-75 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Product brand" required="">
                    </div>
                    <div class="w-full">
                        <label for="rating" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Rating</label>
                        <input disabled type="text" value="{{$bookmaker->rating}}" name="rating" id="brand" class="disabled:opacity-75 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Product brand" required="">
                    </div>
                    @if($bookmaker->image != null)
                        <h6>Bookmaker {{$bookmaker->name}} Image</h6>
                        <div class="flex items-center sm:col-span-2 justify-center w-full">
                            <img src="{{asset('storage/'.$bookmaker->image)}}" alt="{{$bookmaker->name}}">
                        </div>
                    @endif
                </div>
                <a href="{{route('bookmaker.edit', [$bookmaker->id])}}" class="inline-block mt-4 px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-purple-700 to-pink-500 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85 hover:shadow-soft-xs">Edit</a>
        </div>
    </section>

</x-app-layout>
