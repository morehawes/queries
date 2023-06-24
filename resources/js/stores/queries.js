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

			this.queries = fetch('http://127.0.0.1:8000/queries')
			    .then(response => response.json())
			    .then(queries => {
			        this.queries = queries;
			    })
			;
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
