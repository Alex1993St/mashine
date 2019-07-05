import axios from 'axios';

export const work = {
    state: {
        works: [],
    },

    getters: {
        WORKS: state => {
            return state.works;
        },
    },

    mutations: {
        SET_WORK: (state, payload) => {
            state.works = payload
        },

        ADD_WORK: (state, payload) => {
            state.works.push(payload);
        },

        UPDATE_WORK: (state, payload) => {
            const idx = state.works.findIndex(work => work.id === payload.id);
            Vue.set(state.works, idx, payload);
        },

        DELETE_WORK: (state, payload) => {
            const idx = state.works.findIndex(work => work.id === payload.id);
            state.works.splice(idx, 1)
        }
    },

    actions: {
        GET_WORK: async (context, payload) =>{
            let data = await axios.get('/admin/work');
            context.commit('SET_WORK', data.data);
        },

        PUSH_WORK: async (context, payload) => {
            let data = await axios.post('/admin/work', payload)
            context.commit('ADD_WORK', data.data);
        },

        EDIT_WORK: async (context, payload) => {
            let data = await axios.put('/admin/work/' + payload.id, payload)
            context.commit('UPDATE_WORK', payload.id);
        },

        REMOVE_WORK: (context, payload) => {
            axios.delete('/admin/work/' + payload);
            context.commit('DELETE_WORK', payload);
        }


    }
};
