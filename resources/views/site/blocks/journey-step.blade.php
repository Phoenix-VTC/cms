<?php /** @var A17\Twill\Models\Block $block */ ?>

<div class="w-1/2 md:w-1/4 z-10 mb-12">
    <div class="flex w-20 h-20 mx-auto items-center justify-center bg-white rounded-full">
        <div
            class="flex w-16 h-16 mx-auto items-center justify-center text-white text-2xl font-semibold bg-secondary rounded-full">
            {{ $loop->iteration }}
        </div>
    </div>
    <p class="mt-6 text-base lg:text-lg font-bold text-white font-heading text-center">
        {{ $block->translatedInput('text') }}
    </p>
</div>
