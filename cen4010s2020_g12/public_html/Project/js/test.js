function displayTable() {
    var tableArea = document.getElementById("output"),
        tableChoice = document.getElementById("tablechoose"),
        tableName = tableChoice.options[tableChoice.selectedIndex].value,
        displayContent,
        output,
        i,
        j;
    
    tableArea.innerHTML = tableName;
    
    jQuery.ajax({
        type: "POST",
        url: '../js/query.php',
        dataType: 'json',
        async: false,
        data: {queryText: "SELECT * FROM " + tableName},

        success: function (obj, textstatus) {
            if (!obj.hasOwnProperty("error")) {    //no error property == successful
                displayContent = obj.result;
            } else {                                //this is an error. errors are bad.
                displayContent = obj.error;
            }
        },
        
        error: function (jqXHR, exception) {
            tableArea.innerHTML = "Exception from query.php: " + exception;
        }
    });
    
    
    
    displayContent = JSON.parse(displayContent);    //convert from string to array of objects
    
    output = "<table class=\"table table-bordered m-3\">";         //bootstrap table format
    
    output += "<thead class=\"thead-light\"><tr>";                        //this block for the table head
    var colNames = Object.keys(displayContent[0]);  //extract keys from first object; these are field names
    for (i = 0; i < colNames.length; i += 1) {     //loop through column names, put in table headers
        output += "<th scope=\"col\">" + colNames[i] + "</th>";
    }
    output += "</tr></thead>";
    
    output += "<tbody>";                            //this block for rest of table
    for (i = 0; i < displayContent.length; i += 1) {   //loop through each item of array (each is a row)
        output += "<tr>";
        var row = displayContent[i];
        var values = Object.values(row);            //Object.values and Object.keys supported in all browsers except IE8, iirc
        for (j = 0; j < values.length; j += 1) {   //loop through each item of object (each is a data entry)
            output += "<td>" + values[j] + "</td>";
        }
        output += "</tr>";
    }
    
    output += "</tbody></table>";
    
    tableArea.innerHTML = output;                   //output to html
}

document.getElementById("view").addEventListener("click", displayTable);