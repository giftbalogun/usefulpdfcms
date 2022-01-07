@extends('layout.sig')

@section('content')

    <main id="app" class="main">
        <div id="signature-layout-container">
            <div>
                <div tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"
                    class="modal fade mk-modal">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header"><button type="button" data-dismiss="modal" aria-label="Close"
                                    class="close"><span aria-hidden="true">×</span></button></div>
                            <div class="row">
                                <div class="col-lg-6 d-flex align-items-center justify-content-center modal-content-holder">
                                    <div class="p-4 pb-2">
                                        <h3 class="h3-title text-is-primary">
                                            Do you sign documents often?
                                        </h3>
                                        <p class="body-text text-is-secondary">
                                            Signaturely is a powerful electronic signature tool that
                                            allows you to use legally binding eSignatures to get
                                            documents signed up to 80% faster. Click the button below to
                                            learn more and sign up for a free trial.
                                        </p>
                                        <div class="body-text text-is-secondary">
                                            <ul>
                                                <li>Sign documents on the go with any device
                                                </li>
                                                <li>
                                                    Choose from hundreds of professional-looking templates
                                                    for proposals, contracts, and various agreements
                                                </li>
                                                <li>
                                                    Integrate with your favorite document management and
                                                    storage tools like Google Drive and Dropbox.
                                                </li>
                                                <li>Compliant with U.S. ESIGN Act and eIDAS
                                                    (Europe)</li>
                                                <li>
                                                    Applicable for multiple roles like sales, HR, marketing,
                                                    customer success, and more
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="pt-2 pb-5"><a href="https://signaturely.com?fpr=useful"
                                                target="_blank" class="us-btn is--primary">Take Signaturely
                                                for a spin</a></div>
                                    </div>
                                </div>
                                <div class="col-lg-6"><img
                                        src="{{ asset('/useful_v2_assets/sig/img/lady-smiling.jpeg') }}" alt=""
                                        class="w-100 modal-img"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <section class="signature-creator-draw-container draw_container">
                    <div class="container">
                        <div class="text-center mt-custom-5 mb-5 signature-creator-draw">
                            <div class="grad1"></div>
                            <div class="grad2"></div>
                            <div class="grad3"></div>
                            <div class="grad4"></div>
                            <div class="grad5"></div>
                            <h3 class="black-color font-size-42 teko-bold">
                                Draw your signature below
                            </h3>
                            <p class="black-secondary-color font-size-18 poppins-normal-500">
                                Move your cursor or swipe your hand across the box below to draw a
                                signature
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-12 m-auto">
                                <div class="draw-signature-card white-bg">
                                    <div class="my-5">
                                        <div class="sign col-sm-12 p-0 text-center p_relative"><canvas id="signature-pad"
                                                width="560" height="220" class="signature-pad"></canvas>
                                        </div>
                                    </div>
                                    <div class="border-top-smoke">
                                        <div class="row px-4 py-3">
                                            <div class="col-sm-6 text-center-xs">
                                                <div
                                                    class="d-flex justify-content-center justify-content-lg-start mt-3 mb-3 mt-lg-0 mb-lg-0 align-items-center">
                                                    <div><span class="poppins-normal-500 font-size-18 dark-green-color">
                                                            Color
                                                        </span></div>
                                                    <div class="ml-2">
                                                        <div id="cp_holder">
                                                            <div class="color-picker"></div>
                                                        </div>
                                                    </div>
                                                    <div data-erase="false" id="erase"
                                                        class="poppins-normal-500 font-size-18 dark-green-color ml-3 d-none"
                                                        style="cursor:pointer"><span id="eraseHolder">Erase</span>
                                                        <img src="{{ asset('/useful_v2_assets/sig/img/eraser.svg') }}"
                                                            class="icon m-auto ml-2">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 text-center mt-xs-3">
                                                <button id="save-png" class="btn btn-full-green px-4 font-size-14">
                                                    Save
                                                </button> <button id="clear" onclickold="signaturePad.clear()"
                                                    class="btn btn-border-green ml-2 px-4 font-size-14">
                                                    Clear
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-5 mb-5">
                            <div class="signature-option-holder col-sm-6 m-auto p-0 d-lg-flex d-block"><a
                                    href="/signature-creator/type"
                                    class="btn px-5 btn-sig white-color mt-3 mt-lg-0 col-lg-6">
                                    Type
                                    <img data-src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAcCAYAAAAAwr0iAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAHUSURBVHgB5Vb9TcJAFH93tHz81xFgAzawToBOQJ0AmUCcQJ1AnQCcQDewTmA3EBOS0pb2fK/l2guEeEekGP0lL2le3+e9X98V4IcRRbEgieP4Xseew5HxtwoIw9CTz1kGn1AHwjBxcd7POPcPOX8SLMaFQwMTj9SkVfJoAoeGEMLBZO9K4tcoiqa1dE6go68+ueQG9gSjTlar1SjLhAdmcNZCmK9FLynLbX3btscMO6CF4cFRIGZ8R/JAU7erc01/5m7tgSxLe61WsycE3JVmjN2SDt+dqgGbTbtHohZh4E9wtgpot9vzIlAWSF2airfNLnCOAQaeFwK+qX8Zh1i8ofORkE+csyE+d6Uj6h4bDTbAzvpKEQ+i8Pb28d9VQK34fZcRkWdNFl9RB/jmHI/xWrVN02yMthegkNDEP8fmHpd6utmq3R57RfB8/ea65XI5q2IkU1N/KVsngIEvyZBza1AeExcDDNhNkmQodYzxE9ItFjGSSvRN/cs4/56Elq4hffO6tjQC9DjTsdUqgNjb6bQmYAD6KcFldPWd3cFGYFlci1sGJBQz2vugCdwHno4dox9KNHbhCEBevfA0zTeZDzWDklNuJhXEXFwiDtQAurLlOL8AkPClCmNa3EQAAAAASUVORK5CYII="
                                        class="icon-sig ml-2"></a> <a href="/signature-creator/draw" aria-current="page"
                                    class="mt-3 mt-lg-0 btn px-5 white-color border-radius-btn dark-green col-lg-6 nuxt-link-exact-active nuxt-link-active">
                                    Draw
                                    <img data-src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAG8SURBVHgBrVX/cYIwFH6BlpQ7/3AEuoHdwI7gBnSC6gTSCXpO0BF0g9oJtBPIBvqXgURI37PSEwyQ3PW74wh5X76XvB8BwBFCiEhK+Znnck8Pjj9oDv4DWushiu7w0Y1n1+bEAwcodZrjKzKYIs/zd1mWTZsGBpag3UupNi0O/lCWxXMYhuvq2/oEjLEDLcbhtovn+/78+rvXAcVWCBnTGHeWch48aQ2LNj7aRuCCPFdLSqRSal53nCeGZGuqMGtxEm0s3lTVguORyQHax1biQqixSYBK8njMptXJ6uJ50tRhZnFBZUdHjcAabMX5/aQ5a0wyVsLSTRzSsjzNTIYbBxR310q41H7a6wBDE5elTsABWpezNnECuxKnuFOnDsFaHBYPD8G0i8N+iXbXQAPUdI99pHOIUPwdnJN6vjZ64V06NAYn6M641xxgUmNwAPLfOOcrWz6jvxJYJpYxWAdBYBWaCh4u2lpy06IoXsARGCL4tiEqJSe2cb/GHWN6jYd/7SJR3AeDwbbukDpej7vWoX3BLj2wbyfdNhPdtJ6nbe79w7nR6CeBQlE1i3lJ6V0U+isMeXLr1K4xaXM/x4VrKZISobcAAAAASUVORK5CYII="
                                        class="icon-sig ml-2"></a></div>
                        </div>
                    </div>
                    <div class="mt-custom-7"></div>
                    <div class="light-blue-bg py-5">
                        <div class="container">
                            <div class="mb-3 mt-5">
                                <h3 class="teko-normal-700 font-size-30 dark-green-color">
                                    What are the advantages of drawing signatures online?
                                </h3>
                            </div>
                            <div class="row pt-3">
                                <div class="col-sm-6">
                                    <p>
                                        Before the turn of the century, signing documents was a
                                        cumbersome process. You’d need to create the document, append a
                                        wet signature, then deliver it via certified mail, in person, or
                                        fax to the intended recipient.
                                    </p>
                                    <p>
                                        They’d then need to sign and return the document to you. This
                                        process routinely took days and sometimes even longer. Today,
                                        you can draw signatures and append them to a document that’s
                                        sent to you in a matter of minutes. This holds true whether only
                                        one person needs to sign or a dozen people.
                                    </p>
                                    <p class="p-img-list"><img
                                            data-src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABcAAAAQCAYAAAD9L+QYAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAFcSURBVHgBrVO9TgJBEJ7ZA2l5A7dUkiO8gVLbeFrZ4RNIYyJHoRYSOuMTcFYmRrjKHt/gYkykY30Cz8a/cDfOCoWSg9u78DWb3f3mm9mdbxAyoOq3L4mgAUAhInjfn/H16KCrFvERDGH33Qaze3PHSid5dDrnSTECzLGVcCb5JWf2wB1v3JzI/OIC5ZJbWSyJcdV3T/OJE8l0Cr+i3/JrvWZZ73//vHJ7XBNolScFUCMnuUH2oP3K4WUwAIsG4u29jlMHUDOBoOBPs/hfCbIAaSiShDVo1qzN+/Y65AHhttAZljDU887FC+RTVwUL6HACs+pJhAix4qxhZKFagw8F+RBaiI75ELGXeZHpTFJaOHA6QZYhSpdll1hIdS2s94UMkQG7Ry6+jq+e9rr/zGFceQz0kCyKQ4ri+rywhnHlRVHyIvo6YgPLqSgESFztfteDVcG+a+1WfLdmwv0Bw/SJSjVbEcAAAAAASUVORK5CYII="
                                            class="icon-sig ml-2 mt-1"> <span>Improves the
                                            efficiency of the business and
                                            personal
                                            workflows</span></p>
                                    <p class="p-img-list"><img
                                            data-src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABcAAAAQCAYAAAD9L+QYAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAFcSURBVHgBrVO9TgJBEJ7ZA2l5A7dUkiO8gVLbeFrZ4RNIYyJHoRYSOuMTcFYmRrjKHt/gYkykY30Cz8a/cDfOCoWSg9u78DWb3f3mm9mdbxAyoOq3L4mgAUAhInjfn/H16KCrFvERDGH33Qaze3PHSid5dDrnSTECzLGVcCb5JWf2wB1v3JzI/OIC5ZJbWSyJcdV3T/OJE8l0Cr+i3/JrvWZZ73//vHJ7XBNolScFUCMnuUH2oP3K4WUwAIsG4u29jlMHUDOBoOBPs/hfCbIAaSiShDVo1qzN+/Y65AHhttAZljDU887FC+RTVwUL6HACs+pJhAix4qxhZKFagw8F+RBaiI75ELGXeZHpTFJaOHA6QZYhSpdll1hIdS2s94UMkQG7Ry6+jq+e9rr/zGFceQz0kCyKQ4ri+rywhnHlRVHyIvo6YgPLqSgESFztfteDVcG+a+1WfLdmwv0Bw/SJSjVbEcAAAAAASUVORK5CYII="
                                            class="icon-sig ml-2 mt-2"> <span>It
                                            simultaneously increases customer
                                            satisfaction (as
                                            measured by NPS) and enables you to close deals faster</span>
                                    </p>
                                    <p class="p-img-list"><img
                                            data-src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABcAAAAQCAYAAAD9L+QYAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAFcSURBVHgBrVO9TgJBEJ7ZA2l5A7dUkiO8gVLbeFrZ4RNIYyJHoRYSOuMTcFYmRrjKHt/gYkykY30Cz8a/cDfOCoWSg9u78DWb3f3mm9mdbxAyoOq3L4mgAUAhInjfn/H16KCrFvERDGH33Qaze3PHSid5dDrnSTECzLGVcCb5JWf2wB1v3JzI/OIC5ZJbWSyJcdV3T/OJE8l0Cr+i3/JrvWZZ73//vHJ7XBNolScFUCMnuUH2oP3K4WUwAIsG4u29jlMHUDOBoOBPs/hfCbIAaSiShDVo1qzN+/Y65AHhttAZljDU887FC+RTVwUL6HACs+pJhAix4qxhZKFagw8F+RBaiI75ELGXeZHpTFJaOHA6QZYhSpdll1hIdS2s94UMkQG7Ry6+jq+e9rr/zGFceQz0kCyKQ4ri+rywhnHlRVHyIvo6YgPLqSgESFztfteDVcG+a+1WfLdmwv0Bw/SJSjVbEcAAAAAASUVORK5CYII="
                                            class="icon-sig ml-2 mt-2"> <span>With a strong
                                            eSigning tool like
                                            <a href="/" class="green-color">UsefulSignatures</a>, you’re
                                            able to create a bullet-proof audit trail to prove the
                                            authenticity of the document
                                        </span></p>
                                    <p class="p-img-list"><img
                                            data-src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABcAAAAQCAYAAAD9L+QYAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAFcSURBVHgBrVO9TgJBEJ7ZA2l5A7dUkiO8gVLbeFrZ4RNIYyJHoRYSOuMTcFYmRrjKHt/gYkykY30Cz8a/cDfOCoWSg9u78DWb3f3mm9mdbxAyoOq3L4mgAUAhInjfn/H16KCrFvERDGH33Qaze3PHSid5dDrnSTECzLGVcCb5JWf2wB1v3JzI/OIC5ZJbWSyJcdV3T/OJE8l0Cr+i3/JrvWZZ73//vHJ7XBNolScFUCMnuUH2oP3K4WUwAIsG4u29jlMHUDOBoOBPs/hfCbIAaSiShDVo1qzN+/Y65AHhttAZljDU887FC+RTVwUL6HACs+pJhAix4qxhZKFagw8F+RBaiI75ELGXeZHpTFJaOHA6QZYhSpdll1hIdS2s94UMkQG7Ry6+jq+e9rr/zGFceQz0kCyKQ4ri+rywhnHlRVHyIvo6YgPLqSgESFztfteDVcG+a+1WfLdmwv0Bw/SJSjVbEcAAAAAASUVORK5CYII="
                                            class="icon-sig ml-2 mt-1"> <span>Improves the
                                            efficiency of the business and
                                            personal
                                            workflows</span></p>
                                </div>
                                <div class="col-sm-6"><img src="{{ asset('/useful_v2_assets/sig/img/3.png') }}"
                                        class="m-auto m-width">
                                </div>
                            </div>
                        </div>
                        <div class="footer_grad_container d-none">
                            <div class="footer_grad"></div>
                        </div>
                    </div>
                </section>
                <div id="sigCreatedModal" tabindex="-1" role="dialog" aria-labelledby="sigCreatedModalLabel"
                    aria-hidden="true" class="modal fade">
                    <div role="document" class="modal-dialog modal-dialog-centered">
                        <div class="modal-content remove-bg remove-border">
                            <div class="modal-header remove-border">
                                <h5 id="sigCreatedModalLabel" class="modal-title"></h5>
                                <button type="button" data-dismiss="modal" aria-label="Close"
                                    class="close custom-close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body px-5 py-5 white-bg border-radius-10 remove-border text-center">
                                <h4 class="teko-normal font-size-30 dark-green-color">
                                    Your signature has been created
                                </h4>
                                <div class="mt-3">
                                    <p class="m-3">
                                        Your download will begin shortly
                                    </p>
                                </div>
                                <div class="mt-3"><a data-dismiss="modal" aria-label="Close" href-old="#!"
                                        class="mouse-pointer btn px-5 border-radius-btn white-color dark-green mt-3 font-size-14 poppins-normal text-white">
                                        Okay
                                    </a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="sigRegisterModal" tabindex="-1" role="dialog" aria-labelledby="sigRegisterModalLabel"
                    aria-hidden="true" class="modal fade">
                    <div role="document" class="modal-dialog modal-dialog-centered">
                        <div class="modal-content remove-bg remove-border">
                            <div class="modal-header remove-border">
                                <h5 id="sigRegisterModalLabel" class="modal-title"></h5>
                                <button type="button" data-dismiss="modal" aria-label="Close"
                                    class="close custom-close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body px-5 py-5 white-bg border-radius-10 remove-border text-center">
                                <h4 class="teko-normal font-size-30 dark-green-color">
                                    Great, Complete the form to download
                                </h4>
                                <div class="mt-3">
                                    <div><input placeholder="Full Name" class="form-control modal-input"></div>
                                    <div class="mt-3"><input placeholder="Email Address"
                                            class="form-control modal-input"></div>
                                </div>
                                <div class="mt-3"><button data-toggle-old="modal"
                                        data-target-old="#sigRegisterSuccessModal"
                                        class="btn px-5 border-radius-btn white-color dark-green mt-3 font-size-14 poppins-normal"><span>
                                            Email me my eSignature
                                        </span>
                                        <!---->
                                    </button></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="sigRegisterSuccessModal" tabindex="-1" role="dialog" aria-labelledby="sigRegisterSuccessModalLabel"
                    aria-hidden="true" class="modal fade">
                    <div role="document" class="modal-dialog modal-dialog-centered">
                        <div class="modal-content remove-bg remove-border">
                            <div class="modal-header remove-border">
                                <h5 id="sigRegisterSuccessModalLabel" class="modal-title">
                                </h5> <button type="button" data-dismiss="modal" aria-label="Close"
                                    class="close custom-close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body px-5 py-5 white-bg border-radius-10 remove-border text-center">
                                <div><img src="{{ asset('/useful_v2_assets/sig/img/2.png') }}"
                                        class="m-auto success-modal-image"></div>
                                <h4 class="teko-normal font-size-30 dark-green-color mt-3">
                                    Thanks for submitting your contact details
                                </h4>
                                <div class="mt-3">
                                    <div>
                                        <p>
                                            We've sent you an email with a link that you can use to
                                            download your signature. If you don't get an email within a
                                            few minutes, check your spam folder.
                                        </p>
                                    </div>
                                </div>
                                <div class="mt-3"><button
                                        class="btn px-5 border-radius-btn white-color dark-green mt-3 font-size-14 poppins-normal">
                                        CREATE MORE SIGNATURES
                                    </button></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="viewSignatureModal" tabindex="-1" role="dialog" aria-labelledby="viewSignatureModalLabel"
                    aria-hidden="true" class="modal fade">
                    <div role="document" class="modal-dialog modal-dialog-centered">
                        <div class="modal-content remove-bg remove-border">
                            <div class="modal-header remove-border" style="margin-top:-60px">
                                <h5 id="viewSignatureModalLabel" class="modal-title"></h5>
                                <button type="button" data-dismiss="modal" aria-label="Close"
                                    class="close custom-close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body white-bg border-radius-10 remove-border text-center pt-3 p-0">
                                <div class="px-3 py-4">
                                    <h4 class="teko-normal font-size-30 dark-green-color">
                                        Great Choice!
                                    </h4>
                                    <div>
                                        <p class="m-3">Drag ball to adjust font size</p>
                                    </div>
                                    <div id="typedSigModal" class="sig-modal-card font-size-42 m-3 py-2"
                                        style="font-size:62px">

                                    </div>
                                    <div class="mx-3">
                                        <p class="my-4">Drag ball to adjust font size</p>
                                        <div class="slidecontainer"><input type="range" min="20" max="70" value="62"
                                                id="myRange" class="range-slider"></div>
                                    </div>
                                </div>
                                <div class="border-top-smoke px-1">
                                    <div class="row px-4 py-3">
                                        <div class="col-sm-6 text-left"><span
                                                class="main-picker poppins-normal-500 font-size-18 dark-green-color">
                                                Color
                                            </span>
                                            <div class="ml-2">
                                                <div id="cp_holder">
                                                    <div class="color-picker"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 text-right"><a data-href="~/assets/signature/completed"
                                                data-toggle="modal" data-target="#sigCreatedModal"
                                                class="btn btn-full-green px-4 font-size-14 py-2 text-white mouse-pointer">
                                                Save
                                            </a> <button data-dismiss="modal" aria-label="Close"
                                                class="btn btn-border-green ml-2 px-4 font-size-14 py-2">
                                                Reset
                                            </button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="uploadSignatureModal" tabindex="-1" role="dialog" aria-labelledby="uploadSignatureModalLabel"
                    aria-hidden="true" class="modal fade">
                    <div role="document" class="modal-dialog modal-dialog-centered">
                        <div class="modal-content remove-bg remove-border">
                            <div class="modal-header remove-border">
                                <h5 id="uploadSignatureModalLabel" class="modal-title"></h5>
                            </div>
                            <div class="modal-body pure-white-bg border-radius-10 remove-border text-center p-3">
                                <div id="uploadStage" class="stages">
                                    <div id="upload-holder"
                                        class="uploader uploaderMain border-radius pure-white-bg px-3 py-4"><img
                                            data-src="/_nuxt/img/drag-n-drop.4b35d7d.png" class="m-width"> <input
                                            type="file" class="signatureUpload"></div>
                                </div>
                                <div id="optimizeStage" class="stages">
                                    <div class="border-radius pure-white-bg px-3 py-4">
                                        <div class="text-center m-auto"><i class="fa fa-spin fa-spinner fa-2x"></i>
                                        </div>
                                        <h3>Optimizing...</h3>
                                    </div>
                                </div>
                                <div id="editStage" class="stages">
                                    <div class="border-radius pure-white-bg px-3 py-4">
                                        <h3 id="editSignature"></h3>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-9">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="text-left"><span
                                                            class="poppins-normal-500 font-size-18 dark-green-color">
                                                            Color
                                                        </span>
                                                        <div class="ml-2">
                                                            <div class="cp_holder">
                                                                <div class="upload-color-picker"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div><select id="upFontFamily" class="form-control col-sm-12">
                                                            <option>Select font familty
                                                            </option>
                                                            <option>homemadeApple</option>
                                                            <option>indieFlower</option>
                                                            <option>pacifico</option>
                                                            <option>shadowsIntoLight
                                                            </option>
                                                            <option>caveat</option>
                                                            <option>satisfy</option>
                                                            <option>greatVibes</option>
                                                            <option>kaushanScript</option>
                                                            <option>sacramento</option>
                                                            <option>parisienne</option>
                                                            <option>yellowtail</option>
                                                            <option>cookie</option>
                                                            <option>dancingScript</option>
                                                            <option>handlee</option>
                                                            <option>tangerine</option>
                                                            <option>badScript</option>
                                                            <option>marckScript</option>
                                                            <option>allura</option>
                                                            <option>damion</option>
                                                            <option>alexBrush</option>
                                                            <option>mrDafoe</option>
                                                            <option>pinyonScript</option>
                                                            <option>italianno</option>
                                                            <option>norican</option>
                                                            <option>yesteryear</option>
                                                            <option>arizonia</option>
                                                            <option>herrVonMuellerhoff
                                                            </option>
                                                            <option>mrsSaintDelafield
                                                            </option>
                                                            <option>kristi</option>
                                                            <option>ballet</option>
                                                        </select></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="mt-2 text-right"><a onclick='manageStage("upload")'
                                                    class="mouse-pointer try_again_button">Try again</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 text-center mt-3"><a
                                                class="btn btn-full-green px-4 font-size-14 py-2 text-white mouse-pointer">
                                                Continue
                                            </a></div>
                                    </div>
                                </div>
                                <div class="d-none">
                                    <p id="uploadFileUrl"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="earlyAccessModal" tabindex="-1" role="dialog" aria-labelledby="earlyAccessModalLabel"
                    aria-hidden="true" class="modal fade">
                    <div role="document" class="modal-dialog modal-dialog-centered">
                        <div class="modal-content remove-bg remove-border">
                            <div class="modal-header remove-border">
                                <h5 id="earlyAccessModalLabel" class="modal-title"></h5>
                                <button type="button" data-dismiss="modal" aria-label="Close"
                                    class="close custom-close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body px-5 py-5 white-bg border-radius-10 remove-border text-center">
                                <h4 class="teko-normal font-size-30 dark-green-color">
                                    Great, register below to join our waitlist and download your
                                    signature
                                </h4>
                                <div class="mt-3">
                                    <div><input placeholder="Full Name" class="form-control modal-input"></div>
                                    <div class="mt-3"><input placeholder="Email Address"
                                            class="form-control modal-input"></div>
                                </div>
                                <div class="mt-3"><button
                                        class="btn px-5 border-radius-btn white-color dark-green mt-3 font-size-14 poppins-normal">
                                        get access
                                    </button></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-none">
                    <p id="signature_image"></p>
                </div>
            </div>
        </div>
    </main>

@endsection
