@extends('layouts.aboutpage')
@section('content')

    {{--<h1>This is my About Page</h1>--}}
    {{--<p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>--}}

    <br><br><br><br>

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
            <div class="col-lg-4">
                {{--<svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>--}}
                <img class="bd-placeholder-img rounded-circle" src="https://images-na.ssl-images-amazon.com/images/I/61Yrv9gOflL.jpg" width="140" height="140" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/></img>
                <h2>Live Your Best Life</h2>
                <p style="font-family: cursive">Living the good life can mean something different for everyone. However, there is still a general understanding as what this idea entails to most human beings living in the modern world to enjoy the present.</p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img class="bd-placeholder-img rounded-circle" src="https://rukminim1.flixcart.com/image/832/832/poster/7/s/v/amy-man-climbing-on-a-mountain-with-a-positive-aim-to-reach-original-imae4k4ehhuau8vb.jpeg?q=70" width="140" height="140" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/></img>
                <h2>Categories To Explore</h2>
                <p style="font-family: cursive">There are various categories to explore from our website which includes Music, Art, Business, Food and Drinks, Parties, Festivals, Classes, Sports and Wellness. Do explore at your best and to fullest.</p>
                {{--<p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>--}}
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img class="bd-placeholder-img rounded-circle" src="http://eightball.ie/wp-content/uploads/sites/377/2016/05/shutterstock_142155271.jpg" width="140" height="140" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/></img>
                <h2>Do Not Miss Events</h2>
                <p style="font-family: cursive">We have a lot of exciting and engaging events to bring out the josh and make you unleash the fullest of the adventurous happenings. Do not miss the opportunity to burst out your stress levels.</p>
                {{--<p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>--}}
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <div style="font-max-size: medium">
            <p style="font-max-size: medium">Upcoming Events</p>
        </div>

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">Get On The Dance Floor <span class="text-muted">It’ll blow your mind.</span></h2>
                <p class="lead" style="font-family: cursive">The world is a stage and the stage is a world of Enetertainment. Music is a great way to relive the day to day stress. Almost every person is interested in any kind of music. Get on the Dance floor and enjoy music with everyone around you. Choreograph your own dance movements and rock on the floor, you also win exciting prizes and get cheered up by the audience.
                </p><br>
                <p class="lead" style="font-family: cursive">Come on! Get High On Heels!!!</p>
            </div>
            <div class="col-md-5">
                <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="https://i0.wp.com/curiousasacathy.com/wp-content/uploads/2018/09/hit-the-dance-floor-announcement-Generic.jpg?fit=500%2C500&ssl=1" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/></img>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">Oh yeah, it’s the Party Night. <span class="text-muted">Its So much Fun.</span></h2>
                <p class="lead" style="font-family: cursive">Life is a Party Dress like it! Are you looking for a crazy night out partying in which you would to take tons of pictures of all the moments and dancing captured from you and your friends? Look no further we exclusively arrange parties on all weekends. Come with family and friends and have fun all night with drinks and music concerts happening all through the night. Loud music and weekeend parties.</p>
                <p class="lead" style="font-family: cursive">Let's Go For a Party Tonight!!!</p>
            </div>

            <div class="col-md-5 order-md-1">
                <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="https://m.media-amazon.com/images/I/A1YbE4F+RuL._SS500_.jpg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/></img>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">And lastly, Food & Drinks. <span class="text-muted">Hurrah!</span></h2>
                <p class="lead" style="font-family: cursive">Over 50 local restaurants will be serving bold bacon-inspired dishes, and the best local breweries will be pouring over 100 top craft varietals. Indulge in dishes like unlimited bacon man 'n cheese, pork banh mi, and chocolate covered bacon and wash it all down with unlimited pours from the best east coast brewers. With incredible live music, delicious BBQ vibes, and awesome games and contests, this is how you kick off summer in NYC.
                </p>
                <p class="lead" style="font-family: cursive">What Else More Than This!!!</p>
            </div>
            <div class="col-md-5">
                <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="https://m.media-amazon.com/images/I/81TVvT7gE-L._SS500_.jpg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/></img>
            </div>
        </div>

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->
@endsection
