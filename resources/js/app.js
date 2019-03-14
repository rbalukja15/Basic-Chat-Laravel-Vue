/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('chat-message', require('./components/ChatMessage.vue').default);
Vue.component('chat-log', require('./components/ChatLog.vue').default);
Vue.component('chat-composer', require('./components/ChatComposer.vue').default);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */



new Vue({
    el: '#app',
    data: {
        messages: [],
        usersInRoom: []
    },
    methods: {
        addMessage(message) {
            //Add to existing messages
            this.messages.push(message);

            //Persist to the database
            axios.post('/messages', message).then(response => {
                console.log('Posted');
            }).catch(error => {
                console.log(error.message);
            })
        }
    },
    created() {
        axios.get('/messages').then( response => {
            this.messages = response.data;   
        });

        window.Echo.join('chatroom')
            .here((users) => {
                this.usersInRoom = users;
            })
            .joining( (user) => {
                this.usersInRoom.push(user);
            } )
            .leaving((user) => {
                this.usersInRoom = this.usersInRoom.filter( u => u != user);
            })
            .listen('MessagePosted', (e) => {
                this.messages.push({
                    message: e.message.message,
                    user: e.user
                });
            });

    }
});
