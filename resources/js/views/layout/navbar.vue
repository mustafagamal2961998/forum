<template>
    <div class="navbar-box-container">
        <nav>
            <div class="navbar-container">
                <div class="navbar-content">
                    <div class="navbar">

                        <div class="guest">
                            <!-- START BOTTOM BOX -->
                            <ul class="navbar-list-item">
                                <li class="navbar-item">
                                    <img class="icon" src="../../../assets/Media/icons/today.svg">
                                    {{$t('today')}}
                                </li>
                                <li class="navbar-item">
                                    <img class="icon" src="../../../assets/Media/icons/register.svg">
                                    {{$t('register')}}
                                </li>
                                <li class="navbar-item" @click="LoginFormBox()">
                                    <img class="icon" src="../../../assets/Media/icons/login.svg">
                                    {{$t('login')}}
                                </li>
                            </ul>

                            <div class="navbar-list-item-mobile-container">
                                <ul class="navbar-list-item-mobile">
                                    <li class="navbar-item-mobile">
                                        <img class="icon" src="../../../assets/Media/icons/today.svg">
                                    </li>
                                    <li class="navbar-item-mobile">
                                        <img class="icon" src="../../../assets/Media/icons/register.svg">
                                    </li>
                                    <li class="navbar-item-mobile" @click="LoginFormBox()">
                                        <img class="icon" src="../../../assets/Media/icons/login.svg">
                                    </li>
                                </ul>
                            </div>

                            <!-- START SEARCH BOX -->
                            <ul class="search-form-box-list-item">
                                <li class="search-form-box-item">
                                    <form class="search-form-box">
                                        <input type="text" :placeholder="$t('SearchPlaceholder')">
                                    </form>
                                </li>
                            </ul>

                            <!-- START LOGO BOX -->
                            <ul class="navbar-list-item-logo">
                                <li class="navbar-item">
                                    <router-link to="/">
                                        <img class="logo" src="../../../assets/Media/icons/logo.svg">
                                    </router-link>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </nav>

        <!-- START LOGIN BOX-->
        <transition name="bounce">


         <div v-if="ShowLogin" class="login-box-container">
             <div class="login-box-content">
                 <form action="" method="">
                     <span @click="ShowLogin= !ShowLogin" class="close-login-form-box">
                           <img class="icon" src="/resources/assets/Media/icons/close.svg">
                     </span>

                     <div class="logo">
                         <img class="logo-image" src="/resources/assets/Media/icons/logo.svg">
                     </div>
                     <div>
                             <input type="text" :placeholder="$t('username_placeholder')">
                     </div>
                     <div>
                             <input type="password" :placeholder="$t('password_placeholder')">
                     </div>
                     <div>
                         <button>{{$t('button_text')}}</button>
                     </div>
                     <div class="forgot-password">
                         <router-link to="">
                             {{$t('forgot_password')}}
                         </router-link>
                     </div>
                     <small>{{$t('logo')}}</small>
                 </form>
             </div>
         </div>

        </transition>
    </div>
</template>

<script>
    export default {

        data() {
            return {
                // token:localStorage.getItem('token'),
                ShowLogin:false,

            }
        },
        methods:{
            LoginFormBox(){
                this.ShowLogin = true;
            }

        },

    }
</script>
<style scoped>

.navbar-box-container{
    position: relative;
    width: 100%;
    text-align: center;

}
/* START LOGIN FORM BOX*/
.login-box-container{
    position: absolute;
    width: 100%;
    z-index: 999;

}
.login-box-container .login-box-content{
    width: 100%;
}

.login-box-container .login-box-content form{
    position: relative;
    width: 30%;
    margin: auto;
    background-color: #0d172f;
    border-radius: 10px;
    border: 1px solid #0F3460;
    padding: 20px 20px;
}

.login-box-container .login-box-content form .close-login-form-box{
    position: absolute;
    top: 10px;
    right: 10px;
    cursor: pointer;
    background-color: #0F3460;
    width: 30px;
    height: 30px;
    padding:9px  8px;
    border-radius: 50px;
}
.login-box-container .login-box-content form .close-login-form-box:hover{
    transition: 0.5s;
    background-color: #082649;
}
.login-box-container .login-box-content form .close-login-form-box .icon{
    width: 13px;
    display: flex;
    align-content: center;
    align-items: center;
}
.login-box-container .login-box-content form .logo .logo-image {
    width: 20%;
}
.login-box-container .login-box-content form div{
    margin: 20px 0;
    text-align: center;
}
.login-box-container .login-box-content form div input{
    width: 80%;
    height: 35px;
    font-size: 15px;
    background-color: #0F3460;
    color: #ffffff;
    border-radius: 5px;
    outline: none;
    padding: 0 10px;
    font-weight: 400;
    border:none;
}
.login-box-container .login-box-content form div button{
    width: 80%;
    height: 35px;
    font-size: 15px;
    background-color: #0F3460;
    color: #ffffff;
    border-radius: 5px;
    border:none;
    outline: none;
    font-weight: 400;
}
.login-box-container .login-box-content form div button:hover{
    transition: 0.5s;
    background-color: #09284d;

}
.login-box-container .login-box-content form div ::placeholder{
    color: #ffffff;
}
.login-box-container .login-box-content form .forgot-password{
    width: 100%;
}
.login-box-container .login-box-content form .forgot-password img{
    width: 10px;
}
.login-box-container .login-box-content form .forgot-password a{
    color: #ffffff;
    font-size: 13px;
}
.login-box-container .login-box-content form small{
    color: orange;
    font-size: 10px;
}
.login-box-container .login-box-content form .forgot-password:active{
    transform: scale(1.1);

}


