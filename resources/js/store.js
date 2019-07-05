import Vue from 'vue';
import Vuex from 'vuex';
Vue.use(Vuex);

import {blog} from './modules/blog';

export default new Vuex.Store({
    modules: {
        blog: blog,
    }
});

