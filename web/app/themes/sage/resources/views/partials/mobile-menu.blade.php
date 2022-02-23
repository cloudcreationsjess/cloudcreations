<nav class="mobile-menu-panel mobile" id="mobile-menu-slide">
    <div id="mobile-menu-branding" class="fade-in animation-delay-6">
        <a id="header-logo" class="" href="{{ esc_url(home_url('/')) }}" title="{{ esc_attr(get_bloginfo('name', 'display')) }}" rel="home">
            <svg id="CC_LOGO" data-name="CC LOGO" xmlns="http://www.w3.org/2000/svg" width="249.447" height="81.875" viewBox="0 0 249.447 81.875">
                <path id="Union_10" data-name="Union 10" d="M49.485,148a17.224,17.224,0,0,1-.268-34.446v-12a9.094,9.094,0,0,1,.053-.978H-15.775A17.225,17.225,0,0,1-33,83.349,17.225,17.225,0,0,1-15.775,66.125H114.172a17.224,17.224,0,1,1,0,34.448H92.215a9.094,9.094,0,0,1,.053.978v12h55.956a17.224,17.224,0,0,1,0,34.448Z" transform="translate(165.447 148) rotate(180)" fill="#eceff4"/>
                <text id="Cloud" transform="translate(67.447 37)" fill="#7b88a1" font-size="32" font-family="Rubik-SemiBold, Rubik" font-weight="600"><tspan x="0" y="0">Cloud</tspan></text>
                <text id="Creations" transform="translate(95.447 65)" fill="#7b88a1" font-size="32" font-family="Rubik-SemiBold, Rubik" font-weight="600"><tspan x="0" y="0">Creations</tspan></text>
            </svg>
        </a>
    </div>
    <div id="site-navigation">
        <div id="site-menu" class="text-center" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
            @if (has_nav_menu('primary_navigation'))
                {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_id' => 'mobile-menu', 'depth' => 2]) !!}
            @endif
        </div>
    </div>
</nav>
