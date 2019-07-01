<div class="container-wrap">
    <footer id="fh5co-footer" role="contentinfo">
        <div class="row">
            <div class="col-md-3 fh5co-widget">
                <h4>About Neat</h4>
                <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
            </div>

            <!-- create element by Providers -->
            @include('layouts.last_post')

            <div class="col-md-3 col-md-push-1">
                <h4>Links</h4>
                <ul class="fh5co-footer-links">
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li><a href="{{ route('work') }}">Work</a></li>
                    <li><a href="{{ route('blog') }}">Blog</a></li>
                    <li><a href="{{ route('about') }}">About us</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </div>

            <div class="col-md-3">
                <h4>Contact Information</h4>
                <ul class="fh5co-footer-links">
                    <li>198 West 21th Street, <br> Suite 721 New York NY 10016</li>
                    <li><a href="tel://1234567920">+ 1235 2355 98</a></li>
                    <li><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
                    <li><a href="http://gettemplates.co">gettemplates.co</a></li>
                </ul>
            </div>

        </div>
    </footer>
</div>
</div>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
</div>
<script src="{{asset('js/app.js')}}"></script>

<!-- jQuery -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<!-- jQuery Easing -->
<script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- Waypoints -->
<script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
<!-- Flexslider -->
<script src="{{asset('js/jquery.flexslider-min.js')}}"></script>
<!-- Magnific Popup -->
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('js/magnific-popup-options.js')}}"></script>
<!-- Counters -->
<script src="{{asset('js/jquery.countTo.js')}}"></script>
<!-- Main -->
<script src="{{asset('js/main.js')}}"></script>

<script src="https://cdn.jsdelivr.net/npm/vuetify/dist/vuetify.js"></script>

</body>
</html>

