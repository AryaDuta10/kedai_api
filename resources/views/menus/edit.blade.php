<h1>Edit menu</h1>

<form action="/menus/{{$menu->id}}" method="POST">
    @method('PUT')
    @csrf
Name :    <input type="text" name="name" value="{{$menu->name}}"><br>
Description :    <input type="text" name="description" value="{{$menu->description}}"><br>
Harga :     <input type="number" name="harga" value="{{$menu->harga}}"><br>
Image Url :     <input type="text" name="image_url" value="{{$menu->image_url}}"><br>

    <input type="submit" value="Save">
