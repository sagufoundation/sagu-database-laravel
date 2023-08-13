<?php

namespace Database\Seeders;

use App\Models\Settings;
use Carbon\Carbon;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Settings::create([
            
            /*
            | GLOBAL SETTINGS
            |
            */
            // Site Information
            'id' => 1,
            'site_title' => 'Database SAGU Foundation',
            'copyright' => "2023, SAGU Foundation - All Rights Reserved | <a href='https://sagufoundation.org/' target='_blank'>www.sagufoundation.org</a>",
            
            // Metas
            'meta_keywords' => '',
            'meta_description' => '',

            // Contact
            'site_address' => "https://database@sagufoundation.org/",
            'email_address' => "info@sagufoundation.org",
            'telephone' => "082197964985",
            'office_address' => "Jl. Pasar Baru Youtefa, Kompleks Pertokoan ATC Blok H5, Kotaraja Jayapura, Papua - Indonesia.",
            'google_map_embed' => "",
            
            // logo
            'logo' => 'logo-panel.png',
            'logo_loader' => 'logo-loader.png',
            'logo_meta' => 'https://database.sagufoundation.org/gambar/logo_meta.jpg',
            'favicon' => 'favicon.png',
            
            // Social Media
            'instagram' => "https://instagram.com/sagufoundation",
            'facebook' => "https://facebook.com/",
            'twitter' => "",
            'tiktok' => "",
            'linkedin' => "https://linkedin.com/",
            'youtube' => "https://www.youtube.com/@sagufoundation",
                        
            /*
            | DASHBOARD SETTINGS
            |
            */
            
            'logo_dashboard_lg_dark' => 'logo_lg_dark.png',
            'logo_dashboard_sm_dark' => 'logo_sm_dark.png',
            'logo_dashboard_lg_light' => 'logo_lg_light.png',
            'logo_dashboard_sm_light' => 'logo_sm_light.png',

            // Dates
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            
        ]);
    }
}
