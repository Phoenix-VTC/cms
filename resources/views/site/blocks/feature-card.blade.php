<?php /** @var A17\Twill\Models\Block $block */ ?>
<section class="pt-20 pb-20 lg:pb-12 overflow-x-hidden {{ "bg-" . $block->input('background_color') }}">
    <div class="flex flex-wrap">
        @if($block->input('image_position') === 'left')
            <div class="relative w-full lg:w-1/2 px-4 lg:h-128">
                <div class="relative lg:absolute left-0 top-0 lg:max-w-6xl mx-auto lg:-ml-64">
                    @if($block->input('image_mockup'))
                        <img class="lg:h-128" src="{{ asset('assets/images/mockups/macbook.png') }}" alt="Macbook">
                        <div class="absolute" style="top: 5.8%; left: 14.6%; width: 72.8%; height: 76.8%;">
                            <img class="object-cover w-full h-full" src="{{ asset($block->image('image')) }}"
                                 alt="{{ $block->imageAltText('image') }}">
                        </div>
                    @else
                        <img class="object-cover w-full h-full" src="{{ asset($block->image('image')) }}"
                             alt="{{ $block->imageAltText('image') }}">
                    @endif
                </div>
            </div>
            <div class="flex w-full lg:w-1/2 lg:max-w-lg lg:h-128 px-4 lg:pl-16">
                <div class="my-auto mx-auto pt-8 lg:pt-0 max-w-2xl lg:max-w-lg">
                    <h2 class="text-3xl md:text-4xl mb-4 font-bold font-heading text-white">
                        <span>{{ $block->translatedInput('title_first') }}</span>
                        <span class="text-primary">{{ $block->translatedInput('title_second') }}</span>
                        <span>{{ $block->translatedInput('title_third') }}</span>
                    </h2>
                    <div class="text-gray-400 leading-loose mb-6">
                        {!! $block->translatedInput('text') !!}
                    </div>
                    <a class="inline-block py-4 px-8 text-xs text-white font-semibold leading-none bg-primary hover:bg-red-900 rounded"
                       href="{{ $block->input('button_url') }}">{{ $block->translatedInput('button_label') }}</a>
                </div>
            </div>
        @else
            <div class="flex order-1 lg:order-0 w-full lg:w-1/2 lg:h-128 lg:max-w-lg lg:ml-auto px-4 lg:pr-24 xl:pr-4">
                <div class="my-auto mx-auto pt-8 lg:pt-0 max-w-2xl lg:max-w-lg">
                    <h2 class="text-3xl md:text-4xl mb-4 font-bold font-heading text-white">
                        <span>{{ $block->translatedInput('title_first') }}</span>
                        <span class="text-primary">{{ $block->translatedInput('title_second') }}</span>
                        <span>{{ $block->translatedInput('title_third') }}</span>
                    </h2>
                    <div class="text-gray-400 leading-loose mb-6">
                        {!! $block->translatedInput('text') !!}
                    </div>
                    <a class="inline-block py-4 px-8 text-xs text-white font-semibold leading-none bg-primary hover:bg-red-900 rounded"
                       href="{{ $block->input('button_url') }}">{{ $block->translatedInput('button_label') }}</a>
                </div>
            </div>
            <div class="relative order-0 lg:order-1 w-full lg:w-1/2 px-4 lg:h-128">
                <div class="relative lg:absolute right-0 top-0 lg:max-w-6xl mx-auto lg:-mr-64">
                    @if($block->input('image_mockup'))
                        <img class="lg:h-128" src="{{ asset('assets/images/mockups/macbook.png') }}" alt="Macbook">
                        <div class="absolute" style="top: 5.8%; left: 14.6%; width: 72.8%; height: 76.8%;">
                            <img class="object-cover w-full h-full" src="{{ asset($block->image('image')) }}"
                                 alt="{{ $block->imageAltText('image') }}">
                        </div>
                    @else
                        <img class="object-cover w-full h-full" src="{{ asset($block->image('image')) }}"
                             alt="{{ $block->imageAltText('image') }}">
                    @endif
                </div>
            </div>
        @endif
    </div>
</section>
