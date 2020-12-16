<?php /** @var A17\Twill\Models\Block $block */ ?>

<section class="pt-20 pb-24 {{ "bg-" . $block->input('background_color') }}">
    <div class="container px-4 mx-auto">
        <div class="max-w-xl mx-auto text-center">
            @if($block->translatedInput('label'))
                <span class="inline-block text-xs py-1 px-3 bg-blue-500 text-white font-semibold rounded-xl">
                    {{ $block->translatedInput('label') }}
                </span>
            @endif
            <h2 class="my-3 text-3xl md:text-4xl text-white font-bold font-heading">{{ $block->translatedInput('title') }}</h2>
            <div class="text-sm md:text-base text-white">
                {!! $block->translatedInput('text') !!}
            </div>
            <div class="mt-10">
                <a class="inline-block py-4 px-8 text-xs text-primary font-semibold leading-none bg-white hover:red-900 hover:text-white border hover:border-white rounded transition duration-300"
                   href="{{ $block->input('button_url') }}">{{ $block->translatedInput('button_label') }}</a>
            </div>
        </div>
    </div>
</section>
