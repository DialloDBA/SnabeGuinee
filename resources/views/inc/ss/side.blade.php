<div class="sidebarModal modal right fade" id="sidebarModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-bs-dismiss="modal"><i class="ri-close-line"></i></button>
            <div class="modal-body">
                <a href="{{route('home')}}">
                    <img src="{{asset('asset/images/logo-2.png')}}" class="{{config('app.name')}} logo" alt="{{config('app.name')}} logo">
                    {{-- <img src="{{asset('asset/images/logo-2.png')}}" class="{{config('app.name')}} logo" alt="{{config('app.name')}} logo"> --}}
                </a>
                <div class="sidebar-content">
                    <h3>À propos de nous</h3>
                    <p>Le Service National des Bourses Extérieures (SNABE) est un Etablissement Public à caractère Administratif (EPA). Doté d’une autonomie financière et de gestion, placé sous la tutelle technique du Ministre Directeur de Cabinet de la Présidence de la République et sous la tutelle financière du Ministère en charge des Finances.</p>
                    <div class="sidebar-btn">
                        <a href="{{route('contact')}}" class="default-btn">Prenez contact</a>
                    </div>
                </div>
                <div class="sidebar-contact-info">
                    <h3>Coordonnées</h3>
                    <ul class="info-list">
                        <li>
                            <i class="ri-phone-fill"></i>
                             <a href="tel:{{$info->telephone_1}}">{{$info->telephone_1}}</a>
                        </li>
                        <li>
                            <i class="ri-mail-line"></i>
                            <a  href=""><span>snabeguinee@gmail.com</span></a>
                        </li>
                        <li><i class="ri-map-pin-line"></i>{{$info->adresse_1}}</li>
                    </ul>
                </div>
                <ul class="sidebar-social-list">
                    <li>
                        <a href="{{$info->facebook}}" target="_blank"><i class="flaticon-facebook"></i></a>
                    </li>
                    <li>
                        <a href="{{$info->twitter}}" target="_blank"><i class="flaticon-twitter"></i></a>
                    </li>
                    <li>
                        <a href="{{$info->linkedin}}" target="_blank"><i
                                class="flaticon-linkedin"></i></a>
                    </li>
                    <li>
                        <a href="{{$info->youtube}}" target="_blank">
                            <i class="ri-youtube-fill"></i></a>
                        </a>
                    </li>
                </ul>
                <div class="contact-form">
                    <h3 class="text-prim form-title">Prêt à commencer?</h3>
                    <form id="sideContactFormMessage" action="{{ route('contact.store')}}" method="POST">
                        @method('POST')
                        @csrf
                        <div class="row">
                            <div class="col-lg-12 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="nom_complet" id="nom_complet" class="form-control mb-1" placeholder="Votre Nom et Prénom">
                                    <div class="help-block text-danger nom_complet-with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6">
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control my-1" placeholder="abcd@gmail.com">
                                        <div class="help-block text-danger email-with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <input type="tel" name="telephone" id="telephone" value="+224 " class="form-control my-1" placeholder="Votre Numéro de téléphone">
                                    <div class="help-block text-danger telephone-with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <input type="text" name="sujet" id="sujet" class="form-control my-1"  placeholder="Votre Sujet...">
                                    <div class="help-block text-danger sujet-with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <textarea name="message" class="form-control my-1" id="message" cols="30" rows="6" placeholder="Ecrire votre message ici..."></textarea>
                                    <div class="help-block text-danger message-with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <div class="form-check">
                                        <input name="termes" value="J'accepte les termes et la politique de confidentialité." class="form-check-input" type="checkbox" id="gridCheck" required="">
                                        <label class="form-check-label" for="gridCheck">
                                            J'accepte les <a href="{{ route('home') }}">termes</a> et <a href="{{route('privacy')}}">la politique de confidentialité</a>
                                        </label>
                                        <div class="help-block text-danger termes-with-errors gridCheck-error"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <button type="submit" class="default-btn">Envoyez le message <span></span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>