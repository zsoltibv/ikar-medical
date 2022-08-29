<div class="home">
    {{-- Slider --}}
    <div id="slider">
        <slider-component>
        </slider-component>
    </div>
    {{-- About --}}
    <ul class="mr-2">
        <li>
            <a href="{{ route(Route::currentRouteName(), 'ro') }}" class="">RO</a>
        </li>
         <li>
            <a href="{{ route(Route::currentRouteName(), 'en') }}" class="">EN</a>
        </li>
      </ul>
    <div class="about container mx-auto py-12 px-4 font-body text-md font-medium flex">
        <div class="first-el w-2/3">
            <h3 class="font-heading font-semibold text-4xl text-gray-800 py-4">{{ __('About Us') }}</h3>
            <p class="text-lg px-4">Our team gets you a treatment solution or surgery (where applicable), from specialist doctors working in one of the best hospitals in Turkey.
                We coordinate your entire journey to your destination, with each patient having a customized package based on the client’s needs and preferences.
                Why Turkey? In general, operations in Turkey can be up to 50 percent cheaper, and 67 percent of those traveling abroad take advantage of this for treatments in top clinics.</p>
        </div>
        <div class="second-el w-1/3">
           <div class="control-panel pl-4">
                <h3 class="font-heading font-light text-2xl text-gray-800 py-4">Our Working Hours</h3>
                <div class="flex flex-col space-y-1">
                    <div class="first-block bg-blue-800 text-white py-3 px-4">
                        Monday-Friday: 09:30 – 17:30
                    </div>
                    <div class="first-block bg-blue-800 text-white py-3 px-4">
                        Saturday: Closed
                    </div>
                    <div class="first-block bg-blue-800 text-white py-3 px-4">
                        Sunday: Closed
                    </div>
                </div>
           </div>
        </div>
    </div>
    {{-- Patients Guide --}}
    <div class="bg-container bg-gray-200 py-6">
    <div class="features container mx-auto py-6 px-4 font-body text-md font-medium ">
        <h3 class="font-heading font-semibold text-4xl text-gray-800 pb-4">Patient's Guide</h3>
        <div class="grid sm:grid-cols-3 grid-cols-1">
            <div class="first-el sm:items-center flex sm:flex-row flex-col px-5 py-3">
                <img src="/img/step-1.png" alt="" class="w-16 h-16 mr-4 mb-2 sm:mb-0">
                <div class="text-div">
                    <h2 class="font-heading font-semibold text-2xl text-blue-800">Get in touch with us</h2>
                    <p>Make your medical documents available to us. Scans (medical analyses, interpretations, diagnosis,
                        admissions, medical letters, etc.) sent by email.</p>
                </div>
            </div>
            <div class="first-el sm:items-center flex sm:flex-row flex-col px-5 py-3">
                <img src="/img/step-2.png" alt="" class="w-16 h-16 mr-4 mb-2 sm:mb-0">
                <div class="text-div">
                    <h2 class="font-heading font-semibold text-2xl text-blue-800 py-2">Documentation is sent</h2>
                    <p>The medical documentation will be sent to Turkey to the BHT clinic, it will be evaluated by a board of specialist doctors who will propose a treatment / operation plan.</p>
                </div>
            </div>
            <div class="first-el sm:items-center flex sm:flex-row flex-col px-5 py-3">
                <img src="/img/step-3.png" alt="" class="w-16 h-16 mr-4 mb-2 sm:mb-0">
                <div class="text-div">
                    <h2 class="font-heading font-semibold text-2xl text-blue-800 py-2">Obtaining medical opinion</h2>
                    <p>After obtaining the medical opinion, the duration of the treatment procedures will be established, which will be carried out at BHT hospital.</p>
                </div>
            </div>
            <div class="first-el sm:items-center flex sm:flex-row flex-col px-5 py-3">
                <img src="/img/step-4.png" alt="" class="w-16 h-16 mr-4 mb-2 sm:mb-0">
                <div class="text-div">
                    <h2 class="font-heading font-semibold text-2xl text-blue-800 py-2">Arangements for travel</h2>
                    <p>Choosing the hotel and booking/purchasing the travel ticket is our responsibility. The clinic already collaborates with the nearest hotels and best agencies.</p>
                </div>
            </div>
            <div class="first-el sm:items-center flex sm:flex-row flex-col px-5 py-3">
                <img src="/img/step-5.png" alt="" class="w-16 h-16 mr-4 mb-2 sm:mb-0">
                <div class="text-div">
                    <h2 class="font-heading font-semibold text-2xl text-blue-800 py-2">Airport pickup and welcome</h2>
                    <p>The patient is picked up from the airport by the clinic’s private transport service. At the hopsital you will meet your medical staff and translator.</p>
                </div>
            </div>
            <div class="first-el sm:items-center flex sm:flex-row flex-col px-5 py-3">
                <img src="/img/step-6.png" alt="" class="w-16 h-16 mr-4 mb-2 sm:mb-0">
                <div class="text-div">
                    <h2 class="font-heading font-semibold text-2xl text-blue-800 py-2">Medical examination</h2>
                    <p>On the day of your scheduled medical examination you will follow instructions given by the doctor with the help of a translator.</p>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- Departments --}}
