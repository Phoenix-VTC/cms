<?php /** @var App\Models\Employee $item */ ?>

<section class="py-20">
    <div class="container px-4 mx-auto">
        <div class="max-w-2xl mx-auto">
            <div class="text-center mb-6">
                <span class="text-base md:text-lg">
                    <span class="text-primary text-2xl">{{ $item->job_title }}</span>
                </span>
                <h2 class="text-4xl md:text-5xl mt-4 font-bold font-heading text-white">
                    {{ $item->name }}
                </h2>
                <a class="text-lg font-light text-white" href="mailto:{{ $item->email }}">
                    {{ $item->email }}
                </a>
            </div>
            <div class="mb-6 leading-loose text-blueGray-400">
                {!! $item->description !!}
            </div>
            <a class="mr-2 inline-block px-4 py-3 text-xs text-white hover:text-gray-200 font-semibold leading-none border border-gray-200 hover:border-gray-300 rounded"
               href="{{ url()->previous() }}">
                <i class="far fa-chevron-double-left mr-2"></i> Go Back
            </a>
        </div>
    </div>
</section>
