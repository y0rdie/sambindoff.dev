@extends('_layouts.master')

@section('body')
    <div class="flex items-center justify-center">
        <a href="/" title="sambindoff.dev" class="block"><img src="/assets/images/avatar.jpg" alt="Sam Bindoff" class="border-2 rounded-full w-40 h-40 object-cover" /></a>
    </div>

    <div class="mt-4 prose">
        <h3 class="text-center">Hi there 👋</h3>

        <p class="font-medium text-center">I'm Sam, a full-stack developer from Whitley Bay, UK.</p>

        <ul class="rounded-3xl shadow-2xl bg-white px-6 py-4 sm:px-8">
            <li>🎓 I'm a Laracasts graduate, meaning I love all things <strong>Laravel</strong> and <strong>VueJS</strong>.</li>
            <li>🏢 I split my time as a contractor and release products through Doddle Soft Ltd.</li>
            <li>🏳️‍🌈 We have a flagship product, an advertising and booking platform called <a href="https://www.dodays.co.uk" title="DoDays Home" target="_blank">DoDays</a>.</li>
            <li>🌱 I'm currently learning more about <strong>DDD</strong> and <strong>EDA</strong> in the AWS serverless ecosystem.</li>
            <li>👯 I'm looking to collaborate on anything <strong>Open Source</strong>.</li>
            <li>💬 Ask me anything about <strong>webdev</strong>.</li>
            <li>
                <div class="flex items-center mt-0 mb-0">
                    <span>📫 You can reach me at</span>
                    @include('_partials.icons')
                </div>
            </li>
            <li>👬🏻 Fun fact: I'm a twin to the beautiful Tommy B!</li>
        </ul>
    </div>
@stop
