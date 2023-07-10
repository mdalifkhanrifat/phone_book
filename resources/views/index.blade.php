<x-app-layout>


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
                        <td>
                            @if ($contact->user->is(auth()->user()))
                                <x-dropdown>
                                    <x-slot name="trigger">
                                        <button>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                            </svg>
                                        </button>
                                    </x-slot>
                                    <x-slot name="content">
                                        <x-dropdown-link :href="route('contract.edit', $contact)">
                                            {{ __('Edit') }}
                                        </x-dropdown-link>
                                    </x-slot>
                                </x-dropdown>
                            @endif
                            
                        </td>
                    </tr>
                @endforeach
            </tbody>
                {{ $contacts->links() }}

        </table>



    </div>

</x-app-layout>
