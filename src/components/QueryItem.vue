<script setup>
import QueryTypeSelector from '@/components/QueryTypeSelector.vue';
import { useQueryStore } from '@/stores/queries';

defineProps({
  'query': Object
});

const queryStore = useQueryStore();

let remove = (query) => {
	queryStore.remove(query);
}
</script>

<template>
  <div class="query">
  	<div class="name">
  		<label for="name">Title</label>
  		
  		<input v-model="query.name" type="text" />
  	</div>

  	<div class="text">
  		<label for="text">Query</label>
  		
  		<input v-model="query.text" type="text" />
  	</div>

  	<div class="type">
  		<label for="type">Type</label>
  		
  		<QueryTypeSelector v-model="query.type" />
  	</div>

    <button class="delete" @click="remove(query)">Delete</button>    
  </div>
</template>

<style lang="less">
.query {
	margin-bottom: 10px;
	padding: 15px;
	border: 1px solid #333;
	label {
		display: block;
		font-weight: bold;
	}
	.name {
	
	}
}
</style>
