<script setup>
import { ref } from 'vue';
import QueryItem from './QueryItem.vue';
import { useQueryStore } from '@/stores/queries';

const queryStore = useQueryStore();
queryStore.fill();

queryStore.$subscribe((mutation, state) => {
	console.log(mutation);
	console.log(state);

/*
  // import { MutationType } from 'pinia'
  mutation.type // 'direct' | 'patch object' | 'patch function'
  // same as cartStore.$id
  mutation.storeId // 'cart'
  // only available with mutation.type === 'patch object'
  mutation.payload // patch object passed to cartStore.$patch()
*/

  // persist the whole state to the local storage whenever it changes
  localStorage.setItem('queries', JSON.stringify(state))
})

</script>

<template>
	<p>{{ queryStore.queries.length }}</p>
	<table border="1">
	  <QueryItem
	  	v-for="query in queryStore.queries"
	  	:query="query"
	  />
  </table>
</template>
