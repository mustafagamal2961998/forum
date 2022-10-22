<template>
    <!-- START NAVBAR -->
    <navbar></navbar>
    <sponsor></sponsor>
    <!-- START HOME CONTENT -->
    <div class="home-content-container">
        <!-- START HOME CHOOSE CONTENT -->
        <div class="home-content-choose-container">
            <div class="home-content-choose-content">
                <div class="home-content-choose">
                    <div class="home-content-choose-head-title">
                        مواضيع تهمك
                    </div>
                    <div class="home-content-choose-text">
                        <router-link to="">
                            <img class="home-content-choose-icon" src="../../assets/Media/icons/logo.svg">
                            {{$t('for_advertise')}}
                        </router-link>
                    </div>
                    <div class="home-content-choose-text">
                        <router-link to="">
                            <img class="home-content-choose-icon" src="../../assets/Media/icons/logo.svg">
                            {{$t('depart_management')}}
                        </router-link>
                    </div>
                    <div class="home-content-choose-text">
                        <router-link to="">
                            <img class="home-content-choose-icon" src="../../assets/Media/icons/logo.svg">
                            <span> {{$t('important_text')}} : </span>  {{$t('for_signup')}}
                        </router-link>
                    </div>

                </div>
            </div>
        </div>
        <div class="home-content-content">
            <div class="home-content">


             <!-- START HOME CONTENT HEADER -->
             <div class="home-content-header-container">
                 <div class="home-content-header-content">
                     <div class="home-content-header-text">
                       <img class="logo" src="../../assets/Media/icons/logo.svg"> {{$t('logo')}} :
                     </div>
                     <div class="home-content-header-message">
                         .:: {{$t('home_header_message')}}  <router-link to="">{{$t('here_message')}}</router-link> ::.
                     </div>
                 </div>
             </div>

            </div>
        </div>
    </div>

    <department></department>
</template>

<script>

import {mapState} from 'vuex';

import navbar from "./layout/navbar.vue";
import sponsor from "./layout/sponsor.vue";
import department from "./layout/department.vue";
export default {
    components: {
        "navbar":navbar,
        "sponsor":sponsor,
        "department":department
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
    margin: auto;
}
/*START HOME CHOOSE STYLE */
.home-content-container .home-content-choose-container{
    width: 100%;
    margin: 0 auto 10px;
}
.home-content-container .home-content-choose-container .home-content-choose-content{
    width: 100%;
}
.home-content-container .home-content-choose-container .home-content-choose-content{
    width: 100%;
}

.home-content-container .home-content-choose-container .home-content-choose-content .home-content-choose{
    width: 100%;
    background-color: #0d172f;
    border-radius: 10px;
    padding: 0 0 10px;
    border:1px solid #0F3460;
}
.home-content-container .home-content-choose-container .home-content-choose-content .home-content-choose .home-content-choose-head-title{
    width: 100%;
    padding: 5px;
    background-color:#0F3460;
    color: #ffffff;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
}
.home-content-container .home-content-choose-container .home-content-choose-content .home-content-choose .home-content-choose-text{
  width: 100%;
  padding: 0 10px;
  color: orange;
  font-size: 14px;
  display: flex;
  align-items: center;
  align-content: center;
}
.home-content-container .home-content-choose-container .home-content-choose-content .home-content-choose .home-content-choose-text span{
    color: #ff0000;
}
.home-content-container .home-content-choose-container .home-content-choose-content .home-content-choose .home-content-choose-text a{
    color: orange;
}
.home-content-container .home-content-choose-container .home-content-choose-content .home-content-choose .home-content-choose-text a:hover{
    transition: 0.5s all;
    color: #c98405;
}
.home-content-container .home-content-choose-container .home-content-choose-content .home-content-choose .home-content-choose-text .home-content-choose-icon{
    width: 15px;
}




/*START HOME TOP CONTENT*/
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
    width: 100%;
    height: 100%;

}
.home-content-container .home-content-content .home-content .home-content-header-container .home-content-header-content{
   width: 100%;
   height: 40px;
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
.home-content-container .home-content-content .home-content .home-content-header-container .home-content-header-content .home-content-header-message a{
    color: orange;
}
.home-content-container .home-content-content .home-content .home-content-header-container .home-content-header-content .home-content-header-message a:hover{
    transition: 0.5s all;
    color: #c98405;
}


/*START HOME RESPONSIVE */




@media screen and (max-width: 669px) {
    .home-content-container .home-content-content .home-content .home-content-header-container .home-content-header-content .home-content-header-text{
       font-size: 14px;
    }
    .home-content-container .home-content-content .home-content .home-content-header-container .home-content-header-content .home-content-header-message{
        font-size: 10px;
    }
}

@media screen and (max-width: 525px) {
    .home-content-container .home-content-content .home-content{
        padding-right: 0;
    }
    .home-content-container .home-content-content .home-content .home-content-header-container .home-content-header-content .home-content-header-text .logo{
        width: 15px;
    }
    .home-content-container .home-content-content .home-content .home-content-header-container .home-content-header-content .home-content-header-text{
        display: none;
    }
    .home-content-container .home-content-content .home-content .home-content-header-container .home-content-header-content .home-content-header-message{
        width: 100%;
        font-size: 10px;
    }
}

@media screen and (max-width: 478px) {
    .home-content-container .home-content-choose-container .home-content-choose-content .home-content-choose .home-content-choose-text{
        font-size: 10px;
    }
    .home-content-container .home-content-choose-container .home-content-choose-content .home-content-choose .home-content-choose-head-title{
        font-size: 13px;
    }
}
@media screen and (max-width: 362px) {
    .home-content-container .home-content-choose-container .home-content-choose-content .home-content-choose .home-content-choose-text{
        font-size: 8px;
    }
}

</style>
