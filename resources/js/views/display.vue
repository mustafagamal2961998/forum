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


    <!-- START topic -->
    <div class="topic-container">
        <div class="topic-content">
            <div class="topic">

                <!--  START DEPARTMENT HEAD -->
                <div class="topic-head">
                    <div class="topic-table-content">
                        <div class="department-title">

                            {{$t('logo')}} ::.
                            {{this.DepartmentTitle}}
                            <img class="icon" src="../../assets/Media/icons/topic/directicon.svg">
                            {{this.DepartmentName}}
                        </div>

                        <table  class="topic-table">


                            <thead>
                                <tr>

                                    <th class="forum">الموضوع / كاتب الموضوع</th>
                                    <th class="topics">تقيم الموضوع </th>
                                    <th class="last-comment">آخر تعليق</th>
                                    <th class="posts">عدد التعليقات </th>
                                </tr>
                            </thead>

                            <tbody>

<!--                            <tr>-->
<!--                                <td class="department-table-head-title" colspan="5">-->
<!--                                    <img class="icon" src="../../assets/Media/icons/department/department_title.svg" alt="Icon"> {{Title.department_title}}-->
<!--                                </td>-->
<!--                            </tr>-->

                            <tr v-for="TopicDepartmentName in Topics.data" :key="TopicDepartmentName.id" >
                                <td class="topic-name">

                                    <router-link :to="{path:'/display/'+TopicDepartmentName.id}">
                                        <img class="avatar" :src="TopicDepartmentName.user.avatar" alt="Icon">
                                        {{TopicDepartmentName.topic_title}}
                                    </router-link>
                                    <br>
                                    <small>
                                        {{$t('by')}} : {{TopicDepartmentName.user.first_name + ' '+ TopicDepartmentName.user.last_name}}
                                    </small>

                                </td>


                                <td>
                                    <div class="topic-rate">

                                            <img class="icon" src="../../assets/Media/icons/topic/ratestar.svg" alt="Icon">
                                            <img data-title="hello" class="icon" src="../../assets/Media/icons/topic/ratestar.svg" alt="Icon">
                                            <img data-title="hello" class="icon" src="../../assets/Media/icons/topic/ratestar.svg" alt="Icon">
                                            <img data-title="hello" class="icon" src="../../assets/Media/icons/topic/ratestar.svg" alt="Icon">
                                            <img data-title="hello" class="icon" src="../../assets/Media/icons/topic/ratestar.svg" alt="Icon">

                                        <span>{{$t('ratetext')}}</span>

                                    </div>
                                </td>


                                <td class="last-comment-avatar">

                                    <div v-for="data in TopicDepartmentName.comments.splice(-1)">

                                        <img class="avatar" :src="data.user.avatar" alt="Icon">

                                        <span>
                                            {{data.user.first_name + ' ' + data.user.last_name}}
                                          <br>
                                          <small> 10/22/2022 - 07:14 AM</small>
                                      </span>
                                    </div>
                                </td>

                                <td class="comment-count">

                                    <div>

                                        <img class="icon" src="../../assets/Media/icons/department/comment_count.svg" alt="Icon">
                                        <br>
                                        <small>
                                            {{TopicDepartmentName.comments.length}}
                                        </small>
                                    </div>
                                </td>




                            </tr>
















                            </tbody>

                        </table>







                    </div>


                </div>
            </div>
        </div>
        <Pagination :data="Topics" @pagination-change-page="GetTopic">
            <template #prev-nav>
                <span> &#35;	 {{$t('previous')}} </span>
            </template>
            <template #next-nav>
                <span>&#35;	 {{$t('next')}}</span>
            </template>
        </Pagination>
    </div>

</template>

<script>


import axiosClient from "@/axios";
import navbar from "./layout/navbar.vue";
import sponsor from "./layout/sponsor.vue";
import LaravelVuePagination from 'laravel-vue-pagination';


export default {
    components: {
        "navbar":navbar,
        "sponsor":sponsor,
        'Pagination': LaravelVuePagination

    },
    data() {
        return {
            id:this.$route.params.id,
            Topics:{},
            DepartmentTitle:null,
            DepartmentName:null,
        }
    },
    created(){



    },
    mounted() {
    this.GetTopic();
   },
    computed:{
        // ...mapState(['user','posts']),


    },
    methods:{
        GetTopic(page){
            // //Get All topics
            return axiosClient.get(`topic/`+ this.id + `?page=${page}`).then(response => {
                this.Topics = response.data.AllTopicDataByDepartment;

                this.DepartmentName = response.data.DepartmentName.department_name;
                // console.log(response.data.DepartmentName.department_name)
                this.DepartmentTitle= response.data.DepartmentName.title_department.department_title;

                return response;
            });
        }
    },
}

</script>



<style scoped>
.topic-rate{
   position: relative;
   text-align: center;
}

.topic-rate span{
    position: absolute;
    top: 20px;
    left: 15%;
    font-size: 10px;
    color: orange;
    background-color: #0F3460;
    padding: 2px 10px;
    display: none;
    border-radius: 5px;
}
.topic-rate:hover span{
    display: block;
}




