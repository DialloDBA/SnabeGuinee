<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">

    @yield('head')
<style>
    /* latin-ext */
        @font-face {
        font-family: 'Oxygen';
        font-style: normal;
        font-weight: 400;
        src: url(https://fonts.gstatic.com/s/oxygen/v15/2sDfZG1Wl4LcnbuKgE0mV0Q.woff2) format('woff2');
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }
        /* latin */
        @font-face {
        font-family: 'Oxygen';
        font-style: normal;
        font-weight: 400;
        src: url(https://fonts.gstatic.com/s/oxygen/v15/2sDfZG1Wl4LcnbuKjk0m.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
        
</style>

    <body class="home page-template-default page page-id-51" style="background: #d7dedc;">
        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
            <defs>
                <filter id="wp-duotone-dark-grayscale">
                    <fecolormatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></fecolormatrix>
                    <fecomponenttransfer color-interpolation-filters="sRGB">
                        <fefuncr type="table" tablevalues="0 0.49803921568627"></fefuncr>
                        <fefuncg type="table" tablevalues="0 0.49803921568627"></fefuncg>
                        <fefuncb type="table" tablevalues="0 0.49803921568627"></fefuncb>
                        <fefunca type="table" tablevalues="1 1"></fefunca>
                    </fecomponenttransfer>
                    <fecomposite in2="SourceGraphic" operator="in"></fecomposite>
                </filter>
            </defs>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
            <defs>
                <filter id="wp-duotone-grayscale">
                    <fecolormatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></fecolormatrix>
                    <fecomponenttransfer color-interpolation-filters="sRGB">
                        <fefuncr type="table" tablevalues="0 1"></fefuncr>
                        <fefuncg type="table" tablevalues="0 1"></fefuncg>
                        <fefuncb type="table" tablevalues="0 1"></fefuncb>
                        <fefunca type="table" tablevalues="1 1"></fefunca>
                    </fecomponenttransfer>
                    <fecomposite in2="SourceGraphic" operator="in"></fecomposite>
                </filter>
            </defs>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
            <defs>
                <filter id="wp-duotone-purple-yellow">
                    <fecolormatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></fecolormatrix>
                    <fecomponenttransfer color-interpolation-filters="sRGB">
                        <fefuncr type="table" tablevalues="0.54901960784314 0.98823529411765"></fefuncr>
                        <fefuncg type="table" tablevalues="0 1"></fefuncg>
                        <fefuncb type="table" tablevalues="0.71764705882353 0.25490196078431"></fefuncb>
                        <fefunca type="table" tablevalues="1 1"></fefunca>
                    </fecomponenttransfer>
                    <fecomposite in2="SourceGraphic" operator="in"></fecomposite>
                </filter>
            </defs>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
            <defs>
                <filter id="wp-duotone-blue-red">
                    <fecolormatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></fecolormatrix>
                    <fecomponenttransfer color-interpolation-filters="sRGB">
                        <fefuncr type="table" tablevalues="0 1"></fefuncr>
                        <fefuncg type="table" tablevalues="0 0.27843137254902"></fefuncg>
                        <fefuncb type="table" tablevalues="0.5921568627451 0.27843137254902"></fefuncb>
                        <fefunca type="table" tablevalues="1 1"></fefunca>
                    </fecomponenttransfer>
                    <fecomposite in2="SourceGraphic" operator="in"></fecomposite>
                </filter>
            </defs>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
            <defs>
                <filter id="wp-duotone-midnight">
                    <fecolormatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></fecolormatrix>
                    <fecomponenttransfer color-interpolation-filters="sRGB">
                        <fefuncr type="table" tablevalues="0 0"></fefuncr>
                        <fefuncg type="table" tablevalues="0 0.64705882352941"></fefuncg>
                        <fefuncb type="table" tablevalues="0 1"></fefuncb>
                        <fefunca type="table" tablevalues="1 1"></fefunca>
                    </fecomponenttransfer>
                    <fecomposite in2="SourceGraphic" operator="in"></fecomposite>
                </filter>
            </defs>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
            <defs>
                <filter id="wp-duotone-magenta-yellow">
                    <fecolormatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></fecolormatrix>
                    <fecomponenttransfer color-interpolation-filters="sRGB">
                        <fefuncr type="table" tablevalues="0.78039215686275 1"></fefuncr>
                        <fefuncg type="table" tablevalues="0 0.94901960784314"></fefuncg>
                        <fefuncb type="table" tablevalues="0.35294117647059 0.47058823529412"></fefuncb>
                        <fefunca type="table" tablevalues="1 1"></fefunca>
                    </fecomponenttransfer>
                    <fecomposite in2="SourceGraphic" operator="in"></fecomposite>
                </filter>
            </defs>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
            <defs>
                <filter id="wp-duotone-purple-green">
                    <fecolormatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></fecolormatrix>
                    <fecomponenttransfer color-interpolation-filters="sRGB">
                        <fefuncr type="table" tablevalues="0.65098039215686 0.40392156862745"></fefuncr>
                        <fefuncg type="table" tablevalues="0 1"></fefuncg>
                        <fefuncb type="table" tablevalues="0.44705882352941 0.4"></fefuncb>
                        <fefunca type="table" tablevalues="1 1"></fefunca>
                    </fecomponenttransfer>
                    <fecomposite in2="SourceGraphic" operator="in"></fecomposite>
                </filter>
            </defs>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
            <defs>
                <filter id="wp-duotone-blue-orange">
                    <fecolormatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></fecolormatrix>
                    <fecomponenttransfer color-interpolation-filters="sRGB">
                        <fefuncr type="table" tablevalues="0.098039215686275 1"></fefuncr>
                        <fefuncg type="table" tablevalues="0 0.66274509803922"></fefuncg>
                        <fefuncb type="table" tablevalues="0.84705882352941 0.41960784313725"></fefuncb>
                        <fefunca type="table" tablevalues="1 1"></fefunca>
                    </fecomponenttransfer>
                    <fecomposite in2="SourceGraphic" operator="in"></fecomposite>
                </filter>
            </defs>
        </svg>
        <!-- Wrapper -->
        <div class="wrapper wrapper_boxed">
            <!-- Header 1 Start -->
            @include('layouts.ui.header')
            <!-- Main Content Section -->
            <main id="main-content">
                <!-- Main Section -->
                @yield('content')
            </main>
            <div class="clear"></div>

            <!-- Footer -->
            @include('layouts.ui.footer')

            <div class="clear"></div>
        </div>
        <!-- Wrapper End -->

       

        <link rel="stylesheet" id="rs-plugin-settings-css" href="ui/wp-content/plugins/revslider/public/assets/css/rs6.css?ver=6.5.31" type="text/css" media="all" />
        <style id="rs-plugin-settings-inline-css" type="text/css">
            .tp-caption a {
                color: #ff7302;
                text-shadow: none;
                -webkit-transition: all 0.2s ease-out;
                -moz-transition: all 0.2s ease-out;
                -o-transition: all 0.2s ease-out;
                -ms-transition: all 0.2s ease-out;
            }
            .tp-caption a:hover {
                color: #ffa902;
            }
        </style>
       @yield('js')
    </body>
</html>
