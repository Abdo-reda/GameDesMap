
<template>
    <div class="flex items-center">
        <p class="mx-auto text-6xl font-bold"> =============== MapList =============== </p>
    </div>

      
    <div>
        <div v-if="!maps" class="m-20 flex items-center">
            <p class="mx-auto text-4xl font-medium italic justify-center"> I AM LOADING </p>
        </div>
        <div v-else>
            <div v-for="map in maps" :key="map.id">
                <router-link :to=" '/map/'+map.id ">
                    <MapCard  @update-map-list="updateMapList" :id="map.id" :propName="map.name" :propDescription="map.description" :propAuthor="map.author" :propAuthor-pic="map.authorPic"> </MapCard> 
                </router-link> 
            </div>
        </div>
        <div>
            <div class="mx-auto p-1 rounded-xl w-fit justify-center hover:cursor-pointer transition duration-100 ease-in-out hover:shadow-lg dark:hover:shadow-black/30" @click="addCard">
                <object type="image/svg+xml" :data="addSVG"  class="h-16 w-16 pointer-events-none"></object>
            </div>
        </div>
    </div>
    

    
</template>

<script>
import apiService from '../js/apiService.js';
import MapCard from './MapCard.vue';
import addSVG from '../assets/svgs/add_card.svg'

/*
TODO: 
    - First, we need a loading animation/placeholder till the fetch replies, I think we can use v-if and check the value of maps if not empty,    border-4
        //I could do it with null, if it's not null then show loading otherwise show the list of maps, doing it with empty will be tricky because assume there are no maps in the db, then it will forever be loading.
*/

export default {
    data () {
        return {
            addSVG,
            maps: null, 
        };
    },
    components: {
        MapCard
    },
    async created() {
        await this.updateMapList();
    },
    methods: {
        async addCard(){
            await apiService.createMap({});
            await this.updateMapList();
        },
        async updateMapList(){
            this.maps = await apiService.listMaps();
            console.log(this.maps);
        },
    },
};
</script>

