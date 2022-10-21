import Echo from "laravel-echo"
import store from "./store";
import Pusher from "pusher-js"


window.Echo = new Echo({
    broadcaster: 'pusher',
    key: import.meta.env.VITE_PUSHER_APP_KEY,
    cluster: import.meta.env.VITE_PUSHER_APP_CLUSTER,
    forceTLS: false,
    encrypted: true,
    auth:{
        headers: {
            Authorization: `Bearer ${store.state.user.token}`,
            // Authorization: JSON.parse(localStorage.getItem('token'))
        },
    },
});



