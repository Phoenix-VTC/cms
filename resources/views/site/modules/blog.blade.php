<?php /** @var App\Models\Blog $item */ ?>

<section class="py-20">
    <div class="container px-4 mx-auto">
        <div class="max-w-2xl mx-auto mb-12">
            <div class="text-center mb-6">
                <h2 class="text-4xl md:text-5xl my-2 font-bold font-heading text-white">
                    {{ $item->title }}
                </h2>
            </div>
            <div class="flex justify-center">
                @if($item->author && $item->imageAltText('author_image'))
                    <img class="w-12 h-12 object-cover rounded-full" src="{{ asset($item->image('author_image')) }}"
                         alt="{{ $item->imageAltText('author_image') }}">
                @endif
                <div class="pl-4">
                    <p class="text-primary mb-1">{{ $item->author }}</p>
                    <p class="text-xs text-blueGray-300 font-semibold">{{ $item->created_at->toDayDateTimeString() }}</p>
                </div>
            </div>
        </div>
        <div class="max-w-2xl mx-auto leading-loose text-blueGray-400">
            {!! $item->renderBlocks(false) !!}
        </div>
    </div>
</section>
