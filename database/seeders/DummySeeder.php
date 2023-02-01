<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DummySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            [
                'id' => 1,
                'title' => 'Pembelajaran Berbasis Proyek',
                'author' => 'Dr. Ir. H. Misbahul Munir, M.Pd',
                'publisher' => 'PT. RajaGrafindo Persada',
                'year' => '2017',
                'edition' => '1',
                'quantity' => '20',
                'category' => 'Pendidikan',
                'cover' => 'https://deepublishstore.com/wp-content/uploads/2018/11/Model-Pembelajaran-Berbasis-Proyek-PBP-Yanti-rev-1.0-Convert-depan.jpg',
            ],
            [
                'id' => 2,
                'title' => 'Efektif Mengajar Matematika',
                'author' => 'Dr. Ir. H. Misbahul Munir, M.Pd',
                'publisher' => 'PT. RajaGrafindo Persada',
                'year' => '2018',
                'edition' => '2',
                'quantity' => '15',
                'category' => 'Pendidikan',
                'cover' => 'https://deepublishstore.com/wp-content/uploads/2022/07/Matematika-Kejuruan_Ai-Tusi-Fatimah-70gr-depan.jpg',
            ],
            [
                'id' => 3,
                'title' => 'Manajemen Pendidikan',
                'author' => 'Dr. Ir. H. Misbahul Munir, M.Pd',
                'publisher' => 'PT. RajaGrafindo Persada',
                'year' => '2019',
                'edition' => '3',
                'quantity' => '30',
                'category' => 'Pendidikan',
                'cover' => 'https://cvalfabeta.com/wp-content/uploads/2019/07/Manajemen-Pendidikan-UPI.jpg',
            ],
            [
                'id' => 4,
                'title' => 'Komik Detektif Conan',
                'author' => 'Gosho Aoyama',
                'publisher' => 'Elex Media Komputindo',
                'year' => '2020',
                'edition' => '1',
                'quantity' => '10',
                'category' => 'Fiksi',
                'cover' => 'https://www.bukukita.com/babacms/displaybuku/106261_f.jpg',
            ],
            [
                'id' => 5,
                'title' => 'Komik One Piece',
                'author' => 'Eiichiro Oda',
                'publisher' => 'Elex Media Komputindo',
                'year' => '2021',
                'edition' => '2',
                'quantity' => '5',
                'category' => 'Fiksi',
                'cover' => 'https://64.media.tumblr.com/0591b3f4e8fed335169da6a935a78de9/tumblr_p49vds8piE1wk3fd7o1_640.jpg',
            ],
        ]);

        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'Admin',
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('admin'),
                'nik' => '1234567890123456',
                'no_hp' => '081234567890',
                'role' => 'admin',
                'alamat' => 'Jl. Admin',
                'foto_profil' => 'https://zuramai.github.io/mazer/demo/assets/images/faces/1.jpg',
            ]
        ]);

        DB::table('collections')->insert([
            [
                'id' => 1,
                'user_id' => 1,
                'book_id' => 4,
                'is_returned' => false,
                'borrowed_at' => '2023-01-20',
                'returned_at' => '2023-02-27',
            ],
            [
                'id' => 2,
                'user_id' => 1,
                'book_id' => 5,
                'is_returned' => true,
                'borrowed_at' => '2021-05-01',
                'returned_at' => '2021-05-08',
            ],
            [
                'id' => 3,
                'user_id' => 1,
                'book_id' => 4,
                'is_returned' => false,
                'borrowed_at' => '2023-01-20',
                'returned_at' => '2023-01-22',
            ],
        ]);
    }
}
