<template>
    <div>
        <h1> Main App </h1>
        <!-- Your Vue application template goes here -->
        
        <div>
            <router-view> </router-view>
        </div>
        <nav>
            <ul>
                <li> <router-link to="/">Go to Home</router-link> </li>
                <li>   <router-link to="/about">Go to About</router-link> </li>
            </ul>
        </nav>

    </div>
  </template>
  
  <script>
  export default {
    // Your Vue application logic goes here
  }
  </script>