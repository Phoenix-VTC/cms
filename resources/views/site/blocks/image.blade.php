<?php /** @var A17\Twill\Models\Block $block */ ?>

<div class="mb-8">
    <img class="h-80 mx-auto mb-6 object-cover rounded" src="{{ asset($block->image('image')) }}"
         alt="{{ $block->imageAltText('image') }}">
    <p class="text-sm text-center italic text-blueGray-400">{{ $block->imageCaption('image') }}</p>
</div>
