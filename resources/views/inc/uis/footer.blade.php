<footer>
    <div class="newsletter-section">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="" class="footer-logo">
                        <img src="{{asset('ui/logos/logo.png')}}" alt="Snabe - Service Nationale des Bourses Exterieures" />
                    </a>
                </div>

                <script>
                    function cs_mailchimp_submit(theme_url, counter, admin_url) {
                        "use strict";
                        $ = jQuery;
                        //$('#btn_newsletter_'+counter).hide();
                        $("#process_" + counter).html('<div id="process_newsletter_' + counter +
                            '"><i class="icon-refresh icon-spin" style="float:right;margin:12px 0px 0px 0px;"></i></div>');
                        $.ajax({
                            type: "POST",
                            url: admin_url,
                            data: $("#mcform_" + counter).serialize() + "&action=cs_mailchimp",
                            success: function(response) {
                                $("#mcform_" + counter)
                                    .get(0)
                                    .reset();
                                $("#newsletter_mess_" + counter).fadeIn(600);
                                $("#newsletter_mess_" + counter).html(response);
                                $("#btn_newsletter_" + counter).fadeIn(600);
                                $("#process_" + counter).html("");
                            },
                        });
                    }
                </script>

                <div id="process_newsletter_1" class="col-md-9">
                    <div id="process_1" class="cs-show-msg"></div>
                    <span class="newsletter-title">Subscribe Weekly Newsletter</span>
                    <form class="newsletter-from"
                        action="javascript:cs_mailchimp_submit('https://uoce.chimpgroup.com/wp-content/themes/uoc','1','https://uoce.chimpgroup.com/wp-admin/admin-ajax.php')"
                        id="mcform_1" method="post">
                        <div id="newsletter_mess_1" style="display: none;" class="cs-error-msg"></div>
                        <i class="icon-envelope4"></i>
                        <input id="cs_list_id" type="hidden" name="cs_list_id" value="0" />
                        <input type="email" id="mc_email" name="mc_email" placeholder=" Enter Valid Email Address" />
                        <input type="submit" id="btn_newsletter_1" value="Submit" />
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div id="footer-widget">
        <div class="container">
            <div class="row">
                <aside class="widget col-md-3 widget_text">
                    <div class="widget-section-title">
                        <h4>Contact Info</h4>
                    </div>
                    <ul>
                        <li>
                            <i class="icon-map-marker"></i>
                            <p>123 Eccles Old Road New Salford Road, East London, United Kingdom, M6 7AF</p>
                        </li>
                        <li>
                            <i class="icon-phone6"></i>
                            <p><span>Telephone</span>02 562-958, 02 562-958</p>
                        </li>
                        <li>
                            <i class="icon-dribbble6"></i>
                            <p><span>International</span> 123 500 500 500</p>
                        </li>
                        <li>
                            <i class="icon-envelope4"></i>
                            <p>
                                <span>email</span>
                                <a href="mailto:info@example.com">info@example.com</a>
                            </p>
                        </li>
                    </ul>
                </aside>
                <aside class="widget col-md-3 facebok_widget">
                    <style scoped="">
                        .facebookOuter {
                            background-color: ;
                            width: 100%;
                            padding: 0;
                            float: left;
                        }

                        .facebookInner {
                            float: left;
                            width: 100%;
                        }

                        .facebook_module,
                        .fb_iframe_widget>span,
                        .fb_iframe_widget>span>iframe {
                            width: 100% !important;
                        }

                        .fb_iframe_widget,
                        .fb-like-box div span iframe {
                            width: 100% !important;
                            float: left;
                        }
                    </style>
                    <div class="widget-section-title">
                        <h4>Highlights</h4>
                    </div>

                    <div id="fb-root"></div>
                    <script>
                        (function(d, s, id) {
                            var js,
                                fjs = d.getElementsByTagName(s)[0];
                            if (d.getElementById(id)) return;
                            js = d.createElement(s);
                            js.id = id;
                            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";
                            fjs.parentNode.insertBefore(js, fjs);
                        })(document, "script", "facebook-jssdk");
                    </script>

                    <div style="background: ;" class="fb-like-box" data-href="http://www.facebook.com/envato"
                        data-width=" " data-height=" " data-hide-cover="false" data-show-facepile="false"
                        data-show-posts="false"></div>
                </aside>
                <aside class="widget col-md-3 cs_ads_banner">
                    <div class="cs_banner_section">
                        <a onclick="cs_banner_click_count_plus('https://uoce.chimpgroup.com/wp-admin/admin-ajax.php', '276833028')"
                            id="cs_banner_clicks276833028" href="" target="_blank">
                            <img src="wp-content/uploads/add-img.jpg" alt="Sidebar" />
                        </a>
                    </div>
                </aside>
                <aside class="widget col-md-3 cs-campunews">
                    <div class="widget-section-title">
                        <h4>
                            Latest News
                        </h4>
                    </div>
                    <div class="cs-campunews custom-fig">
                        <ul>
                            <li>
                                <figure>
                                    <a href="index-55.htm?p=200"><img
                                            src="wp-content/uploads/UOCE-Blogs-Masonry-Posts-10-150x150.jpg"
                                            alt="image_url" /></a>

                                    <figcaption>
                                        <a href="wp-content/uploads/UOCE-Blogs-Masonry-Posts-10-150x150.jpg"
                                            rel="prettyPhoto[gallery2]" title="prettyPhoto"></a>
                                    </figcaption>
                                </figure>
                                <div class="cs-campus-info">
                                    <!--                            <div class="cs-newscategorie">    </div>-->
                                    <h6><a href="index-55.htm?p=200">Law degree is the Most valuable degree </a></h6>
                                    <time datetime="2008-02-14 20:00">February 1, 2020 </time>
                                    <!--                            <a href="" class="cmp-comment"></a>-->
                                </div>
                            </li>

                            <li>
                                <figure>
                                    <a href="index-54.htm?p=199"><img
                                            src="wp-content/uploads/UOCE-Blogs-Masonry-Posts-11-150x150.jpg"
                                            alt="image_url" /></a>

                                    <figcaption>
                                        <a href="wp-content/uploads/UOCE-Blogs-Masonry-Posts-11-150x150.jpg"
                                            rel="prettyPhoto[gallery2]" title="prettyPhoto"></a>
                                    </figcaption>
                                </figure>
                                <div class="cs-campus-info">
                                    <!--                            <div class="cs-newscategorie">    </div>-->
                                    <h6><a href="index-54.htm?p=199">Less unavoidable educationally </a></h6>
                                    <time datetime="2008-02-14 20:00">February 1, 2020 </time>
                                    <!--                            <a href="" class="cmp-comment"></a>-->
                                </div>
                            </li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </div>

    <div class="bottom-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="copyright">
                        <p>©{{idate('Y')}} {{ "SNABE"}} Tous  Droits Réservés <a class="&#039;cscolor&#039;" href="#">/ DialloDBA</a>
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <span id="backtop"><i class="icon-arrow-up9"></i></span>

                    <div class="social-media"></div>
                </div>
            </div>
        </div>
    </div>
</footer>
