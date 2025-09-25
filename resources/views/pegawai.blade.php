<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pegawai</title>
    <style>
        body { font-family: sans-serif; line-height: 1.6; padding: 20px; }
        .container { max-width: 600px; margin: 0 auto; background:
        #aaedd4; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        h1 { color: #333; }
        ul { list-style-type: none; padding: 0; }
        li { margin-bottom: 10px; }
        strong { color: #555; }
        .message { font-weight: bold; padding: 10px; border-radius: 5px; background: #e0f7fa; margin-top: 20px; text-align: center; }
        .warning { background-color: #ffebee; color: #d32f2f; }
        .success { background-color: #e8f5e9; color: #388e3c; }
    </style>
</head>
<body>

    <div class="container">
        <h1>Profil Pegawai</h1>
        <ul>
            <li><strong>Nama:</strong> {{ $name }}</li>
            <li><strong>Umur:</strong> {{ $my_age }} tahun</li>
            <li><strong>Hobi:</strong>
                <ul>
                    @foreach ($hobbies as $hobby)
                        <li>- {{ $hobby }}</li>
                    @endforeach
                </ul>
            </li>
            <li><strong>Tanggal Harus Wisuda:</strong> {{ $tgl_harus_wisuda }}</li>
            <li><strong>Sisa Hari Belajar:</strong> {{ $time_to_study_left }} hari</li>
            <li><strong>Semester Saat Ini:</strong> {{ $current_semester }}</li>
            <li><strong>Cita-cita Masa Depan:</strong> {{ $future_goal }}</li>
        </ul>

        <div class="message {{ $current_semester > 3 ? 'warning' : 'success' }}">
            {{ $message }}
        </div>
    </div>

</body>
</html>
