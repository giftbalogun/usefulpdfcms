<!DOCTYPE html>
<html lang="en"
    style="--cookie-control-barTextColor:#fff; --cookie-control-modalOverlay:#000; --cookie-control-barBackground:#15523a; --cookie-control-barButtonColor:#000; --cookie-control-modalTextColor:#000; --cookie-control-modalBackground:#fff; --cookie-control-modalOverlayOpacity:0.8; --cookie-control-modalButtonColor:#fff; --cookie-control-modalUnsavedColor:#fff; --cookie-control-barButtonHoverColor:#fff; --cookie-control-barButtonBackground:#fff; --cookie-control-modalButtonHoverColor:#fff; --cookie-control-controlButtonIconColor:#000; --cookie-control-modalButtonBackground:#000; --cookie-control-controlButtonBackground:#fff; --cookie-control-barButtonHoverBackground:#333; --cookie-control-checkboxActiveBackground:#000; --cookie-control-controlButtonIconHoverColor:#fff; --cookie-control-checkboxInactiveBackground:#000; --cookie-control-modalButtonHoverBackground:#333; --cookie-control-checkboxDisabledBackground:#ddd; --cookie-control-controlButtonHoverBackground:#000; --cookie-control-checkboxActiveCircleBackground:#fff; --cookie-control-checkboxInactiveCircleBackground:#fff; --cookie-control-checkboxDisabledCircleBackground:#fff;">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Electronic signature and document generation software | UsefulPDF</title>
    <meta name="format-detection" content="telephone=no">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="UsefulPDF">
    <meta property="og:image"
        content="https://res.cloudinary.com/simplytammy/image/upload/v1633696286/cover/meta-image.png">
    <meta name="twitter:image"
        content="https://res.cloudinary.com/simplytammy/image/upload/v1633696286/cover/meta-image.png">
    <meta name="twitter:card"
        content="https://res.cloudinary.com/simplytammy/image/upload/v1633696286/cover/meta-image.png">
    <link rel="icon" type="image/x-icon" href="{{ asset('/useful_v2_assets/app-icons/favicon.ico') }}">
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ asset('/useful_v2_assets/app-icons/favicon-16x16.png') }}">
    <link rel="icon" type="image/png" sizes="32x32"
        href="{{ asset('/useful_v2_assets/app-icons/favicon-32x32.png') }}">
    <link rel="apple-touch-icon" type="image/png" sizes="180x180"
        href="{{ asset('app-icons/apple-touch-icon.png') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/themify-icons/0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="{{ asset('/useful_v2_assets/css/ui.css') }}">
    <link rel="stylesheet" href="{{ asset('/useful_v2_assets/css/flags.css') }}">
    <link rel="stylesheet" href="{{ asset('/useful_v2_assets/css/preloader.css') }}">
    <link rel="stylesheet" href="{{ asset('/useful_v2_assets/css/toastr.css') }}">

    <style data-vue-ssr-id="05831c5e:0 ce243306:0 80711072:0 148968c4:0">
        .cookieControl__Modal-enter-active,
        .cookieControl__Modal-leave-active {
            transition: opacity .25s
        }

        .cookieControl__Modal-enter,
        .cookieControl__Modal-leave-to {
            opacity: 0
        }

        .cookieControl__Bar--center {
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%)
        }

        .cookieControl__Bar--bottom-full-enter-active,
        .cookieControl__Bar--bottom-full-leave-active,
        .cookieControl__Bar--bottom-left-enter-active,
        .cookieControl__Bar--bottom-left-leave-active,
        .cookieControl__Bar--bottom-right-enter-active,
        .cookieControl__Bar--bottom-right-leave-active,
        .cookieControl__Bar--center-enter-active,
        .cookieControl__Bar--center-leave-active,
        .cookieControl__Bar--top-full-enter-active,
        .cookieControl__Bar--top-full-leave-active,
        .cookieControl__Bar--top-left-enter-active,
        .cookieControl__Bar--top-left-leave-active,
        .cookieControl__Bar--top-right-enter-active,
        .cookieControl__Bar--top-right-leave-active {
            transition: transform .25s
        }

        .cookieControl__Bar--top-full-enter,
        .cookieControl__Bar--top-full-leave-to,
        .cookieControl__Bar--top-left-enter,
        .cookieControl__Bar--top-left-leave-to,
        .cookieControl__Bar--top-right-enter,
        .cookieControl__Bar--top-right-leave-to {
            transform: translateY(-100%)
        }

        .cookieControl__Bar--bottom-full-enter,
        .cookieControl__Bar--bottom-full-leave-to,
        .cookieControl__Bar--bottom-left-enter,
        .cookieControl__Bar--bottom-left-leave-to,
        .cookieControl__Bar--bottom-right-enter,
        .cookieControl__Bar--bottom-right-leave-to {
            transform: translateY(100%)
        }

        .cookieControl__Bar--center-enter,
        .cookieControl__Bar--center-leave-to {
            transform: translate(-50%, -50%) scale(.95)
        }

        .cookieControl {
            position: relative;
            z-index: 100000
        }

        .cookieControl button {
            border: 0;
            outline: 0;
            font-size: 16px;
            cursor: pointer;
            padding: 12px 20px;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            transition: background-color .2s, color .2s
        }

        .cookieControl__Bar {
            position: fixed;
            background-color: var(--cookie-control-barBackground);
            font-family: Arial, "Helvetica Neue", Helvetica, sans-serif
        }

        .cookieControl__Bar h3,
        .cookieControl__Bar p {
            color: var(--cookie-control-barTextColor);
            max-width: 900px
        }

        .cookieControl__Bar h3 {
            margin: 0;
            font-size: 20px
        }

        .cookieControl__Bar p {
            font-size: 16px;
            margin: 5px 0 0
        }

        .cookieControl__Bar button {
            color: var(--cookie-control-barButtonColor);
            background-color: var(--cookie-control-barButtonBackground)
        }

        .cookieControl__Bar button:hover {
            color: var(--cookie-control-barButtonHoverColor);
            background-color: var(--cookie-control-barButtonHoverBackground)
        }

        .cookieControl__Bar button+button {
            margin-left: 10px
        }

        .cookieControl__BarContainer {
            display: flex;
            padding: 20px;
            align-items: flex-end;
            justify-content: space-between
        }

        .cookieControl__Bar--bottom-full,
        .cookieControl__Bar--top-full {
            left: 0;
            right: 0
        }

        .cookieControl__Bar--top-full {
            top: 0
        }

        .cookieControl__Bar--bottom-full {
            bottom: 0
        }

        .cookieControl__Bar--bottom-left p,
        .cookieControl__Bar--bottom-right p,
        .cookieControl__Bar--center p,
        .cookieControl__Bar--top-left p,
        .cookieControl__Bar--top-right p {
            max-width: 400px
        }

        .cookieControl__Bar--bottom-left .cookieControl__BarContainer,
        .cookieControl__Bar--bottom-right .cookieControl__BarContainer,
        .cookieControl__Bar--center .cookieControl__BarContainer,
        .cookieControl__Bar--top-left .cookieControl__BarContainer,
        .cookieControl__Bar--top-right .cookieControl__BarContainer {
            flex-direction: column
        }

        .cookieControl__Bar--bottom-left .cookieControl__BarButtons,
        .cookieControl__Bar--bottom-right .cookieControl__BarButtons,
        .cookieControl__Bar--center .cookieControl__BarButtons,
        .cookieControl__Bar--top-left .cookieControl__BarButtons,
        .cookieControl__Bar--top-right .cookieControl__BarButtons {
            margin-top: 20px
        }

        .cookieControl__Bar--top-left,
        .cookieControl__Bar--top-right {
            top: 20px
        }

        .cookieControl__Bar--bottom-left,
        .cookieControl__Bar--bottom-right {
            bottom: 20px
        }

        .cookieControl__Bar--bottom-left,
        .cookieControl__Bar--top-left {
            left: 20px
        }

        .cookieControl__Bar--bottom-right,
        .cookieControl__Bar--top-right {
            right: 20px
        }

        .cookieControl__BarButtons {
            display: flex
        }

        .cookieControl__Modal {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 1;
            font-size: 0;
            text-align: center
        }

        .cookieControl__Modal:before {
            content: "";
            min-height: 100vh;
            display: inline-block;
            vertical-align: middle
        }

        .cookieControl__Modal:after {
            position: absolute;
            content: "";
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: -1;
            opacity: var(--cookie-control-modalOverlayOpacity);
            background-color: var(--cookie-control-modalOverlay)
        }

        .cookieControl__Modal>div {
            font-size: medium;
            padding-top: 80px
        }

        .cookieControl__Modal button {
            color: var(--cookie-control-modalButtonColor);
            background-color: var(--cookie-control-modalButtonBackground)
        }

        .cookieControl__Modal button:hover {
            color: var(--cookie-control-modalButtonHoverColor);
            background-color: var(--cookie-control-modalButtonHoverBackground)
        }

        .cookieControl__ModalContent {
            position: relative;
            width: 100%;
            padding: 40px;
            max-width: 550px;
            max-height: 80vh;
            text-align: left;
            overflow-y: scroll;
            display: inline-block;
            vertical-align: middle;
            background-color: var(--cookie-control-modalBackground)
        }

        .cookieControl__ModalContent,
        .cookieControl__ModalContent :not(button) {
            color: var(--cookie-control-modalTextColor)
        }

        .cookieControl__ModalContent h3 {
            font-size: 24px;
            margin: 50px 0 25px
        }

        .cookieControl__ModalContent h3:first-of-type {
            margin-top: 0
        }

        .cookieControl__ModalContent ul {
            padding: 0;
            font-size: 16px;
            list-style-type: none
        }

        .cookieControl__ModalContent ul ul {
            padding: 5px 56px 0
        }

        .cookieControl__ModalContent ul ul li+li {
            margin-top: 5px
        }

        .cookieControl__ModalContent li {
            align-items: center
        }

        .cookieControl__ModalContent li+li {
            margin-top: 20px
        }

        .cookieControl__ModalContent input {
            display: none
        }

        .cookieControl__ModalContent input:checked+label {
            background-color: var(--cookie-control-checkboxActiveBackground)
        }

        .cookieControl__ModalContent input:checked+label:before {
            background-color: var(--cookie-control-checkboxActiveCircleBackground);
            transform: translate3d(100%, -50%, 0)
        }

        .cookieControl__ModalContent input:checked:disabled+label {
            background-color: var(--cookie-control-checkboxDisabledBackground)
        }

        .cookieControl__ModalContent input:checked:disabled+label:before {
            background-color: var(--cookie-control-checkboxDisabledCircleBackground)
        }

        .cookieControl__ModalContent label {
            position: relative;
            min-width: 36px;
            min-height: 20px;
            font-size: 0;
            display: block;
            margin-right: 20px;
            border-radius: 20px;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            transition: background-color .2s;
            background-color: var(--cookie-control-checkboxInactiveBackground)
        }

        .cookieControl__ModalContent label:before {
            position: absolute;
            content: "";
            top: 50%;
            left: 3px;
            width: 15px;
            height: 15px;
            border-radius: 50%;
            transition: transform .2s;
            transform: translate3d(0, -50%, 0);
            background-color: var(--cookie-control-checkboxInactiveCircleBackground)
        }

        .cookieControl__ModalInputWrapper {
            display: flex;
            align-items: flex-start
        }

        .cookieControl__ModalCookieName {
            font-weight: 700;
            text-transform: uppercase
        }

        .cookieControl__ModalCookieName span {
            font-weight: 400;
            text-transform: none
        }

        .cookieControl__ModalClose {
            position: absolute;
            top: 20px;
            right: 20px
        }

        .cookieControl__ModalButtons {
            display: flex;
            margin-top: 80px;
            align-items: flex-start
        }

        .cookieControl__ModalButtons button+button {
            margin-left: 20px
        }

        .cookieControl__ModalUnsaved {
            position: absolute;
            left: 50%;
            bottom: 40px;
            margin: 0;
            color: var(--cookie-control-modalUnsavedColor);
            font-size: 14px;
            transform: translateX(-50%)
        }

        .cookieControl__BlockedIframe {
            padding: 20px;
            border: 2px solid #ddd
        }

        .cookieControl__BlockedIframe a,
        .cookieControl__BlockedIframe p {
            font-family: Arial, "Helvetica Neue", Helvetica, sans-serif
        }

        @media screen and (max-width:768px) {
            .cookieControl__Bar {
                flex-direction: column;
                left: 0;
                right: 0
            }

            .cookieControl__Bar h3,
            .cookieControl__Bar p {
                max-width: 100%
            }

            .cookieControl__Bar--top-full,
            .cookieControl__Bar--top-left,
            .cookieControl__Bar--top-right {
                top: 0
            }

            .cookieControl__Bar--bottom-full,
            .cookieControl__Bar--bottom-left,
            .cookieControl__Bar--bottom-right {
                bottom: 0
            }

            .cookieControl__ModalContent {
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                max-width: none;
                max-height: 100%;
                padding: 80px 20px 20px
            }

            .cookieControl__BarButtons {
                width: 100%;
                margin-top: 20px;
                justify-content: flex-end
            }

            .cookieControl__BarContainer {
                flex-direction: column
            }
        }

        .cookieControl__ControlButton {
            position: fixed;
            right: 20px;
            bottom: 20px;
            border: 0;
            outline: 0;
            width: 40px;
            height: 40px;
            cursor: pointer;
            min-width: 40px;
            min-height: 40px;
            border-radius: 50%;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            transition: background-color .2s;
            box-shadow: 0 0 10px rgba(0, 0, 0, .3);
            background: var(--cookie-control-controlButtonBackground)
        }

        .cookieControl__ControlButton svg {
            position: absolute;
            top: 50%;
            left: 50%;
            min-width: 24px;
            min-height: 24px;
            max-width: 24px;
            max-height: 24px;
            transition: color .2s;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            transform: translate(-50%, -50%);
            color: var(--cookie-control-controlButtonIconColor)
        }

        .cookieControl__ControlButton:hover {
            background-color: var(--cookie-control-controlButtonHoverBackground)
        }

        .cookieControl__ControlButton:hover svg {
            color: var(--cookie-control-controlButtonIconHoverColor)
        }

        .Vue-Toastification__container {
            z-index: 9999;
            position: fixed;
            padding: 4px;
            width: 600px;
            box-sizing: border-box;
            display: flex;
            min-height: 100%;
            color: #fff;
            flex-direction: column;
            pointer-events: none
        }

        @media only screen and (min-width:600px) {

            .Vue-Toastification__container.top-center,
            .Vue-Toastification__container.top-left,
            .Vue-Toastification__container.top-right {
                top: 1em
            }

            .Vue-Toastification__container.bottom-center,
            .Vue-Toastification__container.bottom-left,
            .Vue-Toastification__container.bottom-right {
                bottom: 1em;
                flex-direction: column-reverse
            }

            .Vue-Toastification__container.bottom-left,
            .Vue-Toastification__container.top-left {
                left: 1em
            }

            .Vue-Toastification__container.bottom-left .Vue-Toastification__toast,
            .Vue-Toastification__container.top-left .Vue-Toastification__toast {
                margin-right: auto
            }

            @supports not (-moz-appearance:none) {

                .Vue-Toastification__container.bottom-left .Vue-Toastification__toast--rtl,
                .Vue-Toastification__container.top-left .Vue-Toastification__toast--rtl {
                    margin-right: unset;
                    margin-left: auto
                }
            }

            .Vue-Toastification__container.bottom-right,
            .Vue-Toastification__container.top-right {
                right: 1em
            }

            .Vue-Toastification__container.bottom-right .Vue-Toastification__toast,
            .Vue-Toastification__container.top-right .Vue-Toastification__toast {
                margin-left: auto
            }

            @supports not (-moz-appearance:none) {

                .Vue-Toastification__container.bottom-right .Vue-Toastification__toast--rtl,
                .Vue-Toastification__container.top-right .Vue-Toastification__toast--rtl {
                    margin-left: unset;
                    margin-right: auto
                }
            }

            .Vue-Toastification__container.bottom-center,
            .Vue-Toastification__container.top-center {
                left: 50%;
                margin-left: -300px
            }

            .Vue-Toastification__container.bottom-center .Vue-Toastification__toast,
            .Vue-Toastification__container.top-center .Vue-Toastification__toast {
                margin-left: auto;
                margin-right: auto
            }
        }

        @media only screen and (max-width:600px) {
            .Vue-Toastification__container {
                width: 100vw;
                padding: 0;
                left: 0;
                margin: 0
            }

            .Vue-Toastification__container .Vue-Toastification__toast {
                width: 100%
            }

            .Vue-Toastification__container.top-center,
            .Vue-Toastification__container.top-left,
            .Vue-Toastification__container.top-right {
                top: 0
            }

            .Vue-Toastification__container.bottom-center,
            .Vue-Toastification__container.bottom-left,
            .Vue-Toastification__container.bottom-right {
                bottom: 0;
                flex-direction: column-reverse
            }
        }

        .Vue-Toastification__toast {
            display: inline-flex;
            position: relative;
            max-height: 800px;
            min-height: 64px;
            box-sizing: border-box;
            margin-bottom: 1rem;
            padding: 22px 24px;
            border-radius: 8px;
            box-shadow: 0 1px 10px 0 rgba(0, 0, 0, .1), 0 2px 15px 0 rgba(0, 0, 0, .05);
            justify-content: space-between;
            font-family: Lato, Helvetica, Roboto, Arial, sans-serif;
            max-width: 600px;
            min-width: 326px;
            pointer-events: auto;
            overflow: hidden;
            transform: translateZ(0);
            direction: ltr
        }

        .Vue-Toastification__toast--rtl {
            direction: rtl
        }

        .Vue-Toastification__toast--default {
            background-color: #1976d2;
            color: #fff
        }

        .Vue-Toastification__toast--info {
            background-color: #2196f3;
            color: #fff
        }

        .Vue-Toastification__toast--success {
            background-color: #4caf50;
            color: #fff
        }

        .Vue-Toastification__toast--error {
            background-color: #ff5252;
            color: #fff
        }

        .Vue-Toastification__toast--warning {
            background-color: #ffc107;
            color: #fff
        }

        @media only screen and (max-width:600px) {
            .Vue-Toastification__toast {
                border-radius: 0;
                margin-bottom: .5rem
            }
        }

        .Vue-Toastification__toast-body {
            flex: 1;
            line-height: 24px;
            font-size: 16px;
            word-break: break-word;
            white-space: pre-wrap
        }

        .Vue-Toastification__toast-component-body {
            flex: 1
        }

        .Vue-Toastification__toast.disable-transition {
            transition: none !important;
            -webkit-animation: none !important;
            animation: none !important
        }

        .Vue-Toastification__close-button {
            font-weight: 700;
            font-size: 24px;
            line-height: 24px;
            background: 0 0;
            outline: 0;
            border: none;
            padding: 0 0 0 10px;
            cursor: pointer;
            transition: .3s ease;
            align-items: center;
            color: #fff;
            opacity: .3;
            transition: visibility 0s, opacity .2s linear
        }

        .Vue-Toastification__close-button:focus,
        .Vue-Toastification__close-button:hover {
            opacity: 1
        }

        .Vue-Toastification__toast:not(:hover) .Vue-Toastification__close-button.show-on-hover {
            opacity: 0
        }

        .Vue-Toastification__toast--rtl .Vue-Toastification__close-button {
            padding-left: unset;
            padding-right: 10px
        }

        @-webkit-keyframes scale-x-frames {
            0% {
                transform: scaleX(1)
            }

            to {
                transform: scaleX(0)
            }
        }

        @keyframes scale-x-frames {
            0% {
                transform: scaleX(1)
            }

            to {
                transform: scaleX(0)
            }
        }

        .Vue-Toastification__progress-bar {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 5px;
            z-index: 10000;
            background-color: hsla(0, 0%, 100%, .7);
            transform-origin: left;
            -webkit-animation: scale-x-frames linear 1 forwards;
            animation: scale-x-frames linear 1 forwards
        }

        .Vue-Toastification__toast--rtl .Vue-Toastification__progress-bar {
            right: 0;
            left: unset;
            transform-origin: right
        }

        .Vue-Toastification__icon {
            margin: auto 18px auto 0;
            background: 0 0;
            outline: 0;
            border: none;
            padding: 0;
            transition: .3s ease;
            align-items: center;
            width: 20px;
            height: 100%
        }

        .Vue-Toastification__toast--rtl .Vue-Toastification__icon {
            margin: auto 0 auto 18px
        }

        @-webkit-keyframes bounceInRight {

            0%,
            60%,
            75%,
            90%,
            to {
                -webkit-animation-timing-function: cubic-bezier(.215, .61, .355, 1);
                animation-timing-function: cubic-bezier(.215, .61, .355, 1)
            }

            0% {
                opacity: 0;
                transform: translate3d(3000px, 0, 0)
            }

            60% {
                opacity: 1;
                transform: translate3d(-25px, 0, 0)
            }

            75% {
                transform: translate3d(10px, 0, 0)
            }

            90% {
                transform: translate3d(-5px, 0, 0)
            }

            to {
                transform: none
            }
        }

        @keyframes bounceInRight {

            0%,
            60%,
            75%,
            90%,
            to {
                -webkit-animation-timing-function: cubic-bezier(.215, .61, .355, 1);
                animation-timing-function: cubic-bezier(.215, .61, .355, 1)
            }

            0% {
                opacity: 0;
                transform: translate3d(3000px, 0, 0)
            }

            60% {
                opacity: 1;
                transform: translate3d(-25px, 0, 0)
            }

            75% {
                transform: translate3d(10px, 0, 0)
            }

            90% {
                transform: translate3d(-5px, 0, 0)
            }

            to {
                transform: none
            }
        }

        @-webkit-keyframes bounceOutRight {
            40% {
                opacity: 1;
                transform: translate3d(-20px, 0, 0)
            }

            to {
                opacity: 0;
                transform: translate3d(1000px, 0, 0)
            }
        }

        @keyframes bounceOutRight {
            40% {
                opacity: 1;
                transform: translate3d(-20px, 0, 0)
            }

            to {
                opacity: 0;
                transform: translate3d(1000px, 0, 0)
            }
        }

        @-webkit-keyframes bounceInLeft {

            0%,
            60%,
            75%,
            90%,
            to {
                -webkit-animation-timing-function: cubic-bezier(.215, .61, .355, 1);
                animation-timing-function: cubic-bezier(.215, .61, .355, 1)
            }

            0% {
                opacity: 0;
                transform: translate3d(-3000px, 0, 0)
            }

            60% {
                opacity: 1;
                transform: translate3d(25px, 0, 0)
            }

            75% {
                transform: translate3d(-10px, 0, 0)
            }

            90% {
                transform: translate3d(5px, 0, 0)
            }

            to {
                transform: none
            }
        }

        @keyframes bounceInLeft {

            0%,
            60%,
            75%,
            90%,
            to {
                -webkit-animation-timing-function: cubic-bezier(.215, .61, .355, 1);
                animation-timing-function: cubic-bezier(.215, .61, .355, 1)
            }

            0% {
                opacity: 0;
                transform: translate3d(-3000px, 0, 0)
            }

            60% {
                opacity: 1;
                transform: translate3d(25px, 0, 0)
            }

            75% {
                transform: translate3d(-10px, 0, 0)
            }

            90% {
                transform: translate3d(5px, 0, 0)
            }

            to {
                transform: none
            }
        }

        @-webkit-keyframes bounceOutLeft {
            20% {
                opacity: 1;
                transform: translate3d(20px, 0, 0)
            }

            to {
                opacity: 0;
                transform: translate3d(-2000px, 0, 0)
            }
        }

        @keyframes bounceOutLeft {
            20% {
                opacity: 1;
                transform: translate3d(20px, 0, 0)
            }

            to {
                opacity: 0;
                transform: translate3d(-2000px, 0, 0)
            }
        }

        @-webkit-keyframes bounceInUp {

            0%,
            60%,
            75%,
            90%,
            to {
                -webkit-animation-timing-function: cubic-bezier(.215, .61, .355, 1);
                animation-timing-function: cubic-bezier(.215, .61, .355, 1)
            }

            0% {
                opacity: 0;
                transform: translate3d(0, 3000px, 0)
            }

            60% {
                opacity: 1;
                transform: translate3d(0, -20px, 0)
            }

            75% {
                transform: translate3d(0, 10px, 0)
            }

            90% {
                transform: translate3d(0, -5px, 0)
            }

            to {
                transform: translateZ(0)
            }
        }

        @keyframes bounceInUp {

            0%,
            60%,
            75%,
            90%,
            to {
                -webkit-animation-timing-function: cubic-bezier(.215, .61, .355, 1);
                animation-timing-function: cubic-bezier(.215, .61, .355, 1)
            }

            0% {
                opacity: 0;
                transform: translate3d(0, 3000px, 0)
            }

            60% {
                opacity: 1;
                transform: translate3d(0, -20px, 0)
            }

            75% {
                transform: translate3d(0, 10px, 0)
            }

            90% {
                transform: translate3d(0, -5px, 0)
            }

            to {
                transform: translateZ(0)
            }
        }

        @-webkit-keyframes bounceOutUp {
            20% {
                transform: translate3d(0, -10px, 0)
            }

            40%,
            45% {
                opacity: 1;
                transform: translate3d(0, 20px, 0)
            }

            to {
                opacity: 0;
                transform: translate3d(0, -2000px, 0)
            }
        }

        @keyframes bounceOutUp {
            20% {
                transform: translate3d(0, -10px, 0)
            }

            40%,
            45% {
                opacity: 1;
                transform: translate3d(0, 20px, 0)
            }

            to {
                opacity: 0;
                transform: translate3d(0, -2000px, 0)
            }
        }

        @-webkit-keyframes bounceInDown {

            0%,
            60%,
            75%,
            90%,
            to {
                -webkit-animation-timing-function: cubic-bezier(.215, .61, .355, 1);
                animation-timing-function: cubic-bezier(.215, .61, .355, 1)
            }

            0% {
                opacity: 0;
                transform: translate3d(0, -3000px, 0)
            }

            60% {
                opacity: 1;
                transform: translate3d(0, 25px, 0)
            }

            75% {
                transform: translate3d(0, -10px, 0)
            }

            90% {
                transform: translate3d(0, 5px, 0)
            }

            to {
                transform: none
            }
        }

        @keyframes bounceInDown {

            0%,
            60%,
            75%,
            90%,
            to {
                -webkit-animation-timing-function: cubic-bezier(.215, .61, .355, 1);
                animation-timing-function: cubic-bezier(.215, .61, .355, 1)
            }

            0% {
                opacity: 0;
                transform: translate3d(0, -3000px, 0)
            }

            60% {
                opacity: 1;
                transform: translate3d(0, 25px, 0)
            }

            75% {
                transform: translate3d(0, -10px, 0)
            }

            90% {
                transform: translate3d(0, 5px, 0)
            }

            to {
                transform: none
            }
        }

        @-webkit-keyframes bounceOutDown {
            20% {
                transform: translate3d(0, 10px, 0)
            }

            40%,
            45% {
                opacity: 1;
                transform: translate3d(0, -20px, 0)
            }

            to {
                opacity: 0;
                transform: translate3d(0, 2000px, 0)
            }
        }

        @keyframes bounceOutDown {
            20% {
                transform: translate3d(0, 10px, 0)
            }

            40%,
            45% {
                opacity: 1;
                transform: translate3d(0, -20px, 0)
            }

            to {
                opacity: 0;
                transform: translate3d(0, 2000px, 0)
            }
        }

        .Vue-Toastification__bounce-enter-active.bottom-left,
        .Vue-Toastification__bounce-enter-active.top-left {
            -webkit-animation-name: bounceInLeft;
            animation-name: bounceInLeft
        }

        .Vue-Toastification__bounce-enter-active.bottom-right,
        .Vue-Toastification__bounce-enter-active.top-right {
            -webkit-animation-name: bounceInRight;
            animation-name: bounceInRight
        }

        .Vue-Toastification__bounce-enter-active.top-center {
            -webkit-animation-name: bounceInDown;
            animation-name: bounceInDown
        }

        .Vue-Toastification__bounce-enter-active.bottom-center {
            -webkit-animation-name: bounceInUp;
            animation-name: bounceInUp
        }

        .Vue-Toastification__bounce-leave-active.bottom-left,
        .Vue-Toastification__bounce-leave-active.top-left {
            -webkit-animation-name: bounceOutLeft;
            animation-name: bounceOutLeft
        }

        .Vue-Toastification__bounce-leave-active.bottom-right,
        .Vue-Toastification__bounce-leave-active.top-right {
            -webkit-animation-name: bounceOutRight;
            animation-name: bounceOutRight
        }

        .Vue-Toastification__bounce-leave-active.top-center {
            -webkit-animation-name: bounceOutUp;
            animation-name: bounceOutUp
        }

        .Vue-Toastification__bounce-leave-active.bottom-center {
            -webkit-animation-name: bounceOutDown;
            animation-name: bounceOutDown
        }

        .Vue-Toastification__bounce-move {
            transition-timing-function: ease-in-out;
            transition-property: all;
            transition-duration: .4s
        }

        @-webkit-keyframes fadeOutTop {
            0% {
                transform: translateY(0);
                opacity: 1
            }

            to {
                transform: translateY(-50px);
                opacity: 0
            }
        }

        @keyframes fadeOutTop {
            0% {
                transform: translateY(0);
                opacity: 1
            }

            to {
                transform: translateY(-50px);
                opacity: 0
            }
        }

        @-webkit-keyframes fadeOutLeft {
            0% {
                transform: translateX(0);
                opacity: 1
            }

            to {
                transform: translateX(-50px);
                opacity: 0
            }
        }

        @keyframes fadeOutLeft {
            0% {
                transform: translateX(0);
                opacity: 1
            }

            to {
                transform: translateX(-50px);
                opacity: 0
            }
        }

        @-webkit-keyframes fadeOutBottom {
            0% {
                transform: translateY(0);
                opacity: 1
            }

            to {
                transform: translateY(50px);
                opacity: 0
            }
        }

        @keyframes fadeOutBottom {
            0% {
                transform: translateY(0);
                opacity: 1
            }

            to {
                transform: translateY(50px);
                opacity: 0
            }
        }

        @-webkit-keyframes fadeOutRight {
            0% {
                transform: translateX(0);
                opacity: 1
            }

            to {
                transform: translateX(50px);
                opacity: 0
            }
        }

        @keyframes fadeOutRight {
            0% {
                transform: translateX(0);
                opacity: 1
            }

            to {
                transform: translateX(50px);
                opacity: 0
            }
        }

        @-webkit-keyframes fadeInLeft {
            0% {
                transform: translateX(-50px);
                opacity: 0
            }

            to {
                transform: translateX(0);
                opacity: 1
            }
        }

        @keyframes fadeInLeft {
            0% {
                transform: translateX(-50px);
                opacity: 0
            }

            to {
                transform: translateX(0);
                opacity: 1
            }
        }

        @-webkit-keyframes fadeInRight {
            0% {
                transform: translateX(50px);
                opacity: 0
            }

            to {
                transform: translateX(0);
                opacity: 1
            }
        }

        @keyframes fadeInRight {
            0% {
                transform: translateX(50px);
                opacity: 0
            }

            to {
                transform: translateX(0);
                opacity: 1
            }
        }

        @-webkit-keyframes fadeInTop {
            0% {
                transform: translateY(-50px);
                opacity: 0
            }

            to {
                transform: translateY(0);
                opacity: 1
            }
        }

        @keyframes fadeInTop {
            0% {
                transform: translateY(-50px);
                opacity: 0
            }

            to {
                transform: translateY(0);
                opacity: 1
            }
        }

        @-webkit-keyframes fadeInBottom {
            0% {
                transform: translateY(50px);
                opacity: 0
            }

            to {
                transform: translateY(0);
                opacity: 1
            }
        }

        @keyframes fadeInBottom {
            0% {
                transform: translateY(50px);
                opacity: 0
            }

            to {
                transform: translateY(0);
                opacity: 1
            }
        }

        .Vue-Toastification__fade-enter-active.bottom-left,
        .Vue-Toastification__fade-enter-active.top-left {
            -webkit-animation-name: fadeInLeft;
            animation-name: fadeInLeft
        }

        .Vue-Toastification__fade-enter-active.bottom-right,
        .Vue-Toastification__fade-enter-active.top-right {
            -webkit-animation-name: fadeInRight;
            animation-name: fadeInRight
        }

        .Vue-Toastification__fade-enter-active.top-center {
            -webkit-animation-name: fadeInTop;
            animation-name: fadeInTop
        }

        .Vue-Toastification__fade-enter-active.bottom-center {
            -webkit-animation-name: fadeInBottom;
            animation-name: fadeInBottom
        }

        .Vue-Toastification__fade-leave-active.bottom-left,
        .Vue-Toastification__fade-leave-active.top-left {
            -webkit-animation-name: fadeOutLeft;
            animation-name: fadeOutLeft
        }

        .Vue-Toastification__fade-leave-active.bottom-right,
        .Vue-Toastification__fade-leave-active.top-right {
            -webkit-animation-name: fadeOutRight;
            animation-name: fadeOutRight
        }

        .Vue-Toastification__fade-leave-active.top-center {
            -webkit-animation-name: fadeOutTop;
            animation-name: fadeOutTop
        }

        .Vue-Toastification__fade-leave-active.bottom-center {
            -webkit-animation-name: fadeOutBottom;
            animation-name: fadeOutBottom
        }

        .Vue-Toastification__fade-move {
            transition-timing-function: ease-in-out;
            transition-property: all;
            transition-duration: .4s
        }

        @-webkit-keyframes slideInBlurredLeft {
            0% {
                transform: translateX(-1000px) scaleX(2.5) scaleY(.2);
                transform-origin: 100% 50%;
                filter: blur(40px);
                opacity: 0
            }

            to {
                transform: translateX(0) scaleY(1) scaleX(1);
                transform-origin: 50% 50%;
                filter: blur(0);
                opacity: 1
            }
        }

        @keyframes slideInBlurredLeft {
            0% {
                transform: translateX(-1000px) scaleX(2.5) scaleY(.2);
                transform-origin: 100% 50%;
                filter: blur(40px);
                opacity: 0
            }

            to {
                transform: translateX(0) scaleY(1) scaleX(1);
                transform-origin: 50% 50%;
                filter: blur(0);
                opacity: 1
            }
        }

        @-webkit-keyframes slideInBlurredTop {
            0% {
                transform: translateY(-1000px) scaleY(2.5) scaleX(.2);
                transform-origin: 50% 0;
                filter: blur(240px);
                opacity: 0
            }

            to {
                transform: translateY(0) scaleY(1) scaleX(1);
                transform-origin: 50% 50%;
                filter: blur(0);
                opacity: 1
            }
        }

        @keyframes slideInBlurredTop {
            0% {
                transform: translateY(-1000px) scaleY(2.5) scaleX(.2);
                transform-origin: 50% 0;
                filter: blur(240px);
                opacity: 0
            }

            to {
                transform: translateY(0) scaleY(1) scaleX(1);
                transform-origin: 50% 50%;
                filter: blur(0);
                opacity: 1
            }
        }

        @-webkit-keyframes slideInBlurredRight {
            0% {
                transform: translateX(1000px) scaleX(2.5) scaleY(.2);
                transform-origin: 0 50%;
                filter: blur(40px);
                opacity: 0
            }

            to {
                transform: translateX(0) scaleY(1) scaleX(1);
                transform-origin: 50% 50%;
                filter: blur(0);
                opacity: 1
            }
        }

        @keyframes slideInBlurredRight {
            0% {
                transform: translateX(1000px) scaleX(2.5) scaleY(.2);
                transform-origin: 0 50%;
                filter: blur(40px);
                opacity: 0
            }

            to {
                transform: translateX(0) scaleY(1) scaleX(1);
                transform-origin: 50% 50%;
                filter: blur(0);
                opacity: 1
            }
        }

        @-webkit-keyframes slideInBlurredBottom {
            0% {
                transform: translateY(1000px) scaleY(2.5) scaleX(.2);
                transform-origin: 50% 100%;
                filter: blur(240px);
                opacity: 0
            }

            to {
                transform: translateY(0) scaleY(1) scaleX(1);
                transform-origin: 50% 50%;
                filter: blur(0);
                opacity: 1
            }
        }

        @keyframes slideInBlurredBottom {
            0% {
                transform: translateY(1000px) scaleY(2.5) scaleX(.2);
                transform-origin: 50% 100%;
                filter: blur(240px);
                opacity: 0
            }

            to {
                transform: translateY(0) scaleY(1) scaleX(1);
                transform-origin: 50% 50%;
                filter: blur(0);
                opacity: 1
            }
        }

        @-webkit-keyframes slideOutBlurredTop {
            0% {
                transform: translateY(0) scaleY(1) scaleX(1);
                transform-origin: 50% 0;
                filter: blur(0);
                opacity: 1
            }

            to {
                transform: translateY(-1000px) scaleY(2) scaleX(.2);
                transform-origin: 50% 0;
                filter: blur(240px);
                opacity: 0
            }
        }

        @keyframes slideOutBlurredTop {
            0% {
                transform: translateY(0) scaleY(1) scaleX(1);
                transform-origin: 50% 0;
                filter: blur(0);
                opacity: 1
            }

            to {
                transform: translateY(-1000px) scaleY(2) scaleX(.2);
                transform-origin: 50% 0;
                filter: blur(240px);
                opacity: 0
            }
        }

        @-webkit-keyframes slideOutBlurredBottom {
            0% {
                transform: translateY(0) scaleY(1) scaleX(1);
                transform-origin: 50% 50%;
                filter: blur(0);
                opacity: 1
            }

            to {
                transform: translateY(1000px) scaleY(2) scaleX(.2);
                transform-origin: 50% 100%;
                filter: blur(240px);
                opacity: 0
            }
        }

        @keyframes slideOutBlurredBottom {
            0% {
                transform: translateY(0) scaleY(1) scaleX(1);
                transform-origin: 50% 50%;
                filter: blur(0);
                opacity: 1
            }

            to {
                transform: translateY(1000px) scaleY(2) scaleX(.2);
                transform-origin: 50% 100%;
                filter: blur(240px);
                opacity: 0
            }
        }

        @-webkit-keyframes slideOutBlurredLeft {
            0% {
                transform: translateX(0) scaleY(1) scaleX(1);
                transform-origin: 50% 50%;
                filter: blur(0);
                opacity: 1
            }

            to {
                transform: translateX(-1000px) scaleX(2) scaleY(.2);
                transform-origin: 100% 50%;
                filter: blur(40px);
                opacity: 0
            }
        }

        @keyframes slideOutBlurredLeft {
            0% {
                transform: translateX(0) scaleY(1) scaleX(1);
                transform-origin: 50% 50%;
                filter: blur(0);
                opacity: 1
            }

            to {
                transform: translateX(-1000px) scaleX(2) scaleY(.2);
                transform-origin: 100% 50%;
                filter: blur(40px);
                opacity: 0
            }
        }

        @-webkit-keyframes slideOutBlurredRight {
            0% {
                transform: translateX(0) scaleY(1) scaleX(1);
                transform-origin: 50% 50%;
                filter: blur(0);
                opacity: 1
            }

            to {
                transform: translateX(1000px) scaleX(2) scaleY(.2);
                transform-origin: 0 50%;
                filter: blur(40px);
                opacity: 0
            }
        }

        @keyframes slideOutBlurredRight {
            0% {
                transform: translateX(0) scaleY(1) scaleX(1);
                transform-origin: 50% 50%;
                filter: blur(0);
                opacity: 1
            }

            to {
                transform: translateX(1000px) scaleX(2) scaleY(.2);
                transform-origin: 0 50%;
                filter: blur(40px);
                opacity: 0
            }
        }

        .Vue-Toastification__slideBlurred-enter-active.bottom-left,
        .Vue-Toastification__slideBlurred-enter-active.top-left {
            -webkit-animation-name: slideInBlurredLeft;
            animation-name: slideInBlurredLeft
        }

        .Vue-Toastification__slideBlurred-enter-active.bottom-right,
        .Vue-Toastification__slideBlurred-enter-active.top-right {
            -webkit-animation-name: slideInBlurredRight;
            animation-name: slideInBlurredRight
        }

        .Vue-Toastification__slideBlurred-enter-active.top-center {
            -webkit-animation-name: slideInBlurredTop;
            animation-name: slideInBlurredTop
        }

        .Vue-Toastification__slideBlurred-enter-active.bottom-center {
            -webkit-animation-name: slideInBlurredBottom;
            animation-name: slideInBlurredBottom
        }

        .Vue-Toastification__slideBlurred-leave-active.bottom-left,
        .Vue-Toastification__slideBlurred-leave-active.top-left {
            -webkit-animation-name: slideOutBlurredLeft;
            animation-name: slideOutBlurredLeft
        }

        .Vue-Toastification__slideBlurred-leave-active.bottom-right,
        .Vue-Toastification__slideBlurred-leave-active.top-right {
            -webkit-animation-name: slideOutBlurredRight;
            animation-name: slideOutBlurredRight
        }

        .Vue-Toastification__slideBlurred-leave-active.top-center {
            -webkit-animation-name: slideOutBlurredTop;
            animation-name: slideOutBlurredTop
        }

        .Vue-Toastification__slideBlurred-leave-active.bottom-center {
            -webkit-animation-name: slideOutBlurredBottom;
            animation-name: slideOutBlurredBottom
        }

        .Vue-Toastification__slideBlurred-move {
            transition-timing-function: ease-in-out;
            transition-property: all;
            transition-duration: .4s
        }

        .vue-modal-bottom,
        .vue-modal-bottomLeft,
        .vue-modal-bottomRight,
        .vue-modal-left,
        .vue-modal-right,
        .vue-modal-top,
        .vue-modal-topLeft,
        .vue-modal-topRight {
            display: block;
            overflow: hidden;
            position: absolute;
            background: 0 0;
            z-index: 9999999
        }

        .vue-modal-bottomLeft,
        .vue-modal-bottomRight,
        .vue-modal-topLeft,
        .vue-modal-topRight {
            width: 12px;
            height: 12px
        }

        .vue-modal-top {
            right: 12;
            top: 0;
            width: 100%;
            height: 12px;
            cursor: n-resize
        }

        .vue-modal-bottom {
            left: 0;
            bottom: 0;
            width: 100%;
            height: 12px;
            cursor: s-resize
        }

        .vue-modal-left {
            left: 0;
            top: 0;
            width: 12px;
            height: 100%;
            cursor: w-resize
        }

        .vue-modal-right {
            right: 0;
            top: 0;
            width: 12px;
            height: 100%;
            cursor: e-resize
        }

        .vue-modal-topRight {
            right: 0;
            top: 0;
            background: 0 0;
            cursor: ne-resize
        }

        .vue-modal-topLeft {
            left: 0;
            top: 0;
            cursor: nw-resize
        }

        .vue-modal-bottomLeft {
            left: 0;
            bottom: 0;
            cursor: sw-resize
        }

        .vue-modal-bottomRight {
            right: 0;
            bottom: 0;
            cursor: se-resize
        }

        #vue-modal-triangle:after {
            display: block;
            position: absolute;
            content: "";
            background: 0 0;
            left: 0;
            top: 0;
            width: 0;
            height: 0;
            border-bottom: 10px solid #ddd;
            border-left: 10px solid transparent
        }

        #vue-modal-triangle.clicked:after {
            border-bottom: 10px solid #369be9
        }

        .vm--block-scroll {
            overflow: hidden;
            width: 100vw
        }

        .vm--container {
            z-index: 999
        }

        .vm--container,
        .vm--overlay {
            position: fixed;
            box-sizing: border-box;
            left: 0;
            top: 0;
            width: 100%;
            height: 100vh
        }

        .vm--overlay {
            background: rgba(0, 0, 0, .2);
            opacity: 1
        }

        .vm--container.scrollable {
            height: 100%;
            min-height: 100vh;
            overflow-y: auto;
            -webkit-overflow-scrolling: touch
        }

        .vm--modal {
            position: relative;
            overflow: hidden;
            box-sizing: border-box;
            background-color: #fff;
            border-radius: 3px;
            box-shadow: 0 20px 60px -2px rgba(27, 33, 58, .4)
        }

        .vm--container.scrollable .vm--modal {
            margin-bottom: 2px
        }

        .vm--top-right-slot {
            display: block;
            position: absolute;
            right: 0;
            top: 0
        }

        .vm-transition--overlay-enter-active,
        .vm-transition--overlay-leave-active {
            transition: all 50ms
        }

        .vm-transition--overlay-enter,
        .vm-transition--overlay-leave-active {
            opacity: 0
        }

        .vm-transition--modal-enter-active,
        .vm-transition--modal-leave-active {
            transition: all .4s
        }

        .vm-transition--modal-enter,
        .vm-transition--modal-leave-active {
            opacity: 0;
            transform: translateY(-20px)
        }

        .vm-transition--default-enter-active,
        .vm-transition--default-leave-active {
            transition: all 2ms
        }

        .vm-transition--default-enter,
        .vm-transition--default-leave-active {
            opacity: 0
        }

        .vue-dialog {
            font-size: 14px
        }

        .vue-dialog div {
            box-sizing: border-box
        }

        .vue-dialog-content {
            flex: 1 0 auto;
            width: 100%;
            padding: 14px
        }

        .vue-dialog-content-title {
            font-weight: 600;
            padding-bottom: 14px
        }

        .vue-dialog-buttons {
            display: flex;
            flex: 0 1 auto;
            width: 100%;
            border-top: 1px solid #eee
        }

        .vue-dialog-buttons-none {
            width: 100%;
            padding-bottom: 14px
        }

        .vue-dialog-button {
            font-size: inherit;
            background: 0 0;
            padding: 0;
            margin: 0;
            border: 0;
            cursor: pointer;
            box-sizing: border-box;
            line-height: 40px;
            height: 40px;
            color: inherit;
            font: inherit;
            outline: 0
        }

        .vue-dialog-button:hover {
            background: #f9f9f9
        }

        .vue-dialog-button:active {
            background: #f3f3f3
        }

        .vue-dialog-button:not(:first-of-type) {
            border-left: 1px solid #eee
        }

        .pcr-app[data-v-e6131698] {
            display: none !important
        }

    </style>
    <link rel="preload" href="https://usefulpdf.com/_nuxt/static/1638430657/payload.js" as="script">
    <link rel="preload" href="https://usefulpdf.com/manifest.js.download" as="script">
    <script charset="utf-8" src="https://usefulpdf.com/manifest.js"></script>
    <script charset="utf-8" src="https://usefulpdf.com/878e213.js"></script>
    <script charset="utf-8" src="https://usefulpdf.com/347f2f7.js"></script>
    <script charset="utf-8" src="https://usefulpdf.com/18ca9b0.js"></script>
    <script charset="utf-8" src="https://usefulpdf.com/a04a754.js"></script>
    <script charset="utf-8" src="https://usefulpdf.com/b1fd8bd.js"></script>
    <script charset="utf-8" src="https://usefulpdf.com/17638bd.js"></script>
    <script charset="utf-8" src="https://usefulpdf.com/f20f1bf.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script charset="utf-8" src="https://usefulpdf.com/459ee9d.js"></script>
    <script charset="utf-8" src="https://usefulpdf.com/260fb2a.js"></script>
    <style type="text/css">
        .dropdown-toggle[data-v-1e8f6f5e]:after {
            display: none !important
        }

        .dropdown-menu.show[data-v-1e8f6f5e] {
            padding-top: 0 !important;
            padding-bottom: 0 !important
        }

        .dropdown-menu.show a[data-v-1e8f6f5e]:hover {
            background-color: #f3f3f3 !important
        }

        #category-template-menu[data-v-1e8f6f5e] {
            border-top: 9px solid var(--secondaryGreen)
        }

        .template-category-menu-item[data-v-1e8f6f5e] {
            white-space: normal !important
        }

        #extra-info[data-v-1e8f6f5e] {
            background: #eff8fa
        }

        @media screen and (max-width:768px) {
            .template-category-menu-item[data-v-1e8f6f5e] {
                white-space: nowrap !important
            }
        }

    </style>
    <style type="text/css">
        #hideModalBtn[data-v-553b44e5] {
            text-transform: uppercase !important
        }

        .download-modal[data-v-553b44e5] {
            border: 1rem !important
        }

    </style>
    <style type="text/css">
        h1[data-v-7e12c5d1],
        h1 span[data-v-7e12c5d1],
        h2[data-v-7e12c5d1],
        h2 span[data-v-7e12c5d1],
        h3[data-v-7e12c5d1],
        h3 span[data-v-7e12c5d1],
        h4[data-v-7e12c5d1],
        h4 span[data-v-7e12c5d1],
        h5[data-v-7e12c5d1],
        h5 span[data-v-7e12c5d1],
        h6[data-v-7e12c5d1],
        h6 span[data-v-7e12c5d1] {
            font-family: var(--titleFont) !important
        }

        .sticky-download-section[data-v-7e12c5d1] {
            position: -webkit-sticky;
            position: sticky;
            top: 14rem;
            z-index: 800
        }

        .dropdown-toggle[data-v-7e12c5d1]:after {
            display: none !important
        }

        .related-template-divider[data-v-7e12c5d1] {
            height: 1px;
            background: hsla(0, 0%, 74.9%, .55)
        }

        .dropdown-menu.show[data-v-7e12c5d1] {
            padding-top: 0 !important;
            padding-bottom: 0 !important
        }

        .dropdown-menu.show a[data-v-7e12c5d1]:hover {
            background-color: #f3f3f3 !important
        }

        #category-template-menu[data-v-7e12c5d1] {
            border-top: 9px solid var(--secondaryGreen)
        }

        #extra-info[data-v-7e12c5d1] {
            background-image: url(/_nuxt/img/contract-bg.ade14ea.png);
            background-size: cover
        }

        @media screen and (max-width:768px) {
            .template-category-menu-item[data-v-7e12c5d1] {
                white-space: nowrap !important
            }
        }

    </style>
    <script type="text/javascript" src="chrome-extension://gpaghdfobahiicbgkdlmcfmphnhagkci/inject.js"></script>
    <link rel="canonical" type="image/x-icon" href="https://usefulpdf.com/bill-of-sale">
    <meta data-hid="description" name="description"
        content="Get access to hundreds of bill of sale templates categorized by use case and state so you can create a rock-solid agreement in minutes.">
    <meta data-hid="image" name="image" content="https://cdn.usefulpdf.com/strapi/66c9a38c48f72e9116453c9f6acdf39c.jpg">
