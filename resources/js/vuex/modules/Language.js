export default {
    state: {
        active: {
            flag: 'it',
            language: []
        },
        flags: [],
        languages: null
    },
    actions: {
        APIGetAllLanguagesTags({ commit }) {
            axios.get('/api/getAllTags').then(res => {
                if (res.status === 200) {
                    commit('setLanguagesTags', { list: res.data })
                }
            }).catch((error) => console.log(error))
        }
    },
    getters: {
        getFlagActive: state => {
            return state.active.flag;
        },
        getLanguages: state => {
            return state.languages;
        },
        getFlags: state => {
            return state.flags;
        },
        getTags: state => item => {
            let tags = state.active.language;
            let tag = tags.find(index => index.tag === item.tag);
            let error = {};

            if (!tag) {
                if (state.languages !== null) {
                    let it = state.languages['it'].find(index => index.tag === item.tag);

                    if (!it) return error.value = 'error no tags by default in tag: ' + item.tag;

                    return it.value;
                }
                return error.vale = 'error loading the languages';

            }

            return tag.value;
        }
    },
    mutations: {
        setLanguagesTags(state, { list }) {
            let flags = [];
            for (let key in list) {
                flags.push({ code: key });

                if (state.active.flag === key) {
                    Vue.set(state.active, 'language', list[key]);
                }
            }

            Vue.set(state, 'flags', flags);
            Vue.set(state, 'languages', list);
        },
        changeLanguage(state, { list }) {
            for (let key in state.languages) {
                if (list === key) {
                    Vue.set(state.active, 'flag', list);
                    Vue.set(state.active, 'language', state.languages[key]);
                }
            }
        }
    }
};
