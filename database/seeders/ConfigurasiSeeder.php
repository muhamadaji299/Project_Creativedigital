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
                'gambar'     => 'gambar-seeder/about.png',
                'poin1'      => 'Menjadi perusahaan digital kreatif terdepan di Indonesia yang menghadirkan solusi teknologi inovatif dan berdampak positif bagi perkembangan bisnis.',
                'poin2'      => 'Menyediakan layanan berkualitas tinggi di bidang web, desain, dan aplikasi.Mengutamakan pengalaman pengguna dalam setiap proyek.Membangun hubungan jangka panjang dengan klien melalui profesionalisme dan inovasi.',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );

          // === SEEDER TAMBAHAN TABEL LAIN (JIKA ADA) ===
        DB::table('configurations')->updateOrInsert(
            ['id' => 1],
            [
                'icon_images'      => 'gambar-seeder/logo.png',
                'nama_website'  => 'Creative Digital',
                'overview'     => 'Kami membantu bisnis tumbuh melalui desain kreatif, pengembangan berskala, dan pemasaran digital yang efektif.',
             'judul_about'      => 'Jl. Tebet Timur Dalam Raya No.17, RT.8/RW.8, Tebet Tim., jakarta, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12820',
                'keterangan_about'      => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.177800511997!2d106.85217047326324!3d-6.240282561102696!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f34c95753fa9%3A0x9a28fd4d593f0803!2screative%20digital!5e0!3m2!1sid!2sid!4v1765167162901!5m2!1sid!2sid"',
                'judul_services'      => '6285716451180',
                'keterangan_services'      => '085716451180',
                'judul_portofolio'      => 'crativedigital@gmail.id',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );

        

        $this->command->info('Seeder konfigurasi berhasil dijalankan!');
    }
}
