// script.js
function fetchStudent() {
    const studentId = document.getElementById("studentId").value;

    // Make an AJAX request to fetch student details from the database
    const xhr = new XMLHttpRequest();
    xhr.open("GET", `fetch_student.php?studentId=${studentId}`, true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                const studentInfo = JSON.parse(xhr.responseText);
                displayStudentInfo(studentInfo);
            } else {
                alert("Error fetching student information");
            }
        }
    };
    xhr.send();
}

function displayStudentInfo(studentInfo) {
    const studentInfoDiv = document.getElementById("studentInfo");
    if (studentInfo) {
        const { name, email, fees } = studentInfo;
        studentInfoDiv.innerHTML = `
            <h3>Student Information</h3>
            <p><strong>Name:</strong> ${name}</p>
            <p><strong>Email:</strong> ${email}</p>
            <p><strong>Fee Amount:</strong> ₹${fees}</p>
            <button onclick="window.location.href='MakePayment.html';">Make Payment</button>`;
    } else {
        studentInfoDiv.innerHTML = "<p>Student not found.</p>";
    }
}
