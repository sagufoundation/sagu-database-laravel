<?php

namespace Database\Seeders;

use App\Models\Berita\Berita;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Berita::create([
            'user_id'           => 1,
            'category_id'       => 6,

            'judul'             => 'Untuk mendukung kehidupan lingkungan di laut, diperlukan upaya kolaboratif dari berbagai pihak',
            'slug'              => 'untuk-mendukung-kehidupan-lingkungan-di-laut-diperlukan-upaya-kolaboratif-dari-berbagai-pihak',
            'gambar'            => '08.jpg',
            'konten'            => '<p>Untuk mendukung kehidupan lingkungan di laut, diperlukan upaya kolaboratif dari berbagai pihak. Berikut adalah enam langkah yang dapat diambil untuk mendukung kehidupan lingkungan di laut:</p>
            <ol>
                <li>Mencegah polusi: Salah satu langkah penting adalah mencegah polusi di perairan laut. Hindari pembuangan limbah industri dan domestik langsung ke laut. Buang sampah pada tempatnya dan pastikan limbah terkelola dengan baik, terutama bahan-bahan berbahaya seperti minyak, pestisida, dan bahan kimia beracun.</li>
                <li>Konservasi terumbu karang: Terumbu karang merupakan ekosistem yang sangat penting bagi kehidupan laut. Dukung upaya konservasi terumbu karang dengan tidak merusak atau mengambil organisme hidup dari terumbu karang. Hindari penggunaan bahan kimia yang berpotensi merusak terumbu karang, seperti tabir surya yang tidak ramah terumbu karang.</li>
                <li>Mengurangi konsumsi ikan yang tidak berkelanjutan: Memperhatikan pilihan makanan laut kita juga penting untuk mendukung kehidupan di laut. Hindari makan ikan yang dieksploitasi secara berlebihan atau yang ditangkap dengan cara yang merusak lingkungan, seperti metode penangkapan yang merusak dasar laut. Pilihlah ikan yang ditangkap secara berkelanjutan dan ramah lingkungan.</li>
                <li>Mengurangi penggunaan plastik: Plastik adalah masalah besar di laut. Kurangi penggunaan plastik sekali pakai dan gantilah dengan alternatif yang ramah lingkungan. Daur ulang plastik sebanyak mungkin dan pastikan limbah plastik dibuang dengan benar agar tidak sampai ke laut.</li>
                <li>Mendukung kawasan konservasi laut: Aktif dalam mendukung dan berpartisipasi dalam upaya kawasan konservasi laut. Dukung pembentukan taman laut dan wilayah perlindungan laut. Ikuti aturan dan peraturan yang berlaku di kawasan konservasi, seperti melarang penangkapan ikan di daerah yang ditetapkan.</li>
                <li>Mengedukasi diri dan orang lain: Penting untuk terus meningkatkan pemahaman tentang kehidupan di laut dan pentingnya menjaga ekosistemnya. Dapatkan informasi tentang spesies yang terancam punah atau terancam habitatnya dan bagaimana kita dapat membantu. Bagikan pengetahuan dan kesadaran Anda kepada orang lain untuk meningkatkan kepedulian dan tindakan kolektif.</li>
            </ol>
                <p>Melalui langkah-langkah tersebut, kita dapat berkontribusi dalam mendukung kehidupan lingkungan di laut. Kesadaran dan tindakan kita memiliki dampak yang signifikan terhadap kelestarian ekosistem laut yang berharga ini.</p>',

            'konten_singkat'    => 'Untuk mendukung kehidupan lingkungan di laut, diperlukan upaya kolaboratif dari berbagai pihak. Berikut adalah enam langkah yang dapat diambil untuk mendukung kehidupan lingkungan di laut...',

            'status'            => 'Draft',
        ]);

        Berita::create([
            'user_id'           => 1,
            'category_id'       => 7,

            'judul'             => 'Menanam pohon adalah salah satu cara yang efektif untuk mendukung lingkungan',
            'slug'              => 'menanam-pohon-adalah-salah-satu-cara-yang-efektif-untuk-mendukung-lingkungan',
            'gambar'            => '07.jpg',
            'konten'            => '<p>Pohon-pohon memberikan manfaat yang besar bagi alam dan manusia. Berikut adalah enam langkah untuk mendukung lingkungan melalui penanaman pohon.</p>

            <p>Pertama, pilihlah spesies pohon yang cocok untuk tumbuh di daerah tempat Anda tinggal. Pastikan untuk memilih pohon yang sesuai dengan iklim dan kondisi tanah di sekitar Anda. Hal ini akan memastikan bahwa pohon-pohon tersebut dapat tumbuh dengan baik dan memberikan manfaat yang maksimal bagi lingkungan.</p>

            <p>Kedua, pilihlah lokasi yang tepat untuk menanam pohon. Pastikan area tersebut memiliki cukup ruang bagi pohon untuk tumbuh dengan baik. Hindari menanam pohon terlalu dekat dengan bangunan atau infrastruktur lainnya, karena akar pohon dapat merusak struktur tersebut. Selain itu, pilihlah area yang memiliki kebutuhan akan penanaman pohon, seperti area yang kekurangan pepohonan atau daerah yang mengalami erosi.</p>

            <p> Langkah ketiga adalah melakukan penanaman dengan benar. Gali lubang yang cukup besar dan dalam untuk menampung akar pohon dengan baik. Setelah menempatkan pohon di dalam lubang, pastikan untuk mengisi lubang dengan tanah yang cukup subur dan memberikan air yang cukup untuk membantu pohon tumbuh.</p>

            <p>Selanjutnya, lakukan pemeliharaan yang rutin pada pohon yang telah ditanam. Pastikan untuk memberikan air yang cukup, memangkas cabang yang rusak, dan memberikan nutrisi yang diperlukan agar pohon tetap sehat. Jaga pula agar pohon tidak terkena hama atau penyakit yang dapat merusak pertumbuhan pohon.</p>

            <p>Kelima, ajak masyarakat sekitar untuk ikut serta dalam program penanaman pohon. Buatlah kegiatan sosialisasi dan penggalangan dana untuk mengajak orang lain berpartisipasi dalam menanam pohon. Melibatkan masyarakat akan meningkatkan kesadaran tentang pentingnya menjaga lingkungan dan dapat membantu memperluas area pepohonan.</p>

            <p>Terakhir, jaga dan rawat pohon-pohon yang telah ditanam. Ketika pohon telah tumbuh besar, berikan perlindungan dan perawatan yang diperlukan untuk memastikan kelangsungan hidupnya. Selain itu, pantau pertumbuhan pohon dan berikan pemangkasan yang diperlukan agar pohon tetap sehat dan rapi.</p>

            <p>Dengan melakukan langkah-langkah ini, kita dapat mendukung lingkungan melalui penanaman pohon. Pohon-pohon yang kita tanam akan memberikan manfaat jangka panjang, seperti mengurangi polusi udara, menyediakan tempat berlindung bagi hewan, dan menjaga kualitas tanah. Melalui upaya kolektif kita, kita dapat memperbaiki lingkungan hidup dan mewariskannya kepada generasi mendatang yang lebih baik.</p>',

            'konten_singkat'    => 'Pohon-pohon memberikan manfaat yang besar bagi alam dan manusia. Berikut adalah enam langkah untuk mendukung lingkungan melalui penanaman pohon.',

            'status'            => 'Draft',
        ]);

        Berita::create([
            'user_id'           => 1,
            'category_id'       => 8,

            'judul'             => 'Mengelola sampah di kota merupakan sebuah tantangan yang penting dan perlu dilakukan dengan bijak',
            'slug'              => 'mengelola-sampah-di-kota-merupakan-sebuah-tantangan-yang-penting-dan-perlu-dilakukan-dengan-bijak',
            'gambar'            => '04.jpg',
            'konten'            => '<p>Mengelola sampah di kota merupakan sebuah tantangan yang penting dan perlu dilakukan dengan bijak. Dalam upaya menjaga kebersihan dan kesehatan lingkungan, berikut adalah enam langkah yang dapat diambil untuk merawat sampah di sebuah kota.</p>

            <p>Pertama, edukasi masyarakat sangat penting. Pemerintah kota perlu memberikan informasi yang jelas tentang pentingnya mengelola sampah dengan benar. Kampanye publik dan penyuluhan mengenai pengurangan, pemilahan, dan daur ulang sampah harus diberikan kepada penduduk secara rutin.</p>

            <p>Kedua, memfasilitasi infrastruktur pengelolaan sampah yang memadai. Pemerintah perlu menyediakan tempat sampah umum di berbagai lokasi strategis seperti taman, jalan raya, dan pusat perbelanjaan. Selain itu, sistem pengangkutan sampah yang efisien dan terjadwal juga harus diatur agar sampah dapat dikumpulkan secara teratur dan diangkut ke tempat pembuangan akhir.</p>

            <p>Ketiga, menerapkan sistem pengumpulan sampah yang teratur dan terpisah. Pemerintah harus memperkenalkan program pengumpulan sampah terpisah seperti organik, anorganik, dan bahan berbahaya secara terpisah. Hal ini akan memudahkan proses daur ulang dan mengurangi jumlah sampah yang akhirnya dibuang ke tempat pembuangan akhir.</p>

            <p>Keempat, mendorong penggunaan metode daur ulang. Pemerintah kota perlu mengembangkan fasilitas daur ulang yang memadai dan mempromosikan praktik penggunaan kembali dan daur ulang barang-barang. Selain itu, juga penting untuk mendukung industri daur ulang yang ada dan mendorong inovasi dalam penggunaan bahan daur ulang.</p>

            <p>Kelima, melakukan pengawasan yang ketat terhadap pelanggaran dalam pengelolaan sampah. Pemerintah perlu memiliki regulasi yang tegas dan menegakkan hukum terhadap pelanggaran dalam membuang sampah sembarangan. Sanksi yang memadai harus diterapkan untuk mencegah perilaku semacam itu dan mendorong masyarakat agar patuh terhadap aturan pengelolaan sampah.</p>

            <p>Terakhir, meningkatkan kesadaran lingkungan masyarakat. Melalui kampanye sosial dan pendidikan yang berkelanjutan, masyarakat harus diajak untuk lebih peduli dan bertanggung jawab terhadap lingkungan mereka. Dengan kesadaran yang tinggi, diharapkan masyarakat akan menjadi agen perubahan dalam menjaga kebersihan dan mengurangi sampah di kota.</p>

            <p>Dengan menerapkan langkah-langkah di atas, diharapkan pengelolaan sampah di kota dapat lebih teratur dan berkelanjutan. Hal ini akan berdampak positif bagi kesehatan masyarakat, keindahan lingkungan, dan kualitas hidup secara keseluruhan.</p>',

            'konten_singkat'    => 'Mengelola sampah di kota merupakan sebuah tantangan yang penting dan perlu dilakukan dengan bijak. Dalam upaya menjaga kebersihan dan kesehatan lingkungan, berikut adalah enam langkah yang dapat diambil untuk merawat sampah di sebuah kota.',

            'status'            => 'Draft',
        ]);

        Berita::create([
            'user_id'           => 1,
            'category_id'       => 9,

            'judul'             => 'Merawat lingkungan adalah tugas penting bagi semua orang, termasuk anak-anak',
            'slug'              => 'merawat-lingkungan-adalah-tugas-penting-bagi-semua-orang-termasuk-anak-anak',
            'gambar'            => '05.jpg',
            'konten'            => '<p>Merawat lingkungan adalah tugas penting bagi semua orang, termasuk anak-anak. Dengan menjaga dan merawat lingkungan sejak dini, anak-anak dapat membantu menciptakan dunia yang lebih bersih dan lebih hijau untuk masa depan mereka. Berikut adalah enam cara sederhana yang bisa anak-anak lakukan untuk menjaga lingkungan:</p>
            <ol>
                <li>Daur ulang: Anak-anak dapat belajar untuk memilah sampah dengan benar, seperti memisahkan kertas, plastik, dan logam. Mengajarkan anak-anak untuk mendaur ulang juga membantu mengurangi penggunaan bahan-bahan baru yang merusak lingkungan. Ajak anak-anak untuk membuat kerajinan tangan dari barang bekas, seperti botol plastik atau kertas, sehingga mereka dapat melihat langsung manfaat dari daur ulang.</li>
                <li>Menghemat air: Anak-anak dapat membantu menghemat air dengan cara yang sederhana, seperti mematikan keran saat menyikat gigi atau mencuci tangan. Ajarkan mereka pentingnya menggunakan air secara bijak dan menghindari pemborosan. Anak-anak juga bisa membantu mengumpulkan air hujan untuk menyiram tanaman, sehingga mengurangi penggunaan air bersih.</li>
                <li>Menjaga kebersihan: Ajarkan anak-anak untuk selalu menjaga kebersihan lingkungan sekitar mereka. Ajak mereka untuk tidak membuang sampah sembarangan dan membantu membersihkan taman atau area bermain di sekitar rumah. Dengan menjaga kebersihan, anak-anak dapat mencegah pencemaran lingkungan dan menjaga keindahan alam.</li>
                <li>Menanam pohon: Ajak anak-anak untuk berpartisipasi dalam kegiatan menanam pohon. Menanam pohon membantu menyediakan oksigen, mengurangi polusi udara, dan memperbaiki kualitas tanah. Anak-anak bisa menanam pohon di halaman rumah, sekolah, atau bersama-sama dalam kegiatan penanaman pohon yang diadakan oleh komunitas setempat.</li>
                <li>Mengurangi penggunaan energi: Anak-anak bisa membantu mengurangi penggunaan energi dengan cara yang sederhana, seperti mematikan lampu atau perangkat elektronik yang tidak digunakan. Ajak mereka untuk menggunakan kipas angin daripada AC atau menggunakan sumber energi yang ramah lingkungan, seperti lampu LED. Dengan menghemat energi, anak-anak ikut berkontribusi dalam mengurangi emisi gas rumah kaca.</li>
                <li>Edukasi dan kesadaran: Anak-anak perlu dididik tentang pentingnya menjaga lingkungan dan dampak dari tindakan manusia terhadap alam. Bicarakan tentang pentingnya menjaga keanekaragaman hayati, perlindungan spesies yang terancam punah, dan cara-cara untuk mengurangi polusi. Libatkan mereka dalam diskusi dan kegiatan edukatif, seperti kunjungan ke taman nasional atau kebun binatang, agar mereka dapat melihat secara langsung keindahan alam dan pentingnya menjaga lingkungan.</li>
            </ol>
            <p>Dengan mengajarkan anak-anak untuk peduli dan bertanggung jawab terhadap lingk</p>',

            'konten_singkat'    => 'Merawat lingkungan adalah tugas penting bagi semua orang, termasuk anak-anak. Dengan menjaga dan merawat lingkungan sejak dini, anak-anak dapat membantu menciptakan dunia yang lebih bersih dan lebih hijau untuk masa depan mereka. Berikut adalah enam cara sederhana yang bisa anak-anak lakukan untuk menjaga lingkungan',

            'status'            => 'Draft',
        ]);

        Berita::create([
            'user_id'           => 1,
            'category_id'       => 9,

            'judul'             => 'Menanam pohon untuk mengurangi dampak perubahan iklim',
            'slug'              => 'menanam-pohon-untuk-mengurangi-dampak-perubahan-iklim',
            'gambar'            => '06.jpg',
            'konten'            => '<p>Mengadakan acara penanaman pohon merupakan langkah penting dalam menjaga keberlanjutan lingkungan dan mengurangi dampak perubahan iklim. Berikut adalah enam langkah yang dapat diikuti untuk mengadakan acara penanaman pohon yang sukses:

            <ol>
                <li>Rencanakan acara dengan baik: Langkah pertama adalah merencanakan acara dengan matang. Tetapkan tanggal, waktu, dan tempat yang sesuai untuk kegiatan penanaman pohon. Pastikan acara ini tidak bertabrakan dengan kegiatan lain yang penting dan sampaikan informasi terkait kepada peserta, seperti keperluan membawa peralatan dan perlengkapan yang diperlukan.</li>
                <li>Dapatkan izin yang diperlukan: Sebelum melaksanakan acara, pastikan untuk mendapatkan izin yang diperlukan dari pihak berwenang, seperti pemilik lahan atau lembaga terkait. Izin ini penting untuk memastikan kegiatan penanaman pohon dilakukan secara legal dan aman.</li>
                <li>Rekrut sukarelawan: Untuk menjalankan acara ini dengan lancar, penting untuk merekrut sukarelawan yang ingin berpartisipasi. Anda dapat menghubungi lembaga lingkungan, komunitas lokal, atau sekolah untuk mengajak orang-orang bergabung. Pastikan untuk memberikan informasi yang jelas mengenai waktu, tempat, dan persyaratan partisipasi kepada sukarelawan yang berminat.</li>
                <li>Persiapkan alat dan perlengkapan: Pastikan Anda memiliki alat dan perlengkapan yang memadai untuk kegiatan penanaman pohon. Ini termasuk sekop, cangkul, selotip tanda tanah, tali pengikat, dan air untuk penyiraman. Pastikan juga untuk menyediakan sarana kebersihan, seperti air bersih dan sabun, untuk keperluan mencuci tangan peserta.</li>
                <li>Berikan instruksi yang jelas: Sebelum memulai penanaman pohon, berikan instruksi yang jelas kepada peserta acara. Jelaskan cara menanam pohon dengan benar, termasuk kedalaman lubang tanam, cara menempatkan bibit pohon, dan cara merawat pohon setelah ditanam. Pastikan setiap peserta memahami langkah-langkah yang harus diikuti untuk menjaga keberhasilan penanaman.</li>
                <li>Peringatkan tentang kelestarian lingkungan: Selain penanaman pohon, penting untuk mengingatkan peserta tentang pentingnya menjaga kelestarian lingkungan. Berikan informasi tentang manfaat penanaman pohon, seperti menjaga kestabilan tanah, mengurangi erosi, menyediakan habitat bagi satwa liar, dan mengurangi emisi karbon. Ajak peserta untuk terlibat dalam kegiatan konservasi lingkungan lainnya dan berbagi pengetahuan mereka dengan orang lain.</li>
            </ol>
            <p>Dengan mengikuti langkah-langkah ini, diharapkan acara penanaman pohon dapat berjalan dengan sukses dan meningkatkan kesadaran akan pentingnya menjaga kelestarian lingkungan di masyarakat.</p>',

            'konten_singkat'    => 'Berikut adalah enam langkah yang dapat diikuti untuk mengadakan acara penanaman pohon yang sukses',

            'status'            => 'Draft',
        ]);



        Berita::create([
            'user_id'           => 1,
            'category_id'       => 9,

            'judul'             => 'Menanam pohon untuk mengurangi dampak perubahan iklim',
            'slug'              => 'menanam-pohon-untuk-msasaengurangi-dampak-perubahan-iklim',
            'gambar'            => '07.jpg',
            'konten'            => '<p>Mengadakan acara penanaman pohon merupakan langkah penting dalam menjaga keberlanjutan lingkungan dan mengurangi dampak perubahan iklim. Berikut adalah enam langkah yang dapat diikuti untuk mengadakan acara penanaman pohon yang sukses:

            <ol>
                <li>Rencanakan acara dengan baik: Langkah pertama adalah merencanakan acara dengan matang. Tetapkan tanggal, waktu, dan tempat yang sesuai untuk kegiatan penanaman pohon. Pastikan acara ini tidak bertabrakan dengan kegiatan lain yang penting dan sampaikan informasi terkait kepada peserta, seperti keperluan membawa peralatan dan perlengkapan yang diperlukan.</li>
                <li>Dapatkan izin yang diperlukan: Sebelum melaksanakan acara, pastikan untuk mendapatkan izin yang diperlukan dari pihak berwenang, seperti pemilik lahan atau lembaga terkait. Izin ini penting untuk memastikan kegiatan penanaman pohon dilakukan secara legal dan aman.</li>
                <li>Rekrut sukarelawan: Untuk menjalankan acara ini dengan lancar, penting untuk merekrut sukarelawan yang ingin berpartisipasi. Anda dapat menghubungi lembaga lingkungan, komunitas lokal, atau sekolah untuk mengajak orang-orang bergabung. Pastikan untuk memberikan informasi yang jelas mengenai waktu, tempat, dan persyaratan partisipasi kepada sukarelawan yang berminat.</li>
                <li>Persiapkan alat dan perlengkapan: Pastikan Anda memiliki alat dan perlengkapan yang memadai untuk kegiatan penanaman pohon. Ini termasuk sekop, cangkul, selotip tanda tanah, tali pengikat, dan air untuk penyiraman. Pastikan juga untuk menyediakan sarana kebersihan, seperti air bersih dan sabun, untuk keperluan mencuci tangan peserta.</li>
                <li>Berikan instruksi yang jelas: Sebelum memulai penanaman pohon, berikan instruksi yang jelas kepada peserta acara. Jelaskan cara menanam pohon dengan benar, termasuk kedalaman lubang tanam, cara menempatkan bibit pohon, dan cara merawat pohon setelah ditanam. Pastikan setiap peserta memahami langkah-langkah yang harus diikuti untuk menjaga keberhasilan penanaman.</li>
                <li>Peringatkan tentang kelestarian lingkungan: Selain penanaman pohon, penting untuk mengingatkan peserta tentang pentingnya menjaga kelestarian lingkungan. Berikan informasi tentang manfaat penanaman pohon, seperti menjaga kestabilan tanah, mengurangi erosi, menyediakan habitat bagi satwa liar, dan mengurangi emisi karbon. Ajak peserta untuk terlibat dalam kegiatan konservasi lingkungan lainnya dan berbagi pengetahuan mereka dengan orang lain.</li>
            </ol>
            <p>Dengan mengikuti langkah-langkah ini, diharapkan acara penanaman pohon dapat berjalan dengan sukses dan meningkatkan kesadaran akan pentingnya menjaga kelestarian lingkungan di masyarakat.</p>',

            'konten_singkat'    => 'Berikut adalah enam langkah yang dapat diikuti untuk mengadakan acara penanaman pohon yang sukses',

            'status'            => 'Draft',
        ]);


        Berita::create([
            'user_id'           => 1,
            'category_id'       => 9,

            'judul'             => 'Menanam pohon untuk mengurangi dampak perubahan iklim',
            'slug'              => 'menanam-pohon-untaasaaqquk-mengurangi-dampak-perubahan-iklim',
            'gambar'            => '08.jpg',
            'konten'            => '<p>Mengadakan acara penanaman pohon merupakan langkah penting dalam menjaga keberlanjutan lingkungan dan mengurangi dampak perubahan iklim. Berikut adalah enam langkah yang dapat diikuti untuk mengadakan acara penanaman pohon yang sukses:

            <ol>
                <li>Rencanakan acara dengan baik: Langkah pertama adalah merencanakan acara dengan matang. Tetapkan tanggal, waktu, dan tempat yang sesuai untuk kegiatan penanaman pohon. Pastikan acara ini tidak bertabrakan dengan kegiatan lain yang penting dan sampaikan informasi terkait kepada peserta, seperti keperluan membawa peralatan dan perlengkapan yang diperlukan.</li>
                <li>Dapatkan izin yang diperlukan: Sebelum melaksanakan acara, pastikan untuk mendapatkan izin yang diperlukan dari pihak berwenang, seperti pemilik lahan atau lembaga terkait. Izin ini penting untuk memastikan kegiatan penanaman pohon dilakukan secara legal dan aman.</li>
                <li>Rekrut sukarelawan: Untuk menjalankan acara ini dengan lancar, penting untuk merekrut sukarelawan yang ingin berpartisipasi. Anda dapat menghubungi lembaga lingkungan, komunitas lokal, atau sekolah untuk mengajak orang-orang bergabung. Pastikan untuk memberikan informasi yang jelas mengenai waktu, tempat, dan persyaratan partisipasi kepada sukarelawan yang berminat.</li>
                <li>Persiapkan alat dan perlengkapan: Pastikan Anda memiliki alat dan perlengkapan yang memadai untuk kegiatan penanaman pohon. Ini termasuk sekop, cangkul, selotip tanda tanah, tali pengikat, dan air untuk penyiraman. Pastikan juga untuk menyediakan sarana kebersihan, seperti air bersih dan sabun, untuk keperluan mencuci tangan peserta.</li>
                <li>Berikan instruksi yang jelas: Sebelum memulai penanaman pohon, berikan instruksi yang jelas kepada peserta acara. Jelaskan cara menanam pohon dengan benar, termasuk kedalaman lubang tanam, cara menempatkan bibit pohon, dan cara merawat pohon setelah ditanam. Pastikan setiap peserta memahami langkah-langkah yang harus diikuti untuk menjaga keberhasilan penanaman.</li>
                <li>Peringatkan tentang kelestarian lingkungan: Selain penanaman pohon, penting untuk mengingatkan peserta tentang pentingnya menjaga kelestarian lingkungan. Berikan informasi tentang manfaat penanaman pohon, seperti menjaga kestabilan tanah, mengurangi erosi, menyediakan habitat bagi satwa liar, dan mengurangi emisi karbon. Ajak peserta untuk terlibat dalam kegiatan konservasi lingkungan lainnya dan berbagi pengetahuan mereka dengan orang lain.</li>
            </ol>
            <p>Dengan mengikuti langkah-langkah ini, diharapkan acara penanaman pohon dapat berjalan dengan sukses dan meningkatkan kesadaran akan pentingnya menjaga kelestarian lingkungan di masyarakat.</p>',

            'konten_singkat'    => 'Berikut adalah enam langkah yang dapat diikuti untuk mengadakan acara penanaman pohon yang sukses',

            'status'            => 'Draft',
        ]);

        Berita::create([
            'user_id'           => 1,
            'category_id'       => 9,

            'judul'             => 'Menanam pohon untuk mengurangi dampak perubahan iklim',
            'slug'              => 'menanam-pohon-untaasaaqquk-mengurangi-dampak-peasasasarubahan-iklim',
            'gambar'            => '06.jpg',
            'konten'            => '<p>Mengadakan acara penanaman pohon merupakan langkah penting dalam menjaga keberlanjutan lingkungan dan mengurangi dampak perubahan iklim. Berikut adalah enam langkah yang dapat diikuti untuk mengadakan acara penanaman pohon yang sukses:

            <ol>
                <li>Rencanakan acara dengan baik: Langkah pertama adalah merencanakan acara dengan matang. Tetapkan tanggal, waktu, dan tempat yang sesuai untuk kegiatan penanaman pohon. Pastikan acara ini tidak bertabrakan dengan kegiatan lain yang penting dan sampaikan informasi terkait kepada peserta, seperti keperluan membawa peralatan dan perlengkapan yang diperlukan.</li>
                <li>Dapatkan izin yang diperlukan: Sebelum melaksanakan acara, pastikan untuk mendapatkan izin yang diperlukan dari pihak berwenang, seperti pemilik lahan atau lembaga terkait. Izin ini penting untuk memastikan kegiatan penanaman pohon dilakukan secara legal dan aman.</li>
                <li>Rekrut sukarelawan: Untuk menjalankan acara ini dengan lancar, penting untuk merekrut sukarelawan yang ingin berpartisipasi. Anda dapat menghubungi lembaga lingkungan, komunitas lokal, atau sekolah untuk mengajak orang-orang bergabung. Pastikan untuk memberikan informasi yang jelas mengenai waktu, tempat, dan persyaratan partisipasi kepada sukarelawan yang berminat.</li>
                <li>Persiapkan alat dan perlengkapan: Pastikan Anda memiliki alat dan perlengkapan yang memadai untuk kegiatan penanaman pohon. Ini termasuk sekop, cangkul, selotip tanda tanah, tali pengikat, dan air untuk penyiraman. Pastikan juga untuk menyediakan sarana kebersihan, seperti air bersih dan sabun, untuk keperluan mencuci tangan peserta.</li>
                <li>Berikan instruksi yang jelas: Sebelum memulai penanaman pohon, berikan instruksi yang jelas kepada peserta acara. Jelaskan cara menanam pohon dengan benar, termasuk kedalaman lubang tanam, cara menempatkan bibit pohon, dan cara merawat pohon setelah ditanam. Pastikan setiap peserta memahami langkah-langkah yang harus diikuti untuk menjaga keberhasilan penanaman.</li>
                <li>Peringatkan tentang kelestarian lingkungan: Selain penanaman pohon, penting untuk mengingatkan peserta tentang pentingnya menjaga kelestarian lingkungan. Berikan informasi tentang manfaat penanaman pohon, seperti menjaga kestabilan tanah, mengurangi erosi, menyediakan habitat bagi satwa liar, dan mengurangi emisi karbon. Ajak peserta untuk terlibat dalam kegiatan konservasi lingkungan lainnya dan berbagi pengetahuan mereka dengan orang lain.</li>
            </ol>
            <p>Dengan mengikuti langkah-langkah ini, diharapkan acara penanaman pohon dapat berjalan dengan sukses dan meningkatkan kesadaran akan pentingnya menjaga kelestarian lingkungan di masyarakat.</p>',

            'konten_singkat'    => 'Berikut adalah enam langkah yang dapat diikuti untuk mengadakan acara penanaman pohon yang sukses',

            'status'            => 'Draft',
        ]);

        Berita::create([
            'user_id'           => 1,
            'category_id'       => 5,

            'judul'             => 'Serah Terima Jabatan dan Purna Tugas Penjabat Struktural',
            'slug'              => 'serah-terima-jabatan-dan-purna-tugas-penjabat-struktural',
            'gambar'            => '09-720X480.jpg',
            'konten'            => '<p>The Environmental Agency of Jayapura City is a governmental organization responsible for managing and preserving the environment in the city. Its primary objective is to promote sustainable development while ensuring the protection of natural resources, biodiversity, and the overall well-being of the community. The agency works towards achieving this goal through various activities such as implementing environmental regulations, conducting environmental assessments, raising awareness about environmental issues, and collaborating with other stakeholders to develop and implement effective environmental policies and programs. By actively engaging with the public and stakeholders, the Environmental Agency of Jayapura City strives to create a clean and healthy environment for its residents, promoting a sustainable and livable city for present and future generations.</p>

            <p>In addition to environmental management, the agency also focuses on waste management and pollution control. It coordinates waste collection and disposal systems, aiming to minimize the environmental impact of waste generation and promote recycling and proper waste disposal practices. The agency also monitors air and water quality, implementing measures to reduce pollution levels and protect the health of the population. Through its dedicated efforts, the Environmental Agency of Jayapura City plays a crucial role in safeguarding the environment and enhancing the quality of life for the residents of the city.</p>',

            'konten_singkat'    => 'Berikut adalah enam langkah yang dapat diikuti untuk mengadakan acara penanaman pohon yang sukses',

            'status'            => 'Publish',
        ]);

        Berita::create([
            'user_id'           => 1,
            'category_id'       => 10,

            'judul'             => 'Foto Bersama Pada Kegiatan Serah Terima Jabatan',
            'slug'              => 'foto-bersama-pada-kegiatan-serah-terima-jabatan',
            'gambar'            => '10-720X480.jpg',
            'konten'            => '<p>The Environmental Agency of Jayapura City is a governmental organization responsible for managing and preserving the environment in the city. Its primary objective is to promote sustainable development while ensuring the protection of natural resources, biodiversity, and the overall well-being of the community. The agency works towards achieving this goal through various activities such as implementing environmental regulations, conducting environmental assessments, raising awareness about environmental issues, and collaborating with other stakeholders to develop and implement effective environmental policies and programs. By actively engaging with the public and stakeholders, the Environmental Agency of Jayapura City strives to create a clean and healthy environment for its residents, promoting a sustainable and livable city for present and future generations.</p>

            <p>In addition to environmental management, the agency also focuses on waste management and pollution control. It coordinates waste collection and disposal systems, aiming to minimize the environmental impact of waste generation and promote recycling and proper waste disposal practices. The agency also monitors air and water quality, implementing measures to reduce pollution levels and protect the health of the population. Through its dedicated efforts, the Environmental Agency of Jayapura City plays a crucial role in safeguarding the environment and enhancing the quality of life for the residents of the city.</p>',

            'konten_singkat'    => 'Berikut adalah enam langkah yang dapat diikuti untuk mengadakan acara penanaman pohon yang sukses',

            'status'            => 'Publish',
        ]);

        Berita::create([
            'user_id'           => 1,
            'category_id'       => 10,

            'judul'             => 'SIPAKOT (Sistem Informasi Pajak Air Tanah)',
            'slug'              => 'sipakot-sistem-informasi-pajak-air-tanah',
            'gambar'            => '12-720X480.jpg',
            'konten'            => '<p>The Environmental Agency of Jayapura City is a governmental organization responsible for managing and preserving the environment in the city. Its primary objective is to promote sustainable development while ensuring the protection of natural resources, biodiversity, and the overall well-being of the community. The agency works towards achieving this goal through various activities such as implementing environmental regulations, conducting environmental assessments, raising awareness about environmental issues, and collaborating with other stakeholders to develop and implement effective environmental policies and programs. By actively engaging with the public and stakeholders, the Environmental Agency of Jayapura City strives to create a clean and healthy environment for its residents, promoting a sustainable and livable city for present and future generations.</p>

            <p>In addition to environmental management, the agency also focuses on waste management and pollution control. It coordinates waste collection and disposal systems, aiming to minimize the environmental impact of waste generation and promote recycling and proper waste disposal practices. The agency also monitors air and water quality, implementing measures to reduce pollution levels and protect the health of the population. Through its dedicated efforts, the Environmental Agency of Jayapura City plays a crucial role in safeguarding the environment and enhancing the quality of life for the residents of the city.</p>',

            'konten_singkat'    => 'Berikut adalah enam langkah yang dapat diikuti untuk mengadakan acara penanaman pohon yang sukses',

            'status'            => 'Publish',
        ]);

        Berita::create([
            'user_id'           => 1,
            'category_id'       => 5,

            'judul'             => 'Peluncuran Portal Web DLHK Kota Jayapura',
            'slug'              => 'peluncuran-portal-web-dlhk-kota-jayapura',
            'gambar'            => '11-720X480.jpg',
            'konten'            => '<p>The Environmental Agency of Jayapura City is a governmental organization responsible for managing and preserving the environment in the city. Its primary objective is to promote sustainable development while ensuring the protection of natural resources, biodiversity, and the overall well-being of the community. The agency works towards achieving this goal through various activities such as implementing environmental regulations, conducting environmental assessments, raising awareness about environmental issues, and collaborating with other stakeholders to develop and implement effective environmental policies and programs. By actively engaging with the public and stakeholders, the Environmental Agency of Jayapura City strives to create a clean and healthy environment for its residents, promoting a sustainable and livable city for present and future generations.</p>

            <p>In addition to environmental management, the agency also focuses on waste management and pollution control. It coordinates waste collection and disposal systems, aiming to minimize the environmental impact of waste generation and promote recycling and proper waste disposal practices. The agency also monitors air and water quality, implementing measures to reduce pollution levels and protect the health of the population. Through its dedicated efforts, the Environmental Agency of Jayapura City plays a crucial role in safeguarding the environment and enhancing the quality of life for the residents of the city.</p>',

            'konten_singkat'    => 'Berikut adalah enam langkah yang dapat diikuti untuk mengadakan acara penanaman pohon yang sukses',

            'status'            => 'Publish',
        ]);


    }
}
