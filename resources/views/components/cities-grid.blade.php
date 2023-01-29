<section id="cities-grid" class="hero container pb-6">

    <section class="container py-6">
        <div class="hero-body">
            <div class="container has-text-centered">
                <p class="title">
                    {{ __('cities-grid.main_title') }}
                </p>
                <p class="subtitle">
                    {{ __('cities-grid.main_subtitle') }}
                </p>
            </div>
        </div>
    </section>

    <div class="columns is-multiline is-centered mb-0">
        @if (count($cities) > 0)
            @foreach ($cities as $city)
                <div class="column is-4">
                    <div class="card is-shady">
                        <div class="card-image">
                            <a href="{{ $city['url_fan_page'] }}" target="_blank" rel="noopener noreferrer">
                                <figure class="image is-4by3">
                                    <img src="img/{{ $city['img'] }}" alt="Placeholder image">
                                </figure>
                            </a>
                        </div>
                        <div class="card-content">
                            <div class="content">
                                <h4>{{ $city['name'] }}</h4>
                                <p>{{ $city['desc'] }}</p>
                                <a class="button is-link" target="_blank"
                                    href="{{ $city['url_fan_page'] }}">{{ __('cities-grid.card_button') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div class="my-6">
                <p>{{ __('cities-grid.not_found') }}</p>
            </div>
        @endif
    </div>
</section>
