<div class="mt-8 space-y-2">
    <!-- Card Header Start -->
    <div class="p-4 shadow rounded-lg bg-white">
        <h1 class="text-2xl font-bold">Detail Siswa</h1>
        <p>Menampilkan detail siswa yang terdaftar.</p>
    </div>
    <!-- Card Header End -->

    <!-- Card Body Start -->
<div class="bg-white shadow rounded-lg p-4">
    <form class="grid grid-cols-2 gap-4" action="">
        <div class="space-y-2">
            <label class="block font-bold" for="name">Nama</label>
            <input class="w-full px-4 py-2 border rounded-lg" type="text" id="name" placeholder="Masukkan nama" name="name" readonly>
        </div>
        <div class="space-y-2">
            <label class="block font-bold" for="nis">NIS</label>
            <input class="w-full px-4 py-2 border rounded-lg" type="text" id="nis" placeholder="Masukkan NIS" name="nis" readonly>
        </div>
        <div class="space-y-2">
            <label class="block font-bold" for="class">Kelas</label>
            <input class="w-full px-4 py-2 border rounded-lg" type="text" id="class" placeholder="Masukkan Kelas" name="class" readonly>
        </div>
        <div class="space-y-2">
            <label class="block font-bold" for="phone_number">No Telepon</label>
            <input class="w-full px-4 py-2 border rounded-lg" type="text" id="phone_number" placeholder="Masukkan No Telepon" name="phone_number" readonly>
        </div>
        <div class="flex justify-end col-span-2 gap-4">
            <a href="/students" class="py-2 px-4 bg-gray-100 rounded-lg">Kembali</a>
        </div>
    </form>
</div>