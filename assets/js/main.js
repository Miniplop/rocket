import Vue from 'vue'
import Vuex from 'vuex'
import VueRouter from 'vue-router'

import App from './App'
import DashBoardPage from './pages/DashBoardPage'
import LoginPage from './pages/LoginPage'
import Tasks from './pages/Tasks'
import TaskDetail from './TaskDetail'

import currentUser from './store/CurrentUser'

import "../css/base.css"
import VueMaterial from 'vue-material'
import 'vue-material/dist/vue-material.min.css'
import 'vue-material/dist/theme/default.css'

Vue.use(VueMaterial);
Vue.use(VueRouter);
Vue.use(Vuex);

const routes = [
    { path : '/', component: DashBoardPage, name: 'dashBoardPage'},
    { path : '/login', component: LoginPage, name: 'loginPage'},
    { path : '/tasks', component: Tasks, name: 'tasks'},
    { path : '/tasks/:id', component: TaskDetail, name: 'taskDetail'}
];

const router = new VueRouter({
    mode: 'history',
    routes
});

const store = new Vuex.Store({
    modules: {
        currentUser
    }
});

new Vue({
    router,
    store,
    template: '<App/>',
    components: { App }
}).$mount('#app');