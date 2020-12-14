<?php

namespace App\Http\Controllers;

use A17\Twill\Repositories\ModuleRepository;
use Symfony\Component\HttpFoundation\Response;

abstract class AbstractCmsController extends AbstractBaseController
{
    protected static $viewPage = '';
    protected static $viewOverview = '';
    protected static $repository = '';

    public function showPage(string $locale, string $slug): Response
    {
        $this->setLocale($locale);

        $item = app(static::$repository)->forSlug($slug);
        abort_unless($item, 404);

        if ($item->redirect) {
            return redirect()->route(strtolower(class_basename($item)) . '.show', [
                'locale' => $locale,
                'slug' => $item->slug
            ]);
        }

        return response()->view(static::$viewPage, $this->getPageDataFor($locale, $item));
    }

    public function showOverview(string $locale): Response
    {
        assert(static::$viewOverview !== '');
        $this->setLocale($locale);

        /** @var ModuleRepository $repository */
        $repository = app(static::$repository);
        $items = $repository->get([], ['ordered' => true], [], 10, true);

        return response()->view(static::$viewOverview, ['items' => $items, 'locale' => $locale]);
    }

    protected function setLocale(string $locale): void
    {
        if (!in_array($locale, config('translatable.locales'), true)) {
            abort(404);
        }

        app()->setLocale($locale);
    }

    protected function getPageDataFor(string $locale, $item): array
    {
        return [
            'locale' => $locale,
            'item' => $item,
        ];
    }
}
