export default {
    state: {
        active: {
            flag: 'es',
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
        getLanguageActive: state => {
            return state.flag;
        },
        getLanguagesFlags: state => {
            return state.flags;
        },
        getTags: state => item => {
            let tag = null, tags = state.active.language;

            tag = tags.find(index => index.tag === item.tag).value;

            if (!tag) {
                let it = state.language['it'].find(index => index.tag === item.tag).value;

                if (!it) return it.value = 'No Tiene Tag';

                return it;
            }

            return tag;
        }
    },
    mutations: {
        setLanguagesTags(state, {list}) {
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
        changeLanguageByFlagActive(state, {list}) {
            let data = state.languages.languagesTags;

            const RESPONSE = data.find(key => key.lang === list);

            Vue.set(state.languageActive, 'flag', list);
            Vue.set(state.languageActive, 'languageTagsActive', RESPONSE.screens)
        }
    }
};
