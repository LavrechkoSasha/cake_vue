import VueRouter  from 'vue-router';
// import Home from './Pages/Home'
// import Orders from './Pages/Orders'
// import Login from './Pages/Login'

var Home = function (resolve) { require.ensure(['./Pages/Home'], function () { resolve(require('./Pages/Home'))});};
var Orders = function (resolve) { require.ensure(['./Pages/Orders'], function () { resolve(require('./Pages/Orders'))});};
var Login = function (resolve) { require.ensure(['./Pages/Login'], function () { resolve(require('./Pages/Login'))});};

export default new VueRouter({
    routes: [
        {
            path: '',
            component: Home
        },
        {
            path: '/orders',
            component: Orders
        },
        {
            path: '/login',
            component: Login
        }
    ],
    mode: 'history'
})