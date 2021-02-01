<?php /** @var A17\Twill\Models\Block $block */ ?>

<section class="py-20 pb-8 overflow-x-hidden {{ "bg-" . $block->input('background_color') }}">
    <div class="container px-4 mx-auto">
        <h1 class="my-3 pb-8 text-3xl md:text-5xl text-white font-bold font-heading text-center">
            {{ $block->translatedInput('title') }}
        </h1>
        <div class="flex flex-wrap items-center justify-center">
            @foreach($block->children as $block)
                @include('site.blocks.partner', $block)
            @endforeach
        </div>
    </div>
</section>
