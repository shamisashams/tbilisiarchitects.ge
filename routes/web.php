<?php
/**
 *  routes/web.php
 *
 * Date-Time: 03.06.21
 * Time: 15:41
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */

use App\Http\Controllers\Admin\AnswerController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CertificateController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\FeatureController;
use App\Http\Controllers\Admin\HnhController;
use App\Http\Controllers\Admin\LanguageController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\TranslationController;
use App\Http\Controllers\Client\HomeController;
use Illuminate\Support\Facades\Route;


Route::prefix('{locale?}')
    ->middleware(['setlocale'])
    ->group(function () {
        Route::prefix('admin')->group(function () {
            Route::get('login', [LoginController::class, 'loginView'])->name('loginView');
            Route::post('login', [LoginController::class, 'login'])->name('login');

            Route::redirect('', 'admin/language');

            Route::middleware('auth')->group(function () {
                Route::get('logout', [LoginController::class, 'logout'])->name('logout');


                // Language
                Route::resource('language', LanguageController::class);
                Route::get('language/{language}/destroy', [LanguageController::class, 'destroy'])->name('language.destroy');

                // Translation
                Route::resource('translation', TranslationController::class);


                // Project
                Route::resource('project', ProjectController::class);
                Route::get('project/{project}/destroy', [ProjectController::class, 'destroy'])->name('project.destroy');

                // News
                Route::resource('news', NewsController::class);
                Route::get('news/{news}/destroy', [NewsController::class, 'destroy'])->name('news.destroy');

                // Slider
                Route::resource('slider', SliderController::class);
                Route::get('slider/{slider}/destroy', [SliderController::class, 'destroy'])->name('slider.destroy');

                // City
                Route::resource('setting', SettingController::class);


            });
        });

        Route::get('', [HomeController::class, 'index'])->name('home.index');
        Route::get('news/details/{id}', [\App\Http\Controllers\Client\NewsController::class, 'view'])->name('news.details');
        Route::get('news', [\App\Http\Controllers\Client\NewsController::class, 'index'])->name('client.news.index');

        Route::get('projects', [App\Http\Controllers\Client\ProjectController::class, 'index'])->name('client.project.index');
        Route::get('projects/details/{id}', [App\Http\Controllers\Client\ProjectController::class, 'view'])->name('client.project.details');

        Route::get('about', [\App\Http\Controllers\Client\AboutController::class, 'index'])->name('client.about');

        Route::get('contact', [\App\Http\Controllers\Client\ContactController::class, 'index'])->name('client.contact');


//        Route::match(['get', 'post'], 'contact', [\App\Http\Controllers\Client\ContactController::class, 'index'])->name('contact.index');

//        Route::get('about-us', [\App\Http\Controllers\Client\AboutController::class, 'index'])->name('about.index');


    });