nav{
    width: 100%;
    height: 70px;
    background-color:#16213E;
    border-bottom-left-radius: 5px;
    border-bottom-right-radius: 5px;
    box-shadow: 1px 1px 20px #091229;
}
 nav .navbar-container{
    width: 100%;
    height: 100%;
 }
 nav .navbar-container .navbar-content{
    width: 100%;
    height: 100%;
 }
 nav .navbar-container .navbar-content .navbar{
    width: 100%;
    height: 100%;
 }
 nav .navbar-container .navbar-content .navbar .guest {
    width: 100%;
    /*height: 100%;*/
    display: flex;
    justify-content: space-between;
    align-items: center;
    align-content: center;
 }
 /* START BOTTOM BOX STYLE */
 nav .navbar-container .navbar-content .navbar .guest .navbar-list-item{
    width: calc(100%/2);
    list-style: none;
    display: flex;
    align-items: center;
    align-content: center;
 }
 nav .navbar-container .navbar-content .navbar .guest .navbar-list-item .navbar-item{
    text-align: center;
    background-color: #1A1A2E;
    display: flex;
    justify-content: center;
    align-items: center;
    align-content: center;
    padding: 10px 15px;
    margin: 0 10px;
    font-size: 15px;
    font-weight: 400;
    color: #c9cacc;
    border-radius: 5px;
    cursor: pointer;
 }

 nav .navbar-container .navbar-content .navbar .guest .navbar-list-item .navbar-item .icon{
    width: 25px;
 }
 nav .navbar-container .navbar-content .navbar .guest .navbar-list-item .navbar-item:hover{
    transition: 0.5s all;
    color: #ffffff;
    background-color: #131321;
 }

 /* START BOTTOM BOX MOBILE  STYLE */
 nav .navbar-container .navbar-content .navbar .guest .navbar-list-item-mobile-container{
     display: none;
 }
 nav .navbar-container .navbar-content .navbar .guest .navbar-list-item-mobile{
     width: calc(100%/2);
     list-style: none;
     display: flex;
     align-items: center;
     align-content: center;
 }
 nav .navbar-container .navbar-content .navbar .guest .navbar-list-item-mobile .navbar-item-mobile{
     text-align: center;
     background-color: #1A1A2E;
     display: flex;
     justify-content: center;
     align-items: center;
     align-content: center;
     padding: 10px 15px;
     margin: 0 10px;
     font-size: 15px;
     font-weight: 400;
     color: #c9cacc;
     border-radius: 5px;
     cursor: pointer;
 }

 nav .navbar-container .navbar-content .navbar .guest .navbar-list-item-mobile .navbar-item-mobile .icon{
     width: 25px;
 }
 nav .navbar-container .navbar-content .navbar .guest .navbar-list-item-mobile .navbar-item-mobile:hover{
     transition: 0.5s all;
     color: #ffffff;
     background-color: #131321;
 }
 /* START SEARCH BOX STYLE */
 nav .navbar-container .navbar-content .navbar .guest .search-form-box-list-item{
    width: calc(100%/3);
    display: flex;
    list-style: none;
}
nav .navbar-container .navbar-content .navbar .guest .search-form-box-list-item .search-form-box-item{
    width: 100%;
}
nav .navbar-container .navbar-content .navbar .guest .search-form-box-list-item .search-form-box-item .search-form-box input{
    width: 100%;
    height: 40px;
    padding: 0 10px;
    font-size: 15px;
    font-weight: 400;
    border-radius: 5px;
    background-color: #091229;
    outline: none;
    border:none;
    color:#ffffff;
}
.search-form-box ::placeholder{
    color: #ffffff;
}
 /* START LOGO BOX STYLE */
 nav .navbar-container .navbar-content .navbar .guest .navbar-list-item-logo{
    width: calc(100%/3);
    list-style: none;
    display: flex;
    padding:0 10px;
    flex-direction: row-reverse;

 }
 nav .navbar-container .navbar-content .navbar .guest .navbar-list-item-logo .navbar-item{
    text-align: center;
    display: flex;
    justify-content: center;
    align-items: center;
    align-content: center;
    margin: 0 10px;
    cursor: pointer;
 }

 nav .navbar-container .navbar-content .navbar .guest .navbar-list-item-logo .navbar-item .icon{
    width: 30px;
 }
 nav .navbar-container .navbar-content .navbar .guest .navbar-list-item-logo .navbar-item .logo{
    width: 50px;
 }












