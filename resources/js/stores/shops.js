import { defineStore } from 'pinia'

export const useShopStore = defineStore('shops', {
	//State
  state: () => {
    return {
    	shops: []
    }
  },

	//Getters
	getters: {},

  //Actions
  actions: {
	  fill() {
			let userShops = JSON.parse(localStorage.getItem('shops'));

		  if(userShops !== null) {
			  this.shops = userShops.shops;

			  return true;
		  }

			this.queries = fetch('http://127.0.0.1:8000/shops')
			    .then(response => response.json())
			    .then(shops => {
			        this.shops = shops;
			    })
			;
		},

//     remove(shop) {
// 			this.shops = this.shops.filter(function(s) {
// 				return shop.id !== s.id;
// 			})
//     },
//
//     add(shop) {
// 			if(query.name) {
// 				query.id = parseInt(this.queries.length) + 1;
//
// 				//Make non-reactive
// // 				this.queries.push(query);
//  				this.queries.push(Object.assign({}, query));
// 			}
//     },
  },
});
