<?php /** @var A17\Twill\Models\Block $block */ ?>

<section class="py-20 lg:bg-contain break-words {{ "bg-" . $block->input('background_color') }}">
    <div class="container mx-auto px-4">
        <div class="max-w-sm mx-auto mb-12 text-center">
            <h2 class="mb-4 text-3xl md:text-4xl font-bold font-heading text-white">{{ $block->translatedInput('title') }}</h2>
            <div class="text-sm md:text-base leading-loose text-blueGray-400">
                {!! $block->translatedInput('description') !!}
            </div>
        </div>
        <div class="max-w-3xl mx-auto">
            <ul class="space-y-4">
                @foreach($block->children as $block)
                    @include('site.blocks.accordion', $block)
                @endforeach
            </ul>
        </div>
    </div>
</section>
