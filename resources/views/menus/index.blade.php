<h3>List Menu</h3>

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Harga</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($menus as $menu)
        <tr>
            <td>{{$menu->name}}</td>
            <td>{{$menu->description}}</td>
            <td>{{$menu->harga}}</td>
            <td>
                <a href="/menus/{{$menu->id}}/edit">Edit</a>
                <form action="/menus/{{$menu->id}}" method="POST" >
                    @method('DELETE')
                    @csrf
                    <input type="submit" value="Delete">
                </form>
            </td>
        </tr>

        @endforeach
    </tbody>
    <a href="/menus/create">Create</a>
</table>
