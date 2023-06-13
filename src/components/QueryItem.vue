<script setup>
import QueryData from '@/components/QueryData.vue';

import { useQueryStore } from '@/stores/queries';
import { ref } from 'vue';

defineProps({
  'query': Object
});

const queryStore = useQueryStore();

let active = ref(false);

let remove = (query) => {
	queryStore.remove(query);
}
</script>

<template>
  <div class="query">
  	<div class="title" @click="active = ! active">
  		<span v-if="! active">[+]</span>
  		<span v-else>[&ndash;]</span>  		
  		{{ query.name }}
		</div>  	
  	<div v-show="active" class="query-data">
			<QueryData :query="query" />

			<button class="delete" @click="remove(query)">Delete</button>    
		</div>
	</div>
</template>

<style lang="less" scoped>
.query {
	position: relative;
	.title {
		padding: 10px;
		background: #333;
		color: #fff;
		cursor: pointer;
		span {
			float: right;
		}
	}
	button.delete {
		position: absolute;
		bottom: 15px;
		right: 10px;
	}
}
</style>
