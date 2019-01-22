export default {
    state: {
        flag: 'it',
        flags: [],
        languages: []
    },
    actions: {
        APIGetAllLanguagesTags({commit}) {
            axios.get('/api/tag_translations').then((res) => {
                // commit('setLanguagesTags', { list: res.data.data })

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
        getTags: state => (item) => {
            // let data = state.languages.find(lang => lang.code === state.flag);

            // let tag = data.find(key => key.tag === item.tag).value;

            // if (!tag)

            return 'no tiene tag'
        }
    },
    mutations: {
        setLanguagesTags(state, {list}) {
            let flags = [];

            list.forEach(index => {
                flags.push({ code: index.lang });
            });

            Vue.set(state.languages, 'flags', flags);
            Vue.set(state.languages, 'languagesTags', list);

            let lang = state.languageActive.flag;

            const RESPONSE = list.find(key => key.lang === lang);

            Vue.set(state.languageActive, 'languageTagsActive', RESPONSE.screens)
        },
        changeLanguageByFlagActive(state, {list}) {
            let data = state.languages.languagesTags;

            const RESPONSE = data.find(key => key.lang === list);

            Vue.set(state.languageActive, 'flag', list);
            Vue.set(state.languageActive, 'languageTagsActive', RESPONSE.screens)
        }
    }
};
