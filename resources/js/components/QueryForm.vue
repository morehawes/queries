<script setup>
import QueryData from '@/components/QueryData.vue';
import { useQueryStore } from '@/stores/queries';
import { ref } from 'vue';

const queryStore = useQueryStore();

let newQuery = {};

const handleAdd = function() {
	queryStore.add(newQuery);
	
	newQuery = {}
}
</script>

<template>
 	<div class="title">Add New</div>

	<form @submit.prevent="handleAdd">
		<QueryData :query="newQuery" />
		
		<input type="submit" value="Add">
	</form>
</template>

<style lang="less" scoped>
.title {
	padding: 10px;
	background: #999;
	color: #333;
}

form {
	position: relative;
	input[type="submit"] {
		position: absolute;
		bottom: 15px;
		right: 10px;
	}
}
</style>