// when clicking + or ☰ button
$("button").click(function(){
  // when clicking + button, open header
     $("header").addClass("open");
     setTimeout(function(){
       $("header").addClass("removeTriangles");
       }, 1000);
});
