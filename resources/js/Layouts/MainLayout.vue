<template>
    <Link href="/hello">Show Page</Link>&nbsp;
    <Link href="/">Main Page</Link>
    <!-- <div>timer {{ timer }}</div> -->
    <div v-if="flashSuccess" class="success">
    {{ flashSuccess }}
  </div>
  <div>{{ y }}</div>
    <slot>Default</slot>
</template>


<script setup>
import { computed } from 'vue'
import { Link, usePage } from '@inertiajs/inertia-vue3'
// const x = ref(0)
// const y = computed(() => x.value * 2)
const page = usePage()
const flashSuccess = computed(
  () => page.props.value.flash.success,
)
// import { ref } from 'vue'
// const timer = ref(0)
// setInterval(() => timer.value++, 1000)
</script>
<style>
.success{
    color: red;
}
</style>
