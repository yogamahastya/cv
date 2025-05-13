<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>CV - Wahyu Guntara Mahastya Yoga Utama</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
  <style>
    body { font-family: 'Inter', sans-serif; }
  </style>
</head>
<body class="bg-gray-100 text-gray-800">

  <div class="flex flex-col md:flex-row min-h-screen">

    <!-- Sidebar -->
    <aside class="bg-gradient-to-b from-blue-900 to-blue-700 text-white md:w-1/4 w-full p-6 flex flex-col items-center shadow-lg">
      <img src="photo.jpg" alt="Foto Profil" class="w-32 h-32 md:w-40 md:h-40 rounded-full border-4 border-white shadow-lg object-cover mb-4"/>
      <h1 class="text-2xl font-semibold text-center mb-2">Wahyu Guntara Mahastya Yoga Utama</h1>
      <p class="text-center text-sm mb-4">Network Operation Center (NOC) 4th<br>PT Bali Wira Nusantara</p>
      <ul class="text-sm space-y-3">
        <li class="flex items-center justify-center gap-2">
          <svg class="w-5 h-5 text-cyan-300" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M16 12a4 4 0 01-8 0 4 4 0 018 0z"/><path d="M12 14v8m0 0h8m-8 0H4"/></svg>
          <a href="mailto:mahastyayoga97@gmail.com" class="hover:text-cyan-200 transition">mahastyayoga97@gmail.com</a>
        </li>
        <li class="flex items-center justify-center gap-2">
          <svg class="w-5 h-5 text-cyan-300" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M3 5a2 2 0 012-2h3l2 4h6l2-4h3a2 2 0 012 2v14a2 2 0 01-2 2h-3l-2-4h-6l-2 4H5a2 2 0 01-2-2V5z"/></svg>
          <a href="https://wa.me/62895359046670" class="hover:text-cyan-200 transition">+62 895 3590 46670</a>
        </li>
        <li class="flex items-center justify-center gap-2">
          <svg class="w-5 h-5 text-cyan-300" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M16 8a6 6 0 00-12 0c0 5 6 12 6 12s6-7 6-12z"/><circle cx="12" cy="8" r="2"/></svg>
          <a href="https://id.linkedin.com/in/yogamahastya" class="hover:text-cyan-200 transition">linkedin.com/in/yogamahastya</a>
        </li>
      </ul>
    </aside>

    <!-- Main Content -->
    <main class="md:w-3/4 w-full p-8 bg-white shadow-inner overflow-y-auto">

      <!-- Profil Singkat -->
      <section class="mb-10">
        <h2 class="text-xl font-semibold text-blue-800 border-l-4 border-cyan-500 pl-3 mb-2">Profil Singkat</h2>
        <p class="leading-relaxed text-gray-700">
          Profesional dengan pengalaman di bidang Network Operation Center (NOC), pengembangan aplikasi web, dan troubleshooting jaringan. Terbiasa bekerja dalam tim maupun mandiri, serta mampu menyelesaikan masalah teknis secara efisien.
        </p>
      </section>

      <!-- Pengalaman Kerja -->
      <section class="mb-10">
        <h2 class="text-xl font-semibold text-blue-800 border-l-4 border-cyan-500 pl-3 mb-2">Pengalaman Kerja</h2>

        <div class="mb-6">
          <h3 class="text-lg font-bold">Network Operation Center (NOC) 4th</h3>
          <p class="text-sm text-gray-500">PT Bali Wira Nusantara | Juni 2021 – Jan 2025</p>
          <ul class="list-disc list-inside text-gray-700 mt-2">
            <li>Bertanggung jawab atas monitoring dan pemeliharaan infrastruktur jaringan.</li>
            <li>Melakukan koordinasi antar tim teknis untuk penyelesaian masalah jaringan secara efisien.</li>
            <li>Menangani instalasi, konfigurasi, dan upgrade perangkat jaringan (RouterOS, Mikrotik, Switch).</li>
            <li>Membuat laporan harian & bulanan terkait performa jaringan dan insiden.</li>
            <li>Berhasil menurunkan waktu respon gangguan hingga 30% dengan menerapkan sistem alerting dan eskalasi berbasis SOP.</li>
          </ul>
        </div>

        <div>
          <h3 class="text-lg font-bold">Freelance Fullstack Developer</h3>
          <p class="text-sm text-gray-500">Agustus 2023 – Sekarang</p>
          <ul class="list-disc list-inside text-gray-700 mt-2">
            <li>Mengembangkan berbagai sistem berbasis web untuk kebutuhan UMKM hingga internal perusahaan (sistem billing, inventory, POS).</li>
            <li>Berkolaborasi dengan klien untuk menganalisis kebutuhan dan memberikan solusi teknologi yang tepat sasaran.</li>
            <li>Merancang struktur database dan backend API yang aman, cepat, dan efisien menggunakan Laravel & MySQL.</li>
            <li>Mengimplementasikan UI/UX yang responsif dan profesional menggunakan Tailwind CSS & JavaScript.</li>
          </ul>
        </div>
      </section>

      <!-- Pendidikan -->
      <section class="mb-10">
        <h2 class="text-xl font-semibold text-blue-800 border-l-4 border-cyan-500 pl-3 mb-2">Pendidikan</h2>
        <p class="text-gray-700">SMA Bhinneka Karya 2 Boyolali – Lulus 2016</p>
      </section>

      <!-- Keterampilan -->
      <section class="mb-10">
        <h2 class="text-xl font-semibold text-blue-800 border-l-4 border-cyan-500 pl-3 mb-2">Keterampilan</h2>
        <ul class="grid grid-cols-1 sm:grid-cols-2 gap-2 text-gray-700 list-disc list-inside">
          <li>TCP/IP, DNS, DHCP, VPN</li>
          <li>RouterOS, Linux Server</li>
          <li>PHP, Laravel, Tailwind CSS</li>
          <li>MySQL, REST API, Git</li>
        </ul>
      </section>

      <!-- Sertifikasi -->
      <section>
        <h2 class="text-xl font-semibold text-blue-800 border-l-4 border-cyan-500 pl-3 mb-2">Sertifikasi</h2>
        <ul class="list-disc list-inside text-gray-700">
          <li>AWS Network - Monitoring and Troubleshooting (2024)</li>
        </ul>
      </section>
    </main>
  </div>

</body>
</html>
