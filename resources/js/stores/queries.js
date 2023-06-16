import { defineStore } from 'pinia'

export const useQueryStore = defineStore('queries', {
	//State
  state: () => {
    return { 
    	queries: []
    }
  },

	//Getters
	getters: {
		getTypes() {
			return {
				'food': 'Food',
				'retail': 'Retail',				
			}
		}
	},
  
  //Actions
  actions: {
	  fill() {
			let userQueries = JSON.parse(localStorage.getItem('queries'));

		  if(userQueries !== null) {
			  this.queries = userQueries.queries;

			  return true;
		  }

			this.queries = [{
				'id': '1',
				'name': 'Meat Shops',
				'text': 'SELECT * FROM shops WHERE shop_type = "meat"',
				'type': 'food'
			},
			{
				'id': '2',
				'name': 'Pizza Shop',
				'text': 'SELECT * FROM shops WHERE shop_type = "pizza"',
				'type': 'food'
			},
			{
				'id': '3',
				'name': 'Hardware Shops',
				'text': 'SELECT * FROM shops WHERE shop_type = "house"',
				'type': 'retail'
			}];
		},
    
    remove(query) {
			this.queries = this.queries.filter(function(q) {
				return query.id !== q.id;
			})
    },

    add(query) {
			if(query.name) {
				query.id = parseInt(this.queries.length) + 1;
			
				//Make non-reactive
// 				this.queries.push(query);
 				this.queries.push(Object.assign({}, query));
			}
    },    
  },
});