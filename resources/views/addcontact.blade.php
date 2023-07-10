<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <form method="POST" action="{{ route('contract.store') }}">
            @csrf


            <div class="mb-3 mt-3">

                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" :value="{{ old('name') }}" required>
                <x-input-error :messages="$errors->get('name')" class="mt-2" />

            </div>

            <div class="mb-3 mt-3">

                <label for="mobile">Mobile:</label>
                <input type="text" class="form-control" id="mobile" placeholder="Enter mobile" name="mobile" :value="{{ old('mobile') }}" required>
                <x-input-error :messages="$errors->get('mobile')" class="mt-2" />

            </div>

            <div class="mb-3 mt-3">

                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" :value="{{ old('email') }}">
                <x-input-error :messages="$errors->get('email')" class="mt-2" />

            </div>


            <div class="mb-3 mt-3">

                <label for="group">Group:</label>
                <input type="text" class="form-control" id="mobile" placeholder="Enter group" name="group" :value="old('group')">
                <x-input-error :messages="$errors->get('group')" class="mt-2" />

            </div>
            <x-primary-button class="mt-4">{{ __('Contact Add') }}</x-primary-button>
        </form>
    </div>



</x-app-layout>
