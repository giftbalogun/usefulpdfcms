@extends('layout.sig')

@section('content')

    <main id="app" class="main">
        <div id="signature-layout-container">
            <div>
                <section class="mb-5">
                    <div class="container">
                        <div class="text-center mt-custom-5 mb-5">
                            <div class="grad1"></div>
                            <div class="grad2"></div>
                            <div class="grad3"></div>
                            <div class="grad4"></div>
                            <div class="grad5"></div>
                            <h3 class="black-color font-size-42 teko-bold">
                                Signature Generator
                            </h3>
                            <p class="black-secondary-color font-size-18 poppins-normal-500">
                                Choose the type of electronic signature you'd like to create
                            </p>
                        </div>
                        <div class="mt-custom-4"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-6 m-md-auto mb-3">
                                    <div class="custom-card col-sm-11 white-bg"><a href="/signature-creator/draw"
                                            class="has--action">
                                            <div>
                                                <span class="mr-2 teko-normal font-size-30 dark-green-color">Drawn
                                                    signature</span>
                                                <img src="{{ asset('/useful_v2_assets/sig/img/pen.png') }}"
                                                    class="icon">
                                            </div>
                                            <div>
                                                <p class="mt-3 text-black-main">
                                                    Draw your signature using any touchscreen device like
                                                    your
                                                    phone or tablet, use a trackpad, or even use your
                                                    computer
                                                    mouse. When done, our signature maker allows you to edit
                                                    it until it's ready.
                                                </p>
                                            </div>
                                            <div class="text-right"><img
                                                    src="{{ asset('/useful_v2_assets/sig/img/next.png') }}"
                                                    class="icon-2x"></div>
                                        </a></div>
                                </div>
                                <div class="col-sm-6 m-auto">
                                    <div class="custom-card col-sm-11 white-bg"><a href="/signature-creator/type"
                                            class="has--action">
                                            <div><span class="mr-2 teko-normal font-size-30 dark-green-color">Typed
                                                    signature</span> <img
                                                    src="{{ asset('/useful_v2_assets/sig/img/typed-sig.png') }}"
                                                    class="icon"></div>
                                            <div>
                                                <p class="mt-3 text-black-main">
                                                    Simply type your name into our signature creator and
                                                    then
                                                    select from a range of handwriting fonts to get
                                                    something
                                                    unique. When finished, save your new electronic
                                                    signature
                                                    to be used for eSigning.
                                                </p>
                                            </div>
                                            <div class="text-right">
                                                <img src="{{ asset('/useful_v2_assets/sig/img/next.png') }}"
                                                    class="icon-2x">
                                            </div>
                                        </a></div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-custom-9 mb-md-5 mb-xs-5 mt-xs-3">
                            <h3 class="black-color font-size-20 teko-normal-700">
                                Do you want to sign documents online?
                                <img data-src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAC0AAAAyCAYAAADImlLUAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAANdSURBVHgB7ZlPTttAFMbfmwmiVKLyDZpuEVD3BCQnIBF00RVwArKpRLNJsmiJ1A2coGHbloYbkJ6gloiq7nBvEDa0EDyvM3GNPCFO/C8xi/wkJDx44o9Pn9/MvADMmTMncxASkP9UMZaXlwqIkBeAhjfOgHpCkNV93ezAFIgsWgl9ZjzdJ8ICABXG3409IOrIn5OL7cMzSInIoldPq3XpbA2iYwNB42LrQwsSElm02a4bDvUvpcsGxAHpiPf+NKy9ox7EJFam/W4ToEUIFgr6fX8Dg5dIZMqPzwd8hN2/EcVfb5o2xCCWaOX2nbit5Nj1kVUOdmz1y0EBOe7Kx+yM+HNs4YmqR1jM9kHeITwfdl4+3GJX18WoUWEwA6xy0+a4+AoEnfjHSf4/jrEU+aWeidN+1r6+awHT40KOKEap6TNx2g/nixUVC/8Y5jCS2zN3WuG+oOzcPxbF7Zk7rXDF6fnGHNsJOz8T0QpyqKUPQAlCkpno/1GwfUPGSvutGWZuZqJd6Lt2KRYev2i5U7T911JMPsy8TEWjHg9ABs/DzMtUtBjaKRKJqzDzMnYa9e0tsVB7kGxFM9zQrunOCjMv2+pBoFULh5MdZloOUmBwmoGbWv8vHYfdH6+dVnf10w/ZP8sfZ+e0I25LQFhZWGSX69+qP+RObvLqNnzOROxASNKKx6b3i9ojA8fNcTevt6tKcN4/xkE0ICSJRatoSNc0Zx3oHwfdv/K5ahJBXRtEaKmDAoQksehBNDSCs6kE8xyeD49HcVmRRjz0KBCNFCAjse8KHl5QoBHFZUWi6uH2QHSnOYOO/9rd8PMakepGkTafQBx3t5p1iEgi0YNo+M4+JCuA55on1m2d0cPJ8pDb3W5WIAZJ67S+ognnZKJYcCPR3T6sQ0ySiUYsacKQ1ZCrUkYBE8iWJ5a9pN3U2KLdBeRBPy8/+m65PMsX9GKr2YIUiO80jl9AXNIV65FEdGlcDKYh1iNWnQ6Ihg9ZUhjbUC8lTIGYXdOq6RCpcrUxpp3rYcuN8lmUHeAkEneYfO1clXFjwsMshqIcdQUc8TnpYLYrhiOelIjxHaTg72I4ihePRrSfQT9aQIGQ7yPQ/elErZjd8vsiJGTqDcgVmX/u5X+KFWVqqAjBnDlzHvAPcehmFT1serQAAAAASUVORK5CYII="
                                    class="icon curve-down">
                            </h3>
                            <div></div>
                            <div><a href="/electronic-signature"
                                    class="btn nav-btn-main-2 my-2 my-sm-0 px-4 py-1 dark-green white-color border-radius-btn py-2 poppins-normal">
                                    Check out UsefulSignatures for all your eSigning needs.
                                </a></div>
                        </div>
                    </div>
                    <div class="mt-custom-7"></div>
                    <div class="light-blue-bg py-5">
                        <div class="container">
                            <div class="mb-5 mt-5">
                                <h3 class="teko-normal-700 font-size-42 dark-green-color">
                                    What your signature says about you
                                </h3>
                            </div>
                            <div class="row pt-3">
                                <div class="col-sm-5 m-auto">
                                    <div class="signature-card"><img
                                            src="{{ asset('/useful_v2_assets/sig/img/ascending-signature.png') }}"
                                            class="signature-icon mb-2">
                                        <p class="font-size-30 teko-normal mt-2 mb-1 dark-green-color">
                                            Ascending signature
                                        </p>
                                        <p class="poppins-normal">
                                            This signature infers that the signer has ambition, optimism,
                                            creativity, and vitality.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-5 m-auto">
                                    <div class="signature-card"><img
                                            src="{{ asset('/useful_v2_assets/sig/img/descending-signature.png') }}"
                                            class="signature-icon mb-2">
                                        <p class="font-size-30 teko-normal mt-2 mb-1 dark-green-color">
                                            Descending signature
                                        </p>
                                        <p class="poppins-normal">
                                            When people have a descending signature, they can be
                                            considered a skeptic.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-12 mt-5 pb-4 p-xs-0 m-xs-0"></div>
                                <div class="col-sm-5 m-auto">
                                    <div class="signature-card"><img
                                            src="{{ asset('/useful_v2_assets/sig/img/large-signature.png') }}"
                                            class="signature-icon mb-2">
                                        <p class="font-size-30 teko-normal mt-2 mb-1 dark-green-color">
                                            Large signature
                                        </p>
                                        <p class="poppins-normal">
                                            This type of signature shows confidence in themselves and
                                            their decisions.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-5 m-auto">
                                    <div class="signature-card"><img
                                            src="{{ asset('/useful_v2_assets/sig/img/small-signature.png') }}"
                                            class="signature-icon mb-2">
                                        <p class="font-size-30 teko-normal mt-2 mb-1 dark-green-color">
                                            Small signature
                                        </p>
                                        <p class="poppins-normal">
                                            A small signature can oftentimes mean that someone is lacking
                                            confidence.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-12 mt-5 pb-4 p-xs-0 m-xs-0"></div>
                                <div class="col-sm-5 m-auto">
                                    <div class="signature-card"><img
                                            src="{{ asset('/useful_v2_assets/sig/img/legible-signature.png') }}"
                                            class="signature-icon mb-2">
                                        <p class="font-size-30 teko-normal mt-2 mb-1 dark-green-color">
                                            Legible signature
                                        </p>
                                        <p class="poppins-normal">
                                            When the signature is clear, it may mean the person is open
                                            and straightforward in their dealings.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-5 m-auto">
                                    <div class="signature-card"><img
                                            src="{{ asset('/useful_v2_assets/sig/img/illegible-signature.png') }}"
                                            class="signature-icon mb-2">
                                        <p class="font-size-30 teko-normal mt-2 mb-1 dark-green-color">
                                            Illegible signature
                                        </p>
                                        <p class="poppins-normal">
                                            An illegible signature can mean that someone has a quick mind.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-12 mt-5 pb-4 p-xs-0 m-xs-0"></div>
                                <div class="col-sm-5 m-auto">
                                    <div class="signature-card"><img
                                            src="{{ asset('/useful_v2_assets/sig/img/incomplete-signature.png') }}"
                                            class="signature-icon mb-2">
                                        <p class="font-size-30 teko-normal mt-2 mb-1 dark-green-color">
                                            Incomplete (or initials)
                                        </p>
                                        <p class="poppins-normal">
                                            In this case, the person may have an independent streak that
                                            needs to be taken into consideration.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-5 m-auto">
                                    <div class="signature-card"><img
                                            src="{{ asset('/useful_v2_assets/sig/img/line-after-signature.png') }}"
                                            class="signature-icon mb-2">
                                        <p class="font-size-30 teko-normal mt-2 mb-1 dark-green-color">
                                            Line after signature
                                        </p>
                                        <p class="poppins-normal">
                                            If you add a line after a signature it can mean that you have
                                            determination and drive.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="faq-container" class="dark-green py-5">
                        <div class="faq_container">
                            <div class="faq_watermark">
                                faq
                            </div>
                        </div>
                        <div class="container">
                            <div class="my-custom-7 ml-custom-50">
                                <h3 class="teko-normal-700 font-size-42 white-color">
                                    eSignature maker FAQ
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="py-5 faq-content-up">
                        <div class="container">
                            <div class="mx-md-5">
                                <div onclick='toggleFaq("faqOne")' class="faq-card faq-card-closed faqOne">
                                    <h3 class="font-size-30 dark-green-color teko-normal">
                                        What is the Signature Generator and how does it work?
                                    </h3>
                                    <div class="text-right faq-icon-up"><img data-src="" class="faq-card-icon icon-faq">
                                    </div>
                                    <div class="mt-5 faq-card-content">
                                        <p class="black-secondary-color">
                                            The signature generator is a tool that creates an electronic
                                            signature for you to sign documents online. An electronic
                                            signature is a representation of your acceptance of the
                                            contents of any document you sign.
                                        </p>
                                        <p class="black-secondary-color">
                                            The
                                            <a href="/electronic-signature">electronic
                                                signatures </a>made
                                            using our free tool are
                                            <a href="/esignature-legality">legally binding
                                            </a>in dozens
                                            of jurisdictions, so use them wisely.
                                        </p>
                                    </div>
                                </div>
                                <div onclick='toggleFaq("faqTwo")' class="faq-card faq-card-closed faqTwo">
                                    <h3 class="font-size-30 dark-green-color teko-normal">
                                        Does your signature creator keep a record of my signature?
                                    </h3>
                                    <div class="text-right faq-icon-up"><img data-src="" class="faq-card-icon icon-faq">
                                    </div>
                                    <div class="mt-5 faq-card-content">
                                        <p class="black-secondary-color">
                                            Absolutely not. The signature maker is a tool that works on
                                            the frontend of our website in your browser. No data gets
                                            transmitted to our servers. If you exit the page, your
                                            signature is deleted.
                                        </p>
                                        <p class="black-secondary-color">
                                            Only you can see or access the signature you create unless you
                                            want someone else to. You can create an account with UsefulPDF
                                            and then store your electronic signature for all your document
                                            signing needs.
                                        </p>
                                    </div>
                                </div>
                                <div onclick='toggleFaq("faqThree")' class="faq-card faq-card-closed faqThree">
                                    <h3 class="font-size-30 dark-green-color teko-normal">
                                        Does the Signature maker create an online signature, electronic
                                        signature, or digital signature?
                                    </h3>
                                    <div class="text-right faq-icon-up"><img data-src="" class="faq-card-icon icon-faq">
                                    </div>
                                    <div class="mt-5 faq-card-content">
                                        <p class="black-secondary-color">
                                            Our signature generator makes it possible to create a
                                            downloadable electronic signature. An electronic signature is
                                            the same thing as an online signature. These are
                                            representations of your signature in a digital format.
                                        </p>
                                        <p class="black-secondary-color">
                                            A digital signature, on the other hand, has more stringent
                                            requirements. It's a type of electronic signature that uses a
                                            higher level of encryption to verify the authenticity of the
                                            parties involved, messages, and documents. It works using
                                            Public Key Infrastructure (PKI), which has private and public
                                            keys that need to match for it to be considered legitimate.
                                        </p>
                                    </div>
                                </div>
                                <div onclick='toggleFaq("faqFour")' class="faq-card faq-card-closed faqFour">
                                    <h3 class="font-size-30 dark-green-color teko-normal">
                                        Will the signature made using the signature creator be valid for
                                        legal documents?
                                    </h3>
                                    <div class="text-right faq-icon-up"><img data-src="" class="faq-card-icon icon-faq">
                                    </div>
                                    <div class="mt-5 faq-card-content">
                                        <p class="black-secondary-color">
                                            Yes, the electronic signature produced for you will be valid
                                            for legal documents. Keep in mind that different documents
                                            require different levels of authentication. For example, the
                                            EU has three levels of electronic signatures, and the one
                                            produced here is legally binding in most instances.
                                        </p>
                                        <p class="black-secondary-color">
                                            Register for our eSigning tool -
                                            <a href="/electronic-signature">UsefulSignatures</a> - it'll
                                            handle all the encryption for you so you can focus on getting
                                            your documents signed.
                                        </p>
                                    </div>
                                </div>
                                <div onclick='toggleFaq("faqFive")' class="faq-card faq-card-closed faqFive">
                                    <h3 class="font-size-30 dark-green-color teko-normal">
                                        Should I keep a separate paper trail when using electronic
                                        signatures?
                                    </h3>
                                    <div class="text-right faq-icon-up"><img data-src="" class="faq-card-icon icon-faq">
                                    </div>
                                    <div class="mt-5 faq-card-content">
                                        <p class="black-secondary-color">
                                            That is not necessary. When using an online signature creator
                                            like UsefulSignatures, we have a built-in audit trail that's
                                            even more robust than most paper trails. It tracks IP address,
                                            dates, and even has a hash fingerprint that enhances our
                                            electronic signature's authenticity.
                                        </p>
                                    </div>
                                </div>
                                <div onclick='toggleFaq("faqSix")' class="faq-card faq-card-closed faqSix">
                                    <h3 class="font-size-30 dark-green-color teko-normal">
                                        Can I sign any kind of document with the eSignature created
                                        here?
                                    </h3>
                                    <div class="text-right faq-icon-up"><img data-src="" class="faq-card-icon icon-faq">
                                    </div>
                                    <div class="mt-5 faq-card-content">
                                        <p class="black-secondary-color">
                                            Yes, you can, with a few exceptions. With our online signature
                                            maker, you can sign many types of documents, and they'll be
                                            legally binding. In addition to documents you create and send
                                            with UsefulSignatures, you'll be able to download and use it
                                            with agreements sent to you.
                                        </p>
                                        <p class="black-secondary-color">
                                            Our signature maker is versatile and can sign most types of
                                            contracts, but electronic signatures, as a rule, shouldn't be
                                            used with certain kinds of documents such as:
                                            <span>- Last Will and Testament </span><br>
                                            <span>- Power of Attorney
                                            </span><br> <span>- Codicils and
                                                trusts </span><br> <span>-
                                                Adoption paperwork </span><br> <span>-
                                                Divorces decrees </span><br> <span>- Court
                                                orders &
                                                notices </span><br> <span>-
                                                Notices of default, foreclosure, repossession, or
                                                eviction </span><br> <span>-
                                                Product recalls </span><br> <span>-
                                                Documentation accompanying the
                                                transportation of
                                                hazardous material </span><br>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer_grad_container">
                        <div class="footer_grad"></div>
                    </div>
                    <div class="mt-custom-7"></div>
                </section>
            </div>
        </div>
    </main>

@endsection
