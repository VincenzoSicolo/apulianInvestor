<template>
    <Link href="/listing/create">New Listing</Link>

    <header class="border-b border-gray-200 dark:border-gray-700 dark:bg-gray-700 bg-white">
      <div class="container mx-auto">
        <nav class="p-4 flex items-center justify-between">
          <div class="text-lg font medium">
            <Link :href="route('listing.index')">Listings</Link>
          </div>
          <div class="text-xl text-indigo-600 dark:text-indigo-300 text-bold text-center">
            <Link :href="route('listing.index')">ApulianInvestor</Link>
          </div>
          <div>
            <Link :href="route('listing.create')" class="bg-indigo-600 hover:bg-indigo-500 text-white font-medium p-2 rounded-md ">+ New Listing</Link>
          </div>
        </nav>
      </div>
    </header>

    <main class="container mx-auto p-4">
      <!-- <div>timer {{ timer }}</div> -->
    <div v-if="flashSuccess" class="mb-4 border rounded-md shadow-sm border-green-200 dark:border-green-800 bg-green-50 dark:bg-green-900 p-2">
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
// import { ref } from 'vue'
// const timer = ref(0)
// setInterval(() => timer.value++, 1000)
</script>
