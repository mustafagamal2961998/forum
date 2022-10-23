<template>
    <!-- START NAVBAR -->
    <navbar></navbar>
    <sponsor></sponsor>
    <!-- START topic -->
    <div class="topic-container">
        <div class="topic-content">
            <div class="topic">

                <!--  START DEPARTMENT HEAD -->
                <div class="topic-head">
                    <div class="topic-table-content">
                        <div class="department-title">
                            <img class="icon" src="../../assets/Media/icons/logo.svg">

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
                                <th class="posts">عدد التعليقات </th>
                                <th class="last-comment">آخر تعليق</th>
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
                                        <img class="icon" src="../../assets/Media/icons/topic/ratestar.svg" alt="Icon">
                                        <img class="icon" src="../../assets/Media/icons/topic/ratestar.svg" alt="Icon">
                                        <img class="icon" src="../../assets/Media/icons/topic/ratestar.svg" alt="Icon">
                                        <img class="icon" src="../../assets/Media/icons/topic/ratestar.svg" alt="Icon">
                                    </div>
                                </td>

                                <td>
                                    <div>
                                        <img class="icon" src="../../assets/Media/icons/department/comment_count.svg" alt="Icon">
                                        <br>
                                        <small>
                                            419
                                        </small>
                                    </div>
                                </td>

                                <td class="last-comment-avatar">
                                    <div>
                                        <img class="avatar" src="../../assets/Media/icons/department/test_avatar.svg" alt="Icon">
                                        Mustafa Gamal
                                        <br>
                                        <small>10/22/2022 - 07:14 AM</small>
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
                // this.DepartmentData = response.data.DepartmentName;
                this.DepartmentName = response.data.DepartmentName.department_name;
                // console.log(response.data.DepartmentName.department_name)
                this.DepartmentTitle= response.data.DepartmentName.title_department.department_title;
                // this.TopicsUserData.push(response.data.AllUserDataByTopicsAndtopic)
                //  console.log(response.data.AllTopicDataByDepartment)
                return response;
            });
        }
    },
}

</script>



<style scoped>

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

