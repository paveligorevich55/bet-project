<x-panel.app-layout>

    <section class="bg-white mt-6 dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Add a new Promo Code</h2>

                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    <div class="sm:col-span-2">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Promo Name</label>
                        <input disabled value="{{$promo->name}}" type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" required="">
                    </div>
                    <div class="sm:col-span-2">
                        <label for="link" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Code</label>
                        <input disabled value="{{$promo->code}}" type="text" name="code" id="link" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Product brand" required="">
                    </div>
                    <div class="sm:col-span-2">
                        <label for="bookmaker_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select Bookmaker</label>
                        <select disabled choices-select choice name="bookmaker_id" id="bookmaker_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected="{{$promo->id}}" disabled>{{$promo->name}}</option>
                            @foreach($bookmakers as $bookmaker)
                                <option value="{{$bookmaker->id}}">{{$bookmaker->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <a href="{{back()}}" class="inline-block mt-4 px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-purple-700 to-pink-500 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85 hover:shadow-soft-xs">Return Back</a>

        </div>
    </section>

    @push('scripts')
        <script src="{{asset('assets')}}/js/plugins/choices.min.js"></script>
    @endpush

</x-panel.app-layout>
