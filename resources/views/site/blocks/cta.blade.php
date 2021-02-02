<?php /** @var A17\Twill\Models\Block $block */ ?>

<section class="pt-20 pb-24 {{ "bg-" . $block->input('background_color') }}">
    <div class="container px-4 mx-auto">
        <div class="max-w-xl mx-auto text-center">
            @if($block->translatedInput('label'))
                <span class="inline-block py-1 px-3 text-xs font-semibold bg-secondary text-white rounded-xl">
                    {{ $block->translatedInput('label') }}
                </span>
            @endif
            <h2 class="my-3 text-3xl md:text-4xl text-white font-bold font-heading">{{ $block->translatedInput('title') }}</h2>
            <div class="text-sm md:text-base text-white">
                {!! $block->translatedInput('text') !!}
            </div>
            <div class="mt-10">
                @if($block->input('button_label'))
                    <a class="inline-block py-4 px-8 text-xs text-white font-semibold leading-none bg-red-700 hover:bg-red-600 rounded"
                       href="{{ $block->input('button_url') }}">{{ $block->translatedInput('button_label') }}</a>
                @endif
            </div>
        </div>
    </div>
</section>
