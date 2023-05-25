<x-layout>
    <x-section>
        <x-form action="/comments/{{ $comment->id }}" method="PATCH">
            <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Body</span>
                <textarea
                    class="block w-full mt-1 placeholder-gray-400 border-gray-300 rounded-md shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-300 dark:focus:ring-gray focus-within:text-primary-600 dark:focus-within:text-primary-400 dark:placeholder-gray-500 dark:focus:placeholder-gray-600 focus:placeholder-gray-300"
                    rows="3" name="body">{{ $comment->body }}</textarea>
            </label>
            @error('body')
                <x-flash type="error" class="mt-4">{{ $message }}</x-flash>
            @enderror
            <div class="mt-6 ">
                <button
                    class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 border border-transparent rounded-lg bg-green-600 active:bg-green-600 hover:bg-green-700 focus:outline-none focus:ring"
                    type="submit">
                    Update
                </button>

            </div>


        </x-form>
    </x-section>


</x-layout>
