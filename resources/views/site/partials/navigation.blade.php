<div x-data="{ openNav: false }">
    <section class="pb-8 bg-top bg-cover bg-no-repeat"
             style="background-image: url({{ asset($item->image('header_image')) }}); background-position: 20% 20%;">
        <div class="container px-4 mx-auto">
            <nav class="flex justify-between items-center py-6">
                <a class="text-3xl text-white font-semibold leading-none" href="{{ route('home') }}">
                    <img src="{{ asset('assets/images/branding/logo.svg') }}" alt="Phoenix" width="90">
                </a>
                <div class="lg:hidden">
                    <button @click="openNav = true"
                            class="navbar-burger flex items-center py-2 px-3 text-white hover:text-blueGray-200 rounded border border-blueGray-200 hover:border-blueGray-300">
                        <svg class="fill-current h-4 w-4" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>Mobile menu</title>
                            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                        </svg>
                    </button>
                </div>
                <ul class="hidden lg:flex lg:items-center lg:w-auto lg:space-x-12">
                    @foreach(\A17\Twill\Models\Feature::forBucket('main_navigation') as $navItem)
                        <li>
                            <a class="text-sm text-white hover:text-gray-200"
                               href="{{ route('page.show', [$locale, $navItem->slug]) }}">
                                {{ $navItem->title }}
                            </a>
                        </li>
                    @endforeach
                </ul>
                <div class="hidden lg:block">
                    <a
                        class="mr-2 inline-block px-4 py-3 text-xs text-white hover:text-gray-200 font-semibold leading-none border border-gray-200 hover:border-gray-300 rounded"
                        href="https://base.phoenixvtc.com">
                        Member Access
                    </a>
                    <a
                        class="inline-block px-4 py-3 text-xs font-semibold leading-none bg-primary hover:bg-red-900 text-white rounded"
                        href="https://apply.phoenixvtc.com">
                        Join Phoenix
                    </a>
                </div>
            </nav>
            @if($enableHeader ?? true)
                <div class="py-12 text-center">
                    <div class="max-w-lg mx-auto mb-8">
                        <h2 class="text-3xl mb-4 text-white font-bold font-heading {{ "md:text-" . $item->header_title_size }}">
                            <span>{{ $item->header_one }}</span>
                            <span class="text-primary">{{ $item->header_two }}</span>
                            <span>{{ $item->header_three }}</span>
                            <br>
                            @if($item->template === 'opening_countdown')
                                <span class="md:text-6xl" id="countdown"></span>
                            @endif
                        </h2>
                        <p class="text-white leading-relaxed">
                            {{ $item->header_subtext }}
                        </p>
                    </div>
                    <div>
                        @if($item->button_1_label)
                            <a
                                class="block sm:inline-block py-4 px-8 mb-4 sm:mb-0 sm:mr-3 text-xs text-white text-center font-semibold leading-none bg-primary hover:bg-red-900 rounded"
                                href="{{ $item->button_1_url }}">
                                {{ $item->button_1_label }}
                            </a>
                        @endif
                        @if($item->button_2_label)
                            <a
                                class="block sm:inline-block py-4 px-8 text-xs text-white hover:text-gray-200 text-center font-semibold leading-none border border-gray-200 hover:border-gray-300 rounded"
                                href="{{ $item->button_2_url }}">
                                {{ $item->button_2_label }}
                            </a>
                        @endif
                    </div>
                </div>

                <div class="flex flex-wrap items-center justify-center max-w-4xl mx-auto pt-12 pb-192">
                    @if($item->show_logos)
                        <div class="w-1/2 md:w-1/3 lg:w-1/5 px-3 mb-8">
                            <img class="mx-auto" src="{{ asset('assets/images/ets2.png') }}"
                                 alt="Euro Truck Simulator 2">
                        </div>
                        <div class="w-1/2 md:w-1/3 lg:w-1/5 px-3 mb-8">
                            <img class="mx-auto" src="{{ asset('assets/images/ats.png') }}"
                                 alt="American Truck Simulator">
                        </div>
                    @endif
                </div>
            @endif
        </div>
        <div class="navbar-menu relative z-50" x-show="openNav" x-cloak>
            <div class="navbar-backdrop fixed inset-0 bg-blueGray-800 opacity-25"></div>
            <nav @click.away="openNav = false"
                 class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-white border-r overflow-y-auto">
                <div class="flex items-center mb-8">
                    <div class="mr-auto text-3xl font-semibold leading-none">
                        <h1 class="font-bold">{{ config('app.name') }}</h1>
                    </div>
                    <button @click="openNav = false">
                        <svg class="h-6 w-6 text-blueGray-400 cursor-pointer hover:text-blueGray-500"
                             xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
                <div>
                    <ul>
                        @foreach(\A17\Twill\Models\Feature::forBucket('main_navigation') as $navItem)
                            <li class="mb-1">
                                <a
                                    class="block p-4 text-sm text-blueGray-500 hover:bg-blue-50 hover:text-blue-600"
                                    href="{{ route('page.show', [$locale, $navItem->slug]) }}">
                                    {{ $navItem->title }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                    <div class="mt-4 pt-6 border-t border-blueGray-100">
                        <a
                            class="block px-4 py-3 mb-3 text-xs text-center font-semibold leading-none bg-primary hover:bg-red-900 text-white rounded"
                            href="https://apply.phoenixvtc.com">
                            Join Phoenix
                        </a>
                        <a
                            class="block px-4 py-3 mb-2 text-xs text-center text-primary hover:text-red-900 font-semibold leading-none border hover:border-red-900 rounded"
                            href="https://base.phoenixvtc.com">
                            Member Access
                        </a>
                    </div>
                </div>
                <div class="mt-auto">
                    @if(app(A17\Twill\Repositories\SettingRepository::class)->byKey('support_email', 'socials'))
                        <p class="my-4 text-xs text-blueGray-400">
                            <span>Get in touch </span>
                            <a class="text-primary hover:text-red-900 underline"
                               href="mailto:{{ app(A17\Twill\Repositories\SettingRepository::class)->byKey('support_email', 'socials') }}">
                                {{ app(A17\Twill\Repositories\SettingRepository::class)->byKey('support_email', 'socials') }}
                            </a>
                        </p>
                    @endif
                    @if(app(A17\Twill\Repositories\SettingRepository::class)->byKey('twitter_url', 'socials'))
                        <a class="inline-block px-2" target="_blank"
                           href="{{ app(A17\Twill\Repositories\SettingRepository::class)->byKey('twitter_url', 'socials') }}">
                            <i class="fab fa-twitter"></i>
                        </a>
                    @endif
                    @if(app(A17\Twill\Repositories\SettingRepository::class)->byKey('facebook_url', 'socials'))
                        <a class="inline-block px-2" target="_blank"
                           href="{{ app(A17\Twill\Repositories\SettingRepository::class)->byKey('facebook_url', 'socials') }}">
                            <i class="fab fa-facebook"></i>
                        </a>
                    @endif
                    @if(app(A17\Twill\Repositories\SettingRepository::class)->byKey('youtube_url', 'socials'))
                        <a class="inline-block px-2" target="_blank"
                           href="{{ app(A17\Twill\Repositories\SettingRepository::class)->byKey('youtube_url', 'socials') }}">
                            <i class="fab fa-youtube"></i>
                        </a>
                    @endif
                    @if(app(A17\Twill\Repositories\SettingRepository::class)->byKey('instagram_url', 'socials'))
                        <a class="inline-block px-2" target="_blank"
                           href="{{ app(A17\Twill\Repositories\SettingRepository::class)->byKey('instagram_url', 'socials') }}">
                            <i class="fab fa-instagram"></i>
                        </a>
                    @endif
                    @if(app(A17\Twill\Repositories\SettingRepository::class)->byKey('truckersmp_url', 'socials'))
                        <a class="inline-block px-2" target="_blank"
                           href="{{ app(A17\Twill\Repositories\SettingRepository::class)->byKey('truckersmp_url', 'socials') }}">
                            <i class="fas fa-truck"></i>
                        </a>
                    @endif
                    @if(app(A17\Twill\Repositories\SettingRepository::class)->byKey('discord_url', 'socials'))
                        <a class="inline-block px-2" target="_blank"
                           href="{{ app(A17\Twill\Repositories\SettingRepository::class)->byKey('discord_url', 'socials') }}">
                            <i class="fab fa-discord"></i>
                        </a>
                    @endif
                </div>
            </nav>
        </div>
    </section>
</div>

@if($item->template === 'opening_countdown')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
            integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.countdown/2.2.0/jquery.countdown.min.js"
            integrity="sha512-lteuRD+aUENrZPTXWFRPTBcDDxIGWe5uu0apPEn+3ZKYDwDaEErIK9rvR0QzUGmUQ55KFE2RqGTVoZsKctGMVw=="
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"
            integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ=="
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.5.32/moment-timezone-with-data.min.js"
            integrity="sha512-YfIXbIiAfl/i9LO4PUETYxh72veiVE9ixWItTOx267LiYsWVAHuTO13jEwiEFAHrBtH87a47+sehqUMX3L3i2w=="
            crossorigin="anonymous"></script>

    <script>
        const opening = moment.tz("2021-01-09 12:00", "GMT");

        $('#countdown').countdown(opening.toDate(), function (event) {
            $(this).html(event.strftime('%D days %Hh %Mm %Ss'));
        });
    </script>
@endif
