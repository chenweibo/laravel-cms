<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ComponentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();
        DB::table('components')->insert(
            [
                ['title' => '关键词', 'notes' => '', 'belong' => '0', 'sort' => 99, 'detail' => '{"title":"SEO关键词","label":"keywords","type":"input","value":"","size":{},"range":"global"}', 'created_at' => $now, 'updated_at' => $now],
                ['title' => '描述', 'notes' => '', 'belong' => '0', 'sort' => 99, 'detail' => '{"title":"SEO描述","label":"description","type":"input","value":"","size":{},"range":"global"}', 'created_at' => $now, 'updated_at' => $now],
                ['title' => '缩略图', 'notes' => '', 'belong' => '1', 'sort' => 99, 'detail' => '{"title":"缩略图","label":"thumbnail","type":"OneImgupload","value":"","size":{},"range":"global"}', 'created_at' => $now, 'updated_at' => $now],
                ['title' => '多图上传', 'notes' => '', 'belong' => '1', 'sort' => 99, 'detail' => '{"title":"多图上传","label":"moreImg","type":"imgMoreUpload","value":[],"size":{},"range":"global"}', 'created_at' => $now, 'updated_at' => $now],
                ['title' => '文件上传', 'notes' => '', 'belong' => '1', 'sort' => 99, 'detail' => '{"title":"文件上传","label":"down","type":"fileUpload","value":[],"size":{},"range":"global"}', 'created_at' => $now, 'updated_at' => $now],
                ['title' => 'SEO关键词', 'notes' => '', 'belong' => '1', 'sort' => 99, 'detail' => '{"title":"SEO关键词","label":"keywords","type":"input","value":"","size":{},"range":"global"}', 'created_at' => $now, 'updated_at' => $now],
                ['title' => 'SEO描述', 'notes' => '', 'belong' => '1', 'sort' => 99, 'detail' => '{"title":"SEO描述","label":"description","type":"input","value":"","size":{},"range":"global"}', 'created_at' => $now, 'updated_at' => $now],
            ]
        );
    }
}
