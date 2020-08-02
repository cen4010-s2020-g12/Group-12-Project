var s = document.createElement("script"); 
s.src = "../jquery-3.5.1.js"; 
document.head.appendChild(s);

function tplawesome(e,t){var res = e;for(var n=0;n<t.length;n++){ res = res.replace(/\{\{(.*?)\}\}/g,function(e,r){return t[n][r]})}return res}
var gapi;
$(function() {
    $("form").on("submit", function(e) {
       e.preventDefault();
       // prepare the request
       var request = gapi.client.youtube.search.list({
            part: "snippet",
            type: "video",
            q: encodeURIComponent($("#search").val()).replace(/%20/g, "+"),
            maxResults: 10,
            order: "viewCount",
            publishedAfter: "2015-01-01T00:00:00Z"
       }); 
       // execute the request
       request.execute(function(response) {
          var results = response.result;
          $("#results").html("");
          $.each(results.items, function(index, item) {
            $.get("item.html", function(data) {
		var x = tplawesome(data, [{"title":item.snippet.title, "videoid":item.id.videoId}]);
		$("#results").append(x);
            });
          });
         // resetVideoHeight();
       });
    });
   // $(window).on("resize", resetVideoHeight);
});

//function resetVideoHeight() {
  //  $(".video").css("height", $("#results").width() * 9/16);
//}

function init() {
    gapi.client.setApiKey("AIzaSyA3qan2_5tzQLpogugqcALJ1CoTLILksIk");
    gapi.client.load("youtube", "v3", function() {
        // yt api is ready
    });
}

