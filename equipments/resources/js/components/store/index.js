import Vue from 'vue'
import Vuex from 'vuex'
import createPersistedState from 'vuex-persistedstate'

Vue.use(Vuex)

export default new Vuex.Store({
  state: {
    items: []
  },

  getters: {
    items(state) {
      return state.items;
    },
    count(state) {
      return state.items.count;
    }
  },
  mutations: {
    setUser(state, user) {
      state.user = user
    },
    addItem(state, payload) {
      state.items.push(payload.item);
    },
    deleteItem(state, d) {
      let indexed = state.items.findIndex(item => item.d === d);
      state.items.splice(indexed, 1);
    },
    minus(state, d) {
      let indexed = state.items.findIndex(item => item.d === d);
      state.items[indexed].count --;
    },
    plus(state, d) {
      let indexed = state.items.findIndex(item => item.d === d);
      state.items[indexed].count ++;
    }
  },
  actions: {
  },
  plugins: [createPersistedState({ storage: window.sessionStorage })]

})
