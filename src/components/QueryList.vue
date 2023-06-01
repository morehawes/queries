<script setup>
import { ref } from 'vue';
import QueryItem from './QueryItem.vue';
import { useQueryStore } from '@/stores/queries';

const storedQueries = useQueryStore();
</script>

<template>
	<p>{{ storedQueries.queries.length }}</p>
	<table border="1">
	  <QueryItem
	  	v-for="query in storedQueries.queries"
	  	:query="query"
	  />
  </table>
</template>
