import axios from "axios";

export const blog = {
    state: {
        blogs: []
    },

    getters: {
        BLOGS: state => {
            return state.blogs
        }
    },

    mutations: {
        allBlog: (state, payload) => {
            state.blogs = payload;
        },

        deleteBlog: (state, payload) => {
            const idx = state.blogs.findIndex(blog => blog.id === payload);
            state.blogs.splice(idx, 1);
        }
    },

    actions: {
        All_Blog: async (context, payload)  => {
            let data = await axios.get('/admin/blog')
            context.commit('allBlog', data.data);
        },

        Delete_Blog: (context, payload) => {
            context.commit('deleteBlog', payload)
        }


    }
};
