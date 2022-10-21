import _ from 'lodash';
import 'bootstrap';
import axios from "axios";

window._ = _;
window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';


import store from "./store";

import Echo from 'laravel-echo';
import Pusher from 'pusher-js';


window.Pusher = Pusher;
 
window.Echo = new Echo({
    broadcaster: 'pusher',
    key: import.meta.env.VITE_PUSHER_APP_KEY,
    cluster: import.meta.env.VITE_PUSHER_APP_CLUSTER,
    forceTLS: true,
    wsPort: 6001,
    enabledTransports: ['ws', 'wss'], // <- added this param

    auth:{
        headers: {
            Authorization: `Bearer ${localStorage.getItem('token')}`,
            // Authorization: JSON.parse(localStorage.getItem('token'))
        },
    },
});


