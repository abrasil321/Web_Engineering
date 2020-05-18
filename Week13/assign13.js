

function theSubmit(){
    var x1 = document.getElementById("performance").value;
    var x2 = document.getElementById("first_name").value;
    var x3 = document.getElementById("last_name").value;
    var x4 = document.getElementById("student_id").value;
    var x5 = document.getElementById("first_name_2").value;
    var x6 = document.getElementById("last_name_2").value;
    var x7 = document.getElementById("student_id_2").value;
    var x8 = document.getElementById("skill").value;
    var x9 = document.getElementById("instrument").value;
    var x10 = document.getElementById("location").value;
    var x11 = document.getElementById("room").value;
    var x12 = document.getElementById("time_slot").value;

    if(x1 == "")
    {
        return false;
    }
    else if(x2 == "")
    {
        return false;
    }
    else if(x3 == "")
    {
        return false;
    }
    else if(x4 == "")
    {
        return false;
    }
    else if(x1 == "Duet")
    {
        if(x5 == "")
        {
            return false;
        }
        else if(x6 == "")
        {
            return false;
        }
        else if(x7 == "")
        {
            return false;
        }
    }
    else if(x8 == "")
    {
        return false;
    }
    else if(x9 == "")
    {
        return false;
    }
    else if(x10 == "")
    {
        return false;
    }
    else if(x11 == "")
    {
        return false;
    }
    else if(x12 == "")
    {
        return false;
    }
    else
    {
        return true;
    }
}

function getFocus() {
    document.getElementById("performance").focus();
}

