import Vue from 'vue'
import Router from 'vue-router'

import routes from '@/data/routes'

Vue.use(Router)

function route (path, component) {
  return {
    path,
    name: path,
    meta: routes[path],
    props: true,
    component: () => import(`@/views/${component}`)
  }
}

const router = new Router({
  mode: 'history',
  base: __dirname,
  routes: [
    route('/', 'Home'),
    route('/config', 'Config'),
    route('/play', 'Game'),
    route('/sentence/:text/:uuid', 'Sentence'),
    // route('/about', 'About'),
    { path: '*', redirect: '' }
  ]
})

export default router
