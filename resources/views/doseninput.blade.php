<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="{{route('dosenList')}}">Kembali</a><br><br>
    <form action="{{route('dosenSave')}}" method="POST">
        @csrf
        Nip <input type="number" name="nip" id="nip"><br><br>
        Nama <input type="text" name="nama" id="nama"><br><br>
        Telp <input type="number" name="telp" id="telp"><br><br>
        Email <input type="text" name="email" id="email"><br><br>
        <input type="submit" value="Simpan Data">
    </form>
</body>
</html>