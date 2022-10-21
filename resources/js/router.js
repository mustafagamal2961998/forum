import {createRouter,createWebHistory} from "vue-router";


// User Components
import Home from "./views/Home.vue";
import store from "./store";
import test from "./views/test.vue"

const routes = [
    {
        path:'/', // Url route
        name:'Home',
        component:Home, // Component name
        meta:{
            isGuest:true
        },
    },
    {
        path:'/test', // Url route
        name:'test',
        component:test, // Component name
        meta:{
            isGuest:true
        },
    },
    
];

const router = createRouter({

    history:createWebHistory(),
    routes

});

router.beforeEach((toRoute, fromRoute, next) => {
     window.document.title = `${import.meta.env.VITE_APP_TITLE} - ${toRoute.name}`;
     next();
});

// router.beforeEach((to,form,next)=>{
//
//     if(to.meta.requirdAuth && !store.state.user.token){
//         next({name:'Login'})
//     } else if(store.state.user.token && ( to.meta.isGuest ) ) {
//         next({name:'Home'});
//           window.location.href='home'
//     } else {
//         next();
//     }
// });





export default router
