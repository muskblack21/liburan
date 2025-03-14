<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;
use Carbon\Carbon;

class AbsurdBooksSeeder extends Seeder
{
    public function run() : void
    {
        Book::create([
            'title' => 'Kucing Terbang Mencuri Pizza',
            'description' => 'Sebuah kisah kucing terbang yang mencuri pizza secara misterius.',
            'content' => 'Di suatu malam yang dingin, seekor kucing terbang muncul dengan sayap aneh dan mencuri sepotong pizza panas. Petualangan absurd ini membuat penghuni rumah tertawa terpingkal karena pizza yang hilang itu ternyata menyimpan rahasia semesta.',
            'author' => 'Si Pencuri Kucing',
            'cover_image' => null,
            'published_at' => Carbon::now(),
        ]);

        Book::create([
            'title' => 'Donat Kosong Berisi Rahasia Kosmis',
            'description' => 'Donat tampak biasa, namun menyimpan rahasia alam semesta.',
            'content' => 'Donat yang tampak polos ini menyimpan lubang misterius yang ternyata merupakan portal ke dimensi lain. Setiap gigitan membuka jendela ke dunia rahasia, di mana bumbu-bumbu kosmis tercampur dengan rasa manis yang tak terduga.',
            'author' => 'Bolong Mystik',
            'cover_image' => null,
            'published_at' => Carbon::now(),
        ]);

        Book::create([
            'title' => 'Kentang Berdansa di Bawah Bulan',
            'description' => 'Kentang yang menari di malam hari dengan irama ajaib.',
            'content' => 'Di bawah sinar rembulan, sekelompok kentang tiba-tiba mulai berdansa. Gerakan mereka begitu aneh dan menggelitik sehingga membuat seluruh pekarangan bergemuruh dengan tawa. Tarian kentang ini menjadi legenda yang membuat malam menjadi penuh keajaiban.',
            'author' => 'Sang Penari Ajaib',
            'cover_image' => null,
            'published_at' => Carbon::now(),
        ]);

        Book::create([
            'title' => 'Mie Instan Menuju Galaksi',
            'description' => 'Mie instan yang mengembara ke galaksi mencari bumbu rahasia.',
            'content' => 'Dalam semangkuk mie instan, terselip kekuatan ajaib yang membawa pemakainya ke perjalanan antar bintang. Mie ini meluncur ke galaksi, mencari bumbu yang mampu mengubah rasa dunia, dan setiap suapan membawa petualangan yang penuh keanehan dan tawa.',
            'author' => 'Astronot Rasa',
            'cover_image' => null,
            'published_at' => Carbon::now(),
        ]);

        Book::create([
            'title' => 'Buku Panduan Menjadi Naga Kecil',
            'description' => 'Panduan absurd untuk yang ingin menjadi naga mini yang berkabut di pagi hari.',
            'content' => 'Buku ini mengajarkan cara-cara unik untuk mengeluarkan api mini, terbang dengan gaya, dan bahkan berbisik pada awan. Sebuah panduan bagi mereka yang ingin merasakan kekuatan naga kecil, penuh dengan tips yang tak terduga dan lucu.',
            'author' => 'Si Pecundang Terbang',
            'cover_image' => null,
            'published_at' => Carbon::now(),
        ]);

        Book::create([
            'title' => 'Bantal Bicara dan Cerita Malam',
            'description' => 'Bantal yang bisa bercerita tentang mimpi-mimpi absurd setiap malam.',
            'content' => 'Setiap malam, bantal ini bercerita tentang petualangan di dunia mimpi yang aneh—dari beradu argumen dengan boneka hingga menari bersama lampu tidur. Cerita-cerita bantal ini membuat malam semakin hangat dan penuh tawa, seolah-olah mimpi itu nyata.',
            'author' => 'Sang Penenang Malam',
            'cover_image' => null,
            'published_at' => Carbon::now(),
        ]);

        Book::create([
            'title' => 'Jam Dinding dengan Kepribadian',
            'description' => 'Jam dinding yang tiba-tiba bisa berbicara dan mengungkap rahasia waktu.',
            'content' => 'Di ruang tamu yang sepi, jam dinding mulai bercerita tentang waktu—mulai dari detik pertama hingga rahasia malam yang tersembunyi. Kepribadian jam ini membuat setiap detik terasa penuh makna dan membuat pendengarnya terpesona dengan kisah-kisah waktu yang absurd.',
            'author' => 'Detik Ajaib',
            'cover_image' => null,
            'published_at' => Carbon::now(),
        ]);

        Book::create([
            'title' => 'Sepatu Berlari ke Masa Depan',
            'description' => 'Sepatu ajaib yang membawa pemiliknya melesat ke masa depan penuh kejutan.',
            'content' => 'Sepatu ini bukanlah sepatu biasa. Dengan kekuatan magis, sepatu tersebut membawa pemiliknya berlari ke masa depan yang penuh dengan inovasi dan kekonyolan. Setiap langkah mengungkapkan dunia baru yang absurd dan mengundang tawa tak terkira.',
            'author' => 'Langkah Maut',
            'cover_image' => null,
            'published_at' => Carbon::now(),
        ]);

        Book::create([
            'title' => "Jum'at Pulang Jam Setengah2",
            'description' => 'Kisah lucu tentang petualangan pulang pada hari Jumat dengan waktu yang unik.',
            'content' => "Di tengah keramaian kota, seseorang mengalami keanehan saat harus pulang tepat jam setengah dua. Cerita absurd ini dipenuhi dengan momen-momen lucu dan keajaiban waktu yang membuat hari Jumat terasa penuh misteri dan tawa.",
            'author' => 'Bonnie Cinta Skomda',
            'cover_image' => null,
            'published_at' => Carbon::now(),
        ]);
    }
}
