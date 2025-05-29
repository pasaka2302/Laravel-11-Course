<x-layout>
    <x-slot:heading>
        Create Job
        </x-slot: heading>
        <form method = "POST" action = "/jobs">
            @csrf
            <div class="space-y-12">
                <div class="border-b border-gray-900/10 pb-12">
                    <h2 class="text-base/7 font-semibold text-gray-900">Create a new job</h2>
                    <p class="mt-1 text-sm/6 text-gray-600">We just need some details about the job</p>

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <x-form-field>
                            <x-label for="name">Job Name</x-label>
                            <div class="mt-2">
                                <x-form-input name="title" placeholder="CEO" required></x-form-input>
                                <x-form-error name="title"></x-form-error>
                            </div>
                        </x-form-field>

                        <x-form-field>
                            <x-label for="salary">Salary</x-label>
                            <div class = "mt-2">
                                <x-form-input name="salary" placeholder="$ 50,000" required></x-form-input>
                                <x-form-error name="salary"></x-form-error>
                            </div>
                        </x-form-field>

                    </div>

                    {{-- <div class="mt-5">
                        @if ($errors->any())
                            @foreach ($errors->all() as $error)
                                <ul>
                                    <li class="text-red-500 italic">{{ $error }}</li>
                                </ul>
                            @endforeach
                        @endif
                    </div> --}}
                </div>
            </div>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
                <button type="submit"
                    class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
            </div>
        </form>

</x-layout>
