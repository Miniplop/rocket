<template>
    <md-field v-if="task">
        <md-input v-model="task.name"></md-input>
    </md-field>
</template>

<script>
    export default {
        name: "taskDetail",
        data: () => ({
            task: null,
        }),
        mounted: function() {
            this.task = window.__TASK
        },
    }
</script>
