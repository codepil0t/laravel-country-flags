<?php

namespace Codepil0t\LaravelCountryFlags;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class FlagsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Publish flags
        $this->publishes([
            __DIR__.'/../flags' => public_path('flags'),
        ], 'flags');

        // Register Blade directive
        Blade::directive('flag', function ($expression) {
            return "<?php echo flag_url({$expression}); ?>";
        });
    }

    public function register()
    {
        // Register helper function
        if (!function_exists('flag_url')) {
            function flag_url($code, $ratio = '4x3') {
                return asset("flags/{$ratio}/{$code}.svg");
            }
        }
    }
}
