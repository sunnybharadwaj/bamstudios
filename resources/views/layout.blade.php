<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Siddharth Bajpai | Photography, Creative</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>

<div class="h-bar bg-indigo-dark h-2 relative z-50"></div>
<div class="h-bar bg-indigo-darker h-2 relative z-50"></div>
<div class="h-bar bg-indigo-darkest h-2 relative z-50"></div>

<div class="mb-2"></div>
<div id="mobile-intro" class="w-full sm:w-full md:w-full lg:hidden text-center">
    <div class="px-4 top-nav">
        <div class="mb-6"></div>
        <div class="brand text-4xl uppercase py-5 text-white text-center">
            <span class="font-bold">Siddharth</span><br/>Bajpai
        </div>
        {{--<ul class="nav-list list-reset ">--}}
        {{--<li><a class="nav-item" href="/">Home</a></li>--}}
        {{--<li><a class="nav-item" href="/">Gallery</a></li>--}}
        {{--<li><a class="nav-item" href="/">About</a></li>--}}
        {{--<li><a class="nav-item" href="/">Services</a></li>--}}
        {{--<li><a class="nav-item" href="/">Contact</a></li>--}}
        {{--</ul>--}}
        <div class="about py-4">
            {{--<p class="intro-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean quis arcu et urna faucibus lacinia id ut--}}
            {{--dui. Proin semper eros eu condimentum facilisis. Vivamus consectetur semper leo ac convallis.</p>--}}
            <a class="inline-block uppercase mb-4" href="/">Hire me</a>
        </div>

        <div id="social-icons" class="flex items-center pb-6 ">
            <div class="flex-1 py-8">
                <a class="social-link" href="/">
                    <div class="social-icon w-8 h-8 m-auto">
                        <img src="{{url('/media/icons/shutterstock_icon.svg')}}" alt="" class="w-auto" alt="Shutterstock">
                    </div>
                </a>
            </div>
            <div class="flex-1 ">
                <a class="social-link" href="/">
                    <div class="social-icon w-8 h-8 m-auto">
                        <img src="{{url('/media/icons/instagram_white.svg')}}" alt="" class="w-auto">
                    </div>
                </a>
            </div>
            <div class="flex-1 ">
                <a class="social-link" href="/">
                    <div class="social-icon w-8 h-8 m-auto">
                        <img src="{{url('/media/icons/phone_icon.png')}}" alt="" class="w-auto">
                    </div>
                </a>
            </div>
            <div class="flex-1 ">
                <a class="social-link" href="/">
                    <div class="social-icon w-8 h-8 m-auto">
                        <img src="{{url('/media/icons/mail_icon.png')}}" alt="" class="w-auto">
                    </div>
                </a>
            </div>



        </div>

    </div>
</div>
<div id="screen" class="flex ">

    <div id="placeholder" class="sm:hidden md:hidden lg:block lg:w-1/4 xl:w-1/5 bg-grey h-full"></div>
    <nav id="page-nav"
         class="hidden sm:hidden md:hidden lg:block lg:w-1/4 xl:w-1/5 text-white h-screen fixed pin-y pin-l pt-8 ">
        <div class="pl-8 pr-4">
            <div class="mb-6"></div>
            <div class="brand text-4xl uppercase py-5">
                <span class="font-bold">Siddharth</span><br/><span class="font-sm text-3xl">Bajpai</span>
            </div>
            <div class="mb-6"></div>

            <div class="uppercase tracking-wide text-sm mb-3 text-grey-dark">Photography</div>
            <div class="uppercase tracking-wide text-sm mb-3 text-grey-dark">Art Direction</div>
            <div class="uppercase tracking-wide text-sm mb-3 text-grey-dark">Media Production</div>
            <div class="uppercase tracking-wide text-sm mb-3 text-grey-dark"></div>

            {{--<ul class="nav-list list-reset ">--}}
            {{--<li><a class="nav-item" href="/">Home</a></li>--}}
            {{--<li><a class="nav-item" href="/">Gallery</a></li>--}}
            {{--<li><a class="nav-item" href="/">About</a></li>--}}
            {{--<li><a class="nav-item" href="/">Services</a></li>--}}
            {{--<li><a class="nav-item" href="/">Contact</a></li>--}}
            {{--</ul>--}}
            <div class="about py-4">
                <p class="intro-text font-bold mb-1">Available for work at <br/>Hyderabad &amp; Bangalore, India.</p>

                <div class="mb-2"></div>
                <a class="inline-block uppercase mb-4" href="/">Hire me</a>
            </div>

            <div class="mb-16"></div>

            <div id="social-icons" class="flex items-center pb-6 ">
                <div class="flex-1 ">
                    <a class="social-link" href="https://www.shutterstock.com/g/Siddharth+Bajpai" target="_blank">
                        <div class="social-icon w-6 h-6">
                            <img src="{{url('/media/icons/shutterstock_icon.svg')}}" alt="" class="w-auto" alt="Shutterstock">
                        </div>
                    </a>
                </div>
                <div class="flex-1 ">
                    <a class="social-link" href="https://www.instagram.com/sidding_around/" target="_blank">
                        <div class="social-icon w-6 h-6">
                            <img src="{{url('/media/icons/instagram_white.svg')}}" alt="" class="w-auto">
                        </div>
                    </a>
                </div>
                <div class="flex-1 ">
                    <a class="social-link" href="/">
                        <div class="social-icon w-6 h-6">
                            <img src="{{url('/media/icons/phone_icon.png')}}" alt="" class="w-auto">
                        </div>
                    </a>
                </div>
                <div class="flex-1 ">
                    <a class="social-link" href="mailto:siddharth@chakradesign.co">
                        <div class="social-icon w-6 h-6">
                            <img src="{{url('/media/icons/mail_icon.png')}}" alt="" class="w-auto">
                        </div>
                    </a>
                </div>

                <div class="flex-1 ">
                    {{--<a class="social-link" href="/">--}}
                        <div class="social-icon w-6 h-6">
                            {{--<img src="{{url('/media/icons/facebook_white.png')}}" alt="" class="w-auto">--}}
                        </div>
                    {{--</a>--}}
                </div>

            </div>

        </div>

    </nav>

    <div class="w-full sm:w-full md:w-full lg:w-3/4 xl:w-4/5 min-h-screen pt-6 pl-2 pr-2 sm:pr-2 md:pr-2 lg:pr-6 xl:pr-6">
        @yield('content')
    </div>
</div>
</body>
</html>