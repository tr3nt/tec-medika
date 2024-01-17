<template>
    <h1>Hola {{ store.state.name }}</h1>
</template>

<script setup>
import { onMounted } from 'vue';
import { useStore } from 'vuex';

const store = useStore();

onMounted(() => {
    store.dispatch('getName');
});
</script>