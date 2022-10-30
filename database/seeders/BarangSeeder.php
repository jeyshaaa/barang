<?php

namespace Database\Seeders;

use App\Models\barang as ModelsBarang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       ModelsBarang::insert(
            [
                [
                    'namaBarang' => 'Soft Rib Cardi',
                    'fotoBarang' => 'f1.jpeg',
                    'harga' => '78000',
                    'stok' => '200',
                    'ukuran' => 'S, M, L,',
                    'reviewBarang' => '100% bahan soft rib, bahan eksklusif yang halus dan terasa nyaman di kulit. 
                    Bahannya strech terasa ringan di badan dan terasa adem saat digunakan.',
                ],
                [
                    'namaBarang' => 'Sepatu Sneakers Wanita Fashion Import',
                    'fotoBarang' => 'f2.jpeg',
                    'harga' => '169000',
                    'stok' => '100',
                    'ukuran' => '37, 38, 39, 40',
                    'reviewBarang' => 'Design Terbaru Sneaker Wanita. 100% dengan kualitas terjamin, bahan kulit sintetis PU
                    [PERHATIAN] Jangan Salah Memilih Size. untuk kaki yang lebar rekomendasi 1 ukuran lebih besar atau lebih aman pilih
                    1 ukuran lebih besar.',
                ],
                [
                    'namaBarang' => 'Jam Tangan Kulit Wanita Sofia Cherry Pearl Watches',
                    'fotoBarang' => 'f7.jpeg',
                    'harga' => '139000',
                    'stok' => '300',
                    'ukuran' => 'hitam, putih',
                    'reviewBarang' => 'Women Accessories, berdiameter 1,8cm. panjang 22cm. bahan tali Synthetic Leater.
                    Gaya Klasik dapat membuat Anda menjadi pribadi yang menawan serta waterproof jadi aman untuk digunakan sehari-hari',
                ],
                [
                    'namaBarang' => 'Parfume Wanita Eternal Faith Lady',
                    'fotoBarang' => 'f8.jpeg',
                    'harga' => '89900',
                    'stok' => '200',
                    'ukuran' => '50mL, 100mL',
                    'reviewBarang' => 'Kemasan TERBARU!!! Eternal Faith Perfume Wanita yang mengundang wanita untuk hidup di saat ini 
                    dan untuk mengekspresikan kegembiraan dan pikiran mereka. Ini sensual dan klasik untuk Anda kenakan. Aroma buah-buahan segar dan bersih, Lembut dan Intelektual, Tahan lama selama 6-8 jam.',
                ],
                [
                    'namaBarang' => 'Totebag Magnet Button Series Beige',
                    'fotoBarang' => 'n1.jpeg',
                    'harga' => '144900',
                    'stok' => '500',
                    'ukuran' => 'Besar, Kecil,',
                    'reviewBarang' => 'Tas yang ringan namun muat banyak dan menjadi favorit semua orang. Dibuat dengan bahan kulit sintetis
                    dengan texture yang sangat lembut, handling ringan dan lembut serta dilengkapi dengan magnet button premium dibagian kompartemen utama, tidak kasar, dan 
                    sangat lembut juga dilengkapi kantong dibagian dalam tas.',
                ],
                [
                    'namaBarang' => 'Gio Saverino Flatshoes Wanita',
                    'fotoBarang' => 'n6.jpeg',
                    'harga' => '183000',
                    'stok' => '50',
                    'ukuran' => '37, 38, 39, 40',
                    'reviewBarang' => 'Untuk kalian pecinta tampilan yang formal dan elegan, Gio Saverino Flatshoes 
                    hadir dengan Design yang sangat kekinian ditambah dengan aksen Aksesoris tali lalu bagian upper glossy
                    sehingga tampak kilap, selain itu bahannya juga waterproof dan mudah dibersihkan. ',
                ],
            ]
        );
    }
}
