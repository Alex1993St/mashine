import Vue from 'vue';
import VueRouter from 'vue-router'
Vue.use(VueRouter);

import Blog from './components/BlogComponent';
import Add_Blog from './components/AddBlogComponent';
import Feedback from './components/FeedbackComponent';
import Work from './components/WorkComponent'


const routes = [
    {
        path: '/', name: 'dashboard', component: Blog
    },{
        path: '/add_blog', name: 'add', component: Add_Blog
    }, {
        path: '/add_blog/:id', name: 'edit', component: Add_Blog
    }, {
        path: '/feedback', name: 'feedback', component: Feedback
    }, {
        path: '/work', name: 'work', component: Work
    }
];

export default new VueRouter({ routes });
