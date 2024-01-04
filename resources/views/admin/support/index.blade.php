<h1>teste de support</h1>

<table>
    <thead>
        <th>Id</th>
        <th>Subject</th>
        <th>Body</th>
        <th>Status</th>
        <th></th>
    </thead>
    <tbody>
        @foreach($allSupports as $support)
            <tr>
                <td>{{ $support->id }}</td>
                <td>{{ $support->subject }}</td>
                <td>{{ $support->body }}</td>
                <td>{{ $support->status }}</td>
                <td> > </td>
            </tr>

        @endforeach
    </tbody>
</table>
