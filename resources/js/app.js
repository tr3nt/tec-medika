import { createApp } from 'vue';
import vuetify from './vuetify';
import './bootstrap';

const app = createApp({});

import App from './App.vue';
app.component('app-component', App);

app.use(vuetify);
app.mount('#app');