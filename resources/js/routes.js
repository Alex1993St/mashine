import Vue from 'vue';
import VueRouter from 'vue-router'
Vue.use(VueRouter);

import Blog from './components/BlogComponent';

import Add_Blog from './components/AddBlogComponent';

const routes = [
    {
        path: '/', component: Blog
    },{
        path: '/add_blog', component: Add_Blog
    }
];

export default new VueRouter({ routes });
