<?php
use App\article;
use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $article = Faker\Factory::create();
        for ($i = 0; $i < 5; $i++) {
            article::insert([
                'title' =>$article->realText(255),
                'title_slug' =>$article->realText(255),
                'description' =>$article->realText(),
                'content' =>$article->randomHtml()
            ]);
        }
    }
}
