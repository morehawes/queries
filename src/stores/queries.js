import { defineStore } from 'pinia'

export const useQueryStore = defineStore('queries', {
  state: () => {
    return { 
    	queries: [
    		{
					'name': 'Meat Shops',
					'text': 'SELECT * FROM shops WHERE shop_type = "meat"',
					'type': 'food'
				},
    		{
					'name': 'Pizza Shop',
					'text': 'SELECT * FROM shops WHERE shop_type = "pizza"',
					'type': 'food'
				},
				{
					'name': 'Hardware Shops',
					'text': 'SELECT * FROM shops WHERE shop_type = "house"',
					'type': 'hardware'
				},				
    	]
    }
  },
  // could also be defined as
  // state: () => ({ count: 0 })
  actions: {
//     increment() {
//       this.count++
//     },
  },
})