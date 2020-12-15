<section class="pb-8 bg-top bg-cover bg-no-repeat"
         style="background-image: url({{ asset($item->image('header_image')) }}); background-position: 20% 20%;">
    <div class="container px-4 mx-auto">
        <nav class="flex justify-between items-center py-6">
            <a class="text-3xl text-white font-semibold leading-none" href="#">
                <h1 class="font-bold">Phoenix</h1>
            </a>
            <div class="lg:hidden">
                <button
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
                    href="#">
                    Member Access
                </a>
                <a
                    class="inline-block px-4 py-3 text-xs font-semibold leading-none bg-primary hover:bg-red-900 text-white rounded"
                    href="#">
                    Join Phoenix
                </a>
            </div>
        </nav>
        <div class="py-12 text-center">
            <div class="max-w-lg mx-auto mb-8">
                <h2 class="text-3xl mb-4 text-white font-bold font-heading" :class="'md:text-' + titleSize">
                    <span>{{ $item->header_one }}</span>
                    <span class="text-primary">{{ $item->header_two }}</span>
                    <span>{{ $item->header_three }}</span>
                </h2>
                <p class="text-white leading-relaxed">
                    {{ $item->header_subtext }}
                </p>
            </div>
            <div>
                <slot></slot>
            </div>
        </div>
        <div class="flex flex-wrap items-center justify-center max-w-4xl mx-auto pt-12 pb-192" v-if="showLogos">
            <div class="w-1/2 md:w-1/3 lg:w-1/5 px-3 mb-8">
                <img class="mx-auto" v-lazy="ets" alt="">
            </div>
            <div class="w-1/2 md:w-1/3 lg:w-1/5 px-3 mb-8">
                <img class="mx-auto" v-lazy="tmp" alt="">
            </div>
            <div class="w-1/2 md:w-1/3 lg:w-1/5 px-3 mb-8">
                <img class="mx-auto" v-lazy="ats" alt="">
            </div>
        </div>
    </div>
    <div class="hidden navbar-menu relative z-50">
        <div class="navbar-backdrop fixed inset-0 bg-blueGray-800 opacity-25"></div>
        <nav
            class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-white border-r overflow-y-auto">
            <div class="flex items-center mb-8">
                <a class="mr-auto text-3xl font-semibold leading-none" href="#">
                    <h1 class="font-bold">{{ config('app.name') }}</h1>
                </a>
                <button class="navbar-close">
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
                    <router-link
                        class="block px-4 py-3 mb-3 text-xs text-center font-semibold leading-none bg-primary hover:bg-red-900 text-white rounded"
                        :to="{ name: 'Apply' }">
                        Join Phoenix
                    </router-link>
                    <a
                        class="block px-4 py-3 mb-2 text-xs text-center text-primary hover:text-red-900 font-semibold leading-none border hover:border-red-900 rounded"
                        href="#">
                        DriversHub
                    </a>
                </div>
            </div>
            <div class="mt-auto">
                <p class="my-4 text-xs text-blueGray-400">
                    <span>Get in touch </span>
                    <a class="text-primary hover:text-red-900 underline" href="#">support@phoenixvtc.com</a>
                </p>
                <a class="inline-block px-2" href="#">
                    <font-awesome-icon :icon="['fab', 'twitter']"/>
                </a>
                <a class="inline-block px-2" href="#">
                    <font-awesome-icon :icon="['fab', 'facebook']"/>
                </a>
                <a class="inline-block px-2" href="#">
                    <font-awesome-icon :icon="['fab', 'youtube']"/>
                </a>
                <a class="inline-block px-2" href="#">
                    <font-awesome-icon :icon="['fab', 'instagram']"/>
                </a>
                <a class="inline-block px-2" href="#">
                    <font-awesome-icon :icon="['fas', 'truck']"/>
                </a>
            </div>
        </nav>
    </div>
</section>
