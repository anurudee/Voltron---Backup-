<html>
<head>
<script src="chrome-extension://ohkeehjepccedbdpohnbapepongppfcj/whatfix.com/editorLoaded.js" type="text/javascript"></script>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta name="robots" content="noindex, nofollow">
<meta name="googlebot" content="noindex, nofollow">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="text/javascript" src="/js/lib/dummy.js"></script>
<link rel="stylesheet" type="text/css" href="/css/result-light.css">
<style type="text/css">
* {
    color: #2b2b2b;
    font-family: "Roboto Condensed";
}

th {
    text-align: left;
    color: #4679bd;
}

tbody > tr:nth-of-type(even) {
    background-color: #daeaff;
}

button {
    cursor: pointer;
    margin-top: 1rem;
}

button#excel_dwn {
    border-radius: 5px;
    border: none;
    padding: 10px;
    background: darkgrey;
}

button#excel_dwn:hover {
    background: #4CAF50;
}
  </style>
  <!-- TODO: Missing CoffeeScript 2 -->
<script type="text/javascript">
    window.onload=function(){
      
function download_csv(csv, filename) {
    var csvFile;
    var downloadLink;

    // CSV FILE
    csvFile = new Blob([csv], {type: "text/csv"});

    // Download link
    downloadLink = document.createElement("a");

    // File name
    downloadLink.download = filename;

    // We have to create a link to the file
    downloadLink.href = window.URL.createObjectURL(csvFile);

    // Make sure that the link is not displayed
    downloadLink.style.display = "none";

    // Add the link to your DOM
    document.body.appendChild(downloadLink);

    // Lanzamos
    downloadLink.click();
}

function export_table_to_csv(html, filename) {
	var csv = [];
	var rows = document.querySelectorAll("table tr");
	
    for (var i = 0; i < rows.length; i++) {
		var row = [], cols = rows[i].querySelectorAll("td, th");
		
        for (var j = 0; j < cols.length; j++) 
            row.push(cols[j].innerText);
        
		csv.push(row.join(","));		
	}

    // Download CSV
    download_csv(csv.join("\n"), filename);
}

document.querySelector("button").addEventListener("click", function () {
    var html = document.querySelector("table").outerHTML;
	export_table_to_csv(html, "AMP_Detractor_Report.csv");
});


    }

</script>
</head>
<body>
<?php
$con = mysqli_connect('localhost','anurudee','ironport','ciscoamp_db');
$query = "SELECT * , TIME_FORMAT(TIMEDIFF(dateposted,strtime),'%H:%i:%s') AS comp FROM form WHERE cusen ='Unsatisfied' OR cusen='Very_Unsatisfied' AND us_name !='' ORDER BY id DESC";
$result = mysqli_query ($con, $query);
?>
<table hidden>
<thead>
<tr>
<th>SR.NO</th> 
<th>SR Number</th>
<th>Created Date</th>
<th>Voltron ID</th>
<th>Sentiments</th>
<th>Category</th>
<th>Dril Down 1</th>
<th>Dril Down 2</th>
<th>Dril Down 3</th>
<th>Dril Down 4</th>
<th>Dril Down 5</th>
<th>Dril Down 6</th>
<th>Dril Down 7</th>
<th>Notes</th>
<th>Avg.VTR</th>
</tr>
</thead>
<tbody>
<?php
while ($row = mysqli_fetch_assoc($result)) {
?>
<tr>
<td><?php echo $row['id'];  ?></td>
<td><a class="c3mcon" style="text-decoration:none;" href="http://mwz.cisco.com/<?php echo $row['srnum']; ?>" target="_blank"><?php echo $row['srnum']; ?></a></td>
<td><?php echo $row['dateposted']; ?></td>
<td><?php echo "VT"; echo $row['us_name']; echo "". date("md") . ""; echo $row['id']; ?></td>
<td><?php echo $row['cusen']; ?></td>
<td><?php echo $row['test_text']; ?></td>
<td><?php echo $row['test_text1']; ?></td>
<td><?php echo $row['test_text2']; ?></td>
<td><?php echo $row['test_text3']; ?></td>
<td><?php echo $row['test_text4']; ?></td>
<td><?php echo $row['test_text5']; ?></td>
<td><?php echo $row['test_text6']; ?></td>
<td><?php echo $row['test_text7']; ?></td>
<td><?php echo $row['notes']; ?></td>
<td><?php echo $row['comp']; ?></td>
	</tr>
</tbody>
<?php
};
?>
</table>
<button id="excel_dwn"><img src="https://voltron.cisco.com/amp/img/excel.png" alt="Download" height="30" width="30"></button>
  <script>
    // tell the embed parent frame the height of the content
    if (window.parent && window.parent.parent){
      window.parent.parent.postMessage(["resultsFrame", {
        height: document.body.getBoundingClientRect().height,
        slug: "j1jm2tjx"
      }], "*")
    }
  </script>
<a download="AMP_Detractor_Report.csv" href="blob:https://fiddle.jshell.net/80c9d0a8-2ab7-420f-8eff-a510703ae728" style="display: none;"></a>
</body>
</html>