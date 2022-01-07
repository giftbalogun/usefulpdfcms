@extends('layout.app')

<body data-new-gr-c-s-check-loaded="14.1042.0" data-gr-ext-installed="" style="">
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
                            <a class="us-nav--menu-link" href="/">
                                <img src="{{ asset('/useful_v2_assets/img/logo.png') }}" alt="" />
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
                                    <a class="us-nav--menu-link" href="/">Home</a>
                                </li>
                                <li class="us-nav--menu-list">
                                    <a class="us-nav--menu-link" href="/about">About</a>
                                </li>
                                <li class="us-nav--menu-list">
                                    <a class="us-nav--menu-link" href="/document-generation">Create Documents
                                    </a>
                                </li>

                                <li class="us-nav--menu-list">
                                    <div class="dropdown">
                                        <a href="#!" class="us-nav--menu-link d-flex align-items-center">eSign Documents
                                            <i class="ti-angle-down ml-1"></i></a>
                                        <div class="us-dropdown dropdown-content" style="min-width: 300px;">
                                            <div class="caret"></div>
                                            <div class="row">
                                                <div class="p-2">
                                                    <a class="dropdown-content-link" href="/electronic-signature">
                                                        Electronic Signature</a>
                                                    <a class="dropdown-content-link" href="/signature-creator">Free
                                                        Online Signature Creator</a>
                                                    <a class="dropdown-content-link" href="/contracts">Contract
                                                        templates</a>
                                                    <a class="dropdown-content-link" href="/use-case">Use Cases
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
                <div class="sidebar-navigation">
                    <div class="title">
                        <span>Menu</span>
                        <span class="toggleNav close"><i class="ti-close"></i></span>
                    </div>
                    <ul>
                        <li>
                            <a href="/">Home</a>
                        </li>
                        <li></li>

                        <li>
                            <a href="/about">About</a>
                        </li>
                        <li>
                            <a href="/document-generation">Create Documents</a>
                        </li>
                        <li></li>
                        <!-- <li>
                        <a href="/pricing">Pricing</a>
                      </li> -->
                        <li></li>

                        <li>
                            <a href="#">eSign Documents <i class="fas fa-angle-down"></i></a>
                            <ul>
                                <li class="">
                                    <a href="/electronic-signature">Electronic Signature</a>
                                </li>
                                <li class="">
                                    <a href="/signature-creator">Free Online Signature Creator</a>
                                </li>
                                <li class="">
                                    <a href="/contracts">Contract templates</a>
                                </li>
                                <li class="">
                                    <a href="/use-case">Use Cases</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <!-- <div class="row align-items-center action-area">
                      <div class="col text-center us-btn">
                        <a href="#!" class="us-btn is--outline">Login</a>
                      </div>
                      <div class="col text-center">
                        <a href="#!" class="us-btn is--primary-fade">Get started</a>
                      </div>
                    </div> -->
                </div>
                <main id="app" class="main">
                    <div class="cms-template-container">
                        <section class="us-hero is--medium pb-5">
                            <div class="container">
                                <div class="us-hero--content">
                                    <div class="row">
                                        <div class="col-lg-6  mb-5 mb-lg-0 ">
                                            <h1 class="us-hero--content-title  h1-title">
                                                {{ $contracts->header_title }}
                                            </h1>
                                            <div class="text-white small text-left">
                                                <div class="cms-white-text">
                                                    <p dir="ltr"
                                                        style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;">
                                                        {!! $contracts->header_content !!} </span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="dropdown mt-4"><button type="button" id="dropdownMenuButton"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                                    class="us-btn  is--primary-alt dropdown-toggle">
                                                    Download Now
                                                </button>
                                                <div aria-labelledby="dropdownMenuButton" class="dropdown-menu"><a
                                                        download="" target="_blank"
                                                        href="https://cdn.usefulpdf.com/strapi/f1549aa3010cda7f6190a5731d34e10b.pdf"
                                                        class="dropdown-item">Adobe Pdf</a> <a download=""
                                                        target="_blank"
                                                        href="https://cdn.usefulpdf.com/strapi/2e5429dccb6b32269dc3725d8240048e.docx"
                                                        class="dropdown-item">Microsoft Word</a>
                                                    <!---->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 text-lg-right text-center">
                                            @if ($contracts->preview_image)
                                                <img onerror="this.src=&#39;https://via.placeholder.com/350x400/FFFFFF/000000/?text=Placeholder&#39;"
                                                    alt="" class="rounded-lg img-fluid lazyLoad isLoaded"
                                                    src="{{ $imagePath }}">
                                            @endif

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <div>
                            <div data-v-553b44e5="">
                                <!---->
                            </div>
                        </div>
                        <div class="  container ">
                        </div>
                        <div class="container-fluid mt-5">
                            <section class="row">
                                <div class="col-lg-2 col-12  mb-5  offset-lg-1">
                                    <div id="category-template-menu"
                                        class="rounded-lg  shadow-lg pl-3 pr-3 pt-4 mb-5 pb-4 flex-lg-column flex-lg-wrap flex-nowrap overflow-auto d-flex">
                                        <a href="/contracts"
                                            class=" text-decoration-none template-category-menu-item mr-4 text-dark mb-0 mb-lg-4">
                                            All templates
                                        </a>
                                        @foreach ($contractss as $item)
                                            <a href="{{ route('contracts.slug', $item->slug) }}"
                                                class=" text-decoration-none template-category-menu-item mr-4 text-dark mb-0 mb-lg-4">
                                                {{ $item->name }}
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="col-lg-8 col-12 mb-5">
                                    <!---->
                                    <h2 class="mb-5">
                                        Categories of {{ $contracts->name }}
                                    </h2>

                                    <div class="row">
                                        @foreach ($tcontracts as $item)
                                            <div class="col-12 col-md-6 mt-5 mb-5">
                                                <a href="{{ url('/' . $contracts->slug . '/' . $item->slug) }}"
                                                    class="text-is-primary title-link mb-3">
                                                    {{ $item->name }}
                                                </a>
                                                <div class="cms-black-text">
                                                    <p>{!! $item->header_content !!}</p>
                                                </div>
                                                <a href="{{ url('/' . $contracts->slug . '/' . $item->slug) }}"
                                                    class="">
                                                    <img alt="Arrow" class="lazyLoad isLoaded"
                                                        src="{{ asset('/useful_v2_assets/icons/arrow.svg') }}">
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>

                                    <div class="col-12 col-md-6 mt-2 mb-5">
                                        <h2 class="mb-5">Bill Of Sale by State</h2>
                                    </div>
                                    <div class="col-12 col-md-6 mt-5 mb-5">
                                        <div class="row">
                                            <div class="col-lg-2 mb-4 col-md-3 col-6 "><a
                                                    href="https://usefulpdf.com/bill-of-sale/alabama"
                                                    class=" text-decoration-none text-is-secondaryGreen">
                                                    Alabama
                                                </a></div>
                                            <div class="col-lg-2 mb-4 col-md-3 col-6 "><a
                                                    href="https://usefulpdf.com/bill-of-sale/alaska"
                                                    class=" text-decoration-none text-is-secondaryGreen">
                                                    Alaska
                                                </a></div>
                                            <div class="col-lg-2 mb-4 col-md-3 col-6 "><a
                                                    href="https://usefulpdf.com/bill-of-sale/arizona"
                                                    class=" text-decoration-none text-is-secondaryGreen">
                                                    Arizona
                                                </a></div>

                                        </div>
                                    </div>
                                    <!---->
                                    <!---->
                                </div>

                            </section>
                            <section class="row  mb-12">

                            </section>
                            <section id="extra-info" class="row ">
                                <div class="col-12 offset-lg-2 col-lg-8 pt-5 pb-5">
                                    <div class="mt-5 mb-5 cms-black-text">
                                        {!! $contracts->template_body !!}
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </main>
                <!--<footer class="us-footer has-cta" >
                    <div class="cta-zig" ><img
                            data-src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjk4IiBoZWlnaHQ9IjI4MCIgdmlld0JveD0iMCAwIDI5OCAyODAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxwYXRoIGQ9Ik0yMDkuODk4IDg4LjAwODRDMjMyLjMgMTEwLjg5OCAyNTcuNTk5IDEzNC4xNDMgMjc3LjgyMyAxNTguNTE4QzI4My44MzggMTY1Ljc2NyAyODMuNTcgMTY2LjM5NiAyNzQuMDQxIDE2NC4xMTdDMjU3LjI3OCAxNjAuMTA3IDIzMC4xNTggMTQ5Ljg0OCAyMTUuNDE5IDE0NC40MjNDMTgwLjQ3NyAxMzEuNTYyIDE0NC43OTYgMTE1LjY4MiAxMDkuNjg4IDEwNS45NDdDOTAuMjM2OSAxMDAuNTUzIDExOC42MDYgMTE4LjYgMTIxLjU3OSAxMjAuODY2QzEyNC43NyAxMjMuMjk4IDE4My40ODEgMTY3LjIxMSAxNzYuOTQyIDE3MC4yMzRDMTcxLjMyNSAxNzIuODMxIDE2MS45IDE2Ny44NDggMTU0LjI5NSAxNjUuNTAyQzEzOC44NTggMTYwLjc0MiAxMjMuNDcgMTU0LjQwNCAxMDguMDUgMTQ4Ljk4OEM4Ny4zNzUxIDE0MS43MjYgNDMuNzQ2NiAxMjUuMzAxIDIwLjYyOTIgMTIxLjk1MkMtMTYuMjE5OCAxMTYuNjE0IDU0Ljg4MDIgMTY3LjM1MSA1OC4xNDAyIDE2OS44OThDOTIuNjE3MSAxOTYuODM0IDEyNy45NTMgMjIyLjU2NCAxNjMuMTUgMjQ4LjUyOSIgc3Ryb2tlPSIjRjlGOUZBIiBzdHJva2Utd2lkdGg9IjYiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIvPgo8L3N2Zz4K"
                            alt=""  class="lazyLoad"></div>
                    <div class="footer-circle" ><img
                            data-src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDQ0IiBoZWlnaHQ9IjUwNCIgdmlld0JveD0iMCAwIDQ0NCA1MDQiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxjaXJjbGUgY3g9IjM1OS41IiBjeT0iMzU5LjUiIHI9IjM1OS41IiBmaWxsPSIjMkRBRTdBIiBmaWxsLW9wYWNpdHk9IjAuMSIvPgo8L3N2Zz4K"
                            alt=""  class="lazyLoad"></div>
                    <div class="container-fluid" >
                        <div class="col-lg-10 mx-auto" >
                            <div class="row" >
                                <div class="col-lg-3" >
                                    <div class="us-footer-menu" >
                                        <h3 class="us-footer-menu--header h4-title" >Company</h3>
                                        <div class="us-footer-menu--links" ><a
                                                href="https://usefulpdf.com/about"  class="">About
                                            </a> <a href="https://usefulpdf.com/privacy-policy" 
                                                class="">Privacy Policy</a> <a
                                                href="https://usefulpdf.com/terms-of-service" 
                                                class="">Terms of Service</a> <a href="https://usefulpdf.com/contact"
                                                 class="">Contact us</a></div>
                                    </div>
                                </div>
                                <div class="col-lg-3" >
                                    <div class="us-footer-menu" >
                                        <h3 class="us-footer-menu--header h4-title" >
                                            Electronic Signature
                                        </h3>
                                        <div class="us-footer-menu--links" ><a
                                                href="https://usefulpdf.com/electronic-signature" 
                                                class="">Electronic Signature</a> <a
                                                href="https://usefulpdf.com/signature-creator" 
                                                class="">Free Online Singature Creator</a> <a
                                                href="https://usefulpdf.com/use-case"  class="">Use
                                                cases</a></div>
                                    </div>
                                </div>
                                <div class="col-lg-3" >
                                    <div class="us-footer-menu" >
                                        <h3 class="us-footer-menu--header h4-title" >
                                            Document Generation
                                        </h3>
                                        <div class="us-footer-menu--links" ><a
                                                href="https://usefulpdf.com/contracts"  class="">All
                                                Templates</a> <a href="https://usefulpdf.com/power-of-attorney"
                                                 class="">Power of Attorney</a> <a
                                                href="https://usefulpdf.com/rental-lease" 
                                                class="">Lease agreement</a> <a href="https://usefulpdf.com/eviction"
                                                 class="">Eviction Notice</a> <a
                                                href="https://usefulpdf.com/employment" 
                                                class="">Employment contracts</a> <a
                                                href="https://usefulpdf.com/loan-agreement" 
                                                class="">Loan Agreement</a> <a
                                                href="https://usefulpdf.com/rental-lease/application" 
                                                class="">Rental application</a> <a href="https://usefulpdf.com/deed"
                                                 class="">Deed Forms</a> <a
                                                href="https://usefulpdf.com/bill-of-sale" 
                                                class="nuxt-link-exact-active nuxt-link-active" aria-current="page">Bill
                                                of Sale</a></div>
                                    </div>
                                </div>
                                <div class="col-lg-3" >
                                    <div class="us-footer-menu" >
                                        <h3 class="us-footer-menu--header h4-title" >Resources</h3>
                                        <div class="us-footer-menu--links" ><a
                                                href="https://usefulpdf.com/esignature-legality" 
                                                class="">Electronic signature legality guide</a> <a
                                                href="https://usefulpdf.com/trust-security" 
                                                class="">Trust and security</a> <a href="https://usefulpdf.tawk.help/"
                                                target="_blank" >Support center</a> <a
                                                href="https://usefulpdf.com/contracts" 
                                                class="">Contract templates</a> <a href="https://usefulpdf.com/blog/"
                                                >Blog </a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="us-footer--extend d-block d-lg-flex align-items-center justify-content-between"
                                >
                                <p class="copyright" >
                                    © Useful Innovations, Inc. 2020 - 2021.
                                </p>
                                <div class="us-footer--social" ><a
                                        href="http://facebook.com/usefulpdf" target="_blank" ><img
                                            data-src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAAWCAYAAAAb+hYkAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAADWSURBVHgB3VLLDcIwDE1CRK+MUDbpBrABbMBq3YARYAOyAaeqH7UyjsDIdZ1S9ciTIif+PzvWKACAXd/3F5QFgCmEOVgZUNd17tzmitfcLEXbdg88ECUmKGJVZot6kFXOFMCdZ4NQcYvKqmqP8Y28Tvh+kjMdKzNFmWVbS60q3II388h5EoIzK+ATLYwgyAenBITEfZxlMkYFtI6macrFnJzzhygBXOl5RWoJp7X/6Bjft3kYurvVBsH2JNv+JjS8GndM8V21p38MUn/5rx8iKwXFZ6J7ATRgtzdCeXyQAAAAAElFTkSuQmCC"
                                            class="social-icon lazyLoad" ></a> <a
                                        href="https://twitter.com/pdfuseful" target="_blank" ><img
                                            data-src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAVCAYAAABc6S4mAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAHpSURBVHgBzVXdccIwDLad0gtvbEA2aDZoNmg3KJ2AbgCdoDABbACdADpB6QSwATzAOYmJXSnBxDg/DcdLv7vEP5KlT7JlE/IfwTn34jieRFG8hU/Bt8YxzmdyEUSRGGCf5otE0GrRruM4n5TSXZXx4/H4kiRyBN1OiXhHKVkpRYLUOCVLkntMmShkQmqYa9ZhGI9yxtzjPJpqGwVbqHwpjGZ6sQmQTepIwJoeyL5PdrZnGzC5wElgMcR86rxyHveUUh3DwTbTKzpHoK4mGYbhm8ks9brf7/0sDWJmhbqIY/Ghx6QGpTqQopQ1oGuFu7Dzeq2DuyrFdrs9hWaKETHGfCmJn0nopmqNkbqN5TVLCeac3AB9GjFyPcfwlyTJVzpg6oncAErVM7YQ7c+FwNz9qhPSBPoEgo2gINS1gOfYPJpNYRTrulThFMVaO7k2kpx9zT6eroKLQiMNIIQY1LK3nVjnv3YR6PaN/Qts+bkOMEWHg/CUkgFpCGQupRpiH9p3qJ1lQclIif1t8W4q23DcUDNK1KsiQU8p8KzpuZTHMTEqkrGWD3XyAA4Dfd+jXMrktZS5tpQx4j3GnD50fdIMO0jJ2HXvR3WP09mBBt6mjN0FjkMfQeQR49WC12mDFapUMnddd/WXYY1fdihd5VbHyn0AAAAASUVORK5CYII="
                                            class="social-icon lazyLoad" ></a> <a
                                        href="https://www.linkedin.com/company/usefulpdf" target="_blank"
                                        ><img
                                            data-src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjQiIGhlaWdodD0iMjQiIHZpZXdCb3g9IjAgMCAyNCAyNCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTE2IDhDMTcuNTkxMyA4IDE5LjExNzQgOC42MzIxNCAyMC4yNDI2IDkuNzU3MzZDMjEuMzY3OSAxMC44ODI2IDIyIDEyLjQwODcgMjIgMTRWMjFIMThWMTRDMTggMTMuNDY5NiAxNy43ODkzIDEyLjk2MDkgMTcuNDE0MiAxMi41ODU4QzE3LjAzOTEgMTIuMjEwNyAxNi41MzA0IDEyIDE2IDEyQzE1LjQ2OTYgMTIgMTQuOTYwOSAxMi4yMTA3IDE0LjU4NTggMTIuNTg1OEMxNC4yMTA3IDEyLjk2MDkgMTQgMTMuNDY5NiAxNCAxNFYyMUgxMFYxNEMxMCAxMi40MDg3IDEwLjYzMjEgMTAuODgyNiAxMS43NTc0IDkuNzU3MzZDMTIuODgyNiA4LjYzMjE0IDE0LjQwODcgOCAxNiA4VjhaIiBzdHJva2U9IiNGOUY5RkEiIHN0cm9rZS13aWR0aD0iMiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIi8+CjxwYXRoIGQ9Ik02IDlIMlYyMUg2VjlaIiBzdHJva2U9IiNGOUY5RkEiIHN0cm9rZS13aWR0aD0iMiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIi8+CjxwYXRoIGQ9Ik00IDZDNS4xMDQ1NyA2IDYgNS4xMDQ1NyA2IDRDNiAyLjg5NTQzIDUuMTA0NTcgMiA0IDJDMi44OTU0MyAyIDIgMi44OTU0MyAyIDRDMiA1LjEwNDU3IDIuODk1NDMgNiA0IDZaIiBzdHJva2U9IiNGOUY5RkEiIHN0cm9rZS13aWR0aD0iMiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIi8+Cjwvc3ZnPgo="
                                            class="social-icon lazyLoad" ></a></div>
                            </div>
                        </div>
                    </div>
                </footer>-->
                <footer class="us-footer has-cta">
                    <div class="cta-zig">
                        <img src="{{ asset('/useful_v2_assets/img/vector/cta_zig.svg') }}" alt="" />
                    </div>
                    <div class="footer-circle">
                        <img src="{{ asset('/useful_v2_assets/img/vector/footer-fill-circle.svg') }}" alt="" />
                    </div>
                    <div class="container-fluid">
                        <div class=" col-lg-10 mx-auto">
                            <div class="row ">
                                <div class="col-lg-3">
                                    <div class="us-footer-menu">
                                        <h3 class="us-footer-menu--header h4-title">Company</h3>
                                        <div class="us-footer-menu--links">
                                            <a href="/about">About </a>
                                            <!-- <a href="#">Careers </a>
                  <a href="/pricing">Pricing </a> -->
                                            <a href="/privacy-policy">Privacy Policy</a>
                                            <a href="/terms-of-service">Terms of Service</a>
                                            <a href="/contact">Contact us</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="us-footer-menu">
                                        <h3 class="us-footer-menu--header h4-title">
                                            Electronic Signature
                                        </h3>
                                        <div class="us-footer-menu--links">
                                            <a href="/electronic-signature">Electronic Signature</a>

                                            <a href="/signature-creator">Free Online Singature Creator</a>

                                            <a href="/use-case">Use cases</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="us-footer-menu">
                                        <h3 class="us-footer-menu--header h4-title">
                                            Document Generation
                                        </h3>
                                        <div class="us-footer-menu--links">
                                            <a href="/contracts">All Templates</a>
                                            <a href="/power-of-attorney">Power of Attorney</a>
                                            <a href="/rental-lease">Lease agreement</a>
                                            <a href="/eviction">Eviction Notice</a>
                                            <a href="/employment">Employment contracts</a>
                                            <a href="/loan-agreement">Loan Agreement</a>
                                            <a href="/rental-lease/application">Rental application</a>
                                            <a href="/deed">Deed Forms</a>
                                            <a href="/bill-of-sale">Bill of Sale</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="us-footer-menu">
                                        <h3 class="us-footer-menu--header h4-title">Resources</h3>
                                        <div class="us-footer-menu--links">
                                            <a href="/esignature-legality">Electronic signature legality guide
                                            </a>
                                            <a href="/trust-security">Trust and security</a>
                                            <a href="https://usefulpdf.tawk.help/" target="_blank">Support center</a>
                                            <a href="/contracts">Contract templates</a>
                                            <a href="/blog/">Blog </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="us-footer--extend d-block d-lg-flex align-items-center justify-content-between">
                                <p class="copyright">
                                    © Useful Innovations, Inc. 2020 - 2021.
                                </p>
                                <div class="us-footer--social">
                                    <a href="http://facebook.com/usefulpdf" target="_blank">
                                        <img src="~assets/useful_v2_assets/img/fb.png" class="social-icon" /></a>
                                    <a href="https://twitter.com/pdfuseful" target="_blank">
                                        <img src="~assets/useful_v2_assets/img/tw.png" class="social-icon" /></a>
                                    <a href="https://www.linkedin.com/company/usefulpdf" target="_blank">
                                        <img src="~assets/useful_v2_assets/icons/linkedin.svg"
                                            class="social-icon" /></a>
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
        data-body="true">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"
        data-body="true">
    </script>
    <script src="{{ asset('/useful_v2_assets/js/flags.js') }}" data-body="true"></script>
    <script src="{{ asset('/useful_v2_assets/js/ui.js') }}" data-body="true"></script>
    <meta name="google-site-verification" content="wqk8yBWsA9Enk1OEJlnG0Jh2d-yA5eF_fVFz7paK-fI">
    <div id="mfa_inject_cartdata" hidden="hidden"></div>
    <div id="mfa_inject" hidden="hidden"></div>
    <div id="modals-container"></div>
</body>

</html>
