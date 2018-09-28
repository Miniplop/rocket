<template>
    <div>
        <md-list>
            <md-list-item v-for="task in tasks" :key="task.id">
                <span class="md-list-item-text">{{ task.name }}</span>
                <md-button class="md-icon-button" v-on:click="deleteTask(task.id)">
                    <md-icon>delete</md-icon>
                </md-button>
            </md-list-item>
        </md-list>
        <md-field>
        <label>New task</label>
        <md-input v-model="newTaskName"></md-input>
        </md-field>
        <md-button class="md-icon-button" v-on:click="addTask()">
            <md-icon>add</md-icon>
        </md-button>
    </div>
</template>

<script>
 export default {
     name: 'tasks',
     data: () => ({
        tasks: [],
        newTaskName: null,
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
             console.log(this.newTaskName)
             let payload = { name: this.newTaskName }
             fetch("/tasks", {method: "post", body: JSON.stringify(payload)})
                 .then((response) => response.json())
                 .then((responseJSON) => {
                     this.tasks.push(responseJSON.taskAdded);
                 })
                .catch(() => console.log('ko'))
         }
     }
 }
</script>