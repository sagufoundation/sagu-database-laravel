// SISWA COUNTER
let dasbor_jml_siswa = document.getElementById('dasbor_jml_siswa').value;
let dasbor_jml_siswa_draft = document.getElementById('dasbor_jml_siswa_draft').value;
let dasbor_jml_siswa_semua = document.getElementById('dasbor_jml_siswa_semua').value;

var chart = c3.generate({
    bindto: '#chartSiswa',
    data: {
        columns: [
            ['Publish', dasbor_jml_siswa],
            ['Draft', dasbor_jml_siswa_draft],
            ['Total semua', dasbor_jml_siswa_semua]
        ],
        type: 'bar'
    },
    chart: {
        width: {
            ratio: 1 // this makes bar width 50% of length between ticks
        }
        // or
        //width: 100 // this makes bar width 100px
    }
});

// HALAMAN COUNTER
let dasbor_jml_halaman = document.getElementById('dasbor_jml_halaman').value;
let dasbor_jml_halaman_draft = document.getElementById('dasbor_jml_halaman_draft').value;
let dasbor_jml_halaman_semua = document.getElementById('dasbor_jml_halaman_semua').value;

var chart = c3.generate({
    bindto: '#chartHalaman',
    data: {
        columns: [
            ['Publish', dasbor_jml_halaman],
            ['Draft', dasbor_jml_halaman_draft],
            ['Total semua', dasbor_jml_halaman_semua]
        ],
        type: 'bar'
    },
    chart: {
        width: {
            ratio: 1 // this makes bar width 50% of length between ticks
        }
        // or
        //width: 100 // this makes bar width 100px
    }
});
