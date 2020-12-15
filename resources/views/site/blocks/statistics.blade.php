<?php /** @var A17\Twill\Models\Block $block */ ?>

<section class="pt-8 pb-2 {{ "bg-" . $block->input('background_color') }}">
    <div class="container px-4 mx-auto">
        <div class="flex flex-wrap -mx-3">
            @foreach($block->children as $block)
                @include('site.blocks.statistic', $block)
            @endforeach
        </div>
    </div>
</section>
