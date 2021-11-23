<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Dosen</title>
</head>
<body>
    <form action="/DosenModel/{{$dosen->id}}/update" method="POST">
        @csrf
        Nip <input type="number" name="nip" id="nip" value="{{$dosen->nip}}"><br><br>
        Nama <input type="text" name="nama" id="nama" value="{{$dosen->nama}}"><br><br>
        Telp <input type="number" name="telp" id="telp" value="{{$dosen->telp}}"><br><br>
        Email <input type="text" name="email" id="email" value="{{$dosen->email}}"><br><br>
        <input type="submit" value="Edit Data">
    </form>
</body>
</html>