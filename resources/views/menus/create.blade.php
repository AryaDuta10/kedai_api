<h1>create menu</h1>

<form action="/menus" method="POST">
        @csrf
    Name :    <input type="text" name="name"><br>
Description :    <input type="text" name="description"><br>
Harga :     <input type="number" name="harga"><br>
Image Url :     <input type="text" name="image_url"><br>

    <input type="submit" value="Save">
