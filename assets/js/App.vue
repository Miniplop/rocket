<template>
    <md-app>
        <md-app-toolbar class="md-primary">
            <span class="md-title">Rocket</span>
        </md-app-toolbar>
        <md-app-content>
            <router-view></router-view>
        </md-app-content>
    </md-app>
</template>

<script>
    export default {
        name: 'app',
    }
</script>