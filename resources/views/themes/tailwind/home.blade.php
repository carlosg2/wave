@extends('theme::layouts.app')

@section('content')


    
<!-- Section 1 -->
<section class="relative w-full bg-white" x-data="{ showMenu: false }">
    <div class="relative z-50 w-full h-24">
        <div class="container flex items-center justify-center h-full max-w-6xl px-8 mx-auto sm:justify-between xl:px-0">

            <a href="/" class="relative flex items-center inline-block h-5 h-full font-black leading-none">
                <span class="ml-3 text-xl text-gray-800">tails<span class="text-indigo-600">.</span></span>
            </a>

            <nav class="absolute top-0 left-0 z-50 flex-col items-center justify-between hidden w-full h-64 pt-5 mt-24 text-sm text-gray-800 bg-white border-t border-gray-200 shadow-xl md:shadow-none md:flex md:w-auto md:flex-row md:h-24 lg:text-base md:bg-transparent md:mt-0 md:border-none md:py-0 md:relative" :class="{'flex fixed': showMenu, 'hidden': !showMenu }">
                <a href="#" class="ml-0 mr-0 font-bold duration-100 md:ml-12 md:mr-3 lg:mr-8 transition-color hover:text-indigo-600">Home</a>
                <a href="#features" class="mr-0 font-bold duration-100 md:mr-3 lg:mr-8 transition-color hover:text-indigo-600">Features</a>
                <a href="#pricing" class="mr-0 font-bold duration-100 md:mr-3 lg:mr-8 transition-color hover:text-indigo-600">Pricing</a>
                <a href="#testimonials" class="font-bold duration-100 transition-color hover:text-indigo-600">Testimonials</a>
                <div class="flex flex-col block w-full font-medium border-t border-gray-200 md:hidden">
                    <a href="#_" class="w-full py-2 font-bold text-center text-indigo-600">Login</a>
                    <a href="#_" class="relative inline-block w-full px-5 py-3 text-sm leading-none text-center text-white bg-indigo-600 fold-bold">Get Started</a>
                </div>
            </nav>

            <div class="absolute left-0 flex-col items-center justify-center hidden w-full pb-8 mt-48 border-b border-gray-200 md:relative md:w-auto md:bg-transparent md:border-none md:mt-0 md:flex-row md:p-0 md:items-end md:flex md:justify-between">
                <a href="#_" class="relative z-40 px-3 py-2 mr-0 text-sm font-bold text-indigo-600 md:px-5 sm:mr-3 md:mt-0">Login</a>
                <a href="#_" class="relative z-40 inline-block w-auto h-full px-5 py-3 text-sm font-bold leading-none text-white transition-all transition duration-100 duration-300 bg-indigo-600 shadow-md fold-bold sm:w-full lg:shadow-none hover:shadow-xl rounded-full">Get Started</a>

            </div>

            <div @click="showMenu = !showMenu" class="absolute top-0 right-0 z-50 block w-6 mt-8 mr-10 cursor-pointer select-none md:hidden sm:mt-10">
                <span class="block w-full h-1 mt-2 duration-200 transform bg-gray-800 rounded-full sm:mt-1"></span>
                <span class="block w-full h-1 mt-1 duration-200 transform bg-gray-800 rounded-full"></span>
            </div>

        </div>
    </div>

    <div class="relative items-center justify-center w-full overflow-x-hidden lg:pb-40 sm:pt-8 md:pt-12">
        <div class="container flex flex-col items-center justify-between h-full max-w-6xl px-8 mx-auto lg:flex-row xl:px-0">
            <div class="z-30 flex flex-col items-center w-full max-w-xl text-center lg:items-start lg:w-1/2 lg:pt-24 lg:text-left">
                <h1 class="relative mb-4 text-3xl font-black leading-tight text-gray-900 lg:pr-16 sm:text-6xl lg:mb-8">Build the Next Great Thing</h1>
                <p class="pr-0 mb-8 text-base text-gray-600 sm:text-lg xl:text-xl lg:pr-20">Are you ready to start building the latest and greatest web application? Sign up for free today.</p>
                <a href="#_" class="relative self-start inline-block w-auto px-8 py-4 mx-auto mt-0 text-base font-bold text-white bg-indigo-600 border-t border-gray-200 shadow-xl sm:mt-1 fold-bold lg:mx-0 rounded-full">Signup Today!</a>
                <!-- Integrates with section -->
                <div class="flex-col hidden mt-12 sm:flex lg:mt-24">
                    <p class="mb-4 text-sm font-medium tracking-widest text-gray-500 uppercase">Integrates With</p>
                    <div class="flex">
                        <svg class="h-8 mr-4 text-gray-500 duration-150 cursor-pointer fill-current transition-color hover:text-gray-600" viewBox="0 0 2499 1037" xmlns="http://www.w3.org/2000/svg"><g stroke="none" stroke-width="1"><g><path d="M261.062 466.768c-53.833-19.912-83.335-35.399-83.335-59.735 0-20.652 16.963-32.45 47.201-32.45 55.31 0 112.09 21.388 151.178 40.559l22.124-136.427c-30.973-14.752-94.397-39.088-182.151-39.088-61.947 0-113.573 16.223-150.443 46.46-38.352 31.71-58.263 77.434-58.263 132.744 0 100.293 61.211 143.07 160.769 179.203 64.159 22.86 85.547 39.088 85.547 64.16 0 24.336-20.652 38.346-58.263 38.346-46.46 0-123.153-22.86-173.302-52.356L0 786.087c42.771 24.337 122.417 49.409 205.017 49.409 65.63 0 120.204-15.487 157.08-44.984 41.293-32.45 62.682-80.381 62.682-142.328 0-102.511-62.683-145.282-163.717-181.416zm523.877-80.387l22.124-135.692H690.265V85.966l-157.035 25.84-22.677 138.883-55.232 8.96-20.675 126.732h75.68v266.227c0 69.32 17.7 117.257 53.833 146.754 30.238 24.336 73.745 36.134 134.956 36.134 47.196 0 75.957-8.109 95.868-13.275V678.416c-11.062 2.953-36.133 8.114-53.097 8.114-36.134 0-51.62-18.435-51.62-60.47V386.38h94.673zm350.752-143.618c-51.62 0-92.92 27.102-109.142 75.775l-11.062-67.849H855.459v573.745h182.887V452.017c22.865-28.026 55.31-38.159 99.558-38.159 9.59 0 19.911 0 32.45 2.213V247.188c-12.539-2.948-23.6-4.425-34.663-4.425zm171.095-48.86c53.098 0 95.869-43.507 95.869-96.604 0-53.839-42.771-96.61-95.869-96.61-53.838 0-96.609 42.771-96.609 96.61 0 53.097 42.771 96.604 96.61 96.604zm-92.184 56.786h183.628v573.745h-183.628V250.689zm703.999 51.62c-32.45-42.035-77.434-62.682-134.956-62.682-53.097 0-99.558 22.124-143.07 68.584l-9.585-57.522h-160.769v786.134l182.893-30.232V822.22c28.02 8.85 56.78 13.275 82.594 13.275 45.725 0 112.096-11.798 163.717-67.843 49.408-53.839 74.485-137.168 74.485-247.052 0-97.345-18.44-171.09-55.31-218.291zm-151.92 353.983c-14.75 28.025-37.61 42.777-64.159 42.777-18.435 0-34.662-3.69-49.408-11.062V415.142c30.973-32.445 58.993-36.134 69.32-36.134 46.46 0 69.32 50.15 69.32 148.23 0 56.045-8.11 99.557-25.073 129.054zm731.566-123.894c0-91.443-19.912-163.717-59-214.602-39.822-51.62-99.557-78.169-175.514-78.169-155.608 0-252.212 115.044-252.212 299.408 0 103.247 25.808 180.68 76.692 230.089 45.725 44.248 111.361 66.372 196.168 66.372 78.169 0 150.442-18.435 196.167-48.673l-19.912-125.365c-44.989 24.336-97.345 37.61-156.344 37.61-35.398 0-59.734-7.378-77.434-22.864-19.175-16.223-30.237-42.771-33.921-80.382h303.097c.736-8.85 2.213-50.15 2.213-63.424zm-306.787-48.672c5.16-81.859 27.284-120.205 69.32-120.205 41.3 0 62.688 39.087 65.636 120.205H2191.46z"></path></g></g></svg>
                        <svg class="h-8 mr-4 text-gray-500 duration-150 cursor-pointer fill-current transition-color hover:text-gray-600" viewBox="0 0 2350 2315" xmlns="http://www.w3.org/2000/svg"><g stroke="none" stroke-width="1"></g><g><path d="M1175 0C525.8 0 0 525.8 0 1175c0 552.2 378.9 1010.5 890.1 1139.7-5.9-14.7-8.8-35.3-8.8-55.8v-199.8H734.4c-79.3 0-152.8-35.2-185.1-99.9-38.2-70.5-44.1-179.2-141-246.8-29.4-23.5-5.9-47 26.4-44.1 61.7 17.6 111.6 58.8 158.6 120.4 47 61.7 67.6 76.4 155.7 76.4 41.1 0 105.7-2.9 164.5-11.8 32.3-82.3 88.1-155.7 155.7-190.9-393.6-47-581.6-240.9-581.6-505.3 0-114.6 49.9-223.3 132.2-317.3-26.4-91.1-61.7-279.1 11.8-352.5 176.3 0 282 114.6 308.4 143.9 88.1-29.4 185.1-47 284.9-47 102.8 0 196.8 17.6 284.9 47 26.4-29.4 132.2-143.9 308.4-143.9 70.5 70.5 38.2 261.4 8.8 352.5 82.3 91.1 129.3 202.7 129.3 317.3 0 264.4-185.1 458.3-575.7 499.4 108.7 55.8 185.1 214.4 185.1 331.9V2256c0 8.8-2.9 17.6-2.9 26.4C2021 2123.8 2350 1689.1 2350 1175 2350 525.8 1824.2 0 1175 0z"></path></g></svg>
                        <svg class="h-8 mr-4 text-gray-500 duration-150 cursor-pointer fill-current transition-color hover:text-gray-600" viewBox="0 0 2500 2158" xmlns="http://www.w3.org/2000/svg"><g stroke="none" stroke-width="1"><g transform="translate(-.157)"><path d="M2498.932 499.093c-11.204 242.78-181.152 575.201-509.837 997.268-339.895 440.74-627.499 661.11-862.808 661.11-145.67 0-268.924-134.462-369.776-403.39l-201.693-739.547C480.115 745.61 399.81 611.145 313.904 611.145c-18.675 0-84.04 39.219-196.095 117.656L.155 577.53a31955.67 31955.67 0 00364.171-324.952C528.669 110.644 651.928 35.944 734.1 28.472c194.224-18.675 313.746 113.921 358.567 397.786 48.556 306.277 82.172 496.767 100.845 571.47 56.027 253.986 117.656 380.98 184.887 380.98 52.29 0 130.73-82.172 235.311-246.516 104.584-164.345 160.609-289.47 168.078-375.376 14.94-141.934-41.085-212.9-168.078-212.9-59.762 0-121.392 13.075-184.887 39.219C1552.082 183.48 1787.393-10.745 2134.757.462c257.721 7.471 379.113 173.683 364.17 498.635l.005-.004z"></path></g></g></svg>
                        <svg class="h-8 mr-4 text-gray-500 duration-150 cursor-pointer fill-current transition-color hover:text-gray-600" viewBox="0 0 680 680" xmlns="http://www.w3.org/2000/svg"><g stroke="none" stroke-width="1"><g transform="translate(-401 -701)"><g transform="translate(-293 -236)"><g transform="translate(463 909)"><g transform="translate(0 28)"><g transform="translate(229.885)"><path d="M242.088 0c-36.478.027-66 29.582-65.973 66-.027 36.418 29.522 65.973 66 66h66V66.027C308.142 29.608 278.593.054 242.088 0c.027 0 .027 0 0 0zm.23 175H66.912c-36.365.027-65.824 29.576-65.797 65.987-.054 36.41 29.405 65.96 65.77 66.013h175.433c36.366-.027 65.824-29.576 65.797-65.987.027-36.437-29.431-65.986-65.797-66.013zM681.115 240.987c.027-36.411-29.522-65.96-66-65.987-36.478.027-66.027 29.576-66 65.987V307h66c36.478-.027 66.027-29.576 66-66.013zm-175 .214V65.772C506.142 29.506 476.614.054 440.13 0c-36.486.027-66.04 29.48-66.014 65.772v175.429c-.054 36.293 29.501 65.745 65.987 65.799 36.485-.027 66.04-29.48 66.013-65.8zM440.115 680c36.478-.027 66.027-29.582 66-66 .027-36.418-29.522-65.973-66-66h-66v66c-.027 36.392 29.522 65.946 66 66zm-.23-175h175.433c36.366-.027 65.824-29.576 65.797-65.987.054-36.41-29.404-65.96-65.77-66.013H439.912c-36.366.027-65.824 29.576-65.797 65.987-.027 36.437 29.405 65.986 65.77 66.013zM1.115 439c-.027 36.418 29.522 65.973 66 66 36.478-.027 66.027-29.582 66-66v-66h-66c-36.478.027-66.027 29.582-66 66zm175-.249v175.444c-.054 36.296 29.501 65.751 65.987 65.805 36.485-.027 66.04-29.482 66.013-65.778V438.805c.054-36.296-29.501-65.751-65.986-65.805-36.513 0-66.04 29.455-66.014 65.751 0 0 0 .027 0 0z"></path></g></g></g></g></g></g></svg>
                        <svg class="h-8 mr-4 text-gray-500 duration-150 cursor-pointer fill-current transition-color hover:text-gray-600" viewBox="0 0 1681 417" xmlns="http://www.w3.org/2000/svg"><g stroke="none" stroke-width="1"><g><path d="M1621.33 306.03l.578.008c34.43 0 58.659-23.855 58.924-57.992.126-16.904-4.757-32.38-13.753-43.558-9.512-11.834-22.829-18.142-38.516-18.267h-.313c-21.17 0-40.83 16.062-60.1 49.112l-1.533 2.638-.984-2.875c-4.866-14.163-9.2-25.963-11.791-33.025-1.817-4.925-2.617-7.138-2.809-7.854-.925-3.575-3.979-5.796-7.987-5.796-2.463 0-5.08.837-7.554 2.412-2.455 1.563-3.825 3.471-4.317 6.021l-.125.383c-19.287 60.155-35.188 89.359-48.662 89.359-1.959-.017-3.492-.654-4.634-1.93-3.529-3.9-2.662-13.174-1.462-26.016.879-9.433 1.883-20.112 1.466-31.446-.791-21.787-12.716-34.87-31.879-35.012-24.358-.009-40.141 25.933-47.412 41.395l-2.171 4.609-.48-5.083c-1.816-19.134-8.237-41.988-28.512-42.138-23.65 0-41.667 27.75-52.658 51.042l-2.946 6.241.292-6.891c1.304-31.063 2.375-49.404 3.187-54.492.8-5.104.38-8.53-1.292-10.492-1.583-1.837-4.566-2.516-8.941-2.241-7.571.479-11.442 5.087-17.271 20.533-9.575 25.367-33.93 84.383-53.375 84.383-3.858-.029-6.912-1.341-9.15-3.912-8.154-9.346-4.892-34.621-.38-69.592l.342-2.646c2.138-16.558-1.504-20.091-10.5-21.745a15.487 15.487 0 00-2.733-.267c-7.183 0-10.541 6.879-17.25 25.996-11.937 34.016-27.291 69.791-45.241 69.791-.659 0-1.305-.05-1.967-.154-9.513-1.62-9.304-15.729-9.042-33.608.134-9.667.296-20.63-1.191-30.525-2.684-17.758-13.142-28.846-27.313-28.958-28.267 0-47.33 36.2-56.196 57.783l-2.008 4.883-.671-5.242a486.444 486.444 0 01-3.43-41.729l-.024-.52.32-.409c52.905-66.596 76.647-114.654 76.963-155.829.204-26.304-11.933-42.104-32.462-42.267-15.013 0-50.705 12.505-63.109 128.321a669.633 669.633 0 00-3.75 65.45l-.008.434-.246.35c-24.204 35.033-75.862 95.295-126.437 95.295-45.696 0-82.154-36.97-82.154-102.229 0-87.483 61.92-141.196 108.52-141.196h.388c10.125.075 18.808 2.904 25.108 8.18 6.542 5.474 9.971 13.15 9.9 22.191-.091 12.08-4.029 18.288-7.833 24.284-.971 1.545-1.95 3.079-2.842 4.704-.9 1.641-1.72 4.02-.525 6.058 1.225 2.087 4.354 3.4 8.167 3.43 11.091 0 27.866-16.06 28.05-40.25.192-25.322-21.138-51.413-59.192-51.413-57.587 0-135.15 63.266-135.15 165.8 0 72.529 45.475 122.658 107.075 122.658 43.713 0 86.954-31.3 125.25-83.58l2.346-3.166.167 3.934c.812 19.137 2.2 34.212 3.212 45.224.654 7.08 1.13 12.192 1.113 15.013-.05 6.18.954 10.48 3.091 13.112 2.13 2.638 5.513 3.884 10.646 3.917 8.6 0 10.325-5.862 13.73-20.329l.978-4.13c4.234-17.528 19.867-74.745 43.38-74.745 3.841.037 6.804 1.17 8.908 3.4 5.192 5.508 4.625 16.813 3.967 29.908-.417 8.171-.834 16.609-.017 24.83 2.213 22.191 11.796 33.045 29.292 33.17 17.966.009 36.716-19.346 46.612-37.329l1.867-3.387.729 3.808c1.825 9.625 9.992 41.217 35.563 41.217 23.175 0 43.058-24.404 64.85-74.634l2.854-6.558-.175 7.154c-.463 19.034-1.492 42.275-1.5 60.246-.009 13.9 1.396 19.204 7.82 19.204l1.459.067c6.162 0 10.346-3.68 12.433-10.954 16.4-57.155 30.571-83.771 44.613-83.771 13.75.104 15.037 25.246 16.141 69.67l.075 3.117c.334 15.538.896 22.413 10.546 22.484 7.325 0 9.146-5.755 12.934-19.921.725-2.7 1.508-5.663 2.437-8.863 13.242-45.937 24.217-64.679 37.883-64.679 11.7.088 12.35 12.15 12.567 16.113.45 8.487-.425 17.375-1.267 25.954-.787 7.975-1.596 16.225-1.291 23.887.716 17.967 10.55 27.938 27.7 28.067 22.258 0 42.35-26.033 59.946-77.358l1.22-3.575 1.396 3.52c3.196 8.067 7.354 18.988 11.2 32.017l.146.496-.213.47c-17.041 37.834-29.062 79.976-29.233 102.493-.229 29.654 13.188 48.925 34.184 49.087h.362c11.42 0 38.042-4.587 38.558-47.02.213-17.392-3.9-41.984-12.204-73.105l-.954-3.563 3.063 2.042c10.637 7.038 22.591 10.8 34.616 10.9zm-573.697-143.913c.475-10.634 1.371-20.988 2.642-30.78 8.242-63.091 25.433-107.15 41.83-107.15h.074c7.817.059 11.725 5.971 11.646 17.563-.225 28.487-18.275 69.27-53.642 121.217l-2.766 4.066.216-4.916zm522.804 226.82c-2.608 3.476-6.241 5.238-10.791 5.238-5.225-.046-9.15-1.863-11.821-5.433-7.483-9.996-5.375-33.496 6.833-76.15a370.41 370.41 0 014.717-15.234l1.417-4.254 1.245 4.304c14.221 49.238 17.046 80.03 8.4 91.53zm4.426-126.145l-.259-.471-.516-1.638.241-.487c16.217-33.417 34.8-52.571 50.967-52.571h.167c18.258.137 30.883 16.57 30.708 39.942-.121 15.6-7 24.583-12.742 29.37-6.554 5.467-15.283 8.592-23.95 8.592-21.367-.162-36.033-12.458-44.617-22.737zM540.55 300.504c25.033-2 44.892-36.046 52.267-50.596l1.9-3.75.72 4.142c3.542 20.458 14.671 54.833 49.484 55.108h.291c15.059 0 32.142-9.212 49.409-26.633l1.267-1.28.92 1.538c11.625 19.442 27.217 29.771 43.817 28.921 24.438-1.27 39.27-18.587 40.575-30.617.333-3.066-.475-5.954-2.23-7.9-2.195-2.45-5.387-2.733-7.728-.487l-1.121 1.058c-5.688 5.463-16.288 15.642-27.838 16.242-14.141.692-24.6-7.762-31.358-25.212l-.28-.734.476-.616c38.887-50.863 66.175-128.471 63.479-180.525-1.242-24.092-8.246-52.813-34.558-52.813l-1.963.05c-10.079.52-19.246 5.325-27.241 14.27-24.413 27.313-37.188 94.538-32.55 171.267.958 15.942 3.729 30.842 8.225 44.271l.254.754-.513.609c-14.429 16.862-28.667 26.15-40.091 26.15-27.488 0-26.563-46.092-24.392-84.309.47-8.241 1.167-13.491-1.271-16.475-1.742-2.137-4.658-3.191-8.908-3.225l-.496-.004c-9.784 0-11.83 2.013-16.833 16.53-10.413 30.158-30.967 80.77-51.642 80.77-5.73-.054-10.104-2.008-13.1-5.825-10.03-12.8-2.413-44.725 3.704-70.387 1.1-4.613 2.154-9.042 3.058-13.142 1.338-6.083.93-10.52-1.22-13.208-2.159-2.68-6.463-3.763-12.142-3.313-8.854.709-14.517 4.417-17.254 21.254l-.55 3.5-2.059-2.491c-3.866-5.708-11.404-12.508-25.4-12.508-1.225 0-2.495.05-3.808.154-14.933 1.225-31.938 11.629-44.383 27.158-14.53 18.13-21.471 41.075-19.538 64.62.1 1.247.28 2.442.459 3.63l.1.654-.45.496c-8.692 9.467-17.55 14.275-26.326 14.275-13.545-.1-21.316-10.167-21.316-26.938 0-28.225 19.129-113.32 19.129-144.125 0-32.783-14.608-50.629-39.975-50.825h-.383c-37.042 0-65.909 42.03-93.534 128.505a1413.034 1413.034 0 00-7.641 24.975l-3.88 13.004 1.146-13.517a1682.328 1682.328 0 005.238-87.112c1.375-41.792-4.271-68.688-17.275-82.221-7.013-7.3-16.288-10.896-28.371-10.988h-.308c-45.325 0-67.038 76.442-82.85 130.38-4.771 16.283-14.175 53.012-20.454 78.12l3.72-6.046c2.788-31.616 10.867-110.812 10.338-153.779-.575-46.091-15.917-66.754-49.771-67.012h-.417c-18.083 0-30.629 8.987-37.966 16.525C7.358 52.92.017 70.604.425 85.875c.25 9.283 5.946 17.546 10.262 17.546 2.813 0 4.371-3.754 5.046-5.992 10.475-34.62 24.03-51.454 41.421-51.454 7.213.054 12.583 2.18 16.6 6.5 13.592 14.58 11.117 53.946 6.638 125.417-1.45 23.033-3.084 49.129-4.463 78.816-.24 4.899-.527 9.795-.858 14.688-1.321 20.612-2.371 36.904 5.45 38.116 10.175 1.588 16.796-2.545 20.187-12.612 5.025-14.942 16.296-55.78 38.105-130.4 20.925-71.608 36.733-97.662 56.958-97.662 23.367 0 25.108 40.12 20.825 124.787-.913 17.95-2.133 38.28-3.071 60.4-.13 3.108-.275 6.125-.425 9.025-.9 18.32-1.608 32.767 3.625 38.308 1.633 1.725 3.85 2.58 6.787 2.596 10.13 0 13.175-8.879 18.221-23.6.892-2.596 1.838-5.37 2.892-8.27 34.708-95.746 60.37-178.817 94.817-178.817 10.329 0 18.37 8.391 18.37 24.758 0 37.78-18.475 110.775-18.475 147.792 0 13.262 3.817 25.162 11.026 33.529 7.4 8.591 17.754 13.166 29.941 13.27h.267c11.525 0 23.529-5.6 35.696-16.641l1.141-1.033.917 1.237c8.012 10.767 20.938 16.554 34.896 15.48 21.408-1.667 39.37-20.73 46.054-38.705l1.308-3.517 1.304 3.517c4.967 13.338 15.709 29.413 38.663 27.55zM737.817 50.33l.366-.008c2.446 0 4.596 1.225 6.38 3.65 8.5 11.492 8.629 53.437-5.992 101.162-8.354 27.275-19.592 53.042-32.484 74.504l-2.058 3.417-.525-3.954c-1.517-11.542-2.267-23.558-2.792-33.783-3.729-72.138 18.092-144 37.105-144.988zM500.283 218.925c-7.491 30.146-21.858 66.537-47.762 68.62l-2.108.088c-10.746 0-16.771-7.033-17.909-20.916-1.425-17.367 6.063-37.704 19.071-51.825 8.28-8.992 17.62-13.942 26.3-13.942h.175c10.954.083 18.633 8.88 22.162 17.083l.188.425-.117.467zm120.146-110.52c-9.562 0-17.283 7.532-17.358 16.795-.075 9.33 7.6 16.98 17.1 17.05l.137 1.387v-1.387c9.425 0 17.142-7.53 17.217-16.787.075-9.334-7.596-16.984-17.096-17.059zm601.221 0c-9.563 0-17.28 7.532-17.358 16.795-.075 9.33 7.596 16.98 17.1 17.05l.133 1.387v-1.387c9.433 0 17.15-7.53 17.225-16.787.067-9.334-7.6-16.984-17.1-17.059z"></path></g></g></svg>
                    </div>
                </div>
            </div>
            <div class="relative z-50 flex flex-col items-end justify-center w-full h-full lg:w-1/2 lg:pl-10">
                <div class="container relative left-0 w-full max-w-4xl lg:absolute lg:w-screen">
                    <img src="https://cdn.devdojo.com/images/december2020/dashboard-dmm.jpeg" class="w-full h-auto mt-20 mb-20 ml-0 shadow-2xl lg:mb-0 lg:h-full xl:-ml-12 rounded-3xl">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section 2 -->
