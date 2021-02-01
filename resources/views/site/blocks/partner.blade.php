<?php /** @var A17\Twill\Models\Block $block */ ?>

<div class="flex justify-center w-1/2 md:w-1/3 lg:w-1/6 px-3 mb-12">
    <a href="{{ $block->input('url') }}" target="_blank">
        <img src="{{ asset($block->image('image', 'default', ['fm' => null])) }}"
             alt="{{ $block->input('name') }}" width="250">
        <p class="mt-6 mb-2 text-xl text-white text-center">{{ $block->input('name') }}</p>
    </a>
</div>
