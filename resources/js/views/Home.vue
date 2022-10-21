<template>
    <!-- START NAVBAR -->
    <navbar></navbar>
    <sponser></sponser>
    <!-- START HOME CONTENT -->
    <div class="home-content-container">
        <div class="home-content-content">
            <div class="home-content">


             <!-- START HOME CONTENT HEADER -->
             <div class="home-content-header-container">
                 <div class="home-content-header-content">
                     <h3 class="home-content-header-text">
                       <img class="logo" src="../../assets/Media/icons/logo.svg"> {{$t('logo')}} =>
                     </h3>
                     <h5 class="home-content-header-message">
                         {{$t('home_header_message')}}  <router-link to="">{{$t('here_message')}}</router-link>
                     </h5>
                 </div>
             </div>

            </div>
        </div>
    </div>
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

<style scoped>
.home-content-container{
    width: 95%;
    height: 50px;
    margin: auto;
}
.home-content-container .home-content-content{
    width: 100%;
    height: 100%;
}
.home-content-container .home-content-content .home-content{
    width: 100%;
    height: 100%;
    background-color: #0d172f;
    display: flex;
    justify-content: space-between;
    align-items: center;
    align-content: center;
    padding-right: 20px;
    border-radius: 5px;
    border:1px solid #0F3460;
    box-shadow: 1px 2px 10px #0d172f;
}
.home-content-container .home-content-content .home-content .home-content-header-container{
    width: 50%;
    height: 100%;

}
.home-content-container .home-content-content .home-content .home-content-header-container .home-content-header-content{
   width: 100%;
   height: 100%;
   display: flex;
   align-items: center;
   align-content: center;
}
.home-content-container .home-content-content .home-content .home-content-header-container .home-content-header-content .home-content-header-text{
    color: #ffffff;
    display: flex;
    align-items: center;
    align-content: center;
    font-weight: 400;
}
.home-content-container .home-content-content .home-content .home-content-header-container .home-content-header-content .home-content-header-text .logo{
    width: 25px;
}
.home-content-container .home-content-content .home-content .home-content-header-container .home-content-header-content .home-content-header-message{
    color: silver;
    width: 50%;
    padding: 0 10px;
}
</style>
