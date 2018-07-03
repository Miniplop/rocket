import "../css/base.css"
import Vue from 'vue'
import VueRouter from 'vue-router'
import Tasks from './Tasks'
import TaskDetail from './TaskDetail'
import App from './App'
import VueMaterial from 'vue-material'
import 'vue-material/dist/vue-material.min.css'
import 'vue-material/dist/theme/default.css' // This line here

Vue.use(VueMaterial)
Vue.use(VueRouter)

const routes = [
    { path : '/', component: Tasks, name: 'tasks'},
    { path : '/tasks/:id', component: TaskDetail, name: 'tasks'}
]

const router = new VueRouter({
    mode: 'history',
    routes
})

new Vue({
    router,
    template: '<App/>',
    components: { App }
}).$mount('#app')