<template>
    <div>
        <md-app>
            <md-app-toolbar class="md-primary">
                <span class="md-title">Rocket</span>
            </md-app-toolbar>
            <md-app-content>
                <md-list>
                    <md-list-item v-for="task in tasks">
                        <span class="md-list-item-text">{{ task.name }}</span>
                    </md-list-item>
                </md-list>
            </md-app-content>
        </md-app>
    </div>
</template>

<script>
 export default {
     name: 'app'
 }
</script>
