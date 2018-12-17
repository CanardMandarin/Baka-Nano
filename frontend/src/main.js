// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import { sync }       from 'vuex-router-sync'

import Vue            from 'vue'
import App            from './App'
import router         from './router'
import store          from './store'

import Buefy          from 'buefy'
import VueClipboard   from 'vue-clipboard2'
import VueTippy       from 'vue-tippy'
import VueAnalytics   from 'vue-analytics'
import Meta           from 'vue-meta'
import vSelect        from 'vue-select'
import VueSweetalert2 from 'vue-sweetalert2'

const isProd = process.env.NODE_ENV === 'production'

Vue.use(Buefy)
Vue.use(VueTippy)
Vue.use(VueClipboard)
Vue.use(VueSweetalert2)
Vue.use(Meta)
Vue.use(VueAnalytics, {
  id: 'UA-126199596-1',
  router,
  debug: {
    sendHitTask:  isProd,
    enabled: !isProd
  }
})

Vue.config.productionTip = false
Vue.component('v-select', vSelect)

sync(store, router)

/* eslint-disable no-new */
new Vue({
  el: '#app',
  router,
  store,
  components: { App },
  template: '<App/>'
})
