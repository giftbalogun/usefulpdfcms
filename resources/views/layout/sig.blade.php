<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Electronic signature and document generation software | UsefulPDF</title>
    <meta name="format-detection" content="telephone=no">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="UsefulPDF">
    <meta property="og:image"
        content="https://res.cloudinary.com/simplytammy/image/upload/v1633696286/cover/meta-image.png">
    <meta name="twitter:image"
        content="https://res.cloudinary.com/simplytammy/image/upload/v1633696286/cover/meta-image.png">
    <meta name="twitter:card"
        content="https://res.cloudinary.com/simplytammy/image/upload/v1633696286/cover/meta-image.png">
    <link rel="icon" type="image/x-icon" href="{{ asset('/useful_v2_assets/app-icons/favicon.ico') }}">
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ asset('/useful_v2_assets/app-icons/favicon-16x16.png') }}">
    <link rel="icon" type="image/png" sizes="32x32"
        href="{{ asset('/useful_v2_assets/app-icons/favicon-32x32.png') }}">
    <link rel="apple-touch-icon" type="image/png" sizes="180x180"
        href="{{ asset('app-icons/apple-touch-icon.png') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&family=Teko:wght@400;500;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/themify-icons/0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="{{ asset('/useful_v2_assets/css/ui.css') }}">
    <link rel="stylesheet" href="{{ asset('/useful_v2_assets/css/sig/main.css') }}">
    <link rel="stylesheet" href="{{ asset('/useful_v2_assets/css/sig/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/useful_v2_assets/css/preloader.css') }}">
    <link rel="stylesheet" href="{{ asset('/useful_v2_assets/css/toastr.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@simonwep/pickr/dist/themes/classic.min.css">
    <script src="{{ asset('/useful_v2_assets/js/clarity.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/useful_v2_assets/css/analytics.js') }}"></script>
    <link data-n-head="ssr" rel="stylesheet" href="{{ asset('/useful_v2_assets/css/sig/signatures.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta data-hid="image" name="image" content="https://cdn.usefulpdf.com/strapi/66c9a38c48f72e9116453c9f6acdf39c.jpg">
</head>


