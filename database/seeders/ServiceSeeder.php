<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;
use Str;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prices = '{
                    "35 || 300 şəkil": "0.55 AZN / 1 şəkil",
                    "300 || 1000 şəkil": "0.50 AZN / 1 şəkil",
                    "1000 < şəkil": "0.45 AZN / 1 şəkil"
                    }';
        $included_in_cost = '{
                    "0" : "Çekim için eşyaların hazırlanması",
                    "1" : "Profesyonel fotoğraf"
                    }';
        $names = [
            'Съемка 360',  
            'Промо-видео',  
        ];
        $main_descriptions = [
            'Панорамная съемка на белом фоне',
            'Услуги видеосъемки для брендов и компаний.',
        ];
        $main_images = [
            'https://static.tildacdn.com/tild3161-3663-4439-b766-363337663565/20.gif',  
            'https://static.tildacdn.com/tild6234-3632-4433-a435-373065343235/gif-site-3.gif',  
        ];
        $bg_images = [
            'https://static.tildacdn.com/tild6363-3436-4962-b634-653162613034/10.gif',
            'https://static.tildacdn.com/tild6234-3632-4433-a435-373065343235/gif-site-3.gif',
        ];
        $desription = 'Каталожная съемка – это действенный маркетинговый инструмент, который позволит презентовать одежду, обувь и аксессуары в лучшем виде. Эффектные фотографии товаров, сделанные в оборудованной студии, формируют объективное представление о товаре и повышают лояльность потенциальных покупателей. <br><br> Каталожная фотосъемка имеет следующие особенности: <br><ul><li>нейтральный фон (белый или серый);</li><li>унифицированные ракурсы;</li><li>освещение, выгодно подчеркивающее детали объекта.</li></ul> Съемка для каталогов одежды предполагает создание единого стиля контента, особенно если дело касается коллекции товаров. Задача изображений – выгодно подчеркнуть его лучшие стороны. <br> Фотосъемка для интернет-магазина должна сочетать красоту и правдивость, ведь покупатель хочет получать реальную информацию о товарах. Большое значение имеет и подбор моделей, поскольку клиент невольно ассоциирует себя с человеком на снимке. Высокое разрешение фото необходимо, чтобы пользоваться увеличительным скриптом «лупа». <br><br> Справиться с поставленными задачами в «полевых» условиях практически невозможно, поэтому стоит обратиться за помощью к специалистам.<br>';
                                   
        Service::create([
            'name' => 'Sosyal medya için çekim',
            'images_exists' => true,
            'slug' => 'sosyal-medya-icin-cekim',
            'main_description' => 'Markalar için sosyal ağlarda kullanım amaçlarına yönelik çekim malzemeleri.',
            'main_image' => 'https://thumb.tildacdn.com/tild3236-3364-4531-b663-623466303762/-/cover/360x340/center/center/-/format/webp/DSC02654.JPG',
            'bg_image' => 'https://static.tildacdn.com/tild3737-6335-4831-a536-303964356266/DSC03290.JPG',
            'description' => $desription,
            'questions' => '[1, 2, 3]',
            'prices' => $prices,
            'included_in_cost' => $included_in_cost,
        ]);
        
        foreach ($names as $i => $name) {
            $images_exists = false;
            $video_exists = false;
            
            if ($i == 0) {
                $images_exists = true;
            } elseif($i == 1) {
                $video_exists = true;
            }
            Service::create([
                'images_exists' => $images_exists,
                'videos_exists' => $video_exists,
                'name' => $name,
                'slug' => Str::slug($name),
                'main_description' => $main_descriptions[$i],
                'main_image' => $main_images[$i],
                'bg_image' => $bg_images[$i],
                'description' => $desription,
                'questions' => '[1, 2, 3]',
                'prices' => $prices,
                'included_in_cost' => $included_in_cost,
            ]);
        }
    }
}
