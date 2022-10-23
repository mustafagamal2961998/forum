<template>
    <!-- START DEPARTMENT -->
    <div class="department-container">
        <div class="department-content">
            <div class="department">

                <!--  START DEPARTMENT HEAD -->
                 <div class="department-head">
                     <div class="department-table-content">




                    <table class="department-table" v-for="DepartmentData in DepartmentTitles" :key="DepartmentData.id">

                        <thead>
                                <tr>
                                    <th class="forum">المنتدى</th>
                                    <th class="topics">المواضيع </th>
                                    <th class="posts">التعليقات </th>
                                    <th class="last-comment">آخر تعليق</th>
                                </tr>
                        </thead>

                        <tbody v-for="Title in DepartmentData" :key="Title.id">

                            <tr>
                                <td class="department-table-head-title" colspan="5">
                                    <img class="icon" src="../../../assets/Media/icons/department/department_title.svg" alt="Icon"> {{Title.department_title}}
                                </td>
                            </tr>

                            <tr v-for="Name in Title.departments" :key="Name.id">
                                <td class="department-name">
                                    <router-link :to="{path:'/display/'+Name.id}">
                                        <img class="icon" src="../../../assets/Media/icons/department/department_name.svg" alt="Icon">  {{Name.department_name}}
                                    </router-link>
                                    <br>
                                    <small>
                                        {{Name.department_description}}
                                    </small>
                                </td>

                                <td>
                                   <div>
                                        <img class="icon" src="../../../assets/Media/icons/department/topics_count.svg" alt="Icon">
                                           <br>
                                           <small>
                                               34
                                           </small>
                                   </div>
                                </td>

                                <td>
                                    <div>
                                        <img class="icon" src="../../../assets/Media/icons/department/comment_count.svg" alt="Icon">
                                        <br>
                                        <small>
                                            419
                                        </small>
                                    </div>
                                </td>

                                <td class="last-comment-avatar">
                                    <div>
                                        <img class="avatar" src="../../../assets/Media/icons/department/test_avatar.svg" alt="Icon">
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
    </div>
</template>

<script>


import axiosClient from "@/axios";

export default {

    data() {
        return {
            DepartmentTitles:[],
        }
    },
    created(){
        //Get All Departments
        return axiosClient.get('departments').then(response => {
             this.DepartmentTitles.push(response.data.ResponseData)
            return response;
        });



    },

    computed:{
        // ...mapState(['user','posts']),


    },
    methods:{

    },
}

</script>

<style scoped>
/* START DEPARTMENT STYLE */
.department-container{
    width: 95%;
    margin: auto;
    padding-top: 10px;
}
.department-container .department-content{
    width: 100%;
}

.department-container .department-content .department{
    width: 100%;
    background-color: #0d172f;
    border-radius: 10px;
    border: 1px solid #0F3460;
    padding: 5px;
}
.department-container .department-content .department .department-head{
    width: 100%;
}

.department-container .department-content .department .department-head .department-table-content{
    margin: 0 0 10px 0;
}

/*START TABLE STYLE */
.department-container .department-content .department .department-head .department-table-content .department-table{
    width: 100%;
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
}

.department-container .department-content .department .department-head .department-table-content .department-table thead{
    width: 100%;
    color: #ffffff;
}

.department-container .department-content .department .department-head .department-table-content .department-table thead tr th{
    font-size: 13px;
    font-weight: normal;
    padding: 5px 0;
    background-color: #0F3460;
    text-align: center;
}

.department-container .department-content .department .department-head .department-table-content .department-table thead tr .forum{
    width: 60%;
    padding: 0 10px;
    text-align: justify;
}

/*START DEPARTMENT NAME*/

.department-container .department-content .department .department-head .department-table-content .department-table .department-table-head-title{
    background-color: #082241;
    color: #ffffff;
    font-size: 14px;
    padding: 5px;
}
.department-container .department-content .department .department-head .department-table-content .department-table .department-table-head-title .icon{
   width: 20px;
}





/*START DEPARTMENT NAME STYLE*/

