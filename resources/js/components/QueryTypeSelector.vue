<script setup>
import { onMounted } from 'vue';
import { useQueryStore } from '@/stores/queries';
import shopValues from '../../json/shopValues.json';

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
		<option
		    v-for="shop in shopValues"
		    :value="shop.Value"
		    :disabled="! shop.Value"
		    :style="shop.Value ? 'background-image:url(resources/img/symbols/shop/' + shop.Value + '.svg);' : ''"
		>{{ shop.Value ? shop.Value : shop.Key }}</option>
	</select>
</template>

<style lang="less">
    select {
        width: 100%;
        background: #fff;
        border: 1px solid #333;
        option {
            background: #fff;
            border: 1px solid #333;
            &[disabled] {
                color: red;
            }
        }
    }
</style>
