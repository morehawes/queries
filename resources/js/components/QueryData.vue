<script setup>
import QueryTypeSelector from './QueryTypeSelector.vue';

const props = defineProps({
	'query': Object
});
</script>

<template>
	<div class="query-data">
		<div class="title">
			<label for="title">Title</label>

			<input v-model="query.title" type="text" />
		</div>

		<div class="type">
			<label for="type">Type</label>

			<QueryTypeSelector v-model="query.type" />
		</div>

		<div class="query">
			<label for="query">Query</label>

			<textarea v-model="query.query" />
		</div>

		<div class="icon">
			<label for="icon">Icon</label>

			<input v-model="query.icon" type="text" />
		</div>

		<div class="colour">
			<label for="colour">Colour</label>

			<input v-model="query.colour" type="text" />
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
