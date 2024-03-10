function showPopupForm() {
    document.getElementById("popup-form-container").style.display = "block";
  }
  
function hidePopupForm() {
    document.getElementById("popup-form-container").style.display = "none";
}

let icon = { 
    success: 
    '<span class="material-symbols-outlined">task_alt</span>', 
    danger: 
    '<span class="material-symbols-outlined">error</span>', 
    warning: 
    '<span class="material-symbols-outlined">warning</span>', 
    info: 
    '<span class="material-symbols-outlined">info</span>', 
};

function showToast( 
    message, 
    toastType, 
    duration = 5000) { 
    if ( 
        !Object.keys(icon).includes(toastType)) 
        toastType = "info"; 
  
    let box = document.createElement("div"); 
    box.classList.add( 
        "toast", `toast-${toastType}`); 
    box.innerHTML = ` <div class="toast-content-wrapper"> 
                      <div class="toast-icon"> 
                      ${icon[toastType]} 
                      </div> 
                      <div class="toast-message">${message}</div> 
                      <div class="toast-progress"></div> 
                      </div>`; 
    duration = duration || 5000; 
    box.querySelector(".toast-progress").style.animationDuration = 
            `${duration / 1000}s`; 
  
    let toastAlready =  
        document.body.querySelector(".toast"); 
    if (toastAlready) { 
        toastAlready.remove(); 
    } 
  
    document.body.appendChild(box)}; 

function getEmailDetails() {
    fullName =  document.getElementById('form-full-name').value;
    emailAddress = document.getElementById('form-email').value;
    message = document.getElementById('form-message').value;
    

    emailDetails = {
        subject: `SPONSOR REQUEST FROM ${emailAddress}`,
        body: `Full Name: ${fullName} <br>${message}`
    };
    return emailDetails;
}

function sendEmail(emailDetails) {
    Email.send({
        Host: "",
        Username: "",
        Password: "",
        To: "",
        From: "",
        Subject: emailDetails.subject,
        Body: emailDetails.body
    }).then(
        function (message) {
            if (message === "OK") {
                showToast("Thank you for reaching out. \nWe will respond shortly.", "success");
            } else {
                showToast("Something went wrong!! \nTry again later.", "danger");
            }
        }
    )
}

document.addEventListener("DOMContentLoaded", () => {
    document.getElementById('show-popup').addEventListener(
      'click', () => {
      showPopupForm();
          }
      );

    document.getElementById('close-popup').addEventListener(
        'click', () => {
        hidePopupForm();
            }
        );

    document.getElementById('sponsor-form-submit').addEventListener(
        'click', (e) => {
            e.preventDefault();
            emailDetails = getEmailDetails();
            sendEmail(emailDetails);
            hidePopupForm();
            document.getElementById('sponsor-form').reset();
            
        } 
    );
    }
);