.department-container .department-content .department .department-head .department-table-content .department-table tbody tr td{
    border-bottom: 1px solid #0F3460;
}
.department-container .department-content .department .department-head .department-table-content .department-table tbody tr td div{
    text-align: center;
}
.department-container .department-content .department .department-head .department-table-content .department-table tbody tr .last-comment-avatar{
    color: #ffffff;
    font-weight: bold;
}
.department-container .department-content .department .department-head .department-table-content .department-table tbody tr .last-comment-avatar small{
    font-weight: normal;
    font-size: 11px;
}
.department-container .department-content .department .department-head .department-table-content .department-table tbody tr .last-comment-avatar .avatar{
    width: 40px;
    border-radius: 50px;
    border:3px solid orange;

}

.department-container .department-content .department .department-head .department-table-content .department-table tbody tr td .icon{
    width: 30px;
}
.department-container .department-content .department .department-head .department-table-content .department-table tbody tr td div small{
    color: orange;
}
.department-container .department-content .department .department-head .department-table-content .department-table tbody .department-name{
    position: relative;
    font-size: 15px;
    font-weight: 400;
    height: 80px;
    padding: 0 10px;
}
.department-container .department-content .department .department-head .department-table-content .department-table tbody .department-name a::after {
    position: absolute;
    content: '';
    bottom: 20px;
    margin: 0 5px;
    width: 23px;
    height: 15px;
    right: 20px;
    border-top: 1px solid #0d172f;
    border-left: 1px solid #0d172f;
    border-right: 1px solid orange;
    border-bottom: 1px solid orange;
}
.department-container .department-content .department .department-head .department-table-content .department-table tbody .department-name small{
    position: absolute;
    font-size: 10px;
    font-weight: normal;
    color: orange;
    margin: 0 40px;
}
.department-container .department-content .department .department-head .department-table-content .department-table tbody .department-name a{
    color: #ffffff;
}
.department-container .department-content .department .department-head .department-table-content .department-table tbody .department-name a:hover{
    transition: 0.5s all;
    color: #d0d0d0;
}
.department-container .department-content .department .department-head .department-table-content .department-table tbody .department-name .icon{
 width: 20px;
}

/*.department-container .department-content .department .department-head .department-table{*/
/*    width: 100%;*/
/*    border-top-left-radius: 5px;*/
/*    border-top-right-radius: 5px;*/
/*}*/


/*!* START TABLE HEAD*!*/

/*.department-container .department-content .department .department-head .department-table .department-table-thead{*/
/*    width: 100%;*/
/*    background-color: #0F3460;*/
/*}*/
/*.department-container .department-content .department .department-head .department-table td{*/
/*    border-bottom:2px solid #0F3460;*/
/*}*/

/*.department-container .department-content .department .department-head .department-table .department-table-thead tr th{*/
/*    color: #ffffff;*/
/*    font-size: 13px;*/
/*    font-weight: normal;*/
/*}*/
/*.department-container .department-content .department .department-head .department-table .department-table-thead tr th.forum{*/
/*    width: 70%;*/
/*    text-align: justify;*/
/*    padding: 0 10px;*/
/*}*/
/*.department-container .department-content .department .department-head .department-table .department-content-table-tbody .department-title-text{*/
/*    width: 100%;*/
/*    background-color: #0F3460;*/
/*    clip-path: polygon(0 0, 100% 0%, 100% 100%, 5% 100%);*/
/*    color: #ffffff;*/
/*    padding: 5px 10px;*/
/*    font-size: 12px;*/
/*    text-align: justify;*/
/*}*/
/*.department-container .department-content .department .department-head .department-table .department-title-text .icon{*/
/*    width: 20px;*/
/*    vertical-align: middle;*/
/*}*/
/*!*START DEPARTMENTS TABLE STYLE*!*/
/*.department-container .department-content .department .department-head .department-table .department-content-table-tbody{*/
/*    width: 100%;*/
/*}*/

/*.department-container .department-content .department .department-head .department-table .department-content-table-tbody tr td{*/
/*    text-align: center;*/
/*    height: 50px;*/
/*    padding: 10px 0;*/
/*}*/

/*.department-container .department-content .department .department-head .department-table .department-content-table-tbody tr .department-name{*/
/*    position: relative;*/
/*    width: 70%;*/
/*    font-weight: 600;*/
/*    font-size: 14px;*/
/*    text-align: justify;*/
/*    padding: 0 5px;*/
/*}*/

/*.department-container .department-content .department .department-head .department-table .department-content-table-tbody tr .department-name a{*/
/*    color: #ffffff;*/
/*    display: flex;*/
/*    align-items: center;*/
/*    align-content: center;*/
/*}*/
/*.department-container .department-content .department .department-head .department-table .department-content-table-tbody tr .department-name a::after{*/
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
/*.department-container .department-content .department .department-head .department-table .department-content-table-tbody tr .department-name .department-description{*/
/*  position: absolute;*/
/*  top: 25px;*/
/*  right: -15px;*/
/*  padding: 0 35px;*/
/*  color: orange;*/
/*  font-weight:400;*/
/*  font-size: 11px;*/
/*}*/
/*.department-container .department-content .department .department-head .department-table .department-content-table-tbody tr .department-topic-count{*/
/*    position: relative;*/
/*}*/
/*.department-container .department-content .department .department-head .department-table .department-content-table-tbody tr .department-topic-count .department-description{*/
/*    position: absolute;*/
/*    width: 100%;*/
/*    right: 0;*/
/*    top: 40px;*/
/*    padding: 0 35px;*/
/*    color: orange;*/
/*    font-weight:400;*/
/*    font-size: 11px;*/
/*}*/

/*.department-container .department-content .department .department-head .department-table .department-content-table-tbody tr .department-comment-count{*/
/*    position: relative;*/
/*}*/
/*.department-container .department-content .department .department-head .department-table .department-content-table-tbody tr .department-comment-count .department-description{*/
/*    position: absolute;*/
/*    width: 100%;*/
/*    right: 0;*/
/*    top: 40px;*/
/*    padding: 0 35px;*/
/*    color: orange;*/
/*    font-weight:400;*/
/*    font-size: 11px;*/
/*}*/


/*.department-container .department-content .department .department-head .department-table .department-content-table-tbody tr .department-name a:hover{*/
/*    transition: 0.5s;*/
/*    color: #d2d2d2;*/
/*}*/
/*.department-container .department-content .department .department-head .department-table .department-content-table-tbody tr .department-name .icon{*/
/*    width: 15px;*/
/*    margin: 0 0 0 4px;*/
/*}*/
/*.department-topic-count .icon,.department-comment-count .icon{*/
/*    width: 30px;*/
/*}*/
/*.department-container .department-content .department .department-head .department-table .department-content-table-tbody tr .department-last-comment{*/
/*    position: relative;*/
/*    text-align: justify;*/
/*    padding: 0 10px;*/
/*}*/
/*.department-container .department-content .department .department-head .department-table .department-content-table-tbody tr .department-last-comment span{*/
/*    color: orange;*/
/*    font-size: 14px;*/
/*    font-weight: normal;*/
/*}*/
/*.department-container .department-content .department .department-head .department-table .department-content-table-tbody tr .department-last-comment a{*/
/*    font-weight: bold;*/
/*    color: #ffffff;*/

/*}*/
/*.department-container .department-content .department .department-head .department-table .department-content-table-tbody tr .department-last-comment .avatar{*/
/*    width: 35px;*/
/*    vertical-align: middle;*/
/*    border: 2px solid orange;*/
/*    padding: 2px;*/
/*    border-radius: 50px;*/
/*}*/
/*.department-container .department-content .department .department-head .department-table .department-content-table-tbody tr .department-last-comment .department-last-comment-date{*/
/*    font-size: 12px;*/
/*    color: orange;*/
/*    margin: 0 0;*/
/*}*/

/*START TABLE TITLE*/

/*START DEPARTMENT RESPONSIVE */
@media screen and (max-width: 669px) {

}

</style>
