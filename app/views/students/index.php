<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa</title>
    <link rel="stylesheet" href="/css/output.css">
</head>

<body class="min-h-screen flex flex-col">
    <!-- Start -->
    <header class="bg-red-500 text-white">
    <div class="flex items-center justify-between container mx-auto p-4">
        <a href="/students" class="font-bold text-xl"> Sistem Sekolah</a>
        <a href="/students/create" class="bg-white text-blue-500 px-4 py-2 rounded-lg hover:bg-blue-200">+ Tambah Siswa</a>
    </div>
    </header>
    <!-- End -->

<!-- Main Start -->
<main class="container mx-auto grow">
<div class="mt-8">
    <!-- Card Header Start -->
    <div class="p-4 shadow rounded-lg">
        <h1 class="text-2xl font-bold">Daftar Siswa</h1>
        <p>Berikut adalah daftar siswa yang terdaftar di sistem.</p>
    </div>
    <!-- Card Header End -->
</div>
</main>
<!-- Main End -->

    <!-- Start -->
<footer class="bg-gray-800 text-white">
    <div class="text-center p-4">
        &copy <?= date('Y')?> Sistem Sekolah - SMK Kristen Immanuel
    </div>
</footer>
    <!--  End -->
</body>

</html>