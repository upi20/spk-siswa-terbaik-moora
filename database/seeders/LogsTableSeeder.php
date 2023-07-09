<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LogsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('logs')->delete();
        
        \DB::table('logs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'log_date' => '2023-07-09 14:48:59',
                'table_name' => 'setting_activities',
                'log_type' => 'create',
            'data' => '{"key":"dashboard.html","value":"<p class=\\"MsoNormal\\" align=\\"center\\" style=\\"text-align: left; line-height: 150%;\\"><font color=\\"#000000\\" face=\\"Times New Roman, serif\\"><b>SISTEM PENDUKUNG KEPUTUSAN PEMILIHAN SISWA TELADAN DI SD NEGERI CIPETIR 4 DENGAN MENGGUNAKAN METODE MULTI-OBJECTIVE OPTIMIZATION ON THE BASIS OF RATIO ANALYSIS (MOORA)<\\/b><\\/font><br><p><\\/p><p><\\/p><p><\\/p><p><\\/p><p><\\/p><p><\\/p><\\/p>\\n","updated_at":"2023-07-09T07:48:59.000000Z","created_at":"2023-07-09T07:48:59.000000Z","id":1}',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 1,
                'log_date' => '2023-07-09 14:49:20',
                'table_name' => 'alternatif',
                'log_type' => 'delete',
                'data' => '{"id":36,"nama":"G. Artapela ","slug":"g-artapela","kelas":null,"import_id":19,"created_at":"2023-07-01 23:16:58","updated_at":"2023-07-01 23:16:58"}',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 1,
                'log_date' => '2023-07-09 14:49:20',
                'table_name' => 'alternatif',
                'log_type' => 'delete',
                'data' => '{"id":40,"nama":"G. Bendera","slug":"g-bendera","kelas":null,"import_id":19,"created_at":"2023-07-01 23:16:58","updated_at":"2023-07-01 23:16:58"}',
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 1,
                'log_date' => '2023-07-09 14:49:20',
                'table_name' => 'alternatif',
                'log_type' => 'delete',
                'data' => '{"id":33,"nama":"G. Bukit Tunggul","slug":"g-bukit-tunggul","kelas":null,"import_id":19,"created_at":"2023-07-01 23:16:57","updated_at":"2023-07-01 23:16:57"}',
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => 1,
                'log_date' => '2023-07-09 14:49:20',
                'table_name' => 'alternatif',
                'log_type' => 'delete',
                'data' => '{"id":31,"nama":"G. Burangrang","slug":"g-burangrang","kelas":null,"import_id":19,"created_at":"2023-07-01 23:16:57","updated_at":"2023-07-01 23:16:57"}',
            ),
            5 => 
            array (
                'id' => 6,
                'user_id' => 1,
                'log_date' => '2023-07-09 14:49:20',
                'table_name' => 'alternatif',
                'log_type' => 'delete',
                'data' => '{"id":35,"nama":"G. Mandalawangi","slug":"g-mandalawangi","kelas":null,"import_id":19,"created_at":"2023-07-01 23:16:57","updated_at":"2023-07-01 23:16:57"}',
            ),
            6 => 
            array (
                'id' => 7,
                'user_id' => 1,
                'log_date' => '2023-07-09 14:49:20',
                'table_name' => 'alternatif',
                'log_type' => 'delete',
                'data' => '{"id":34,"nama":"G. Manglayang","slug":"g-manglayang","kelas":null,"import_id":19,"created_at":"2023-07-01 23:16:57","updated_at":"2023-07-01 23:16:57"}',
            ),
            7 => 
            array (
                'id' => 8,
                'user_id' => 1,
                'log_date' => '2023-07-09 14:49:20',
                'table_name' => 'alternatif',
                'log_type' => 'delete',
                'data' => '{"id":37,"nama":"G. Patuha","slug":"g-patuha","kelas":null,"import_id":19,"created_at":"2023-07-01 23:16:58","updated_at":"2023-07-01 23:16:58"}',
            ),
            8 => 
            array (
                'id' => 9,
                'user_id' => 1,
                'log_date' => '2023-07-09 14:49:20',
                'table_name' => 'alternatif',
                'log_type' => 'delete',
                'data' => '{"id":38,"nama":"G. Puntang","slug":"g-puntang","kelas":null,"import_id":19,"created_at":"2023-07-01 23:16:58","updated_at":"2023-07-01 23:16:58"}',
            ),
            9 => 
            array (
                'id' => 10,
                'user_id' => 1,
                'log_date' => '2023-07-09 14:49:20',
                'table_name' => 'alternatif',
                'log_type' => 'delete',
                'data' => '{"id":32,"nama":"G. Putri Lembang","slug":"g-putri-lembang","kelas":null,"import_id":19,"created_at":"2023-07-01 23:16:57","updated_at":"2023-07-01 23:16:57"}',
            ),
            10 => 
            array (
                'id' => 11,
                'user_id' => 1,
                'log_date' => '2023-07-09 14:49:20',
                'table_name' => 'alternatif',
                'log_type' => 'delete',
                'data' => '{"id":39,"nama":"G. Tambakruyung","slug":"g-tambakruyung","kelas":null,"import_id":19,"created_at":"2023-07-01 23:16:58","updated_at":"2023-07-01 23:16:58"}',
            ),
            11 => 
            array (
                'id' => 12,
                'user_id' => 1,
                'log_date' => '2023-07-09 14:49:31',
                'table_name' => 'kriteria',
                'log_type' => 'delete',
                'data' => '{"id":1,"bobot":40,"jenis":"Cost","nama":"Biaya","slug":"biaya","kode":"C1","satuan":null,"dari":10000,"sampai":35000,"created_at":"2023-07-01 16:01:00","updated_at":"2023-07-01 18:57:00"}',
            ),
            12 => 
            array (
                'id' => 13,
                'user_id' => 1,
                'log_date' => '2023-07-09 14:49:31',
                'table_name' => 'kriteria',
                'log_type' => 'delete',
                'data' => '{"id":2,"bobot":25,"jenis":"Benefit","nama":"Jarak","slug":"jarak","kode":"C2","satuan":null,"dari":11,"sampai":70,"created_at":"2023-07-01 16:01:18","updated_at":"2023-07-01 18:57:13"}',
            ),
            13 => 
            array (
                'id' => 14,
                'user_id' => 1,
                'log_date' => '2023-07-09 14:49:31',
                'table_name' => 'kriteria',
                'log_type' => 'delete',
                'data' => '{"id":3,"bobot":20,"jenis":"Benefit","nama":"Waktu","slug":"waktu","kode":"C3","satuan":null,"dari":30,"sampai":150,"created_at":"2023-07-01 16:01:32","updated_at":"2023-07-01 18:57:23"}',
            ),
            14 => 
            array (
                'id' => 15,
                'user_id' => 1,
                'log_date' => '2023-07-09 14:49:31',
                'table_name' => 'kriteria',
                'log_type' => 'delete',
                'data' => '{"id":4,"bobot":15,"jenis":"Benefit","nama":"Ketinggian","slug":"ketinggian","kode":"C4","satuan":null,"dari":601,"sampai":3000,"created_at":"2023-07-01 16:01:48","updated_at":"2023-07-01 18:57:36"}',
            ),
            15 => 
            array (
                'id' => 16,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:00:51',
                'table_name' => 'kriteria',
                'log_type' => 'create',
                'data' => '{"bobot":"30","jenis":"Cost","nama":"Absensi","kode":"C1","slug":"absensi","updated_at":"2023-07-09T08:00:51.000000Z","created_at":"2023-07-09T08:00:51.000000Z","id":5}',
            ),
            16 => 
            array (
                'id' => 17,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:01:02',
                'table_name' => 'kriteria',
                'log_type' => 'create',
                'data' => '{"bobot":"20","jenis":"Benefit","nama":"Nilai Raport","kode":"C2","slug":"nilai-raport","updated_at":"2023-07-09T08:01:02.000000Z","created_at":"2023-07-09T08:01:02.000000Z","id":6}',
            ),
            17 => 
            array (
                'id' => 18,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:01:17',
                'table_name' => 'kriteria',
                'log_type' => 'create',
                'data' => '{"bobot":"25","jenis":"Benefit","nama":"Keaktifan","kode":"C3","slug":"keaktifan","updated_at":"2023-07-09T08:01:17.000000Z","created_at":"2023-07-09T08:01:17.000000Z","id":7}',
            ),
            18 => 
            array (
                'id' => 19,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:01:29',
                'table_name' => 'kriteria',
                'log_type' => 'create',
                'data' => '{"bobot":"25","jenis":"Benefit","nama":"Budi Pekerti","kode":"C4","slug":"budi-pekerti","updated_at":"2023-07-09T08:01:29.000000Z","created_at":"2023-07-09T08:01:29.000000Z","id":8}',
            ),
            19 => 
            array (
                'id' => 20,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:01:50',
                'table_name' => 'kriteria_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":"5","nama":"Sangat Kurang","nilai":"20","dari":"0","sampai":"20","updated_at":"2023-07-09T08:01:50.000000Z","created_at":"2023-07-09T08:01:50.000000Z","id":19}',
            ),
            20 => 
            array (
                'id' => 21,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:01:50',
                'table_name' => 'kriteria',
                'log_type' => 'edit',
                'data' => '{"id":5,"bobot":30,"jenis":"Cost","nama":"Absensi","slug":"absensi","kode":"C1","satuan":null,"dari":0,"sampai":0,"created_at":"2023-07-09 15:00:51","updated_at":"2023-07-09 15:00:51"}',
            ),
            21 => 
            array (
                'id' => 22,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:05:39',
                'table_name' => 'import_alternatif',
                'log_type' => 'delete',
                'data' => '{"id":19,"nama":"Data testing","slug":"data-testing","file":"20230701111657-data-testing.xlsx","count":10,"created_at":"2023-07-01 23:16:57","updated_at":"2023-07-01 23:16:58"}',
            ),
            22 => 
            array (
                'id' => 23,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:06:45',
                'table_name' => 'kriteria',
                'log_type' => 'edit',
                'data' => '{"id":5,"bobot":30,"jenis":"Cost","nama":"Absensi","slug":"absensi","kode":"C1","satuan":null,"dari":0,"sampai":20,"created_at":"2023-07-09 15:00:51","updated_at":"2023-07-09 15:01:50"}',
            ),
            23 => 
            array (
                'id' => 24,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:06:50',
                'table_name' => 'kriteria',
                'log_type' => 'edit',
                'data' => '{"id":6,"bobot":20,"jenis":"Benefit","nama":"Nilai Raport","slug":"nilai-raport","kode":"C2","satuan":null,"dari":0,"sampai":0,"created_at":"2023-07-09 15:01:02","updated_at":"2023-07-09 15:01:02"}',
            ),
            24 => 
            array (
                'id' => 25,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:06:58',
                'table_name' => 'kriteria',
                'log_type' => 'edit',
                'data' => '{"id":7,"bobot":25,"jenis":"Benefit","nama":"Keaktifan","slug":"keaktifan","kode":"C3","satuan":null,"dari":0,"sampai":0,"created_at":"2023-07-09 15:01:17","updated_at":"2023-07-09 15:01:17"}',
            ),
            25 => 
            array (
                'id' => 26,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:07:04',
                'table_name' => 'kriteria',
                'log_type' => 'edit',
                'data' => '{"id":8,"bobot":25,"jenis":"Benefit","nama":"Budi Pekerti","slug":"budi-pekerti","kode":"C4","satuan":null,"dari":0,"sampai":0,"created_at":"2023-07-09 15:01:29","updated_at":"2023-07-09 15:01:29"}',
            ),
            26 => 
            array (
                'id' => 32,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:55',
                'table_name' => 'import_alternatif',
                'log_type' => 'create',
                'data' => '{"nama":"Data siswa teladan","slug":"data-siswa-teladan","updated_at":"2023-07-09T08:13:55.000000Z","created_at":"2023-07-09T08:13:55.000000Z","id":21}',
            ),
            27 => 
            array (
                'id' => 33,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:55',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nama":"RISMAWANTI AWALIAH S","kelas":"6A","import_id":21,"slug":"rismawanti-awaliah-s","updated_at":"2023-07-09T08:13:55.000000Z","created_at":"2023-07-09T08:13:55.000000Z","id":42}',
            ),
            28 => 
            array (
                'id' => 34,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:55',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":42,"kriteria_id":5,"kirteria_nilai_id":49,"nilai":"88","updated_at":"2023-07-09T08:13:55.000000Z","created_at":"2023-07-09T08:13:55.000000Z","id":180}',
            ),
            29 => 
            array (
                'id' => 35,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:55',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":42,"kriteria_id":6,"kirteria_nilai_id":54,"nilai":"89","updated_at":"2023-07-09T08:13:55.000000Z","created_at":"2023-07-09T08:13:55.000000Z","id":181}',
            ),
            30 => 
            array (
                'id' => 36,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:55',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":42,"kriteria_id":7,"kirteria_nilai_id":59,"nilai":"92","updated_at":"2023-07-09T08:13:55.000000Z","created_at":"2023-07-09T08:13:55.000000Z","id":182}',
            ),
            31 => 
            array (
                'id' => 37,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:55',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":42,"kriteria_id":8,"kirteria_nilai_id":64,"nilai":"100","updated_at":"2023-07-09T08:13:55.000000Z","created_at":"2023-07-09T08:13:55.000000Z","id":183}',
            ),
            32 => 
            array (
                'id' => 38,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:55',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nama":"SRI HASTUTI","kelas":"6B","import_id":21,"slug":"sri-hastuti","updated_at":"2023-07-09T08:13:55.000000Z","created_at":"2023-07-09T08:13:55.000000Z","id":43}',
            ),
            33 => 
            array (
                'id' => 39,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:55',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":43,"kriteria_id":5,"kirteria_nilai_id":47,"nilai":"58","updated_at":"2023-07-09T08:13:55.000000Z","created_at":"2023-07-09T08:13:55.000000Z","id":184}',
            ),
            34 => 
            array (
                'id' => 40,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:55',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":43,"kriteria_id":6,"kirteria_nilai_id":53,"nilai":"64","updated_at":"2023-07-09T08:13:55.000000Z","created_at":"2023-07-09T08:13:55.000000Z","id":185}',
            ),
            35 => 
            array (
                'id' => 41,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:55',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":43,"kriteria_id":7,"kirteria_nilai_id":56,"nilai":"30","updated_at":"2023-07-09T08:13:55.000000Z","created_at":"2023-07-09T08:13:55.000000Z","id":186}',
            ),
            36 => 
            array (
                'id' => 42,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:55',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":43,"kriteria_id":8,"kirteria_nilai_id":61,"nilai":"23","updated_at":"2023-07-09T08:13:55.000000Z","created_at":"2023-07-09T08:13:55.000000Z","id":187}',
            ),
            37 => 
            array (
                'id' => 43,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:55',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nama":"DERIS KUSNAEDI","kelas":"6C","import_id":21,"slug":"deris-kusnaedi","updated_at":"2023-07-09T08:13:55.000000Z","created_at":"2023-07-09T08:13:55.000000Z","id":44}',
            ),
            38 => 
            array (
                'id' => 44,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:55',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":44,"kriteria_id":5,"kirteria_nilai_id":48,"nilai":"64","updated_at":"2023-07-09T08:13:55.000000Z","created_at":"2023-07-09T08:13:55.000000Z","id":188}',
            ),
            39 => 
            array (
                'id' => 45,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:55',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":44,"kriteria_id":6,"kirteria_nilai_id":54,"nilai":"100","updated_at":"2023-07-09T08:13:55.000000Z","created_at":"2023-07-09T08:13:55.000000Z","id":189}',
            ),
            40 => 
            array (
                'id' => 46,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:55',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":44,"kriteria_id":7,"kirteria_nilai_id":59,"nilai":"90","updated_at":"2023-07-09T08:13:55.000000Z","created_at":"2023-07-09T08:13:55.000000Z","id":190}',
            ),
            41 => 
            array (
                'id' => 47,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:55',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":44,"kriteria_id":8,"kirteria_nilai_id":60,"nilai":"5","updated_at":"2023-07-09T08:13:55.000000Z","created_at":"2023-07-09T08:13:55.000000Z","id":191}',
            ),
            42 => 
            array (
                'id' => 48,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:55',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nama":"PUPUNG RUSTIKA","kelas":"6A","import_id":21,"slug":"pupung-rustika","updated_at":"2023-07-09T08:13:55.000000Z","created_at":"2023-07-09T08:13:55.000000Z","id":45}',
            ),
            43 => 
            array (
                'id' => 49,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:55',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":45,"kriteria_id":5,"kirteria_nilai_id":48,"nilai":"62","updated_at":"2023-07-09T08:13:55.000000Z","created_at":"2023-07-09T08:13:55.000000Z","id":192}',
            ),
            44 => 
            array (
                'id' => 50,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:55',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":45,"kriteria_id":6,"kirteria_nilai_id":51,"nilai":"33","updated_at":"2023-07-09T08:13:55.000000Z","created_at":"2023-07-09T08:13:55.000000Z","id":193}',
            ),
            45 => 
            array (
                'id' => 51,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:55',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":45,"kriteria_id":7,"kirteria_nilai_id":57,"nilai":"55","updated_at":"2023-07-09T08:13:55.000000Z","created_at":"2023-07-09T08:13:55.000000Z","id":194}',
            ),
            46 => 
            array (
                'id' => 52,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:55',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":45,"kriteria_id":8,"kirteria_nilai_id":62,"nilai":"48","updated_at":"2023-07-09T08:13:55.000000Z","created_at":"2023-07-09T08:13:55.000000Z","id":195}',
            ),
            47 => 
            array (
                'id' => 53,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:55',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nama":"HASBI ABDUL HUSAIN","kelas":"6A","import_id":21,"slug":"hasbi-abdul-husain","updated_at":"2023-07-09T08:13:55.000000Z","created_at":"2023-07-09T08:13:55.000000Z","id":46}',
            ),
            48 => 
            array (
                'id' => 54,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:55',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":46,"kriteria_id":5,"kirteria_nilai_id":49,"nilai":"87","updated_at":"2023-07-09T08:13:55.000000Z","created_at":"2023-07-09T08:13:55.000000Z","id":196}',
            ),
            49 => 
            array (
                'id' => 55,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":46,"kriteria_id":6,"kirteria_nilai_id":50,"nilai":"2","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":197}',
            ),
            50 => 
            array (
                'id' => 56,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":46,"kriteria_id":7,"kirteria_nilai_id":56,"nilai":"22","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":198}',
            ),
            51 => 
            array (
                'id' => 57,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":46,"kriteria_id":8,"kirteria_nilai_id":60,"nilai":"19","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":199}',
            ),
            52 => 
            array (
                'id' => 58,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nama":"ARSILA KHAIRUNNISA","kelas":"6A","import_id":21,"slug":"arsila-khairunnisa","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":47}',
            ),
            53 => 
            array (
                'id' => 59,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":47,"kriteria_id":5,"kirteria_nilai_id":46,"nilai":"27","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":200}',
            ),
            54 => 
            array (
                'id' => 60,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":47,"kriteria_id":6,"kirteria_nilai_id":53,"nilai":"69","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":201}',
            ),
            55 => 
            array (
                'id' => 61,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":47,"kriteria_id":7,"kirteria_nilai_id":56,"nilai":"27","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":202}',
            ),
            56 => 
            array (
                'id' => 62,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":47,"kriteria_id":8,"kirteria_nilai_id":63,"nilai":"78","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":203}',
            ),
            57 => 
            array (
                'id' => 63,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nama":"MUHAMMAD IMAN NURJAMAN","kelas":"6B","import_id":21,"slug":"muhammad-iman-nurjaman","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":48}',
            ),
            58 => 
            array (
                'id' => 64,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":48,"kriteria_id":5,"kirteria_nilai_id":46,"nilai":"39","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":204}',
            ),
            59 => 
            array (
                'id' => 65,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":48,"kriteria_id":6,"kirteria_nilai_id":54,"nilai":"83","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":205}',
            ),
            60 => 
            array (
                'id' => 66,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":48,"kriteria_id":7,"kirteria_nilai_id":57,"nilai":"43","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":206}',
            ),
            61 => 
            array (
                'id' => 67,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":48,"kriteria_id":8,"kirteria_nilai_id":61,"nilai":"22","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":207}',
            ),
            62 => 
            array (
                'id' => 68,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nama":"MUHAMMAD RAIHAN RAHMAN","kelas":"6C","import_id":21,"slug":"muhammad-raihan-rahman","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":49}',
            ),
            63 => 
            array (
                'id' => 69,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":49,"kriteria_id":5,"kirteria_nilai_id":45,"nilai":"20","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":208}',
            ),
            64 => 
            array (
                'id' => 70,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":49,"kriteria_id":6,"kirteria_nilai_id":53,"nilai":"63","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":209}',
            ),
            65 => 
            array (
                'id' => 71,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":49,"kriteria_id":7,"kirteria_nilai_id":56,"nilai":"35","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":210}',
            ),
            66 => 
            array (
                'id' => 72,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":49,"kriteria_id":8,"kirteria_nilai_id":63,"nilai":"76","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":211}',
            ),
            67 => 
            array (
                'id' => 73,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nama":"ADE MUNAWAR","kelas":"6A","import_id":21,"slug":"ade-munawar","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":50}',
            ),
            68 => 
            array (
                'id' => 74,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":50,"kriteria_id":5,"kirteria_nilai_id":47,"nilai":"54","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":212}',
            ),
            69 => 
            array (
                'id' => 75,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":50,"kriteria_id":6,"kirteria_nilai_id":50,"nilai":"8","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":213}',
            ),
            70 => 
            array (
                'id' => 76,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":50,"kriteria_id":7,"kirteria_nilai_id":59,"nilai":"81","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":214}',
            ),
            71 => 
            array (
                'id' => 77,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":50,"kriteria_id":8,"kirteria_nilai_id":61,"nilai":"40","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":215}',
            ),
            72 => 
            array (
                'id' => 78,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nama":"GUSAERI","kelas":"6A","import_id":21,"slug":"gusaeri","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":51}',
            ),
            73 => 
            array (
                'id' => 79,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":51,"kriteria_id":5,"kirteria_nilai_id":48,"nilai":"75","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":216}',
            ),
            74 => 
            array (
                'id' => 80,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":51,"kriteria_id":6,"kirteria_nilai_id":52,"nilai":"44","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":217}',
            ),
            75 => 
            array (
                'id' => 81,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":51,"kriteria_id":7,"kirteria_nilai_id":59,"nilai":"83","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":218}',
            ),
            76 => 
            array (
                'id' => 82,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":51,"kriteria_id":8,"kirteria_nilai_id":60,"nilai":"7","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":219}',
            ),
            77 => 
            array (
                'id' => 83,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nama":"M. FAISHAL","kelas":"6A","import_id":21,"slug":"m-faishal","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":52}',
            ),
            78 => 
            array (
                'id' => 84,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":52,"kriteria_id":5,"kirteria_nilai_id":47,"nilai":"51","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":220}',
            ),
            79 => 
            array (
                'id' => 85,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":52,"kriteria_id":6,"kirteria_nilai_id":50,"nilai":"11","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":221}',
            ),
            80 => 
            array (
                'id' => 86,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":52,"kriteria_id":7,"kirteria_nilai_id":55,"nilai":"8","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":222}',
            ),
            81 => 
            array (
                'id' => 87,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":52,"kriteria_id":8,"kirteria_nilai_id":64,"nilai":"85","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":223}',
            ),
            82 => 
            array (
                'id' => 88,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nama":"SOLEHUDIN","kelas":"6B","import_id":21,"slug":"solehudin","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":53}',
            ),
            83 => 
            array (
                'id' => 89,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":53,"kriteria_id":5,"kirteria_nilai_id":48,"nilai":"61","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":224}',
            ),
            84 => 
            array (
                'id' => 90,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":53,"kriteria_id":6,"kirteria_nilai_id":52,"nilai":"60","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":225}',
            ),
            85 => 
            array (
                'id' => 91,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":53,"kriteria_id":7,"kirteria_nilai_id":56,"nilai":"33","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":226}',
            ),
            86 => 
            array (
                'id' => 92,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":53,"kriteria_id":8,"kirteria_nilai_id":64,"nilai":"94","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":227}',
            ),
            87 => 
            array (
                'id' => 93,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nama":"RAMLAN HIDAYAT","kelas":"6C","import_id":21,"slug":"ramlan-hidayat","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":54}',
            ),
            88 => 
            array (
                'id' => 94,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":54,"kriteria_id":5,"kirteria_nilai_id":47,"nilai":"59","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":228}',
            ),
            89 => 
            array (
                'id' => 95,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":54,"kriteria_id":6,"kirteria_nilai_id":54,"nilai":"86","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":229}',
            ),
            90 => 
            array (
                'id' => 96,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":54,"kriteria_id":7,"kirteria_nilai_id":57,"nilai":"41","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":230}',
            ),
            91 => 
            array (
                'id' => 97,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":54,"kriteria_id":8,"kirteria_nilai_id":60,"nilai":"0","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":231}',
            ),
            92 => 
            array (
                'id' => 98,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nama":"AJENG KARTINI","kelas":"6B","import_id":21,"slug":"ajeng-kartini","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":55}',
            ),
            93 => 
            array (
                'id' => 99,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":55,"kriteria_id":5,"kirteria_nilai_id":45,"nilai":"1","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":232}',
            ),
            94 => 
            array (
                'id' => 100,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":55,"kriteria_id":6,"kirteria_nilai_id":53,"nilai":"66","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":233}',
            ),
            95 => 
            array (
                'id' => 101,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":55,"kriteria_id":7,"kirteria_nilai_id":57,"nilai":"43","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":234}',
            ),
            96 => 
            array (
                'id' => 102,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":55,"kriteria_id":8,"kirteria_nilai_id":64,"nilai":"82","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":235}',
            ),
            97 => 
            array (
                'id' => 103,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nama":"M. ILHAM FAISAL","kelas":"6C","import_id":21,"slug":"m-ilham-faisal","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":56}',
            ),
            98 => 
            array (
                'id' => 104,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":56,"kriteria_id":5,"kirteria_nilai_id":46,"nilai":"30","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":236}',
            ),
            99 => 
            array (
                'id' => 105,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":56,"kriteria_id":6,"kirteria_nilai_id":53,"nilai":"73","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":237}',
            ),
            100 => 
            array (
                'id' => 106,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":56,"kriteria_id":7,"kirteria_nilai_id":57,"nilai":"42","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":238}',
            ),
            101 => 
            array (
                'id' => 107,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":56,"kriteria_id":8,"kirteria_nilai_id":61,"nilai":"25","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":239}',
            ),
            102 => 
            array (
                'id' => 108,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nama":"THIA RAMADHANI AMIN","kelas":"6A","import_id":21,"slug":"thia-ramadhani-amin","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":57}',
            ),
            103 => 
            array (
                'id' => 109,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":57,"kriteria_id":5,"kirteria_nilai_id":48,"nilai":"73","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":240}',
            ),
            104 => 
            array (
                'id' => 110,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":57,"kriteria_id":6,"kirteria_nilai_id":52,"nilai":"52","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":241}',
            ),
            105 => 
            array (
                'id' => 111,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":57,"kriteria_id":7,"kirteria_nilai_id":58,"nilai":"63","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":242}',
            ),
            106 => 
            array (
                'id' => 112,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":57,"kriteria_id":8,"kirteria_nilai_id":61,"nilai":"30","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":243}',
            ),
            107 => 
            array (
                'id' => 113,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nama":"AGUSTIANI SRI RAHAYU","kelas":"6A","import_id":21,"slug":"agustiani-sri-rahayu","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":58}',
            ),
            108 => 
            array (
                'id' => 114,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":58,"kriteria_id":5,"kirteria_nilai_id":46,"nilai":"37","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":244}',
            ),
            109 => 
            array (
                'id' => 115,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":58,"kriteria_id":6,"kirteria_nilai_id":53,"nilai":"69","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":245}',
            ),
            110 => 
            array (
                'id' => 116,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":58,"kriteria_id":7,"kirteria_nilai_id":57,"nilai":"55","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":246}',
            ),
            111 => 
            array (
                'id' => 117,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":58,"kriteria_id":8,"kirteria_nilai_id":62,"nilai":"46","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":247}',
            ),
            112 => 
            array (
                'id' => 118,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nama":"Isep Lutpi Nur","kelas":"6A","import_id":21,"slug":"isep-lutpi-nur","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":59}',
            ),
            113 => 
            array (
                'id' => 119,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":59,"kriteria_id":5,"kirteria_nilai_id":48,"nilai":"73","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":248}',
            ),
            114 => 
            array (
                'id' => 120,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":59,"kriteria_id":6,"kirteria_nilai_id":51,"nilai":"32","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":249}',
            ),
            115 => 
            array (
                'id' => 121,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":59,"kriteria_id":7,"kirteria_nilai_id":59,"nilai":"83","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":250}',
            ),
            116 => 
            array (
                'id' => 122,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":59,"kriteria_id":8,"kirteria_nilai_id":63,"nilai":"67","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":251}',
            ),
            117 => 
            array (
                'id' => 123,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nama":"SILVIA ANGGRAENI","kelas":"6B","import_id":21,"slug":"silvia-anggraeni","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":60}',
            ),
            118 => 
            array (
                'id' => 124,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":60,"kriteria_id":5,"kirteria_nilai_id":49,"nilai":"95","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":252}',
            ),
            119 => 
            array (
                'id' => 125,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":60,"kriteria_id":6,"kirteria_nilai_id":51,"nilai":"25","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":253}',
            ),
            120 => 
            array (
                'id' => 126,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":60,"kriteria_id":7,"kirteria_nilai_id":56,"nilai":"27","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":254}',
            ),
            121 => 
            array (
                'id' => 127,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":60,"kriteria_id":8,"kirteria_nilai_id":64,"nilai":"94","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":255}',
            ),
            122 => 
            array (
                'id' => 128,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nama":"NASRIATUL HAMIDAH","kelas":"6B","import_id":21,"slug":"nasriatul-hamidah","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":61}',
            ),
            123 => 
            array (
                'id' => 129,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":61,"kriteria_id":5,"kirteria_nilai_id":47,"nilai":"42","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":256}',
            ),
            124 => 
            array (
                'id' => 130,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":61,"kriteria_id":6,"kirteria_nilai_id":54,"nilai":"97","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":257}',
            ),
            125 => 
            array (
                'id' => 131,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":61,"kriteria_id":7,"kirteria_nilai_id":55,"nilai":"20","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":258}',
            ),
            126 => 
            array (
                'id' => 132,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":61,"kriteria_id":8,"kirteria_nilai_id":62,"nilai":"60","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":259}',
            ),
            127 => 
            array (
                'id' => 133,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nama":"Faisal Akbar","kelas":"6C","import_id":21,"slug":"faisal-akbar","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":62}',
            ),
            128 => 
            array (
                'id' => 134,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":62,"kriteria_id":5,"kirteria_nilai_id":48,"nilai":"74","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":260}',
            ),
            129 => 
            array (
                'id' => 135,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":62,"kriteria_id":6,"kirteria_nilai_id":54,"nilai":"93","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":261}',
            ),
            130 => 
            array (
                'id' => 136,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":62,"kriteria_id":7,"kirteria_nilai_id":56,"nilai":"32","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":262}',
            ),
            131 => 
            array (
                'id' => 137,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":62,"kriteria_id":8,"kirteria_nilai_id":61,"nilai":"27","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":263}',
            ),
            132 => 
            array (
                'id' => 138,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nama":"MUHAMMAD CAHYADI","kelas":"6A","import_id":21,"slug":"muhammad-cahyadi","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":63}',
            ),
            133 => 
            array (
                'id' => 139,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":63,"kriteria_id":5,"kirteria_nilai_id":45,"nilai":"9","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":264}',
            ),
            134 => 
            array (
                'id' => 140,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":63,"kriteria_id":6,"kirteria_nilai_id":50,"nilai":"8","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":265}',
            ),
            135 => 
            array (
                'id' => 141,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":63,"kriteria_id":7,"kirteria_nilai_id":55,"nilai":"19","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":266}',
            ),
            136 => 
            array (
                'id' => 142,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":63,"kriteria_id":8,"kirteria_nilai_id":61,"nilai":"25","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":267}',
            ),
            137 => 
            array (
                'id' => 143,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nama":"ENCEP ABDUL HAKIM","kelas":"6A","import_id":21,"slug":"encep-abdul-hakim","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":64}',
            ),
            138 => 
            array (
                'id' => 144,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":64,"kriteria_id":5,"kirteria_nilai_id":48,"nilai":"74","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":268}',
            ),
            139 => 
            array (
                'id' => 145,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":64,"kriteria_id":6,"kirteria_nilai_id":53,"nilai":"76","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":269}',
            ),
            140 => 
            array (
                'id' => 146,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":64,"kriteria_id":7,"kirteria_nilai_id":55,"nilai":"7","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":270}',
            ),
            141 => 
            array (
                'id' => 147,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":64,"kriteria_id":8,"kirteria_nilai_id":62,"nilai":"44","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":271}',
            ),
            142 => 
            array (
                'id' => 148,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nama":"NU\\u2019MAN BASIR","kelas":"6A","import_id":21,"slug":"nu-man-basir","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":65}',
            ),
            143 => 
            array (
                'id' => 149,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":65,"kriteria_id":5,"kirteria_nilai_id":46,"nilai":"34","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":272}',
            ),
            144 => 
            array (
                'id' => 150,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":65,"kriteria_id":6,"kirteria_nilai_id":50,"nilai":"15","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":273}',
            ),
            145 => 
            array (
                'id' => 151,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":65,"kriteria_id":7,"kirteria_nilai_id":57,"nilai":"53","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":274}',
            ),
            146 => 
            array (
                'id' => 152,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":65,"kriteria_id":8,"kirteria_nilai_id":60,"nilai":"16","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":275}',
            ),
            147 => 
            array (
                'id' => 153,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nama":"DEWI","kelas":"6B","import_id":21,"slug":"dewi","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":66}',
            ),
            148 => 
            array (
                'id' => 154,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":66,"kriteria_id":5,"kirteria_nilai_id":45,"nilai":"8","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":276}',
            ),
            149 => 
            array (
                'id' => 155,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":66,"kriteria_id":6,"kirteria_nilai_id":53,"nilai":"70","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":277}',
            ),
            150 => 
            array (
                'id' => 156,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":66,"kriteria_id":7,"kirteria_nilai_id":55,"nilai":"3","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":278}',
            ),
            151 => 
            array (
                'id' => 157,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":66,"kriteria_id":8,"kirteria_nilai_id":64,"nilai":"89","updated_at":"2023-07-09T08:13:56.000000Z","created_at":"2023-07-09T08:13:56.000000Z","id":279}',
            ),
            152 => 
            array (
                'id' => 158,
                'user_id' => 1,
                'log_date' => '2023-07-09 15:13:56',
                'table_name' => 'import_alternatif',
                'log_type' => 'edit',
                'data' => '{"nama":"Data siswa teladan","slug":"data-siswa-teladan","updated_at":"2023-07-09 15:13:55","created_at":"2023-07-09 15:13:55","id":21}',
            ),
        ));
        
        
    }
}