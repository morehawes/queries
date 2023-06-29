<script setup>
import { randomColor } from 'randomcolor';
import { onMounted } from 'vue';
import shopValues from '../../json/shopValues.json';
import { useShopStore } from '@/stores/shops.js';

defineProps({
	'modelValue': String
});

let randomColors = randomColor({
    'count': shopValues.length
});

for(let i in shopValues) {
    shopValues[i].colour = randomColors[i];
}

onMounted(() => {
    console.log(shopValues);
})
</script>

<template>
	<div
	    v-for="(shop, key, index) in shopValues"
	    class="shop"
        :title="shop.description"
        :style="`border-color: ${shop.colour};`"
	>
	    <div
	        class="symbol"
	        :style="`background-image: url(resources/img/symbols/${shop.value}.svg);`"
	    ></div>

	    <div class="value">{{ shop.value }}</div>
	</div>
</template>

<style lang="less">

    .shop {
        flex-direction: row;
        width: 50px;
        height: 50px;
        max-width: 60px;
        max-height: 60px;
        margin: 10px;
        padding: 10px;
        text-align: center;
        background-color: white;
        border: 10px solid red;
        border-radius: 10px;
        .value {
            font-size: 10px;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        .symbol {
            width: 50px;
            height: 40px;
            margin: 0 auto;
            background-color: white;
            background-repeat: no-repeat;
            background-position: center center;
            background-size: 30px;
            img {
                width: 30px;
                height: 30px;
            }
        }
    }
</style>
