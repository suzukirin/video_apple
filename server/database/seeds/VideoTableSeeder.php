<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VideoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // DB::table('videos')->insert([
        //     'name' => 'オソリオ タイチ',
        //     'description' => 'メディア出演も多数のベテラン歌手｡ペルー民謡からj-popまで幅広く対応可能｡',
        //     'price' => 5000,
        //     'email' => 'osori@example.com',
        //     'image_url' => 'https://cdn.pixabay.com/photo/2016/02/19/11/36/microphone-1209816_1280.jpg',
        //     'note' => 'オンライン講座可能',
        //     'pr_short' => 'あなたの秘めた才能を一緒に開花させましょう！ ',
        //     'pr_long' => '初心者の方でも安心のレッスン内容！ご要望やレベルにあわせたレッスンを進めながら、講師が丁寧にアドバイス♪',
        //     'category' =>'初心者向け'
        // ]);
        // # paramに配列を代入
        // $param = [
        //     [
        //         'name' => '穂山 敬太郎',
        //         'description' => 'ホーやんの相性で女性人気沸騰中の穂山の個別指導。楽曲制作でも有数の実績を持つ！',
        //         'price' => 8000,
        //         'email' => 'hoyama@example.com',
        //         'image_url' => 'https://cdn.pixabay.com/photo/2016/09/10/11/11/musician-1658887__340.jpg',
        //         'note' => 'オンライン講座可能',
        //         'pr_short' => 'あなたの秘めた才能を一緒に開花させましょう！',
        //         'pr_long' => '初心者の方でも安心のレッスン内容！ご要望やレベルにあわせたレッスンを進めながら、講師が丁寧にアドバイス♪',
        //         'category' =>'中級者向け'
        //     ],
        //     [
        //         'name' => 'AKIRA',
        //         'description' => 'ボーカル歴は小学生時代から｡数々の地方カラオケ大会で準優勝の豪腕トレーナー！',
        //         'price' => 1000,
        //         'email' => 'akira@example.com',
        //         'image_url' => 'https://cdn.pixabay.com/photo/2016/06/21/08/40/prairie-dog-1470659_1280.jpg',
        //         'note' => 'オンライン講座可能',
        //         'pr_short' => 'あなたの秘めた才能を一緒に開花させましょう！',
        //         'pr_long' => '初心者の方でも安心のレッスン内容！ご要望やレベルにあわせたレッスンを進めながら、講師が丁寧にアドバイス♪',
        //         'category' =>'上級者向け'
                
        //     ],
        //     [
        //         'name' => '金野 利哉',
        //         'description' => '独自のメソッドで数々の大物歌手を排出｡公私ともに順調トレーナー！',
        //         'price' => 6000,
        //         'email' => 'konno@example.com',
        //         'image_url' => 'https://cdn.pixabay.com/photo/2017/08/01/14/51/concert-2566002_1280.jpg',
        //         'note' => 'オンライン講座可能',
        //         'pr_short' => 'あなたの秘めた才能を一緒に開花させましょう！',
        //         'pr_long' => '初心者の方でも安心のレッスン内容！ご要望やレベルにあわせたレッスンを進めながら、講師が丁寧にアドバイス♪',
        //         'category' =>'キッズ向け'
        //     ],
        //     [
        //         'name' => '立川 達也',
        //         'description' => '2歳からTV出演｡今は八幡平市でのんびり暮らすあの大物トレーナーが音楽業界に帰ってきた！',
        //         'price' => 9000,
        //         'email' => 'tatikawa@example.com',
        //         'image_url' => 'https://cdn.pixabay.com/photo/2017/06/26/02/47/people-2442565__480.jpg',
        //         'note' => 'オンライン講座可能',
        //         'pr_short' => 'あなたの秘めた才能を一緒に開花させましょう！',
        //         'pr_long' => '初心者の方でも安心のレッスン内容！ご要望やレベルにあわせたレッスンを進めながら、講師が丁寧にアドバイス♪',
        //         'category' =>'女性向け'
        //         ]
        //     ];
        //     # DB::table->insertでレコードの登録
        //     DB::table('videos')->insert($param);
            factory(App\Video::class, 30)->create();
        }
}
