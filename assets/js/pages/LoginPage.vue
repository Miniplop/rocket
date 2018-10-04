<template>
    <div class="login">
        <h1>Login</h1>
        <input type="text" name="username" v-model="username" placeholder="Username" />
        <input type="password" name="password" v-model="password" placeholder="Password" />
        <button type="button" v-on:click="login()">Login</button>
    </div>
</template>

<script>
    import { mapMutations } from 'vuex';

    export default {
        name: "LoginPage",
        data() {
            return {
                username: "",
                password: ""
            }
        },
        methods: {
            login() {
                if (this.isValidUser()) {
                    this.setUser(this.username);
                    this.$router.push('/tasks')
                }
            },
            isValidUser() {

            },
            ...mapMutations('currentUser', [
                'setUser'
            ]),
        }
    }
</script>

<style scoped>

</style>