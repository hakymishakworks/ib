<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intellify Bits - Pioneering the Digital Realm</title>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inclusive+Sans&family=Roboto:wght@100;300&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-vF4/D8eM7S2er4ezbJ0H7qMMiO1UzUrplqhsWGjZv4vhDfp2y60Wbl9UzojJ4/y1VeJhDlhZ5d5ZrOC5LwwyDg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" type="image/x-icon" href="media/logot.png">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>


    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }

        #fade-in-image {
            opacity: 0;
            transition: opacity 1s ease-in-out;
        }

        #page-load-image {
            opacity: 0;
            transition: opacity 1s ease-in-out;
            /* Adjust the duration and easing as needed */
        }
    </style>
</head>

<body class="bg-gray-100 font-inter" style="font-family: 'Roboto';">

    <script>
        $(document).ready(function () {
            $(window).scroll(function () {
                var windowBottom = $(this).scrollTop() + $(this).innerHeight();
                var elementTop = $("#fade-in-image").offset().top;

                if (elementTop < windowBottom) {
                    $("#fade-in-image").css("opacity", "1");
                } else {
                    $("#fade-in-image").css("opacity", "0");
                }
            });
        });

        $(document).ready(function () {
            $("#page-load-image").animate({ opacity: 1 }, 100);
        });
    </script>


    <header class="p-5 flex justify-between items-center fixed bg-gray-100 w-full z-50" id="main-header">
        <img src="media/intelify.png" alt="Logo 1" class="h-5">
        <nav class="flex justify-center">
            <ul class="flex space-x-10">
                <li><a href="#" class="text-black hover:text-blue-500 font-extrabold">Home</a></li>
                <li><a href="#" class="text-black hover:text-blue-500">About</a></li>
                <li><a href="#" class="text-black hover:text-blue-500">Services</a></li>
                <li><a href="#" class="text-black hover:text-blue-500">Careers</a></li>
                <li><a href="#" class="text-black hover:text-blue-500">Contact</a></li>

            </ul>
        </nav>

        <button
            class="bg-white hover:bg-black hover:text-white text-black font-normal py-1 px-2 border border-gray-400 rounded shadow">
            Client Area
        </button>
    </header>

    <main class="container mx-auto p-6 flex" id="page-load-image">
        <section class="my-4 max-w-2xl flex-grow mx-auto mt-40">
            <h2 class="text-7xl font-extrabold leading-tight text-gray-800" style="font-family:arial;">
                Create <span class="text-blue-700"> websites</span> with the pioneer
            </h2>
            <p class="text-xl text-gray-500 leading-normal mt-4">Together pioneering the digital realm with
                Intelify Bits </p>

            <!-- Buttons -->
            <div class="mt-4">
                <div class="mt-4">
                    <button
                        class="text-lg bg-blue-700 text-white px-4 py-2 rounded-full mr-4 font-bold border-2 border-gray-100 transition-transform transform hover:scale-105">Let's
                        Get Started</button>
                    <button
                        class="text-lg text-black px-4 py-2 rounded-full font-bold border border-black transition-transform transform hover:scale-105">Come,
                        talk to us
                        <span>&#x1F4DE;</span></button>
                </div>
            </div>
        </section>
        <div class="flex mt-20 mx-auto">
            <img src="media/banner.png" alt="Image 1" class="object-cover mx-auto" style="width:90%;">
        </div>
    </main>




    <!-- <div class="flex items-center justify-center flex-col" id="fade-in-image">
        <p class="text-center text-gray-800 font-extrabold mt-10 text-xl">Our Guiding Principles</p>
        <div class="flex items-center justify-center mt-4 space-x-30">
            <img src="media/pri.png" alt="Image 1" class="w-40 h-40 object-cover rounded-full">
            <img src="media/cent.png" alt="Image 2" class="w-40 h-40 object-cover rounded-full">
            <img src="media/qua.png" alt="Image 3" class="w-40 h-40 object-cover rounded-full">
            <img src="media/tra.png" alt="Image 3" class="w-40 h-40 object-cover rounded-full">

        </div>
    </div> -->

    <div style="width: 100%; display: flex; align-items: center; justify-content: center;" class="mt-20">
        <hr style="width: 80%; height: 2px; background-color: black;">
    </div>

    <div class="flex items-center justify-center flex-col">

        <h2 class="text-4xl font-extrabold text-black-500 mt-20" style="font-family:arial;">Gateway
            to Exceptional Web
            Design <span class="text-red-500">and Creative Solutions</span></h2>
        <div class="max-w-2xl mx-auto">
            <p class="text-center text-gray-500 font-extrabold mt-10">
                At Intelify Bits, we specialize in crafting responsive and visually stunning websites tailored to your
                unique preferences and audience expectations. Our commitment goes beyond design – it's about delivering
                an experience that resonates with your brand and captivates your audience.
            </p>
        </div>
    </div>

    <section class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 mt-20">
        <!-- Image Grid -->
        <div class="md:col-span-1 mx-auto">
            <img src="media/b2.png" alt="Image 1" class="w-90 h-90 object-cover rounded-md">
        </div>

        <!-- Text Grid -->

        <div class="md:col-span-1 flex flex-col justify-center text-left">
            <p class="container inline-block text-black rounded-full text-md mb-2 ">Your
                Dilemma:
                A
                Non-Responsive
                Website</p>

            <p class="text-black text-5xl font-extrabold mb-4" style="font-family:Arial;">
                Our Solution: Turning Pixels into Poetry!
            </p>
            <p class="text-gray-500 font-extrabold">
                Is your website feeling a bit camera-shy on different screens? Fear not! At Intelify Bits, we're here
                to sprinkle some magic and transform your web presence into a responsive masterpiece. Get ready for
                pixels that dance seamlessly on every device!
        </div>
    </section>

    <section class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 mt-20">
        <div class="md:col-span-1 flex flex-col justify-center text-left">
            <p class="container inline-block text-black rounded-full text-md mb-2 ">Your Worry: Ownership Hassles</p>

            <p class="text-black text-5xl font-extrabold mb-4" style="font-family:Arial;">
                Intellify Promise: All Yours, All the Way! </p>
            <p class="text-gray-500 font-extrabold">
                Ever felt like you're renting rather than owning your website? Say goodbye to the leasing drama! At
                Intelify Bits, our "All Yours" policy means once we create it, it's yours – no strings attached. Your
                success story, your way.
        </div>
        <div class="md:col-span-1 ">
            <img src="media/b3.png" alt="Image 1" class="w-full h-full object-cover rounded-md">
        </div>
    </section>


    <div class="container mx-auto ">
        <section class="max-w-2xl mt-40">
            <h2 class="text-6xl font-extrabold text-black-500" style="font-family:arial;">Our Capabilities to <span
                    class="text-blue-500"> Serve You</span></h2>
            <p class="text-md text-gray-500 leading-normal mt-4">Our Capabilities to Serve You - Explore the depth of
                our capabilities and skills as we dedicate ourselves to serving you with excellence. Unveil a world of
                expertise that goes beyond the ordinary, ensuring your vision comes to life and your online presence
                soars to new heights.</p>
        </section>
    </div>

    <div>
        <img src="media/web.png" alt="">
        <img src="media/design.png" alt="">
    </div>

    <div class="flex items-center justify-center mt-1">

        <button type="button"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Let's talk, straight to the point <span class="text-blue-700">-</span>
            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 5h12m0 0L9 1m4 4L9 9" />
            </svg>
        </button>
    </div>


    <div class="container mx-auto items-center flex justify-center ">
        <section class="max-w-2xl mt-40">
            <h2 class="text-6xl font-extrabold text-black-500 text-center justify-center" style="font-family:arial;">
                We got you <span class="text-blue-500"> covered</span></h2>
            <p class="text-md text-gray-700 leading-normal mt-4 text-center">You get this. From Day 1 until our last
                dying breath. (read:end of project,lol) </p>
        </section>
    </div>

    <div class="container mx-auto grid grid-cols-3 gap-4 mt-10">
        <!-- First column content with placeholder image -->
        <div class="group bg-cover bg-center h-80 w-full mx-auto rounded-md ">
            <div
                class="max-w-md mx-auto bg-white p-6 rounded-md overflow-hidden transition-transform transform hover:shadow-2xl">
                <h2 class="text-2xl font-bold mb-4">Flexibility in Frameworks</h2>
                <p class="text-gray-700">Embrace the power of choice! Bring your preferred frameworks to the table,
                    whether it's ReactJS, NodeJS, or any other. We adapt to your technical preferences, ensuring a
                    seamless development experience</p>
            </div>
        </div>
        <div class="group bg-cover bg-center h-80 w-full mx-auto rounded-md ">
            <div
                class="max-w-md mx-auto bg-white p-6 rounded-md overflow-hidden transition-transform transform hover:shadow-2xl">
                <h2 class="text-2xl font-bold mb-4">Design Tailored to You</h2>
                <p class="text-gray-700">Your vision, your design. We follow your lead when it comes to the aesthetic
                    and design elements of your project. Expect a website that resonates with your brand identity and
                    captures the essence of your vision</p>
            </div>
        </div>

        <div class="group bg-cover bg-center h-80 w-full mx-auto rounded-md ">
            <div
                class="max-w-md mx-auto bg-white p-6 rounded-md overflow-hidden transition-transform transform hover:shadow-2xl">
                <h2 class="text-2xl font-bold mb-4">Seamless 3rd Party Integration</h2>
                <p class="text-gray-700">We're integration experts. No matter the third-party services or tools you want
                    to incorporate, we've got the skills to seamlessly integrate them into your project. Enhance
                    functionality and user experience with ease</p>
            </div>
        </div>
    </div>

    <div class="container mx-auto grid grid-cols-3 gap-4">
        <!-- First column content with placeholder image -->
        <div class="group bg-cover bg-center h-80 w-full mx-auto rounded-md ">
            <div
                class="max-w-md mx-auto bg-white p-6 rounded-md overflow-hidden transition-transform transform hover:shadow-2xl">
                <h2 class="text-2xl font-bold mb-4">Round-the-Clock Support</h2>
                <p class="text-gray-700">Your success is our priority, and that's why our support is available 24/7.
                    Have questions, concerns, or need assistance at any time? We're just a message or call away</p>
            </div>
        </div>
        <div class="group bg-cover bg-center h-80 w-full mx-auto rounded-md ">
            <div
                class="max-w-md mx-auto bg-white p-6 rounded-md overflow-hidden transition-transform transform hover:shadow-2xl">
                <h2 class="text-2xl font-bold mb-4">Effortless Documentation</h2>
                <p class="text-gray-700">Leave the paperwork to us! We take care of all the necessary documentation to
                    keep your project files organized. Focus on your goals, and let us handle the administrative details
                </p>
            </div>
        </div>
        <div class="group bg-cover bg-center h-80 w-full mx-auto rounded-md ">
            <div
                class="max-w-md mx-auto bg-white p-6 rounded-md overflow-hidden transition-transform transform hover:shadow-2xl">
                <h2 class="text-2xl font-bold mb-4">Client Area for Progress Tracking</h2>
                <p class="text-gray-700">Stay in the loop with our dedicated client area. Track the progress of your
                    project, access important updates, and collaborate with our team effortlessly. Your project's
                    journey is just a click away</p>
            </div>
        </div>
    </div>

    <section class="bg-gray-100 mt-20">
        <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
            <h2 class="text-6xl font-extrabold text-black-500" style="font-family:arial;">Frequently Asked <span
                    class="text-blue-500">Questions</span></h2>
            <div class="grid pt-8 text-left border-t border-gray-200 md:gap-16 dark:border-gray-700 md:grid-cols-2">
                <div>
                    <div class="mb-10">
                        <h3 class="flex items-center mb-4 text-lg font-medium text-gray-900 dark:text-white">
                            <svg class="flex-shrink-0 mr-2 w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            What do you mean by "Figma assets"?
                        </h3>
                        <p class="text-gray-500 dark:text-gray-400">You will have access to download the full Figma
                            project including all of the pages, the components, responsive pages, and also the icons,
                            illustrations, and images included in the screens.</p>
                    </div>
                    <div class="mb-10">
                        <h3 class="flex items-center mb-4 text-lg font-medium text-gray-900 dark:text-white">
                            <svg class="flex-shrink-0 mr-2 w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            What does "lifetime access" exactly mean?
                        </h3>
                        <p class="text-gray-500 dark:text-gray-400">Once you have purchased either the design, code, or
                            both packages, you will have access to all of the future updates based on the roadmap, free
                            of charge.</p>
                    </div>
                    <div class="mb-10">
                        <h3 class="flex items-center mb-4 text-lg font-medium text-gray-900 dark:text-white">
                            <svg class="flex-shrink-0 mr-2 w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            How does support work?
                        </h3>
                        <p class="text-gray-500 dark:text-gray-400">We're aware of the importance of well qualified
                            support, that is why we decided that support will only be provided by the authors that
                            actually worked on this project.</p>
                        <p class="text-gray-500 dark:text-gray-400">Feel free to <a href="#"
                                class="font-medium underline text-primary-600 dark:text-primary-500 hover:no-underline"
                                target="_blank" rel="noreferrer">contact us</a> and we'll help you out as soon as we
                            can.</p>
                    </div>
                    <div class="mb-10">
                        <h3 class="flex items-center mb-4 text-lg font-medium text-gray-900 dark:text-white">
                            <svg class="flex-shrink-0 mr-2 w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            I want to build more than one project. Is that allowed?
                        </h3>
                        <p class="text-gray-500 dark:text-gray-400">You can use Windster for an unlimited amount of
                            projects, whether it's a personal website, a SaaS app, or a website for a client. As long as
                            you don't build a product that will directly compete with Windster either as a UI kit,
                            theme, or template, it's fine.</p>
                        <p class="text-gray-500 dark:text-gray-400">Find out more information by <a href="#"
                                class="font-medium underline text-primary-600 dark:text-primary-500 hover:no-underline">reading
                                the license</a>.</p>
                    </div>
                </div>
                <div>
                    <div class="mb-10">
                        <h3 class="flex items-center mb-4 text-lg font-medium text-gray-900 dark:text-white">
                            <svg class="flex-shrink-0 mr-2 w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            What does "free updates" include?
                        </h3>
                        <p class="text-gray-500 dark:text-gray-400">The free updates that will be provided is based on
                            the <a href="#"
                                class="font-medium underline text-primary-600 dark:text-primary-500 hover:no-underline">roadmap</a>
                            that we have laid out for this project. It is also possible that we will provide extra
                            updates outside of the roadmap as well.</p>
                    </div>
                    <div class="mb-10">
                        <h3 class="flex items-center mb-4 text-lg font-medium text-gray-900 dark:text-white">
                            <svg class="flex-shrink-0 mr-2 w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            What does the free version include?
                        </h3>
                        <p class="text-gray-500 dark:text-gray-400">The <a href="#"
                                class="font-medium underline text-primary-600 dark:text-primary-500 hover:no-underline">free
                                version</a> of Windster includes a minimal style guidelines, component variants, and a
                            dashboard page with the mobile version alongside it.</p>
                        <p class="text-gray-500 dark:text-gray-400">You can use this version for any purposes, because
                            it is open-source under the MIT license.</p>
                    </div>
                    <div class="mb-10">
                        <h3 class="flex items-center mb-4 text-lg font-medium text-gray-900 dark:text-white">
                            <svg class="flex-shrink-0 mr-2 w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            What is the difference between Windster and Tailwind UI?
                        </h3>
                        <p class="text-gray-500 dark:text-gray-400">Although both Windster and Tailwind UI are built for
                            integration with Tailwind CSS, the main difference is in the design, the pages, the extra
                            components and UI elements that Windster includes.</p>
                        <p class="text-gray-500 dark:text-gray-400">Additionally, Windster is a project that is still in
                            development, and later it will include both the application, marketing, and e-commerce UI
                            interfaces.</p>
                    </div>
                    <div class="mb-10">
                        <h3 class="flex items-center mb-4 text-lg font-medium text-gray-900 dark:text-white">
                            <svg class="flex-shrink-0 mr-2 w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Can I use Windster in open-source projects?
                        </h3>
                        <p class="text-gray-500 dark:text-gray-400">Generally, it is accepted to use Windster in
                            open-source projects, as long as it is not a UI library, a theme, a template, a page-builder
                            that would be considered as an alternative to Windster itself.</p>
                        <p class="text-gray-500 dark:text-gray-400">With that being said, feel free to use this design
                            kit for your open-source projects.</p>
                        <p class="text-gray-500 dark:text-gray-400">Find out more information by <a href="#"
                                class="font-medium underline text-primary-600 dark:text-primary-500 hover:no-underline">reading
                                the license</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="flex items-center justify-center bg-blue-800 mt-20 ">
        <section class="max-w-2xl mt-20 mb-20 text-center">
            <h2 class="text-5xl font-extrabold text-white" style="font-family: Arial;">
                Build a Faster Brand New Website
            </h2>
            <p class="text-lg font-normal text-white leading-normal mt-4" style="font-family: Arial;">
                Get Your Website Up in A Month!
            </p>

            <button class="bg-white text-blue-700 px-4 py-2 rounded-full mt-4">Talk to Our Web Consultant Now</button>
        </section>
    </div>





    <footer class="bg-gray-100 dark:bg-gray-900 mb-40">
        <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
            <div class="md:flex md:justify-between">
                <div class="mb-6 md:mb-0">
                    <a href="https://flowbite.com/" class="flex items-center">
                        <img src="media/logo.png" class="h-8 me-3" alt="FlowBite Logo" />
                        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white mr-2">
                            INTELIFYBITS</span>
                    </a>

                    <p class="mt-10 text-sm">
                        No X, Jalan Pulau Angsa 33B/10, Bandar Nusa Rhu 40170, Shah Alam Selangor Darul Ehsan
                    </p>
                </div>
                <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Resources</h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="mb-4">
                                <a href="https://flowbite.com/" class="hover:underline">Flowbite</a>
                            </li>
                            <li>
                                <a href="https://tailwindcss.com/" class="hover:underline">Tailwind CSS</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Follow us</h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="mb-4">
                                <a href="https://github.com/themesberg/flowbite" class="hover:underline ">Github</a>
                            </li>
                            <li>
                                <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">Discord</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <div class="sm:flex sm:items-center sm:justify-between">
                <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a
                        href="https://flowbite.com/" class="hover:underline">Flowbite™</a>. All Rights Reserved.
                </span>
                <div class="flex mt-4 sm:justify-center sm:mt-0">
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 8 19">
                            <path fill-rule="evenodd"
                                d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Facebook page</span>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 21 16">
                            <path
                                d="M16.942 1.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.585 11.585 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3A17.392 17.392 0 0 0 .182 13.218a15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.63 10.63 0 0 1-1.706-.83c.143-.106.283-.217.418-.33a11.664 11.664 0 0 0 10.118 0c.137.113.277.224.418.33-.544.328-1.116.606-1.71.832a12.52 12.52 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM6.678 10.813a1.941 1.941 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z" />
                        </svg>
                        <span class="sr-only">Discord community</span>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 17">
                            <path fill-rule="evenodd"
                                d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Twitter page</span>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">GitHub account</span>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 0a10 10 0 1 0 10 10A10.009 10.009 0 0 0 10 0Zm6.613 4.614a8.523 8.523 0 0 1 1.93 5.32 20.094 20.094 0 0 0-5.949-.274c-.059-.149-.122-.292-.184-.441a23.879 23.879 0 0 0-.566-1.239 11.41 11.41 0 0 0 4.769-3.366ZM8 1.707a8.821 8.821 0 0 1 2-.238 8.5 8.5 0 0 1 5.664 2.152 9.608 9.608 0 0 1-4.476 3.087A45.758 45.758 0 0 0 8 1.707ZM1.642 8.262a8.57 8.57 0 0 1 4.73-5.981A53.998 53.998 0 0 1 9.54 7.222a32.078 32.078 0 0 1-7.9 1.04h.002Zm2.01 7.46a8.51 8.51 0 0 1-2.2-5.707v-.262a31.64 31.64 0 0 0 8.777-1.219c.243.477.477.964.692 1.449-.114.032-.227.067-.336.1a13.569 13.569 0 0 0-6.942 5.636l.009.003ZM10 18.556a8.508 8.508 0 0 1-5.243-1.8 11.717 11.717 0 0 1 6.7-5.332.509.509 0 0 1 .055-.02 35.65 35.65 0 0 1 1.819 6.476 8.476 8.476 0 0 1-3.331.676Zm4.772-1.462A37.232 37.232 0 0 0 13.113 11a12.513 12.513 0 0 1 5.321.364 8.56 8.56 0 0 1-3.66 5.73h-.002Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Dribbble account</span>
                    </a>
                </div>
            </div>
        </div>
    </footer>











    <a href="YOUR_WHATSAPP_LINK" target="_blank" class="fixed bottom-6 right-6 z-50">
        <!-- Replace 'path/to/your/image.png' with the actual path to your image -->
        <img src="media/support.png" alt="WhatsApp Icon" class="w-24 h-24 rounded-full">
    </a>



    <div class="fixed left-0 top-10 w-4 h-screen z-100 deco bg-blue-700"></div>

</body>

</html>