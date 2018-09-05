/**
 *
 **/
var dashboardChartsApp = new Vue({
  el: '#topCharts',
  data: { // should create an empty version of the schema here, as a best practice
      name : "Tapestry",
      short_description: "Build a visualization layer for the project dashboard",
      start_date : "2018-07-01",
      target_date : "2018-11-03",
      budget : "4950000",
      spent : "3456700",
      projected_spend: "4740500",
      weekly_effort_target: 400,
      tasks: null
  },
  computed: {
    target_date_pretty: function () {
      return this.prettyDate(this.target_date)
    },
    days_left: function () {
      return moment(this.target_date).diff(moment(), 'days')
    }
  },
  methods: {
    prettyDate: function (d) {
      return moment(d).format('l')
    }
  }
  // ,
  // beforeCreate () {
  //   console.log('beforeCreate test')
  // }
  // ,
  // created () {
  //   const self = this;
  //   fetch("https://raw.githubusercontent.com/tag/iu-msis/dev/public/project1.json")
  //     .then( response => response.json() )
  //     .then( json => {
  //       //this.project = json;
  //       console.log(json)
  //       // TODO: foreach property, overwrite
  //       }
  //     );
  //   }
})
