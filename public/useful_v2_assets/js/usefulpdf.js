//form submission
let cta = document.querySelector('.cta');
let email = document.querySelector('.email');
let error = document.querySelector('.error');
let success = document.querySelector('.success');
let signup = document.querySelector('.signup');
cta.addEventListener('click', (event) => {
    event.preventDefault();

    if(this.email.value === null || this.email.value === "") {
        error.classList.add('errorAnim');
    } else{
        let fetchData = {
            method: 'POST',
            body: JSON.stringify({email: this.email.value, js: true}),
            headers: {"Content-Type": "application/json"}
        }

        fetch('/subscribe', fetchData)
            .then(res => {
                if(res.ok){
                    signup.classList.add('fadeout');
                    setTimeout(() => {
                        success.classList.add('fadein');
                        signup.style.display = 'none';
                    }, 1000)
                } else{
                    error.classList.add('errorAnim');
                }
            })
    }
});

const realFileBtn = document.getElementById("real-file");
const customBtn = document.getElementById('custom-button');
const customText = document.getElementById('custom-text');

customBtn.addEventListener('click', function(){
    realFileBtn.click();
});

realFileBtn.addEventListener('change', function(){
    if(realFileBtn.value){
        customText.innerHTML = realFileBtn.value.match(/[\/\\]([\w\d\s\.\-\(\)]+)$/)[1];
    }
});

// Gsap animations
//gsap.fromTo('.hero-clipped', {scaleX: 0}, {duration: 1, scaleX: 1});
gsap.fromTo('.loho', {x: -200, opacity: 0}, {duration: 1, delay: .5, x: 0, opacity: 1});
gsap.fromTo('.comingsoon-textbox', {yPercent: 90, opacity: 0}, {duration: 1, delay: 1.3, yPercent: -5, opacity: 1});