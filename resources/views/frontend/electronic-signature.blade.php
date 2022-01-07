@extends('layout.app')

@section('content')
    <div>
        <section class="us-hero is--small container-fluid bg--white">
            <img src="{{ asset('/useful_v2_assets/img/quater_circle.png') }}"
                class="m-width d-none float-shape d-lg-block" />
            <div class="us-hero--content container-fluid pt-5">
                <div class=" col-lg-10 mx-auto p-0">
                    <div class="row align-items-center">
                        <div class="col-lg-6 pt-5">
                            <div class="text-left mt-4 mb-5 ml-custom-5 pt-5">
                                <div>
                                    <h1 class="us-hero--content-title text-is-dark  h1-title">
                                        Close More Deals Faster, Slash Costs, and Streamline
                                        Approval Processes With Our Legally Binding Electronic
                                        Signature Software -
                                        <div class="has--line">
                                            <span class="text-is-secondaryGreen">UsefulSignatures.</span>
                                            <img src="{{ asset('/useful_v2_assets/img/vector/zig_long.svg') }}"
                                                style="max-width: 200px;" alt="" />
                                        </div>
                                    </h1>
                                    <p class="us-hero--content-desc text-is-secondary subtitle my-4">
                                        Fully secure, legally binding, and a joy to use. The
                                        UsefulPDF eSigning solution makes agreements easier.
                                    </p>
                                </div>
                                <div class="py-2">
                                    <p class="body-text text-is-dark">
                                        <img src="{{ asset('/useful_v2_assets/img/cs/9.png') }}" class="icon" />
                                        SSL enterprise-grade encryption to secure your data
                                    </p>
                                    <p class="body-text text-is-dark">
                                        <img src="{{ asset('/useful_v2_assets/img/cs/9.png') }}" class="icon" />
                                        Certified email & audit trail
                                    </p>
                                    <p class="body-text text-is-dark">
                                        <img src="{{ asset('/useful_v2_assets/img/cs/9.png') }}" class="icon" />
                                        Multiple signature types
                                    </p>
                                </div>
                                <div class="col-sm-10 p-0 mt-5">
                                    <div class="">
                                        <a href="#!" class="text-uppercase us-btn is--primary">Sign your first document
                                            now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 text-right pr-0">
                            <div class="col-sm-12 text-center">
                                <img src="{{ asset('/useful_v2_assets/img/esig/electronic-signatures.png') }}"
                                    class="us-hero--content-img" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="us-section py-3">
            <div class="container-fluid">
                <div class="col-lg-10 mx-auto p-0">
                    <div class="text-center mt-4 mb-5">
                        <h3 class="h2-title text-is-dark py-5">
                            Streamline deal flow and get contracts signed faster
                        </h3>
                        <div class="row align-items-center">
                            <div class="col-sm-5 text-left d-flex align-items-center">
                                <div class="">
                                    <h3 class="h3-title text-is-primary">
                                        Choose where you want people to sign your document
                                    </h3>
                                    <p class="body-text text-is-dark">
                                        Drag and drop signature boxes, add custom fields, and
                                        include consent fields to make signing documents easier for
                                        you and everyone else involved.
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <img src="{{ asset('/useful_v2_assets/img/esig/choose-where-to-sign.png') }}"
                                    class="us-section--img" alt="Choose where you want people to sign" />
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <img src="{{ asset('/useful_v2_assets/img/right-left-arrow.png') }}"
                                class="m-width full-arrow" />
                        </div>
                        <div class="row align-items-center reverse-section">
                            <div class="col-sm-7">
                                <img src="{{ asset('/useful_v2_assets/img/esig/reorder-signers.png') }}"
                                    class="us-section--img" />
                            </div>
                            <div class="col-sm-5 text-left d-flex align-items-center">
                                <div class="">
                                    <h3 class="h3-title text-is-primary">
                                        Set order of signing and send
                                    </h3>
                                    <p class="body-text text-is-dark">
                                        Add all the people who need to sign, determine who needs to
                                        sign first, second, third, etc., and send via certified
                                        email.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <img src="{{ asset('/useful_v2_assets/img/left-right-arrow.png') }}"
                                class="m-width full-arrow" />
                        </div>
                        <div class="row align-items-center">
                            <div class="col-sm-5 text-left d-flex align-items-center">
                                <div class="">
                                    <h3 class="h3-title text-is-primary">
                                        Track progress
                                    </h3>
                                    <p class="body-text text-is-dark">
                                        Track who has opened the certified email, viewed the
                                        document, signed, and other important information with a
                                        clear audit trail.
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <img src="{{ asset('/useful_v2_assets/img/esig/track-audit-trail.png') }}"
                                    class="us-section--img" />
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <img src="{{ asset('/useful_v2_assets/img/right-left-arrow.png') }}"
                                class="m-width full-arrow" />
                        </div>
                        <div class="row align-items-center reverse-section">
                            <div class="col-sm-7">
                                <img src="{{ asset('/useful_v2_assets/img/esig/save-completed-documents.png') }}"
                                    class="us-section--img" />
                            </div>
                            <div class="col-sm-5 text-left d-flex align-items-center">
                                <div class="">
                                    <h3 class="h3-title text-is-primary">
                                        Save your completed documents
                                    </h3>
                                    <p class="body-text text-is-dark">
                                        Store your contracts and documents within UsefulPDF to
                                        access from anywhere, print out, and reference whenever you
                                        need them.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="mt-5 text-center col-sm-12">
                                                                                      <a href="#!" class="us-btn is--primary">
                                                                                        START YOUR FREE TRIAL
                                                                                      </a>
                                                                                    </div> -->
                    </div>
                </div>
            </div>
        </section>
        <section class="us-section bg--primary">
            <div class="container-fluid">
                <div class="col-lg-10 mx-auto p-0">
                    <div class="row p-md-5 align-items-center">
                        <div class="col-lg-6">
                            <h3 class="h3-title text-white">
                                For the teams that need a simple solution that gets the job done
                            </h3>
                            <p class="body-text text-white mt-4">
                                Speed, security, and convenience. The combination that gets your
                                documents signed up to 80% faster without any added work. The
                                best part? All the signatures you collect through the UsefulPDF
                                platform are legally binding in dozens of jurisdictions around
                                the world.
                            </p>
                        </div>
                        <div class="col-lg-6 text-center">
                            <img src="{{ asset('/useful_v2_assets/img/cs/5.png') }}" class="us-section--img" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="us-section">
            <div class="container-fluid">
                <div class="col-lg-10 mx-auto p-0">
                    <div class="row mt-custom-7">
                        <div class="col-lg-6">
                            <h4 class="teko-normal-700 font-size-36 dark-green-color">
                                If signing by hand<br />
                                is too slow
                            </h4>
                            <p class="body-text text-is-dark mt-4">
                                Leave behind the nightmare of signing every document by hand.
                                Business moves at the speed of thought, and you need a
                                platform that moves just as quickly. You’ve found it.
                            </p>
                        </div>
                        <div class="col-lg-6">
                            <h4 class="teko-normal-700 font-size-36 dark-green-color">
                                When other tools have too many<br />
                                bells and whistles
                            </h4>
                            <p class="body-text text-is-dark mt-4">
                                Maybe you don’t need work process automation, complex workflows, and a thousand other
                                features. Use our platform when you need legally binding signatures - fast.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="us-section">
            <div class="about-circle-2">
                <img src="{{ asset('/useful_v2_assets/img/vector/about-circle-2.svg') }}" alt="" />
            </div>
            <div class="container-fluid">
                <div class="col-lg-10 mx-auto p-0">
                    <div class="row container-fluid mx-auto p-0">
                        <div class="col-sm-7 mx-auto text-center d-flex align-items-center p-0">
                            <div class="">
                                <h3 class="h3-title text-is-primary">
                                    Secure, User Friendly, and Legally Binding
                                </h3>
                                <p class="body-text text-is-dark mt-3">
                                    UsefulSignatures, The UsefulPDF Electronic Signature software,
                                    uses enterprise-grade security and best practices to ensure
                                    your data is safe at rest and in transit. Signature requests
                                    are sent via certified email, an audit trail is created, and
                                    each document is stamped with an electronic fingerprint to
                                    ensure validity and legality.
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-12 text-left">
                            <img src="{{ asset('/useful_v2_assets/img/esig/user-friendly.png') }}"
                                class="us-section--img" />
                        </div>
                        <div class="row align-items-center">
                            <div class="col-lg-6 mx-auto text-left p-2">
                                <div class="">
                                    <h3 class="h3-title text-is-primary">
                                        Set Signing Order
                                    </h3>
                                    <p class="body-text text-is-dark mt-3 p-2 mb-0">
                                        If you need certain parties to sign first, we’ve got you
                                        covered. Set order of signing and send the right people
                                        emails first. After they’ve signed, UsefulSignatures will
                                        automatically send a certified email to the next person
                                        until all parties have signed the document.
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6 text-center">
                                <img src="{{ asset('/useful_v2_assets/img/esig/set-signing-order.png') }}"
                                    class="us-section--img" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="us-section">
            <div class="about-circle-1">
                <img src="{{ asset('/useful_v2_assets/img/vector/about-circle-1.svg') }}" alt="" />
            </div>
            <div class="container-fluid">
                <div class="col-lg-10 mx-auto p-0">
                    <div class="row reverse-section">
                        <div class="col-lg-6 text-left">
                            <img src="{{ asset('/useful_v2_assets/img/esig/track-progress.png') }}"
                                class="us-section--img" />
                        </div>
                        <div class="col-lg-6 text-left d-flex align-items-center">
                            <div class="">
                                <h3 class="h3-title text-is-primary">
                                    Track signing progress
                                </h3>
                                <p class="body-text text-is-dark mt-3">
                                    Always be in the loop about how far the signing process has
                                    gone. Log in to your dashboard and see who’s signed, who’s
                                    opened, and when it happened. You’ll have a birds-eye view of
                                    overall progress and can nudge the people who need it. You
                                    also get helpful status markers which include:
                                </p>
                                <div class="mt-3">
                                    <p class="p-0">
                                        <img src="{{ asset('/useful_v2_assets/img/cs/6.png') }}"
                                            class="icon ml-2 mr-1" />
                                        <span>Scheduled </span>
                                    </p>
                                    <p class="p-0">
                                        <img src="{{ asset('/useful_v2_assets/img/cs/7.png') }}"
                                            class="icon ml-2 mr-1" />
                                        <span>Completion percentage </span>
                                    </p>
                                    <p class="p-0">
                                        <img src="{{ asset('/useful_v2_assets/img/cs/8.png') }}"
                                            class="icon ml-2 mr-1" />
                                        <span>Waiting for final approval</span>
                                    </p>
                                    <p class="p-0">
                                        <img src="{{ asset('/useful_v2_assets/img/cs/9.png') }}"
                                            class="icon ml-2 mr-1" />
                                        <span>Complete</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="us-section bg-blue-pattern">
            <div class="container-fluid">
                <div class="col-lg-10 mx-auto p-0">
                    <div class="row p-md-5 align-items-center reverse-section">
                        <div class="col-lg-6">
                            <h3 class="h3-title text-white">Certified Email Audit Trail</h3>
                            <p class="mt-4  text-white  text-white">
                                It’s just like certified mail except faster, cheaper, and easier
                                for everyone. Access an audit trail containing important
                                information that’s admissible in court. It shows you IP address
                                of signers, time of action, date of the action, and also tracks:
                            </p>
                            <p class=" text-white p-0 mt-5">
                                <img src="{{ asset('/useful_v2_assets/img/cs/6.png') }}" class="icon mr-1" />
                                <span>When the email was sent to the recipient(s) </span>
                            </p>
                            <p class=" text-white p-0 mt-4">
                                <img src="{{ asset('/useful_v2_assets/img/cs/6.png') }}" class="icon mr-1" />
                                <span>When the email was opened by recipient(s) </span>
                            </p>
                            <p class=" text-white p-0 mt-4">
                                <img src="{{ asset('/useful_v2_assets/img/cs/6.png') }}" class="icon mr-1" />
                                <span>When the document was opened by recipients</span>
                            </p>
                            <p class=" text-white p-0 mt-4">
                                <img src="{{ asset('/useful_v2_assets/img/cs/9.png') }}" class="icon mr-1" />
                                <span>When the recipients signed</span>
                            </p>
                        </div>
                        <div class="col-lg-6 text-center">
                            <img src="{{ asset('/useful_v2_assets/img/esig/certified-audit-trail.png') }}"
                                class="us-section--img" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="us-section">
            <div class="container-fluid">
                <div class="col-lg-10 mx-auto p-0">
                    <div class="row mt-5">
                        <div class="col-lg-6 text-left">
                            <img src="{{ asset('/useful_v2_assets/img/esig/team-management.png') }}"
                                class="us-section--img" />
                        </div>
                        <div class="col-lg-6 text-left d-flex align-items-center">
                            <div class="">
                                <h3 class="h3-title text-is-primary">
                                    Team and role management
                                </h3>
                                <p class="body-text text-is-dark mt-3">
                                    Invite as many team members as you need and set different
                                    permission levels to control what they have access to.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="us-section">
            <div class="container-fluid">
                <div class="col-lg-10 mx-auto p-0">
                    <div class="row mt-5 reverse-section">
                        <div class="col-lg-6 text-left d-flex align-items-center">
                            <div class="">
                                <h3 class="h3-title text-is-primary">
                                    Multiple Signature Styles
                                </h3>
                                <p class="body-text text-is-dark mt-3">
                                    Set the default signature tied to your account during the
                                    setup process by choosing from multiple signature styles,
                                    uploading your signature, or drawing with a mouse or
                                    trackpad
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 text-left">
                            <img src="{{ asset('/useful_v2_assets/img/esig/multiple-signatures.png') }}"
                                class="us-section--img" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="us-section">
            <div class="container-fluid">
                <div class="col-lg-10 mx-auto p-0">
                    <div class="row align-items-start">
                        <div class="col-lg-6">
                            <div class="cs-card-1">
                                <div class="">
                                    <div class="col-sm-7 p-0">
                                        <h4 class="h3-title text-is-dark">Unlimited Signers</h4>
                                    </div>
                                </div>
                                <div class="col-lg-10 p-0">
                                    <p>
                                        Whether you need two signatures or a hundred signatures, you
                                        can set all the recipients in UsefulSignatures. Our
                                        electronic signature software will take care of the rest and
                                        you’ll get a completed document sooner than you imagined.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="cs-card-1">
                                <div class="">
                                    <div class="col-sm-7 p-0">
                                        <h4 class="h3-title text-is-dark">Multiple fields</h4>
                                    </div>
                                </div>
                                <div class="col-lg-810 p-0">
                                    <p>
                                        Signatures aren’t the only thing documents need. Create
                                        multiple fields like signature, date, address, phone number,
                                        and even custom fields to meet your unique needs.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="us-section pt-0">
            <div class="container-fluid">
                <div class="col-lg-10 mx-auto p-0">
                    <div class="row p-md-5 align-items-center">
                        <div class="col-lg-6 text-left">
                            <img src="{{ asset('/useful_v2_assets/img/esig/guided-signing.png') }}"
                                class="us-section--img" />
                        </div>
                        <div class="col-lg-6 text-left d-flex align-items-center">
                            <div class="">
                                <h3 class="h3-title text-is-primary">
                                    Forget incomplete signatures
                                </h3>
                                <p class="body-text text-is-dark mt-3">
                                    Guided signing ensures that all necessary signature fields are
                                    completed and you don’t have to chase people up after the
                                    fact. It’s an easy win for everyone involved.
                                </p>
                            </div>
                        </div>
                        <div class="row reverse-section container mx-auto mt-5">
                            <div class="col-sm-12 text-center">
                                <div class=" pt-4">
                                    <h3 class="h3-title text-is-primary">
                                        Create, store, and access templates on the go
                                    </h3>
                                    <p class="body-text text-is-dark mt-3">
                                        Whether you need company-wide templates or workspace
                                        specific templates, you can <br />
                                        create and save them for anyone to access. Empower your
                                        entire organization with the <br />
                                        right documents at their fingertips
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-12 text-center">
                                <img src="{{ asset('/useful_v2_assets/img/esig/store-templates.png') }}"
                                    class="us-section--img" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="us-section">
            <div class="container-fluid">
                <div class="col-lg-10 mx-auto p-0">
                    <div class="row p-md-5 align-items-center">
                        <div class="col-lg-12">
                            <div class="mb-5 mt-2">
                                <h3 class="h2-title text-is-dark">
                                    Electronic Signature Use Cases
                                </h3>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="sig-usecase-card px-4 py-3 has--shadow border-radius">
                                <h3 class="h3-title text-is-primary">Insurance</h3>
                                <p class="body-text text-is-dark">
                                    Create a seamless experience for signing or updating policies
                                    and increase conversion rates
                                </p>
                                <div class="mt-3 text-right">
                                    <!-- route /insurance -->
                                    <a class="us-icon-btn" href="/use-case/insurance">
                                        Learn More
                                        <span class=""> <i class="ti-angle-right"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="sig-usecase-card px-4 py-3 has--shadow border-radius">
                                <h3 class="h3-title text-is-primary">Real estate</h3>
                                <p class="body-text text-is-dark">
                                    Spin up contracts and get them signed in record time to reduce
                                    closing times
                                </p>
                                <div class="mt-3 text-right">
                                    <!-- route /real-estate -->
                                    <a class="us-icon-btn" href="/use-case/real-estate">
                                        Learn More
                                        <span class=""> <i class="ti-angle-right"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="sig-usecase-card px-4 py-3 has--shadow border-radius">
                                <h3 class="h3-title text-is-primary">Legal teams</h3>
                                <p class="body-text text-is-dark">
                                    Create any type of contract and ditch the fax machine while
                                    ensuring the security of your documents
                                </p>
                                <div class="mt-3 text-right">
                                    <!-- route /legal-industry -->
                                    <a class="us-icon-btn" href="/use-case/legal-industry">
                                        Learn More
                                        <span class=""> <i class="ti-angle-right"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center col-sm-12 mt-5">
                    <a class="us-icon-btn" href="/use-case">
                        View More Use cases
                        <span class=""> <i class="ti-angle-right"></i></span>
                    </a>
                </div>
            </div>
        </section>
        <!-- <section class="container-fluid">
                                                                              <div class="footer-cta col-lg-10 mx-auto d-flex align-items-center justify-content-center text-center">
                                                                                <div class="col-lg-8">
                                                                                  <h3 class="h3-title text-is-primary">
                                                                                    START SIGNING WITH USEFULSIGNATURES
                                                                                  </h3>
                                                                                  <div class="mt-5">
                                                                                    <a href="#!" class="us-btn is--primary">Get Started</a>
                                                                                  </div>
                                                                                </div>
                                                                              </div>
                                                                            </section> -->
    </div>

@endsection
