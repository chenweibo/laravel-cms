<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class SetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();
        DB::table('sets')->insert([
            'title' => '站点设置',
            'type' => 'site',
            'sets' => '[{"size":[],"type":"input","label":"title","title":"站点名称"},{"size":[],"type":"OneImgupload","label":"logo","title":"logo"},{"size":[],"type":"input","label":"keywords","title":"站点关键词"},{"size":[],"type":"input","label":"description","title":"站点描述"},{"size":[],"type":"input","label":"icp","title":"备案号"},{"size":[],"type":"input","label":"address","title":"地址"},{"size":[],"type":"input","label":"telephone","title":"电话"},{"size":[],"type":"input","label":"fax","title":"传真"},{"size":[],"type":"input","label":"phone","title":"手机"},{"size":[],"type":"input","label":"email","title":"邮箱"},{"size":[],"type":"input","label":"domain","title":"网址"},{"size":[],"type":"textarea","label":"tongji","title":"统计代码"},{"size":[],"type":"input","label":"bookUrl","title":"电子样本url"}]',
            'created_at' => $now,
            'updated_at' => $now,
        ]);
    }
}
