<template>

    <header class="border-b border-gray-200 dark:border-gray-700 dark:bg-gray-900 bg-white">
      <div class="container mx-auto">
        <nav class="p-4 flex items-center justify-between">
          <div class="text-lg font medium">
            <Link :href="route('listing.index')">Listings</Link>
          </div>
          <div class="text-xl text-indigo-600 dark:text-indigo-300 text-bold text-center">
            <Link :href="route('listing.index')">ApulianInvestor</Link>
          </div>
          <div v-if="user" class="flex items-center gap-4 ">
            <div class="text-sm text-gray-500">{{ user.name }}</div>
            <Link :href="route('listing.create')" class="btn-primary ">+ New Listing</Link>
            <Link :href=" route('logout') " as="button" method="DELETE" >Logout</Link>
          </div>
          <div  v-else  class="flex items-center gap-2">
            <Link :href="route('user-account.create')">Register</Link>
            <Link :href="route('login')">Sign In</Link>
          </div>
        </nav>
      </div>
    </header>

    <main class="container mx-auto p-4 w-full">
      <!-- <div>timer {{ timer }}</div> -->
    <div v-if="flashSuccess" class="flash-success">
    {{ flashSuccess }}
  </div>
    <slot>Default</slot>
    </main>
  </template>
    


<script setup>
import { computed } from 'vue'
import { Link, usePage } from '@inertiajs/inertia-vue3'
const page = usePage()
const flashSuccess = computed(
  () => page.props.value.flash.success,
)

const user = computed(
  () => page.props.value.user
)
// import { ref } from 'vue'
// const timer = ref(0)
// setInterval(() => timer.value++, 1000)
</script>
