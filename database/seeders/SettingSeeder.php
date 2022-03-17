<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Setting;
use Faker\Factory as Faker;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        Setting::create([
            'mobile_image' => 'https://cdn.statically.io/img/i.pinimg.com/originals/6b/d1/d8/6bd1d8c396f9e249a48b6eb15b78c664.jpg',
            'title' => 'Bizim Production - biznesiniz üçün foto və video məzmunu yaradın',
            'about' => '<font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Production, Ukraynanın en büyük prodüksiyonudur ve
                                özellikle e-ticaret çekimleri için yaratılmıştır. </font>
                            <font style="vertical-align: inherit;">8 yıldır ua (eski
                                adıyla modna) ve diğer markalar için fotoğraf ve video
                                içeriği üretiyoruz. </font>
                            <font style="vertical-align: inherit;">Uzmanlığımız, reklamcılık ve
                                sosyal ağlar için katalog fotoğrafçılığı, arama kitapları ve her
                                türlü karmaşıklık içeriğidir.</font>
                        </font><br><br>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">
                                Ekibimiz sürekli olarak 22 fotoğrafçı ve stilist, 3 makyöz, 10
                                rötuşcu ve 40-tan fazla model istihdam etmektedir. </font>
                        </font><br><br>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Bir günde ortalama 1.500
                                fotoğrafa rötuş yapıp 2.500 ürün tanımlıyoruz. </font>
                            <font style="vertical-align: inherit;">Çevrimiçi mağazalar için
                                katalog fotoğrafçılığı, moda markaları için arama kitapları,
                                reklam ve sosyal ağlar için dış mekan ve stüdyo fotoğrafçılığı
                                hakkında her şeyi biliyoruz.</font>
                        </font><br>',
            'about_image' => 'https://images.unsplash.com/photo-1525127752301-99b0b6379811?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80',
            'phone' => '+38 888 999 88 99',
            'whatsapp' => '+38 888 989 89 98',
            'email' => 'example@gmail.com',
            'address' => $faker->address,
            'facebook' => 'https://www.facebook.com/',
            'instagram' => 'https://www.instagram.com/',
            'model_title' => 'Bir mankeni nerede arayacağınızı bilmiyor musunuz? Biz zaten sizin için yaptık!
                                            Veritabanımızda özenle seçilmiş 30-dan fazla model (erkek, kız ve çocuk)
                                            bulunmaktadır. En yüksek sınıfın kanıtlanmış bir moda modelini seçmenize
                                            yardımcı olacağız. Kimse gelmedi mi? Online bir döküm yapacağız. Model seçin',
            'model_image' => 'https://static.tildacdn.com/tild6264-3530-4565-b764-613364313135/IMG_4295.jpg',
            'our_team_title' => 'Ən bacarıqlı peşəkarlar, ən yaxşı xidməti göstərmək və müştərilərimizi sevindirmək. üçün hər gün işləyir',
            'partners_title' => 'Əgər bizim tərəfdaşımız olmaq istəyirsinizsə, bizə yazın.',
        ]);
    }
}
