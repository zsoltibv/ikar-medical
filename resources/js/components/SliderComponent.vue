<template>
<div class="bg-container">
    <div class="container mx-auto px-4 font-body">
        <div class="slider">
            <div class="slide-1 flex items-center bg-blue-800 lg:flex-row flex-col-reverse" 
                v-if="slideIndex == 0">
                <div class="slide-content lg:w-1/2 w-full flex flex-col px-10 sm:pt-0 sm:pb-0 pt-5 pb-5">
                    <h3 class="text-white font-medium xl:text-4xl md:text-2xl text-2xl font-heading leading-tight">
                        Externalized Medical Services in of Turkey's best hospitals
                    </h3>
                    <p class="text-lg text-gray-300 mt-6">BHT CLINIC Istanbul academic staff, technological equipment and patient/employee oriented
                        approach, has a vision of excellence and trust in health care.</p>
                    <button class="text-blue-800 px-4 py-3 bg-white font-semibold sm:mt-16 mt-5 sm:w-1/3 w-full">Read More</button>
                </div>
                <div class="slide-image-1 lg:w-1/2 w-full relative">
                    <img src="/img/slide-1.webp" alt="">
                    <div class="nav-container absolute bottom-0 right-0 z-index-50 flex">
                        <button class="nav-left w-12 h-12 bg-white flex items-center justify-center" @click="getNextSlide()">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"><path d="m13 26 1.41-1.41L6.83 17H29v-2H6.83l7.58-7.59L13 6 3 16l10 10z"/><path fill="none" d="M0 0h32v32H0z" data-name="&lt;Transparent Rectangle&gt;"/></svg>                        
                        </button>
                        <button class="nav-right w-12 h-12 bg-white flex items-center justify-center" @click="getNextSlide()">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"><path fill="none" d="M0 0h32v32H0z"/><path d="m18 6-1.4 1.4 7.5 7.6H3v2h21.1l-7.5 7.6L18 26l10-10z"/></svg>
                        </button>
                    </div>
                </div>
            </div>

            <div class="slide-2 flex items-center bg-blue-800 lg:flex-row flex-col-reverse" 
                v-if="slideIndex == 1">
                <div class="slide-content lg:w-1/2 w-full flex flex-col px-10 sm:pt-0 sm:pb-0 pt-5 pb-5">
                    <h3 class="text-white font-medium md:text-4xl text-2xl font-heading leading-tight">
                        Modern facilities and acknowledged doctors
                    </h3>
                    <p class="text-lg text-gray-300 mt-6">BHT CLINIC Istanbul academic staff, technological equipment and patient/employee oriented
                        approach, has a vision of excellence and trust in health care.</p>
                    <button class="text-blue-800 px-4 py-3 bg-white font-semibold sm:mt-16 mt-5 sm:w-1/3 w-full">Request Offer</button>
                </div>
                <div class="slide-image lg:w-1/2 w-full relative">
                    <img src="/img/slide-2.png" alt="">
                    <div class="nav-container absolute bottom-0 right-0 z-index-50 flex">
                        <button class="nav-left w-12 h-12 bg-white flex items-center justify-center" @click="getNextSlide()">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"><path d="m13 26 1.41-1.41L6.83 17H29v-2H6.83l7.58-7.59L13 6 3 16l10 10z"/><path fill="none" d="M0 0h32v32H0z" data-name="&lt;Transparent Rectangle&gt;"/></svg>                        
                        </button>
                        <button class="nav-right w-12 h-12 bg-white flex items-center justify-center" @click="getNextSlide()">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"><path fill="none" d="M0 0h32v32H0z"/><path d="m18 6-1.4 1.4 7.5 7.6H3v2h21.1l-7.5 7.6L18 26l10-10z"/></svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>
export default {
  data() {
    return {
      slideIndex: 0,
    };
  },
   methods: {
      getNextSlide(){
        if(this.slideIndex + 1 > 1){
            this.slideIndex = 0;
        } else if(this.slideIndex - 1 < 0){
            this.slideIndex = 1;
        } else{
            this.slideIndex++;
        }
      }
   },
};
</script>

