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



function showPopupForm() {
    document.getElementById("popup-form-container").style.display = "block";
  }
  
function hidePopupForm() {
    document.getElementById("popup-form-container").style.display = "none";
}



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

function getEmailBody(formData) {
    fullName =  formData.get('full_name');
    emailAddress = formData.get('email');
    message = formData.get('message');
    

    emailDetails = {
        subject: `SPONSOR REQUEST FROM ${emailAddress}`,
        body: `Full Name: ${fullName} \n${message}`
    };
    return emailDetails;
}

async function handleSendEmail(event) {
    event.preventDefault();
    hidePopupForm();
    
    let form = event.target;
    var emailBody = getEmailBody(new FormData(form));
    console.log(emailBody);

    fetch(event.target.action, {
      method: form.method,
      body: JSON.stringify(emailBody),
      headers: {
          'Accept': 'application/json'
      }
    }).then(response => {
      if (response.ok) {
        showToast("Message sent successfully!", "success");
        form.reset()
      } else {
        response.json().then(data => {
            if (data.errors && data.errors.length > 0) {
                data.errors.forEach(error => {
                    console.log(error.message);
                    showToast(error.message, "danger");
                });
            } else {
                showToast("Failed to send message! Please try again.", "danger")
            }
        })
      }
    }).catch(error => {
        console.log(error)
      showToast("Failed to send message! Please try again.", "danger");
    });
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

        document.getElementById('sponsor-form').addEventListener(
        'submit', handleSendEmail 
    );
    }
);