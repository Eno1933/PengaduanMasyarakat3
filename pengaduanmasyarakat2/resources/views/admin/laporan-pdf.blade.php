<!DOCTYPE html>
<html>
<head>
    <title>Laporan Pengaduan</title>
    <style>
        /* Anda bisa menambahkan style sederhana untuk PDF di sini */
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #000;
            padding: 8px;
        }
        th {
            background: #ddd;
        }
        img {
            max-width: 100px;
        }
    </style>
</head>
<body>
    <h1>Laporan Pengaduan</h1>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Pelapor</th>
                <th>Isi Laporan</th>
                <th>Lokasi</th>
                <th>Kategori</th>
                <th>Foto</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pengaduan as $index => $data)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $data->tgl_pengaduan }}</td>
                    <td>{{ $data->masyarakat->nama }}</td>
                    <td>{{ $data->isi_laporan }}</td>
                    <td>{{ $data->lokasi }}</td>
                    <td>{{ $data->kategori }}</td>
                    <td>
                        @if ($data->foto)
                            {{-- Untuk menampilkan gambar di PDF, gunakan path fisik (public_path) --}}
                            <img src="{{ public_path('storage/' . $data->foto) }}" alt="Foto">
                        @else
                            Tidak ada foto
                        @endif
                    </td>
                    <td>{{ $data->status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
