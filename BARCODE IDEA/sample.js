function submitAttendance() {
    const barcode = document.getElementById("barcode").value;
    if (barcode !== "") {
      // Submit barcode to server for attendance tracking
      // Display success or error message based on server response
      document.getElementById("status").innerHTML = "Attendance recorded for barcode: " + barcode;
    } else {
      document.getElementById("status").innerHTML = "Please scan a valid barcode";
    }
    // Clear input field after submission
    document.getElementById("barcode").value = "";
  }
  