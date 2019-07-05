import Vue from 'vue';
import Vuex from 'vuex';
Vue.use(Vuex);

import {blog} from './modules/blog';
import {work} from './modules/work';

export default new Vuex.Store({
    modules: {
        blog: blog,
        work: work,
    }
});

