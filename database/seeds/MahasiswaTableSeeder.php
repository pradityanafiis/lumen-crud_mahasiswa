<?php

use Illuminate\Database\Seeder;

class MahasiswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mahasiswas = [
            ['nrp' => '2103181031', 'nama' => 'Jasica Ardana Herviyandasari', 'alamat' => 'Madiun', 'foto' => '2103181031.jpg'],
            ['nrp' => '2103181032', 'nama' => 'Praditya Nafiis Muhammad', 'alamat' => 'Bogor', 'foto' => '2103181032.JPG'],
            ['nrp' => '2103181033', 'nama' => 'Bimo Prasetyo Afif', 'alamat' => 'Sidoarjo', 'foto' => '2103181033.jpg'],
            ['nrp' => '2103181034', 'nama' => 'Septian Tri Wahyuni', 'alamat' => 'Mojokerto', 'foto' => '2103181034.jpg'],
            ['nrp' => '2103181035', 'nama' => 'Muhammad Rivaldin', 'alamat' => 'Lamongan', 'foto' => '2103181035.jpg'],
            ['nrp' => '2103181036', 'nama' => 'Rinda Cahya Nahdliana', 'alamat' => 'Jombang', 'foto' => '2103181036.jpg'],
            ['nrp' => '2103181037', 'nama' => 'Nadia Ayu Laksmidewi', 'alamat' => 'Sidoarjo', 'foto' => '2103181037.jpg'],
            ['nrp' => '2103181038', 'nama' => 'Zazabillah Sekar Puranti', 'alamat' => 'Sidoarjo', 'foto' => '2103181038.png'],
            ['nrp' => '2103181039', 'nama' => 'Laily Febian Fitriani', 'alamat' => 'Tulungagung', 'foto' => '2103181039.jpg'],
            ['nrp' => '2103181040', 'nama' => 'Silfiana Nur Hamida', 'alamat' => 'Bangkalan', 'foto' => '2103181040.png'],
            ['nrp' => '2103181042', 'nama' => 'Muhammad Irvan Yanuar', 'alamat' => 'Mojokerto', 'foto' => '2103181042.jpg'],
            ['nrp' => '2103181043', 'nama' => 'Danindra Ihya Maulalhaq', 'alamat' => 'Sidoarjo', 'foto' => '2103181043.jpg'],
            ['nrp' => '2103181044', 'nama' => 'Affan Abiyyu', 'alamat' => 'Surabaya', 'foto' => '2103181044.jpg'],
            ['nrp' => '2103181045', 'nama' => 'Rosyidah Amini Suci', 'alamat' => 'Surabaya', 'foto' => '2103181045.jpg'],
            ['nrp' => '2103181046', 'nama' => 'Nadia Azahro Choirunisa', 'alamat' => 'Magetan', 'foto' => '2103181046.jpg'],
            ['nrp' => '2103181047', 'nama' => 'Ahmad Faiz Kamaludin', 'alamat' => 'Nganjuk', 'foto' => '2103181047.jpg'],
            ['nrp' => '2103181048', 'nama' => 'Luri Shafira Amalia', 'alamat' => 'Surabaya', 'foto' => '2103181048.jpg'],
            ['nrp' => '2103181049', 'nama' => 'Irvan Eksa Mahendra', 'alamat' => 'Magetan', 'foto' => '2103181049.jpg'],
            ['nrp' => '2103181050', 'nama' => 'Anwar Yusuf Al Bastomi', 'alamat' => 'Surabaya', 'foto' => '2103181050.png'],
        ];

        foreach ($mahasiswas as $mahasiswa) {
            \App\Mahasiswa::create($mahasiswa);
        }
    }
}
