/*
  fake data [[Date.now() - - 1000*60*3, 1.0], [Date.now(), 1.5]]
 */

(function (chart, $, undefined) {
  $(document).ready(function() {
    var d3El, $el;

    $el = $("#chart");
    d3El = d3.select("#chart");

    chart.update = function(data) {
      var selection, xScale, yScale, xValues, yValues, radius;
      
      radius = 10;

      xValues = yValues = [];
      data.forEach(function(d) {
        xValues.push(d[0]);
        yValues.push(d[1]);
      });

      xScale = d3.time.scale().domain([xValues[0], xValues[xValues.length - 1]]).range(radius, $el.height() - radius);
      yScale = d3.scale().linear().domain([Math.min.apply(null, yValues), Math.max.apply(null, yValues)]).range([radius, $el.height() - radius]);

      selection = d3El.selectAll(".orb");

      selection.data(data);

      selection.enter().append("circle").classed("orb").attr(function(d) {
        return {
          radius: radius,
          cx: xScale(d[0]),
          cy: yScale(d[1])
        }
      })

    }
  });
}(window.chart = window.chart || {}, jQuery));