@extends('layouts.default')
@section('content')


    <div class="jumbotron" id="jumbotron">
        <div class="container">
            <h1 class="display-3" style="font-family: 'Lohit Gujarati'; color: white; font-max-size: medium ">New York
                Amazing Events!</h1>
            <p style="font-family: cursive; color: white; font-weight: bolder"> Want to know what’s happening in New
                York today, this weekend or in the coming months? Use our website to find the best things to do in
                winter, spring, summer and fall. Major events to look forward to in the beginning of the year include
                the New York Holi in the City Festival as well as The Lights Fest. Ready to unleash your inner culture
                vulture? Peep our top picks for the best art shows and concerts this year.</p>
            <p><a class="btn btn-primary btn-lg" href="https://www.eventbrite.com/d/ny--new-york/parties/"
                  role="button">See More Events &raquo;</a></p>
        </div>
    </div>
    <script>
        //Array of images which you want to show: Use path you want.
        var images = new Array('https://specials-images.forbesimg.com/imageserve/5a8d8e084bbe6f2652f61ae9/960x0.jpg?fit=scale', 'https://www.wowamazing.com/wp-content/uploads/2015/08/lanterns_released_sky_festival_chiang_mai_province_thailand_20121128.jpg', 'https://www.evensi.com/storage/event/286713485/cover/1547737083353.jpg');
        var myIndex = 0;
        carousel();

        function carousel() {

            var x = document.getElementById('jumbotron');
            //  x.style.backgroundImage = "none";

            if (myIndex >= images.length) {
                myIndex = 0
            }
            x.style.backgroundImage = "url('" + images[myIndex] + "')";
            setTimeout(carousel, 3000); // Change image every 3 seconds
            myIndex++;
        }
    </script>

    <div class="container">
        <!-- Example row of columns -->
        <div class="row">
            <div class="col-md-4">
                <h2 style="color: darkblue">Holi In The City</h2>
                <p style="font-family: cursive"> Festival of Colors: Holi NYC is a joyous celebration of the coming of
                    spring. It is a day of revelry full of live bands, DJs, art installations, delicious food, and great
                    people. It is a time to throw vibrantly colored powder at your friends and at strangers, and to
                    dance together as one huge colorful mass of beautiful people. </p>
                <p><a class="btn btn-secondary"
                      href="https://www.eventbrite.com/e/holi-in-the-city-sat-march-16-nycs-biggest-festival-of-colors-party-tickets-51566240012"
                      role="button">View details &raquo;</a></p>
            </div>
            <div class="col-md-4">
                <h2 style="color: darkblue">The Lights Fest</h2>
                <p style="font-family: cursive">The lights fest is dedicated to leaving a positive impact on the
                    environment and everyone who attends our event. This is an event that is for everyone but cultivates
                    individual experiences. Whether you’re commemorating or celebrating, you’re creating a special
                    memory that will last a lifetime. </p>
                <p><a class="btn btn-secondary" href="https://www.eventbrite.com/o/the-lights-fest-18734482771"
                      role="button">View details &raquo;</a></p>
            </div>
            <div class="col-md-4">
                <h2 style="color: darkblue">Chocolate & Wine Fest</h2>
                <p style="font-family: cursive">Enjoy Chocolate in a multitude of decadent presentations – from sweet
                    hand-rolled truffles to oooey goooey melted chocolate fondue and an amazing selection of bean-to-bar
                    artisan chocolates – Quench your thirst with Champagne, Prosecco and premium wines and a sip of fine
                    whiskies!</p>
                <p><a class="btn btn-secondary"
                      href="https://www.eventbrite.com/e/chocolate-wine-whiskey-festival-brooklyn-tickets-50920334090"
                      role="button">View details &raquo;</a></p>
            </div>
        </div>

        <hr>

    </div> <!-- /container -->


@endsection
