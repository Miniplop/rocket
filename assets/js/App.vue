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
                        <md-button class="md-icon-button" v-on:click="deleteTask">
                            <md-icon>delete</md-icon>
                        </md-button>
                    </md-list-item>
                </md-list>
            </md-app-content>
        </md-app>
    </div>
</template>

<script>
 export default {
     name: 'app',
     data: () => ({
        tasks: []
     }),
     mounted: function() {
         this.tasks = window.__TASKS
     },
     methods: {
         deleteTask: function () {
             this.tasks.pop()
             console.log('hello')
         }
     }
 }
</script>
