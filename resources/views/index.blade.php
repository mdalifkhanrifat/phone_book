<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <form method="POST" action="{{ route('contract.store') }}">
            @csrf


            <div class="mb-3 mt-3">

                <label for="name">name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
                <x-input-error :messages="$errors->get('name')" class="mt-2" />

            </div>

            <div class="mb-3 mt-3">

                <label for="mobile">Mobile:</label>
                <input type="text" class="form-control" id="mobile" placeholder="Enter mobile" name="mobile">
                <x-input-error :messages="$errors->get('mobile')" class="mt-2" />

            </div>

            <div class="mb-3 mt-3">

                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                <x-input-error :messages="$errors->get('email')" class="mt-2" />

            </div>

            <div class="mb-3 mt-3">

                <label for="mobile">Mobile:</label>
                <input type="text" class="form-control" id="mobile" placeholder="Enter mobile" name="mobile">
                <x-input-error :messages="$errors->get('mobile')" class="mt-2" />

            </div>

            <div class="mb-3 mt-3">

                <label for="city">City:</label>
                <input type="text" class="form-control" id="mobile" placeholder="Enter mobile" name="city">
                <x-input-error :messages="$errors->get('city')" class="mt-2" />

            </div>
            <div class="mb-3 mt-3">

                <label for="country">Country:</label>
                <input type="text" class="form-control" id="mobile" placeholder="Enter mobile" name="country">
                <x-input-error :messages="$errors->get('city')" class="mt-2" />

            </div>

            <x-primary-button class="mt-4">{{ __('Contact') }}</x-primary-button>
        </form>


    </div>

</x-app-layout>
