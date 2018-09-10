<template>
    <div>
        <h1>Login</h1>

        <form>
            <div v-if="message">{{ message }}</div>
            <div>
                <label for="email">E-mail</label>
                <input type="email" id="email" v-model="email">
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" id="password" v-model="password">
            </div>

            <br>
            <br>
            <input type="button" value="Login" @click="login">
        </form>
    </div>
</template>

<script>
    export default {
        name: "Login",
        data() {
            return {
                email: "",
                password: "",
                message: ""
            }
        },
        methods: {
            login(){
                var user_data = {
                    email: this.email,
                    password: this.password,
                    _Token: {
                        fields: document.getElementById("csrf").value,
                        unlocked: "",
                        _method: "POST",
                        debug: document.getElementById("csrf").value
                    }
                };

                var config = {
                    headers: {
                        'X-CSRF-Token': document.getElementById("csrf").value
                    }
                };

                console.log("login!");
                this.$http.post('http://cake.vue/api/login', user_data, config)
                    .then(response => {
                        return response.json()
                    })
                    .then(response_data => {
                        // console.log();

                        if (response_data.status == 'success') {
                            this.message = "Привет, " + response_data.user_data.login;
                        } else {
                            this.message = response_data.message;
                        }
                    })
                ;
            }
        }
    }


</script>

<style scoped>
    label {
        display: inline-block;
        width: 100px;
    }
</style>