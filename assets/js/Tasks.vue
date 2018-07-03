<template>
    <div>
        <md-app>
            <md-app-toolbar class="md-primary">
                <span class="md-title">Rocket</span>
            </md-app-toolbar>
            <md-app-content>
                <md-list>
                    <md-list-item v-for="task in tasks" :key="task.id">
                        <span class="md-list-item-text">{{ task.name }}</span>
                        <md-button class="md-icon-button" v-on:click="deleteTask(task.id)">
                            <md-icon>delete</md-icon>
                        </md-button>
                    </md-list-item>
                </md-list>
                <md-button class="md-icon-button" v-on:click="addTask()">
                    <md-icon>add</md-icon>
                </md-button>
            </md-app-content>
        </md-app>
    </div>
</template>

<script>
 export default {
     name: 'tasks',
     data: () => ({
        tasks: []
     }),
     mounted: function() {
         this.tasks = window.__TASKS
     },
     methods: {
         deleteTask: function (id) {
             fetch("/tasks/" + id, {method: "delete"})
             .then(() => this.tasks = this.tasks.filter(task => id !== task.id))
             .catch(() => console.log('ko'))
         },
         addTask: function () {
             fetch("/tasks", {method: "post"})
                 .then((response) => response.json())
                 .then((responseJSON) => {
                     this.tasks.push(responseJSON.taskAdded);
                 })
                .catch(() => console.log('ko'))
         }
     }
 }
</script>