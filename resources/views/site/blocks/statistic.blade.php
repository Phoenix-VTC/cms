<?php /** @var A17\Twill\Models\Block $block */ ?>

<div class="w-full md:w-1/2 lg:w-1/4 px-3 mb-6">
    <div class="p-8 text-center shadow rounded">
        <svg class="w-12 h-12 mx-auto mb-2 text-primary" xmlns="http://www.w3.org/2000/svg"
             fill="none" viewbox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
        </svg>
        <p class="mb-2 text-xs md:text-base text-gray-400">{{ $block->translatedInput('title') }}</p>
        <span class="text-3xl lg:text-4xl font-bold font-heading">{{ $block->input('value') }}</span>
    </div>
</div>