<div class="container mx-auto py-8 px-4">
    <div class="dep-header flex justify-between items-start">
        <h3 class="font-heading font-semibold text-4xl text-blue-800 pb-8">Departments</h3>
        <button class="text-white px-4 py-3 bg-gray-700 font-semibold max-w-64 flex items-center">
            <p class="mr-1 text-sm">All Departments</p>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="21" height="21" fill="white"><path d="M313.941 216H12c-6.627 0-12 5.373-12 12v56c0 6.627 5.373 12 12 12h301.941v46.059c0 21.382 25.851 32.09 40.971 16.971l86.059-86.059c9.373-9.373 9.373-24.569 0-33.941l-86.059-86.059c-15.119-15.119-40.971-4.411-40.971 16.971V216z"/></svg>
        </button>
    </div>
    <div class="grid lg:grid-cols-4 grid-cols-2 lg:gap-x-16 gap-x-5 gap-y-5 lg:pl-6">
        <div class="dep-1 max-w-80 bg-blue-800">
            <img src="/img/dep-1.jpg" alt="">
            <h2 class="font-heading text-xl text-white p-6 min-h-20 font-semibold">Plastic Surgery</h2>
        </div>
        <div class="dep-2 max-w-80 bg-blue-800">
            <img src="/img/dep-2.jpg" alt="">
            <h2 class="font-heading text-xl text-white p-6 font-semibold">Dermatology</h2>
        </div>
        <div class="dep-3 max-w-80 bg-blue-800">
            <img src="/img/dep-3.jpg" alt="">
            <h2 class="font-heading text-xl text-white p-6 font-semibold">Eye Health</h2>
        </div>
        <div class="dep-4 max-w-80 bg-blue-800">
            <img src="/img/dep-4.jpg" alt="">
            <h2 class="font-heading text-xl  text-white p-6 font-semibold">General Surgery</h2>
        </div>
    </div>
    <div class="grid lg:grid-cols-4 grid-cols-2 lg:gap-x-16 gap-x-5 gap-y-5 lg:pl-6">
        <div class="bg-blue-800 hidden sm:block">
            <h2 class="font-body text-md text-white px-6 py-2 border-b border-gray-400">Anesthesia and Reanimation</h2>
            <h2 class="font-body text-md text-white px-6 py-2 border-b border-gray-400">Brain and Spinal Cord Surgery</h2>
            <h2 class="font-body text-md text-white px-6 py-2 border-b border-gray-400">Chest Surgery</h2>
            <h2 class="font-body text-md text-white px-6 py-2 border-b border-gray-400">Cardiology</h2>
        </div>
        <div class="bg-blue-800 hidden sm:block">
            <h2 class="font-body text-md text-white px-6 py-2 border-b border-gray-400">Child Health and Diseases</h2>
            <h2 class="font-body text-md text-white px-6 py-2 border-b border-gray-400">Child Psychiatry</h2>
            <h2 class="font-body text-md text-white px-6 py-2 border-b border-gray-400">Chest Diseases</h2>
            <h2 class="font-body text-md text-white px-6 py-2 border-b border-gray-400">Cardiovascular Surgery</h2>
        </div>
        <div class="bg-blue-800 hidden sm:block">
            <h2 class="font-body text-md text-white px-6 py-2 border-b border-gray-400">Emergency</h2>
            <h2 class="font-body text-md text-white px-6 py-2 border-b border-gray-400">Endocrinology and Metabolic Diseases</h2>
            <h2 class="font-body text-md text-white px-6 py-2 border-b border-gray-400">Hand Surgery and Micro Surgery</h2>
            <h2 class="font-body text-md text-white px-6 py-2 border-b border-gray-400">Hematology</h2>
        </div>
        <div class="bg-blue-800 hidden sm:block">
            <h2 class="font-body text-md text-white px-6 py-2 border-b border-gray-400">Internal diseases</h2>
            <h2 class="font-body text-md text-white px-6 py-2 border-b border-gray-400">Infection Diseases</h2>
            <h2 class="font-body text-md text-white px-6 py-2 border-b border-gray-400">Neurology</h2>
            <h2 class="font-body text-md text-white px-6 py-2 border-b border-gray-400">Radiology</h2>
        </div>
    </div>
</div>
{{-- Doctors --}}

