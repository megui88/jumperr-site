import Vue from 'vue'
import Vuex from 'vuex'

import Language from './modules/Language'
import createPersistedState from 'vuex-persistedstate'
import * as Cookie from 'js-cookie'

Vue.use(Vuex);

let store = new Vuex.Store({
    modules: { Language },
    plugins: [
         createPersistedState({
             paths: [ 'Language.flag', 'Language.flags', 'Language.languages'],
             getItem: key => Cookies.get(key),
             setItem: (key, value) => Cookies.set(key, value, { expires: 3, secure: true }),
             removeItem: key => Cookies.remove(key)
         })
      ]
});
export default store;
