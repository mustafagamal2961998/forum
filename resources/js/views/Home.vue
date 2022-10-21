<template>
    <!-- START NAVBAR -->
    <navbar></navbar>
    <sponser></sponser>
</template>

<script>

import {mapState} from 'vuex';

import navbar from "./layout/navbar.vue";
import sponser from "./layout/sponser.vue";
export default {
    components: {
        "navbar":navbar,
        "sponser":sponser
    },
    data() {
        return {
         
            
        }
    },
    created(){

        // this.$store.dispatch('login').then(()=>{
        //     this.loadded=true;
        // });
        localStorage.setItem('Dir','rtl');   

    },

    computed:{
       // ...mapState(['user','posts']),
       
        
    },
    methods:{
    
    },
}
</script>

