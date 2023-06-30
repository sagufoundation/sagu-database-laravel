<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Faq::factory()->count(4)->create();

        Faq::insert([
            [
                'pertanyaan'    => 'Apa ada nomor kontak atau email?',
                'jawaban'       => '<p>Informasi kontak dapat diperoleh di halaman <a href="./kontak">Kontak</a> pada website ini. Silahkan diakses dan dihubungi pada jam layanan kantor.</p>',
                'status'        => 'Publish',
            ]
        ]);

        Faq::insert([
            [
                'pertanyaan'    => 'Adakah layanan pengusulan permintaan data?',
                'jawaban'       => '<p>Bagi masyarakat Kota Jayapura yang ingin mengajukan permohonan data tertentu, kini bisa dilakukan dengan mengajukan permohonan lewat email atau nomor telepon yang tertera di halaman <a href="./kontak">Kontak</a> pada website ini.</p>',
                'status'        => 'Publish',
            ]
        ]);

        Faq::insert([
            [
                'pertanyaan'    => 'Apakah bisa mengajukan permohonan magang mahasiswa?',
                'jawaban'       => '<p>DLHK Kota Jayapura menerima mahasiswa yang ingin melakukan proses magang atau kerja praktek di kantor. Silahkan ajukan surat permohonan melalui nomor kontak atau email yang tertera di halaman <a href="./kontak">Kontak</a> pada website ini.</p>',
                'status'        => 'Publish',
            ]
        ]);

        Faq::insert([
            [
                'pertanyaan'    => 'Apakah ada layanan pengajuan keluhan masyarakat?',
                'jawaban'       => '<p>Saat ini DLHK Kota Jayapura sudah memiliki layanan website sehingga masyarakat bisa memanfaatkan informasi kontak yang tertera di halaman <a href="./kontak">Kontak</a> pada website ini untuk mengajukan keluhan.</p>',
                'status'        => 'Publish',
            ]
        ]);
    }
}
