<footer class="footer_module">
    <div class="footer_module__inner">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="site-branding">
                        <a href="{{ esc_url(home_url('/')) }}">
                            <svg class= "logo" id="Component_3_7" data-name="Component 3 – 7" xmlns="http://www.w3.org/2000/svg" width="221.002" height="65.93" viewBox="0 0 221.002 65.93">
                                <path id="Union_10" data-name="Union 10" d="M65.228,65.93A13.87,13.87,0,0,1,64.7,38.2V27.74H13.87A13.87,13.87,0,0,1,13.87,0H115.5a13.87,13.87,0,0,1,0,27.74H98.581V38.19H142.3a13.87,13.87,0,1,1,0,27.74Z" transform="translate(156.171 65.93) rotate(180)" fill="#eceff4"/>
                                <text id="Cloud" transform="translate(55.001 29)" fill="#7b88a1" font-size="30" font-family="Rubik-SemiBold, Rubik" font-weight="600"><tspan x="0" y="0">Cloud</tspan></text>
                                <text id="Creations" transform="translate(77.002 55)" fill="#7b88a1" font-size="30" font-family="Rubik-SemiBold, Rubik" font-weight="600"><tspan x="0" y="0">Creations</tspan></text>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div class="row no-gutters">
                        @foreach(get_field('main_links', 'options') as $link)
                            <div class="col-lg-3 col-md-6 mb-lg-0 mb-2">
                                <h4 class="footer_module__link-heading">{{ $link['link_title'] }}</h4>
                                <div class="footer_module__content">
                                    <p>{{ $link['link_content'] }}</p>
                                    <a href="{{ $link['link_url'] }}">{{ $link['button']['button_title'] }}</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="footer_module__copyright-block">
            <div>
                Copyright © <?php echo date('Y'); ?> Cloud Creations. All Rights Reserved. | <a href="/wp-login.php">Log in</a>
            </div>
        </div>
</footer>
</div><!-- #panel end -->
</div><!-- #app end -->

@php(do_action('get_footer'))
@php(wp_footer())
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/parallaxify/0.0.2/jquery.parallaxify.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
@stack('footer.scripts')
</body>
</html>
