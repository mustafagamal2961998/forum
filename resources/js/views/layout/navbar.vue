<template>
    <nav>
        <div class="navbar-container">
            <div class="navbar-content">
                <div class="navbar">

                    <div v-if="!token" class="guest">
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
                                <li class="navbar-item">
                                    <img class="icon" src="../../../assets/Media/icons/login.svg">
                                    {{$t('login')}}
                                </li>
                        </ul>

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
                                <img class="logo" src="../../../assets/Media/icons/logo.svg">
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </nav>

</template>

<script>

    export default {

        data() {
            return {
                token:localStorage.getItem('token'),
            }
        },

    }
</script>
<style scoped>
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
    height: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    align-content: center;
 }
 /* START BOTTOM BOX STYLE */
 nav .navbar-container .navbar-content .navbar .guest .navbar-list-item{
    width: calc(100%/3);
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
        width: 50%;
     }
     nav .navbar-container .navbar-content .navbar .guest .navbar-list-item .navbar-item{
         padding: 8px 15px;
         margin: 0 4px;
         font-size: 11px;
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
 }

 @media screen and (max-width: 428px) {
     nav .navbar-container .navbar-content .navbar .guest .navbar-list-item .navbar-item{
         padding: 8px 4px;
         margin: 0 2px;
         font-size: 9px;
     }
 }

</style>
