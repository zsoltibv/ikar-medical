<template>
    <div
        class="doctors container mx-auto py-6 px-4 font-body text-md font-medium"
    >
        <div class="heading flex justify-between w-full">
            <h3 class="font-heading font-semibold text-4xl text-gray-800 pb-8">
                {{ $t("Departments") }}
            </h3>
            <select
                v-model="letterSelected"
                class="h-min p-2 border-2 border-gray-300"
            >
                <option
                    :value="index"
                    v-for="(content, index) in contents"
                    :key="convertToChar(index)"
                >
                    {{ convertToChar(index) }}
                </option>
            </select>
        </div>
        <div
            class="grid xl:grid-cols-3 lg:grid-cols-2 sm:grid-cols-2 grid-cols-2 lg:gap-x-12 gap-x-5 gap-y-5 lg:pl-6"
        >
            <div
                v-for="(content, index) in contents"
                :key="index"
                v-show="
                    content[index] == letterSelected ||
                    letterSelected == 'All Letters'
                "
            >
                <div class="card-container max-w-80 border-2 h-full">
                    <div class="heading bg-blue-800">
                        <h2
                            class="font-heading text-xl text-white px-6 pt-6 min-h-20 pb-6"
                        >
                            {{ convertToChar(index) }}
                        </h2>
                    </div>
                    <div
                        v-for="(content, index2) in contents[index]"
                        :key="index2"
                        class="content bg-white flex items-center pt-2 pb-2"
                    >
                        <p
                            class="text-black px-6 pt-1 border-white font-medium"
                        >
                            <a href="">{{ content }}</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ["content"],
    data() {
        return {
            contents: this.content,
            letterSelected: "All Letters",
        };
    },
    methods: {
        convertToChar(data) {
            return String.fromCharCode(data);
        },
    },
    mounted() {},
};
</script>
