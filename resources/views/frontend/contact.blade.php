@extends('layout.app')

@section('content')
    <div>
        <section class="us-section extended">
            <div class="container-fluid">
                <div class="col-lg-10 mx-auto p-0">
                    <div class="row align-items-start">
                        <div class="col-lg-6 mt-4">
                            <div class="col-lg-10 p-0">
                                <h3 class="h3-title text-is-primary">Contact UsefulPDF</h3>
                                <p class="us-section--desc">
                                    We’re sure you know how this works.
                                </p>
                                <p class="us-section--desc">
                                    If you have any questions, concerns, feedback, etc. drop us a
                                    line using the form below. We read all messages (well, the
                                    ones that don’t fall into the category described below).
                                </p>
                                <p class="us-section--desc">Let us just be upfront.</p>
                                <p class="us-section--desc">
                                    If you’re here to send us an email about an excellent
                                    opportunity for quality content tailored to our visitors, but
                                    you need a do-follow backlink, just #ForgetAboutIt. We’re not
                                    interested. If you want to try your luck then you’ll be
                                    unpleasantly surprised by how silent we can get.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-4">
                            <div class="p-3 pl-lg-5 has--shadow border-radius">
                                <div class="pt-4 pb-4">
                                    <h4 class="h4-title text-is-primary">Leave a message</h4>
                                </div>
                                <form class="" @submit.prevent="submitContact">
                                    <div class="row">
                                        <div class="form-group col-lg-12 mt-3">
                                            <input type="text" name="first_name" v-model="firstName" class="us-input"
                                                placeholder="First Name" required />
                                        </div>
                                        <div class="form-group col-lg-12 mt-3">
                                            <input type="text" name="last_name" v-model="lastName" class="us-input"
                                                placeholder="Last Name" required />
                                        </div>
                                        <div class="form-group col-lg-12 mt-3">
                                            <input type="text" name="email" v-model="email" class="us-input"
                                                placeholder="Email Address" required />
                                        </div>
                                        <div class="form-group col-lg-12 mt-3">
                                            <input type="text" name="company" v-model="company" class="us-input"
                                                placeholder="Company" />
                                        </div>
                                        <div class="form-group col-lg-12 mt-3">
                                            <textarea name="message" v-model="message" class="us-input is--textarea"
                                                placeholder="Message" required></textarea>
                                        </div>
                                        <div class="form-group col-lg-12 mt-3 ">
                                            <div class="w-100 d-flex justify-content-end"></div>
                                        </div>
                                        <div class="form-group col-lg-12 mt-3 text-right">
                                            <button :disabled="loading" class="us-btn is--primary" type="submit">
                                                <span v-if="!loading">
                                                    Send Message
                                                </span>
                                                <div v-if="loading" class="spinner-border text-light ml-auto mr-auto"
                                                    role="status">
                                                    <span class="sr-only">Loading...</span>
                                                </div>
                                            </button>
                                        </div>

                                        <p class="antispam d-none">
                                            Leave this empty: <input type="text" name="url" />
                                        </p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
