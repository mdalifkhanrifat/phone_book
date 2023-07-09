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
                    @endforeach
                    </tr>
                </tbody>
            </table>
        </div>

</x-app-layout>
