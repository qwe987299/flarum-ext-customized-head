use Flarum\Extend;
use Illuminate\Contracts\View\Factory as ViewFactory;

return [
    (new Extend\Settings)
        ->serializeToForum('custom_head_code', 'your_extension.custom_head_code')
        ->view(function (ViewFactory $view) {
            $headCode = app('flarum.settings')->get('your_extension.custom_head_code');
            return $view->make('your_extension::admin.settings', compact('headCode'));
        })
];
