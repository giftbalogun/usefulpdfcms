@extends('layout.app')

@section('content')
    <div class="sidebar-navigation">
        <div class="title"><span>Menu</span> <span class="toggleNav close"><i class="ti-close"></i></span></div>
        <ul>
            <li><a href="/" class="nuxt-link-active">Home</a></li>
            <li></li>
            <li><a href="/about">About</a></li>
            <li><a href="/document-generation">Create Documents</a></li>
            <li></li>
            <li></li>
            <li><a href="#">eSign Documents <i class="fas fa-angle-down"></i></a>
                <ul>
                    <li><a href="/electronic-signature">Electronic Signature</a></li>
                    <li><a href="/signature-creator">Free Online Signature Creator</a></li>
                    <li><a href="/contracts" aria-current="page" class="nuxt-link-exact-active nuxt-link-active">Contract
                            templates</a></li>
                    <li><a href="/use-case">Use Cases</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <main id="app" class="main">
        <div>
            <section class="us-hero is--medium container-fluid">
                <div>
                    <div class="us-hero--content container-fluid">
                        <div class="col-lg-10 mx-auto p-0">
                            <div class="row align-items-center">
                                <div class="col-lg-8 mx-auto text-center">
                                    <h1 class="us-hero--content-title h1-title text-white">
                                        Get access to free contract templates, agreements, business
                                        documents, and legal forms from UsefulPDF.
                                    </h1>
                                    <p class="us-hero--content-desc subtitle mt-2 text-is-disabled">
                                        Browse hundreds of free legal documents that can be used to
                                        grow your business, protect your family, and even plan your
                                        estate in our vetted template library.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="template-search">
                <div class="col-lg-6 mx-auto">
                    <div class="input-group us-input-group has--shadow is--offset"><input placeholder="Search..."
                            aria-label="Search..." aria-describedby="basic-addon2" class="form-control">
                        <div class="input-group-append ml-1"><button class="us-icon-btn--alt"><i
                                    class="ti-search"></i></button></div>
                    </div>
                </div>
            </div>
            <section class="us-section">
                <div class="container-fluid mx-auto">
                    <div class="col-lg-10 mx-auto">
                        <div class="py-5 text-center">
                            <h3 class="h2-title text-is-dark">Most popular</h3>
                        </div>
                        <div class="row contract-list align-items-start">
                            <div class="col-lg-3 col-6 mt-3"><a href="/power-of-attorney"
                                    class="contract-list--item d-flex align-items-center">
                                    <div class="w-100">
                                        <p class="text-is-dark">Power of attorney</p> <i class="ti-arrow-right"></i>
                                    </div>
                                </a></div>
                            <div class="col-lg-3 col-6 mt-3"><a href="/employment"
                                    class="contract-list--item d-flex align-items-center">
                                    <div class="w-100">
                                        <p class="text-is-dark">Employment contracts</p> <i class="ti-arrow-right"></i>
                                    </div>
                                </a></div>
                            <div class="col-lg-3 col-6 mt-3"><a href="/bill-of-sale"
                                    class="contract-list--item d-flex align-items-center">
                                    <div class="w-100">
                                        <p class="text-is-dark">Bill of sale</p> <i class="ti-arrow-right"></i>
                                    </div>
                                </a></div>
                            <div class="col-lg-3 col-6 mt-3"><a href="/rental-lease"
                                    class="contract-list--item d-flex align-items-center">
                                    <div class="w-100">
                                        <p class="text-is-dark">Rent and lease agreements</p> <i
                                            class="ti-arrow-right"></i>
                                    </div>
                                </a></div>
                            <div class="col-lg-3 col-6 mt-3"><a href="/deed"
                                    class="contract-list--item d-flex align-items-center">
                                    <div class="w-100">
                                        <p class="text-is-dark">Deed forms</p> <i class="ti-arrow-right"></i>
                                    </div>
                                </a></div>
                            <div class="col-lg-3 col-6 mt-3"><a href="/purchase-agreement"
                                    class="contract-list--item d-flex align-items-center">
                                    <div class="w-100">
                                        <p class="text-is-dark">Purchase agreements</p> <i class="ti-arrow-right"></i>
                                    </div>
                                </a></div>
                            <div class="col-lg-3 col-6 mt-3"><a href="/consent"
                                    class="contract-list--item d-flex align-items-center">
                                    <div class="w-100">
                                        <p class="text-is-dark">Consent forms</p> <i class="ti-arrow-right"></i>
                                    </div>
                                </a></div>
                            <div class="col-lg-3 col-6 mt-3"><a href="/living-will"
                                    class="contract-list--item d-flex align-items-center">
                                    <div class="w-100">
                                        <p class="text-is-dark">Living will</p> <i class="ti-arrow-right"></i>
                                    </div>
                                </a></div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="us-section">
                <div class="container-fluid mx-auto">
                    <div class="col-lg-10 mx-auto">
                        <div class="py-5 text-center">
                            <h3 class="h2-title text-is-dark">By use case</h3>
                        </div>
                        <div class="row contract-list align-items-start">
                            <div class="col-lg-3 mt-3 mb-5">
                                <div class="py-3 text-left">
                                    <h4 class="h4-title text-is-primary">Manage real estate</h4>
                                </div>
                                <div class="my-4"></div> <a href="/rental-lease"
                                    class="contract-list--item d-flex align-items-center mt-3">
                                    <div class="w-100">
                                        <p class="text-is-dark">Lease agreement</p> <i class="ti-arrow-right"></i>
                                    </div>
                                </a> <a href="/eviction" class="contract-list--item d-flex align-items-center mt-3">
                                    <div class="w-100">
                                        <p class="text-is-dark">Eviction notice</p> <i class="ti-arrow-right"></i>
                                    </div>
                                </a> <a href="/termination-letter"
                                    class="contract-list--item d-flex align-items-center mt-3">
                                    <div class="w-100">
                                        <p class="text-is-dark">Lease termination letter</p> <i
                                            class="ti-arrow-right"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 mt-3">
                                <div class="py-3 text-left">
                                    <h4 class="h4-title text-is-primary">Start a business</h4>
                                </div>
                                <div class="my-4"></div> <a href="/business/partnership-agreement"
                                    class="contract-list--item d-flex align-items-center mt-3">
                                    <div class="w-100">
                                        <p class="text-is-dark">Partnership agreement</p> <i class="ti-arrow-right"></i>
                                    </div>
                                </a> <a href="/operating-agreement"
                                    class="contract-list--item d-flex align-items-center mt-3">
                                    <div class="w-100">
                                        <p class="text-is-dark">LLC operating agreement</p> <i
                                            class="ti-arrow-right"></i>
                                    </div>
                                </a> <a href="/operating-agreement/corporate-bylaws"
                                    class="contract-list--item d-flex align-items-center mt-3">
                                    <div class="w-100">
                                        <p class="text-is-dark">Corporate bylaws</p> <i class="ti-arrow-right"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 mt-3">
                                <div class="py-3 text-left">
                                    <h4 class="h4-title text-is-primary">
                                        Create contracts for business
                                    </h4>
                                </div>
                                <div class="my-4"></div> <a href="/nda"
                                    class="contract-list--item d-flex align-items-center mt-3">
                                    <div class="w-100">
                                        <p class="text-is-dark">Non-disclosure agreement</p> <i
                                            class="ti-arrow-right"></i>
                                    </div>
                                </a> <a href="/employment" class="contract-list--item d-flex align-items-center mt-3">
                                    <div class="w-100">
                                        <p class="text-is-dark">Employment contract</p> <i class="ti-arrow-right"></i>
                                    </div>
                                </a> <a href="/independent-contractor"
                                    class="contract-list--item d-flex align-items-center mt-3">
                                    <div class="w-100">
                                        <p class="text-is-dark">Independent contractor agreement</p> <i
                                            class="ti-arrow-right"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 mt-3">
                                <div class="py-3 text-left">
                                    <h4 class="h4-title text-is-primary">Operate a business</h4>
                                </div>
                                <div class="my-4"></div> <a href="/release"
                                    class="contract-list--item d-flex align-items-center mt-3">
                                    <div class="w-100">
                                        <p class="text-is-dark">Release/indemnity agreements</p> <i
                                            class="ti-arrow-right"></i>
                                    </div>
                                </a> <a href="/consent" class="contract-list--item d-flex align-items-center mt-3">
                                    <div class="w-100">
                                        <p class="text-is-dark">Consent forms</p> <i class="ti-arrow-right"></i>
                                    </div>
                                </a> <a href="/cease-and-desist"
                                    class="contract-list--item d-flex align-items-center mt-3">
                                    <div class="w-100">
                                        <p class="text-is-dark">Cease and desist letter</p> <i
                                            class="ti-arrow-right"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 mt-3">
                                <div class="py-3 text-left">
                                    <h4 class="h4-title text-is-primary">
                                        Sell your personal property
                                    </h4>
                                </div>
                                <div class="my-4"></div> <a href="/bill-of-sale"
                                    class="contract-list--item d-flex align-items-center mt-3">
                                    <div class="w-100">
                                        <p class="text-is-dark">Bill of sale</p> <i class="ti-arrow-right"></i>
                                    </div>
                                </a> <a href="/purchase-agreement"
                                    class="contract-list--item d-flex align-items-center mt-3">
                                    <div class="w-100">
                                        <p class="text-is-dark">Purchase agreement</p> <i class="ti-arrow-right"></i>
                                    </div>
                                </a> <a href="/bill-of-sale/vehicle"
                                    class="contract-list--item d-flex align-items-center mt-3">
                                    <div class="w-100">
                                        <p class="text-is-dark">Vehicle bill of sale</p> <i class="ti-arrow-right"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 mt-3">
                                <div class="py-3 text-left">
                                    <h4 class="h4-title text-is-primary">Borrow and lend money</h4>
                                </div>
                                <div class="my-4"></div> <a href="/loan-agreement"
                                    class="contract-list--item d-flex align-items-center mt-3">
                                    <div class="w-100">
                                        <p class="text-is-dark">Loan agreement template</p> <i
                                            class="ti-arrow-right"></i>
                                    </div>
                                </a> <a href="/loan-agreement/iou"
                                    class="contract-list--item d-flex align-items-center mt-3">
                                    <div class="w-100">
                                        <p class="text-is-dark">I Owe You</p> <i class="ti-arrow-right"></i>
                                    </div>
                                </a> <a href="/demand-letter" class="contract-list--item d-flex align-items-center mt-3">
                                    <div class="w-100">
                                        <p class="text-is-dark">Demand letter</p> <i class="ti-arrow-right"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-6 mt-3">
                                <div class="py-3 text-left">
                                    <h4 class="h4-title text-is-primary">
                                        Manage family and personal matters
                                    </h4>
                                </div>
                                <div class="my-4"></div>
                                <div class="col-lg-6 p-0"><a href="/living-will"
                                        class="contract-list--item d-flex align-items-center mt-3">
                                        <div class="w-100">
                                            <p class="text-is-dark">Living will</p> <i class="ti-arrow-right"></i>
                                        </div>
                                    </a> <a href="/advance-directive"
                                        class="contract-list--item d-flex align-items-center mt-3">
                                        <div class="w-100">
                                            <p class="text-is-dark">Advance healthcare directive</p> <i
                                                class="ti-arrow-right"></i>
                                        </div>
                                    </a> <a href="/power-of-attorney"
                                        class="contract-list--item d-flex align-items-center mt-3">
                                        <div class="w-100">
                                            <p class="text-is-dark">Power of attorney</p> <i class="ti-arrow-right"></i>
                                        </div>
                                    </a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="us-section">
                <div class="container-fluid mx-auto">
                    <div class="col-lg-10 mx-auto">
                        <div class="py-5 text-center">
                            <h3 class="h2-title text-is-dark">All legal forms</h3>
                        </div>
                        <div class="row contract-list align-items-start mt-5">
                            <div class="col-lg-12 text-left">
                                <h4 class="h4-title text-is-primary">Business documents</h4>
                            </div>
                            <div class="col-lg-3 mt-3 mb-5">
                                <p class="d-flex"><a href="/business" class="us-link plain"><i
                                            class="ti-arrow-right mr-1"></i> Business
                                        purchase
                                        agreement</a></p>
                                <p class="d-flex"><a href="/bill-of-sale" class="us-link plain"><i
                                            class="ti-arrow-right mr-1"></i> Bill of
                                        sale</a></p>
                                <p class="d-flex"><a href="/cease-and-desist" class="us-link plain"><i
                                            class="ti-arrow-right mr-1"></i> Cease and desist
                                        letter</a></p>
                                <p class="d-flex"><a href="/consent" class="us-link plain"><i
                                            class="ti-arrow-right mr-1"></i> Consent forms
                                    </a></p>
                            </div>
                            <div class="col-lg-3 mt-3 mb-5">
                                <p class="d-flex"><a href="/independent-contractor/general-service"
                                        class="us-link plain"><i class="ti-arrow-right mr-1"></i>General service
                                        agreement</a></p>
                                <p class="d-flex"><a href="/release" class="us-link plain"><i
                                            class="ti-arrow-right mr-1"></i>Hold
                                        harmless/indemnity/release of liability forms</a></p>
                                <p class="d-flex"><a href="/invoice" class="us-link plain"><i
                                            class="ti-arrow-right mr-1"></i> Invoice</a></p>
                                <p class="d-flex"><a href="/letter-of-intent" class="us-link plain"><i
                                            class="ti-arrow-right mr-1"></i> Letter of intent
                                    </a></p>
                            </div>
                            <div class="col-lg-3 mt-3 mb-5">
                                <p class="d-flex"><a href="/recommendation-letter" class="us-link plain"><i
                                            class="ti-arrow-right mr-1"></i>Letters of recommendation</a></p>
                                <p class="d-flex"><a href="/resignation-letter" class="us-link plain"><i
                                            class="ti-arrow-right mr-1"></i>Letters of resignation
                                    </a></p>
                                <p class="d-flex"><a href="/loan-agreement" class="us-link plain"><i
                                            class="ti-arrow-right mr-1"></i>Loan
                                        agreements</a></p>
                                <p class="d-flex"><a href="/business/terms-and-conditions"
                                        class="us-link plain"><i class="ti-arrow-right mr-1"></i>Online terms and
                                        conditions
                                    </a></p>
                            </div>
                            <div class="col-lg-3 mt-3 mb-5">
                                <p class="d-flex"><a href="/loan-agreement/payment-plan" class="us-link plain"><i
                                            class="ti-arrow-right mr-1"></i>Payment plan
                                        agreement</a></p>
                                <p class="d-flex"><a href="/purchase-agreement" class="us-link plain"><i
                                            class="ti-arrow-right mr-1"></i>Purchase agreements
                                    </a></p>
                                <p class="d-flex"><a href="/letter-of-intent/purchase-order"
                                        class="us-link plain"><i class="ti-arrow-right mr-1"></i>Purchase order
                                    </a></p>
                                <p class="d-flex"><a href="/employment/subcontractor" class="us-link plain"><i
                                            class="ti-arrow-right mr-1"></i>Subcontractor agreements
                                    </a></p>
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <div class="row contract-list align-items-start mt-5">
                            <div class="col-lg-12 text-left">
                                <h4 class="h4-title text-is-primary">Business formation</h4>
                            </div>
                            <div class="col-lg-3 mt-3 mb-5">
                                <p class="d-flex"><a href="/bill-of-sale/business" class="us-link plain"><i
                                            class="ti-arrow-right mr-1"></i> Business purchase agreement</a></p>
                                <p class="d-flex"><a href="/operating-agreement/corporate-bylaws"
                                        class="us-link plain"><i class="ti-arrow-right mr-1"></i>Corporate bylaws</a></p>
                            </div>
                            <div class="col-lg-3 mt-3 mb-5">
                                <p class="d-flex"><a href="/operating-agreement" class="us-link plain"><i
                                            class="ti-arrow-right mr-1"></i>LLC operating
                                        agreement</a></p>
                            </div>
                            <div class="col-lg-3 mt-3 mb-5">
                                <p class="d-flex"><a href="/operating-agreement/single-member"
                                        class="us-link plain"><i class="ti-arrow-right mr-1"></i>Single-member LLC
                                        operating
                                        agreement
                                    </a></p>
                            </div>
                            <div class="col-lg-3 mt-3 mb-5">
                                <p class="d-flex"><a href="/operating-agreement/amendment"
                                        class="us-link plain"><i class="ti-arrow-right mr-1"></i>LLC operating agreement
                                        amendment
                                    </a></p>
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <div class="row contract-list align-items-start mt-5">
                            <div class="col-lg-12 text-left">
                                <h4 class="h4-title text-is-primary">Employment and HR</h4>
                            </div>
                            <div class="col-lg-3 mt-3 mb-5">
                                <p class="d-flex"><a href="/independent-contractor/consulting"
                                        class="us-link plain"><i class="ti-arrow-right mr-1"></i> Consulting services
                                        agreement</a></p>
                                <p class="d-flex"><a href="/independent-contractor/construction"
                                        class="us-link plain"><i class="ti-arrow-right mr-1"></i>Construction contractor
                                        agreement</a></p>
                                <p class="d-flex"><a href="/employment" class="us-link plain"><i
                                            class="ti-arrow-right mr-1"></i>Employment
                                        contracts</a></p>
                                <p class="d-flex"><a href="/employment/job-offer-letter" class="us-link plain"><i
                                            class="ti-arrow-right mr-1"></i>Employment/job offer
                                        letter</a></p>
                            </div>
                            <div class="col-lg-3 mt-3 mb-5">
                                <p class="d-flex"><a href="/employee/termination-letter" class="us-link plain"><i
                                            class="ti-arrow-right mr-1"></i>Employee Termination letter
                                    </a></p>
                                <p class="d-flex"><a href="/employee/performance-evaluation"
                                        class="us-link plain"><i class="ti-arrow-right mr-1"></i>Evaluations -
                                        performance
                                    </a></p>
                                <p class="d-flex"><a href="/independent-contractor" class="us-link plain"><i
                                            class="ti-arrow-right mr-1"></i>Freelance contract
                                    </a></p>
                                <p class="d-flex"><a href="/independent-contractor" class="us-link plain"><i
                                            class="ti-arrow-right mr-1"></i>Independent contractor
                                        agreements</a></p>
                            </div>
                            <div class="col-lg-3 mt-3 mb-5">
                                <p class="d-flex"><a href="/independent-contractor/non-compete"
                                        class="us-link plain"><i class="ti-arrow-right mr-1"></i>Independent contractor
                                        non compete
                                    </a></p>
                                <p class="d-flex"><a href="/nda/mutual" class="us-link plain"><i
                                            class="ti-arrow-right mr-1"></i>Mutual NDA
                                    </a></p>
                                <p class="d-flex"><a href="/non-compete" class="us-link plain"><i
                                            class="ti-arrow-right mr-1"></i>General Non
                                        compete
                                        agreements
                                    </a></p>
                                <p class="d-flex"><a href="/nda" class="us-link plain"><i
                                            class="ti-arrow-right mr-1"></i>Non-disclosure
                                        agreements
                                        (NDA)</a></p>
                            </div>
                            <div class="col-lg-3 mt-3 mb-5">
                                <p class="d-flex"><a href="/employmee/rejection-letter" class="us-link plain"><i
                                            class="ti-arrow-right mr-1"></i>Employment rejection letter
                                    </a></p>
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <div class="row contract-list align-items-start mt-5">
                            <div class="col-lg-12 text-left">
                                <h4 class="h4-title text-is-primary">Healthcare</h4>
                            </div>
                            <div class="col-lg-3 mt-3 mb-5">
                                <p class="d-flex"><a href="/advance-directive" class="us-link plain"><i
                                            class="ti-arrow-right mr-1"></i> Advance
                                        directive</a></p>
                                <p class="d-flex"><a href="/dnr" class="us-link plain"><i
                                            class="ti-arrow-right mr-1"></i>DNR (Do not
                                        resuscitate)</a></p>
                            </div>
                            <div class="col-lg-3 mt-3 mb-5">
                                <p class="d-flex"><a href="/living-will" class="us-link plain"><i
                                            class="ti-arrow-right mr-1"></i> Living will</a>
                                </p>
                            </div>
                            <div class="col-lg-3 mt-3 mb-5">
                                <p class="d-flex"><a href="/power-of-attorney/medical" class="us-link plain"><i
                                            class="ti-arrow-right mr-1"></i> Medical power of
                                        attorney</a></p>
                            </div>
                            <div class="col-lg-3 mt-3 mb-5">
                                <p class="d-flex"><a href="/consent/medical-records" class="us-link plain"><i
                                            class="ti-arrow-right mr-1"></i> Medical records release
                                        forms</a></p>
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <div class="row contract-list align-items-start mt-5">
                            <div class="col-lg-12 text-left">
                                <h4 class="h4-title text-is-primary">
                                    Family and estate planning
                                </h4>
                            </div>
                            <div class="col-lg-3 mt-3 mb-5">
                                <p class="d-flex"><a href="/consent/child-travel" class="us-link plain"><i
                                            class="ti-arrow-right mr-1"></i> Child travel
                                        consent</a></p>
                                <p class="d-flex"><a href="/divorce" class="us-link plain"><i
                                            class="ti-arrow-right mr-1"></i>Divorce
                                        agreement</a></p>
                                <p class="d-flex"><a href="/power-of-attorney/durable" class="us-link plain"><i
                                            class="ti-arrow-right mr-1"></i>Durable power of
                                        attorney</a></p>
                            </div>
                            <div class="col-lg-3 mt-3 mb-5">
                                <p class="d-flex"><a href="/power-of-attorney/minor-child"
                                        class="us-link plain"><i class="ti-arrow-right mr-1"></i> Minor/child power of
                                        attorney</a></p>
                                <p class="d-flex"><a href="/power-of-attorney" class="us-link plain"><i
                                            class="ti-arrow-right mr-1"></i> Power of
                                        attorney</a></p>
                                <p class="d-flex"><a href="/last-will" class="us-link plain"><i
                                            class="ti-arrow-right mr-1"></i> Last will and
                                        testament
                                    </a></p>
                            </div>
                            <div class="col-lg-3 mt-3 mb-5">
                                <p class="d-flex"><a href="/power-of-attorney/motor-vehicle"
                                        class="us-link plain"><i class="ti-arrow-right mr-1"></i> Motor vehicle power of
                                        attorney</a></p>
                                <p class="d-flex"><a href="/power-of-attorney/limited" class="us-link plain"><i
                                            class="ti-arrow-right mr-1"></i> Limited power of
                                        attorney</a></p>
                            </div>
                            <div class="col-lg-3 mt-3 mb-5">
                                <p class="d-flex"><a href="/power-of-attorney/revocation"
                                        class="us-link plain"><i class="ti-arrow-right mr-1"></i> Revocation of power of
                                        attorney</a></p>
                                <p class="d-flex"><a href="/power-of-attorney/real-estate"
                                        class="us-link plain"><i class="ti-arrow-right mr-1"></i> Real estate power of
                                        attorney</a></p>
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <div class="row contract-list align-items-start mt-5">
                            <div class="col-lg-12 text-left">
                                <h4 class="h4-title text-is-primary">Finances</h4>
                            </div>
                            <div class="col-lg-3 mt-3 mb-5">
                                <p class="d-flex"><a href="/loan-agreement" class="us-link plain"><i
                                            class="ti-arrow-right mr-1"></i> Loan agreement
                                        template</a></p>
                                <p class="d-flex"><a href="/loan-agreement/iou" class="us-link plain"><i
                                            class="ti-arrow-right mr-1"></i>I Owe You</a></p>
                                <p class="d-flex"><a href="/loan-agreement/family" class="us-link plain"><i
                                            class="ti-arrow-right mr-1"></i>Free family loan
                                        agreement</a></p>
                            </div>
                            <div class="col-lg-3 mt-3 mb-5">
                                <p class="d-flex"><a href="/demand-letter" class="us-link plain"><i
                                            class="ti-arrow-right mr-1"></i>Demand letters
                                        for
                                        payment</a></p>
                                <p class="d-flex"><a href="/debt" class="us-link plain"><i
                                            class="ti-arrow-right mr-1"></i>Debt Letters</a>
                                </p>
                                <p class="d-flex"><a href="/loan-agreement/promissory-note"
                                        class="us-link plain"><i class="ti-arrow-right mr-1"></i>Promissory note</a></p>
                            </div>
                            <div class="col-lg-3 mt-3 mb-5">
                                <p class="d-flex"><a href="/loan-agreement/personal" class="us-link plain"><i
                                            class="ti-arrow-right mr-1"></i> Personal loan agreement
                                    </a></p>
                                <p class="d-flex"><a href="/loan-agreement/relase-personal-guarantee"
                                        class="us-link plain"><i class="ti-arrow-right mr-1"></i> Release of
                                        personal
                                        guarantee</a></p>
                            </div>
                            <div class="col-lg-3 mt-3 mb-5">
                                <p class="d-flex"><a href="/debt/release" class="us-link plain"><i
                                            class="ti-arrow-right mr-1"></i> Release of
                                        debt</a></p>
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <div class="row contract-list align-items-start mt-5">
                            <div class="col-lg-12 text-left">
                                <h4 class="h4-title text-is-primary">Property</h4>
                            </div>
                            <div class="col-lg-3 mt-3 mb-5">
                                <p class="d-flex"><a href="/rental-lease/commercial" class="us-link plain"><i
                                            class="ti-arrow-right mr-1"></i> Commercial lease
                                        agreement</a></p>
                                <p class="d-flex"><a href="/rental-lease/commercial-sublease"
                                        class="us-link plain"><i class="ti-arrow-right mr-1"></i>Commercial sublease
                                        agreement</a></p>
                                <p class="d-flex"><a href="/termination-letter/early" class="us-link plain"><i
                                            class="ti-arrow-right mr-1"></i>Early lease termination
                                        letter
                                    </a></p>
                                <p class="d-flex"><a href="/eviction" class="us-link plain"><i
                                            class="ti-arrow-right mr-1"></i>Eviction notices
                                    </a></p>
                                <p class="d-flex"><a href="/deed/general-warranty" class="us-link plain"><i
                                            class="ti-arrow-right mr-1"></i>General warranty deed forms
                                    </a></p>
                                <p class="d-flex"><a href="/eviction/notice-late-payment"
                                        class="us-link plain"><i class="ti-arrow-right mr-1"></i>Late rent notice
                                    </a></p>
                            </div>
                            <div class="col-lg-3 mt-3 mb-5">
                                <p class="d-flex"><a href="/rental-lease/lead-based-paint-disclosure"
                                        class="us-link plain"><i class="ti-arrow-right mr-1"></i>Lead-based paint
                                        disclosure
                                    </a></p>
                                <p class="d-flex"><a href="/rental-lease" class="us-link plain"><i
                                            class="ti-arrow-right mr-1"></i>Lease/rental
                                        agreement
                                        (residential)
                                    </a></p>
                                <p class="d-flex"><a href="/rental-lease/amendment" class="us-link plain"><i
                                            class="ti-arrow-right mr-1"></i>Lease amendment
                                        (residential)
                                    </a></p>
                                <p class="d-flex"><a href="/termination-letter" class="us-link plain"><i
                                            class="ti-arrow-right mr-1"></i>Lease termination letter
                                    </a></p>
                                <p class="d-flex"><a href="/rental-lease/monthly" class="us-link plain"><i
                                            class="ti-arrow-right mr-1"></i>Month-to-month residential
                                        lease agreement
                                    </a></p>
                            </div>
                            <div class="col-lg-3 mt-3 mb-5">
                                <p class="d-flex"><a href="/termination-letter" class="us-link plain"><i
                                            class="ti-arrow-right mr-1"></i>Month-to-month tenant’s
                                        termination letter (eforms)
                                    </a></p>
                                <p class="d-flex"><a href="/rental-lease/increase" class="us-link plain"><i
                                            class="ti-arrow-right mr-1"></i>Notice of rent
                                        increase</a></p>
                                <p class="d-flex"><a href="/deed" class="us-link plain"><i
                                            class="ti-arrow-right mr-1"></i>Property
                                        deed</a></p>
                                <p class="d-flex"><a href="/deed/quitclaim" class="us-link plain"><i
                                            class="ti-arrow-right mr-1"></i>Quitclaim
                                        deed</a></p>
                                <p class="d-flex"><a href="/purchase-agreement%20" class="us-link plain"><i
                                            class="ti-arrow-right mr-1"></i>Real estate purchase
                                        agreement</a></p>
                                <p class="d-flex"><a href="/rental-lease/rent-to-own" class="us-link plain"><i
                                            class="ti-arrow-right mr-1"></i>Rent-to-own lease agreement
                                    </a></p>
                            </div>
                            <div class="col-lg-3 mt-3 mb-5">
                                <p class="d-flex"><a href="/rental-lease/application" class="us-link plain"><i
                                            class="ti-arrow-right mr-1"></i> Rental application
                                    </a></p>
                                <p class="d-flex"><a href="/rental-lease/roommate" class="us-link plain"><i
                                            class="ti-arrow-right mr-1"></i> Roommate
                                        agreement</a></p>
                                <p class="d-flex"><a href="/rental-lease/short-term-vacation"
                                        class="us-link plain"><i class="ti-arrow-right mr-1"></i> Short-term rental
                                        agreement</a></p>
                                <p class="d-flex"><a href="/rental-lease/simple" class="us-link plain"><i
                                            class="ti-arrow-right mr-1"></i>Simple lease agreement (one
                                        page)</a></p>
                                <p class="d-flex"><a href="/rental-lease/sublease" class="us-link plain"><i
                                            class="ti-arrow-right mr-1"></i>Sublease agreement
                                        (residential)</a></p>
                                <p class="d-flex"><a href="/letter-of-intent/vacate" class="us-link plain"><i
                                            class="ti-arrow-right mr-1"></i>Letter of intention to
                                        vacate premise</a></p>
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <div class="row contract-list align-items-start mt-5">
                            <div class="col-lg-12 text-left">
                                <h4 class="h4-title text-is-primary">Miscellaneous</h4>
                            </div>
                            <div class="col-lg-3 mt-3 mb-5">
                                <p class="d-flex"><a href="/notary-acknowledgement" class="us-link plain"><i
                                            class="ti-arrow-right mr-1"></i> Notary acknowledgment
                                    </a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="faqHolder" class="us-section d-block mb-5">
                <div class="faq-header d-flex align-items-center">
                    <div class="container">
                        <h3 class="h3-title text-white">Frequently asked questions</h3>
                    </div> <img data-src="/_nuxt/img/dot-grid-white.736bf2e.svg" alt="" class="dot-grid">
                </div>
                <div class="container">
                    <div id="faq" class="accordion">
                        <div class="card">
                            <div id="faqhead1" class="card-header"><a href="#" data-toggle="collapse"
                                    data-target="#faq1" aria-expanded="true" aria-controls="faq1"
                                    class="btn btn-header-link h3-title text-is-primary">
                                    Why Does A Business Need to Use A Contract?
                                </a></div>
                            <div id="faq1" aria-labelledby="faqhead1" data-parent="#faq" class="collapse show">
                                <div class="card-body">
                                    <p class="body-text text-is-dark">
                                        Many businesses go into deals without a proper contract or
                                        agreement. This creates a lot of setbacks due to disputes. For
                                        businesses who wish to isolate themselves from bottleneck
                                        issues resulting from mere promises, a contract or agreement
                                        is necessary to put things in black and white making sure all
                                        parties understand and affirm the terms so agreed upon.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div id="faqhead2" class="card-header"><a href="#" data-toggle="collapse"
                                    data-target="#faq2" aria-expanded="true" aria-controls="faq2"
                                    class="btn btn-header-link collapsed h3-title text-is-primary">
                                    Do I Need a Lawyer to Write A Contract?
                                </a></div>
                            <div id="faq2" aria-labelledby="faqhead2" data-parent="#faq" class="collapse">
                                <div class="card-body">
                                    <p class="body-text text-is-dark">
                                        No, you don’t need a lawyer. Why pay a lawyer hefty fees to
                                        draft a contract or agreement. Why spend time creating a
                                        contract when you can use UsefulPDF’s carefully drafted
                                        contract templates to jumpstart your business deals. Our
                                        contract templates are carefully created and vetted by a legal
                                        expert.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div id="faqhead3" class="card-header"><a href="#" data-toggle="collapse"
                                    data-target="#faq3" aria-expanded="true" aria-controls="faq3"
                                    class="btn btn-header-link collapsed h3-title text-is-primary">
                                    Why use a contract template?
                                </a></div>
                            <div id="faq3" aria-labelledby="faqhead3" data-parent="#faq" class="collapse">
                                <div class="card-body">
                                    <p class="body-text text-is-dark">
                                        Many businesses spend a good amount of time creating contracts
                                        for different purposes. In business, time is money. So why
                                        spend so much of it creating contracts from scratch for
                                        different clients when you can select a contract template that
                                        suits your business needs, customize it, sign and send it to
                                        other signers/parties to sign using our eSignature tool.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div id="faqhead4" class="card-header"><a href="#" data-toggle="collapse"
                                    data-target="#faq4" aria-expanded="true" aria-controls="faq4"
                                    class="btn btn-header-link collapsed h3-title text-is-primary">
                                    What are the major elements of a contract agreement?
                                </a></div>
                            <div id="faq4" aria-labelledby="faqhead4" data-parent="#faq" class="collapse">
                                <div class="card-body">
                                    <div class="body-text text-is-dark">
                                        <ul>
                                            <li>
                                                Offer - One party promises a deliverable, action, or even
                                                a nonaction in exchange for consideration.
                                            </li>
                                            <li>
                                                Consideration - Usually, this is in monetary terms like
                                                how much will be paid for the offer. It can be nonmonetary
                                                as well. In the end, it’s the value that has been agreed
                                                upon as the exchange.
                                            </li>
                                            <li>
                                                Acceptance - Both parties accept the terms and conditions
                                                of the contract.
                                            </li>
                                            <li>
                                                Mutual agreement - two or more parties are in agreement
                                                that they’ll uphold (or reject) the terms of the contract.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="container-fluid">
                <div class="footer-cta col-lg-10 mx-auto d-flex align-items-center justify-content-center text-center">
                    <div class="col-lg-8">
                        <h3 class="h3-title text-is-primary">
                            GET STARTED AND GENERATE YOUR FIRST DOCUMENT TODAY
                        </h3>
                        <div class="mt-5"><a href="/document-generation" class="us-btn is--primary">Get
                                Started</a></div>
                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection
