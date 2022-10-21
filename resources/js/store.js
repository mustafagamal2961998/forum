import { createStore } from 'vuex';
import axiosClient from './axios';

const store = createStore({
    state:{
       user:{
         data:{},
         ErrorMsg:'',
         token:localStorage.getItem("token")
       },
    },

    // The getters = this for set state variable after Update from mutations
    getters:{

    },

    actions:{

         // Normal user login
        Login({commit},payload){

             return axiosClient.post('userLogin',payload).then(response =>{


                if(response.data.status =='fail'){
                    // commit('setUserLoginMsg', response.data.msg)
                }
                if(response.data.status =='success'){
                    // commit('setToken', response.data.token.original.access_token)
                    // localStorage.setItem('browserToken', response.data.saveuser.browser_token)
                }

                return response;
            });


        },

        // Join User
        Join({commit},payload){

          return axiosClient.post('userJoin',payload).then(response =>{

             // if(response.data.status ==='fail'){
             //   // commit('setUserJoinMsg', response.data.msg)
             //     //localStorage.setItem('browserToken', response.data.saveuser.browser_token)
             // }
             // if(response.data.status ==='success'){
             //
             //   // commit('setUserJoinVerifyToken', response.data.data.email)
             //
             // }


             return response;
         });


        },


        //
        //
        // logout({commit}) {
        // return axiosClient.get('/logout')
        // .then(response => {
        //     commit('logout');
        //     // console.log('done')
        //     // return response;
        //   })
        // },

    },
    mutations: {


        // Set all posts
        setPosts: (state, payload) => {
        state.posts = payload;
        },
        // Set user data
        setUser: (state, payload) => {
             state.user.data = payload;
        },
        // Set user token
        setToken: (state, payload) => {
          state.user.token = payload;
          localStorage.setItem('token', payload)
        },

        // Set user login msg
        setUserLoginMsg: (state,payload)=>{
          state.user.ErrorMsg = payload;
        },

        // Save user after login
        saveUser: (state, payload) => {
          state.user.saveUser.saveUserData = payload;
        },

        // Set user join msg
        setUserJoinMsg: (state,payload)=>{
          state.user.ErrorMsg = payload;
        },

        // Set email verify localstorge
        setUserJoinVerifyToken: (state,payload)=>{
          state.user.JoinVerifyToken = payload;
          localStorage.setItem('EmailVerify',payload)
        },

        // Logout user
        logout: (state) => {
          state.user.token = null;
          state.user.data = {};
          localStorage.removeItem("token");
        },
    },
});


export default store;
