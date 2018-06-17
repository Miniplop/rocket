import Vue from 'vue';
import Tasks from '../assets/js/Tasks.vue';
import { assert } from 'chai'

global.window = { __TASKS : [{name: 'toto', id: 1}] };

describe('Tasks test', () => {
    it('should mount', () => {
        const constructor = Vue.extend(Tasks);

        const task = new constructor({
        }).$mount()

        assert.equal(task.$data.tasks[0].name, 'toto')
        assert.equal(task.$data.tasks[0].id, 1)
    })
})
