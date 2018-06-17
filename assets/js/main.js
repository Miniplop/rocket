import "../css/base.css"
import Vue from 'vue'
import Tasks from './Tasks'
import VueMaterial from 'vue-material'
import 'vue-material/dist/vue-material.min.css'
import 'vue-material/dist/theme/default.css' // This line here

Vue.use(VueMaterial)

new Vue({
    el: '#app',
    template: '<Tasks/>',
    components: { Tasks }
})