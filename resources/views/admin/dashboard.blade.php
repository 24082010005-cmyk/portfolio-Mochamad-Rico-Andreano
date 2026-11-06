<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>
<body>

    <h1>Dashboard Admin Portfolio</h1>

    <p>Selamat datang, {{ auth()->user()->name }}!</p>

    <h3>Ringkasan Portfolio</h3>

    <ul>
        <li>Total Skills: {{ $totalSkills }}</li>
        <li>Total Projects: {{ $totalProjects }}</li>
        <li>Total Experiences: {{ $totalExperiences }}</li>
        <li>Total Educations: {{ $totalEducations }}</li>
        <li>Total Messages: {{ $totalMessages }}</li>
        <li>Pesan Belum Dibaca: {{ $unreadMessages }}</li>
    </ul>

    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">Logout</button>
    </form>

</body>
</html>