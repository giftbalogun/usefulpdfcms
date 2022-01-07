@extends('layout.app')

@section('content')
    <main id="app" class="main">
        <div>
            <section class="us-hero is--large bg--white">
                <div class="container-fluid">
                    <div class="us-hero--content col-lg-10 mx-auto">
                        <div class="row align-items-center">
                            <div class="col-lg-6 mx-auto text-left">
                                <h1 class="us-hero--content-title h1-title text-is-dark">
                                    Create and sign vetted documents in minutes
                                </h1>
                                <div class="us-hero--content-desc text-is-dark mt-4">
                                    <div class="d-flex align-items-center mb-4">
                                        <div class="mr-2"><span class="num-circle">1</span></div>
                                        <span>Choose from 1,000+ templates </span>
                                    </div>
                                    <div class="d-flex align-items-center mb-4">
                                        <div class="mr-2"><span class="num-circle">2</span></div>
                                        <span>Answer a few questions and click a few
                                            buttons </span>
                                    </div>
                                    <div class="d-flex align-items-center mb-4">
                                        <div class="mr-2"><span class="num-circle">3</span></div>
                                        <span>Get an error-free document to print or sign
                                            online
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mt-5">
                                <div class="col-lg-10 mx-auto"><img alt="Usefuldocs Hero Image"
                                        class="us-hero--content-img lazyLoad isLoaded"
                                        src="{{ asset('/useful_v2_assets/img/usefuldocs/usefuldocs-hero-image.png') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="us-section bg--primaryBlue-dark">
                <div class="container-fluid">
                    <div class="col-lg-10 mx-auto p-0">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="col-lg-8 mx-auto p-0">
                                    <h3 class="h3-title text-white">Rapid document
                                        generation</h3>
                                    <p class="body-text text-white">
                                        Irrespective of your industry, documents are a must. Manually
                                        creating each document leads to errors, time lost, and added
                                        expenses. UsefulDocs has over a thousand free templates you
                                        can use to generate high-quality documents in minutes.
                                    </p>
                                    <div class="mt-5 d-block d-md-flex align-items-center">
                                        <div class="pr-2 mt-2"><a href="{{ route('document-generation') }}"
                                                class="us-btn is--white--outline">Learn
                                                More</a></div>
                                        <div class="pr-2 mt-2"><a href="{{ route('contracts') }}"
                                                class="us-btn is--white">
                                                View all documents
                                            </a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6"><img alt="Rapid document generation"
                                    class="us-section--img lazyLoad isLoaded"
                                    src="{{ asset('/useful_v2_assets/img/usefuldocs/rapid-document-generation.png') }}">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="us-section">
                <div class="container-fluid mx-auto">
                    <div class="col-lg-10 mx-auto">
                        <div class="py-5 text-left">
                            <h3 class="h2-title text-is-dark">Popular forms, contracts,
                                and document templates</h3>
                        </div>
                        <div class="row contract-list align-items-start">
                            <div class="col-lg-3 col-6 mt-3"><a href="https://usefulpdf.com/power-of-attorney"
                                    class="contract-list--item d-flex align-items-center">
                                    <div class="w-100">
                                        <h3 class="h4-title text-is-primary">Power of
                                            attorney</h3> <i class="ti-arrow-right"></i>
                                    </div>
                                </a></div>
                            <div class="col-lg-3 col-6 mt-3"><a href="https://usefulpdf.com/employment"
                                    class="contract-list--item d-flex align-items-center">
                                    <div class="w-100">
                                        <h3 class="h4-title text-is-primary">Employment
                                            contracts </h3> <i class="ti-arrow-right"></i>
                                    </div>
                                </a></div>
                            <div class="col-lg-3 col-6 mt-3"><a href="https://usefulpdf.com/bill-of-sale"
                                    class="contract-list--item d-flex align-items-center">
                                    <div class="w-100">
                                        <h3 class="h4-title text-is-primary">Bill of sale
                                        </h3> <i class="ti-arrow-right"></i>
                                    </div>
                                </a></div>
                            <div class="col-lg-3 col-6 mt-3"><a href="https://usefulpdf.com/rental-lease"
                                    class="contract-list--item d-flex align-items-center">
                                    <div class="w-100">
                                        <h3 class="h4-title text-is-primary">Rent and
                                            lease agreements </h3> <i class="ti-arrow-right"></i>
                                    </div>
                                </a></div>
                            <div class="col-lg-3 col-6 mt-3"><a href="https://usefulpdf.com/deed"
                                    class="contract-list--item d-flex align-items-center">
                                    <div class="w-100">
                                        <h3 class="h4-title text-is-primary">Deed forms
                                        </h3> <i class="ti-arrow-right"></i>
                                    </div>
                                </a></div>
                            <div class="col-lg-3 col-6 mt-3"><a href="https://usefulpdf.com/purchase-agreement"
                                    class="contract-list--item d-flex align-items-center">
                                    <div class="w-100">
                                        <h3 class="h4-title text-is-primary">Purchase
                                            agreements </h3> <i class="ti-arrow-right"></i>
                                    </div>
                                </a></div>
                            <div class="col-lg-3 col-6 mt-3"><a href="https://usefulpdf.com/consent"
                                    class="contract-list--item d-flex align-items-center">
                                    <div class="w-100">
                                        <h3 class="h4-title text-is-primary">Consent
                                            forms</h3> <i class="ti-arrow-right"></i>
                                    </div>
                                </a></div>
                            <div class="col-lg-3 col-6 mt-3"><a href="https://usefulpdf.com/living-will"
                                    class="contract-list--item d-flex align-items-center">
                                    <div class="w-100">
                                        <h3 class="h4-title text-is-primary">Living will
                                        </h3> <i class="ti-arrow-right"></i>
                                    </div>
                                </a></div>
                        </div>
                        <div class="mt-5 text-center"><a href="https://usefulpdf.com/contracts"
                                class="us-btn is--primary--outline">
                                View all documents</a></div>
                    </div>
                </div>
            </section>
            <section class="us-section bg--white">
                <div class="container-fluid">
                    <div class="col-lg-10 mx-auto p-0">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="col-lg-8 mx-auto p-0">
                                    <h3 class="h3-title text-is-dark">Sign with
                                        confidence</h3>
                                    <p class="body-text text-is-dark">
                                        Stay on the cutting edge of business with electronic signature
                                        software that adapts to meet your needs. Collect electronic
                                        signatures anywhere to speed up your workflow while staying
                                        legally compliant.
                                    </p>
                                    <div class="row align-items-start">
                                        <div class="col-lg-6">
                                            <div class="d-flex align-items-center mt-2 mb-2"><img alt=""
                                                    class="lazyLoad isLoaded"
                                                    src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzIiIGhlaWdodD0iMzIiIHZpZXdCb3g9IjAgMCAzMiAzMiIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTE2IDNDOC44IDMgMyA4LjggMyAxNkMzIDIzLjIgOC44IDI5IDE2IDI5QzIzLjIgMjkgMjkgMjMuMiAyOSAxNkMyOSAxNC42IDI4LjgxMiAxMy4yMDYgMjguMzEyIDExLjkwNkwyNi42ODggMTMuNUMyNi44ODggMTQuMyAyNy4wMDEgMTUuMSAyNy4wMDEgMTZDMjcuMDAxIDIyLjEgMjIuMTAxIDI3IDE2LjAwMSAyN0M5LjkwMSAyNyA1IDIyLjEgNSAxNkM1IDkuOSA5LjkgNSAxNiA1QzE5IDUgMjEuNjk0IDYuMTk0IDIzLjU5NCA4LjA5NEwyNSA2LjY4OEMyMi43IDQuMzg4IDE5LjUgMyAxNiAzWk0yNy4yOCA3LjI4TDE2IDE4LjU2M0wxMS43MiAxNC4yODNMMTAuMjggMTUuNzJMMTUuMjggMjAuNzJMMTYgMjEuNDA2TDE2LjcyIDIwLjcxOUwyOC43MiA4LjcxOUwyNy4yOCA3LjI3OVY3LjI4WiIgZmlsbD0iIzJEQUU3QSIvPgo8L3N2Zz4K">
                                                <p class="body-text small text-is-dark mb-0 mt-0 ml-2">
                                                    Audit trail
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="d-flex align-items-center mt-2 mb-2"><img alt=""
                                                    class="lazyLoad isLoaded"
                                                    src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzIiIGhlaWdodD0iMzIiIHZpZXdCb3g9IjAgMCAzMiAzMiIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTE2IDNDOC44IDMgMyA4LjggMyAxNkMzIDIzLjIgOC44IDI5IDE2IDI5QzIzLjIgMjkgMjkgMjMuMiAyOSAxNkMyOSAxNC42IDI4LjgxMiAxMy4yMDYgMjguMzEyIDExLjkwNkwyNi42ODggMTMuNUMyNi44ODggMTQuMyAyNy4wMDEgMTUuMSAyNy4wMDEgMTZDMjcuMDAxIDIyLjEgMjIuMTAxIDI3IDE2LjAwMSAyN0M5LjkwMSAyNyA1IDIyLjEgNSAxNkM1IDkuOSA5LjkgNSAxNiA1QzE5IDUgMjEuNjk0IDYuMTk0IDIzLjU5NCA4LjA5NEwyNSA2LjY4OEMyMi43IDQuMzg4IDE5LjUgMyAxNiAzWk0yNy4yOCA3LjI4TDE2IDE4LjU2M0wxMS43MiAxNC4yODNMMTAuMjggMTUuNzJMMTUuMjggMjAuNzJMMTYgMjEuNDA2TDE2LjcyIDIwLjcxOUwyOC43MiA4LjcxOUwyNy4yOCA3LjI3OVY3LjI4WiIgZmlsbD0iIzJEQUU3QSIvPgo8L3N2Zz4K">
                                                <p class="body-text small text-is-dark mb-0 mt-0 ml-2">
                                                    Certified email
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="d-flex align-items-center mt-2 mb-2"><img alt=""
                                                    class="lazyLoad isLoaded"
                                                    src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzIiIGhlaWdodD0iMzIiIHZpZXdCb3g9IjAgMCAzMiAzMiIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTE2IDNDOC44IDMgMyA4LjggMyAxNkMzIDIzLjIgOC44IDI5IDE2IDI5QzIzLjIgMjkgMjkgMjMuMiAyOSAxNkMyOSAxNC42IDI4LjgxMiAxMy4yMDYgMjguMzEyIDExLjkwNkwyNi42ODggMTMuNUMyNi44ODggMTQuMyAyNy4wMDEgMTUuMSAyNy4wMDEgMTZDMjcuMDAxIDIyLjEgMjIuMTAxIDI3IDE2LjAwMSAyN0M5LjkwMSAyNyA1IDIyLjEgNSAxNkM1IDkuOSA5LjkgNSAxNiA1QzE5IDUgMjEuNjk0IDYuMTk0IDIzLjU5NCA4LjA5NEwyNSA2LjY4OEMyMi43IDQuMzg4IDE5LjUgMyAxNiAzWk0yNy4yOCA3LjI4TDE2IDE4LjU2M0wxMS43MiAxNC4yODNMMTAuMjggMTUuNzJMMTUuMjggMjAuNzJMMTYgMjEuNDA2TDE2LjcyIDIwLjcxOUwyOC43MiA4LjcxOUwyNy4yOCA3LjI3OVY3LjI4WiIgZmlsbD0iIzJEQUU3QSIvPgo8L3N2Zz4K">
                                                <p class="body-text small text-is-dark mb-0 mt-0 ml-2">
                                                    Mobile signing
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="d-flex align-items-center mt-2 mb-2"><img alt=""
                                                    class="lazyLoad isLoaded"
                                                    src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzIiIGhlaWdodD0iMzIiIHZpZXdCb3g9IjAgMCAzMiAzMiIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTE2IDNDOC44IDMgMyA4LjggMyAxNkMzIDIzLjIgOC44IDI5IDE2IDI5QzIzLjIgMjkgMjkgMjMuMiAyOSAxNkMyOSAxNC42IDI4LjgxMiAxMy4yMDYgMjguMzEyIDExLjkwNkwyNi42ODggMTMuNUMyNi44ODggMTQuMyAyNy4wMDEgMTUuMSAyNy4wMDEgMTZDMjcuMDAxIDIyLjEgMjIuMTAxIDI3IDE2LjAwMSAyN0M5LjkwMSAyNyA1IDIyLjEgNSAxNkM1IDkuOSA5LjkgNSAxNiA1QzE5IDUgMjEuNjk0IDYuMTk0IDIzLjU5NCA4LjA5NEwyNSA2LjY4OEMyMi43IDQuMzg4IDE5LjUgMyAxNiAzWk0yNy4yOCA3LjI4TDE2IDE4LjU2M0wxMS43MiAxNC4yODNMMTAuMjggMTUuNzJMMTUuMjggMjAuNzJMMTYgMjEuNDA2TDE2LjcyIDIwLjcxOUwyOC43MiA4LjcxOUwyNy4yOCA3LjI3OVY3LjI4WiIgZmlsbD0iIzJEQUU3QSIvPgo8L3N2Zz4K">
                                                <p class="body-text small text-is-dark mb-0 mt-0 ml-2">
                                                    Team management
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="d-flex align-items-center mt-2 mb-2"><img alt=""
                                                    class="lazyLoad isLoaded"
                                                    src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzIiIGhlaWdodD0iMzIiIHZpZXdCb3g9IjAgMCAzMiAzMiIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTE2IDNDOC44IDMgMyA4LjggMyAxNkMzIDIzLjIgOC44IDI5IDE2IDI5QzIzLjIgMjkgMjkgMjMuMiAyOSAxNkMyOSAxNC42IDI4LjgxMiAxMy4yMDYgMjguMzEyIDExLjkwNkwyNi42ODggMTMuNUMyNi44ODggMTQuMyAyNy4wMDEgMTUuMSAyNy4wMDEgMTZDMjcuMDAxIDIyLjEgMjIuMTAxIDI3IDE2LjAwMSAyN0M5LjkwMSAyNyA1IDIyLjEgNSAxNkM1IDkuOSA5LjkgNSAxNiA1QzE5IDUgMjEuNjk0IDYuMTk0IDIzLjU5NCA4LjA5NEwyNSA2LjY4OEMyMi43IDQuMzg4IDE5LjUgMyAxNiAzWk0yNy4yOCA3LjI4TDE2IDE4LjU2M0wxMS43MiAxNC4yODNMMTAuMjggMTUuNzJMMTUuMjggMjAuNzJMMTYgMjEuNDA2TDE2LjcyIDIwLjcxOUwyOC43MiA4LjcxOUwyNy4yOCA3LjI3OVY3LjI4WiIgZmlsbD0iIzJEQUU3QSIvPgo8L3N2Zz4K">
                                                <p class="body-text small text-is-dark mb-0 mt-0 ml-2">
                                                    Legally binding signatures
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="d-flex align-items-center mt-2 mb-2"><img alt=""
                                                    class="lazyLoad isLoaded"
                                                    src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzIiIGhlaWdodD0iMzIiIHZpZXdCb3g9IjAgMCAzMiAzMiIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTE2IDNDOC44IDMgMyA4LjggMyAxNkMzIDIzLjIgOC44IDI5IDE2IDI5QzIzLjIgMjkgMjkgMjMuMiAyOSAxNkMyOSAxNC42IDI4LjgxMiAxMy4yMDYgMjguMzEyIDExLjkwNkwyNi42ODggMTMuNUMyNi44ODggMTQuMyAyNy4wMDEgMTUuMSAyNy4wMDEgMTZDMjcuMDAxIDIyLjEgMjIuMTAxIDI3IDE2LjAwMSAyN0M5LjkwMSAyNyA1IDIyLjEgNSAxNkM1IDkuOSA5LjkgNSAxNiA1QzE5IDUgMjEuNjk0IDYuMTk0IDIzLjU5NCA4LjA5NEwyNSA2LjY4OEMyMi43IDQuMzg4IDE5LjUgMyAxNiAzWk0yNy4yOCA3LjI4TDE2IDE4LjU2M0wxMS43MiAxNC4yODNMMTAuMjggMTUuNzJMMTUuMjggMjAuNzJMMTYgMjEuNDA2TDE2LjcyIDIwLjcxOUwyOC43MiA4LjcxOUwyNy4yOCA3LjI3OVY3LjI4WiIgZmlsbD0iIzJEQUU3QSIvPgo8L3N2Zz4K">
                                                <p class="body-text small text-is-dark mb-0 mt-0 ml-2">
                                                    So much more
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-5"><a href="https://usefulpdf.com/electronic-signature"
                                            class="us-btn is--primary--outline">
                                            Learn More</a></div>
                                </div>
                            </div>
                            <div class="col-lg-6"><img alt="Sign Documents with Confidence"
                                    class="us-section--img lazyLoad isLoaded"
                                    src="{{ asset('/useful_v2_assets/img/usefuldocs/sign-documents-with-confidence.png') }}">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="us-section">
                <div class="container-fluid us-section--content">
                    <div class="row align-items-center col-lg-10 p-0 mx-auto">
                        <div class="col-lg-6"><img alt="" class="us-section--img lazyLoad isLoaded"
                                src="{{ asset('/useful_v2_assets/img/usefuldocs/lady-smiling-about-document-generation-and-signing.png') }}">
                        </div>
                        <div class="col-lg-6">
                            <h3 class="h3-title text-is-dark">
                                It’s about more than document generation and signing
                            </h3>
                            <p class="us-section--desc body-text text-is-dark">
                                You don’t wake up in the morning excited about producing a pile of
                                NDAs or chasing up clients to sign on the dotted line. You wake up
                                to do work that’s exciting and interesting but the business of
                                business tends to get in the way.
                            </p>
                            <p class="us-section--desc body-text text-is-dark">
                                Working with documents, whether for internal administrative tasks
                                or external collateral can be hard, error-prone, and
                                time-consuming. It shouldn’t be. Our document generation and
                                electronic signature solution makes your work more productive,
                                removes roadblocks, and enhances collaboration.
                            </p>
                            <p class="us-section--desc body-text text-is-dark">
                                The tools are simple, a joy to use, and growing every day. Sign up
                                for UsefulPDF so you can get back to doing the work that matters
                                like saving the world or amassing a fortune.
                            </p>
                            <p class="us-section--desc body-text text-is-dark">
                                We don’t judge.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="container-fluid">
                <div class="footer-cta col-lg-10 mx-auto d-flex align-items-center justify-content-center text-center">
                    <div class="col-lg-8">
                        <h3 class="h3-title text-is-primary">
                            Generate your first document today
                        </h3>
                        <div class="mt-5"><a href="https://usefulpdf.com/document-generation"
                                class="us-btn is--primary">Get Started</a></div>
                    </div>
                </div>
            </section>
        </div>
    </main>

@endsection
