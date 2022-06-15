document.getElementById("submit").addEventListener('click', function(e) {
    e.preventDefault();
    let fullName = document.getElementById("fullname").value;
    let grade = document.getElementById("grade").value;

    const frmAddNumbers = new FormData();  
    frmAddNumbers.append('fullName', fullName);
    frmAddNumbers.append('grade', grade);

    if(fullName != null && grade != null) {
        fetch('add_student.php',  {
            method: 'POST', 
            headers: {},
            body: frmAddNumbers
        })
        .then(response => response.json())
        .then(data => {
            alert("Submitted");
            callAjax();
        })
        .catch((error) => {
            console.log(error);
        });
    } else {
        alert('Please fill in the form');
    }
});

function callAjax() {
    document.getElementById("list").innerHTML = "";
    var ul = document.getElementById("list");
    fetch('get_list.php',  {
        method: 'get', 
        headers: {
          'Content-Type': 'application/json',
        },
      })
      .then(response => response.json())
      .then(data => {
        for (let i = 0; i < data.length; i++) {
            insertli(ul,data[i].fullName, data[i].grade);
        }
      })
      .catch((error) => {
        console.error('Error', error);
      });
}

function insertli(ul,data, data2) {
    var li = document.createElement("li");
    li.appendChild(document.createTextNode(data));
    li.appendChild(document.createTextNode(" ("+data2+")"));
    ul.appendChild(li);
}
