/**
 *
 **/
var app = new Vue({
  el: '#app',
  data: {
    project: {
      "name" : "Tapestry",
      "short_description": "Build a visualization layer for the project dashboard",
      "start_date" : "2018-07-01",
      "target_date" : "2018-11-03",
      "budget" : "4950000",
      "spent" : "3456700",
      "projected_spend": "4740500",
      "weekly_effort_target": 400
    }
  },
  methods: {
    prettyDate: function (d) {
      return moment(d).format('l')
    },
    daysLeft: function (d) {
      return moment(d).diff(moment(), 'days')
    }
  }
  // ,
  // created () {
  //   fetch("project1.json")
  //     .then( response => response.json() )
  //     .then( json => {this.project = json; console.log(json)} );
  //   }
})