<section class="relative w-full h-auto py-8 overflow-hidden bg-white sm:py-12 md:py-20 lg:py-32">
    <img src="https://cdn.devdojo.com/images/march2021/bg-gradient.png" class="absolute left-0 object-cover w-full h-full opacity-50 sm:opacity-100">
    <div class="absolute inset-0 w-full h-full bg-gradient-to-r from-transparent to-white"></div>
    <div class="relative flex flex-col items-center justify-start h-full mx-auto px-14 max-w-7xl lg:flex-row">

        <div class="relative z-10 w-full h-full lg:w-1/2 xl:pr-12 2xl:pr-24">
            <div class="flex flex-col items-start justify-center h-full pt-12 lg:pt-0">
                <h1 class="max-w-lg mx-auto text-4xl font-bold tracking-tight text-center text-gray-700 lg:mx-0 sm:text-5xl lg:text-6xl lg:text-left">
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">Easy&nbsp;on-boarding</span>
                    with crafted experience
                </h1>
                <p class="max-w-md mx-auto mt-4 text-center text-gray-500 lg:mx-0 lg:text-left">Allowing you to have more time back in your day to work on the things that matter and multiple high fidelity conversations all at the same time.</p>
                <div class="max-w-lg mx-auto lg:mx-0">
                    <div class="flex items-center justify-center w-full my-6 space-x-2 lg:justify-start sm:space-x-6 lg:my-12">
                        <a href="#_" class="px-4 py-3 text-sm font-bold tracking-tight text-white transition duration-200 transform rounded-lg shadow-2xl sm:px-6 bg-gradient-to-tr from-blue-500 to-blue-300 sm:text-lg hover:scale-105">Free Signup</a>
                        <a href="#_" class="flex items-center justify-start px-4 py-3 text-sm font-bold tracking-tight text-gray-500 transition duration-200 rounded-lg sm:px-6 sm:text-lg group hover:text-blue-500">
                            <svg class="w-6 mr-2 text-gray-500 transition duration-200 fill-current group-hover:scale-125 group-hover:text-blue-500" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.26587 8.87988H2.26587V20.8799C2.26587 21.4103 2.47658 21.919 2.85166 22.2941C3.22673 22.6692 3.73544 22.8799 4.26587 22.8799H16.2659V20.8799H4.26587V8.87988Z"></path><path d="M20.2659 2.87988H8.26587C7.73544 2.87988 7.22673 3.0906 6.85166 3.46567C6.47658 3.84074 6.26587 4.34945 6.26587 4.87988V16.8799C6.26587 17.4103 6.47658 17.919 6.85166 18.2941C7.22673 18.6692 7.73544 18.8799 8.26587 18.8799H20.2659C20.7963 18.8799 21.305 18.6692 21.6801 18.2941C22.0552 17.919 22.2659 17.4103 22.2659 16.8799V4.87988C22.2659 4.34945 22.0552 3.84074 21.6801 3.46567C21.305 3.0906 20.7963 2.87988 20.2659 2.87988ZM11.2659 14.8799V6.87988L18.2659 10.8799L11.2659 14.8799Z"></path></svg>
                            Watch Demo
                        </a>
                    </div>
                    <div class="hidden grid-cols-3 gap-8 sm:grid">
                        <div class="col-span-1 text-center lg:text-left">
                            <h4 class="text-3xl font-bold tracking-tight text-transparent lg:text-4xl bg-clip-text bg-gradient-to-r from-blue-300 to-blue-500">+1M</h4>
                            <p class="text-sm font-semibold text-gray-400">Happy users</p>
                        </div>
                        <div class="col-span-1 text-center lg:text-left">
                            <h4 class="text-3xl font-bold tracking-tight text-transparent lg:text-4xl bg-clip-text bg-gradient-to-r from-blue-300 to-blue-500">95%</h4>
                            <p class="text-sm font-semibold text-gray-400">Time saving</p>
                        </div>
                        <div class="col-span-1 text-center lg:text-left">
                            <h4 class="text-3xl font-bold tracking-tight text-transparent lg:text-4xl bg-clip-text bg-gradient-to-r from-blue-300 to-blue-500">200+</h4>
                            <p class="text-sm font-semibold text-gray-400">Premium modules</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="relative z-10 w-full h-full px-10 pb-32 mt-16 lg:w-1/2 md:px-20 lg:px-5 xl:px-0 lg:pb-0 lg:mt-0 group">

            <div class="relative flex items-center justify-center w-full h-full">
                <div class="relative w-full h-auto md:h-full lg:h-auto">
                    <img class="absolute right-0 z-10 object-cover object-center w-32 -mt-8 -mr-8 transition duration-300 transform rounded-md shadow-2xl md:w-40 lg:w-40 lg:top-0 lg:-mt-16 md:-mr-16 lg:-mr-6 md:rounded-lg lg:rounded-xl group-hover:scale-105" src="https://cdn.devdojo.com/images/september2021/payment.png" alt="image">
                    <img class="absolute bottom-0 left-0 z-10 object-cover object-center w-24 -mb-12 -ml-4 transition duration-300 transform rounded-md shadow-2xl md:w-32 lg:w-32 xl:w-40 md:-ml-12 md:rounded-lg lg:rounded-xl group-hover:scale-95" src="https://cdn.devdojo.com/images/september2021/chart.png" alt="image">
                    <div class="relative w-full h-auto overflow-hidden transition duration-300 transform shadow-lg rounded-xl group-hover:scale-95">
                        <img class="w-full" src="https://cdn.devdojo.com/images/september2021/dashboard.png" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section 3 -->
