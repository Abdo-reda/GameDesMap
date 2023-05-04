
<template>
    <div class="flex items-center">
        <p class="mx-auto text-6xl font-bold"> =============== MapList =============== </p>
    </div>

      
    <div>
        <div v-if="!maps" class="m-20 flex items-center">
            <p class="mx-auto text-4xl font-medium italic justify-center"> I AM LOADING </p>
        </div>
        <div v-else>
            <div v-for="map in maps">
                <MapCard :id="map.id" :name="map.name" :description="map.description" :author="map.author" :author-pic="map.authorPic"> </MapCard>
            </div>
        </div>
    </div>
    

    
</template>

<script>
import apiService from '../js/apiService.js';
import MapCard from './MapCard.vue';

/*
TODO: 
    - First, we need a loading animation/placeholder till the fetch replies, I think we can use v-if and check the value of maps if not empty,    border-4
        //I could do it with null, if it's not null then show loading otherwise show the list of maps, doing it with empty will be tricky because assume there are no maps in the db, then it will forever be loading.
*/

export default {
    data () {
        return {
            maps: null, 
        };
    },
    components: {
        MapCard
    },
    async created() {
        this.maps = await apiService.listMaps();
    },
    methods: {
    },
};
</script>

