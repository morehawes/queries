<script setup>
import QueryTypeSelector from './QueryTypeSelector.vue';

const props = defineProps({
	'query': Object
});
</script>

<template>
	<div class="query-data">
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
	</div>
</template>


<style lang="less" scoped>
.query-data {
	padding: 15px;
	border: 1px solid #333;
	label {
		margin-top: 10px;
		display: block;
		font-weight: bold;
	}
	input[type="text"] {
		width: 100%;
	}
	textarea {
		height: 60px;
	}	
}
</style>