/* START topic STYLE */
.topic-container{
    width: 95%;
    margin: auto;
    padding-top: 10px;
}
.topic-container .topic-content{
    width: 100%;
}

.topic-container .topic-content .topic{
    width: 100%;
    background-color: #0d172f;
    border-radius: 10px;
    border: 1px solid #0F3460;
    padding: 5px;
}
.topic-container .topic-content .topic .topic-head{
    width: 100%;
}

.topic-container .topic-content .topic .topic-head .topic-table-content{
    margin: 0 0 10px 0;
}

/*START TABLE STYLE */
.topic-container .topic-content .topic .topic-head .topic-table-content .topic-table{
    width: 100%;
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
}
.topic-container .topic-content .topic .topic-head .topic-table-content .department-title{
    width: 100%;
    text-align: justify;
    font-size: 15px;
    font-weight: 500;
    margin: 0 0 10px 0;
    background-color: #0F3460;
    border-radius: 1px;
    padding: 5px 10px;
    color: orange;
    display: flex;
}
.topic-container .topic-content .topic .topic-head .topic-table-content .department-title .icon{
    width: 15px;
    margin: 0 5px;
}
.topic-container .topic-content .topic .topic-head .topic-table-content .topic-table thead{
    width: 100%;
    color: #ffffff;
}

.topic-container .topic-content .topic .topic-head .topic-table-content .topic-table thead tr th{
    font-size: 13px;
    font-weight: normal;
    padding: 5px 0;
    background-color: #0F3460;
    text-align: center;
}

.topic-container .topic-content .topic .topic-head .topic-table-content .topic-table thead tr .forum{
    width: 60%;
    padding: 0 10px;
    text-align: justify;
}

/*START topic NAME*/
.topic-container .topic-content .topic .topic-head .topic-table-content .topic-table .avatar{
    width: 40px;
    height: 40px;
    border-radius: 50%;
    object-fit: cover;
    border: 2px solid orange;
}

.topic-container .topic-content .topic .topic-head .topic-table-content .topic-table .topic-rate .icon{
    width: 20px;
}




/*START topic NAME STYLE*/

.topic-container .topic-content .topic .topic-head .topic-table-content .topic-table tbody tr td{
    border-bottom: 1px solid #0F3460;
}
.topic-container .topic-content .topic .topic-head .topic-table-content .topic-table tbody tr td div{
    text-align: center;
}
.topic-container .topic-content .topic .topic-head .topic-table-content .topic-table tbody tr .last-comment-avatar{
    color: #ffffff;
    font-weight: bold;

}
.topic-container .topic-content .topic .topic-head .topic-table-content .topic-table tbody tr .last-comment-avatar div{
    width: 100%;
    display: flex;
    align-items: center;
    align-content: center;
}
.topic-container .topic-content .topic .topic-head .topic-table-content .topic-table tbody tr .last-comment-avatar div span{
    text-align: justify;
    font-size: 12px;
    padding: 0 5px;
}
.topic-container .topic-content .topic .topic-head .topic-table-content .topic-table tbody tr .last-comment-avatar div small{
    font-size: 10px;
}
.topic-container .topic-content .topic .topic-head .topic-table-content .topic-table tbody tr .last-comment-avatar small{
    font-weight: normal;
    font-size: 11px;
}
.topic-container .topic-content .topic .topic-head .topic-table-content .topic-table tbody tr .last-comment-avatar .avatar{
    width: 35px;
    height: 35px;
    object-fit: cover;
    border-radius: 50px;
    border:3px solid orange;

}

.topic-container .topic-content .topic .topic-head .topic-table-content .topic-table tbody tr td .icon{
    width: 30px;
}
.topic-container .topic-content .topic .topic-head .topic-table-content .topic-table tbody tr td div small{
    color: orange;
}
.topic-container .topic-content .topic .topic-head .topic-table-content .topic-table tbody .topic-name{
    position: relative;
    font-size: 15px;
    font-weight: 500;
    height: 80px;
    padding: 0 10px;
}

.topic-container .topic-content .topic .topic-head .topic-table-content .topic-table tbody .topic-name a::after {
    position: absolute;
    content: '';
    bottom: 10px;
    margin: 0 5px;
    width: 23px;
    height: 9px;
    right: 20px;
    border-top: 1px solid #0d172f;
    border-left: 1px solid #0d172f;
    border-right: 1px solid orange;
    border-bottom: 1px solid orange;
}
.topic-container .topic-content .topic .topic-head .topic-table-content .topic-table tbody .topic-name small{
    position: absolute;
    font-size: 10px;
    font-weight: normal;
    color: orange;
    margin: 0 40px;
}
.topic-container .topic-content .topic .topic-head .topic-table-content .topic-table tbody .topic-name a{
    color: #ffffff;
}
.topic-container .topic-content .topic .topic-head .topic-table-content .topic-table tbody .topic-name a:hover{
    transition: 0.5s all;
    color: #d0d0d0;
}
.topic-container .topic-content .topic .topic-head .topic-table-content .topic-table tbody .topic-name .icon{
    width: 20px;
}


