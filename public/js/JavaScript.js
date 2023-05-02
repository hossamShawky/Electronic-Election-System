// // dashboard
// google.charts.load('current', {'packages':['corechart']});
//       google.charts.setOnLoadCallback(drawChart1);

//       function drawChart1() {

//         var data = google.visualization.arrayToDataTable([
//           ['Voting', 'Hours per Day'],
//           ['Mahmoud',     2],
//           ['Khalid',      2],
//           ['Hossam',  2],
//           ['Omnia', 2],
//           ['Aya',    1]
//         ]);

//         var options = {
//           title: 'Candidates Activities'
//         };

//         var chart = new google.visualization.PieChart(document.getElementById('piechart'));

//         chart.draw(data, options);
//       }
//     // voters density  
//     google.charts.load("current", {packages:['corechart']});
//     google.charts.setOnLoadCallback(drawChart2);
//     function drawChart2() {
//       var data = google.visualization.arrayToDataTable([
//         ["Element", "Density", { role: "style" } ],
//         ["high education", 48.94, "#b87333"],
//         ["Intermediate education", 20.49, "silver"],
//         ["Illiterate voters", 19.30, "gold"]
//       ]);

//       var view = new google.visualization.DataView(data);
//       view.setColumns([0, 1,
//                        { calc: "stringify",
//                          sourceColumn: 1,
//                          type: "string",
//                          role: "annotation" },
//                        2]);

//       var options = {
//         title: "Density of the educational level",
//         width: 600,
//         height: 300,
//         bar: {groupWidth: "50%"},
//         legend: { position: "none" },
//       };
//       var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
//       chart.draw(view, options);
//   }
// // select one candidate
// var cards=document.querySelectorAll('.card');
// var voteBtn=document.querySelectorAll('.vote-btn');
// var counter=0;
// for(let i=0;i<voteBtn.length;i++){
//     voteBtn[i].addEventListener('click',function(){
//         if(cards[i].classList.contains('flipCard')){
//             cards[i].classList.remove('flipCard');
//             voteBtn[i].innerHTML="Vote";
//             counter--;
//         }
//         else if(counter<1){
//             cards[i].classList.add('flipCard');
//             counter++;
//             voteBtn[i].innerHTML="Delete the vote";
//         }
//         else{
//             alert('Only One Candidate')
//         }

//     });
// }
// // open vision message
// var visionBtn=document.querySelectorAll('.vision-btn');
// var visionMessage=document.querySelector('.vision-message');
// var votingPage=document.querySelector('.voting-page .opac');
// for(let i=0;i<visionBtn.length;i++){
//     visionBtn[i].addEventListener('click',function(){
//         visionMessage.style.display="block";
//         votingPage.style.opacity=".04";
//     });
// }
// var voterOpinionBtn=document.querySelectorAll('.v-opinion-btn');
// for(let i=0;i<voterOpinionBtn.length;i++){
//     voterOpinionBtn[i].addEventListener('click',function(){
//         event.preventDefault();
//     });
// }
// // close vision message
// var closevisionMessage=document.querySelector('.close-vision');
// closevisionMessage.addEventListener('click',function(){
//     event.preventDefault();
//     visionMessage.style.display="none";
//     votingPage.style.opacity="1";
// });
// // 