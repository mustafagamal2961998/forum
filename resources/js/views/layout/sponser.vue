<template>
    <section>
        <div class="sponser-container">
            <div class="sponser-content">
                <div class="sponser">
                    <!-- START LEFT SPONSER -->
                    <div class="left-sponser-content">
                        <img  class="left-sponser-banner" src="https://images.wallpaperscraft.com/image/single/playing_cards_cards_game_205336_240x400.jpg">

                    </div>
                    <!-- START MIDDLE SPONSER -->
                    <div class="middle-sponser-content">
                            <router-link to="/test">
                                <img  class="middle-sponser-banner" src="https://images.wallpaperscraft.com/image/single/tree_light_dark_82372_1920x1080.jpg">
                            </router-link>
                            <router-link to="/test">
                                <img  class="middle-sponser-banner" src="https://images.wallpaperscraft.com/image/single/skittles_bowling_game_161508_800x600.jpg">
                            </router-link>
                            <router-link to="/test">
                                <img  class="middle-sponser-banner" src="https://images.wallpaperscraft.com/image/single/2014_winter_olympics_closing_ceremony_sochi_2014_olympic_games_93006_3110x2045.jpg">
                            </router-link>
                            <router-link to="/test">
                                <img  class="middle-sponser-banner" src="https://images.wallpaperscraft.com/image/single/tree_light_dark_82372_1920x1080.jpg">
                            </router-link>
                    </div>
                    <!-- START RIGHT SPONSER -->
                    <div class="right-sponser-content">
                        <img  class="right-sponser-banner" src="https://images.wallpaperscraft.com/image/single/chess_board_robots_animals_party_game_68407_240x400.jpg">
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
.sponser-container{
    width: 90%;
    margin: 30px auto;
    height: 400px;
    background-color: #0d172f;
    padding: 10px;
    border-radius: 10px;
    border:1px solid #0F3460;
    box-shadow: 1px 2px 10px #0d172f;
}
.sponser-container .sponser-content{
    width: 100%;
    height: 100%;
}
.sponser-container .sponser-content .sponser{
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    align-items: center;
}
/* START LEFT SPONSER */
.left-sponser-content{
    width: 20%;
    height: 100%;
}
.left-sponser-content .left-sponser-banner{
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* START MIDDLE SPONSER */
.middle-sponser-content{
    width:55%;
    height: 100%;
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    align-items: center;
}
.middle-sponser-content a{
    width: 45%;
    height: 45%;
    display: flex;
    margin: 0 10px;
}
.middle-sponser-content .middle-sponser-banner{
    width: 100%;
    height:100%;
    object-fit: cover;
}
/* START RIGHT SPONSER */
.right-sponser-content{
    width: 20%;
    height: 100%;
}
.right-sponser-content .right-sponser-banner{
    width: 100%;
    height: 100%;
    object-fit: cover;
}
</style>