<section class="flex flex-col w-full bg-black md:flex-row">
    <div class="flex flex-col items-center justify-center w-full p-10 md:w-1/2 lg:p-16 xl:p-24">
        <h2 class="max-w-lg text-4xl font-light leading-tight text-white md:text-3xl lg:text-4xl xl:text-5xl">We have the tools you need to succeed</h2>
        <p class="max-w-lg mt-5 text-xl text-gray-500 md:text-base lg:text-xl">Our powerful and revolutionary tools are designed to help your business thrive.</p>
    </div>

    <div class="w-full md:w-1/2">
        <img src="https://cdn.devdojo.com/images/november2020/tools-bg.jpeg?q=75&amp;auto=format" class="inset-0 object-cover">
    </div>
</section>

<!-- Section 4 -->
<section class="relative px-10 py-16 overflow-hidden bg-gray-100">
    <img class="absolute left-0 z-0 w-3/4 transform -translate-y-1/2 opacity-70 top-1/2" src="https://cdn.devdojo.com/tails/images/gradient-blob.svg">
    <img class="absolute left-0 z-0 object-cover object-center w-full h-full opacity-50 top-24" src="https://cdn.devdojo.com/tails/images/swirl-white.svg">
    <div class="container relative z-10 px-4 mx-auto">
        <div class="w-full mb-8 sm:w-1/2 md:w-3/4 sm:pr-4 md:pr-12 sm:-mb-32 md:-mb-24 lg:-mb-36 xl:-mb-28">
            <h2 class="tracking-widest text-indigo-500 uppercase">Features</h2>
            <p class="my-3 text-5xl font-bold tracking-tighter text-indigo-900 lg:text-6xl">Integrated Editor</p>
            <p class="max-w-sm text-lg text-gray-500">Check out our awesome features including a beautiful dashboard, member management, integrations center, and much more.</p>
        </div>

        <div class="grid w-full grid-cols-1 gap-8 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4">
            <div class="row-span-2 col-span-full sm:col-span-1 md:col-start-1 sm:row-start-2 md:row-start-3">
                <a href="#_" class="relative flex flex-col items-start justify-end w-full h-full overflow-hidden bg-black shadow-lg rounded-xl group" style="aspect-ratio: 1/1;">
                    <div class="absolute inset-0 w-full h-full">
                        <div class="absolute bottom-0 left-0 z-10 w-full h-full opacity-30 bg-gradient-to-b from-transparent to-gray-900"></div>
                        <img class="absolute inset-0 object-cover object-center w-full h-full transition duration-500 lg:opacity-80 group-hover:opacity-100 group-hover:scale-110" src="https://cdn.devdojo.com/images/september2021/beautiful-dashboard.jpeg" alt="">
                    </div>
                    <div class="relative z-10 flex flex-col items-start justify-start w-full px-6 py-7">
                        <span class="px-2 py-1 mb-3 text-xs font-semibold tracking-tight text-white uppercase bg-indigo-500 rounded-md">Pro</span>
                        <h4 class="text-4xl font-bold tracking-tight text-gray-100 sm:text-3xl md:text-2xl lg:text-3xl">Beautiful Dashboard</h4>
                    </div>
                </a>
            </div>
            <div class="row-span-2 col-span-full sm:col-span-1 md:col-start-1 xl:col-start-2 sm:row-start-4 md:row-start-5 xl:row-start-2">
                <a href="#_" class="relative flex flex-col items-start justify-end w-full h-full overflow-hidden bg-black shadow-lg rounded-xl group" style="aspect-ratio: 1/1;">
                    <div class="absolute inset-0 w-full h-full">
                        <div class="absolute bottom-0 left-0 z-10 w-full h-full opacity-30 bg-gradient-to-b from-transparent to-gray-900"></div>
                        <img class="absolute inset-0 object-cover object-center w-full h-full transition duration-500 lg:opacity-80 group-hover:opacity-100 group-hover:scale-110" src="https://cdn.devdojo.com/images/september2021/member-management.jpeg" alt="">
                    </div>
                    <div class="relative z-10 flex flex-col items-start justify-start w-full px-6 py-7">
                        <span class="px-2 py-1 mb-3 text-xs font-semibold tracking-tight text-white uppercase bg-indigo-500 rounded-md">Pro</span>
                        <h4 class="text-4xl font-bold tracking-tight text-gray-100 sm:text-3xl md:text-2xl lg:text-3xl">Member Management</h4>
                    </div>
                </a>
            </div>
            <div class="row-span-2 col-span-full sm:col-span-1 md:col-start-2 xl:col-start-2 sm:row-start-6 md:row-start-2 xl:row-start-4">
                <a href="#_" class="relative flex flex-col items-start justify-end w-full h-full overflow-hidden bg-black shadow-lg rounded-xl group" style="aspect-ratio: 1/1;">
                    <div class="absolute inset-0 w-full h-full">
                        <div class="absolute bottom-0 left-0 z-10 w-full h-full opacity-30 bg-gradient-to-b from-transparent to-gray-900"></div>
                        <img class="absolute inset-0 object-cover object-center w-full h-full transition duration-500 lg:opacity-80 group-hover:opacity-100 group-hover:scale-110" src="https://cdn.devdojo.com/images/september2021/custom-navigation.jpeg" alt="">
                    </div>
                    <div class="relative z-10 flex flex-col items-start justify-start w-full px-6 py-7">
                        <span class="px-2 py-1 mb-3 text-xs font-semibold tracking-tight text-white uppercase bg-indigo-500 rounded-md">Pro</span>
                        <h4 class="text-4xl font-bold tracking-tight text-gray-100 sm:text-3xl md:text-2xl lg:text-3xl">Custom Navigation</h4>
                    </div>
                </a>
            </div>
            <div class="row-span-2 col-span-full sm:col-span-1 md:col-start-2 xl:col-start-3 sm:row-start-1 md:row-start-4 xl:row-start-1">
                <a href="#_" class="relative flex flex-col items-start justify-end w-full h-full overflow-hidden bg-black shadow-lg rounded-xl group" style="aspect-ratio: 1/1;">
                    <div class="absolute inset-0 w-full h-full">
                        <div class="absolute bottom-0 left-0 z-10 w-full h-full opacity-30 bg-gradient-to-b from-transparent to-gray-900"></div>
                        <img class="absolute inset-0 object-cover object-center w-full h-full transition duration-500 lg:opacity-80 group-hover:opacity-100 group-hover:scale-110" src="https://cdn.devdojo.com/images/september2021/integration-center.jpeg" alt="">
                    </div>
                    <div class="relative z-10 flex flex-col items-start justify-start w-full px-6 py-7">
                        <span class="px-2 py-1 mb-3 text-xs font-semibold tracking-tight text-white uppercase bg-indigo-500 rounded-md">Pro</span>
                        <h4 class="text-4xl font-bold tracking-tight text-gray-100 sm:text-3xl md:text-2xl lg:text-3xl">Integration Center</h4>
                    </div>
                </a>
            </div>
            <div class="row-span-2 col-span-full sm:col-span-1 md:col-start-3 xl:col-start-3 sm:row-start-3 md:row-start-1 xl:row-start-3">
                <a href="#_" class="relative flex flex-col items-start justify-end w-full h-full overflow-hidden bg-black shadow-lg rounded-xl group" style="aspect-ratio: 1/1;">
                    <div class="absolute inset-0 w-full h-full">
                        <div class="absolute bottom-0 left-0 z-10 w-full h-full opacity-30 bg-gradient-to-b from-transparent to-gray-900"></div>
                        <img class="absolute inset-0 object-cover object-center w-full h-full transition duration-500 lg:opacity-80 group-hover:opacity-100 group-hover:scale-110" src="https://cdn.devdojo.com/images/september2021/design-handoff.jpeg" alt="">
                    </div>
                    <div class="relative z-10 flex flex-col items-start justify-start w-full px-6 py-7">
                        <span class="px-2 py-1 mb-3 text-xs font-semibold tracking-tight text-white uppercase bg-indigo-500 rounded-md">Pro</span>
                        <h4 class="text-4xl font-bold tracking-tight text-gray-100 sm:text-3xl md:text-2xl lg:text-3xl">Design Handoff</h4>
                    </div>
                </a>
            </div>
            <div class="row-span-2 col-span-full sm:col-span-1 md:col-start-3 xl:col-start-4 sm:row-start-5 md:row-start-3 xl:row-start-2">
                <a href="#_" class="relative flex flex-col items-start justify-end w-full h-full overflow-hidden bg-black shadow-lg rounded-xl group" style="aspect-ratio: 1/1;">
                    <div class="absolute inset-0 w-full h-full">
                        <div class="absolute bottom-0 left-0 z-10 w-full h-full bg-gradient-to-b from-transparent to-gray-900 opacity-30"></div>
                        <img class="absolute inset-0 object-cover object-center w-full h-full transition duration-500 lg:opacity-80 group-hover:opacity-100 group-hover:scale-110" src="https://cdn.devdojo.com/images/september2021/3rd-party-modules.jpeg" alt="">
                    </div>
                    <div class="relative z-10 flex flex-col items-start justify-start w-full px-6 py-7">
                        <span class="px-2 py-1 mb-3 text-xs font-semibold tracking-tight text-white uppercase bg-indigo-500 rounded-md">Pro</span>
                        <h4 class="text-4xl font-bold tracking-tight text-gray-100 sm:text-3xl md:text-2xl lg:text-3xl">3rd Party Modules</h4>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Section 5 -->
