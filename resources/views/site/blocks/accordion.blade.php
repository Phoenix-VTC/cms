<?php /** @var A17\Twill\Models\Block $block */ ?>

<li x-data="{ open: false }" x-cloak class="px-6 py-4 bg-gray-400 rounded">
    <button @click="open = !open"
            class="w-full flex justify-between items-center text-left font-bold font-heading text-blueGray-800">
        <span>{{ $block->translatedInput('title') }}</span>
        <i x-show="!open" class="far fa-chevron-right fa-sm fa-fw text-blueGray-800 ml-2"></i>
        <i x-show="open" class="far fa-chevron-down fa-sm fa-fw text-blueGray-800 ml-2"></i>
    </button>
    <div x-show="open" class="mt-2 text-blueGray-800">
        {!! $block->translatedInput('text') !!}
    </div>
</li>
