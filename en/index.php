<?php
/**
 * Created by PhpStorm.
 * User: danie
 * Date: 08.11.2020
 * Time: 18:18
 */

?>

<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <title>APOCRAT</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="https://apocrat.at/">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!--<link rel="manifest" href="site.webmanifest">-->
    <link rel="apple-touch-icon" href="./favicon-icon.png">
    <link rel="icon" type="image/png" href="./favicon-16x16.png" sizes="16x16">
    <meta name="theme-color" content="#003B4D">
    <!-- Place favicon.ico in the root directory -->

    <link rel="apple-touch-icon" href="./apple-touch-icon.png">

    <link rel="stylesheet" href="./dist/css/main.css?v2">
    <link href="https://www.APOCRAT.at/en" rel="canonical">

    <meta name="description" content="APOCRAT - intelligent service for your data and privacy">

    <link rel="apple-touch-icon" sizes="57x57" href="./apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="./apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="./apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="./apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="./apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="./apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="./apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="./apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="./apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="./android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="./favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="./ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
</head>

<body class="relative">
    <div class="py-4 z-10 absolute left-0 right-0 top-0 js-navbar--index-exception">
        <div class="container text-white">
            <div class="flex justify-between">
                <a class="z-50" href="/en"><img class="" src="./logo/APOCRAT-weiss.svg" style="width: 150px;"/></a>
                <ul class="absolute md:static hidden md:flex left-0 right-0 top-0 bottom-0 bg-blue-700 md:bg-opacity-0 z-10 p-12 md:p-0 flex-col md:flex-row text-center js-navbar--toggle"><!-- note: md:bg-transparent did not work, so the workaround md:bg-opacity-0 was used -->
                    <li class="inline-block mt-12 md:mt-0">
                        <a class="text-xl md:text-base text-white mx-1 md:mx-4 hover:underline hover:text-grey-500" href="en/wieso-apocrat">Why APOCRAT</a>
                    </li>
                    <li class="inline-block mt-8 md:mt-0">
                        <a class="text-xl md:text-base text-white mx-1 md:mx-4 hover:underline hover:text-grey-500" href="en/ueber-uns">About us</a>
                    </li>
                    <li class="inline-block mt-8 md:mt-0">
                        <a class="text-xl md:text-base text-white mx-1 md:mx-4 hover:underline hover:text-grey-500" href="https://apocrat.at/">DE</a>
                    </li>
                </ul>
                <button class="md:hidden mr-2" onclick="openNavbar();">
                    <img class="" src="./icon/menu.svg" />
                </button>
                <button class="hidden js-navbar--toggle" onclick="closeNavbar();">
                    <img class="absolute right-3 top-3 z-10" src="./icon/close.svg" />
                </button>
            </div>
        </div>
    </div>


    <div class="slideshow-container--fullscreen">

        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
            <div class="hero--fullpage px-2 md:px-0" style="background: url('./img/Bilder_Webseite/processed/headerbild_processed.jpg'); background-repeat: no-repeat;background-position: bottom;background-size: cover;">
                <div class="hero--fullpage__content mx-auto">
                    <div class="container">
                        <h1 class="mb-6">Protect what is important</h1>
                        <div class="mb-4 text-xl">
				APOCRAT secures your connected devices from unauthorised access, such as a hacker attack.<br>
				Open cameras, spying baby monitors and manipulated door locks are a thing of the past.
                        </div>
                        <div class="font-bold mb-4 text-xl">Launch: End of 2021</div>
                        <!--<a class="btn btn-primary border-2 mx-auto mt-6" href="#bookmark">Mehr erfahren</a>-->
                    </div>
                </div>
            </div>
        </div>

        <div class="mySlides fade">
            <div class="hero--fullpage px-2 md:px-0" style="background: url('./img/Bilder_Webseite/processed/headerbild2_processed.jpg'); background-repeat: no-repeat;background-position: top;background-size: cover; background-color: rgba(0,0,0,0.5);background-blend-mode: multiply;">
                <div class="hero--fullpage__content mx-auto">
                    <div class="container">
                        <h1 class="mb-6">Sovereignty over your data</h1>
                        <div class="mb-4 text-xl">
				Your connected devices can only use the data that is necessary for their proper functioning. Further data is only transmitted to the manufacturer with explicit consent.
                        </div>
                        <div class="font-bold mb-4 text-xl">Launch: End of 2021</div>
                        <!--<a class="btn btn-primary border-2 mx-auto mt-6" href="#bookmark">Mehr erfahren</a>-->
                    </div>
                </div>
            </div>
        </div>

        <!--<div class="mySlides fade">
            <div class="hero--fullpage px-2 md:px-0" style="background: url('./img/Bilder_Webseite/processed/headerbild3_processed.jpg'); background-repeat: no-repeat;background-position: bottom;background-size: cover; background-color: rgba(0,0,0,0.5);background-blend-mode: multiply;">
                <div class="hero--fullpage__content mx-auto">
                    <div class="container">
                        <h1 class="mb-6">Daten teilen, Vergütung erhalten</h1>
                        <div class="mb-4 text-xl">
                            Daten Teilen ist kein Muss. Entschließt du jedoch, Daten mit APOCRAT zu teilen, so wirst du dafür vergütet.<br/>
                            Deine Daten sind wertvoll und von diesem Wert sollst du auch profitieren!
                        </div>
                        <div class="font-bold mb-4 text-xl">Launch: Ende 2021</div>
                    </div>
                </div>
            </div>
        </div>-->

        <div class="mySlides fade">
            <div class="hero--fullpage px-2 md:px-0" style="background: url('./img/Bilder_Webseite/processed/headerbild4_processed.jpg'); background-repeat: no-repeat;background-position: center;background-size: cover; background-color: rgba(0,0,0,0.5);background-blend-mode: multiply;">
                <div class="hero--fullpage__content mx-auto">
                    <div class="container">
                        <h1 class="mb-6">Your right to privacy</h1>
                        <div class="mb-4 text-xl">
				Various connected devices collect metrics about your usage behaviour and pass them on without your knowledge.
