<h1>teste de support</h1>

<a href="{{ route('support.create') }}">Create a new support</a>

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
                <td>
                    <a href="{{route('support.show',$support->id)}}">View Details</a>
                </td>
                <td>
                    <a href="{{route('support.edit',$support->id)}}">Edit</a>
                </td>
                <td>
                    <form action="{{route('support.destroy',$support->id)}}" method="POST">
                        @csrf
                        @method('delete')
                        <input type="submit" value="deletar">
                    </form>
                </td>
                <td> > </td>
            </tr>

        @endforeach
    </tbody>
</table>
