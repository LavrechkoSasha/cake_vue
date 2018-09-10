<template>
    <div id="app">

        <div class="nav">
            <ul>
                <li><router-link tag="li" exact to="/" active-class="active"><a>Home</a></router-link></li>
                <li><router-link tag="li" to="/login" active-class="active"><a>Login</a></router-link></li>
            </ul>
        </div>

        <router-view></router-view>
    </div>
</template>

<script>
    export default {
        name: 'app',
        data() {
            return {
                msg: 'Welcome to Your Vue.js App'
            }
        }
    }
</script>

<style>
    #app {
        font-family: 'Avenir', Helvetica, Arial, sans-serif;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        text-align: center;
        color: #2c3e50;
        margin-top: 60px;
    }

    h1, h2 {
        font-weight: normal;
    }

    ul {
        list-style-type: none;
        padding: 0;
    }

    li {
        display: inline-block;
        margin: 0 10px;
        padding: 10px;
    }

    a {
        color: #42b983;
    }

    li.active {
        background-color: black;
    }
</style>