<section class="w-full px-10 py-12 bg-white lg:py-20">
    <div class="relative flex max-w-5xl px-24 py-16 mx-auto bg-indigo-500 rounded-lg lg:py-20">
        <div class="flex">
            <div class="relative z-50 md:w-7/12">
                <svg class="absolute w-6 h-auto -ml-10 text-indigo-400 fill-current" viewBox="0 0 100 84" xmlns="http://www.w3.org/2000/svg"><path d="M40.87 0C28.12 0 18.117 3.91 10.873 11.826 3.613 19.742 0 32.09 0 48.913v34.941H42.032V46.112H21.745c0-9.242 1.509-16.114 4.468-20.613 2.959-4.5 7.838-6.762 14.656-6.762V0zm57.64 0c-6.375 0-12.052.938-17.039 2.86-4.987 1.922-9.271 4.866-12.78 8.877-3.507 4.026-6.196 9.133-8.071 15.34-1.861 6.223-2.8 13.478-2.8 21.836v34.941H100V46.112H79.744c0-9.242 1.48-16.114 4.438-20.613 2.959-4.5 7.74-6.762 14.328-6.762V0z"></path></svg>
                <blockquote class="text-2xl font-thin text-white lg:text-3xl">
                    Saved me so much time! I would highly recommend this tool to all my friends and co-workers.
                </blockquote>
                <p class="mt-3 text-sm text-indigo-300">Jake Smith, Founder @ DevStudio Inc.</p>
                <p class="mt-10 text-xs text-indigo-300">Want to see it in action? No credit card required.</p>
                <a href="#_" class="inline-block w-full px-10 py-3 mt-4 text-base font-medium text-center text-indigo-500 bg-gray-100 rounded md:w-auto">Start your free 14-day trial</a>
            </div>
        </div>
        <img src="https://cdn.devdojo.com/images/august2021/user-bg.png" class="absolute bottom-0 right-0 z-20 block h-full mr-6 origin-bottom transform scale-90 opacity-10 lg:hidden lg:mr-12">
        <img src="https://cdn.devdojo.com/images/august2021/user-bg.png" class="absolute bottom-0 right-0 z-20 hidden h-full mr-6 origin-bottom transform scale-110 lg:block lg:mr-12">
    </div>
</section>


    <!-- BEGINNING OF PRICING SECTION -->
    <div id="pricing" class="relative">

        <div class="relative z-20 px-8 pb-8 mx-auto max-w-7xl xl:px-5">
            <div class="w-full text-left sm:text-center">
                <h2 class="pt-12 text-4xl font-extrabold text-gray-900 lg:text-5xl">Planes y Precios</h2>
            </div>

            @include('theme::partials.plans')

            
        </div>
    </div>
    <!-- END OF PRICING SECTION -->

@endsection
