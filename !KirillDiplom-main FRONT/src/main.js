import './assets/main.css'
import './assets/script.js'

import { createApp } from 'vue';
import App from './App.vue';
import router from './router'; // Импортируйте ваш роутер

const app = createApp(App);

app.use(router); // Используйте ваш роутер
router.isReady().then(() => app.mount('#app'))