<body>
    <div id="__nuxt">
        <div id="__layout">
            <div>
                <section class="cookieControl">
                    <!---->
                    <!---->
                    <!---->
                </section>
                <header class="us-header">
                    <nav class="us-nav container-fluid">
                        <div class="us-nav--brand col-auto p-0">
                            <a href="{{ route('homepage') }}" aria-current="page" class="us-nav--menu-link">
                                <img alt="Logo" class="lazyLoad isLoaded"
                                    src="{{ asset('/useful_v2_assets/img/logo.png') }}">
                            </a>
                        </div>
                        <div class="mobile-nav-toggle">
                            <a href="javascript:void(0)" class="toggleNav">
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                        </div>
                        <div class="col p-0 pr-5 d-flex justify-content-end align-items-center us-nav--menu-holder">
                            <ul class="us-nav--menu">
                                <li class="us-nav--menu-list">
                                    <a href="{{ route('homepage') }}" aria-current="page"
                                        class="us-nav--menu-link">Home</a>
                                </li>
                                <li class="us-nav--menu-list">
                                    <a href="{{ route('about') }}" class="us-nav--menu-link">About</a>
                                </li>
                                <li class="us-nav--menu-list">
                                    <a href="{{ route('document-generation') }}" class="us-nav--menu-link">Create
                                        Documents</a>
                                </li>
                                <li class="us-nav--menu-list">
                                    <div class="dropdown">
                                        <a href="https://usefulpdf.com/#!"
                                            class="us-nav--menu-link d-flex align-items-center">eSign
                                            Documents
                                            <i class="ti-angle-down ml-1"></i>
                                        </a>
                                        <div class="us-dropdown dropdown-content" style="min-width:300px">
                                            <div class="caret"></div>
                                            <div class="row">
                                                <div class="p-2">
                                                    <a href="{{ route('electronic-signature') }}"
                                                        class="dropdown-content-link">Electronic
                                                        Signature
                                                    </a>
                                                    <a href="{{ route('signature-creator') }}"
                                                        class="dropdown-content-link">Free Online
                                                        Signature Creator
                                                    </a>
                                                    <a href="{{ route('contracts') }}"
                                                        class="dropdown-content-link">Contract
                                                        templates</a>
                                                    <a href="https://usefulpdf.com/use-case"
                                                        class="dropdown-content-link">Use Cases
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </header>


                @yield('content')

                <footer class="us-footer has-cta">
                    <div class="cta-zig"><img
                            data-src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjk4IiBoZWlnaHQ9IjI4MCIgdmlld0JveD0iMCAwIDI5OCAyODAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxwYXRoIGQ9Ik0yMDkuODk4IDg4LjAwODRDMjMyLjMgMTEwLjg5OCAyNTcuNTk5IDEzNC4xNDMgMjc3LjgyMyAxNTguNTE4QzI4My44MzggMTY1Ljc2NyAyODMuNTcgMTY2LjM5NiAyNzQuMDQxIDE2NC4xMTdDMjU3LjI3OCAxNjAuMTA3IDIzMC4xNTggMTQ5Ljg0OCAyMTUuNDE5IDE0NC40MjNDMTgwLjQ3NyAxMzEuNTYyIDE0NC43OTYgMTE1LjY4MiAxMDkuNjg4IDEwNS45NDdDOTAuMjM2OSAxMDAuNTUzIDExOC42MDYgMTE4LjYgMTIxLjU3OSAxMjAuODY2QzEyNC43NyAxMjMuMjk4IDE4My40ODEgMTY3LjIxMSAxNzYuOTQyIDE3MC4yMzRDMTcxLjMyNSAxNzIuODMxIDE2MS45IDE2Ny44NDggMTU0LjI5NSAxNjUuNTAyQzEzOC44NTggMTYwLjc0MiAxMjMuNDcgMTU0LjQwNCAxMDguMDUgMTQ4Ljk4OEM4Ny4zNzUxIDE0MS43MjYgNDMuNzQ2NiAxMjUuMzAxIDIwLjYyOTIgMTIxLjk1MkMtMTYuMjE5OCAxMTYuNjE0IDU0Ljg4MDIgMTY3LjM1MSA1OC4xNDAyIDE2OS44OThDOTIuNjE3MSAxOTYuODM0IDEyNy45NTMgMjIyLjU2NCAxNjMuMTUgMjQ4LjUyOSIgc3Ryb2tlPSIjRjlGOUZBIiBzdHJva2Utd2lkdGg9IjYiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIvPgo8L3N2Zz4K"
                            alt="" class="lazyLoad"></div>
                    <div class="footer-circle"><img
                            data-src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDQ0IiBoZWlnaHQ9IjUwNCIgdmlld0JveD0iMCAwIDQ0NCA1MDQiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxjaXJjbGUgY3g9IjM1OS41IiBjeT0iMzU5LjUiIHI9IjM1OS41IiBmaWxsPSIjMkRBRTdBIiBmaWxsLW9wYWNpdHk9IjAuMSIvPgo8L3N2Zz4K"
                            alt="" class="lazyLoad"></div>
                    <div class="container-fluid">
                        <div class="col-lg-10 mx-auto">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="us-footer-menu">
                                        <h3 class="us-footer-menu--header h4-title">Company</h3>
                                        <div class="us-footer-menu--links">
                                            <a href="{{ route('about') }}">About</a>
                                            <a href="https://usefulpdf.com/privacy-policy">Privacy Policy</a>
                                            <a href="https://usefulpdf.com/terms-of-service">Terms of
                                                Service</a>
                                            <a href="{{ route('contact') }}">Contact us</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="us-footer-menu">
                                        <h3 class="us-footer-menu--header h4-title">Electronic Signature</h3>
                                        <div class="us-footer-menu--links">
                                            <a href="{{ route('electronic-signature') }}">Electronic
                                                Signature</a>
                                            <a href="{{ route('signature-creator') }}">Free Online
                                                Singature Creator</a>
                                            <a href="https://usefulpdf.com/use-case">Use cases
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="us-footer-menu">
                                        <h3 class="us-footer-menu--header h4-title">
                                            Document Generation
                                        </h3>
                                        <div class="us-footer-menu--links">
                                            <a href="{{ route('contracts') }}">All
                                                Templates</a>
                                            <a href="https://usefulpdf.com/power-of-attorney">Power of
                                                Attorney</a>
                                            <a href="https://usefulpdf.com/rental-lease">Lease
                                                agreement</a>
                                            <a href="https://usefulpdf.com/eviction">Eviction Notice</a>
                                            <a href="https://usefulpdf.com/employment">Employment
                                                contracts</a>
                                            <a href="https://usefulpdf.com/loan-agreement">Loan
                                                Agreement</a>
                                            <a href="https://usefulpdf.com/rental-lease/application">Rental
                                                application</a>
                                            <a href="https://usefulpdf.com/deed">Deed Forms</a>
                                            <a href="https://usefulpdf.com/bill-of-sale">Bill
                                                of Sale</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="us-footer-menu">
                                        <h3 class="us-footer-menu--header h4-title">Resources</h3>
                                        <div class="us-footer-menu--links">
                                            <a href="https://usefulpdf.com/esignature-legality">Electronic
                                                signature legality guide</a>
                                            <a href="https://usefulpdf.com/trust-security">Trust
                                                and security</a>
                                            <a href="https://usefulpdf.tawk.help/" target="_blank">Support center</a>
                                            <a href="{{ route('contracts') }}">Contract
                                                templates</a>
                                            <a href="https://usefulpdf.com/blog/">Blog
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="us-footer--extend d-block d-lg-flex align-items-center justify-content-between">
                                <p class="copyright">
                                    © Useful Innovations, Inc. 2020 - 2021.
                                </p>
                                <div class="us-footer--social">
                                    <a href="http://facebook.com/usefulpdf" target="_blank">
                                        <img data-src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAAWCAYAAAAb+hYkAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAADWSURBVHgB3VLLDcIwDE1CRK+MUDbpBrABbMBq3YARYAOyAaeqH7UyjsDIdZ1S9ciTIif+PzvWKACAXd/3F5QFgCmEOVgZUNd17tzmitfcLEXbdg88ECUmKGJVZot6kFXOFMCdZ4NQcYvKqmqP8Y28Tvh+kjMdKzNFmWVbS60q3II388h5EoIzK+ATLYwgyAenBITEfZxlMkYFtI6macrFnJzzhygBXOl5RWoJp7X/6Bjft3kYurvVBsH2JNv+JjS8GndM8V21p38MUn/5rx8iKwXFZ6J7ATRgtzdCeXyQAAAAAElFTkSuQmCC"
                                            class="social-icon lazyLoad">
                                    </a>
                                    <a href="https://twitter.com/pdfuseful" target="_blank">
                                        <img data-src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAVCAYAAABc6S4mAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAHpSURBVHgBzVXdccIwDLad0gtvbEA2aDZoNmg3KJ2AbgCdoDABbACdADpB6QSwATzAOYmJXSnBxDg/DcdLv7vEP5KlT7JlE/IfwTn34jieRFG8hU/Bt8YxzmdyEUSRGGCf5otE0GrRruM4n5TSXZXx4/H4kiRyBN1OiXhHKVkpRYLUOCVLkntMmShkQmqYa9ZhGI9yxtzjPJpqGwVbqHwpjGZ6sQmQTepIwJoeyL5PdrZnGzC5wElgMcR86rxyHveUUh3DwTbTKzpHoK4mGYbhm8ks9brf7/0sDWJmhbqIY/Ghx6QGpTqQopQ1oGuFu7Dzeq2DuyrFdrs9hWaKETHGfCmJn0nopmqNkbqN5TVLCeac3AB9GjFyPcfwlyTJVzpg6oncAErVM7YQ7c+FwNz9qhPSBPoEgo2gINS1gOfYPJpNYRTrulThFMVaO7k2kpx9zT6eroKLQiMNIIQY1LK3nVjnv3YR6PaN/Qts+bkOMEWHg/CUkgFpCGQupRpiH9p3qJ1lQclIif1t8W4q23DcUDNK1KsiQU8p8KzpuZTHMTEqkrGWD3XyAA4Dfd+jXMrktZS5tpQx4j3GnD50fdIMO0jJ2HXvR3WP09mBBt6mjN0FjkMfQeQR49WC12mDFapUMnddd/WXYY1fdihd5VbHyn0AAAAASUVORK5CYII="
                                            class="social-icon lazyLoad">
                                    </a>
                                    <a href="https://www.linkedin.com/company/usefulpdf" target="_blank"><img
                                            data-src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjQiIGhlaWdodD0iMjQiIHZpZXdCb3g9IjAgMCAyNCAyNCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTE2IDhDMTcuNTkxMyA4IDE5LjExNzQgOC42MzIxNCAyMC4yNDI2IDkuNzU3MzZDMjEuMzY3OSAxMC44ODI2IDIyIDEyLjQwODcgMjIgMTRWMjFIMThWMTRDMTggMTMuNDY5NiAxNy43ODkzIDEyLjk2MDkgMTcuNDE0MiAxMi41ODU4QzE3LjAzOTEgMTIuMjEwNyAxNi41MzA0IDEyIDE2IDEyQzE1LjQ2OTYgMTIgMTQuOTYwOSAxMi4yMTA3IDE0LjU4NTggMTIuNTg1OEMxNC4yMTA3IDEyLjk2MDkgMTQgMTMuNDY5NiAxNCAxNFYyMUgxMFYxNEMxMCAxMi40MDg3IDEwLjYzMjEgMTAuODgyNiAxMS43NTc0IDkuNzU3MzZDMTIuODgyNiA4LjYzMjE0IDE0LjQwODcgOCAxNiA4VjhaIiBzdHJva2U9IiNGOUY5RkEiIHN0cm9rZS13aWR0aD0iMiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIi8+CjxwYXRoIGQ9Ik02IDlIMlYyMUg2VjlaIiBzdHJva2U9IiNGOUY5RkEiIHN0cm9rZS13aWR0aD0iMiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIi8+CjxwYXRoIGQ9Ik00IDZDNS4xMDQ1NyA2IDYgNS4xMDQ1NyA2IDRDNiAyLjg5NTQzIDUuMTA0NTcgMiA0IDJDMi44OTU0MyAyIDIgMi44OTU0MyAyIDRDMiA1LjEwNDU3IDIuODk1NDMgNiA0IDZaIiBzdHJva2U9IiNGOUY5RkEiIHN0cm9rZS13aWR0aD0iMiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIi8+Cjwvc3ZnPgo="
                                            class="social-icon lazyLoad">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous" data-body="true"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"
        data-body="true"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"
        data-body="true"></script>
    <script src="{{ asset('/useful_v2_assets/js/flags.js') }}" data-body="true"></script>
    <script src="{{ asset('/useful_v2_assets/js/ui.js') }}" data-body="true"></script>
    <script data-n-head="ssr" src="https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js"
        data-body="true"></script>
    <script data-n-head="ssr" src="{{ asset('/useful_v2_assets/js/toastr.js') }}" data-body="true"></script>
    <script data-n-head="ssr" src="{{ asset('/useful_v2_assets/js/jquery-migrate.js') }}" data-body="true"></script>
    <script data-n-head="ssr" src="{{ asset('/useful_v2_assets/js/demo_upload.js') }}" data-body="true"></script>
    <script data-n-head="ssr" src="{{ asset('/useful_v2_assets/js/dmuploader.js') }}" data-body="true"></script>
    <script data-n-head="ssr" src="https://cdn.jsdelivr.net/npm/@simonwep/pickr/dist/pickr.es5.min.js" data-body="true">
    </script>
    <script data-n-head="ssr" src="{{ asset('/useful_v2_assets//js/custom-signature.js') }}" data-body="true"></script>
    <meta name="google-site-verification" content="wqk8yBWsA9Enk1OEJlnG0Jh2d-yA5eF_fVFz7paK-fI">
</body>

</html>
