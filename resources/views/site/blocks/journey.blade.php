<?php /** @var A17\Twill\Models\Block $block */ ?>

<section class="py-20 {{ "bg-" . $block->input('background_color') }}">
    <div class="container px-4 mx-auto">
        <div class="max-w-lg mx-auto mb-16 text-center">
            <span class="inline-block py-1 px-3 text-xs font-semibold bg-secondary text-white rounded-xl">
                {{ $block->translatedInput('label') }}
            </span>
            <h2 class="mt-4 mb-2 text-3xl lg:text-4xl font-bold font-heading text-white">
                <span>{{ $block->translatedInput('title') }}</span>
            </h2>
            <p class="text-blueGray-400 leading-loose">
                {{ $block->translatedInput('description') }}
            </p>
        </div>
        <div class="flex relative">
            <div class="hidden md:flex absolute inset-0 -mt-24 px-16 items-center justify-center max-w-4xl mx-auto">
                <div class="w-full py-1 bg-white"></div>
            </div>
            <div class="flex flex-wrap justify-between w-full">
                @foreach($block->children as $block)
                    @include('site.blocks.journey-step', $block)
                @endforeach
            </div>
        </div>
    </div>
</section>
