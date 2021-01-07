<div class="fixed bottom-0 inset-x-0 px-4 z-50 js-cookie-consent cookie-consent">
    <div class="container mx-auto pt-4 px-6 pb-6 mb-8 bg-gray-800 text-white rounded">
        <p class="font-bold font-heading">Notice</p>
        <p class="mt-3 mb-6 text-blueGray-200 text-sm">
            We and selected partners, use cookies or similar technologies as specified in the <a class="hover:text-blueGray-400" href="{{ url("$locale/cookie-policy") }}">cookie policy</a>.
            You can consent to the use of such technologies by closing this notice.
        </p>
        <a class="inline-block py-3 px-6 mr-2 text-xs leading-none bg-orange-600 hover:bg-orange-700 rounded js-cookie-consent-agree cookie-consent__agree" href="">{{ trans('cookieConsent::texts.agree') }}</a>
        <a class="inline-block py-3 px-6 text-xs leading-none border border-orange-500 hover:border-orange-400 hover:text-orange-200 rounded" href="{{ url("$locale/cookie-policy") }}">Learn more</a>
    </div>
</div>