<div class="bg-container bg-gray-200 py-6">
    <div class="doctors container mx-auto py-6 px-4 font-body text-md font-medium ">
        <div class="dep-header flex justify-between items-start">
            <h3 class="font-heading font-semibold text-4xl text-gray-800 pb-8">Doctors</h3>
            <button class="text-white px-4 py-3 bg-gray-700 font-semibold max-w-64 flex items-center">
                <p class="mr-1 text-sm">All Doctors</p>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="21" height="21" fill="white"><path d="M313.941 216H12c-6.627 0-12 5.373-12 12v56c0 6.627 5.373 12 12 12h301.941v46.059c0 21.382 25.851 32.09 40.971 16.971l86.059-86.059c9.373-9.373 9.373-24.569 0-33.941l-86.059-86.059c-15.119-15.119-40.971-4.411-40.971 16.971V216z"/></svg>
            </button>
        </div>
        <div class="grid lg:grid-cols-6 sm:grid-cols-3 grid-cols-2 lg:gap-x-12 gap-x-5 gap-y-5 lg:pl-6">
            <div class="dep-1 max-w-80 bg-blue-800">
                <img src="/img/doc-1.webp" alt="">
                <h2 class="font-heading text-xl text-white px-6 pt-6 min-h-20">Abdulvahap DOĞAN</h2>
                <p class="text-white px-6 pt-3 pb-4">Internal diseases</p>
            </div>
            <div class="dep-2 max-w-80 bg-blue-800">
                <img src="/img/doc-2.webp" alt="">
                <h2 class="font-heading text-xl text-white px-6 pt-6 min-h-20">Cengizhan EKİZCELİ</h2>
                <p class="text-white px-6 pt-3 pb-4">Plastic Surgery</p>
            </div>
            <div class="dep-3 max-w-80 bg-blue-800">
                <img src="/img/doc-3.webp" alt="">
                <h2 class="font-heading text-xl text-white px-6 pt-6 min-h-20">Nermin <br>BAHAT</h2>
                <p class="text-white px-6 pt-3 pb-4">Dermatology</p>
            </div>
            <div class="dep-4 max-w-80 bg-blue-800">
                <img src="/img/doc-4.webp" alt="">
                <h2 class="font-heading text-xl text-white px-6 pt-6 min-h-20">Hüseyin KADIOĞLU</h2>
                <p class="text-white px-6 pt-3 pb-4">General Surgery</p>
            </div>
            <div class="dep-4 max-w-80 bg-blue-800">
                <img src="/img/doc-5.webp" alt="">
                <h2 class="font-heading text-xl text-white px-6 pt-6 min-h-20">Fatma <br>AYGÜN</h2>
                <p class="text-white px-6 pt-3 pb-4">Oftalmology</p>
            </div>
            <div class="dep-4 max-w-80 bg-blue-800">
                <img src="/img/doc-6.webp" alt="">
                <h2 class="font-heading text-xl text-white px-6 pt-6 min-h-20">Mustafa Ahmet HUYUT</h2>
                <p class="text-white px-6 pt-3 pb-4">Cardiology</p>
            </div>
        </div>
    </div>
</div>

{{-- Contact --}}
<div class="bg-container py-6">
    <div id="contact-form" class="container mx-auto py-6 px-4 font-body text-md font-medium ">
        {{-- folytatni --}}
        <h3 class="font-heading font-semibold text-4xl text-gray-800 pb-8">Contact</h3>
        <div class="flex md:flex-row flex-col">
            <div class="first-el md:w-1/2 w-full lg:pl-6">
                <div class="mapouter"><div class="gmap_canvas"><iframe width=100% height=100% id="gmap_canvas" src="https://maps.google.com/maps?q=Str.%20Zizinului%20nr.%20641,%20Tarlungeni.%20jud.%20Brasov&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org"></a><br><style>.mapouter{position:relative;text-align:right;height:100%;width:100%;}</style><style>.gmap_canvas {overflow:hidden;background:none!important;height:100%;width:100%;}</style></div></div>
            </div>
            <div class="second-el md:w-1/2 w-full">
                <div class="max-w-2xl mx-auto font-body font-semibold md:px-12 px-0">
                    @if(Session::get('message_sent'))
                        <div class="p-4 mb-4 text-md text-green-700 bg-green-100 dark:bg-green-200 dark:text-green-800" role="alert">
                            {{Session::get('message_sent')}}
                        </div>
                    @endif
                    <form method="POST" enctype="multipart/form-data" action="{{route('contact.send')}}">
                        @csrf
                        <div class="mb-4">
                            <label for="name" class="text-md text-gray-700 block mb-2">Full Name:</label>
                            <input type="text" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-md block w-full p-2">
                        </div>
                        <div class="mb-4">
                            <label for="email" class="text-md text-gray-700 block mb-2">Email:</label>
                            <input type="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-md block w-full p-2">
                        </div>
                        <div class="mb-4">
                            <label for="phone" class="text-md text-gray-700 block mb-2">Phone Nr:</label>
                            <input type="tel" name="phone" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-md block w-full p-2">
                        </div>
                        <div class="mb-4">
                            <label for="diagnosis" class="text-md text-gray-700 block mb-2">Diagnosis:</label>
                            <input type="text" name="diagnosis" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-md block w-full p-2">
                        </div>
                        <div class="mb-4">
                            <label for="message" class="text-md text-gray-700 block mb-2">Message:</label>
                            <textarea name="message" id="" cols="30" rows="5" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-md block w-full p-2"></textarea>
                        </div>
                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 font-semibold text-md px-5 py-2.5 text-center">Send Inquiry</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</div>