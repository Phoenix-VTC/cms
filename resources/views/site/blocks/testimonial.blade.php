<?php /** @var A17\Twill\Models\Block $block */ ?>

<section class="py-20 pb-8 overflow-x-hidden {{ "bg-" . $block->input('background_color') }}">
    <div class="container px-4 mx-auto">
        <div class="flex flex-wrap mb-24">
            <div class="relative w-full lg:w-1/2 h-128 mb-20 lg:mb-0">
                <div class="absolute top-0 right-0 h-full w-full mt-6 -mr-6 bg-blueGray-100 rounded-xl"></div>
                <img class="absolute top-0 right-0 h-full w-full rounded-xl object-cover object-top"
                     src="{{ asset($block->image('image')) }}" alt="{{ $block->imageAltText('image') }}">
            </div>
            <div class="w-full lg:w-1/2 lg:pl-24 my-auto">
                <i class="fad fa-quote-left fa-3x text-primary"></i>
                <div class="my-4 text-4xl font-bold font-heading text-white">{!! $block->translatedInput('text') !!}</div>
                <p class="mb-1 text-xl font-bold text-primary">{{ $block->input('name') }}</p>
                <p class="text-primary">{{ $block->translatedInput('position') }}</p>
            </div>
        </div>
    </div>
</section>
