<script setup>
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
    <td class="delete">
      [x]
    </td>    
  </tr>
</template>

<style scoped>

</style>
