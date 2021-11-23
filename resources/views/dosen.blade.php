<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Table Data Dosen</h1>
    <a href="{{ route ('dosenAdd') }}">Input Data Dosen</a>
<table border=1>
    <tr>
        <th>Id</th>
        <th>Nip</th>
        <th>Nama</th>
        <th>Telp</th>
        <th>Email</th>
        <th>Edit</th>
    </tr>
    @foreach($dosen as $item)
    <tr>
        <td>{{ $item->id }}</td>
        <td>{{ $item->nip }}</td>
        <td>{{ $item->nama }}</td>
        <td>{{ $item->telp }}</td>
        <td>{{ $item->email }}</td>
        <td>
            <a href="/DosenModel/{{$item->id}}/edit" onclick="return confirm('edit data?')">Edit</a>
            <a href="/DosenModel/{{$item->id}}/destroy" onclick="return confirm('Hapus Data?')">Hapus</a>
        </td>
    </tr>
    @endforeach
</table>
</body>
</html>