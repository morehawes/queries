<script setup>
import { useShopStore } from '@/stores/shops';
import ShopList from '../components/ShopList.vue'
import Map from '../components/Map.vue'

let shopStore = useShopStore();
</script>

<template>
    <header>
        <ShopList />
    </header>

	<div class="cols">
		<div class="col col-left">
            <Map />
			</div>
		<div class="col col-right">
			<textarea>
				{{ JSON.stringify(shopStore.shops).trim() }}
			</textarea>
		</div>
	</div>
</template>

<style lang="less">
    header {
        display: flex;
        width: 100%;
        overflow: scroll;
    }

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
