function create_style1()
{
    var tb1 = document.getElementById('tb1')
    var numcol = document.getElementById('numcol').value
    var numrow = document.getElementById('numrow').value
    var table = "<table>"
    for(var i=0; i< numrow; i++)
    {
        table += "<tr>"
        for (var j=0; j< numcol; j++)
        {
            table +="<td>"+i+j+"</td>"
        }
        table += "</tr>"
    }
    table += "</table>"
    tb1.innerHTML = table
}
function create_style2()
{
    var tb2 = document.getElementById('tb2')
    var numcol = document.getElementById('numcol').value
    var numrow = document.getElementById('numrow').value
    var table = "<table>"
    for(var i=0; i< numrow; i++)
    {
        table += "<tr>"
        for(var j=0; j<numcol; j++)
        {
            if(j%2==0)
            {
                table+= "<td style='color:red'>"+i+j+"</td>"
            }
            else{
                table+= "<td style='color:black'>"+i+j+"</td>"
            }
            
        }
        table += "</tr>"
    }
    table += "</table>"
    tb2.innerHTML = table
}

function create_style3()
{
    var tb3 = document.getElementById('tb3')
    var numcol = document.getElementById('numcol').value
    var numrow = document.getElementById('numrow').value
    var table = "<table>"
    for(var i=0; i< numrow; i++)
    {
        table += "<tr>"
        for(var j=0; j<numcol; j++)
        {
            if(i===j)
            {

                table+= "<td style='color:red'>"+i+j+"</td>"
            }
            else{
                table+= "<td style='color:black'>"+i+j+"</td>"
            }
            
        }
        table += "</tr>"
    }
    table += "</table>"
    tb3.innerHTML = table
}

function clears()
{
    document.getElementById('tb1').innerHTML =""
    document.getElementById('tb2').innerHTML =""
    document.getElementById('tb3').innerHTML =""
}
