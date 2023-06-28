<script setup>
import { onMounted } from 'vue';
import shopValues from '../../json/shopValues.json';

defineProps({
	'modelValue': String
});

onMounted(() => {
    console.log(shopValues);
})
</script>

<template>
	<div v-for="shop in shopValues" class="shop">
	    <div class="symbol">
	        <img :src="`resources/img/symbols/${shop.value}.svg`">
	    </div>

	    <div class="value">{{ shop.value }}</div>
	</div>
</template>

<style lang="less">
    .shop {
        border: 1px solid red;
    }
</style>
