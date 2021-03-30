<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use DB;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('layouts.app', function ($view) {
            $aLanguage = DB::table('translations')->get();
            $aLan = array();
            if($aLanguage[0]->english == 1){
                foreach ($aLanguage as $key => $value) {
                    $aLan[$value->english] = ucwords($value->english);
                }
            }elseif($aLanguage[0]->sindhi == 1){
                foreach ($aLanguage as $key => $value) {
                    $aLan[$value->english] = $value->sindhi;
                }
            }
            $view->with(['aLanguage' => $aLanguage,'aLan' => $aLan]);
        });
    }
}
