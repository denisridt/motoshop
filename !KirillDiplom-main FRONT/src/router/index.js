import { createMemoryHistory, createRouter } from 'vue-router'
import Home from '@/view/Home.vue'
import Catalog  from '@/view/Catalog.vue'
import Basket from '@/view/Basket.vue'
import Profile from '@/view/Profile.vue'
import MotoDes from '@/view/MotoDes.vue'

const routes = [
  { path: '/', name: 'Home', component: Home},
  { path: '/catalog', name: 'Catalog', component: Catalog },
  { path: '/Basket', component: Basket},
  { path: '/back_main', component: Home},
  { path: '/back_catalog', component: Catalog},
  { path: '/profile', component: Profile},
  { path: '/motodes', component: MotoDes}
]

const router = createRouter({
  history: createMemoryHistory(import.meta.env.BASE_URL),
  routes
})

export default router