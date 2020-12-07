import Vue from 'vue'
import App from './App.vue'
import router from './router'
import store from './store'
import axios from 'axios'  
import VueAxios from 'vue-axios'
import Notifications from 'vue-notification'

Vue.use(Notifications)

axios.defaults.baseURL = 'http://127.0.0.1:8000/api/'
axios.defaults.headers.post['Content-Type'] = 'application/json';

axios.interceptors.request.use((config) => {
  config.headers['Content-Type'] = 'application/json'
  config.headers.Accept = 'application/json'
  config.headers.Authorization = `Bearer ${store.getters.token}`
  
  //store.commit('habilitarAutorizacao', true) // Volta ao padrão de autorização. Assim podendo ser usado em toda aplicação, se a preocupação de retornar.
  //store.commit('abrirConexao')
  return config
}, (error) => {
  store.commit('fecharConexao')
  return Promise.reject(error)
})

axios.interceptors.response.use(response => {
  store.commit('fecharConexao')
  return response
}, error => {
  var mensagemGeral = ''

  if (error.response.status === undefined) {
    Vue.notify({
      group: 'foo',
      type:'error',
      title: 'Erro',
      text: 'Problema de conexão com o servidor'
    })
  }
  switch (error.response.status) {
    case 401:
     Vue.notify({
      group: 'foo',
      type: 'error',
      title: 'Erro',
      text: 'Não autorizado'
    })
      break

    case 403:
     
     Vue.notify({
      group: 'foo',
      title: 'error',
      text: 'Erro 403!'
    })
      router.push('/login')
      break

    case 404:

    Vue.notify({
      group: 'foo',
      type: 'error',
      title: 'Erro de Rota',
      text: 'Rota inexistente no servidor!'
    })
      router.push('/')
      break

    case 422:
      if (error.response.data.message !== undefined) {
        mensagemGeral = error.response.data.message
      } else if (error.response.data.error !== undefined) {
        mensagemGeral = error.response.data.error
      } else {
        mensagemGeral = error.response.data
      }
      console.log(error.response.data)

      Vue.notify({
      group: 'foo',
      type: 'error',
      title: 'Erro',
      text: mensagemGeral
    })
      break

    case 423:

      Vue.notify({
        group: 'foo',
        type: 'error',
        title: 'Erro',
        text: error.response.data.message
      })
      break
    case 500:
      Vue.notify({
        group: 'foo',
        type: 'error',
        title: 'Erro',
        text: 'Erro interno no servidor'
      })

      break
  }
  return Promise.reject(error)
})


Vue.use(VueAxios, axios)

Vue.config.productionTip = false

new Vue({
  router,
  store,
  render: h => h(App)
}).$mount('#app')
