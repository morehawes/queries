<script setup>
import { storeToRefs } from 'pinia';
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

const { queries } = storeToRefs(queryStore);
</script>

<template>
	<div id="count">{{ queries.length }}</div>
	
	<div id="queries">
	  <QueryItem
	  	v-for="query in queries"
	  	:key="query.id"
	  	:query="query"
	  />
  </div>
</template>

<style lang="less">
	#count {
		position: absolute;
		top: 5px;
		right: 5px;
		padding: 8px 10px;
		background: blue;
		color: white;
	}
	
	table {
		tr {
			&:nth-child(odd) {
				background: white;
			}
			td {
				margin: 0;
				padding: 5px;
			}
		}
	}
</style>