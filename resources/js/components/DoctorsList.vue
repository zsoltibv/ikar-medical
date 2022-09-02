<template>
    <div class="doctors container mx-auto py-6 px-4 font-body text-md font-medium">
        <div class="heading flex justify-between w-full">
            <h3 class="font-heading font-semibold text-4xl text-gray-800 pb-8">{{$t('Doctors')}}</h3>
            <select v-model="areaSelected" class="h-min p-2 border-2 border-gray-300">
                    <option :value="$t(unique_area)" v-for="(unique_area, index) in unique_areas" :key="index">
                        {{$t(unique_area)}}
                    </option>
            </select>
        </div>
        <div class="grid lg:grid-cols-6 sm:grid-cols-3 grid-cols-2 lg:gap-x-12 gap-x-5 gap-y-5 lg:pl-6">
           <div v-for="(name, index) in names" :key="index" v-show="($t(area[index]) == $t(areaSelected)) || (areaSelected == 'All Areas')">
                <div class="card-container max-w-80 bg-blue-800 h-full">
                    <img v-bind:src="'https://bhtclinic.com.tr' + picPath[index]" alt="">
                    <h2 class="font-heading text-xl text-white px-6 pt-6 min-h-20">{{ name }}</h2>
                    <p class="text-white px-6 pt-3 pb-4">{{$t(area[index])}}</p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
  props: ["name", "pic_path", "area", "unique_area"],
  data() {
    return {
        names: this.name,
        picPath: this.pic_path,
        area: this.area,
        unique_areas: this.unique_area,
        areaSelected: 'All Areas',
    };
  },
  methods: {}
};
</script>
