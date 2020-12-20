<section class="py-16">
    <div class="container px-4 mx-auto">
        <div class="flex flex-col lg:flex-row mb-10">
            <a class="inline-block mx-auto mb-10 lg:mb-0 lg:ml-0 lg:mr-auto text-3xl font-semibold leading-none"
               href="{{ route('home') }}">
                <img class="h-10" src="{{ asset('assets/images/branding/logo.png') }}" alt="Phoenix">
            </a>
            <ul class="flex lg:flex-row items-center justify-center space-x-12 text-gray-200">
                <li>
                    <a class="text-lg font-bold font-heading hover:text-blueGray-600" href="{{ route('home') }}">
                        Home
                    </a>
                </li>
                <li>
                    <a class="text-lg font-bold font-heading hover:text-blueGray-600" href="{{ url("$locale/about") }}">
                        About
                    </a>
                </li>
                <li>
                    <a class="text-lg font-bold font-heading hover:text-blueGray-600"
                       href="{{ url("$locale/events") }}">
                        Events
                    </a>
                </li>
                <li>
                    <a class="text-lg font-bold font-heading hover:text-blueGray-600"
                       href="{{ url("$locale/contact") }}">
                        Contact
                    </a>
                </li>
            </ul>
        </div>
        <div class="flex flex-col lg:flex-row items-center lg:justify-between">
            <p class="text-xs text-gray-200">© {{ date("Y") }} Phoenix VTC. All rights reserved.</p>
            <div class="order-first lg:order-last -mx-2 mb-4 lg:mb-0 text-gray-200">
                @if(app(A17\Twill\Repositories\SettingRepository::class)->byKey('twitter_url', 'socials'))
                    <a class="inline-block px-2"
                       href="{{ app(A17\Twill\Repositories\SettingRepository::class)->byKey('twitter_url', 'socials') }}">
                        <i class="fab fa-twitter"></i>
                    </a>
                @endif
                @if(app(A17\Twill\Repositories\SettingRepository::class)->byKey('facebook_url', 'socials'))
                    <a class="inline-block px-2"
                       href="{{ app(A17\Twill\Repositories\SettingRepository::class)->byKey('facebook_url', 'socials') }}">
                        <i class="fab fa-facebook"></i>
                    </a>
                @endif
                @if(app(A17\Twill\Repositories\SettingRepository::class)->byKey('youtube_url', 'socials'))
                    <a class="inline-block px-2"
                       href="{{ app(A17\Twill\Repositories\SettingRepository::class)->byKey('youtube_url', 'socials') }}">
                        <i class="fab fa-youtube"></i>
                    </a>
                @endif
                @if(app(A17\Twill\Repositories\SettingRepository::class)->byKey('instagram_url', 'socials'))
                    <a class="inline-block px-2"
                       href="{{ app(A17\Twill\Repositories\SettingRepository::class)->byKey('instagram_url', 'socials') }}">
                        <i class="fab fa-instagram"></i>
                    </a>
                @endif
                @if(app(A17\Twill\Repositories\SettingRepository::class)->byKey('truckersmp_url', 'socials'))
                    <a class="inline-block px-2"
                       href="{{ app(A17\Twill\Repositories\SettingRepository::class)->byKey('truckersmp_url', 'socials') }}">
                        <i class="fas fa-truck"></i>
                    </a>
                @endif
                @if(app(A17\Twill\Repositories\SettingRepository::class)->byKey('discord_url', 'socials'))
                    <a class="inline-block px-2"
                       href="{{ app(A17\Twill\Repositories\SettingRepository::class)->byKey('discord_url', 'socials') }}">
                        <i class="fab fa-discord"></i>
                    </a>
                @endif
                @if(app(A17\Twill\Repositories\SettingRepository::class)->byKey('support_email', 'socials'))
                    <p class="my-4 text-xs text-blueGray-400">
                        <span>Get in touch </span>
                        <a class="text-primary hover:text-red-900 underline"
                           href="mailto:{{ app(A17\Twill\Repositories\SettingRepository::class)->byKey('support_email', 'socials') }}">
                            {{ app(A17\Twill\Repositories\SettingRepository::class)->byKey('support_email', 'socials') }}
                        </a>
                    </p>
                @endif
            </div>
        </div>
    </div>
</section>
