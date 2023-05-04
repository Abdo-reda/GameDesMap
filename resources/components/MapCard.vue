
<template>
    <div v-if="!isEditable">
        <div class="p-6 max-w-4xl h-fit mx-auto my-10 bg-white rounded-xl shadow-lg"> 
            <div class="m-0 p-1 rounded-md float-right hover:cursor-pointer transition duration-100 ease-in-out hover:shadow-lg dark:hover:shadow-black/30" @click="isEditable = !isEditable">
                <object type="image/svg+xml" :data="editSVG"  class="h-8 w-8 pointer-events-none"></object>
            </div>
            <div class="flex items-center divide-x divide-gray-300/50">
                <div class="p-3 w-4/5">
                <div class="p-3 m-0 flex items-center space-x-4">
                    <svg class="h-20 w-20">  <circle cx="50%" cy="50%" r="50%" fill="red" /> </svg>
                    <p class="m-0 text-4xl font-medium text-black"> {{name}} </p>
                </div>
                <div>
                    <p class=""> {{ description }} </p>
                </div>
                </div>
                <div class="p-3 items-center w-1/5">
                    <img class="" :src="authorPic" alt=""/>
                    <p class=""> {{author}}</p>
                </div>
            </div> 
        </div>
    </div>


   
    <div v-else>
        <div class="p-6 max-w-4xl h-fit mx-auto my-10 bg-white rounded-xl shadow-lg"> 
            <div class="m-0 p-1 rounded-md float-right hover:cursor-pointer transition duration-100 ease-in-out hover:shadow-lg dark:hover:shadow-black/30" @click="submit">
                <object type="image/svg+xml" :data="checkSVG"  class="h-8 w-8 pointer-events-none"></object>
            </div>
            <div class="flex items-center divide-x divide-gray-300/50">
                <div class="p-3 w-4/5">
                <div class="p-3 m-0 flex items-center space-x-4">
                    <svg class="h-20 w-20">  <circle cx="50%" cy="50%" r="50%" fill="red" /> </svg>
                    <input v-model="updatedName" class="m-0 p-2 text-4xl font-medium text-black" :placeholder="name" />
                </div>
                <div>
                    <textarea v-model="updatedDesc" :placeholder="description"> </textarea>
                </div>
                </div>
                <div class="p-3 items-center w-1/5">
                    <img class="" :src="authorPic" alt=""/>
                    <input v-model="updatedAuthor" :placeholder="author" />
                </div>
            </div> 
        </div>
    </div>

    

</template>

<style>

/* #temp:hover,
#temp:focus {
  filter: invert(27%) sepia(51%) saturate(100%) hue-rotate(346deg) brightness(104%) contrast(97%);  This is not recommended, it would also be better if I can change the stroke of the svg itself, but thats not possible because I am using the edit.svg, have to access comp from js .. :( 
} */
</style>

<script>
import editSVG from '../assets/svgs/edit.svg';
import checkSVG from '../assets/svgs/check.svg';
import apiService from '../js/apiService';

/*

- change how the svgs are dispalyed, I want when I hover over the svg, they get filled with the grey color and not that the div has a drop shadow ... 
- fix the transition from isEditable to nonEditable
- make everything use type script instead .. this should in the beginning, the sooner the better
*/

export default {
    data () {
        return {
            editSVG,
            checkSVG,
            isEditable: false,
            updatedName: "",
            updatedDesc: "",
            updatedAuthor: "",
        };
    },
    props: {
        id: Number,
        name: String,
        description: String,
        authorPic: String,
        author: String,
    },
    methods: {
        async submit(){
            console.log("submitting");
            let res = await apiService.updateMap(this.id, {
                name: this.updatedName,
                description: this.updatedDesc,
                author: this.updatedAuthor,
            });
            console.log(res);
            this.isEditable = !this.isEditable;
        },
    }
};
</script>