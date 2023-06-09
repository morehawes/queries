<script setup>
import { useQueryStore } from '@/stores/queries';

const queryStore = useQueryStore();

defineProps({
	'modelValue': String
});
</script>

<template>
	<select
		:value="modelValue"
		@input="$emit('update:modelValue', $event.target.value)"		
	>
		<option v-for="(value, key) in queryStore.getTypes" :value="key">{{ value }}</option>												
	</select>
</template>