<script setup>
import QueryTypeSelector from '@/components/QueryTypeSelector.vue';
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
  	<div class="query-title" @click="active = ! active">
  		<span v-if="! active">[+]</span>
  		<span v-else>[&ndash;]</span>  		
  		{{ query.name }}
		</div>  	
  	<div v-show="active" class="query-data">
			<div class="name">
				<label for="name">Title</label>
			
				<input v-model="query.name" type="text" />
			</div>

			<div class="text">
				<label for="text">Query</label>
			
				<textarea v-model="query.text" />
			</div>

			<div class="type">
				<label for="type">Type</label>
			
				<QueryTypeSelector v-model="query.type" />
			</div>

			<button class="delete" @click="remove(query)">Delete</button>    
		</div>
	</div>
</template>

<style lang="less">
.query {
	.query-title {
		padding: 10px;
		background: #333;
		color: #fff;
		cursor: pointer;
		span {
			float: right;
		}
	}
	.query-data {
		position: relative;
		padding: 15px;
		border: 1px solid #333;
		> div {
			margin-bottom: 10px;		
		}
		label {
			display: block;
			font-weight: bold;
		}
		button.delete {
			position: absolute;
			top: 10px;
			right: 10px;
		}	
	}
}
</style>
