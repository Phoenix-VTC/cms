<?php /** @var A17\Twill\Models\Block $block */ ?>

<section class="py-20 text-white">
    <div class="container px-4 mx-auto text-center">
        <div class="max-w-lg mx-auto mb-16">
            @if($block->translatedInput('label'))
                <span class="inline-block py-1 px-3 text-xs font-semibold bg-secondary rounded-xl">
                    {{ $block->translatedInput('label') }}
                </span>
            @endif
            <h1 class="text-3xl md:text-4xl mt-2 mb-4 font-bold font-heading">{{ $block->translatedInput('title') }}</h1>
            <p class="text-blueGray-400 leading-loose">{{ $block->translatedInput('description') }}</p>
        </div>
        @foreach(App\Models\Employee::orderBy('position')->get()->groupBy('branch') as $branch)
            <h2 class="text-2xl md:text-3xl mt-2 mb-4 font-bold font-heading">{{ $branch->first()->branch }}</h2>
            <div class="flex flex-wrap -mx-5">
                @foreach($branch as $employee)
                    <div class="w-1/2 lg:w-1/4 px-5 mb-12">
                        <a href="{{ route('employee.show', [app()->getLocale(), $employee->slug]) }}">
                            <img class="h-20 w-20 mx-auto rounded-full object-cover object-top"
                                 src="{{ asset($employee->image('image')) }}"
                                 alt="{{ $employee->imageAltText('image') }}">
                            <p class="mt-6 mb-2 text-xl">{{ $employee->name }}</p>
                            <p class="text-secondary">{{ $employee->job_title }}</p>
                        </a>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
</section>
