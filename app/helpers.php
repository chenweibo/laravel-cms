<?php

// 辅助函数
use App\Models\Content;
use App\Models\Menu;

function handleSiteStructure($array)
{
    $new = [];
    if (!empty($array)) {
        foreach ($array as $v) {
            $new[$v['label']] = isset($v['value']) ? $v['value'] : '';
        }

        return $new;
    }
}

function modifyEnv(array $data)
{
    $envPath = base_path().DIRECTORY_SEPARATOR.'.env';

    $contentArray = collect(file($envPath, FILE_IGNORE_NEW_LINES));

    $contentArray->transform(function ($item) use ($data) {
        foreach ($data as $key => $value) {
            if (str_contains($item, $key)) {
                return $key.'='.$value;
            }
        }

        return $item;
    });

    $content = implode($contentArray->toArray(), "\n");

    \File::put($envPath, $content);
}

function handleComponentDetail($array)
{
    $result = [];
    if (!empty($array)) {
        foreach ($array as $v) {
            $result[] = $v->detail;
        }

        return $result;
    }

    return $result;
}

function handleBannerStructure($array)
{
    $result = [];
    if (!empty($array)) {
        foreach ($array as $v) {
            $result[$v->id] = $v->banners;
        }

        return $result;
    }

    return $result;
}

/**
 * 获取指定id的树形菜单的结构.
 *
 * @return model
 */
function getMenuById($id)
{
    return Menu::where('id', $id)->oneTree()->get()->first();
}

/**
 * 获取指定id的单篇.
 *
 * @return model
 */
function getPage($id)
{
    return Menu::where('id', $id)->first();
}

/**
 * 根据列表栏目id获取所属的内容.
 *
 * @return model
 */
function getContentByMenuId($id)
{
    $array = Menu::where('id', $id)->first();

    return $array->content ?? [];
}

/**
 * 处理 使用自定义组件，但是模版渲染 可能出现不存在键的错误的过滤.
 *
 * @return string
 */
function check($k, $data)
{
    if (isset($data)) {
        return \array_key_exists($k, $data) ? $data[$k] : '';
    }

    return '';
}

/**
 * 获取最新栏目若干条的内容.
 *
 * @param $menu_id 栏目id
 * @param $count 数量
 *
 * @return array
 */
function lastNews($menu_id, $count)
{
    return Content::where('menus_id', $menu_id)->latest()->limit($count)->get();
}

/**
 * 截取字符串过滤空格换行符.
 *
 * @param $data 内容
 * @param $length 长度
 *
 * @return string
 */
function limit($data, $length)
{
    $string = strip_tags($data);

    $string = trim($string);

    $string = str_replace(["\t", "\r\n", "\r", "\n", ' '], '', $string);

    $string = preg_replace('/\s+|\t+/u', '', $string);

    return \mb_substr($string, 0, $length, 'utf-8');
}

/**
 * 正则验证是否存在http或者https.
 *
 * @param $url
 *
 * @return string
 */
function checkUrl($url)
{
    $preg = '/^http(s)?:\\/\\/.+/';
    if (preg_match($preg, $url)) {
        return true;
    }

    return false;
}

/**
 * 根据栏目id获取全部产品
 * *
 * @param $id
 * @param int $count 数量 不填写或者为0时候取全部
 *
 * @return model
 */
function getAllContentByMenuId($id, $count = 0)
{
    $menu = Menu::oneTree()->find($id);
    $arr = $menu->children->pluck('id') ?? [];
    if ($count == 0) {
        return Content::whereIn('menus_id', $arr)->get();
    }

    return Content::whereIn('menus_id', $arr)->limit($count)->get();
}

/**
 * 根据栏目id获取推荐产品
 * *
 * @param $id
 * @param int $count 数量 不填写或者为0时候取全部
 *
 * @return Collection
 */
function getRecommendContentByMenuId($id, $count = 0)
{
    $menu = Menu::oneTree()->find($id);
    $arr = $menu->children->pluck('id') ?? [];
    if ($count == 0) {
        return Content::whereIn('menus_id', $arr)->where('recommend', true)->get();
    }

    return Content::whereIn('menus_id', $arr)->where('recommend', true)->limit($count)->get();
}
