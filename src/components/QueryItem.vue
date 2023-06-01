<script setup>
import { useQueryStore } from '@/stores/queries';

const storedQueries = useQueryStore();

defineProps([
  'query'
]);
</script>

<template>
  <tr class="query">
    <td class="name">
      {{ query.name }}
    </td>
    <td class="text">
      {{ query.text }}
    </td>
    <td class="type">
      {{ query.type }}
    </td>
    <td class="edit">
      [e]
    </td>
    <td class="delete" @click="storedQueries.delete(query.id)">
      [x]
    </td>    
  </tr>
</template>

<style scoped>

</style>
