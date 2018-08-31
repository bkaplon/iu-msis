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
  computed: {
    target_date_pretty: function() {
      return this.displayDate(this.project.target_date)
    }
  },
  methods: {
    displayDate: function (d) {
      return new Date(d).toLocaleDateString( // FIX: Presumes UTC
        'en-US', {
          day : 'numeric',
          month : 'short',
          year : 'numeric'
      })
    }
  }
  // ,
  // created () {
  //   fetch("project1.json")
  //     .then( response => response.json() )
  //     .then( json => {this.project = json; console.log(json)} );
  //   }
})
