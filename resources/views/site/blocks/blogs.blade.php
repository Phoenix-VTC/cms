<?php /** @var A17\Twill\Models\Block $block */ ?>

@php
    $blogs = App\Models\Blog::latest()->paginate(5);
@endphp

<section class="py-20">
    <div class="container px-4 mx-auto">
        <h2 class="mb-12 lg:mb-20 text-3xl md:text-4xl font-bold font-heading text-white">{{ $block->translatedInput('title') }}</h2>
        @foreach($blogs as $blog)
            <div class="flex flex-wrap -mx-4 mb-20">
                <div
                    class="w-full lg:w-1/2 px-4 lg:pt-4 order-1 @if($loop->odd) lg:pr-20 lg:order-0 @else lg:pl-20 @endif">
                    @if($blog->tag)
                        <span
                            class="inline-block py-1 px-3 capitalize text-xs font-semibold bg-white rounded-full text-gray-900">
                            {{ $blog->tag }}
                        </span>
                    @endif
                    <h3 class="my-4 text-xl md:text-2xl font-bold font-heading text-blueGray-100">{{ $blog->title }}</h3>
                    <p class="text-sm md:text-base leading-loose text-blueGray-400">
                        {{ \Illuminate\Support\Str::words($blog->description, 45) }}
                    </p>
                    <div class="mt-1 mb-3 text-xs text-blueGray-300">
                        <span>
                            {{ $blog->created_at->format('d M g:i A') }}
                        </span>
                        @if($blog->author)
                            <span>| {{ $blog->author }}</span>
                        @endif
                    </div>
                    <a class="text-xs font-semibold text-primary"
                       href="{{ route('blog.show', [app()->getLocale(), $blog->slug]) }}">
                        <span>Read More</span>
                        <svg class="inline-block w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                             xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
                <div class="w-full lg:w-1/2 px-4 mb-8 order-0 @if($loop->odd) lg:order-1 @endif">
                    <img class="w-full h-80 object-cover rounded"
                         src="{{ $blog->image('image') }}"
                         alt="{{ $blog->imageAltText('image') }}">
                </div>
            </div>
        @endforeach
        <div class="text-white">
            {{ $blogs->links() }}
        </div>
    </div>
</section>