This creates a behavioural profile of you. It's time to put an end to this.
                        </div>
                        <div class="font-bold mb-4 text-xl">Launch: End of 2021</div>
                        <!--<a class="btn btn-primary border-2 mx-auto mt-6" href="#bookmark">Mehr erfahren</a>-->
                    </div>
                </div>
            </div>
        </div>


        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>



    <div class="content-block">
        <div class="container text-center text-gray-900">
            <h2 class="text-underline text-underline--center" id="bookmark">Protection for your IoT devices</h2>
            <p class="mb-6">
		APOCRAT is an AI-based plug-and-play "firewall" that that protects connected devices (IoT devices/
		Internet of Things devices) from being taken over from outside (e.g. by hackers) and prevents user
		data from being passed on to third parties without the explicit consent of the users. In this way,
		APOCRAT protects against data theft, intrusion into the privacy of users and returns the sovereignty
		over user data to where it belongs: to the individual.
            </p>
            <div class="flex flex-col md:flex-row">
                <div class="w-full md:w-1/3 mt-8 md:mt-0">
                    <div class="text-yellow font-bold text-3xl md:text-4xl mb-2">270.000</div>
                    <div class="w-64 mx-auto">Attacks on networked devices per day</div>
                </div>
                <div class="w-full md:w-1/3 mt-8 md:mt-0">
                    <div class="text-yellow font-bold text-3xl md:text-4xl mb-2">&gt;10 Mio.</div>
                    <div class="w-64 mx-auto">Households in Austria &amp; Germany use connected devices</div>
                </div>
                <div class="w-full md:w-1/3 mt-8 md:mt-0">
                    <div class="text-yellow font-bold text-3xl md:text-4xl mb-2">&gt;90%</div>
                    <div class="w-64 mx-auto">of connected devices communicate unencrypted</div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-block bg-gray-100 py-8">
        <div class="container flex flex-col md:flex-row">
            <div class="w-full md:w-1/3 md:mr-8">
                <img loading="lazy" src="./img/Bilder_Webseite/processed/PN878U1_processed.jpg" alt="" />
            </div>
            <div class="w-full md:w-2/3">
                <h2 class="text-underline mt-4 md:mt-0 md:max-w-xs">Intelligent firewall for your home network</h2>
                <p class="mb-6">
                </p>
			Connected devices for more convenience in everyday life have long since become a matter of course.
			However, these devices often have serious security gaps.
                <p class="font-bold mb-6">
			APOCRAT protects your devices and gives you comfort without compromise.
                </p>
                <ul class="list-disc pl-4">
                    <li>Device detection - APOCRAT automatically detects your devices.</li>
                    <li>Anomaly detection - undesired behaviour is detected and blocked</li>
                    <li>Privacy - ensures that your private data remains private</li>
                    <li>Smartphone app - for easy control customisation of APOCRAT</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="content-block bg-blue-300 text-white py-8" style="margin-top: 0;">
        <div class="container">
            <h2 class="text-underline text-underline--center text-center text-white">How it works</h2>
            <div class="flex flex-col md:flex-row">
                <div class="w-full md:w-1/3 text-center mt-12 md:mt-0 px-4">
                    <img class="mx-auto mb-4" width="80px" src="./icon/usb-cable.png" />
                    <span class="font-bold">Plug In</span>
                    <p>Connect the APOCRAT box to a socket and switch it on</p>
                </div>
                <div class="w-full md:w-1/3 text-center mt-12 md:mt-0 px-4">
                    <img class="mx-auto mb-4" width="80px" src="./icon/wifi.png" />
                    <span class="font-bold">Scan</span>
                    <p>APOCRAT detects the connected devices in the home network an their normal behaviour</p>
                </div>
                <div class="w-full md:w-1/3 text-center mt-12 md:mt-0 px-4">
                    <img class="mx-auto mb-4" width="80px" src="./icon/shield.png" />
                    <span class="font-bold">Protect</span>
                    <p>APOCRAT prevents unauthorised access &amp; ensures data protection</p>
                </div>
                <!--<div class="w-full md:w-1/3 text-center mt-12 md:mt-0 px-4">
                    <img class="mx-auto mb-4" width="80px" src="./icon/euro.png" />
                    <span class="font-bold text-yellow">Vergütung</span>
                    <p class="text-yellow">Wertschätzung für freiwillig zur Verfügung gestellte Daten in Form von Vergütungen</p>
                </div>-->
            </div>
        </div>
    </div>

    <div class="content-block container">
        <h2 class="text-underline text-underline--center text-center">Sovereignty over your data</h2>
        <p class="text-center">
		APOCRAT protects you and your home from data theft. Only data that is absolutely necessary for the
		functioning of the system is used. Therefor APOCRAT restricts the sharing of metrics (user statistics)
		by the connected devices and also does not collect user data itself.
        </p>
        <p class="mt-4 text-center">
		In summary, this means...
        </p>
        <div class="flex flex-col md:flex-row">
            <div class="w-full md:w-1/2 mt-12">
                <img loading="lazy" class="" src="./img/Bilder_Webseite/processed/Gruppe-29_processed.jpg" alt="Without APOCRAT" />
	    </div>
	    <div class="w-full md:w-1/2 mt-12">
                <img loading="lazy" class="" src="./img/Bilder_Webseite/processed/Gruppe-30_processed.png" alt="With APOCRAT" />
            </div>
        </div>
    </div>

    <div class="content-block bg-gray-100 py-8">
        <div class="container flex flex-col md:flex-row">
            <div class="w-full md:w-1/2 md:mr-8">
                <img loading="lazy" src="./img/Bilder_Webseite/processed/woman-using-smartphone-in-bed-3060643_processed.jpg" alt="Women in bed using smartphone" />
            </div>
            <div class="w-full md:w-1/2">
                <h2 class="text-underline mt-4 md:mt-0">Your benefit: Convenience with maximum security & data protection</h2>
                <p>
			Are you worried about your data and don't want to leave your devices vulnerable to hackers? Don't
give up the benefits of your connected devices.
                </p>
                <p class="mt-4">
                    <strong>We'll make sure you don't have to worry anymore.</strong>
                </p>
                <ul class="mt-4 list-disc pl-4">
                    <li>Statistics on the security of connected devices</li>
		    <li>Sovereignty over your own data</li>
                    <li>Protection from viruses and malware</li>
                    <li>Regain privacy in your own home</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="my-8 container">
        <h2 class="text-underline text-underline--center text-center">In collaboration with
</h2>
        <div class="my-8">
            <a href="https://www.accent.at/" target="_blank" rel="noopener"><img loading="lazy" src="./img/Bilder_Webseite/processed/Gruppe23.png" alt="CPI, EFRE, Niederösterreich & Accent Logo" /></a>
        </div>
    </div>

<?php include 'includes/footer.inc'; ?>
<script src="./dist/js/main.js"></script>
</body>
</html>

