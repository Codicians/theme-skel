import Vue from 'vue'
import axios from 'axios'
import App from './App.vue'

axios.defaults.baseURL = $('meta[name="api-base"]').attr('content');

new Vue({
  el: '#app',
  render: h => h(App)
})
