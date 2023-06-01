import { defineStore } from 'pinia'

export const useQueryStore = defineStore('queries', {
  state: () => {
    return { 
    	queries: [
    		{
    			'id': 1,
					'name': 'Meat Shops',
					'text': 'SELECT * FROM shops WHERE shop_type = "meat"',
					'type': 'food'
				},
    		{
    			'id': 2,
					'name': 'Pizza Shop',
					'text': 'SELECT * FROM shops WHERE shop_type = "pizza"',
					'type': 'food'
				},
				{
    			'id': 3,				
					'name': 'Hardware Shops',
					'text': 'SELECT * FROM shops WHERE shop_type = "house"',
					'type': 'hardware'
				},				
    	]
    }
  },
  actions: {
    delete(id) {
			this.queries = this.queries.filter(function(query) {
				return id !== query.id;
			})
    },
    add(query) {
    	this.queries.push(query);
    }
  },
})