<script setup>
import QueryItem from './QueryItem.vue'
import { useQueryStore } from '@/stores/queries';

const storedQueries = useQueryStore();
</script>

<template>
	<table>
	  <QueryItem
	  	v-for="query in storedQueries.queries"
	  	:query="query"
	  />
  </table>
</template>
