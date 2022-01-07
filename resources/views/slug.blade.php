@extends('layout.app')

@section('content')

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
                                        <p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;">
                                            {!! $contracts->header_content !!} </span>
                                        </p>
                                    </div>
                                </div>
                                <div class="dropdown mt-4"><button type="button" id="dropdownMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                        class="us-btn  is--primary-alt dropdown-toggle">
                                        Download Now
                                    </button>
                                    <div aria-labelledby="dropdownMenuButton" class="dropdown-menu"><a download=""
                                            target="_blank"
                                            href="https://cdn.usefulpdf.com/strapi/f1549aa3010cda7f6190a5731d34e10b.pdf"
                                            class="dropdown-item">Adobe Pdf</a> <a download="" target="_blank"
                                            href="https://cdn.usefulpdf.com/strapi/2e5429dccb6b32269dc3725d8240048e.docx"
                                            class="dropdown-item">Microsoft Word</a>
                                        <!---->
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 text-lg-right text-center">
                                @if ($contracts->preview_image)
                                    <img onerror="this.src=&#39;https://via.placeholder.com/350x400/FFFFFF/000000/?text=Placeholder&#39;"
                                        alt="" class="rounded-lg img-fluid lazyLoad isLoaded" src="{{ $imagePath }}">
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
@endsection
