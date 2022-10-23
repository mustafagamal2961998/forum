<template>
    <section>
        <div class="sponsor-container">
            <div class="sponsor-content">
                <div class="sponsor">
                    <!-- START LEFT sponsor -->
                    <div class="left-sponsor-content">
                        <router-link to="">

                            <div class="middle-sponsor-content-image">
                                <img  class="left-sponsor-banner" src="https://images.wallpaperscraft.com/image/single/tree_light_dark_82372_1920x1080.jpg">
<!--                                    <span class="sponsor-text">-->
<!--                                            Lorem Ipsum è un testo segnaposto utilizzato nel settore della tipografia e della stampa.-->
<!--                                            Lorem Ipsum è considerato il testo segnaposto standard sin dal sedicesimo secolo,-->
<!--                                    </span>-->
                            </div>

                        </router-link>
                    </div>
                    <!-- START MIDDLE sponsor -->
                    <div class="middle-sponsor-content">
                            <router-link to="">
                               <div class="middle-sponsor-content-image">
                                   <img  class="middle-sponsor-banner" src="https://images.wallpaperscraft.com/image/single/tree_light_dark_82372_1920x1080.jpg">
<!--                                       <span class="sponsor-text">-->
<!--                                        Lorem Ipsum è un testo segnaposto utilizzato nel settore della tipografia e della stampa.-->
<!--                                        Lorem Ipsum è considerato il testo segnaposto standard sin dal sedicesimo secolo,-->
<!--                                        </span>-->
                               </div>
                            </router-link>
                            <router-link to="">
                                <div class="middle-sponsor-content-image">
                                    <img  class="middle-sponsor-banner" src="https://images.wallpaperscraft.com/image/single/tree_light_dark_82372_1920x1080.jpg">
<!--                                    <span class="sponsor-text">-->
<!--                                            Lorem Ipsum è un testo segnaposto utilizzato nel settore della tipografia e della stampa.-->
<!--                                            Lorem Ipsum è considerato il testo segnaposto standard sin dal sedicesimo secolo,-->
<!--                                    </span>-->
                                </div>
                            </router-link>
                            <router-link to="">
                                <div class="middle-sponsor-content-image">
                                    <img  class="middle-sponsor-banner" src="https://images.wallpaperscraft.com/image/single/tree_light_dark_82372_1920x1080.jpg">
<!--                                    <span class="sponsor-text">-->
<!--                                            Lorem Ipsum è un testo segnaposto utilizzato nel settore della tipografia e della stampa.-->
<!--                                            Lorem Ipsum è considerato il testo segnaposto standard sin dal sedicesimo secolo,-->
<!--                                            </span>-->
                                </div>
                            </router-link>
                            <router-link to="">
                                <div class="middle-sponsor-content-image">
                                    <img  class="middle-sponsor-banner" src="https://images.wallpaperscraft.com/image/single/tree_light_dark_82372_1920x1080.jpg">
<!--                                    <span class="sponsor-text">-->
<!--                                            Lorem Ipsum è un testo segnaposto utilizzato nel settore della tipografia e della stampa.-->
<!--                                            Lorem Ipsum è considerato il testo segnaposto standard sin dal sedicesimo secolo,-->
<!--                                            </span>-->
                                </div>
                            </router-link>
                    </div>
                    <!-- START RIGHT sponsor -->
                    <div class="right-sponsor-content">
                        <div class="middle-sponsor-content-image">
                            <img  class="right-sponsor-banner" src="https://images.wallpaperscraft.com/image/single/chess_board_robots_animals_party_game_68407_240x400.jpg">
<!--                            <span class="sponsor-text">-->
<!--                                    Lorem Ipsum è un testo segnaposto utilizzato nel settore della tipografia e della stampa.-->
<!--                                    Lorem Ipsum è considerato il testo segnaposto standard sin dal sedicesimo secolo,-->
<!--                            </span>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</template>

<script>

    export default {

        data() {
            return {

            }
        },

    }
</script>
<style scoped>
.sponsor-container{
    width: 90%;
    margin: 30px auto;
    height: 400px;
    background-color: #0d172f;
    padding: 10px;
    border-radius: 10px;
    border:1px solid #0F3460;
    box-shadow: 1px 2px 10px #0d172f;
}
.sponsor-container .sponsor-content{
    width: 100%;
    height: 100%;
}
.sponsor-container .sponsor-content .sponsor{
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
}
/* START LEFT sponsor */
.left-sponsor-content{
    width: 20%;
    height: 100%;
}
.left-sponsor-content .middle-sponsor-content-image{
    width: 100%;
    height: 100%;
}
.left-sponsor-content .left-sponsor-banner{
    width: 100%;
    height: 100%;
    object-fit: cover;
}





/* START MIDDLE sponsor */
.middle-sponsor-content{
    position: relative;
    width:55%;
    height: 100%;
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    align-items: center;
}

.middle-sponsor-content a{
    position: relative;
    width: 45%;
    height: 45%;
    display: flex;
    margin: 0 10px;
    color: #ffffff;
}
.middle-sponsor-content .middle-sponsor-content-image {
    position: absolute;
    width: 100%;
    height: 100%;
    z-index: 99;
}
.middle-sponsor-content .middle-sponsor-banner{
    width: 100%;
    height:100%;
    object-fit: cover;
}
.middle-sponsor-content .sponsor-text{
    position: absolute;
    width: 100%;
    right: 0;
    top: 20px;
    background-color: rgba(0,0,0,0.3);
    padding: 10px;
    display: none;
}
.middle-sponsor-content-image:hover .sponsor-text{
    display: block;
    top: 0;
}


/* START RIGHT sponsor */
.right-sponsor-content{
    width: 20%;
    height: 100%;
}
.right-sponsor-content .right-sponsor-banner{
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.right-sponsor-content .middle-sponsor-content-image{
    position: relative;
    width: 100%;
    height: 100%;
}
.right-sponsor-content .middle-sponsor-content-image .sponsor-text{
    position: absolute;
    width: 100%;
    height: 100%;
    right: 0;
    background-color: rgba(0,0,0,0.3);
    padding: 10px;
}

/* START SPONSOR RESPONSIVE*/
@media screen and (max-width: 832px) {
    .middle-sponsor-content a{
        width: 49%;
        height: 25%;
        margin: 0;
    }
}
@media screen and (max-width: 832px) {
    .middle-sponsor-content{
        width: 100%;
    }
    .left-sponsor-content {
        display: none;
    }
    .right-sponsor-content {
        display: none;
    }
}


</style>
