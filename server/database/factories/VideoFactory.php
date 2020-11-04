<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Video;
use Faker\Generator as Faker;

$factory->define(Video::class, function (Faker $faker) {
    $name = $faker->word();
    $genre = ['j-pop','洋楽','邦楽Rock','アニソン','EDM','K-pop','ジャズ','クラシック','レゲエ','R&B','ヒップホップ','演歌'];
    $level = ['初心者向け', '中級者向け', '上級者向け'];
    
    return [
        'name' =>$name,
        'genre' => $genre[array_rand($genre)],
        'level' => $level[array_rand($level)],
        // 'note' => 'オンライン講座' , '現金でのお支払いは出来ません。',
        // 'image_path' =>'storage/video_image/' . rand(1, 17) . '.jpg',
        // 'pr_short' => 'あなたの秘めた才能を一緒に開花させましょう！',
        // 'pr_long' => '初心者の方でも安心のレッスン内容！ご要望やレベルにあわせたレッスンを進めながら、講師が丁寧にアドバイス♪',
    ];
});
