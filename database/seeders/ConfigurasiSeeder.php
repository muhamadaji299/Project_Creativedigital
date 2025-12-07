<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConfigurasiSeeder extends Seeder
{
    public function run(): void
    {
        // === SEEDER TABEL HOMES ===
        DB::table('homes')->updateOrInsert(
            ['id' => 1], // kondisi unik
            [
                'judul'        => 'Solusi Digital Kreatif untuk Bisnis Anda',
                'keterangan'   => 'Kami membantu bisnis Anda berkembang melalui pembuatan website, aplikasi, dan desain modern yang menarik.',
                'gambar'       => 'gambar-seeder/home.png',
                'judul1'       => 'Mengapa Memilih Creative Digital?',
                'judul2'       => 'Mitra Kami',
                'deskripsi_judul1' => 'Keunggulan yang membuat kami menjadi pilihan tepat untuk bisnis digital Anda.',
                'deskripsi_judul2' => 'Kami bangga berkolaborasi dengan berbagai perusahaan terkemuka untuk memberikan solusi digital terbaik',
                'created_at'   => now(),
                'updated_at'   => now(),
            ]
        );

        // === SEEDER TAMBAHAN TABEL LAIN (JIKA ADA) ===
        DB::table('abouts')->updateOrInsert(
            ['id' => 1],
            [
                'judul'      => 'Siapa Kami?',
                'keterangan'  => 'Creative Digital adalah perusahaan teknologi kreatif yang berfokus pada solusi digital modern seperti pembuatan website, aplikasi, dan desain profesional.    Sejak berdiri, kami berkomitmen untuk membantu bisnis tumbuh melalui teknologi yang inovatif, desain yang menarik, dan pengalaman pengguna yang optimal.',
                'gambar'     => 'admin-seeder/about.png',
                'poin1'      => 'Menjadi perusahaan digital kreatif terdepan di Indonesia yang menghadirkan solusi teknologi inovatif dan berdampak positif bagi perkembangan bisnis.',
                'poin2'      => 'Menyediakan layanan berkualitas tinggi di bidang web, desain, dan aplikasi.Mengutamakan pengalaman pengguna dalam setiap proyek.Membangun hubungan jangka panjang dengan klien melalui profesionalisme dan inovasi.',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );

          // === SEEDER TAMBAHAN TABEL LAIN (JIKA ADA) ===
        // DB::table('configurations')->updateOrInsert(
        //     ['id' => 1],
        //     [
        //         'icon_images'      => 'Siapa Kami?',
        //         'nama_website'  => 'Creative Digital adalah perusahaan teknologi kreatif yang berfokus pada solusi digital modern seperti pembuatan website, aplikasi, dan desain profesional.
        //                           Sejak berdiri, kami berkomitmen untuk membantu bisnis tumbuh melalui teknologi yang inovatif, desain yang menarik, dan pengalaman pengguna yang optimal.',
        //         'overview'     => 'about.jpg',
        //         'judul_about'      => 'Menjadi perusahaan digital kreatif terdepan di Indonesia yang menghadirkan solusi teknologi inovatif dan berdampak positif bagi perkembangan bisnis.',
        //         'poin2'      => 'Menyediakan layanan berkualitas tinggi di bidang web, desain, dan aplikasi.
        //                          Mengutamakan pengalaman pengguna dalam setiap proyek.
        //                          Membangun hubungan jangka panjang dengan klien melalui profesionalisme dan inovasi.',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ]
        // );

        

        $this->command->info('Seeder konfigurasi berhasil dijalankan!');
    }
}