/*START topic RESPONSIVE */
@media screen and (max-width: 912px) {
    .last-comment-avatar{
        font-size: 13px;
    }
    .topic-container .topic-content .topic .topic-head .topic-table-content .topic-table tbody tr .last-comment-avatar .avatar{
        width: 30px;
        height: 30px;
    }
    .topic-container .topic-content .topic .topic-head .topic-table-content .topic-table tbody tr .last-comment-avatar small{
        font-size: 10px;
    }
    .topic-container .topic-content .topic .topic-head .topic-table-content .topic-table tbody tr td div small{
        font-size: 11px;
    }
    .topic-container .topic-content .topic .topic-head .topic-table-content .topic-table .topic-rate .icon{
        width: 13px;
    }
     tr td.comment-count .icon {
        width: 20px !important;
    }
    .topic-rate span{
        right: 0;
        font-size: 9px;
        padding: 2px 5px;
        width: auto;
    }
}
@media screen and (max-width: 758px) {
    .topic-container .topic-content .topic .topic-head .topic-table-content .topic-table thead tr .forum{
        width: 50%;
    }
}

@media screen and (max-width: 609px) {
    .topic-container .topic-content .topic .topic-head .topic-table-content .topic-table thead tr .forum{
        width: 40%;
    }
    .topic-container .topic-content .topic .topic-head .topic-table-content .topic-table tbody tr td div{
        font-size: 10px;
    }
    .topic-container .topic-content .topic .topic-head .topic-table-content .topic-table tbody tr td div span{
        font-size: 8px;
    }
    .topic-container .topic-content .topic .topic-head .topic-table-content .topic-table tbody tr .last-comment-avatar small {
        font-size: 8px;
    }
}

@media screen and (max-width: 609px) {
    .topic-container .topic-content .topic .topic-head .topic-table-content .topic-table thead tr .forum{
        font-size: 10px;
    }
    .topic-container .topic-content .topic .topic-head .topic-table-content .topic-table thead tr .topics{
        font-size: 10px;
    }
    .topic-container .topic-content .topic .topic-head .topic-table-content .topic-table thead tr .posts{
        font-size: 10px;
    }
    .topic-container .topic-content .topic .topic-head .topic-table-content .topic-table thead tr .last-comment{
        font-size: 10px;
    }
    .topic-container .topic-content .topic .topic-head .topic-table-content .topic-table tbody .topic-name{
        font-size: 12px;
        padding: 0 2px;
    }
    .topic-container .topic-content .topic .topic-head .topic-table-content .topic-table .avatar{
        width: 30px;
        height: 30px;
    }
    .topic-container .topic-content .topic .topic-head .topic-table-content .topic-table tbody .topic-name small{
        margin: 2px 21px;
        font-size: 8px;
    }
    .topic-container .topic-content .topic .topic-head .topic-table-content .topic-table tbody .topic-name a::after{
        right: 10px;
        bottom: 16px;
        width: 8px;
        height: 9px;
    }
}

@media screen and (max-width: 443px) {

    .topic-container .topic-content .topic .topic-head .topic-table-content .topic-table .topic-rate .icon{
        width: 10px;
    }
    .topic-container .topic-content .topic .topic-head .topic-table-content .topic-table tbody tr td div span{
        width: 100%;
    }
}
@media screen and (max-width: 407px) {

    .topic-container .topic-content .topic .topic-head .topic-table-content .topic-table tbody tr .last-comment-avatar .avatar{
        width: 20px;
        height: 20px;
        border:1px solid orange;
    }
    .topic-container .topic-content .topic .topic-head .topic-table-content .topic-table tbody tr .last-comment-avatar small{
        font-size: 6px;
    }
}


/*START GET FROM HOME */

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
@media screen and (max-width: 784px) {
    .home-content-container .home-content-content .home-content .home-content-header-container .home-content-header-content .home-content-header-message{
        font-size: 10px;
    }
}

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
@media screen and (max-width: 784px) {
    .topic-container .topic-content .topic .topic-head .topic-table-content .department-title{
        font-size: 12px;
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
@media screen and (max-width: 451px) {

    .topic-container .topic-content .topic .topic-head .topic-table-content .topic-table thead tr .last-comment
    {
        display: none;
    }
    .topic-container .topic-content .topic .topic-head .topic-table-content .topic-table tbody tr .last-comment-avatar{
        display: none;
    }
}


@media screen and (max-width: 414px) {
    .topic-container .topic-content .topic .topic-head .topic-table-content .department-title {
        font-size: 10px;
    }
}
@media screen and (max-width: 362px) {
    .home-content-container .home-content-choose-container .home-content-choose-content .home-content-choose .home-content-choose-text{
        font-size: 8px;
    }
    .topic-container .topic-content .topic .topic-head .topic-table-content .department-title {
        font-size: 8px;
    }
}





</style>
