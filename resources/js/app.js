
import './bootstrap';
// import './EchoSocket'

import {createApp,ref} from "vue/dist/vue.esm-bundler";

import router from "./router";
import store from "./store";
import { i18nVue } from 'laravel-vue-i18n'
import style from '../css/app.css'
import "bootstrap/dist/css/bootstrap.min.css"
import "bootstrap"



/*
- This file is global for all project
    => If you import any component you can include this component
       in any view Like [ HeaderComponent or FooterComponent ]
*/

//Include global components
//--------------//

//--------------//


const dir = localStorage.getItem('Dir');
document.documentElement.dir=dir;

const app = createApp();

app.use(router).use(store);
app.use(i18nVue, {
    resolve: async lang => {
        const langs = import.meta.glob('../../lang/*.json');
        return await langs[`../../lang/ar.json`]();
    }
})
app.mount('#app');
