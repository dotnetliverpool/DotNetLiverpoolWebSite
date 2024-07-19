<x-layout>
    <section class="container page">
        <article>
            <header>
                <h1>Support Our Mission</h1>
            </header>
            <p>Our mission is to foster a thriving technology community for professionals and students within liverpool.
            <p>Help us achieve this by:</p>
            <ol>
                <li>
                    <p>Spreading the Word: Share our Meetup events on your social networks and with your colleagues.
                        Let's bring more like-minded individuals into our community.
                    </p>
                </li>
                <li>
                    <p>Contribute your Expertise: Have a topic you're passionate about? Consider giving a talk at our Meetup.
                        Your insights can inspire and educate others in the community.
                    </p>
                </li>
                <li>
                    <p>Contribute for our meetups: help fuel our speakers' creativity by <strong><a href="">BUYING A CUP OF COFFEE</a></strong>
                        for them. Every contribution makes a difference!
                    </p>
                </li>
            </ol>



            <div id="donate-button-container">
                <div id="donate-button"></div>
                <script src="https://www.paypalobjects.com/donate/sdk/donate-sdk.js" charset="UTF-8"></script>
                <script>
                    PayPal.Donation.Button({
                        env: 'production',
                        business : 'donate@dotnetliverpool.org.uk',
                        image: {
                            src: './img/donate_button.png',
                            alt: 'Donate with PayPal button',
                            title: 'PayPal - The safer, easier way to pay online!',
                        }
                    }).render('#donate-button');
                </script>
            </div>
        </article>
    </section>
</x-layout>
