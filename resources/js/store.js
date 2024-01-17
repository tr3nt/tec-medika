import { createStore } from 'vuex'
import axios from 'axios'

axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

const store = createStore({
    state: () => {
        return {
            name: '',
        }
    },
    mutations: {
        setName: (state, name) => { state.name = name },
    },
    actions: {
        getName: ({ dispatch }) => {
            dispatch('GET', ['nombre', 'setName'])
        },
        // Llamados AJAX por medio de Axios
        GET: async ({ commit, dispatch }, params) => {
            try {
                let par = typeof params[2] === 'object' ? { params: params[2] } : {},
                    response = await axios.get(`/api/${params[0]}`, par);
                if (response.status === 200)
                    commit(params[1], response.data)
                else
                    dispatch('getModal', 'No existen registros')
            }
            catch (error) {
                let errorMs = error.response.data,
                    message = typeof errorMs.message === 'string' ? errorMs.message : errorMs;
                console.error(message);
            }
        }
    }
});

export default store;