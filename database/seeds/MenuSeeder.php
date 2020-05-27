<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();
        DB::table('menus')->insert([
                ['title' => '首页', 'parentId' => 0, 'path' => '0', 'url' => '/', 'view' => '{"pageList": null, "pageView": "index.blade.php"}', 'type' => 0, 'extra' => '[]', 'created_id' => 1, 'created_at' => $now, 'updated_at' => $now],
                ['title' => '关于我们', 'parentId' => 0, 'path' => '0', 'url' => '/about', 'view' => '{"pageList": null, "pageView": "about.blade.php"}', 'type' => 1, 'extra' => '[]', 'created_id' => 1, 'created_at' => $now, 'updated_at' => $now],
                ['title' => '产品中心', 'parentId' => 0, 'path' => '0', 'url' => '/product/list', 'view' => '{"pageList": "product.blade.php", "pageView": "productView.blade.php"}', 'type' => 2, 'extra' => '[]', 'created_id' => 1, 'created_at' => $now, 'updated_at' => $now],
                ['title' => '测试类目', 'parentId' => 3, 'path' => '0-3', 'url' => '/productlist', 'view' => '{"pageList": "product.blade.php", "pageView": "productView.blade.php"}', 'type' => 2, 'extra' => '[]', 'created_id' => 1, 'created_at' => $now, 'updated_at' => $now],
                ['title' => '荣誉资质', 'parentId' => 0, 'path' => '0', 'url' => '/honor', 'view' => '{"pageList": null, "pageView": "honor.blade.php"}', 'type' => 1, 'extra' => '[]', 'created_id' => 1, 'created_at' => $now, 'updated_at' => $now],
                ['title' => '新闻资讯', 'parentId' => 0, 'path' => '0', 'url' => '/news/list', 'view' => '{"pageList": "news.blade.php", "pageView": "newsView.blade.php"}', 'type' => 2, 'extra' => '[]', 'created_id' => 1, 'created_at' => $now, 'updated_at' => $now],
                ['title' => '公司新闻', 'parentId' => 6, 'path' => '0', 'url' => '/news/list', 'view' => '{"pageList": "news.blade.php", "pageView": "newsView.blade.php"}', 'type' => 2, 'extra' => '[]', 'created_id' => 1, 'created_at' => $now, 'updated_at' => $now],
                ['title' => '行业新闻', 'parentId' => 6, 'path' => '0', 'url' => '/news/list', 'view' => '{"pageList": "news.blade.php", "pageView": "newsView.blade.php"}', 'type' => 2, 'extra' => '[]', 'created_id' => 1, 'created_at' => $now, 'updated_at' => $now],
                ['title' => '联系我们', 'parentId' => 0, 'path' => '0', 'url' => '/contact', 'view' => '{"pageList": null, "pageView": "contact.blade.php"}', 'type' => 1, 'extra' => '[]', 'created_id' => 1, 'created_at' => $now, 'updated_at' => $now],
            ]
        );
    }
}