/* START NAVBAR RESPONSIVE */
 @media screen and (max-width: 1520px) {
     nav .navbar-container .navbar-content .navbar .guest .navbar-list-item .navbar-item{
         padding: 10px 5px;
         margin: 0 5px;
         font-size: 15px;
     }
 }
 @media screen and (max-width: 1250px) {
     nav .navbar-container .navbar-content .navbar .guest .navbar-list-item .navbar-item{
         padding: 10px 2px;
         margin: 0 5px;
         font-size: 12px;
     }
 }
 @media screen and (max-width: 1028px) {
     nav .navbar-container .navbar-content .navbar .guest .navbar-list-item .navbar-item{
         padding: 10px 2px;
         margin: 0 5px;
         font-size: 12px;
     }
     nav .navbar-container .navbar-content .navbar .guest .navbar-list-item .navbar-item .icon{
         width: 20px;
     }
 }

 @media screen and (max-width: 988px) {
     nav .navbar-container .navbar-content .navbar .guest .navbar-list-item .navbar-item{
         padding: 8px 2px;
         margin: 0 4px;
         font-size: 11px;
     }
     nav .navbar-container .navbar-content .navbar .guest .navbar-list-item .navbar-item .icon{
         width: 15px;
     }
 }
 @media screen and (max-width: 864px) {
     nav .navbar-container .navbar-content .navbar .guest .navbar-list-item-logo{
         width: 0%;
     }
     nav .navbar-container .navbar-content .navbar .guest .navbar-list-item{
        width: 55%;
     }
     nav .navbar-container .navbar-content .navbar .guest .navbar-list-item .navbar-item{
         padding: 8px 15px;
         margin: 0 4px;
         font-size: 11px;
     }
     .login-box-container .login-box-content form{
         width: 50%;
     }
 }

 @media screen and (max-width: 738px) {
     nav .navbar-container .navbar-content .navbar .guest .search-form-box-list-item .search-form-box-item{
         display: none;
     }

 }

 @media screen and (max-width: 732px) {
     nav .navbar-container .navbar-content .navbar .guest .navbar-list-item .navbar-item{
         padding: 8px 10px;
         margin: 0 4px;
         font-size: 11px;
     }
 }

 @media screen and (max-width: 672px) {
     nav .navbar-container .navbar-content .navbar .guest .navbar-list-item .navbar-item{
         padding: 8px 5px;
         margin: 0 4px;
         font-size: 11px;
     }
 }
 @media screen and (max-width: 612px) {
     nav .navbar-container .navbar-content .navbar .guest .navbar-list-item{
         width: 80%;
     }
 }

@media screen and (max-width: 556px) {

    .login-box-container .login-box-content form{
        width: 70%;
    }
}


 @media screen and (max-width: 501px) {
     nav .navbar-container .navbar-content .navbar .guest .navbar-list-item{
         display: none;
     }
     nav .navbar-container .navbar-content .navbar .guest .navbar-list-item-mobile-container{
         display: block;
     }
 }



 @media screen and (max-width: 454px) {
     nav .navbar-container .navbar-content .navbar .guest .navbar-list-item{
         width: 100%;
     }
     nav .navbar-container .navbar-content .navbar .guest .navbar-list-item-logo .navbar-item{
         margin: 0 0;
     }
     nav .navbar-container .navbar-content .navbar .guest .navbar-list-item-logo .navbar-item .logo{
         width: 30px;
     }
 }
 @media screen and (max-width: 428px) {
     nav .navbar-container .navbar-content .navbar .guest .navbar-list-item{
         width: 100%;
     }
     nav .navbar-container .navbar-content .navbar .guest .navbar-list-item-logo .navbar-item{
         margin: 0 0;
     }
     nav .navbar-container .navbar-content .navbar .guest .navbar-list-item-logo .navbar-item .logo{
         width: 30px;
     }
     .login-box-container .login-box-content form{
         width: 100%;
     }
 }

 @media screen and (max-width: 428px) {
     nav .navbar-container .navbar-content .navbar .guest .navbar-list-item .navbar-item{
         padding: 8px 4px;
         margin: 0 2px;
         font-size: 9px;
     }
 }

</style>
