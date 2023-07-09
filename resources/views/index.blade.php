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

                <label for="group">Group:</label>
                <input type="text" class="form-control" id="mobile" placeholder="Enter group" name="group">
                <x-input-error :messages="$errors->get('group')" class="mt-2" />

            </div>


            <x-primary-button class="mt-4">{{ __('Contact') }}</x-primary-button>
        </form>




    </div>

    <div class="mt-6 bg-white shadow-sm rounded-lg divide-y">

            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Mobile</th>
                        <th>Email</th>
                        <th>created_at</th>
                        <th>updated_at</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($contacts as $contact)
                        <tr class="">
                            <td>{{ $contact->name }}</td>
                            <td>{{ $contact->mobile }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>{{ $contact->created_at->format('j M Y, g:i a') }}</td>
                            <td>{{ $contact->updated_at->format('j M Y, g:i a') }}</td>
                    @endforeach
                    </tr>
                </tbody>
            </table>
        </div>

</x-app-layout>
