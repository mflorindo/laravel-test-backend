import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

export default new Vuex.Store({
  state: {
    usuarioLogado: false,
    token: null,
    listaEstados: null, 
  },  
  mutations: {
    popularListaEstados(state,lista){
      state.listaEstados  = lista
    },
    logout(state){
      state.usuarioLogado = false
    },
    fecharConexao(state){
      state.usuarioLogado = false,
      state.token = null
    },
    login(state){
      state.usuarioLogado=true,
      state.token = window.localStorage.getItem('token')
    }
  },
  actions: {
  },
  modules: {
  },
  getters: {
    usuarioLogado: state => {
      return state.usuarioLogado
    },
    listaEstados: state =>{
      return state.listaEstados
    },
    token:state =>{
      return state.token
    }
  }
})
