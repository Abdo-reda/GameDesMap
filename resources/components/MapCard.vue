
<template>
    <div class="p-6 max-w-4xl h-1000 mx-auto my-10 bg-white rounded-xl shadow-lg flex items-center divide-x divide-gray-300/50"> 
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
</template>

<script>

/*
TODO: 
 
*/

export default {
    data () {
        return {
        };
    },
    props: {
        name: String,
        description: String,
        authorPic: String,
        author: String,
    }
};
</script>