<?php /** @var A17\Twill\Models\Block $block */ ?>

<section class="py-12 md:py-20 {{ "bg-" . $block->input('background_color') }}">
    <div class="container px-4 mx-auto">
        <div class="mb-8">
            <h2 class="mb-6 text-3xl md:text-4xl font-bold font-heading text-blueGray-200">{{ $block->translatedInput('title') }}</h2>
            <div class="leading-loose text-blueGray-400 prose">{!! $block->translatedInput('text') !!}</div>
        </div>
    </div>
</section>
