<div id="shopify-section-header" class="shopify-section">
          <div id="NavDrawer" class="drawer drawer--left">
            <div class="drawer__contents">
              <div class="drawer__fixed-header">
                <div class="drawer__header appear-animation appear-delay-1">
                  <div class="h2 drawer__title"></div>
                  <div class="drawer__close"><button type="button" class="drawer__close-button js-drawer-close"><svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-close" viewBox="0 0 64 64">
                        <path d="M19 17.61l27.12 27.13m0-27.12L19 44.74" />
                      </svg><span class="icon__fallback-text">Close menu</span></button></div>
                </div>
              </div>
              <div class="drawer__scrollable">
                <ul class="mobile-nav" role="navigation" aria-label="Primary">
                  <li class="mobile-nav__item appear-animation appear-delay-2"><a href="pages/faq.html" class="mobile-nav__link mobile-nav__link--top-level">FAQ</a></li>
                  <li class="mobile-nav__item appear-animation appear-delay-3"><a href="index.html" class="mobile-nav__link mobile-nav__link--top-level" data-active="true">Shop</a></li>
                  <li class="mobile-nav__item appear-animation appear-delay-7"><a href="collections/sale.html" class="mobile-nav__link mobile-nav__link--top-level">T-SHIRTS</a></li>
                  <li class="mobile-nav__item appear-animation appear-delay-6"><a href="collections/hoodies.html" class="mobile-nav__link mobile-nav__link--top-level">HOODIES</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div id="CartDrawer" class="drawer drawer--right">
            <form id="CartDrawerForm" action="https://coldstitch.com/cart" method="post" novalidate class="drawer__contents">
              <div class="drawer__fixed-header">
                <div class="drawer__header appear-animation appear-delay-1">
                  <div class="h2 drawer__title">Cart</div>
                  <div class="drawer__close"><button type="button" class="drawer__close-button js-drawer-close"><svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-close" viewBox="0 0 64 64">
                        <path d="M19 17.61l27.12 27.13m0-27.12L19 44.74" />
                      </svg><span class="icon__fallback-text">Close cart</span></button></div>
                </div>
              </div>
              <div class="drawer__inner">
                <div class="drawer__scrollable">
                  <div data-products class="appear-animation appear-delay-2"></div>
                </div>
                <div class="drawer__footer appear-animation appear-delay-4">
                  <div data-discounts></div>
                  <div class="cart__item-sub cart__item-row">
                    <div class="ajaxcart__subtotal">Subtotal</div>
                    <div data-subtotal>$0.00</div>
                  </div>
                  <div class="cart__item-row text-center"><small> Shipping, taxes, and discount codes calculated at checkout.<br /></small></div>
                  <div class="cart__checkout-wrapper"><button type="submit" name="checkout" data-terms-required="false" class="btn cart__checkout"> Check out </button></div>
                </div>
              </div>
              <div class="drawer__cart-empty appear-animation appear-delay-2">
                <div class="drawer__scrollable"> Your cart is currently empty. </div>
              </div>
            </form>
          </div>
          <style>
            .site-nav__link,
            .site-nav__dropdown-link:not(.site-nav__dropdown-link--top-level) {
              font-size: 16px;
            }

            .site-nav__link,
            .mobile-nav__link--top-level {
              text-transform: uppercase;
              letter-spacing: 0.2em;
            }

            .mobile-nav__link--top-level {
              font-size: 1.1em;
            }

            .site-header {
              box-shadow: 0 0 1px rgba(0, 0, 0, 0.2);
            }

            .toolbar+.header-sticky-wrapper .site-header {
              border-top: 0;
            }
          </style>
          <div data-section-id="header" data-section-type="header">
            <div class="toolbar small--hide">
              <div class="page-width">
                <div class="toolbar__content">
                  <div class="toolbar__item">
                    <ul class="inline-list toolbar__social">
                      <li><a target="_blank" rel="noopener" href="https://instagram.com/youlovesk" title="YLSK on Instagram"><svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-instagram" viewBox="0 0 32 32">
                            <path fill="#444" d="M16 3.094c4.206 0 4.7.019 6.363.094 1.538.069 2.369.325 2.925.544.738.287 1.262.625 1.813 1.175s.894 1.075 1.175 1.813c.212.556.475 1.387.544 2.925.075 1.662.094 2.156.094 6.363s-.019 4.7-.094 6.363c-.069 1.538-.325 2.369-.544 2.925-.288.738-.625 1.262-1.175 1.813s-1.075.894-1.813 1.175c-.556.212-1.387.475-2.925.544-1.663.075-2.156.094-6.363.094s-4.7-.019-6.363-.094c-1.537-.069-2.369-.325-2.925-.544-.737-.288-1.263-.625-1.813-1.175s-.894-1.075-1.175-1.813c-.212-.556-.475-1.387-.544-2.925-.075-1.663-.094-2.156-.094-6.363s.019-4.7.094-6.363c.069-1.537.325-2.369.544-2.925.287-.737.625-1.263 1.175-1.813s1.075-.894 1.813-1.175c.556-.212 1.388-.475 2.925-.544 1.662-.081 2.156-.094 6.363-.094zm0-2.838c-4.275 0-4.813.019-6.494.094-1.675.075-2.819.344-3.819.731-1.037.4-1.913.944-2.788 1.819S1.486 4.656 1.08 5.688c-.387 1-.656 2.144-.731 3.825-.075 1.675-.094 2.213-.094 6.488s.019 4.813.094 6.494c.075 1.675.344 2.819.731 3.825.4 1.038.944 1.913 1.819 2.788s1.756 1.413 2.788 1.819c1 .387 2.144.656 3.825.731s2.213.094 6.494.094 4.813-.019 6.494-.094c1.675-.075 2.819-.344 3.825-.731 1.038-.4 1.913-.944 2.788-1.819s1.413-1.756 1.819-2.788c.387-1 .656-2.144.731-3.825s.094-2.212.094-6.494-.019-4.813-.094-6.494c-.075-1.675-.344-2.819-.731-3.825-.4-1.038-.944-1.913-1.819-2.788s-1.756-1.413-2.788-1.819c-1-.387-2.144-.656-3.825-.731C20.812.275 20.275.256 16 .256z" />
                            <path fill="#444" d="M16 7.912a8.088 8.088 0 0 0 0 16.175c4.463 0 8.087-3.625 8.087-8.088s-3.625-8.088-8.088-8.088zm0 13.338a5.25 5.25 0 1 1 0-10.5 5.25 5.25 0 1 1 0 10.5zM26.294 7.594a1.887 1.887 0 1 1-3.774.002 1.887 1.887 0 0 1 3.774-.003z" />
                          </svg><span class="icon__fallback-text">Instagram</span></a></li>
                      <li><a target="_blank" rel="noopener" href="www.youtube.com/youlovesk.html" title="YLSK on YouTube"><svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-youtube" viewBox="0 0 21 20">
                            <path fill="#444" d="M-.196 15.803q0 1.23.812 2.092t1.977.861h14.946q1.165 0 1.977-.861t.812-2.092V3.909q0-1.23-.82-2.116T17.539.907H2.593q-1.148 0-1.969.886t-.82 2.116v11.894zm7.465-2.149V6.058q0-.115.066-.18.049-.016.082-.016l.082.016 7.153 3.806q.066.066.066.164 0 .066-.066.131l-7.153 3.806q-.033.033-.066.033-.066 0-.098-.033-.066-.066-.066-.131z" />
                          </svg><span class="icon__fallback-text">YouTube</span></a></li>
                      <li><a target="_blank" rel="noopener" href="https://twitter.com/ylylylsk" title="YLSK on Twitter"><svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-twitter" viewBox="0 0 32 32">
                            <path fill="#444" d="M31.281 6.733q-1.304 1.924-3.13 3.26 0 .13.033.408t.033.408q0 2.543-.75 5.086t-2.282 4.858-3.635 4.108-5.053 2.869-6.341 1.076q-5.282 0-9.65-2.836.913.065 1.5.065 4.401 0 7.857-2.673-2.054-.033-3.668-1.255t-2.266-3.146q.554.13 1.206.13.88 0 1.663-.261-2.184-.456-3.619-2.184t-1.435-3.977v-.065q1.239.652 2.836.717-1.271-.848-2.021-2.233t-.75-2.983q0-1.63.815-3.195 2.38 2.967 5.754 4.678t7.319 1.907q-.228-.815-.228-1.434 0-2.608 1.858-4.45t4.532-1.842q1.304 0 2.51.522t2.054 1.467q2.152-.424 4.01-1.532-.685 2.217-2.771 3.488 1.989-.261 3.619-.978z" />
                          </svg><span class="icon__fallback-text">Twitter</span></a></li>
                      <li><a target="_blank" rel="noopener" href="https://www.tiktok.com/youlovesk" title="YLSK on TikTok"><svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-tiktok" viewBox="0 0 2859 3333">
                            <path d="M2081 0c55 473 319 755 778 785v532c-266 26-499-61-770-225v995c0 1264-1378 1659-1932 753-356-583-138-1606 1004-1647v561c-87 14-180 36-265 65-254 86-398 247-358 531 77 544 1075 705 992-358V1h551z" />
                          </svg><span class="icon__fallback-text">TikTok</span></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="header-sticky-wrapper">
              <div id="HeaderWrapper" class="header-wrapper">
                <header id="SiteHeader" class="site-header" data-sticky="true" data-overlay="false">
                  <div class="page-width">
                    <div class="header-layout header-layout--center-drawer" data-logo-align="center">
                      <div class="header-item header-item--left header-item--navigation">
                        <div class="site-nav"><button type="button" class="site-nav__link site-nav__link--icon js-drawer-open-nav" aria-controls="NavDrawer"><svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-hamburger" viewBox="0 0 64 64">
                              <path d="M7 15h51M7 32h43M7 49h51" />
                            </svg><span class="icon__fallback-text">Site navigation</span></button></div>
                      </div>
                      <div class="header-item header-item--logo">
                        <style data-shopify>
                          .header-item--logo,
                          .header-layout--left-center .header-item--logo,
                          .header-layout--left-center .header-item--icons {
                            -webkit-box-flex: 0 1 110px;
                            -ms-flex: 0 1 110px;
                            flex: 0 1 110px;
                          }

                          @media only screen and (min-width: 769px) {

                            .header-item--logo,
                            .header-layout--left-center .header-item--logo,
                            .header-layout--left-center .header-item--icons {
                              -webkit-box-flex: 0 0 140px;
                              -ms-flex: 0 0 140px;
                              flex: 0 0 140px;
                            }
                          }

                          .site-header__logo a {
                            width: 110px;
                          }

                          .is-light .site-header__logo .logo--inverted {
                            width: 110px;
                          }

                          @media only screen and (min-width: 769px) {
                            .site-header__logo a {
                              width: 140px;
                            }

                            .is-light .site-header__logo .logo--inverted {
                              width: 140px;
                            }
                          }
                        </style>
                        <h1 class="site-header__logo" itemscope itemtype="http://schema.org/Organization">
                           <span class="visually-hidden">Cold Stitch</span>
                           <a href="index.html" itemprop="url" class="site-header__logo-link" style="padding-top: 70.0%">
                              <img class="small--hide" src="cdn/img/logo.png" alt="Cold Stitch" itemprop="logo">
                              <img class="medium-up--hide" src="cdn/img/logo.png" alt="Cold Stitch">
                           </a>
                        </h1>
                      </div>
                      <div class="header-item header-item--icons">
                        <div class="site-nav">
                          <div class="site-nav__icons"><a href="search.html" class="site-nav__link site-nav__link--icon js-search-header"><svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-search" viewBox="0 0 64 64">
                                <path d="M47.16 28.58A18.58 18.58 0 1 1 28.58 10a18.58 18.58 0 0 1 18.58 18.58zM54 54L41.94 42" />
                              </svg><span class="icon__fallback-text">Search</span></a><a href="cart.html" class="site-nav__link site-nav__link--icon js-drawer-open-cart" aria-controls="CartDrawer" data-icon="bag-minimal"><span class="cart-link"><svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-bag-minimal" viewBox="0 0 64 64">
                                  <path stroke="null" id="svg_4" fill-opacity="null" stroke-opacity="null" fill="null" d="M11.375 17.863h41.25v36.75h-41.25z" />
                                  <path stroke="null" id="svg_2" d="M22.25 18c0-7.105 4.35-9 9.75-9s9.75 1.895 9.75 9" />
                                </svg><span class="icon__fallback-text">Cart</span><span class="cart-link__bubble"></span></span></a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="site-header__search-container">
                    <div class="site-header__search">
                      <div class="page-width">
                        <form action="https://youlovesk.com/search" method="get" role="search" id="HeaderSearchForm" class="site-header__search-form"><input type="hidden" name="type" value="product,article,page,collection"><input type="hidden" name="options[prefix]" value="last"><button type="submit" class="text-link site-header__search-btn site-header__search-btn--submit"><svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-search" viewBox="0 0 64 64">
                              <path d="M47.16 28.58A18.58 18.58 0 1 1 28.58 10a18.58 18.58 0 0 1 18.58 18.58zM54 54L41.94 42" />
                            </svg><span class="icon__fallback-text">Search</span></button><input type="search" name="q" value="" placeholder="Search our store" class="site-header__search-input" aria-label="Search our store"></form><button type="button" id="SearchClose" class="js-search-header-close text-link site-header__search-btn"><svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-close" viewBox="0 0 64 64">
                            <path d="M19 17.61l27.12 27.13m0-27.12L19 44.74" />
                          </svg><span class="icon__fallback-text">"Close (esc)"</span></button>
                      </div>
                    </div>
                    <div id="PredictiveWrapper" class="predictive-results hide" data-image-size="square">
                      <div class="page-width">
                        <div id="PredictiveResults" class="predictive-result__layout"></div>
                        <div class="text-center predictive-results__footer"><button type="button" class="btn btn--small" data-predictive-search-button><small> View more </small></button></div>
                      </div>
                    </div>
                  </div>
                </header>
              </div>
            </div>
            <div class="announcement-bar">
              <div class="page-width">
                <div class="slideshow-wrapper"><button type="button" class="visually-hidden slideshow__pause" data-id="header" aria-live="polite"><span class="slideshow__pause-stop"><svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-pause" viewBox="0 0 10 13">
                        <g fill="#000" fill-rule="evenodd">
                          <path d="M0 0h3v13H0zM7 0h3v13H7z" />
                        </g>
                      </svg><span class="icon__fallback-text">Pause slideshow</span></span><span class="slideshow__pause-play"><svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-play" viewBox="18.24 17.35 24.52 28.3">
                        <path fill="#323232" d="M22.1 19.151v25.5l20.4-13.489-20.4-12.011z" />
                      </svg><span class="icon__fallback-text">Play slideshow</span></span></button>
                  <div id="AnnouncementSlider" class="announcement-slider" data-compact="true" data-block-count="3">
                    <div id="AnnouncementSlide-1524770292306" class="announcement-slider__slide" data-index="0"><span class="announcement-text">FREE SHIPPING</span><span class="announcement-link-text">FAST 1-3 BUSINESS DAY SHIPPING</span></div>
                    <div id="AnnouncementSlide-1abaf4bb-1c7e-45ae-9e82-093fb85741d7" class="announcement-slider__slide" data-index="1"><span class="announcement-text">CUSTOMER SUPPORT</span><span class="announcement-link-text">INFO@YOULOVESK.COM</span></div>
                    <div id="AnnouncementSlide-1524770296206" class="announcement-slider__slide" data-index="2"><span class="announcement-text">DESIGNED BY</span><span class="announcement-link-text">@YOULOVESK</span></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>