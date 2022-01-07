@extends('layout.app')

@section('content')
    <div>
        <section class="us-hero is--medium">
            <div class="container">
                <div class="us-hero--content">
                    <div class="col-lg-6 mx-auto text-center">
                        <h4 class="pre-title text-is-secondaryGreen">About UsefulPDF and the team</h4>
                        <h1 class="us-hero--content-title  h1-title">
                            UsefulPDF - We power business processes with intelligent, beautiful, and
                            <div class="has--line">
                                <span class="text-is-secondaryGreen">useful</span>
                                <img src="{{ asset('/useful_v2_assets/img/vector/zig.svg') }}" alt="" />
                            </div>
                            software.

                        </h1>
                    </div>
                </div>
            </div>
        </section>
        <section class="us-section">
            <div class="about-circle-1">
                <img src="{{ asset('/useful_v2_assets/img/vector/about-circle-2.svg') }}" alt="" />
            </div>
            <div class="about-circle-2">
                <img src="{{ asset('/useful_v2_assets/img/vector/about-circle-2.svg') }}" alt="" />
            </div>
            <div class="container-fluid mx-auto ">
                <div class="row align-items-center col-lg-10 mx-auto offset-card">
                    <div class="col-lg-6">
                        <p class="us-section--desc">
                            UsefulPDF is a simple product with a simple goal - make it simple to work with documents, speed
                            up signing, and streamline your business processes. That’s a lot of simples, we know. While it’s
                            not always easy to accomplish our stated mission, we pour our sweat, tears, time, and energy
                            into making it a reality.
                        </p>
                        <p class="us-section--desc">
                            We’ve been there and used the business software that’s bulky, unruly, and almost useless. We’ve
                            experienced when software that barely works gets thrust on you, and you have to use it for three
                            years because the contract is in effect.
                        </p>
                        <p class="us-section--desc">
                            That’s the opposite of what we’re creating a UsefulPDF. The founding team comes from a software
                            background for small businesses. You know, if it’s too hard to use then they’ll drop it like a
                            bad habit. Even though bad habits aren’t too easy to cut.
                        </p>
                        <p class="us-section--desc">We digress.</p>
                        <p class="us-section--desc">
                            We’re building UsefulPDF to bridge the gap between function and form. If it’s not easy to use
                            and doesn’t enhance your work, then we’ve failed. But, judging from the large number of people
                            using UsefulPDF, we’ve done something right.
                        </p>
                    </div>
                    <div class="col-lg-6">
                        <img src="{{ asset('/useful_v2_assets/img/about/about-usefulpdf.png') }}" class="us-section--img"
                            alt="About UsefulPDF" />
                    </div>
                </div>
            </div>
        </section>
        <section class="us-section">
            <div class="container-fluid us-section--content">
                <div class="row align-items-start col-lg-10 p-1 p-lg-5 mx-auto">
                    <div class="col-lg-6">
                        <p class="us-section--desc">
                            As far as we’re concerned, UsefulPDF is only in the early stages, and we’re going to be rolling
                            out more features, tackling more use cases, and making work fun again (yes, work can be fun).
                        </p>
                    </div>
                    <div class="col-lg-6">
                        <p class="us-section--desc">
                            If you’re enjoying what we’re building and want to see new features, then drop us a line. We
                            read every message and reply to most.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="us-section">
            <div class="container-fluid pl-0">
                <div class="col-lg-11 bg--primary d-flex align-items-center pt-5 pb-5" style="min-height: 50vh;">
                    <div class="col-lg-9 mx-auto">
                        <div class="p-0 col-lg-8">
                            <h3 class="h3-title text-white">
                                Oh, about the people that started the company
                            </h3>
                            <p class="us-section--desc text-white">
                                Daniel Ndukwu and Ihunanyachi Thompson founded UsefulPDF. They’re entrepreneurs who have
                                multiple companies such as KyLeads and GrowthBoost under their belt. Previously, they
                                focused on brands with a relatively narrow appeal. Now, they’re tackling a big hairy
                                problem.
                            </p>
                            <p class="us-section--desc text-white">
                                Is it challenging?
                            </p>
                            <p class="us-section--desc text-white">
                                Yes.
                            </p>
                            <p class="us-section--desc text-white">
                                Does that make it more worthwhile?
                            </p>
                            <p class="us-section--desc text-white">
                                Damn straight.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="us-section">
            <div class="container-fluid us-section--content">
                <div class="row align-items-start col-lg-10 p-1 p-lg-5 mx-auto">
                    <div class="col-lg-12 mb-4">
                        <h3 class="h3-title text-is-dark">
                            Our Core Values
                        </h3>
                    </div>
                    <div class="col-lg-6">
                        <div class="mt-2 mb-2 col-lg-10 p-0">
                            <h5 class="text-is-primary h5-title">Simplify.</h5>
                            <p class="us-section--desc">
                                There’s enough complicated software out there. We want to make work just a bit easier.
                                That’s what happens when you have simple tools that work.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mt-2 mb-2 col-lg-10 p-0">
                            <h5 class="text-is-primary h5-title">Listen.</h5>
                            <p class="us-section--desc">
                                We believe all the answers are there if you just listen. We listen deeply, talk sparingly,
                                and put those insights into action.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mt-2 mb-2 col-lg-10 p-0">
                            <h5 class="text-is-primary h5-title">Ideate.</h5>
                            <p class="us-section--desc">
                                No idea is a bad one – only underdeveloped. We’re biased towards creating new ideas and
                                pursuing them to their conclusion as quickly as possible.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mt-2 mb-2 col-lg-10 p-0">
                            <h5 class="text-is-primary h5-title">Launch.</h5>
                            <p class="us-section--desc">
                                We launch quickly and often. New features and new tools are always in the works to better
                                serve our growing user base.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mt-2 mb-2 col-lg-10 p-0">
                            <h5 class="text-is-primary h5-title">Learn.</h5>
                            <p class="us-section--desc">
                                What good is listening and launching if we’re not learning along the way? We’re meticulous
                                about documenting our wins and losses so we can create a repeatable process to better serve
                                our users.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="container-fluid">
            <div class="footer-cta col-lg-10 mx-auto d-flex align-items-center justify-content-center text-center">
                <div class="col-lg-8">
                    <h3 class="h3-title text-is-primary">
                        Do you want to sign documents online?
                    </h3>
                    <div class="mt-5">
                        <a href="{{ route('electronic-signature') }}" class="us-btn is--primary">Get Started</a>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
