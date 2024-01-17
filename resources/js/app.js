import { createApp } from 'vue';
import './bootstrap';

const app = createApp({});

import App from '../views/App.vue';
app.component('app-component', App);

app.mount('#app');