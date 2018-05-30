import "../css/base.css"
import Vue from 'vue'
import App from './App'
import VueMaterial from 'vue-material'
import 'vue-material/dist/vue-material.min.css'
import 'vue-material/dist/theme/default.css' // This line here


Vue.use(VueMaterial)

new Vue({
    el: '#app',
    template: '<App/>',
    components: { App }
})