<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0 10%;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .header h1 {
            margin: 0;
        }
        .header p {
            margin: 5px 0;
        }
        .section {
            margin-bottom: 20px;
        }
        .section h2 {
            border-bottom: 2px solid #000;
            padding-bottom: 5px;
        }
        .experience, .education, .skills {
            margin-left: 20px;
        }
        .experience ul, .skills ul {
            list-style-type: disc;
            padding-left: 20px;
        }
        .skills-section {
            display: flex;
            justify-content: space-between;
        }
        .skills-section div {
            flex: 1;
            margin-right: 20px;
        }
        .skills-section div:last-child {
            margin-right: 0;
        }
    </style>
</head>
<body>
    @foreach($identitas as $item)
    @endforeach
    <div class="header">
        <h1>{{ $item['nama'] }}</h1>
        <p> {{ $item['provinsi'] }}| {{ $item['email'] }}</p>
        <p>{{ $item['isi'] }}</p>
    </div>
    <div class="section">
        <h2>Pengalaman</h2>
        <div class="experience">
            <h3>{{ $item['posisi'] }} &middot; {{ $item['perusahaan'] }}</h3>
            <p>{{ $item['tgl_mulai'] }} - {{ $item['tgl_akhir'] }}</p>
            <ul>
                <li>{{ $item['jobdesk'] }}</li>
            </ul>
        </div>
    </div>
    <div class="section">
        <h2>Pendidikan</h2>
        <div class="education">
            <h3>{{ $item['sekolah'] }}</h3>
            <p> {{ $item['jurusan'] }} &middot; {{ $item['tgl_mulai2'] }} - {{ $item['tgl_akhir2'] }}</p>
            <p><strong>IPK : {{ $item['ipk'] }}</strong></p>
            <p><strong>Pengalaman:</strong></p>
            <ul>
                <li>{{ $item['isi2'] }}</li>
            </ul>
        </div>
    </div>
    <div class="section skills-section">
        <div>
            <h2>Soft Skills</h2>
            <ul>
                <li>{{ $item['softskill'] }}</li>
            </ul>
        </div>
        <div>
            <h2>Hard Skills</h2>
            <ul>
                <li> {{ $item['hardskill'] }}</li>
            </ul>
        </div>
        <div>
            <h2>Bahasa</h2>
            <ul>
                <li>{{ $item['bahasa'] }}</li>
            </ul>
        </div>
    </div>
</body>
</html>
