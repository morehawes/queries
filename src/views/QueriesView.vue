<script setup>
import { useQueryStore } from '@/stores/queries';
import QueryList from '../components/QueryList.vue'
import QueryForm from '../components/QueryForm.vue'

let queryStore = useQueryStore();
</script>

<template>
	<div class="cols">
		<div class="col col-left">
			<textarea>
				{{ JSON.stringify(queryStore.queries) }}			
			</textarea>
			</div>
		<div class="col col-right">
			<QueryList />

			<QueryForm />
		</div>
	</div>
</template>

<style lang="less">
	.cols {
		display: flex;	
		.col {
			padding: 30px;
			background: #f5f5f5;					
			&.col-left {
				flex: 2;
			}
			&.col-right {
				flex: 1;
			}		
		}
	}
	
	textarea {
		width: 100%;
		height: 100%;		
	}
</style>