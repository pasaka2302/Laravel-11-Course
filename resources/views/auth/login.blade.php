<x-layout>
    <x-slot:heading>
        Login
    </x-slot:heading>
        <form method = "POST" action = "/login">
            @csrf
            <div class="space-y-12">
                <div class="border-b border-gray-900/10 pb-12">
                    <div class="mt-2 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <x-form-field>
                            <x-label for="email">Email</x-label>
                            <div class = "mt-2">
                                <x-form-input name="email" placeholder="pasaka@pmarts.com" :value="old('email')" required></x-form-input>
                                <x-form-error name="email"></x-form-error>
                            </div>
                        </x-form-field>

                        <x-form-field>
                            <x-label for="password">Password</x-label>
                            <div class = "mt-2">
                                <x-form-input name="password" type="password" placeholder="********"
                                    required></x-form-input>
                                <x-form-error name="password"></x-form-error>
                            </div>
                        </x-form-field>

                    </div>

                </div>
            </div>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <a href="/" type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
                <button type="submit"
                    class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Login</button>
            </div>
        </form>

</x-layout>
