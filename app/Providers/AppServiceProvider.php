<?php

namespace App\Providers;

use App\Models\Banner;
use App\Models\Menu;
use App\Models\Set;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->environment() !== 'production') {
            $this->app->register(\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class);
        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //解决数据迁移时候，表结构不存在时候，跑出的错误。
        if (Schema::hasTable('menus')) {
            if (!Cache::get('menu')) {
                Cache::put('menu', Menu::allTree()->where('hide', false)->get());
            }

            View::share('globalMenu', Cache::get('menu'));
        }
        if (Schema::hasTable('sets')) {
            View::share('site', handleSiteStructure(Set::where('type', 'site')->get()->first()['sets']));
        }

        if (Schema::hasTable('banners')) {
            $banner = handleBannerStructure(Banner::get());
            View::share('banner', $banner);
        }
        Blade::directive('static', function () {
            return "<?php echo '/static' ?>";
        });
    }
}
