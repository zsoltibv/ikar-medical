{{-- Doctors --}}

<div class="bg-container bg-gray-200 py-6">
    <div class="doctors container mx-auto py-6 px-4 font-body text-md font-medium ">
        <div class="dep-header flex justify-between items-start">
            <h3 class="font-heading font-semibold text-4xl text-gray-800 pb-8">Doctors</h3>
            <button class="text-white px-4 py-3 bg-gray-700 font-semibold max-w-64 flex items-center">
                <p class="mr-1 text-sm">{{__('All Doctors')}}</p>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="21" height="21" fill="white"><path d="M313.941 216H12c-6.627 0-12 5.373-12 12v56c0 6.627 5.373 12 12 12h301.941v46.059c0 21.382 25.851 32.09 40.971 16.971l86.059-86.059c9.373-9.373 9.373-24.569 0-33.941l-86.059-86.059c-15.119-15.119-40.971-4.411-40.971 16.971V216z"/></svg>
            </button>
        </div>
        <div class="grid lg:grid-cols-6 sm:grid-cols-3 grid-cols-2 lg:gap-x-12 gap-x-5 gap-y-5 lg:pl-6">
            @foreach($name as $key => $value)
                <div class="dep-1 max-w-80 bg-blue-800">
                    <img src="https://bhtclinic.com.tr{{$pic_path[$key]}}" alt="">
                    <h2 class="font-heading text-xl text-white px-6 pt-6 min-h-20">{{$name[$key]}}</h2>
                    <p class="text-white px-6 pt-3 pb-4">{{__($area[$key])}}</p>
                </div>
            @endforeach
        </div>
    </div>
</div>