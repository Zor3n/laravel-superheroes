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
                                <figure class="image is-4by3">
                                    <img src="img/{{ $hero['img'] }}" alt="Placeholder image" class="modal-button"
                                        data-target="modal-image2">
                                </figure>
                            </div>
                            <div class="card-content">
                                <div class="content">
                                    <h4>{{ $hero['name'] }}</h4>
                                    <p>{{ $hero['desc'] }}</p>
                                    <span class="button is-link modal-button"
                                        data-target="modal-image2">{{ __('heroes-grid.card_button') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                No records found!
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

    <section class="container">
        <div class="columns is-multiline is-centered mb-0">
            <div class="column is-4">
                <div class="card is-shady">
                    <div class="card-image">
                        <figure class="image is-4by3">
                            <img src="img/superman.jpg" alt="Placeholder image" class="modal-button"
                                data-target="modal-image2">
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="content">
                            <h4>Superman</h4>
                            <p>Superman, also known as the Man of Steel. His abilities include incredible
                                super-strength, super-speed, invulnerability, freezing breath, flight, and heat-vision.
                            </p>
                            <span class="button is-link modal-button"
                                data-target="modal-image2">{{ __('heroes-grid.card_button') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
