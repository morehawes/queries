<script setup>

import { useQueryStore } from '@/stores/queries';
import {reactive} from 'vue';

const queries = useQueryStore();

const newQuery = reactive({});

const handleAdd = function() {
	queries.add(newQuery);
}
</script>

<template>
	<form @submit.prevent="handleAdd">
		<table border="1">
			<tr class="query">
				<td class="name">
					<input 
						type="text"
						placeholder="Name"
						v-model="newQuery.name"
					/>
				</td>
				<td class="text">
					<textarea 
						placeholder="Query"
						v-model="newQuery.text"
					/>
				</td>
				<td class="type">
					<select 
						type="text"
						v-model="newQuery.type"
					>
						<option value="Type1">Type 1</option>
						<option value="Type2">Type 2</option>
						<option value="Type3">Type 3</option>												
					</select>
				</td>
				<td colspan="2" class="add">
					<input type="submit" value="Add">
				</td>    
			</tr>
		</table>
	</form>

</template>

<style>
	table td.name {
		width: 140px
	}
	table td.text {
		width: 140px
	}
	table td.type {
		width: 140px
	}
	table td.edit,
	table td.delete {
		width: 50px
	}
	table td.add {
		width: 106px;
	}	
</style>