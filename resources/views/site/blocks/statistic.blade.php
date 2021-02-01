<?php /** @var A17\Twill\Models\Block $block */ ?>

<div class="w-full md:w-1/2 lg:w-1/4 px-3 mb-6">
    <div class="p-8 text-center rounded bg-gray-700">
        <i class="fa-fw mb-2 text-primary {{ $block->input('icon') }} fa-3x"></i>
        <p class="mb-2 text-xs md:text-base text-gray-200">{{ $block->translatedInput('title') }}</p>
        <span class="text-3xl lg:text-4xl font-bold font-heading text-gray-200">{{ $block->input('value') }}</span>
    </div>
</div>
