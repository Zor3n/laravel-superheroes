<style>
    figure>img {
        object-fit: cover;
    }
</style>

<section id="heroes-grid" class="hero is-black has-background-black-ter is-small ">
    <section class="container py-6">
        <div class="hero-body">
            <div class="container has-text-centered">
                <p class="title">
                    {{ __('heroes-grid.dc_title') }}
                </p>
                <p class="subtitle">
                    {{ __('heroes-grid.dc_subtitle') }}
                </p>
            </div>
        </div>
    </section>

    <section class="container">
        <div class="columns is-multiline is-centered mb-0">
            @if (count($dc_heroes) > 0)
                @foreach ($dc_heroes as $hero)
                    <div class="column is-4">
                        <div class="card is-shady">
                            <div class="card-image">
                                <a href="{{ $hero['url_fan_page'] }}" target="_blank" rel="noopener noreferrer">
                                    <figure class="image is-4by3">
                                        <img src="img/{{ $hero['img'] }}" alt="Placeholder image">
                                    </figure>
                                </a>
                            </div>
                            <div class="card-content">
                                <div class="content">
                                    <h4>{{ $hero['name'] }}</h4>
                                    <p>{{ $hero['desc'] }}</p>
                                    <a class="button is-link" target="_blank"
                                        href="{{ $hero['url_fan_page'] }}">{{ __('heroes-grid.card_button') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="my-6">
                    <p>{{ __('heroes-grid.not_found') }}</p>
                </div>
            @endif

        </div>
    </section>

    <section class="container py-6">
        <div class="hero-body">
            <div class="container has-text-centered">
                <p class="title">
                    {{ __('heroes-grid.marvel_title') }}
                </p>
                <p class="subtitle">
                    {{ __('heroes-grid.marvel_subtitle') }}
                </p>
            </div>
        </div>
    </section>

    <section class="container pb-6">
        <div class="columns is-multiline is-centered mb-0">
            @if (count($marvel_heroes) > 0)
                @foreach ($marvel_heroes as $hero)
                    <div class="column is-4">
                        <div class="card is-shady">
                            <div class="card-image">
                                <a href="{{ $hero['url_fan_page'] }}" target="_blank" rel="noopener noreferrer">
                                    <figure class="image is-4by3">
                                        <img src="img/{{ $hero['img'] }}" alt="Placeholder image">
                                    </figure>
                                </a>
                            </div>
                            <div class="card-content">
                                <div class="content">
                                    <h4>{{ $hero['name'] }}</h4>
                                    <p>{{ $hero['desc'] }}</p>
                                    <a class="button is-link" target="_blank"
                                        href="{{ $hero['url_fan_page'] }}">{{ __('heroes-grid.card_button') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="my-6">
                    <p>{{ __('heroes-grid.not_found') }}</p>
                </div>
            @endif
        </div>
    </section>
</section>
