<section class="hero is-fullheight is-default is-bold">
    <div class="hero-head">
        <nav class="navbar has-background-black-ter is-fixed-top">
            <div class="container ">
                <div class="navbar-brand">
                    <a class="navbar-item" href=" {{ url('/') }}">
                        <img src="img/logo-white.png" alt="Logo">
                    </a>
                    <span class="navbar-burger burger" data-target="navbarMenu">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </div>
                <div id="navbarMenu" class="navbar-menu">
                    <div class="navbar-end">
                        <div class="tabs is-right">
                            <ul>
                                <li class="is-active"><a href=" {{ url('/') }}"
                                        class="has-text-info">{{ __('hero-section.home') }}</a></li>
                                <li><a href="#heroes-grid"
                                        class="has-text-white">{{ __('hero-section.characters') }}</a></li>
                                <li><a href="#cities-grid" class="has-text-white">{{ __('hero-section.cities') }}</a>
                                </li>
                                <li><a href="#about-us" class="has-text-white">{{ __('hero-section.about_us') }}</a>
                                </li>
                                <li><a href="#contact-us" class="has-text-white">{{ __('hero-section.contact') }}</a>
                                </li>
                                <li><a href="{{ url(App::getLocale(), 'viewers') }}" class="has-text-white">{{ __('Viewers') }}</a>
                                </li>
                                <li><a href="{{ url(App::getLocale() == 'es' ? 'en':'es') }}" class="has-text-white">{{ App::getLocale() == 'es' ? 'en':'es' }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <div class="hero-body">
        <div class="container has-text-centered">
            <div class="columns is-vcentered">
                <div class="column is-5">
                    <figure class="image is-4by3">
                        <img src="img/batman_sup_hero_section.jpg" alt="Description">
                    </figure>
                </div>
                <div class="column is-6 is-offset-1">
                    <h1 class="title is-2">
                        {{ __('hero-section.title') }}
                    </h1>
                    <h2 class="subtitle is-4">
                        {{ __('hero-section.subtitle') }}
                    </h2>
                    <br>
                    <p class="has-text-centered">
                        <a class="button is-medium is-info is-outlined" href="https://youtu.be/IQFcpuYi8L4"
                            target="_blank">
                            {{ __('hero-section.button') }}
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="hero-foot">
        <div class="container">
            <div class="tabs is-centered">
                <ul>
                    <li><a>{{ __('hero-section.bottom') }}</a></li>
                </ul>
            </div>
        </div>
    </div>

</section>
