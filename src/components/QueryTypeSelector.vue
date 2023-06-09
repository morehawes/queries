<script setup>
import { useQueryStore } from '@/stores/queries';

const queryStore = useQueryStore();

defineProps({
	'modelValue': String
});
</script>

<template>
	<input :value="modelValue" @input="$emit('update:modelValue', $event.target.value)" type="text" />
</template>

<style lang="less">

</style>