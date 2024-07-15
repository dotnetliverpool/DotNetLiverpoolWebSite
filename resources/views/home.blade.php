<x-layout>
    <div class="content">
        <section class="container centered">
            <div class="about">
                <div class="avatar"><img src="https://www.dotnetliverpool.org.uk/img/logo.png" alt="avatar"></div>
                <h1>.Net Liverpool</h1>
                <h2>Liverpool's best .Net development group!</h2>
                <ul>
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
            </div>
        </section>
    </div>

    <section class="container">
        <div id="sponsor-wrapper">

            {{--   Our Sponsors Component Here --}}
            <h2>Our Sponsors</h2>
            <ul class="sponsorsWrap">
                <li>
                    <a href="https://summittotech.com">
                        <img src="../../public/img/summittotech.png" alt="summit to tech logo">
                    </a>
                </li>
            </ul>



            <!-- Sponsor Us Form HERE -->
            <div class="btn-wrap">
                <button id="show-popup">Sponsor Us</button>
            </div>

        </div>
        <p>Join us today!</p>
    </section>
</x-layout>
