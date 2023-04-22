<template>
    <div>
        <h1 class="text-3xl font-bold underline"> Main App </h1>
        <!-- <div class="absolute inset-0 bg-[url(/img/grid.svg)] bg-center [mask-image:linear-gradient(180deg,white,rgba(255,255,255,0))]"> </div>
        <div class="relative bg-white px-6 pb-8 pt-10 shadow-xl ring-1 ring-gray-900/5 sm:mx-auto sm:max-w-lg sm:rounded-lg sm:px-10">
            <div class="mx-auto max-w-md">
                <div class="divide-y divide-gray-300/50">
                    <div class="space-y-6 py-8 text-base leading-7 text-gray-600">
                        <p>Trying random stuff out</p>
                    </div>
                    <div class="pt-8 text-base font-semibold leading-7">
                        <p class="text-gray-900">What is going on ???</p>
                        <p>
                            <a href="https://tailwindcss.com/docs" class="text-sky-500 hover:text-sky-600">Read the docs &rarr;</a>
                        </p>
                    </div>
                </div>
            </div>
        </div> -->
   

        <!-- Your Vue application template goes here -->
        
        <div>
            <router-view> </router-view>
        </div>
        <nav>
            <ul>
                <li> <router-link to="/">Go to Home</router-link> </li>
                <li> <router-link to="/about">Go to About</router-link> </li>
            </ul>
        </nav>

    </div>
  </template>
  
  <script>
  export default {
    // Your Vue application logic goes here
  }
  </script>