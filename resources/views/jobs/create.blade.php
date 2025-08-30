<x-layout>
    <x-slot:heading>
        Job Create
    </x-slot:heading>

    <form method="POST" action="/jobs">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-black/10 pb-12">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="title" class="block text-sm/6 font-medium text-black ml-2">Create a new Job</label>
                        <div class="mt-2">
                            <div class="flex items-center rounded-md bg-white/5 pl-3 outline-1 -outline-offset-1 outline-black/10 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-500">
{{--                                <div class="shrink-0 text-base text-black-400 select-none sm:text-sm/6">workcation.com/</div>--}}
                                <input id="title" type="text" name="title" placeholder="AI Engineer" class="block min-w-0 grow bg-transparent py-1.5 pr-3 pl-1 text-base text-black placeholder:text-gray-500 focus:outline-none sm:text-sm/6 border-2 border-b-gray-700" required />
                            </div>
                            @error('title')
                                <p class="p-3 text-red-500">{{$message}}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="col-span-full ">
                        <label for="salary" class="block text-sm/6 font-medium text-black ml-2">Salary</label>
                        <div class="flex items-center rounded-md bg-white/5  outline-1 -outline-offset-1 outline-black/10 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-500">
                            <input id="salary" type="text" name="salary" placeholder="Salary" class="block min-w-0 bg-transparent py-1.5 pr-3 pl-1 text-base text-black placeholder:text-gray-500 focus:outline-none sm:text-sm/6 border-2 border-b-gray-700 ml-3" required />
                        </div>
                        @error('salary')
                        <p class="p-3 text-red-500">{{$message}}</p>
                        @enderror
                    </div>


                </div>
            </div>
        </div>
{{--        @if($errors->any())--}}
{{--            <ul>--}}
{{--                @foreach($errors->all() as $error)--}}
{{--                    <li>--}}
{{--                        {{$error}}--}}
{{--                    </li>--}}
{{--                @endforeach--}}
{{--            </ul>--}}
{{--        @endif--}}

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="text-sm/6 font-semibold text-black-50">Cancel</button>
            <button type="submit" class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Save</button>
        </div>
    </form>

</x-layout>
