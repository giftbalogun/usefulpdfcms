@extends('layout.app')

@section('content')
    <div>
        <section class="us-hero is--large bg--white">
            <div class="container-fluid">
                <div class="us-hero--content col-lg-10 mx-auto">
                    <div class="row align-items-center">
                        <div class="col-lg-6 mx-auto  text-center">
                            <h1 class="us-hero--content-title  h1-title text-is-dark">
                                Create error-free documents in minutes not hours.
                            </h1>
                            <p class="us-hero--content-desc subtitle text-is-secondary mt-4 ">
                                UsefulDocs allows you to create effective legal documents with a
                                few button clicks and use them however you please.
                            </p>
                            <div class="template-search mt-5">
                                <div class="col-lg-10 mx-auto">
                                    <div class="input-group us-input-group has--shadow">
                                        <input type="text" class="form-control" placeholder="Search..."
                                            aria-label="Search..." aria-describedby="basic-addon2" />
                                        <div class="input-group-append ml-1">
                                            <button class="us-icon-btn--alt">
                                                <i class="ti-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="us-section">
            <div class="container-fluid mx-auto ">
                <div class="col-lg-10 mx-auto">
                    <div class="py-5 text-left">
                        <h3 class="h2-title text-is-dark">Popular forms, contracts, and document templates</h3>
                    </div>
                    <div class="row contract-list align-items-start">
                        <div class="col-lg-3 col-6 mt-3">
                            <a href="/power-of-attorney" class="contract-list--item d-flex align-items-center">
                                <div class="w-100">
                                    <h3 class="h4-title text-is-primary">Power of attorney</h3>
                                    <i class="ti-arrow-right"></i>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-6 mt-3">
                            <a href="/employment" class="contract-list--item d-flex align-items-center">
                                <div class="w-100">
                                    <h3 class="h4-title text-is-primary">Employment contracts </h3>
                                    <i class="ti-arrow-right"></i>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-6 mt-3">
                            <a href="/bill-of-sale" class="contract-list--item d-flex align-items-center">
                                <div class="w-100">
                                    <h3 class="h4-title text-is-primary">Bill of sale </h3>
                                    <i class="ti-arrow-right"></i>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-6 mt-3">
                            <a href="/rental-lease" class="contract-list--item d-flex align-items-center">
                                <div class="w-100">
                                    <h3 class="h4-title text-is-primary">Rent and lease agreements </h3>
                                    <i class="ti-arrow-right"></i>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-6 mt-3">
                            <a href="/deed" class="contract-list--item d-flex align-items-center">
                                <div class="w-100">
                                    <h3 class="h4-title text-is-primary">Deed forms </h3>
                                    <i class="ti-arrow-right"></i>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-6 mt-3">
                            <a href="/purchase-agreement" class="contract-list--item d-flex align-items-center">
                                <div class="w-100">
                                    <h3 class="h4-title text-is-primary">Purchase agreements </h3>
                                    <i class="ti-arrow-right"></i>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-6 mt-3">
                            <a href="/consent" class="contract-list--item d-flex align-items-center">
                                <div class="w-100">
                                    <h3 class="h4-title text-is-primary">Consent forms</h3>
                                    <i class="ti-arrow-right"></i>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-6 mt-3">
                            <a href="/living-will" class="contract-list--item d-flex align-items-center">
                                <div class="w-100">
                                    <h3 class="h4-title text-is-primary">Living will</h3>
                                    <i class="ti-arrow-right"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="mt-5 text-center">
                        <a class="us-btn is--primary--outline" href="/contracts">
                            View all documents</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="us-section bg--primary">
            <div class="container-fluid">
                <div class="col-lg-10 mx-auto p-0">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="col-lg-8 mx-auto p-0">
                                <h3 class="h3-title text-white">Over 1,000 templates</h3>
                                <p class="body-text text-white">
                                    Whether you're in healthcare, sell boats, or want to hire your
                                    next employee we have a document template that'll meet your
                                    needs.
                                </p>
                                <div class="mt-5 d-block d-md-flex align-items-center">
                                    <div class="pr-2 mt-2">
                                        <a href="/contracts" class="us-btn is--white">
                                            View all documents
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <img src="{{ asset('/useful_v2_assets/img/usefuldocs/man-looking-at-usefulpdf-templates.png') }}"
                                class=" us-section--img" alt="Man looking at Usefulpdf templates" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="us-section bg--white">
            <div class="container-fluid">
                <div class="col-lg-10 mx-auto p-0">
                    <div class="row align-items-center reverse-section">
                        <div class="col-lg-6">
                            <img src="{{ asset('/useful_v2_assets/img/usefuldocs/lady-signing-error-free-documents.png') }}"
                                class="us-section--img" alt="Lady Signing error free documents" />
                        </div>
                        <div class="col-lg-6">
                            <div class="col-lg-8 mx-auto p-0">
                                <h3 class="h3-title text-is-dark">Error free documents</h3>
                                <p class="body-text text-is-dark">
                                    Creating documents from scratch is time-consuming and
                                    error-prone. With UsefulDocs you just have to answer a few
                                    questions and your document will be generated for you -
                                    drastically cutting down the number of errors.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="us-section bg--white">
            <div class="container-fluid">
                <div class="col-lg-10 mx-auto p-0">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="col-lg-8 mx-auto p-0">
                                <h3 class="h3-title text-is-dark">
                                    Secure document generation
                                </h3>
                                <p class="body-text text-is-dark">
                                    We know how important security is to you so UsefulDocs has
                                    multiple features built-in to the document generator to secure
                                    your information. End-to-end encryption, SSL certificate,
                                    constantly monitored firewalls, and more work to keep you safe
                                    at all times.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <img src="{{ asset('/useful_v2_assets/img/usefuldocs/secure-document-generation.png') }}"
                                class="us-section--img" alt="Secure Document Generation" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="us-section bg--white">
            <div class="container-fluid">
                <div class="col-lg-10 mx-auto p-0">
                    <div class="row align-items-center reverse-section">
                        <div class="col-lg-6">
                            <img src="{{ asset('/useful_v2_assets/img/usefuldocs/usefulpdf-intuitive-document-genration.png') }}"
                                class="us-section--img" alt="Intutuve Document Generation" />
                        </div>
                        <div class="col-lg-6">
                            <div class="col-lg-8 mx-auto p-0">
                                <h3 class="h3-title text-is-dark">Intuitive workflow</h3>
                                <p class="body-text text-is-dark">
                                    No need to learn a new piece of software. As long as you can
                                    read then you can work with our document generation software
                                    to create contracts and agreements in minutes.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="us-section bg--white">
            <div class="container-fluid">
                <div class="col-lg-10 mx-auto p-0">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="col-lg-8 mx-auto p-0">
                                <h3 class="h3-title text-is-dark">
                                    Document storage without limits
                                </h3>
                                <p class="body-text text-is-dark">
                                    Whether you're in your office or traveling for an important
                                    meeting, you'll be able to store and access all of your
                                    documents in one central location. If you don't have one
                                    prepared, you can just create it in a few minutes.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <img src="{{ asset('/useful_v2_assets/img/usefuldocs/document-storage.png') }}"
                                class="us-section--img" alt="Document Storage" />
                        </div>
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
                    <div class="mt-5">
                        <a href="#!" class="us-btn is--primary">Get Started</a>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
