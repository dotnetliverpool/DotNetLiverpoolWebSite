<x-layout>
    <section class="container mx-auto flex flex-col items-center justify-center">
        <div>
            <img class="rounded-full max-w-52 max-h-52" src="https://www.dotnetliverpool.org.uk/img/logo.png">
        </div>
        <h1 class="mt-4 text-2xl font-bold">.Net Liverpool</h1>
        <h2 class="mt-2 text-xl text-gray-700">Liverpool's best .Net development group!</h2>
        <ul class="flex mt-4 space-x-4">
            <li>
                <a href="https://github.com/dotnetliverpool" aria-label="Github">
                    <i class="fab fa-github" aria-hidden="true"></i>
                </a>
            </li>
            <li>
                <a href="https://twitter.com/dotnetliverpool" aria-label="Twitter">
                    <i class="fab fa-twitter" aria-hidden="true"></i>
                </a>
            </li>
            <li>
                <a href="https://www.meetup.com/Dot-NET-Liverpool" aria-label="Meetup">
                    <i class="fab fa-meetup" aria-hidden="true"></i>
                </a>
            </li>
            <li>
                <a href="https://www.youtube.com/channel/UCoM7c1MjQv9Y9-fofGXDJzQ" aria-label="Youtube">
                    <i class="fab fa-youtube" aria-hidden="true"></i>
                </a>
            </li>
        </ul>
    </section>

    <section class="py-12">
        <div class="container mx-auto text-center">
{{--            <h2 class="text-lg font-semibold uppercase text-gray-500">Sponsors</h2>--}}
            <p class="text-2xl font-bold text-gray-800 mt-2">Proudly Sponsored By</p>
            <div class="flex flex-wrap justify-center gap-4 mt-4 px-6">
                    <div class="g-white border border-gray-700 shadow-md rounded-lg  flex items-center justify-center">
                        <a href="https://summittotech.com" target="_blank">
                            <img  src="{{ asset('/img/summittotech.png') }}" alt="Summit to Tech" class="rounded-lg max-h-28 max-w-28">
                        </a>
                    </div>
            </div>
            <p>Become a sponsor today:
                <button></button></p>

        </div>
    </section>
</x-layout>