</head>


<body data-new-gr-c-s-check-loaded="14.1003.0" data-gr-ext-installed="">
    <div id="__nuxt">
        <div id="__layout">
            <div data-v-e6131698="">
                <section data-v-e6131698="" class="cookieControl">
                    <!---->
                    <!---->
                    <!---->
                </section>
                <header class="us-header" data-v-e6131698="">
                    <nav class="us-nav container-fluid" data-v-e6131698="">
                        <div class="us-nav--brand col-auto p-0" data-v-e6131698=""><a href="https://usefulpdf.com/"
                                aria-current="page" class="us-nav--menu-link nuxt-link-exact-active nuxt-link-active"
                                data-v-e6131698=""><img alt="" data-v-e6131698="" class="lazyLoad isLoaded"
                                    src="./Electronic signature and document generation software _ UsefulPDF_files/logo.939a269.png"></a>
                        </div>
                        <div class="mobile-nav-toggle" data-v-e6131698=""><a href="javascript:void(0)"
                                class="toggleNav" data-v-e6131698=""><span data-v-e6131698=""></span> <span
                                    data-v-e6131698=""></span>
                                <span data-v-e6131698=""></span></a></div>
                        <div class="col p-0 pr-5 d-flex justify-content-end align-items-center us-nav--menu-holder"
                            data-v-e6131698="">
                            <ul class="us-nav--menu" data-v-e6131698="">
                                <li class="us-nav--menu-list" data-v-e6131698=""><a href="https://usefulpdf.com/"
                                        aria-current="page"
                                        class="us-nav--menu-link nuxt-link-exact-active nuxt-link-active"
                                        data-v-e6131698="">Home</a></li>
                                <li class="us-nav--menu-list" data-v-e6131698=""><a href="https://usefulpdf.com/about"
                                        class="us-nav--menu-link" data-v-e6131698="">About</a></li>
                                <li class="us-nav--menu-list" data-v-e6131698=""><a
                                        href="https://usefulpdf.com/document-generation" class="us-nav--menu-link"
                                        data-v-e6131698="">Create Documents</a></li>
                                <li class="us-nav--menu-list" data-v-e6131698="">
                                    <div class="dropdown" data-v-e6131698=""><a href="https://usefulpdf.com/#!"
                                            class="us-nav--menu-link d-flex align-items-center" data-v-e6131698="">eSign
                                            Documents <i class="ti-angle-down ml-1" data-v-e6131698=""></i></a>
                                        <div class="us-dropdown dropdown-content" style="min-width:300px"
                                            data-v-e6131698="">
                                            <div class="caret" data-v-e6131698=""></div>
                                            <div class="row" data-v-e6131698="">
                                                <div class="p-2" data-v-e6131698=""><a
                                                        href="https://usefulpdf.com/electronic-signature"
                                                        class="dropdown-content-link" data-v-e6131698="">Electronic
                                                        Signature</a> <a href="https://usefulpdf.com/signature-creator"
                                                        class="dropdown-content-link" data-v-e6131698="">Free Online
                                                        Signature Creator</a> <a href="{{ route('contracts') }}"
                                                        class="dropdown-content-link" data-v-e6131698="">Contract
                                                        templates</a> <a href="https://usefulpdf.com/use-case"
                                                        class="dropdown-content-link" data-v-e6131698="">Use Cases</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </header>

                @yield('content')

                <footer class="us-footer has-cta" data-v-e6131698="">
                    <div class="cta-zig" data-v-e6131698=""><img
                            data-src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjk4IiBoZWlnaHQ9IjI4MCIgdmlld0JveD0iMCAwIDI5OCAyODAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxwYXRoIGQ9Ik0yMDkuODk4IDg4LjAwODRDMjMyLjMgMTEwLjg5OCAyNTcuNTk5IDEzNC4xNDMgMjc3LjgyMyAxNTguNTE4QzI4My44MzggMTY1Ljc2NyAyODMuNTcgMTY2LjM5NiAyNzQuMDQxIDE2NC4xMTdDMjU3LjI3OCAxNjAuMTA3IDIzMC4xNTggMTQ5Ljg0OCAyMTUuNDE5IDE0NC40MjNDMTgwLjQ3NyAxMzEuNTYyIDE0NC43OTYgMTE1LjY4MiAxMDkuNjg4IDEwNS45NDdDOTAuMjM2OSAxMDAuNTUzIDExOC42MDYgMTE4LjYgMTIxLjU3OSAxMjAuODY2QzEyNC43NyAxMjMuMjk4IDE4My40ODEgMTY3LjIxMSAxNzYuOTQyIDE3MC4yMzRDMTcxLjMyNSAxNzIuODMxIDE2MS45IDE2Ny44NDggMTU0LjI5NSAxNjUuNTAyQzEzOC44NTggMTYwLjc0MiAxMjMuNDcgMTU0LjQwNCAxMDguMDUgMTQ4Ljk4OEM4Ny4zNzUxIDE0MS43MjYgNDMuNzQ2NiAxMjUuMzAxIDIwLjYyOTIgMTIxLjk1MkMtMTYuMjE5OCAxMTYuNjE0IDU0Ljg4MDIgMTY3LjM1MSA1OC4xNDAyIDE2OS44OThDOTIuNjE3MSAxOTYuODM0IDEyNy45NTMgMjIyLjU2NCAxNjMuMTUgMjQ4LjUyOSIgc3Ryb2tlPSIjRjlGOUZBIiBzdHJva2Utd2lkdGg9IjYiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIvPgo8L3N2Zz4K"
                            alt="" data-v-e6131698="" class="lazyLoad"></div>
                    <div class="footer-circle" data-v-e6131698=""><img
                            data-src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDQ0IiBoZWlnaHQ9IjUwNCIgdmlld0JveD0iMCAwIDQ0NCA1MDQiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxjaXJjbGUgY3g9IjM1OS41IiBjeT0iMzU5LjUiIHI9IjM1OS41IiBmaWxsPSIjMkRBRTdBIiBmaWxsLW9wYWNpdHk9IjAuMSIvPgo8L3N2Zz4K"
                            alt="" data-v-e6131698="" class="lazyLoad"></div>
                    <div class="container-fluid" data-v-e6131698="">
                        <div class="col-lg-10 mx-auto" data-v-e6131698="">
                            <div class="row" data-v-e6131698="">
                                <div class="col-lg-3" data-v-e6131698="">
                                    <div class="us-footer-menu" data-v-e6131698="">
                                        <h3 class="us-footer-menu--header h4-title" data-v-e6131698="">Company</h3>
                                        <div class="us-footer-menu--links" data-v-e6131698=""><a
                                                href="https://usefulpdf.com/about" data-v-e6131698=""
                                                class="">About
                                            </a> <a href="https://usefulpdf.com/privacy-policy" data-v-e6131698=""
                                                class="">Privacy Policy</a> <a
                                                href="https://usefulpdf.com/terms-of-service" data-v-e6131698=""
                                                class="">Terms of Service</a> <a
                                                href="https://usefulpdf.com/contact" data-v-e6131698=""
                                                class="">Contact us</a></div>
                                    </div>
                                </div>
                                <div class="col-lg-3" data-v-e6131698="">
                                    <div class="us-footer-menu" data-v-e6131698="">
                                        <h3 class="us-footer-menu--header h4-title" data-v-e6131698="">
                                            Electronic Signature
                                        </h3>
                                        <div class="us-footer-menu--links" data-v-e6131698=""><a
                                                href="https://usefulpdf.com/electronic-signature" data-v-e6131698=""
                                                class="">Electronic Signature</a> <a
                                                href="https://usefulpdf.com/signature-creator" data-v-e6131698=""
                                                class="">Free Online Singature Creator</a> <a
                                                href="https://usefulpdf.com/use-case" data-v-e6131698=""
                                                class="">Use
                                                cases</a></div>
                                    </div>
                                </div>
                                <div class="col-lg-3" data-v-e6131698="">
                                    <div class="us-footer-menu" data-v-e6131698="">
                                        <h3 class="us-footer-menu--header h4-title" data-v-e6131698="">
                                            Document Generation
                                        </h3>
                                        <div class="us-footer-menu--links" data-v-e6131698=""><a
                                                href="https://usefulpdf.com/contracts" data-v-e6131698=""
                                                class="">All
                                                Templates</a> <a href="https://usefulpdf.com/power-of-attorney"
                                                data-v-e6131698="" class="">Power of Attorney</a> <a
                                                href="https://usefulpdf.com/rental-lease" data-v-e6131698=""
                                                class="">Lease agreement</a> <a
                                                href="https://usefulpdf.com/eviction" data-v-e6131698=""
                                                class="">Eviction Notice</a> <a
                                                href="https://usefulpdf.com/employment" data-v-e6131698=""
                                                class="">Employment contracts</a> <a
                                                href="https://usefulpdf.com/loan-agreement" data-v-e6131698=""
                                                class="">Loan Agreement</a> <a
                                                href="https://usefulpdf.com/rental-lease/application" data-v-e6131698=""
                                                class="">Rental application</a> <a
                                                href="https://usefulpdf.com/deed" data-v-e6131698=""
                                                class="">Deed Forms</a> <a
                                                href="https://usefulpdf.com/bill-of-sale" data-v-e6131698=""
                                                class="">Bill
                                                of Sale</a></div>
                                    </div>
                                </div>
                                <div class="col-lg-3" data-v-e6131698="">
                                    <div class="us-footer-menu" data-v-e6131698="">
                                        <h3 class="us-footer-menu--header h4-title" data-v-e6131698="">Resources</h3>
                                        <div class="us-footer-menu--links" data-v-e6131698=""><a
                                                href="https://usefulpdf.com/esignature-legality" data-v-e6131698=""
                                                class="">Electronic signature legality guide</a> <a
                                                href="https://usefulpdf.com/trust-security" data-v-e6131698=""
                                                class="">Trust and security</a> <a
                                                href="https://usefulpdf.tawk.help/" target="_blank"
                                                data-v-e6131698="">Support center</a> <a
                                                href="https://usefulpdf.com/contracts" data-v-e6131698=""
                                                class="">Contract templates</a> <a
                                                href="https://usefulpdf.com/blog/" data-v-e6131698="">Blog </a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="us-footer--extend d-block d-lg-flex align-items-center justify-content-between"
                                data-v-e6131698="">
                                <p class="copyright" data-v-e6131698="">
                                    © Useful Innovations, Inc. 2020 - 2021.
                                </p>
                                <div class="us-footer--social" data-v-e6131698=""><a
                                        href="http://facebook.com/usefulpdf" target="_blank" data-v-e6131698=""><img
                                            data-src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAAWCAYAAAAb+hYkAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAADWSURBVHgB3VLLDcIwDE1CRK+MUDbpBrABbMBq3YARYAOyAaeqH7UyjsDIdZ1S9ciTIif+PzvWKACAXd/3F5QFgCmEOVgZUNd17tzmitfcLEXbdg88ECUmKGJVZot6kFXOFMCdZ4NQcYvKqmqP8Y28Tvh+kjMdKzNFmWVbS60q3II388h5EoIzK+ATLYwgyAenBITEfZxlMkYFtI6macrFnJzzhygBXOl5RWoJp7X/6Bjft3kYurvVBsH2JNv+JjS8GndM8V21p38MUn/5rx8iKwXFZ6J7ATRgtzdCeXyQAAAAAElFTkSuQmCC"
                                            class="social-icon lazyLoad" data-v-e6131698=""></a> <a
                                        href="https://twitter.com/pdfuseful" target="_blank" data-v-e6131698=""><img
                                            data-src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAVCAYAAABc6S4mAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAHpSURBVHgBzVXdccIwDLad0gtvbEA2aDZoNmg3KJ2AbgCdoDABbACdADpB6QSwATzAOYmJXSnBxDg/DcdLv7vEP5KlT7JlE/IfwTn34jieRFG8hU/Bt8YxzmdyEUSRGGCf5otE0GrRruM4n5TSXZXx4/H4kiRyBN1OiXhHKVkpRYLUOCVLkntMmShkQmqYa9ZhGI9yxtzjPJpqGwVbqHwpjGZ6sQmQTepIwJoeyL5PdrZnGzC5wElgMcR86rxyHveUUh3DwTbTKzpHoK4mGYbhm8ks9brf7/0sDWJmhbqIY/Ghx6QGpTqQopQ1oGuFu7Dzeq2DuyrFdrs9hWaKETHGfCmJn0nopmqNkbqN5TVLCeac3AB9GjFyPcfwlyTJVzpg6oncAErVM7YQ7c+FwNz9qhPSBPoEgo2gINS1gOfYPJpNYRTrulThFMVaO7k2kpx9zT6eroKLQiMNIIQY1LK3nVjnv3YR6PaN/Qts+bkOMEWHg/CUkgFpCGQupRpiH9p3qJ1lQclIif1t8W4q23DcUDNK1KsiQU8p8KzpuZTHMTEqkrGWD3XyAA4Dfd+jXMrktZS5tpQx4j3GnD50fdIMO0jJ2HXvR3WP09mBBt6mjN0FjkMfQeQR49WC12mDFapUMnddd/WXYY1fdihd5VbHyn0AAAAASUVORK5CYII="
                                            class="social-icon lazyLoad" data-v-e6131698=""></a> <a
                                        href="https://www.linkedin.com/company/usefulpdf" target="_blank"
                                        data-v-e6131698=""><img
                                            data-src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjQiIGhlaWdodD0iMjQiIHZpZXdCb3g9IjAgMCAyNCAyNCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTE2IDhDMTcuNTkxMyA4IDE5LjExNzQgOC42MzIxNCAyMC4yNDI2IDkuNzU3MzZDMjEuMzY3OSAxMC44ODI2IDIyIDEyLjQwODcgMjIgMTRWMjFIMThWMTRDMTggMTMuNDY5NiAxNy43ODkzIDEyLjk2MDkgMTcuNDE0MiAxMi41ODU4QzE3LjAzOTEgMTIuMjEwNyAxNi41MzA0IDEyIDE2IDEyQzE1LjQ2OTYgMTIgMTQuOTYwOSAxMi4yMTA3IDE0LjU4NTggMTIuNTg1OEMxNC4yMTA3IDEyLjk2MDkgMTQgMTMuNDY5NiAxNCAxNFYyMUgxMFYxNEMxMCAxMi40MDg3IDEwLjYzMjEgMTAuODgyNiAxMS43NTc0IDkuNzU3MzZDMTIuODgyNiA4LjYzMjE0IDE0LjQwODcgOCAxNiA4VjhaIiBzdHJva2U9IiNGOUY5RkEiIHN0cm9rZS13aWR0aD0iMiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIi8+CjxwYXRoIGQ9Ik02IDlIMlYyMUg2VjlaIiBzdHJva2U9IiNGOUY5RkEiIHN0cm9rZS13aWR0aD0iMiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIi8+CjxwYXRoIGQ9Ik00IDZDNS4xMDQ1NyA2IDYgNS4xMDQ1NyA2IDRDNiAyLjg5NTQzIDUuMTA0NTcgMiA0IDJDMi44OTU0MyAyIDIgMi44OTU0MyAyIDRDMiA1LjEwNDU3IDIuODk1NDMgNiA0IDZaIiBzdHJva2U9IiNGOUY5RkEiIHN0cm9rZS13aWR0aD0iMiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIi8+Cjwvc3ZnPgo="
                                            class="social-icon lazyLoad" data-v-e6131698=""></a></div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>
    <script>
        window.__NUXT__ = {
            staticAssetsBase: "/_nuxt/static/1638430657",
            layout: "default",
            error: null,
            serverRendered: !0,
            routePath: "/",
            config: {
                _app: {
                    basePath: "/",
                    assetsPath: "/_nuxt/",
                    cdnURL: null
                }
            }
        }
    </script>
    <script src="./Electronic signature and document generation software _ UsefulPDF_files/4351892.js.download" defer="">
    </script>
    <script src="./Electronic signature and document generation software _ UsefulPDF_files/705290f.js.download" defer="">
    </script>
    <script src="./Electronic signature and document generation software _ UsefulPDF_files/ba47745.js.download" defer="">
    </script>
    <script src="./Electronic signature and document generation software _ UsefulPDF_files/5e7a9bf.js.download" defer="">
    </script>
    <script src="./Electronic signature and document generation software _ UsefulPDF_files/80a7cf0.js.download" defer="">
    </script>
    <script data-n-head="ssr"
        src="./Electronic signature and document generation software _ UsefulPDF_files/jquery-3.4.1.min.js.download"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous" data-body="true">
    </script>
    <script data-n-head="ssr"
        src="./Electronic signature and document generation software _ UsefulPDF_files/popper.min.js.download"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"
        data-body="true"></script>
    <script data-n-head="ssr"
        src="./Electronic signature and document generation software _ UsefulPDF_files/bootstrap.min.js.download"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"
        data-body="true"></script>
    <script data-n-head="ssr"
        src="./Electronic signature and document generation software _ UsefulPDF_files/flags.js.download" data-body="true">
    </script>
    <script data-n-head="ssr" src="./Electronic signature and document generation software _ UsefulPDF_files/ui.js.download"
        data-body="true"></script>


    <div>
        <div>
            <div class="Vue-Toastification__container top-left"></div>
        </div>
        <div>
            <div class="Vue-Toastification__container top-center"></div>
        </div>
        <div>
            <div class="Vue-Toastification__container top-right"></div>
        </div>
        <div>
            <div class="Vue-Toastification__container bottom-left"></div>
        </div>
        <div>
            <div class="Vue-Toastification__container bottom-center"></div>
        </div>
        <div>
            <div class="Vue-Toastification__container bottom-right"></div>
        </div>
    </div>
    <meta name="google-site-verification" content="wqk8yBWsA9Enk1OEJlnG0Jh2d-yA5eF_fVFz7paK-fI">
</body>

</html>
