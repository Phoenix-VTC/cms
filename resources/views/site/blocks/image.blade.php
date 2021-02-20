<?php /** @var A17\Twill\Models\Block $block */ ?>

<div class="mb-8">
    <a target="_blank" href="{{ $block->image('image') }}">
        <img class="h-auto mx-auto mb-2 object-cover rounded" src="{{ asset($block->image('image')) }}"
             alt="{{ $block->imageAltText('image') }}">
    </a>
    <p class="text-sm text-center italic text-blueGray-400">{{ $block->imageCaption('image') }}</p>
</div>
