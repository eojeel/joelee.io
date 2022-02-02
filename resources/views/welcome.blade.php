<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>JoeLee.io</title>

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *,
        :after,
        :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg,
        video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --bg-opacity: 1;
            background-color: #fff;
            background-color: rgba(255, 255, 255, var(--bg-opacity))
        }

        .bg-gray-100 {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity))
        }

        .border-gray-200 {
            --border-opacity: 1;
            border-color: #edf2f7;
            border-color: rgba(237, 242, 247, var(--border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --text-opacity: 1;
            color: #edf2f7;
            color: rgba(237, 242, 247, var(--text-opacity))
        }

        .text-gray-300 {
            --text-opacity: 1;
            color: #e2e8f0;
            color: rgba(226, 232, 240, var(--text-opacity))
        }

        .text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }

        .text-gray-500 {
            --text-opacity: 1;
            color: #a0aec0;
            color: rgba(160, 174, 192, var(--text-opacity))
        }

        .text-gray-600 {
            --text-opacity: 1;
            color: #718096;
            color: rgba(113, 128, 150, var(--text-opacity))
        }

        .text-gray-700 {
            --text-opacity: 1;
            color: #4a5568;
            color: rgba(74, 85, 104, var(--text-opacity))
        }

        .text-gray-900 {
            --text-opacity: 1;
            color: #1a202c;
            color: rgba(26, 32, 44, var(--text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        @media (min-width:640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width:768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width:1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme:dark) {
            .dark\:bg-gray-800 {
                --bg-opacity: 1;
                background-color: #2d3748;
                background-color: rgba(45, 55, 72, var(--bg-opacity))
            }

            .dark\:bg-gray-900 {
                --bg-opacity: 1;
                background-color: #1a202c;
                background-color: rgba(26, 32, 44, var(--bg-opacity))
            }

            .dark\:border-gray-700 {
                --border-opacity: 1;
                border-color: #4a5568;
                border-color: rgba(74, 85, 104, var(--border-opacity))
            }

            .dark\:text-white {
                --text-opacity: 1;
                color: #fff;
                color: rgba(255, 255, 255, var(--text-opacity))
            }

            .dark\:text-gray-400 {
                --text-opacity: 1;
                color: #cbd5e0;
                color: rgba(203, 213, 224, var(--text-opacity))
            }

            .dark\:text-gray-500 {
                --tw-text-opacity: 1;
                color: #6b7280;
                color: rgba(107, 114, 128, var(--tw-text-opacity))
            }
        }
    </style>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<nav class="flex items-center justify-between flex-wrap bg-zinc-700 p-6">
    <div class="flex items-center flex-shrink-0 text-white mr-6">
        <span class="font-semibold text-xl tracking-tight">JoeLee.io</span>
    </div>
    <div class="block lg:hidden">
        <button class="flex items-center px-3 py-2 border rounded text-white border-teal-400 hover:text-yellow-800 hover:border-white">
            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <title>Menu</title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
            </svg>
        </button>
    </div>
    <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
        <div class="text-sm lg:flex-grow">
            <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-yellow-800 mr-4">
                Docs
            </a>
            <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-yellow-800 mr-4">
                Examples
            </a>
            <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-yellow-800">
                Blog
            </a>
        </div>
    </div>
</nav>

<body class="antialiased wrapper">
    <div class="bus bus--full bus--top-white bus--bottom-love">
        <div class="bus-body">
            <div class="bus__body--top roof"></div>
            <div class="bus__body--top side-top"></div>
            <div class="bus__body--top side-top side-top--right"></div>
            <div class="bus__body--top gutter"></div>
            <div class="bus__body--top gutter gutter--right"></div>
            <div class="bus__body--top mid-top"></div>
            <div class="bus__body--top bump"></div>

            <div class="bus__body--bottom front"></div>

            <div class="bus__body--bottomx front-middle"></div>
            <div class="bus__body--bottomx front-middle--bottom"></div>
            <div class="bus__body--bottomx grill">
                <div class="grill__hole"></div>
                <div class="grill__hole grill__hole--right"></div>
            </div>
        </div>

        <div class="mirrors">
            <div class="mirror-l">
                <div class="mirror-glass"></div>
                <div class="mirror-arm"></div>
            </div>
            <div class="mirror-r">
                <div class="mirror-glass"></div>
                <div class="mirror-arm mirror-arm-r"></div>
            </div>
        </div>

        <div class="windshield">
            <div class="windshield-rubber"></div>
            <div class="windshield-rubber--bottom"></div>
            <div class="windshield-rubber--side"></div>
            <div class="windshield-rubber--side windshield-rubber--side--right"></div>
            <div class="windshield-top"></div>
            <div class="windshield-bottom"></div>
        </div>

        <div class="front-parts">
            <div class="wiper">
                <div class="wiper-blade"></div>
                <div class="wiper-arm"></div>
                <div class="wiper-attachment"></div>
            </div>
            <div class="wiper wiper-left">
                <div class="wiper-blade"></div>
                <div class="wiper-arm"></div>
                <div class="wiper-attachment"></div>
            </div>

            <div class="directional">
                <div class="directional--off"></div>
            </div>
            <div class="directional directional--right">
                <div class="directional--off"></div>
            </div>

            <div class="vw-logo vw-logo--shadow">
                <span class="vw-logo__v"></span>
                <span class="vw-logo__w">
                    <span class="vw-logo__w__leg-l"></span>
                    <span class="vw-logo__w__leg-r"></span>
                </span>
            </div>
            <div class="vw-logo">
                <span class="vw-logo__v"></span>
                <span class="vw-logo__w">
                    <span class="vw-logo__w__leg-l"></span>
                    <span class="vw-logo__w__leg-r"></span>
                </span>
            </div>

            <div class="headlight">
                <div class="headlight--off">
                    <div class="headlight--off__star"></div>
                </div>
            </div>
            <div class="headlight headlight--right">
                <div class="headlight--off headlight--on--right">
                    <div class="headlight--off__star"></div>
                </div>
            </div>

            <div class="bumper">
                <div class="bumper-top"></div>
                <div class="bumper-straight bs-middle"></div>
                <div class="bumper-curve bc-1"></div>
                <div class="bumper-straight bs-1"></div>
                <div class="bumper-curve bc-2"></div>
                <div class="bumper-curve bc-3"></div>
                <div class="bumper-straight bs-3"></div>
                <div class="bumper-curve bc-4"></div>
                <div class="bus__body--bottom above-bumper"></div>
            </div>
        </div>

        <div class="underbody">
            <div class="tire"></div>
            <div class="tire tire--right"></div>
            <div class="mid-parts">
                <div class="mid-parts--left"></div>
                <div class="mid-parts--middle"></div>
                <div class="mid-parts--left mid-parts--right"></div>
            </div>
            <div class="under-part-1l"></div>
            <div class="under-part-1l under-part-1r"></div>
            <div class="under-part-2"></div>
            <div class="shock-l"></div>
            <div class="shock-l shock-r"></div>
            <div class="bar-l"></div>
            <div class="bar-l bar-r"></div>
        </div>
    </div><!-- .bus -->
</body>

</html>
