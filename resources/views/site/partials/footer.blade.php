<footer class="container px-4 mx-auto" aria-labelledby="footerHeading">
    <h2 id="footerHeading" class="sr-only">Footer</h2>
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
        <div class="xl:grid xl:grid-cols-3 xl:gap-8">
            <div class="space-y-8 xl:col-span-1">
                <img class="h-12" src="{{ asset('assets/images/branding/logo.svg') }}" alt="Company name">
                <p class="text-gray-300 text-base">
                    We believe in forward thinking, and strive to put our members first!
                </p>
                <div class="flex space-x-6">
                    @if($socials_settings['discord_url'])
                        <a class="text-gray-400 hover:text-gray-300" target="_blank"
                           href="{{ $socials_settings['discord_url'] }}">
                            <i class="fab fa-discord text-xl"></i>
                        </a>
                    @endif
                    @if($socials_settings['twitter_url'])
                        <a class="text-gray-400 hover:text-gray-300" target="_blank"
                           href="{{ $socials_settings['twitter_url'] }}">
                            <i class="fab fa-twitter text-xl"></i>
                        </a>
                    @endif
                    @if($socials_settings['facebook_url'])
                        <a class="text-gray-400 hover:text-gray-300" target="_blank"
                           href="{{ $socials_settings['facebook_url'] }}">
                            <i class="fab fa-facebook text-xl"></i>
                        </a>
                    @endif
                    @if($socials_settings['youtube_url'])
                        <a class="text-gray-400 hover:text-gray-300" target="_blank"
                           href="{{ $socials_settings['youtube_url'] }}">
                            <i class="fab fa-youtube text-xl"></i>
                        </a>
                    @endif
                    @if($socials_settings['instagram_url'])
                        <a class="text-gray-400 hover:text-gray-300" target="_blank"
                           href="{{ $socials_settings['instagram_url'] }}">
                            <i class="fab fa-instagram text-xl"></i>
                        </a>
                    @endif
                    @if($socials_settings['steam_url'])
                        <a class="text-gray-400 hover:text-gray-300" target="_blank"
                           href="{{ $socials_settings['steam_url'] }}">
                            <i class="fab fa-steam text-xl"></i>
                        </a>
                    @endif
                    @if($socials_settings['truckersmp_url'])
                        <a class="text-gray-400 hover:text-gray-300" target="_blank"
                           href="{{ $socials_settings['truckersmp_url'] }}">
                            <i class="fas fa-truck text-xl"></i>
                        </a>
                    @endif
                </div>
                <div class="flex space-x-6">
                    @if($socials_settings['support_email'])
                        <p class="text-xs text-gray-400">
                            <span>Get in touch </span>
                            <a class="text-orange-600 hover:text-orange-700 underline"
                               href="mailto:{{ $socials_settings['support_email'] }}">
                                {{ $socials_settings['support_email'] }}
                            </a>
                        </p>
                    @endif
                </div>
            </div>
            <div class="mt-12 grid grid-cols-2 gap-8 xl:mt-0 xl:col-span-2">
                <div class="md:grid md:grid-cols-2 md:gap-8">
                    <div>
                        <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">
                            Phoenix
                        </h3>
                        <ul class="mt-4 space-y-4">
                            <li>
                                <a href="{{ url("$locale/about") }}"
                                   class="text-base text-gray-300 hover:text-white">
                                    About
                                </a>
                            </li>

                            <li>
                                <a href="https://events.phoenixvtc.com" class="text-base text-gray-300 hover:text-white">
                                    Events
                                </a>
                            </li>

                            <li>
                                <a href="{{ url("$locale/gallery") }}" class="text-base text-gray-300 hover:text-white">
                                    Gallery
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="mt-12 md:mt-0">
                        <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">
                            Information
                        </h3>
                        <ul class="mt-4 space-y-4">
                            <li>
                                <a href="{{ url("$locale/contact") }}" class="text-base text-gray-300 hover:text-white">
                                    Contact
                                </a>
                            </li>

                            <li>
                                <a href="mailto:management@phoenixvtc.com"
                                   class="text-base text-gray-300 hover:text-white">
                                    Report a Driver
                                </a>
                            </li>

                            <li>
                                <a href="mailto:events@phoenixvtc.com"
                                   class="text-base text-gray-300 hover:text-white">
                                    Event Invitations
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="md:grid md:grid-cols-2 md:gap-8">
                    <div>
                        <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">
                            Company
                        </h3>
                        <ul class="mt-4 space-y-4">
                            <li>
                                <a href="{{ url("$locale/partners") }}"
                                   class="text-base text-gray-300 hover:text-white">
                                    Partners
                                </a>
                            </li>

                            <li>
                                <a href="{{ url("$locale/brand-kit") }}"
                                   class="text-base text-gray-300 hover:text-white">
                                    Brand Kit
                                </a>
                            </li>

                            <li>
                                <a href="{{ url("$locale/careers") }}" class="text-base text-gray-300 hover:text-white">
                                    Careers
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="mt-12 md:mt-0">
                        <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">
                            Legal
                        </h3>
                        <ul class="mt-4 space-y-4">
                            <li>
                                <a href="{{ url("$locale/rules") }}" class="text-base text-gray-300 hover:text-white">
                                    Rules
                                </a>
                            </li>

                            <li>
                                <a href="{{ url("$locale/privacy-policy") }}"
                                   class="text-base text-gray-300 hover:text-white">
                                    Privacy
                                </a>
                            </li>

                            <li>
                                <a href="{{ url("$locale/terms-and-conditions") }}"
                                   class="text-base text-gray-300 hover:text-white">
                                    Terms
                                </a>
                            </li>

                            <li>
                                <a href="{{ url("$locale/cookie-policy") }}"
                                   class="text-base text-gray-300 hover:text-white">
                                    Cookies
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-12 border-t border-gray-200 pt-8">
            <p class="text-base text-gray-400 xl:text-center">
                &copy; 2020 - {{ date("Y") }} PhoenixVTC. All rights reserved.
            </p>
        </div>
    </div>
</footer>
