## Setup:
    * composer install
    * npm install
    * npm install vue
    * npm install vue-loader
    * npm install vue-router
    * npm install @vitejs/plugin-vue
    * setup tailwind
    * update app.js + app.blade.php + web.php + vite.config.js + ...
    * npm run dev
    * php artisan serve

## TODO:
* Add a search functionality
* Use TypeScript everywhere
* Define the relations in the models and the fillable objects
* Edit and store new maps.
    - the hover over the edit buttons
    - make the description and extend area extend to the right as much as possible.
    - also make sure that if no new date is sent then it uses the old data and doesn't replace it with null
    - also add request validation for the controller actions 
    - return correct status codes and so on .. try and make it follow the restful conventions somewhat ..
    - updated the current view with the returned data from the request !
    - add an add functionality, a way to store new maps
    - what about icons for maps and author images ... how will we handle those? manually? naaaaah maybe we have a default icon and image and we have to set it manually naaaah but ... naaah I odn't know