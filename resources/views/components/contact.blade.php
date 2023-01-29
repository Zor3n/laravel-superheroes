<section id="contact-us" class="hero is-medium">
    <div class="hero-body ">
        <p class="title has-text-centered">
            {{ __('contact.main_title') }}
        </p>
        <div class="field is-horizontal">
            <div class="field-body">
                <div class="field ">
                    <label class="label">{{ __('contact.contact_user_label_name') }}</label>
                    <p class="control is-expanded has-icons-left">
                        <input class="input" type="text" placeholder="{{ __('contact.contact_user_name_placeholder') }}">
                    </p>
                </div>
                <div class="field">
                    <label class="label">{{ __('contact.contact_user_label_emain') }}</label>
                    <p class="control is-expanded has-icons-left">
                        <input class="input" type="email" placeholder="{{ __('contact.contact_user_email_placeholder') }}">
                    </p>
                </div>
            </div>
        </div>

        <div class="field is-horizontal">
            <div class="field-body">
                <div class="field ">
                    <label class="label">{{ __('contact.contact_user_label_message') }}</label>
                    <p class="control is-expanded has-icons-left">
                        <textarea class="textarea" type="text" placeholder="{{ __('contact.contact_user_message_placeholder') }}"></textarea>
                    </p>
                </div>
                <div class="field">
                </div>
            </div>
        </div>

        <div class="field is-horizontal">
            <div class="field-body">
                <div class="field">
                    <div class="control">
                        <button class="button is-primary">
                            {{ __('contact.contact_button') }}
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
