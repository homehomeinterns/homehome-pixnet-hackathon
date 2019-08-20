<template>
  <div class="home">
    <index></index>
  </div>
</template>

<script>
// @ is an alias to /src
import index from '@/components/index.vue'

export default {
  name: 'home',
  components: {
    index
  }
}
</script>