.topic-container .topic-content .topic .topic-head .topic-table-content .topic-table .topic-table-head-title{
    background-color: #082241;
    color: #ffffff;
    font-size: 14px;
    padding: 5px;
}
.topic-container .topic-content .topic .topic-head .topic-table-content .topic-table .avatar{
    width: 40px;
    height: 40px;
    border-radius: 50%;
    object-fit: cover;
    border: 2px solid orange;
}
.topic-container .topic-content .topic .topic-head .topic-table-content .topic-table .topic-table-head-title .icon{
    width: 20px;
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
.topic-container .topic-content .topic .topic-head .topic-table-content .topic-table tbody tr .last-comment-avatar small{
    font-weight: normal;
    font-size: 11px;
}
.topic-container .topic-content .topic .topic-head .topic-table-content .topic-table tbody tr .last-comment-avatar .avatar{
    width: 40px;
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

/*.topic-container .topic-content .topic .topic-head .topic-table{*/
/*    width: 100%;*/
/*    border-top-left-radius: 5px;*/
/*    border-top-right-radius: 5px;*/
/*}*/


/*!* START TABLE HEAD*!*/

/*.topic-container .topic-content .topic .topic-head .topic-table .topic-table-thead{*/
/*    width: 100%;*/
/*    background-color: #0F3460;*/
/*}*/
/*.topic-container .topic-content .topic .topic-head .topic-table td{*/
/*    border-bottom:2px solid #0F3460;*/
/*}*/

/*.topic-container .topic-content .topic .topic-head .topic-table .topic-table-thead tr th{*/
/*    color: #ffffff;*/
/*    font-size: 13px;*/
/*    font-weight: normal;*/
/*}*/
/*.topic-container .topic-content .topic .topic-head .topic-table .topic-table-thead tr th.forum{*/
/*    width: 70%;*/
/*    text-align: justify;*/
/*    padding: 0 10px;*/
/*}*/
/*.topic-container .topic-content .topic .topic-head .topic-table .topic-content-table-tbody .topic-title-text{*/
/*    width: 100%;*/
/*    background-color: #0F3460;*/
/*    clip-path: polygon(0 0, 100% 0%, 100% 100%, 5% 100%);*/
/*    color: #ffffff;*/
/*    padding: 5px 10px;*/
/*    font-size: 12px;*/
/*    text-align: justify;*/
/*}*/
/*.topic-container .topic-content .topic .topic-head .topic-table .topic-title-text .icon{*/
/*    width: 20px;*/
/*    vertical-align: middle;*/
/*}*/
/*!*START topicS TABLE STYLE*!*/
/*.topic-container .topic-content .topic .topic-head .topic-table .topic-content-table-tbody{*/
/*    width: 100%;*/
/*}*/

/*.topic-container .topic-content .topic .topic-head .topic-table .topic-content-table-tbody tr td{*/
/*    text-align: center;*/
/*    height: 50px;*/
/*    padding: 10px 0;*/
/*}*/

/*.topic-container .topic-content .topic .topic-head .topic-table .topic-content-table-tbody tr .topic-name{*/
/*    position: relative;*/
/*    width: 70%;*/
/*    font-weight: 600;*/
/*    font-size: 14px;*/
/*    text-align: justify;*/
/*    padding: 0 5px;*/
/*}*/

/*.topic-container .topic-content .topic .topic-head .topic-table .topic-content-table-tbody tr .topic-name a{*/
/*    color: #ffffff;*/
/*    display: flex;*/
/*    align-items: center;*/
/*    align-content: center;*/
/*}*/
/*.topic-container .topic-content .topic .topic-head .topic-table .topic-content-table-tbody tr .topic-name a::after{*/
/*    position: absolute;*/
/*    content: '';*/
/*    top: 25px;*/
/*    margin: 0 5px;*/
/*    width: 5px;*/
/*    height: 10px;*/
/*    !*border: 1px solid silver;*!*/
/*   border-top: 1px solid #0d172f;*/
/*   border-left: 1px solid #0d172f;*/
/*   border-right: 1px solid orange;*/
/*   border-bottom: 1px solid orange;*/
/*}*/
/*.topic-container .topic-content .topic .topic-head .topic-table .topic-content-table-tbody tr .topic-name .topic-description{*/
/*  position: absolute;*/
/*  top: 25px;*/
/*  right: -15px;*/
/*  padding: 0 35px;*/
/*  color: orange;*/
/*  font-weight:400;*/
/*  font-size: 11px;*/
/*}*/
/*.topic-container .topic-content .topic .topic-head .topic-table .topic-content-table-tbody tr .topic-topic-count{*/
/*    position: relative;*/
/*}*/
/*.topic-container .topic-content .topic .topic-head .topic-table .topic-content-table-tbody tr .topic-topic-count .topic-description{*/
/*    position: absolute;*/
/*    width: 100%;*/
/*    right: 0;*/
/*    top: 40px;*/
/*    padding: 0 35px;*/
/*    color: orange;*/
/*    font-weight:400;*/
/*    font-size: 11px;*/
/*}*/

/*.topic-container .topic-content .topic .topic-head .topic-table .topic-content-table-tbody tr .topic-comment-count{*/
/*    position: relative;*/
/*}*/
/*.topic-container .topic-content .topic .topic-head .topic-table .topic-content-table-tbody tr .topic-comment-count .topic-description{*/
/*    position: absolute;*/
/*    width: 100%;*/
/*    right: 0;*/
/*    top: 40px;*/
/*    padding: 0 35px;*/
/*    color: orange;*/
/*    font-weight:400;*/
/*    font-size: 11px;*/
/*}*/


/*.topic-container .topic-content .topic .topic-head .topic-table .topic-content-table-tbody tr .topic-name a:hover{*/
/*    transition: 0.5s;*/
/*    color: #d2d2d2;*/
/*}*/
/*.topic-container .topic-content .topic .topic-head .topic-table .topic-content-table-tbody tr .topic-name .icon{*/
/*    width: 15px;*/
/*    margin: 0 0 0 4px;*/
/*}*/
/*.topic-topic-count .icon,.topic-comment-count .icon{*/
/*    width: 30px;*/
/*}*/
/*.topic-container .topic-content .topic .topic-head .topic-table .topic-content-table-tbody tr .topic-last-comment{*/
/*    position: relative;*/
/*    text-align: justify;*/
/*    padding: 0 10px;*/
/*}*/
/*.topic-container .topic-content .topic .topic-head .topic-table .topic-content-table-tbody tr .topic-last-comment span{*/
/*    color: orange;*/
/*    font-size: 14px;*/
/*    font-weight: normal;*/
/*}*/
/*.topic-container .topic-content .topic .topic-head .topic-table .topic-content-table-tbody tr .topic-last-comment a{*/
/*    font-weight: bold;*/
/*    color: #ffffff;*/

/*}*/
/*.topic-container .topic-content .topic .topic-head .topic-table .topic-content-table-tbody tr .topic-last-comment .avatar{*/
/*    width: 35px;*/
/*    vertical-align: middle;*/
/*    border: 2px solid orange;*/
/*    padding: 2px;*/
/*    border-radius: 50px;*/
/*}*/
/*.topic-container .topic-content .topic .topic-head .topic-table .topic-content-table-tbody tr .topic-last-comment .topic-last-comment-date{*/
/*    font-size: 12px;*/
/*    color: orange;*/
/*    margin: 0 0;*/
/*}*/

/*START TABLE TITLE*/

/*START topic RESPONSIVE */
@media screen and (max-width: 669px) {

}

</style>
