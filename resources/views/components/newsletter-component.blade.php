{{-- <div>
    <!-- Live as if you were to die tomorrow. Learn as if you were to live forever. - Mahatma Gandhi -->
</div> --}}
<div class="subscribe-area">
    <div class="top-content">
        <i class="flaticon-email"></i>
        <h3>S'inscrire à la Newsletter</h3>
        <p>Recevez des mises à jour sur les Bourses, les actualités et les événements</p>
    </div>
    <form class="newsletter-form" action="{{route('newsletters')}}" method="POST" id="newsletter-form-data-request">
        @csrf
        @method("POST")
        <input type="email" class="form-control" placeholder="Votre adresse e-mail" id="email" name="email" required="" autocomplete="on">
        <button class="default-btn" type="submit">
            S'abonner
        </button>
        <div id="validator-newslette" class="form-result newsletter_error validation-danger email_error"></div>
    </form>
</div>