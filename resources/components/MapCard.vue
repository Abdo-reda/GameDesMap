
<template>
    <div v-if="!isEditable">
        <div class="p-6 max-w-4xl h-fit mx-auto my-10 bg-white rounded-xl shadow-lg"> 
            <div class="m-0 p-1 rounded-md float-right hover:cursor-pointer transition duration-100 ease-in-out hover:shadow-lg dark:hover:shadow-black/30" @click="deleteMap">
                <object type="image/svg+xml" :data="deleteSVG"  class="h-8 w-8 pointer-events-none"></object>
            </div>
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
                    <p class="italic text-center"> {{author}}</p>
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
                    <input v-model="name" class="m-0 p-2 text-4xl leading-normal font-medium text-gray-500" :placeholder="name" />
                </div>
                <div>
                    <textarea v-model="description" :placeholder="description" class="w-full text-gray-500 p-2"> </textarea>
                </div>
                </div>
                <div class="p-3 items-center w-1/5">
                    <img class="" :src="authorPic" alt=""/>
                    <input v-model="author" :placeholder="author" class="text-gray-500 p-1"/>
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
import deleteSVG from '../assets/svgs/delete.svg'
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
            deleteSVG,
            isEditable: false,
            name: this.propName,
            description: this.propDescription,
            authorPic: this.propAuthorPic,
            author: this.propAuthor,
        };
    },
    props: {
        id: Number,
        propName: String,
        propDescription: String,
        propAuthorPic: String,
        propAuthor: String,
    },
    methods: {
        async submit(){
            let res = await apiService.updateMap(this.id, {
                name: this.name,
                description: this.description,
                author: this.author,
            });
            this.isEditable = !this.isEditable;
        },
        async deleteMap(){
            //this.$emit('delete-map', this.id);
            await apiService.deleteMap(this.id);
            this.$emit('update-map-list');
        },
    }
};
</script>