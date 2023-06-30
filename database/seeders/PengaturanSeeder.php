<?php

namespace Database\Seeders;

use App\Models\Pengaturan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PengaturanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pengaturan::create([
            
            /*
            | GLOBAL SETTINGS
            |
            */
            // Site Information
            'id'                => 1,
            'judul_situs'       => 'Database SAGU Foundation',
            'deskripsi_situs'   => '',
            'copyright'         => "2023, SAGU Foundation - All Rights Reserved | <a href='https://sagufoundation.org/' target='_blank'>www.sagufoundation.org</a>",
            
            // Contact
            'alamat_web'      => "https://database@sagufoundation.org/",
            'alamat_email'      => "info@sagufoundation.org",
            'nomor_telepon'     => "082197964985",
            'alamat_kantor'     => "Jl. Pasar Baru Youtefa, Kompleks Pertokoan ATC Blok H5, Kotaraja Jayapura, Papua - Indonesia.",
            'alamat_google_map' => "",
            
            // logo
            'logo'              => 'logo-panel.png',
            'logo_loader'       => 'logo-loader.png',
            'logo_meta'         => 'https://database.sagufoundation.org/gambar/logo_meta.jpg',
            'favicon'           => 'favicon.png',
            
            // Social Media
            'instagram'         => "https://instagram.com/sagufoundation",
            'facebook'          => "https://facebook.com/",
            'twitter'           => "",
            'tiktok'            => "",
            'linkedin'          => "https://linkedin.com/",
            'youtube'           => "https://www.youtube.com/@sagufoundation",
                        
            /*
            | DASHBOARD SETTINGS
            |
            */
            
            'logo_dasbor_lg_dark'   => 'logo_lg_dark.png',
            'logo_dasbor_sm_dark'   => 'logo_sm_dark.png',
            'logo_dasbor_lg_light'  => 'logo_lg_light.png',
            'logo_dasbor_sm_light'  => 'logo_sm_light.png',

            // Dates
            'created_at'            => Carbon::now(),
            'updated_at'            => Carbon::now()
        ]);
    }


}
