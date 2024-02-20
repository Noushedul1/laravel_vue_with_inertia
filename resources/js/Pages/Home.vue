<template>
    <div>
        <Menu/>
        <h1>Home page</h1>
        <p>hello {{ akib }}</p>
        <p>
            {{ sum }}
        </p>
    </div>
</template>

<script setup>
defineProps({sum:String});
import Menu from '../Component/MenuBar.vue'
const akib = "noushed";
</script>

<style lang="scss" scoped></style>
